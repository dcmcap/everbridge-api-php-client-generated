<?php
/**
 * NotificationReportLogWrapper
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
 * NotificationReportLogWrapper Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NotificationReportLogWrapper implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NotificationReportLogWrapper';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'attempt' => 'int',
        'attempt_time' => '\DateTime',
        'call_result_by_paths' => '\Swagger\Client\Model\ContactPathResultWrapper[]',
        'confirmed' => 'bool',
        'confirmed_date' => '\DateTime',
        'confirmed_path' => 'string',
        'confirmed_path_id' => 'int',
        'confirmed_path_value' => 'string',
        'contact_id' => 'int',
        'created_id' => 'int',
        'external_id' => 'string',
        'first_attempt_time' => '\DateTime',
        'first_name' => 'string',
        'full_name' => 'string',
        'id' => 'int',
        'last_name' => 'string',
        'late' => 'bool',
        'latest_attempt_time' => '\DateTime',
        'notification_id' => 'int',
        'response_text_message' => 'string',
        'result' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'attempt' => 'int32',
        'attempt_time' => 'date-time',
        'call_result_by_paths' => null,
        'confirmed' => null,
        'confirmed_date' => 'date-time',
        'confirmed_path' => null,
        'confirmed_path_id' => 'int32',
        'confirmed_path_value' => null,
        'contact_id' => 'int64',
        'created_id' => 'int64',
        'external_id' => null,
        'first_attempt_time' => 'date-time',
        'first_name' => null,
        'full_name' => null,
        'id' => 'int64',
        'last_name' => null,
        'late' => null,
        'latest_attempt_time' => 'date-time',
        'notification_id' => 'int64',
        'response_text_message' => null,
        'result' => null
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
        'attempt' => 'attempt',
        'attempt_time' => 'attemptTime',
        'call_result_by_paths' => 'callResultByPaths',
        'confirmed' => 'confirmed',
        'confirmed_date' => 'confirmedDate',
        'confirmed_path' => 'confirmedPath',
        'confirmed_path_id' => 'confirmedPathId',
        'confirmed_path_value' => 'confirmedPathValue',
        'contact_id' => 'contactId',
        'created_id' => 'createdId',
        'external_id' => 'externalId',
        'first_attempt_time' => 'firstAttemptTime',
        'first_name' => 'firstName',
        'full_name' => 'fullName',
        'id' => 'id',
        'last_name' => 'lastName',
        'late' => 'late',
        'latest_attempt_time' => 'latestAttemptTime',
        'notification_id' => 'notificationId',
        'response_text_message' => 'responseTextMessage',
        'result' => 'result'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attempt' => 'setAttempt',
        'attempt_time' => 'setAttemptTime',
        'call_result_by_paths' => 'setCallResultByPaths',
        'confirmed' => 'setConfirmed',
        'confirmed_date' => 'setConfirmedDate',
        'confirmed_path' => 'setConfirmedPath',
        'confirmed_path_id' => 'setConfirmedPathId',
        'confirmed_path_value' => 'setConfirmedPathValue',
        'contact_id' => 'setContactId',
        'created_id' => 'setCreatedId',
        'external_id' => 'setExternalId',
        'first_attempt_time' => 'setFirstAttemptTime',
        'first_name' => 'setFirstName',
        'full_name' => 'setFullName',
        'id' => 'setId',
        'last_name' => 'setLastName',
        'late' => 'setLate',
        'latest_attempt_time' => 'setLatestAttemptTime',
        'notification_id' => 'setNotificationId',
        'response_text_message' => 'setResponseTextMessage',
        'result' => 'setResult'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attempt' => 'getAttempt',
        'attempt_time' => 'getAttemptTime',
        'call_result_by_paths' => 'getCallResultByPaths',
        'confirmed' => 'getConfirmed',
        'confirmed_date' => 'getConfirmedDate',
        'confirmed_path' => 'getConfirmedPath',
        'confirmed_path_id' => 'getConfirmedPathId',
        'confirmed_path_value' => 'getConfirmedPathValue',
        'contact_id' => 'getContactId',
        'created_id' => 'getCreatedId',
        'external_id' => 'getExternalId',
        'first_attempt_time' => 'getFirstAttemptTime',
        'first_name' => 'getFirstName',
        'full_name' => 'getFullName',
        'id' => 'getId',
        'last_name' => 'getLastName',
        'late' => 'getLate',
        'latest_attempt_time' => 'getLatestAttemptTime',
        'notification_id' => 'getNotificationId',
        'response_text_message' => 'getResponseTextMessage',
        'result' => 'getResult'
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
        $this->container['attempt'] = isset($data['attempt']) ? $data['attempt'] : null;
        $this->container['attempt_time'] = isset($data['attempt_time']) ? $data['attempt_time'] : null;
        $this->container['call_result_by_paths'] = isset($data['call_result_by_paths']) ? $data['call_result_by_paths'] : null;
        $this->container['confirmed'] = isset($data['confirmed']) ? $data['confirmed'] : null;
        $this->container['confirmed_date'] = isset($data['confirmed_date']) ? $data['confirmed_date'] : null;
        $this->container['confirmed_path'] = isset($data['confirmed_path']) ? $data['confirmed_path'] : null;
        $this->container['confirmed_path_id'] = isset($data['confirmed_path_id']) ? $data['confirmed_path_id'] : null;
        $this->container['confirmed_path_value'] = isset($data['confirmed_path_value']) ? $data['confirmed_path_value'] : null;
        $this->container['contact_id'] = isset($data['contact_id']) ? $data['contact_id'] : null;
        $this->container['created_id'] = isset($data['created_id']) ? $data['created_id'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['first_attempt_time'] = isset($data['first_attempt_time']) ? $data['first_attempt_time'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['full_name'] = isset($data['full_name']) ? $data['full_name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['late'] = isset($data['late']) ? $data['late'] : null;
        $this->container['latest_attempt_time'] = isset($data['latest_attempt_time']) ? $data['latest_attempt_time'] : null;
        $this->container['notification_id'] = isset($data['notification_id']) ? $data['notification_id'] : null;
        $this->container['response_text_message'] = isset($data['response_text_message']) ? $data['response_text_message'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
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
     * Gets attempt
     *
     * @return int
     */
    public function getAttempt()
    {
        return $this->container['attempt'];
    }

    /**
     * Sets attempt
     *
     * @param int $attempt attempt
     *
     * @return $this
     */
    public function setAttempt($attempt)
    {
        $this->container['attempt'] = $attempt;

        return $this;
    }

    /**
     * Gets attempt_time
     *
     * @return \DateTime
     */
    public function getAttemptTime()
    {
        return $this->container['attempt_time'];
    }

    /**
     * Sets attempt_time
     *
     * @param \DateTime $attempt_time attempt_time
     *
     * @return $this
     */
    public function setAttemptTime($attempt_time)
    {
        $this->container['attempt_time'] = $attempt_time;

        return $this;
    }

    /**
     * Gets call_result_by_paths
     *
     * @return \Swagger\Client\Model\ContactPathResultWrapper[]
     */
    public function getCallResultByPaths()
    {
        return $this->container['call_result_by_paths'];
    }

    /**
     * Sets call_result_by_paths
     *
     * @param \Swagger\Client\Model\ContactPathResultWrapper[] $call_result_by_paths call_result_by_paths
     *
     * @return $this
     */
    public function setCallResultByPaths($call_result_by_paths)
    {
        $this->container['call_result_by_paths'] = $call_result_by_paths;

        return $this;
    }

    /**
     * Gets confirmed
     *
     * @return bool
     */
    public function getConfirmed()
    {
        return $this->container['confirmed'];
    }

    /**
     * Sets confirmed
     *
     * @param bool $confirmed confirmed
     *
     * @return $this
     */
    public function setConfirmed($confirmed)
    {
        $this->container['confirmed'] = $confirmed;

        return $this;
    }

    /**
     * Gets confirmed_date
     *
     * @return \DateTime
     */
    public function getConfirmedDate()
    {
        return $this->container['confirmed_date'];
    }

    /**
     * Sets confirmed_date
     *
     * @param \DateTime $confirmed_date confirmed_date
     *
     * @return $this
     */
    public function setConfirmedDate($confirmed_date)
    {
        $this->container['confirmed_date'] = $confirmed_date;

        return $this;
    }

    /**
     * Gets confirmed_path
     *
     * @return string
     */
    public function getConfirmedPath()
    {
        return $this->container['confirmed_path'];
    }

    /**
     * Sets confirmed_path
     *
     * @param string $confirmed_path confirmed_path
     *
     * @return $this
     */
    public function setConfirmedPath($confirmed_path)
    {
        $this->container['confirmed_path'] = $confirmed_path;

        return $this;
    }

    /**
     * Gets confirmed_path_id
     *
     * @return int
     */
    public function getConfirmedPathId()
    {
        return $this->container['confirmed_path_id'];
    }

    /**
     * Sets confirmed_path_id
     *
     * @param int $confirmed_path_id confirmed_path_id
     *
     * @return $this
     */
    public function setConfirmedPathId($confirmed_path_id)
    {
        $this->container['confirmed_path_id'] = $confirmed_path_id;

        return $this;
    }

    /**
     * Gets confirmed_path_value
     *
     * @return string
     */
    public function getConfirmedPathValue()
    {
        return $this->container['confirmed_path_value'];
    }

    /**
     * Sets confirmed_path_value
     *
     * @param string $confirmed_path_value confirmed_path_value
     *
     * @return $this
     */
    public function setConfirmedPathValue($confirmed_path_value)
    {
        $this->container['confirmed_path_value'] = $confirmed_path_value;

        return $this;
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
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id external_id
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets first_attempt_time
     *
     * @return \DateTime
     */
    public function getFirstAttemptTime()
    {
        return $this->container['first_attempt_time'];
    }

    /**
     * Sets first_attempt_time
     *
     * @param \DateTime $first_attempt_time first_attempt_time
     *
     * @return $this
     */
    public function setFirstAttemptTime($first_attempt_time)
    {
        $this->container['first_attempt_time'] = $first_attempt_time;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets full_name
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     *
     * @param string $full_name full_name
     *
     * @return $this
     */
    public function setFullName($full_name)
    {
        $this->container['full_name'] = $full_name;

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
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets late
     *
     * @return bool
     */
    public function getLate()
    {
        return $this->container['late'];
    }

    /**
     * Sets late
     *
     * @param bool $late late
     *
     * @return $this
     */
    public function setLate($late)
    {
        $this->container['late'] = $late;

        return $this;
    }

    /**
     * Gets latest_attempt_time
     *
     * @return \DateTime
     */
    public function getLatestAttemptTime()
    {
        return $this->container['latest_attempt_time'];
    }

    /**
     * Sets latest_attempt_time
     *
     * @param \DateTime $latest_attempt_time latest_attempt_time
     *
     * @return $this
     */
    public function setLatestAttemptTime($latest_attempt_time)
    {
        $this->container['latest_attempt_time'] = $latest_attempt_time;

        return $this;
    }

    /**
     * Gets notification_id
     *
     * @return int
     */
    public function getNotificationId()
    {
        return $this->container['notification_id'];
    }

    /**
     * Sets notification_id
     *
     * @param int $notification_id notification_id
     *
     * @return $this
     */
    public function setNotificationId($notification_id)
    {
        $this->container['notification_id'] = $notification_id;

        return $this;
    }

    /**
     * Gets response_text_message
     *
     * @return string
     */
    public function getResponseTextMessage()
    {
        return $this->container['response_text_message'];
    }

    /**
     * Sets response_text_message
     *
     * @param string $response_text_message response_text_message
     *
     * @return $this
     */
    public function setResponseTextMessage($response_text_message)
    {
        $this->container['response_text_message'] = $response_text_message;

        return $this;
    }

    /**
     * Gets result
     *
     * @return string
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param string $result result
     *
     * @return $this
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

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

