# Swagger\Client\RolesApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteRoleUsingDELETE**](RolesApi.md#deleteRoleUsingDELETE) | **DELETE** /roles/{organizationId}/{roleId} | Delete a role from an organization.
[**getRoleUsingGET**](RolesApi.md#getRoleUsingGET) | **GET** /roles/{organizationId}/{roleId} | Get a role for an organization.
[**launchRoleUsingPOST**](RolesApi.md#launchRoleUsingPOST) | **POST** /roles/{organizationId} | Create a role for an organization.
[**queryRolesUsingGET**](RolesApi.md#queryRolesUsingGET) | **GET** /roles/{organizationId} | Retrieve all roles for an organization.
[**updateRoleUsingPUT**](RolesApi.md#updateRoleUsingPUT) | **PUT** /roles/{organizationId}/{roleId} | Update a role for an organization.


# **deleteRoleUsingDELETE**
> \Swagger\Client\Model\RestfulModificationResult deleteRoleUsingDELETE($authorization, $organization_id, $role_id)

Delete a role from an organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing this role.
$role_id = 789; // int | The role ID of role to delete.

try {
    $result = $apiInstance->deleteRoleUsingDELETE($authorization, $organization_id, $role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->deleteRoleUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing this role. |
 **role_id** | **int**| The role ID of role to delete. |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoleUsingGET**
> \Swagger\Client\Model\RestfulInstanceResult getRoleUsingGET($authorization, $organization_id, $role_id)

Get a role for an organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the role.
$role_id = 789; // int | The ID of the role to return.

try {
    $result = $apiInstance->getRoleUsingGET($authorization, $organization_id, $role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->getRoleUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the role. |
 **role_id** | **int**| The ID of the role to return. |

### Return type

[**\Swagger\Client\Model\RestfulInstanceResult**](../Model/RestfulInstanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **launchRoleUsingPOST**
> \Swagger\Client\Model\RestfulModificationResult launchRoleUsingPOST($authorization, $organization_id, $role)

Create a role for an organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization.
$role = new \Swagger\Client\Model\RoleWrapper(); // \Swagger\Client\Model\RoleWrapper | The JSON representation of the created role.

try {
    $result = $apiInstance->launchRoleUsingPOST($authorization, $organization_id, $role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->launchRoleUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization. |
 **role** | [**\Swagger\Client\Model\RoleWrapper**](../Model/RoleWrapper.md)| The JSON representation of the created role. |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryRolesUsingGET**
> \Swagger\Client\Model\RestfulCollectionResult queryRolesUsingGET($authorization, $organization_id, $page_number)

Retrieve all roles for an organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization.
$page_number = 1; // int | The page number of roles to return.

try {
    $result = $apiInstance->queryRolesUsingGET($authorization, $organization_id, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->queryRolesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization. |
 **page_number** | **int**| The page number of roles to return. | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\RestfulCollectionResult**](../Model/RestfulCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRoleUsingPUT**
> \Swagger\Client\Model\RestfulModificationResult updateRoleUsingPUT($authorization, $organization_id, $role_id, $role)

Update a role for an organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing this role.
$role_id = 789; // int | The role ID of the role to update.
$role = new \Swagger\Client\Model\RoleWrapper(); // \Swagger\Client\Model\RoleWrapper | The JSON representation of the updated role.

try {
    $result = $apiInstance->updateRoleUsingPUT($authorization, $organization_id, $role_id, $role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->updateRoleUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing this role. |
 **role_id** | **int**| The role ID of the role to update. |
 **role** | [**\Swagger\Client\Model\RoleWrapper**](../Model/RoleWrapper.md)| The JSON representation of the updated role. |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

