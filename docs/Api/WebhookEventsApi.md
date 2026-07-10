# Zernio\WebhookEventsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**onAccountAdsInitialSyncCompleted()**](WebhookEventsApi.md#onAccountAdsInitialSyncCompleted) | **POST** /account.ads.initial_sync_completed | Ads initial sync completed event |
| [**onAccountConnected()**](WebhookEventsApi.md#onAccountConnected) | **POST** /account.connected | Account connected event |
| [**onAccountDisconnected()**](WebhookEventsApi.md#onAccountDisconnected) | **POST** /account.disconnected | Account disconnected event |
| [**onAdStatusChanged()**](WebhookEventsApi.md#onAdStatusChanged) | **POST** /ad.status_changed | Ad status changed event |
| [**onCallEnded()**](WebhookEventsApi.md#onCallEnded) | **POST** /call.ended | Call ended event |
| [**onCallFailed()**](WebhookEventsApi.md#onCallFailed) | **POST** /call.failed | Call failed event |
| [**onCallPermissionRequest()**](WebhookEventsApi.md#onCallPermissionRequest) | **POST** /call.permission_request | Call permission request reply event |
| [**onCallReceived()**](WebhookEventsApi.md#onCallReceived) | **POST** /call.received | Call received event |
| [**onCommentReceived()**](WebhookEventsApi.md#onCommentReceived) | **POST** /comment.received | Comment received event |
| [**onConversationStarted()**](WebhookEventsApi.md#onConversationStarted) | **POST** /conversation.started | Conversation started event |
| [**onLeadReceived()**](WebhookEventsApi.md#onLeadReceived) | **POST** /lead.received | Lead received event |
| [**onMessageDeleted()**](WebhookEventsApi.md#onMessageDeleted) | **POST** /message.deleted | Message deleted event |
| [**onMessageDelivered()**](WebhookEventsApi.md#onMessageDelivered) | **POST** /message.delivered | Message delivered event |
| [**onMessageEdited()**](WebhookEventsApi.md#onMessageEdited) | **POST** /message.edited | Message edited event |
| [**onMessageFailed()**](WebhookEventsApi.md#onMessageFailed) | **POST** /message.failed | Message delivery failed event |
| [**onMessageRead()**](WebhookEventsApi.md#onMessageRead) | **POST** /message.read | Message read event |
| [**onMessageReceived()**](WebhookEventsApi.md#onMessageReceived) | **POST** /message.received | Message received event |
| [**onMessageSent()**](WebhookEventsApi.md#onMessageSent) | **POST** /message.sent | Message sent event |
| [**onPostCancelled()**](WebhookEventsApi.md#onPostCancelled) | **POST** /post.cancelled | Post cancelled event |
| [**onPostExternalCreated()**](WebhookEventsApi.md#onPostExternalCreated) | **POST** /post.external.created | External post created event |
| [**onPostExternalDeleted()**](WebhookEventsApi.md#onPostExternalDeleted) | **POST** /post.external.deleted | External post deleted event |
| [**onPostExternalUpdated()**](WebhookEventsApi.md#onPostExternalUpdated) | **POST** /post.external.updated | External post updated event |
| [**onPostFailed()**](WebhookEventsApi.md#onPostFailed) | **POST** /post.failed | Post failed event |
| [**onPostPartial()**](WebhookEventsApi.md#onPostPartial) | **POST** /post.partial | Post partial event |
| [**onPostPlatformFailed()**](WebhookEventsApi.md#onPostPlatformFailed) | **POST** /post.platform.failed | Post platform failed event |
| [**onPostPlatformPublished()**](WebhookEventsApi.md#onPostPlatformPublished) | **POST** /post.platform.published | Post platform published event |
| [**onPostPublished()**](WebhookEventsApi.md#onPostPublished) | **POST** /post.published | Post published event |
| [**onPostRecycled()**](WebhookEventsApi.md#onPostRecycled) | **POST** /post.recycled | Post recycled event |
| [**onPostScheduled()**](WebhookEventsApi.md#onPostScheduled) | **POST** /post.scheduled | Post scheduled event |
| [**onPostTikTokUrlResolved()**](WebhookEventsApi.md#onPostTikTokUrlResolved) | **POST** /post.tiktok.url_resolved | TikTok post URL resolved event |
| [**onReactionReceived()**](WebhookEventsApi.md#onReactionReceived) | **POST** /reaction.received | Reaction received event |
| [**onReviewNew()**](WebhookEventsApi.md#onReviewNew) | **POST** /review.new | Review new event |
| [**onReviewUpdated()**](WebhookEventsApi.md#onReviewUpdated) | **POST** /review.updated | Review updated event |
| [**onWebhookTest()**](WebhookEventsApi.md#onWebhookTest) | **POST** /webhook.test | Webhook test event |
| [**onWhatsAppAutomaticEvent()**](WebhookEventsApi.md#onWhatsAppAutomaticEvent) | **POST** /whatsapp.automatic_event | WhatsApp automatic event detected |
| [**onWhatsAppNumberActionRequired()**](WebhookEventsApi.md#onWhatsAppNumberActionRequired) | **POST** /whatsapp.number.action_required | WhatsApp number action required event |
| [**onWhatsAppNumberActivated()**](WebhookEventsApi.md#onWhatsAppNumberActivated) | **POST** /whatsapp.number.activated | WhatsApp number activated event |
| [**onWhatsAppNumberDeclined()**](WebhookEventsApi.md#onWhatsAppNumberDeclined) | **POST** /whatsapp.number.declined | WhatsApp number declined event |
| [**onWhatsAppNumberKycSubmitted()**](WebhookEventsApi.md#onWhatsAppNumberKycSubmitted) | **POST** /whatsapp.number.kyc_submitted | WhatsApp number KYC submitted event |
| [**onWhatsAppNumberReactivated()**](WebhookEventsApi.md#onWhatsAppNumberReactivated) | **POST** /whatsapp.number.reactivated | WhatsApp number reactivated event |
| [**onWhatsAppNumberReleased()**](WebhookEventsApi.md#onWhatsAppNumberReleased) | **POST** /whatsapp.number.released | WhatsApp number released event |
| [**onWhatsAppNumberSuspended()**](WebhookEventsApi.md#onWhatsAppNumberSuspended) | **POST** /whatsapp.number.suspended | WhatsApp number suspended event |
| [**onWhatsAppNumberVerificationRequired()**](WebhookEventsApi.md#onWhatsAppNumberVerificationRequired) | **POST** /whatsapp.number.verification_required | WhatsApp number verification-required event |
| [**onWhatsAppTemplateStatusUpdated()**](WebhookEventsApi.md#onWhatsAppTemplateStatusUpdated) | **POST** /whatsapp.template.status_updated | WhatsApp template status updated event |


## `onAccountAdsInitialSyncCompleted()`

```php
onAccountAdsInitialSyncCompleted($webhook_payload_account_ads_initial_sync_completed)
```

Ads initial sync completed event

Fired once per ads-enabled account when the initial sync (ad-account discovery + 90-day historical ad backfill) completes. The `sync` block reports whether the backfill succeeded and how many ads were synced.

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
$webhook_payload_account_ads_initial_sync_completed = new \Zernio\Model\WebhookPayloadAccountAdsInitialSyncCompleted(); // \Zernio\Model\WebhookPayloadAccountAdsInitialSyncCompleted

try {
    $apiInstance->onAccountAdsInitialSyncCompleted($webhook_payload_account_ads_initial_sync_completed);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAccountAdsInitialSyncCompleted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_account_ads_initial_sync_completed** | [**\Zernio\Model\WebhookPayloadAccountAdsInitialSyncCompleted**](../Model/WebhookPayloadAccountAdsInitialSyncCompleted.md)|  | |

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

## `onAdStatusChanged()`

```php
onAdStatusChanged($webhook_payload_ad_status_changed)
```

Ad status changed event

Fired when a campaign, ad set, or ad on a connected ad platform changes status. Currently emitted only for Meta (`metaads`).  Subscribed to two Meta `ad_account` webhook fields:   - `in_process_ad_objects` - the ad object finished processing and exited     the `IN_PROCESS` state. `status.raw` carries Meta's `status_name`     (e.g. `ACTIVE`, `PAUSED`, `ARCHIVED`, `DELETED`).   - `with_issues_ad_objects` - the ad object entered the `WITH_ISSUES`     state. `status.raw` is set to `WITH_ISSUES` and the `error` block is     populated from Meta's `error_code` / `error_summary` / `error_message`.  `adObject.level` mirrors Meta's `level` and is one of `CAMPAIGN`, `AD_SET`, or `AD`. Creative-level events are not forwarded.  Branch on `status.raw` to handle each transition; use `error.code` (when present) as the stable discriminator — `error.summary` and `error.message` are localized to the ad-account owner's Meta locale.  The `error` block is optional. It's present on most `WITH_ISSUES` events but can be absent (Meta does not always include diagnostics), and is never present on any other status. Always null-check `error` before reading `error.code`.  **Fan-out:** matching is keyed on `adObject.platformAdAccountId`. When multiple connected Zernio `metaads` accounts are linked to the same Meta ad account, each receives its own delivery.

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
$webhook_payload_ad_status_changed = {"id":"01J7K3P4N5Q6R7S8T9V0W1X2Y3","event":"ad.status_changed","account":{"accountId":"65c8f7e2a1b3c4d5e6f7a8b9","profileId":"65c8f7e2a1b3c4d5e6f7a800","platform":"metaads","username":"acme-ads","displayName":"Acme Ads"},"adObject":{"level":"AD","platformId":"120244894077860689","platformAdAccountId":"act_2129800524463520"},"status":{"raw":"ACTIVE"},"timestamp":"2026-05-05T15:25:27.944Z"}; // \Zernio\Model\WebhookPayloadAdStatusChanged

try {
    $apiInstance->onAdStatusChanged($webhook_payload_ad_status_changed);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onAdStatusChanged: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_ad_status_changed** | [**\Zernio\Model\WebhookPayloadAdStatusChanged**](../Model/WebhookPayloadAdStatusChanged.md)|  | |

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

## `onCallEnded()`

```php
onCallEnded($webhook_payload_call_ended)
```

Call ended event

Fired on call hangup with the duration and a zero-markup billing breakdown (Meta cost, Telnyx cost, recording surcharge, total). Costs are pass-through; no margin is applied.

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
$webhook_payload_call_ended = new \Zernio\Model\WebhookPayloadCallEnded(); // \Zernio\Model\WebhookPayloadCallEnded

try {
    $apiInstance->onCallEnded($webhook_payload_call_ended);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCallEnded: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_call_ended** | [**\Zernio\Model\WebhookPayloadCallEnded**](../Model/WebhookPayloadCallEnded.md)|  | |

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

## `onCallFailed()`

```php
onCallFailed($webhook_payload_call_failed)
```

Call failed event

Fired when a call setup or in-progress call fails (Meta rejected the connect, Telnyx returned an error, etc.). Payload carries the upstream error code and message.

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
$webhook_payload_call_failed = new \Zernio\Model\WebhookPayloadCallFailed(); // \Zernio\Model\WebhookPayloadCallFailed

try {
    $apiInstance->onCallFailed($webhook_payload_call_failed);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCallFailed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_call_failed** | [**\Zernio\Model\WebhookPayloadCallFailed**](../Model/WebhookPayloadCallFailed.md)|  | |

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

## `onCallPermissionRequest()`

```php
onCallPermissionRequest($webhook_payload_call_permission_request)
```

Call permission request reply event

Fired when a consumer replies to a `call_permission_request` interactive message (or its marketing-template variant). Carries the response (`accept` / `reject`), whether the grant is permanent, and the expiration timestamp when it is temporary.

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
$webhook_payload_call_permission_request = new \Zernio\Model\WebhookPayloadCallPermissionRequest(); // \Zernio\Model\WebhookPayloadCallPermissionRequest

try {
    $apiInstance->onCallPermissionRequest($webhook_payload_call_permission_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCallPermissionRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_call_permission_request** | [**\Zernio\Model\WebhookPayloadCallPermissionRequest**](../Model/WebhookPayloadCallPermissionRequest.md)|  | |

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

## `onCallReceived()`

```php
onCallReceived($webhook_payload_call_received)
```

Call received event

Fired when a WhatsApp Business Call connects. For inbound (UIC) calls the event fires at the moment our Telnyx trunk bridges the consumer leg to the customer&apos;s forward-to destination; for outbound (BIC) calls it fires immediately after Meta accepts the connect. Branch on `call.direction` to distinguish.

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
$webhook_payload_call_received = new \Zernio\Model\WebhookPayloadCallReceived(); // \Zernio\Model\WebhookPayloadCallReceived

try {
    $apiInstance->onCallReceived($webhook_payload_call_received);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onCallReceived: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_call_received** | [**\Zernio\Model\WebhookPayloadCallReceived**](../Model/WebhookPayloadCallReceived.md)|  | |

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

## `onConversationStarted()`

```php
onConversationStarted($webhook_payload_conversation_started)
```

Conversation started event

Fired once when a new conversation begins between one of your connected accounts and a contact, in either direction. Works across every DM platform (Instagram, Messenger/Facebook, Telegram, WhatsApp, Twitter, Reddit, Bluesky). Naturally deduped — a given conversation only fires this event the very first time it appears.

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
$webhook_payload_conversation_started = new \Zernio\Model\WebhookPayloadConversationStarted(); // \Zernio\Model\WebhookPayloadConversationStarted

try {
    $apiInstance->onConversationStarted($webhook_payload_conversation_started);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onConversationStarted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_conversation_started** | [**\Zernio\Model\WebhookPayloadConversationStarted**](../Model/WebhookPayloadConversationStarted.md)|  | |

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

## `onLeadReceived()`

```php
onLeadReceived($webhook_payload_lead)
```

Lead received event

Fired when a new lead is submitted against a Meta Lead Gen (Instant) Form and ingested via the Page `leadgen` webhook. `lead.fields` is the question-key to answer map; `lead.formId` / `lead.adId` give provenance. Requires the Ads add-on.

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
$webhook_payload_lead = new \Zernio\Model\WebhookPayloadLead(); // \Zernio\Model\WebhookPayloadLead

try {
    $apiInstance->onLeadReceived($webhook_payload_lead);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onLeadReceived: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_lead** | [**\Zernio\Model\WebhookPayloadLead**](../Model/WebhookPayloadLead.md)|  | |

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

## `onPostExternalCreated()`

```php
onPostExternalCreated($webhook_payload_external_post)
```

External post created event

Fired when Zernio's background sync detects a natively-authored post (created outside Zernio, e.g. a Google Business Profile localPost made in the Google UI) for the first time. Poll-driven (~hourly), not real-time. `post.source` is always \"external\".

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
$webhook_payload_external_post = new \Zernio\Model\WebhookPayloadExternalPost(); // \Zernio\Model\WebhookPayloadExternalPost

try {
    $apiInstance->onPostExternalCreated($webhook_payload_external_post);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostExternalCreated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_external_post** | [**\Zernio\Model\WebhookPayloadExternalPost**](../Model/WebhookPayloadExternalPost.md)|  | |

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

## `onPostExternalDeleted()`

```php
onPostExternalDeleted($webhook_payload_external_post)
```

External post deleted event

Fired when a tracked native post is detected as removed from the platform. `post.deletedAt` carries the detection time. Coverage is bounded to the most recent posts the platform listing returns.

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
$webhook_payload_external_post = new \Zernio\Model\WebhookPayloadExternalPost(); // \Zernio\Model\WebhookPayloadExternalPost

try {
    $apiInstance->onPostExternalDeleted($webhook_payload_external_post);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostExternalDeleted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_external_post** | [**\Zernio\Model\WebhookPayloadExternalPost**](../Model/WebhookPayloadExternalPost.md)|  | |

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

## `onPostExternalUpdated()`

```php
onPostExternalUpdated($webhook_payload_external_post)
```

External post updated event

Fired when a tracked native post's text or media changed on the platform. Detected by comparing text/media structure and, where available, the platform's own edit timestamp; a media-URL-only refresh does not fire this.

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
$webhook_payload_external_post = new \Zernio\Model\WebhookPayloadExternalPost(); // \Zernio\Model\WebhookPayloadExternalPost

try {
    $apiInstance->onPostExternalUpdated($webhook_payload_external_post);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostExternalUpdated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_external_post** | [**\Zernio\Model\WebhookPayloadExternalPost**](../Model/WebhookPayloadExternalPost.md)|  | |

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

## `onPostPlatformFailed()`

```php
onPostPlatformFailed($webhook_payload_post_platform)
```

Post platform failed event

Fired once per platform target inside a post as that platform fails permanently. Temporary/retryable failures do NOT fire this event — only permanent ones, so retry loops stay quiet. The envelope event (`post.failed` / `post.partial`) fires separately AFTER all platforms have terminated.

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
$webhook_payload_post_platform = new \Zernio\Model\WebhookPayloadPostPlatform(); // \Zernio\Model\WebhookPayloadPostPlatform

try {
    $apiInstance->onPostPlatformFailed($webhook_payload_post_platform);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostPlatformFailed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_post_platform** | [**\Zernio\Model\WebhookPayloadPostPlatform**](../Model/WebhookPayloadPostPlatform.md)|  | |

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

## `onPostPlatformPublished()`

```php
onPostPlatformPublished($webhook_payload_post_platform)
```

Post platform published event

Fired once per platform target inside a post as that platform finishes publishing successfully. Does NOT wait for the post-level rollup — consumers building incremental UIs get notified immediately, even when other platforms on the same post are still processing. The envelope event (`post.published` / `post.partial`) fires separately AFTER all platforms have terminated.

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
$webhook_payload_post_platform = new \Zernio\Model\WebhookPayloadPostPlatform(); // \Zernio\Model\WebhookPayloadPostPlatform

try {
    $apiInstance->onPostPlatformPublished($webhook_payload_post_platform);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostPlatformPublished: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_post_platform** | [**\Zernio\Model\WebhookPayloadPostPlatform**](../Model/WebhookPayloadPostPlatform.md)|  | |

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

## `onPostTikTokUrlResolved()`

```php
onPostTikTokUrlResolved($webhook_payload_post_platform)
```

TikTok post URL resolved event

Fired when an already-published TikTok platform entry gets its public URL backfilled. TikTok exposes the numeric video id asynchronously (often minutes after PUBLISH_COMPLETE), so the terminal events can carry an empty `publishedUrl` for TikTok. This event delivers `platform.publishedUrl` and the resolved `platform.platformPostId` once available. At most once per platform target; never fires for drafts or private posts (no public URL exists). Payload shape is identical to `post.platform.published`.

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
$webhook_payload_post_platform = new \Zernio\Model\WebhookPayloadPostPlatform(); // \Zernio\Model\WebhookPayloadPostPlatform

try {
    $apiInstance->onPostTikTokUrlResolved($webhook_payload_post_platform);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onPostTikTokUrlResolved: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_post_platform** | [**\Zernio\Model\WebhookPayloadPostPlatform**](../Model/WebhookPayloadPostPlatform.md)|  | |

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

## `onReactionReceived()`

```php
onReactionReceived($webhook_payload_reaction)
```

Reaction received event

Fired when a participant adds or removes an emoji reaction on a message. Supported on WhatsApp and Telegram. Distinct from message.received so a reaction (e.g. a thumbs-up) is not mistaken for an inbound message. The `reaction.action` field is `added` or `removed`. On WhatsApp removals the platform does not report which emoji was removed, so `reaction.emoji` may be an empty string. Requires the Inbox add-on.

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
$webhook_payload_reaction = new \Zernio\Model\WebhookPayloadReaction(); // \Zernio\Model\WebhookPayloadReaction

try {
    $apiInstance->onReactionReceived($webhook_payload_reaction);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onReactionReceived: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_reaction** | [**\Zernio\Model\WebhookPayloadReaction**](../Model/WebhookPayloadReaction.md)|  | |

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

## `onWhatsAppAutomaticEvent()`

```php
onWhatsAppAutomaticEvent($on_whats_app_automatic_event_request)
```

WhatsApp automatic event detected

Fired when Meta's automatic event identification (opt-in during Embedded Signup; not available for EU/UK/JP businesses) detects a lead or purchase in a Click-to-WhatsApp conversation. Branch on `eventName` (`LeadSubmitted` | `Purchase`). Carries the `ctwa_clid` even on coexistence numbers where the inbound referral omits it (this webhook is the only surface that delivers it there); the clid is also written back onto the conversation, so POST /v1/whatsapp/conversions becomes usable for the thread.

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
$on_whats_app_automatic_event_request = new \Zernio\Model\OnWhatsAppAutomaticEventRequest(); // \Zernio\Model\OnWhatsAppAutomaticEventRequest

try {
    $apiInstance->onWhatsAppAutomaticEvent($on_whats_app_automatic_event_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWhatsAppAutomaticEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **on_whats_app_automatic_event_request** | [**\Zernio\Model\OnWhatsAppAutomaticEventRequest**](../Model/OnWhatsAppAutomaticEventRequest.md)|  | |

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

## `onWhatsAppNumberActionRequired()`

```php
onWhatsAppNumberActionRequired($on_whats_app_number_action_required_request)
```

WhatsApp number action required event

Fired when the regulator asks for more information on an already-placed regulated number order. The number stays pending (nothing was rejected); the customer can provide the missing information from the dashboard, or via the remediation endpoint. `reason` carries the regulator's request verbatim when available.

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
$on_whats_app_number_action_required_request = new \Zernio\Model\OnWhatsAppNumberActionRequiredRequest(); // \Zernio\Model\OnWhatsAppNumberActionRequiredRequest

try {
    $apiInstance->onWhatsAppNumberActionRequired($on_whats_app_number_action_required_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWhatsAppNumberActionRequired: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **on_whats_app_number_action_required_request** | [**\Zernio\Model\OnWhatsAppNumberActionRequiredRequest**](../Model/OnWhatsAppNumberActionRequiredRequest.md)|  | |

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

## `onWhatsAppNumberActivated()`

```php
onWhatsAppNumberActivated($on_whats_app_number_activated_request)
```

WhatsApp number activated event

Fired when a purchased WhatsApp number becomes active and usable — both the synchronous (Tier 1/2) path and the asynchronous regulated (Tier 3/4) path land here. Lets integrators react without polling GET /v1/phone-numbers.

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
$on_whats_app_number_activated_request = new \Zernio\Model\OnWhatsAppNumberActivatedRequest(); // \Zernio\Model\OnWhatsAppNumberActivatedRequest

try {
    $apiInstance->onWhatsAppNumberActivated($on_whats_app_number_activated_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWhatsAppNumberActivated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **on_whats_app_number_activated_request** | [**\Zernio\Model\OnWhatsAppNumberActivatedRequest**](../Model/OnWhatsAppNumberActivatedRequest.md)|  | |

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

## `onWhatsAppNumberDeclined()`

```php
onWhatsAppNumberDeclined($on_whats_app_number_declined_request)
```

WhatsApp number declined event

Fired when a regulated (Tier 3/4) number order is declined or fails review. The number is never billed. `reason` carries the reviewer's rejection reason when available.

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
$on_whats_app_number_declined_request = new \Zernio\Model\OnWhatsAppNumberDeclinedRequest(); // \Zernio\Model\OnWhatsAppNumberDeclinedRequest

try {
    $apiInstance->onWhatsAppNumberDeclined($on_whats_app_number_declined_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWhatsAppNumberDeclined: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **on_whats_app_number_declined_request** | [**\Zernio\Model\OnWhatsAppNumberDeclinedRequest**](../Model/OnWhatsAppNumberDeclinedRequest.md)|  | |

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

## `onWhatsAppNumberKycSubmitted()`

```php
onWhatsAppNumberKycSubmitted($on_whats_app_number_kyc_submitted_request)
```

WhatsApp number KYC submitted event

Fired when an end customer completes a hosted KYC share link (POST /v1/phone-numbers/kyc/share). The number enters review (pending_regulatory) under your account; `whatsapp.number.activated` or `whatsapp.number.declined` follows once the provider rules on it.

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
$on_whats_app_number_kyc_submitted_request = new \Zernio\Model\OnWhatsAppNumberKycSubmittedRequest(); // \Zernio\Model\OnWhatsAppNumberKycSubmittedRequest

try {
    $apiInstance->onWhatsAppNumberKycSubmitted($on_whats_app_number_kyc_submitted_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWhatsAppNumberKycSubmitted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **on_whats_app_number_kyc_submitted_request** | [**\Zernio\Model\OnWhatsAppNumberKycSubmittedRequest**](../Model/OnWhatsAppNumberKycSubmittedRequest.md)|  | |

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

## `onWhatsAppNumberReactivated()`

```php
onWhatsAppNumberReactivated($on_whats_app_number_reactivated_request)
```

WhatsApp number reactivated event

Fired when a suspended number is reactivated (e.g. the payment recovered) and is usable again.

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
$on_whats_app_number_reactivated_request = new \Zernio\Model\OnWhatsAppNumberReactivatedRequest(); // \Zernio\Model\OnWhatsAppNumberReactivatedRequest

try {
    $apiInstance->onWhatsAppNumberReactivated($on_whats_app_number_reactivated_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWhatsAppNumberReactivated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **on_whats_app_number_reactivated_request** | [**\Zernio\Model\OnWhatsAppNumberReactivatedRequest**](../Model/OnWhatsAppNumberReactivatedRequest.md)|  | |

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

## `onWhatsAppNumberReleased()`

```php
onWhatsAppNumberReleased($on_whats_app_number_released_request)
```

WhatsApp number released event

Fired when a number is released and is no longer usable (by the user, a billing cleanup, or an admin). Terminal. `reason` carries the cause (e.g. `user_requested`, `cleanup_suspended`).

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
$on_whats_app_number_released_request = new \Zernio\Model\OnWhatsAppNumberReleasedRequest(); // \Zernio\Model\OnWhatsAppNumberReleasedRequest

try {
    $apiInstance->onWhatsAppNumberReleased($on_whats_app_number_released_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWhatsAppNumberReleased: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **on_whats_app_number_released_request** | [**\Zernio\Model\OnWhatsAppNumberReleasedRequest**](../Model/OnWhatsAppNumberReleasedRequest.md)|  | |

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

## `onWhatsAppNumberSuspended()`

```php
onWhatsAppNumberSuspended($on_whats_app_number_suspended_request)
```

WhatsApp number suspended event

Fired when an active number is suspended (e.g. a failed payment). The number stops working until the issue is resolved, after which a `whatsapp.number.reactivated` event is sent. `reason` carries the cause (e.g. `payment_failed`, `subscription_ended`).

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
$on_whats_app_number_suspended_request = new \Zernio\Model\OnWhatsAppNumberSuspendedRequest(); // \Zernio\Model\OnWhatsAppNumberSuspendedRequest

try {
    $apiInstance->onWhatsAppNumberSuspended($on_whats_app_number_suspended_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWhatsAppNumberSuspended: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **on_whats_app_number_suspended_request** | [**\Zernio\Model\OnWhatsAppNumberSuspendedRequest**](../Model/OnWhatsAppNumberSuspendedRequest.md)|  | |

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

## `onWhatsAppNumberVerificationRequired()`

```php
onWhatsAppNumberVerificationRequired($on_whats_app_number_verification_required_request)
```

WhatsApp number verification-required event

Fired when a regulated number has an out-of-band identity-verification step (e.g. Onfido). `verificationUrl` is the link to forward to the number's end user; the order completes once they pass.

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
$on_whats_app_number_verification_required_request = new \Zernio\Model\OnWhatsAppNumberVerificationRequiredRequest(); // \Zernio\Model\OnWhatsAppNumberVerificationRequiredRequest

try {
    $apiInstance->onWhatsAppNumberVerificationRequired($on_whats_app_number_verification_required_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWhatsAppNumberVerificationRequired: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **on_whats_app_number_verification_required_request** | [**\Zernio\Model\OnWhatsAppNumberVerificationRequiredRequest**](../Model/OnWhatsAppNumberVerificationRequiredRequest.md)|  | |

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

## `onWhatsAppTemplateStatusUpdated()`

```php
onWhatsAppTemplateStatusUpdated($webhook_payload_whats_app_template_status_updated)
```

WhatsApp template status updated event

Fired when Meta finishes (re)reviewing a WhatsApp Business template attached to a connected WABA. Forwarded from Meta's `message_template_status_update` webhook field on the WhatsApp Business Account. Consumers branch on `template.status` (APPROVED, REJECTED, PENDING, PAUSED, DISABLED, IN_APPEAL, PENDING_DELETION). Meta does not include the previous status or the template's category in this event.

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
$webhook_payload_whats_app_template_status_updated = new \Zernio\Model\WebhookPayloadWhatsAppTemplateStatusUpdated(); // \Zernio\Model\WebhookPayloadWhatsAppTemplateStatusUpdated

try {
    $apiInstance->onWhatsAppTemplateStatusUpdated($webhook_payload_whats_app_template_status_updated);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventsApi->onWhatsAppTemplateStatusUpdated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_payload_whats_app_template_status_updated** | [**\Zernio\Model\WebhookPayloadWhatsAppTemplateStatusUpdated**](../Model/WebhookPayloadWhatsAppTemplateStatusUpdated.md)|  | |

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
