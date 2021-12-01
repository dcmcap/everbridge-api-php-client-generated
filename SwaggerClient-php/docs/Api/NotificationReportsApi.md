# Swagger\Client\NotificationReportsApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getNotificationReportLogsUsingGET**](NotificationReportsApi.md#getNotificationReportLogsUsingGET) | **GET** /notificationReports/{organizationId}/{notificationId} | Retrieve the report of a notification within an organization


# **getNotificationReportLogsUsingGET**
> \Swagger\Client\Model\RestfulCollectionResult getNotificationReportLogsUsingGET($authorization, $organization_id, $notification_id, $contact_status, $query_type, $since_date, $scroll_id, $page_number)

Retrieve the report of a notification within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotificationReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the notification reports
$notification_id = 789; // int | The ID of the notification containing the notification reports
$contact_status = "contact_status_example"; // string | Filter notification reports by contact status.
$query_type = "pageQuery"; // string | By page query or scroll.
$since_date = 789; // int | Retrieve data modified since that date time, like '1526986170000'
$scroll_id = "scroll_id_example"; // string | scrollId.
$page_number = 1; // int | The page number of the notification reports to return.

try {
    $result = $apiInstance->getNotificationReportLogsUsingGET($authorization, $organization_id, $notification_id, $contact_status, $query_type, $since_date, $scroll_id, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationReportsApi->getNotificationReportLogsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the notification reports |
 **notification_id** | **int**| The ID of the notification containing the notification reports |
 **contact_status** | **string**| Filter notification reports by contact status. | [optional]
 **query_type** | **string**| By page query or scroll. | [optional] [default to pageQuery]
 **since_date** | **int**| Retrieve data modified since that date time, like &#39;1526986170000&#39; | [optional]
 **scroll_id** | **string**| scrollId. | [optional]
 **page_number** | **int**| The page number of the notification reports to return. | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\RestfulCollectionResult**](../Model/RestfulCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

