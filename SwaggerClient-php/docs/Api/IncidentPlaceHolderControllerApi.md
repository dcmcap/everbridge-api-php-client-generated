# Swagger\Client\IncidentPlaceHolderControllerApi

All URIs are relative to *https://api.everbridge.net/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**startWithIncidentUsingDELETE**](IncidentPlaceHolderControllerApi.md#startWithIncidentUsingDELETE) | **DELETE** /incident*/** | startWithIncident
[**startWithIncidentUsingGET**](IncidentPlaceHolderControllerApi.md#startWithIncidentUsingGET) | **GET** /incident*/** | startWithIncident
[**startWithIncidentUsingHEAD**](IncidentPlaceHolderControllerApi.md#startWithIncidentUsingHEAD) | **HEAD** /incident*/** | startWithIncident
[**startWithIncidentUsingOPTIONS**](IncidentPlaceHolderControllerApi.md#startWithIncidentUsingOPTIONS) | **OPTIONS** /incident*/** | startWithIncident
[**startWithIncidentUsingPATCH**](IncidentPlaceHolderControllerApi.md#startWithIncidentUsingPATCH) | **PATCH** /incident*/** | startWithIncident
[**startWithIncidentUsingPOST**](IncidentPlaceHolderControllerApi.md#startWithIncidentUsingPOST) | **POST** /incident*/** | startWithIncident
[**startWithIncidentUsingPUT**](IncidentPlaceHolderControllerApi.md#startWithIncidentUsingPUT) | **PUT** /incident*/** | startWithIncident
[**startWithInternalIncidentUsingDELETE**](IncidentPlaceHolderControllerApi.md#startWithInternalIncidentUsingDELETE) | **DELETE** /internal/incident*/** | startWithInternalIncident
[**startWithInternalIncidentUsingGET**](IncidentPlaceHolderControllerApi.md#startWithInternalIncidentUsingGET) | **GET** /internal/incident*/** | startWithInternalIncident
[**startWithInternalIncidentUsingHEAD**](IncidentPlaceHolderControllerApi.md#startWithInternalIncidentUsingHEAD) | **HEAD** /internal/incident*/** | startWithInternalIncident
[**startWithInternalIncidentUsingOPTIONS**](IncidentPlaceHolderControllerApi.md#startWithInternalIncidentUsingOPTIONS) | **OPTIONS** /internal/incident*/** | startWithInternalIncident
[**startWithInternalIncidentUsingPATCH**](IncidentPlaceHolderControllerApi.md#startWithInternalIncidentUsingPATCH) | **PATCH** /internal/incident*/** | startWithInternalIncident
[**startWithInternalIncidentUsingPOST**](IncidentPlaceHolderControllerApi.md#startWithInternalIncidentUsingPOST) | **POST** /internal/incident*/** | startWithInternalIncident
[**startWithInternalIncidentUsingPUT**](IncidentPlaceHolderControllerApi.md#startWithInternalIncidentUsingPUT) | **PUT** /internal/incident*/** | startWithInternalIncident


# **startWithIncidentUsingDELETE**
> object startWithIncidentUsingDELETE()

startWithIncident

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentPlaceHolderControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->startWithIncidentUsingDELETE();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentPlaceHolderControllerApi->startWithIncidentUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startWithIncidentUsingGET**
> object startWithIncidentUsingGET()

startWithIncident

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentPlaceHolderControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->startWithIncidentUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentPlaceHolderControllerApi->startWithIncidentUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startWithIncidentUsingHEAD**
> object startWithIncidentUsingHEAD()

startWithIncident

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentPlaceHolderControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->startWithIncidentUsingHEAD();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentPlaceHolderControllerApi->startWithIncidentUsingHEAD: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startWithIncidentUsingOPTIONS**
> object startWithIncidentUsingOPTIONS()

startWithIncident

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentPlaceHolderControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->startWithIncidentUsingOPTIONS();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentPlaceHolderControllerApi->startWithIncidentUsingOPTIONS: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startWithIncidentUsingPATCH**
> object startWithIncidentUsingPATCH()

startWithIncident

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentPlaceHolderControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->startWithIncidentUsingPATCH();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentPlaceHolderControllerApi->startWithIncidentUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startWithIncidentUsingPOST**
> object startWithIncidentUsingPOST()

startWithIncident

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentPlaceHolderControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->startWithIncidentUsingPOST();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentPlaceHolderControllerApi->startWithIncidentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startWithIncidentUsingPUT**
> object startWithIncidentUsingPUT()

startWithIncident

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentPlaceHolderControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->startWithIncidentUsingPUT();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentPlaceHolderControllerApi->startWithIncidentUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startWithInternalIncidentUsingDELETE**
> object startWithInternalIncidentUsingDELETE()

startWithInternalIncident

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentPlaceHolderControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->startWithInternalIncidentUsingDELETE();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentPlaceHolderControllerApi->startWithInternalIncidentUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startWithInternalIncidentUsingGET**
> object startWithInternalIncidentUsingGET()

startWithInternalIncident

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentPlaceHolderControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->startWithInternalIncidentUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentPlaceHolderControllerApi->startWithInternalIncidentUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startWithInternalIncidentUsingHEAD**
> object startWithInternalIncidentUsingHEAD()

startWithInternalIncident

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentPlaceHolderControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->startWithInternalIncidentUsingHEAD();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentPlaceHolderControllerApi->startWithInternalIncidentUsingHEAD: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startWithInternalIncidentUsingOPTIONS**
> object startWithInternalIncidentUsingOPTIONS()

startWithInternalIncident

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentPlaceHolderControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->startWithInternalIncidentUsingOPTIONS();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentPlaceHolderControllerApi->startWithInternalIncidentUsingOPTIONS: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startWithInternalIncidentUsingPATCH**
> object startWithInternalIncidentUsingPATCH()

startWithInternalIncident

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentPlaceHolderControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->startWithInternalIncidentUsingPATCH();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentPlaceHolderControllerApi->startWithInternalIncidentUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startWithInternalIncidentUsingPOST**
> object startWithInternalIncidentUsingPOST()

startWithInternalIncident

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentPlaceHolderControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->startWithInternalIncidentUsingPOST();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentPlaceHolderControllerApi->startWithInternalIncidentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startWithInternalIncidentUsingPUT**
> object startWithInternalIncidentUsingPUT()

startWithInternalIncident

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IncidentPlaceHolderControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->startWithInternalIncidentUsingPUT();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentPlaceHolderControllerApi->startWithInternalIncidentUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

