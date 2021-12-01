# Swagger\Client\ConstantsApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**queryConstantsUsingGET**](ConstantsApi.md#queryConstantsUsingGET) | **GET** /constants/{type} | Retrieve all constant values for a given type


# **queryConstantsUsingGET**
> \Swagger\Client\Model\RestfulCollectionResult queryConstantsUsingGET($authorization, $type)

Retrieve all constant values for a given type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConstantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$type = "type_example"; // string | Type of constants to retrieve.

try {
    $result = $apiInstance->queryConstantsUsingGET($authorization, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstantsApi->queryConstantsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **type** | **string**| Type of constants to retrieve. |

### Return type

[**\Swagger\Client\Model\RestfulCollectionResult**](../Model/RestfulCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

