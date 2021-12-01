<?php
/**
 * DataPageNotificationSimpleWrapper_
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
 * DataPageNotificationSimpleWrapper_ Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DataPageNotificationSimpleWrapper_ implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DataPage«NotificationSimpleWrapper»';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'current_page_no' => 'int',
        'data' => '\Swagger\Client\Model\NotificationSimpleWrapper[]',
        'page_size' => 'int',
        'scroll_id' => 'string',
        'start' => 'int',
        'total_count' => 'int',
        'total_page_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'current_page_no' => 'int32',
        'data' => null,
        'page_size' => 'int32',
        'scroll_id' => null,
        'start' => 'int32',
        'total_count' => 'int64',
        'total_page_count' => 'int32'
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
        'current_page_no' => 'currentPageNo',
        'data' => 'data',
        'page_size' => 'pageSize',
        'scroll_id' => 'scrollId',
        'start' => 'start',
        'total_count' => 'totalCount',
        'total_page_count' => 'totalPageCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'current_page_no' => 'setCurrentPageNo',
        'data' => 'setData',
        'page_size' => 'setPageSize',
        'scroll_id' => 'setScrollId',
        'start' => 'setStart',
        'total_count' => 'setTotalCount',
        'total_page_count' => 'setTotalPageCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'current_page_no' => 'getCurrentPageNo',
        'data' => 'getData',
        'page_size' => 'getPageSize',
        'scroll_id' => 'getScrollId',
        'start' => 'getStart',
        'total_count' => 'getTotalCount',
        'total_page_count' => 'getTotalPageCount'
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
        $this->container['current_page_no'] = isset($data['current_page_no']) ? $data['current_page_no'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['page_size'] = isset($data['page_size']) ? $data['page_size'] : null;
        $this->container['scroll_id'] = isset($data['scroll_id']) ? $data['scroll_id'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['total_count'] = isset($data['total_count']) ? $data['total_count'] : null;
        $this->container['total_page_count'] = isset($data['total_page_count']) ? $data['total_page_count'] : null;
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
     * Gets current_page_no
     *
     * @return int
     */
    public function getCurrentPageNo()
    {
        return $this->container['current_page_no'];
    }

    /**
     * Sets current_page_no
     *
     * @param int $current_page_no current_page_no
     *
     * @return $this
     */
    public function setCurrentPageNo($current_page_no)
    {
        $this->container['current_page_no'] = $current_page_no;

        return $this;
    }

    /**
     * Gets data
     *
     * @return \Swagger\Client\Model\NotificationSimpleWrapper[]
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param \Swagger\Client\Model\NotificationSimpleWrapper[] $data data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return int
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param int $page_size page_size
     *
     * @return $this
     */
    public function setPageSize($page_size)
    {
        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets scroll_id
     *
     * @return string
     */
    public function getScrollId()
    {
        return $this->container['scroll_id'];
    }

    /**
     * Sets scroll_id
     *
     * @param string $scroll_id scroll_id
     *
     * @return $this
     */
    public function setScrollId($scroll_id)
    {
        $this->container['scroll_id'] = $scroll_id;

        return $this;
    }

    /**
     * Gets start
     *
     * @return int
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param int $start start
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets total_count
     *
     * @return int
     */
    public function getTotalCount()
    {
        return $this->container['total_count'];
    }

    /**
     * Sets total_count
     *
     * @param int $total_count total_count
     *
     * @return $this
     */
    public function setTotalCount($total_count)
    {
        $this->container['total_count'] = $total_count;

        return $this;
    }

    /**
     * Gets total_page_count
     *
     * @return int
     */
    public function getTotalPageCount()
    {
        return $this->container['total_page_count'];
    }

    /**
     * Sets total_page_count
     *
     * @param int $total_page_count total_page_count
     *
     * @return $this
     */
    public function setTotalPageCount($total_page_count)
    {
        $this->container['total_page_count'] = $total_page_count;

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

