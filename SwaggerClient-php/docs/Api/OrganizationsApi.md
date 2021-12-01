# Swagger\Client\OrganizationsApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**queryContactFiltersUsingGET2**](OrganizationsApi.md#queryContactFiltersUsingGET2) | **GET** /organizations/{organizationId} | Retrieve a specific organization
[**queryOrganizationsUsingGET**](OrganizationsApi.md#queryOrganizationsUsingGET) | **GET** /organizations | Retrieve all organizations accessible by this user


# **queryContactFiltersUsingGET2**
> \Swagger\Client\Model\OrganizationPathWrapperInstanceResult queryContactFiltersUsingGET2($authorization, $organization_id)

Retrieve a specific organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization

try {
    $result = $apiInstance->queryContactFiltersUsingGET2($authorization, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->queryContactFiltersUsingGET2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization |

### Return type

[**\Swagger\Client\Model\OrganizationPathWrapperInstanceResult**](../Model/OrganizationPathWrapperInstanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryOrganizationsUsingGET**
> \Swagger\Client\Model\OrganizationWrapperCollectionResult queryOrganizationsUsingGET($authorization)

Retrieve all organizations accessible by this user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header

try {
    $result = $apiInstance->queryOrganizationsUsingGET($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->queryOrganizationsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |

### Return type

[**\Swagger\Client\Model\OrganizationWrapperCollectionResult**](../Model/OrganizationWrapperCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

