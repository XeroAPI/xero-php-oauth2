<?php
/**
 * ManualJournals
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Accounting API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
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

namespace XeroAPI\XeroPHP\Models\Accounting;

use \ArrayAccess;
use \XeroAPI\XeroPHP\AccountingObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * ManualJournals Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ManualJournals implements ModelInterface, ArrayAccess, \Countable, \IteratorAggregate, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ManualJournals';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pagination' => '\XeroAPI\XeroPHP\Models\Accounting\Pagination',
        'warnings' => '\XeroAPI\XeroPHP\Models\Accounting\ValidationError[]',
        'manual_journals' => '\XeroAPI\XeroPHP\Models\Accounting\ManualJournal[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'pagination' => null,
        'warnings' => null,
        'manual_journals' => null
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
        'pagination' => 'pagination',
        'warnings' => 'Warnings',
        'manual_journals' => 'ManualJournals'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pagination' => 'setPagination',
        'warnings' => 'setWarnings',
        'manual_journals' => 'setManualJournals'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pagination' => 'getPagination',
        'warnings' => 'getWarnings',
        'manual_journals' => 'getManualJournals'
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
        $this->container['pagination'] = isset($data['pagination']) ? $data['pagination'] : null;
        $this->container['warnings'] = isset($data['warnings']) ? $data['warnings'] : null;
        $this->container['manual_journals'] = isset($data['manual_journals']) ? $data['manual_journals'] : null;
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
     * Gets pagination
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\Pagination|null
     */
    public function getPagination()
    {
        return $this->container['pagination'];
    }

    /**
     * Sets pagination
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\Pagination|null $pagination pagination
     *
     * @return $this
     */
    public function setPagination($pagination)
    {

        $this->container['pagination'] = $pagination;

        return $this;
    }



    /**
     * Gets warnings
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\ValidationError[]|null
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\ValidationError[]|null $warnings Displays array of warning messages from the API
     *
     * @return $this
     */
    public function setWarnings($warnings)
    {

        $this->container['warnings'] = $warnings;

        return $this;
    }



    /**
     * Gets manual_journals
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\ManualJournal[]|null
     */
    public function getManualJournals()
    {
        return $this->container['manual_journals'];
    }

    /**
     * Sets manual_journals
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\ManualJournal[]|null $manual_journals manual_journals
     *
     * @return $this
     */
    public function setManualJournals($manual_journals)
    {

        $this->container['manual_journals'] = $manual_journals;

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
        return isset($this->container['manual_journals'][$offset]);
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
        return isset($this->container['manual_journals'][$offset]) ? $this->container['manual_journals'][$offset] : null;
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
            $this->container['manual_journals'][] = $value;
        } else {
            $this->container['manual_journals'][$offset] = $value;
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
        unset($this->container['manual_journals'][$offset]);
    }

    #[\ReturnTypeWillChange]
    public function count() 
    {
        return count($this->container['manual_journals']);
    }

    #[\ReturnTypeWillChange]
    public function getIterator() 
    {
        return new \ArrayIterator($this->container['manual_journals']);
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       $sanitizedObject = AccountingObjectSerializer::sanitizeForSerialization($this);
        $json = [];
        if(isset($sanitizedObject->pagination)){
            $json['pagination'] = $sanitizedObject->pagination;
        }
        if(isset($sanitizedObject->warnings)){
            $json['warnings'] = $sanitizedObject->warnings;
        }
        $json->ManualJournals = $sanitizedObject->ManualJournals;
        return $json;
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


