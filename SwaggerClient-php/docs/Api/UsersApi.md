# Swagger\Client\UsersApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteUserUsingDELETE**](UsersApi.md#deleteUserUsingDELETE) | **DELETE** /users/{userId} | Delete a user from an account.
[**getUserUsingGET**](UsersApi.md#getUserUsingGET) | **GET** /users/{userId} | Get a user for an account.
[**launchUserUsingPOST**](UsersApi.md#launchUserUsingPOST) | **POST** /users | Create a user for an account.
[**queryUsersUsingGET**](UsersApi.md#queryUsersUsingGET) | **GET** /users | Retrieve all users for an account.
[**sendRegiestEmailUsingPOST**](UsersApi.md#sendRegiestEmailUsingPOST) | **POST** /users/{userId}/sendEmail | Send registration email for an unregistered user.
[**updateUserUsingPUT**](UsersApi.md#updateUserUsingPUT) | **PUT** /users/{userId} | Update a user for an account.


# **deleteUserUsingDELETE**
> \Swagger\Client\Model\RestfulModificationResult deleteUserUsingDELETE($authorization, $user_id)

Delete a user from an account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$user_id = 789; // int | The ID of the user to delete.

try {
    $result = $apiInstance->deleteUserUsingDELETE($authorization, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteUserUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **user_id** | **int**| The ID of the user to delete. |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserUsingGET**
> \Swagger\Client\Model\RestfulInstanceResult getUserUsingGET($authorization, $user_id)

Get a user for an account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$user_id = 789; // int | The ID of the user to return.

try {
    $result = $apiInstance->getUserUsingGET($authorization, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **user_id** | **int**| The ID of the user to return. |

### Return type

[**\Swagger\Client\Model\RestfulInstanceResult**](../Model/RestfulInstanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **launchUserUsingPOST**
> \Swagger\Client\Model\RestfulModificationResult launchUserUsingPOST($authorization, $user)

Create a user for an account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$user = new \Swagger\Client\Model\UserWrapper(); // \Swagger\Client\Model\UserWrapper | The JSON representation of the created user.

try {
    $result = $apiInstance->launchUserUsingPOST($authorization, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->launchUserUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **user** | [**\Swagger\Client\Model\UserWrapper**](../Model/UserWrapper.md)| The JSON representation of the created user. |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryUsersUsingGET**
> \Swagger\Client\Model\UserWrapperCollectionResult queryUsersUsingGET($authorization, $page_number, $role_id, $first_name, $last_name, $user_status, $column_name, $order_direction)

Retrieve all users for an account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$page_number = 1; // int | The page number of users to return.
$role_id = 0; // int | Filter users by roleId.
$first_name = "first_name_example"; // string | Filter users by firstName.
$last_name = "last_name_example"; // string | Filter users by lastName.
$user_status = "user_status_example"; // string | Filter users by userStatus, allowable values: Active, Inactive or NotRegistered.
$column_name = "firstName"; // string | Sort users by column name, allowable values: firstName, lastName or lastModifiedDate.
$order_direction = "ASC"; // string | Sort users by ASC or DESC.

try {
    $result = $apiInstance->queryUsersUsingGET($authorization, $page_number, $role_id, $first_name, $last_name, $user_status, $column_name, $order_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->queryUsersUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **page_number** | **int**| The page number of users to return. | [optional] [default to 1]
 **role_id** | **int**| Filter users by roleId. | [optional] [default to 0]
 **first_name** | **string**| Filter users by firstName. | [optional]
 **last_name** | **string**| Filter users by lastName. | [optional]
 **user_status** | **string**| Filter users by userStatus, allowable values: Active, Inactive or NotRegistered. | [optional]
 **column_name** | **string**| Sort users by column name, allowable values: firstName, lastName or lastModifiedDate. | [optional] [default to firstName]
 **order_direction** | **string**| Sort users by ASC or DESC. | [optional] [default to ASC]

### Return type

[**\Swagger\Client\Model\UserWrapperCollectionResult**](../Model/UserWrapperCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendRegiestEmailUsingPOST**
> \Swagger\Client\Model\RestfulModificationResult sendRegiestEmailUsingPOST($authorization, $user_id)

Send registration email for an unregistered user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$user_id = 789; // int | The user ID to send the registration email.

try {
    $result = $apiInstance->sendRegiestEmailUsingPOST($authorization, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->sendRegiestEmailUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **user_id** | **int**| The user ID to send the registration email. |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUserUsingPUT**
> \Swagger\Client\Model\RestfulModificationResult updateUserUsingPUT($authorization, $user_id, $user)

Update a user for an account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$user_id = 789; // int | The ID of the user to update.
$user = new \Swagger\Client\Model\UserWrapper(); // \Swagger\Client\Model\UserWrapper | The JSON representation of the updated user.

try {
    $result = $apiInstance->updateUserUsingPUT($authorization, $user_id, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateUserUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **user_id** | **int**| The ID of the user to update. |
 **user** | [**\Swagger\Client\Model\UserWrapper**](../Model/UserWrapper.md)| The JSON representation of the updated user. |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

