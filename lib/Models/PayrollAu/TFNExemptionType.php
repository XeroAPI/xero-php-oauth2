<?php
/**
 * TFNExemptionType
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll AU API
 *
 * This is the Xero Payroll API for orgs in Australia region.
 *
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\PayrollAu;
use \XeroAPI\XeroPHP\PayrollAuObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * TFNExemptionType Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TFNExemptionType
{
    /**
     * Possible values of this enum
     */
    const NOTQUOTED = 'NOTQUOTED';
    const PENDING = 'PENDING';
    const PENSIONER = 'PENSIONER';
    const UNDER18 = 'UNDER18';
    const UNKNOWN_DEFAULT_OPEN_API = 'unknown_default_open_api';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NOTQUOTED,
            self::PENDING,
            self::PENSIONER,
            self::UNDER18,
            self::UNKNOWN_DEFAULT_OPEN_API,
        ];
    }
}


