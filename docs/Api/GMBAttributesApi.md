# Zernio\GMBAttributesApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getGmbAttributeMetadata()**](GMBAttributesApi.md#getGmbAttributeMetadata) | **GET** /v1/accounts/{accountId}/gmb-attribute-metadata | Get attribute metadata |
| [**getGoogleBusinessAttributes()**](GMBAttributesApi.md#getGoogleBusinessAttributes) | **GET** /v1/accounts/{accountId}/gmb-attributes | Get attributes |
| [**updateGoogleBusinessAttributes()**](GMBAttributesApi.md#updateGoogleBusinessAttributes) | **PUT** /v1/accounts/{accountId}/gmb-attributes | Update attributes |


## `getGmbAttributeMetadata()`

```php
getGmbAttributeMetadata($account_id, $location_id, $category_name, $region_code, $language_code, $page_size, $page_token): \Zernio\Model\GetGmbAttributeMetadata200Response
```

Get attribute metadata

Returns metadata about which Google Business Profile attributes are available for a location or business category. Use this endpoint to discover valid attribute names, value types, and allowed enum values before reading or writing via gmb-attributes.  Two mutually exclusive query modes:  **Location mode**: pass `locationId` (or rely on the account's stored `selectedLocationId`). Google returns attributes valid for that specific location.  **Category mode**: pass `categoryName` (must start with `categories/`) and `regionCode`. Google returns attributes valid for that category across the given region. `languageCode` is optional in category mode.  Both modes support `pageSize` and `pageToken` for pagination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\GMBAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$location_id = 'location_id_example'; // string | GBP location ID (e.g. \"6257659026299438786\"). If omitted, uses the account's stored selectedLocationId. Mutually exclusive with categoryName.
$category_name = 'category_name_example'; // string | Category resource name, must start with \"categories/\" (e.g. \"categories/gcid:plumber\"). Required together with regionCode. Mutually exclusive with locationId.
$region_code = 'region_code_example'; // string | BCP-47 region code (e.g. \"US\", \"ES\"). Required when categoryName is provided.
$language_code = 'language_code_example'; // string | BCP-47 language code for display names (e.g. \"en\", \"es\"). Optional when categoryName is provided. Omitted from the Google call when not supplied.
$page_size = 56; // int | Maximum number of attribute metadata items to return. Google defaults to 200.
$page_token = 'page_token_example'; // string | Pagination token from a previous response's nextPageToken field.

try {
    $result = $apiInstance->getGmbAttributeMetadata($account_id, $location_id, $category_name, $region_code, $language_code, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GMBAttributesApi->getGmbAttributeMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **location_id** | **string**| GBP location ID (e.g. \&quot;6257659026299438786\&quot;). If omitted, uses the account&#39;s stored selectedLocationId. Mutually exclusive with categoryName. | [optional] |
| **category_name** | **string**| Category resource name, must start with \&quot;categories/\&quot; (e.g. \&quot;categories/gcid:plumber\&quot;). Required together with regionCode. Mutually exclusive with locationId. | [optional] |
| **region_code** | **string**| BCP-47 region code (e.g. \&quot;US\&quot;, \&quot;ES\&quot;). Required when categoryName is provided. | [optional] |
| **language_code** | **string**| BCP-47 language code for display names (e.g. \&quot;en\&quot;, \&quot;es\&quot;). Optional when categoryName is provided. Omitted from the Google call when not supplied. | [optional] |
| **page_size** | **int**| Maximum number of attribute metadata items to return. Google defaults to 200. | [optional] |
| **page_token** | **string**| Pagination token from a previous response&#39;s nextPageToken field. | [optional] |

### Return type

[**\Zernio\Model\GetGmbAttributeMetadata200Response**](../Model/GetGmbAttributeMetadata200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGoogleBusinessAttributes()`

```php
getGoogleBusinessAttributes($account_id, $location_id): \Zernio\Model\GetGoogleBusinessAttributes200Response
```

Get attributes

Returns GBP location attributes (amenities, services, accessibility, payment types). Available attributes vary by business category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\GMBAttributesApi(
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

[**\Zernio\Model\GetGoogleBusinessAttributes200Response**](../Model/GetGoogleBusinessAttributes200Response.md)

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
updateGoogleBusinessAttributes($account_id, $update_google_business_attributes_request, $location_id): \Zernio\Model\UpdateGoogleBusinessAttributes200Response
```

Update attributes

Updates location attributes (amenities, services, etc.).  The attributeMask specifies which attributes to update (comma-separated).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\GMBAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$update_google_business_attributes_request = {"attributes":[{"name":"has_delivery","values":[true]},{"name":"has_takeout","values":[true]},{"name":"has_outdoor_seating","values":[false]}],"attributeMask":"has_delivery,has_takeout,has_outdoor_seating"}; // \Zernio\Model\UpdateGoogleBusinessAttributesRequest
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
| **update_google_business_attributes_request** | [**\Zernio\Model\UpdateGoogleBusinessAttributesRequest**](../Model/UpdateGoogleBusinessAttributesRequest.md)|  | |
| **location_id** | **string**| Override which location to target. If omitted, uses the account&#39;s selected location. Use GET /gmb-locations to list valid IDs. | [optional] |

### Return type

[**\Zernio\Model\UpdateGoogleBusinessAttributes200Response**](../Model/UpdateGoogleBusinessAttributes200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
