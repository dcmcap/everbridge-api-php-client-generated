# Swagger\Client\IncidentTemplatesApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getIncidentTemplateUsingGET**](IncidentTemplatesApi.md#getIncidentTemplateUsingGET) | **GET** /incidentTemplates/{organizationId}/{incidentTemplateId} | Retrieve an Incident template object within an organization
[**queryTemplatesUsingGET**](IncidentTemplatesApi.md#queryTemplatesUsingGET) | **GET** /incidentTemplates/{organizationId} | Retrieve all incident templates for an organization


# **getIncidentTemplateUsingGET**
> \Swagger\Client\Model\RestfulInstanceResult getIncidentTemplateUsingGET($authorization, $organization_id, $incident_template_id)

Retrieve an Incident template object within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the incident
$incident_template_id = 789; // int | The ID of the incident template to return

try {
    $result = $apiInstance->getIncidentTemplateUsingGET($authorization, $organization_id, $incident_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentTemplatesApi->getIncidentTemplateUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the incident |
 **incident_template_id** | **int**| The ID of the incident template to return |

### Return type

[**\Swagger\Client\Model\RestfulInstanceResult**](../Model/RestfulInstanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryTemplatesUsingGET**
> \Swagger\Client\Model\RestfulCollectionResult queryTemplatesUsingGET($authorization, $organization_id, $page_number, $skip_paging, $category_name)

Retrieve all incident templates for an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the templates
$page_number = 1; // int | The page number of templates to return.
$skip_paging = "false"; // string | Whether or not to skip pagination.
$category_name = "category_name_example"; // string | Load templates in specified category.

try {
    $result = $apiInstance->queryTemplatesUsingGET($authorization, $organization_id, $page_number, $skip_paging, $category_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentTemplatesApi->queryTemplatesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the templates |
 **page_number** | **int**| The page number of templates to return. | [optional] [default to 1]
 **skip_paging** | **string**| Whether or not to skip pagination. | [optional] [default to false]
 **category_name** | **string**| Load templates in specified category. | [optional]

### Return type

[**\Swagger\Client\Model\RestfulCollectionResult**](../Model/RestfulCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

