# Zernio\GMBLocationDetailsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getGoogleBusinessLocationDetails()**](GMBLocationDetailsApi.md#getGoogleBusinessLocationDetails) | **GET** /v1/accounts/{accountId}/gmb-location-details | Get location details |
| [**updateGoogleBusinessLocationDetails()**](GMBLocationDetailsApi.md#updateGoogleBusinessLocationDetails) | **PUT** /v1/accounts/{accountId}/gmb-location-details | Update location details |


## `getGoogleBusinessLocationDetails()`

```php
getGoogleBusinessLocationDetails($account_id, $location_id, $read_mask): \Zernio\Model\GetGoogleBusinessLocationDetails200Response
```

Get location details

Returns detailed GBP location info (hours, description, phone, website, categories, services). Use readMask to request specific fields.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\GMBLocationDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The Zernio account ID (from /v1/accounts)
$location_id = 'location_id_example'; // string | Override which location to query. If omitted, uses the account's selected location. Use GET /gmb-locations to list valid IDs.
$read_mask = 'read_mask_example'; // string | Comma-separated fields to return. Available: name, title, phoneNumbers, categories, storefrontAddress, websiteUri, regularHours, specialHours, serviceArea, serviceItems, profile, openInfo, metadata, moreHours.

try {
    $result = $apiInstance->getGoogleBusinessLocationDetails($account_id, $location_id, $read_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GMBLocationDetailsApi->getGoogleBusinessLocationDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Zernio account ID (from /v1/accounts) | |
| **location_id** | **string**| Override which location to query. If omitted, uses the account&#39;s selected location. Use GET /gmb-locations to list valid IDs. | [optional] |
| **read_mask** | **string**| Comma-separated fields to return. Available: name, title, phoneNumbers, categories, storefrontAddress, websiteUri, regularHours, specialHours, serviceArea, serviceItems, profile, openInfo, metadata, moreHours. | [optional] |

### Return type

[**\Zernio\Model\GetGoogleBusinessLocationDetails200Response**](../Model/GetGoogleBusinessLocationDetails200Response.md)

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
updateGoogleBusinessLocationDetails($account_id, $update_google_business_location_details_request, $location_id): \Zernio\Model\UpdateGoogleBusinessLocationDetails200Response
```

Update location details

Updates GBP location details. The updateMask field is required and specifies which fields to update. This endpoint proxies Google's Business Information API locations.patch, so any valid updateMask field is supported. Common fields: regularHours, specialHours, profile.description, websiteUri, phoneNumbers, categories, serviceItems.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\GMBLocationDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The Zernio account ID (from /v1/accounts)
$update_google_business_location_details_request = {"updateMask":"regularHours,specialHours","regularHours":{"periods":[{"openDay":"MONDAY","openTime":"09:00","closeDay":"MONDAY","closeTime":"17:00"},{"openDay":"SATURDAY","openTime":"10:00","closeDay":"SATURDAY","closeTime":"14:00"}]},"specialHours":{"specialHourPeriods":[{"startDate":{"year":2026,"month":12,"day":25},"closed":true},{"startDate":{"year":2026,"month":12,"day":31},"openTime":"09:00","closeTime":"15:00"}]}}; // \Zernio\Model\UpdateGoogleBusinessLocationDetailsRequest
$location_id = 'location_id_example'; // string | Override which location to target. If omitted, uses the account's selected location. Use GET /gmb-locations to list valid IDs.

try {
    $result = $apiInstance->updateGoogleBusinessLocationDetails($account_id, $update_google_business_location_details_request, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GMBLocationDetailsApi->updateGoogleBusinessLocationDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Zernio account ID (from /v1/accounts) | |
| **update_google_business_location_details_request** | [**\Zernio\Model\UpdateGoogleBusinessLocationDetailsRequest**](../Model/UpdateGoogleBusinessLocationDetailsRequest.md)|  | |
| **location_id** | **string**| Override which location to target. If omitted, uses the account&#39;s selected location. Use GET /gmb-locations to list valid IDs. | [optional] |

### Return type

[**\Zernio\Model\UpdateGoogleBusinessLocationDetails200Response**](../Model/UpdateGoogleBusinessLocationDetails200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
