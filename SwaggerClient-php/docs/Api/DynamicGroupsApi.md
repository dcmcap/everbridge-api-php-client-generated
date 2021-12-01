# Swagger\Client\DynamicGroupsApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getContactFilterUsingGET1**](DynamicGroupsApi.md#getContactFilterUsingGET1) | **GET** /dynamicGroups/{organizationId}/{dynamicGroupId} | Get a dynamicGroup for an organization.
[**queryContactFiltersUsingGET1**](DynamicGroupsApi.md#queryContactFiltersUsingGET1) | **GET** /dynamicGroups/{organizationId} | Retrieve all dynamicGroups for an organization.


# **getContactFilterUsingGET1**
> \Swagger\Client\Model\ContactFilterWrapperInstanceResult getContactFilterUsingGET1($authorization, $organization_id, $dynamic_group_id)

Get a dynamicGroup for an organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DynamicGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization.
$dynamic_group_id = 789; // int | The ID of the dynamicGroup to return.

try {
    $result = $apiInstance->getContactFilterUsingGET1($authorization, $organization_id, $dynamic_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicGroupsApi->getContactFilterUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization. |
 **dynamic_group_id** | **int**| The ID of the dynamicGroup to return. |

### Return type

[**\Swagger\Client\Model\ContactFilterWrapperInstanceResult**](../Model/ContactFilterWrapperInstanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryContactFiltersUsingGET1**
> \Swagger\Client\Model\ContactFilterWrapperCollectionResult queryContactFiltersUsingGET1($authorization, $organization_id, $page_number)

Retrieve all dynamicGroups for an organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DynamicGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization.
$page_number = 1; // int | The page number of dynamicGroups to return.

try {
    $result = $apiInstance->queryContactFiltersUsingGET1($authorization, $organization_id, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DynamicGroupsApi->queryContactFiltersUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization. |
 **page_number** | **int**| The page number of dynamicGroups to return. | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\ContactFilterWrapperCollectionResult**](../Model/ContactFilterWrapperCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

