# Late\GMBMediaApi



All URIs are relative to https://getlate.dev/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createGoogleBusinessMedia()**](GMBMediaApi.md#createGoogleBusinessMedia) | **POST** /v1/accounts/{accountId}/gmb-media | Upload photo |
| [**deleteGoogleBusinessMedia()**](GMBMediaApi.md#deleteGoogleBusinessMedia) | **DELETE** /v1/accounts/{accountId}/gmb-media | Delete photo |
| [**listGoogleBusinessMedia()**](GMBMediaApi.md#listGoogleBusinessMedia) | **GET** /v1/accounts/{accountId}/gmb-media | List media |


## `createGoogleBusinessMedia()`

```php
createGoogleBusinessMedia($account_id, $create_google_business_media_request): \Late\Model\CreateGoogleBusinessMedia200Response
```

Upload photo

Creates a media item (photo) for a location from a publicly accessible URL.  Categories determine where the photo appears: - `COVER` - Cover photo - `PROFILE` - Profile photo - `LOGO` - Business logo - `EXTERIOR` - Exterior shots - `INTERIOR` - Interior shots - `FOOD_AND_DRINK` - Food and drink photos - `MENU` - Menu photos - `PRODUCT` - Product photos - `TEAMS` - Team/staff photos - `ADDITIONAL` - Other photos

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\GMBMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$create_google_business_media_request = {"sourceUrl":"https://example.com/photos/restaurant-interior.jpg","description":"Dining area with outdoor seating","category":"INTERIOR"}; // \Late\Model\CreateGoogleBusinessMediaRequest

try {
    $result = $apiInstance->createGoogleBusinessMedia($account_id, $create_google_business_media_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GMBMediaApi->createGoogleBusinessMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **create_google_business_media_request** | [**\Late\Model\CreateGoogleBusinessMediaRequest**](../Model/CreateGoogleBusinessMediaRequest.md)|  | |

### Return type

[**\Late\Model\CreateGoogleBusinessMedia200Response**](../Model/CreateGoogleBusinessMedia200Response.md)

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
deleteGoogleBusinessMedia($account_id, $media_id): \Late\Model\DeleteGoogleBusinessMedia200Response
```

Delete photo

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\GMBMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$media_id = 'media_id_example'; // string | The media item ID to delete

try {
    $result = $apiInstance->deleteGoogleBusinessMedia($account_id, $media_id);
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

### Return type

[**\Late\Model\DeleteGoogleBusinessMedia200Response**](../Model/DeleteGoogleBusinessMedia200Response.md)

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
listGoogleBusinessMedia($account_id, $page_size, $page_token): \Late\Model\ListGoogleBusinessMedia200Response
```

List media

Lists media items (photos) for a Google Business Profile location. Returns photo URLs, descriptions, categories, and metadata.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\GMBMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$page_size = 100; // int | Number of items to return (max 100)
$page_token = 'page_token_example'; // string | Pagination token from previous response

try {
    $result = $apiInstance->listGoogleBusinessMedia($account_id, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GMBMediaApi->listGoogleBusinessMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **page_size** | **int**| Number of items to return (max 100) | [optional] [default to 100] |
| **page_token** | **string**| Pagination token from previous response | [optional] |

### Return type

[**\Late\Model\ListGoogleBusinessMedia200Response**](../Model/ListGoogleBusinessMedia200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
