# Zernio\WebhooksApi

Configure webhooks for real-time notifications. Webhooks can be created from the dashboard (Settings → Webhooks) or via this API. Events: post.scheduled, post.published, post.failed, post.partial, post.cancelled, post.recycled, post.platform.published, post.platform.failed, post.platform.deleted, post.tiktok.url_resolved, post.external.created, post.external.updated, post.external.deleted, account.connected, account.disconnected, account.ads.initial_sync_completed, analytics.synced, message.received, conversation.started, conversation.control_changed, call.received, call.ended, call.failed, call.permission_request, message.sent, message.edited, message.deleted, message.delivered, message.read, message.failed, reaction.received, referral.received, comment.received, review.new, review.updated, lead.received, ad.status_changed, whatsapp.template.status_updated, whatsapp.template.category_updated, whatsapp.account.name_status_updated, whatsapp.automatic_event, whatsapp.number.activated, whatsapp.number.declined, whatsapp.number.action_required, whatsapp.number.verification_required, whatsapp.number.suspended, whatsapp.number.reactivated, whatsapp.number.released, whatsapp.number.kyc_submitted, phone_number.stock_available, verification.approved, verification.failed, webhook.test. Headers: every delivery carries X-Zernio-Event (event name) and X-Zernio-Event-Id (the payload &#x60;id&#x60;, a UUID minted once per event and identical across every subscribed endpoint, every automatic retry and every redelivery, so dedupe on it). Security: optional HMAC-SHA256 signature in X-Zernio-Signature header. Configure a secret key to enable verification. Custom headers supported. Legacy X-Late-Event, X-Late-Event-Id and X-Late-Signature duplicates are still sent and will be removed in a future major version.  Resource groups. Every event belongs to one group: post.* to publishing, message.*, reaction.*, conversation.*, call.* and whatsapp.automatic_event to messages, comment.* and review.* to engagement, lead.* to contacts, ad.* to ads, account.*, whatsapp.template.* and whatsapp.account.* to accounts, analytics.* to analytics, whatsapp.number.* and verification.* to telephony, webhook.test to webhooks. Two independent controls use that mapping. (1) A restricted (zrk_) API key can only subscribe to, test-fire, redeliver, or read delivery logs for events in the groups it holds, so it can never create a subscription broader than itself. (2) Each subscription carries its own &#x60;disabledResourceGroups&#x60; denylist: events in a disabled group are dropped before delivery to that endpoint, on live delivery and on every replay path, no matter which key or session created the subscription. Changing that denylist applies to every event emitted after the change; events already queued when it landed can still be delivered for up to five minutes after they were enqueued, because the delivery worker trusts a five-minute enqueue-time snapshot before re-checking. Absent or empty on a subscription means it receives everything it subscribes to, which is the behavior of every subscription created before the field existed.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWebhookSettings()**](WebhooksApi.md#createWebhookSettings) | **POST** /v1/webhooks/settings | Create webhook |
| [**deleteWebhookSettings()**](WebhooksApi.md#deleteWebhookSettings) | **DELETE** /v1/webhooks/settings | Delete webhook |
| [**getWebhookLogs()**](WebhooksApi.md#getWebhookLogs) | **GET** /v1/webhooks/logs | List webhook delivery logs |
| [**getWebhookSettings()**](WebhooksApi.md#getWebhookSettings) | **GET** /v1/webhooks/settings | List webhooks |
| [**redeliverWebhookEvent()**](WebhooksApi.md#redeliverWebhookEvent) | **POST** /v1/webhooks/logs/redeliver | Redeliver a webhook event |
| [**testWebhook()**](WebhooksApi.md#testWebhook) | **POST** /v1/webhooks/test | Send test webhook |
| [**updateWebhookSettings()**](WebhooksApi.md#updateWebhookSettings) | **PUT** /v1/webhooks/settings | Update webhook |


## `createWebhookSettings()`

```php
createWebhookSettings($create_webhook_settings_request): \Zernio\Model\UpdateWebhookSettings200Response
```

Create webhook

Create a new webhook configuration. Maximum 50 webhooks per user.  `name`, `url` and `events` are required. `url` must be a valid URL and `events` must contain at least one event. Whitespace is trimmed from `url` before validation.  Webhooks are auto-disabled only once the endpoint has had no successful delivery for 3 days AND has either reached 20 consecutive terminal failures (each one an event that exhausted the full retry ladder) or been failing continuously for 3 days. The owner is emailed; re-enable it with `isActive: true`.  A restricted (zrk_) API key can only subscribe to events whose resource group the key holds; an event outside the key's groups is rejected with 403, so a restricted key can never create a subscription broader than itself.  `disabledResourceGroups` restricts the subscription itself, independently of which key or session later reads it. Events in a disabled group are dropped before delivery to this endpoint, on live delivery and on every replay path (test fire, redelivery, dead-letter requeue), even if they are listed in `events`. Omit it to receive everything in `events`, which is how existing subscriptions behave. A restricted key's own disabled groups are always unioned in.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_webhook_settings_request = {"name":"My Production Webhook","url":"https://example.com/webhook","secret":"your-secret-key","events":["post.scheduled","post.published","post.failed","post.partial","post.cancelled","post.recycled","account.connected","account.disconnected","account.ads.initial_sync_completed","message.received","message.sent","message.edited","message.deleted","message.delivered","message.read","message.failed","comment.received","review.new","review.updated","ad.status_changed"],"isActive":true}; // \Zernio\Model\CreateWebhookSettingsRequest

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
| **create_webhook_settings_request** | [**\Zernio\Model\CreateWebhookSettingsRequest**](../Model/CreateWebhookSettingsRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateWebhookSettings200Response**](../Model/UpdateWebhookSettings200Response.md)

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
deleteWebhookSettings($id): \Zernio\Model\UpdateYoutubeDefaultPlaylist200Response
```

Delete webhook

Permanently delete a webhook configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhooksApi(
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

[**\Zernio\Model\UpdateYoutubeDefaultPlaylist200Response**](../Model/UpdateYoutubeDefaultPlaylist200Response.md)

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
getWebhookLogs($limit, $skip, $status, $event, $webhook_id, $event_id): \Zernio\Model\GetWebhookLogs200Response
```

List webhook delivery logs

Retrieve recorded webhook delivery attempts for the authenticated user, most recent first. Logs are retained for 30 days. Supports filtering by status, event type, webhook ID, and event ID, plus offset-based pagination.  For a restricted (zrk_) API key, rows for events outside the key's resource groups are omitted (`pagination.total` may over-count), and an `event` filter naming such an event is rejected with 403. Events blocked by a subscription's own `disabledResourceGroups` are dropped before delivery, so they produce no log rows for anyone; the exception is the five-minute tail after a denylist change, where an already-queued event can still be delivered and logged.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | Maximum number of logs to return
$skip = 0; // int | Number of logs to skip (offset-based pagination)
$status = 'status_example'; // string | Filter by delivery outcome
$event = 'event_example'; // string | Filter by event type (e.g. post.published)
$webhook_id = 'webhook_id_example'; // string | Filter by webhook configuration ID
$event_id = 'event_id_example'; // string | Filter by stable webhook event ID

try {
    $result = $apiInstance->getWebhookLogs($limit, $skip, $status, $event, $webhook_id, $event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhookLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Maximum number of logs to return | [optional] [default to 50] |
| **skip** | **int**| Number of logs to skip (offset-based pagination) | [optional] [default to 0] |
| **status** | **string**| Filter by delivery outcome | [optional] |
| **event** | **string**| Filter by event type (e.g. post.published) | [optional] |
| **webhook_id** | **string**| Filter by webhook configuration ID | [optional] |
| **event_id** | **string**| Filter by stable webhook event ID | [optional] |

### Return type

[**\Zernio\Model\GetWebhookLogs200Response**](../Model/GetWebhookLogs200Response.md)

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
getWebhookSettings(): \Zernio\Model\GetWebhookSettings200Response
```

List webhooks

Retrieve all configured webhooks for the authenticated user. Supports up to 50 webhooks per user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhooksApi(
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

[**\Zernio\Model\GetWebhookSettings200Response**](../Model/GetWebhookSettings200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `redeliverWebhookEvent()`

```php
redeliverWebhookEvent($redeliver_webhook_event_request): \Zernio\Model\UnpublishPost200Response
```

Redeliver a webhook event

Replay a past delivery: the original payload is re-sent, byte for byte, to the subscription's current URL. The original event ID is preserved so your endpoint can dedupe, and the replay is recorded as a fresh attempt, so it shows up in `GET /v1/webhooks/logs` next to the delivery it replays.  Both `webhookId` and `eventId` come from a row of `GET /v1/webhooks/logs`. Because the stored payload is replayed as-is, a redelivery reflects the event as it was emitted, not the current state of the resource.  Only deliveries inside the 30-day log retention window can be replayed; past that the payload is gone and the request fails with a 422. Replays run the same resource-group checks as live delivery, against both the key's groups and the subscription's `disabledResourceGroups`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$redeliver_webhook_event_request = {"webhookId":"507f1f77bcf86cd799439011","eventId":"evt_9f2c1b7a4d8e"}; // \Zernio\Model\RedeliverWebhookEventRequest

try {
    $result = $apiInstance->redeliverWebhookEvent($redeliver_webhook_event_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->redeliverWebhookEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **redeliver_webhook_event_request** | [**\Zernio\Model\RedeliverWebhookEventRequest**](../Model/RedeliverWebhookEventRequest.md)|  | |

### Return type

[**\Zernio\Model\UnpublishPost200Response**](../Model/UnpublishPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testWebhook()`

```php
testWebhook($test_webhook_request): \Zernio\Model\UnpublishPost200Response
```

Send test webhook

Send a test webhook to verify your endpoint is configured correctly. The test payload includes event: \"webhook.test\" to distinguish it from real events.  `webhook.test` belongs to the `webhooks` resource group, so a key with that group disabled is rejected with 403, as is a test fire on a subscription that lists `webhooks` in its own `disabledResourceGroups` (a 403, not a reported delivery failure). Replays of real events (redelivery, dead-letter requeue) run the same checks as live delivery, against both the key's groups and the subscription's.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$test_webhook_request = {"webhookId":"507f1f77bcf86cd799439011"}; // \Zernio\Model\TestWebhookRequest

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
| **test_webhook_request** | [**\Zernio\Model\TestWebhookRequest**](../Model/TestWebhookRequest.md)|  | |

### Return type

[**\Zernio\Model\UnpublishPost200Response**](../Model/UnpublishPost200Response.md)

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
updateWebhookSettings($update_webhook_settings_request): \Zernio\Model\UpdateWebhookSettings200Response
```

Update webhook

Update an existing webhook configuration. All fields except `_id` are optional; only provided fields will be updated.  When provided, `name` must be 1-50 characters, `url` must be a valid URL, and `events` must contain at least one event. Whitespace is trimmed from `url` before validation.  Webhooks are auto-disabled only once the endpoint has had no successful delivery for 3 days AND has either reached 20 consecutive terminal failures (each one an event that exhausted the full retry ladder) or been failing continuously for 3 days. The owner is emailed; re-enable it with `isActive: true`.  A restricted (zrk_) API key can only set `events` to events whose resource group the key holds; an event outside the key's groups is rejected with 403. It also cannot widen an existing subscription past its own groups.  `disabledResourceGroups` replaces the subscription's own denylist, which applies to delivery regardless of which key or session created it. Send an empty array to clear it. A restricted key's own disabled groups are unioned into the stored value on every update, so repointing a legacy unrestricted subscription with a restricted key also narrows it.  Timing: the new denylist applies to every event emitted after the update. Events already queued for delivery when the update landed were filtered against the previous denylist and can still arrive at your endpoint for up to five minutes after they were enqueued, because the delivery worker trusts a five-minute enqueue-time snapshot before re-checking the subscription. Retries beyond that window, dead-letter replays, test fires, and redeliveries are all checked against the current denylist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_webhook_settings_request = {"_id":"507f1f77bcf86cd799439011","url":"https://new-example.com/webhook","events":["post.published","post.failed"]}; // \Zernio\Model\UpdateWebhookSettingsRequest

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
| **update_webhook_settings_request** | [**\Zernio\Model\UpdateWebhookSettingsRequest**](../Model/UpdateWebhookSettingsRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateWebhookSettings200Response**](../Model/UpdateWebhookSettings200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
