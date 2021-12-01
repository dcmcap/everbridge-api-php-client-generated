# Swagger\Client\ItinerariesApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItineraryUsingPOST**](ItinerariesApi.md#addItineraryUsingPOST) | **POST** /itineraries/{organizationId} | Add An Itinerary.
[**batchAddItineraryUsingPOST**](ItinerariesApi.md#batchAddItineraryUsingPOST) | **POST** /itineraries/{organizationId}/batch | Add Batch of Itineraries.
[**batchDeleteItineraryUsingDELETE**](ItinerariesApi.md#batchDeleteItineraryUsingDELETE) | **DELETE** /itineraries/{organizationId}/batch | Batch delete itineraries.
[**deleteItineraryUsingDELETE**](ItinerariesApi.md#deleteItineraryUsingDELETE) | **DELETE** /itineraries/{organizationId}/{id} | Delete an Itinerary.
[**getExpectedLocationsByItineraryIDUsingGET**](ItinerariesApi.md#getExpectedLocationsByItineraryIDUsingGET) | **GET** /itineraries/expectedLocations/{organizationId}/{id} | GET Expected Locations By Itinerary ID.
[**queryByParametersUsingPOST**](ItinerariesApi.md#queryByParametersUsingPOST) | **POST** /itineraries/query/{organizationId} | Query Itineraries By Parameters.
[**updateItineraryUsingPUT**](ItinerariesApi.md#updateItineraryUsingPUT) | **PUT** /itineraries/{organizationId}/{id} | Update an Itinerary.


# **addItineraryUsingPOST**
> \Swagger\Client\Model\RestfulModificationResult addItineraryUsingPOST($organization_id, $authorization, $trip_itinerary, $auto_create_contact, $contact_record_type_id)

Add An Itinerary.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItinerariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | Organization ID
$authorization = "authorization_example"; // string | Basic Authorization Header
$trip_itinerary = new \Swagger\Client\Model\TripItineraryWrapper(); // \Swagger\Client\Model\TripItineraryWrapper | JSON object of TripItinerary
$auto_create_contact = true; // bool | AutoCreateContact
$contact_record_type_id = 0; // int | ContactRecordTypeId

try {
    $result = $apiInstance->addItineraryUsingPOST($organization_id, $authorization, $trip_itinerary, $auto_create_contact, $contact_record_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItinerariesApi->addItineraryUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| Organization ID |
 **authorization** | **string**| Basic Authorization Header |
 **trip_itinerary** | [**\Swagger\Client\Model\TripItineraryWrapper**](../Model/TripItineraryWrapper.md)| JSON object of TripItinerary |
 **auto_create_contact** | **bool**| AutoCreateContact | [optional] [default to true]
 **contact_record_type_id** | **int**| ContactRecordTypeId | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **batchAddItineraryUsingPOST**
> \Swagger\Client\Model\RestfulModificationResult batchAddItineraryUsingPOST($organization_id, $authorization, $trip_itinerary, $auto_create_contact, $contact_record_type_id)

Add Batch of Itineraries.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItinerariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | Organization ID
$authorization = "authorization_example"; // string | Basic Authorization Header
$trip_itinerary = array(new \Swagger\Client\Model\TripItineraryWrapper()); // \Swagger\Client\Model\TripItineraryWrapper[] | JSON object of TripItinerary
$auto_create_contact = true; // bool | AutoCreateContact
$contact_record_type_id = 0; // int | ContactRecordTypeId

try {
    $result = $apiInstance->batchAddItineraryUsingPOST($organization_id, $authorization, $trip_itinerary, $auto_create_contact, $contact_record_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItinerariesApi->batchAddItineraryUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| Organization ID |
 **authorization** | **string**| Basic Authorization Header |
 **trip_itinerary** | [**\Swagger\Client\Model\TripItineraryWrapper[]**](../Model/TripItineraryWrapper.md)| JSON object of TripItinerary |
 **auto_create_contact** | **bool**| AutoCreateContact | [optional] [default to true]
 **contact_record_type_id** | **int**| ContactRecordTypeId | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **batchDeleteItineraryUsingDELETE**
> \Swagger\Client\Model\RestfulModificationResult batchDeleteItineraryUsingDELETE($organization_id, $authorization, $ids)

Batch delete itineraries.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItinerariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | Organization ID
$authorization = "authorization_example"; // string | Basic Authorization Header
$ids = array(new \Swagger\Client\Model\string[]()); // string[] | JSON object of ids

try {
    $result = $apiInstance->batchDeleteItineraryUsingDELETE($organization_id, $authorization, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItinerariesApi->batchDeleteItineraryUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| Organization ID |
 **authorization** | **string**| Basic Authorization Header |
 **ids** | **string[]**| JSON object of ids |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItineraryUsingDELETE**
> \Swagger\Client\Model\RestfulModificationResult deleteItineraryUsingDELETE($organization_id, $id, $authorization)

Delete an Itinerary.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItinerariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | Organization ID
$id = 789; // int | id
$authorization = "authorization_example"; // string | Basic Authorization Header

try {
    $result = $apiInstance->deleteItineraryUsingDELETE($organization_id, $id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItinerariesApi->deleteItineraryUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| Organization ID |
 **id** | **int**| id |
 **authorization** | **string**| Basic Authorization Header |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExpectedLocationsByItineraryIDUsingGET**
> \Swagger\Client\Model\ExpectedLocationWrapperCollectionResult getExpectedLocationsByItineraryIDUsingGET($id, $organization_id, $authorization, $page_number)

GET Expected Locations By Itinerary ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItinerariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | id
$organization_id = 789; // int | Organization ID
$authorization = "authorization_example"; // string | Basic Authorization Header
$page_number = 1; // int | The page number of Itineraries

try {
    $result = $apiInstance->getExpectedLocationsByItineraryIDUsingGET($id, $organization_id, $authorization, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItinerariesApi->getExpectedLocationsByItineraryIDUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **organization_id** | **int**| Organization ID |
 **authorization** | **string**| Basic Authorization Header |
 **page_number** | **int**| The page number of Itineraries | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\ExpectedLocationWrapperCollectionResult**](../Model/ExpectedLocationWrapperCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryByParametersUsingPOST**
> \Swagger\Client\Model\RestfulModificationResult queryByParametersUsingPOST($organization_id, $authorization, $search_criteria, $page_number)

Query Itineraries By Parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItinerariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | Organization ID
$authorization = "authorization_example"; // string | Basic Authorization Header
$search_criteria = new \Swagger\Client\Model\ItinerarySearchCriteria(); // \Swagger\Client\Model\ItinerarySearchCriteria | JSON object of SearchCriteria
$page_number = 1; // int | The page number of Itineraries

try {
    $result = $apiInstance->queryByParametersUsingPOST($organization_id, $authorization, $search_criteria, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItinerariesApi->queryByParametersUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| Organization ID |
 **authorization** | **string**| Basic Authorization Header |
 **search_criteria** | [**\Swagger\Client\Model\ItinerarySearchCriteria**](../Model/ItinerarySearchCriteria.md)| JSON object of SearchCriteria |
 **page_number** | **int**| The page number of Itineraries | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateItineraryUsingPUT**
> \Swagger\Client\Model\RestfulModificationResult updateItineraryUsingPUT($organization_id, $id, $authorization, $trip_itinerary, $auto_create_contact, $contact_record_type_id)

Update an Itinerary.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItinerariesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 789; // int | Organization ID
$id = 789; // int | id
$authorization = "authorization_example"; // string | Basic Authorization Header
$trip_itinerary = new \Swagger\Client\Model\TripItineraryWrapper(); // \Swagger\Client\Model\TripItineraryWrapper | JSON object of TripItinerary
$auto_create_contact = true; // bool | AutoCreateContact
$contact_record_type_id = 0; // int | ContactRecordTypeId

try {
    $result = $apiInstance->updateItineraryUsingPUT($organization_id, $id, $authorization, $trip_itinerary, $auto_create_contact, $contact_record_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItinerariesApi->updateItineraryUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| Organization ID |
 **id** | **int**| id |
 **authorization** | **string**| Basic Authorization Header |
 **trip_itinerary** | [**\Swagger\Client\Model\TripItineraryWrapper**](../Model/TripItineraryWrapper.md)| JSON object of TripItinerary |
 **auto_create_contact** | **bool**| AutoCreateContact | [optional] [default to true]
 **contact_record_type_id** | **int**| ContactRecordTypeId | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

