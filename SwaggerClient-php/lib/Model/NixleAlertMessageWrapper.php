<?php
/**
 * NixleAlertMessageWrapper
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
 * NixleAlertMessageWrapper Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NixleAlertMessageWrapper implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NixleAlertMessageWrapper';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'action' => 'string',
        'apply_zip_code_to_event_groups' => 'bool',
        'category' => 'string',
        'certainty' => 'string',
        'community' => '\Swagger\Client\Model\NixleCommunityWrapper',
        'event' => 'string',
        'event_groups' => 'int[]',
        'expire' => 'string',
        'instructions' => 'string',
        'severity' => 'string',
        'sms_message' => 'string',
        'type' => 'int',
        'urgency' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'action' => null,
        'apply_zip_code_to_event_groups' => null,
        'category' => null,
        'certainty' => null,
        'community' => null,
        'event' => null,
        'event_groups' => 'int64',
        'expire' => null,
        'instructions' => null,
        'severity' => null,
        'sms_message' => null,
        'type' => 'int32',
        'urgency' => null
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
        'action' => 'action',
        'apply_zip_code_to_event_groups' => 'applyZipCodeToEventGroups',
        'category' => 'category',
        'certainty' => 'certainty',
        'community' => 'community',
        'event' => 'event',
        'event_groups' => 'eventGroups',
        'expire' => 'expire',
        'instructions' => 'instructions',
        'severity' => 'severity',
        'sms_message' => 'smsMessage',
        'type' => 'type',
        'urgency' => 'urgency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action' => 'setAction',
        'apply_zip_code_to_event_groups' => 'setApplyZipCodeToEventGroups',
        'category' => 'setCategory',
        'certainty' => 'setCertainty',
        'community' => 'setCommunity',
        'event' => 'setEvent',
        'event_groups' => 'setEventGroups',
        'expire' => 'setExpire',
        'instructions' => 'setInstructions',
        'severity' => 'setSeverity',
        'sms_message' => 'setSmsMessage',
        'type' => 'setType',
        'urgency' => 'setUrgency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action' => 'getAction',
        'apply_zip_code_to_event_groups' => 'getApplyZipCodeToEventGroups',
        'category' => 'getCategory',
        'certainty' => 'getCertainty',
        'community' => 'getCommunity',
        'event' => 'getEvent',
        'event_groups' => 'getEventGroups',
        'expire' => 'getExpire',
        'instructions' => 'getInstructions',
        'severity' => 'getSeverity',
        'sms_message' => 'getSmsMessage',
        'type' => 'getType',
        'urgency' => 'getUrgency'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['apply_zip_code_to_event_groups'] = isset($data['apply_zip_code_to_event_groups']) ? $data['apply_zip_code_to_event_groups'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['certainty'] = isset($data['certainty']) ? $data['certainty'] : null;
        $this->container['community'] = isset($data['community']) ? $data['community'] : null;
        $this->container['event'] = isset($data['event']) ? $data['event'] : null;
        $this->container['event_groups'] = isset($data['event_groups']) ? $data['event_groups'] : null;
        $this->container['expire'] = isset($data['expire']) ? $data['expire'] : null;
        $this->container['instructions'] = isset($data['instructions']) ? $data['instructions'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['sms_message'] = isset($data['sms_message']) ? $data['sms_message'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['urgency'] = isset($data['urgency']) ? $data['urgency'] : null;
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
     * Gets action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string $action action
     *
     * @return $this
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets apply_zip_code_to_event_groups
     *
     * @return bool
     */
    public function getApplyZipCodeToEventGroups()
    {
        return $this->container['apply_zip_code_to_event_groups'];
    }

    /**
     * Sets apply_zip_code_to_event_groups
     *
     * @param bool $apply_zip_code_to_event_groups apply_zip_code_to_event_groups
     *
     * @return $this
     */
    public function setApplyZipCodeToEventGroups($apply_zip_code_to_event_groups)
    {
        $this->container['apply_zip_code_to_event_groups'] = $apply_zip_code_to_event_groups;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets certainty
     *
     * @return string
     */
    public function getCertainty()
    {
        return $this->container['certainty'];
    }

    /**
     * Sets certainty
     *
     * @param string $certainty certainty
     *
     * @return $this
     */
    public function setCertainty($certainty)
    {
        $this->container['certainty'] = $certainty;

        return $this;
    }

    /**
     * Gets community
     *
     * @return \Swagger\Client\Model\NixleCommunityWrapper
     */
    public function getCommunity()
    {
        return $this->container['community'];
    }

    /**
     * Sets community
     *
     * @param \Swagger\Client\Model\NixleCommunityWrapper $community community
     *
     * @return $this
     */
    public function setCommunity($community)
    {
        $this->container['community'] = $community;

        return $this;
    }

    /**
     * Gets event
     *
     * @return string
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     *
     * @param string $event event
     *
     * @return $this
     */
    public function setEvent($event)
    {
        $this->container['event'] = $event;

        return $this;
    }

    /**
     * Gets event_groups
     *
     * @return int[]
     */
    public function getEventGroups()
    {
        return $this->container['event_groups'];
    }

    /**
     * Sets event_groups
     *
     * @param int[] $event_groups event_groups
     *
     * @return $this
     */
    public function setEventGroups($event_groups)
    {
        $this->container['event_groups'] = $event_groups;

        return $this;
    }

    /**
     * Gets expire
     *
     * @return string
     */
    public function getExpire()
    {
        return $this->container['expire'];
    }

    /**
     * Sets expire
     *
     * @param string $expire expire
     *
     * @return $this
     */
    public function setExpire($expire)
    {
        $this->container['expire'] = $expire;

        return $this;
    }

    /**
     * Gets instructions
     *
     * @return string
     */
    public function getInstructions()
    {
        return $this->container['instructions'];
    }

    /**
     * Sets instructions
     *
     * @param string $instructions instructions
     *
     * @return $this
     */
    public function setInstructions($instructions)
    {
        $this->container['instructions'] = $instructions;

        return $this;
    }

    /**
     * Gets severity
     *
     * @return string
     */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
     * Sets severity
     *
     * @param string $severity severity
     *
     * @return $this
     */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;

        return $this;
    }

    /**
     * Gets sms_message
     *
     * @return string
     */
    public function getSmsMessage()
    {
        return $this->container['sms_message'];
    }

    /**
     * Sets sms_message
     *
     * @param string $sms_message sms_message
     *
     * @return $this
     */
    public function setSmsMessage($sms_message)
    {
        $this->container['sms_message'] = $sms_message;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets urgency
     *
     * @return string
     */
    public function getUrgency()
    {
        return $this->container['urgency'];
    }

    /**
     * Sets urgency
     *
     * @param string $urgency urgency
     *
     * @return $this
     */
    public function setUrgency($urgency)
    {
        $this->container['urgency'] = $urgency;

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


