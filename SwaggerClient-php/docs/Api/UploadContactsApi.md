# Swagger\Client\UploadContactsApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**queryUploadContactsGroupsUsingGET**](UploadContactsApi.md#queryUploadContactsGroupsUsingGET) | **GET** /uploadContacts/{organizationId}/groups/{uploadBatchId} | Retrieve all groups upload contacts for an organization
[**queryUploadContactsUsingGET**](UploadContactsApi.md#queryUploadContactsUsingGET) | **GET** /uploadContacts/{organizationId}/{uploadBatchId} | Retrieve all upload contacts for an organization


# **queryUploadContactsGroupsUsingGET**
> \Swagger\Client\Model\UploadContactWrapperCollectionResult queryUploadContactsGroupsUsingGET($authorization, $organization_id, $upload_batch_id, $upload_record_status, $column_name, $order_direction, $page_number)

Retrieve all groups upload contacts for an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UploadContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the uploads
$upload_batch_id = 789; // int | The ID of the uploadBatch
$upload_record_status = "LOADED_SUCCESS"; // string | Whether to search by LOADED_SUCCESS or LOADED_WITH_ERROR or NOT_LOADED.
$column_name = "firstName"; // string | The column name to order
$order_direction = "ASC"; // string | Whether to order by  ASC or DESC
$page_number = 1; // int | The page number of uploadContacts to return.

try {
    $result = $apiInstance->queryUploadContactsGroupsUsingGET($authorization, $organization_id, $upload_batch_id, $upload_record_status, $column_name, $order_direction, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadContactsApi->queryUploadContactsGroupsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the uploads |
 **upload_batch_id** | **int**| The ID of the uploadBatch |
 **upload_record_status** | **string**| Whether to search by LOADED_SUCCESS or LOADED_WITH_ERROR or NOT_LOADED. | [optional] [default to LOADED_SUCCESS]
 **column_name** | **string**| The column name to order | [optional] [default to firstName]
 **order_direction** | **string**| Whether to order by  ASC or DESC | [optional] [default to ASC]
 **page_number** | **int**| The page number of uploadContacts to return. | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\UploadContactWrapperCollectionResult**](../Model/UploadContactWrapperCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryUploadContactsUsingGET**
> \Swagger\Client\Model\UploadContactWrapperCollectionResult queryUploadContactsUsingGET($authorization, $organization_id, $upload_batch_id, $upload_record_status, $column_name, $order_direction, $page_number)

Retrieve all upload contacts for an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UploadContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the uploads
$upload_batch_id = 789; // int | The ID of the uploadBatch
$upload_record_status = "LOADED_SUCCESS"; // string | Whether to search by LOADED_SUCCESS or LOADED_WITH_ERROR or NOT_LOADED.
$column_name = "firstName"; // string | The column name to order
$order_direction = "ASC"; // string | Whether to order by  ASC or DESC
$page_number = 1; // int | The page number of uploadContacts to return.

try {
    $result = $apiInstance->queryUploadContactsUsingGET($authorization, $organization_id, $upload_batch_id, $upload_record_status, $column_name, $order_direction, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadContactsApi->queryUploadContactsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the uploads |
 **upload_batch_id** | **int**| The ID of the uploadBatch |
 **upload_record_status** | **string**| Whether to search by LOADED_SUCCESS or LOADED_WITH_ERROR or NOT_LOADED. | [optional] [default to LOADED_SUCCESS]
 **column_name** | **string**| The column name to order | [optional] [default to firstName]
 **order_direction** | **string**| Whether to order by  ASC or DESC | [optional] [default to ASC]
 **page_number** | **int**| The page number of uploadContacts to return. | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\UploadContactWrapperCollectionResult**](../Model/UploadContactWrapperCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

