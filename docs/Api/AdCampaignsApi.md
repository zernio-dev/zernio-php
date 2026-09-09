# Zernio\AdCampaignsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addAdKeywords()**](AdCampaignsApi.md#addAdKeywords) | **POST** /v1/ads/keywords | Add Search keywords to an ad group |
| [**attachCampaignAssets()**](AdCampaignsApi.md#attachCampaignAssets) | **POST** /v1/ads/campaigns/{campaignId}/assets | Attach extension assets to a Google Search campaign |
| [**boostPost()**](AdCampaignsApi.md#boostPost) | **POST** /v1/ads/boost | Boost post as ad |
| [**bulkUpdateAdCampaignStatus()**](AdCampaignsApi.md#bulkUpdateAdCampaignStatus) | **POST** /v1/ads/campaigns/bulk-status | Pause or resume many campaigns |
| [**createAdCampaign()**](AdCampaignsApi.md#createAdCampaign) | **POST** /v1/ads/campaigns | Create a standalone campaign |
| [**createAdSet()**](AdCampaignsApi.md#createAdSet) | **POST** /v1/ads/ad-sets | Create a standalone ad group |
| [**createBidStrategy()**](AdCampaignsApi.md#createBidStrategy) | **POST** /v1/ads/bid-strategies | Create a Google Ads portfolio bid strategy |
| [**createStandaloneAd()**](AdCampaignsApi.md#createStandaloneAd) | **POST** /v1/ads/create | Create standalone ad |
| [**deleteAd()**](AdCampaignsApi.md#deleteAd) | **DELETE** /v1/ads/{adId} | Cancel an ad |
| [**deleteAdCampaign()**](AdCampaignsApi.md#deleteAdCampaign) | **DELETE** /v1/ads/campaigns/{campaignId} | Delete a campaign |
| [**deleteAdSet()**](AdCampaignsApi.md#deleteAdSet) | **DELETE** /v1/ads/ad-sets/{adSetId} | Delete an ad set |
| [**duplicateAd()**](AdCampaignsApi.md#duplicateAd) | **POST** /v1/ads/{adId}/duplicate | Duplicate an ad |
| [**duplicateAdCampaign()**](AdCampaignsApi.md#duplicateAdCampaign) | **POST** /v1/ads/campaigns/{campaignId}/duplicate | Duplicate a campaign |
| [**duplicateAdSet()**](AdCampaignsApi.md#duplicateAdSet) | **POST** /v1/ads/ad-sets/{adSetId}/duplicate | Duplicate an ad set |
| [**getAd()**](AdCampaignsApi.md#getAd) | **GET** /v1/ads/{adId} | Get ad details |
| [**getAdSetDetails()**](AdCampaignsApi.md#getAdSetDetails) | **GET** /v1/ads/ad-sets/{adSetId} | Live ad-set details incl. learning phase |
| [**getAdTree()**](AdCampaignsApi.md#getAdTree) | **GET** /v1/ads/tree | Get campaign tree |
| [**getAdsTimeline()**](AdCampaignsApi.md#getAdsTimeline) | **GET** /v1/ads/timeline | Get daily account metrics |
| [**getCampaignBidding()**](AdCampaignsApi.md#getCampaignBidding) | **GET** /v1/ads/campaigns/{campaignId}/bidding | Read a campaign&#39;s current bidding |
| [**getCampaignTargeting()**](AdCampaignsApi.md#getCampaignTargeting) | **GET** /v1/ads/campaigns/{campaignId}/targeting | Read a Google campaign&#39;s device, location, and language targeting |
| [**listAdCampaigns()**](AdCampaignsApi.md#listAdCampaigns) | **GET** /v1/ads/campaigns | List campaigns |
| [**listAdKeywords()**](AdCampaignsApi.md#listAdKeywords) | **GET** /v1/ads/keywords | List Search keywords |
| [**listAdSets()**](AdCampaignsApi.md#listAdSets) | **GET** /v1/ads/ad-sets | List ad sets |
| [**listAds()**](AdCampaignsApi.md#listAds) | **GET** /v1/ads | List ads |
| [**listBidStrategies()**](AdCampaignsApi.md#listBidStrategies) | **GET** /v1/ads/bid-strategies | List Google Ads portfolio bid strategies |
| [**listCampaignNegativeKeywordLists()**](AdCampaignsApi.md#listCampaignNegativeKeywordLists) | **GET** /v1/ads/campaigns/{campaignId}/negative-keyword-lists | List campaign negative lists |
| [**listCampaignNegativeKeywords()**](AdCampaignsApi.md#listCampaignNegativeKeywords) | **GET** /v1/ads/campaigns/{campaignId}/negative-keywords | List campaign-level negative keywords |
| [**removeAdKeyword()**](AdCampaignsApi.md#removeAdKeyword) | **DELETE** /v1/ads/keywords/{keywordId} | Remove a Search keyword |
| [**replaceCampaignNegativeKeywordLists()**](AdCampaignsApi.md#replaceCampaignNegativeKeywordLists) | **PUT** /v1/ads/campaigns/{campaignId}/negative-keyword-lists | Replace campaign negative lists |
| [**replaceCampaignNegativeKeywords()**](AdCampaignsApi.md#replaceCampaignNegativeKeywords) | **PUT** /v1/ads/campaigns/{campaignId}/negative-keywords | Replace campaign-level negative keywords |
| [**updateAd()**](AdCampaignsApi.md#updateAd) | **PUT** /v1/ads/{adId} | Update ad |
| [**updateAdCampaign()**](AdCampaignsApi.md#updateAdCampaign) | **PUT** /v1/ads/campaigns/{campaignId} | Update a campaign |
| [**updateAdCampaignStatus()**](AdCampaignsApi.md#updateAdCampaignStatus) | **PUT** /v1/ads/campaigns/{campaignId}/status | Pause or resume a campaign |
| [**updateAdKeyword()**](AdCampaignsApi.md#updateAdKeyword) | **PATCH** /v1/ads/keywords/{keywordId} | Pause or enable a Search keyword |
| [**updateAdSet()**](AdCampaignsApi.md#updateAdSet) | **PUT** /v1/ads/ad-sets/{adSetId} | Update an ad set |
| [**updateAdSetStatus()**](AdCampaignsApi.md#updateAdSetStatus) | **PUT** /v1/ads/ad-sets/{adSetId}/status | Pause or resume a single ad set |
| [**updateAdStatus()**](AdCampaignsApi.md#updateAdStatus) | **PUT** /v1/ads/{adId}/status | Pause or resume a single ad |
| [**updateBidStrategy()**](AdCampaignsApi.md#updateBidStrategy) | **PATCH** /v1/ads/bid-strategies/{strategyId} | Update a Google Ads portfolio bid strategy |
| [**updateCampaignTargeting()**](AdCampaignsApi.md#updateCampaignTargeting) | **PUT** /v1/ads/campaigns/{campaignId}/targeting | Edit a Google campaign&#39;s device, location, or language targeting |


## `addAdKeywords()`

```php
addAdKeywords($add_ad_keywords_request): \Zernio\Model\AddAdKeywords201Response
```

Add Search keywords to an ad group

Adds one or more keyword criteria to an existing Google Search ad group, without touching the keywords already there (unlike the whole-set diff on `PUT /v1/ads/{adId}`, `keywords`/`negativeKeywords` in `platformSpecificData`, which replaces the set). Set `negative: true` to add ad-group-level negatives instead of positive keywords.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$add_ad_keywords_request = new \Zernio\Model\AddAdKeywordsRequest(); // \Zernio\Model\AddAdKeywordsRequest

try {
    $result = $apiInstance->addAdKeywords($add_ad_keywords_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->addAdKeywords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **add_ad_keywords_request** | [**\Zernio\Model\AddAdKeywordsRequest**](../Model/AddAdKeywordsRequest.md)|  | |

### Return type

[**\Zernio\Model\AddAdKeywords201Response**](../Model/AddAdKeywords201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attachCampaignAssets()`

```php
attachCampaignAssets($campaign_id, $attach_campaign_assets_request): \Zernio\Model\AttachCampaignAssets201Response
```

Attach extension assets to a Google Search campaign

Attach sitelinks, callouts and/or structured snippets to an already-existing Google Search campaign. These are the same builders POST /v1/ads/create uses, but without rebuilding the hierarchy. At least one of sitelinks, callouts or structuredSnippets is required.  Google-only. Other platforms have no equivalent extension surface and return 501.  Approval status is Google-async; poll `asset.policy_summary` after review. Assets stay in the account library even if the campaign is later deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Numeric Google platform campaign id.
$attach_campaign_assets_request = new \Zernio\Model\AttachCampaignAssetsRequest(); // \Zernio\Model\AttachCampaignAssetsRequest

try {
    $result = $apiInstance->attachCampaignAssets($campaign_id, $attach_campaign_assets_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->attachCampaignAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Numeric Google platform campaign id. | |
| **attach_campaign_assets_request** | [**\Zernio\Model\AttachCampaignAssetsRequest**](../Model/AttachCampaignAssetsRequest.md)|  | |

### Return type

[**\Zernio\Model\AttachCampaignAssets201Response**](../Model/AttachCampaignAssets201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `boostPost()`

```php
boostPost($boost_post_request, $idempotency_key): \Zernio\Model\UpdateAd200Response
```

Boost post as ad

Creates a paid ad from an existing published post, keeping the post's engagement. By default it provisions the whole hierarchy (campaign, ad set, ad).  **Attach shape (Meta).** Send `adSetId` to put the ad under an EXISTING ad set instead, so that ad set keeps its learning phase. It then owns `budget`, `schedule` and `targeting`, and sending any of those alongside `adSetId` is a 400 rather than a silent drop. `budget` is required only without `adSetId`.  `instagramAccountId`, `destinationType`, `whatsappPhoneNumber` and `adSetId` are Meta-only and return 400 on other platforms.  **Messaging boosts (Meta).** Use `goal: engagement` with `callToAction: WHATSAPP_MESSAGE`, `MESSAGE_PAGE`, or `INSTAGRAM_MESSAGE`. The CTA implies WHATSAPP, MESSENGER, or INSTAGRAM_DIRECT respectively; `destinationType` alone does not select a messaging CTA. Omit `linkUrl` only for messaging CTAs. Plain link CTAs keep their goal and link behavior when combined with an independent `destinationType`. The campaign uses OUTCOME_ENGAGEMENT and the ad set uses CONVERSATIONS with the promoted Page. Optional `whatsappPhoneNumber` selects a number already paired with that Page. Conflicting CTA/destination, instant form, goal, or optimizationGoal inputs return 400. Attach requires the target ad set destination to match. Existing post references preserve social proof; an Instagram reel rejected by Meta is not re-uploaded as a new post for a messaging boost.  **Retries.** Boosts are NOT idempotent and can take minutes when Meta requires re-hosting an Instagram video, so do not retry on client timeout. Send an Idempotency-Key header to make retries safe: same key and body replays the original 201, and distinct keys always create distinct ads. Without the header, an identical request is treated as a retry: while one is in flight it returns 409, and within 10 minutes of a completed boost it returns the already-created ad instead of creating another. To intentionally duplicate an ad, send distinct Idempotency-Keys (or vary the body, e.g. the name).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$boost_post_request = {"accountId":"69ca62446cb7b8cf4cb13603","adAccountId":"act_757082720485182","platformPostId":"811889972008357_123456789","name":"WhatsApp post boost","goal":"engagement","callToAction":"WHATSAPP_MESSAGE","whatsappPhoneNumber":"+12025550123","budget":{"amount":2.61,"type":"daily"},"status":"PAUSED"}; // \Zernio\Model\BoostPostRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409.

try {
    $result = $apiInstance->boostPost($boost_post_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->boostPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **boost_post_request** | [**\Zernio\Model\BoostPostRequest**](../Model/BoostPostRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. | [optional] |

### Return type

[**\Zernio\Model\UpdateAd200Response**](../Model/UpdateAd200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdateAdCampaignStatus()`

```php
bulkUpdateAdCampaignStatus($bulk_update_ad_campaign_status_request): \Zernio\Model\BulkUpdateAdCampaignStatus200Response
```

Pause or resume many campaigns

Process up to 50 campaigns in one call. Each campaign is updated concurrently and the response contains a per-campaign result so a single bad row does not fail the whole batch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_update_ad_campaign_status_request = new \Zernio\Model\BulkUpdateAdCampaignStatusRequest(); // \Zernio\Model\BulkUpdateAdCampaignStatusRequest

try {
    $result = $apiInstance->bulkUpdateAdCampaignStatus($bulk_update_ad_campaign_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->bulkUpdateAdCampaignStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bulk_update_ad_campaign_status_request** | [**\Zernio\Model\BulkUpdateAdCampaignStatusRequest**](../Model/BulkUpdateAdCampaignStatusRequest.md)|  | |

### Return type

[**\Zernio\Model\BulkUpdateAdCampaignStatus200Response**](../Model/BulkUpdateAdCampaignStatus200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAdCampaign()`

```php
createAdCampaign($create_ad_campaign_request, $idempotency_key): \Zernio\Model\CreateAdCampaign200Response
```

Create a standalone campaign

Creates a campaign WITHOUT its first ad set / ad, on the platform of the given `accountId`. Ad sets join it later via `existingCampaignId` on the create endpoints. Platform notes: on Meta a budget here is campaign-level (CBO) by definition; omit it for ABO (each ad set carries its own budget), and `specialAdCategories` is Meta-only (400 elsewhere); `bidStrategy` is Meta and Google (400 elsewhere), and Google also accepts `portfolioBidStrategyId` instead. Google, X and OpenAI require a budget (422 without one; OpenAI accepts only `budgetType: lifetime`, Google only `budgetType: daily`). LinkedIn creates the campaign GROUP (our campaign level) and rejects a budget, which lives on the campaign (ad set) level there; it comes back `status: DRAFT`. TikTok campaigns are created without a status and report `ENABLE`. Created `PAUSED` unless `status: ACTIVE` where the platform supports it.  **Idempotency:** send an `Idempotency-Key` header to make retries safe.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_ad_campaign_request = {"accountId":"69fc524892b3d8e85f893e73","adAccountId":"act_757082720485182","name":"iOS app campaign","goal":"app_promotion","isSkadnetworkAttribution":true,"promotedObject":{"applicationId":"123456789","objectStoreUrl":"https://apps.apple.com/us/app/id123456789"},"buyingType":"AUCTION","status":"PAUSED","validateOnly":true}; // \Zernio\Model\CreateAdCampaignRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. Only 2xx responses are stored, so a request that failed with a 4xx can be retried with a corrected body under the SAME key.

try {
    $result = $apiInstance->createAdCampaign($create_ad_campaign_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->createAdCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_ad_campaign_request** | [**\Zernio\Model\CreateAdCampaignRequest**](../Model/CreateAdCampaignRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. Only 2xx responses are stored, so a request that failed with a 4xx can be retried with a corrected body under the SAME key. | [optional] |

### Return type

[**\Zernio\Model\CreateAdCampaign200Response**](../Model/CreateAdCampaign200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAdSet()`

```php
createAdSet($create_ad_set_request, $idempotency_key): \Zernio\Model\CreateAdSet201Response
```

Create a standalone ad group

Google Ads compliance row C.190: creates an ad group WITHOUT an ad, under an existing campaign. Ads join it later via `adSetId` on POST /v1/ads/create. Google only; every other platform returns 501.  Created `PAUSED` unless `status: ACTIVE`. The new ad group has no ad yet, so it will not appear in GET /v1/ads/tree (built purely from `ads` rows) until one is added; use GET /v1/ads/ad-sets to see it in the meantime.  **Idempotency:** send an `Idempotency-Key` header to make retries safe.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_ad_set_request = new \Zernio\Model\CreateAdSetRequest(); // \Zernio\Model\CreateAdSetRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. Only 2xx responses are stored, so a request that failed with a 4xx can be retried with a corrected body under the SAME key.

try {
    $result = $apiInstance->createAdSet($create_ad_set_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->createAdSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_ad_set_request** | [**\Zernio\Model\CreateAdSetRequest**](../Model/CreateAdSetRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. Only 2xx responses are stored, so a request that failed with a 4xx can be retried with a corrected body under the SAME key. | [optional] |

### Return type

[**\Zernio\Model\CreateAdSet201Response**](../Model/CreateAdSet201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBidStrategy()`

```php
createBidStrategy($create_bid_strategy_request): \Zernio\Model\CreateBidStrategy201Response
```

Create a Google Ads portfolio bid strategy

Creates a standalone bid strategy shared across campaigns. Attach it to a campaign with `portfolioBidStrategyId` on POST /v1/ads/create, PUT /v1/ads/campaigns/{campaignId}, or PUT /v1/ads/ad-sets/{adSetId}. Attaching a strategy aligned to a shared budget fails there with a 400 (Google's `BIDDING_STRATEGY_AND_BUDGET_MUST_BE_ALIGNED`); this is not retryable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_bid_strategy_request = new \Zernio\Model\CreateBidStrategyRequest(); // \Zernio\Model\CreateBidStrategyRequest

try {
    $result = $apiInstance->createBidStrategy($create_bid_strategy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->createBidStrategy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_bid_strategy_request** | [**\Zernio\Model\CreateBidStrategyRequest**](../Model/CreateBidStrategyRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateBidStrategy201Response**](../Model/CreateBidStrategy201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createStandaloneAd()`

```php
createStandaloneAd($create_standalone_ad_request, $idempotency_key): \Zernio\Model\CreateStandaloneAd200Response
```

Create standalone ad

Create a paid ad with custom creative across Meta, Google Ads, Pinterest, TikTok, X, LinkedIn, and OpenAI Ads (ChatGPT Ads).  Three mutually-exclusive request shapes are selected by the body:  - Legacy single-creative shape (all platforms, the default). - Meta-only multi-creative shape via the creatives array: one ad set with N ads sharing budget and targeting. - Attach shape via adSetId: adds one new ad to an existing ad set, inheriting its budget, targeting, and schedule (Meta, Google Ads, TikTok, and LinkedIn). On LinkedIn adSetId is the existing Campaign id, and the budget, schedule, targeting and bidding fields must be omitted.  Meta accepts `promotion` and `creativeFeatures` on the single and attach shapes and as defaults for `creatives[]`. An item replaces the whole feature map; its `promotion` replaces the default offer, and `promotion: null` disables that default for the item. Reusing `existingCreativeId` uses the existing creative settings instead of new settings. Requested settings are persisted for lists, exports, and default ad-detail reads. Only ads supplied a `promotion` receive live readback; multi-create batches those reads in groups of up to 50 IDs without per-ad fallback. Inspect `ad.creative.promotionStatus` (or `ads[].creative.promotionStatus`). `not_returned` means Meta omitted the metadata; successful creation does not by itself prove the offer was applied or will display.  Per-platform required fields, budget minimums, and video-ad rules are documented on each property below.  LinkedIn creates a Single Image or Single Video Ad backed by a Direct Sponsored Content \"dark post\" authored by a Company Page (see `organizationId`). Supported goals are engagement, traffic, awareness, and video_views (video ads use the `video` field; video_views requires a video), and traffic ads require `linkUrl`.  **Idempotency:** this endpoint is not idempotent at the platform level (a blind retry creates a second campaign/ad set/ad). Send an `Idempotency-Key` header to make retries safe: the first request with a given key creates the ad and we store the response; a retry with the same key replays that exact response (with `Idempotent-Replayed: true`) instead of creating duplicates. Reusing a key with a different body returns 422; a key whose first request is still in flight returns 409 (retry after a short backoff). Keys are scoped to your credential and expire after 24h.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_standalone_ad_request = {"accountId":"69fc524892b3d8e85f893e73","adAccountId":"act_757082720485182","name":"iOS app installs","goal":"app_promotion","isSkadnetworkAttribution":true,"campaignAttribution":"SKADNETWORK","buyingType":"AUCTION","billingEvent":"IMPRESSIONS","optimizationGoal":"APP_INSTALLS","promotedObject":{"applicationId":"123456789","objectStoreUrl":"https://apps.apple.com/us/app/id123456789"},"linkUrl":"https://apps.apple.com/us/app/id123456789","headline":"Install our app","body":"Get started today.","callToAction":"INSTALL_MOBILE_APP","imageUrl":"https://example.com/app.jpg","targeting":{"countries":["US"],"userOs":["iOS_ver_14.0_and_above"]},"tracking":{"urlTags":[{"key":"utm_content","value":"{{ad.id}}"}]},"budgetAmount":1,"budgetType":"daily","status":"PAUSED","validateOnly":true}; // \Zernio\Model\CreateStandaloneAdRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409.

try {
    $result = $apiInstance->createStandaloneAd($create_standalone_ad_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->createStandaloneAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_standalone_ad_request** | [**\Zernio\Model\CreateStandaloneAdRequest**](../Model/CreateStandaloneAdRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. | [optional] |

### Return type

[**\Zernio\Model\CreateStandaloneAd200Response**](../Model/CreateStandaloneAd200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAd()`

```php
deleteAd($ad_id): \Zernio\Model\DeleteAccountGroup200Response
```

Cancel an ad

Cancels the ad on the platform and marks it as cancelled in the database. The ad is preserved for history. OpenAI Ads has no delete API; the ad is archived instead (a terminal state, the closest equivalent).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_id = 'ad_id_example'; // string

try {
    $result = $apiInstance->deleteAd($ad_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->deleteAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**|  | |

### Return type

[**\Zernio\Model\DeleteAccountGroup200Response**](../Model/DeleteAccountGroup200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAdCampaign()`

```php
deleteAdCampaign($campaign_id, $delete_ad_campaign_request): \Zernio\Model\DeleteAdCampaign200Response
```

Delete a campaign

Deletes the whole campaign on the platform, cascading to its ad sets and ads. Locally, all Ad documents for this campaign are marked `status: cancelled`.  **Empty campaigns.** A campaign with zero ads has no local Ad documents to resolve, so it is invisible to `/v1/ads/tree` and this endpoint would 404. That state is produced by the two-step create flow (campaign, then ads via `existingCampaignId`) whenever Meta rejects the ad step. To delete such a shell, send `accountId` in the body: we skip the local lookup entirely and forward the delete to Meta. `accountId` is ignored when the campaign does have ads.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Platform campaign ID
$delete_ad_campaign_request = new \Zernio\Model\DeleteAdCampaignRequest(); // \Zernio\Model\DeleteAdCampaignRequest

try {
    $result = $apiInstance->deleteAdCampaign($campaign_id, $delete_ad_campaign_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->deleteAdCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Platform campaign ID | |
| **delete_ad_campaign_request** | [**\Zernio\Model\DeleteAdCampaignRequest**](../Model/DeleteAdCampaignRequest.md)|  | |

### Return type

[**\Zernio\Model\DeleteAdCampaign200Response**](../Model/DeleteAdCampaign200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAdSet()`

```php
deleteAdSet($ad_set_id): \Zernio\Model\DeleteAdSet200Response
```

Delete an ad set

Deletes the ad set on the platform, cascading to its ads only (never the campaign). Locally, every Ad document under the ad set is marked `status: cancelled`.  Delete is soft on platforms that have no hard delete: LinkedIn moves the campaign to `PENDING_DELETION`, Pinterest archives the ad group, and X soft-flags the line item. Google removes the ad group. All remain readable for reporting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_set_id = 'ad_set_id_example'; // string | Platform ad set ID

try {
    $result = $apiInstance->deleteAdSet($ad_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->deleteAdSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_set_id** | **string**| Platform ad set ID | |

### Return type

[**\Zernio\Model\DeleteAdSet200Response**](../Model/DeleteAdSet200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `duplicateAd()`

```php
duplicateAd($ad_id, $idempotency_key, $duplicate_ad_request): \Zernio\Model\DuplicateAd200Response
```

Duplicate an ad

Duplicates a single ad via Meta's native `POST /{ad-id}/copies`. The copy is created paused. `adSetId` retargets the copy into another ad set; omitted = the source's own ad set. Accepts the Zernio ad id or the platform ad id. Sync discovery is triggered automatically (`syncAfter: false` to skip). Creative settings returned by Meta, including explicit promotion metadata and creativeFeatures, are preserved when the native copy requires a creative rebuild. Metadata Meta does not return cannot be recovered.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_id = 'ad_id_example'; // string | Zernio ad ID or platform ad ID
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. Only 2xx responses are stored, so a request that failed with a 4xx can be retried with a corrected body under the SAME key.
$duplicate_ad_request = new \Zernio\Model\DuplicateAdRequest(); // \Zernio\Model\DuplicateAdRequest

try {
    $result = $apiInstance->duplicateAd($ad_id, $idempotency_key, $duplicate_ad_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->duplicateAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**| Zernio ad ID or platform ad ID | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. Only 2xx responses are stored, so a request that failed with a 4xx can be retried with a corrected body under the SAME key. | [optional] |
| **duplicate_ad_request** | [**\Zernio\Model\DuplicateAdRequest**](../Model/DuplicateAdRequest.md)|  | [optional] |

### Return type

[**\Zernio\Model\DuplicateAd200Response**](../Model/DuplicateAd200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `duplicateAdCampaign()`

```php
duplicateAdCampaign($campaign_id, $duplicate_ad_campaign_request, $idempotency_key): \Zernio\Model\DuplicateAdCampaign200Response
```

Duplicate a campaign

Duplicates a campaign, including its ad sets, ads, creatives, and targeting by default (`deepCopy: true`). The copy is created paused so callers can review before launching.  Per-platform implementation: - **Meta** uses the native `POST /{campaign-id}/copies` endpoint. - **TikTok** has no native copy primitive; Zernio walks the source   graph (`/v2/campaign/get/`, `/v2/adgroup/get/`, `/v2/ad/get/`) and   recreates each entity via the corresponding `/create/` endpoints,   carrying over budget / targeting / bid_type / bid_price /   deep_bid_type / creative fields. Spark Ad linkage (`tiktok_item_id`)   is preserved. - **LinkedIn** has no native copy primitive; Zernio walks the source   CampaignGroup → Campaigns → Creatives and recreates each entity,   carrying over `type` / `costType` / `unitCost` /   `optimizationTargetType` / `creativeSelection` / `objectiveType` /   `format` / `dailyBudget` / `totalBudget` / `targetingCriteria` /   `runSchedule` and every Creative's `content` object verbatim.   `statusOption: INHERITED_FROM_SOURCE` is evaluated **per entity**:   any Group / Campaign / Creative whose source is `ACTIVE` gets its   clone activated too. Duplicating an ACTIVE campaign with   `INHERITED_FROM_SOURCE` starts a second front of spend the moment   the clone activates. The safe default is `PAUSED`.  The new hierarchy is asynchronous to materialize in our DB, and we trigger sync discovery automatically. Set `syncAfter: false` to skip and poll `/v1/ads/tree` on your own cadence.  Other platforms return 501 Not Implemented.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Source platform campaign ID
$duplicate_ad_campaign_request = new \Zernio\Model\DuplicateAdCampaignRequest(); // \Zernio\Model\DuplicateAdCampaignRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. Only 2xx responses are stored, so a request that failed with a 4xx can be retried with a corrected body under the SAME key.

try {
    $result = $apiInstance->duplicateAdCampaign($campaign_id, $duplicate_ad_campaign_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->duplicateAdCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Source platform campaign ID | |
| **duplicate_ad_campaign_request** | [**\Zernio\Model\DuplicateAdCampaignRequest**](../Model/DuplicateAdCampaignRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. Only 2xx responses are stored, so a request that failed with a 4xx can be retried with a corrected body under the SAME key. | [optional] |

### Return type

[**\Zernio\Model\DuplicateAdCampaign200Response**](../Model/DuplicateAdCampaign200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `duplicateAdSet()`

```php
duplicateAdSet($ad_set_id, $duplicate_ad_set_request, $idempotency_key): \Zernio\Model\DuplicateAdSet200Response
```

Duplicate an ad set

Duplicates an ad set, including its ads and creatives by default (`deepCopy: true`), via Meta's native `POST /{adset-id}/copies`. The copy is created paused so callers can review before launching. `campaignId` retargets the copy into another campaign; omitted = the source's own campaign. The new hierarchy materializes asynchronously, and sync discovery is triggered automatically (`syncAfter: false` to skip).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_set_id = 'ad_set_id_example'; // string | Source platform ad set ID
$duplicate_ad_set_request = new \Zernio\Model\DuplicateAdSetRequest(); // \Zernio\Model\DuplicateAdSetRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. Only 2xx responses are stored, so a request that failed with a 4xx can be retried with a corrected body under the SAME key.

try {
    $result = $apiInstance->duplicateAdSet($ad_set_id, $duplicate_ad_set_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->duplicateAdSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_set_id** | **string**| Source platform ad set ID | |
| **duplicate_ad_set_request** | [**\Zernio\Model\DuplicateAdSetRequest**](../Model/DuplicateAdSetRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. Only 2xx responses are stored, so a request that failed with a 4xx can be retried with a corrected body under the SAME key. | [optional] |

### Return type

[**\Zernio\Model\DuplicateAdSet200Response**](../Model/DuplicateAdSet200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAd()`

```php
getAd($ad_id, $refresh_promotion): \Zernio\Model\GetAd200Response
```

Get ad details

Returns an ad with its creative, targeting, status, and performance metrics.  The `{adId}` path segment accepts any identifier dialect Zernio indexes for the ad: - the Zernio internal `_id` (24-char hex) - Meta's numeric `platformAdId` (the value shipped in `comment.received` webhooks as `comment.ad.id`) - the creative's `effective_object_story_id` (`{pageId}_{postId}` shape, Facebook side) - the creative's `effective_instagram_media_id` (Instagram side)  Any of the four resolve to the same ad. Caller doesn't need a translation step. By default, creative.promotion and creative.creativeFeatures contain stored requested settings, which do not confirm platform application. With `refreshPromotion=true`, Meta promotion metadata is read live and exposed as `ad.creative.promotion` with `promotionStatus`. Only `applied` confirms an offer; `not_returned` means the creative read succeeded without promotion metadata, and `unavailable` means it failed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_id = 'ad_id_example'; // string | Zernio `_id` (hex), Meta `platformAdId` (numeric), or one of the creative's effective story/media IDs. See description for details.
$refresh_promotion = false; // bool | Meta only. Read current promotion metadata from Meta and include promotionStatus. Omit for stored creative settings with no promotion-specific Graph call.

try {
    $result = $apiInstance->getAd($ad_id, $refresh_promotion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->getAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**| Zernio &#x60;_id&#x60; (hex), Meta &#x60;platformAdId&#x60; (numeric), or one of the creative&#39;s effective story/media IDs. See description for details. | |
| **refresh_promotion** | **bool**| Meta only. Read current promotion metadata from Meta and include promotionStatus. Omit for stored creative settings with no promotion-specific Graph call. | [optional] [default to false] |

### Return type

[**\Zernio\Model\GetAd200Response**](../Model/GetAd200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdSetDetails()`

```php
getAdSetDetails($ad_set_id, $account_id, $fields): \Zernio\Model\GetAdSetDetails200Response
```

Live ad-set details incl. learning phase

Reads the ad set live from Meta, returned verbatim. The default projection includes `learning_stage_info` (learning-phase status: LEARNING / SUCCESS / FAIL / WAIVING; Meta omits its `status` key on paused ad sets), delivery settings, budgets, schedule and targeting. `fields` is a raw-passthrough override; unknown fields return Meta's 400 verbatim.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_set_id = 'ad_set_id_example'; // string | Meta ad set id (platformAdSetId).
$account_id = 'account_id_example'; // string | Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token.
$fields = 'fields_example'; // string | Comma-separated Graph field override (supports nested {} projections).

try {
    $result = $apiInstance->getAdSetDetails($ad_set_id, $account_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->getAdSetDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_set_id** | **string**| Meta ad set id (platformAdSetId). | |
| **account_id** | **string**| Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token. | |
| **fields** | **string**| Comma-separated Graph field override (supports nested {} projections). | [optional] |

### Return type

[**\Zernio\Model\GetAdSetDetails200Response**](../Model/GetAdSetDetails200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdTree()`

```php
getAdTree($page, $limit, $source, $platform, $status, $ad_account_id, $page_id, $account_id, $profile_id, $campaign_id, $from_date, $to_date, $has_delivery, $min_spend, $sort, $time_increment, $daily_level): \Zernio\Model\AdTreeResponse
```

Get campaign tree

Returns a nested Campaign > Ad Set > Ad hierarchy with rolled-up metrics at each level. Uses a two-stage aggregation: ads are grouped into ad sets, then ad sets into campaigns. Metrics are computed over an optional date range, then rolled up from ad level to ad set and campaign levels. Pagination is at the campaign level. Ads without a campaign or ad set ID are grouped into synthetic \"Ungrouped\" buckets. If no date range is provided, defaults to the last 90 days. Date range is capped at 730 days max.  Pass `timeIncrement=1` to also get a daily breakdown: each node gains a `daily[]` array of per-day metrics (same fields as the aggregated `metrics`) in the same call. Use `dailyLevel` (`campaign` default, or `adset` / `ad`) to choose which levels carry the series. This replaces calling the tree once per day for per-campaign daily trends.  **Deleted objects stay in the tree.** Deleting an ad or a campaign is a soft delete: the Ad documents move to `status: cancelled` and are kept indefinitely, so their historical spend still counts toward the metrics of any date range they fall in. There is no pruning job and no retention window. Filter on `status` if your view should hide them, but do that after reading the totals, not before.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number (1-based)
$limit = 20; // int | Campaigns per page
$source = 'all'; // string | `all` (default) returns both Zernio-created ads and those discovered from the platform's ad manager. Matches the web UI's default view. Pass `zernio` to restrict to isExternal=false only. Status is NOT filtered by default; use the `status` param for that.
$platform = 'platform_example'; // string
$status = new \Zernio\Model\\Zernio\Model\AdStatus(); // \Zernio\Model\AdStatus | Filter by derived campaign status (post-aggregation)
$ad_account_id = 'ad_account_id_example'; // string | One or more platform ad account IDs to scope the tree to (agency profiles connect a whole Business Manager but a team usually cares about a subset). Comma-separate for multiple (`?adAccountId=act_1,act_2,act_3`); single value keeps its old shape. Max 50 accounts per request; the plural aliases `adAccountIds` and `platformAdAccountIds` are rejected with a 400 to stop them from silently returning the unfiltered fleet.
$page_id = 'page_id_example'; // string | Meta only: Facebook Page ID. Prunes the tree to ads whose creative is backed by this Page: campaigns and ad sets with no ad on the Page drop out, and rolled-up metrics cover only the Page's ads. Mirrors the same filter on /v1/ads and /v1/ads/campaigns.
$account_id = 'account_id_example'; // string | Account ID
$profile_id = 'profile_id_example'; // string | Profile ID
$campaign_id = 'campaign_id_example'; // string | Restrict the tree to a single campaign by its platform campaign id (the id the platform assigns, e.g. Meta's numeric campaign id). Filters the campaign set itself, so it works regardless of account size and pagination. Pass this when you already hold a campaign id instead of paging the tree to find it. Mirrors the `campaignId` filter on GET /v1/ads.
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start of the METRICS date range (YYYY-MM-DD). On its own it affects only the spend/impression numbers overlaid on each node, not which campaigns are returned. Pass `hasDelivery` or `minSpend` to also filter the campaign set to this window. Defaults to 90 days ago.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End of metrics date range (YYYY-MM-DD). Defaults to today. Max 730-day range.
$has_delivery = True; // bool | Return only campaigns that delivered between `fromDate` and `toDate`: spend above zero, or impressions served at zero spend. Unlike `status`, which reads a campaign's CURRENT state, this filters on what happened inside the window, so a campaign that spent then and is paused today is still returned. Filters the campaign set itself, so `pagination.total` counts only matching campaigns.
$min_spend = 3.4; // float | Return only campaigns whose spend between `fromDate` and `toDate` reaches this amount. Expressed in each campaign's OWN currency (the `currency` field on the campaign node): spend is stored per ad account in its native currency and one response can span several. Implies `hasDelivery`; `minSpend=0` applies no filter.
$sort = 'newest'; // string | Campaign-level sort order. `newest` (default) / `oldest` order by the campaign's newest-ad createdAt. `spend_desc` / `spend_asc` order by aggregated spend in the requested date range; campaigns with no spend land at the end.
$time_increment = 56; // int | Set to `1` to also return a daily breakdown. Mirrors Meta Insights' `time_increment=1`: each node gains a `daily[]` array of per-day metrics (same fields as the aggregated `metrics`) alongside the range total, so you get per-entity daily trends in ONE call instead of calling the tree once per day. Only `1` (daily) is supported. The daily series covers the same date range and uses the same source data as `metrics`, except `reach` on Meta and TikTok: the range total is the platform's de-duplicated value, so daily reach does not sum to it. See `dailyLevel` to control which levels carry it.
$daily_level = 'campaign'; // string | Which tree levels get the `daily[]` series when `timeIncrement=1`. `campaign` (default) attaches it on campaign nodes only: the common per-campaign-trend case, and the smallest payload. `adset` adds it on ad sets too; `ad` adds it on every ad in `ads[]` as well (heaviest: a long range × up to 100 ads per ad set). Scope with `campaignId` to keep `ad`-level responses small. Ignored when `timeIncrement` is unset.

try {
    $result = $apiInstance->getAdTree($page, $limit, $source, $platform, $status, $ad_account_id, $page_id, $account_id, $profile_id, $campaign_id, $from_date, $to_date, $has_delivery, $min_spend, $sort, $time_increment, $daily_level);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->getAdTree: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number (1-based) | [optional] [default to 1] |
| **limit** | **int**| Campaigns per page | [optional] [default to 20] |
| **source** | **string**| &#x60;all&#x60; (default) returns both Zernio-created ads and those discovered from the platform&#39;s ad manager. Matches the web UI&#39;s default view. Pass &#x60;zernio&#x60; to restrict to isExternal&#x3D;false only. Status is NOT filtered by default; use the &#x60;status&#x60; param for that. | [optional] [default to &#39;all&#39;] |
| **platform** | **string**|  | [optional] |
| **status** | [**\Zernio\Model\AdStatus**](../Model/.md)| Filter by derived campaign status (post-aggregation) | [optional] |
| **ad_account_id** | **string**| One or more platform ad account IDs to scope the tree to (agency profiles connect a whole Business Manager but a team usually cares about a subset). Comma-separate for multiple (&#x60;?adAccountId&#x3D;act_1,act_2,act_3&#x60;); single value keeps its old shape. Max 50 accounts per request; the plural aliases &#x60;adAccountIds&#x60; and &#x60;platformAdAccountIds&#x60; are rejected with a 400 to stop them from silently returning the unfiltered fleet. | [optional] |
| **page_id** | **string**| Meta only: Facebook Page ID. Prunes the tree to ads whose creative is backed by this Page: campaigns and ad sets with no ad on the Page drop out, and rolled-up metrics cover only the Page&#39;s ads. Mirrors the same filter on /v1/ads and /v1/ads/campaigns. | [optional] |
| **account_id** | **string**| Account ID | [optional] |
| **profile_id** | **string**| Profile ID | [optional] |
| **campaign_id** | **string**| Restrict the tree to a single campaign by its platform campaign id (the id the platform assigns, e.g. Meta&#39;s numeric campaign id). Filters the campaign set itself, so it works regardless of account size and pagination. Pass this when you already hold a campaign id instead of paging the tree to find it. Mirrors the &#x60;campaignId&#x60; filter on GET /v1/ads. | [optional] |
| **from_date** | **\DateTime**| Start of the METRICS date range (YYYY-MM-DD). On its own it affects only the spend/impression numbers overlaid on each node, not which campaigns are returned. Pass &#x60;hasDelivery&#x60; or &#x60;minSpend&#x60; to also filter the campaign set to this window. Defaults to 90 days ago. | [optional] |
| **to_date** | **\DateTime**| End of metrics date range (YYYY-MM-DD). Defaults to today. Max 730-day range. | [optional] |
| **has_delivery** | **bool**| Return only campaigns that delivered between &#x60;fromDate&#x60; and &#x60;toDate&#x60;: spend above zero, or impressions served at zero spend. Unlike &#x60;status&#x60;, which reads a campaign&#39;s CURRENT state, this filters on what happened inside the window, so a campaign that spent then and is paused today is still returned. Filters the campaign set itself, so &#x60;pagination.total&#x60; counts only matching campaigns. | [optional] |
| **min_spend** | **float**| Return only campaigns whose spend between &#x60;fromDate&#x60; and &#x60;toDate&#x60; reaches this amount. Expressed in each campaign&#39;s OWN currency (the &#x60;currency&#x60; field on the campaign node): spend is stored per ad account in its native currency and one response can span several. Implies &#x60;hasDelivery&#x60;; &#x60;minSpend&#x3D;0&#x60; applies no filter. | [optional] |
| **sort** | **string**| Campaign-level sort order. &#x60;newest&#x60; (default) / &#x60;oldest&#x60; order by the campaign&#39;s newest-ad createdAt. &#x60;spend_desc&#x60; / &#x60;spend_asc&#x60; order by aggregated spend in the requested date range; campaigns with no spend land at the end. | [optional] [default to &#39;newest&#39;] |
| **time_increment** | **int**| Set to &#x60;1&#x60; to also return a daily breakdown. Mirrors Meta Insights&#39; &#x60;time_increment&#x3D;1&#x60;: each node gains a &#x60;daily[]&#x60; array of per-day metrics (same fields as the aggregated &#x60;metrics&#x60;) alongside the range total, so you get per-entity daily trends in ONE call instead of calling the tree once per day. Only &#x60;1&#x60; (daily) is supported. The daily series covers the same date range and uses the same source data as &#x60;metrics&#x60;, except &#x60;reach&#x60; on Meta and TikTok: the range total is the platform&#39;s de-duplicated value, so daily reach does not sum to it. See &#x60;dailyLevel&#x60; to control which levels carry it. | [optional] |
| **daily_level** | **string**| Which tree levels get the &#x60;daily[]&#x60; series when &#x60;timeIncrement&#x3D;1&#x60;. &#x60;campaign&#x60; (default) attaches it on campaign nodes only: the common per-campaign-trend case, and the smallest payload. &#x60;adset&#x60; adds it on ad sets too; &#x60;ad&#x60; adds it on every ad in &#x60;ads[]&#x60; as well (heaviest: a long range × up to 100 ads per ad set). Scope with &#x60;campaignId&#x60; to keep &#x60;ad&#x60;-level responses small. Ignored when &#x60;timeIncrement&#x60; is unset. | [optional] [default to &#39;campaign&#39;] |

### Return type

[**\Zernio\Model\AdTreeResponse**](../Model/AdTreeResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdsTimeline()`

```php
getAdsTimeline($account_id, $ad_account_id, $from_date, $to_date, $platform): \Zernio\Model\AdsTimelineResponse
```

Get daily account metrics

Returns daily aggregate metrics across all ads in a SocialAccount as a single time series, one row per calendar day in the requested range. Use this for dashboards that draw a daily-spend or daily-conversions chart, instead of calling `/v1/ads/tree` once per day.  `accountId` is required. The lookup is sibling-expanded so passing the `metaads` ID also includes ads under the linked `facebook` / `instagram` posting account (and vice-versa), the same convention as `/v1/ads/tree` and `/v1/ads`.  Date range defaults to the last 90 days. Capped at 730 days. Ranges older than the ingested history return a `202` immediately with the covered part and `backfillPending: true` while the rest is backfilled in the background; repeat the request shortly until it returns 200 with full data.  With adAccountId set to a Google customer id this is the customer-level performance report (clicks, cost, impressions, conversions, all conversions per day).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID. Sibling-expanded to its linked posting↔ads pair.
$ad_account_id = 'ad_account_id_example'; // string | Optional platform-native ad account ID (e.g. Meta `act_…`, TikTok advertiser ID). Use when the connection wraps multiple platform ad accounts and the chart should show one only. Note: rows ingested before 2026-05-13 don't carry this column; the recurring 7-day re-sync repopulates them naturally.
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Inclusive start of metrics range (YYYY-MM-DD). Defaults to 90 days ago.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Inclusive end of metrics range (YYYY-MM-DD). Defaults to today. Max 730-day range.
$platform = 'platform_example'; // string | Restrict to one platform.

try {
    $result = $apiInstance->getAdsTimeline($account_id, $ad_account_id, $from_date, $to_date, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->getAdsTimeline: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account ID. Sibling-expanded to its linked posting↔ads pair. | |
| **ad_account_id** | **string**| Optional platform-native ad account ID (e.g. Meta &#x60;act_…&#x60;, TikTok advertiser ID). Use when the connection wraps multiple platform ad accounts and the chart should show one only. Note: rows ingested before 2026-05-13 don&#39;t carry this column; the recurring 7-day re-sync repopulates them naturally. | [optional] |
| **from_date** | **\DateTime**| Inclusive start of metrics range (YYYY-MM-DD). Defaults to 90 days ago. | [optional] |
| **to_date** | **\DateTime**| Inclusive end of metrics range (YYYY-MM-DD). Defaults to today. Max 730-day range. | [optional] |
| **platform** | **string**| Restrict to one platform. | [optional] |

### Return type

[**\Zernio\Model\AdsTimelineResponse**](../Model/AdsTimelineResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignBidding()`

```php
getCampaignBidding($campaign_id, $account_id, $platform, $customer_id): \Zernio\Model\GetCampaignBidding200Response
```

Read a campaign's current bidding

Read of the campaign's bidding strategy on Google, cached for the quota window, for pre-filling the bid strategy block before a PUT to /v1/ads/campaigns/{campaignId}. Google Ads only; `platform` is required and rejected when it is anything else, since a `campaignId` is not globally unique. The response carries `cachedAt` and `stale`, set when a quota-exhausted call falls back to the last-good copy instead of a live read.  Maps Google's bidding strategy onto the same triplet PUT accepts: `LOWEST_COST_WITHOUT_CAP` (Maximize Conversions, no target), `COST_CAP` + `bidAmount` (Target CPA), `LOWEST_COST_WITH_MIN_ROAS` + `roasAverageFloor` (Target ROAS), `LOWEST_COST_WITH_BID_CAP` + `bidAmount` (Maximize Clicks with a CPC ceiling). A campaign on a portfolio strategy returns `portfolio` (id + name) and `bidSpec.portfolioBidStrategyId` instead of the triplet. Anything else (Manual CPC, Target Impression Share, ...) returns `bidSpec: null`; show `biddingStrategyType` as-is.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Numeric Google platform campaign id.
$account_id = 'account_id_example'; // string | Zernio Google Ads SocialAccount id: resolves the customer id + refresh token.
$platform = 'platform_example'; // string | Required: campaign IDs are not globally unique. Only \"google\" is supported today.
$customer_id = 'customer_id_example'; // string | Numeric Google Ads customer id (no dashes). Required when the connection has multiple Google Ads accounts; optional (and inferred) when it has only one.

try {
    $result = $apiInstance->getCampaignBidding($campaign_id, $account_id, $platform, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->getCampaignBidding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Numeric Google platform campaign id. | |
| **account_id** | **string**| Zernio Google Ads SocialAccount id: resolves the customer id + refresh token. | |
| **platform** | **string**| Required: campaign IDs are not globally unique. Only \&quot;google\&quot; is supported today. | |
| **customer_id** | **string**| Numeric Google Ads customer id (no dashes). Required when the connection has multiple Google Ads accounts; optional (and inferred) when it has only one. | [optional] |

### Return type

[**\Zernio\Model\GetCampaignBidding200Response**](../Model/GetCampaignBidding200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignTargeting()`

```php
getCampaignTargeting($campaign_id, $platform): \Zernio\Model\GetCampaignTargeting200Response
```

Read a Google campaign's device, location, and language targeting

Google Ads compliance requires geo, language, budget, and bidding targeting set at creation to stay editable afterwards; this reads the campaign state so an integrator can build an editor around it. Cached for the quota window (10 minutes fresh, up to 7 days last-good), not always a live read. Google only; every other platform returns 501.  `devices` always lists all four device types with `included` reflecting Google's negative device criteria (a device absent from any negative criterion is included by default). This read has no bid-modifier source, so `bidModifier` is always `null` even for a device with one configured.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Google platform campaign ID
$platform = 'platform_example'; // string | Disambiguates when the same campaignId string exists on more than one connected platform.

try {
    $result = $apiInstance->getCampaignTargeting($campaign_id, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->getCampaignTargeting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Google platform campaign ID | |
| **platform** | **string**| Disambiguates when the same campaignId string exists on more than one connected platform. | [optional] |

### Return type

[**\Zernio\Model\GetCampaignTargeting200Response**](../Model/GetCampaignTargeting200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAdCampaigns()`

```php
listAdCampaigns($include_empty, $page, $limit, $source, $platform, $status, $ad_account_id, $page_id, $account_id, $profile_id, $from_date, $to_date, $has_delivery, $min_spend): \Zernio\Model\ListAdCampaigns200Response
```

List campaigns

Returns campaigns as virtual aggregations over ad documents grouped by platform campaign ID. Metrics (spend, impressions, clicks, etc.) are summed across all ads in each campaign. Campaign status is derived from child ad statuses (active > pending_review > paused > error > completed > cancelled > rejected). Google campaign budgets include amountMicros, explicitlyShared, resourceName and deliveryMethod after the next successful sync. This endpoint does not fetch Google live.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include_empty = True; // bool | Meta only. Campaign reads aggregate over ad documents, so a campaign with ZERO ads is normally invisible here, the state the two-step create (campaign, then ads via `existingCampaignId`) leaves behind whenever Meta rejects the ad step. Set true to list those too, with `adCount: 0` and zeroed metrics. Requires `accountId` and `adAccountId`, since an empty campaign has no ad row to resolve a token or ad account from.
$page = 1; // int | Page number (1-based)
$limit = 20; // int
$source = 'all'; // string | `all` (default) returns both Zernio-created ads and those discovered from the platform's ad manager. Matches the web UI's default view. Pass `zernio` to restrict to isExternal=false only. Status is NOT filtered by default; use the `status` param for that.
$platform = 'platform_example'; // string
$status = new \Zernio\Model\\Zernio\Model\AdStatus(); // \Zernio\Model\AdStatus | Filter by derived campaign status (post-aggregation)
$ad_account_id = 'ad_account_id_example'; // string | Platform ad account ID (e.g. act_123 for Meta)
$page_id = 'page_id_example'; // string | Meta only: Facebook Page ID. Campaigns have no Page of their own, so this keeps campaigns having at least one ad backed by this Page, with adCount and metrics computed over those ads only. Mirrors the same filter on /v1/ads and /v1/ads/tree.
$account_id = 'account_id_example'; // string | Account ID
$profile_id = 'profile_id_example'; // string | Profile ID
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start of metrics date range (YYYY-MM-DD, inclusive). Defaults to 90 days ago when both date params are omitted.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End of metrics date range (YYYY-MM-DD, inclusive). Defaults to today. Max 730-day range.
$has_delivery = True; // bool | Return only campaigns that delivered between `fromDate` and `toDate`: spend above zero, or impressions served at zero spend. Unlike `status`, which reads a campaign's CURRENT state, this filters on what happened inside the window. Filters the campaign set itself, so `pagination.total` counts only matching campaigns. Mirrors the same filter on /v1/ads/tree.
$min_spend = 3.4; // float | Return only campaigns whose spend between `fromDate` and `toDate` reaches this amount, in each campaign's OWN currency (the `currency` field on the campaign). Implies `hasDelivery`; `minSpend=0` applies no filter. Mirrors the same filter on /v1/ads/tree.

try {
    $result = $apiInstance->listAdCampaigns($include_empty, $page, $limit, $source, $platform, $status, $ad_account_id, $page_id, $account_id, $profile_id, $from_date, $to_date, $has_delivery, $min_spend);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->listAdCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **include_empty** | **bool**| Meta only. Campaign reads aggregate over ad documents, so a campaign with ZERO ads is normally invisible here, the state the two-step create (campaign, then ads via &#x60;existingCampaignId&#x60;) leaves behind whenever Meta rejects the ad step. Set true to list those too, with &#x60;adCount: 0&#x60; and zeroed metrics. Requires &#x60;accountId&#x60; and &#x60;adAccountId&#x60;, since an empty campaign has no ad row to resolve a token or ad account from. | [optional] |
| **page** | **int**| Page number (1-based) | [optional] [default to 1] |
| **limit** | **int**|  | [optional] [default to 20] |
| **source** | **string**| &#x60;all&#x60; (default) returns both Zernio-created ads and those discovered from the platform&#39;s ad manager. Matches the web UI&#39;s default view. Pass &#x60;zernio&#x60; to restrict to isExternal&#x3D;false only. Status is NOT filtered by default; use the &#x60;status&#x60; param for that. | [optional] [default to &#39;all&#39;] |
| **platform** | **string**|  | [optional] |
| **status** | [**\Zernio\Model\AdStatus**](../Model/.md)| Filter by derived campaign status (post-aggregation) | [optional] |
| **ad_account_id** | **string**| Platform ad account ID (e.g. act_123 for Meta) | [optional] |
| **page_id** | **string**| Meta only: Facebook Page ID. Campaigns have no Page of their own, so this keeps campaigns having at least one ad backed by this Page, with adCount and metrics computed over those ads only. Mirrors the same filter on /v1/ads and /v1/ads/tree. | [optional] |
| **account_id** | **string**| Account ID | [optional] |
| **profile_id** | **string**| Profile ID | [optional] |
| **from_date** | **\DateTime**| Start of metrics date range (YYYY-MM-DD, inclusive). Defaults to 90 days ago when both date params are omitted. | [optional] |
| **to_date** | **\DateTime**| End of metrics date range (YYYY-MM-DD, inclusive). Defaults to today. Max 730-day range. | [optional] |
| **has_delivery** | **bool**| Return only campaigns that delivered between &#x60;fromDate&#x60; and &#x60;toDate&#x60;: spend above zero, or impressions served at zero spend. Unlike &#x60;status&#x60;, which reads a campaign&#39;s CURRENT state, this filters on what happened inside the window. Filters the campaign set itself, so &#x60;pagination.total&#x60; counts only matching campaigns. Mirrors the same filter on /v1/ads/tree. | [optional] |
| **min_spend** | **float**| Return only campaigns whose spend between &#x60;fromDate&#x60; and &#x60;toDate&#x60; reaches this amount, in each campaign&#39;s OWN currency (the &#x60;currency&#x60; field on the campaign). Implies &#x60;hasDelivery&#x60;; &#x60;minSpend&#x3D;0&#x60; applies no filter. Mirrors the same filter on /v1/ads/tree. | [optional] |

### Return type

[**\Zernio\Model\ListAdCampaigns200Response**](../Model/ListAdCampaigns200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAdKeywords()`

```php
listAdKeywords($page, $limit, $account_id, $ad_account_id, $profile_id, $campaign_id, $ad_set_id, $status, $match_type, $negative, $search): \Zernio\Model\ListAdKeywords200Response
```

List Search keywords

Returns the Google Search keyword criteria (positive and negative) synced from connected Google Ads accounts, one row per ad-group keyword. Refreshed about once a week per Google Ads customer (the keyword sweep rides the ads discovery pass on a slower slot, to stay inside Google's shared daily API quota), so keywords added on Google can take several days to appear. A customer synced for the first time is populated on the next discovery pass rather than waiting for its weekly slot, and connecting an account or triggering a manual sync refreshes it immediately. Campaign-level negative keywords are not included; only ad-group-level criteria are.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number (1-based)
$limit = 50; // int
$account_id = 'account_id_example'; // string | Account ID
$ad_account_id = 'ad_account_id_example'; // string | Platform ad account ID (Google customer ID). Mirrors the same filter on /v1/ads.
$profile_id = 'profile_id_example'; // string | Profile ID
$campaign_id = 'campaign_id_example'; // string | Platform campaign ID
$ad_set_id = 'ad_set_id_example'; // string | Platform ad group ID (Google ad group)
$status = 'status_example'; // string | Keyword criterion status
$match_type = 'match_type_example'; // string
$negative = True; // bool | true = negative keywords only, false = positive only. Omit for both.
$search = 'search_example'; // string | Case-insensitive substring match on the keyword text

try {
    $result = $apiInstance->listAdKeywords($page, $limit, $account_id, $ad_account_id, $profile_id, $campaign_id, $ad_set_id, $status, $match_type, $negative, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->listAdKeywords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number (1-based) | [optional] [default to 1] |
| **limit** | **int**|  | [optional] [default to 50] |
| **account_id** | **string**| Account ID | [optional] |
| **ad_account_id** | **string**| Platform ad account ID (Google customer ID). Mirrors the same filter on /v1/ads. | [optional] |
| **profile_id** | **string**| Profile ID | [optional] |
| **campaign_id** | **string**| Platform campaign ID | [optional] |
| **ad_set_id** | **string**| Platform ad group ID (Google ad group) | [optional] |
| **status** | **string**| Keyword criterion status | [optional] |
| **match_type** | **string**|  | [optional] |
| **negative** | **bool**| true &#x3D; negative keywords only, false &#x3D; positive only. Omit for both. | [optional] |
| **search** | **string**| Case-insensitive substring match on the keyword text | [optional] |

### Return type

[**\Zernio\Model\ListAdKeywords200Response**](../Model/ListAdKeywords200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAdSets()`

```php
listAdSets($account_id, $campaign_id, $platform): \Zernio\Model\ListAdSets200Response
```

List ad sets

Ad sets (Google ad groups) synced for the connection, optionally filtered by platform and campaignId. Reads the `ad_sets` table directly, independent of the `ads` rollup GET /v1/ads/tree uses, so a newly created standalone ad group with no ad yet (POST /v1/ads/ad-sets, Google only) is visible here even though it is invisible in the tree until an ad joins it via `adSetId` on POST /v1/ads/create. Returns at most 500 rows, newest first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID
$campaign_id = 'campaign_id_example'; // string | Platform campaign ID
$platform = 'platform_example'; // string

try {
    $result = $apiInstance->listAdSets($account_id, $campaign_id, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->listAdSets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account ID | [optional] |
| **campaign_id** | **string**| Platform campaign ID | [optional] |
| **platform** | **string**|  | [optional] |

### Return type

[**\Zernio\Model\ListAdSets200Response**](../Model/ListAdSets200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAds()`

```php
listAds($page, $limit, $source, $status, $platform, $account_id, $ad_account_id, $page_id, $profile_id, $campaign_id, $ad_set_id, $platform_ad_id, $effective_object_story_id, $effective_instagram_media_id, $from_date, $to_date): \Zernio\Model\AdsListResponse
```

List ads

Returns a paginated list of ads with metrics computed over an optional date range. Use source=all to include externally-synced ads from platform ad managers. If no date range is provided, defaults to the last 90 days. Date range is capped at 730 days max.  To find the Zernio ad behind a comment you see in Meta Business Manager, filter by platformAdId (the Meta ad ID), effectiveObjectStoryId (Facebook), or effectiveInstagramMediaId (Instagram). Those are the post/media the ad's engagement lives on, and are also returned on each ad's `creative` object. Then call GET /v1/ads/{adId}/comments with the returned ad id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number (1-based)
$limit = 50; // int
$source = 'all'; // string | all (default) = Zernio-created + platform-discovered ads. zernio = restrict to Zernio-created only.
$status = new \Zernio\Model\\Zernio\Model\AdStatus(); // \Zernio\Model\AdStatus
$platform = 'platform_example'; // string
$account_id = 'account_id_example'; // string | Account ID
$ad_account_id = 'ad_account_id_example'; // string | Platform ad account ID (e.g. act_123 for Meta). Mirrors the same filter on /v1/ads/campaigns and /v1/ads/tree.
$page_id = 'page_id_example'; // string | Meta only: Facebook Page ID. Returns only ads whose creative is backed by this Page (a Meta ad account serves ads for every Page in the Business Manager). Matches each ad's `creative.pageId`; ads with no page signal (rare IG-only creatives) never match. Mirrors the same filter on /v1/ads/campaigns and /v1/ads/tree.
$profile_id = 'profile_id_example'; // string | Profile ID
$campaign_id = 'campaign_id_example'; // string | Platform campaign ID (filter ads within a campaign)
$ad_set_id = 'ad_set_id_example'; // string | Platform ad set ID (filter ads within an ad set, the /{adset_id}/ads read of an adset-centric dashboard).
$platform_ad_id = 'platform_ad_id_example'; // string | Meta ad ID. Returns the ad with this platform-side ad ID.
$effective_object_story_id = 'effective_object_story_id_example'; // string | Facebook `{pageId}_{postId}` of the post the ad's engagement lives on (Meta `effective_object_story_id`). Use to map a Business-Manager-visible post back to the Zernio ad.
$effective_instagram_media_id = 'effective_instagram_media_id_example'; // string | Instagram media ID of the boosted post (Meta `effective_instagram_media_id`). Use to map a Business-Manager-visible IG post back to the Zernio ad.
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start of metrics date range (YYYY-MM-DD). Defaults to 90 days ago.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End of metrics date range (YYYY-MM-DD). Defaults to today. Max 730-day range.

try {
    $result = $apiInstance->listAds($page, $limit, $source, $status, $platform, $account_id, $ad_account_id, $page_id, $profile_id, $campaign_id, $ad_set_id, $platform_ad_id, $effective_object_story_id, $effective_instagram_media_id, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->listAds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number (1-based) | [optional] [default to 1] |
| **limit** | **int**|  | [optional] [default to 50] |
| **source** | **string**| all (default) &#x3D; Zernio-created + platform-discovered ads. zernio &#x3D; restrict to Zernio-created only. | [optional] [default to &#39;all&#39;] |
| **status** | [**\Zernio\Model\AdStatus**](../Model/.md)|  | [optional] |
| **platform** | **string**|  | [optional] |
| **account_id** | **string**| Account ID | [optional] |
| **ad_account_id** | **string**| Platform ad account ID (e.g. act_123 for Meta). Mirrors the same filter on /v1/ads/campaigns and /v1/ads/tree. | [optional] |
| **page_id** | **string**| Meta only: Facebook Page ID. Returns only ads whose creative is backed by this Page (a Meta ad account serves ads for every Page in the Business Manager). Matches each ad&#39;s &#x60;creative.pageId&#x60;; ads with no page signal (rare IG-only creatives) never match. Mirrors the same filter on /v1/ads/campaigns and /v1/ads/tree. | [optional] |
| **profile_id** | **string**| Profile ID | [optional] |
| **campaign_id** | **string**| Platform campaign ID (filter ads within a campaign) | [optional] |
| **ad_set_id** | **string**| Platform ad set ID (filter ads within an ad set, the /{adset_id}/ads read of an adset-centric dashboard). | [optional] |
| **platform_ad_id** | **string**| Meta ad ID. Returns the ad with this platform-side ad ID. | [optional] |
| **effective_object_story_id** | **string**| Facebook &#x60;{pageId}_{postId}&#x60; of the post the ad&#39;s engagement lives on (Meta &#x60;effective_object_story_id&#x60;). Use to map a Business-Manager-visible post back to the Zernio ad. | [optional] |
| **effective_instagram_media_id** | **string**| Instagram media ID of the boosted post (Meta &#x60;effective_instagram_media_id&#x60;). Use to map a Business-Manager-visible IG post back to the Zernio ad. | [optional] |
| **from_date** | **\DateTime**| Start of metrics date range (YYYY-MM-DD). Defaults to 90 days ago. | [optional] |
| **to_date** | **\DateTime**| End of metrics date range (YYYY-MM-DD). Defaults to today. Max 730-day range. | [optional] |

### Return type

[**\Zernio\Model\AdsListResponse**](../Model/AdsListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBidStrategies()`

```php
listBidStrategies($account_id, $customer_id, $from_date, $to_date): \Zernio\Model\ListBidStrategies200Response
```

List Google Ads portfolio bid strategies

Bidding strategy report: type, status, campaign count, clicks, cost, cost per conversion, impressions, average CPC and conversions over the date range (default last 30 days). Reads Google's `bidding_strategy` resource, cached for the quota window. Draws on the shared Google Ads operations budget. The response carries `cachedAt` and `stale`, set when a quota-exhausted call falls back to the last-good copy instead of a live read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Google ads SocialAccount id.
$customer_id = 'customer_id_example'; // string | Numeric Google Ads customer id (no dashes). Defaults to the account's connected customer.
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Defaults to 30 days ago.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Defaults to today.

try {
    $result = $apiInstance->listBidStrategies($account_id, $customer_id, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->listBidStrategies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Google ads SocialAccount id. | |
| **customer_id** | **string**| Numeric Google Ads customer id (no dashes). Defaults to the account&#39;s connected customer. | [optional] |
| **from_date** | **\DateTime**| Defaults to 30 days ago. | [optional] |
| **to_date** | **\DateTime**| Defaults to today. | [optional] |

### Return type

[**\Zernio\Model\ListBidStrategies200Response**](../Model/ListBidStrategies200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCampaignNegativeKeywordLists()`

```php
listCampaignNegativeKeywordLists($campaign_id, $platform): \Zernio\Model\ListAdNegativeKeywordLists200Response
```

List campaign negative lists

Returns shared negative keyword lists attached to the campaign, separate from campaign-level negative keywords. Google Ads shared negative keyword lists (shared_set type NEGATIVE_KEYWORDS). Reads are cached for 10 minutes; quota exhaustion may return the last successful result for up to 7 days with stale=true. Customer selection is limited to this connection and its account scope.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string
$platform = 'platform_example'; // string

try {
    $result = $apiInstance->listCampaignNegativeKeywordLists($campaign_id, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->listCampaignNegativeKeywordLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**|  | |
| **platform** | **string**|  | [optional] |

### Return type

[**\Zernio\Model\ListAdNegativeKeywordLists200Response**](../Model/ListAdNegativeKeywordLists200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCampaignNegativeKeywords()`

```php
listCampaignNegativeKeywords($campaign_id, $platform): \Zernio\Model\ListCampaignNegativeKeywords200Response
```

List campaign-level negative keywords

Returns the campaign-level negative keywords (`campaign_criterion.negative`), distinct from the ad-group-level negatives under `GET /v1/ads/keywords`. Cached for the quota window (not synced to Postgres), and gated by the shared Google Ads operations budget like every other on-demand Google surface. The response carries `cachedAt` and `stale`, set when a quota-exhausted call falls back to the last-good copy instead of a live read.  The platform is always discovered from the campaign itself; a non-Google campaign returns 501 rather than 404, whether or not `platform` was passed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Platform campaign ID
$platform = 'platform_example'; // string | Optional and NOT authoritative: the resolved campaign's own platform decides 200 vs 501, never this hint.

try {
    $result = $apiInstance->listCampaignNegativeKeywords($campaign_id, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->listCampaignNegativeKeywords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Platform campaign ID | |
| **platform** | **string**| Optional and NOT authoritative: the resolved campaign&#39;s own platform decides 200 vs 501, never this hint. | [optional] |

### Return type

[**\Zernio\Model\ListCampaignNegativeKeywords200Response**](../Model/ListCampaignNegativeKeywords200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeAdKeyword()`

```php
removeAdKeyword($keyword_id): \Zernio\Model\RemoveAdKeyword200Response
```

Remove a Search keyword

Removes one keyword criterion (positive or negative) from its ad group (M.140).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keyword_id = 'keyword_id_example'; // string | Zernio keyword ID (not the Google criterion ID)

try {
    $result = $apiInstance->removeAdKeyword($keyword_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->removeAdKeyword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **keyword_id** | **string**| Zernio keyword ID (not the Google criterion ID) | |

### Return type

[**\Zernio\Model\RemoveAdKeyword200Response**](../Model/RemoveAdKeyword200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replaceCampaignNegativeKeywordLists()`

```php
replaceCampaignNegativeKeywordLists($campaign_id, $replace_campaign_negative_keyword_lists_request): \Zernio\Model\ReplaceAdNegativeKeywordListKeywords200Response
```

Replace campaign negative lists

Sets the full desired set of shared negative keyword list associations on this campaign. Send listIds=[] to detach all negative keyword lists. Only campaign_shared_set links are changed; the lists and their keywords are preserved. Every list must belong to the campaign customer and have type NEGATIVE_KEYWORDS.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string
$replace_campaign_negative_keyword_lists_request = {"platform":"google","listIds":["1234567890"]}; // \Zernio\Model\ReplaceCampaignNegativeKeywordListsRequest

try {
    $result = $apiInstance->replaceCampaignNegativeKeywordLists($campaign_id, $replace_campaign_negative_keyword_lists_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->replaceCampaignNegativeKeywordLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**|  | |
| **replace_campaign_negative_keyword_lists_request** | [**\Zernio\Model\ReplaceCampaignNegativeKeywordListsRequest**](../Model/ReplaceCampaignNegativeKeywordListsRequest.md)|  | |

### Return type

[**\Zernio\Model\ReplaceAdNegativeKeywordListKeywords200Response**](../Model/ReplaceAdNegativeKeywordListKeywords200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replaceCampaignNegativeKeywords()`

```php
replaceCampaignNegativeKeywords($campaign_id, $replace_campaign_negative_keywords_request): \Zernio\Model\ReplaceCampaignNegativeKeywords200Response
```

Replace campaign-level negative keywords

Replaces the FULL set of campaign-level negative keywords (C.270): the desired list is diffed against what Google already has, and the difference is applied as one `create`/`remove` mutate. Send an empty array to clear every campaign negative.  The platform is always discovered from the campaign itself; a non-Google campaign returns 501 rather than 404, whether or not `platform` was sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Platform campaign ID
$replace_campaign_negative_keywords_request = new \Zernio\Model\ReplaceCampaignNegativeKeywordsRequest(); // \Zernio\Model\ReplaceCampaignNegativeKeywordsRequest

try {
    $result = $apiInstance->replaceCampaignNegativeKeywords($campaign_id, $replace_campaign_negative_keywords_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->replaceCampaignNegativeKeywords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Platform campaign ID | |
| **replace_campaign_negative_keywords_request** | [**\Zernio\Model\ReplaceCampaignNegativeKeywordsRequest**](../Model/ReplaceCampaignNegativeKeywordsRequest.md)|  | |

### Return type

[**\Zernio\Model\ReplaceCampaignNegativeKeywords200Response**](../Model/ReplaceCampaignNegativeKeywords200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAd()`

```php
updateAd($ad_id, $update_ad_request): \Zernio\Model\UpdateAd200Response
```

Update ad

Patch one or more fields on an ad. Status, budget, targeting, and creative changes are propagated to the platform.  Per-platform support: - **Meta** (Facebook + Instagram): all fields supported. - **TikTok**: status, budget, targeting (via `/v2/adgroup/update/`), and creative   (via `/v2/ad/update/` patch-style: `headline` is ignored, `body` becomes `ad_text`). - **Google**: status, budget, KEYWORD edits via `targeting.keywords` /   `targeting.negativeKeywords`, and DEVICE bid adjustments via `targeting.devices`.   Each list you send becomes the FULL new set of its kind (criteria not in the   list are removed); a kind left out is untouched. Any other `targeting` field   returns 400: Google cannot mutate broad targeting post-create without recreating   the campaign. `creative` returns 501. - **LinkedIn**: status, budget, targeting (countries or regions, excludedLocations (countries),   the B2B facets, and audience segments; applied to the LinkedIn Campaign via   PARTIAL_UPDATE, and REPLACES the campaign's entire targetingCriteria, not a merge),   and creative (uploads new media, creates a replacement inline creative on the same   campaign, pauses the old one). - **Pinterest / X / OpenAI Ads**: status + budget only. Sending   `targeting` or `creative` returns 501 with code `unsupported_platform_operation`.   OpenAI Ads budget is lifetime-only (see `budget.type` below).  **Google keyword replacement:** These edits affect the ad's entire ad group, including sibling ads. Positive (`targeting.keywords`) and negative (`targeting.negativeKeywords`) sets are independent: omit a field to leave that set unchanged, or send `[]` to remove every keyword of that kind.  Zernio compares each supplied set with Google's live criteria by case-insensitive keyword text and match type. A matching criterion is left untouched, retaining its criterion ID, enabled/paused status, keyword-level bid overrides, labels, and criterion-associated history/statistics. Zernio does not reset its quality score; Google continues to calculate scores and statistics normally. Text comparison does not trim whitespace.  A bare string or an object without `matchType` means `broad`, not the existing criterion's match type. For example, resending an existing `{ \"text\": \"plumber\", \"matchType\": \"exact\" }` preserves it; sending `\"plumber\"` instead removes that EXACT criterion and requests a BROAD one. Changing text or match type removes criteria no longer requested and creates any missing criteria. New criteria get new IDs and do not inherit removed criteria's bid overrides, labels, or history. Historical reporting for a removed criterion is not transferred to its replacement.  To add keywords without replacing a set, use [POST /v1/ads/keywords](https://docs.zernio.com/ad-campaigns/add-ad-keywords). Use `PATCH /v1/ads/keywords/{keywordId}` to pause/enable one keyword, or `DELETE /v1/ads/keywords/{keywordId}` to remove it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_id = 'ad_id_example'; // string
$update_ad_request = {"creative":{"promotion":null,"creativeFeatures":{"auto_promotion_tag":"OPT_OUT"}}}; // \Zernio\Model\UpdateAdRequest

try {
    $result = $apiInstance->updateAd($ad_id, $update_ad_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->updateAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**|  | |
| **update_ad_request** | [**\Zernio\Model\UpdateAdRequest**](../Model/UpdateAdRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateAd200Response**](../Model/UpdateAd200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAdCampaign()`

```php
updateAdCampaign($campaign_id, $update_ad_campaign_request): \Zernio\Model\UpdateAdCampaign200Response
```

Update a campaign

Campaign-level edits. Send at least one of `budget`, `bidStrategy`, `portfolioBidStrategyId`, `name` or `platformSpecificData`. An unsupported field is always an error, never a silent drop.  | Body field | Meta | Google | Others | |---|---|---|---| | `bidStrategy` | Yes | Yes | 501 | | `bidAmount`, `roasAverageFloor` | 400 (ad-set level) | Yes | 400 | | `portfolioBidStrategyId` | 400 | Yes | 400 | | `budget` (CBO; ABO returns 409) | Yes | Daily only | 501 | | `name` | Yes | 501 | 501 | | `platformSpecificData.spendCap` | Yes | 400 | 400 | | `accountId` (empty campaigns) | Yes | - | - |  On Google: `LOWEST_COST_WITHOUT_CAP` = Maximize Conversions, `COST_CAP` + `bidAmount` = Target CPA, `LOWEST_COST_WITH_MIN_ROAS` + `roasAverageFloor` = Target ROAS, `LOWEST_COST_WITH_BID_CAP` + `bidAmount` = Maximize Clicks with a CPC ceiling; `portfolioBidStrategyId` attaches a portfolio strategy instead (exclusive with `bidStrategy`). Setting the standard triplet on a campaign that is currently on a PORTFOLIO strategy is rejected: detach it in Google Ads first, since it is shared across campaigns.  Google budget updates read the current budget before mutation. Shared budgets return 409 unless allowSharedBudgetUpdate=true is explicitly supplied, because the change affects every campaign using that budget. Unknown sharing state also returns 409.  `accountId` forwards the update straight to Meta for a campaign with zero ads, which would otherwise 404; the response then carries `updated: 0`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Platform campaign ID
$update_ad_campaign_request = {"platform":"google","budget":{"amount":5,"type":"daily"},"allowSharedBudgetUpdate":false}; // \Zernio\Model\UpdateAdCampaignRequest

try {
    $result = $apiInstance->updateAdCampaign($campaign_id, $update_ad_campaign_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->updateAdCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Platform campaign ID | |
| **update_ad_campaign_request** | [**\Zernio\Model\UpdateAdCampaignRequest**](../Model/UpdateAdCampaignRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateAdCampaign200Response**](../Model/UpdateAdCampaign200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAdCampaignStatus()`

```php
updateAdCampaignStatus($campaign_id, $update_ad_campaign_status_request): \Zernio\Model\UpdateAdCampaignStatus200Response
```

Pause or resume a campaign

Writes the campaign's own on/off switch, then lets the platform cascade delivery to its ad sets and ads. Makes one platform API call, not one per ad.  The switch is always written, whatever delivery status the ads underneath report: an ad still in review does not block resuming its campaign. The echoed `status` is the confirmation that it landed.  `updated` / `skipped` describe only the ads whose own stored status CHANGED alongside it, so `updated: 0` is a normal successful response, not a no-op. Ads are skipped when they are in a terminal status (rejected, completed, cancelled), already in the target state, or switched on but not yet delivering. The last group keeps its `pending_review` / `error` status until the platform reports what it became. `skippedReasons` names which case applies.  On Meta this flips the campaign only. An ad set paused in its own right stays paused, so pair this with PUT /v1/ads/ad-sets/{adSetId}/status when you also need the ad set switched back on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Platform campaign ID
$update_ad_campaign_status_request = new \Zernio\Model\UpdateAdCampaignStatusRequest(); // \Zernio\Model\UpdateAdCampaignStatusRequest

try {
    $result = $apiInstance->updateAdCampaignStatus($campaign_id, $update_ad_campaign_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->updateAdCampaignStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Platform campaign ID | |
| **update_ad_campaign_status_request** | [**\Zernio\Model\UpdateAdCampaignStatusRequest**](../Model/UpdateAdCampaignStatusRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateAdCampaignStatus200Response**](../Model/UpdateAdCampaignStatus200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAdKeyword()`

```php
updateAdKeyword($keyword_id, $update_ad_keyword_request): \Zernio\Model\UpdateAdKeyword200Response
```

Pause or enable a Search keyword

Changes `ad_group_criterion.status` for one keyword criterion (M.140). Negative keywords have no status on Google and cannot be paused or enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keyword_id = 'keyword_id_example'; // string | Zernio keyword ID (not the Google criterion ID)
$update_ad_keyword_request = new \Zernio\Model\UpdateAdKeywordRequest(); // \Zernio\Model\UpdateAdKeywordRequest

try {
    $result = $apiInstance->updateAdKeyword($keyword_id, $update_ad_keyword_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->updateAdKeyword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **keyword_id** | **string**| Zernio keyword ID (not the Google criterion ID) | |
| **update_ad_keyword_request** | [**\Zernio\Model\UpdateAdKeywordRequest**](../Model/UpdateAdKeywordRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateAdKeyword200Response**](../Model/UpdateAdKeyword200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAdSet()`

```php
updateAdSet($ad_set_id, $update_ad_set_request): \Zernio\Model\UpdateAdSet200Response
```

Update an ad set

Ad-set-level writes. Use this for ABO budget updates, ad-set-scoped pause/resume, bid-strategy edits, Meta value-rule-set attach/detach, and Meta-only post-launch delivery settings via `platformSpecificData`. At least one updatable field is required.  Value rule sets (Meta only, see `/v1/ads/value-rule-sets`): - ATTACH or REPLACE: send `valueRuleSetId`. Attachment is driven by the id's   presence, so `valueRulesApplied: true` is optional. Sending a different id   replaces the previous association; there is no separate replace call. - DETACH: send `valueRulesApplied: false` and OMIT `valueRuleSetId`. - Sending `valueRulesApplied: false` TOGETHER with `valueRuleSetId` returns 400   `mutually_exclusive_fields`. This is deliberate: Meta attaches the rule set   whenever `value_rule_set_id` is present, even with `value_rules_applied` false,   so echoing stored state while asking to detach would silently keep the bid   adjustments live. - Eligibility: only ad sets on `LOWEST_COST_WITHOUT_CAP` or `COST_CAP`. Meta   rejects the rest server-side. - Read back with `GET /v1/ads/ad-sets/{adSetId}?fields=value_rule_set_id`. Meta   does not document `value_rules_applied` as a readable ad-set field, so the   boolean cannot be read back.  Bid strategy compatibility (per Meta's spec): - `LOWEST_COST_WITHOUT_CAP`: no `bidAmount`, no `roasAverageFloor`. - `LOWEST_COST_WITH_BID_CAP` / `COST_CAP`: `bidAmount` REQUIRED (whole currency units). - `LOWEST_COST_WITH_MIN_ROAS`: `roasAverageFloor` REQUIRED (decimal multiplier, e.g. 2.0 = 2.0x ROAS). - Meta only: send `bidAmount` WITHOUT `bidStrategy` to change the cap amount on an ad set   under a COST_CAP / LOWEST_COST_WITH_BID_CAP parent campaign, leaving the strategy itself   (inherited from the campaign) untouched. `roasAverageFloor` without `bidStrategy` is   rejected (it has no meaning outside LOWEST_COST_WITH_MIN_ROAS).  Delivery settings are validated by Meta against the campaign objective; incompatible combinations (e.g. a billingEvent the optimization goal doesn't allow) surface as 400s from Meta.  When updating `budget` on an ABO campaign: if the parent campaign is CBO, the response is 409 with code BUDGET_LEVEL_MISMATCH. Route to PUT /v1/ads/campaigns/{campaignId} instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_set_id = 'ad_set_id_example'; // string | Platform ad set ID
$update_ad_set_request = new \Zernio\Model\UpdateAdSetRequest(); // \Zernio\Model\UpdateAdSetRequest

try {
    $result = $apiInstance->updateAdSet($ad_set_id, $update_ad_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->updateAdSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_set_id** | **string**| Platform ad set ID | |
| **update_ad_set_request** | [**\Zernio\Model\UpdateAdSetRequest**](../Model/UpdateAdSetRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateAdSet200Response**](../Model/UpdateAdSet200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAdSetStatus()`

```php
updateAdSetStatus($ad_set_id, $update_ad_campaign_status_request): \Zernio\Model\UpdateAdSetStatus200Response
```

Pause or resume a single ad set

Ad-set-scoped pause/resume (doesn't touch sibling ad sets). Thin wrapper over PUT /v1/ads/ad-sets/{adSetId} for callers that only want the status toggle and prefer a symmetric URL to /v1/ads/campaigns/{campaignId}/status.  On Meta and LinkedIn this writes the ad set's own on/off switch (Meta: `configured_status`), whatever delivery status its ads report: an ad still in review does not block resuming its ad set. The echoed `status` is the confirmation that it landed. Where the platform has no ad-set switch (TikTok and others) the toggle is emulated by flipping the child ads; a call with no actionable ad then writes nothing and returns a `message` with no `status`.  `updated` / `skipped` describe only the ads whose own stored status CHANGED alongside the switch, so `updated: 0` is a normal successful response. See `skippedReasons` for which of the three cases applies (terminal, already in the target state, or switched on but not yet delivering).  A campaign created paused needs its campaign resumed as well: pair this with PUT /v1/ads/campaigns/{campaignId}/status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_set_id = 'ad_set_id_example'; // string | Platform ad set ID
$update_ad_campaign_status_request = new \Zernio\Model\UpdateAdCampaignStatusRequest(); // \Zernio\Model\UpdateAdCampaignStatusRequest

try {
    $result = $apiInstance->updateAdSetStatus($ad_set_id, $update_ad_campaign_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->updateAdSetStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_set_id** | **string**| Platform ad set ID | |
| **update_ad_campaign_status_request** | [**\Zernio\Model\UpdateAdCampaignStatusRequest**](../Model/UpdateAdCampaignStatusRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateAdSetStatus200Response**](../Model/UpdateAdSetStatus200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAdStatus()`

```php
updateAdStatus($ad_id, $update_ad_keyword_request): \Zernio\Model\UpdateAdStatus200Response
```

Pause or resume a single ad

Ad-scoped pause/resume: touches ONLY this ad, never its parent ad set or campaign (so sibling ads keep running). Thin wrapper over the `status` field of PUT /v1/ads/{adId}, for callers that want a URL symmetric to /v1/ads/campaigns/{campaignId}/status and /v1/ads/ad-sets/{adSetId}/status.  `{adId}` accepts the same identifier dialects as GET/PUT /v1/ads/{adId} (Zernio hex `_id`, Meta numeric `platformAdId`, or the creative's effective story/media IDs). `platform` is inferred from the ad, so it's not required in the body. Ads in terminal statuses (rejected, completed, cancelled) and no-op flips (already in the target state) are skipped.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_id = 'ad_id_example'; // string | Zernio `_id` (hex), Meta `platformAdId` (numeric), or one of the creative's effective story/media IDs.
$update_ad_keyword_request = new \Zernio\Model\UpdateAdKeywordRequest(); // \Zernio\Model\UpdateAdKeywordRequest

try {
    $result = $apiInstance->updateAdStatus($ad_id, $update_ad_keyword_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->updateAdStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**| Zernio &#x60;_id&#x60; (hex), Meta &#x60;platformAdId&#x60; (numeric), or one of the creative&#39;s effective story/media IDs. | |
| **update_ad_keyword_request** | [**\Zernio\Model\UpdateAdKeywordRequest**](../Model/UpdateAdKeywordRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateAdStatus200Response**](../Model/UpdateAdStatus200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBidStrategy()`

```php
updateBidStrategy($strategy_id, $update_bid_strategy_request): \Zernio\Model\UpdateBidStrategy200Response
```

Update a Google Ads portfolio bid strategy

Renames or retargets a portfolio bid strategy. The strategy's status is output only on Google's side, so it cannot be changed here; remove a strategy in Google Ads. `type` is only needed alongside `targetCpa`/`targetRoas` to disambiguate the field Google writes to (TARGET_CPA and MAXIMIZE_CONVERSIONS both take a target CPA; TARGET_ROAS and MAXIMIZE_CONVERSION_VALUE both take a target ROAS); the strategy's family is otherwise immutable once created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strategy_id = 'strategy_id_example'; // string | Numeric Google Ads bid strategy id.
$update_bid_strategy_request = new \Zernio\Model\UpdateBidStrategyRequest(); // \Zernio\Model\UpdateBidStrategyRequest

try {
    $result = $apiInstance->updateBidStrategy($strategy_id, $update_bid_strategy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->updateBidStrategy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **strategy_id** | **string**| Numeric Google Ads bid strategy id. | |
| **update_bid_strategy_request** | [**\Zernio\Model\UpdateBidStrategyRequest**](../Model/UpdateBidStrategyRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateBidStrategy200Response**](../Model/UpdateBidStrategy200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCampaignTargeting()`

```php
updateCampaignTargeting($campaign_id, $update_campaign_targeting_request): \Zernio\Model\UpdateCampaignTargeting200Response
```

Edit a Google campaign's device, location, or language targeting

Google Ads compliance row M.10: geo and language targeting set at creation must stay editable afterwards. Send at least one of `devices`, `locations`, `languages`; each provided field REPLACES that field's existing criteria on the campaign (a full set, not a delta). Fields left out of the body are untouched. Google only; every other platform returns 501.  `locations` accepts the same shapes as campaign creation: a bare array of ISO country codes, or an object with `countries`/`regions`/`cities`/`zips`/`metros` key lists (`key` from GET /v1/ads/targeting/search?dimension=geo). Negative (excluded) locations are left untouched by this endpoint.  `languages` is an array of Google's language codes (ISO 639-1, plus variants such as `zh_CN`); an unknown code returns 400.  The response includes the refreshed `devices`/`locations`/`languages` state read back from Google after the edit, and invalidates the cached copy `GET` on this campaign would otherwise keep serving.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Google platform campaign ID
$update_campaign_targeting_request = new \Zernio\Model\UpdateCampaignTargetingRequest(); // \Zernio\Model\UpdateCampaignTargetingRequest

try {
    $result = $apiInstance->updateCampaignTargeting($campaign_id, $update_campaign_targeting_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->updateCampaignTargeting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Google platform campaign ID | |
| **update_campaign_targeting_request** | [**\Zernio\Model\UpdateCampaignTargetingRequest**](../Model/UpdateCampaignTargetingRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateCampaignTargeting200Response**](../Model/UpdateCampaignTargeting200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
