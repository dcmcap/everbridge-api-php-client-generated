<?php
/**
 * ContactAddressWrapper
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
 * ContactAddressWrapper Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContactAddressWrapper implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ContactAddressWrapper';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'arrive_date' => '\DateTime',
        'asset_external_id' => 'string',
        'city' => 'string',
        'country' => 'string',
        'expire_date' => '\DateTime',
        'gis_location' => '\Swagger\Client\Model\GisLocationWrapper',
        'iata' => 'string',
        'location_id' => 'int',
        'location_name' => 'string',
        'location_source' => 'string',
        'location_source_id' => 'int',
        'new_asset_id' => 'string',
        'postal_code' => 'string',
        'source' => 'string',
        'state' => 'string',
        'street_address' => 'string',
        'suite' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'arrive_date' => 'date-time',
        'asset_external_id' => null,
        'city' => null,
        'country' => null,
        'expire_date' => 'date-time',
        'gis_location' => null,
        'iata' => null,
        'location_id' => 'int64',
        'location_name' => null,
        'location_source' => null,
        'location_source_id' => 'int64',
        'new_asset_id' => null,
        'postal_code' => null,
        'source' => null,
        'state' => null,
        'street_address' => null,
        'suite' => null
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
        'arrive_date' => 'arriveDate',
        'asset_external_id' => 'assetExternalId',
        'city' => 'city',
        'country' => 'country',
        'expire_date' => 'expireDate',
        'gis_location' => 'gisLocation',
        'iata' => 'iata',
        'location_id' => 'locationId',
        'location_name' => 'locationName',
        'location_source' => 'locationSource',
        'location_source_id' => 'locationSourceId',
        'new_asset_id' => 'newAssetId',
        'postal_code' => 'postalCode',
        'source' => 'source',
        'state' => 'state',
        'street_address' => 'streetAddress',
        'suite' => 'suite'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'arrive_date' => 'setArriveDate',
        'asset_external_id' => 'setAssetExternalId',
        'city' => 'setCity',
        'country' => 'setCountry',
        'expire_date' => 'setExpireDate',
        'gis_location' => 'setGisLocation',
        'iata' => 'setIata',
        'location_id' => 'setLocationId',
        'location_name' => 'setLocationName',
        'location_source' => 'setLocationSource',
        'location_source_id' => 'setLocationSourceId',
        'new_asset_id' => 'setNewAssetId',
        'postal_code' => 'setPostalCode',
        'source' => 'setSource',
        'state' => 'setState',
        'street_address' => 'setStreetAddress',
        'suite' => 'setSuite'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'arrive_date' => 'getArriveDate',
        'asset_external_id' => 'getAssetExternalId',
        'city' => 'getCity',
        'country' => 'getCountry',
        'expire_date' => 'getExpireDate',
        'gis_location' => 'getGisLocation',
        'iata' => 'getIata',
        'location_id' => 'getLocationId',
        'location_name' => 'getLocationName',
        'location_source' => 'getLocationSource',
        'location_source_id' => 'getLocationSourceId',
        'new_asset_id' => 'getNewAssetId',
        'postal_code' => 'getPostalCode',
        'source' => 'getSource',
        'state' => 'getState',
        'street_address' => 'getStreetAddress',
        'suite' => 'getSuite'
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

    const SOURCE_MANUAL = 'MANUAL';
    const SOURCE_AUTO = 'AUTO';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceAllowableValues()
    {
        return [
            self::SOURCE_MANUAL,
            self::SOURCE_AUTO,
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
        $this->container['arrive_date'] = isset($data['arrive_date']) ? $data['arrive_date'] : null;
        $this->container['asset_external_id'] = isset($data['asset_external_id']) ? $data['asset_external_id'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['expire_date'] = isset($data['expire_date']) ? $data['expire_date'] : null;
        $this->container['gis_location'] = isset($data['gis_location']) ? $data['gis_location'] : null;
        $this->container['iata'] = isset($data['iata']) ? $data['iata'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['location_name'] = isset($data['location_name']) ? $data['location_name'] : null;
        $this->container['location_source'] = isset($data['location_source']) ? $data['location_source'] : null;
        $this->container['location_source_id'] = isset($data['location_source_id']) ? $data['location_source_id'] : null;
        $this->container['new_asset_id'] = isset($data['new_asset_id']) ? $data['new_asset_id'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['street_address'] = isset($data['street_address']) ? $data['street_address'] : null;
        $this->container['suite'] = isset($data['suite']) ? $data['suite'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($this->container['source']) && !in_array($this->container['source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'source', must be one of '%s'",
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
     * Gets arrive_date
     *
     * @return \DateTime
     */
    public function getArriveDate()
    {
        return $this->container['arrive_date'];
    }

    /**
     * Sets arrive_date
     *
     * @param \DateTime $arrive_date arrive_date
     *
     * @return $this
     */
    public function setArriveDate($arrive_date)
    {
        $this->container['arrive_date'] = $arrive_date;

        return $this;
    }

    /**
     * Gets asset_external_id
     *
     * @return string
     */
    public function getAssetExternalId()
    {
        return $this->container['asset_external_id'];
    }

    /**
     * Sets asset_external_id
     *
     * @param string $asset_external_id asset_external_id
     *
     * @return $this
     */
    public function setAssetExternalId($asset_external_id)
    {
        $this->container['asset_external_id'] = $asset_external_id;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets expire_date
     *
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->container['expire_date'];
    }

    /**
     * Sets expire_date
     *
     * @param \DateTime $expire_date expire_date
     *
     * @return $this
     */
    public function setExpireDate($expire_date)
    {
        $this->container['expire_date'] = $expire_date;

        return $this;
    }

    /**
     * Gets gis_location
     *
     * @return \Swagger\Client\Model\GisLocationWrapper
     */
    public function getGisLocation()
    {
        return $this->container['gis_location'];
    }

    /**
     * Sets gis_location
     *
     * @param \Swagger\Client\Model\GisLocationWrapper $gis_location gis_location
     *
     * @return $this
     */
    public function setGisLocation($gis_location)
    {
        $this->container['gis_location'] = $gis_location;

        return $this;
    }

    /**
     * Gets iata
     *
     * @return string
     */
    public function getIata()
    {
        return $this->container['iata'];
    }

    /**
     * Sets iata
     *
     * @param string $iata iata
     *
     * @return $this
     */
    public function setIata($iata)
    {
        $this->container['iata'] = $iata;

        return $this;
    }

    /**
     * Gets location_id
     *
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param int $location_id location_id
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets location_name
     *
     * @return string
     */
    public function getLocationName()
    {
        return $this->container['location_name'];
    }

    /**
     * Sets location_name
     *
     * @param string $location_name location_name
     *
     * @return $this
     */
    public function setLocationName($location_name)
    {
        $this->container['location_name'] = $location_name;

        return $this;
    }

    /**
     * Gets location_source
     *
     * @return string
     */
    public function getLocationSource()
    {
        return $this->container['location_source'];
    }

    /**
     * Sets location_source
     *
     * @param string $location_source location_source
     *
     * @return $this
     */
    public function setLocationSource($location_source)
    {
        $this->container['location_source'] = $location_source;

        return $this;
    }

    /**
     * Gets location_source_id
     *
     * @return int
     */
    public function getLocationSourceId()
    {
        return $this->container['location_source_id'];
    }

    /**
     * Sets location_source_id
     *
     * @param int $location_source_id location_source_id
     *
     * @return $this
     */
    public function setLocationSourceId($location_source_id)
    {
        $this->container['location_source_id'] = $location_source_id;

        return $this;
    }

    /**
     * Gets new_asset_id
     *
     * @return string
     */
    public function getNewAssetId()
    {
        return $this->container['new_asset_id'];
    }

    /**
     * Sets new_asset_id
     *
     * @param string $new_asset_id new_asset_id
     *
     * @return $this
     */
    public function setNewAssetId($new_asset_id)
    {
        $this->container['new_asset_id'] = $new_asset_id;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code postal_code
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($source) && !in_array($source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'source', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets street_address
     *
     * @return string
     */
    public function getStreetAddress()
    {
        return $this->container['street_address'];
    }

    /**
     * Sets street_address
     *
     * @param string $street_address street_address
     *
     * @return $this
     */
    public function setStreetAddress($street_address)
    {
        $this->container['street_address'] = $street_address;

        return $this;
    }

    /**
     * Gets suite
     *
     * @return string
     */
    public function getSuite()
    {
        return $this->container['suite'];
    }

    /**
     * Sets suite
     *
     * @param string $suite suite
     *
     * @return $this
     */
    public function setSuite($suite)
    {
        $this->container['suite'] = $suite;

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


