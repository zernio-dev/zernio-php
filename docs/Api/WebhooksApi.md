# Zernio\WebhooksApi

Configure webhooks for real-time notifications, from the dashboard (Settings → Webhooks) or via this API.  **Events:**  - Posts: &#x60;post.scheduled&#x60;, &#x60;post.published&#x60;, &#x60;post.failed&#x60;, &#x60;post.partial&#x60;, &#x60;post.cancelled&#x60;, &#x60;post.recycled&#x60;, &#x60;post.platform.published&#x60;, &#x60;post.platform.failed&#x60;, &#x60;post.platform.deleted&#x60;, &#x60;post.tiktok.url_resolved&#x60;, &#x60;post.external.created&#x60;, &#x60;post.external.updated&#x60;, &#x60;post.external.deleted&#x60;, &#x60;post.tracking_completed&#x60;, &#x60;post.authenticity_changed&#x60; - Accounts and analytics: &#x60;account.connected&#x60;, &#x60;account.disconnected&#x60;, &#x60;account.permissions_changed&#x60;, &#x60;account.ads.initial_sync_completed&#x60;, &#x60;account.ads.sync_failed&#x60;, &#x60;account.ads.sync_recovered&#x60;, &#x60;account.rate_limited&#x60;, &#x60;analytics.synced&#x60; - Messages: &#x60;message.received&#x60;, &#x60;message.sent&#x60;, &#x60;message.edited&#x60;, &#x60;message.deleted&#x60;, &#x60;message.delivered&#x60;, &#x60;message.read&#x60;, &#x60;message.played&#x60;, &#x60;message.failed&#x60;, &#x60;reaction.received&#x60;, &#x60;referral.received&#x60;, &#x60;conversation.started&#x60;, &#x60;conversation.control_changed&#x60; - Calls: &#x60;call.received&#x60;, &#x60;call.ended&#x60;, &#x60;call.failed&#x60;, &#x60;call.permission_request&#x60; - Engagement and leads: &#x60;comment.received&#x60;, &#x60;review.new&#x60;, &#x60;review.updated&#x60;, &#x60;review.deleted&#x60;, &#x60;review.restored&#x60;, &#x60;lead.received&#x60; - Ads: &#x60;ad.status_changed&#x60;, &#x60;ad.review.approved&#x60;, &#x60;ad.review.rejected&#x60;, &#x60;ad.delivery_issue&#x60;, &#x60;campaign.budget.depleted&#x60;, &#x60;ad_account.status_changed&#x60;, &#x60;ad.video.processed&#x60;, &#x60;ad_rule.triggered&#x60; - WhatsApp: &#x60;whatsapp.template.status_updated&#x60;, &#x60;whatsapp.template.category_updated&#x60;, &#x60;whatsapp.account.name_status_updated&#x60;, &#x60;whatsapp.account.quality_updated&#x60;, &#x60;whatsapp.account.status_updated&#x60;, &#x60;whatsapp.account.alert_received&#x60;, &#x60;whatsapp.contact.identity_changed&#x60;, &#x60;whatsapp.automatic_event&#x60; - WhatsApp numbers: &#x60;whatsapp.number.activated&#x60;, &#x60;whatsapp.number.declined&#x60;, &#x60;whatsapp.number.action_required&#x60;, &#x60;whatsapp.number.verification_required&#x60;, &#x60;whatsapp.number.suspended&#x60;, &#x60;whatsapp.number.reactivated&#x60;, &#x60;whatsapp.number.released&#x60;, &#x60;whatsapp.number.kyc_submitted&#x60; - Telephony: &#x60;phone_number.stock_available&#x60;, &#x60;verification.approved&#x60;, &#x60;verification.failed&#x60;, &#x60;sms.registration.action_required&#x60;, &#x60;sms.registration.status_updated&#x60;, &#x60;branded_calling.identity.status_updated&#x60;, &#x60;branded_calling.identity.action_required&#x60;, &#x60;branded_calling.number.status_updated&#x60;, &#x60;rcs.agent.status_updated&#x60; - Commerce: &#x60;commerce.product.created&#x60;, &#x60;commerce.product.updated&#x60;, &#x60;commerce.product.deleted&#x60;, &#x60;commerce.order.created&#x60;, &#x60;commerce.order.updated&#x60;, &#x60;commerce.order.refunded&#x60; - Contacts and automations: &#x60;contact.tag_added&#x60;, &#x60;contact.tag_removed&#x60;, &#x60;contact.field_changed&#x60;, &#x60;contact.updated&#x60;, &#x60;contact.deleted&#x60;, &#x60;sequence.enrolled&#x60;, &#x60;sequence.exited&#x60;, &#x60;workflow.run.started&#x60;, &#x60;workflow.run.completed&#x60;, &#x60;workflow.run.failed&#x60;, &#x60;support.run.completed&#x60;, &#x60;support.run.failed&#x60; - Creator campaigns: &#x60;campaign_submission.received&#x60;, &#x60;campaign_submission.flagged&#x60;, &#x60;campaign_submission.pending_review&#x60;, &#x60;campaign_submission.approved&#x60;, &#x60;campaign_submission.rejected&#x60;, &#x60;creator_campaign.budget_exhausted&#x60;, &#x60;creator_campaign.closed&#x60;, &#x60;campaign_payout.payable&#x60;, &#x60;campaign_payout.settled&#x60;, &#x60;campaign_payout.failed&#x60;, &#x60;campaign_participant.joined&#x60;, &#x60;campaign_participant.suspended&#x60;, &#x60;campaign_participant.removed&#x60; - Calendar and files: &#x60;calendar.event.created&#x60;, &#x60;calendar.event.updated&#x60;, &#x60;calendar.event.deleted&#x60;, &#x60;file.created&#x60;, &#x60;file.updated&#x60;, &#x60;file.deleted&#x60;, &#x60;file.picked&#x60; - Other: &#x60;api.changelog.published&#x60;, &#x60;webhook.test&#x60;  **Headers.** Every delivery carries &#x60;X-Zernio-Event&#x60; (event name) and &#x60;X-Zernio-Event-Id&#x60; (the payload &#x60;id&#x60;). That UUID is minted once per event and is identical across every subscribed endpoint, automatic retry and redelivery, so dedupe on it.  **Security.** Optional HMAC-SHA256 signature in the &#x60;X-Zernio-Signature&#x60; header: configure a secret key to enable verification. Custom headers are supported. Legacy &#x60;X-Late-Event&#x60;, &#x60;X-Late-Event-Id&#x60; and &#x60;X-Late-Signature&#x60; duplicates are still sent and will be removed in a future major version.  **Resource groups.** Every event belongs to one group:  - publishing: &#x60;post.*&#x60; - messages: &#x60;message.*&#x60;, &#x60;reaction.*&#x60;, &#x60;conversation.*&#x60;, &#x60;call.*&#x60;, &#x60;whatsapp.automatic_event&#x60;, &#x60;sequence.*&#x60;, &#x60;workflow.run.*&#x60; - engagement: &#x60;comment.*&#x60;, &#x60;review.*&#x60; - contacts: &#x60;lead.*&#x60;, &#x60;contact.*&#x60; - ads: &#x60;ad.*&#x60;, &#x60;ad_account.*&#x60;, &#x60;ad_rule.*&#x60;, &#x60;campaign.*&#x60; - accounts: &#x60;account.*&#x60;, &#x60;whatsapp.template.*&#x60;, &#x60;whatsapp.account.*&#x60; - analytics: &#x60;analytics.*&#x60; - telephony: &#x60;whatsapp.number.*&#x60;, &#x60;verification.*&#x60;, &#x60;sms.registration.*&#x60; - creator_campaigns: &#x60;campaign_submission.*&#x60;, &#x60;creator_campaign.*&#x60;, &#x60;campaign_payout.*&#x60;, &#x60;campaign_participant.*&#x60; - webhooks: &#x60;api.changelog.published&#x60;, &#x60;webhook.test&#x60;  Support Assistant events (&#x60;support.run.*&#x60;) belong to no single group: they need every resource group enabled and a first-party full-scope caller (a session or a full-scope key, never an OAuth token or a profile-scoped key).  Two independent controls use that mapping:  1. A restricted (&#x60;zrk_&#x60;) API key can only subscribe to, test-fire, redeliver, or read delivery logs for events in the groups it holds, so it can never create a subscription broader than itself. 2. Each subscription carries its own &#x60;disabledResourceGroups&#x60; denylist. Events in a disabled group are dropped before delivery to that endpoint, on live delivery and every replay path, whichever key or session created the subscription.  Changing the denylist applies to every event emitted after the change.  Events already queued can still be delivered for up to five minutes after enqueue, because the delivery worker trusts a five-minute enqueue-time snapshot before re-checking. Absent or empty means the subscription receives everything it subscribes to (the behavior of every subscription created before the field existed).  **Profile and account filters.** A subscription can carry &#x60;profileIds&#x60; (an allowlist of profiles) and &#x60;accountIds&#x60; (an allowlist of connected accounts, same semantics). Each non-empty list narrows delivery; a subscription with both must satisfy both. Absent or empty means every profile (or every account).  A scoped subscription only gets events it can attribute to one of those profiles: the profile of the connected account behind the event, or, for an aggregate &#x60;post.*&#x60; event, the profile of every account the post targets (a post spanning two scoped endpoints&#39; profiles reaches both).  This lets an integrator route the profile holding test accounts to a staging endpoint while a second subscription, scoped to production profiles, keeps production traffic.  Events that belong to no profile (&#x60;verification.*&#x60;, &#x60;phone_number.*&#x60;, and a legacy post whose accounts were deleted) reach only unscoped subscriptions. The filter runs when an event is emitted; redelivery replays a delivery already made to that endpoint, and test fires ignore it.

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

