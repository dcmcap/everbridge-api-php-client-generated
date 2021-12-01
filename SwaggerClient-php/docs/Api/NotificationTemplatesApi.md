# Swagger\Client\NotificationTemplatesApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteNotificationUsingDELETE1**](NotificationTemplatesApi.md#deleteNotificationUsingDELETE1) | **DELETE** /notificationTemplates/{organizationId}/{notificationTemplateId} | Delete the specified notificationTemplate from the organization
[**getStatusUsingGET3**](NotificationTemplatesApi.md#getStatusUsingGET3) | **GET** /notificationTemplates/{organizationId}/{notificationTemplateId} | Retrieve a specific notificationTemplate within an organization
[**initNotificationUsingPOST3**](NotificationTemplatesApi.md#initNotificationUsingPOST3) | **POST** /notificationTemplates/{organizationId} | Create a notificationTemplate
[**queryContactPathsUsingGET5**](NotificationTemplatesApi.md#queryContactPathsUsingGET5) | **GET** /notificationTemplates/{organizationId} | Retrieve all notificationTemplates for an organization
[**updateNotificationUsingPUT2**](NotificationTemplatesApi.md#updateNotificationUsingPUT2) | **PUT** /notificationTemplates/{organizationId}/{notificationTemplateId} | Update a notificationTemplate


# **deleteNotificationUsingDELETE1**
> \Swagger\Client\Model\RestfulModificationResult deleteNotificationUsingDELETE1($authorization, $organization_id, $notification_template_id)

Delete the specified notificationTemplate from the organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotificationTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the notificationTemplates
$notification_template_id = 789; // int | The ID of the notificationTemplate to delete

try {
    $result = $apiInstance->deleteNotificationUsingDELETE1($authorization, $organization_id, $notification_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationTemplatesApi->deleteNotificationUsingDELETE1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the notificationTemplates |
 **notification_template_id** | **int**| The ID of the notificationTemplate to delete |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatusUsingGET3**
> \Swagger\Client\Model\RestfulInstanceResult getStatusUsingGET3($authorization, $organization_id, $notification_template_id)

Retrieve a specific notificationTemplate within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotificationTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the notificationTemplate
$notification_template_id = 789; // int | The ID of the notificationTemplate to return

try {
    $result = $apiInstance->getStatusUsingGET3($authorization, $organization_id, $notification_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationTemplatesApi->getStatusUsingGET3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the notificationTemplate |
 **notification_template_id** | **int**| The ID of the notificationTemplate to return |

### Return type

[**\Swagger\Client\Model\RestfulInstanceResult**](../Model/RestfulInstanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **initNotificationUsingPOST3**
> \Swagger\Client\Model\RestfulModificationResult initNotificationUsingPOST3($authorization, $organization_id, $notification_template)

Create a notificationTemplate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotificationTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The organization from which to initiate the notificationTemplate
$notification_template = new \Swagger\Client\Model\BroadcastTemplateWrapper(); // \Swagger\Client\Model\BroadcastTemplateWrapper | The NotificationTemplate object to create

try {
    $result = $apiInstance->initNotificationUsingPOST3($authorization, $organization_id, $notification_template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationTemplatesApi->initNotificationUsingPOST3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The organization from which to initiate the notificationTemplate |
 **notification_template** | [**\Swagger\Client\Model\BroadcastTemplateWrapper**](../Model/BroadcastTemplateWrapper.md)| The NotificationTemplate object to create |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryContactPathsUsingGET5**
> \Swagger\Client\Model\RestfulCollectionResult queryContactPathsUsingGET5($authorization, $organization_id, $query_value, $page_number)

Retrieve all notificationTemplates for an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotificationTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the notificationTemplates
$query_value = "query_value_example"; // string | Filter templates by message title or category name.
$page_number = 1; // int | The page number of notificationTemplates to return.

try {
    $result = $apiInstance->queryContactPathsUsingGET5($authorization, $organization_id, $query_value, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationTemplatesApi->queryContactPathsUsingGET5: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the notificationTemplates |
 **query_value** | **string**| Filter templates by message title or category name. | [optional]
 **page_number** | **int**| The page number of notificationTemplates to return. | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\RestfulCollectionResult**](../Model/RestfulCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateNotificationUsingPUT2**
> \Swagger\Client\Model\RestfulModificationResult updateNotificationUsingPUT2($authorization, $organization_id, $notification_template_id, $notification_template)

Update a notificationTemplate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotificationTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The organization from which to initiate the notificationTemplate
$notification_template_id = 789; // int | The ID of the notification to modify
$notification_template = new \Swagger\Client\Model\BroadcastTemplateWrapper(); // \Swagger\Client\Model\BroadcastTemplateWrapper | The new state of the NotificationTemplate object

try {
    $result = $apiInstance->updateNotificationUsingPUT2($authorization, $organization_id, $notification_template_id, $notification_template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationTemplatesApi->updateNotificationUsingPUT2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The organization from which to initiate the notificationTemplate |
 **notification_template_id** | **int**| The ID of the notification to modify |
 **notification_template** | [**\Swagger\Client\Model\BroadcastTemplateWrapper**](../Model/BroadcastTemplateWrapper.md)| The new state of the NotificationTemplate object |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

