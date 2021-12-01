<?php
/**
 * FlatCalendarEvent
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
 * FlatCalendarEvent Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FlatCalendarEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FlatCalendarEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'assignments' => '\Swagger\Client\Model\FlatAssignment[]',
        'calendar_id' => 'int',
        'end' => '\DateTime',
        'id' => 'string',
        'organization_id' => 'int',
        'shift_schedule_id' => 'int',
        'start' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'assignments' => null,
        'calendar_id' => 'int64',
        'end' => 'date-time',
        'id' => null,
        'organization_id' => 'int64',
        'shift_schedule_id' => 'int64',
        'start' => 'date-time'
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
        'assignments' => 'assignments',
        'calendar_id' => 'calendarId',
        'end' => 'end',
        'id' => 'id',
        'organization_id' => 'organizationId',
        'shift_schedule_id' => 'shiftScheduleId',
        'start' => 'start'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assignments' => 'setAssignments',
        'calendar_id' => 'setCalendarId',
        'end' => 'setEnd',
        'id' => 'setId',
        'organization_id' => 'setOrganizationId',
        'shift_schedule_id' => 'setShiftScheduleId',
        'start' => 'setStart'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assignments' => 'getAssignments',
        'calendar_id' => 'getCalendarId',
        'end' => 'getEnd',
        'id' => 'getId',
        'organization_id' => 'getOrganizationId',
        'shift_schedule_id' => 'getShiftScheduleId',
        'start' => 'getStart'
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
        $this->container['assignments'] = isset($data['assignments']) ? $data['assignments'] : null;
        $this->container['calendar_id'] = isset($data['calendar_id']) ? $data['calendar_id'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['organization_id'] = isset($data['organization_id']) ? $data['organization_id'] : null;
        $this->container['shift_schedule_id'] = isset($data['shift_schedule_id']) ? $data['shift_schedule_id'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
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
     * Gets assignments
     *
     * @return \Swagger\Client\Model\FlatAssignment[]
     */
    public function getAssignments()
    {
        return $this->container['assignments'];
    }

    /**
     * Sets assignments
     *
     * @param \Swagger\Client\Model\FlatAssignment[] $assignments assignments
     *
     * @return $this
     */
    public function setAssignments($assignments)
    {
        $this->container['assignments'] = $assignments;

        return $this;
    }

    /**
     * Gets calendar_id
     *
     * @return int
     */
    public function getCalendarId()
    {
        return $this->container['calendar_id'];
    }

    /**
     * Sets calendar_id
     *
     * @param int $calendar_id calendar_id
     *
     * @return $this
     */
    public function setCalendarId($calendar_id)
    {
        $this->container['calendar_id'] = $calendar_id;

        return $this;
    }

    /**
     * Gets end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param \DateTime $end end
     *
     * @return $this
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * Gets shift_schedule_id
     *
     * @return int
     */
    public function getShiftScheduleId()
    {
        return $this->container['shift_schedule_id'];
    }

    /**
     * Sets shift_schedule_id
     *
     * @param int $shift_schedule_id shift_schedule_id
     *
     * @return $this
     */
    public function setShiftScheduleId($shift_schedule_id)
    {
        $this->container['shift_schedule_id'] = $shift_schedule_id;

        return $this;
    }

    /**
     * Gets start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param \DateTime $start start
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

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

