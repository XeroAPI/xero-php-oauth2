<?php
/**
 * Report
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Accounting API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
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

namespace XeroAPI\XeroPHP\Models\Accounting;

use \ArrayAccess;
use \XeroAPI\XeroPHP\AccountingObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * Report Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Report implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Report';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'report_id' => 'string',
        'report_name' => 'string',
        'report_type' => 'string',
        'report_title' => 'string',
        'report_date' => 'string',
        'updated_date_utc' => '\DateTime',
        'contacts' => '\XeroAPI\XeroPHP\Models\Accounting\TenNinteyNineContact[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'report_id' => null,
        'report_name' => null,
        'report_type' => null,
        'report_title' => null,
        'report_date' => null,
        'updated_date_utc' => 'date-time',
        'contacts' => null
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
        'report_id' => 'ReportID',
        'report_name' => 'ReportName',
        'report_type' => 'ReportType',
        'report_title' => 'ReportTitle',
        'report_date' => 'ReportDate',
        'updated_date_utc' => 'UpdatedDateUTC',
        'contacts' => 'Contacts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'report_id' => 'setReportId',
        'report_name' => 'setReportName',
        'report_type' => 'setReportType',
        'report_title' => 'setReportTitle',
        'report_date' => 'setReportDate',
        'updated_date_utc' => 'setUpdatedDateUtc',
        'contacts' => 'setContacts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'report_id' => 'getReportId',
        'report_name' => 'getReportName',
        'report_type' => 'getReportType',
        'report_title' => 'getReportTitle',
        'report_date' => 'getReportDate',
        'updated_date_utc' => 'getUpdatedDateUtc',
        'contacts' => 'getContacts'
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

    const REPORT_TYPE_AGED_PAYABLES_BY_CONTACT = 'AgedPayablesByContact';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReportTypeAllowableValues()
    {
        return [
            self::REPORT_TYPE_AGED_PAYABLES_BY_CONTACT,
        ];
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
        $this->container['report_id'] = isset($data['report_id']) ? $data['report_id'] : null;
        $this->container['report_name'] = isset($data['report_name']) ? $data['report_name'] : null;
        $this->container['report_type'] = isset($data['report_type']) ? $data['report_type'] : null;
        $this->container['report_title'] = isset($data['report_title']) ? $data['report_title'] : null;
        $this->container['report_date'] = isset($data['report_date']) ? $data['report_date'] : null;
        $this->container['updated_date_utc'] = isset($data['updated_date_utc']) ? $data['updated_date_utc'] : null;
        $this->container['contacts'] = isset($data['contacts']) ? $data['contacts'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getReportTypeAllowableValues();
        if (!is_null($this->container['report_type']) && !in_array($this->container['report_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'report_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets report_id
     *
     * @return string|null
     */
    public function getReportId()
    {
        return $this->container['report_id'];
    }

    /**
     * Sets report_id
     *
     * @param string|null $report_id See Prepayment Types
     *
     * @return $this
     */
    public function setReportId($report_id)
    {

        $this->container['report_id'] = $report_id;

        return $this;
    }



    /**
     * Gets report_name
     *
     * @return string|null
     */
    public function getReportName()
    {
        return $this->container['report_name'];
    }

    /**
     * Sets report_name
     *
     * @param string|null $report_name See Prepayment Types
     *
     * @return $this
     */
    public function setReportName($report_name)
    {

        $this->container['report_name'] = $report_name;

        return $this;
    }



    /**
     * Gets report_type
     *
     * @return string|null
     */
    public function getReportType()
    {
        return $this->container['report_type'];
    }

    /**
     * Sets report_type
     *
     * @param string|null $report_type See Prepayment Types
     *
     * @return $this
     */
    public function setReportType($report_type)
    {
        $allowedValues = $this->getReportTypeAllowableValues();
        if (!is_null($report_type) && !in_array($report_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'report_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['report_type'] = $report_type;

        return $this;
    }



    /**
     * Gets report_title
     *
     * @return string|null
     */
    public function getReportTitle()
    {
        return $this->container['report_title'];
    }

    /**
     * Sets report_title
     *
     * @param string|null $report_title See Prepayment Types
     *
     * @return $this
     */
    public function setReportTitle($report_title)
    {

        $this->container['report_title'] = $report_title;

        return $this;
    }



    /**
     * Gets report_date
     *
     * @return string|null
     */
    public function getReportDate()
    {
        return $this->container['report_date'];
    }

    /**
     * Sets report_date
     *
     * @param string|null $report_date Date of report
     *
     * @return $this
     */
    public function setReportDate($report_date)
    {

        $this->container['report_date'] = $report_date;

        return $this;
    }



    /**
     * Gets updated_date_utc
     *
     * @return \DateTime|null
     */
    public function getUpdatedDateUtc()
    {
        return $this->container['updated_date_utc'];
    }

    /**
     * Sets updated_date_utc
     *
     * @param \DateTime|null $updated_date_utc Updated Date
     *
     * @return $this
     */
    public function setUpdatedDateUtc($updated_date_utc)
    {

        $this->container['updated_date_utc'] = $updated_date_utc;

        return $this;
    }


    /**
     * Gets contacts
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\TenNinteyNineContact[]|null
     */
    public function getContacts()
    {
        return $this->container['contacts'];
    }

    /**
     * Sets contacts
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\TenNinteyNineContact[]|null $contacts contacts
     *
     * @return $this
     */
    public function setContacts($contacts)
    {

        $this->container['contacts'] = $contacts;

        return $this;
    }


    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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
            AccountingObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


