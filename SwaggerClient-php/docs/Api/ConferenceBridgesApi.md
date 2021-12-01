# Swagger\Client\ConferenceBridgesApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addConferenceBridgeUsingPOST**](ConferenceBridgesApi.md#addConferenceBridgeUsingPOST) | **POST** /conferenceBridges/{organizationId} | Create a new conferenceBridge within an organization
[**deleteConferenceBridgeUsingDELETE**](ConferenceBridgesApi.md#deleteConferenceBridgeUsingDELETE) | **DELETE** /conferenceBridges/{organizationId}/{id} | Delete the specified conferenceBridge from an organization
[**getConferenceBridgeUsingGET**](ConferenceBridgesApi.md#getConferenceBridgeUsingGET) | **GET** /conferenceBridges/{organizationId}/{id} | Retrieve the specified conferenceBridge within an organization
[**queryConferenceBridgesUsingGET**](ConferenceBridgesApi.md#queryConferenceBridgesUsingGET) | **GET** /conferenceBridges/{organizationId} | Retrieve all conferenceBridges for an organization
[**updateConferenceBridgeUsingPUT**](ConferenceBridgesApi.md#updateConferenceBridgeUsingPUT) | **PUT** /conferenceBridges/{organizationId}/{id} | Update a conferenceBridge within an organization


# **addConferenceBridgeUsingPOST**
> \Swagger\Client\Model\RestfulModificationResult addConferenceBridgeUsingPOST($authorization, $organization_id, $conference_bridge)

Create a new conferenceBridge within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConferenceBridgesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the conferenceBridge
$conference_bridge = new \Swagger\Client\Model\ConferenceBridgeWrapper(); // \Swagger\Client\Model\ConferenceBridgeWrapper | JSON object describing the new conferenceBridge

try {
    $result = $apiInstance->addConferenceBridgeUsingPOST($authorization, $organization_id, $conference_bridge);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConferenceBridgesApi->addConferenceBridgeUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the conferenceBridge |
 **conference_bridge** | [**\Swagger\Client\Model\ConferenceBridgeWrapper**](../Model/ConferenceBridgeWrapper.md)| JSON object describing the new conferenceBridge |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteConferenceBridgeUsingDELETE**
> \Swagger\Client\Model\RestfulModificationResult deleteConferenceBridgeUsingDELETE($authorization, $organization_id, $id, $id_type)

Delete the specified conferenceBridge from an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConferenceBridgesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the conferenceBridge
$id = "id_example"; // string | The ID of the conferenceBridge to delete
$id_type = "id"; // string | Whether to search by conferenceBridge.id or conferenceBridge.name.

try {
    $result = $apiInstance->deleteConferenceBridgeUsingDELETE($authorization, $organization_id, $id, $id_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConferenceBridgesApi->deleteConferenceBridgeUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the conferenceBridge |
 **id** | **string**| The ID of the conferenceBridge to delete |
 **id_type** | **string**| Whether to search by conferenceBridge.id or conferenceBridge.name. | [optional] [default to id]

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConferenceBridgeUsingGET**
> \Swagger\Client\Model\ConferenceBridgeWrapperCollectionResult getConferenceBridgeUsingGET($authorization, $organization_id, $id, $id_type)

Retrieve the specified conferenceBridge within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConferenceBridgesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the conferenceBridge
$id = "id_example"; // string | The ID of the conferenceBridge to return
$id_type = "id"; // string | Whether to search by conferenceBridge.id or conferenceBridge.name.

try {
    $result = $apiInstance->getConferenceBridgeUsingGET($authorization, $organization_id, $id, $id_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConferenceBridgesApi->getConferenceBridgeUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the conferenceBridge |
 **id** | **string**| The ID of the conferenceBridge to return |
 **id_type** | **string**| Whether to search by conferenceBridge.id or conferenceBridge.name. | [optional] [default to id]

### Return type

[**\Swagger\Client\Model\ConferenceBridgeWrapperCollectionResult**](../Model/ConferenceBridgeWrapperCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryConferenceBridgesUsingGET**
> \Swagger\Client\Model\RestfulCollectionResult queryConferenceBridgesUsingGET($authorization, $organization_id, $page_number)

Retrieve all conferenceBridges for an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConferenceBridgesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the conferenceBridges
$page_number = 1; // int | The page number of conferenceBridges to return.

try {
    $result = $apiInstance->queryConferenceBridgesUsingGET($authorization, $organization_id, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConferenceBridgesApi->queryConferenceBridgesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the conferenceBridges |
 **page_number** | **int**| The page number of conferenceBridges to return. | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\RestfulCollectionResult**](../Model/RestfulCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateConferenceBridgeUsingPUT**
> \Swagger\Client\Model\RestfulModificationResult updateConferenceBridgeUsingPUT($authorization, $organization_id, $id, $conference_bridge, $id_type)

Update a conferenceBridge within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ConferenceBridgesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the conferenceBridge
$id = "id_example"; // string | The ID of the conferenceBridge to update
$conference_bridge = new \Swagger\Client\Model\ConferenceBridgeWrapper(); // \Swagger\Client\Model\ConferenceBridgeWrapper | JSON object describing the updated conferenceBridge
$id_type = "id"; // string | Whether to search by conferenceBridge.id or conferenceBridge.name.

try {
    $result = $apiInstance->updateConferenceBridgeUsingPUT($authorization, $organization_id, $id, $conference_bridge, $id_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConferenceBridgesApi->updateConferenceBridgeUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the conferenceBridge |
 **id** | **string**| The ID of the conferenceBridge to update |
 **conference_bridge** | [**\Swagger\Client\Model\ConferenceBridgeWrapper**](../Model/ConferenceBridgeWrapper.md)| JSON object describing the updated conferenceBridge |
 **id_type** | **string**| Whether to search by conferenceBridge.id or conferenceBridge.name. | [optional] [default to id]

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

