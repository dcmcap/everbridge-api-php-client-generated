# Swagger\Client\ContactAttributesApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addContactAttributeUsingPOST**](ContactAttributesApi.md#addContactAttributeUsingPOST) | **POST** /contactAttributes/{organizationId} | Create a new contact attribute within an organization
[**deleteContactAttributeUsingDELETE**](ContactAttributesApi.md#deleteContactAttributeUsingDELETE) | **DELETE** /contactAttributes/{organizationId}/{contactAttributeId} | Delete the specified contact attribute from an organization
[**getContactAttributeUsingGET**](ContactAttributesApi.md#getContactAttributeUsingGET) | **GET** /contactAttributes/{organizationId}/{contactAttributeId} | Retrieve the specified contact attribute within an organization
[**getContactAttributesUsingGET**](ContactAttributesApi.md#getContactAttributesUsingGET) | **GET** /contactAttributes/{organizationId} | Retrieve all contact attributes in this organization
[**updateContactAttributeUsingPUT**](ContactAttributesApi.md#updateContactAttributeUsingPUT) | **PUT** /contactAttributes/{organizationId}/{contactAttributeId} | Update a contact attribute within an organization


# **addContactAttributeUsingPOST**
> \Swagger\Client\Model\RestfulModificationResult addContactAttributeUsingPOST($authorization, $organization_id, $contact_attribute)

Create a new contact attribute within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contact attribute
$contact_attribute = new \Swagger\Client\Model\OrganizationContactAttributeWrapper(); // \Swagger\Client\Model\OrganizationContactAttributeWrapper | JSON object describing the new contact attribute

try {
    $result = $apiInstance->addContactAttributeUsingPOST($authorization, $organization_id, $contact_attribute);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactAttributesApi->addContactAttributeUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contact attribute |
 **contact_attribute** | [**\Swagger\Client\Model\OrganizationContactAttributeWrapper**](../Model/OrganizationContactAttributeWrapper.md)| JSON object describing the new contact attribute |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContactAttributeUsingDELETE**
> \Swagger\Client\Model\RestfulModificationResult deleteContactAttributeUsingDELETE($authorization, $organization_id, $contact_attribute_id)

Delete the specified contact attribute from an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contact attribute
$contact_attribute_id = 789; // int | The ID of the contact attribute to delete

try {
    $result = $apiInstance->deleteContactAttributeUsingDELETE($authorization, $organization_id, $contact_attribute_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactAttributesApi->deleteContactAttributeUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contact attribute |
 **contact_attribute_id** | **int**| The ID of the contact attribute to delete |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactAttributeUsingGET**
> \Swagger\Client\Model\OrganizationContactAttributeWrapperInstanceResult getContactAttributeUsingGET($authorization, $organization_id, $contact_attribute_id)

Retrieve the specified contact attribute within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contact attribute
$contact_attribute_id = 789; // int | The ID of the contact attribute to return

try {
    $result = $apiInstance->getContactAttributeUsingGET($authorization, $organization_id, $contact_attribute_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactAttributesApi->getContactAttributeUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contact attribute |
 **contact_attribute_id** | **int**| The ID of the contact attribute to return |

### Return type

[**\Swagger\Client\Model\OrganizationContactAttributeWrapperInstanceResult**](../Model/OrganizationContactAttributeWrapperInstanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactAttributesUsingGET**
> \Swagger\Client\Model\OrganizationContactAttributeWrapperCollectionResult getContactAttributesUsingGET($authorization, $organization_id)

Retrieve all contact attributes in this organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contactAttributes

try {
    $result = $apiInstance->getContactAttributesUsingGET($authorization, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactAttributesApi->getContactAttributesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contactAttributes |

### Return type

[**\Swagger\Client\Model\OrganizationContactAttributeWrapperCollectionResult**](../Model/OrganizationContactAttributeWrapperCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContactAttributeUsingPUT**
> \Swagger\Client\Model\RestfulModificationResult updateContactAttributeUsingPUT($authorization, $organization_id, $contact_attribute_id, $contact_attribute)

Update a contact attribute within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contact attribute
$contact_attribute_id = 789; // int | The ID of the contact attribute to update
$contact_attribute = new \Swagger\Client\Model\OrganizationContactAttributeWrapper(); // \Swagger\Client\Model\OrganizationContactAttributeWrapper | JSON object describing the updated contact attribute

try {
    $result = $apiInstance->updateContactAttributeUsingPUT($authorization, $organization_id, $contact_attribute_id, $contact_attribute);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactAttributesApi->updateContactAttributeUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contact attribute |
 **contact_attribute_id** | **int**| The ID of the contact attribute to update |
 **contact_attribute** | [**\Swagger\Client\Model\OrganizationContactAttributeWrapper**](../Model/OrganizationContactAttributeWrapper.md)| JSON object describing the updated contact attribute |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

