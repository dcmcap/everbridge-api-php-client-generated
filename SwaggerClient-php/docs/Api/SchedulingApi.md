# Swagger\Client\SchedulingApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCalendarsUsingPOST**](SchedulingApi.md#createCalendarsUsingPOST) | **POST** /scheduling/{organizationId}/calendars | Create calendars
[**createShiftScheduleUsingPOST**](SchedulingApi.md#createShiftScheduleUsingPOST) | **POST** /scheduling/{organizationId}/shiftSchedules | Create ShiftSchedules
[**createShiftSubstitutionsUsingPOST**](SchedulingApi.md#createShiftSubstitutionsUsingPOST) | **POST** /scheduling/{organizationId}/shiftSubstitutions | Create shift substitutions (Override)
[**createStaffSchedulesUsingPOST**](SchedulingApi.md#createStaffSchedulesUsingPOST) | **POST** /scheduling/{organizationId}/staffSchedules | Create StaffSchedules
[**createSubstitutionsUsingPOST**](SchedulingApi.md#createSubstitutionsUsingPOST) | **POST** /scheduling/{organizationId}/substitutions | Create scheduling substitutions (Unavailable/Replacement)
[**deleteCalendarsUsingDELETE**](SchedulingApi.md#deleteCalendarsUsingDELETE) | **DELETE** /scheduling/{organizationId}/calendars/{ids} | Delete calendars
[**deleteShiftSchedulesUsingDELETE**](SchedulingApi.md#deleteShiftSchedulesUsingDELETE) | **DELETE** /scheduling/{organizationId}/shiftSchedules/{ids} | Delete ShiftSchedules
[**deleteShiftSubstitutionsUsingDELETE**](SchedulingApi.md#deleteShiftSubstitutionsUsingDELETE) | **DELETE** /scheduling/{organizationId}/shiftSubstitutions/{ids} | Delete shift substitutions (Override)
[**deleteStaffSchedulesUsingDELETE**](SchedulingApi.md#deleteStaffSchedulesUsingDELETE) | **DELETE** /scheduling/{organizationId}/staffSchedules/{ids} | Delete StaffSchedules
[**deleteSubstitutionsUsingDELETE**](SchedulingApi.md#deleteSubstitutionsUsingDELETE) | **DELETE** /scheduling/{organizationId}/substitutions/{ids} | Delete scheduling substitutions (Unavailable/Replacement)
[**findCalendarUsingGET**](SchedulingApi.md#findCalendarUsingGET) | **GET** /scheduling/{organizationId}/calendars/{ids} | Get a single calendar
[**findShiftScheduleUsingGET**](SchedulingApi.md#findShiftScheduleUsingGET) | **GET** /scheduling/{organizationId}/shiftSchedules/{ids} | Get a ShiftSchedule by id(s)
[**findShiftSubstitutionUsingGET**](SchedulingApi.md#findShiftSubstitutionUsingGET) | **GET** /scheduling/{organizationId}/shiftSubstitutions/{ids} | Get one or more shift substitutions by id (Override)
[**findStaffScheduleUsingGET**](SchedulingApi.md#findStaffScheduleUsingGET) | **GET** /scheduling/{organizationId}/staffSchedules/{ids} | Get a StaffSchedule by id(s)
[**findSubstitutionUsingGET**](SchedulingApi.md#findSubstitutionUsingGET) | **GET** /scheduling/{organizationId}/substitutions/{ids} | Get a single substitution(s) (Unavailable/Replacement)
[**listAuditsUsingGET**](SchedulingApi.md#listAuditsUsingGET) | **GET** /scheduling/{organizationId}/audits | List scheduling audits
[**listCalendarEventsUsingGET**](SchedulingApi.md#listCalendarEventsUsingGET) | **GET** /scheduling/{organizationId}/calendarEvents | List of events and their corresponding assignments
[**listCalendarsUsingGET**](SchedulingApi.md#listCalendarsUsingGET) | **GET** /scheduling/{organizationId}/calendars | List calendars
[**listShiftSchedulesUsingGET**](SchedulingApi.md#listShiftSchedulesUsingGET) | **GET** /scheduling/{organizationId}/shiftSchedules | List ShiftSchedules
[**listShiftSubstitutionsUsingGET**](SchedulingApi.md#listShiftSubstitutionsUsingGET) | **GET** /scheduling/{organizationId}/shiftSubstitutions | List shift substitutions (Override)
[**listStaffSchedulesUsingGET**](SchedulingApi.md#listStaffSchedulesUsingGET) | **GET** /scheduling/{organizationId}/staffSchedules | List StaffSchedules
[**listSubstitutionsUsingGET**](SchedulingApi.md#listSubstitutionsUsingGET) | **GET** /scheduling/{organizationId}/substitutions | List scheduling substitutions (Unavailable/Replacement)
[**updateCalendarsUsingPUT**](SchedulingApi.md#updateCalendarsUsingPUT) | **PUT** /scheduling/{organizationId}/calendars/{ids} | Update calendars
[**updateShiftSchedulesUsingPUT**](SchedulingApi.md#updateShiftSchedulesUsingPUT) | **PUT** /scheduling/{organizationId}/shiftSchedules/{ids} | Update ShiftSchedules
[**updateShiftSubstitutionsUsingPUT**](SchedulingApi.md#updateShiftSubstitutionsUsingPUT) | **PUT** /scheduling/{organizationId}/shiftSubstitutions/{ids} | Update shift substitutions (Override)
[**updateStaffSchedulesUsingPUT**](SchedulingApi.md#updateStaffSchedulesUsingPUT) | **PUT** /scheduling/{organizationId}/staffSchedules/{ids} | Update StaffSchedules
[**updateSubstitutionsUsingPUT**](SchedulingApi.md#updateSubstitutionsUsingPUT) | **PUT** /scheduling/{organizationId}/substitutions/{ids} | Update scheduling substitutions (Unavailable/Replacement)


# **createCalendarsUsingPOST**
> object createCalendarsUsingPOST($authorization, $organization_id, $data)

Create calendars

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The id of the Organization that owns this resource
$data = new \Swagger\Client\Model\HttpRequestBody(); // \Swagger\Client\Model\HttpRequestBody | A calendars object to be created.

try {
    $result = $apiInstance->createCalendarsUsingPOST($authorization, $organization_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulingApi->createCalendarsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The id of the Organization that owns this resource |
 **data** | [**\Swagger\Client\Model\HttpRequestBody**](../Model/HttpRequestBody.md)| A calendars object to be created. |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createShiftScheduleUsingPOST**
> \Swagger\Client\Model\ResponseDocument createShiftScheduleUsingPOST($authorization, $organization_id, $data)

Create ShiftSchedules

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The id of the Organization that owns this resource
$data = new \Swagger\Client\Model\HttpRequestBody(); // \Swagger\Client\Model\HttpRequestBody | A ShiftSchedule object or array of substitution objects to be created.

try {
    $result = $apiInstance->createShiftScheduleUsingPOST($authorization, $organization_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulingApi->createShiftScheduleUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The id of the Organization that owns this resource |
 **data** | [**\Swagger\Client\Model\HttpRequestBody**](../Model/HttpRequestBody.md)| A ShiftSchedule object or array of substitution objects to be created. |

### Return type

[**\Swagger\Client\Model\ResponseDocument**](../Model/ResponseDocument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createShiftSubstitutionsUsingPOST**
> \Swagger\Client\Model\ResponseDocument createShiftSubstitutionsUsingPOST($authorization, $organization_id, $data)

Create shift substitutions (Override)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The id of the Organization that owns this resource
$data = new \Swagger\Client\Model\HttpRequestBody(); // \Swagger\Client\Model\HttpRequestBody | A substitution object or array of substitution objects to be created.

try {
    $result = $apiInstance->createShiftSubstitutionsUsingPOST($authorization, $organization_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulingApi->createShiftSubstitutionsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The id of the Organization that owns this resource |
 **data** | [**\Swagger\Client\Model\HttpRequestBody**](../Model/HttpRequestBody.md)| A substitution object or array of substitution objects to be created. |

### Return type

[**\Swagger\Client\Model\ResponseDocument**](../Model/ResponseDocument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createStaffSchedulesUsingPOST**
> \Swagger\Client\Model\ResponseDocument createStaffSchedulesUsingPOST($authorization, $organization_id, $data)

Create StaffSchedules

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The id of the Organization that owns this resource
$data = new \Swagger\Client\Model\HttpRequestBody(); // \Swagger\Client\Model\HttpRequestBody | A StaffSchedule object or array of substitution objects to be created.

try {
    $result = $apiInstance->createStaffSchedulesUsingPOST($authorization, $organization_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulingApi->createStaffSchedulesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The id of the Organization that owns this resource |
 **data** | [**\Swagger\Client\Model\HttpRequestBody**](../Model/HttpRequestBody.md)| A StaffSchedule object or array of substitution objects to be created. |

### Return type

[**\Swagger\Client\Model\ResponseDocument**](../Model/ResponseDocument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSubstitutionsUsingPOST**
> \Swagger\Client\Model\ResponseDocument createSubstitutionsUsingPOST($authorization, $organization_id, $data)

Create scheduling substitutions (Unavailable/Replacement)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The id of the Organization that owns this resource
$data = new \Swagger\Client\Model\HttpRequestBody(); // \Swagger\Client\Model\HttpRequestBody | A substitution object or array of substitution objects to be created.

try {
    $result = $apiInstance->createSubstitutionsUsingPOST($authorization, $organization_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulingApi->createSubstitutionsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The id of the Organization that owns this resource |
 **data** | [**\Swagger\Client\Model\HttpRequestBody**](../Model/HttpRequestBody.md)| A substitution object or array of substitution objects to be created. |

### Return type

[**\Swagger\Client\Model\ResponseDocument**](../Model/ResponseDocument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCalendarsUsingDELETE**
> object deleteCalendarsUsingDELETE($authorization, $organization_id, $ids)

Delete calendars

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The id of the Organization that owns this resource
$ids = "ids_example"; // string | The id or ids (comma delimmited) of the resources to delete

try {
    $result = $apiInstance->deleteCalendarsUsingDELETE($authorization, $organization_id, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulingApi->deleteCalendarsUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The id of the Organization that owns this resource |
 **ids** | **string**| The id or ids (comma delimmited) of the resources to delete |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteShiftSchedulesUsingDELETE**
> \Swagger\Client\Model\ResponseDocument deleteShiftSchedulesUsingDELETE($authorization, $organization_id, $ids)

Delete ShiftSchedules

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The id of the Organization that owns this resource
$ids = "ids_example"; // string | The id or ids (comma delimmited) of the resources to delete

try {
    $result = $apiInstance->deleteShiftSchedulesUsingDELETE($authorization, $organization_id, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulingApi->deleteShiftSchedulesUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The id of the Organization that owns this resource |
 **ids** | **string**| The id or ids (comma delimmited) of the resources to delete |

### Return type

[**\Swagger\Client\Model\ResponseDocument**](../Model/ResponseDocument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteShiftSubstitutionsUsingDELETE**
> \Swagger\Client\Model\ResponseDocument deleteShiftSubstitutionsUsingDELETE($authorization, $organization_id, $ids)

Delete shift substitutions (Override)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The id of the Organization that owns this resource
$ids = "ids_example"; // string | The id or ids (comma delimmited) of the resources to delete

try {
    $result = $apiInstance->deleteShiftSubstitutionsUsingDELETE($authorization, $organization_id, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulingApi->deleteShiftSubstitutionsUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The id of the Organization that owns this resource |
 **ids** | **string**| The id or ids (comma delimmited) of the resources to delete |

### Return type

[**\Swagger\Client\Model\ResponseDocument**](../Model/ResponseDocument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteStaffSchedulesUsingDELETE**
> \Swagger\Client\Model\ResponseDocument deleteStaffSchedulesUsingDELETE($authorization, $organization_id, $ids)

Delete StaffSchedules

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The id of the Organization that owns this resource
$ids = "ids_example"; // string | The id or ids (comma delimmited) of the resources to delete

try {
    $result = $apiInstance->deleteStaffSchedulesUsingDELETE($authorization, $organization_id, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulingApi->deleteStaffSchedulesUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The id of the Organization that owns this resource |
 **ids** | **string**| The id or ids (comma delimmited) of the resources to delete |

### Return type

[**\Swagger\Client\Model\ResponseDocument**](../Model/ResponseDocument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSubstitutionsUsingDELETE**
> \Swagger\Client\Model\ResponseDocument deleteSubstitutionsUsingDELETE($authorization, $organization_id, $ids)

Delete scheduling substitutions (Unavailable/Replacement)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The id of the Organization that owns this resource
$ids = "ids_example"; // string | The id or ids (comma delimmited) of the resources to delete

try {
    $result = $apiInstance->deleteSubstitutionsUsingDELETE($authorization, $organization_id, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulingApi->deleteSubstitutionsUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The id of the Organization that owns this resource |
 **ids** | **string**| The id or ids (comma delimmited) of the resources to delete |

### Return type

[**\Swagger\Client\Model\ResponseDocument**](../Model/ResponseDocument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findCalendarUsingGET**
> object findCalendarUsingGET($authorization, $organization_id, $ids)

Get a single calendar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The id of the Organization that owns this resource
$ids = "ids_example"; // string | The id or ids (comma delimmited) of the resources to find

try {
    $result = $apiInstance->findCalendarUsingGET($authorization, $organization_id, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulingApi->findCalendarUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The id of the Organization that owns this resource |
 **ids** | **string**| The id or ids (comma delimmited) of the resources to find |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findShiftScheduleUsingGET**
> \Swagger\Client\Model\ResponseDocument findShiftScheduleUsingGET($authorization, $organization_id, $ids, $fields, $include)

Get a ShiftSchedule by id(s)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The id of the Organization that owns this resource
$ids = "ids_example"; // string | The id or ids (comma delimmited) of the resources to find
$fields = "fields_example"; // string | <p>fields to be included in the response.</p><p>fields[resourceName] may be used to specify fields returned for included documents. When doing so, it is not necessary to also request to include the resource as the include is implied by the fields request</p>
$include = "include_example"; // string | <p>Specifying the includes parameter will result in a compound document response, adding resources to included which have been referenced by resources returned in data.<p><p>include may be specified as a comma delimited list of resource names.</p>

try {
    $result = $apiInstance->findShiftScheduleUsingGET($authorization, $organization_id, $ids, $fields, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulingApi->findShiftScheduleUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The id of the Organization that owns this resource |
 **ids** | **string**| The id or ids (comma delimmited) of the resources to find |
 **fields** | **string**| &lt;p&gt;fields to be included in the response.&lt;/p&gt;&lt;p&gt;fields[resourceName] may be used to specify fields returned for included documents. When doing so, it is not necessary to also request to include the resource as the include is implied by the fields request&lt;/p&gt; | [optional]
 **include** | **string**| &lt;p&gt;Specifying the includes parameter will result in a compound document response, adding resources to included which have been referenced by resources returned in data.&lt;p&gt;&lt;p&gt;include may be specified as a comma delimited list of resource names.&lt;/p&gt; | [optional]

### Return type

[**\Swagger\Client\Model\ResponseDocument**](../Model/ResponseDocument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findShiftSubstitutionUsingGET**
> \Swagger\Client\Model\ResponseDocument findShiftSubstitutionUsingGET($authorization, $organization_id, $ids, $fields, $include)

Get one or more shift substitutions by id (Override)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The id of the Organization that owns this resource
$ids = "ids_example"; // string | The id or ids (comma delimmited) of the resources to find
$fields = "fields_example"; // string | <p>fields to be included in the response.</p><p>fields[resourceName] may be used to specify fields returned for included documents. When doing so, it is not necessary to also request to include the resource as the include is implied by the fields request</p>
$include = "include_example"; // string | <p>Specifying the includes parameter will result in a compound document response, adding resources to included which have been referenced by resources returned in data.<p><p>include may be specified as a comma delimited list of resource names.</p>

try {
    $result = $apiInstance->findShiftSubstitutionUsingGET($authorization, $organization_id, $ids, $fields, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulingApi->findShiftSubstitutionUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The id of the Organization that owns this resource |
 **ids** | **string**| The id or ids (comma delimmited) of the resources to find |
 **fields** | **string**| &lt;p&gt;fields to be included in the response.&lt;/p&gt;&lt;p&gt;fields[resourceName] may be used to specify fields returned for included documents. When doing so, it is not necessary to also request to include the resource as the include is implied by the fields request&lt;/p&gt; | [optional]
 **include** | **string**| &lt;p&gt;Specifying the includes parameter will result in a compound document response, adding resources to included which have been referenced by resources returned in data.&lt;p&gt;&lt;p&gt;include may be specified as a comma delimited list of resource names.&lt;/p&gt; | [optional]

### Return type

[**\Swagger\Client\Model\ResponseDocument**](../Model/ResponseDocument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findStaffScheduleUsingGET**
> \Swagger\Client\Model\ResponseDocument findStaffScheduleUsingGET($authorization, $organization_id, $ids, $fields, $include)

Get a StaffSchedule by id(s)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The id of the Organization that owns this resource
$ids = "ids_example"; // string | The id or ids (comma delimmited) of the resources to find
$fields = "fields_example"; // string | <p>fields to be included in the response.</p><p>fields[resourceName] may be used to specify fields returned for included documents. When doing so, it is not necessary to also request to include the resource as the include is implied by the fields request</p>
$include = "include_example"; // string | <p>Specifying the includes parameter will result in a compound document response, adding resources to included which have been referenced by resources returned in data.<p><p>include may be specified as a comma delimited list of resource names.</p>

try {
    $result = $apiInstance->findStaffScheduleUsingGET($authorization, $organization_id, $ids, $fields, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulingApi->findStaffScheduleUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The id of the Organization that owns this resource |
 **ids** | **string**| The id or ids (comma delimmited) of the resources to find |
 **fields** | **string**| &lt;p&gt;fields to be included in the response.&lt;/p&gt;&lt;p&gt;fields[resourceName] may be used to specify fields returned for included documents. When doing so, it is not necessary to also request to include the resource as the include is implied by the fields request&lt;/p&gt; | [optional]
 **include** | **string**| &lt;p&gt;Specifying the includes parameter will result in a compound document response, adding resources to included which have been referenced by resources returned in data.&lt;p&gt;&lt;p&gt;include may be specified as a comma delimited list of resource names.&lt;/p&gt; | [optional]

### Return type

[**\Swagger\Client\Model\ResponseDocument**](../Model/ResponseDocument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findSubstitutionUsingGET**
> \Swagger\Client\Model\ResponseDocument findSubstitutionUsingGET($authorization, $organization_id, $ids, $fields, $include)

Get a single substitution(s) (Unavailable/Replacement)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The id of the Organization that owns this resource
$ids = "ids_example"; // string | The id or ids (comma delimmited) of the resources to find
$fields = "fields_example"; // string | <p>fields to be included in the response.</p><p>fields[resourceName] may be used to specify fields returned for included documents. When doing so, it is not necessary to also request to include the resource as the include is implied by the fields request</p>
$include = "include_example"; // string | <p>Specifying the includes parameter will result in a compound document response, adding resources to included which have been referenced by resources returned in data.<p><p>include may be specified as a comma delimited list of resource names.</p>

try {
    $result = $apiInstance->findSubstitutionUsingGET($authorization, $organization_id, $ids, $fields, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulingApi->findSubstitutionUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The id of the Organization that owns this resource |
 **ids** | **string**| The id or ids (comma delimmited) of the resources to find |
 **fields** | **string**| &lt;p&gt;fields to be included in the response.&lt;/p&gt;&lt;p&gt;fields[resourceName] may be used to specify fields returned for included documents. When doing so, it is not necessary to also request to include the resource as the include is implied by the fields request&lt;/p&gt; | [optional]
 **include** | **string**| &lt;p&gt;Specifying the includes parameter will result in a compound document response, adding resources to included which have been referenced by resources returned in data.&lt;p&gt;&lt;p&gt;include may be specified as a comma delimited list of resource names.&lt;/p&gt; | [optional]

### Return type

[**\Swagger\Client\Model\ResponseDocument**](../Model/ResponseDocument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAuditsUsingGET**
> \Swagger\Client\Model\SchedulingAudit listAuditsUsingGET($authorization, $organization_id, $fields, $filter, $calendar_id, $shift_schedule_id, $staff_schedule_id, $staff_substitution_id, $shift_schedule_substitution_id, $action, $created_date_gte, $created_date_lte, $sort, $page_size, $page_no)

List scheduling audits

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The id of the Organization that owns this resource
$fields = "fields_example"; // string | Fields to be included in the response.
$filter = "filter_example"; // string | <p>filter may be used to specify filter criteria for the request.</p><p>filters are specified in the format of filter[fieldName], where fieldName is any field supported by this resource.</p><p>multiple filter criteria will result in AND conditions, with the exception of multiple filters on the same field, in which case the criteria will be treated as an OR condition</p><p> Ex. filter[calendarId]=1234567890, filter[action]=CREATE, filter[auditResource.type]=calendar, etc.</p>
$calendar_id = array(56); // int[] | One or more calendarIds that this request should filter by.
$shift_schedule_id = array(56); // int[] | One or more shiftScheduleIds that this request should filter by.
$staff_schedule_id = array(56); // int[] | One or more staffScheduleIds that this request should filter by.
$staff_substitution_id = array(56); // int[] | One or more staffSubstitutionIds (unavailability/replacement) that this request should filter by.
$shift_schedule_substitution_id = array(56); // int[] | One or more shiftScheduleSubstitutionIds (override) that this request should filter by.
$action = "action_example"; // string | Audit CRUD action type that this request should filter by.
$created_date_gte = "created_date_gte_example"; // string | <p>Start date (in UTC +0) of the audits that this request should filter by.</p><p> Ex. 2019-01-08 or 2019-01-08T00:00:00Z
$created_date_lte = "created_date_lte_example"; // string | <p>End date (in UTC +0) of the audits that this request should filter by.</p><p> Ex. 2019-01-09 or 2019-01-09T00:00:00Z
$sort = "sort_example"; // string | <p>Comma delimited list of fields to sort by.</p><p> +/- can precede the field name to indicate direction (ascending/descending).</p><p> + is the default direction.</p><p> Ex. sort=action,-createdDate sorts by the action ascending and createdDate descending.</p><p> Audit records are by default sorted by the createdDate descending.</p>
$page_size = 56; // int | The number of records per page to be included in the response
$page_no = 56; // int | The page to be returned.

try {
    $result = $apiInstance->listAuditsUsingGET($authorization, $organization_id, $fields, $filter, $calendar_id, $shift_schedule_id, $staff_schedule_id, $staff_substitution_id, $shift_schedule_substitution_id, $action, $created_date_gte, $created_date_lte, $sort, $page_size, $page_no);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulingApi->listAuditsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The id of the Organization that owns this resource |
 **fields** | **string**| Fields to be included in the response. | [optional]
 **filter** | **string**| &lt;p&gt;filter may be used to specify filter criteria for the request.&lt;/p&gt;&lt;p&gt;filters are specified in the format of filter[fieldName], where fieldName is any field supported by this resource.&lt;/p&gt;&lt;p&gt;multiple filter criteria will result in AND conditions, with the exception of multiple filters on the same field, in which case the criteria will be treated as an OR condition&lt;/p&gt;&lt;p&gt; Ex. filter[calendarId]&#x3D;1234567890, filter[action]&#x3D;CREATE, filter[auditResource.type]&#x3D;calendar, etc.&lt;/p&gt; | [optional]
 **calendar_id** | [**int[]**](../Model/int.md)| One or more calendarIds that this request should filter by. | [optional]
 **shift_schedule_id** | [**int[]**](../Model/int.md)| One or more shiftScheduleIds that this request should filter by. | [optional]
 **staff_schedule_id** | [**int[]**](../Model/int.md)| One or more staffScheduleIds that this request should filter by. | [optional]
 **staff_substitution_id** | [**int[]**](../Model/int.md)| One or more staffSubstitutionIds (unavailability/replacement) that this request should filter by. | [optional]
 **shift_schedule_substitution_id** | [**int[]**](../Model/int.md)| One or more shiftScheduleSubstitutionIds (override) that this request should filter by. | [optional]
 **action** | **string**| Audit CRUD action type that this request should filter by. | [optional]
 **created_date_gte** | **string**| &lt;p&gt;Start date (in UTC +0) of the audits that this request should filter by.&lt;/p&gt;&lt;p&gt; Ex. 2019-01-08 or 2019-01-08T00:00:00Z | [optional]
 **created_date_lte** | **string**| &lt;p&gt;End date (in UTC +0) of the audits that this request should filter by.&lt;/p&gt;&lt;p&gt; Ex. 2019-01-09 or 2019-01-09T00:00:00Z | [optional]
 **sort** | **string**| &lt;p&gt;Comma delimited list of fields to sort by.&lt;/p&gt;&lt;p&gt; +/- can precede the field name to indicate direction (ascending/descending).&lt;/p&gt;&lt;p&gt; + is the default direction.&lt;/p&gt;&lt;p&gt; Ex. sort&#x3D;action,-createdDate sorts by the action ascending and createdDate descending.&lt;/p&gt;&lt;p&gt; Audit records are by default sorted by the createdDate descending.&lt;/p&gt; | [optional]
 **page_size** | **int**| The number of records per page to be included in the response | [optional]
 **page_no** | **int**| The page to be returned. | [optional]

### Return type

[**\Swagger\Client\Model\SchedulingAudit**](../Model/SchedulingAudit.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCalendarEventsUsingGET**
> \Swagger\Client\Model\FlatCalendarEvent listCalendarEventsUsingGET($authorization, $organization_id, $fields, $include, $start, $end, $instant, $days, $calendar_id, $shift_schedule_id)

List of events and their corresponding assignments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The id of the Organization that owns this resource
$fields = "fields_example"; // string | <p>fields to be included in the response.</p><p>fields[resourceName] may be used to specify fields returned for included documents. When doing so, it is not necessary to also request to include the resource as the include is implied by the fields request</p>
$include = "include_example"; // string | <p>Specifying the includes parameter will result in a compound document response, adding resources to included which have been referenced by resources returned in data.<p><p>include may be specified as a comma delimited list of resource names.</p>
$start = "start_example"; // string | Start date/time to fetch events from.
$end = "end_example"; // string | End date/time of the interval to fetch events from.
$instant = "instant_example"; // string | Instant to fetch events for.
$days = 56; // int | Number of days to fetch events for.
$calendar_id = "calendar_id_example"; // string | IDs for calendars that this request should filter by.
$shift_schedule_id = "shift_schedule_id_example"; // string | IDs for shifts that this request should filter by.

try {
    $result = $apiInstance->listCalendarEventsUsingGET($authorization, $organization_id, $fields, $include, $start, $end, $instant, $days, $calendar_id, $shift_schedule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulingApi->listCalendarEventsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The id of the Organization that owns this resource |
 **fields** | **string**| &lt;p&gt;fields to be included in the response.&lt;/p&gt;&lt;p&gt;fields[resourceName] may be used to specify fields returned for included documents. When doing so, it is not necessary to also request to include the resource as the include is implied by the fields request&lt;/p&gt; | [optional]
 **include** | **string**| &lt;p&gt;Specifying the includes parameter will result in a compound document response, adding resources to included which have been referenced by resources returned in data.&lt;p&gt;&lt;p&gt;include may be specified as a comma delimited list of resource names.&lt;/p&gt; | [optional]
 **start** | **string**| Start date/time to fetch events from. | [optional]
 **end** | **string**| End date/time of the interval to fetch events from. | [optional]
 **instant** | **string**| Instant to fetch events for. | [optional]
 **days** | **int**| Number of days to fetch events for. | [optional]
 **calendar_id** | **string**| IDs for calendars that this request should filter by. | [optional]
 **shift_schedule_id** | **string**| IDs for shifts that this request should filter by. | [optional]

### Return type

[**\Swagger\Client\Model\FlatCalendarEvent**](../Model/FlatCalendarEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCalendarsUsingGET**
> object listCalendarsUsingGET($authorization, $organization_id)

List calendars

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The id of the Organization that owns this resource

try {
    $result = $apiInstance->listCalendarsUsingGET($authorization, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulingApi->listCalendarsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The id of the Organization that owns this resource |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listShiftSchedulesUsingGET**
> \Swagger\Client\Model\ResponseDocument listShiftSchedulesUsingGET($authorization, $organization_id, $fields, $include, $filter, $sort, $page_size, $page_no)

List ShiftSchedules

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The id of the Organization that owns this resource
$fields = "fields_example"; // string | <p>fields to be included in the response.</p><p>fields[resourceName] may be used to specify fields returned for included documents. When doing so, it is not necessary to also request to include the resource as the include is implied by the fields request</p>
$include = "include_example"; // string | <p>Specifying the includes parameter will result in a compound document response, adding resources to included which have been referenced by resources returned in data.<p><p>include may be specified as a comma delimited list of resource names.</p>
$filter = "filter_example"; // string | <p>filter may be used to specify filter criteria for the request.</p><p>filters are specified in the format of filter[fieldName], where fieldName is any field supported by this resource.</p><p>multiple filter criteria will result in AND conditions, with the exception of multiple filters on the same field, in which case the criteria will be treated as an OR condition</p>
$sort = "sort_example"; // string | <p>Comma delimited list of fields to sort by.</p><p> +/- can precede the field name to indicate direction (ascending/descending).</p><p> + is the default direction</p><p> Ex. sort=status,-createdDate sorts by status ascending and createdDate descending</p>
$page_size = 56; // int | The number of records per page to be included in the response
$page_no = 56; // int | The page to be returned.

try {
    $result = $apiInstance->listShiftSchedulesUsingGET($authorization, $organization_id, $fields, $include, $filter, $sort, $page_size, $page_no);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulingApi->listShiftSchedulesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The id of the Organization that owns this resource |
 **fields** | **string**| &lt;p&gt;fields to be included in the response.&lt;/p&gt;&lt;p&gt;fields[resourceName] may be used to specify fields returned for included documents. When doing so, it is not necessary to also request to include the resource as the include is implied by the fields request&lt;/p&gt; | [optional]
 **include** | **string**| &lt;p&gt;Specifying the includes parameter will result in a compound document response, adding resources to included which have been referenced by resources returned in data.&lt;p&gt;&lt;p&gt;include may be specified as a comma delimited list of resource names.&lt;/p&gt; | [optional]
 **filter** | **string**| &lt;p&gt;filter may be used to specify filter criteria for the request.&lt;/p&gt;&lt;p&gt;filters are specified in the format of filter[fieldName], where fieldName is any field supported by this resource.&lt;/p&gt;&lt;p&gt;multiple filter criteria will result in AND conditions, with the exception of multiple filters on the same field, in which case the criteria will be treated as an OR condition&lt;/p&gt; | [optional]
 **sort** | **string**| &lt;p&gt;Comma delimited list of fields to sort by.&lt;/p&gt;&lt;p&gt; +/- can precede the field name to indicate direction (ascending/descending).&lt;/p&gt;&lt;p&gt; + is the default direction&lt;/p&gt;&lt;p&gt; Ex. sort&#x3D;status,-createdDate sorts by status ascending and createdDate descending&lt;/p&gt; | [optional]
 **page_size** | **int**| The number of records per page to be included in the response | [optional]
 **page_no** | **int**| The page to be returned. | [optional]

### Return type

[**\Swagger\Client\Model\ResponseDocument**](../Model/ResponseDocument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listShiftSubstitutionsUsingGET**
> \Swagger\Client\Model\ResponseDocument listShiftSubstitutionsUsingGET($authorization, $organization_id, $fields, $include, $filter, $sort, $page_size, $page_no)

List shift substitutions (Override)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The id of the Organization that owns this resource
$fields = "fields_example"; // string | <p>fields to be included in the response.</p><p>fields[resourceName] may be used to specify fields returned for included documents. When doing so, it is not necessary to also request to include the resource as the include is implied by the fields request</p>
$include = "include_example"; // string | <p>Specifying the includes parameter will result in a compound document response, adding resources to included which have been referenced by resources returned in data.<p><p>include may be specified as a comma delimited list of resource names.</p>
$filter = "filter_example"; // string | <p>filter may be used to specify filter criteria for the request.</p><p>filters are specified in the format of filter[fieldName], where fieldName is any field supported by this resource.</p><p>multiple filter criteria will result in AND conditions, with the exception of multiple filters on the same field, in which case the criteria will be treated as an OR condition</p>
$sort = "sort_example"; // string | <p>Comma delimited list of fields to sort by.</p><p> +/- can precede the field name to indicate direction (ascending/descending).</p><p> + is the default direction</p><p> Ex. sort=status,-createdDate sorts by status ascending and createdDate descending</p>
$page_size = 56; // int | The number of records per page to be included in the response
$page_no = 56; // int | The page to be returned.

try {
    $result = $apiInstance->listShiftSubstitutionsUsingGET($authorization, $organization_id, $fields, $include, $filter, $sort, $page_size, $page_no);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulingApi->listShiftSubstitutionsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The id of the Organization that owns this resource |
 **fields** | **string**| &lt;p&gt;fields to be included in the response.&lt;/p&gt;&lt;p&gt;fields[resourceName] may be used to specify fields returned for included documents. When doing so, it is not necessary to also request to include the resource as the include is implied by the fields request&lt;/p&gt; | [optional]
 **include** | **string**| &lt;p&gt;Specifying the includes parameter will result in a compound document response, adding resources to included which have been referenced by resources returned in data.&lt;p&gt;&lt;p&gt;include may be specified as a comma delimited list of resource names.&lt;/p&gt; | [optional]
 **filter** | **string**| &lt;p&gt;filter may be used to specify filter criteria for the request.&lt;/p&gt;&lt;p&gt;filters are specified in the format of filter[fieldName], where fieldName is any field supported by this resource.&lt;/p&gt;&lt;p&gt;multiple filter criteria will result in AND conditions, with the exception of multiple filters on the same field, in which case the criteria will be treated as an OR condition&lt;/p&gt; | [optional]
 **sort** | **string**| &lt;p&gt;Comma delimited list of fields to sort by.&lt;/p&gt;&lt;p&gt; +/- can precede the field name to indicate direction (ascending/descending).&lt;/p&gt;&lt;p&gt; + is the default direction&lt;/p&gt;&lt;p&gt; Ex. sort&#x3D;status,-createdDate sorts by status ascending and createdDate descending&lt;/p&gt; | [optional]
 **page_size** | **int**| The number of records per page to be included in the response | [optional]
 **page_no** | **int**| The page to be returned. | [optional]

### Return type

[**\Swagger\Client\Model\ResponseDocument**](../Model/ResponseDocument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listStaffSchedulesUsingGET**
> \Swagger\Client\Model\ResponseDocument listStaffSchedulesUsingGET($authorization, $organization_id, $fields, $include, $filter, $sort, $page_size, $page_no)

List StaffSchedules

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The id of the Organization that owns this resource
$fields = "fields_example"; // string | <p>fields to be included in the response.</p><p>fields[resourceName] may be used to specify fields returned for included documents. When doing so, it is not necessary to also request to include the resource as the include is implied by the fields request</p>
$include = "include_example"; // string | <p>Specifying the includes parameter will result in a compound document response, adding resources to included which have been referenced by resources returned in data.<p><p>include may be specified as a comma delimited list of resource names.</p>
$filter = "filter_example"; // string | <p>filter may be used to specify filter criteria for the request.</p><p>filters are specified in the format of filter[fieldName], where fieldName is any field supported by this resource.</p><p>multiple filter criteria will result in AND conditions, with the exception of multiple filters on the same field, in which case the criteria will be treated as an OR condition</p>
$sort = "sort_example"; // string | <p>Comma delimited list of fields to sort by.</p><p> +/- can precede the field name to indicate direction (ascending/descending).</p><p> + is the default direction</p><p> Ex. sort=status,-createdDate sorts by status ascending and createdDate descending</p>
$page_size = 56; // int | The number of records per page to be included in the response
$page_no = 56; // int | The page to be returned.

try {
    $result = $apiInstance->listStaffSchedulesUsingGET($authorization, $organization_id, $fields, $include, $filter, $sort, $page_size, $page_no);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulingApi->listStaffSchedulesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The id of the Organization that owns this resource |
 **fields** | **string**| &lt;p&gt;fields to be included in the response.&lt;/p&gt;&lt;p&gt;fields[resourceName] may be used to specify fields returned for included documents. When doing so, it is not necessary to also request to include the resource as the include is implied by the fields request&lt;/p&gt; | [optional]
 **include** | **string**| &lt;p&gt;Specifying the includes parameter will result in a compound document response, adding resources to included which have been referenced by resources returned in data.&lt;p&gt;&lt;p&gt;include may be specified as a comma delimited list of resource names.&lt;/p&gt; | [optional]
 **filter** | **string**| &lt;p&gt;filter may be used to specify filter criteria for the request.&lt;/p&gt;&lt;p&gt;filters are specified in the format of filter[fieldName], where fieldName is any field supported by this resource.&lt;/p&gt;&lt;p&gt;multiple filter criteria will result in AND conditions, with the exception of multiple filters on the same field, in which case the criteria will be treated as an OR condition&lt;/p&gt; | [optional]
 **sort** | **string**| &lt;p&gt;Comma delimited list of fields to sort by.&lt;/p&gt;&lt;p&gt; +/- can precede the field name to indicate direction (ascending/descending).&lt;/p&gt;&lt;p&gt; + is the default direction&lt;/p&gt;&lt;p&gt; Ex. sort&#x3D;status,-createdDate sorts by status ascending and createdDate descending&lt;/p&gt; | [optional]
 **page_size** | **int**| The number of records per page to be included in the response | [optional]
 **page_no** | **int**| The page to be returned. | [optional]

### Return type

[**\Swagger\Client\Model\ResponseDocument**](../Model/ResponseDocument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSubstitutionsUsingGET**
> \Swagger\Client\Model\ResponseDocument listSubstitutionsUsingGET($authorization, $organization_id, $fields, $include, $filter, $sort, $page_size, $page_no)

List scheduling substitutions (Unavailable/Replacement)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The id of the Organization that owns this resource
$fields = "fields_example"; // string | <p>fields to be included in the response.</p><p>fields[resourceName] may be used to specify fields returned for included documents. When doing so, it is not necessary to also request to include the resource as the include is implied by the fields request</p>
$include = "include_example"; // string | <p>Specifying the includes parameter will result in a compound document response, adding resources to included which have been referenced by resources returned in data.<p><p>include may be specified as a comma delimited list of resource names.</p>
$filter = "filter_example"; // string | <p>filter may be used to specify filter criteria for the request.</p><p>filters are specified in the format of filter[fieldName], where fieldName is any field supported by this resource.</p><p>multiple filter criteria will result in AND conditions, with the exception of multiple filters on the same field, in which case the criteria will be treated as an OR condition</p>
$sort = "sort_example"; // string | <p>Comma delimited list of fields to sort by.</p><p> +/- can precede the field name to indicate direction (ascending/descending).</p><p> + is the default direction</p><p> Ex. sort=status,-createdDate sorts by status ascending and createdDate descending</p>
$page_size = 56; // int | The number of records per page to be included in the response
$page_no = 56; // int | The page to be returned.

try {
    $result = $apiInstance->listSubstitutionsUsingGET($authorization, $organization_id, $fields, $include, $filter, $sort, $page_size, $page_no);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulingApi->listSubstitutionsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The id of the Organization that owns this resource |
 **fields** | **string**| &lt;p&gt;fields to be included in the response.&lt;/p&gt;&lt;p&gt;fields[resourceName] may be used to specify fields returned for included documents. When doing so, it is not necessary to also request to include the resource as the include is implied by the fields request&lt;/p&gt; | [optional]
 **include** | **string**| &lt;p&gt;Specifying the includes parameter will result in a compound document response, adding resources to included which have been referenced by resources returned in data.&lt;p&gt;&lt;p&gt;include may be specified as a comma delimited list of resource names.&lt;/p&gt; | [optional]
 **filter** | **string**| &lt;p&gt;filter may be used to specify filter criteria for the request.&lt;/p&gt;&lt;p&gt;filters are specified in the format of filter[fieldName], where fieldName is any field supported by this resource.&lt;/p&gt;&lt;p&gt;multiple filter criteria will result in AND conditions, with the exception of multiple filters on the same field, in which case the criteria will be treated as an OR condition&lt;/p&gt; | [optional]
 **sort** | **string**| &lt;p&gt;Comma delimited list of fields to sort by.&lt;/p&gt;&lt;p&gt; +/- can precede the field name to indicate direction (ascending/descending).&lt;/p&gt;&lt;p&gt; + is the default direction&lt;/p&gt;&lt;p&gt; Ex. sort&#x3D;status,-createdDate sorts by status ascending and createdDate descending&lt;/p&gt; | [optional]
 **page_size** | **int**| The number of records per page to be included in the response | [optional]
 **page_no** | **int**| The page to be returned. | [optional]

### Return type

[**\Swagger\Client\Model\ResponseDocument**](../Model/ResponseDocument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCalendarsUsingPUT**
> object updateCalendarsUsingPUT($authorization, $organization_id, $ids, $data)

Update calendars

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The id of the Organization that owns this resource
$ids = "ids_example"; // string | The id or ids (comma delimmited) of the resources to update
$data = new \Swagger\Client\Model\HttpRequestBody(); // \Swagger\Client\Model\HttpRequestBody | A calendars object to be updated. Supports partial updates - one or more fields may be included in the request and only the fields specified will be updated. To remove a field, the field must be explicitly passed with a null value. PUT is treated as PATCH as object replacement is not supported.

try {
    $result = $apiInstance->updateCalendarsUsingPUT($authorization, $organization_id, $ids, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulingApi->updateCalendarsUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The id of the Organization that owns this resource |
 **ids** | **string**| The id or ids (comma delimmited) of the resources to update |
 **data** | [**\Swagger\Client\Model\HttpRequestBody**](../Model/HttpRequestBody.md)| A calendars object to be updated. Supports partial updates - one or more fields may be included in the request and only the fields specified will be updated. To remove a field, the field must be explicitly passed with a null value. PUT is treated as PATCH as object replacement is not supported. |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateShiftSchedulesUsingPUT**
> \Swagger\Client\Model\ResponseDocument updateShiftSchedulesUsingPUT($authorization, $organization_id, $ids, $data)

Update ShiftSchedules

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The id of the Organization that owns this resource
$ids = "ids_example"; // string | The id or ids (comma delimmited) of the resources to update
$data = new \Swagger\Client\Model\HttpRequestBody(); // \Swagger\Client\Model\HttpRequestBody | A ShiftSchedule object to be updated. Supports partial updates - one or more fields may be included in the request and only the fields specified will be updated. To remove a field, the field must be explicitly passed with a null value. PUT is treated as PATCH as object replacement is not supported.

try {
    $result = $apiInstance->updateShiftSchedulesUsingPUT($authorization, $organization_id, $ids, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulingApi->updateShiftSchedulesUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The id of the Organization that owns this resource |
 **ids** | **string**| The id or ids (comma delimmited) of the resources to update |
 **data** | [**\Swagger\Client\Model\HttpRequestBody**](../Model/HttpRequestBody.md)| A ShiftSchedule object to be updated. Supports partial updates - one or more fields may be included in the request and only the fields specified will be updated. To remove a field, the field must be explicitly passed with a null value. PUT is treated as PATCH as object replacement is not supported. |

### Return type

[**\Swagger\Client\Model\ResponseDocument**](../Model/ResponseDocument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateShiftSubstitutionsUsingPUT**
> \Swagger\Client\Model\ResponseDocument updateShiftSubstitutionsUsingPUT($authorization, $organization_id, $ids, $data)

Update shift substitutions (Override)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The id of the Organization that owns this resource
$ids = "ids_example"; // string | The id or ids (comma delimmited) of the resources to update
$data = new \Swagger\Client\Model\HttpRequestBody(); // \Swagger\Client\Model\HttpRequestBody | A substitution object to be updated. Supports partial updates - one or more fields may be included in the request and only the fields specified will be updated. To remove a field, the field must be explicitly passed with a null value. PUT is treated as PATCH as object replacement is not supported.

try {
    $result = $apiInstance->updateShiftSubstitutionsUsingPUT($authorization, $organization_id, $ids, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulingApi->updateShiftSubstitutionsUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The id of the Organization that owns this resource |
 **ids** | **string**| The id or ids (comma delimmited) of the resources to update |
 **data** | [**\Swagger\Client\Model\HttpRequestBody**](../Model/HttpRequestBody.md)| A substitution object to be updated. Supports partial updates - one or more fields may be included in the request and only the fields specified will be updated. To remove a field, the field must be explicitly passed with a null value. PUT is treated as PATCH as object replacement is not supported. |

### Return type

[**\Swagger\Client\Model\ResponseDocument**](../Model/ResponseDocument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStaffSchedulesUsingPUT**
> \Swagger\Client\Model\ResponseDocument updateStaffSchedulesUsingPUT($authorization, $organization_id, $ids, $data)

Update StaffSchedules

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The id of the Organization that owns this resource
$ids = "ids_example"; // string | The id or ids (comma delimmited) of the resources to update
$data = new \Swagger\Client\Model\HttpRequestBody(); // \Swagger\Client\Model\HttpRequestBody | A StaffSchedule object to be updated. Supports partial updates - one or more fields may be included in the request and only the fields specified will be updated. To remove a field, the field must be explicitly passed with a null value. PUT is treated as PATCH as object replacement is not supported.

try {
    $result = $apiInstance->updateStaffSchedulesUsingPUT($authorization, $organization_id, $ids, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulingApi->updateStaffSchedulesUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The id of the Organization that owns this resource |
 **ids** | **string**| The id or ids (comma delimmited) of the resources to update |
 **data** | [**\Swagger\Client\Model\HttpRequestBody**](../Model/HttpRequestBody.md)| A StaffSchedule object to be updated. Supports partial updates - one or more fields may be included in the request and only the fields specified will be updated. To remove a field, the field must be explicitly passed with a null value. PUT is treated as PATCH as object replacement is not supported. |

### Return type

[**\Swagger\Client\Model\ResponseDocument**](../Model/ResponseDocument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSubstitutionsUsingPUT**
> \Swagger\Client\Model\ResponseDocument updateSubstitutionsUsingPUT($authorization, $organization_id, $ids, $data)

Update scheduling substitutions (Unavailable/Replacement)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchedulingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | Basic Authorization header
$organization_id = 789; // int | The id of the Organization that owns this resource
$ids = "ids_example"; // string | The id or ids (comma delimmited) of the resources to update
$data = new \Swagger\Client\Model\HttpRequestBody(); // \Swagger\Client\Model\HttpRequestBody | A substitution object to be updated. Supports partial updates - one or more fields may be included in the request and only the fields specified will be updated. To remove a field, the field must be explicitly passed with a null value. PUT is treated as PATCH as object replacement is not supported.

try {
    $result = $apiInstance->updateSubstitutionsUsingPUT($authorization, $organization_id, $ids, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulingApi->updateSubstitutionsUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Basic Authorization header |
 **organization_id** | **int**| The id of the Organization that owns this resource |
 **ids** | **string**| The id or ids (comma delimmited) of the resources to update |
 **data** | [**\Swagger\Client\Model\HttpRequestBody**](../Model/HttpRequestBody.md)| A substitution object to be updated. Supports partial updates - one or more fields may be included in the request and only the fields specified will be updated. To remove a field, the field must be explicitly passed with a null value. PUT is treated as PATCH as object replacement is not supported. |

### Return type

[**\Swagger\Client\Model\ResponseDocument**](../Model/ResponseDocument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