Create a new webhook configuration. Maximum 50 webhooks per user.  `name`, `url` and `events` are required. `url` must be a valid URL and `events` must contain at least one event. Whitespace is trimmed from `url` before validation.  ### Auto-disable  A webhook is auto-disabled only once the endpoint has had no successful delivery for 3 days AND either:  - has reached 20 consecutive terminal failures (each one an event that exhausted the full retry ladder), or - has been failing continuously for 3 days.  The owner is emailed; re-enable it with `isActive: true`.  ### Restricted keys  A restricted (zrk_) API key can only subscribe to events whose resource group the key holds. An event outside the key's groups is rejected with 403, so a restricted key can never create a subscription broader than itself.  ### Filtering what is delivered  `disabledResourceGroups` restricts the subscription itself, independently of which key or session later reads it. Events in a disabled group are dropped before delivery to this endpoint, even if they are listed in `events`. This applies on live delivery and on every replay path (test fire, redelivery, dead-letter requeue).  Omit it to receive everything in `events`, which is how existing subscriptions behave. A restricted key's own disabled groups are always unioned in.  `profileIds` pins the subscription to a set of profiles and `accountIds` to a set of connected accounts. Only events attributable to one of the listed ids are delivered, and a subscription with both lists must match on both. Use them to send test accounts to a staging endpoint.  Ids outside your team are rejected with 404 (`profile_not_found`, `account_not_found`).

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
deleteWebhookSettings($webhook_id, $id): \Zernio\Model\UpdateYoutubeDefaultPlaylist200Response
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
$webhook_id = 'webhook_id_example'; // string | Webhook ID to delete, the same name the other /v1/webhooks operations use (logs, redeliver, test). Required unless the deprecated `id` is sent instead.
$id = 'id_example'; // string | Alias of webhookId, kept for existing callers

