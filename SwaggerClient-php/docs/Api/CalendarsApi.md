# Swagger\Client\CalendarsApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**queryCalendarsUsingGET**](CalendarsApi.md#queryCalendarsUsingGET) | **GET** /calendars/{organizationId} | Retrieve all active Scheduling calendars for an organization


# **queryCalendarsUsingGET**
> \Swagger\Client\Model\CalendarWrapperCollectionResult queryCalendarsUsingGET($authorization, $organization_id, $page_number)

Retrieve all active Scheduling calendars for an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CalendarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the calendars.
$page_number = 1; // int | The page number of calendars to return.

try {
    $result = $apiInstance->queryCalendarsUsingGET($authorization, $organization_id, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarsApi->queryCalendarsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the calendars. |
 **page_number** | **int**| The page number of calendars to return. | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\CalendarWrapperCollectionResult**](../Model/CalendarWrapperCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

