# Swagger\Client\UploadDynamicLocationsApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**queryUploadDynamicLocationsUsingGET1**](UploadDynamicLocationsApi.md#queryUploadDynamicLocationsUsingGET1) | **GET** /uploadDynamicLocations/{organizationId}/{uploadBatchId} | Retrieve all upload dynamicLocations for an uploadBatch


# **queryUploadDynamicLocationsUsingGET1**
> \Swagger\Client\Model\UploadDynamicLocationWrapperCollectionResult queryUploadDynamicLocationsUsingGET1($authorization, $organization_id, $upload_batch_id, $upload_record_status, $page_number)

Retrieve all upload dynamicLocations for an uploadBatch

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UploadDynamicLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the uploads
$upload_batch_id = 789; // int | The ID of the uploadBatch
$upload_record_status = "Success"; // string | Whether to search by Success or WithError or Failed.
$page_number = 1; // int | The page number of uploadDynamicLocations to return.

try {
    $result = $apiInstance->queryUploadDynamicLocationsUsingGET1($authorization, $organization_id, $upload_batch_id, $upload_record_status, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadDynamicLocationsApi->queryUploadDynamicLocationsUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the uploads |
 **upload_batch_id** | **int**| The ID of the uploadBatch |
 **upload_record_status** | **string**| Whether to search by Success or WithError or Failed. | [optional] [default to Success]
 **page_number** | **int**| The page number of uploadDynamicLocations to return. | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\UploadDynamicLocationWrapperCollectionResult**](../Model/UploadDynamicLocationWrapperCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

