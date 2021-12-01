# Swagger\Client\ContactPathsApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getContactPathUsingGET**](ContactPathsApi.md#getContactPathUsingGET) | **GET** /contactPaths/{organizationId}/{contactPathId} | Retrieve the specified contactPath within an organization
[**queryContactPathsUsingGET**](ContactPathsApi.md#queryContactPathsUsingGET) | **GET** /contactPaths/{organizationId} | Retrieve all contact paths for an organization


# **getContactPathUsingGET**
> \Swagger\Client\Model\OrganizationPathWrapperInstanceResult getContactPathUsingGET($authorization, $organization_id, $contact_path_id)

Retrieve the specified contactPath within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactPathsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contactPaths
$contact_path_id = 789; // int | The ID of the contactPath to return

try {
    $result = $apiInstance->getContactPathUsingGET($authorization, $organization_id, $contact_path_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactPathsApi->getContactPathUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contactPaths |
 **contact_path_id** | **int**| The ID of the contactPath to return |

### Return type

[**\Swagger\Client\Model\OrganizationPathWrapperInstanceResult**](../Model/OrganizationPathWrapperInstanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryContactPathsUsingGET**
> \Swagger\Client\Model\OrganizationPathWrapperInstanceResult queryContactPathsUsingGET($authorization, $organization_id)

Retrieve all contact paths for an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactPathsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contact paths

try {
    $result = $apiInstance->queryContactPathsUsingGET($authorization, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactPathsApi->queryContactPathsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contact paths |

### Return type

[**\Swagger\Client\Model\OrganizationPathWrapperInstanceResult**](../Model/OrganizationPathWrapperInstanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

