# Swagger\Client\ShapeLibraryApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteUsingDELETE1**](ShapeLibraryApi.md#deleteUsingDELETE1) | **DELETE** /shapeLibrary/{organizationId} | Delete shape file
[**uploadUsingPOST1**](ShapeLibraryApi.md#uploadUsingPOST1) | **POST** /shapeLibrary/{organizationId} | Upload shape file


# **deleteUsingDELETE1**
> \Swagger\Client\Model\RestfulModificationResult deleteUsingDELETE1($authorization, $organization_id, $region_name)

Delete shape file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShapeLibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contacts
$region_name = "region_name_example"; // string | Region name you want to delete

try {
    $result = $apiInstance->deleteUsingDELETE1($authorization, $organization_id, $region_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShapeLibraryApi->deleteUsingDELETE1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contacts |
 **region_name** | **string**| Region name you want to delete |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadUsingPOST1**
> \Swagger\Client\Model\RestfulModificationResult uploadUsingPOST1($authorization, $organization_id, $region_name, $file, $folder)

Upload shape file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ShapeLibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contacts
$region_name = "region_name_example"; // string | The region name of shape file saved under folder, the region name can't be the same with the existsed one.
$file = "/path/to/file.txt"; // \SplFileObject | The MultipartFile shape file body, we have the limit here: only support .zip and .kml file, the maximum size of  .zip file as 1MB and .kml file as 3MB
$folder = "folder_example"; // string | The folder where shape file saved, if null will saved under root directory, if folder not exist, will create a new one

try {
    $result = $apiInstance->uploadUsingPOST1($authorization, $organization_id, $region_name, $file, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShapeLibraryApi->uploadUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contacts |
 **region_name** | **string**| The region name of shape file saved under folder, the region name can&#39;t be the same with the existsed one. |
 **file** | **\SplFileObject**| The MultipartFile shape file body, we have the limit here: only support .zip and .kml file, the maximum size of  .zip file as 1MB and .kml file as 3MB |
 **folder** | **string**| The folder where shape file saved, if null will saved under root directory, if folder not exist, will create a new one | [optional]

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

