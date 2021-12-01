# Swagger\Client\LaunchPoliciesApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteNotificationUsingDELETE**](LaunchPoliciesApi.md#deleteNotificationUsingDELETE) | **DELETE** /launchPolicies/{organizationId}/{launchPolicyId} | Delete the specified launchPolicy from the organization
[**getStatusUsingGET**](LaunchPoliciesApi.md#getStatusUsingGET) | **GET** /launchPolicies/{organizationId}/{launchPolicyId} | Retrieve a specific launchPolicy within an organization
[**initNotificationUsingPOST**](LaunchPoliciesApi.md#initNotificationUsingPOST) | **POST** /launchPolicies/{organizationId} | Create a launchPolicy
[**queryContactPathsUsingGET1**](LaunchPoliciesApi.md#queryContactPathsUsingGET1) | **GET** /launchPolicies/{organizationId} | Retrieve all launchPolicies for an organization
[**updateNotificationUsingPUT**](LaunchPoliciesApi.md#updateNotificationUsingPUT) | **PUT** /launchPolicies/{organizationId}/{launchPolicyId} | Update a launchPolicy


# **deleteNotificationUsingDELETE**
> \Swagger\Client\Model\RestfulModificationResult deleteNotificationUsingDELETE($authorization, $organization_id, $launch_policy_id)

Delete the specified launchPolicy from the organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LaunchPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the launchPolicies
$launch_policy_id = 789; // int | The ID of the launchPolicy to delete

try {
    $result = $apiInstance->deleteNotificationUsingDELETE($authorization, $organization_id, $launch_policy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaunchPoliciesApi->deleteNotificationUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the launchPolicies |
 **launch_policy_id** | **int**| The ID of the launchPolicy to delete |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatusUsingGET**
> \Swagger\Client\Model\RestfulInstanceResult getStatusUsingGET($authorization, $organization_id, $launch_policy_id)

Retrieve a specific launchPolicy within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LaunchPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the launchPolicy
$launch_policy_id = 789; // int | The ID of the launchPolicy to return

try {
    $result = $apiInstance->getStatusUsingGET($authorization, $organization_id, $launch_policy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaunchPoliciesApi->getStatusUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the launchPolicy |
 **launch_policy_id** | **int**| The ID of the launchPolicy to return |

### Return type

[**\Swagger\Client\Model\RestfulInstanceResult**](../Model/RestfulInstanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **initNotificationUsingPOST**
> \Swagger\Client\Model\RestfulModificationResult initNotificationUsingPOST($authorization, $organization_id, $launch_policy)

Create a launchPolicy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LaunchPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The organization from which to initiate the launchPolicy
$launch_policy = new \Swagger\Client\Model\LaunchPolicyWrapper(); // \Swagger\Client\Model\LaunchPolicyWrapper | The LaunchPolicy object to create

try {
    $result = $apiInstance->initNotificationUsingPOST($authorization, $organization_id, $launch_policy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaunchPoliciesApi->initNotificationUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The organization from which to initiate the launchPolicy |
 **launch_policy** | [**\Swagger\Client\Model\LaunchPolicyWrapper**](../Model/LaunchPolicyWrapper.md)| The LaunchPolicy object to create |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryContactPathsUsingGET1**
> \Swagger\Client\Model\RestfulCollectionResult queryContactPathsUsingGET1($authorization, $organization_id, $page_number)

Retrieve all launchPolicies for an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LaunchPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the launchPolicies
$page_number = 1; // int | The page number of launchPolicies to return.

try {
    $result = $apiInstance->queryContactPathsUsingGET1($authorization, $organization_id, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaunchPoliciesApi->queryContactPathsUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the launchPolicies |
 **page_number** | **int**| The page number of launchPolicies to return. | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\RestfulCollectionResult**](../Model/RestfulCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateNotificationUsingPUT**
> \Swagger\Client\Model\RestfulModificationResult updateNotificationUsingPUT($authorization, $organization_id, $launch_policy_id, $launch_policy)

Update a launchPolicy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LaunchPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The organization from which to initiate the launchPolicy
$launch_policy_id = 789; // int | The ID of the LaunchPolicy to modify
$launch_policy = new \Swagger\Client\Model\LaunchPolicyWrapper(); // \Swagger\Client\Model\LaunchPolicyWrapper | The new state of the LaunchPolicy object

try {
    $result = $apiInstance->updateNotificationUsingPUT($authorization, $organization_id, $launch_policy_id, $launch_policy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaunchPoliciesApi->updateNotificationUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The organization from which to initiate the launchPolicy |
 **launch_policy_id** | **int**| The ID of the LaunchPolicy to modify |
 **launch_policy** | [**\Swagger\Client\Model\LaunchPolicyWrapper**](../Model/LaunchPolicyWrapper.md)| The new state of the LaunchPolicy object |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

