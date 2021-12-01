# Swagger\Client\AssetsApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAssetUsingPOST**](AssetsApi.md#addAssetUsingPOST) | **POST** /assets/{organizationId} | Create a new asset to an organization.
[**addAssetsUsingPOST**](AssetsApi.md#addAssetsUsingPOST) | **POST** /assets/{organizationId}/batch | Create assets to an organization.
[**deleteAssetUsingDELETE**](AssetsApi.md#deleteAssetUsingDELETE) | **DELETE** /assets/{organizationId}/{id} | Delete the specified asset within an organization.
[**getAssetUsingGET**](AssetsApi.md#getAssetUsingGET) | **GET** /assets/{organizationId}/{id} | Retrieve the specified asset within an organization.
[**queryUploadDynamicLocationsUsingGET**](AssetsApi.md#queryUploadDynamicLocationsUsingGET) | **GET** /assets/{organizationId} | Retrieve all assets for an organization id
[**updateAssetUsingPUT**](AssetsApi.md#updateAssetUsingPUT) | **PUT** /assets/{organizationId}/{id} | Update the specified asset within an organization.


# **addAssetUsingPOST**
> \Swagger\Client\Model\RestfulModificationResult addAssetUsingPOST($authorization, $organization_id, $asset, $auto_geo_coding)

Create a new asset to an organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization Header
$organization_id = 789; // int | The organization ID
$asset = new \Swagger\Client\Model\AssetWrapper(); // \Swagger\Client\Model\AssetWrapper | JSON object describing the new asset
$auto_geo_coding = false; // bool | Whether automatically geo coding

try {
    $result = $apiInstance->addAssetUsingPOST($authorization, $organization_id, $asset, $auto_geo_coding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->addAssetUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization Header |
 **organization_id** | **int**| The organization ID |
 **asset** | [**\Swagger\Client\Model\AssetWrapper**](../Model/AssetWrapper.md)| JSON object describing the new asset |
 **auto_geo_coding** | **bool**| Whether automatically geo coding | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addAssetsUsingPOST**
> \Swagger\Client\Model\RestfulBatchOperationResult addAssetsUsingPOST($authorization, $organization_id, $assets, $auto_geo_coding)

Create assets to an organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization Header
$organization_id = 789; // int | The organization ID
$assets = array(new \Swagger\Client\Model\AssetWrapper()); // \Swagger\Client\Model\AssetWrapper[] | JSON array describing new assets
$auto_geo_coding = false; // bool | Whether automatically geo coding

try {
    $result = $apiInstance->addAssetsUsingPOST($authorization, $organization_id, $assets, $auto_geo_coding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->addAssetsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization Header |
 **organization_id** | **int**| The organization ID |
 **assets** | [**\Swagger\Client\Model\AssetWrapper[]**](../Model/AssetWrapper.md)| JSON array describing new assets |
 **auto_geo_coding** | **bool**| Whether automatically geo coding | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\RestfulBatchOperationResult**](../Model/RestfulBatchOperationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAssetUsingDELETE**
> \Swagger\Client\Model\RestfulModificationResult deleteAssetUsingDELETE($authorization, $organization_id, $id, $force_delete)

Delete the specified asset within an organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization Header
$organization_id = 789; // int | The organization ID
$id = 789; // int | The asset ID
$force_delete = false; // bool | Whether to unlink and forcibly delete the asset

try {
    $result = $apiInstance->deleteAssetUsingDELETE($authorization, $organization_id, $id, $force_delete);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->deleteAssetUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization Header |
 **organization_id** | **int**| The organization ID |
 **id** | **int**| The asset ID |
 **force_delete** | **bool**| Whether to unlink and forcibly delete the asset | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssetUsingGET**
> \Swagger\Client\Model\RestfulInstanceResult getAssetUsingGET($authorization, $organization_id, $id, $id_type)

Retrieve the specified asset within an organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization Header
$organization_id = 789; // int | The organization ID
$id = "id_example"; // string | The asset ID or externalId
$id_type = "id"; // string | Whether to search by the asset id or asset externalId

try {
    $result = $apiInstance->getAssetUsingGET($authorization, $organization_id, $id, $id_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAssetUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization Header |
 **organization_id** | **int**| The organization ID |
 **id** | **string**| The asset ID or externalId |
 **id_type** | **string**| Whether to search by the asset id or asset externalId | [optional] [default to id]

### Return type

[**\Swagger\Client\Model\RestfulInstanceResult**](../Model/RestfulInstanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryUploadDynamicLocationsUsingGET**
> \Swagger\Client\Model\AssetWrapperCollectionResult queryUploadDynamicLocationsUsingGET($authorization, $organization_id, $page_number)

Retrieve all assets for an organization id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization Header
$organization_id = 789; // int | The organization ID
$page_number = 1; // int | The page number of assets to return.

try {
    $result = $apiInstance->queryUploadDynamicLocationsUsingGET($authorization, $organization_id, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->queryUploadDynamicLocationsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization Header |
 **organization_id** | **int**| The organization ID |
 **page_number** | **int**| The page number of assets to return. | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\AssetWrapperCollectionResult**](../Model/AssetWrapperCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAssetUsingPUT**
> \Swagger\Client\Model\RestfulModificationResult updateAssetUsingPUT($authorization, $organization_id, $id, $asset, $auto_geo_coding)

Update the specified asset within an organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization Header
$organization_id = 789; // int | The organization ID
$id = 789; // int | The asset ID
$asset = new \Swagger\Client\Model\AssetWrapper(); // \Swagger\Client\Model\AssetWrapper | JSON object describing the asset to update
$auto_geo_coding = false; // bool | Whether automatically geo coding

try {
    $result = $apiInstance->updateAssetUsingPUT($authorization, $organization_id, $id, $asset, $auto_geo_coding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->updateAssetUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization Header |
 **organization_id** | **int**| The organization ID |
 **id** | **int**| The asset ID |
 **asset** | [**\Swagger\Client\Model\AssetWrapper**](../Model/AssetWrapper.md)| JSON object describing the asset to update |
 **auto_geo_coding** | **bool**| Whether automatically geo coding | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

