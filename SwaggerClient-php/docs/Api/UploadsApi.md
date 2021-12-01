# Swagger\Client\UploadsApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGroupsUploadBatchUsingGET**](UploadsApi.md#getGroupsUploadBatchUsingGET) | **GET** /uploads/{organizationId}/groups/{uploadBatchId} | Retrieve the specified groups uploadBatch within an organization
[**getUploadBatchUsingGET1**](UploadsApi.md#getUploadBatchUsingGET1) | **GET** /uploads/{organizationId}/{uploadBatchId} | Retrieve the specified uploadBatch within an organization
[**queryGroupsUploadBatchsUsingGET**](UploadsApi.md#queryGroupsUploadBatchsUsingGET) | **GET** /uploads/{organizationId}/groups | Retrieve all groups upload batches for an organization
[**queryUploadBatchsUsingGET**](UploadsApi.md#queryUploadBatchsUsingGET) | **GET** /uploads/{organizationId} | Retrieve all upload batches for an organization
[**uploadGroupsCsvUsingPOST**](UploadsApi.md#uploadGroupsCsvUsingPOST) | **POST** /uploads/{organizationId}/groups | Upload a CSV for batch processing by group leader
[**uploadUsingPOST2**](UploadsApi.md#uploadUsingPOST2) | **POST** /uploads/{organizationId} | Upload a CSV for batch processing


# **getGroupsUploadBatchUsingGET**
> \Swagger\Client\Model\UploadBatchWrapperInstanceResult getGroupsUploadBatchUsingGET($authorization, $organization_id, $upload_batch_id)

Retrieve the specified groups uploadBatch within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UploadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the uploadBatchs
$upload_batch_id = 789; // int | The ID of the uploadBatch to return

try {
    $result = $apiInstance->getGroupsUploadBatchUsingGET($authorization, $organization_id, $upload_batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadsApi->getGroupsUploadBatchUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the uploadBatchs |
 **upload_batch_id** | **int**| The ID of the uploadBatch to return |

### Return type

[**\Swagger\Client\Model\UploadBatchWrapperInstanceResult**](../Model/UploadBatchWrapperInstanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUploadBatchUsingGET1**
> \Swagger\Client\Model\UploadBatchWrapperInstanceResult getUploadBatchUsingGET1($authorization, $organization_id, $upload_batch_id)

Retrieve the specified uploadBatch within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UploadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the uploadBatchs
$upload_batch_id = 789; // int | The ID of the uploadBatch to return

try {
    $result = $apiInstance->getUploadBatchUsingGET1($authorization, $organization_id, $upload_batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadsApi->getUploadBatchUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the uploadBatchs |
 **upload_batch_id** | **int**| The ID of the uploadBatch to return |

### Return type

[**\Swagger\Client\Model\UploadBatchWrapperInstanceResult**](../Model/UploadBatchWrapperInstanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryGroupsUploadBatchsUsingGET**
> \Swagger\Client\Model\UploadBatchWrapperCollectionResult queryGroupsUploadBatchsUsingGET($authorization, $organization_id, $page_number)

Retrieve all groups upload batches for an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UploadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the uploads
$page_number = 1; // int | The page number of uploads to return.

try {
    $result = $apiInstance->queryGroupsUploadBatchsUsingGET($authorization, $organization_id, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadsApi->queryGroupsUploadBatchsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the uploads |
 **page_number** | **int**| The page number of uploads to return. | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\UploadBatchWrapperCollectionResult**](../Model/UploadBatchWrapperCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryUploadBatchsUsingGET**
> \Swagger\Client\Model\UploadBatchWrapperCollectionResult queryUploadBatchsUsingGET($authorization, $organization_id, $page_number)

Retrieve all upload batches for an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UploadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the uploads
$page_number = 1; // int | The page number of uploads to return.

try {
    $result = $apiInstance->queryUploadBatchsUsingGET($authorization, $organization_id, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadsApi->queryUploadBatchsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the uploads |
 **page_number** | **int**| The page number of uploads to return. | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\UploadBatchWrapperCollectionResult**](../Model/UploadBatchWrapperCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadGroupsCsvUsingPOST**
> \Swagger\Client\Model\RestfulModificationResult uploadGroupsCsvUsingPOST($authorization, $organization_id, $file)

Upload a CSV for batch processing by group leader

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UploadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contacts
$file = "/path/to/file.txt"; // \SplFileObject | Multipart file upload body

try {
    $result = $apiInstance->uploadGroupsCsvUsingPOST($authorization, $organization_id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadsApi->uploadGroupsCsvUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contacts |
 **file** | **\SplFileObject**| Multipart file upload body |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadUsingPOST2**
> \Swagger\Client\Model\RestfulModificationResult uploadUsingPOST2($authorization, $organization_id, $file, $upload_method)

Upload a CSV for batch processing

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UploadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contacts
$file = "/path/to/file.txt"; // \SplFileObject | Multipart file upload body
$upload_method = "WITH_RECORD_TYPE"; // string | Type of upload to perform.

try {
    $result = $apiInstance->uploadUsingPOST2($authorization, $organization_id, $file, $upload_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadsApi->uploadUsingPOST2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contacts |
 **file** | **\SplFileObject**| Multipart file upload body |
 **upload_method** | **string**| Type of upload to perform. | [optional] [default to WITH_RECORD_TYPE]

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

