<?php
/**
 * MobileNotificationSettingsWrapper
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
 * MobileNotificationSettingsWrapper Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MobileNotificationSettingsWrapper implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MobileNotificationSettingsWrapper';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allow_share' => 'bool',
        'push_alert_enabled' => 'bool',
        'request_comment' => 'bool',
        'request_image' => 'bool',
        'request_location' => 'bool',
        'require_confirm' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allow_share' => null,
        'push_alert_enabled' => null,
        'request_comment' => null,
        'request_image' => null,
        'request_location' => null,
        'require_confirm' => null
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
        'allow_share' => 'allowShare',
        'push_alert_enabled' => 'pushAlertEnabled',
        'request_comment' => 'requestComment',
        'request_image' => 'requestImage',
        'request_location' => 'requestLocation',
        'require_confirm' => 'requireConfirm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_share' => 'setAllowShare',
        'push_alert_enabled' => 'setPushAlertEnabled',
        'request_comment' => 'setRequestComment',
        'request_image' => 'setRequestImage',
        'request_location' => 'setRequestLocation',
        'require_confirm' => 'setRequireConfirm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_share' => 'getAllowShare',
        'push_alert_enabled' => 'getPushAlertEnabled',
        'request_comment' => 'getRequestComment',
        'request_image' => 'getRequestImage',
        'request_location' => 'getRequestLocation',
        'require_confirm' => 'getRequireConfirm'
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
        $this->container['allow_share'] = isset($data['allow_share']) ? $data['allow_share'] : null;
        $this->container['push_alert_enabled'] = isset($data['push_alert_enabled']) ? $data['push_alert_enabled'] : null;
        $this->container['request_comment'] = isset($data['request_comment']) ? $data['request_comment'] : null;
        $this->container['request_image'] = isset($data['request_image']) ? $data['request_image'] : null;
        $this->container['request_location'] = isset($data['request_location']) ? $data['request_location'] : null;
        $this->container['require_confirm'] = isset($data['require_confirm']) ? $data['require_confirm'] : null;
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
     * Gets allow_share
     *
     * @return bool
     */
    public function getAllowShare()
    {
        return $this->container['allow_share'];
    }

    /**
     * Sets allow_share
     *
     * @param bool $allow_share allow_share
     *
     * @return $this
     */
    public function setAllowShare($allow_share)
    {
        $this->container['allow_share'] = $allow_share;

        return $this;
    }

    /**
     * Gets push_alert_enabled
     *
     * @return bool
     */
    public function getPushAlertEnabled()
    {
        return $this->container['push_alert_enabled'];
    }

    /**
     * Sets push_alert_enabled
     *
     * @param bool $push_alert_enabled push_alert_enabled
     *
     * @return $this
     */
    public function setPushAlertEnabled($push_alert_enabled)
    {
        $this->container['push_alert_enabled'] = $push_alert_enabled;

        return $this;
    }

    /**
     * Gets request_comment
     *
     * @return bool
     */
    public function getRequestComment()
    {
        return $this->container['request_comment'];
    }

    /**
     * Sets request_comment
     *
     * @param bool $request_comment request_comment
     *
     * @return $this
     */
    public function setRequestComment($request_comment)
    {
        $this->container['request_comment'] = $request_comment;

        return $this;
    }

    /**
     * Gets request_image
     *
     * @return bool
     */
    public function getRequestImage()
    {
        return $this->container['request_image'];
    }

    /**
     * Sets request_image
     *
     * @param bool $request_image request_image
     *
     * @return $this
     */
    public function setRequestImage($request_image)
    {
        $this->container['request_image'] = $request_image;

        return $this;
    }

    /**
     * Gets request_location
     *
     * @return bool
     */
    public function getRequestLocation()
    {
        return $this->container['request_location'];
    }

    /**
     * Sets request_location
     *
     * @param bool $request_location request_location
     *
     * @return $this
     */
    public function setRequestLocation($request_location)
    {
        $this->container['request_location'] = $request_location;

        return $this;
    }

    /**
     * Gets require_confirm
     *
     * @return bool
     */
    public function getRequireConfirm()
    {
        return $this->container['require_confirm'];
    }

    /**
     * Sets require_confirm
     *
     * @param bool $require_confirm require_confirm
     *
     * @return $this
     */
    public function setRequireConfirm($require_confirm)
    {
        $this->container['require_confirm'] = $require_confirm;

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


