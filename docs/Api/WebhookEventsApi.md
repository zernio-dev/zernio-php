# Zernio\WebhookEventsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**onAccountConnected()**](WebhookEventsApi.md#onAccountConnected) | **POST** /account.connected | Account connected event |
| [**onAccountDisconnected()**](WebhookEventsApi.md#onAccountDisconnected) | **POST** /account.disconnected | Account disconnected event |
| [**onCommentReceived()**](WebhookEventsApi.md#onCommentReceived) | **POST** /comment.received | Comment received event |
| [**onMessageDeleted()**](WebhookEventsApi.md#onMessageDeleted) | **POST** /message.deleted | Message deleted event |
| [**onMessageDelivered()**](WebhookEventsApi.md#onMessageDelivered) | **POST** /message.delivered | Message delivered event |
| [**onMessageEdited()**](WebhookEventsApi.md#onMessageEdited) | **POST** /message.edited | Message edited event |
| [**onMessageFailed()**](WebhookEventsApi.md#onMessageFailed) | **POST** /message.failed | Message delivery failed event |
| [**onMessageRead()**](WebhookEventsApi.md#onMessageRead) | **POST** /message.read | Message read event |
| [**onMessageReceived()**](WebhookEventsApi.md#onMessageReceived) | **POST** /message.received | Message received event |
| [**onMessageSent()**](WebhookEventsApi.md#onMessageSent) | **POST** /message.sent | Message sent event |
| [**onPostCancelled()**](WebhookEventsApi.md#onPostCancelled) | **POST** /post.cancelled | Post cancelled event |
| [**onPostFailed()**](WebhookEventsApi.md#onPostFailed) | **POST** /post.failed | Post failed event |
| [**onPostPartial()**](WebhookEventsApi.md#onPostPartial) | **POST** /post.partial | Post partial event |
| [**onPostPublished()**](WebhookEventsApi.md#onPostPublished) | **POST** /post.published | Post published event |
| [**onPostRecycled()**](WebhookEventsApi.md#onPostRecycled) | **POST** /post.recycled | Post recycled event |
| [**onPostScheduled()**](WebhookEventsApi.md#onPostScheduled) | **POST** /post.scheduled | Post scheduled event |
| [**onReviewNew()**](WebhookEventsApi.md#onReviewNew) | **POST** /review.new | Review new event |
| [**onReviewUpdated()**](WebhookEventsApi.md#onReviewUpdated) | **POST** /review.updated | Review updated event |
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
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_account_connected = new \Zernio\Model\WebhookPayloadAccountConnected(); // \Zernio\Model\WebhookPayloadAccountConnected

try {
    $apiInstance->onAccountConnected($webhook_payload_account_connected);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAccountConnected: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_account_connected** | [**\Zernio\Model\WebhookPayloadAccountConnected**](../Model/WebhookPayloadAccountConnected.md)|  | |

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
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_account_disconnected = new \Zernio\Model\WebhookPayloadAccountDisconnected(); // \Zernio\Model\WebhookPayloadAccountDisconnected

try {
    $apiInstance->onAccountDisconnected($webhook_payload_account_disconnected);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAccountDisconnected: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_account_disconnected** | [**\Zernio\Model\WebhookPayloadAccountDisconnected**](../Model/WebhookPayloadAccountDisconnected.md)|  | |

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
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_comment = new \Zernio\Model\WebhookPayloadComment(); // \Zernio\Model\WebhookPayloadComment

try {
    $apiInstance->onCommentReceived($webhook_payload_comment);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCommentReceived: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_comment** | [**\Zernio\Model\WebhookPayloadComment**](../Model/WebhookPayloadComment.md)|  | |

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

## `onMessageDeleted()`

```php
onMessageDeleted($webhook_payload_message_deleted)
```

Message deleted event

Fired when a sender deletes (unsends) a message. Supported on Instagram (incoming unsend) and WhatsApp (when the business deletes an outgoing message via the Cloud API). The payload retains the pre-delete text and attachments so API consumers can access the original content for moderation or compliance — the Zernio dashboard UI hides it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_message_deleted = new \Zernio\Model\WebhookPayloadMessageDeleted(); // \Zernio\Model\WebhookPayloadMessageDeleted

try {
    $apiInstance->onMessageDeleted($webhook_payload_message_deleted);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onMessageDeleted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_message_deleted** | [**\Zernio\Model\WebhookPayloadMessageDeleted**](../Model/WebhookPayloadMessageDeleted.md)|  | |

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

## `onMessageDelivered()`

```php
onMessageDelivered($webhook_payload_message_delivery_status)
```

Message delivered event

Fired when an outgoing message is delivered to the recipient. Supported on WhatsApp and Facebook Messenger.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_message_delivery_status = new \Zernio\Model\WebhookPayloadMessageDeliveryStatus(); // \Zernio\Model\WebhookPayloadMessageDeliveryStatus

try {
    $apiInstance->onMessageDelivered($webhook_payload_message_delivery_status);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onMessageDelivered: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_message_delivery_status** | [**\Zernio\Model\WebhookPayloadMessageDeliveryStatus**](../Model/WebhookPayloadMessageDeliveryStatus.md)|  | |

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

## `onMessageEdited()`

```php
onMessageEdited($webhook_payload_message_edited)
```

Message edited event

Fired when a sender edits a previously-sent message. Supported on Instagram, Facebook Messenger, and Telegram. The payload includes the full editHistory so consumers can show prior versions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_message_edited = new \Zernio\Model\WebhookPayloadMessageEdited(); // \Zernio\Model\WebhookPayloadMessageEdited

try {
    $apiInstance->onMessageEdited($webhook_payload_message_edited);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onMessageEdited: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_message_edited** | [**\Zernio\Model\WebhookPayloadMessageEdited**](../Model/WebhookPayloadMessageEdited.md)|  | |

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

## `onMessageFailed()`

```php
onMessageFailed($webhook_payload_message_delivery_status)
```

Message delivery failed event

Fired when an outgoing message fails to deliver. Currently only emitted for WhatsApp (other platforms don't expose per-message failure via webhook). The payload error object contains code, title, and message from the platform.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_message_delivery_status = new \Zernio\Model\WebhookPayloadMessageDeliveryStatus(); // \Zernio\Model\WebhookPayloadMessageDeliveryStatus

try {
    $apiInstance->onMessageFailed($webhook_payload_message_delivery_status);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onMessageFailed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_message_delivery_status** | [**\Zernio\Model\WebhookPayloadMessageDeliveryStatus**](../Model/WebhookPayloadMessageDeliveryStatus.md)|  | |

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

## `onMessageRead()`

```php
onMessageRead($webhook_payload_message_delivery_status)
```

Message read event

Fired when an outgoing message is read by the recipient. Supported on WhatsApp, Facebook Messenger, and Instagram.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_message_delivery_status = new \Zernio\Model\WebhookPayloadMessageDeliveryStatus(); // \Zernio\Model\WebhookPayloadMessageDeliveryStatus

try {
    $apiInstance->onMessageRead($webhook_payload_message_delivery_status);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onMessageRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_message_delivery_status** | [**\Zernio\Model\WebhookPayloadMessageDeliveryStatus**](../Model/WebhookPayloadMessageDeliveryStatus.md)|  | |

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
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_message = new \Zernio\Model\WebhookPayloadMessage(); // \Zernio\Model\WebhookPayloadMessage

try {
    $apiInstance->onMessageReceived($webhook_payload_message);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onMessageReceived: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_message** | [**\Zernio\Model\WebhookPayloadMessage**](../Model/WebhookPayloadMessage.md)|  | |

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
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_message_sent = new \Zernio\Model\WebhookPayloadMessageSent(); // \Zernio\Model\WebhookPayloadMessageSent

try {
    $apiInstance->onMessageSent($webhook_payload_message_sent);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onMessageSent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_message_sent** | [**\Zernio\Model\WebhookPayloadMessageSent**](../Model/WebhookPayloadMessageSent.md)|  | |

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
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_post = new \Zernio\Model\WebhookPayloadPost(); // \Zernio\Model\WebhookPayloadPost

try {
    $apiInstance->onPostCancelled($webhook_payload_post);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostCancelled: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_post** | [**\Zernio\Model\WebhookPayloadPost**](../Model/WebhookPayloadPost.md)|  | |

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
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_post = new \Zernio\Model\WebhookPayloadPost(); // \Zernio\Model\WebhookPayloadPost

try {
    $apiInstance->onPostFailed($webhook_payload_post);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostFailed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_post** | [**\Zernio\Model\WebhookPayloadPost**](../Model/WebhookPayloadPost.md)|  | |

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
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_post = new \Zernio\Model\WebhookPayloadPost(); // \Zernio\Model\WebhookPayloadPost

try {
    $apiInstance->onPostPartial($webhook_payload_post);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostPartial: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_post** | [**\Zernio\Model\WebhookPayloadPost**](../Model/WebhookPayloadPost.md)|  | |

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
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_post = new \Zernio\Model\WebhookPayloadPost(); // \Zernio\Model\WebhookPayloadPost

try {
    $apiInstance->onPostPublished($webhook_payload_post);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostPublished: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_post** | [**\Zernio\Model\WebhookPayloadPost**](../Model/WebhookPayloadPost.md)|  | |

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
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_post = new \Zernio\Model\WebhookPayloadPost(); // \Zernio\Model\WebhookPayloadPost

try {
    $apiInstance->onPostRecycled($webhook_payload_post);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostRecycled: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_post** | [**\Zernio\Model\WebhookPayloadPost**](../Model/WebhookPayloadPost.md)|  | |

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
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_post = new \Zernio\Model\WebhookPayloadPost(); // \Zernio\Model\WebhookPayloadPost

try {
    $apiInstance->onPostScheduled($webhook_payload_post);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostScheduled: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_post** | [**\Zernio\Model\WebhookPayloadPost**](../Model/WebhookPayloadPost.md)|  | |

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

## `onReviewNew()`

```php
onReviewNew($webhook_payload_review_new)
```

Review new event

Fired when a new review is posted on a connected account. Currently supported for Google Business Profile (real-time via Pub/Sub). Requires the Inbox add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_review_new = new \Zernio\Model\WebhookPayloadReviewNew(); // \Zernio\Model\WebhookPayloadReviewNew

try {
    $apiInstance->onReviewNew($webhook_payload_review_new);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onReviewNew: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_review_new** | [**\Zernio\Model\WebhookPayloadReviewNew**](../Model/WebhookPayloadReviewNew.md)|  | |

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

## `onReviewUpdated()`

```php
onReviewUpdated($webhook_payload_review_updated)
```

Review updated event

Fired when a review changes: the reviewer edits their text or rating, or a reply is added (via the API or directly through the Google Business dashboard). Payload shape matches review.new. Requires the Inbox add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_review_updated = new \Zernio\Model\WebhookPayloadReviewUpdated(); // \Zernio\Model\WebhookPayloadReviewUpdated

try {
    $apiInstance->onReviewUpdated($webhook_payload_review_updated);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onReviewUpdated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_review_updated** | [**\Zernio\Model\WebhookPayloadReviewUpdated**](../Model/WebhookPayloadReviewUpdated.md)|  | |

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
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhookEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_payload_test = new \Zernio\Model\WebhookPayloadTest(); // \Zernio\Model\WebhookPayloadTest

try {
    $apiInstance->onWebhookTest($webhook_payload_test);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWebhookTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_test** | [**\Zernio\Model\WebhookPayloadTest**](../Model/WebhookPayloadTest.md)|  | |

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
