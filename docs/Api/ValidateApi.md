# Late\ValidateApi

Pre-flight validation endpoints. Check post content, character limits, media URLs, and subreddit existence before publishing.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**validateMedia()**](ValidateApi.md#validateMedia) | **POST** /v1/tools/validate/media | Validate media URL |
| [**validatePost()**](ValidateApi.md#validatePost) | **POST** /v1/tools/validate/post | Validate post content |
| [**validatePostLength()**](ValidateApi.md#validatePostLength) | **POST** /v1/tools/validate/post-length | Validate character count |
| [**validateSubreddit()**](ValidateApi.md#validateSubreddit) | **GET** /v1/tools/validate/subreddit | Check subreddit existence |


## `validateMedia()`

```php
validateMedia($validate_media_request): \Late\Model\ValidateMedia200Response
```

Validate media URL

Check if a media URL is accessible and return metadata (content type, file size) plus per-platform size limit comparisons.  Performs a HEAD request (with GET fallback) to detect content type and size. Rejects private/localhost URLs for SSRF protection.  Platform limits are sourced from each platform's actual upload constraints.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ValidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$validate_media_request = new \Late\Model\ValidateMediaRequest(); // \Late\Model\ValidateMediaRequest

try {
    $result = $apiInstance->validateMedia($validate_media_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValidateApi->validateMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **validate_media_request** | [**\Late\Model\ValidateMediaRequest**](../Model/ValidateMediaRequest.md)|  | |

### Return type

[**\Late\Model\ValidateMedia200Response**](../Model/ValidateMedia200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validatePost()`

```php
validatePost($validate_post_request): \Late\Model\ValidatePost200Response
```

Validate post content

Dry-run the full post validation pipeline without publishing. Catches issues like missing media for Instagram/TikTok/YouTube, hashtag limits, invalid thread formats, Facebook Reel requirements, and character limit violations.  Accepts the same body as `POST /v1/posts`. Does NOT validate accounts, process media, or track usage. This is content-only validation.  Returns errors for failures and warnings for near-limit content (>90% of character limit).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ValidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$validate_post_request = new \Late\Model\ValidatePostRequest(); // \Late\Model\ValidatePostRequest

try {
    $result = $apiInstance->validatePost($validate_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValidateApi->validatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **validate_post_request** | [**\Late\Model\ValidatePostRequest**](../Model/ValidatePostRequest.md)|  | |

### Return type

[**\Late\Model\ValidatePost200Response**](../Model/ValidatePost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validatePostLength()`

```php
validatePostLength($validate_post_length_request): \Late\Model\ValidatePostLength200Response
```

Validate character count

Check weighted character count per platform and whether the text is within each platform's limit.  Twitter/X uses weighted counting (URLs = 23 chars via t.co, emojis = 2 chars). All other platforms use plain character length.  Returns counts and limits for all 15 supported platform variants.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ValidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$validate_post_length_request = new \Late\Model\ValidatePostLengthRequest(); // \Late\Model\ValidatePostLengthRequest

try {
    $result = $apiInstance->validatePostLength($validate_post_length_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValidateApi->validatePostLength: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **validate_post_length_request** | [**\Late\Model\ValidatePostLengthRequest**](../Model/ValidatePostLengthRequest.md)|  | |

### Return type

[**\Late\Model\ValidatePostLength200Response**](../Model/ValidatePostLength200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateSubreddit()`

```php
validateSubreddit($name, $account_id): \Late\Model\ValidateSubreddit200Response
```

Check subreddit existence

Check if a subreddit exists and return basic info (title, subscriber count, NSFW status, post types allowed).  When accountId is provided, uses authenticated Reddit OAuth API with automatic token refresh (recommended). Falls back to Reddit's public JSON API, which may be unreliable from server IPs. Returns `exists: false` for private, banned, or nonexistent subreddits.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ValidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = programming; // string | Subreddit name (with or without \"r/\" prefix)
$account_id = 'account_id_example'; // string | Reddit social account ID for authenticated lookup (recommended for reliable results)

try {
    $result = $apiInstance->validateSubreddit($name, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValidateApi->validateSubreddit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Subreddit name (with or without \&quot;r/\&quot; prefix) | |
| **account_id** | **string**| Reddit social account ID for authenticated lookup (recommended for reliable results) | [optional] |

### Return type

[**\Late\Model\ValidateSubreddit200Response**](../Model/ValidateSubreddit200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
