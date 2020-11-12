<?php
/**
 * Setting
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Assets API
 *
 * This is the Xero Assets API
 *
 * OpenAPI spec version: 2.4.4
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\Asset;

use \ArrayAccess;
use \XeroAPI\XeroPHP\AssetObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * Setting Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Setting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Setting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'asset_number_prefix' => 'string',
        'asset_number_sequence' => 'string',
        'asset_start_date' => '\DateTime',
        'last_depreciation_date' => '\DateTime',
        'default_gain_on_disposal_account_id' => 'string',
        'default_loss_on_disposal_account_id' => 'string',
        'default_capital_gain_on_disposal_account_id' => 'string',
        'opt_in_for_tax' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'asset_number_prefix' => null,
        'asset_number_sequence' => null,
        'asset_start_date' => 'date',
        'last_depreciation_date' => 'date',
        'default_gain_on_disposal_account_id' => 'uuid',
        'default_loss_on_disposal_account_id' => 'uuid',
        'default_capital_gain_on_disposal_account_id' => 'uuid',
        'opt_in_for_tax' => null
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
        'asset_number_prefix' => 'assetNumberPrefix',
        'asset_number_sequence' => 'assetNumberSequence',
        'asset_start_date' => 'assetStartDate',
        'last_depreciation_date' => 'lastDepreciationDate',
        'default_gain_on_disposal_account_id' => 'defaultGainOnDisposalAccountId',
        'default_loss_on_disposal_account_id' => 'defaultLossOnDisposalAccountId',
        'default_capital_gain_on_disposal_account_id' => 'defaultCapitalGainOnDisposalAccountId',
        'opt_in_for_tax' => 'optInForTax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asset_number_prefix' => 'setAssetNumberPrefix',
        'asset_number_sequence' => 'setAssetNumberSequence',
        'asset_start_date' => 'setAssetStartDate',
        'last_depreciation_date' => 'setLastDepreciationDate',
        'default_gain_on_disposal_account_id' => 'setDefaultGainOnDisposalAccountId',
        'default_loss_on_disposal_account_id' => 'setDefaultLossOnDisposalAccountId',
        'default_capital_gain_on_disposal_account_id' => 'setDefaultCapitalGainOnDisposalAccountId',
        'opt_in_for_tax' => 'setOptInForTax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asset_number_prefix' => 'getAssetNumberPrefix',
        'asset_number_sequence' => 'getAssetNumberSequence',
        'asset_start_date' => 'getAssetStartDate',
        'last_depreciation_date' => 'getLastDepreciationDate',
        'default_gain_on_disposal_account_id' => 'getDefaultGainOnDisposalAccountId',
        'default_loss_on_disposal_account_id' => 'getDefaultLossOnDisposalAccountId',
        'default_capital_gain_on_disposal_account_id' => 'getDefaultCapitalGainOnDisposalAccountId',
        'opt_in_for_tax' => 'getOptInForTax'
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
        $this->container['asset_number_prefix'] = isset($data['asset_number_prefix']) ? $data['asset_number_prefix'] : null;
        $this->container['asset_number_sequence'] = isset($data['asset_number_sequence']) ? $data['asset_number_sequence'] : null;
        $this->container['asset_start_date'] = isset($data['asset_start_date']) ? $data['asset_start_date'] : null;
        $this->container['last_depreciation_date'] = isset($data['last_depreciation_date']) ? $data['last_depreciation_date'] : null;
        $this->container['default_gain_on_disposal_account_id'] = isset($data['default_gain_on_disposal_account_id']) ? $data['default_gain_on_disposal_account_id'] : null;
        $this->container['default_loss_on_disposal_account_id'] = isset($data['default_loss_on_disposal_account_id']) ? $data['default_loss_on_disposal_account_id'] : null;
        $this->container['default_capital_gain_on_disposal_account_id'] = isset($data['default_capital_gain_on_disposal_account_id']) ? $data['default_capital_gain_on_disposal_account_id'] : null;
        $this->container['opt_in_for_tax'] = isset($data['opt_in_for_tax']) ? $data['opt_in_for_tax'] : null;
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
     * Gets asset_number_prefix
     *
     * @return string|null
     */
    public function getAssetNumberPrefix()
    {
        return $this->container['asset_number_prefix'];
    }

    /**
     * Sets asset_number_prefix
     *
     * @param string|null $asset_number_prefix The prefix used for fixed asset numbers (“FA-” by default)
     *
     * @return $this
     */
    public function setAssetNumberPrefix($asset_number_prefix)
    {

        $this->container['asset_number_prefix'] = $asset_number_prefix;

        return $this;
    }



    /**
     * Gets asset_number_sequence
     *
     * @return string|null
     */
    public function getAssetNumberSequence()
    {
        return $this->container['asset_number_sequence'];
    }

    /**
     * Sets asset_number_sequence
     *
     * @param string|null $asset_number_sequence The next available sequence number
     *
     * @return $this
     */
    public function setAssetNumberSequence($asset_number_sequence)
    {

        $this->container['asset_number_sequence'] = $asset_number_sequence;

        return $this;
    }



    /**
     * Gets asset_start_date
     *
     * @return \DateTime|null
     */
    public function getAssetStartDate()
    {
        return $this->container['asset_start_date'];
    }

    /**
     * Sets asset_start_date
     *
     * @param \DateTime|null $asset_start_date The date depreciation calculations started on registered fixed assets in Xero
     *
     * @return $this
     */
    public function setAssetStartDate($asset_start_date)
    {

        $this->container['asset_start_date'] = $asset_start_date;

        return $this;
    }



    /**
     * Gets last_depreciation_date
     *
     * @return \DateTime|null
     */
    public function getLastDepreciationDate()
    {
        return $this->container['last_depreciation_date'];
    }

    /**
     * Sets last_depreciation_date
     *
     * @param \DateTime|null $last_depreciation_date The last depreciation date
     *
     * @return $this
     */
    public function setLastDepreciationDate($last_depreciation_date)
    {

        $this->container['last_depreciation_date'] = $last_depreciation_date;

        return $this;
    }



    /**
     * Gets default_gain_on_disposal_account_id
     *
     * @return string|null
     */
    public function getDefaultGainOnDisposalAccountId()
    {
        return $this->container['default_gain_on_disposal_account_id'];
    }

    /**
     * Sets default_gain_on_disposal_account_id
     *
     * @param string|null $default_gain_on_disposal_account_id Default account that gains are posted to
     *
     * @return $this
     */
    public function setDefaultGainOnDisposalAccountId($default_gain_on_disposal_account_id)
    {

        $this->container['default_gain_on_disposal_account_id'] = $default_gain_on_disposal_account_id;

        return $this;
    }



    /**
     * Gets default_loss_on_disposal_account_id
     *
     * @return string|null
     */
    public function getDefaultLossOnDisposalAccountId()
    {
        return $this->container['default_loss_on_disposal_account_id'];
    }

    /**
     * Sets default_loss_on_disposal_account_id
     *
     * @param string|null $default_loss_on_disposal_account_id Default account that losses are posted to
     *
     * @return $this
     */
    public function setDefaultLossOnDisposalAccountId($default_loss_on_disposal_account_id)
    {

        $this->container['default_loss_on_disposal_account_id'] = $default_loss_on_disposal_account_id;

        return $this;
    }



    /**
     * Gets default_capital_gain_on_disposal_account_id
     *
     * @return string|null
     */
    public function getDefaultCapitalGainOnDisposalAccountId()
    {
        return $this->container['default_capital_gain_on_disposal_account_id'];
    }

    /**
     * Sets default_capital_gain_on_disposal_account_id
     *
     * @param string|null $default_capital_gain_on_disposal_account_id Default account that capital gains are posted to
     *
     * @return $this
     */
    public function setDefaultCapitalGainOnDisposalAccountId($default_capital_gain_on_disposal_account_id)
    {

        $this->container['default_capital_gain_on_disposal_account_id'] = $default_capital_gain_on_disposal_account_id;

        return $this;
    }



    /**
     * Gets opt_in_for_tax
     *
     * @return bool|null
     */
    public function getOptInForTax()
    {
        return $this->container['opt_in_for_tax'];
    }

    /**
     * Sets opt_in_for_tax
     *
     * @param bool|null $opt_in_for_tax opt in for tax calculation
     *
     * @return $this
     */
    public function setOptInForTax($opt_in_for_tax)
    {

        $this->container['opt_in_for_tax'] = $opt_in_for_tax;

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
            AssetObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


