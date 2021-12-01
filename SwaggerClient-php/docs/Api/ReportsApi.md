# Swagger\Client\ReportsApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**queryUsingGET**](ReportsApi.md#queryUsingGET) | **GET** /reports/auditLog | Retrieve event log report data


# **queryUsingGET**
> \Swagger\Client\Model\DataPage queryUsingGET($authorization, $from, $to, $report_type, $query_type, $scroll_id, $page_no)

Retrieve event log report data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Authorization header
$from = "from_example"; // string | Start date in format ‘yyyy-MM-dd’
$to = "to_example"; // string | End date in format ‘yyyy-MM-dd’
$report_type = "report_type_example"; // string | Security or Contact
$query_type = "pageQuery"; // string | By page query or scroll.
$scroll_id = "scroll_id_example"; // string | scrollId.
$page_no = 1; // int | Page number.

try {
    $result = $apiInstance->queryUsingGET($authorization, $from, $to, $report_type, $query_type, $scroll_id, $page_no);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->queryUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization header |
 **from** | **string**| Start date in format ‘yyyy-MM-dd’ |
 **to** | **string**| End date in format ‘yyyy-MM-dd’ |
 **report_type** | **string**| Security or Contact |
 **query_type** | **string**| By page query or scroll. | [optional] [default to pageQuery]
 **scroll_id** | **string**| scrollId. | [optional]
 **page_no** | **int**| Page number. | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\DataPage**](../Model/DataPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

