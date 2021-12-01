# Swagger\Client\NotificationCategoriesApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStatusUsingGET1**](NotificationCategoriesApi.md#getStatusUsingGET1) | **GET** /notificationCategories/{organizationId}/{categoryId} | Retrieve a specific category within an organization
[**initNotificationUsingPOST1**](NotificationCategoriesApi.md#initNotificationUsingPOST1) | **POST** /notificationCategories/{organizationId} | Create a category
[**queryContactPathsUsingGET2**](NotificationCategoriesApi.md#queryContactPathsUsingGET2) | **GET** /notificationCategories/{organizationId} | Retrieve all notificationCategories for an organization


# **getStatusUsingGET1**
> \Swagger\Client\Model\RestfulInstanceResult getStatusUsingGET1($authorization, $organization_id, $category_id)

Retrieve a specific category within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotificationCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the category
$category_id = 789; // int | The ID of the notificationCategory to return

try {
    $result = $apiInstance->getStatusUsingGET1($authorization, $organization_id, $category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationCategoriesApi->getStatusUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the category |
 **category_id** | **int**| The ID of the notificationCategory to return |

### Return type

[**\Swagger\Client\Model\RestfulInstanceResult**](../Model/RestfulInstanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **initNotificationUsingPOST1**
> \Swagger\Client\Model\RestfulModificationResult initNotificationUsingPOST1($authorization, $organization_id, $category)

Create a category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotificationCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The organization from which to initiate the category
$category = new \Swagger\Client\Model\CategoryWrapper(); // \Swagger\Client\Model\CategoryWrapper | The notificationCategory object to create

try {
    $result = $apiInstance->initNotificationUsingPOST1($authorization, $organization_id, $category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationCategoriesApi->initNotificationUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The organization from which to initiate the category |
 **category** | [**\Swagger\Client\Model\CategoryWrapper**](../Model/CategoryWrapper.md)| The notificationCategory object to create |

### Return type

[**\Swagger\Client\Model\RestfulModificationResult**](../Model/RestfulModificationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryContactPathsUsingGET2**
> \Swagger\Client\Model\RestfulCollectionResult queryContactPathsUsingGET2($authorization, $organization_id, $page_number)

Retrieve all notificationCategories for an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NotificationCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The ID of the organization containing the notificationCategories
$page_number = 1; // int | The page number of notificationCategories to return.

try {
    $result = $apiInstance->queryContactPathsUsingGET2($authorization, $organization_id, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationCategoriesApi->queryContactPathsUsingGET2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The ID of the organization containing the notificationCategories |
 **page_number** | **int**| The page number of notificationCategories to return. | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\RestfulCollectionResult**](../Model/RestfulCollectionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

