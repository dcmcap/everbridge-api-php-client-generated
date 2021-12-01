# Swagger\Client\ProfilesApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProfileByIdUsingGET**](ProfilesApi.md#getProfileByIdUsingGET) | **GET** /profiles/{organizationId}/{profileId} | Retrieve a Profile by id within an organization
[**getProfilesUsingGET**](ProfilesApi.md#getProfilesUsingGET) | **GET** /profiles/{organizationId} | Retrieve a list of Profiles within an organization


# **getProfileByIdUsingGET**
> object getProfileByIdUsingGET($credentials, $organization_id, $profile_id)

Retrieve a Profile by id within an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$credentials = "credentials_example"; // string | Basic Authorization header
$organization_id = 789; // int | The id of the organization containing the Profile
$profile_id = "profile_id_example"; // string | The id of the Profile

try {
    $result = $apiInstance->getProfileByIdUsingGET($credentials, $organization_id, $profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfileByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credentials** | **string**| Basic Authorization header |
 **organization_id** | **int**| The id of the organization containing the Profile |
 **profile_id** | **string**| The id of the Profile |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProfilesUsingGET**
> object getProfilesUsingGET($authorization, $organization_id, $sort, $page_size, $page_no)

Retrieve a list of Profiles within an organization

Paging is supported by using the optional pageNo and pageSize parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The id of the organization containing the Profile
$sort = "sort_example"; // string | Comma delimited list of fields to sort by.<p> +/- can precede the field Name to indicate direction (ascending/descending).</p><p> + is the default direction</p><p> Ex. sort=name,-createdDate sorts by name ascending and createdDate descending </p>
$page_size = 56; // int | The number of records per page to be included in the response
$page_no = 56; // int | The page to be returned.

try {
    $result = $apiInstance->getProfilesUsingGET($authorization, $organization_id, $sort, $page_size, $page_no);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfilesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The id of the organization containing the Profile |
 **sort** | **string**| Comma delimited list of fields to sort by.&lt;p&gt; +/- can precede the field Name to indicate direction (ascending/descending).&lt;/p&gt;&lt;p&gt; + is the default direction&lt;/p&gt;&lt;p&gt; Ex. sort&#x3D;name,-createdDate sorts by name ascending and createdDate descending &lt;/p&gt; | [optional]
 **page_size** | **int**| The number of records per page to be included in the response | [optional]
 **page_no** | **int**| The page to be returned. | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

