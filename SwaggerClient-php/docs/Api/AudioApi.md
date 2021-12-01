# Swagger\Client\AudioApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAudioUsingGET**](AudioApi.md#getAudioUsingGET) | **GET** /audio/{organizationId}/{audioId} | Retrieve a specific audio
[**uploadAudioUsingPOST**](AudioApi.md#uploadAudioUsingPOST) | **POST** /audio/{organizationId} | Upload an audio file to use in notifications


# **getAudioUsingGET**
> \Swagger\Client\Model\AudioWrapperInstanceResult getAudioUsingGET($authorization, $organization_id, $audio_id, $return_type)

Retrieve a specific audio

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization in which to find the audio
$audio_id = "audio_id_example"; // string | The ID of the audio
$return_type = "data"; // string | Return the raw audio file or the record associated with that file.

try {
    $result = $apiInstance->getAudioUsingGET($authorization, $organization_id, $audio_id, $return_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudioApi->getAudioUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization in which to find the audio |
 **audio_id** | **string**| The ID of the audio |
 **return_type** | **string**| Return the raw audio file or the record associated with that file. | [optional] [default to data]

### Return type

[**\Swagger\Client\Model\AudioWrapperInstanceResult**](../Model/AudioWrapperInstanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, audio/wav

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadAudioUsingPOST**
> \Swagger\Client\Model\AudioRestfulModificationResult uploadAudioUsingPOST($authorization, $organization_id, $file)

Upload an audio file to use in notifications

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contact filters
$file = "/path/to/file.txt"; // \SplFileObject | Multipart file upload body

try {
    $result = $apiInstance->uploadAudioUsingPOST($authorization, $organization_id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudioApi->uploadAudioUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contact filters |
 **file** | **\SplFileObject**| Multipart file upload body |

### Return type

[**\Swagger\Client\Model\AudioRestfulModificationResult**](../Model/AudioRestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

