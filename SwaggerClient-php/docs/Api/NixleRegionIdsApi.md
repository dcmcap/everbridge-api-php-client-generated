# Swagger\Client\NixleRegionIdsApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**queryNixleRegionIdsUsingGET**](NixleRegionIdsApi.md#queryNixleRegionIdsUsingGET) | **GET** /nixleRegionIds/{organizationId} | Get City/Town, County or ZIP Code within jurisdiction


# **queryNixleRegionIdsUsingGET**
> \Swagger\Client\Model\NixleRegionIdCollectionResult queryNixleRegionIdsUsingGET($authorization, $organization_id)

Get City/Town, County or ZIP Code within jurisdiction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NixleRegionIdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization

try {
    $result = $apiInstance->queryNixleRegionIdsUsingGET($authorization, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NixleRegionIdsApi->queryNixleRegionIdsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization |

### Return type

[**\Swagger\Client\Model\NixleRegionIdCollectionResult**](../Model/NixleRegionIdCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

