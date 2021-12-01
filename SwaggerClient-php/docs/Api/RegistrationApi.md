# Swagger\Client\RegistrationApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sendRegistrationEmailUsingPOST**](RegistrationApi.md#sendRegistrationEmailUsingPOST) | **POST** /registration/contacts/{organizationId} | To send the registration email for given contact id or external id.


# **sendRegistrationEmailUsingPOST**
> \Swagger\Client\Model\RestfulBatchOperationResult sendRegistrationEmailUsingPOST($authorization, $organization_id, $ids, $registration_type, $id_type)

To send the registration email for given contact id or external id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the contacts
$ids = array(new \Swagger\Client\Model\string[]()); // string[] | The ID(s) or externalId(s) of the contact.
$registration_type = "registration_type_example"; // string | The email registration type.
$id_type = "contactId"; // string | Whether to send by contact id or contact externalId.

try {
    $result = $apiInstance->sendRegistrationEmailUsingPOST($authorization, $organization_id, $ids, $registration_type, $id_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->sendRegistrationEmailUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the contacts |
 **ids** | **string[]**| The ID(s) or externalId(s) of the contact. |
 **registration_type** | **string**| The email registration type. |
 **id_type** | **string**| Whether to send by contact id or contact externalId. | [optional] [default to contactId]

### Return type

[**\Swagger\Client\Model\RestfulBatchOperationResult**](../Model/RestfulBatchOperationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

