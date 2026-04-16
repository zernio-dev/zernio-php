# Late\GMBServicesApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getGoogleBusinessServices()**](GMBServicesApi.md#getGoogleBusinessServices) | **GET** /v1/accounts/{accountId}/gmb-services | Get services |
| [**updateGoogleBusinessServices()**](GMBServicesApi.md#updateGoogleBusinessServices) | **PUT** /v1/accounts/{accountId}/gmb-services | Replace services |


## `getGoogleBusinessServices()`

```php
getGoogleBusinessServices($account_id, $location_id): \Late\Model\GetGoogleBusinessServices200Response
```

Get services

Gets the services offered by a Google Business Profile location. Returns an array of service items (structured or free-form with optional price).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\GMBServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$location_id = 'location_id_example'; // string | Override which location to query. If omitted, uses the account's selected location.

try {
    $result = $apiInstance->getGoogleBusinessServices($account_id, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GMBServicesApi->getGoogleBusinessServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **location_id** | **string**| Override which location to query. If omitted, uses the account&#39;s selected location. | [optional] |

### Return type

[**\Late\Model\GetGoogleBusinessServices200Response**](../Model/GetGoogleBusinessServices200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGoogleBusinessServices()`

```php
updateGoogleBusinessServices($account_id, $update_google_business_services_request, $location_id): \Late\Model\UpdateGoogleBusinessServices200Response
```

Replace services

Replaces the entire service list for a location. Google's API requires full replacement; individual item updates are not supported. Each service can be structured (using a predefined serviceTypeId) or free-form (custom label).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\GMBServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$update_google_business_services_request = {"serviceItems":[{"freeFormServiceItem":{"category":"categories/gcid:plumber","label":{"displayName":"Pipe Repair","description":"Emergency and scheduled pipe repair"}},"price":{"currencyCode":"USD","units":"150"}}]}; // \Late\Model\UpdateGoogleBusinessServicesRequest
$location_id = 'location_id_example'; // string | Override which location to target. If omitted, uses the account's selected location.

try {
    $result = $apiInstance->updateGoogleBusinessServices($account_id, $update_google_business_services_request, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GMBServicesApi->updateGoogleBusinessServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **update_google_business_services_request** | [**\Late\Model\UpdateGoogleBusinessServicesRequest**](../Model/UpdateGoogleBusinessServicesRequest.md)|  | |
| **location_id** | **string**| Override which location to target. If omitted, uses the account&#39;s selected location. | [optional] |

### Return type

[**\Late\Model\UpdateGoogleBusinessServices200Response**](../Model/UpdateGoogleBusinessServices200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
