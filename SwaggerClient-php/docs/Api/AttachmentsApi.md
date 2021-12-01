# Swagger\Client\AttachmentsApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAttachmentUsingGET**](AttachmentsApi.md#getAttachmentUsingGET) | **GET** /attachments/{organizationId}/{fileId} | Retrieve a specific attachment
[**uploadAttachmentUsingPOST**](AttachmentsApi.md#uploadAttachmentUsingPOST) | **POST** /attachments/{organizationId} | Upload an attachment file to use in notifications


# **getAttachmentUsingGET**
> \Swagger\Client\Model\FileAttachmentWrapperInstanceResult getAttachmentUsingGET($authorization, $organization_id, $file_id, $return_type)

Retrieve a specific attachment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization in which to find the attachment
$file_id = "file_id_example"; // string | The ID of the attachment
$return_type = "data"; // string | Return the raw attachment file or the record associated with that file.

try {
    $result = $apiInstance->getAttachmentUsingGET($authorization, $organization_id, $file_id, $return_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->getAttachmentUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization in which to find the attachment |
 **file_id** | **string**| The ID of the attachment |
 **return_type** | **string**| Return the raw attachment file or the record associated with that file. | [optional] [default to data]

### Return type

[**\Swagger\Client\Model\FileAttachmentWrapperInstanceResult**](../Model/FileAttachmentWrapperInstanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadAttachmentUsingPOST**
> \Swagger\Client\Model\AttachmentRestfulModificationResult uploadAttachmentUsingPOST($authorization, $organization_id, $file)

Upload an attachment file to use in notifications

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the attachment
$file = "/path/to/file.txt"; // \SplFileObject | Multipart file upload body

try {
    $result = $apiInstance->uploadAttachmentUsingPOST($authorization, $organization_id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->uploadAttachmentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the attachment |
 **file** | **\SplFileObject**| Multipart file upload body |

### Return type

[**\Swagger\Client\Model\AttachmentRestfulModificationResult**](../Model/AttachmentRestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

