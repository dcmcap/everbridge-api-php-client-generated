<?php
/**
 * PhaseTemplateWrapper
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
 * PhaseTemplateWrapper Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PhaseTemplateWrapper implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PhaseTemplateWrapper';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'broadcast_template' => '\Swagger\Client\Model\BroadcastTemplateWrapper',
        'contacts_flag' => 'int',
        'evaluate_all' => 'bool',
        'form_template' => '\Swagger\Client\Model\FormTemplateWrapper',
        'ignore_variable' => 'bool',
        'incident_notification_property_bag' => 'map[string,string]',
        'message_flag' => 'int',
        'name' => 'string',
        'phase_definitions' => '\Swagger\Client\Model\PhaseDefinitionWrapper[]',
        'publish_options_flag' => 'map[string,int]',
        'settings_flag' => 'int',
        'skip_variable_required_check' => 'bool',
        'template_id' => 'int',
        'template_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'broadcast_template' => null,
        'contacts_flag' => 'int32',
        'evaluate_all' => null,
        'form_template' => null,
        'ignore_variable' => null,
        'incident_notification_property_bag' => null,
        'message_flag' => 'int32',
        'name' => null,
        'phase_definitions' => null,
        'publish_options_flag' => 'int32',
        'settings_flag' => 'int32',
        'skip_variable_required_check' => null,
        'template_id' => 'int64',
        'template_name' => null
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
        'broadcast_template' => 'broadcastTemplate',
        'contacts_flag' => 'contactsFlag',
        'evaluate_all' => 'evaluateAll',
        'form_template' => 'formTemplate',
        'ignore_variable' => 'ignoreVariable',
        'incident_notification_property_bag' => 'incidentNotificationPropertyBag',
        'message_flag' => 'messageFlag',
        'name' => 'name',
        'phase_definitions' => 'phaseDefinitions',
        'publish_options_flag' => 'publishOptionsFlag',
        'settings_flag' => 'settingsFlag',
        'skip_variable_required_check' => 'skipVariableRequiredCheck',
        'template_id' => 'templateId',
        'template_name' => 'templateName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'broadcast_template' => 'setBroadcastTemplate',
        'contacts_flag' => 'setContactsFlag',
        'evaluate_all' => 'setEvaluateAll',
        'form_template' => 'setFormTemplate',
        'ignore_variable' => 'setIgnoreVariable',
        'incident_notification_property_bag' => 'setIncidentNotificationPropertyBag',
        'message_flag' => 'setMessageFlag',
        'name' => 'setName',
        'phase_definitions' => 'setPhaseDefinitions',
        'publish_options_flag' => 'setPublishOptionsFlag',
        'settings_flag' => 'setSettingsFlag',
        'skip_variable_required_check' => 'setSkipVariableRequiredCheck',
        'template_id' => 'setTemplateId',
        'template_name' => 'setTemplateName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'broadcast_template' => 'getBroadcastTemplate',
        'contacts_flag' => 'getContactsFlag',
        'evaluate_all' => 'getEvaluateAll',
        'form_template' => 'getFormTemplate',
        'ignore_variable' => 'getIgnoreVariable',
        'incident_notification_property_bag' => 'getIncidentNotificationPropertyBag',
        'message_flag' => 'getMessageFlag',
        'name' => 'getName',
        'phase_definitions' => 'getPhaseDefinitions',
        'publish_options_flag' => 'getPublishOptionsFlag',
        'settings_flag' => 'getSettingsFlag',
        'skip_variable_required_check' => 'getSkipVariableRequiredCheck',
        'template_id' => 'getTemplateId',
        'template_name' => 'getTemplateName'
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
        $this->container['broadcast_template'] = isset($data['broadcast_template']) ? $data['broadcast_template'] : null;
        $this->container['contacts_flag'] = isset($data['contacts_flag']) ? $data['contacts_flag'] : null;
        $this->container['evaluate_all'] = isset($data['evaluate_all']) ? $data['evaluate_all'] : null;
        $this->container['form_template'] = isset($data['form_template']) ? $data['form_template'] : null;
        $this->container['ignore_variable'] = isset($data['ignore_variable']) ? $data['ignore_variable'] : null;
        $this->container['incident_notification_property_bag'] = isset($data['incident_notification_property_bag']) ? $data['incident_notification_property_bag'] : null;
        $this->container['message_flag'] = isset($data['message_flag']) ? $data['message_flag'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['phase_definitions'] = isset($data['phase_definitions']) ? $data['phase_definitions'] : null;
        $this->container['publish_options_flag'] = isset($data['publish_options_flag']) ? $data['publish_options_flag'] : null;
        $this->container['settings_flag'] = isset($data['settings_flag']) ? $data['settings_flag'] : null;
        $this->container['skip_variable_required_check'] = isset($data['skip_variable_required_check']) ? $data['skip_variable_required_check'] : null;
        $this->container['template_id'] = isset($data['template_id']) ? $data['template_id'] : null;
        $this->container['template_name'] = isset($data['template_name']) ? $data['template_name'] : null;
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
     * Gets broadcast_template
     *
     * @return \Swagger\Client\Model\BroadcastTemplateWrapper
     */
    public function getBroadcastTemplate()
    {
        return $this->container['broadcast_template'];
    }

    /**
     * Sets broadcast_template
     *
     * @param \Swagger\Client\Model\BroadcastTemplateWrapper $broadcast_template broadcast_template
     *
     * @return $this
     */
    public function setBroadcastTemplate($broadcast_template)
    {
        $this->container['broadcast_template'] = $broadcast_template;

        return $this;
    }

    /**
     * Gets contacts_flag
     *
     * @return int
     */
    public function getContactsFlag()
    {
        return $this->container['contacts_flag'];
    }

    /**
     * Sets contacts_flag
     *
     * @param int $contacts_flag contacts_flag
     *
     * @return $this
     */
    public function setContactsFlag($contacts_flag)
    {
        $this->container['contacts_flag'] = $contacts_flag;

        return $this;
    }

    /**
     * Gets evaluate_all
     *
     * @return bool
     */
    public function getEvaluateAll()
    {
        return $this->container['evaluate_all'];
    }

    /**
     * Sets evaluate_all
     *
     * @param bool $evaluate_all evaluate_all
     *
     * @return $this
     */
    public function setEvaluateAll($evaluate_all)
    {
        $this->container['evaluate_all'] = $evaluate_all;

        return $this;
    }

    /**
     * Gets form_template
     *
     * @return \Swagger\Client\Model\FormTemplateWrapper
     */
    public function getFormTemplate()
    {
        return $this->container['form_template'];
    }

    /**
     * Sets form_template
     *
     * @param \Swagger\Client\Model\FormTemplateWrapper $form_template form_template
     *
     * @return $this
     */
    public function setFormTemplate($form_template)
    {
        $this->container['form_template'] = $form_template;

        return $this;
    }

    /**
     * Gets ignore_variable
     *
     * @return bool
     */
    public function getIgnoreVariable()
    {
        return $this->container['ignore_variable'];
    }

    /**
     * Sets ignore_variable
     *
     * @param bool $ignore_variable ignore_variable
     *
     * @return $this
     */
    public function setIgnoreVariable($ignore_variable)
    {
        $this->container['ignore_variable'] = $ignore_variable;

        return $this;
    }

    /**
     * Gets incident_notification_property_bag
     *
     * @return map[string,string]
     */
    public function getIncidentNotificationPropertyBag()
    {
        return $this->container['incident_notification_property_bag'];
    }

    /**
     * Sets incident_notification_property_bag
     *
     * @param map[string,string] $incident_notification_property_bag incident_notification_property_bag
     *
     * @return $this
     */
    public function setIncidentNotificationPropertyBag($incident_notification_property_bag)
    {
        $this->container['incident_notification_property_bag'] = $incident_notification_property_bag;

        return $this;
    }

    /**
     * Gets message_flag
     *
     * @return int
     */
    public function getMessageFlag()
    {
        return $this->container['message_flag'];
    }

    /**
     * Sets message_flag
     *
     * @param int $message_flag message_flag
     *
     * @return $this
     */
    public function setMessageFlag($message_flag)
    {
        $this->container['message_flag'] = $message_flag;

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
     * Gets phase_definitions
     *
     * @return \Swagger\Client\Model\PhaseDefinitionWrapper[]
     */
    public function getPhaseDefinitions()
    {
        return $this->container['phase_definitions'];
    }

    /**
     * Sets phase_definitions
     *
     * @param \Swagger\Client\Model\PhaseDefinitionWrapper[] $phase_definitions phase_definitions
     *
     * @return $this
     */
    public function setPhaseDefinitions($phase_definitions)
    {
        $this->container['phase_definitions'] = $phase_definitions;

        return $this;
    }

    /**
     * Gets publish_options_flag
     *
     * @return map[string,int]
     */
    public function getPublishOptionsFlag()
    {
        return $this->container['publish_options_flag'];
    }

    /**
     * Sets publish_options_flag
     *
     * @param map[string,int] $publish_options_flag publish_options_flag
     *
     * @return $this
     */
    public function setPublishOptionsFlag($publish_options_flag)
    {
        $this->container['publish_options_flag'] = $publish_options_flag;

        return $this;
    }

    /**
     * Gets settings_flag
     *
     * @return int
     */
    public function getSettingsFlag()
    {
        return $this->container['settings_flag'];
    }

    /**
     * Sets settings_flag
     *
     * @param int $settings_flag settings_flag
     *
     * @return $this
     */
    public function setSettingsFlag($settings_flag)
    {
        $this->container['settings_flag'] = $settings_flag;

        return $this;
    }

    /**
     * Gets skip_variable_required_check
     *
     * @return bool
     */
    public function getSkipVariableRequiredCheck()
    {
        return $this->container['skip_variable_required_check'];
    }

    /**
     * Sets skip_variable_required_check
     *
     * @param bool $skip_variable_required_check skip_variable_required_check
     *
     * @return $this
     */
    public function setSkipVariableRequiredCheck($skip_variable_required_check)
    {
        $this->container['skip_variable_required_check'] = $skip_variable_required_check;

        return $this;
    }

    /**
     * Gets template_id
     *
     * @return int
     */
    public function getTemplateId()
    {
        return $this->container['template_id'];
    }

    /**
     * Sets template_id
     *
     * @param int $template_id template_id
     *
     * @return $this
     */
    public function setTemplateId($template_id)
    {
        $this->container['template_id'] = $template_id;

        return $this;
    }

    /**
     * Gets template_name
     *
     * @return string
     */
    public function getTemplateName()
    {
        return $this->container['template_name'];
    }

    /**
     * Sets template_name
     *
     * @param string $template_name template_name
     *
     * @return $this
     */
    public function setTemplateName($template_name)
    {
        $this->container['template_name'] = $template_name;

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

