# Zernio\MediaApi

Upload and presign media (images, videos, documents) for use in posts.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getMediaPresignedUrl()**](MediaApi.md#getMediaPresignedUrl) | **POST** /v1/media/presign | Get upload URL |
| [**prepareMedia()**](MediaApi.md#prepareMedia) | **POST** /v1/media/prepare | Prepare media for a platform |


## `getMediaPresignedUrl()`

```php
getMediaPresignedUrl($get_media_presigned_url_request): \Zernio\Model\GetMediaPresignedUrl200Response
```

Get upload URL

Get a presigned URL to upload files directly to cloud storage (up to 5GB). Returns an uploadUrl and publicUrl. PUT your file to the uploadUrl, then use the publicUrl in your posts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_media_presigned_url_request = new \Zernio\Model\GetMediaPresignedUrlRequest(); // \Zernio\Model\GetMediaPresignedUrlRequest

try {
    $result = $apiInstance->getMediaPresignedUrl($get_media_presigned_url_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->getMediaPresignedUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_media_presigned_url_request** | [**\Zernio\Model\GetMediaPresignedUrlRequest**](../Model/GetMediaPresignedUrlRequest.md)|  | |

### Return type

[**\Zernio\Model\GetMediaPresignedUrl200Response**](../Model/GetMediaPresignedUrl200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `prepareMedia()`

```php
prepareMedia($prepare_media_request): \Zernio\Model\PrepareMedia200Response
```

Prepare media for a platform

Turn any image or video into a version the target platform accepts, using the same per-platform processing Zernio runs before publishing.  Each team can prepare up to 60 files per hour; past that the endpoint answers 429 with `retryAfterSeconds`.  ### Video, per target  - `instagram`, `facebook_reel`: re-encode to H.264 Main 4.1, 30 fps, 1080 wide (HDR sources only get the size step, so they are not flattened to SDR). - `instagram_story`: re-encodes a video over 100MB to fit 60 seconds and 100MB. - `facebook_story`: reframes anything wider than 9:16 onto a 1080x1920 canvas with a blurred background (Facebook otherwise publishes such stories with 0 seconds of video and no error). - `threads`: re-encodes to the conservative H.264 Baseline profile Threads processes reliably. - `bluesky`: re-encodes to 1080 wide and at most 180 seconds, then compresses under 50MB if the result is still larger. - `telegram`: compresses to 50MB and moves the index to the start of the file. - Other targets compress only when the file is over the platform limit.  ### Images  Images are converted to a format the platform ingests (Instagram takes only JPEG; LinkedIn and Google Business reject WebP and AVIF) and compressed under its size limit.  - `telegram` also fits the width plus height limit. - `googlebusiness` enlarges images under its minimum size.  ### Result  When the file already complies, `changed` is false and `url` is the input URL (after redirects). Otherwise `url` points to the prepared file in Zernio storage, kept under the same retention as uploaded media.  The request is synchronous: a long video can take a few minutes.  - Videos over 200MB are refused with 413. - A video URL whose host sends no Content-Length is refused with 400.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prepare_media_request = new \Zernio\Model\PrepareMediaRequest(); // \Zernio\Model\PrepareMediaRequest

try {
    $result = $apiInstance->prepareMedia($prepare_media_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->prepareMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **prepare_media_request** | [**\Zernio\Model\PrepareMediaRequest**](../Model/PrepareMediaRequest.md)|  | |

### Return type

[**\Zernio\Model\PrepareMedia200Response**](../Model/PrepareMedia200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
