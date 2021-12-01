# Swagger\Client\NixleEventGroupsApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**queryNixleEventSubscriptionsUsingGET**](NixleEventGroupsApi.md#queryNixleEventSubscriptionsUsingGET) | **GET** /nixleEventGroups/{organizationId} | Get all event groups


# **queryNixleEventSubscriptionsUsingGET**
> \Swagger\Client\Model\NixleEventSubscriptionWrapper[] queryNixleEventSubscriptionsUsingGET($authorization, $organization_id)

Get all event groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NixleEventGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization

try {
    $result = $apiInstance->queryNixleEventSubscriptionsUsingGET($authorization, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NixleEventGroupsApi->queryNixleEventSubscriptionsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization |

### Return type

[**\Swagger\Client\Model\NixleEventSubscriptionWrapper[]**](../Model/NixleEventSubscriptionWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

