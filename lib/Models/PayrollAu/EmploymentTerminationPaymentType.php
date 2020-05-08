<?php
/**
 * EmploymentTerminationPaymentType
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll AU
 *
 * This is the Xero Payroll API for orgs in Australia region.
 *
 * OpenAPI spec version: 2.1.2
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\PayrollAu;
use \XeroAPI\XeroPHP\PayrollAuObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * EmploymentTerminationPaymentType Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EmploymentTerminationPaymentType
{
    /**
     * Possible values of this enum
     */
    const O = 'O';
    const R = 'R';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::O,
            self::R,
        ];
    }
}


