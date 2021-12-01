# Swagger\Client\GroupsApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addContentsUsingPOST**](GroupsApi.md#addContentsUsingPOST) | **POST** /groups/{organizationId}/contacts | add many contacts within a group
[**addGroupUsingPOST**](GroupsApi.md#addGroupUsingPOST) | **POST** /groups/{organizationId} | Create a new group within an organization
[**deleteContentsUsingDELETE**](GroupsApi.md#deleteContentsUsingDELETE) | **DELETE** /groups/{organizationId}/contacts | remove many contacts within a group
[**deleteGroupUsingDELETE**](GroupsApi.md#deleteGroupUsingDELETE) | **DELETE** /groups/{organizationId}/{groupId} | Delete the specified group from an organization
[**getGroupUsingGET**](GroupsApi.md#getGroupUsingGET) | **GET** /groups/{organizationId}/{queryValue} | Retrieve a specific group
[**queryGroupsUsingGET**](GroupsApi.md#queryGroupsUsingGET) | **GET** /groups/{organizationId} | Retrieve all groups for an organization
[**replaceContactsIntoSeqGroupUsingPOST**](GroupsApi.md#replaceContactsIntoSeqGroupUsingPOST) | **POST** /groups/{organizationId}/contacts/sequence | Replace contacts for the sequenced group
[**updateGroupUsingPUT**](GroupsApi.md#updateGroupUsingPUT) | **PUT** /groups/{organizationId}/{groupId} | Update a group within an organization


# **addContentsUsingPOST**
> \Swagger\Client\Model\RestfulBatchOperationResult addContentsUsingPOST($authorization, $organization_id, $contact_ids, $by_type, $group_id, $group_name, $id_type)

add many contacts within a group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the groups
$contact_ids = array(new \Swagger\Client\Model\string[]()); // string[] | JSON object describing the contacts Ids
$by_type = "id"; // string | Whether to select by id or name
$group_id = 0; // int | The ID of the group to add contacts
$group_name = "group_name_example"; // string | The name of the group to add contacts
$id_type = "id"; // string | Whether to add by contact.id or contact.externalId.

try {
    $result = $apiInstance->addContentsUsingPOST($authorization, $organization_id, $contact_ids, $by_type, $group_id, $group_name, $id_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->addContentsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the groups |
 **contact_ids** | **string[]**| JSON object describing the contacts Ids |
 **by_type** | **string**| Whether to select by id or name | [optional] [default to id]
 **group_id** | **int**| The ID of the group to add contacts | [optional] [default to 0]
 **group_name** | **string**| The name of the group to add contacts | [optional]
 **id_type** | **string**| Whether to add by contact.id or contact.externalId. | [optional] [default to id]

### Return type

[**\Swagger\Client\Model\RestfulBatchOperationResult**](../Model/RestfulBatchOperationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addGroupUsingPOST**
> \Swagger\Client\Model\RestfulModificationResult addGroupUsingPOST($authorization, $organization_id, $group)

Create a new group within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the groups
$group = new \Swagger\Client\Model\GroupWrapper(); // \Swagger\Client\Model\GroupWrapper | JSON object describing the new group

try {
    $result = $apiInstance->addGroupUsingPOST($authorization, $organization_id, $group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->addGroupUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the groups |
 **group** | [**\Swagger\Client\Model\GroupWrapper**](../Model/GroupWrapper.md)| JSON object describing the new group |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContentsUsingDELETE**
> \Swagger\Client\Model\RestfulBatchOperationResult deleteContentsUsingDELETE($authorization, $organization_id, $contact_ids, $by_type, $group_id, $group_name, $id_type)

remove many contacts within a group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the groups
$contact_ids = array(new \Swagger\Client\Model\string[]()); // string[] | JSON object describing the contacts Ids
$by_type = "id"; // string | Whether to delete by id or name of group
$group_id = 0; // int | The ID of the group to remove contacts
$group_name = "group_name_example"; // string | The name of the group to remove contacts
$id_type = "id"; // string | Whether to delete by contact.id or contact.externalId.

try {
    $result = $apiInstance->deleteContentsUsingDELETE($authorization, $organization_id, $contact_ids, $by_type, $group_id, $group_name, $id_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->deleteContentsUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the groups |
 **contact_ids** | **string[]**| JSON object describing the contacts Ids |
 **by_type** | **string**| Whether to delete by id or name of group | [optional] [default to id]
 **group_id** | **int**| The ID of the group to remove contacts | [optional] [default to 0]
 **group_name** | **string**| The name of the group to remove contacts | [optional]
 **id_type** | **string**| Whether to delete by contact.id or contact.externalId. | [optional] [default to id]

### Return type

[**\Swagger\Client\Model\RestfulBatchOperationResult**](../Model/RestfulBatchOperationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGroupUsingDELETE**
> \Swagger\Client\Model\RestfulModificationResult deleteGroupUsingDELETE($authorization, $organization_id, $group_id)

Delete the specified group from an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the groups
$group_id = 789; // int | The ID of the group to delete

try {
    $result = $apiInstance->deleteGroupUsingDELETE($authorization, $organization_id, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->deleteGroupUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the groups |
 **group_id** | **int**| The ID of the group to delete |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupUsingGET**
> \Swagger\Client\Model\GroupWrapperInstanceResult getGroupUsingGET($authorization, $organization_id, $query_value, $query_type)

Retrieve a specific group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization in which to find the group
$query_value = "query_value_example"; // string | The ID or name of the group
$query_type = "id"; // string | Whether to search by group.id or group.name.

try {
    $result = $apiInstance->getGroupUsingGET($authorization, $organization_id, $query_value, $query_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroupUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization in which to find the group |
 **query_value** | **string**| The ID or name of the group |
 **query_type** | **string**| Whether to search by group.id or group.name. | [optional] [default to id]

### Return type

[**\Swagger\Client\Model\GroupWrapperInstanceResult**](../Model/GroupWrapperInstanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryGroupsUsingGET**
> \Swagger\Client\Model\GroupWrapperCollectionResult queryGroupsUsingGET($authorization, $organization_id)

Retrieve all groups for an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the groups

try {
    $result = $apiInstance->queryGroupsUsingGET($authorization, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->queryGroupsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the groups |

### Return type

[**\Swagger\Client\Model\GroupWrapperCollectionResult**](../Model/GroupWrapperCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceContactsIntoSeqGroupUsingPOST**
> \Swagger\Client\Model\RestfulBatchOperationResult replaceContactsIntoSeqGroupUsingPOST($authorization, $organization_id, $contact_ids, $by_type, $group_id, $group_name, $id_type)

Replace contacts for the sequenced group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the groups
$contact_ids = array(new \Swagger\Client\Model\string[]()); // string[] | JSON object describing the contacts Ids
$by_type = "id"; // string | Whether to select by id or name
$group_id = 0; // int | The ID of the group to add contacts
$group_name = "group_name_example"; // string | The name of the group to add contacts
$id_type = "id"; // string | Whether to add by contact.id or contact.externalId.

try {
    $result = $apiInstance->replaceContactsIntoSeqGroupUsingPOST($authorization, $organization_id, $contact_ids, $by_type, $group_id, $group_name, $id_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->replaceContactsIntoSeqGroupUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the groups |
 **contact_ids** | **string[]**| JSON object describing the contacts Ids |
 **by_type** | **string**| Whether to select by id or name | [optional] [default to id]
 **group_id** | **int**| The ID of the group to add contacts | [optional] [default to 0]
 **group_name** | **string**| The name of the group to add contacts | [optional]
 **id_type** | **string**| Whether to add by contact.id or contact.externalId. | [optional] [default to id]

### Return type

[**\Swagger\Client\Model\RestfulBatchOperationResult**](../Model/RestfulBatchOperationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGroupUsingPUT**
> \Swagger\Client\Model\RestfulModificationResult updateGroupUsingPUT($authorization, $organization_id, $group_id, $group)

Update a group within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the groups
$group_id = 789; // int | The ID of the group to update
$group = new \Swagger\Client\Model\GroupWrapper(); // \Swagger\Client\Model\GroupWrapper | JSON object describing the new group

try {
    $result = $apiInstance->updateGroupUsingPUT($authorization, $organization_id, $group_id, $group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->updateGroupUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the groups |
 **group_id** | **int**| The ID of the group to update |
 **group** | [**\Swagger\Client\Model\GroupWrapper**](../Model/GroupWrapper.md)| JSON object describing the new group |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

