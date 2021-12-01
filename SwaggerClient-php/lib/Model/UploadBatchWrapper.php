<?php
/**
 * UploadBatchWrapper
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
 * UploadBatchWrapper Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UploadBatchWrapper implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UploadBatchWrapper';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_id' => 'int',
        'created_date' => '\DateTime',
        'created_id' => 'int',
        'created_name' => 'string',
        'created_proxy_name' => 'string',
        'critical_num' => 'int',
        'file_name' => 'string',
        'file_size' => 'int',
        'geo_fail_num' => 'int',
        'geo_success_num' => 'int',
        'headers' => '\Swagger\Client\Model\HeaderColumnWrapper[]',
        'id' => 'int',
        'last_modified_date' => '\DateTime',
        'last_modified_id' => 'int',
        'last_modified_name' => 'string',
        'last_modified_proxy_name' => 'string',
        'organization_id' => 'int',
        'resource_bundle_id' => 'int',
        'source' => 'string',
        'status' => 'string',
        'success_num' => 'int',
        'tmp_path' => 'string',
        'upload_errors' => '\Swagger\Client\Model\UploadErrorWrapper[]',
        'upload_method' => 'string',
        'upload_record_types' => '\Swagger\Client\Model\UploadRecordTypeWrapper[]',
        'upload_status' => 'string',
        'with_error_num' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_id' => 'int64',
        'created_date' => 'date-time',
        'created_id' => 'int64',
        'created_name' => null,
        'created_proxy_name' => null,
        'critical_num' => 'int32',
        'file_name' => null,
        'file_size' => 'int32',
        'geo_fail_num' => 'int32',
        'geo_success_num' => 'int32',
        'headers' => null,
        'id' => 'int64',
        'last_modified_date' => 'date-time',
        'last_modified_id' => 'int64',
        'last_modified_name' => null,
        'last_modified_proxy_name' => null,
        'organization_id' => 'int64',
        'resource_bundle_id' => 'int64',
        'source' => null,
        'status' => null,
        'success_num' => 'int32',
        'tmp_path' => null,
        'upload_errors' => null,
        'upload_method' => null,
        'upload_record_types' => null,
        'upload_status' => null,
        'with_error_num' => 'int32'
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
        'created_date' => 'createdDate',
        'created_id' => 'createdId',
        'created_name' => 'createdName',
        'created_proxy_name' => 'createdProxyName',
        'critical_num' => 'criticalNum',
        'file_name' => 'fileName',
        'file_size' => 'fileSize',
        'geo_fail_num' => 'geoFailNum',
        'geo_success_num' => 'geoSuccessNum',
        'headers' => 'headers',
        'id' => 'id',
        'last_modified_date' => 'lastModifiedDate',
        'last_modified_id' => 'lastModifiedId',
        'last_modified_name' => 'lastModifiedName',
        'last_modified_proxy_name' => 'lastModifiedProxyName',
        'organization_id' => 'organizationId',
        'resource_bundle_id' => 'resourceBundleId',
        'source' => 'source',
        'status' => 'status',
        'success_num' => 'successNum',
        'tmp_path' => 'tmpPath',
        'upload_errors' => 'uploadErrors',
        'upload_method' => 'uploadMethod',
        'upload_record_types' => 'uploadRecordTypes',
        'upload_status' => 'uploadStatus',
        'with_error_num' => 'withErrorNum'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'created_date' => 'setCreatedDate',
        'created_id' => 'setCreatedId',
        'created_name' => 'setCreatedName',
        'created_proxy_name' => 'setCreatedProxyName',
        'critical_num' => 'setCriticalNum',
        'file_name' => 'setFileName',
        'file_size' => 'setFileSize',
        'geo_fail_num' => 'setGeoFailNum',
        'geo_success_num' => 'setGeoSuccessNum',
        'headers' => 'setHeaders',
        'id' => 'setId',
        'last_modified_date' => 'setLastModifiedDate',
        'last_modified_id' => 'setLastModifiedId',
        'last_modified_name' => 'setLastModifiedName',
        'last_modified_proxy_name' => 'setLastModifiedProxyName',
        'organization_id' => 'setOrganizationId',
        'resource_bundle_id' => 'setResourceBundleId',
        'source' => 'setSource',
        'status' => 'setStatus',
        'success_num' => 'setSuccessNum',
        'tmp_path' => 'setTmpPath',
        'upload_errors' => 'setUploadErrors',
        'upload_method' => 'setUploadMethod',
        'upload_record_types' => 'setUploadRecordTypes',
        'upload_status' => 'setUploadStatus',
        'with_error_num' => 'setWithErrorNum'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'created_date' => 'getCreatedDate',
        'created_id' => 'getCreatedId',
        'created_name' => 'getCreatedName',
        'created_proxy_name' => 'getCreatedProxyName',
        'critical_num' => 'getCriticalNum',
        'file_name' => 'getFileName',
        'file_size' => 'getFileSize',
        'geo_fail_num' => 'getGeoFailNum',
        'geo_success_num' => 'getGeoSuccessNum',
        'headers' => 'getHeaders',
        'id' => 'getId',
        'last_modified_date' => 'getLastModifiedDate',
        'last_modified_id' => 'getLastModifiedId',
        'last_modified_name' => 'getLastModifiedName',
        'last_modified_proxy_name' => 'getLastModifiedProxyName',
        'organization_id' => 'getOrganizationId',
        'resource_bundle_id' => 'getResourceBundleId',
        'source' => 'getSource',
        'status' => 'getStatus',
        'success_num' => 'getSuccessNum',
        'tmp_path' => 'getTmpPath',
        'upload_errors' => 'getUploadErrors',
        'upload_method' => 'getUploadMethod',
        'upload_record_types' => 'getUploadRecordTypes',
        'upload_status' => 'getUploadStatus',
        'with_error_num' => 'getWithErrorNum'
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

    const SOURCE_SFTP = 'SFTP';
    const SOURCE_WEB = 'WEB';
    const SOURCE_API = 'API';
    const STATUS_A = 'A';
    const STATUS_D = 'D';
    const UPLOAD_METHOD_PARTIAL = 'PARTIAL';
    const UPLOAD_METHOD_DELETE = 'DELETE';
    const UPLOAD_METHOD_WITH_RECORD_TYPE = 'WITH_RECORD_TYPE';
    const UPLOAD_METHOD_GIS_ADD = 'GIS_ADD';
    const UPLOAD_METHOD_USER_ADD = 'USER_ADD';
    const UPLOAD_METHOD_GROUP = 'GROUP';
    const UPLOAD_METHOD_RESTORE = 'RESTORE';
    const UPLOAD_METHOD_DYN_LOC = 'DYN_LOC';
    const UPLOAD_METHOD_ASSET_UPDATE = 'ASSET_UPDATE';
    const UPLOAD_METHOD_ASSET_DEL = 'ASSET_DEL';
    const UPLOAD_METHOD_VCC_ASSET_UPDATE = 'VCC_ASSET_UPDATE';
    const UPLOAD_METHOD_CEM_ASSET_UPDATE = 'CEM_ASSET_UPDATE';
    const UPLOAD_METHOD_CEM_ASSET_REPLACE = 'CEM_ASSET_REPLACE';
    const UPLOAD_METHOD_CEM_ASSET_DELETE = 'CEM_ASSET_DELETE';
    const UPLOAD_STATUS_FAILED = 'FAILED';
    const UPLOAD_STATUS_CANCELLED = 'CANCELLED';
    const UPLOAD_STATUS_UPLOADED = 'UPLOADED';
    const UPLOAD_STATUS_QUEUING = 'QUEUING';
    const UPLOAD_STATUS_PROCESSING = 'PROCESSING';
    const UPLOAD_STATUS_GEOCODING = 'GEOCODING';
    const UPLOAD_STATUS_DONE = 'DONE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceAllowableValues()
    {
        return [
            self::SOURCE_SFTP,
            self::SOURCE_WEB,
            self::SOURCE_API,
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
    public function getUploadMethodAllowableValues()
    {
        return [
            self::UPLOAD_METHOD_PARTIAL,
            self::UPLOAD_METHOD_DELETE,
            self::UPLOAD_METHOD_WITH_RECORD_TYPE,
            self::UPLOAD_METHOD_GIS_ADD,
            self::UPLOAD_METHOD_USER_ADD,
            self::UPLOAD_METHOD_GROUP,
            self::UPLOAD_METHOD_RESTORE,
            self::UPLOAD_METHOD_DYN_LOC,
            self::UPLOAD_METHOD_ASSET_UPDATE,
            self::UPLOAD_METHOD_ASSET_DEL,
            self::UPLOAD_METHOD_VCC_ASSET_UPDATE,
            self::UPLOAD_METHOD_CEM_ASSET_UPDATE,
            self::UPLOAD_METHOD_CEM_ASSET_REPLACE,
            self::UPLOAD_METHOD_CEM_ASSET_DELETE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUploadStatusAllowableValues()
    {
        return [
            self::UPLOAD_STATUS_FAILED,
            self::UPLOAD_STATUS_CANCELLED,
            self::UPLOAD_STATUS_UPLOADED,
            self::UPLOAD_STATUS_QUEUING,
            self::UPLOAD_STATUS_PROCESSING,
            self::UPLOAD_STATUS_GEOCODING,
            self::UPLOAD_STATUS_DONE,
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
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['created_id'] = isset($data['created_id']) ? $data['created_id'] : null;
        $this->container['created_name'] = isset($data['created_name']) ? $data['created_name'] : null;
        $this->container['created_proxy_name'] = isset($data['created_proxy_name']) ? $data['created_proxy_name'] : null;
        $this->container['critical_num'] = isset($data['critical_num']) ? $data['critical_num'] : null;
        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        $this->container['file_size'] = isset($data['file_size']) ? $data['file_size'] : null;
        $this->container['geo_fail_num'] = isset($data['geo_fail_num']) ? $data['geo_fail_num'] : null;
        $this->container['geo_success_num'] = isset($data['geo_success_num']) ? $data['geo_success_num'] : null;
        $this->container['headers'] = isset($data['headers']) ? $data['headers'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['last_modified_date'] = isset($data['last_modified_date']) ? $data['last_modified_date'] : null;
        $this->container['last_modified_id'] = isset($data['last_modified_id']) ? $data['last_modified_id'] : null;
        $this->container['last_modified_name'] = isset($data['last_modified_name']) ? $data['last_modified_name'] : null;
        $this->container['last_modified_proxy_name'] = isset($data['last_modified_proxy_name']) ? $data['last_modified_proxy_name'] : null;
        $this->container['organization_id'] = isset($data['organization_id']) ? $data['organization_id'] : null;
        $this->container['resource_bundle_id'] = isset($data['resource_bundle_id']) ? $data['resource_bundle_id'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['success_num'] = isset($data['success_num']) ? $data['success_num'] : null;
        $this->container['tmp_path'] = isset($data['tmp_path']) ? $data['tmp_path'] : null;
        $this->container['upload_errors'] = isset($data['upload_errors']) ? $data['upload_errors'] : null;
        $this->container['upload_method'] = isset($data['upload_method']) ? $data['upload_method'] : null;
        $this->container['upload_record_types'] = isset($data['upload_record_types']) ? $data['upload_record_types'] : null;
        $this->container['upload_status'] = isset($data['upload_status']) ? $data['upload_status'] : null;
        $this->container['with_error_num'] = isset($data['with_error_num']) ? $data['with_error_num'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($this->container['source']) && !in_array($this->container['source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'source', must be one of '%s'",
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

        $allowedValues = $this->getUploadMethodAllowableValues();
        if (!is_null($this->container['upload_method']) && !in_array($this->container['upload_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'upload_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getUploadStatusAllowableValues();
        if (!is_null($this->container['upload_status']) && !in_array($this->container['upload_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'upload_status', must be one of '%s'",
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
     * Gets critical_num
     *
     * @return int
     */
    public function getCriticalNum()
    {
        return $this->container['critical_num'];
    }

    /**
     * Sets critical_num
     *
     * @param int $critical_num critical_num
     *
     * @return $this
     */
    public function setCriticalNum($critical_num)
    {
        $this->container['critical_num'] = $critical_num;

        return $this;
    }

    /**
     * Gets file_name
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     *
     * @param string $file_name file_name
     *
     * @return $this
     */
    public function setFileName($file_name)
    {
        $this->container['file_name'] = $file_name;

        return $this;
    }

    /**
     * Gets file_size
     *
     * @return int
     */
    public function getFileSize()
    {
        return $this->container['file_size'];
    }

    /**
     * Sets file_size
     *
     * @param int $file_size file_size
     *
     * @return $this
     */
    public function setFileSize($file_size)
    {
        $this->container['file_size'] = $file_size;

        return $this;
    }

    /**
     * Gets geo_fail_num
     *
     * @return int
     */
    public function getGeoFailNum()
    {
        return $this->container['geo_fail_num'];
    }

    /**
     * Sets geo_fail_num
     *
     * @param int $geo_fail_num geo_fail_num
     *
     * @return $this
     */
    public function setGeoFailNum($geo_fail_num)
    {
        $this->container['geo_fail_num'] = $geo_fail_num;

        return $this;
    }

    /**
     * Gets geo_success_num
     *
     * @return int
     */
    public function getGeoSuccessNum()
    {
        return $this->container['geo_success_num'];
    }

    /**
     * Sets geo_success_num
     *
     * @param int $geo_success_num geo_success_num
     *
     * @return $this
     */
    public function setGeoSuccessNum($geo_success_num)
    {
        $this->container['geo_success_num'] = $geo_success_num;

        return $this;
    }

    /**
     * Gets headers
     *
     * @return \Swagger\Client\Model\HeaderColumnWrapper[]
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     *
     * @param \Swagger\Client\Model\HeaderColumnWrapper[] $headers headers
     *
     * @return $this
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

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
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($source) && !in_array($source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'source', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['source'] = $source;

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
     * Gets success_num
     *
     * @return int
     */
    public function getSuccessNum()
    {
        return $this->container['success_num'];
    }

    /**
     * Sets success_num
     *
     * @param int $success_num success_num
     *
     * @return $this
     */
    public function setSuccessNum($success_num)
    {
        $this->container['success_num'] = $success_num;

        return $this;
    }

    /**
     * Gets tmp_path
     *
     * @return string
     */
    public function getTmpPath()
    {
        return $this->container['tmp_path'];
    }

    /**
     * Sets tmp_path
     *
     * @param string $tmp_path tmp_path
     *
     * @return $this
     */
    public function setTmpPath($tmp_path)
    {
        $this->container['tmp_path'] = $tmp_path;

        return $this;
    }

    /**
     * Gets upload_errors
     *
     * @return \Swagger\Client\Model\UploadErrorWrapper[]
     */
    public function getUploadErrors()
    {
        return $this->container['upload_errors'];
    }

    /**
     * Sets upload_errors
     *
     * @param \Swagger\Client\Model\UploadErrorWrapper[] $upload_errors upload_errors
     *
     * @return $this
     */
    public function setUploadErrors($upload_errors)
    {
        $this->container['upload_errors'] = $upload_errors;

        return $this;
    }

    /**
     * Gets upload_method
     *
     * @return string
     */
    public function getUploadMethod()
    {
        return $this->container['upload_method'];
    }

    /**
     * Sets upload_method
     *
     * @param string $upload_method upload_method
     *
     * @return $this
     */
    public function setUploadMethod($upload_method)
    {
        $allowedValues = $this->getUploadMethodAllowableValues();
        if (!is_null($upload_method) && !in_array($upload_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'upload_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['upload_method'] = $upload_method;

        return $this;
    }

    /**
     * Gets upload_record_types
     *
     * @return \Swagger\Client\Model\UploadRecordTypeWrapper[]
     */
    public function getUploadRecordTypes()
    {
        return $this->container['upload_record_types'];
    }

    /**
     * Sets upload_record_types
     *
     * @param \Swagger\Client\Model\UploadRecordTypeWrapper[] $upload_record_types upload_record_types
     *
     * @return $this
     */
    public function setUploadRecordTypes($upload_record_types)
    {
        $this->container['upload_record_types'] = $upload_record_types;

        return $this;
    }

    /**
     * Gets upload_status
     *
     * @return string
     */
    public function getUploadStatus()
    {
        return $this->container['upload_status'];
    }

    /**
     * Sets upload_status
     *
     * @param string $upload_status upload_status
     *
     * @return $this
     */
    public function setUploadStatus($upload_status)
    {
        $allowedValues = $this->getUploadStatusAllowableValues();
        if (!is_null($upload_status) && !in_array($upload_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'upload_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['upload_status'] = $upload_status;

        return $this;
    }

    /**
     * Gets with_error_num
     *
     * @return int
     */
    public function getWithErrorNum()
    {
        return $this->container['with_error_num'];
    }

    /**
     * Sets with_error_num
     *
     * @param int $with_error_num with_error_num
     *
     * @return $this
     */
    public function setWithErrorNum($with_error_num)
    {
        $this->container['with_error_num'] = $with_error_num;

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

