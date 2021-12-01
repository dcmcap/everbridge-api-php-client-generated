# Swagger\Client\IncidentsApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getIncidentUsingGET**](IncidentsApi.md#getIncidentUsingGET) | **GET** /incidents/{organizationId}/{incidentId} | Retrieve an incident object within an organization
[**launchIncidentUsingPOST**](IncidentsApi.md#launchIncidentUsingPOST) | **POST** /incidents/{organizationId} | Launch an Incident
[**previewIncidentInfoUsingPOST**](IncidentsApi.md#previewIncidentInfoUsingPOST) | **POST** /incidents/{organizationId}/preview | Preview incident
[**previewIncidentUsingPOST**](IncidentsApi.md#previewIncidentUsingPOST) | **POST** /incidents/preview/{organizationId} | Preview incident
[**queryIncidentsUsingGET**](IncidentsApi.md#queryIncidentsUsingGET) | **GET** /incidents/{organizationId} | Retrieve all Incidents for an organization
[**updateIncidentUsingPUT**](IncidentsApi.md#updateIncidentUsingPUT) | **PUT** /incidents/{organizationId}/{incidentId} | Update or close an Incident with or without Notification


# **getIncidentUsingGET**
> \Swagger\Client\Model\RestfulInstanceResult getIncidentUsingGET($authorization, $organization_id, $incident_id)

Retrieve an incident object within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the incident
$incident_id = 789; // int | The ID of the Incident to return

try {
    $result = $apiInstance->getIncidentUsingGET($authorization, $organization_id, $incident_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentsApi->getIncidentUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the incident |
 **incident_id** | **int**| The ID of the Incident to return |

### Return type

[**\Swagger\Client\Model\RestfulInstanceResult**](../Model/RestfulInstanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **launchIncidentUsingPOST**
> \Swagger\Client\Model\RestfulModificationResult launchIncidentUsingPOST($authorization, $organization_id, $incident)

Launch an Incident

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The organization from which to launch the incident
$incident = new \Swagger\Client\Model\IncidentWrapper(); // \Swagger\Client\Model\IncidentWrapper | An Incident object to send.

try {
    $result = $apiInstance->launchIncidentUsingPOST($authorization, $organization_id, $incident);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentsApi->launchIncidentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The organization from which to launch the incident |
 **incident** | [**\Swagger\Client\Model\IncidentWrapper**](../Model/IncidentWrapper.md)| An Incident object to send. |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **previewIncidentInfoUsingPOST**
> \Swagger\Client\Model\RestfulModificationResult previewIncidentInfoUsingPOST($authorization, $organization_id, $incident)

Preview incident

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The organization from which to preview the incident
$incident = new \Swagger\Client\Model\IncidentWrapper(); // \Swagger\Client\Model\IncidentWrapper | An Incident object to preview.

try {
    $result = $apiInstance->previewIncidentInfoUsingPOST($authorization, $organization_id, $incident);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentsApi->previewIncidentInfoUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The organization from which to preview the incident |
 **incident** | [**\Swagger\Client\Model\IncidentWrapper**](../Model/IncidentWrapper.md)| An Incident object to preview. |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **previewIncidentUsingPOST**
> \Swagger\Client\Model\RestfulModificationResult previewIncidentUsingPOST($authorization, $organization_id, $incident)

Preview incident

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The organization from which to preview the incident
$incident = new \Swagger\Client\Model\IncidentWrapper(); // \Swagger\Client\Model\IncidentWrapper | An Incident object to preview.

try {
    $result = $apiInstance->previewIncidentUsingPOST($authorization, $organization_id, $incident);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentsApi->previewIncidentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The organization from which to preview the incident |
 **incident** | [**\Swagger\Client\Model\IncidentWrapper**](../Model/IncidentWrapper.md)| An Incident object to preview. |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryIncidentsUsingGET**
> \Swagger\Client\Model\RestfulCollectionResult queryIncidentsUsingGET($authorization, $organization_id, $only_open, $page_number, $page_size, $status, $incident_type, $start_time, $end_time, $date_type)

Retrieve all Incidents for an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the incidents
$only_open = false; // bool | Boolean value indicating whether only open incidents should be returned.
$page_number = 1; // int | The page number of incidents to return.
$page_size = 10; // int | The page size of incidents to return.
$status = "All"; // string | Return incidents by specified status.
$incident_type = "Incident"; // string | Return incidents by specified type.
$start_time = 789; // int | The range of createdDate(lastModifiedDate or closedDate) begin time.
$end_time = 789; // int | The range of createdDate(lastModifiedDate or closedDate) end time.
$date_type = "createdDate"; // string | dateType will be used with time range of startTime or endTime.

try {
    $result = $apiInstance->queryIncidentsUsingGET($authorization, $organization_id, $only_open, $page_number, $page_size, $status, $incident_type, $start_time, $end_time, $date_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentsApi->queryIncidentsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the incidents |
 **only_open** | **bool**| Boolean value indicating whether only open incidents should be returned. | [optional] [default to false]
 **page_number** | **int**| The page number of incidents to return. | [optional] [default to 1]
 **page_size** | **int**| The page size of incidents to return. | [optional] [default to 10]
 **status** | **string**| Return incidents by specified status. | [optional] [default to All]
 **incident_type** | **string**| Return incidents by specified type. | [optional] [default to Incident]
 **start_time** | **int**| The range of createdDate(lastModifiedDate or closedDate) begin time. | [optional]
 **end_time** | **int**| The range of createdDate(lastModifiedDate or closedDate) end time. | [optional]
 **date_type** | **string**| dateType will be used with time range of startTime or endTime. | [optional] [default to createdDate]

### Return type

[**\Swagger\Client\Model\RestfulCollectionResult**](../Model/RestfulCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateIncidentUsingPUT**
> \Swagger\Client\Model\RestfulModificationResult updateIncidentUsingPUT($authorization, $organization_id, $incident_id, $incident)

Update or close an Incident with or without Notification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The organization from which to update the incident
$incident_id = 789; // int | The ID of the incident to update
$incident = new \Swagger\Client\Model\IncidentWrapper(); // \Swagger\Client\Model\IncidentWrapper | An Incident object to send.

try {
    $result = $apiInstance->updateIncidentUsingPUT($authorization, $organization_id, $incident_id, $incident);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentsApi->updateIncidentUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The organization from which to update the incident |
 **incident_id** | **int**| The ID of the incident to update |
 **incident** | [**\Swagger\Client\Model\IncidentWrapper**](../Model/IncidentWrapper.md)| An Incident object to send. |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

