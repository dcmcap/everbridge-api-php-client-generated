<?php
/**
 * RoleWrapper
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
 * RoleWrapper Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RoleWrapper implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RoleWrapper';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'permission_scope' => '\Swagger\Client\Model\PermissionScopeWrapper',
        'role_data_scope' => '\Swagger\Client\Model\RoleDataScopeWrapper',
        'role_template' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'name' => null,
        'permission_scope' => null,
        'role_data_scope' => null,
        'role_template' => null
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
        'id' => 'id',
        'name' => 'name',
        'permission_scope' => 'permissionScope',
        'role_data_scope' => 'roleDataScope',
        'role_template' => 'roleTemplate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'permission_scope' => 'setPermissionScope',
        'role_data_scope' => 'setRoleDataScope',
        'role_template' => 'setRoleTemplate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'permission_scope' => 'getPermissionScope',
        'role_data_scope' => 'getRoleDataScope',
        'role_template' => 'getRoleTemplate'
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

    const ROLE_TEMPLATE_EB = 'EB';
    const ROLE_TEMPLATE_SUPPORT = 'SUPPORT';
    const ROLE_TEMPLATE_ACCOUNT_ADMIN = 'ACCOUNT_ADMIN';
    const ROLE_TEMPLATE_ORGANIZATION_ADMIN = 'ORGANIZATION_ADMIN';
    const ROLE_TEMPLATE_MASS_NOTIFICATION_OPERATOR = 'MASS_NOTIFICATION_OPERATOR';
    const ROLE_TEMPLATE_INCIDENT_OPERATOR = 'INCIDENT_OPERATOR';
    const ROLE_TEMPLATE_DISPATCHER = 'DISPATCHER';
    const ROLE_TEMPLATE_DISPATCHER_IPAWS_CMAS = 'DISPATCHER_IPAWS_CMAS';
    const ROLE_TEMPLATE_DATA_MANAGER = 'DATA_MANAGER';
    const ROLE_TEMPLATE_INCIDENT_ADMIN = 'INCIDENT_ADMIN';
    const ROLE_TEMPLATE_CUSTOM = 'CUSTOM';
    const ROLE_TEMPLATE_GROUP_MANAGER = 'GROUP_MANAGER';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRoleTemplateAllowableValues()
    {
        return [
            self::ROLE_TEMPLATE_EB,
            self::ROLE_TEMPLATE_SUPPORT,
            self::ROLE_TEMPLATE_ACCOUNT_ADMIN,
            self::ROLE_TEMPLATE_ORGANIZATION_ADMIN,
            self::ROLE_TEMPLATE_MASS_NOTIFICATION_OPERATOR,
            self::ROLE_TEMPLATE_INCIDENT_OPERATOR,
            self::ROLE_TEMPLATE_DISPATCHER,
            self::ROLE_TEMPLATE_DISPATCHER_IPAWS_CMAS,
            self::ROLE_TEMPLATE_DATA_MANAGER,
            self::ROLE_TEMPLATE_INCIDENT_ADMIN,
            self::ROLE_TEMPLATE_CUSTOM,
            self::ROLE_TEMPLATE_GROUP_MANAGER,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['permission_scope'] = isset($data['permission_scope']) ? $data['permission_scope'] : null;
        $this->container['role_data_scope'] = isset($data['role_data_scope']) ? $data['role_data_scope'] : null;
        $this->container['role_template'] = isset($data['role_template']) ? $data['role_template'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRoleTemplateAllowableValues();
        if (!is_null($this->container['role_template']) && !in_array($this->container['role_template'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'role_template', must be one of '%s'",
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
     * Gets permission_scope
     *
     * @return \Swagger\Client\Model\PermissionScopeWrapper
     */
    public function getPermissionScope()
    {
        return $this->container['permission_scope'];
    }

    /**
     * Sets permission_scope
     *
     * @param \Swagger\Client\Model\PermissionScopeWrapper $permission_scope permission_scope
     *
     * @return $this
     */
    public function setPermissionScope($permission_scope)
    {
        $this->container['permission_scope'] = $permission_scope;

        return $this;
    }

    /**
     * Gets role_data_scope
     *
     * @return \Swagger\Client\Model\RoleDataScopeWrapper
     */
    public function getRoleDataScope()
    {
        return $this->container['role_data_scope'];
    }

    /**
     * Sets role_data_scope
     *
     * @param \Swagger\Client\Model\RoleDataScopeWrapper $role_data_scope role_data_scope
     *
     * @return $this
     */
    public function setRoleDataScope($role_data_scope)
    {
        $this->container['role_data_scope'] = $role_data_scope;

        return $this;
    }

    /**
     * Gets role_template
     *
     * @return string
     */
    public function getRoleTemplate()
    {
        return $this->container['role_template'];
    }

    /**
     * Sets role_template
     *
     * @param string $role_template role_template
     *
     * @return $this
     */
    public function setRoleTemplate($role_template)
    {
        $allowedValues = $this->getRoleTemplateAllowableValues();
        if (!is_null($role_template) && !in_array($role_template, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'role_template', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['role_template'] = $role_template;

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


