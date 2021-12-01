<?php
/**
 * TweetConstraintWrapper
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
 * TweetConstraintWrapper Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TweetConstraintWrapper implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TweetConstraintWrapper';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'max_total_tweets' => 'int',
        'max_tweets_per_hour' => 'int',
        'max_tweets_per_minute' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'max_total_tweets' => 'int64',
        'max_tweets_per_hour' => 'int32',
        'max_tweets_per_minute' => 'int32'
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
        'max_total_tweets' => 'maxTotalTweets',
        'max_tweets_per_hour' => 'maxTweetsPerHour',
        'max_tweets_per_minute' => 'maxTweetsPerMinute'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'max_total_tweets' => 'setMaxTotalTweets',
        'max_tweets_per_hour' => 'setMaxTweetsPerHour',
        'max_tweets_per_minute' => 'setMaxTweetsPerMinute'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'max_total_tweets' => 'getMaxTotalTweets',
        'max_tweets_per_hour' => 'getMaxTweetsPerHour',
        'max_tweets_per_minute' => 'getMaxTweetsPerMinute'
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
        $this->container['max_total_tweets'] = isset($data['max_total_tweets']) ? $data['max_total_tweets'] : null;
        $this->container['max_tweets_per_hour'] = isset($data['max_tweets_per_hour']) ? $data['max_tweets_per_hour'] : null;
        $this->container['max_tweets_per_minute'] = isset($data['max_tweets_per_minute']) ? $data['max_tweets_per_minute'] : null;
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
     * Gets max_total_tweets
     *
     * @return int
     */
    public function getMaxTotalTweets()
    {
        return $this->container['max_total_tweets'];
    }

    /**
     * Sets max_total_tweets
     *
     * @param int $max_total_tweets max_total_tweets
     *
     * @return $this
     */
    public function setMaxTotalTweets($max_total_tweets)
    {
        $this->container['max_total_tweets'] = $max_total_tweets;

        return $this;
    }

    /**
     * Gets max_tweets_per_hour
     *
     * @return int
     */
    public function getMaxTweetsPerHour()
    {
        return $this->container['max_tweets_per_hour'];
    }

    /**
     * Sets max_tweets_per_hour
     *
     * @param int $max_tweets_per_hour max_tweets_per_hour
     *
     * @return $this
     */
    public function setMaxTweetsPerHour($max_tweets_per_hour)
    {
        $this->container['max_tweets_per_hour'] = $max_tweets_per_hour;

        return $this;
    }

    /**
     * Gets max_tweets_per_minute
     *
     * @return int
     */
    public function getMaxTweetsPerMinute()
    {
        return $this->container['max_tweets_per_minute'];
    }

    /**
     * Sets max_tweets_per_minute
     *
     * @param int $max_tweets_per_minute max_tweets_per_minute
     *
     * @return $this
     */
    public function setMaxTweetsPerMinute($max_tweets_per_minute)
    {
        $this->container['max_tweets_per_minute'] = $max_tweets_per_minute;

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


