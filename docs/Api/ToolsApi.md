# Zernio\ToolsApi

Media tools for authenticated API consumers.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**downloadTikTokVideo()**](ToolsApi.md#downloadTikTokVideo) | **GET** /v1/tools/tiktok/download | Download a TikTok video |


## `downloadTikTokVideo()`

```php
downloadTikTokVideo($url, $action, $format_id): \Zernio\Model\DownloadTikTokVideo200Response
```

Download a TikTok video

Get a download URL or list available formats for a TikTok video. Requires Tools API access and uses the Tools API rate limit. Provider gateway failures and provider-side access blocks return 503; an unavailable video returns 404.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$url = https://www.tiktok.com/@example/video/7412345678901234567; // string | TikTok video URL or numeric video ID.
$action = 'download'; // string | Return a download URL or the available formats.
$format_id = 'format_id_example'; // string | Format ID from the formats response. Omit to select the first available format.

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
| **url** | **string**| TikTok video URL or numeric video ID. | |
| **action** | **string**| Return a download URL or the available formats. | [optional] [default to &#39;download&#39;] |
| **format_id** | **string**| Format ID from the formats response. Omit to select the first available format. | [optional] |

### Return type

[**\Zernio\Model\DownloadTikTokVideo200Response**](../Model/DownloadTikTokVideo200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