try {
    $result = $apiInstance->deleteWebhookSettings($webhook_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteWebhookSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_id** | **string**| Webhook ID to delete, the same name the other /v1/webhooks operations use (logs, redeliver, test). Required unless the deprecated &#x60;id&#x60; is sent instead. | [optional] |
| **id** | **string**| Alias of webhookId, kept for existing callers | [optional] |

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

Retrieve recorded webhook delivery attempts for the authenticated user, most recent first.  Logs are retained for 30 days. Supports filtering by status, event type, webhook ID, and event ID, plus offset-based pagination.  ### Restricted keys  For a restricted (zrk_) API key:  - Rows for events outside the key's resource groups are omitted (`pagination.total` may over-count). - An `event` filter naming such an event is rejected with 403.  ### Denylisted events  Events blocked by a subscription's own `disabledResourceGroups` are dropped before delivery, so they produce no log rows for anyone.  The exception is the five-minute tail after a denylist change, where an already-queued event can still be delivered and logged.

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

Send a test webhook to verify your endpoint is configured correctly. The test payload includes event: \"webhook.test\" to distinguish it from real events.  ### Sample payload for a specific event  Pass `event` to receive a sample payload of that event instead. This exercises the handler for an event that only fires on a real outage or lifecycle change (e.g. `account.ads.sync_failed`).  - The sample has the exact shape documented for the event under Webhook Events. - It is delivered like a real one, with the same `X-Zernio-Event`, `X-Zernio-Event-Id` and `X-Zernio-Signature` headers. - It carries a top-level `test: true` and placeholder ids, never your data. - The delivery shows up in the webhook logs with `test: true`.  The webhook does not have to be subscribed to the event. But a webhook that lists the event's resource group in its `disabledResourceGroups` answers 403, as does an API key with that group disabled.  ### Resource group checks  `webhook.test` belongs to the `webhooks` resource group. A test fire is rejected with 403 (not a reported delivery failure) when:  - the key has that group disabled; - the subscription lists `webhooks` in its own `disabledResourceGroups`.  Replays of real events (redelivery, dead-letter requeue) run the same checks as live delivery, against both the key's groups and the subscription's.

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

Update an existing webhook configuration. All fields except `webhookId` are optional; only provided fields will be updated.  `webhookId` is the same name the other /v1/webhooks operations use (logs, redeliver, test). The deprecated `_id` is still accepted in its place.  ### Validation  When provided:  - `name` must be 1-50 characters. - `url` must be a valid URL. Whitespace is trimmed from `url` before validation. - `events` must contain at least one event.  ### Auto-disable  Webhooks are auto-disabled only once the endpoint has had no successful delivery for 3 days AND either:  - has reached 20 consecutive terminal failures (each one an event that exhausted the full retry ladder), or - has been failing continuously for 3 days.  The owner is emailed. Re-enable it with `isActive: true`.  ### Restricted keys  A restricted (zrk_) API key can only set `events` to events whose resource group the key holds. An event outside the key's groups is rejected with 403. It also cannot widen an existing subscription past its own groups.  ### `disabledResourceGroups`  `disabledResourceGroups` replaces the subscription's own denylist, which applies to delivery regardless of which key or session created it. Send an empty array to clear it.  A restricted key's own disabled groups are unioned into the stored value on every update. So repointing a legacy unrestricted subscription with a restricted key also narrows it.  ### Denylist timing  The new denylist applies to every event emitted after the update.  Events already queued for delivery when the update landed were filtered against the previous denylist. They can still arrive at your endpoint for up to five minutes after they were enqueued, because the delivery worker trusts a five-minute enqueue-time snapshot before re-checking the subscription.  Retries beyond that window, dead-letter replays, test fires, and redeliveries are all checked against the current denylist.  ### Allowlists  `profileIds` and `accountIds` replace the subscription's allowlists; an empty array clears one. Ids outside your team are rejected with 404 (`profile_not_found`, `account_not_found`).

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
