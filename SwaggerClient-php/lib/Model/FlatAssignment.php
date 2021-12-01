<?php
/**
 * FlatAssignment
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
 * FlatAssignment Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FlatAssignment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FlatAssignment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contact_id' => 'int',
        'group_id' => 'int',
        'replacements' => '\Swagger\Client\Model\FlatAssignmentReplacement[]',
        'sequence' => 'int',
        'shift_substitution_id' => 'int',
        'staff_layer_id' => 'int',
        'unavailabilities' => '\Swagger\Client\Model\FlatAssignmentUnavailability[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contact_id' => 'int64',
        'group_id' => 'int64',
        'replacements' => null,
        'sequence' => 'int32',
        'shift_substitution_id' => 'int64',
        'staff_layer_id' => 'int64',
        'unavailabilities' => null
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
        'contact_id' => 'contactId',
        'group_id' => 'groupId',
        'replacements' => 'replacements',
        'sequence' => 'sequence',
        'shift_substitution_id' => 'shiftSubstitutionId',
        'staff_layer_id' => 'staffLayerId',
        'unavailabilities' => 'unavailabilities'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contact_id' => 'setContactId',
        'group_id' => 'setGroupId',
        'replacements' => 'setReplacements',
        'sequence' => 'setSequence',
        'shift_substitution_id' => 'setShiftSubstitutionId',
        'staff_layer_id' => 'setStaffLayerId',
        'unavailabilities' => 'setUnavailabilities'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contact_id' => 'getContactId',
        'group_id' => 'getGroupId',
        'replacements' => 'getReplacements',
        'sequence' => 'getSequence',
        'shift_substitution_id' => 'getShiftSubstitutionId',
        'staff_layer_id' => 'getStaffLayerId',
        'unavailabilities' => 'getUnavailabilities'
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
        $this->container['contact_id'] = isset($data['contact_id']) ? $data['contact_id'] : null;
        $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
        $this->container['replacements'] = isset($data['replacements']) ? $data['replacements'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['shift_substitution_id'] = isset($data['shift_substitution_id']) ? $data['shift_substitution_id'] : null;
        $this->container['staff_layer_id'] = isset($data['staff_layer_id']) ? $data['staff_layer_id'] : null;
        $this->container['unavailabilities'] = isset($data['unavailabilities']) ? $data['unavailabilities'] : null;
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
     * Gets contact_id
     *
     * @return int
     */
    public function getContactId()
    {
        return $this->container['contact_id'];
    }

    /**
     * Sets contact_id
     *
     * @param int $contact_id contact_id
     *
     * @return $this
     */
    public function setContactId($contact_id)
    {
        $this->container['contact_id'] = $contact_id;

        return $this;
    }

    /**
     * Gets group_id
     *
     * @return int
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param int $group_id group_id
     *
     * @return $this
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets replacements
     *
     * @return \Swagger\Client\Model\FlatAssignmentReplacement[]
     */
    public function getReplacements()
    {
        return $this->container['replacements'];
    }

    /**
     * Sets replacements
     *
     * @param \Swagger\Client\Model\FlatAssignmentReplacement[] $replacements replacements
     *
     * @return $this
     */
    public function setReplacements($replacements)
    {
        $this->container['replacements'] = $replacements;

        return $this;
    }

    /**
     * Gets sequence
     *
     * @return int
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     *
     * @param int $sequence sequence
     *
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;

        return $this;
    }

    /**
     * Gets shift_substitution_id
     *
     * @return int
     */
    public function getShiftSubstitutionId()
    {
        return $this->container['shift_substitution_id'];
    }

    /**
     * Sets shift_substitution_id
     *
     * @param int $shift_substitution_id shift_substitution_id
     *
     * @return $this
     */
    public function setShiftSubstitutionId($shift_substitution_id)
    {
        $this->container['shift_substitution_id'] = $shift_substitution_id;

        return $this;
    }

    /**
     * Gets staff_layer_id
     *
     * @return int
     */
    public function getStaffLayerId()
    {
        return $this->container['staff_layer_id'];
    }

    /**
     * Sets staff_layer_id
     *
     * @param int $staff_layer_id staff_layer_id
     *
     * @return $this
     */
    public function setStaffLayerId($staff_layer_id)
    {
        $this->container['staff_layer_id'] = $staff_layer_id;

        return $this;
    }

    /**
     * Gets unavailabilities
     *
     * @return \Swagger\Client\Model\FlatAssignmentUnavailability[]
     */
    public function getUnavailabilities()
    {
        return $this->container['unavailabilities'];
    }

    /**
     * Sets unavailabilities
     *
     * @param \Swagger\Client\Model\FlatAssignmentUnavailability[] $unavailabilities unavailabilities
     *
     * @return $this
     */
    public function setUnavailabilities($unavailabilities)
    {
        $this->container['unavailabilities'] = $unavailabilities;

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


