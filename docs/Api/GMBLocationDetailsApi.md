# Late\GMBLocationDetailsApi



All URIs are relative to https://getlate.dev/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getGoogleBusinessLocationDetails()**](GMBLocationDetailsApi.md#getGoogleBusinessLocationDetails) | **GET** /v1/accounts/{accountId}/gmb-location-details | Get location details |
| [**updateGoogleBusinessLocationDetails()**](GMBLocationDetailsApi.md#updateGoogleBusinessLocationDetails) | **PUT** /v1/accounts/{accountId}/gmb-location-details | Update location details |


## `getGoogleBusinessLocationDetails()`

```php
getGoogleBusinessLocationDetails($account_id, $read_mask): \Late\Model\GetGoogleBusinessLocationDetails200Response
```

Get location details

Returns detailed GBP location info (hours, description, phone, website, categories). Use readMask to request specific fields.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\GMBLocationDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The Late account ID (from /v1/accounts)
$read_mask = 'read_mask_example'; // string | Comma-separated fields to return. Available: name, title, phoneNumbers, categories, storefrontAddress, websiteUri, regularHours, specialHours, serviceArea, profile, openInfo, metadata, moreHours.

try {
    $result = $apiInstance->getGoogleBusinessLocationDetails($account_id, $read_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GMBLocationDetailsApi->getGoogleBusinessLocationDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Late account ID (from /v1/accounts) | |
| **read_mask** | **string**| Comma-separated fields to return. Available: name, title, phoneNumbers, categories, storefrontAddress, websiteUri, regularHours, specialHours, serviceArea, profile, openInfo, metadata, moreHours. | [optional] |

### Return type

[**\Late\Model\GetGoogleBusinessLocationDetails200Response**](../Model/GetGoogleBusinessLocationDetails200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGoogleBusinessLocationDetails()`

```php
updateGoogleBusinessLocationDetails($account_id, $update_google_business_location_details_request): \Late\Model\UpdateGoogleBusinessLocationDetails200Response
```

Update location details

Updates GBP location details (hours, description, phone, website). The updateMask field is required and specifies which fields to update.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\GMBLocationDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The Late account ID (from /v1/accounts)
$update_google_business_location_details_request = {"updateMask":"regularHours,specialHours","regularHours":{"periods":[{"openDay":"MONDAY","openTime":"09:00","closeDay":"MONDAY","closeTime":"17:00"},{"openDay":"SATURDAY","openTime":"10:00","closeDay":"SATURDAY","closeTime":"14:00"}]},"specialHours":{"specialHourPeriods":[{"startDate":{"year":2026,"month":12,"day":25},"closed":true},{"startDate":{"year":2026,"month":12,"day":31},"openTime":"09:00","closeTime":"15:00"}]}}; // \Late\Model\UpdateGoogleBusinessLocationDetailsRequest

try {
    $result = $apiInstance->updateGoogleBusinessLocationDetails($account_id, $update_google_business_location_details_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GMBLocationDetailsApi->updateGoogleBusinessLocationDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Late account ID (from /v1/accounts) | |
| **update_google_business_location_details_request** | [**\Late\Model\UpdateGoogleBusinessLocationDetailsRequest**](../Model/UpdateGoogleBusinessLocationDetailsRequest.md)|  | |

### Return type

[**\Late\Model\UpdateGoogleBusinessLocationDetails200Response**](../Model/UpdateGoogleBusinessLocationDetails200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
