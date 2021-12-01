<?php
/**
 * VariableItemWrapper
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
 * VariableItemWrapper Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VariableItemWrapper implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VariableItemWrapper';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_id' => 'int',
        'created_date' => '\DateTime',
        'created_id' => 'int',
        'created_name' => 'string',
        'created_proxy_name' => 'string',
        'ext_properties' => 'map[string,string]',
        'id' => 'int',
        'last_modified_date' => '\DateTime',
        'last_modified_id' => 'int',
        'last_modified_name' => 'string',
        'last_modified_proxy_name' => 'string',
        'module' => 'string',
        'name' => 'string',
        'organization_id' => 'int',
        'resource_bundle_id' => 'int',
        'seq' => 'int',
        'status' => 'string',
        'tooltip' => 'string',
        'var_type' => 'string',
        'variable_options' => '\Swagger\Client\Model\VariableOptionWrapper[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_id' => 'int64',
        'created_date' => 'date-time',
        'created_id' => 'int64',
        'created_name' => null,
        'created_proxy_name' => null,
        'ext_properties' => null,
        'id' => 'int64',
        'last_modified_date' => 'date-time',
        'last_modified_id' => 'int64',
        'last_modified_name' => null,
        'last_modified_proxy_name' => null,
        'module' => null,
        'name' => null,
        'organization_id' => 'int64',
        'resource_bundle_id' => 'int64',
        'seq' => 'int32',
        'status' => null,
        'tooltip' => null,
        'var_type' => null,
        'variable_options' => null
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
        'account_id' => 'accountId',
        'created_date' => 'createdDate',
        'created_id' => 'createdId',
        'created_name' => 'createdName',
        'created_proxy_name' => 'createdProxyName',
        'ext_properties' => 'extProperties',
        'id' => 'id',
        'last_modified_date' => 'lastModifiedDate',
        'last_modified_id' => 'lastModifiedId',
        'last_modified_name' => 'lastModifiedName',
        'last_modified_proxy_name' => 'lastModifiedProxyName',
        'module' => 'module',
        'name' => 'name',
        'organization_id' => 'organizationId',
        'resource_bundle_id' => 'resourceBundleId',
        'seq' => 'seq',
        'status' => 'status',
        'tooltip' => 'tooltip',
        'var_type' => 'varType',
        'variable_options' => 'variableOptions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'created_date' => 'setCreatedDate',
        'created_id' => 'setCreatedId',
        'created_name' => 'setCreatedName',
        'created_proxy_name' => 'setCreatedProxyName',
        'ext_properties' => 'setExtProperties',
        'id' => 'setId',
        'last_modified_date' => 'setLastModifiedDate',
        'last_modified_id' => 'setLastModifiedId',
        'last_modified_name' => 'setLastModifiedName',
        'last_modified_proxy_name' => 'setLastModifiedProxyName',
        'module' => 'setModule',
        'name' => 'setName',
        'organization_id' => 'setOrganizationId',
        'resource_bundle_id' => 'setResourceBundleId',
        'seq' => 'setSeq',
        'status' => 'setStatus',
        'tooltip' => 'setTooltip',
        'var_type' => 'setVarType',
        'variable_options' => 'setVariableOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'created_date' => 'getCreatedDate',
        'created_id' => 'getCreatedId',
        'created_name' => 'getCreatedName',
        'created_proxy_name' => 'getCreatedProxyName',
        'ext_properties' => 'getExtProperties',
        'id' => 'getId',
        'last_modified_date' => 'getLastModifiedDate',
        'last_modified_id' => 'getLastModifiedId',
        'last_modified_name' => 'getLastModifiedName',
        'last_modified_proxy_name' => 'getLastModifiedProxyName',
        'module' => 'getModule',
        'name' => 'getName',
        'organization_id' => 'getOrganizationId',
        'resource_bundle_id' => 'getResourceBundleId',
        'seq' => 'getSeq',
        'status' => 'getStatus',
        'tooltip' => 'getTooltip',
        'var_type' => 'getVarType',
        'variable_options' => 'getVariableOptions'
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

    const STATUS_A = 'A';
    const STATUS_D = 'D';
    const VAR_TYPE_TEXTBOX = 'Textbox';
    const VAR_TYPE_TEXTAREA = 'Textarea';
    const VAR_TYPE_DATE = 'Date';
    const VAR_TYPE_DATE_RANGE = 'DateRange';
    const VAR_TYPE_SINGLE = 'Single';
    const VAR_TYPE_MULTIPLE = 'Multiple';
    const VAR_TYPE_COMBO_BOX = 'ComboBox';
    const VAR_TYPE_LOCATION_GEO_POINT = 'LocationGeoPoint';
    const VAR_TYPE_LOCATION_GEO_SHAPES = 'LocationGeoShapes';
    const VAR_TYPE_SINGLE_RADIO = 'SingleRadio';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_A,
            self::STATUS_D,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVarTypeAllowableValues()
    {
        return [
            self::VAR_TYPE_TEXTBOX,
            self::VAR_TYPE_TEXTAREA,
            self::VAR_TYPE_DATE,
            self::VAR_TYPE_DATE_RANGE,
            self::VAR_TYPE_SINGLE,
            self::VAR_TYPE_MULTIPLE,
            self::VAR_TYPE_COMBO_BOX,
            self::VAR_TYPE_LOCATION_GEO_POINT,
            self::VAR_TYPE_LOCATION_GEO_SHAPES,
            self::VAR_TYPE_SINGLE_RADIO,
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['created_id'] = isset($data['created_id']) ? $data['created_id'] : null;
        $this->container['created_name'] = isset($data['created_name']) ? $data['created_name'] : null;
        $this->container['created_proxy_name'] = isset($data['created_proxy_name']) ? $data['created_proxy_name'] : null;
        $this->container['ext_properties'] = isset($data['ext_properties']) ? $data['ext_properties'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['last_modified_date'] = isset($data['last_modified_date']) ? $data['last_modified_date'] : null;
        $this->container['last_modified_id'] = isset($data['last_modified_id']) ? $data['last_modified_id'] : null;
        $this->container['last_modified_name'] = isset($data['last_modified_name']) ? $data['last_modified_name'] : null;
        $this->container['last_modified_proxy_name'] = isset($data['last_modified_proxy_name']) ? $data['last_modified_proxy_name'] : null;
        $this->container['module'] = isset($data['module']) ? $data['module'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['organization_id'] = isset($data['organization_id']) ? $data['organization_id'] : null;
        $this->container['resource_bundle_id'] = isset($data['resource_bundle_id']) ? $data['resource_bundle_id'] : null;
        $this->container['seq'] = isset($data['seq']) ? $data['seq'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tooltip'] = isset($data['tooltip']) ? $data['tooltip'] : null;
        $this->container['var_type'] = isset($data['var_type']) ? $data['var_type'] : null;
        $this->container['variable_options'] = isset($data['variable_options']) ? $data['variable_options'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getVarTypeAllowableValues();
        if (!is_null($this->container['var_type']) && !in_array($this->container['var_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'var_type', must be one of '%s'",
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
     * Gets account_id
     *
     * @return int
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param int $account_id account_id
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

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
     * Gets created_id
     *
     * @return int
     */
    public function getCreatedId()
    {
        return $this->container['created_id'];
    }

    /**
     * Sets created_id
     *
     * @param int $created_id created_id
     *
     * @return $this
     */
    public function setCreatedId($created_id)
    {
        $this->container['created_id'] = $created_id;

        return $this;
    }

    /**
     * Gets created_name
     *
     * @return string
     */
    public function getCreatedName()
    {
        return $this->container['created_name'];
    }

    /**
     * Sets created_name
     *
     * @param string $created_name created_name
     *
     * @return $this
     */
    public function setCreatedName($created_name)
    {
        $this->container['created_name'] = $created_name;

        return $this;
    }

    /**
     * Gets created_proxy_name
     *
     * @return string
     */
    public function getCreatedProxyName()
    {
        return $this->container['created_proxy_name'];
    }

    /**
     * Sets created_proxy_name
     *
     * @param string $created_proxy_name created_proxy_name
     *
     * @return $this
     */
    public function setCreatedProxyName($created_proxy_name)
    {
        $this->container['created_proxy_name'] = $created_proxy_name;

        return $this;
    }

    /**
     * Gets ext_properties
     *
     * @return map[string,string]
     */
    public function getExtProperties()
    {
        return $this->container['ext_properties'];
    }

    /**
     * Sets ext_properties
     *
     * @param map[string,string] $ext_properties ext_properties
     *
     * @return $this
     */
    public function setExtProperties($ext_properties)
    {
        $this->container['ext_properties'] = $ext_properties;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * Gets last_modified_id
     *
     * @return int
     */
    public function getLastModifiedId()
    {
        return $this->container['last_modified_id'];
    }

    /**
     * Sets last_modified_id
     *
     * @param int $last_modified_id last_modified_id
     *
     * @return $this
     */
    public function setLastModifiedId($last_modified_id)
    {
        $this->container['last_modified_id'] = $last_modified_id;

        return $this;
    }

    /**
     * Gets last_modified_name
     *
     * @return string
     */
    public function getLastModifiedName()
    {
        return $this->container['last_modified_name'];
    }

    /**
     * Sets last_modified_name
     *
     * @param string $last_modified_name last_modified_name
     *
     * @return $this
     */
    public function setLastModifiedName($last_modified_name)
    {
        $this->container['last_modified_name'] = $last_modified_name;

        return $this;
    }

    /**
     * Gets last_modified_proxy_name
     *
     * @return string
     */
    public function getLastModifiedProxyName()
    {
        return $this->container['last_modified_proxy_name'];
    }

    /**
     * Sets last_modified_proxy_name
     *
     * @param string $last_modified_proxy_name last_modified_proxy_name
     *
     * @return $this
     */
    public function setLastModifiedProxyName($last_modified_proxy_name)
    {
        $this->container['last_modified_proxy_name'] = $last_modified_proxy_name;

        return $this;
    }

    /**
     * Gets module
     *
     * @return string
     */
    public function getModule()
    {
        return $this->container['module'];
    }

    /**
     * Sets module
     *
     * @param string $module module
     *
     * @return $this
     */
    public function setModule($module)
    {
        $this->container['module'] = $module;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets organization_id
     *
     * @return int
     */
    public function getOrganizationId()
    {
        return $this->container['organization_id'];
    }

    /**
     * Sets organization_id
     *
     * @param int $organization_id organization_id
     *
     * @return $this
     */
    public function setOrganizationId($organization_id)
    {
        $this->container['organization_id'] = $organization_id;

        return $this;
    }

    /**
     * Gets resource_bundle_id
     *
     * @return int
     */
    public function getResourceBundleId()
    {
        return $this->container['resource_bundle_id'];
    }

    /**
     * Sets resource_bundle_id
     *
     * @param int $resource_bundle_id resource_bundle_id
     *
     * @return $this
     */
    public function setResourceBundleId($resource_bundle_id)
    {
        $this->container['resource_bundle_id'] = $resource_bundle_id;

        return $this;
    }

    /**
     * Gets seq
     *
     * @return int
     */
    public function getSeq()
    {
        return $this->container['seq'];
    }

    /**
     * Sets seq
     *
     * @param int $seq seq
     *
     * @return $this
     */
    public function setSeq($seq)
    {
        $this->container['seq'] = $seq;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets tooltip
     *
     * @return string
     */
    public function getTooltip()
    {
        return $this->container['tooltip'];
    }

    /**
     * Sets tooltip
     *
     * @param string $tooltip tooltip
     *
     * @return $this
     */
    public function setTooltip($tooltip)
    {
        $this->container['tooltip'] = $tooltip;

        return $this;
    }

    /**
     * Gets var_type
     *
     * @return string
     */
    public function getVarType()
    {
        return $this->container['var_type'];
    }

    /**
     * Sets var_type
     *
     * @param string $var_type var_type
     *
     * @return $this
     */
    public function setVarType($var_type)
    {
        $allowedValues = $this->getVarTypeAllowableValues();
        if (!is_null($var_type) && !in_array($var_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'var_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['var_type'] = $var_type;

        return $this;
    }

    /**
     * Gets variable_options
     *
     * @return \Swagger\Client\Model\VariableOptionWrapper[]
     */
    public function getVariableOptions()
    {
        return $this->container['variable_options'];
    }

    /**
     * Sets variable_options
     *
     * @param \Swagger\Client\Model\VariableOptionWrapper[] $variable_options variable_options
     *
     * @return $this
     */
    public function setVariableOptions($variable_options)
    {
        $this->container['variable_options'] = $variable_options;

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


