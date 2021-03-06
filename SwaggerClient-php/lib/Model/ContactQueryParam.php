<?php
/**
 * ContactQueryParam
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
 * ContactQueryParam Class Doc Comment
 *
 * @category Class
 * @description Query Condition
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContactQueryParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ContactQueryParam';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contact_filter_ids' => 'int[]',
        'contact_ids' => 'int[]',
        'converted_incident_rules' => '\Swagger\Client\Model\ContactFilterRule[][]',
        'converted_search_shapes' => '\Swagger\Client\Model\SearchShape[]',
        'direction' => 'string',
        'enable_group_calendar' => 'bool',
        'excluded_shape_contact_ids' => 'int[]',
        'external_ids' => 'string[]',
        'group_ids' => 'int[]',
        'incident_rules' => '\Swagger\Client\Model\ContactFilterRuleWrapper[][]',
        'page_number' => 'int',
        'page_size' => 'int',
        'shape_search_conditions' => '\Swagger\Client\Model\ContactSearchConditionWrapper',
        'shapes' => '\Swagger\Client\Model\SearchShapeWrapper[]',
        'sort_by' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contact_filter_ids' => 'int64',
        'contact_ids' => 'int64',
        'converted_incident_rules' => null,
        'converted_search_shapes' => null,
        'direction' => null,
        'enable_group_calendar' => null,
        'excluded_shape_contact_ids' => 'int64',
        'external_ids' => null,
        'group_ids' => 'int64',
        'incident_rules' => null,
        'page_number' => 'int32',
        'page_size' => 'int32',
        'shape_search_conditions' => null,
        'shapes' => null,
        'sort_by' => null
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
        'contact_filter_ids' => 'contactFilterIds',
        'contact_ids' => 'contactIds',
        'converted_incident_rules' => 'convertedIncidentRules',
        'converted_search_shapes' => 'convertedSearchShapes',
        'direction' => 'direction',
        'enable_group_calendar' => 'enableGroupCalendar',
        'excluded_shape_contact_ids' => 'excludedShapeContactIds',
        'external_ids' => 'externalIds',
        'group_ids' => 'groupIds',
        'incident_rules' => 'incidentRules',
        'page_number' => 'pageNumber',
        'page_size' => 'pageSize',
        'shape_search_conditions' => 'shapeSearchConditions',
        'shapes' => 'shapes',
        'sort_by' => 'sortBy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contact_filter_ids' => 'setContactFilterIds',
        'contact_ids' => 'setContactIds',
        'converted_incident_rules' => 'setConvertedIncidentRules',
        'converted_search_shapes' => 'setConvertedSearchShapes',
        'direction' => 'setDirection',
        'enable_group_calendar' => 'setEnableGroupCalendar',
        'excluded_shape_contact_ids' => 'setExcludedShapeContactIds',
        'external_ids' => 'setExternalIds',
        'group_ids' => 'setGroupIds',
        'incident_rules' => 'setIncidentRules',
        'page_number' => 'setPageNumber',
        'page_size' => 'setPageSize',
        'shape_search_conditions' => 'setShapeSearchConditions',
        'shapes' => 'setShapes',
        'sort_by' => 'setSortBy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contact_filter_ids' => 'getContactFilterIds',
        'contact_ids' => 'getContactIds',
        'converted_incident_rules' => 'getConvertedIncidentRules',
        'converted_search_shapes' => 'getConvertedSearchShapes',
        'direction' => 'getDirection',
        'enable_group_calendar' => 'getEnableGroupCalendar',
        'excluded_shape_contact_ids' => 'getExcludedShapeContactIds',
        'external_ids' => 'getExternalIds',
        'group_ids' => 'getGroupIds',
        'incident_rules' => 'getIncidentRules',
        'page_number' => 'getPageNumber',
        'page_size' => 'getPageSize',
        'shape_search_conditions' => 'getShapeSearchConditions',
        'shapes' => 'getShapes',
        'sort_by' => 'getSortBy'
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

    const DIRECTION_ASC = 'ASC';
    const DIRECTION_DESC = 'DESC';
    const SORT_BY_LAST_MODIFIED_DATE = 'lastModifiedDate';
    const SORT_BY_EXTERNAL_ID = 'externalId';
    const SORT_BY_LAST_NAME = 'lastName';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDirectionAllowableValues()
    {
        return [
            self::DIRECTION_ASC,
            self::DIRECTION_DESC,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSortByAllowableValues()
    {
        return [
            self::SORT_BY_LAST_MODIFIED_DATE,
            self::SORT_BY_EXTERNAL_ID,
            self::SORT_BY_LAST_NAME,
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
        $this->container['contact_filter_ids'] = isset($data['contact_filter_ids']) ? $data['contact_filter_ids'] : null;
        $this->container['contact_ids'] = isset($data['contact_ids']) ? $data['contact_ids'] : null;
        $this->container['converted_incident_rules'] = isset($data['converted_incident_rules']) ? $data['converted_incident_rules'] : null;
        $this->container['converted_search_shapes'] = isset($data['converted_search_shapes']) ? $data['converted_search_shapes'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['enable_group_calendar'] = isset($data['enable_group_calendar']) ? $data['enable_group_calendar'] : null;
        $this->container['excluded_shape_contact_ids'] = isset($data['excluded_shape_contact_ids']) ? $data['excluded_shape_contact_ids'] : null;
        $this->container['external_ids'] = isset($data['external_ids']) ? $data['external_ids'] : null;
        $this->container['group_ids'] = isset($data['group_ids']) ? $data['group_ids'] : null;
        $this->container['incident_rules'] = isset($data['incident_rules']) ? $data['incident_rules'] : null;
        $this->container['page_number'] = isset($data['page_number']) ? $data['page_number'] : null;
        $this->container['page_size'] = isset($data['page_size']) ? $data['page_size'] : null;
        $this->container['shape_search_conditions'] = isset($data['shape_search_conditions']) ? $data['shape_search_conditions'] : null;
        $this->container['shapes'] = isset($data['shapes']) ? $data['shapes'] : null;
        $this->container['sort_by'] = isset($data['sort_by']) ? $data['sort_by'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDirectionAllowableValues();
        if (!is_null($this->container['direction']) && !in_array($this->container['direction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'direction', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSortByAllowableValues();
        if (!is_null($this->container['sort_by']) && !in_array($this->container['sort_by'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sort_by', must be one of '%s'",
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
     * Gets contact_filter_ids
     *
     * @return int[]
     */
    public function getContactFilterIds()
    {
        return $this->container['contact_filter_ids'];
    }

    /**
     * Sets contact_filter_ids
     *
     * @param int[] $contact_filter_ids contact_filter_ids
     *
     * @return $this
     */
    public function setContactFilterIds($contact_filter_ids)
    {
        $this->container['contact_filter_ids'] = $contact_filter_ids;

        return $this;
    }

    /**
     * Gets contact_ids
     *
     * @return int[]
     */
    public function getContactIds()
    {
        return $this->container['contact_ids'];
    }

    /**
     * Sets contact_ids
     *
     * @param int[] $contact_ids contact_ids
     *
     * @return $this
     */
    public function setContactIds($contact_ids)
    {
        $this->container['contact_ids'] = $contact_ids;

        return $this;
    }

    /**
     * Gets converted_incident_rules
     *
     * @return \Swagger\Client\Model\ContactFilterRule[][]
     */
    public function getConvertedIncidentRules()
    {
        return $this->container['converted_incident_rules'];
    }

    /**
     * Sets converted_incident_rules
     *
     * @param \Swagger\Client\Model\ContactFilterRule[][] $converted_incident_rules converted_incident_rules
     *
     * @return $this
     */
    public function setConvertedIncidentRules($converted_incident_rules)
    {
        $this->container['converted_incident_rules'] = $converted_incident_rules;

        return $this;
    }

    /**
     * Gets converted_search_shapes
     *
     * @return \Swagger\Client\Model\SearchShape[]
     */
    public function getConvertedSearchShapes()
    {
        return $this->container['converted_search_shapes'];
    }

    /**
     * Sets converted_search_shapes
     *
     * @param \Swagger\Client\Model\SearchShape[] $converted_search_shapes converted_search_shapes
     *
     * @return $this
     */
    public function setConvertedSearchShapes($converted_search_shapes)
    {
        $this->container['converted_search_shapes'] = $converted_search_shapes;

        return $this;
    }

    /**
     * Gets direction
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param string $direction Whether to sort data as ASC or DESC.
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $allowedValues = $this->getDirectionAllowableValues();
        if (!is_null($direction) && !in_array($direction, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'direction', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['direction'] = $direction;

        return $this;
    }

    /**
     * Gets enable_group_calendar
     *
     * @return bool
     */
    public function getEnableGroupCalendar()
    {
        return $this->container['enable_group_calendar'];
    }

    /**
     * Sets enable_group_calendar
     *
     * @param bool $enable_group_calendar enable_group_calendar
     *
     * @return $this
     */
    public function setEnableGroupCalendar($enable_group_calendar)
    {
        $this->container['enable_group_calendar'] = $enable_group_calendar;

        return $this;
    }

    /**
     * Gets excluded_shape_contact_ids
     *
     * @return int[]
     */
    public function getExcludedShapeContactIds()
    {
        return $this->container['excluded_shape_contact_ids'];
    }

    /**
     * Sets excluded_shape_contact_ids
     *
     * @param int[] $excluded_shape_contact_ids excluded_shape_contact_ids
     *
     * @return $this
     */
    public function setExcludedShapeContactIds($excluded_shape_contact_ids)
    {
        $this->container['excluded_shape_contact_ids'] = $excluded_shape_contact_ids;

        return $this;
    }

    /**
     * Gets external_ids
     *
     * @return string[]
     */
    public function getExternalIds()
    {
        return $this->container['external_ids'];
    }

    /**
     * Sets external_ids
     *
     * @param string[] $external_ids external_ids
     *
     * @return $this
     */
    public function setExternalIds($external_ids)
    {
        $this->container['external_ids'] = $external_ids;

        return $this;
    }

    /**
     * Gets group_ids
     *
     * @return int[]
     */
    public function getGroupIds()
    {
        return $this->container['group_ids'];
    }

    /**
     * Sets group_ids
     *
     * @param int[] $group_ids group_ids
     *
     * @return $this
     */
    public function setGroupIds($group_ids)
    {
        $this->container['group_ids'] = $group_ids;

        return $this;
    }

    /**
     * Gets incident_rules
     *
     * @return \Swagger\Client\Model\ContactFilterRuleWrapper[][]
     */
    public function getIncidentRules()
    {
        return $this->container['incident_rules'];
    }

    /**
     * Sets incident_rules
     *
     * @param \Swagger\Client\Model\ContactFilterRuleWrapper[][] $incident_rules incident_rules
     *
     * @return $this
     */
    public function setIncidentRules($incident_rules)
    {
        $this->container['incident_rules'] = $incident_rules;

        return $this;
    }

    /**
     * Gets page_number
     *
     * @return int
     */
    public function getPageNumber()
    {
        return $this->container['page_number'];
    }

    /**
     * Sets page_number
     *
     * @param int $page_number The page number of contacts to return. Default value is 1
     *
     * @return $this
     */
    public function setPageNumber($page_number)
    {
        $this->container['page_number'] = $page_number;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return int
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param int $page_size The page size for contacts to return. Default value is 100
     *
     * @return $this
     */
    public function setPageSize($page_size)
    {
        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets shape_search_conditions
     *
     * @return \Swagger\Client\Model\ContactSearchConditionWrapper
     */
    public function getShapeSearchConditions()
    {
        return $this->container['shape_search_conditions'];
    }

    /**
     * Sets shape_search_conditions
     *
     * @param \Swagger\Client\Model\ContactSearchConditionWrapper $shape_search_conditions shape_search_conditions
     *
     * @return $this
     */
    public function setShapeSearchConditions($shape_search_conditions)
    {
        $this->container['shape_search_conditions'] = $shape_search_conditions;

        return $this;
    }

    /**
     * Gets shapes
     *
     * @return \Swagger\Client\Model\SearchShapeWrapper[]
     */
    public function getShapes()
    {
        return $this->container['shapes'];
    }

    /**
     * Sets shapes
     *
     * @param \Swagger\Client\Model\SearchShapeWrapper[] $shapes shapes
     *
     * @return $this
     */
    public function setShapes($shapes)
    {
        $this->container['shapes'] = $shapes;

        return $this;
    }

    /**
     * Gets sort_by
     *
     * @return string
     */
    public function getSortBy()
    {
        return $this->container['sort_by'];
    }

    /**
     * Sets sort_by
     *
     * @param string $sort_by Whether to sort data by lastModifiedDate, externalId or lastName
     *
     * @return $this
     */
    public function setSortBy($sort_by)
    {
        $allowedValues = $this->getSortByAllowableValues();
        if (!is_null($sort_by) && !in_array($sort_by, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sort_by', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sort_by'] = $sort_by;

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


