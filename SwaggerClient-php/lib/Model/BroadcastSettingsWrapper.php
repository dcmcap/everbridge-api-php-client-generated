<?php
/**
 * BroadcastSettingsWrapper
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
 * BroadcastSettingsWrapper Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BroadcastSettingsWrapper implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BroadcastSettingsWrapper';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_code' => 'string',
        'book_conference' => 'bool',
        'confirm' => 'bool',
        'contact_cycles' => 'int',
        'cycle_interval' => 'int',
        'deliver_paths' => '\Swagger\Client\Model\OrganizationPathWrapper[]',
        'delivery_method_interval' => 'int',
        'delivery_path_order' => 'string',
        'delivery_paths' => '\Swagger\Client\Model\OrganizationPathWrapper[]',
        'duration' => 'int',
        'enable_beep' => 'bool',
        'enable_record' => 'bool',
        'enable_secure_notification' => 'bool',
        'enable_smart_conference_confirmation_text' => 'bool',
        'language' => 'string',
        'mobile_settings' => '\Swagger\Client\Model\MobileNotificationSettingsWrapper',
        'push_custom_fields' => 'map[string,string]',
        'recipient_app' => 'bool',
        'require_pin_for_message' => 'bool',
        'resident_connection_delivery_paths' => '\Swagger\Client\Model\OrganizationPathRCWrapper[]',
        'resource_url' => 'string',
        'response_setting' => '\Swagger\Client\Model\ResponseSettingWrapper',
        'secure_push_instructions' => 'string',
        'sender_caller_infos' => '\Swagger\Client\Model\SenderInformationWrapper[]',
        'sender_email' => 'string',
        'sender_sms_infos' => '\Swagger\Client\Model\SenderSMSInfoWrapper[]',
        'sms_call_back' => 'bool',
        'throttl_default_amount' => 'int',
        'throttle' => 'bool',
        'validate_contacts' => 'bool',
        'validate_contacts_by_organization' => 'bool',
        'voice_mail_option' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_code' => null,
        'book_conference' => null,
        'confirm' => null,
        'contact_cycles' => 'int32',
        'cycle_interval' => 'int32',
        'deliver_paths' => null,
        'delivery_method_interval' => 'int32',
        'delivery_path_order' => null,
        'delivery_paths' => null,
        'duration' => 'int32',
        'enable_beep' => null,
        'enable_record' => null,
        'enable_secure_notification' => null,
        'enable_smart_conference_confirmation_text' => null,
        'language' => null,
        'mobile_settings' => null,
        'push_custom_fields' => null,
        'recipient_app' => null,
        'require_pin_for_message' => null,
        'resident_connection_delivery_paths' => null,
        'resource_url' => null,
        'response_setting' => null,
        'secure_push_instructions' => null,
        'sender_caller_infos' => null,
        'sender_email' => null,
        'sender_sms_infos' => null,
        'sms_call_back' => null,
        'throttl_default_amount' => 'int32',
        'throttle' => null,
        'validate_contacts' => null,
        'validate_contacts_by_organization' => null,
        'voice_mail_option' => null
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
        'account_code' => 'accountCode',
        'book_conference' => 'bookConference',
        'confirm' => 'confirm',
        'contact_cycles' => 'contactCycles',
        'cycle_interval' => 'cycleInterval',
        'deliver_paths' => 'deliverPaths',
        'delivery_method_interval' => 'deliveryMethodInterval',
        'delivery_path_order' => 'deliveryPathOrder',
        'delivery_paths' => 'deliveryPaths',
        'duration' => 'duration',
        'enable_beep' => 'enableBeep',
        'enable_record' => 'enableRecord',
        'enable_secure_notification' => 'enableSecureNotification',
        'enable_smart_conference_confirmation_text' => 'enableSmartConferenceConfirmationText',
        'language' => 'language',
        'mobile_settings' => 'mobileSettings',
        'push_custom_fields' => 'pushCustomFields',
        'recipient_app' => 'recipientApp',
        'require_pin_for_message' => 'requirePinForMessage',
        'resident_connection_delivery_paths' => 'residentConnectionDeliveryPaths',
        'resource_url' => 'resourceURL',
        'response_setting' => 'responseSetting',
        'secure_push_instructions' => 'securePushInstructions',
        'sender_caller_infos' => 'senderCallerInfos',
        'sender_email' => 'senderEmail',
        'sender_sms_infos' => 'senderSMSInfos',
        'sms_call_back' => 'smsCallBack',
        'throttl_default_amount' => 'throttlDefaultAmount',
        'throttle' => 'throttle',
        'validate_contacts' => 'validateContacts',
        'validate_contacts_by_organization' => 'validateContactsByOrganization',
        'voice_mail_option' => 'voiceMailOption'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_code' => 'setAccountCode',
        'book_conference' => 'setBookConference',
        'confirm' => 'setConfirm',
        'contact_cycles' => 'setContactCycles',
        'cycle_interval' => 'setCycleInterval',
        'deliver_paths' => 'setDeliverPaths',
        'delivery_method_interval' => 'setDeliveryMethodInterval',
        'delivery_path_order' => 'setDeliveryPathOrder',
        'delivery_paths' => 'setDeliveryPaths',
        'duration' => 'setDuration',
        'enable_beep' => 'setEnableBeep',
        'enable_record' => 'setEnableRecord',
        'enable_secure_notification' => 'setEnableSecureNotification',
        'enable_smart_conference_confirmation_text' => 'setEnableSmartConferenceConfirmationText',
        'language' => 'setLanguage',
        'mobile_settings' => 'setMobileSettings',
        'push_custom_fields' => 'setPushCustomFields',
        'recipient_app' => 'setRecipientApp',
        'require_pin_for_message' => 'setRequirePinForMessage',
        'resident_connection_delivery_paths' => 'setResidentConnectionDeliveryPaths',
        'resource_url' => 'setResourceUrl',
        'response_setting' => 'setResponseSetting',
        'secure_push_instructions' => 'setSecurePushInstructions',
        'sender_caller_infos' => 'setSenderCallerInfos',
        'sender_email' => 'setSenderEmail',
        'sender_sms_infos' => 'setSenderSmsInfos',
        'sms_call_back' => 'setSmsCallBack',
        'throttl_default_amount' => 'setThrottlDefaultAmount',
        'throttle' => 'setThrottle',
        'validate_contacts' => 'setValidateContacts',
        'validate_contacts_by_organization' => 'setValidateContactsByOrganization',
        'voice_mail_option' => 'setVoiceMailOption'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_code' => 'getAccountCode',
        'book_conference' => 'getBookConference',
        'confirm' => 'getConfirm',
        'contact_cycles' => 'getContactCycles',
        'cycle_interval' => 'getCycleInterval',
        'deliver_paths' => 'getDeliverPaths',
        'delivery_method_interval' => 'getDeliveryMethodInterval',
        'delivery_path_order' => 'getDeliveryPathOrder',
        'delivery_paths' => 'getDeliveryPaths',
        'duration' => 'getDuration',
        'enable_beep' => 'getEnableBeep',
        'enable_record' => 'getEnableRecord',
        'enable_secure_notification' => 'getEnableSecureNotification',
        'enable_smart_conference_confirmation_text' => 'getEnableSmartConferenceConfirmationText',
        'language' => 'getLanguage',
        'mobile_settings' => 'getMobileSettings',
        'push_custom_fields' => 'getPushCustomFields',
        'recipient_app' => 'getRecipientApp',
        'require_pin_for_message' => 'getRequirePinForMessage',
        'resident_connection_delivery_paths' => 'getResidentConnectionDeliveryPaths',
        'resource_url' => 'getResourceUrl',
        'response_setting' => 'getResponseSetting',
        'secure_push_instructions' => 'getSecurePushInstructions',
        'sender_caller_infos' => 'getSenderCallerInfos',
        'sender_email' => 'getSenderEmail',
        'sender_sms_infos' => 'getSenderSmsInfos',
        'sms_call_back' => 'getSmsCallBack',
        'throttl_default_amount' => 'getThrottlDefaultAmount',
        'throttle' => 'getThrottle',
        'validate_contacts' => 'getValidateContacts',
        'validate_contacts_by_organization' => 'getValidateContactsByOrganization',
        'voice_mail_option' => 'getVoiceMailOption'
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

    const DELIVERY_PATH_ORDER_ACCOUNT = 'Account';
    const DELIVERY_PATH_ORDER_ORGANIZATION = 'Organization';
    const DELIVERY_PATH_ORDER_CONTACT = 'Contact';
    const DELIVERY_PATH_ORDER_CUSTOM = 'Custom';
    const VOICE_MAIL_OPTION_NO_MESSAGE = 'NO_MESSAGE';
    const VOICE_MAIL_OPTION_MESSAGE_ONLY = 'MESSAGE_ONLY';
    const VOICE_MAIL_OPTION_MESSAGE_WITH_CONFIRMATION = 'MESSAGE_WITH_CONFIRMATION';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeliveryPathOrderAllowableValues()
    {
        return [
            self::DELIVERY_PATH_ORDER_ACCOUNT,
            self::DELIVERY_PATH_ORDER_ORGANIZATION,
            self::DELIVERY_PATH_ORDER_CONTACT,
            self::DELIVERY_PATH_ORDER_CUSTOM,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVoiceMailOptionAllowableValues()
    {
        return [
            self::VOICE_MAIL_OPTION_NO_MESSAGE,
            self::VOICE_MAIL_OPTION_MESSAGE_ONLY,
            self::VOICE_MAIL_OPTION_MESSAGE_WITH_CONFIRMATION,
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
        $this->container['account_code'] = isset($data['account_code']) ? $data['account_code'] : null;
        $this->container['book_conference'] = isset($data['book_conference']) ? $data['book_conference'] : null;
        $this->container['confirm'] = isset($data['confirm']) ? $data['confirm'] : null;
        $this->container['contact_cycles'] = isset($data['contact_cycles']) ? $data['contact_cycles'] : null;
        $this->container['cycle_interval'] = isset($data['cycle_interval']) ? $data['cycle_interval'] : null;
        $this->container['deliver_paths'] = isset($data['deliver_paths']) ? $data['deliver_paths'] : null;
        $this->container['delivery_method_interval'] = isset($data['delivery_method_interval']) ? $data['delivery_method_interval'] : null;
        $this->container['delivery_path_order'] = isset($data['delivery_path_order']) ? $data['delivery_path_order'] : null;
        $this->container['delivery_paths'] = isset($data['delivery_paths']) ? $data['delivery_paths'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['enable_beep'] = isset($data['enable_beep']) ? $data['enable_beep'] : null;
        $this->container['enable_record'] = isset($data['enable_record']) ? $data['enable_record'] : null;
        $this->container['enable_secure_notification'] = isset($data['enable_secure_notification']) ? $data['enable_secure_notification'] : null;
        $this->container['enable_smart_conference_confirmation_text'] = isset($data['enable_smart_conference_confirmation_text']) ? $data['enable_smart_conference_confirmation_text'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['mobile_settings'] = isset($data['mobile_settings']) ? $data['mobile_settings'] : null;
        $this->container['push_custom_fields'] = isset($data['push_custom_fields']) ? $data['push_custom_fields'] : null;
        $this->container['recipient_app'] = isset($data['recipient_app']) ? $data['recipient_app'] : null;
        $this->container['require_pin_for_message'] = isset($data['require_pin_for_message']) ? $data['require_pin_for_message'] : null;
        $this->container['resident_connection_delivery_paths'] = isset($data['resident_connection_delivery_paths']) ? $data['resident_connection_delivery_paths'] : null;
        $this->container['resource_url'] = isset($data['resource_url']) ? $data['resource_url'] : null;
        $this->container['response_setting'] = isset($data['response_setting']) ? $data['response_setting'] : null;
        $this->container['secure_push_instructions'] = isset($data['secure_push_instructions']) ? $data['secure_push_instructions'] : null;
        $this->container['sender_caller_infos'] = isset($data['sender_caller_infos']) ? $data['sender_caller_infos'] : null;
        $this->container['sender_email'] = isset($data['sender_email']) ? $data['sender_email'] : null;
        $this->container['sender_sms_infos'] = isset($data['sender_sms_infos']) ? $data['sender_sms_infos'] : null;
        $this->container['sms_call_back'] = isset($data['sms_call_back']) ? $data['sms_call_back'] : null;
        $this->container['throttl_default_amount'] = isset($data['throttl_default_amount']) ? $data['throttl_default_amount'] : null;
        $this->container['throttle'] = isset($data['throttle']) ? $data['throttle'] : null;
        $this->container['validate_contacts'] = isset($data['validate_contacts']) ? $data['validate_contacts'] : null;
        $this->container['validate_contacts_by_organization'] = isset($data['validate_contacts_by_organization']) ? $data['validate_contacts_by_organization'] : null;
        $this->container['voice_mail_option'] = isset($data['voice_mail_option']) ? $data['voice_mail_option'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDeliveryPathOrderAllowableValues();
        if (!is_null($this->container['delivery_path_order']) && !in_array($this->container['delivery_path_order'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'delivery_path_order', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getVoiceMailOptionAllowableValues();
        if (!is_null($this->container['voice_mail_option']) && !in_array($this->container['voice_mail_option'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'voice_mail_option', must be one of '%s'",
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
     * Gets account_code
     *
     * @return string
     */
    public function getAccountCode()
    {
        return $this->container['account_code'];
    }

    /**
     * Sets account_code
     *
     * @param string $account_code account_code
     *
     * @return $this
     */
    public function setAccountCode($account_code)
    {
        $this->container['account_code'] = $account_code;

        return $this;
    }

    /**
     * Gets book_conference
     *
     * @return bool
     */
    public function getBookConference()
    {
        return $this->container['book_conference'];
    }

    /**
     * Sets book_conference
     *
     * @param bool $book_conference book_conference
     *
     * @return $this
     */
    public function setBookConference($book_conference)
    {
        $this->container['book_conference'] = $book_conference;

        return $this;
    }

    /**
     * Gets confirm
     *
     * @return bool
     */
    public function getConfirm()
    {
        return $this->container['confirm'];
    }

    /**
     * Sets confirm
     *
     * @param bool $confirm confirm
     *
     * @return $this
     */
    public function setConfirm($confirm)
    {
        $this->container['confirm'] = $confirm;

        return $this;
    }

    /**
     * Gets contact_cycles
     *
     * @return int
     */
    public function getContactCycles()
    {
        return $this->container['contact_cycles'];
    }

    /**
     * Sets contact_cycles
     *
     * @param int $contact_cycles contact_cycles
     *
     * @return $this
     */
    public function setContactCycles($contact_cycles)
    {
        $this->container['contact_cycles'] = $contact_cycles;

        return $this;
    }

    /**
     * Gets cycle_interval
     *
     * @return int
     */
    public function getCycleInterval()
    {
        return $this->container['cycle_interval'];
    }

    /**
     * Sets cycle_interval
     *
     * @param int $cycle_interval cycle_interval
     *
     * @return $this
     */
    public function setCycleInterval($cycle_interval)
    {
        $this->container['cycle_interval'] = $cycle_interval;

        return $this;
    }

    /**
     * Gets deliver_paths
     *
     * @return \Swagger\Client\Model\OrganizationPathWrapper[]
     */
    public function getDeliverPaths()
    {
        return $this->container['deliver_paths'];
    }

    /**
     * Sets deliver_paths
     *
     * @param \Swagger\Client\Model\OrganizationPathWrapper[] $deliver_paths deliver_paths
     *
     * @return $this
     */
    public function setDeliverPaths($deliver_paths)
    {
        $this->container['deliver_paths'] = $deliver_paths;

        return $this;
    }

    /**
     * Gets delivery_method_interval
     *
     * @return int
     */
    public function getDeliveryMethodInterval()
    {
        return $this->container['delivery_method_interval'];
    }

    /**
     * Sets delivery_method_interval
     *
     * @param int $delivery_method_interval delivery_method_interval
     *
     * @return $this
     */
    public function setDeliveryMethodInterval($delivery_method_interval)
    {
        $this->container['delivery_method_interval'] = $delivery_method_interval;

        return $this;
    }

    /**
     * Gets delivery_path_order
     *
     * @return string
     */
    public function getDeliveryPathOrder()
    {
        return $this->container['delivery_path_order'];
    }

    /**
     * Sets delivery_path_order
     *
     * @param string $delivery_path_order delivery_path_order
     *
     * @return $this
     */
    public function setDeliveryPathOrder($delivery_path_order)
    {
        $allowedValues = $this->getDeliveryPathOrderAllowableValues();
        if (!is_null($delivery_path_order) && !in_array($delivery_path_order, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'delivery_path_order', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['delivery_path_order'] = $delivery_path_order;

        return $this;
    }

    /**
     * Gets delivery_paths
     *
     * @return \Swagger\Client\Model\OrganizationPathWrapper[]
     */
    public function getDeliveryPaths()
    {
        return $this->container['delivery_paths'];
    }

    /**
     * Sets delivery_paths
     *
     * @param \Swagger\Client\Model\OrganizationPathWrapper[] $delivery_paths delivery_paths
     *
     * @return $this
     */
    public function setDeliveryPaths($delivery_paths)
    {
        $this->container['delivery_paths'] = $delivery_paths;

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
     * Gets enable_beep
     *
     * @return bool
     */
    public function getEnableBeep()
    {
        return $this->container['enable_beep'];
    }

    /**
     * Sets enable_beep
     *
     * @param bool $enable_beep enable_beep
     *
     * @return $this
     */
    public function setEnableBeep($enable_beep)
    {
        $this->container['enable_beep'] = $enable_beep;

        return $this;
    }

    /**
     * Gets enable_record
     *
     * @return bool
     */
    public function getEnableRecord()
    {
        return $this->container['enable_record'];
    }

    /**
     * Sets enable_record
     *
     * @param bool $enable_record enable_record
     *
     * @return $this
     */
    public function setEnableRecord($enable_record)
    {
        $this->container['enable_record'] = $enable_record;

        return $this;
    }

    /**
     * Gets enable_secure_notification
     *
     * @return bool
     */
    public function getEnableSecureNotification()
    {
        return $this->container['enable_secure_notification'];
    }

    /**
     * Sets enable_secure_notification
     *
     * @param bool $enable_secure_notification enable_secure_notification
     *
     * @return $this
     */
    public function setEnableSecureNotification($enable_secure_notification)
    {
        $this->container['enable_secure_notification'] = $enable_secure_notification;

        return $this;
    }

    /**
     * Gets enable_smart_conference_confirmation_text
     *
     * @return bool
     */
    public function getEnableSmartConferenceConfirmationText()
    {
        return $this->container['enable_smart_conference_confirmation_text'];
    }

    /**
     * Sets enable_smart_conference_confirmation_text
     *
     * @param bool $enable_smart_conference_confirmation_text enable_smart_conference_confirmation_text
     *
     * @return $this
     */
    public function setEnableSmartConferenceConfirmationText($enable_smart_conference_confirmation_text)
    {
        $this->container['enable_smart_conference_confirmation_text'] = $enable_smart_conference_confirmation_text;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets mobile_settings
     *
     * @return \Swagger\Client\Model\MobileNotificationSettingsWrapper
     */
    public function getMobileSettings()
    {
        return $this->container['mobile_settings'];
    }

    /**
     * Sets mobile_settings
     *
     * @param \Swagger\Client\Model\MobileNotificationSettingsWrapper $mobile_settings mobile_settings
     *
     * @return $this
     */
    public function setMobileSettings($mobile_settings)
    {
        $this->container['mobile_settings'] = $mobile_settings;

        return $this;
    }

    /**
     * Gets push_custom_fields
     *
     * @return map[string,string]
     */
    public function getPushCustomFields()
    {
        return $this->container['push_custom_fields'];
    }

    /**
     * Sets push_custom_fields
     *
     * @param map[string,string] $push_custom_fields push_custom_fields
     *
     * @return $this
     */
    public function setPushCustomFields($push_custom_fields)
    {
        $this->container['push_custom_fields'] = $push_custom_fields;

        return $this;
    }

    /**
     * Gets recipient_app
     *
     * @return bool
     */
    public function getRecipientApp()
    {
        return $this->container['recipient_app'];
    }

    /**
     * Sets recipient_app
     *
     * @param bool $recipient_app recipient_app
     *
     * @return $this
     */
    public function setRecipientApp($recipient_app)
    {
        $this->container['recipient_app'] = $recipient_app;

        return $this;
    }

    /**
     * Gets require_pin_for_message
     *
     * @return bool
     */
    public function getRequirePinForMessage()
    {
        return $this->container['require_pin_for_message'];
    }

    /**
     * Sets require_pin_for_message
     *
     * @param bool $require_pin_for_message require_pin_for_message
     *
     * @return $this
     */
    public function setRequirePinForMessage($require_pin_for_message)
    {
        $this->container['require_pin_for_message'] = $require_pin_for_message;

        return $this;
    }

    /**
     * Gets resident_connection_delivery_paths
     *
     * @return \Swagger\Client\Model\OrganizationPathRCWrapper[]
     */
    public function getResidentConnectionDeliveryPaths()
    {
        return $this->container['resident_connection_delivery_paths'];
    }

    /**
     * Sets resident_connection_delivery_paths
     *
     * @param \Swagger\Client\Model\OrganizationPathRCWrapper[] $resident_connection_delivery_paths resident_connection_delivery_paths
     *
     * @return $this
     */
    public function setResidentConnectionDeliveryPaths($resident_connection_delivery_paths)
    {
        $this->container['resident_connection_delivery_paths'] = $resident_connection_delivery_paths;

        return $this;
    }

    /**
     * Gets resource_url
     *
     * @return string
     */
    public function getResourceUrl()
    {
        return $this->container['resource_url'];
    }

    /**
     * Sets resource_url
     *
     * @param string $resource_url resource_url
     *
     * @return $this
     */
    public function setResourceUrl($resource_url)
    {
        $this->container['resource_url'] = $resource_url;

        return $this;
    }

    /**
     * Gets response_setting
     *
     * @return \Swagger\Client\Model\ResponseSettingWrapper
     */
    public function getResponseSetting()
    {
        return $this->container['response_setting'];
    }

    /**
     * Sets response_setting
     *
     * @param \Swagger\Client\Model\ResponseSettingWrapper $response_setting response_setting
     *
     * @return $this
     */
    public function setResponseSetting($response_setting)
    {
        $this->container['response_setting'] = $response_setting;

        return $this;
    }

    /**
     * Gets secure_push_instructions
     *
     * @return string
     */
    public function getSecurePushInstructions()
    {
        return $this->container['secure_push_instructions'];
    }

    /**
     * Sets secure_push_instructions
     *
     * @param string $secure_push_instructions secure_push_instructions
     *
     * @return $this
     */
    public function setSecurePushInstructions($secure_push_instructions)
    {
        $this->container['secure_push_instructions'] = $secure_push_instructions;

        return $this;
    }

    /**
     * Gets sender_caller_infos
     *
     * @return \Swagger\Client\Model\SenderInformationWrapper[]
     */
    public function getSenderCallerInfos()
    {
        return $this->container['sender_caller_infos'];
    }

    /**
     * Sets sender_caller_infos
     *
     * @param \Swagger\Client\Model\SenderInformationWrapper[] $sender_caller_infos sender_caller_infos
     *
     * @return $this
     */
    public function setSenderCallerInfos($sender_caller_infos)
    {
        $this->container['sender_caller_infos'] = $sender_caller_infos;

        return $this;
    }

    /**
     * Gets sender_email
     *
     * @return string
     */
    public function getSenderEmail()
    {
        return $this->container['sender_email'];
    }

    /**
     * Sets sender_email
     *
     * @param string $sender_email sender_email
     *
     * @return $this
     */
    public function setSenderEmail($sender_email)
    {
        $this->container['sender_email'] = $sender_email;

        return $this;
    }

    /**
     * Gets sender_sms_infos
     *
     * @return \Swagger\Client\Model\SenderSMSInfoWrapper[]
     */
    public function getSenderSmsInfos()
    {
        return $this->container['sender_sms_infos'];
    }

    /**
     * Sets sender_sms_infos
     *
     * @param \Swagger\Client\Model\SenderSMSInfoWrapper[] $sender_sms_infos sender_sms_infos
     *
     * @return $this
     */
    public function setSenderSmsInfos($sender_sms_infos)
    {
        $this->container['sender_sms_infos'] = $sender_sms_infos;

        return $this;
    }

    /**
     * Gets sms_call_back
     *
     * @return bool
     */
    public function getSmsCallBack()
    {
        return $this->container['sms_call_back'];
    }

    /**
     * Sets sms_call_back
     *
     * @param bool $sms_call_back sms_call_back
     *
     * @return $this
     */
    public function setSmsCallBack($sms_call_back)
    {
        $this->container['sms_call_back'] = $sms_call_back;

        return $this;
    }

    /**
     * Gets throttl_default_amount
     *
     * @return int
     */
    public function getThrottlDefaultAmount()
    {
        return $this->container['throttl_default_amount'];
    }

    /**
     * Sets throttl_default_amount
     *
     * @param int $throttl_default_amount throttl_default_amount
     *
     * @return $this
     */
    public function setThrottlDefaultAmount($throttl_default_amount)
    {
        $this->container['throttl_default_amount'] = $throttl_default_amount;

        return $this;
    }

    /**
     * Gets throttle
     *
     * @return bool
     */
    public function getThrottle()
    {
        return $this->container['throttle'];
    }

    /**
     * Sets throttle
     *
     * @param bool $throttle throttle
     *
     * @return $this
     */
    public function setThrottle($throttle)
    {
        $this->container['throttle'] = $throttle;

        return $this;
    }

    /**
     * Gets validate_contacts
     *
     * @return bool
     */
    public function getValidateContacts()
    {
        return $this->container['validate_contacts'];
    }

    /**
     * Sets validate_contacts
     *
     * @param bool $validate_contacts validate_contacts
     *
     * @return $this
     */
    public function setValidateContacts($validate_contacts)
    {
        $this->container['validate_contacts'] = $validate_contacts;

        return $this;
    }

    /**
     * Gets validate_contacts_by_organization
     *
     * @return bool
     */
    public function getValidateContactsByOrganization()
    {
        return $this->container['validate_contacts_by_organization'];
    }

    /**
     * Sets validate_contacts_by_organization
     *
     * @param bool $validate_contacts_by_organization validate_contacts_by_organization
     *
     * @return $this
     */
    public function setValidateContactsByOrganization($validate_contacts_by_organization)
    {
        $this->container['validate_contacts_by_organization'] = $validate_contacts_by_organization;

        return $this;
    }

    /**
     * Gets voice_mail_option
     *
     * @return string
     */
    public function getVoiceMailOption()
    {
        return $this->container['voice_mail_option'];
    }

    /**
     * Sets voice_mail_option
     *
     * @param string $voice_mail_option voice_mail_option
     *
     * @return $this
     */
    public function setVoiceMailOption($voice_mail_option)
    {
        $allowedValues = $this->getVoiceMailOptionAllowableValues();
        if (!is_null($voice_mail_option) && !in_array($voice_mail_option, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'voice_mail_option', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['voice_mail_option'] = $voice_mail_option;

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


