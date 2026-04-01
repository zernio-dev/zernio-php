# Late\AdAudiencesApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addUsersToAdAudience()**](AdAudiencesApi.md#addUsersToAdAudience) | **POST** /v1/ads/audiences/{audienceId}/users | Add users to a customer list audience |
| [**createAdAudience()**](AdAudiencesApi.md#createAdAudience) | **POST** /v1/ads/audiences | Create a custom audience (Meta only) |
| [**deleteAdAudience()**](AdAudiencesApi.md#deleteAdAudience) | **DELETE** /v1/ads/audiences/{audienceId} | Delete a custom audience |
| [**getAdAudience()**](AdAudiencesApi.md#getAdAudience) | **GET** /v1/ads/audiences/{audienceId} | Get audience details |
| [**listAdAudiences()**](AdAudiencesApi.md#listAdAudiences) | **GET** /v1/ads/audiences | List custom audiences |


## `addUsersToAdAudience()`

```php
addUsersToAdAudience($audience_id, $add_users_to_ad_audience_request): \Late\Model\AddUsersToAdAudience200Response
```

Add users to a customer list audience

Upload user data (emails and/or phone numbers) to a customer_list audience. Data is SHA256-hashed server-side before sending to Meta. Max 10,000 users per request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\AdAudiencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audience_id = 'audience_id_example'; // string
$add_users_to_ad_audience_request = new \Late\Model\AddUsersToAdAudienceRequest(); // \Late\Model\AddUsersToAdAudienceRequest

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
| **add_users_to_ad_audience_request** | [**\Late\Model\AddUsersToAdAudienceRequest**](../Model/AddUsersToAdAudienceRequest.md)|  | |

### Return type

[**\Late\Model\AddUsersToAdAudience200Response**](../Model/AddUsersToAdAudience200Response.md)

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
createAdAudience($create_ad_audience_request): \Late\Model\CreateAdAudience201Response
```

Create a custom audience (Meta only)

Create a customer list, website retargeting, or lookalike audience on Meta (Facebook/Instagram).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\AdAudiencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_ad_audience_request = new \Late\Model\CreateAdAudienceRequest(); // \Late\Model\CreateAdAudienceRequest

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
| **create_ad_audience_request** | [**\Late\Model\CreateAdAudienceRequest**](../Model/CreateAdAudienceRequest.md)|  | |

### Return type

[**\Late\Model\CreateAdAudience201Response**](../Model/CreateAdAudience201Response.md)

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
deleteAdAudience($audience_id): \Late\Model\DeleteAccountGroup200Response
```

Delete a custom audience

Deletes the audience from both Meta and the local database.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\AdAudiencesApi(
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

[**\Late\Model\DeleteAccountGroup200Response**](../Model/DeleteAccountGroup200Response.md)

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
getAdAudience($audience_id): \Late\Model\GetAdAudience200Response
```

Get audience details

Returns the local audience record and fresh data from Meta (if available).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\AdAudiencesApi(
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

[**\Late\Model\GetAdAudience200Response**](../Model/GetAdAudience200Response.md)

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
listAdAudiences($account_id, $ad_account_id, $platform): \Late\Model\ListAdAudiences200Response
```

List custom audiences

Returns custom audiences for the given ad account. Supports Meta, Google, TikTok, and Pinterest.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\AdAudiencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Social account ID
$ad_account_id = 'ad_account_id_example'; // string | Platform ad account ID
$platform = 'platform_example'; // string

try {
    $result = $apiInstance->listAdAudiences($account_id, $ad_account_id, $platform);
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

### Return type

[**\Late\Model\ListAdAudiences200Response**](../Model/ListAdAudiences200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
