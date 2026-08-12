<?php

namespace XeroAPI\XeroPHP;

use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

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
}
