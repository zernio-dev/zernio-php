# Zernio\ContentRetentionApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getContentRetention()**](ContentRetentionApi.md#getContentRetention) | **GET** /v1/content-retention | Get content retention mode |
| [**updateContentRetention()**](ContentRetentionApi.md#updateContentRetention) | **PUT** /v1/content-retention | Turn zero content retention on or off |


## `getContentRetention()`

```php
getContentRetention(): \Zernio\Model\ContentRetentionResponse
```

Get content retention mode

Returns whether your team stores content. `none` is zero content retention: Zernio keeps identifiers and metadata only, and content fields come back as `null` with `contentNotRetained: true`. See the zero content retention guide for what changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ContentRetentionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getContentRetention();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentRetentionApi->getContentRetention: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zernio\Model\ContentRetentionResponse**](../Model/ContentRetentionResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateContentRetention()`

```php
updateContentRetention($update_content_retention_request): \Zernio\Model\ContentRetentionResponse
```

Turn zero content retention on or off

Sets your team's content retention mode for every member. Only the team owner can change it, with a signed-in session or a full-access API key.  - `none` turns on zero content retention: from then on Zernio stores no message text, comments, lead answers, mentions, post text after publishing, call transcripts or recordings. Webhooks become the only copy, so store each event when it arrives. - `standard` stores content again for new data. Content that was not stored cannot come back. - The change applies to new data within about 5 minutes. Content stored before it stays until it is deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ContentRetentionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_content_retention_request = {"mode":"none"}; // \Zernio\Model\UpdateContentRetentionRequest

try {
    $result = $apiInstance->updateContentRetention($update_content_retention_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentRetentionApi->updateContentRetention: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_content_retention_request** | [**\Zernio\Model\UpdateContentRetentionRequest**](../Model/UpdateContentRetentionRequest.md)|  | |

### Return type

[**\Zernio\Model\ContentRetentionResponse**](../Model/ContentRetentionResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
