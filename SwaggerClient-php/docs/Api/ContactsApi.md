# Swagger\Client\ContactsApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addContactUsingPOST**](ContactsApi.md#addContactUsingPOST) | **POST** /contacts/{organizationId} | Create a new contact within an organization
[**addContactsUsingPOST**](ContactsApi.md#addContactsUsingPOST) | **POST** /contacts/{organizationId}/batch | Create contacts within an organization
[**deleteContactUsingDELETE**](ContactsApi.md#deleteContactUsingDELETE) | **DELETE** /contacts/{organizationId}/{id} | Delete the specified contact from an organization
[**deleteContactsUsingDELETE**](ContactsApi.md#deleteContactsUsingDELETE) | **DELETE** /contacts/{organizationId}/batch | Delete the specified contacts from an organization
[**getContactUsingGET**](ContactsApi.md#getContactUsingGET) | **GET** /contacts/{organizationId}/{id} | Retrieve the specified contact within an organization
[**getContactsInGroupUsingGET**](ContactsApi.md#getContactsInGroupUsingGET) | **GET** /contacts/groups/{organizationId} | Retrieve all contacts within a group
[**queryContactsByPostUsingPOST**](ContactsApi.md#queryContactsByPostUsingPOST) | **POST** /contacts/{organizationId}/query | Retrieve all contacts for an organization
[**queryContactsUsingGET**](ContactsApi.md#queryContactsUsingGET) | **GET** /contacts/{organizationId} | Retrieve all contacts for an organization
[**updateContactUsingPUT**](ContactsApi.md#updateContactUsingPUT) | **PUT** /contacts/{organizationId}/{id} | Update a contact within an organization
[**updateContactsUsingPUT**](ContactsApi.md#updateContactsUsingPUT) | **PUT** /contacts/{organizationId}/batch | Update contacts within an organization


# **addContactUsingPOST**
> \Swagger\Client\Model\RestfulModificationResult addContactUsingPOST($authorization, $organization_id, $contact)

Create a new contact within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contacts
$contact = new \Swagger\Client\Model\ContactWrapper(); // \Swagger\Client\Model\ContactWrapper | JSON object describing the new contact

try {
    $result = $apiInstance->addContactUsingPOST($authorization, $organization_id, $contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->addContactUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contacts |
 **contact** | [**\Swagger\Client\Model\ContactWrapper**](../Model/ContactWrapper.md)| JSON object describing the new contact |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addContactsUsingPOST**
> \Swagger\Client\Model\RestfulBatchOperationResult addContactsUsingPOST($authorization, $organization_id, $contacts, $version)

Create contacts within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contacts
$contacts = array(new \Swagger\Client\Model\ContactWrapper()); // \Swagger\Client\Model\ContactWrapper[] | JSON object describing the contacts
$version = 0; // int | Whether use new batch API or not

try {
    $result = $apiInstance->addContactsUsingPOST($authorization, $organization_id, $contacts, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->addContactsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contacts |
 **contacts** | [**\Swagger\Client\Model\ContactWrapper[]**](../Model/ContactWrapper.md)| JSON object describing the contacts |
 **version** | **int**| Whether use new batch API or not | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\RestfulBatchOperationResult**](../Model/RestfulBatchOperationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContactUsingDELETE**
> \Swagger\Client\Model\RestfulModificationResult deleteContactUsingDELETE($authorization, $organization_id, $id, $id_type)

Delete the specified contact from an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contacts
$id = "id_example"; // string | The ID of the contact to delete
$id_type = "id"; // string | Whether to search by contact.id or contact.externalId.

try {
    $result = $apiInstance->deleteContactUsingDELETE($authorization, $organization_id, $id, $id_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteContactUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contacts |
 **id** | **string**| The ID of the contact to delete |
 **id_type** | **string**| Whether to search by contact.id or contact.externalId. | [optional] [default to id]

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContactsUsingDELETE**
> \Swagger\Client\Model\RestfulBatchOperationResult deleteContactsUsingDELETE($authorization, $organization_id, $contact_ids, $id_type)

Delete the specified contacts from an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contacts
$contact_ids = array(new \Swagger\Client\Model\string[]()); // string[] | JSON object describing the contacts Ids
$id_type = "id"; // string | Whether to search by contact.id or contact.externalId.

try {
    $result = $apiInstance->deleteContactsUsingDELETE($authorization, $organization_id, $contact_ids, $id_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteContactsUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contacts |
 **contact_ids** | **string[]**| JSON object describing the contacts Ids |
 **id_type** | **string**| Whether to search by contact.id or contact.externalId. | [optional] [default to id]

### Return type

[**\Swagger\Client\Model\RestfulBatchOperationResult**](../Model/RestfulBatchOperationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactUsingGET**
> \Swagger\Client\Model\ContactWrapperInstanceResult getContactUsingGET($authorization, $organization_id, $id, $id_type)

Retrieve the specified contact within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contacts
$id = "id_example"; // string | The ID of the contact to return
$id_type = "id"; // string | Whether to search by contact.id or contact.externalId.

try {
    $result = $apiInstance->getContactUsingGET($authorization, $organization_id, $id, $id_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContactUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contacts |
 **id** | **string**| The ID of the contact to return |
 **id_type** | **string**| Whether to search by contact.id or contact.externalId. | [optional] [default to id]

### Return type

[**\Swagger\Client\Model\ContactWrapperInstanceResult**](../Model/ContactWrapperInstanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactsInGroupUsingGET**
> \Swagger\Client\Model\RestfulBatchOperationResult getContactsInGroupUsingGET($authorization, $organization_id, $by_type, $group_id, $group_name, $page_size, $page_number)

Retrieve all contacts within a group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the groups
$by_type = "id"; // string | Whether to get by id or name of group
$group_id = 0; // int | The ID of the group to get contacts
$group_name = "group_name_example"; // string | The name of the group to get contacts
$page_size = 100; // int | The page size for contacts to return.
$page_number = 1; // int | The page number of contacts to return.

try {
    $result = $apiInstance->getContactsInGroupUsingGET($authorization, $organization_id, $by_type, $group_id, $group_name, $page_size, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContactsInGroupUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the groups |
 **by_type** | **string**| Whether to get by id or name of group | [optional] [default to id]
 **group_id** | **int**| The ID of the group to get contacts | [optional] [default to 0]
 **group_name** | **string**| The name of the group to get contacts | [optional]
 **page_size** | **int**| The page size for contacts to return. | [optional] [default to 100]
 **page_number** | **int**| The page number of contacts to return. | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\RestfulBatchOperationResult**](../Model/RestfulBatchOperationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryContactsByPostUsingPOST**
> \Swagger\Client\Model\ContactWrapperCollectionResult queryContactsByPostUsingPOST($authorization, $organization_id, $query_conditions)

Retrieve all contacts for an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contacts
$query_conditions = new \Swagger\Client\Model\ContactQueryParam(); // \Swagger\Client\Model\ContactQueryParam | Query conditions

try {
    $result = $apiInstance->queryContactsByPostUsingPOST($authorization, $organization_id, $query_conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->queryContactsByPostUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contacts |
 **query_conditions** | [**\Swagger\Client\Model\ContactQueryParam**](../Model/ContactQueryParam.md)| Query conditions |

### Return type

[**\Swagger\Client\Model\ContactWrapperCollectionResult**](../Model/ContactWrapperCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryContactsUsingGET**
> \Swagger\Client\Model\ContactWrapperCollectionResult queryContactsUsingGET($authorization, $organization_id, $page_number, $page_size, $group_ids, $contact_ids, $external_ids, $contact_filter_ids, $include_shapes, $exclude_shapes, $search_type, $search_shape_types, $sort_by, $direction)

Retrieve all contacts for an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contacts
$page_number = 1; // int | The page number of contacts to return.
$page_size = 100; // int | The page size for contacts to return.
$group_ids = array(56); // int[] | A list of group IDs from which to select contacts
$contact_ids = array(56); // int[] | A list of contact IDs to use when selecting contacts
$external_ids = array("external_ids_example"); // string[] | A list of external IDs to use when selecting contacts
$contact_filter_ids = array(56); // int[] | A list of contactFilter IDs to use for selecting contacts
$include_shapes = "include_shapes_example"; // string | A list of shapes to include in the search
$exclude_shapes = "exclude_shapes_example"; // string | A list of shapes to exclude from the search
$search_type = "AND"; // string | Whether to apply search terms as OR or AND.
$search_shape_types = array("search_shape_types_example"); // string[] | Type of shapes
$sort_by = "sort_by_example"; // string | Whether to sort data by lastModifiedDate, externalId or lastName.
$direction = "direction_example"; // string | Whether to sort data as ASC or DESC.

try {
    $result = $apiInstance->queryContactsUsingGET($authorization, $organization_id, $page_number, $page_size, $group_ids, $contact_ids, $external_ids, $contact_filter_ids, $include_shapes, $exclude_shapes, $search_type, $search_shape_types, $sort_by, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->queryContactsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contacts |
 **page_number** | **int**| The page number of contacts to return. | [optional] [default to 1]
 **page_size** | **int**| The page size for contacts to return. | [optional] [default to 100]
 **group_ids** | [**int[]**](../Model/int.md)| A list of group IDs from which to select contacts | [optional]
 **contact_ids** | [**int[]**](../Model/int.md)| A list of contact IDs to use when selecting contacts | [optional]
 **external_ids** | [**string[]**](../Model/string.md)| A list of external IDs to use when selecting contacts | [optional]
 **contact_filter_ids** | [**int[]**](../Model/int.md)| A list of contactFilter IDs to use for selecting contacts | [optional]
 **include_shapes** | **string**| A list of shapes to include in the search | [optional]
 **exclude_shapes** | **string**| A list of shapes to exclude from the search | [optional]
 **search_type** | **string**| Whether to apply search terms as OR or AND. | [optional] [default to AND]
 **search_shape_types** | [**string[]**](../Model/string.md)| Type of shapes | [optional]
 **sort_by** | **string**| Whether to sort data by lastModifiedDate, externalId or lastName. | [optional]
 **direction** | **string**| Whether to sort data as ASC or DESC. | [optional]

### Return type

[**\Swagger\Client\Model\ContactWrapperCollectionResult**](../Model/ContactWrapperCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContactUsingPUT**
> \Swagger\Client\Model\RestfulModificationResult updateContactUsingPUT($authorization, $organization_id, $id, $contact, $id_type)

Update a contact within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contacts
$id = "id_example"; // string | The ID of the contact to update
$contact = new \Swagger\Client\Model\ContactWrapper(); // \Swagger\Client\Model\ContactWrapper | JSON object describing the updated contact
$id_type = "id"; // string | Whether to search by contact.id or contact.externalId.

try {
    $result = $apiInstance->updateContactUsingPUT($authorization, $organization_id, $id, $contact, $id_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->updateContactUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contacts |
 **id** | **string**| The ID of the contact to update |
 **contact** | [**\Swagger\Client\Model\ContactWrapper**](../Model/ContactWrapper.md)| JSON object describing the updated contact |
 **id_type** | **string**| Whether to search by contact.id or contact.externalId. | [optional] [default to id]

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContactsUsingPUT**
> \Swagger\Client\Model\RestfulBatchOperationResult updateContactsUsingPUT($authorization, $organization_id, $contacts, $id_type, $update_type)

Update contacts within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contacts
$contacts = array(new \Swagger\Client\Model\ContactWrapper()); // \Swagger\Client\Model\ContactWrapper[] | JSON object describing the updated contacts
$id_type = "id"; // string | Whether to update by contact.id or contact.externalId.
$update_type = "partial"; // string | Whether to update  by partial or full.

try {
    $result = $apiInstance->updateContactsUsingPUT($authorization, $organization_id, $contacts, $id_type, $update_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->updateContactsUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contacts |
 **contacts** | [**\Swagger\Client\Model\ContactWrapper[]**](../Model/ContactWrapper.md)| JSON object describing the updated contacts |
 **id_type** | **string**| Whether to update by contact.id or contact.externalId. | [optional] [default to id]
 **update_type** | **string**| Whether to update  by partial or full. | [optional] [default to partial]

### Return type

[**\Swagger\Client\Model\RestfulBatchOperationResult**](../Model/RestfulBatchOperationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

