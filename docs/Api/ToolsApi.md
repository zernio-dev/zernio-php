# Late\ToolsApi

Media download and utility tools. Available to paid plans only. Rate limits: Build (50/day), Accelerate (500/day), Unlimited (unlimited). All responses include X-RateLimit-Limit, X-RateLimit-Remaining, and X-RateLimit-Reset headers.

All URIs are relative to https://getlate.dev/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkInstagramHashtags()**](ToolsApi.md#checkInstagramHashtags) | **POST** /v1/tools/instagram/hashtag-checker | Check Instagram hashtag bans |
| [**downloadBlueskyMedia()**](ToolsApi.md#downloadBlueskyMedia) | **GET** /v1/tools/bluesky/download | Download Bluesky media |
| [**downloadFacebookVideo()**](ToolsApi.md#downloadFacebookVideo) | **GET** /v1/tools/facebook/download | Download Facebook video |
| [**downloadInstagramMedia()**](ToolsApi.md#downloadInstagramMedia) | **GET** /v1/tools/instagram/download | Download Instagram media |
| [**downloadLinkedInVideo()**](ToolsApi.md#downloadLinkedInVideo) | **GET** /v1/tools/linkedin/download | Download LinkedIn video |
| [**downloadTikTokVideo()**](ToolsApi.md#downloadTikTokVideo) | **GET** /v1/tools/tiktok/download | Download TikTok video |
| [**downloadTwitterMedia()**](ToolsApi.md#downloadTwitterMedia) | **GET** /v1/tools/twitter/download | Download Twitter/X media |
| [**downloadYouTubeVideo()**](ToolsApi.md#downloadYouTubeVideo) | **GET** /v1/tools/youtube/download | Download YouTube video |
| [**getYouTubeTranscript()**](ToolsApi.md#getYouTubeTranscript) | **GET** /v1/tools/youtube/transcript | Get YouTube transcript |


## `checkInstagramHashtags()`

```php
checkInstagramHashtags($check_instagram_hashtags_request): \Late\Model\CheckInstagramHashtags200Response
```

Check Instagram hashtag bans

Check if Instagram hashtags are banned, restricted, or safe to use.  **Rate Limits:** Build (50/day), Accelerate (500/day), Unlimited (unlimited)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_instagram_hashtags_request = new \Late\Model\CheckInstagramHashtagsRequest(); // \Late\Model\CheckInstagramHashtagsRequest

try {
    $result = $apiInstance->checkInstagramHashtags($check_instagram_hashtags_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->checkInstagramHashtags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_instagram_hashtags_request** | [**\Late\Model\CheckInstagramHashtagsRequest**](../Model/CheckInstagramHashtagsRequest.md)|  | |

### Return type

[**\Late\Model\CheckInstagramHashtags200Response**](../Model/CheckInstagramHashtags200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadBlueskyMedia()`

```php
downloadBlueskyMedia($url): \Late\Model\DownloadBlueskyMedia200Response
```

Download Bluesky media

Download videos from Bluesky posts.  **Rate Limits:** Build (50/day), Accelerate (500/day), Unlimited (unlimited)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$url = https://bsky.app/profile/user.bsky.social/post/abc123; // string | Bluesky post URL

try {
    $result = $apiInstance->downloadBlueskyMedia($url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->downloadBlueskyMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **url** | **string**| Bluesky post URL | |

### Return type

[**\Late\Model\DownloadBlueskyMedia200Response**](../Model/DownloadBlueskyMedia200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadFacebookVideo()`

```php
downloadFacebookVideo($url): \Late\Model\DownloadFacebookVideo200Response
```

Download Facebook video

Download videos and reels from Facebook.  **Rate Limits:** Build (50/day), Accelerate (500/day), Unlimited (unlimited)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$url = 'url_example'; // string | Facebook video or reel URL

try {
    $result = $apiInstance->downloadFacebookVideo($url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->downloadFacebookVideo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **url** | **string**| Facebook video or reel URL | |

### Return type

[**\Late\Model\DownloadFacebookVideo200Response**](../Model/DownloadFacebookVideo200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadInstagramMedia()`

```php
downloadInstagramMedia($url): \Late\Model\DownloadInstagramMedia200Response
```

Download Instagram media

Download Instagram reels, posts, or photos.  **Rate Limits:** Build (50/day), Accelerate (500/day), Unlimited (unlimited)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$url = https://www.instagram.com/reel/ABC123/; // string | Instagram reel or post URL

try {
    $result = $apiInstance->downloadInstagramMedia($url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->downloadInstagramMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **url** | **string**| Instagram reel or post URL | |

### Return type

[**\Late\Model\DownloadInstagramMedia200Response**](../Model/DownloadInstagramMedia200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadLinkedInVideo()`

```php
downloadLinkedInVideo($url): \Late\Model\DownloadInstagramMedia200Response
```

Download LinkedIn video

Download videos from LinkedIn posts.  **Rate Limits:** Build (50/day), Accelerate (500/day), Unlimited (unlimited)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$url = 'url_example'; // string | LinkedIn post URL

try {
    $result = $apiInstance->downloadLinkedInVideo($url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->downloadLinkedInVideo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **url** | **string**| LinkedIn post URL | |

### Return type

[**\Late\Model\DownloadInstagramMedia200Response**](../Model/DownloadInstagramMedia200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadTikTokVideo()`

```php
downloadTikTokVideo($url, $action, $format_id): \Late\Model\DownloadTikTokVideo200Response
```

Download TikTok video

Download TikTok videos with or without watermark.  **Rate Limits:** Build (50/day), Accelerate (500/day), Unlimited (unlimited)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$url = 'url_example'; // string | TikTok video URL or ID
$action = 'download'; // string | 'formats' to list available formats
$format_id = 'format_id_example'; // string | Specific format ID (0 = no watermark, etc.)

try {
    $result = $apiInstance->downloadTikTokVideo($url, $action, $format_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->downloadTikTokVideo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **url** | **string**| TikTok video URL or ID | |
| **action** | **string**| &#39;formats&#39; to list available formats | [optional] [default to &#39;download&#39;] |
| **format_id** | **string**| Specific format ID (0 &#x3D; no watermark, etc.) | [optional] |

### Return type

[**\Late\Model\DownloadTikTokVideo200Response**](../Model/DownloadTikTokVideo200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadTwitterMedia()`

```php
downloadTwitterMedia($url, $action, $format_id): \Late\Model\DownloadInstagramMedia200Response
```

Download Twitter/X media

Download videos from Twitter/X posts.  **Rate Limits:** Build (50/day), Accelerate (500/day), Unlimited (unlimited)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$url = https://x.com/user/status/123456789; // string | Twitter/X post URL
$action = 'download'; // string
$format_id = 'format_id_example'; // string

try {
    $result = $apiInstance->downloadTwitterMedia($url, $action, $format_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->downloadTwitterMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **url** | **string**| Twitter/X post URL | |
| **action** | **string**|  | [optional] [default to &#39;download&#39;] |
| **format_id** | **string**|  | [optional] |

### Return type

[**\Late\Model\DownloadInstagramMedia200Response**](../Model/DownloadInstagramMedia200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadYouTubeVideo()`

```php
downloadYouTubeVideo($url, $action, $format, $quality, $format_id): \Late\Model\DownloadYouTubeVideo200Response
```

Download YouTube video

Download YouTube videos or audio. Returns available formats or direct download URL.  **Rate Limits:** Build (50/day), Accelerate (500/day), Unlimited (unlimited)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$url = https://www.youtube.com/watch?v=dQw4w9WgXcQ; // string | YouTube video URL or video ID
$action = 'download'; // string | Action to perform: 'download' returns download URL, 'formats' lists available formats
$format = 'video'; // string | Desired format (when action=download)
$quality = 'hd'; // string | Desired quality (when action=download)
$format_id = 'format_id_example'; // string | Specific format ID from formats list

try {
    $result = $apiInstance->downloadYouTubeVideo($url, $action, $format, $quality, $format_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->downloadYouTubeVideo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **url** | **string**| YouTube video URL or video ID | |
| **action** | **string**| Action to perform: &#39;download&#39; returns download URL, &#39;formats&#39; lists available formats | [optional] [default to &#39;download&#39;] |
| **format** | **string**| Desired format (when action&#x3D;download) | [optional] [default to &#39;video&#39;] |
| **quality** | **string**| Desired quality (when action&#x3D;download) | [optional] [default to &#39;hd&#39;] |
| **format_id** | **string**| Specific format ID from formats list | [optional] |

### Return type

[**\Late\Model\DownloadYouTubeVideo200Response**](../Model/DownloadYouTubeVideo200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getYouTubeTranscript()`

```php
getYouTubeTranscript($url, $lang): \Late\Model\GetYouTubeTranscript200Response
```

Get YouTube transcript

Extract transcript/captions from a YouTube video.  **Rate Limits:** Build (50/day), Accelerate (500/day), Unlimited (unlimited)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$url = 'url_example'; // string | YouTube video URL or video ID
$lang = 'en'; // string | Language code for transcript

try {
    $result = $apiInstance->getYouTubeTranscript($url, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->getYouTubeTranscript: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **url** | **string**| YouTube video URL or video ID | |
| **lang** | **string**| Language code for transcript | [optional] [default to &#39;en&#39;] |

### Return type

[**\Late\Model\GetYouTubeTranscript200Response**](../Model/GetYouTubeTranscript200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
