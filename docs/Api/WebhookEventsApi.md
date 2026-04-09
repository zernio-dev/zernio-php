# Late\WebhookEventsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**onAccountConnected()**](WebhookEventsApi.md#onAccountConnected) | **POST** /account.connected | Account connected event |
| [**onAccountDisconnected()**](WebhookEventsApi.md#onAccountDisconnected) | **POST** /account.disconnected | Account disconnected event |
| [**onCommentReceived()**](WebhookEventsApi.md#onCommentReceived) | **POST** /comment.received | Comment received event |
| [**onMessageReceived()**](WebhookEventsApi.md#onMessageReceived) | **POST** /message.received | Message received event |
| [**onMessageSent()**](WebhookEventsApi.md#onMessageSent) | **POST** /message.sent | Message sent event |
| [**onPostCancelled()**](WebhookEventsApi.md#onPostCancelled) | **POST** /post.cancelled | Post cancelled event |
| [**onPostFailed()**](WebhookEventsApi.md#onPostFailed) | **POST** /post.failed | Post failed event |
| [**onPostPartial()**](WebhookEventsApi.md#onPostPartial) | **POST** /post.partial | Post partial event |
| [**onPostPublished()**](WebhookEventsApi.md#onPostPublished) | **POST** /post.published | Post published event |
| [**onPostRecycled()**](WebhookEventsApi.md#onPostRecycled) | **POST** /post.recycled | Post recycled event |
| [**onPostScheduled()**](WebhookEventsApi.md#onPostScheduled) | **POST** /post.scheduled | Post scheduled event |
| [**onWebhookTest()**](WebhookEventsApi.md#onWebhookTest) | **POST** /webhook.test | Webhook test event |


## `onAccountConnected()`

```php
onAccountConnected($webhook_payload_account_connected)
```

Account connected event

Fired when a social account is successfully connected.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_account_connected = new \Late\Model\WebhookPayloadAccountConnected(); // \Late\Model\WebhookPayloadAccountConnected

try {
    $apiInstance->onAccountConnected($webhook_payload_account_connected);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAccountConnected: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_account_connected** | [**\Late\Model\WebhookPayloadAccountConnected**](../Model/WebhookPayloadAccountConnected.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onAccountDisconnected()`

```php
onAccountDisconnected($webhook_payload_account_disconnected)
```

Account disconnected event

Fired when a connected social account becomes disconnected.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_account_disconnected = new \Late\Model\WebhookPayloadAccountDisconnected(); // \Late\Model\WebhookPayloadAccountDisconnected

try {
    $apiInstance->onAccountDisconnected($webhook_payload_account_disconnected);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAccountDisconnected: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_account_disconnected** | [**\Late\Model\WebhookPayloadAccountDisconnected**](../Model/WebhookPayloadAccountDisconnected.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onCommentReceived()`

```php
onCommentReceived($webhook_payload_comment)
```

Comment received event

Fired when a new comment is received on a tracked post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_comment = new \Late\Model\WebhookPayloadComment(); // \Late\Model\WebhookPayloadComment

try {
    $apiInstance->onCommentReceived($webhook_payload_comment);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCommentReceived: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_comment** | [**\Late\Model\WebhookPayloadComment**](../Model/WebhookPayloadComment.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onMessageReceived()`

```php
onMessageReceived($webhook_payload_message)
```

Message received event

Fired when a new inbox message is received.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_message = new \Late\Model\WebhookPayloadMessage(); // \Late\Model\WebhookPayloadMessage

try {
    $apiInstance->onMessageReceived($webhook_payload_message);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onMessageReceived: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_message** | [**\Late\Model\WebhookPayloadMessage**](../Model/WebhookPayloadMessage.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onMessageSent()`

```php
onMessageSent($webhook_payload_message_sent)
```

Message sent event

Fired when a message is sent via the API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_message_sent = new \Late\Model\WebhookPayloadMessageSent(); // \Late\Model\WebhookPayloadMessageSent

try {
    $apiInstance->onMessageSent($webhook_payload_message_sent);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onMessageSent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_message_sent** | [**\Late\Model\WebhookPayloadMessageSent**](../Model/WebhookPayloadMessageSent.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onPostCancelled()`

```php
onPostCancelled($webhook_payload_post)
```

Post cancelled event

Fired when a post publishing job is cancelled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_post = new \Late\Model\WebhookPayloadPost(); // \Late\Model\WebhookPayloadPost

try {
    $apiInstance->onPostCancelled($webhook_payload_post);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostCancelled: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_post** | [**\Late\Model\WebhookPayloadPost**](../Model/WebhookPayloadPost.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onPostFailed()`

```php
onPostFailed($webhook_payload_post)
```

Post failed event

Fired when a post fails to publish on all target platforms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_post = new \Late\Model\WebhookPayloadPost(); // \Late\Model\WebhookPayloadPost

try {
    $apiInstance->onPostFailed($webhook_payload_post);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostFailed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_post** | [**\Late\Model\WebhookPayloadPost**](../Model/WebhookPayloadPost.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onPostPartial()`

```php
onPostPartial($webhook_payload_post)
```

Post partial event

Fired when a post publishes on some platforms and fails on others.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_post = new \Late\Model\WebhookPayloadPost(); // \Late\Model\WebhookPayloadPost

try {
    $apiInstance->onPostPartial($webhook_payload_post);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostPartial: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_post** | [**\Late\Model\WebhookPayloadPost**](../Model/WebhookPayloadPost.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onPostPublished()`

```php
onPostPublished($webhook_payload_post)
```

Post published event

Fired when a post is successfully published.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_post = new \Late\Model\WebhookPayloadPost(); // \Late\Model\WebhookPayloadPost

try {
    $apiInstance->onPostPublished($webhook_payload_post);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostPublished: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_post** | [**\Late\Model\WebhookPayloadPost**](../Model/WebhookPayloadPost.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onPostRecycled()`

```php
onPostRecycled($webhook_payload_post)
```

Post recycled event

Fired when a post is recycled (cloned and re-scheduled for publishing).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_post = new \Late\Model\WebhookPayloadPost(); // \Late\Model\WebhookPayloadPost

try {
    $apiInstance->onPostRecycled($webhook_payload_post);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostRecycled: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_post** | [**\Late\Model\WebhookPayloadPost**](../Model/WebhookPayloadPost.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onPostScheduled()`

```php
onPostScheduled($webhook_payload_post)
```

Post scheduled event

Fired when a post is created and scheduled for publishing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_post = new \Late\Model\WebhookPayloadPost(); // \Late\Model\WebhookPayloadPost

try {
    $apiInstance->onPostScheduled($webhook_payload_post);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostScheduled: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_post** | [**\Late\Model\WebhookPayloadPost**](../Model/WebhookPayloadPost.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onWebhookTest()`

```php
onWebhookTest($webhook_payload_test)
```

Webhook test event

Fired when sending a test webhook to verify the endpoint configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_test = new \Late\Model\WebhookPayloadTest(); // \Late\Model\WebhookPayloadTest

try {
    $apiInstance->onWebhookTest($webhook_payload_test);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWebhookTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_test** | [**\Late\Model\WebhookPayloadTest**](../Model/WebhookPayloadTest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
