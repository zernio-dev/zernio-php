# Late\MediaApi



All URIs are relative to https://getlate.dev/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getMediaPresignedUrl()**](MediaApi.md#getMediaPresignedUrl) | **POST** /v1/media/presign | Get presigned upload URL |


## `getMediaPresignedUrl()`

```php
getMediaPresignedUrl($get_media_presigned_url_request): \Late\Model\GetMediaPresignedUrl200Response
```

Get presigned upload URL

Get a presigned URL to upload files directly to cloud storage (up to 5GB). Returns an uploadUrl and publicUrl. PUT your file to the uploadUrl, then use the publicUrl in your posts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_media_presigned_url_request = new \Late\Model\GetMediaPresignedUrlRequest(); // \Late\Model\GetMediaPresignedUrlRequest

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
| **get_media_presigned_url_request** | [**\Late\Model\GetMediaPresignedUrlRequest**](../Model/GetMediaPresignedUrlRequest.md)|  | |

### Return type

[**\Late\Model\GetMediaPresignedUrl200Response**](../Model/GetMediaPresignedUrl200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
