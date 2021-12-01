# Swagger\Client\ResidentsApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**queryResidentsByFiltersUsingPOST**](ResidentsApi.md#queryResidentsByFiltersUsingPOST) | **POST** /residents/{organizationId}/query | Search residents by shape, address or property


# **queryResidentsByFiltersUsingPOST**
> \Swagger\Client\Model\JsonResult queryResidentsByFiltersUsingPOST($authorization, $resident_filters_wrapper, $organization_id, $page, $page_size)

Search residents by shape, address or property

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ResidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$resident_filters_wrapper = new \Swagger\Client\Model\ResidentFiltersWrapper(); // \Swagger\Client\Model\ResidentFiltersWrapper | residentFiltersWrapper
$organization_id = 789; // int | The ID of the organization which the user belongs to
$page = 1; // int | Page to query.
$page_size = 25; // int | Page size to query.

try {
    $result = $apiInstance->queryResidentsByFiltersUsingPOST($authorization, $resident_filters_wrapper, $organization_id, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResidentsApi->queryResidentsByFiltersUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **resident_filters_wrapper** | [**\Swagger\Client\Model\ResidentFiltersWrapper**](../Model/ResidentFiltersWrapper.md)| residentFiltersWrapper |
 **organization_id** | **int**| The ID of the organization which the user belongs to |
 **page** | **int**| Page to query. | [optional] [default to 1]
 **page_size** | **int**| Page size to query. | [optional] [default to 25]

### Return type

[**\Swagger\Client\Model\JsonResult**](../Model/JsonResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

