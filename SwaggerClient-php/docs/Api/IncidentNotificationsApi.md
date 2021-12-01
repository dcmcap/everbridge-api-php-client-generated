# Swagger\Client\IncidentNotificationsApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getIncidentNotificationUsingGET**](IncidentNotificationsApi.md#getIncidentNotificationUsingGET) | **GET** /incidentNotifications/{organizationId}/{incidentId}/notification | Retrieve specific notification for an incident
[**getNotificationBySenarioIdUsingGET**](IncidentNotificationsApi.md#getNotificationBySenarioIdUsingGET) | **GET** /incidentNotifications/{organizationId}/scenario | Retrieve all notifications for a scenario
[**getNotificationsByIncidentUsingGET**](IncidentNotificationsApi.md#getNotificationsByIncidentUsingGET) | **GET** /incidentNotifications/{organizationId}/{incidentId} | Retrieve all notifications for an incident


# **getIncidentNotificationUsingGET**
> \Swagger\Client\Model\RestfulInstanceResult getIncidentNotificationUsingGET($authorization, $organization_id, $incident_id, $notification_id, $verbose)

Retrieve specific notification for an incident

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentNotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the incident notification
$incident_id = 789; // int | The ID of the incident to return
$notification_id = 789; // int | The ID of the incident notification to return
$verbose = false; // bool | A boolean indicating whether to return detailed results

try {
    $result = $apiInstance->getIncidentNotificationUsingGET($authorization, $organization_id, $incident_id, $notification_id, $verbose);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentNotificationsApi->getIncidentNotificationUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the incident notification |
 **incident_id** | **int**| The ID of the incident to return |
 **notification_id** | **int**| The ID of the incident notification to return |
 **verbose** | **bool**| A boolean indicating whether to return detailed results | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\RestfulInstanceResult**](../Model/RestfulInstanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNotificationBySenarioIdUsingGET**
> \Swagger\Client\Model\RestfulCollectionResult getNotificationBySenarioIdUsingGET($authorization, $organization_id, $scenario_id, $custom_scenario_id, $page_number, $page_size)

Retrieve all notifications for a scenario

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentNotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the incidents
$scenario_id = -1; // int | The ID of the scenario to return
$custom_scenario_id = "custom_scenario_id_example"; // string | The customSenarioID of the scenario to return
$page_number = 1; // int | The page number of scenario notifications to return.
$page_size = 10; // int | The page size of scenario notifications to return.

try {
    $result = $apiInstance->getNotificationBySenarioIdUsingGET($authorization, $organization_id, $scenario_id, $custom_scenario_id, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentNotificationsApi->getNotificationBySenarioIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the incidents |
 **scenario_id** | **int**| The ID of the scenario to return | [optional] [default to -1]
 **custom_scenario_id** | **string**| The customSenarioID of the scenario to return | [optional]
 **page_number** | **int**| The page number of scenario notifications to return. | [optional] [default to 1]
 **page_size** | **int**| The page size of scenario notifications to return. | [optional] [default to 10]

### Return type

[**\Swagger\Client\Model\RestfulCollectionResult**](../Model/RestfulCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNotificationsByIncidentUsingGET**
> \Swagger\Client\Model\RestfulCollectionResult getNotificationsByIncidentUsingGET($authorization, $organization_id, $incident_id, $page_number)

Retrieve all notifications for an incident

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentNotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the incidents
$incident_id = 789; // int | The ID of the Incident to return
$page_number = 1; // int | The page number of incident notifications to return.

try {
    $result = $apiInstance->getNotificationsByIncidentUsingGET($authorization, $organization_id, $incident_id, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentNotificationsApi->getNotificationsByIncidentUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the incidents |
 **incident_id** | **int**| The ID of the Incident to return |
 **page_number** | **int**| The page number of incident notifications to return. | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\RestfulCollectionResult**](../Model/RestfulCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

