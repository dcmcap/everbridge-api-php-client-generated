<?php
/**
 * GisSettingWrapper
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
 * GisSettingWrapper Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GisSettingWrapper implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GisSettingWrapper';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'base_map' => 'int',
        'latitude' => 'double',
        'longitude' => 'double',
        'map_center' => 'string',
        'map_zoom_level' => 'int',
        'projection' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'base_map' => 'int64',
        'latitude' => 'double',
        'longitude' => 'double',
        'map_center' => null,
        'map_zoom_level' => 'int64',
        'projection' => 'int64'
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
        'base_map' => 'baseMap',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'map_center' => 'mapCenter',
        'map_zoom_level' => 'mapZoomLevel',
        'projection' => 'projection'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'base_map' => 'setBaseMap',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'map_center' => 'setMapCenter',
        'map_zoom_level' => 'setMapZoomLevel',
        'projection' => 'setProjection'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'base_map' => 'getBaseMap',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'map_center' => 'getMapCenter',
        'map_zoom_level' => 'getMapZoomLevel',
        'projection' => 'getProjection'
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
        $this->container['base_map'] = isset($data['base_map']) ? $data['base_map'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['map_center'] = isset($data['map_center']) ? $data['map_center'] : null;
        $this->container['map_zoom_level'] = isset($data['map_zoom_level']) ? $data['map_zoom_level'] : null;
        $this->container['projection'] = isset($data['projection']) ? $data['projection'] : null;
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
     * Gets base_map
     *
     * @return int
     */
    public function getBaseMap()
    {
        return $this->container['base_map'];
    }

    /**
     * Sets base_map
     *
     * @param int $base_map base_map
     *
     * @return $this
     */
    public function setBaseMap($base_map)
    {
        $this->container['base_map'] = $base_map;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return double
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param double $latitude latitude
     *
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return double
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param double $longitude longitude
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets map_center
     *
     * @return string
     */
    public function getMapCenter()
    {
        return $this->container['map_center'];
    }

    /**
     * Sets map_center
     *
     * @param string $map_center map_center
     *
     * @return $this
     */
    public function setMapCenter($map_center)
    {
        $this->container['map_center'] = $map_center;

        return $this;
    }

    /**
     * Gets map_zoom_level
     *
     * @return int
     */
    public function getMapZoomLevel()
    {
        return $this->container['map_zoom_level'];
    }

    /**
     * Sets map_zoom_level
     *
     * @param int $map_zoom_level map_zoom_level
     *
     * @return $this
     */
    public function setMapZoomLevel($map_zoom_level)
    {
        $this->container['map_zoom_level'] = $map_zoom_level;

        return $this;
    }

    /**
     * Gets projection
     *
     * @return int
     */
    public function getProjection()
    {
        return $this->container['projection'];
    }

    /**
     * Sets projection
     *
     * @param int $projection projection
     *
     * @return $this
     */
    public function setProjection($projection)
    {
        $this->container['projection'] = $projection;

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


