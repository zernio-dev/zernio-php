# Late\WebhooksApi

Configure webhooks for real-time notifications. Events: post.scheduled, post.published, post.failed, post.partial, post.recycled, account.connected, account.disconnected, message.received, comment.received. Security: optional HMAC-SHA256 signature in X-Late-Signature header. Configure a secret key to enable verification. Custom headers supported.

All URIs are relative to https://getlate.dev/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWebhookSettings()**](WebhooksApi.md#createWebhookSettings) | **POST** /v1/webhooks/settings | Create webhook |
| [**deleteWebhookSettings()**](WebhooksApi.md#deleteWebhookSettings) | **DELETE** /v1/webhooks/settings | Delete webhook |
| [**getWebhookLogs()**](WebhooksApi.md#getWebhookLogs) | **GET** /v1/webhooks/logs | Get delivery logs |
| [**getWebhookSettings()**](WebhooksApi.md#getWebhookSettings) | **GET** /v1/webhooks/settings | List webhooks |
| [**testWebhook()**](WebhooksApi.md#testWebhook) | **POST** /v1/webhooks/test | Send test webhook |
| [**updateWebhookSettings()**](WebhooksApi.md#updateWebhookSettings) | **PUT** /v1/webhooks/settings | Update webhook |


## `createWebhookSettings()`

```php
createWebhookSettings($create_webhook_settings_request): \Late\Model\UpdateWebhookSettings200Response
```

Create webhook

Create a new webhook configuration. Maximum 10 webhooks per user.  Webhooks are automatically disabled after 10 consecutive delivery failures.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_webhook_settings_request = {"name":"My Production Webhook","url":"https://example.com/webhook","secret":"your-secret-key","events":["post.scheduled","post.published","post.failed","post.partial","account.connected","account.disconnected","message.received","comment.received"],"isActive":true}; // \Late\Model\CreateWebhookSettingsRequest

try {
    $result = $apiInstance->createWebhookSettings($create_webhook_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->createWebhookSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_webhook_settings_request** | [**\Late\Model\CreateWebhookSettingsRequest**](../Model/CreateWebhookSettingsRequest.md)|  | |

### Return type

[**\Late\Model\UpdateWebhookSettings200Response**](../Model/UpdateWebhookSettings200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebhookSettings()`

```php
deleteWebhookSettings($id): \Late\Model\UpdateRedditSubreddits200Response
```

Delete webhook

Permanently delete a webhook configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Webhook ID to delete

try {
    $result = $apiInstance->deleteWebhookSettings($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteWebhookSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Webhook ID to delete | |

### Return type

[**\Late\Model\UpdateRedditSubreddits200Response**](../Model/UpdateRedditSubreddits200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhookLogs()`

```php
getWebhookLogs($limit, $status, $event, $webhook_id): \Late\Model\GetWebhookLogs200Response
```

Get delivery logs

Retrieve webhook delivery history. Logs are automatically deleted after 7 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | Maximum number of logs to return (max 100)
$status = 'status_example'; // string | Filter by delivery status
$event = 'event_example'; // string | Filter by event type
$webhook_id = 'webhook_id_example'; // string | Filter by webhook ID

try {
    $result = $apiInstance->getWebhookLogs($limit, $status, $event, $webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhookLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Maximum number of logs to return (max 100) | [optional] [default to 50] |
| **status** | **string**| Filter by delivery status | [optional] |
| **event** | **string**| Filter by event type | [optional] |
| **webhook_id** | **string**| Filter by webhook ID | [optional] |

### Return type

[**\Late\Model\GetWebhookLogs200Response**](../Model/GetWebhookLogs200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhookSettings()`

```php
getWebhookSettings(): \Late\Model\GetWebhookSettings200Response
```

List webhooks

Retrieve all configured webhooks for the authenticated user. Supports up to 10 webhooks per user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWebhookSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhookSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Late\Model\GetWebhookSettings200Response**](../Model/GetWebhookSettings200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testWebhook()`

```php
testWebhook($test_webhook_request): \Late\Model\UnpublishPost200Response
```

Send test webhook

Send a test webhook to verify your endpoint is configured correctly. The test payload includes event: \"webhook.test\" to distinguish it from real events.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$test_webhook_request = {"webhookId":"507f1f77bcf86cd799439011"}; // \Late\Model\TestWebhookRequest

try {
    $result = $apiInstance->testWebhook($test_webhook_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->testWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **test_webhook_request** | [**\Late\Model\TestWebhookRequest**](../Model/TestWebhookRequest.md)|  | |

### Return type

[**\Late\Model\UnpublishPost200Response**](../Model/UnpublishPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebhookSettings()`

```php
updateWebhookSettings($update_webhook_settings_request): \Late\Model\UpdateWebhookSettings200Response
```

Update webhook

Update an existing webhook configuration. All fields except _id are optional; only provided fields will be updated.  Webhooks are automatically disabled after 10 consecutive delivery failures.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_webhook_settings_request = {"_id":"507f1f77bcf86cd799439011","url":"https://new-example.com/webhook","events":["post.published","post.failed"]}; // \Late\Model\UpdateWebhookSettingsRequest

try {
    $result = $apiInstance->updateWebhookSettings($update_webhook_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->updateWebhookSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_webhook_settings_request** | [**\Late\Model\UpdateWebhookSettingsRequest**](../Model/UpdateWebhookSettingsRequest.md)|  | |

### Return type

[**\Late\Model\UpdateWebhookSettings200Response**](../Model/UpdateWebhookSettings200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
