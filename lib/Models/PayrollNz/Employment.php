<?php
/**
 * Employment
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll NZ
 *
 * This is the Xero Payroll API for orgs in the NZ region.
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

namespace XeroAPI\XeroPHP\Models\PayrollNz;

use \ArrayAccess;
use \XeroAPI\XeroPHP\PayrollNzObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * Employment Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Employment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Employment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payroll_calendar_id' => 'string',
        'pay_run_calendar_id' => 'string',
        'start_date' => '\DateTime',
        'engagement_type' => 'string',
        'fixed_term_end_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'payroll_calendar_id' => 'uuid',
        'pay_run_calendar_id' => 'uuid',
        'start_date' => 'date',
        'engagement_type' => null,
        'fixed_term_end_date' => 'date'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'payroll_calendar_id' => 'payrollCalendarID',
        'pay_run_calendar_id' => 'payRunCalendarID',
        'start_date' => 'startDate',
        'engagement_type' => 'engagementType',
        'fixed_term_end_date' => 'fixedTermEndDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payroll_calendar_id' => 'setPayrollCalendarId',
        'pay_run_calendar_id' => 'setPayRunCalendarId',
        'start_date' => 'setStartDate',
        'engagement_type' => 'setEngagementType',
        'fixed_term_end_date' => 'setFixedTermEndDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payroll_calendar_id' => 'getPayrollCalendarId',
        'pay_run_calendar_id' => 'getPayRunCalendarId',
        'start_date' => 'getStartDate',
        'engagement_type' => 'getEngagementType',
        'fixed_term_end_date' => 'getFixedTermEndDate'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['payroll_calendar_id'] = isset($data['payroll_calendar_id']) ? $data['payroll_calendar_id'] : null;
        $this->container['pay_run_calendar_id'] = isset($data['pay_run_calendar_id']) ? $data['pay_run_calendar_id'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['engagement_type'] = isset($data['engagement_type']) ? $data['engagement_type'] : null;
        $this->container['fixed_term_end_date'] = isset($data['fixed_term_end_date']) ? $data['fixed_term_end_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets payroll_calendar_id
     *
     * @return string|null
     */
    public function getPayrollCalendarId()
    {
        return $this->container['payroll_calendar_id'];
    }

    /**
     * Sets payroll_calendar_id
     *
     * @param string|null $payroll_calendar_id Xero unique identifier for the payroll calendar of the employee
     *
     * @return $this
     */
    public function setPayrollCalendarId($payroll_calendar_id)
    {

        $this->container['payroll_calendar_id'] = $payroll_calendar_id;

        return $this;
    }



    /**
     * Gets pay_run_calendar_id
     *
     * @return string|null
     */
    public function getPayRunCalendarId()
    {
        return $this->container['pay_run_calendar_id'];
    }

    /**
     * Sets pay_run_calendar_id
     *
     * @param string|null $pay_run_calendar_id Xero unique identifier for the payrun calendar for the employee (Deprecated in version 1.1.6)
     *
     * @return $this
     */
    public function setPayRunCalendarId($pay_run_calendar_id)
    {

        $this->container['pay_run_calendar_id'] = $pay_run_calendar_id;

        return $this;
    }



    /**
     * Gets start_date
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime|null $start_date Start date of the employment (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {

        $this->container['start_date'] = $start_date;

        return $this;
    }



    /**
     * Gets engagement_type
     *
     * @return string|null
     */
    public function getEngagementType()
    {
        return $this->container['engagement_type'];
    }

    /**
     * Sets engagement_type
     *
     * @param string|null $engagement_type Engagement type of the employee
     *
     * @return $this
     */
    public function setEngagementType($engagement_type)
    {

        $this->container['engagement_type'] = $engagement_type;

        return $this;
    }



    /**
     * Gets fixed_term_end_date
     *
     * @return \DateTime|null
     */
    public function getFixedTermEndDate()
    {
        return $this->container['fixed_term_end_date'];
    }

    /**
     * Sets fixed_term_end_date
     *
     * @param \DateTime|null $fixed_term_end_date End date for an employee with a fixed-term engagement type
     *
     * @return $this
     */
    public function setFixedTermEndDate($fixed_term_end_date)
    {

        $this->container['fixed_term_end_date'] = $fixed_term_end_date;

        return $this;
    }


    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            PayrollNzObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


