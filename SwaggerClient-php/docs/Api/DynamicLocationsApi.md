# Swagger\Client\DynamicLocationsApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUploadBatchUsingGET**](DynamicLocationsApi.md#getUploadBatchUsingGET) | **GET** /dynamicLocations/{organizationId}/{uploadBatchId} | Retrieve the specified uploadBatch within an organization
[**uploadUsingPOST**](DynamicLocationsApi.md#uploadUsingPOST) | **POST** /dynamicLocations/{organizationId} | Upload a CSV for batch processing


# **getUploadBatchUsingGET**
> \Swagger\Client\Model\UploadBatchWrapperInstanceResult getUploadBatchUsingGET($authorization, $organization_id, $upload_batch_id)

Retrieve the specified uploadBatch within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DynamicLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the uploadBatchs
$upload_batch_id = 789; // int | The ID of the uploadBatch to return

try {
    $result = $apiInstance->getUploadBatchUsingGET($authorization, $organization_id, $upload_batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicLocationsApi->getUploadBatchUsingGET: ', $e->getMessage(), PHP_EOL;
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

# **uploadUsingPOST**
> \Swagger\Client\Model\RestfulModificationResult uploadUsingPOST($authorization, $organization_id, $file, $upload_batch_type)

Upload a CSV for batch processing

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DynamicLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contacts
$file = "/path/to/file.txt"; // \SplFileObject | Multipart file upload body
$upload_batch_type = "Update"; // string | Type of upload to perform.

try {
    $result = $apiInstance->uploadUsingPOST($authorization, $organization_id, $file, $upload_batch_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicLocationsApi->uploadUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contacts |
 **file** | **\SplFileObject**| Multipart file upload body |
 **upload_batch_type** | **string**| Type of upload to perform. | [optional] [default to Update]

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

