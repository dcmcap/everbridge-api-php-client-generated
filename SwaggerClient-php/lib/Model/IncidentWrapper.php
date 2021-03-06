<?php
/**
 * IncidentWrapper
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
 * IncidentWrapper Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IncidentWrapper implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IncidentWrapper';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_id' => 'int',
        'close_by' => 'string',
        'close_date' => '\DateTime',
        'created_date' => '\DateTime',
        'created_id' => 'int',
        'created_name' => 'string',
        'created_proxy_name' => 'string',
        'duration' => 'int',
        'enable_message_truncate' => 'bool',
        'end_date' => '\DateTime',
        'has_journal' => 'bool',
        'id' => 'int',
        'incident_action' => 'string',
        'incident_journals' => '\Swagger\Client\Model\IncidentJournalWrapper[]',
        'incident_phases' => '\Swagger\Client\Model\IncidentPhaseWrapper[]',
        'incident_status' => 'string',
        'incident_type' => 'string',
        'integration_email' => 'string',
        'integration_id' => 'string',
        'integration_name' => 'string',
        'last_follow_by' => 'string',
        'last_follow_date' => '\DateTime',
        'last_modified_date' => '\DateTime',
        'last_modified_id' => 'int',
        'last_modified_name' => 'string',
        'last_modified_proxy_name' => 'string',
        'name' => 'string',
        'notificaiton_ids' => 'int[]',
        'notification_ids' => 'int[]',
        'organization_id' => 'int',
        'phase_status' => '\Swagger\Client\Model\PhaseDefinitionWrapper',
        'pin_code' => 'string',
        'resource_bundle_id' => 'int',
        'scenario_id' => 'int',
        'start_date' => '\DateTime',
        'status' => 'string',
        'use_template_var_value' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_id' => 'int64',
        'close_by' => null,
        'close_date' => 'date-time',
        'created_date' => 'date-time',
        'created_id' => 'int64',
        'created_name' => null,
        'created_proxy_name' => null,
        'duration' => 'int64',
        'enable_message_truncate' => null,
        'end_date' => 'date-time',
        'has_journal' => null,
        'id' => 'int64',
        'incident_action' => null,
        'incident_journals' => null,
        'incident_phases' => null,
        'incident_status' => null,
        'incident_type' => null,
        'integration_email' => null,
        'integration_id' => null,
        'integration_name' => null,
        'last_follow_by' => null,
        'last_follow_date' => 'date-time',
        'last_modified_date' => 'date-time',
        'last_modified_id' => 'int64',
        'last_modified_name' => null,
        'last_modified_proxy_name' => null,
        'name' => null,
        'notificaiton_ids' => 'int64',
        'notification_ids' => 'int64',
        'organization_id' => 'int64',
        'phase_status' => null,
        'pin_code' => null,
        'resource_bundle_id' => 'int64',
        'scenario_id' => 'int64',
        'start_date' => 'date-time',
        'status' => null,
        'use_template_var_value' => null
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
        'close_by' => 'closeBy',
        'close_date' => 'closeDate',
        'created_date' => 'createdDate',
        'created_id' => 'createdId',
        'created_name' => 'createdName',
        'created_proxy_name' => 'createdProxyName',
        'duration' => 'duration',
        'enable_message_truncate' => 'enableMessageTruncate',
        'end_date' => 'endDate',
        'has_journal' => 'hasJournal',
        'id' => 'id',
        'incident_action' => 'incidentAction',
        'incident_journals' => 'incidentJournals',
        'incident_phases' => 'incidentPhases',
        'incident_status' => 'incidentStatus',
        'incident_type' => 'incidentType',
        'integration_email' => 'integrationEmail',
        'integration_id' => 'integrationId',
        'integration_name' => 'integrationName',
        'last_follow_by' => 'lastFollowBy',
        'last_follow_date' => 'lastFollowDate',
        'last_modified_date' => 'lastModifiedDate',
        'last_modified_id' => 'lastModifiedId',
        'last_modified_name' => 'lastModifiedName',
        'last_modified_proxy_name' => 'lastModifiedProxyName',
        'name' => 'name',
        'notificaiton_ids' => 'notificaitonIds',
        'notification_ids' => 'notificationIds',
        'organization_id' => 'organizationId',
        'phase_status' => 'phaseStatus',
        'pin_code' => 'pinCode',
        'resource_bundle_id' => 'resourceBundleId',
        'scenario_id' => 'scenarioId',
        'start_date' => 'startDate',
        'status' => 'status',
        'use_template_var_value' => 'useTemplateVarValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'close_by' => 'setCloseBy',
        'close_date' => 'setCloseDate',
        'created_date' => 'setCreatedDate',
        'created_id' => 'setCreatedId',
        'created_name' => 'setCreatedName',
        'created_proxy_name' => 'setCreatedProxyName',
        'duration' => 'setDuration',
        'enable_message_truncate' => 'setEnableMessageTruncate',
        'end_date' => 'setEndDate',
        'has_journal' => 'setHasJournal',
        'id' => 'setId',
        'incident_action' => 'setIncidentAction',
        'incident_journals' => 'setIncidentJournals',
        'incident_phases' => 'setIncidentPhases',
        'incident_status' => 'setIncidentStatus',
        'incident_type' => 'setIncidentType',
        'integration_email' => 'setIntegrationEmail',
        'integration_id' => 'setIntegrationId',
        'integration_name' => 'setIntegrationName',
        'last_follow_by' => 'setLastFollowBy',
        'last_follow_date' => 'setLastFollowDate',
        'last_modified_date' => 'setLastModifiedDate',
        'last_modified_id' => 'setLastModifiedId',
        'last_modified_name' => 'setLastModifiedName',
        'last_modified_proxy_name' => 'setLastModifiedProxyName',
        'name' => 'setName',
        'notificaiton_ids' => 'setNotificaitonIds',
        'notification_ids' => 'setNotificationIds',
        'organization_id' => 'setOrganizationId',
        'phase_status' => 'setPhaseStatus',
        'pin_code' => 'setPinCode',
        'resource_bundle_id' => 'setResourceBundleId',
        'scenario_id' => 'setScenarioId',
        'start_date' => 'setStartDate',
        'status' => 'setStatus',
        'use_template_var_value' => 'setUseTemplateVarValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'close_by' => 'getCloseBy',
        'close_date' => 'getCloseDate',
        'created_date' => 'getCreatedDate',
        'created_id' => 'getCreatedId',
        'created_name' => 'getCreatedName',
        'created_proxy_name' => 'getCreatedProxyName',
        'duration' => 'getDuration',
        'enable_message_truncate' => 'getEnableMessageTruncate',
        'end_date' => 'getEndDate',
        'has_journal' => 'getHasJournal',
        'id' => 'getId',
        'incident_action' => 'getIncidentAction',
        'incident_journals' => 'getIncidentJournals',
        'incident_phases' => 'getIncidentPhases',
        'incident_status' => 'getIncidentStatus',
        'incident_type' => 'getIncidentType',
        'integration_email' => 'getIntegrationEmail',
        'integration_id' => 'getIntegrationId',
        'integration_name' => 'getIntegrationName',
        'last_follow_by' => 'getLastFollowBy',
        'last_follow_date' => 'getLastFollowDate',
        'last_modified_date' => 'getLastModifiedDate',
        'last_modified_id' => 'getLastModifiedId',
        'last_modified_name' => 'getLastModifiedName',
        'last_modified_proxy_name' => 'getLastModifiedProxyName',
        'name' => 'getName',
        'notificaiton_ids' => 'getNotificaitonIds',
        'notification_ids' => 'getNotificationIds',
        'organization_id' => 'getOrganizationId',
        'phase_status' => 'getPhaseStatus',
        'pin_code' => 'getPinCode',
        'resource_bundle_id' => 'getResourceBundleId',
        'scenario_id' => 'getScenarioId',
        'start_date' => 'getStartDate',
        'status' => 'getStatus',
        'use_template_var_value' => 'getUseTemplateVarValue'
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

    const INCIDENT_ACTION_LAUNCH = 'Launch';
    const INCIDENT_ACTION_LAUNCH_THEN_CLOSE = 'LaunchThenClose';
    const INCIDENT_ACTION_UPDATE = 'Update';
    const INCIDENT_ACTION_CLOSE = 'Close';
    const INCIDENT_ACTION_UPDATE_THEN_CLOSE = 'UpdateThenClose';
    const INCIDENT_ACTION_CLOSE_WITH_NOTIFICATION = 'CloseWithNotification';
    const INCIDENT_ACTION_CLOSE_WITHOUT_NOTIFICATION = 'CloseWithoutNotification';
    const INCIDENT_STATUS_OPEN = 'Open';
    const INCIDENT_STATUS_CLOSED = 'Closed';
    const INCIDENT_STATUS_ALL = 'All';
    const INCIDENT_TYPE_SCENARIO = 'Scenario';
    const INCIDENT_TYPE_INCIDENT = 'Incident';
    const STATUS_A = 'A';
    const STATUS_D = 'D';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIncidentActionAllowableValues()
    {
        return [
            self::INCIDENT_ACTION_LAUNCH,
            self::INCIDENT_ACTION_LAUNCH_THEN_CLOSE,
            self::INCIDENT_ACTION_UPDATE,
            self::INCIDENT_ACTION_CLOSE,
            self::INCIDENT_ACTION_UPDATE_THEN_CLOSE,
            self::INCIDENT_ACTION_CLOSE_WITH_NOTIFICATION,
            self::INCIDENT_ACTION_CLOSE_WITHOUT_NOTIFICATION,
        ];
    }
    
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
    public function getIncidentTypeAllowableValues()
    {
        return [
            self::INCIDENT_TYPE_SCENARIO,
            self::INCIDENT_TYPE_INCIDENT,
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['close_by'] = isset($data['close_by']) ? $data['close_by'] : null;
        $this->container['close_date'] = isset($data['close_date']) ? $data['close_date'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['created_id'] = isset($data['created_id']) ? $data['created_id'] : null;
        $this->container['created_name'] = isset($data['created_name']) ? $data['created_name'] : null;
        $this->container['created_proxy_name'] = isset($data['created_proxy_name']) ? $data['created_proxy_name'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['enable_message_truncate'] = isset($data['enable_message_truncate']) ? $data['enable_message_truncate'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['has_journal'] = isset($data['has_journal']) ? $data['has_journal'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['incident_action'] = isset($data['incident_action']) ? $data['incident_action'] : null;
        $this->container['incident_journals'] = isset($data['incident_journals']) ? $data['incident_journals'] : null;
        $this->container['incident_phases'] = isset($data['incident_phases']) ? $data['incident_phases'] : null;
        $this->container['incident_status'] = isset($data['incident_status']) ? $data['incident_status'] : null;
        $this->container['incident_type'] = isset($data['incident_type']) ? $data['incident_type'] : null;
        $this->container['integration_email'] = isset($data['integration_email']) ? $data['integration_email'] : null;
        $this->container['integration_id'] = isset($data['integration_id']) ? $data['integration_id'] : null;
        $this->container['integration_name'] = isset($data['integration_name']) ? $data['integration_name'] : null;
        $this->container['last_follow_by'] = isset($data['last_follow_by']) ? $data['last_follow_by'] : null;
        $this->container['last_follow_date'] = isset($data['last_follow_date']) ? $data['last_follow_date'] : null;
        $this->container['last_modified_date'] = isset($data['last_modified_date']) ? $data['last_modified_date'] : null;
        $this->container['last_modified_id'] = isset($data['last_modified_id']) ? $data['last_modified_id'] : null;
        $this->container['last_modified_name'] = isset($data['last_modified_name']) ? $data['last_modified_name'] : null;
        $this->container['last_modified_proxy_name'] = isset($data['last_modified_proxy_name']) ? $data['last_modified_proxy_name'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['notificaiton_ids'] = isset($data['notificaiton_ids']) ? $data['notificaiton_ids'] : null;
        $this->container['notification_ids'] = isset($data['notification_ids']) ? $data['notification_ids'] : null;
        $this->container['organization_id'] = isset($data['organization_id']) ? $data['organization_id'] : null;
        $this->container['phase_status'] = isset($data['phase_status']) ? $data['phase_status'] : null;
        $this->container['pin_code'] = isset($data['pin_code']) ? $data['pin_code'] : null;
        $this->container['resource_bundle_id'] = isset($data['resource_bundle_id']) ? $data['resource_bundle_id'] : null;
        $this->container['scenario_id'] = isset($data['scenario_id']) ? $data['scenario_id'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['use_template_var_value'] = isset($data['use_template_var_value']) ? $data['use_template_var_value'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getIncidentActionAllowableValues();
        if (!is_null($this->container['incident_action']) && !in_array($this->container['incident_action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'incident_action', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getIncidentStatusAllowableValues();
        if (!is_null($this->container['incident_status']) && !in_array($this->container['incident_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'incident_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getIncidentTypeAllowableValues();
        if (!is_null($this->container['incident_type']) && !in_array($this->container['incident_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'incident_type', must be one of '%s'",
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
     * Gets close_by
     *
     * @return string
     */
    public function getCloseBy()
    {
        return $this->container['close_by'];
    }

    /**
     * Sets close_by
     *
     * @param string $close_by close_by
     *
     * @return $this
     */
    public function setCloseBy($close_by)
    {
        $this->container['close_by'] = $close_by;

        return $this;
    }

    /**
     * Gets close_date
     *
     * @return \DateTime
     */
    public function getCloseDate()
    {
        return $this->container['close_date'];
    }

    /**
     * Sets close_date
     *
     * @param \DateTime $close_date close_date
     *
     * @return $this
     */
    public function setCloseDate($close_date)
    {
        $this->container['close_date'] = $close_date;

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
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets enable_message_truncate
     *
     * @return bool
     */
    public function getEnableMessageTruncate()
    {
        return $this->container['enable_message_truncate'];
    }

    /**
     * Sets enable_message_truncate
     *
     * @param bool $enable_message_truncate enable_message_truncate
     *
     * @return $this
     */
    public function setEnableMessageTruncate($enable_message_truncate)
    {
        $this->container['enable_message_truncate'] = $enable_message_truncate;

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
     * Gets has_journal
     *
     * @return bool
     */
    public function getHasJournal()
    {
        return $this->container['has_journal'];
    }

    /**
     * Sets has_journal
     *
     * @param bool $has_journal has_journal
     *
     * @return $this
     */
    public function setHasJournal($has_journal)
    {
        $this->container['has_journal'] = $has_journal;

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
     * Gets incident_action
     *
     * @return string
     */
    public function getIncidentAction()
    {
        return $this->container['incident_action'];
    }

    /**
     * Sets incident_action
     *
     * @param string $incident_action incident_action
     *
     * @return $this
     */
    public function setIncidentAction($incident_action)
    {
        $allowedValues = $this->getIncidentActionAllowableValues();
        if (!is_null($incident_action) && !in_array($incident_action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'incident_action', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['incident_action'] = $incident_action;

        return $this;
    }

    /**
     * Gets incident_journals
     *
     * @return \Swagger\Client\Model\IncidentJournalWrapper[]
     */
    public function getIncidentJournals()
    {
        return $this->container['incident_journals'];
    }

    /**
     * Sets incident_journals
     *
     * @param \Swagger\Client\Model\IncidentJournalWrapper[] $incident_journals incident_journals
     *
     * @return $this
     */
    public function setIncidentJournals($incident_journals)
    {
        $this->container['incident_journals'] = $incident_journals;

        return $this;
    }

    /**
     * Gets incident_phases
     *
     * @return \Swagger\Client\Model\IncidentPhaseWrapper[]
     */
    public function getIncidentPhases()
    {
        return $this->container['incident_phases'];
    }

    /**
     * Sets incident_phases
     *
     * @param \Swagger\Client\Model\IncidentPhaseWrapper[] $incident_phases incident_phases
     *
     * @return $this
     */
    public function setIncidentPhases($incident_phases)
    {
        $this->container['incident_phases'] = $incident_phases;

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
     * Gets incident_type
     *
     * @return string
     */
    public function getIncidentType()
    {
        return $this->container['incident_type'];
    }

    /**
     * Sets incident_type
     *
     * @param string $incident_type incident_type
     *
     * @return $this
     */
    public function setIncidentType($incident_type)
    {
        $allowedValues = $this->getIncidentTypeAllowableValues();
        if (!is_null($incident_type) && !in_array($incident_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'incident_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['incident_type'] = $incident_type;

        return $this;
    }

    /**
     * Gets integration_email
     *
     * @return string
     */
    public function getIntegrationEmail()
    {
        return $this->container['integration_email'];
    }

    /**
     * Sets integration_email
     *
     * @param string $integration_email integration_email
     *
     * @return $this
     */
    public function setIntegrationEmail($integration_email)
    {
        $this->container['integration_email'] = $integration_email;

        return $this;
    }

    /**
     * Gets integration_id
     *
     * @return string
     */
    public function getIntegrationId()
    {
        return $this->container['integration_id'];
    }

    /**
     * Sets integration_id
     *
     * @param string $integration_id integration_id
     *
     * @return $this
     */
    public function setIntegrationId($integration_id)
    {
        $this->container['integration_id'] = $integration_id;

        return $this;
    }

    /**
     * Gets integration_name
     *
     * @return string
     */
    public function getIntegrationName()
    {
        return $this->container['integration_name'];
    }

    /**
     * Sets integration_name
     *
     * @param string $integration_name integration_name
     *
     * @return $this
     */
    public function setIntegrationName($integration_name)
    {
        $this->container['integration_name'] = $integration_name;

        return $this;
    }

    /**
     * Gets last_follow_by
     *
     * @return string
     */
    public function getLastFollowBy()
    {
        return $this->container['last_follow_by'];
    }

    /**
     * Sets last_follow_by
     *
     * @param string $last_follow_by last_follow_by
     *
     * @return $this
     */
    public function setLastFollowBy($last_follow_by)
    {
        $this->container['last_follow_by'] = $last_follow_by;

        return $this;
    }

    /**
     * Gets last_follow_date
     *
     * @return \DateTime
     */
    public function getLastFollowDate()
    {
        return $this->container['last_follow_date'];
    }

    /**
     * Sets last_follow_date
     *
     * @param \DateTime $last_follow_date last_follow_date
     *
     * @return $this
     */
    public function setLastFollowDate($last_follow_date)
    {
        $this->container['last_follow_date'] = $last_follow_date;

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
     * Gets notificaiton_ids
     *
     * @return int[]
     */
    public function getNotificaitonIds()
    {
        return $this->container['notificaiton_ids'];
    }

    /**
     * Sets notificaiton_ids
     *
     * @param int[] $notificaiton_ids notificaiton_ids
     *
     * @return $this
     */
    public function setNotificaitonIds($notificaiton_ids)
    {
        $this->container['notificaiton_ids'] = $notificaiton_ids;

        return $this;
    }

    /**
     * Gets notification_ids
     *
     * @return int[]
     */
    public function getNotificationIds()
    {
        return $this->container['notification_ids'];
    }

    /**
     * Sets notification_ids
     *
     * @param int[] $notification_ids notification_ids
     *
     * @return $this
     */
    public function setNotificationIds($notification_ids)
    {
        $this->container['notification_ids'] = $notification_ids;

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
     * Gets phase_status
     *
     * @return \Swagger\Client\Model\PhaseDefinitionWrapper
     */
    public function getPhaseStatus()
    {
        return $this->container['phase_status'];
    }

    /**
     * Sets phase_status
     *
     * @param \Swagger\Client\Model\PhaseDefinitionWrapper $phase_status phase_status
     *
     * @return $this
     */
    public function setPhaseStatus($phase_status)
    {
        $this->container['phase_status'] = $phase_status;

        return $this;
    }

    /**
     * Gets pin_code
     *
     * @return string
     */
    public function getPinCode()
    {
        return $this->container['pin_code'];
    }

    /**
     * Sets pin_code
     *
     * @param string $pin_code pin_code
     *
     * @return $this
     */
    public function setPinCode($pin_code)
    {
        $this->container['pin_code'] = $pin_code;

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
     * Gets scenario_id
     *
     * @return int
     */
    public function getScenarioId()
    {
        return $this->container['scenario_id'];
    }

    /**
     * Sets scenario_id
     *
     * @param int $scenario_id scenario_id
     *
     * @return $this
     */
    public function setScenarioId($scenario_id)
    {
        $this->container['scenario_id'] = $scenario_id;

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
     * Gets use_template_var_value
     *
     * @return bool
     */
    public function getUseTemplateVarValue()
    {
        return $this->container['use_template_var_value'];
    }

    /**
     * Sets use_template_var_value
     *
     * @param bool $use_template_var_value use_template_var_value
     *
     * @return $this
     */
    public function setUseTemplateVarValue($use_template_var_value)
    {
        $this->container['use_template_var_value'] = $use_template_var_value;

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


