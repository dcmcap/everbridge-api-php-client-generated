<?php
/**
 * BroadcastMessageWrapper
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
 * BroadcastMessageWrapper Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BroadcastMessageWrapper implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BroadcastMessageWrapper';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_id' => 'int',
        'attachment_files' => '\Swagger\Client\Model\FileAttachmentWrapper[]',
        'audio_key' => 'string',
        'category' => '\Swagger\Client\Model\CategoryWrapper',
        'category_id' => 'int',
        'conference_bridge' => '\Swagger\Client\Model\ConferenceBridgeWrapper',
        'conference_bridge_id' => 'int',
        'content_type' => 'string',
        'created_date' => '\DateTime',
        'created_id' => 'int',
        'created_name' => 'string',
        'created_proxy_name' => 'string',
        'id' => 'int',
        'image_key' => 'string',
        'last_modified_date' => '\DateTime',
        'last_modified_id' => 'int',
        'last_modified_name' => 'string',
        'last_modified_proxy_name' => 'string',
        'organization_id' => 'int',
        'questionaire' => '\Swagger\Client\Model\QuestionaireWrapper',
        'resource_bundle_id' => 'int',
        'rtf_content' => 'string',
        'status' => 'string',
        'text_message' => 'string',
        'text_sms_message' => 'string',
        'text_sms_web_page_message' => 'string',
        'title' => 'string',
        'use_custom_email' => 'bool',
        'use_custom_sms' => 'bool',
        'use_sms_prefix' => 'bool',
        'use_sms_web_link' => 'bool',
        'voice_source' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_id' => 'int64',
        'attachment_files' => null,
        'audio_key' => null,
        'category' => null,
        'category_id' => 'int64',
        'conference_bridge' => null,
        'conference_bridge_id' => 'int64',
        'content_type' => null,
        'created_date' => 'date-time',
        'created_id' => 'int64',
        'created_name' => null,
        'created_proxy_name' => null,
        'id' => 'int64',
        'image_key' => null,
        'last_modified_date' => 'date-time',
        'last_modified_id' => 'int64',
        'last_modified_name' => null,
        'last_modified_proxy_name' => null,
        'organization_id' => 'int64',
        'questionaire' => null,
        'resource_bundle_id' => 'int64',
        'rtf_content' => null,
        'status' => null,
        'text_message' => null,
        'text_sms_message' => null,
        'text_sms_web_page_message' => null,
        'title' => null,
        'use_custom_email' => null,
        'use_custom_sms' => null,
        'use_sms_prefix' => null,
        'use_sms_web_link' => null,
        'voice_source' => null
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
        'attachment_files' => 'attachmentFiles',
        'audio_key' => 'audioKey',
        'category' => 'category',
        'category_id' => 'categoryId',
        'conference_bridge' => 'conferenceBridge',
        'conference_bridge_id' => 'conferenceBridgeId',
        'content_type' => 'contentType',
        'created_date' => 'createdDate',
        'created_id' => 'createdId',
        'created_name' => 'createdName',
        'created_proxy_name' => 'createdProxyName',
        'id' => 'id',
        'image_key' => 'imageKey',
        'last_modified_date' => 'lastModifiedDate',
        'last_modified_id' => 'lastModifiedId',
        'last_modified_name' => 'lastModifiedName',
        'last_modified_proxy_name' => 'lastModifiedProxyName',
        'organization_id' => 'organizationId',
        'questionaire' => 'questionaire',
        'resource_bundle_id' => 'resourceBundleId',
        'rtf_content' => 'rtfContent',
        'status' => 'status',
        'text_message' => 'textMessage',
        'text_sms_message' => 'textSmsMessage',
        'text_sms_web_page_message' => 'textSmsWebPageMessage',
        'title' => 'title',
        'use_custom_email' => 'useCustomEmail',
        'use_custom_sms' => 'useCustomSms',
        'use_sms_prefix' => 'useSmsPrefix',
        'use_sms_web_link' => 'useSmsWebLink',
        'voice_source' => 'voiceSource'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'attachment_files' => 'setAttachmentFiles',
        'audio_key' => 'setAudioKey',
        'category' => 'setCategory',
        'category_id' => 'setCategoryId',
        'conference_bridge' => 'setConferenceBridge',
        'conference_bridge_id' => 'setConferenceBridgeId',
        'content_type' => 'setContentType',
        'created_date' => 'setCreatedDate',
        'created_id' => 'setCreatedId',
        'created_name' => 'setCreatedName',
        'created_proxy_name' => 'setCreatedProxyName',
        'id' => 'setId',
        'image_key' => 'setImageKey',
        'last_modified_date' => 'setLastModifiedDate',
        'last_modified_id' => 'setLastModifiedId',
        'last_modified_name' => 'setLastModifiedName',
        'last_modified_proxy_name' => 'setLastModifiedProxyName',
        'organization_id' => 'setOrganizationId',
        'questionaire' => 'setQuestionaire',
        'resource_bundle_id' => 'setResourceBundleId',
        'rtf_content' => 'setRtfContent',
        'status' => 'setStatus',
        'text_message' => 'setTextMessage',
        'text_sms_message' => 'setTextSmsMessage',
        'text_sms_web_page_message' => 'setTextSmsWebPageMessage',
        'title' => 'setTitle',
        'use_custom_email' => 'setUseCustomEmail',
        'use_custom_sms' => 'setUseCustomSms',
        'use_sms_prefix' => 'setUseSmsPrefix',
        'use_sms_web_link' => 'setUseSmsWebLink',
        'voice_source' => 'setVoiceSource'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'attachment_files' => 'getAttachmentFiles',
        'audio_key' => 'getAudioKey',
        'category' => 'getCategory',
        'category_id' => 'getCategoryId',
        'conference_bridge' => 'getConferenceBridge',
        'conference_bridge_id' => 'getConferenceBridgeId',
        'content_type' => 'getContentType',
        'created_date' => 'getCreatedDate',
        'created_id' => 'getCreatedId',
        'created_name' => 'getCreatedName',
        'created_proxy_name' => 'getCreatedProxyName',
        'id' => 'getId',
        'image_key' => 'getImageKey',
        'last_modified_date' => 'getLastModifiedDate',
        'last_modified_id' => 'getLastModifiedId',
        'last_modified_name' => 'getLastModifiedName',
        'last_modified_proxy_name' => 'getLastModifiedProxyName',
        'organization_id' => 'getOrganizationId',
        'questionaire' => 'getQuestionaire',
        'resource_bundle_id' => 'getResourceBundleId',
        'rtf_content' => 'getRtfContent',
        'status' => 'getStatus',
        'text_message' => 'getTextMessage',
        'text_sms_message' => 'getTextSmsMessage',
        'text_sms_web_page_message' => 'getTextSmsWebPageMessage',
        'title' => 'getTitle',
        'use_custom_email' => 'getUseCustomEmail',
        'use_custom_sms' => 'getUseCustomSms',
        'use_sms_prefix' => 'getUseSmsPrefix',
        'use_sms_web_link' => 'getUseSmsWebLink',
        'voice_source' => 'getVoiceSource'
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

    const CONTENT_TYPE_VOICE = 'Voice';
    const CONTENT_TYPE_TEXT = 'Text';
    const CONTENT_TYPE_VOICE_TEXT = 'VoiceText';
    const STATUS_A = 'A';
    const STATUS_D = 'D';
    const VOICE_SOURCE_WEB_UPLOADER = 'WebUploader';
    const VOICE_SOURCE_WEB_RECORDER = 'WebRecorder';
    const VOICE_SOURCE_PRE_RECORDED = 'PreRecorded';
    const VOICE_SOURCE_MOBILE_RECORDER = 'MobileRecorder';
    const VOICE_SOURCE_LANDLINE_RECORDER = 'LandlineRecorder';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContentTypeAllowableValues()
    {
        return [
            self::CONTENT_TYPE_VOICE,
            self::CONTENT_TYPE_TEXT,
            self::CONTENT_TYPE_VOICE_TEXT,
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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVoiceSourceAllowableValues()
    {
        return [
            self::VOICE_SOURCE_WEB_UPLOADER,
            self::VOICE_SOURCE_WEB_RECORDER,
            self::VOICE_SOURCE_PRE_RECORDED,
            self::VOICE_SOURCE_MOBILE_RECORDER,
            self::VOICE_SOURCE_LANDLINE_RECORDER,
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
        $this->container['attachment_files'] = isset($data['attachment_files']) ? $data['attachment_files'] : null;
        $this->container['audio_key'] = isset($data['audio_key']) ? $data['audio_key'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['conference_bridge'] = isset($data['conference_bridge']) ? $data['conference_bridge'] : null;
        $this->container['conference_bridge_id'] = isset($data['conference_bridge_id']) ? $data['conference_bridge_id'] : null;
        $this->container['content_type'] = isset($data['content_type']) ? $data['content_type'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['created_id'] = isset($data['created_id']) ? $data['created_id'] : null;
        $this->container['created_name'] = isset($data['created_name']) ? $data['created_name'] : null;
        $this->container['created_proxy_name'] = isset($data['created_proxy_name']) ? $data['created_proxy_name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['image_key'] = isset($data['image_key']) ? $data['image_key'] : null;
        $this->container['last_modified_date'] = isset($data['last_modified_date']) ? $data['last_modified_date'] : null;
        $this->container['last_modified_id'] = isset($data['last_modified_id']) ? $data['last_modified_id'] : null;
        $this->container['last_modified_name'] = isset($data['last_modified_name']) ? $data['last_modified_name'] : null;
        $this->container['last_modified_proxy_name'] = isset($data['last_modified_proxy_name']) ? $data['last_modified_proxy_name'] : null;
        $this->container['organization_id'] = isset($data['organization_id']) ? $data['organization_id'] : null;
        $this->container['questionaire'] = isset($data['questionaire']) ? $data['questionaire'] : null;
        $this->container['resource_bundle_id'] = isset($data['resource_bundle_id']) ? $data['resource_bundle_id'] : null;
        $this->container['rtf_content'] = isset($data['rtf_content']) ? $data['rtf_content'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['text_message'] = isset($data['text_message']) ? $data['text_message'] : null;
        $this->container['text_sms_message'] = isset($data['text_sms_message']) ? $data['text_sms_message'] : null;
        $this->container['text_sms_web_page_message'] = isset($data['text_sms_web_page_message']) ? $data['text_sms_web_page_message'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['use_custom_email'] = isset($data['use_custom_email']) ? $data['use_custom_email'] : null;
        $this->container['use_custom_sms'] = isset($data['use_custom_sms']) ? $data['use_custom_sms'] : null;
        $this->container['use_sms_prefix'] = isset($data['use_sms_prefix']) ? $data['use_sms_prefix'] : null;
        $this->container['use_sms_web_link'] = isset($data['use_sms_web_link']) ? $data['use_sms_web_link'] : null;
        $this->container['voice_source'] = isset($data['voice_source']) ? $data['voice_source'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getContentTypeAllowableValues();
        if (!is_null($this->container['content_type']) && !in_array($this->container['content_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'content_type', must be one of '%s'",
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

        $allowedValues = $this->getVoiceSourceAllowableValues();
        if (!is_null($this->container['voice_source']) && !in_array($this->container['voice_source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'voice_source', must be one of '%s'",
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
     * Gets attachment_files
     *
     * @return \Swagger\Client\Model\FileAttachmentWrapper[]
     */
    public function getAttachmentFiles()
    {
        return $this->container['attachment_files'];
    }

    /**
     * Sets attachment_files
     *
     * @param \Swagger\Client\Model\FileAttachmentWrapper[] $attachment_files attachment_files
     *
     * @return $this
     */
    public function setAttachmentFiles($attachment_files)
    {
        $this->container['attachment_files'] = $attachment_files;

        return $this;
    }

    /**
     * Gets audio_key
     *
     * @return string
     */
    public function getAudioKey()
    {
        return $this->container['audio_key'];
    }

    /**
     * Sets audio_key
     *
     * @param string $audio_key audio_key
     *
     * @return $this
     */
    public function setAudioKey($audio_key)
    {
        $this->container['audio_key'] = $audio_key;

        return $this;
    }

    /**
     * Gets category
     *
     * @return \Swagger\Client\Model\CategoryWrapper
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \Swagger\Client\Model\CategoryWrapper $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return int
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param int $category_id category_id
     *
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets conference_bridge
     *
     * @return \Swagger\Client\Model\ConferenceBridgeWrapper
     */
    public function getConferenceBridge()
    {
        return $this->container['conference_bridge'];
    }

    /**
     * Sets conference_bridge
     *
     * @param \Swagger\Client\Model\ConferenceBridgeWrapper $conference_bridge conference_bridge
     *
     * @return $this
     */
    public function setConferenceBridge($conference_bridge)
    {
        $this->container['conference_bridge'] = $conference_bridge;

        return $this;
    }

    /**
     * Gets conference_bridge_id
     *
     * @return int
     */
    public function getConferenceBridgeId()
    {
        return $this->container['conference_bridge_id'];
    }

    /**
     * Sets conference_bridge_id
     *
     * @param int $conference_bridge_id conference_bridge_id
     *
     * @return $this
     */
    public function setConferenceBridgeId($conference_bridge_id)
    {
        $this->container['conference_bridge_id'] = $conference_bridge_id;

        return $this;
    }

    /**
     * Gets content_type
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     *
     * @param string $content_type content_type
     *
     * @return $this
     */
    public function setContentType($content_type)
    {
        $allowedValues = $this->getContentTypeAllowableValues();
        if (!is_null($content_type) && !in_array($content_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'content_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['content_type'] = $content_type;

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
     * Gets image_key
     *
     * @return string
     */
    public function getImageKey()
    {
        return $this->container['image_key'];
    }

    /**
     * Sets image_key
     *
     * @param string $image_key image_key
     *
     * @return $this
     */
    public function setImageKey($image_key)
    {
        $this->container['image_key'] = $image_key;

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
     * Gets questionaire
     *
     * @return \Swagger\Client\Model\QuestionaireWrapper
     */
    public function getQuestionaire()
    {
        return $this->container['questionaire'];
    }

    /**
     * Sets questionaire
     *
     * @param \Swagger\Client\Model\QuestionaireWrapper $questionaire questionaire
     *
     * @return $this
     */
    public function setQuestionaire($questionaire)
    {
        $this->container['questionaire'] = $questionaire;

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
     * Gets rtf_content
     *
     * @return string
     */
    public function getRtfContent()
    {
        return $this->container['rtf_content'];
    }

    /**
     * Sets rtf_content
     *
     * @param string $rtf_content rtf_content
     *
     * @return $this
     */
    public function setRtfContent($rtf_content)
    {
        $this->container['rtf_content'] = $rtf_content;

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
     * Gets text_message
     *
     * @return string
     */
    public function getTextMessage()
    {
        return $this->container['text_message'];
    }

    /**
     * Sets text_message
     *
     * @param string $text_message text_message
     *
     * @return $this
     */
    public function setTextMessage($text_message)
    {
        $this->container['text_message'] = $text_message;

        return $this;
    }

    /**
     * Gets text_sms_message
     *
     * @return string
     */
    public function getTextSmsMessage()
    {
        return $this->container['text_sms_message'];
    }

    /**
     * Sets text_sms_message
     *
     * @param string $text_sms_message text_sms_message
     *
     * @return $this
     */
    public function setTextSmsMessage($text_sms_message)
    {
        $this->container['text_sms_message'] = $text_sms_message;

        return $this;
    }

    /**
     * Gets text_sms_web_page_message
     *
     * @return string
     */
    public function getTextSmsWebPageMessage()
    {
        return $this->container['text_sms_web_page_message'];
    }

    /**
     * Sets text_sms_web_page_message
     *
     * @param string $text_sms_web_page_message text_sms_web_page_message
     *
     * @return $this
     */
    public function setTextSmsWebPageMessage($text_sms_web_page_message)
    {
        $this->container['text_sms_web_page_message'] = $text_sms_web_page_message;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets use_custom_email
     *
     * @return bool
     */
    public function getUseCustomEmail()
    {
        return $this->container['use_custom_email'];
    }

    /**
     * Sets use_custom_email
     *
     * @param bool $use_custom_email use_custom_email
     *
     * @return $this
     */
    public function setUseCustomEmail($use_custom_email)
    {
        $this->container['use_custom_email'] = $use_custom_email;

        return $this;
    }

    /**
     * Gets use_custom_sms
     *
     * @return bool
     */
    public function getUseCustomSms()
    {
        return $this->container['use_custom_sms'];
    }

    /**
     * Sets use_custom_sms
     *
     * @param bool $use_custom_sms use_custom_sms
     *
     * @return $this
     */
    public function setUseCustomSms($use_custom_sms)
    {
        $this->container['use_custom_sms'] = $use_custom_sms;

        return $this;
    }

    /**
     * Gets use_sms_prefix
     *
     * @return bool
     */
    public function getUseSmsPrefix()
    {
        return $this->container['use_sms_prefix'];
    }

    /**
     * Sets use_sms_prefix
     *
     * @param bool $use_sms_prefix use_sms_prefix
     *
     * @return $this
     */
    public function setUseSmsPrefix($use_sms_prefix)
    {
        $this->container['use_sms_prefix'] = $use_sms_prefix;

        return $this;
    }

    /**
     * Gets use_sms_web_link
     *
     * @return bool
     */
    public function getUseSmsWebLink()
    {
        return $this->container['use_sms_web_link'];
    }

    /**
     * Sets use_sms_web_link
     *
     * @param bool $use_sms_web_link use_sms_web_link
     *
     * @return $this
     */
    public function setUseSmsWebLink($use_sms_web_link)
    {
        $this->container['use_sms_web_link'] = $use_sms_web_link;

        return $this;
    }

    /**
     * Gets voice_source
     *
     * @return string
     */
    public function getVoiceSource()
    {
        return $this->container['voice_source'];
    }

    /**
     * Sets voice_source
     *
     * @param string $voice_source voice_source
     *
     * @return $this
     */
    public function setVoiceSource($voice_source)
    {
        $allowedValues = $this->getVoiceSourceAllowableValues();
        if (!is_null($voice_source) && !in_array($voice_source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'voice_source', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['voice_source'] = $voice_source;

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


