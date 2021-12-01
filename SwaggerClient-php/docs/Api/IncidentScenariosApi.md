# Swagger\Client\IncidentScenariosApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getScenarioUsingGET**](IncidentScenariosApi.md#getScenarioUsingGET) | **GET** /incidentScenarios/{organizationId}/{queryValue} | Retrieve a scenarios object within an organization
[**launchScenarioUsingPOST**](IncidentScenariosApi.md#launchScenarioUsingPOST) | **POST** /incidentScenarios/{organizationId} | Launch an Scenario
[**queryScenariosUsingGET**](IncidentScenariosApi.md#queryScenariosUsingGET) | **GET** /incidentScenarios/{organizationId} | Retrieve all scenarios for an organization
[**updateScenarioUsingPUT**](IncidentScenariosApi.md#updateScenarioUsingPUT) | **PUT** /incidentScenarios/{organizationId}/{scenarioIncidentId} | Update or close an Scenario


# **getScenarioUsingGET**
> \Swagger\Client\Model\RestfulInstanceResult getScenarioUsingGET($authorization, $organization_id, $query_value, $query_type, $phase)

Retrieve a scenarios object within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentScenariosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the incident
$query_value = "query_value_example"; // string | The scenario Id or custom scenario Id of the organization containing the incident
$query_type = "scenarioId"; // string | To indicate the ID type.
$phase = "New"; // string | To retrieve the variables of the specific phase

try {
    $result = $apiInstance->getScenarioUsingGET($authorization, $organization_id, $query_value, $query_type, $phase);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentScenariosApi->getScenarioUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the incident |
 **query_value** | **string**| The scenario Id or custom scenario Id of the organization containing the incident |
 **query_type** | **string**| To indicate the ID type. | [optional] [default to scenarioId]
 **phase** | **string**| To retrieve the variables of the specific phase | [optional] [default to New]

### Return type

[**\Swagger\Client\Model\RestfulInstanceResult**](../Model/RestfulInstanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **launchScenarioUsingPOST**
> \Swagger\Client\Model\RestfulModificationResult launchScenarioUsingPOST($authorization, $organization_id, $incident_scenario)

Launch an Scenario

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentScenariosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The organization from which to launch the incident
$incident_scenario = new \Swagger\Client\Model\IncidentScenarioWrapper(); // \Swagger\Client\Model\IncidentScenarioWrapper | An incidentScenario object to launch.

try {
    $result = $apiInstance->launchScenarioUsingPOST($authorization, $organization_id, $incident_scenario);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentScenariosApi->launchScenarioUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The organization from which to launch the incident |
 **incident_scenario** | [**\Swagger\Client\Model\IncidentScenarioWrapper**](../Model/IncidentScenarioWrapper.md)| An incidentScenario object to launch. |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryScenariosUsingGET**
> \Swagger\Client\Model\RestfulCollectionResult queryScenariosUsingGET($authorization, $organization_id, $sort_by, $direction, $page_number, $page_size)

Retrieve all scenarios for an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentScenariosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the incidents
$sort_by = "name"; // string | Whether to sort data by name or lastModifiedDate.
$direction = "DESC"; // string | Whether to sort data as ASC or DESC.
$page_number = 1; // int | The page number of scenarios to return.
$page_size = 10; // int | The page size of scenarios to return.

try {
    $result = $apiInstance->queryScenariosUsingGET($authorization, $organization_id, $sort_by, $direction, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentScenariosApi->queryScenariosUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the incidents |
 **sort_by** | **string**| Whether to sort data by name or lastModifiedDate. | [optional] [default to name]
 **direction** | **string**| Whether to sort data as ASC or DESC. | [optional] [default to DESC]
 **page_number** | **int**| The page number of scenarios to return. | [optional] [default to 1]
 **page_size** | **int**| The page size of scenarios to return. | [optional] [default to 10]

### Return type

[**\Swagger\Client\Model\RestfulCollectionResult**](../Model/RestfulCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateScenarioUsingPUT**
> \Swagger\Client\Model\RestfulModificationResult updateScenarioUsingPUT($authorization, $organization_id, $scenario_incident_id, $scenario)

Update or close an Scenario

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentScenariosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The organization from which to update the incident
$scenario_incident_id = 789; // int | The ID of the incident to update
$scenario = new \Swagger\Client\Model\IncidentScenarioWrapper(); // \Swagger\Client\Model\IncidentScenarioWrapper | An scenario object to send.

try {
    $result = $apiInstance->updateScenarioUsingPUT($authorization, $organization_id, $scenario_incident_id, $scenario);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentScenariosApi->updateScenarioUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The organization from which to update the incident |
 **scenario_incident_id** | **int**| The ID of the incident to update |
 **scenario** | [**\Swagger\Client\Model\IncidentScenarioWrapper**](../Model/IncidentScenarioWrapper.md)| An scenario object to send. |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

