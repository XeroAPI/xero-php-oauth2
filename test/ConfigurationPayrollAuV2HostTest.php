<?php
/**
 * ConfigurationPayrollAuV2HostTest
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @link     https://github.com/XeroAPI/xero-php-oauth2
 */

namespace XeroAPI\XeroPHP;

use PHPUnit\Framework\TestCase;

/**
 * ConfigurationPayrollAuV2HostTest Class Doc Comment
 *
 * Regression guard for the hand-added PayrollAuV2 host on Configuration.
 *
 * Configuration.php is emitted by OpenAPI Generator and carries a "Do not edit
 * the class manually" header, but the mustache template behind its host list
 * has no PayrollAuV2 entry. Regenerating the file therefore deletes
 * $hostPayrollAuV2, setHostPayrollAuV2() and getHostPayrollAuV2(), and every
 * PayrollAuV2Api::*Request() call site fatals with "Call to undefined method".
 * These tests fail loudly if that happens, so the loss is caught here instead
 * of at runtime in a consumer application.
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 */
class ConfigurationPayrollAuV2HostTest extends TestCase
{
    /**
     * The accessors PayrollAuV2Api depends on must exist.
     *
     * @return void
     */
    public function testPayrollAuV2HostAccessorsExist()
    {
        $this->assertTrue(
            method_exists(Configuration::class, 'getHostPayrollAuV2'),
            'Configuration::getHostPayrollAuV2() is missing. It is a hand edit'
            . ' to a generated file and was most likely dropped by a codegen'
            . ' run; the mustache template must add a PayrollAuV2 host.'
        );
        $this->assertTrue(
            method_exists(Configuration::class, 'setHostPayrollAuV2'),
            'Configuration::setHostPayrollAuV2() is missing. It is a hand edit'
            . ' to a generated file and was most likely dropped by a codegen'
            . ' run; the mustache template must add a PayrollAuV2 host.'
        );
    }

    /**
     * The default host must point at the Payroll AU v2.0 base URL.
     *
     * @return void
     */
    public function testDefaultPayrollAuV2Host()
    {
        $config = new Configuration();

        $this->assertSame(
            'https://api.xero.com/payroll.xro/2.0',
            $config->getHostPayrollAuV2()
        );
    }

    /**
     * The setter must round-trip and stay fluent, matching the sibling hosts.
     *
     * @return void
     */
    public function testPayrollAuV2HostIsSettable()
    {
        $config = new Configuration();

        $returned = $config->setHostPayrollAuV2('https://example.com/payroll.xro/2.0');

        $this->assertSame($config, $returned);
        $this->assertSame(
            'https://example.com/payroll.xro/2.0',
            $config->getHostPayrollAuV2()
        );
    }

    /**
     * The Payroll AU v1 host must not be reused for v2 requests.
     *
     * @return void
     */
    public function testPayrollAuV2HostIsDistinctFromPayrollAuV1()
    {
        $config = new Configuration();

        $this->assertNotSame(
            $config->getHostPayrollAu(),
            $config->getHostPayrollAuV2()
        );
    }
}
