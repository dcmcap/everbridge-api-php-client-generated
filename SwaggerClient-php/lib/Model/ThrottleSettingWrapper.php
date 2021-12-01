<?php
/**
 * ThrottleSettingWrapper
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Rest Api
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3.x
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ThrottleSettingWrapper Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ThrottleSettingWrapper implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ThrottleSettingWrapper';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'apply_by_flag' => 'bool',
        'created_by' => 'int',
        'created_date' => '\DateTime',
        'default_amount' => 'int',
        'enforce_all_flag' => 'bool',
        'flag' => 'bool',
        'last_modified_by' => 'int',
        'last_modified_date' => '\DateTime',
        'sender_review_flag' => 'bool',
        'sender_toggle_flag' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'apply_by_flag' => null,
        'created_by' => 'int64',
        'created_date' => 'date-time',
        'default_amount' => 'int32',
        'enforce_all_flag' => null,
        'flag' => null,
        'last_modified_by' => 'int64',
        'last_modified_date' => 'date-time',
        'sender_review_flag' => null,
        'sender_toggle_flag' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'apply_by_flag' => 'applyByFlag',
        'created_by' => 'createdBy',
        'created_date' => 'createdDate',
        'default_amount' => 'defaultAmount',
        'enforce_all_flag' => 'enforceAllFlag',
        'flag' => 'flag',
        'last_modified_by' => 'lastModifiedBy',
        'last_modified_date' => 'lastModifiedDate',
        'sender_review_flag' => 'senderReviewFlag',
        'sender_toggle_flag' => 'senderToggleFlag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'apply_by_flag' => 'setApplyByFlag',
        'created_by' => 'setCreatedBy',
        'created_date' => 'setCreatedDate',
        'default_amount' => 'setDefaultAmount',
        'enforce_all_flag' => 'setEnforceAllFlag',
        'flag' => 'setFlag',
        'last_modified_by' => 'setLastModifiedBy',
        'last_modified_date' => 'setLastModifiedDate',
        'sender_review_flag' => 'setSenderReviewFlag',
        'sender_toggle_flag' => 'setSenderToggleFlag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'apply_by_flag' => 'getApplyByFlag',
        'created_by' => 'getCreatedBy',
        'created_date' => 'getCreatedDate',
        'default_amount' => 'getDefaultAmount',
        'enforce_all_flag' => 'getEnforceAllFlag',
        'flag' => 'getFlag',
        'last_modified_by' => 'getLastModifiedBy',
        'last_modified_date' => 'getLastModifiedDate',
        'sender_review_flag' => 'getSenderReviewFlag',
        'sender_toggle_flag' => 'getSenderToggleFlag'
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
        return self::$swaggerModelName;
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
        $this->container['apply_by_flag'] = isset($data['apply_by_flag']) ? $data['apply_by_flag'] : null;
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['default_amount'] = isset($data['default_amount']) ? $data['default_amount'] : null;
        $this->container['enforce_all_flag'] = isset($data['enforce_all_flag']) ? $data['enforce_all_flag'] : null;
        $this->container['flag'] = isset($data['flag']) ? $data['flag'] : null;
        $this->container['last_modified_by'] = isset($data['last_modified_by']) ? $data['last_modified_by'] : null;
        $this->container['last_modified_date'] = isset($data['last_modified_date']) ? $data['last_modified_date'] : null;
        $this->container['sender_review_flag'] = isset($data['sender_review_flag']) ? $data['sender_review_flag'] : null;
        $this->container['sender_toggle_flag'] = isset($data['sender_toggle_flag']) ? $data['sender_toggle_flag'] : null;
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
     * Gets apply_by_flag
     *
     * @return bool
     */
    public function getApplyByFlag()
    {
        return $this->container['apply_by_flag'];
    }

    /**
     * Sets apply_by_flag
     *
     * @param bool $apply_by_flag apply_by_flag
     *
     * @return $this
     */
    public function setApplyByFlag($apply_by_flag)
    {
        $this->container['apply_by_flag'] = $apply_by_flag;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return int
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param int $created_by created_by
     *
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param \DateTime $created_date created_date
     *
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets default_amount
     *
     * @return int
     */
    public function getDefaultAmount()
    {
        return $this->container['default_amount'];
    }

    /**
     * Sets default_amount
     *
     * @param int $default_amount default_amount
     *
     * @return $this
     */
    public function setDefaultAmount($default_amount)
    {
        $this->container['default_amount'] = $default_amount;

        return $this;
    }

    /**
     * Gets enforce_all_flag
     *
     * @return bool
     */
    public function getEnforceAllFlag()
    {
        return $this->container['enforce_all_flag'];
    }

    /**
     * Sets enforce_all_flag
     *
     * @param bool $enforce_all_flag enforce_all_flag
     *
     * @return $this
     */
    public function setEnforceAllFlag($enforce_all_flag)
    {
        $this->container['enforce_all_flag'] = $enforce_all_flag;

        return $this;
    }

    /**
     * Gets flag
     *
     * @return bool
     */
    public function getFlag()
    {
        return $this->container['flag'];
    }

    /**
     * Sets flag
     *
     * @param bool $flag flag
     *
     * @return $this
     */
    public function setFlag($flag)
    {
        $this->container['flag'] = $flag;

        return $this;
    }

    /**
     * Gets last_modified_by
     *
     * @return int
     */
    public function getLastModifiedBy()
    {
        return $this->container['last_modified_by'];
    }

    /**
     * Sets last_modified_by
     *
     * @param int $last_modified_by last_modified_by
     *
     * @return $this
     */
    public function setLastModifiedBy($last_modified_by)
    {
        $this->container['last_modified_by'] = $last_modified_by;

        return $this;
    }

    /**
     * Gets last_modified_date
     *
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
        return $this->container['last_modified_date'];
    }

    /**
     * Sets last_modified_date
     *
     * @param \DateTime $last_modified_date last_modified_date
     *
     * @return $this
     */
    public function setLastModifiedDate($last_modified_date)
    {
        $this->container['last_modified_date'] = $last_modified_date;

        return $this;
    }

    /**
     * Gets sender_review_flag
     *
     * @return bool
     */
    public function getSenderReviewFlag()
    {
        return $this->container['sender_review_flag'];
    }

    /**
     * Sets sender_review_flag
     *
     * @param bool $sender_review_flag sender_review_flag
     *
     * @return $this
     */
    public function setSenderReviewFlag($sender_review_flag)
    {
        $this->container['sender_review_flag'] = $sender_review_flag;

        return $this;
    }

    /**
     * Gets sender_toggle_flag
     *
     * @return bool
     */
    public function getSenderToggleFlag()
    {
        return $this->container['sender_toggle_flag'];
    }

    /**
     * Sets sender_toggle_flag
     *
     * @param bool $sender_toggle_flag sender_toggle_flag
     *
     * @return $this
     */
    public function setSenderToggleFlag($sender_toggle_flag)
    {
        $this->container['sender_toggle_flag'] = $sender_toggle_flag;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


