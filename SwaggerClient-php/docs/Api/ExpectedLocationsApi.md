# Swagger\Client\ExpectedLocationsApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addExpectedLocationsUsingPOST**](ExpectedLocationsApi.md#addExpectedLocationsUsingPOST) | **POST** /expectedLocations/{organizationId} | Batch create Expected Locations.
[**deleteBatchUsingDELETE**](ExpectedLocationsApi.md#deleteBatchUsingDELETE) | **DELETE** /expectedLocations/{organizationId}/batch | Batch Delete Expected Locatioins.
[**deleteUsingDELETE**](ExpectedLocationsApi.md#deleteUsingDELETE) | **DELETE** /expectedLocations/{organizationId}/{contactId}/{expectedLocationId} | Delete Expected Location by ID.
[**getExpectedLocationUsingGET**](ExpectedLocationsApi.md#getExpectedLocationUsingGET) | **GET** /expectedLocations/{organizationId}/{contactId} | Retrieve all Expected Locations of a contact.
[**getExpectedLocationUsingGET1**](ExpectedLocationsApi.md#getExpectedLocationUsingGET1) | **GET** /expectedLocations/{organizationId}/{contactId}/{expectedLocationId} | Retrieve Expected Location by ID.
[**saveUsingPOST**](ExpectedLocationsApi.md#saveUsingPOST) | **POST** /expectedLocations/{organizationId}/{contactId} | Create new Expected Location.
[**updateUsingPUT**](ExpectedLocationsApi.md#updateUsingPUT) | **PUT** /expectedLocations/{organizationId}/{contactId}/{expectedLocationId} | Update Expected Location by ID.


# **addExpectedLocationsUsingPOST**
> \Swagger\Client\Model\RestfulBatchOperationResult addExpectedLocationsUsingPOST($authorization, $organization_id, $expected_locations, $contact_id_type, $return_ids)

Batch create Expected Locations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ExpectedLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization Header
$organization_id = 789; // int | Organization ID.
$expected_locations = array(new \Swagger\Client\Model\ExpectedLocationWrapper()); // \Swagger\Client\Model\ExpectedLocationWrapper[] | JSON object of the new Expected Locations
$contact_id_type = "id"; // string | Contact ID type, contact ID or contact external ID.
$return_ids = false; // bool | If include created expected location Ids in the response.

try {
    $result = $apiInstance->addExpectedLocationsUsingPOST($authorization, $organization_id, $expected_locations, $contact_id_type, $return_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpectedLocationsApi->addExpectedLocationsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization Header |
 **organization_id** | **int**| Organization ID. |
 **expected_locations** | [**\Swagger\Client\Model\ExpectedLocationWrapper[]**](../Model/ExpectedLocationWrapper.md)| JSON object of the new Expected Locations |
 **contact_id_type** | **string**| Contact ID type, contact ID or contact external ID. | [optional] [default to id]
 **return_ids** | **bool**| If include created expected location Ids in the response. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\RestfulBatchOperationResult**](../Model/RestfulBatchOperationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBatchUsingDELETE**
> \Swagger\Client\Model\RestfulInstanceResult deleteBatchUsingDELETE($organization_id, $authorization, $ids)

Batch Delete Expected Locatioins.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ExpectedLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | Organization ID.
$authorization = "authorization_example"; // string | Basic Authorization Header
$ids = array(new \Swagger\Client\Model\string[]()); // string[] | JSON object of ids

try {
    $result = $apiInstance->deleteBatchUsingDELETE($organization_id, $authorization, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpectedLocationsApi->deleteBatchUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| Organization ID. |
 **authorization** | **string**| Basic Authorization Header |
 **ids** | **string[]**| JSON object of ids |

### Return type

[**\Swagger\Client\Model\RestfulInstanceResult**](../Model/RestfulInstanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUsingDELETE**
> \Swagger\Client\Model\RestfulInstanceResult deleteUsingDELETE($organization_id, $contact_id, $expected_location_id, $authorization, $contact_id_type)

Delete Expected Location by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ExpectedLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | Organization ID.
$contact_id = "contact_id_example"; // string | Contact ID.
$expected_location_id = 789; // int | Expected Location ID
$authorization = "authorization_example"; // string | Basic Authorization Header
$contact_id_type = "id"; // string | Contact ID type, contact ID or contact external ID.

try {
    $result = $apiInstance->deleteUsingDELETE($organization_id, $contact_id, $expected_location_id, $authorization, $contact_id_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpectedLocationsApi->deleteUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| Organization ID. |
 **contact_id** | **string**| Contact ID. |
 **expected_location_id** | **int**| Expected Location ID |
 **authorization** | **string**| Basic Authorization Header |
 **contact_id_type** | **string**| Contact ID type, contact ID or contact external ID. | [optional] [default to id]

### Return type

[**\Swagger\Client\Model\RestfulInstanceResult**](../Model/RestfulInstanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExpectedLocationUsingGET**
> \Swagger\Client\Model\ExpectedLocationCollectionResult getExpectedLocationUsingGET($organization_id, $contact_id, $authorization, $contact_id_type)

Retrieve all Expected Locations of a contact.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ExpectedLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | Organization ID.
$contact_id = "contact_id_example"; // string | Contact ID.
$authorization = "authorization_example"; // string | Basic Authorization Header
$contact_id_type = "id"; // string | Contact ID type, contact ID or contact external ID.

try {
    $result = $apiInstance->getExpectedLocationUsingGET($organization_id, $contact_id, $authorization, $contact_id_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpectedLocationsApi->getExpectedLocationUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| Organization ID. |
 **contact_id** | **string**| Contact ID. |
 **authorization** | **string**| Basic Authorization Header |
 **contact_id_type** | **string**| Contact ID type, contact ID or contact external ID. | [optional] [default to id]

### Return type

[**\Swagger\Client\Model\ExpectedLocationCollectionResult**](../Model/ExpectedLocationCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExpectedLocationUsingGET1**
> \Swagger\Client\Model\ExpectedLocationInstanceResult getExpectedLocationUsingGET1($organization_id, $contact_id, $expected_location_id, $authorization, $contact_id_type)

Retrieve Expected Location by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ExpectedLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | Organization ID.
$contact_id = "contact_id_example"; // string | Contact ID.
$expected_location_id = 789; // int | Expected Location ID.
$authorization = "authorization_example"; // string | Basic Authorization Header
$contact_id_type = "id"; // string | Contact ID type, contact ID or contact external ID.

try {
    $result = $apiInstance->getExpectedLocationUsingGET1($organization_id, $contact_id, $expected_location_id, $authorization, $contact_id_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpectedLocationsApi->getExpectedLocationUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| Organization ID. |
 **contact_id** | **string**| Contact ID. |
 **expected_location_id** | **int**| Expected Location ID. |
 **authorization** | **string**| Basic Authorization Header |
 **contact_id_type** | **string**| Contact ID type, contact ID or contact external ID. | [optional] [default to id]

### Return type

[**\Swagger\Client\Model\ExpectedLocationInstanceResult**](../Model/ExpectedLocationInstanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveUsingPOST**
> \Swagger\Client\Model\RestfulModificationResult saveUsingPOST($organization_id, $contact_id, $address, $authorization, $contact_id_type)

Create new Expected Location.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ExpectedLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | Organization ID
$contact_id = "contact_id_example"; // string | Contact ID
$address = new \Swagger\Client\Model\ContactAddressWrapper(); // \Swagger\Client\Model\ContactAddressWrapper | JSON object of Expected Location address.
$authorization = "authorization_example"; // string | Basic Authorization Header
$contact_id_type = "id"; // string | Contact ID type, contact ID or contact external ID.

try {
    $result = $apiInstance->saveUsingPOST($organization_id, $contact_id, $address, $authorization, $contact_id_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpectedLocationsApi->saveUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| Organization ID |
 **contact_id** | **string**| Contact ID |
 **address** | [**\Swagger\Client\Model\ContactAddressWrapper**](../Model/ContactAddressWrapper.md)| JSON object of Expected Location address. |
 **authorization** | **string**| Basic Authorization Header |
 **contact_id_type** | **string**| Contact ID type, contact ID or contact external ID. | [optional] [default to id]

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUsingPUT**
> \Swagger\Client\Model\RestfulModificationResult updateUsingPUT($organization_id, $contact_id, $expected_location_id, $address, $authorization, $contact_id_type)

Update Expected Location by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ExpectedLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | Organization ID.
$contact_id = "contact_id_example"; // string | Contact ID.
$expected_location_id = 789; // int | Expected Location ID.
$address = new \Swagger\Client\Model\ContactAddressWrapper(); // \Swagger\Client\Model\ContactAddressWrapper | JSON object of Expected Location address.
$authorization = "authorization_example"; // string | Basic Authorization Header
$contact_id_type = "id"; // string | Contact ID type, contact ID or contact external ID.

try {
    $result = $apiInstance->updateUsingPUT($organization_id, $contact_id, $expected_location_id, $address, $authorization, $contact_id_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpectedLocationsApi->updateUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| Organization ID. |
 **contact_id** | **string**| Contact ID. |
 **expected_location_id** | **int**| Expected Location ID. |
 **address** | [**\Swagger\Client\Model\ContactAddressWrapper**](../Model/ContactAddressWrapper.md)| JSON object of Expected Location address. |
 **authorization** | **string**| Basic Authorization Header |
 **contact_id_type** | **string**| Contact ID type, contact ID or contact external ID. | [optional] [default to id]

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

