# Zernio\GMBMediaApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createGoogleBusinessMedia()**](GMBMediaApi.md#createGoogleBusinessMedia) | **POST** /v1/accounts/{accountId}/gmb-media | Upload photo |
| [**deleteGoogleBusinessMedia()**](GMBMediaApi.md#deleteGoogleBusinessMedia) | **DELETE** /v1/accounts/{accountId}/gmb-media | Delete photo |
| [**listGoogleBusinessMedia()**](GMBMediaApi.md#listGoogleBusinessMedia) | **GET** /v1/accounts/{accountId}/gmb-media | List media |


## `createGoogleBusinessMedia()`

```php
createGoogleBusinessMedia($account_id, $create_google_business_media_request, $location_id): \Zernio\Model\CreateGoogleBusinessMedia200Response
```

Upload photo

Creates a media item (photo) for a location from a publicly accessible URL.  Categories determine where the photo appears: COVER, PROFILE, LOGO, EXTERIOR, INTERIOR, FOOD_AND_DRINK, MENU, PRODUCT, TEAMS, ADDITIONAL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\GMBMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$create_google_business_media_request = {"sourceUrl":"https://example.com/photos/restaurant-interior.jpg","description":"Dining area with outdoor seating","category":"INTERIOR"}; // \Zernio\Model\CreateGoogleBusinessMediaRequest
$location_id = 'location_id_example'; // string | Override which location to target. If omitted, uses the account's selected location. Use GET /gmb-locations to list valid IDs.

try {
    $result = $apiInstance->createGoogleBusinessMedia($account_id, $create_google_business_media_request, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GMBMediaApi->createGoogleBusinessMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **create_google_business_media_request** | [**\Zernio\Model\CreateGoogleBusinessMediaRequest**](../Model/CreateGoogleBusinessMediaRequest.md)|  | |
| **location_id** | **string**| Override which location to target. If omitted, uses the account&#39;s selected location. Use GET /gmb-locations to list valid IDs. | [optional] |

### Return type

[**\Zernio\Model\CreateGoogleBusinessMedia200Response**](../Model/CreateGoogleBusinessMedia200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGoogleBusinessMedia()`

```php
deleteGoogleBusinessMedia($account_id, $media_id, $location_id): \Zernio\Model\DeleteGoogleBusinessMedia200Response
```

Delete photo

Deletes a photo or media item from a GBP location.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\GMBMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$media_id = 'media_id_example'; // string | The media item ID to delete
$location_id = 'location_id_example'; // string | Override which location to target. If omitted, uses the account's selected location. Use GET /gmb-locations to list valid IDs.

try {
    $result = $apiInstance->deleteGoogleBusinessMedia($account_id, $media_id, $location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GMBMediaApi->deleteGoogleBusinessMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **media_id** | **string**| The media item ID to delete | |
| **location_id** | **string**| Override which location to target. If omitted, uses the account&#39;s selected location. Use GET /gmb-locations to list valid IDs. | [optional] |

### Return type

[**\Zernio\Model\DeleteGoogleBusinessMedia200Response**](../Model/DeleteGoogleBusinessMedia200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGoogleBusinessMedia()`

```php
listGoogleBusinessMedia($account_id, $location_id, $page_size, $page_token): \Zernio\Model\ListGoogleBusinessMedia200Response
```

List media

Lists media items (photos) for a Google Business Profile location. Returns photo URLs, descriptions, categories, and metadata.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\GMBMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$location_id = 'location_id_example'; // string | Override which location to query. If omitted, uses the account's selected location. Use GET /gmb-locations to list valid IDs.
$page_size = 100; // int | Number of items to return (max 100)
$page_token = 'page_token_example'; // string | Pagination token from previous response

try {
    $result = $apiInstance->listGoogleBusinessMedia($account_id, $location_id, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GMBMediaApi->listGoogleBusinessMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **location_id** | **string**| Override which location to query. If omitted, uses the account&#39;s selected location. Use GET /gmb-locations to list valid IDs. | [optional] |
| **page_size** | **int**| Number of items to return (max 100) | [optional] [default to 100] |
| **page_token** | **string**| Pagination token from previous response | [optional] |

### Return type

[**\Zernio\Model\ListGoogleBusinessMedia200Response**](../Model/ListGoogleBusinessMedia200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
