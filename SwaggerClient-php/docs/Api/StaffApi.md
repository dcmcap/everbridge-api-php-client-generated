# Swagger\Client\StaffApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStaffAssignedByCalendarExternalIdUsingGET**](StaffApi.md#getStaffAssignedByCalendarExternalIdUsingGET) | **GET** /staff/{organizationId}/assignment/{externalId} | Retrieve all the contacts by calendar external id within an organization based on a date and time.


# **getStaffAssignedByCalendarExternalIdUsingGET**
> \Swagger\Client\Model\CalendarStaffShiftAssignmentsWrapperInstanceResult getStaffAssignedByCalendarExternalIdUsingGET($authorization, $organization_id, $external_id, $shift_name, $from, $to)

Retrieve all the contacts by calendar external id within an organization based on a date and time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StaffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contacts
$external_id = "external_id_example"; // string | The external id of calendar
$shift_name = "shift_name_example"; // string | The name of the shift
$from = "from_example"; // string | The beginning date time range, leaving empty will use the current time.
$to = "to_example"; // string | The ending date time range, leaving empty will use the current time.

try {
    $result = $apiInstance->getStaffAssignedByCalendarExternalIdUsingGET($authorization, $organization_id, $external_id, $shift_name, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffApi->getStaffAssignedByCalendarExternalIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contacts |
 **external_id** | **string**| The external id of calendar |
 **shift_name** | **string**| The name of the shift | [optional]
 **from** | **string**| The beginning date time range, leaving empty will use the current time. | [optional]
 **to** | **string**| The ending date time range, leaving empty will use the current time. | [optional]

### Return type

[**\Swagger\Client\Model\CalendarStaffShiftAssignmentsWrapperInstanceResult**](../Model/CalendarStaffShiftAssignmentsWrapperInstanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

