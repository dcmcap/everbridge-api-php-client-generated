# Swagger\Client\NotificationsApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStatusUsingGET2**](NotificationsApi.md#getStatusUsingGET2) | **GET** /notifications/{organizationId}/{notificationId} | Retrieve the status of a notification within an organization
[**initNotificationUsingPOST2**](NotificationsApi.md#initNotificationUsingPOST2) | **POST** /notifications/{organizationId} | Initiate an immediate notification
[**queryContactPathsUsingGET3**](NotificationsApi.md#queryContactPathsUsingGET3) | **GET** /notifications/{organizationId} | Retrieve all notifications for an organization
[**queryNotificationWithStartDateRangeUsingGET**](NotificationsApi.md#queryNotificationWithStartDateRangeUsingGET) | **GET** /notifications/{organizationId}/reports | Retrieve all notifications for an organization with start date range
[**updateNotificationUsingPUT1**](NotificationsApi.md#updateNotificationUsingPUT1) | **PUT** /notifications/{organizationId}/{notificationId} | Update a notification


# **getStatusUsingGET2**
> \Swagger\Client\Model\RestfulInstanceResult getStatusUsingGET2($authorization, $organization_id, $notification_id, $verbose)

Retrieve the status of a notification within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the notification
$notification_id = 789; // int | The ID of the notification to return
$verbose = false; // bool | A boolean indicating whether to return detailed results

try {
    $result = $apiInstance->getStatusUsingGET2($authorization, $organization_id, $notification_id, $verbose);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getStatusUsingGET2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the notification |
 **notification_id** | **int**| The ID of the notification to return |
 **verbose** | **bool**| A boolean indicating whether to return detailed results | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\RestfulInstanceResult**](../Model/RestfulInstanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **initNotificationUsingPOST2**
> \Swagger\Client\Model\RestfulModificationResult initNotificationUsingPOST2($authorization, $organization_id, $notification)

Initiate an immediate notification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The organization from which to initiate the notification
$notification = new \Swagger\Client\Model\NotificationWrapper(); // \Swagger\Client\Model\NotificationWrapper | A Notification object to send.  Note that only notifications with launchtype of SendNow are accepted by this method.  To create scheduled or recurring notifications, use the /launchPolicies method.

try {
    $result = $apiInstance->initNotificationUsingPOST2($authorization, $organization_id, $notification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->initNotificationUsingPOST2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The organization from which to initiate the notification |
 **notification** | [**\Swagger\Client\Model\NotificationWrapper**](../Model/NotificationWrapper.md)| A Notification object to send.  Note that only notifications with launchtype of SendNow are accepted by this method.  To create scheduled or recurring notifications, use the /launchPolicies method. |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryContactPathsUsingGET3**
> \Swagger\Client\Model\RestfulCollectionResult queryContactPathsUsingGET3($authorization, $organization_id, $notification_event_id, $only_active, $page_number)

Retrieve all notifications for an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the notifications
$notification_event_id = -1; // int | Restrict returned notifications to a specific notificationEvent
$only_active = false; // bool | Boolean value indicating whether only active broadcasts should be returned.
$page_number = 1; // int | The page number of notifications to return.

try {
    $result = $apiInstance->queryContactPathsUsingGET3($authorization, $organization_id, $notification_event_id, $only_active, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->queryContactPathsUsingGET3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the notifications |
 **notification_event_id** | **int**| Restrict returned notifications to a specific notificationEvent | [optional] [default to -1]
 **only_active** | **bool**| Boolean value indicating whether only active broadcasts should be returned. | [optional] [default to false]
 **page_number** | **int**| The page number of notifications to return. | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\RestfulCollectionResult**](../Model/RestfulCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryNotificationWithStartDateRangeUsingGET**
> \Swagger\Client\Model\RestfulCollectionResult queryNotificationWithStartDateRangeUsingGET($authorization, $organization_id, $start_time, $end_time, $notification_status, $page_number)

Retrieve all notifications for an organization with start date range

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the notification reports
$start_time = -1; // int | The range of notification start date begin time
$end_time = -1; // int | The range of notification start date end time
$notification_status = "notification_status_example"; // string | The status of notification processing
$page_number = 1; // int | The page number of the notification reports to return.

try {
    $result = $apiInstance->queryNotificationWithStartDateRangeUsingGET($authorization, $organization_id, $start_time, $end_time, $notification_status, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->queryNotificationWithStartDateRangeUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the notification reports |
 **start_time** | **int**| The range of notification start date begin time | [optional] [default to -1]
 **end_time** | **int**| The range of notification start date end time | [optional] [default to -1]
 **notification_status** | **string**| The status of notification processing | [optional]
 **page_number** | **int**| The page number of the notification reports to return. | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\RestfulCollectionResult**](../Model/RestfulCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateNotificationUsingPUT1**
> \Swagger\Client\Model\RestfulModificationResult updateNotificationUsingPUT1($authorization, $organization_id, $notification_id, $notification)

Update a notification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The organization from which to initiate the notification
$notification_id = 789; // int | The ID of the notification to return
$notification = new \Swagger\Client\Model\NotificationWrapper(); // \Swagger\Client\Model\NotificationWrapper | A Notification object defining the state of the updated notification

try {
    $result = $apiInstance->updateNotificationUsingPUT1($authorization, $organization_id, $notification_id, $notification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->updateNotificationUsingPUT1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The organization from which to initiate the notification |
 **notification_id** | **int**| The ID of the notification to return |
 **notification** | [**\Swagger\Client\Model\NotificationWrapper**](../Model/NotificationWrapper.md)| A Notification object defining the state of the updated notification |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

