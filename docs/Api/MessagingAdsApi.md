# Zernio\MessagingAdsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCallAd()**](MessagingAdsApi.md#createCallAd) | **POST** /v1/ads/call | Create Click-to-Call ad |
| [**createCtwaAd()**](MessagingAdsApi.md#createCtwaAd) | **POST** /v1/ads/ctwa | Create CTWA ad (deprecated) |
| [**createMessagingAd()**](MessagingAdsApi.md#createMessagingAd) | **POST** /v1/ads/messaging | Create messaging ad |


## `createCallAd()`

```php
createCallAd($create_call_ad_request): \Zernio\Model\CreateMessagingAd201Response
```

Create Click-to-Call ad

Same shape and flow as POST /v1/ads/ctwa, but the CTA is CALL_NOW dialing `phoneNumber` via a tel: link. The ad set is destination_type PHONE_CALL optimizing QUALITY_CALL and the campaign objective defaults to OUTCOME_LEADS. Supports the same single-creative and multi-creative shapes as CTWA.

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

try {
    $result = $apiInstance->createCallAd($create_call_ad_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingAdsApi->createCallAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_call_ad_request** | [**\Zernio\Model\CreateCallAdRequest**](../Model/CreateCallAdRequest.md)|  | |

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
createCtwaAd($ctwa_ad_request_body): \Zernio\Model\CreateMessagingAd201Response
```

Create CTWA ad (deprecated)

Deprecated: use POST /v1/ads/messaging with `destination: whatsapp`. This endpoint stays available for back-compat; no removal planned.  Creates one or more Click-to-WhatsApp (CTWA) ads on Meta under a single campaign and ad set. When tapped, each ad opens a WhatsApp conversation with the business attached to the supplied Facebook Page. The full hierarchy (campaign, ad set, creative(s), ad(s)) is created and activated in one call. The CTA is locked to WHATSAPP_MESSAGE and the destination is hard-coded to api.whatsapp.com/send; Meta resolves the actual WhatsApp number from the Page-to-WA pairing configured in Page settings or Business Manager.  Supports two mutually-exclusive shapes:  - **Single-creative**: supply top-level `headline`, `body`, and one of `imageUrl` / `video`, or an `existingPostId` / `objectStoryId` reference. Creates 1 campaign + 1 ad set + 1 ad.  - **Multi-creative**: supply a `creatives[]` array with N entries (each carrying fresh media and copy or an existing post reference). Creates 1 campaign + 1 ad set + N ads sharing budget and targeting so Meta A/Bs the creatives inside a single auction instead of fragmenting budget across N parallel campaigns. Recommended when launching multiple creative variants for the same campaign.  **Attach shape.** Send `adSetId` (with either creative shape) to add the ads to an EXISTING messaging ad set instead of building a campaign, so the ad set keeps its learning phase, the way to refresh a CTWA creative without resetting delivery. The ad set then owns budget, targeting and schedule, so `budgetAmount`, `budgetType`, `endDate`, `objective`, `countries`, `interests` and `audienceId` are rejected with a 400 alongside it rather than silently dropped. The target ad set's `destination_type` must match the ad's destination (a WhatsApp ad needs a `WHATSAPP` ad set), otherwise Meta would accept an ad that never delivers.  Prerequisites enforced by Meta (surfaced as platform_error on failure): the Facebook Page must be paired with a verified WhatsApp Business number, the WhatsApp Business Account must be business-verified, and the Meta access token must carry ads_management. Existing posts and reels are supported through `existingPostId` or `objectStoryId`, either per creative or at the top level. Omit fresh media and copy for that creative. Optional `whatsappPhoneNumber` selects a number already paired with the Page (WhatsApp destination only).

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

try {
    $result = $apiInstance->createCtwaAd($ctwa_ad_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingAdsApi->createCtwaAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ctwa_ad_request_body** | [**\Zernio\Model\CtwaAdRequestBody**](../Model/CtwaAdRequestBody.md)|  | |

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
createMessagingAd($create_messaging_ad_request): \Zernio\Model\CreateMessagingAd201Response
```

Create messaging ad

Creates a click-to-message ad; `destination` selects where the tapped ad opens a conversation: WhatsApp, the Page's Messenger inbox or the linked Instagram account's Direct inbox. The ad set is created with the matching destination_type and CONVERSATIONS optimization; the campaign objective defaults to OUTCOME_ENGAGEMENT. Supports single-creative and multi-creative shapes. Supersedes POST /v1/ads/ctwa (deprecated, equivalent to `destination: whatsapp`). Existing posts and reels are supported through `existingPostId` or `objectStoryId`, either per creative or at the top level. Omit fresh media and copy for that creative. Optional `whatsappPhoneNumber` selects a number already paired with the Page (WhatsApp destination only).

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

try {
    $result = $apiInstance->createMessagingAd($create_messaging_ad_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingAdsApi->createMessagingAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_messaging_ad_request** | [**\Zernio\Model\CreateMessagingAdRequest**](../Model/CreateMessagingAdRequest.md)|  | |

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
