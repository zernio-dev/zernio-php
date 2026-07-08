# Zernio\AdAudiencesApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addUsersToAdAudience()**](AdAudiencesApi.md#addUsersToAdAudience) | **POST** /v1/ads/audiences/{audienceId}/users | Add users to audience |
| [**createAdAudience()**](AdAudiencesApi.md#createAdAudience) | **POST** /v1/ads/audiences | Create custom audience |
| [**deleteAdAudience()**](AdAudiencesApi.md#deleteAdAudience) | **DELETE** /v1/ads/audiences/{audienceId} | Delete custom audience |
| [**getAdAudience()**](AdAudiencesApi.md#getAdAudience) | **GET** /v1/ads/audiences/{audienceId} | Get audience details |
| [**listAdAudiences()**](AdAudiencesApi.md#listAdAudiences) | **GET** /v1/ads/audiences | List custom audiences |
| [**updateAdAudience()**](AdAudiencesApi.md#updateAdAudience) | **PUT** /v1/ads/audiences/{audienceId} | Update saved targeting audience |


## `addUsersToAdAudience()`

```php
addUsersToAdAudience($audience_id, $add_users_to_ad_audience_request): \Zernio\Model\AddUsersToAdAudience200Response
```

Add users to audience

Upload user data to a customer_list audience. Data is SHA256-hashed server-side before sending to the platform. Email is used on every platform; phone is used on Meta only (other platforms ignore it). On TikTok and Pinterest, the first upload also provisions the audience (deferred create). LinkedIn uploads are full-replace. Max 10,000 users per request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdAudiencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_id = 'audience_id_example'; // string
$add_users_to_ad_audience_request = new \Zernio\Model\AddUsersToAdAudienceRequest(); // \Zernio\Model\AddUsersToAdAudienceRequest

try {
    $result = $apiInstance->addUsersToAdAudience($audience_id, $add_users_to_ad_audience_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAudiencesApi->addUsersToAdAudience: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_id** | **string**|  | |
| **add_users_to_ad_audience_request** | [**\Zernio\Model\AddUsersToAdAudienceRequest**](../Model/AddUsersToAdAudienceRequest.md)|  | |

### Return type

[**\Zernio\Model\AddUsersToAdAudience200Response**](../Model/AddUsersToAdAudience200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAdAudience()`

```php
createAdAudience($create_ad_audience_request): \Zernio\Model\CreateAdAudience201Response
```

Create custom audience

Create a custom audience. `customer_list` is supported on Meta, Google, X, LinkedIn, TikTok, and Pinterest; `website` and `lookalike` are Meta-only. `saved_targeting` stores a reusable TargetingSpec (no member upload, no adAccountId) that you reference later via `savedTargetingId` on `POST /v1/ads/create`. Upload-backed audiences are created empty, add members via `POST /v1/ads/audiences/{audienceId}/users`. On TikTok and Pinterest the audience is provisioned lazily on the first member upload (until then its status is `pending`). Create is not idempotent, never auto-retry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdAudiencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_ad_audience_request = new \Zernio\Model\CreateAdAudienceRequest(); // \Zernio\Model\CreateAdAudienceRequest

try {
    $result = $apiInstance->createAdAudience($create_ad_audience_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAudiencesApi->createAdAudience: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_ad_audience_request** | [**\Zernio\Model\CreateAdAudienceRequest**](../Model/CreateAdAudienceRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateAdAudience201Response**](../Model/CreateAdAudience201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAdAudience()`

```php
deleteAdAudience($audience_id): \Zernio\Model\DeleteAccountGroup200Response
```

Delete custom audience

Deletes the audience from both the platform and the local database. `saved_targeting` audiences exist only on Zernio, so only the local record is removed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdAudiencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_id = 'audience_id_example'; // string

try {
    $result = $apiInstance->deleteAdAudience($audience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAudiencesApi->deleteAdAudience: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_id** | **string**|  | |

### Return type

[**\Zernio\Model\DeleteAccountGroup200Response**](../Model/DeleteAccountGroup200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdAudience()`

```php
getAdAudience($audience_id): \Zernio\Model\GetAdAudience200Response
```

Get audience details

Returns the local audience record and fresh data from Meta (if available).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdAudiencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_id = 'audience_id_example'; // string

try {
    $result = $apiInstance->getAdAudience($audience_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAudiencesApi->getAdAudience: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_id** | **string**|  | |

### Return type

[**\Zernio\Model\GetAdAudience200Response**](../Model/GetAdAudience200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAdAudiences()`

```php
listAdAudiences($account_id, $ad_account_id, $platform, $type): \Zernio\Model\ListAdAudiences200Response
```

List custom audiences

Returns custom audiences for the given ad account. Supports Meta, Google, TikTok, Pinterest, LinkedIn, and X (Twitter).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdAudiencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Social account ID
$ad_account_id = 'ad_account_id_example'; // string | Platform ad account ID
$platform = 'platform_example'; // string
$type = 'type_example'; // string | Filter to one audience type. `saved_targeting` returns stored TargetingSpec audiences (each item carries a `spec`); the other types return uploaded/derived audiences.

try {
    $result = $apiInstance->listAdAudiences($account_id, $ad_account_id, $platform, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAudiencesApi->listAdAudiences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Social account ID | |
| **ad_account_id** | **string**| Platform ad account ID | |
| **platform** | **string**|  | [optional] |
| **type** | **string**| Filter to one audience type. &#x60;saved_targeting&#x60; returns stored TargetingSpec audiences (each item carries a &#x60;spec&#x60;); the other types return uploaded/derived audiences. | [optional] |

### Return type

[**\Zernio\Model\ListAdAudiences200Response**](../Model/ListAdAudiences200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAdAudience()`

```php
updateAdAudience($audience_id, $update_ad_audience_request): \Zernio\Model\CreateAdAudience201Response
```

Update saved targeting audience

Update a `saved_targeting` audience's name, description, or spec. Only `saved_targeting` audiences are updatable (they exist only on Zernio); uploaded/derived audiences return 422, delete and recreate those instead. `spec` replaces the stored spec wholesale (no merge). Ads already created from this audience are unaffected, they snapshot the targeting at creation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdAudiencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_id = 'audience_id_example'; // string
$update_ad_audience_request = new \Zernio\Model\UpdateAdAudienceRequest(); // \Zernio\Model\UpdateAdAudienceRequest

try {
    $result = $apiInstance->updateAdAudience($audience_id, $update_ad_audience_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdAudiencesApi->updateAdAudience: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **audience_id** | **string**|  | |
| **update_ad_audience_request** | [**\Zernio\Model\UpdateAdAudienceRequest**](../Model/UpdateAdAudienceRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateAdAudience201Response**](../Model/CreateAdAudience201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
