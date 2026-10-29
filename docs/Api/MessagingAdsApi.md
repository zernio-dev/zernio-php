# Zernio\MessagingAdsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCallAd()**](MessagingAdsApi.md#createCallAd) | **POST** /v1/ads/call | Create Click-to-Call ad |
| [**createCtwaAd()**](MessagingAdsApi.md#createCtwaAd) | **POST** /v1/ads/ctwa | Create CTWA ad (deprecated) |
| [**createMessagingAd()**](MessagingAdsApi.md#createMessagingAd) | **POST** /v1/ads/messaging | Create messaging ad |


## `createCallAd()`

```php
createCallAd($create_call_ad_request, $idempotency_key): \Zernio\Model\CreateMessagingAd201Response
```

Create Click-to-Call ad

Creates a Meta ad with a Call Now button that dials your phone number, optimized for quality calls.  Same shape and flow as POST /v1/ads/ctwa, but the CTA is CALL_NOW dialing `phoneNumber` via a tel: link. Supports the same single-creative and multi-creative shapes as CTWA.  - The ad set is destination_type PHONE_CALL optimizing QUALITY_CALL. - The campaign objective defaults to OUTCOME_LEADS.  ### Idempotency  This endpoint is not idempotent at the platform level: a blind retry creates a second campaign/ad set/ad. Send an `Idempotency-Key` header to make retries safe.  The first request with a given key creates the ad and we store the response. A retry with the same key replays that exact response (with `Idempotent-Replayed: true`) instead of creating duplicates.  - Reusing a key with a different body returns 422. - A key whose first request is still in flight returns 409 (retry after a short backoff). - If the first request is cut off mid-create (for example by a function timeout), its key can stay in progress and keep returning 409 until it expires. Use a new key to retry sooner, after checking whether the ad was created.  Keys are scoped to your credential and expire after 24h.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagingAdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_call_ad_request = new \Zernio\Model\CreateCallAdRequest(); // \Zernio\Model\CreateCallAdRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.

try {
    $result = $apiInstance->createCallAd($create_call_ad_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingAdsApi->createCallAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_call_ad_request** | [**\Zernio\Model\CreateCallAdRequest**](../Model/CreateCallAdRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours. | [optional] |

### Return type

[**\Zernio\Model\CreateMessagingAd201Response**](../Model/CreateMessagingAd201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCtwaAd()`

```php
createCtwaAd($ctwa_ad_request_body, $idempotency_key): \Zernio\Model\CreateMessagingAd201Response
```

Create CTWA ad (deprecated)

Deprecated: use POST /v1/ads/messaging with `destination: whatsapp`. This endpoint stays available for back-compat; no removal planned.  Creates one or more Click-to-WhatsApp (CTWA) ads on Meta under a single campaign and ad set. When tapped, each ad opens a WhatsApp conversation with the business attached to the supplied Facebook Page.  The full hierarchy (campaign, ad set, creative(s), ad(s)) is created and activated in one call. The CTA is locked to WHATSAPP_MESSAGE and the destination is hard-coded to api.whatsapp.com/send. Meta resolves the actual WhatsApp number from the Page-to-WA pairing configured in Page settings or Business Manager.  ### Request shapes  Two mutually exclusive shapes:  - **Single-creative**: supply top-level `headline`, `body`, and one of `imageUrl` / `video`, or a `platformPostId` / `objectStoryId` reference. Creates 1 campaign + 1 ad set + 1 ad. - **Multi-creative**: supply a `creatives[]` array with N entries (each carrying fresh media and copy or an existing post reference). Creates 1 campaign + 1 ad set + N ads sharing budget and targeting.  Multi-creative lets Meta A/B the creatives inside a single auction instead of fragmenting budget across N parallel campaigns. It is recommended when launching multiple creative variants for the same campaign.  Existing posts and reels are supported through `platformPostId` (alias `existingPostId`) or `objectStoryId`, either per creative or at the top level. Omit fresh media and copy for that creative.  Optional `whatsappPhoneNumber` selects a number already paired with the Page (WhatsApp destination only).  ### Attach shape  Send `adSetId` (with either creative shape) to add the ads to an EXISTING messaging ad set instead of building a campaign. The ad set keeps its learning phase, which makes this the way to refresh a CTWA creative without resetting delivery.  The ad set then owns budget, targeting and schedule. So `budgetAmount`, `budgetType`, `endDate`, `objective`, `countries`, `interests` and `audienceId` are rejected with a 400 alongside it rather than silently dropped.  The target ad set's `destination_type` must match the ad's destination (a WhatsApp ad needs a `WHATSAPP` ad set). Otherwise Meta would accept an ad that never delivers.  ### Prerequisites  Enforced by Meta and surfaced as platform_error on failure:  - The Facebook Page must be paired with a verified WhatsApp Business number. - The WhatsApp Business Account must be business-verified. - The Meta access token must carry ads_management.  ### WhatsApp number prerequisite  Link the WhatsApp number to the Facebook Page used for the ad before creating it: Meta checks the pairing at creation. Link it from either:  - the WhatsApp Business app (Settings > Business tools > Facebook & Instagram); - the Page settings (Linked accounts > WhatsApp).  Linking does not affect the number's WhatsApp connection in Zernio (Cloud API or coexistence), so no reconnect or re-sync is needed.  If Meta creates a new ad set without the requested `whatsappPhoneNumber`, the 201 response carries a `warnings` entry. This can happen even when the number is linked (Meta can drop a Page's second linked number).  ### Idempotency  This endpoint is not idempotent at the platform level: a blind retry creates a second campaign/ad set/ad. Send an `Idempotency-Key` header to make retries safe.  - The first request with a given key creates the ad and we store the response. - A retry with the same key replays that exact response (with `Idempotent-Replayed: true`) instead of creating duplicates. - Reusing a key with a different body returns 422. - A key whose first request is still in flight returns 409 (retry after a short backoff). - If the first request is cut off mid-create (for example by a function timeout), its key can stay in progress and keep returning 409 until it expires. Use a new key to retry sooner, after checking whether the ad was created. - Keys are scoped to your credential and expire after 24h.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagingAdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ctwa_ad_request_body = {"accountId":"69ca62446cb7b8cf4cb13603","adAccountId":"act_757082720485182","name":"WhatsApp existing post","creatives":[{"objectStoryId":"811889972008357_123456789"}],"budgetAmount":2.61,"budgetType":"daily","status":"PAUSED"}; // \Zernio\Model\CtwaAdRequestBody
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.

try {
    $result = $apiInstance->createCtwaAd($ctwa_ad_request_body, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingAdsApi->createCtwaAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ctwa_ad_request_body** | [**\Zernio\Model\CtwaAdRequestBody**](../Model/CtwaAdRequestBody.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours. | [optional] |

### Return type

[**\Zernio\Model\CreateMessagingAd201Response**](../Model/CreateMessagingAd201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMessagingAd()`

```php
createMessagingAd($create_messaging_ad_request, $idempotency_key): \Zernio\Model\CreateMessagingAd200Response
```

Create messaging ad

Creates a Meta ad that opens a chat with you on WhatsApp, Messenger or Instagram Direct when someone taps it.  ### Destinations  `destination` selects where the tapped ad opens a conversation:  - WhatsApp - the Page's Messenger inbox - the linked Instagram account's Direct inbox  `destinations` puts two or three of them on one ad set and lets Meta pick the app per viewer.  The ad set is created with the matching destination_type and CONVERSATIONS optimization. The campaign objective defaults to OUTCOME_ENGAGEMENT.  This endpoint supersedes POST /v1/ads/ctwa (deprecated, equivalent to `destination: whatsapp`).  ### Creatives and connections  Supports single-creative and multi-creative shapes.  - Existing posts and reels are supported through `platformPostId` (alias `existingPostId`) or `objectStoryId`, either per creative or at the top level. Omit fresh media and copy for that creative. - Optional `whatsappPhoneNumber` selects a number already paired with the Page (WhatsApp destination only). - `accountId` is a Facebook, Instagram or Meta ads (business login) connection. - `pageId` picks the Page when that connection was granted several.  ### Required fields per shape  A missing one is a 400 naming it in `param`.  - Always `accountId`, `adAccountId`, `name`, and exactly one of `destination` / `destinations`. - `budgetAmount` and `budgetType` unless `adSetId` or `existingCampaignId` is set, plus `endDate` for a lifetime budget. - Single image or video: `headline`, `body`, and exactly one of `imageUrl` / `video`. With `placementAssets`, `headline` and `body` only (the media comes from `placementAssets`). - `carouselCards`: `body` and the 2-10 cards; `headline` is optional, `imageUrl` / `video` / top-level `description` are a 400. - Existing post (`platformPostId` or `objectStoryId`): no copy or media fields. - `creatives[]`: the same rules per entry, with no top-level creative fields. - `welcomeMessage`, when sent: `text` plus exactly one of `prefillText` / `quickReplies`.  ### WhatsApp number prerequisite  For the WhatsApp destination, link the WhatsApp number to the Facebook Page used for the ad before creating it: Meta checks the pairing at creation. Link it from either:  - the WhatsApp Business app (Settings > Business tools > Facebook & Instagram) - the Page settings (Linked accounts > WhatsApp)  Linking does not affect the number's WhatsApp connection in Zernio (Cloud API or coexistence), so no reconnect or re-sync is needed.  If Meta creates a new ad set without the requested `whatsappPhoneNumber`, the 201 response carries a `warnings` entry. This can happen even when the number is linked (Meta can drop a Page's second linked number).  ### Idempotency  This endpoint is not idempotent at the platform level: a blind retry creates a second campaign/ad set/ad. Send an `Idempotency-Key` header to make retries safe.  The first request with a given key creates the ad and we store the response. A retry with the same key replays that exact response (with `Idempotent-Replayed: true`) instead of creating duplicates.  - Reusing a key with a different body returns 422. - A key whose first request is still in flight returns 409 (retry after a short backoff). - If the first request is cut off mid-create (for example by a function timeout), its key can stay in progress and keep returning 409 until it expires. Use a new key to retry sooner, after checking whether the ad was created.  Keys are scoped to your credential and expire after 24h.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagingAdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_messaging_ad_request = {"accountId":"69ca62446cb7b8cf4cb13603","adAccountId":"act_757082720485182","name":"WhatsApp existing post","destination":"whatsapp","creatives":[{"objectStoryId":"811889972008357_123456789"}],"budgetAmount":2.61,"budgetType":"daily","status":"PAUSED"}; // \Zernio\Model\CreateMessagingAdRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.

try {
    $result = $apiInstance->createMessagingAd($create_messaging_ad_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingAdsApi->createMessagingAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_messaging_ad_request** | [**\Zernio\Model\CreateMessagingAdRequest**](../Model/CreateMessagingAdRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours. | [optional] |

### Return type

[**\Zernio\Model\CreateMessagingAd200Response**](../Model/CreateMessagingAd200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
