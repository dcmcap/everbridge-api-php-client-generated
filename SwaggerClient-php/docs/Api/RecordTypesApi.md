# Swagger\Client\RecordTypesApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addContactRecordTypeUsingPOST**](RecordTypesApi.md#addContactRecordTypeUsingPOST) | **POST** /recordTypes/{organizationId} | Create a new contactRecordType within an organization
[**deleteContactRecordTypeUsingDELETE**](RecordTypesApi.md#deleteContactRecordTypeUsingDELETE) | **DELETE** /recordTypes/{organizationId}/{recordTypeId} | Delete the specified contactRecordType from an organization
[**getContactRecordTypeUsingGET**](RecordTypesApi.md#getContactRecordTypeUsingGET) | **GET** /recordTypes/{organizationId}/{recordTypeId} | Retrieve the specified contactRecordType within an organization
[**queryContactRecordTypesUsingGET**](RecordTypesApi.md#queryContactRecordTypesUsingGET) | **GET** /recordTypes/{organizationId} | Retrieve all contact contactRecordTypes for an organization
[**updateContactRecordTypeUsingPUT**](RecordTypesApi.md#updateContactRecordTypeUsingPUT) | **PUT** /recordTypes/{organizationId}/{recordTypeId} | Update a contactRecordType within an organization


# **addContactRecordTypeUsingPOST**
> \Swagger\Client\Model\RestfulModificationResult addContactRecordTypeUsingPOST($authorization, $organization_id, $record_type)

Create a new contactRecordType within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RecordTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contactRecordTypes
$record_type = new \Swagger\Client\Model\ContactRecordTypeWrapper(); // \Swagger\Client\Model\ContactRecordTypeWrapper | JSON object describing the new contactRecordType

try {
    $result = $apiInstance->addContactRecordTypeUsingPOST($authorization, $organization_id, $record_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordTypesApi->addContactRecordTypeUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contactRecordTypes |
 **record_type** | [**\Swagger\Client\Model\ContactRecordTypeWrapper**](../Model/ContactRecordTypeWrapper.md)| JSON object describing the new contactRecordType |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContactRecordTypeUsingDELETE**
> \Swagger\Client\Model\RestfulModificationResult deleteContactRecordTypeUsingDELETE($authorization, $organization_id, $record_type_id)

Delete the specified contactRecordType from an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RecordTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contactRecordTypes
$record_type_id = 789; // int | The ID of the contactRecordType to delete

try {
    $result = $apiInstance->deleteContactRecordTypeUsingDELETE($authorization, $organization_id, $record_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordTypesApi->deleteContactRecordTypeUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contactRecordTypes |
 **record_type_id** | **int**| The ID of the contactRecordType to delete |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactRecordTypeUsingGET**
> \Swagger\Client\Model\RestfulInstanceResult getContactRecordTypeUsingGET($authorization, $organization_id, $record_type_id)

Retrieve the specified contactRecordType within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RecordTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contactRecordTypes
$record_type_id = 789; // int | The ID of the contactRecordType to return

try {
    $result = $apiInstance->getContactRecordTypeUsingGET($authorization, $organization_id, $record_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordTypesApi->getContactRecordTypeUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contactRecordTypes |
 **record_type_id** | **int**| The ID of the contactRecordType to return |

### Return type

[**\Swagger\Client\Model\RestfulInstanceResult**](../Model/RestfulInstanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryContactRecordTypesUsingGET**
> \Swagger\Client\Model\RestfulCollectionResult queryContactRecordTypesUsingGET($authorization, $organization_id)

Retrieve all contact contactRecordTypes for an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RecordTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contact record types

try {
    $result = $apiInstance->queryContactRecordTypesUsingGET($authorization, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordTypesApi->queryContactRecordTypesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contact record types |

### Return type

[**\Swagger\Client\Model\RestfulCollectionResult**](../Model/RestfulCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContactRecordTypeUsingPUT**
> \Swagger\Client\Model\RestfulModificationResult updateContactRecordTypeUsingPUT($authorization, $organization_id, $record_type_id, $record_type)

Update a contactRecordType within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RecordTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contactRecordTypes
$record_type_id = 789; // int | The ID of the contactRecordType to update
$record_type = new \Swagger\Client\Model\ContactRecordTypeWrapper(); // \Swagger\Client\Model\ContactRecordTypeWrapper | JSON object describing the updated contactRecordType

try {
    $result = $apiInstance->updateContactRecordTypeUsingPUT($authorization, $organization_id, $record_type_id, $record_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordTypesApi->updateContactRecordTypeUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contactRecordTypes |
 **record_type_id** | **int**| The ID of the contactRecordType to update |
 **record_type** | [**\Swagger\Client\Model\ContactRecordTypeWrapper**](../Model/ContactRecordTypeWrapper.md)| JSON object describing the updated contactRecordType |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

