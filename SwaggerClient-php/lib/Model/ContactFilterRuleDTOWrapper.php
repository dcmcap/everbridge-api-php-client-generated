<?php
/**
 * ContactFilterRuleDTOWrapper
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
 * ContactFilterRuleDTOWrapper Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContactFilterRuleDTOWrapper implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ContactFilterRuleDTOWrapper';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'field_context' => 'string',
        'field_name' => 'string',
        'field_value' => 'string',
        'field_values' => 'string[]',
        'filter_operator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'field_context' => null,
        'field_name' => null,
        'field_value' => null,
        'field_values' => null,
        'filter_operator' => null
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
        'field_context' => 'fieldContext',
        'field_name' => 'fieldName',
        'field_value' => 'fieldValue',
        'field_values' => 'fieldValues',
        'filter_operator' => 'filterOperator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'field_context' => 'setFieldContext',
        'field_name' => 'setFieldName',
        'field_value' => 'setFieldValue',
        'field_values' => 'setFieldValues',
        'filter_operator' => 'setFilterOperator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'field_context' => 'getFieldContext',
        'field_name' => 'getFieldName',
        'field_value' => 'getFieldValue',
        'field_values' => 'getFieldValues',
        'filter_operator' => 'getFilterOperator'
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

    const FILTER_OPERATOR_IN = 'IN';
    const FILTER_OPERATOR_GT = 'GT';
    const FILTER_OPERATOR_GTE = 'GTE';
    const FILTER_OPERATOR_LT = 'LT';
    const FILTER_OPERATOR_LTE = 'LTE';
    const FILTER_OPERATOR_EQUAL = 'EQUAL';
    const FILTER_OPERATOR_NOT_EQUAL = 'NOT_EQUAL';
    const FILTER_OPERATOR_START_WITH = 'START_WITH';
    const FILTER_OPERATOR_END_WITH = 'END_WITH';
    const FILTER_OPERATOR_CONTAIN = 'CONTAIN';
    const FILTER_OPERATOR_DOES_NOT_CONTAIN = 'DOES_NOT_CONTAIN';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFilterOperatorAllowableValues()
    {
        return [
            self::FILTER_OPERATOR_IN,
            self::FILTER_OPERATOR_GT,
            self::FILTER_OPERATOR_GTE,
            self::FILTER_OPERATOR_LT,
            self::FILTER_OPERATOR_LTE,
            self::FILTER_OPERATOR_EQUAL,
            self::FILTER_OPERATOR_NOT_EQUAL,
            self::FILTER_OPERATOR_START_WITH,
            self::FILTER_OPERATOR_END_WITH,
            self::FILTER_OPERATOR_CONTAIN,
            self::FILTER_OPERATOR_DOES_NOT_CONTAIN,
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
        $this->container['field_context'] = isset($data['field_context']) ? $data['field_context'] : null;
        $this->container['field_name'] = isset($data['field_name']) ? $data['field_name'] : null;
        $this->container['field_value'] = isset($data['field_value']) ? $data['field_value'] : null;
        $this->container['field_values'] = isset($data['field_values']) ? $data['field_values'] : null;
        $this->container['filter_operator'] = isset($data['filter_operator']) ? $data['filter_operator'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFilterOperatorAllowableValues();
        if (!is_null($this->container['filter_operator']) && !in_array($this->container['filter_operator'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'filter_operator', must be one of '%s'",
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
     * Gets field_context
     *
     * @return string
     */
    public function getFieldContext()
    {
        return $this->container['field_context'];
    }

    /**
     * Sets field_context
     *
     * @param string $field_context field_context
     *
     * @return $this
     */
    public function setFieldContext($field_context)
    {
        $this->container['field_context'] = $field_context;

        return $this;
    }

    /**
     * Gets field_name
     *
     * @return string
     */
    public function getFieldName()
    {
        return $this->container['field_name'];
    }

    /**
     * Sets field_name
     *
     * @param string $field_name field_name
     *
     * @return $this
     */
    public function setFieldName($field_name)
    {
        $this->container['field_name'] = $field_name;

        return $this;
    }

    /**
     * Gets field_value
     *
     * @return string
     */
    public function getFieldValue()
    {
        return $this->container['field_value'];
    }

    /**
     * Sets field_value
     *
     * @param string $field_value field_value
     *
     * @return $this
     */
    public function setFieldValue($field_value)
    {
        $this->container['field_value'] = $field_value;

        return $this;
    }

    /**
     * Gets field_values
     *
     * @return string[]
     */
    public function getFieldValues()
    {
        return $this->container['field_values'];
    }

    /**
     * Sets field_values
     *
     * @param string[] $field_values field_values
     *
     * @return $this
     */
    public function setFieldValues($field_values)
    {
        $this->container['field_values'] = $field_values;

        return $this;
    }

    /**
     * Gets filter_operator
     *
     * @return string
     */
    public function getFilterOperator()
    {
        return $this->container['filter_operator'];
    }

    /**
     * Sets filter_operator
     *
     * @param string $filter_operator filter_operator
     *
     * @return $this
     */
    public function setFilterOperator($filter_operator)
    {
        $allowedValues = $this->getFilterOperatorAllowableValues();
        if (!is_null($filter_operator) && !in_array($filter_operator, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'filter_operator', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['filter_operator'] = $filter_operator;

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


