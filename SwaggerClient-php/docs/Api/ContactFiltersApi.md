# Swagger\Client\ContactFiltersApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addContactFilterUsingPOST**](ContactFiltersApi.md#addContactFilterUsingPOST) | **POST** /contactFilters/{organizationId} | Create a new contact filter within an organization
[**deleteContactFilterUsingDELETE**](ContactFiltersApi.md#deleteContactFilterUsingDELETE) | **DELETE** /contactFilters/{organizationId}/{contactFilterId} | Delete the specified contactFilter from an organization
[**getContactFilterUsingGET**](ContactFiltersApi.md#getContactFilterUsingGET) | **GET** /contactFilters/{organizationId}/{queryValue} | Retrieve the specified contactFilter within an organization
[**queryContactFiltersUsingGET**](ContactFiltersApi.md#queryContactFiltersUsingGET) | **GET** /contactFilters/{organizationId} | Retrieve all contact filters for an organization
[**updateContactFilterUsingPUT**](ContactFiltersApi.md#updateContactFilterUsingPUT) | **PUT** /contactFilters/{organizationId}/{contactFilterId} | Update a contact filter within an organization


# **addContactFilterUsingPOST**
> \Swagger\Client\Model\RestfulModificationResult addContactFilterUsingPOST($authorization, $organization_id, $contact_filter)

Create a new contact filter within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactFiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contactFilters
$contact_filter = new \Swagger\Client\Model\ContactFilterWrapper(); // \Swagger\Client\Model\ContactFilterWrapper | JSON object describing the new contactFilter

try {
    $result = $apiInstance->addContactFilterUsingPOST($authorization, $organization_id, $contact_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFiltersApi->addContactFilterUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contactFilters |
 **contact_filter** | [**\Swagger\Client\Model\ContactFilterWrapper**](../Model/ContactFilterWrapper.md)| JSON object describing the new contactFilter |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContactFilterUsingDELETE**
> \Swagger\Client\Model\RestfulModificationResult deleteContactFilterUsingDELETE($authorization, $organization_id, $contact_filter_id)

Delete the specified contactFilter from an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactFiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contactFilters
$contact_filter_id = 789; // int | The ID of the contactFilter to delete

try {
    $result = $apiInstance->deleteContactFilterUsingDELETE($authorization, $organization_id, $contact_filter_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFiltersApi->deleteContactFilterUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contactFilters |
 **contact_filter_id** | **int**| The ID of the contactFilter to delete |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactFilterUsingGET**
> \Swagger\Client\Model\ContactFilterWrapperCollectionResult getContactFilterUsingGET($authorization, $organization_id, $query_value, $query_type)

Retrieve the specified contactFilter within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactFiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contactFilters
$query_value = "query_value_example"; // string | The ID or name of the contactFilter
$query_type = "id"; // string | Whether to search by contactFilter.id or contactFilter.name.

try {
    $result = $apiInstance->getContactFilterUsingGET($authorization, $organization_id, $query_value, $query_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFiltersApi->getContactFilterUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contactFilters |
 **query_value** | **string**| The ID or name of the contactFilter |
 **query_type** | **string**| Whether to search by contactFilter.id or contactFilter.name. | [optional] [default to id]

### Return type

[**\Swagger\Client\Model\ContactFilterWrapperCollectionResult**](../Model/ContactFilterWrapperCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryContactFiltersUsingGET**
> \Swagger\Client\Model\ContactFilterWrapperCollectionResult queryContactFiltersUsingGET($authorization, $organization_id, $page_number)

Retrieve all contact filters for an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactFiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contact filters
$page_number = 1; // int | The page number of contactFilters to return.

try {
    $result = $apiInstance->queryContactFiltersUsingGET($authorization, $organization_id, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFiltersApi->queryContactFiltersUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contact filters |
 **page_number** | **int**| The page number of contactFilters to return. | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\ContactFilterWrapperCollectionResult**](../Model/ContactFilterWrapperCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContactFilterUsingPUT**
> \Swagger\Client\Model\RestfulModificationResult updateContactFilterUsingPUT($authorization, $organization_id, $contact_filter_id, $filter)

Update a contact filter within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactFiltersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contactFilters
$contact_filter_id = 789; // int | The ID of the contactFilter to update
$filter = new \Swagger\Client\Model\ContactFilterWrapper(); // \Swagger\Client\Model\ContactFilterWrapper | JSON object describing the updated contactFilter

try {
    $result = $apiInstance->updateContactFilterUsingPUT($authorization, $organization_id, $contact_filter_id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactFiltersApi->updateContactFilterUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contactFilters |
 **contact_filter_id** | **int**| The ID of the contactFilter to update |
 **filter** | [**\Swagger\Client\Model\ContactFilterWrapper**](../Model/ContactFilterWrapper.md)| JSON object describing the updated contactFilter |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

