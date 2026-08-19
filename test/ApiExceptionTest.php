<?php

namespace XeroAPI\XeroPHP;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use XeroAPI\XeroPHP\Api\IdentityApi;

class ApiExceptionTest extends TestCase
{
    public function testCreatesExceptionWhenRequestHasNoResponse()
    {
        $request = new Request(
            'GET',
            'https://user:password@example.test/resource?access_token=secret%0d%0aforged#fragment-secret'
        );
        $failure = new ConnectException('Connection failed', $request);

        $exception = ApiException::fromRequestException($failure);

        $this->assertSame(0, $exception->getCode());
        $this->assertSame([], $exception->getResponseHeaders());
        $this->assertNull($exception->getResponseBody());
        $this->assertStringContainsString('https://example.test', $exception->getMessage());
        $this->assertStringNotContainsString('password', $exception->getMessage());
        $this->assertStringNotContainsString('access_token', $exception->getMessage());
        $this->assertStringNotContainsString('secret', $exception->getMessage());
        $this->assertStringNotContainsString('forged', $exception->getMessage());
    }

    public function testPreservesAvailableResponseDetails()
    {
        $request = new Request('GET', 'https://example.test/resource');
        $response = new Response(503, ['Retry-After' => '30'], 'Unavailable');
        $failure = new RequestException('Service unavailable', $request, $response);

        $exception = ApiException::fromRequestException($failure);

        $this->assertSame(503, $exception->getCode());
        $this->assertSame(['30'], $exception->getResponseHeaders()['Retry-After']);
        $this->assertSame('Unavailable', (string) $exception->getResponseBody());
    }

    /**
     * A response-bearing failure must still name the endpoint that failed.
     *
     * Reporting only the origin makes every failure on a host look identical
     * and diverges from the synchronous path, which reports the full request
     * URI.
     */
    public function testKeepsTheFailingPathWhenAResponseIsPresent()
    {
        $request = new Request('GET', 'https://api.xero.com/api.xro/2.0/Invoices/INV-001');
        $response = new Response(404, [], 'Not Found');
        $failure = new RequestException('Not Found', $request, $response);

        $exception = ApiException::fromRequestException($failure);

        $this->assertSame(
            '[404] Error connecting to the API (https://api.xero.com/api.xro/2.0/Invoices/INV-001)',
            $exception->getMessage()
        );
    }

    /**
     * Keeping the path must not put credentials back into the message.
     */
    public function testStripsCredentialsFromTheMessageWhenAResponseIsPresent()
    {
        $request = new Request(
            'GET',
            'https://user:password@api.xero.com/api.xro/2.0/Invoices?access_token=secret#fragment'
        );
        $response = new Response(404, [], 'Not Found');
        $failure = new RequestException('Not Found', $request, $response);

        $exception = ApiException::fromRequestException($failure);

        $this->assertStringContainsString('/api.xro/2.0/Invoices', $exception->getMessage());
        $this->assertStringNotContainsString('password', $exception->getMessage());
        $this->assertStringNotContainsString('access_token', $exception->getMessage());
        $this->assertStringNotContainsString('secret', $exception->getMessage());
        $this->assertStringNotContainsString('fragment', $exception->getMessage());
    }

    /**
     * A transport failure carries no status code and no body, so the original
     * exception is the only description of what went wrong.
     */
    public function testKeepsTheOriginatingExceptionAsPrevious()
    {
        $failure = new ConnectException(
            'cURL error 28: Operation timed out after 30001 milliseconds',
            new Request('GET', 'https://api.xero.com/Connections')
        );

        $exception = ApiException::fromRequestException($failure);

        $this->assertSame($failure, $exception->getPrevious());
        $this->assertSame(
            'cURL error 28: Operation timed out after 30001 milliseconds',
            $exception->getPrevious()->getMessage()
        );
    }

    /**
     * Drives a real rejected promise through the generated async handler.
     *
     * Asserting on the static factory alone cannot show that the handler
     * rejects: a handler that returned instead of throwing would resolve the
     * promise with null and still pass. wait() re-throws a rejection, so this
     * fails if the rejection is ever swallowed.
     */
    public function testAsyncConnectionFailureRejectsWithApiException()
    {
        $failure = new ConnectException(
            'cURL error 7: Failed to connect',
            new Request('GET', 'https://api.xero.com/Connections')
        );
        $api = $this->identityApiReturning($failure);

        try {
            $api->getConnectionsAsync()->wait();
            $this->fail('Expected the promise to reject with an ApiException.');
        } catch (ApiException $exception) {
            $this->assertSame(0, $exception->getCode());
            $this->assertSame($failure, $exception->getPrevious());
            $this->assertStringContainsString('https://api.xero.com', $exception->getMessage());
        }
    }

    /**
     * Drives a real async HTTP error through the generated async handler.
     */
    public function testAsyncHttpErrorRejectsWithApiExceptionNamingTheEndpoint()
    {
        $api = $this->identityApiReturning(
            new Response(404, ['X-Request-Id' => 'req-123'], '{"Title":"Not Found"}')
        );

        try {
            $api->getConnectionsAsync()->wait();
            $this->fail('Expected the promise to reject with an ApiException.');
        } catch (ApiException $exception) {
            $this->assertSame(404, $exception->getCode());
            $this->assertStringContainsString('/Connections', $exception->getMessage());
            $this->assertSame(['req-123'], $exception->getResponseHeaders()['X-Request-Id']);
            $this->assertInstanceOf(RequestException::class, $exception->getPrevious());
        }
    }

    /**
     * Builds an IdentityApi whose HTTP client always yields $result.
     *
     * @param mixed $result Response or exception for the mock handler queue
     *
     * @return IdentityApi
     */
    private function identityApiReturning($result)
    {
        $client = new Client([
            'handler' => HandlerStack::create(new MockHandler([$result])),
        ]);

        return new IdentityApi($client, new Configuration());
    }
}
