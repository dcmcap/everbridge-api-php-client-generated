# Swagger\Client\LocationSourceApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLocationSourceDataUsingGET**](LocationSourceApi.md#getLocationSourceDataUsingGET) | **GET** /locationSource/{organizationId}/{locationId} | Retrieve Location Source Data by ID.
[**getLocationSourceDataUsingGET1**](LocationSourceApi.md#getLocationSourceDataUsingGET1) | **GET** /locationSource/{organizationId} | Retrieve Location Source Data.
[**getLocationSourceDatasUsingPOST**](LocationSourceApi.md#getLocationSourceDatasUsingPOST) | **POST** /locationSource/{organizationId}/BatchGet | Batch Get Location Source Data.


# **getLocationSourceDataUsingGET**
> \Swagger\Client\Model\LocationSourceDataInstanceResult getLocationSourceDataUsingGET($authorization, $organization_id, $location_id)

Retrieve Location Source Data by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LocationSourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization Header
$organization_id = 789; // int | Organization ID.
$location_id = 789; // int | Location ID.

try {
    $result = $apiInstance->getLocationSourceDataUsingGET($authorization, $organization_id, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationSourceApi->getLocationSourceDataUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization Header |
 **organization_id** | **int**| Organization ID. |
 **location_id** | **int**| Location ID. |

### Return type

[**\Swagger\Client\Model\LocationSourceDataInstanceResult**](../Model/LocationSourceDataInstanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLocationSourceDataUsingGET1**
> \Swagger\Client\Model\LocationSourceDataCollectionResult getLocationSourceDataUsingGET1($authorization, $organization_id, $pnr, $supplier_code, $number, $supplier_name, $iata, $start_time, $end_time, $top)

Retrieve Location Source Data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LocationSourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization Header
$organization_id = 789; // int | Organization ID.
$pnr = "pnr_example"; // string | PNR
$supplier_code = "supplier_code_example"; // string | supplierCode
$number = "number_example"; // string | number
$supplier_name = "supplier_name_example"; // string | supplierName
$iata = "iata_example"; // string | IATA
$start_time = "start_time_example"; // string | startTime
$end_time = "end_time_example"; // string | endTime
$top = "top_example"; // string | top

try {
    $result = $apiInstance->getLocationSourceDataUsingGET1($authorization, $organization_id, $pnr, $supplier_code, $number, $supplier_name, $iata, $start_time, $end_time, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationSourceApi->getLocationSourceDataUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization Header |
 **organization_id** | **int**| Organization ID. |
 **pnr** | **string**| PNR | [optional]
 **supplier_code** | **string**| supplierCode | [optional]
 **number** | **string**| number | [optional]
 **supplier_name** | **string**| supplierName | [optional]
 **iata** | **string**| IATA | [optional]
 **start_time** | **string**| startTime | [optional]
 **end_time** | **string**| endTime | [optional]
 **top** | **string**| top | [optional]

### Return type

[**\Swagger\Client\Model\LocationSourceDataCollectionResult**](../Model/LocationSourceDataCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLocationSourceDatasUsingPOST**
> \Swagger\Client\Model\LocationSourceDataCollectionResult getLocationSourceDatasUsingPOST($authorization, $organization_id, $location_ids)

Batch Get Location Source Data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LocationSourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization Header
$organization_id = 789; // int | Organization ID.
$location_ids = new \Swagger\Client\Model\LocationSourceDataParameterModel(); // \Swagger\Client\Model\LocationSourceDataParameterModel | Array object of the Location ID.

try {
    $result = $apiInstance->getLocationSourceDatasUsingPOST($authorization, $organization_id, $location_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationSourceApi->getLocationSourceDatasUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization Header |
 **organization_id** | **int**| Organization ID. |
 **location_ids** | [**\Swagger\Client\Model\LocationSourceDataParameterModel**](../Model/LocationSourceDataParameterModel.md)| Array object of the Location ID. |

### Return type

[**\Swagger\Client\Model\LocationSourceDataCollectionResult**](../Model/LocationSourceDataCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

