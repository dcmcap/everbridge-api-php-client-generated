<?php
/**
 * PhaseDefinitionWrapper
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
 * PhaseDefinitionWrapper Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PhaseDefinitionWrapper implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PhaseDefinitionWrapper';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'incident_status' => 'string',
        'is_default' => 'bool',
        'name' => 'string',
        'phase_node_type' => 'string',
        'seq' => 'int',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'incident_status' => null,
        'is_default' => null,
        'name' => null,
        'phase_node_type' => null,
        'seq' => 'int32',
        'status' => null
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
        'incident_status' => 'incidentStatus',
        'is_default' => 'isDefault',
        'name' => 'name',
        'phase_node_type' => 'phaseNodeType',
        'seq' => 'seq',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'incident_status' => 'setIncidentStatus',
        'is_default' => 'setIsDefault',
        'name' => 'setName',
        'phase_node_type' => 'setPhaseNodeType',
        'seq' => 'setSeq',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'incident_status' => 'getIncidentStatus',
        'is_default' => 'getIsDefault',
        'name' => 'getName',
        'phase_node_type' => 'getPhaseNodeType',
        'seq' => 'getSeq',
        'status' => 'getStatus'
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

    const INCIDENT_STATUS_OPEN = 'Open';
    const INCIDENT_STATUS_CLOSED = 'Closed';
    const INCIDENT_STATUS_ALL = 'All';
    const PHASE_NODE_TYPE_BEGIN = 'Begin';
    const PHASE_NODE_TYPE_RUNNING = 'Running';
    const PHASE_NODE_TYPE_END = 'End';
    const STATUS_A = 'A';
    const STATUS_D = 'D';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIncidentStatusAllowableValues()
    {
        return [
            self::INCIDENT_STATUS_OPEN,
            self::INCIDENT_STATUS_CLOSED,
            self::INCIDENT_STATUS_ALL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPhaseNodeTypeAllowableValues()
    {
        return [
            self::PHASE_NODE_TYPE_BEGIN,
            self::PHASE_NODE_TYPE_RUNNING,
            self::PHASE_NODE_TYPE_END,
        ];
    }
    
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
        $this->container['incident_status'] = isset($data['incident_status']) ? $data['incident_status'] : null;
        $this->container['is_default'] = isset($data['is_default']) ? $data['is_default'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['phase_node_type'] = isset($data['phase_node_type']) ? $data['phase_node_type'] : null;
        $this->container['seq'] = isset($data['seq']) ? $data['seq'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getIncidentStatusAllowableValues();
        if (!is_null($this->container['incident_status']) && !in_array($this->container['incident_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'incident_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPhaseNodeTypeAllowableValues();
        if (!is_null($this->container['phase_node_type']) && !in_array($this->container['phase_node_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'phase_node_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * Gets incident_status
     *
     * @return string
     */
    public function getIncidentStatus()
    {
        return $this->container['incident_status'];
    }

    /**
     * Sets incident_status
     *
     * @param string $incident_status incident_status
     *
     * @return $this
     */
    public function setIncidentStatus($incident_status)
    {
        $allowedValues = $this->getIncidentStatusAllowableValues();
        if (!is_null($incident_status) && !in_array($incident_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'incident_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['incident_status'] = $incident_status;

        return $this;
    }

    /**
     * Gets is_default
     *
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->container['is_default'];
    }

    /**
     * Sets is_default
     *
     * @param bool $is_default is_default
     *
     * @return $this
     */
    public function setIsDefault($is_default)
    {
        $this->container['is_default'] = $is_default;

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
     * Gets phase_node_type
     *
     * @return string
     */
    public function getPhaseNodeType()
    {
        return $this->container['phase_node_type'];
    }

    /**
     * Sets phase_node_type
     *
     * @param string $phase_node_type phase_node_type
     *
     * @return $this
     */
    public function setPhaseNodeType($phase_node_type)
    {
        $allowedValues = $this->getPhaseNodeTypeAllowableValues();
        if (!is_null($phase_node_type) && !in_array($phase_node_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'phase_node_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['phase_node_type'] = $phase_node_type;

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


