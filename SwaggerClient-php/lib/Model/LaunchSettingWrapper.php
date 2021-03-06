<?php
/**
 * LaunchSettingWrapper
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
 * LaunchSettingWrapper Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LaunchSettingWrapper implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LaunchSettingWrapper';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'day' => 'int',
        'end_date' => '\DateTime',
        'hour' => 'int',
        'last_occur_date' => '\DateTime',
        'minute' => 'int',
        'month' => 'int',
        'repeat_number' => 'int',
        'repeat_type' => 'string',
        'start_date' => '\DateTime',
        'time_zone_id' => 'string',
        'week_days' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'day' => 'int32',
        'end_date' => 'date-time',
        'hour' => 'int32',
        'last_occur_date' => 'date-time',
        'minute' => 'int32',
        'month' => 'int32',
        'repeat_number' => 'int32',
        'repeat_type' => null,
        'start_date' => 'date-time',
        'time_zone_id' => null,
        'week_days' => null
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
        'day' => 'day',
        'end_date' => 'endDate',
        'hour' => 'hour',
        'last_occur_date' => 'lastOccurDate',
        'minute' => 'minute',
        'month' => 'month',
        'repeat_number' => 'repeatNumber',
        'repeat_type' => 'repeatType',
        'start_date' => 'startDate',
        'time_zone_id' => 'timeZoneId',
        'week_days' => 'weekDays'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'day' => 'setDay',
        'end_date' => 'setEndDate',
        'hour' => 'setHour',
        'last_occur_date' => 'setLastOccurDate',
        'minute' => 'setMinute',
        'month' => 'setMonth',
        'repeat_number' => 'setRepeatNumber',
        'repeat_type' => 'setRepeatType',
        'start_date' => 'setStartDate',
        'time_zone_id' => 'setTimeZoneId',
        'week_days' => 'setWeekDays'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'day' => 'getDay',
        'end_date' => 'getEndDate',
        'hour' => 'getHour',
        'last_occur_date' => 'getLastOccurDate',
        'minute' => 'getMinute',
        'month' => 'getMonth',
        'repeat_number' => 'getRepeatNumber',
        'repeat_type' => 'getRepeatType',
        'start_date' => 'getStartDate',
        'time_zone_id' => 'getTimeZoneId',
        'week_days' => 'getWeekDays'
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

    const REPEAT_TYPE_YEARLY = 'YEARLY';
    const REPEAT_TYPE_MONTHLY = 'MONTHLY';
    const REPEAT_TYPE_WEEKLY = 'WEEKLY';
    const REPEAT_TYPE_DAILY = 'DAILY';
    const WEEK_DAYS_SUNDAY = 'SUNDAY';
    const WEEK_DAYS_MONDAY = 'MONDAY';
    const WEEK_DAYS_TUESDAY = 'TUESDAY';
    const WEEK_DAYS_WEDNESDAY = 'WEDNESDAY';
    const WEEK_DAYS_THURSDAY = 'THURSDAY';
    const WEEK_DAYS_FRIDAY = 'FRIDAY';
    const WEEK_DAYS_SATURDAY = 'SATURDAY';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRepeatTypeAllowableValues()
    {
        return [
            self::REPEAT_TYPE_YEARLY,
            self::REPEAT_TYPE_MONTHLY,
            self::REPEAT_TYPE_WEEKLY,
            self::REPEAT_TYPE_DAILY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWeekDaysAllowableValues()
    {
        return [
            self::WEEK_DAYS_SUNDAY,
            self::WEEK_DAYS_MONDAY,
            self::WEEK_DAYS_TUESDAY,
            self::WEEK_DAYS_WEDNESDAY,
            self::WEEK_DAYS_THURSDAY,
            self::WEEK_DAYS_FRIDAY,
            self::WEEK_DAYS_SATURDAY,
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
        $this->container['day'] = isset($data['day']) ? $data['day'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['hour'] = isset($data['hour']) ? $data['hour'] : null;
        $this->container['last_occur_date'] = isset($data['last_occur_date']) ? $data['last_occur_date'] : null;
        $this->container['minute'] = isset($data['minute']) ? $data['minute'] : null;
        $this->container['month'] = isset($data['month']) ? $data['month'] : null;
        $this->container['repeat_number'] = isset($data['repeat_number']) ? $data['repeat_number'] : null;
        $this->container['repeat_type'] = isset($data['repeat_type']) ? $data['repeat_type'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['time_zone_id'] = isset($data['time_zone_id']) ? $data['time_zone_id'] : null;
        $this->container['week_days'] = isset($data['week_days']) ? $data['week_days'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRepeatTypeAllowableValues();
        if (!is_null($this->container['repeat_type']) && !in_array($this->container['repeat_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'repeat_type', must be one of '%s'",
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
     * Gets day
     *
     * @return int
     */
    public function getDay()
    {
        return $this->container['day'];
    }

    /**
     * Sets day
     *
     * @param int $day day
     *
     * @return $this
     */
    public function setDay($day)
    {
        $this->container['day'] = $day;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date end_date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets hour
     *
     * @return int
     */
    public function getHour()
    {
        return $this->container['hour'];
    }

    /**
     * Sets hour
     *
     * @param int $hour hour
     *
     * @return $this
     */
    public function setHour($hour)
    {
        $this->container['hour'] = $hour;

        return $this;
    }

    /**
     * Gets last_occur_date
     *
     * @return \DateTime
     */
    public function getLastOccurDate()
    {
        return $this->container['last_occur_date'];
    }

    /**
     * Sets last_occur_date
     *
     * @param \DateTime $last_occur_date last_occur_date
     *
     * @return $this
     */
    public function setLastOccurDate($last_occur_date)
    {
        $this->container['last_occur_date'] = $last_occur_date;

        return $this;
    }

    /**
     * Gets minute
     *
     * @return int
     */
    public function getMinute()
    {
        return $this->container['minute'];
    }

    /**
     * Sets minute
     *
     * @param int $minute minute
     *
     * @return $this
     */
    public function setMinute($minute)
    {
        $this->container['minute'] = $minute;

        return $this;
    }

    /**
     * Gets month
     *
     * @return int
     */
    public function getMonth()
    {
        return $this->container['month'];
    }

    /**
     * Sets month
     *
     * @param int $month month
     *
     * @return $this
     */
    public function setMonth($month)
    {
        $this->container['month'] = $month;

        return $this;
    }

    /**
     * Gets repeat_number
     *
     * @return int
     */
    public function getRepeatNumber()
    {
        return $this->container['repeat_number'];
    }

    /**
     * Sets repeat_number
     *
     * @param int $repeat_number repeat_number
     *
     * @return $this
     */
    public function setRepeatNumber($repeat_number)
    {
        $this->container['repeat_number'] = $repeat_number;

        return $this;
    }

    /**
     * Gets repeat_type
     *
     * @return string
     */
    public function getRepeatType()
    {
        return $this->container['repeat_type'];
    }

    /**
     * Sets repeat_type
     *
     * @param string $repeat_type repeat_type
     *
     * @return $this
     */
    public function setRepeatType($repeat_type)
    {
        $allowedValues = $this->getRepeatTypeAllowableValues();
        if (!is_null($repeat_type) && !in_array($repeat_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'repeat_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['repeat_type'] = $repeat_type;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date start_date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets time_zone_id
     *
     * @return string
     */
    public function getTimeZoneId()
    {
        return $this->container['time_zone_id'];
    }

    /**
     * Sets time_zone_id
     *
     * @param string $time_zone_id time_zone_id
     *
     * @return $this
     */
    public function setTimeZoneId($time_zone_id)
    {
        $this->container['time_zone_id'] = $time_zone_id;

        return $this;
    }

    /**
     * Gets week_days
     *
     * @return string[]
     */
    public function getWeekDays()
    {
        return $this->container['week_days'];
    }

    /**
     * Sets week_days
     *
     * @param string[] $week_days week_days
     *
     * @return $this
     */
    public function setWeekDays($week_days)
    {
        $allowedValues = $this->getWeekDaysAllowableValues();
        if (!is_null($week_days) && array_diff($week_days, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'week_days', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['week_days'] = $week_days;

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


