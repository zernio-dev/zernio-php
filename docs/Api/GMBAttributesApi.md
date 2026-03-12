# Late\GMBAttributesApi



All URIs are relative to https://getlate.dev/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getGoogleBusinessAttributes()**](GMBAttributesApi.md#getGoogleBusinessAttributes) | **GET** /v1/accounts/{accountId}/gmb-attributes | Get attributes |
| [**updateGoogleBusinessAttributes()**](GMBAttributesApi.md#updateGoogleBusinessAttributes) | **PUT** /v1/accounts/{accountId}/gmb-attributes | Update attributes |


## `getGoogleBusinessAttributes()`

```php
getGoogleBusinessAttributes($account_id, $location_id): \Late\Model\GetGoogleBusinessAttributes200Response
```

Get attributes

Returns GBP location attributes (amenities, services, accessibility, payment types). Available attributes vary by business category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\GMBAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$location_id = 'location_id_example'; // string | Override which location to query. If omitted, uses the account's selected location. Use GET /gmb-locations to list valid IDs.

try {
    $result = $apiInstance->getGoogleBusinessAttributes($account_id, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GMBAttributesApi->getGoogleBusinessAttributes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **location_id** | **string**| Override which location to query. If omitted, uses the account&#39;s selected location. Use GET /gmb-locations to list valid IDs. | [optional] |

### Return type

[**\Late\Model\GetGoogleBusinessAttributes200Response**](../Model/GetGoogleBusinessAttributes200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGoogleBusinessAttributes()`

```php
updateGoogleBusinessAttributes($account_id, $update_google_business_attributes_request, $location_id): \Late\Model\UpdateGoogleBusinessAttributes200Response
```

Update attributes

Updates location attributes (amenities, services, etc.).  The attributeMask specifies which attributes to update (comma-separated).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\GMBAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$update_google_business_attributes_request = {"attributes":[{"name":"has_delivery","values":[true]},{"name":"has_takeout","values":[true]},{"name":"has_outdoor_seating","values":[false]}],"attributeMask":"has_delivery,has_takeout,has_outdoor_seating"}; // \Late\Model\UpdateGoogleBusinessAttributesRequest
$location_id = 'location_id_example'; // string | Override which location to target. If omitted, uses the account's selected location. Use GET /gmb-locations to list valid IDs.

try {
    $result = $apiInstance->updateGoogleBusinessAttributes($account_id, $update_google_business_attributes_request, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GMBAttributesApi->updateGoogleBusinessAttributes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **update_google_business_attributes_request** | [**\Late\Model\UpdateGoogleBusinessAttributesRequest**](../Model/UpdateGoogleBusinessAttributesRequest.md)|  | |
| **location_id** | **string**| Override which location to target. If omitted, uses the account&#39;s selected location. Use GET /gmb-locations to list valid IDs. | [optional] |

### Return type

[**\Late\Model\UpdateGoogleBusinessAttributes200Response**](../Model/UpdateGoogleBusinessAttributes200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
