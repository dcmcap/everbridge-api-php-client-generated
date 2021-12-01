# Swagger\Client\IncidentVariableItemsApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**queryVariableUsingGET**](IncidentVariableItemsApi.md#queryVariableUsingGET) | **GET** /incidentVariableItems/{organizationId}/{searchOption} | Retrieve one Variable for an organization with ID or name filter
[**queryVariablesByTemplateIdUsingGET**](IncidentVariableItemsApi.md#queryVariablesByTemplateIdUsingGET) | **GET** /incidentVariableItems/{organizationId}/{templateId}/{phase} | Retrieve all Variables for specific template in an organization
[**queryVariablesUsingGET**](IncidentVariableItemsApi.md#queryVariablesUsingGET) | **GET** /incidentVariableItems/{organizationId} | Retrieve all Variables for an organization


# **queryVariableUsingGET**
> \Swagger\Client\Model\RestfulInstanceResult queryVariableUsingGET($authorization, $organization_id, $search_option, $search_value)

Retrieve one Variable for an organization with ID or name filter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentVariableItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the variables
$search_option = "search_option_example"; // string | The search option of variable to return.
$search_value = "search_value_example"; // string | The search value of variable to return.

try {
    $result = $apiInstance->queryVariableUsingGET($authorization, $organization_id, $search_option, $search_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentVariableItemsApi->queryVariableUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the variables |
 **search_option** | **string**| The search option of variable to return. |
 **search_value** | **string**| The search value of variable to return. |

### Return type

[**\Swagger\Client\Model\RestfulInstanceResult**](../Model/RestfulInstanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryVariablesByTemplateIdUsingGET**
> \Swagger\Client\Model\RestfulCollectionResult queryVariablesByTemplateIdUsingGET($authorization, $organization_id, $template_id, $phase)

Retrieve all Variables for specific template in an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentVariableItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the variables
$template_id = 789; // int | The ID of the incident template containing the variables
$phase = "phase_example"; // string | The phase for the incident template containing the variables

try {
    $result = $apiInstance->queryVariablesByTemplateIdUsingGET($authorization, $organization_id, $template_id, $phase);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentVariableItemsApi->queryVariablesByTemplateIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the variables |
 **template_id** | **int**| The ID of the incident template containing the variables |
 **phase** | **string**| The phase for the incident template containing the variables |

### Return type

[**\Swagger\Client\Model\RestfulCollectionResult**](../Model/RestfulCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryVariablesUsingGET**
> \Swagger\Client\Model\RestfulCollectionResult queryVariablesUsingGET($authorization, $organization_id, $page_number)

Retrieve all Variables for an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentVariableItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the variables
$page_number = 1; // int | The page number of variables to return.

try {
    $result = $apiInstance->queryVariablesUsingGET($authorization, $organization_id, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentVariableItemsApi->queryVariablesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the variables |
 **page_number** | **int**| The page number of variables to return. | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\RestfulCollectionResult**](../Model/RestfulCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

