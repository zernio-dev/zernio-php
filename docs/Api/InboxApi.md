# Zernio\InboxApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getWhatsAppMedia()**](InboxApi.md#getWhatsAppMedia) | **GET** /v1/whatsapp/media/{mediaId} | Download WhatsApp media |


## `getWhatsAppMedia()`

```php
getWhatsAppMedia($media_id, $account_id): \SplFileObject
```

Download WhatsApp media

Streams the binary for a WhatsApp attachment. This is the endpoint the `url` on a WhatsApp `attachments[]` entry points at, in both the `message.received` webhook and the List messages response.  **This is an authenticated endpoint, not a public link.** Send `Authorization: Bearer <your API key>` exactly as you would for any other call. Passing the URL straight to a browser, an LLM vision API, or a no-code \"download file\" step without the header returns `401`. This is the most common integration mistake on this endpoint, and it differs from Instagram, Facebook and Telegram, whose `attachments[].url` is a direct CDN link that needs no header.  **Fetch on receipt, not lazily.** WhatsApp media lives in Meta's media store, not ours, and it is removed after a limited retention window (currently 7 days, and Meta has been dropping some inbound media sooner). Once Meta drops it the media is unrecoverable and this endpoint answers `400` permanently, so retrying will never succeed. Download and store the bytes when the webhook arrives.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$media_id = 'media_id_example'; // string | The media id from `attachments[].payload.id`.
$account_id = 'account_id_example'; // string | The WhatsApp account that received the media.

try {
    $result = $apiInstance->getWhatsAppMedia($media_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->getWhatsAppMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **media_id** | **string**| The media id from &#x60;attachments[].payload.id&#x60;. | |
| **account_id** | **string**| The WhatsApp account that received the media. | |

### Return type

**\SplFileObject**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
