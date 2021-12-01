# Swagger\Client\IncidentJournalsApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**launchIncidentUsingPOST1**](IncidentJournalsApi.md#launchIncidentUsingPOST1) | **POST** /incidentJournals/{organizationId}/{incidentId} | Add journal to incident
[**queryIncidentJournalsUsingGET**](IncidentJournalsApi.md#queryIncidentJournalsUsingGET) | **GET** /incidentJournals/{organizationId}/{incidentId} | Retrieve all journals for an incident


# **launchIncidentUsingPOST1**
> \Swagger\Client\Model\RestfulModificationResult launchIncidentUsingPOST1($authorization, $organization_id, $incident_id, $journal)

Add journal to incident

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentJournalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The organization Id containing incident.
$incident_id = 789; // int | The incidentId for the journal.
$journal = new \Swagger\Client\Model\IncidentJournalWrapper(); // \Swagger\Client\Model\IncidentJournalWrapper | An Journal object to send.

try {
    $result = $apiInstance->launchIncidentUsingPOST1($authorization, $organization_id, $incident_id, $journal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentJournalsApi->launchIncidentUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The organization Id containing incident. |
 **incident_id** | **int**| The incidentId for the journal. |
 **journal** | [**\Swagger\Client\Model\IncidentJournalWrapper**](../Model/IncidentJournalWrapper.md)| An Journal object to send. |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryIncidentJournalsUsingGET**
> \Swagger\Client\Model\RestfulCollectionResult queryIncidentJournalsUsingGET($authorization, $organization_id, $incident_id)

Retrieve all journals for an incident

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentJournalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the journals
$incident_id = 789; // int | The ID of incident containing the journals

try {
    $result = $apiInstance->queryIncidentJournalsUsingGET($authorization, $organization_id, $incident_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentJournalsApi->queryIncidentJournalsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the journals |
 **incident_id** | **int**| The ID of incident containing the journals |

### Return type

[**\Swagger\Client\Model\RestfulCollectionResult**](../Model/RestfulCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

