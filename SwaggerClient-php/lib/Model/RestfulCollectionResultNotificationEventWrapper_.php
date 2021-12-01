<?php
/**
 * RestfulCollectionResultNotificationEventWrapper_
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
 * RestfulCollectionResultNotificationEventWrapper_ Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RestfulCollectionResultNotificationEventWrapper_ implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RestfulCollectionResult«NotificationEventWrapper»';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'current_page_uri' => 'string',
        'first_page_uri' => 'string',
        'last_page_uri' => 'string',
        'message' => 'string',
        'next_page_uri' => 'string',
        'page' => '\Swagger\Client\Model\DataPageNotificationEventWrapper_',
        'previous_page_uri' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'current_page_uri' => null,
        'first_page_uri' => null,
        'last_page_uri' => null,
        'message' => null,
        'next_page_uri' => null,
        'page' => null,
        'previous_page_uri' => null
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
        'current_page_uri' => 'currentPageUri',
        'first_page_uri' => 'firstPageUri',
        'last_page_uri' => 'lastPageUri',
        'message' => 'message',
        'next_page_uri' => 'nextPageUri',
        'page' => 'page',
        'previous_page_uri' => 'previousPageUri'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'current_page_uri' => 'setCurrentPageUri',
        'first_page_uri' => 'setFirstPageUri',
        'last_page_uri' => 'setLastPageUri',
        'message' => 'setMessage',
        'next_page_uri' => 'setNextPageUri',
        'page' => 'setPage',
        'previous_page_uri' => 'setPreviousPageUri'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'current_page_uri' => 'getCurrentPageUri',
        'first_page_uri' => 'getFirstPageUri',
        'last_page_uri' => 'getLastPageUri',
        'message' => 'getMessage',
        'next_page_uri' => 'getNextPageUri',
        'page' => 'getPage',
        'previous_page_uri' => 'getPreviousPageUri'
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
        $this->container['current_page_uri'] = isset($data['current_page_uri']) ? $data['current_page_uri'] : null;
        $this->container['first_page_uri'] = isset($data['first_page_uri']) ? $data['first_page_uri'] : null;
        $this->container['last_page_uri'] = isset($data['last_page_uri']) ? $data['last_page_uri'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['next_page_uri'] = isset($data['next_page_uri']) ? $data['next_page_uri'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['previous_page_uri'] = isset($data['previous_page_uri']) ? $data['previous_page_uri'] : null;
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
     * Gets current_page_uri
     *
     * @return string
     */
    public function getCurrentPageUri()
    {
        return $this->container['current_page_uri'];
    }

    /**
     * Sets current_page_uri
     *
     * @param string $current_page_uri current_page_uri
     *
     * @return $this
     */
    public function setCurrentPageUri($current_page_uri)
    {
        $this->container['current_page_uri'] = $current_page_uri;

        return $this;
    }

    /**
     * Gets first_page_uri
     *
     * @return string
     */
    public function getFirstPageUri()
    {
        return $this->container['first_page_uri'];
    }

    /**
     * Sets first_page_uri
     *
     * @param string $first_page_uri first_page_uri
     *
     * @return $this
     */
    public function setFirstPageUri($first_page_uri)
    {
        $this->container['first_page_uri'] = $first_page_uri;

        return $this;
    }

    /**
     * Gets last_page_uri
     *
     * @return string
     */
    public function getLastPageUri()
    {
        return $this->container['last_page_uri'];
    }

    /**
     * Sets last_page_uri
     *
     * @param string $last_page_uri last_page_uri
     *
     * @return $this
     */
    public function setLastPageUri($last_page_uri)
    {
        $this->container['last_page_uri'] = $last_page_uri;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets next_page_uri
     *
     * @return string
     */
    public function getNextPageUri()
    {
        return $this->container['next_page_uri'];
    }

    /**
     * Sets next_page_uri
     *
     * @param string $next_page_uri next_page_uri
     *
     * @return $this
     */
    public function setNextPageUri($next_page_uri)
    {
        $this->container['next_page_uri'] = $next_page_uri;

        return $this;
    }

    /**
     * Gets page
     *
     * @return \Swagger\Client\Model\DataPageNotificationEventWrapper_
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param \Swagger\Client\Model\DataPageNotificationEventWrapper_ $page page
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets previous_page_uri
     *
     * @return string
     */
    public function getPreviousPageUri()
    {
        return $this->container['previous_page_uri'];
    }

    /**
     * Sets previous_page_uri
     *
     * @param string $previous_page_uri previous_page_uri
     *
     * @return $this
     */
    public function setPreviousPageUri($previous_page_uri)
    {
        $this->container['previous_page_uri'] = $previous_page_uri;

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


