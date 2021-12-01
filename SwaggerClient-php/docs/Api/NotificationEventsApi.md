# Swagger\Client\NotificationEventsApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addNotificationEventUsingPOST**](NotificationEventsApi.md#addNotificationEventUsingPOST) | **POST** /notificationEvents/{organizationId} | Create a new notification event within an organization
[**queryContactPathsUsingGET4**](NotificationEventsApi.md#queryContactPathsUsingGET4) | **GET** /notificationEvents/{organizationId} | Retrieve all notification events for an organization
[**queryNotificationEventsUsingGET**](NotificationEventsApi.md#queryNotificationEventsUsingGET) | **GET** /notificationEvents/{organizationId}/{notificationEventId} | Retrieve a specific notification event


# **addNotificationEventUsingPOST**
> \Swagger\Client\Model\RestfulModificationResult addNotificationEventUsingPOST($authorization, $organization_id, $notification_event)

Create a new notification event within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotificationEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the notificationEvents
$notification_event = new \Swagger\Client\Model\NotificationEventWrapper(); // \Swagger\Client\Model\NotificationEventWrapper | JSON object describing the new notificationEvent

try {
    $result = $apiInstance->addNotificationEventUsingPOST($authorization, $organization_id, $notification_event);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationEventsApi->addNotificationEventUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the notificationEvents |
 **notification_event** | [**\Swagger\Client\Model\NotificationEventWrapper**](../Model/NotificationEventWrapper.md)| JSON object describing the new notificationEvent |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryContactPathsUsingGET4**
> \Swagger\Client\Model\RestfulCollectionResult queryContactPathsUsingGET4($authorization, $organization_id)

Retrieve all notification events for an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotificationEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the notificationEvents

try {
    $result = $apiInstance->queryContactPathsUsingGET4($authorization, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationEventsApi->queryContactPathsUsingGET4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the notificationEvents |

### Return type

[**\Swagger\Client\Model\RestfulCollectionResult**](../Model/RestfulCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryNotificationEventsUsingGET**
> \Swagger\Client\Model\RestfulInstanceResult queryNotificationEventsUsingGET($authorization, $organization_id, $notification_event_id)

Retrieve a specific notification event

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotificationEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization in which to find the notificationEvent
$notification_event_id = 789; // int | The ID of the notificationEvent

try {
    $result = $apiInstance->queryNotificationEventsUsingGET($authorization, $organization_id, $notification_event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationEventsApi->queryNotificationEventsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization in which to find the notificationEvent |
 **notification_event_id** | **int**| The ID of the notificationEvent |

### Return type

[**\Swagger\Client\Model\RestfulInstanceResult**](../Model/RestfulInstanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

