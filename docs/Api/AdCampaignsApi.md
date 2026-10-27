# Zernio\AdCampaignsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addAdKeywords()**](AdCampaignsApi.md#addAdKeywords) | **POST** /v1/ads/keywords | Add Search ad-group keywords |
| [**applyGoogleRecommendations()**](AdCampaignsApi.md#applyGoogleRecommendations) | **POST** /v1/ads/recommendations/apply | Apply Google Ads recommendations |
| [**attachAdGroupAssets()**](AdCampaignsApi.md#attachAdGroupAssets) | **POST** /v1/ads/ad-sets/{adSetId}/assets | Attach ad-group assets |
| [**attachCampaignAssets()**](AdCampaignsApi.md#attachCampaignAssets) | **POST** /v1/ads/campaigns/{campaignId}/assets | Attach campaign assets |
| [**boostPost()**](AdCampaignsApi.md#boostPost) | **POST** /v1/ads/boost | Boost post as ad |
| [**bulkUpdateAdCampaignStatus()**](AdCampaignsApi.md#bulkUpdateAdCampaignStatus) | **POST** /v1/ads/campaigns/bulk-status | Pause or resume many campaigns |
| [**createAdCampaign()**](AdCampaignsApi.md#createAdCampaign) | **POST** /v1/ads/campaigns | Create a standalone campaign |
| [**createAdSet()**](AdCampaignsApi.md#createAdSet) | **POST** /v1/ads/ad-sets | Create a standalone ad group |
| [**createBidStrategy()**](AdCampaignsApi.md#createBidStrategy) | **POST** /v1/ads/bid-strategies | Create portfolio bid strategy |
| [**createGoogleAssetGroup()**](AdCampaignsApi.md#createGoogleAssetGroup) | **POST** /v1/ads/campaigns/{campaignId}/asset-groups | Create a Performance Max asset group |
| [**createSharedBudget()**](AdCampaignsApi.md#createSharedBudget) | **POST** /v1/ads/shared-budgets | Create a shared budget |
| [**createStandaloneAd()**](AdCampaignsApi.md#createStandaloneAd) | **POST** /v1/ads/create | Create standalone ad |
| [**deleteAd()**](AdCampaignsApi.md#deleteAd) | **DELETE** /v1/ads/{adId} | Cancel an ad |
| [**deleteAdCampaign()**](AdCampaignsApi.md#deleteAdCampaign) | **DELETE** /v1/ads/campaigns/{campaignId} | Delete a campaign |
| [**deleteAdSet()**](AdCampaignsApi.md#deleteAdSet) | **DELETE** /v1/ads/ad-sets/{adSetId} | Delete an ad set |
| [**dismissAdsAlert()**](AdCampaignsApi.md#dismissAdsAlert) | **POST** /v1/ads/alerts/{alertId}/dismiss | Dismiss an ads alert |
| [**dismissGoogleRecommendations()**](AdCampaignsApi.md#dismissGoogleRecommendations) | **POST** /v1/ads/recommendations/dismiss | Dismiss Google Ads recommendations |
| [**duplicateAd()**](AdCampaignsApi.md#duplicateAd) | **POST** /v1/ads/{adId}/duplicate | Duplicate an ad |
| [**duplicateAdCampaign()**](AdCampaignsApi.md#duplicateAdCampaign) | **POST** /v1/ads/campaigns/{campaignId}/duplicate | Duplicate a campaign |
| [**duplicateAdSet()**](AdCampaignsApi.md#duplicateAdSet) | **POST** /v1/ads/ad-sets/{adSetId}/duplicate | Duplicate an ad set |
| [**editGoogleAssetGroupAssets()**](AdCampaignsApi.md#editGoogleAssetGroupAssets) | **POST** /v1/ads/campaigns/{campaignId}/asset-groups/{assetGroupId}/assets | Link or unlink asset group assets |
| [**getAd()**](AdCampaignsApi.md#getAd) | **GET** /v1/ads/{adId} | Get ad details |
| [**getAdCampaignDetails()**](AdCampaignsApi.md#getAdCampaignDetails) | **GET** /v1/ads/campaigns/{campaignId} | Get live campaign details |
| [**getAdReview()**](AdCampaignsApi.md#getAdReview) | **GET** /v1/ads/{adId}/review | Read the platform&#39;s review verdict for an ad |
| [**getAdSetDetails()**](AdCampaignsApi.md#getAdSetDetails) | **GET** /v1/ads/ad-sets/{adSetId} | Get live ad-set details |
| [**getAdSetTargeting()**](AdCampaignsApi.md#getAdSetTargeting) | **GET** /v1/ads/ad-sets/{adSetId}/targeting | Read a Reddit ad group&#39;s targeting and schedule |
| [**getAdTree()**](AdCampaignsApi.md#getAdTree) | **GET** /v1/ads/tree | Get campaign tree |
| [**getAdsTimeline()**](AdCampaignsApi.md#getAdsTimeline) | **GET** /v1/ads/timeline | Get daily account metrics |
| [**getCampaignAdSchedule()**](AdCampaignsApi.md#getCampaignAdSchedule) | **GET** /v1/ads/campaigns/{campaignId}/ad-schedule | Read a campaign&#39;s ad schedule (dayparting) |
| [**getCampaignBidding()**](AdCampaignsApi.md#getCampaignBidding) | **GET** /v1/ads/campaigns/{campaignId}/bidding | Read a campaign&#39;s current bidding |
| [**getCampaignConversionGoals()**](AdCampaignsApi.md#getCampaignConversionGoals) | **GET** /v1/ads/campaigns/{campaignId}/conversion-goals | Get campaign conversion goals |
| [**getCampaignTargeting()**](AdCampaignsApi.md#getCampaignTargeting) | **GET** /v1/ads/campaigns/{campaignId}/targeting | Read a Google campaign&#39;s device, location, excluded location, and language targeting |
| [**getGoogleAssetGroup()**](AdCampaignsApi.md#getGoogleAssetGroup) | **GET** /v1/ads/campaigns/{campaignId}/asset-groups/{assetGroupId} | Get a Performance Max asset group |
| [**getTikTokSmartPlusAdReview()**](AdCampaignsApi.md#getTikTokSmartPlusAdReview) | **GET** /v1/ads/{adId}/tiktok-smart-plus-review | Review status of each creative in a TikTok Smart+ ad |
| [**listAdCampaigns()**](AdCampaignsApi.md#listAdCampaigns) | **GET** /v1/ads/campaigns | List campaigns |
| [**listAdGroupAssets()**](AdCampaignsApi.md#listAdGroupAssets) | **GET** /v1/ads/ad-sets/{adSetId}/assets | List ad-group assets |
| [**listAdKeywords()**](AdCampaignsApi.md#listAdKeywords) | **GET** /v1/ads/keywords | List Search keywords |
| [**listAdSets()**](AdCampaignsApi.md#listAdSets) | **GET** /v1/ads/ad-sets | List ad sets |
| [**listAds()**](AdCampaignsApi.md#listAds) | **GET** /v1/ads | List ads |
| [**listAdsAlerts()**](AdCampaignsApi.md#listAdsAlerts) | **GET** /v1/ads/alerts | List ads that need attention |
| [**listBidStrategies()**](AdCampaignsApi.md#listBidStrategies) | **GET** /v1/ads/bid-strategies | List portfolio bid strategies |
| [**listCampaignAssets()**](AdCampaignsApi.md#listCampaignAssets) | **GET** /v1/ads/campaigns/{campaignId}/assets | List campaign assets |
| [**listCampaignNegativeKeywordLists()**](AdCampaignsApi.md#listCampaignNegativeKeywordLists) | **GET** /v1/ads/campaigns/{campaignId}/negative-keyword-lists | List campaign negative lists |
| [**listCampaignNegativeKeywords()**](AdCampaignsApi.md#listCampaignNegativeKeywords) | **GET** /v1/ads/campaigns/{campaignId}/negative-keywords | List campaign-level negative keywords |
| [**listGoogleAssetGroups()**](AdCampaignsApi.md#listGoogleAssetGroups) | **GET** /v1/ads/campaigns/{campaignId}/asset-groups | List Performance Max asset groups |
| [**listGoogleRecommendations()**](AdCampaignsApi.md#listGoogleRecommendations) | **GET** /v1/ads/recommendations | List Google Ads recommendations |
| [**listSharedBudgets()**](AdCampaignsApi.md#listSharedBudgets) | **GET** /v1/ads/shared-budgets | List shared budgets |
| [**listTikTokSmartPlusReviews()**](AdCampaignsApi.md#listTikTokSmartPlusReviews) | **GET** /v1/ads/tiktok-smart-plus-reviews | Review status of every TikTok Smart+ ad of an advertiser |
| [**removeAdGroupAssets()**](AdCampaignsApi.md#removeAdGroupAssets) | **DELETE** /v1/ads/ad-sets/{adSetId}/assets | Remove ad-group assets |
| [**removeAdKeyword()**](AdCampaignsApi.md#removeAdKeyword) | **DELETE** /v1/ads/keywords/{keywordId} | Remove a Search keyword |
| [**removeCampaignAssets()**](AdCampaignsApi.md#removeCampaignAssets) | **DELETE** /v1/ads/campaigns/{campaignId}/assets | Remove campaign assets |
| [**removeGoogleAssetGroup()**](AdCampaignsApi.md#removeGoogleAssetGroup) | **DELETE** /v1/ads/campaigns/{campaignId}/asset-groups/{assetGroupId} | Remove a Performance Max asset group |
| [**replaceCampaignNegativeKeywordLists()**](AdCampaignsApi.md#replaceCampaignNegativeKeywordLists) | **PUT** /v1/ads/campaigns/{campaignId}/negative-keyword-lists | Replace campaign negative lists |
| [**replaceCampaignNegativeKeywords()**](AdCampaignsApi.md#replaceCampaignNegativeKeywords) | **PUT** /v1/ads/campaigns/{campaignId}/negative-keywords | Replace campaign-level negative keywords |
| [**replaceGoogleListingGroupFilters()**](AdCampaignsApi.md#replaceGoogleListingGroupFilters) | **PUT** /v1/ads/campaigns/{campaignId}/asset-groups/{assetGroupId}/listing-group-filters | Replace an asset group&#39;s listing-group tree |
| [**updateAd()**](AdCampaignsApi.md#updateAd) | **PUT** /v1/ads/{adId} | Update ad |
| [**updateAdCampaign()**](AdCampaignsApi.md#updateAdCampaign) | **PUT** /v1/ads/campaigns/{campaignId} | Update a campaign |
| [**updateAdCampaignStatus()**](AdCampaignsApi.md#updateAdCampaignStatus) | **PUT** /v1/ads/campaigns/{campaignId}/status | Pause or resume a campaign |
| [**updateAdGroupAssets()**](AdCampaignsApi.md#updateAdGroupAssets) | **PUT** /v1/ads/ad-sets/{adSetId}/assets | Update ad-group assets |
| [**updateAdKeyword()**](AdCampaignsApi.md#updateAdKeyword) | **PATCH** /v1/ads/keywords/{keywordId} | Pause or enable a Search keyword |
| [**updateAdSet()**](AdCampaignsApi.md#updateAdSet) | **PUT** /v1/ads/ad-sets/{adSetId} | Update an ad set |
| [**updateAdSetStatus()**](AdCampaignsApi.md#updateAdSetStatus) | **PUT** /v1/ads/ad-sets/{adSetId}/status | Pause or resume a single ad set |
| [**updateAdStatus()**](AdCampaignsApi.md#updateAdStatus) | **PUT** /v1/ads/{adId}/status | Pause or resume a single ad |
| [**updateBidStrategy()**](AdCampaignsApi.md#updateBidStrategy) | **PATCH** /v1/ads/bid-strategies/{strategyId} | Update portfolio bid strategy |
| [**updateCampaignAdSchedule()**](AdCampaignsApi.md#updateCampaignAdSchedule) | **PUT** /v1/ads/campaigns/{campaignId}/ad-schedule | Replace a campaign&#39;s ad schedule (dayparting) |
| [**updateCampaignAssets()**](AdCampaignsApi.md#updateCampaignAssets) | **PUT** /v1/ads/campaigns/{campaignId}/assets | Update campaign assets |
| [**updateCampaignConversionGoals()**](AdCampaignsApi.md#updateCampaignConversionGoals) | **PATCH** /v1/ads/campaigns/{campaignId}/conversion-goals | Update campaign conversion goals |
| [**updateCampaignTargeting()**](AdCampaignsApi.md#updateCampaignTargeting) | **PUT** /v1/ads/campaigns/{campaignId}/targeting | Edit a Google campaign&#39;s device, location, excluded location, or language targeting |
| [**updateGoogleAssetGroup()**](AdCampaignsApi.md#updateGoogleAssetGroup) | **PATCH** /v1/ads/campaigns/{campaignId}/asset-groups/{assetGroupId} | Update a Performance Max asset group |


## `addAdKeywords()`

```php
addAdKeywords($add_ad_keywords_request): \Zernio\Model\AddAdKeywords201Response
```

Add Search ad-group keywords

Adds keywords, or negative keywords, to a Google Search ad group without replacing the ones already there.  Adds one or more keyword criteria to an existing Google Search ad group, without touching the keywords already there (unlike the whole-set diff on `PUT /v1/ads/{adId}`, `keywords`/`negativeKeywords` in `platformSpecificData`, which replaces the set). Set `negative: true` to add ad-group-level negatives instead of positive keywords.

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

## `applyGoogleRecommendations()`

```php
applyGoogleRecommendations($apply_google_recommendations_request): \Zernio\Model\ApplyGoogleRecommendations200Response
```

Apply Google Ads recommendations

Applies Google's optimization suggestions to an ad account, using Google's values or your own; the changes cannot be undone.  Apply up to 100 recommendations. This changes the account (budgets, bidding, keywords, assets) and is not reversible or idempotent; Google offers no validate-only mode for it. Items run in partial-failure mode, so one stale recommendation does not block the rest. `parameters` is optional and takes exactly one key named for the recommendation type, in Google's ApplyRecommendationOperation shape (for example `campaignBudget: { newBudgetAmountMicros }` or `keyword: { matchType, cpcBidMicros }`); omit it to apply Google's suggested values.

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
$apply_google_recommendations_request = {"accountId":"507f1f77bcf86cd799439011","adAccountId":"9122445560","recommendations":[{"resourceName":"customers/9122445560/recommendations/NjgzMzAxODc4NS0yNDEtMTc5MDQ3NTQyNjU5Ni0rMjM1MjA5NjcxNjctMA"},{"resourceName":"customers/9122445560/recommendations/NjgzMzAxODc4NS0yMjgtMTc5MDQyNDE5NjUwNS0rMTU3NjMyNzU3ODk","parameters":{"campaignBudget":{"newBudgetAmountMicros":"150000000"}}}]}; // \Zernio\Model\ApplyGoogleRecommendationsRequest

try {
    $result = $apiInstance->applyGoogleRecommendations($apply_google_recommendations_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->applyGoogleRecommendations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apply_google_recommendations_request** | [**\Zernio\Model\ApplyGoogleRecommendationsRequest**](../Model/ApplyGoogleRecommendationsRequest.md)|  | |

### Return type

[**\Zernio\Model\ApplyGoogleRecommendations200Response**](../Model/ApplyGoogleRecommendations200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attachAdGroupAssets()`

```php
attachAdGroupAssets($ad_set_id, $attach_campaign_assets_request): \Zernio\Model\AttachAdGroupAssets201Response
```

Attach ad-group assets

Creates sitelinks, callouts, structured snippets or image assets and attaches them to a Google ad group in one step.  Creates and attaches sitelinks, callouts, structured snippets and image assets in one Google mutation. Google shows images only on accounts it deems eligible (account age, policy history, vertical).

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
$ad_set_id = 'ad_set_id_example'; // string | Numeric Google platform id.
$attach_campaign_assets_request = {"accountId":"64b1f0c8a1b2c3d4e5f60718","customerId":"1234567890","sitelinks":[{"text":"Pricing","linkUrl":"https://zernio.com/pricing"},{"text":"Documentation","linkUrl":"https://zernio.com/docs"}],"callouts":["Fast setup"],"structuredSnippets":[{"header":"Types","values":["Scheduling","Analytics","Messaging"]}]}; // \Zernio\Model\AttachCampaignAssetsRequest

try {
    $result = $apiInstance->attachAdGroupAssets($ad_set_id, $attach_campaign_assets_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->attachAdGroupAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_set_id** | **string**| Numeric Google platform id. | |
| **attach_campaign_assets_request** | [**\Zernio\Model\AttachCampaignAssetsRequest**](../Model/AttachCampaignAssetsRequest.md)|  | |

### Return type

[**\Zernio\Model\AttachAdGroupAssets201Response**](../Model/AttachAdGroupAssets201Response.md)

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

Attach campaign assets

Adds sitelinks, callouts, structured snippets and images to a Google campaign in one step.  Creates and attaches sitelinks, callouts, structured snippets and image assets in one Google mutation. Google shows images only on accounts it deems eligible (account age, policy history, vertical).

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
$campaign_id = 'campaign_id_example'; // string | Numeric Google platform id.
$attach_campaign_assets_request = {"accountId":"64b1f0c8a1b2c3d4e5f60718","adAccountId":"1234567890","sitelinks":[{"text":"Pricing","linkUrl":"https://zernio.com/pricing"},{"text":"Documentation","linkUrl":"https://zernio.com/docs"}],"callouts":["Fast setup"],"structuredSnippets":[{"header":"Types","values":["Scheduling","Analytics","Messaging"]}]}; // \Zernio\Model\AttachCampaignAssetsRequest

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
| **campaign_id** | **string**| Numeric Google platform id. | |
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
boostPost($boost_post_request, $idempotency_key): \Zernio\Model\BoostPost200Response
```

Boost post as ad

Turns an already published post into a paid ad that keeps the post's likes and comments, creating the campaign around it.  By default it provisions the whole hierarchy (campaign, ad set, ad).  **Attach shape (Meta).** Send `adSetId` to put the ad under an EXISTING ad set instead, so that ad set keeps its learning phase. It then owns `budget`, `schedule` and `targeting`, and sending any of those alongside `adSetId` is a 400 rather than a silent drop. `budget` is required only without `adSetId`.  `instagramAccountId`, `destinationType`, `whatsappPhoneNumber` and `adSetId` are Meta-only and return 400 on other platforms.  `accountId` may be a Facebook, Instagram or Meta ads (business login) connection. A business-login connection has no posting account, so pass the post as `platformPostId` (Facebook `pageId_postId` or an Instagram media id); a Zernio `postId` is a 400 there.  For X, `accountId` may be the posting X account or its X Ads connection: either resolves the other on the same profile. A Zernio `postId` on an X Ads connection resolves through its X account, and is a 400 when the profile has none (pass `platformPostId` instead).  **Reddit.** `accountId` is the Reddit Ads connection (platform `redditads`). Pass the Reddit post as `platformPostId` (`t3_abc123` or the bare id), or a Zernio `postId`, which resolves through the Reddit account connected on the same profile (400 when there is none). Reddit promotes only posts made by a profile of the ad account: a post by any other author returns 422. Goals are traffic, awareness, conversions, video_views (the post must be a video, 422 otherwise) and lead_generation; conversions and lead_generation need a pixel that already received the event (see `promotedObject`). `leadGenFormId` returns 400: Reddit retired its native lead forms, so `lead_generation` sends people to `linkUrl` and optimizes toward the pixel's Lead event. Each boost creates a campaign, an ad group carrying the budget, the targeting and the bid, and the ad. `bidStrategy` sets the ad group's bid: LOWEST_COST_WITHOUT_CAP (or omitted) is automatic bidding (BIDLESS), LOWEST_COST_WITH_BID_CAP is MANUAL_BIDDING with `bidAmount` as the bid, COST_CAP is MAXIMIZE_VOLUME with `bidAmount` as the cap; any other strategy returns 422 before anything is created.  **Messaging boosts (Meta).** Use `goal: engagement` with `callToAction: WHATSAPP_MESSAGE`, `MESSAGE_PAGE`, or `INSTAGRAM_MESSAGE`. The CTA implies WHATSAPP, MESSENGER, or INSTAGRAM_DIRECT respectively; `destinationType` alone does not select a messaging CTA. Omit `linkUrl` only for messaging CTAs. Plain link CTAs keep their goal and link behavior when combined with an independent `destinationType`. The campaign uses OUTCOME_ENGAGEMENT and the ad set uses CONVERSATIONS with the promoted Page. Optional `whatsappPhoneNumber` selects a number already paired with that Page. Conflicting CTA/destination, instant form, goal, or optimizationGoal inputs return 400. Attach requires the target ad set destination to match. Existing post references preserve social proof; an Instagram reel rejected by Meta is not re-uploaded as a new post for a messaging boost.  **Retries.** Boosts are NOT idempotent and can take minutes when Meta requires re-hosting an Instagram video, so do not retry on client timeout. Send an Idempotency-Key header to make retries safe: same key and body replays the original 201, and distinct keys always create distinct ads. Without the header, an identical request is treated as a retry: while one is in flight it returns 409, and within 10 minutes of a completed boost it returns the already-created ad instead of creating another. To intentionally duplicate an ad, send distinct Idempotency-Keys (or vary the body, e.g. the name).

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
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. A request cut off mid-handler (for example by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.

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
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. A request cut off mid-handler (for example by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours. | [optional] |

### Return type

[**\Zernio\Model\BoostPost200Response**](../Model/BoostPost200Response.md)

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

Pauses or resumes up to 50 campaigns in one call, with a separate result per campaign so one failure does not block the rest.  Each campaign is updated concurrently and the response contains a per-campaign result so a single bad row does not fail the whole batch. Each campaign is read, written and re-read exactly as PUT /v1/ads/campaigns/{campaignId}/status describes: only the campaign's own switch is written, never its ad sets' or ads'. `updated` / `skipped` count campaigns.

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
$bulk_update_ad_campaign_status_request = {"status":"paused","campaigns":[{"platformCampaignId":"23456789012","platform":"google"},{"platformCampaignId":"120210000000000000","platform":"facebook"}]}; // \Zernio\Model\BulkUpdateAdCampaignStatusRequest

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

Creates an empty campaign, paused, so you can add ad sets and ads to it afterwards.  Creates a campaign WITHOUT its first ad set / ad, on the platform of the given `accountId`. Ad sets join it later via `existingCampaignId` on the create endpoints. Platform notes: on Meta a budget here is campaign-level (CBO) by definition; omit it for ABO (each ad set carries its own budget), and `specialAdCategories` is Meta-only (400 elsewhere); `bidStrategy` is Meta and Google (400 elsewhere), and Google also accepts `portfolioBidStrategyId` instead. Google, X and OpenAI require a budget (422 without one; OpenAI accepts daily or lifetime, Google only `budgetType: daily`). On OpenAI `goal` sets the campaign objective, and `conversions` needs an active standard conversion event on the account. On Reddit `goal` is one of traffic, awareness, conversions, video_views or lead_generation (422 otherwise) and the budget is optional: with one, the campaign uses Reddit's campaign budget optimization and carries the pixel (see `promotedObject`, which then needs `customEventType` for `conversions`), daily or lifetime (a lifetime budget needs `endDate`, 400 otherwise). `startDate` / `endDate` set the campaign's schedule and need that campaign budget (400 without one). Without a budget, each ad set carries its own budget and dates. LinkedIn creates the campaign GROUP (our campaign level) and rejects a budget, which lives on the campaign (ad set) level there; it comes back `status: DRAFT`. Created `PAUSED` (TikTok `DISABLE`) unless `status: ACTIVE` where the platform supports it.  **Idempotency:** send an `Idempotency-Key` header to make retries safe.

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

Creates an empty ad group under an existing campaign, ready for ads to be added later.  Creates an ad group WITHOUT an ad (Google Ads compliance row C.190), under an existing campaign. Ads join it later via `adSetId` on POST /v1/ads/create. Google Ads and Reddit Ads; every other platform returns 501.  **Reddit Ads** (`platform: reddit`): `adAccountId` (the Reddit ad account id) is required and must be a selected ad account of the connection (403 otherwise). When the campaign has no campaign budget, send `budgetAmount` + `budgetType` (a lifetime budget needs `endDate`); the ad group is optimized for the campaign's objective (`promotedObject.customEventType` is required on a conversions campaign, and the pixel must have received that event, else 422), and bids with `bidStrategy`/`bidAmount` like POST /v1/ads/create. Under campaign budget optimization the ad group takes the campaign's bid, goal type, optimization event and pixel, and bid fields return 400. The ad group must start no earlier than a future campaign start and end no later than the campaign end (400 otherwise). `targeting` takes the same targeting object as the other ad endpoints (no geo defaults to the US). A campaign of another ad account returns 404, a Reddit Max campaign 422. `maxCpc` and `customerId` are Google only (400 on Reddit), and the Reddit fields return 400 on Google.  Created `PAUSED` unless `status: ACTIVE`. The new ad group has no ad yet, so it will not appear in GET /v1/ads/tree (built purely from `ads` rows) until one is added; use GET /v1/ads/ad-sets to see it in the meantime.  **Idempotency:** send an `Idempotency-Key` header to make retries safe.

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

Create portfolio bid strategy

Creates a Google Ads bid strategy that several campaigns can share, such as one target CPA or ROAS.  Attach it to a campaign with `portfolioBidStrategyId` on POST /v1/ads/create, PUT /v1/ads/campaigns/{campaignId}, or PUT /v1/ads/ad-sets/{adSetId}. Attaching a strategy aligned to a shared budget fails there with a 400 (Google's `BIDDING_STRATEGY_AND_BUDGET_MUST_BE_ALIGNED`); this is not retryable.

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

## `createGoogleAssetGroup()`

```php
createGoogleAssetGroup($campaign_id, $create_google_asset_group_request): \Zernio\Model\CreateGoogleAssetGroup200Response
```

Create a Performance Max asset group

Adds an asset group with its assets and optional product targeting to a Performance Max campaign, or just validates it without creating anything.  The group, any new assets, their links and an optional listing-group tree are created in one atomic request, so Google checks the asset minimums (for non-retail campaigns) against the whole set. Created PAUSED unless status is ENABLED. validateOnly: true runs Google's validation without creating anything.

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
$campaign_id = 'campaign_id_example'; // string | Google Ads campaign id.
$create_google_asset_group_request = {"name":"Running shoes","finalUrls":["https://example.com/shoes"],"assets":[{"fieldType":"HEADLINE","text":"Shoes for every run"},{"fieldType":"LOGO","asset":"customers/9122445560/assets/352426364803"}]}; // \Zernio\Model\CreateGoogleAssetGroupRequest

try {
    $result = $apiInstance->createGoogleAssetGroup($campaign_id, $create_google_asset_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->createGoogleAssetGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Google Ads campaign id. | |
| **create_google_asset_group_request** | [**\Zernio\Model\CreateGoogleAssetGroupRequest**](../Model/CreateGoogleAssetGroupRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateGoogleAssetGroup200Response**](../Model/CreateGoogleAssetGroup200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSharedBudget()`

```php
createSharedBudget($create_shared_budget_request): \Zernio\Model\CreateSharedBudget201Response
```

Create a shared budget

Creates a daily Google Ads budget that several campaigns can share.  Creates a daily shared campaign budget (`explicitly_shared: true`, standard delivery) that several campaigns can draw from. A lifetime budget returns 422, like every Google budget. Google refuses some bidding strategies on a shared budget; that error surfaces when a campaign is moved onto it.

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
$create_shared_budget_request = new \Zernio\Model\CreateSharedBudgetRequest(); // \Zernio\Model\CreateSharedBudgetRequest

try {
    $result = $apiInstance->createSharedBudget($create_shared_budget_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->createSharedBudget: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_shared_budget_request** | [**\Zernio\Model\CreateSharedBudgetRequest**](../Model/CreateSharedBudgetRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateSharedBudget201Response**](../Model/CreateSharedBudget201Response.md)

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

Creates a paid ad with your own creative, building the campaign and ad set it needs or adding it to existing ones.  Create a paid ad with custom creative across Meta, Google Ads, Pinterest, TikTok, X, LinkedIn, OpenAI Ads (ChatGPT Ads) and Reddit Ads.  Google Performance Max: set `campaignType: \"pmax\"` and supply `assetGroup` with text, images by role, business name and finalUrl. Creates a daily budget, PAUSED campaign and asset group atomically. `validateOnly: true` validates the complete request with Google without creating or persisting resources. Read assets with `GET /v1/ads/campaigns/{campaignId}/asset-groups`. The logo is required; video is optional via `assetGroup.youtubeVideoId`. Brand guidelines are disabled at creation. All supplied asset links are validated together against Google's minimum asset requirements. PMax rejects ACTIVE creation, portfolio bidding, bid caps, legacy creative fields and attach shapes. Geo and language targeting are supported; omitted geo targets all locations. PMax does not require top-level goal, headline, body or linkUrl. Supported bidding: omitted or LOWEST_COST_WITHOUT_CAP for Maximize Conversions, COST_CAP plus bidAmount for target CPA, LOWEST_COST_WITH_MIN_ROAS plus roasAverageFloor for Maximize Conversion Value with target ROAS.  Google Demand Gen: set `campaignType: \"demand_gen\"` and supply `demandGen`. Creates a daily budget, PAUSED campaign, one ad group and one ad in a single atomic request: a multi-asset image ad, a video responsive ad when `demandGen.youtubeVideoIds` is sent, or a carousel ad (2 to 10 cards) when `demandGen.carouselCards` is sent. Geo (countries, regions, cities, zips, metros) and languages go on the ad group, as Demand Gen requires. `demandGen.channels` sets the ad group's channel controls and `demandGen.audience` builds a Google Audience (user lists, interests, custom audiences, age ranges, genders) attached to the ad group, or `demandGen.audienceId` attaches an existing one. `validateOnly: true` validates everything with Google without creating resources. Supported bidding: omitted or LOWEST_COST_WITHOUT_CAP for Maximize Conversions, COST_CAP plus bidAmount for target CPA, LOWEST_COST_WITH_MIN_ROAS plus roasAverageFloor for target ROAS, LOWEST_COST_WITH_BID_CAP plus bidAmount for target CPC. The created ad carries the native `platformCampaignId`, `platformAdSetId` (ad group) and `platformAdId`. Activate with PUT /v1/ads/campaigns/{campaignId}/status; budget, bidding and name are edited with the regular campaign endpoints; creative, channels, audience and ad group targeting with PUT /v1/ads/{adId} (`demandGen`, `targeting`). To grow an existing Demand Gen campaign, send `existingCampaignId` (adds a PAUSED ad group, with its own geo, languages, channels and audience, plus its ad) or `adSetId` (adds a PAUSED ad to that ad group); neither takes budget, bidding or schedule fields, and both support `validateOnly`.  Other mutually-exclusive request shapes are selected by the body:  - Legacy single-creative shape (all platforms, the default). - Meta-only multi-creative shape via the creatives array: one ad set with N ads sharing budget and targeting. - Attach shape via adSetId: adds one new ad to an existing ad set, inheriting its budget, targeting, and schedule (Meta, Google Ads, TikTok, and LinkedIn). On LinkedIn adSetId is the existing Campaign id, and the budget, schedule, targeting and bidding fields must be omitted. On LinkedIn `goal` may be omitted too (taken from the Campaign's objective), and the created ad's `targeting` echoes the Campaign's audience.  Meta accepts `creativeFeatures` on the single and attach shapes and as defaults for `creatives[]`; an item replaces the whole feature map. `promotion` is not supported on any shape and any object is rejected with 400. Reusing `existingCreativeId` uses the existing creative settings instead of new settings. Requested settings are persisted for lists, exports, and default ad-detail reads.  Per-platform required fields, budget minimums, and video-ad rules are documented on each property below.  **Meta required fields per shape** (a missing one is a 400 naming it in `param`):  - Every shape that builds a new ad set (no `adSetId`, `existingCampaignId` or `buyingType: \"RESERVED\"`): `budgetAmount`. `budgetType` defaults to daily, and a lifetime budget without `endDate` ends 7 days after it starts (see `appliedDefaults`). - Single image or video (the default), also with `adSetId`: `headline` (max 255), `body`, `callToAction`, exactly one of `imageUrl` / `video` (none for a catalog template creative, which ignores and does not upload any sent), and `linkUrl` unless the goal is `lead_generation` or `page_visits` or `leadGenFormId` is set. - `bodies[]` / `headlines[]` text variations: `body`, one list with 2+ items, `callToAction`, `imageUrl` or `video`, and `linkUrl` unless the goal is `lead_generation` or `leadGenFormId` is set. `headline` is not required. - `placementAssets`: `headline`, `body`, `callToAction`, and `linkUrl` with the same exemptions as the single shape; the media comes from `placementAssets`. - `carouselCards`: `body`, `callToAction`, and `linkUrl` unless the goal is `lead_generation` or `leadGenFormId` is set. `headline` is not required. - `creatives[]`: per entry `headline`, `body`, `callToAction`, `imageUrl` or `video`, and `linkUrl` unless the goal is `lead_generation`. Top-level `body` is not required. - `dynamicCreative`: `imageUrls` or `videoUrls`, `callToActionTypes`, and `linkUrls` unless the goal is `lead_generation`. Top-level `body` is not required. - `existingCreativeId`: no creative fields. Goal `page_likes`: `body` only. - Goal `lead_generation` always needs `leadGenFormId`, except with `existingCreativeId`.  **Meta activation.** Meta builds the campaign, ad set and ads PAUSED and switches the requested levels to ACTIVE as the last step. When Meta refuses that switch, or the connection drops, after Zernio's retries, the request still answers 201 and nothing is deleted: the refused level and every level below it stay PAUSED, while levels above it that already went ACTIVE stay ACTIVE (the ad comes back with `status: paused` and its `configuredStatus` as read back from Meta). A switch Meta applied although its answer was lost counts as ACTIVE, since Zernio reads the status back first. `message` says not everything is ACTIVE, and `warnings` carries one entry starting with `activation_failed:` that quotes Meta's code, subcode and message, names what was kept PAUSED and what was switched ACTIVE, and lists the calls that switch the PAUSED ones on later (PUT /v1/ads/campaigns/{campaignId}/status, PUT /v1/ads/ad-sets/{adSetId}/status and PUT /v1/ads/{adId}/status with status `active`, in that order). On the `creatives[]` shape only the ads Meta refused stay PAUSED when the campaign and ad set went through. A Reach and Frequency ad is created ACTIVE and is never listed as kept PAUSED. With an `Idempotency-Key` a retry replays this 201.  LinkedIn creates a Single Image or Single Video Ad backed by a Direct Sponsored Content \"dark post\" authored by a Company Page (see `organizationId`). Supported goals are engagement, traffic, awareness, and video_views (video ads use the `video` field; video_views requires a video), and traffic ads require `linkUrl`.  Reddit Ads (`accountId` of a `redditads` connection, `adAccountId` like `a2_abc123`) creates a campaign, an ad group carrying the budget, schedule, targeting and pixel, and an ad running a new promoted post authored by the ad account's first profile (422 when it has none). The creative format follows the body: `carouselCards` builds a carousel, `video` a video ad, `imageUrl` an image ad, and none of them a text ad, which cannot link out (`linkUrl` is a 400 there; `body` is required). Only the legacy single-creative shape is available: `creatives[]`, `adSetId`, `existingCampaignId` and `validateOnly` are refused. Reddit throttling surfaces as 429 `rate_limited` with `platform: reddit`; retry after a delay. To promote an existing Reddit post use POST /v1/ads/boost.  **Idempotency:** this endpoint is not idempotent at the platform level (a blind retry creates a second campaign/ad set/ad). Send an `Idempotency-Key` header to make retries safe: the first request with a given key creates the ad and we store the response; a retry with the same key replays that exact response (with `Idempotent-Replayed: true`) instead of creating duplicates. Reusing a key with a different body returns 422; a key whose first request is still in flight returns 409 (retry after a short backoff). If the first request is cut off mid-create (for example by a function timeout), its key can stay in progress and keep returning 409 until it expires; use a new key to retry sooner, after checking whether the ad was created. Keys are scoped to your credential and expire after 24h.

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
$create_standalone_ad_request = {"accountId":"69ce75d483e990e1c01ccfe4","adAccountId":"9122445560","name":"Lyon plumbing","goal":"traffic","campaignType":"search","budgetAmount":5,"budgetType":"daily","status":"PAUSED","headline":"Plumber in Lyon","body":"Same-day repairs across Lyon.","linkUrl":"https://example.com","keywords":["plombier lyon"],"cities":["1006410"],"locationTargetingType":"presence"}; // \Zernio\Model\CreateStandaloneAdRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. A request cut off mid-handler (for example by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.

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
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. A request cut off mid-handler (for example by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours. | [optional] |

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

Deletes an ad on the platform while keeping its history, and removes empty parents only when they were created through this API.  Deletes the ad on the platform and marks it as cancelled in the database. The ad is preserved for history. OpenAI Ads has no delete API; the ad is archived instead (a terminal state, the closest equivalent). Reddit Ads has no delete either: the ad is archived (`configured_status` ARCHIVED).  Only the ad is deleted; a campaign or ad set is never deleted while it still holds another ad. On Meta, when the ad set and campaign were created by Zernio (by `POST /v1/ads/create` or `POST /v1/ads/boost`) and Meta lists no other ad in the ad set (archived ads count), the emptied ad set is deleted too, then the campaign once it holds no other ad set. Parents created outside Zernio, and the parents of an ad imported from the platform, are always kept. On LinkedIn the ad is a creative inside a campaign inside a campaign group: the creative is always removed, the campaign only when Zernio created it and LinkedIn lists no other creative in it that is not archived, canceled or deleted, and the campaign group only when Zernio created it and LinkedIn lists no other campaign in it that is not canceled or deleted (archived campaigns count). If the creative itself cannot be removed the request fails and no parent is touched. On X the ad is a promoted post inside a line item inside a campaign: the promoted post is always removed, the line item only when Zernio created it (by `POST /v1/ads/create` or `POST /v1/ads/boost`) and X lists no other undeleted promoted post in it, and the campaign only when Zernio created it and X lists no other undeleted line item in it. If X refuses the promoted post delete the request fails and no parent is touched. To delete a whole campaign on purpose use `DELETE /v1/ads/campaigns/{campaignId}`.

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

Deletes a campaign on its platform, including a campaign that never got any ads.  Only the campaign itself is sent to the platform. Meta, Google, TikTok, LinkedIn and X delete it; OpenAI, Reddit and Pinterest have no campaign delete and archive it instead (see below). Locally, all Ad documents for this campaign are marked `status: cancelled`.  **Empty campaigns.** A campaign with zero ads has no local Ad documents to resolve, so it is invisible to `/v1/ads/tree` and this endpoint would 404. That state is produced by the two-step create flow (campaign, then ads via `existingCampaignId`) whenever Meta rejects the ad step. To delete such a shell, send `accountId` in the body or the query string: we skip the local lookup entirely and forward the delete to the platform of that connection. Google, TikTok, LinkedIn, Pinterest and Reddit take the ad account from the synced campaign (OpenAI needs none); when the campaign was never synced (or is synced under several ad accounts) the answer is 409 `invalid_resource_state` on `campaignId` and nothing is deleted: sync the ad account and retry. Before deleting on Google, TikTok, LinkedIn, Pinterest, OpenAI or Reddit, Zernio asks the platform whether the campaign still holds ad groups or ads (Google asset groups count; on LinkedIn, campaigns inside the campaign group). If it does, or the platform cannot confirm it has none (a TikTok Smart+ campaign), the answer is 409 `invalid_resource_state` on `campaignId` and nothing is deleted: sync the ad account and delete the campaign again so its ads are cancelled with it, or delete them on the platform first. On X the ad account comes from the synced campaign, which wins over `adAccountId`; when the campaign was never synced, send `adAccountId` too. Before deleting, Zernio asks X whether the campaign still holds undeleted line items (ads not synced yet); if it does the answer is 409 `invalid_field_value` on `campaignId` and nothing is deleted. Sync the ad account and retry when those line items hold promoted posts; line items without promoted posts never sync, so delete them in X Ads Manager first. `accountId` is ignored when the campaign does have ads.  Reddit Ads has no delete: the campaign is archived instead (`configured_status` ARCHIVED), which stops delivery for good. Its ad groups and ads keep their own switches but cannot deliver under an archived campaign.  OpenAI Ads has no delete either: the campaign is archived (state `archive`). Its ad groups and ads are not touched on OpenAI.

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

Deletes an ad set and its ads while keeping the campaign, archiving it instead on platforms without a hard delete.  Locally, every Ad document under the ad set is marked `status: cancelled`.  Delete is soft on platforms that have no hard delete: LinkedIn moves the campaign to `PENDING_DELETION`, Pinterest and Reddit archive the ad group, and X soft-flags the line item. Google removes the ad group. All remain readable for reporting.

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

## `dismissAdsAlert()`

```php
dismissAdsAlert($alert_id): \Zernio\Model\DismissAdsAlert200Response
```

Dismiss an ads alert

Hides an alert from `GET /v1/ads/alerts` for 30 days for the calling user. If the problem is still there after that, the alert comes back.

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
$alert_id = 'alert_id_example'; // string | The `id` of an alert from GET /v1/ads/alerts.

try {
    $result = $apiInstance->dismissAdsAlert($alert_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->dismissAdsAlert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **alert_id** | **string**| The &#x60;id&#x60; of an alert from GET /v1/ads/alerts. | |

### Return type

[**\Zernio\Model\DismissAdsAlert200Response**](../Model/DismissAdsAlert200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dismissGoogleRecommendations()`

```php
dismissGoogleRecommendations($dismiss_google_recommendations_request): \Zernio\Model\ApplyGoogleRecommendations200Response
```

Dismiss Google Ads recommendations

Dismisses Google optimization suggestions so Google stops showing them.  Dismiss up to 100 recommendations so Google stops suggesting them. Items run in partial-failure mode.

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
$dismiss_google_recommendations_request = new \Zernio\Model\DismissGoogleRecommendationsRequest(); // \Zernio\Model\DismissGoogleRecommendationsRequest

try {
    $result = $apiInstance->dismissGoogleRecommendations($dismiss_google_recommendations_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->dismissGoogleRecommendations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dismiss_google_recommendations_request** | [**\Zernio\Model\DismissGoogleRecommendationsRequest**](../Model/DismissGoogleRecommendationsRequest.md)|  | |

### Return type

[**\Zernio\Model\ApplyGoogleRecommendations200Response**](../Model/ApplyGoogleRecommendations200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `duplicateAd()`

```php
duplicateAd($ad_id, $idempotency_key, $duplicate_ad_request): \Zernio\Model\DuplicateAd200Response
```

Duplicate an ad

Copies a single Meta ad, optionally into another ad set, created paused so you can review it before launch.  Duplicates a single ad via Meta's native `POST /{ad-id}/copies`. The copy is created paused. `adSetId` retargets the copy into another ad set; omitted = the source's own ad set. Accepts the Zernio ad id or the platform ad id. Sync discovery is triggered automatically (`syncAfter: false` to skip). Creative settings returned by Meta, including explicit promotion metadata and creativeFeatures, are preserved when the native copy requires a creative rebuild. Metadata Meta does not return cannot be recovered. When Meta refuses the native copy with its capability error (code 3), which happens for some creatives built by other tools, the ad is rebuilt instead: a new creative from the source's returned spec and a new ad in the target ad set, carrying the source name, status option, rename options and tracking specs.

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

Copies a campaign with its ad sets, ads, creatives and targeting, created paused so you can review it before launch.  Duplicates a campaign, including its ad sets, ads, creatives, and targeting by default (`deepCopy: true`). The copy is created paused so callers can review before launching.  Per-platform implementation: - **Meta** uses the native `POST /{campaign-id}/copies` endpoint. - **TikTok** has no native copy primitive; Zernio walks the source   graph (`/v2/campaign/get/`, `/v2/adgroup/get/`, `/v2/ad/get/`) and   recreates each entity via the corresponding `/create/` endpoints,   carrying over budget / targeting / bid_type / bid_price /   deep_bid_type / creative fields. Spark Ad linkage (`tiktok_item_id`)   is preserved. - **LinkedIn** has no native copy primitive; Zernio walks the source   CampaignGroup → Campaigns → Creatives and recreates each entity,   carrying over `type` / `costType` / `unitCost` /   `optimizationTargetType` / `creativeSelection` / `objectiveType` /   `format` / `dailyBudget` / `totalBudget` / `targetingCriteria` /   `runSchedule` and every Creative's `content` object verbatim.   `statusOption: INHERITED_FROM_SOURCE` is evaluated **per entity**:   any Group / Campaign / Creative whose source is `ACTIVE` gets its   clone activated too. Duplicating an ACTIVE campaign with   `INHERITED_FROM_SOURCE` starts a second front of spend the moment   the clone activates. The safe default is `PAUSED`.  The new hierarchy is asynchronous to materialize in our DB, and we trigger sync discovery automatically. Set `syncAfter: false` to skip and poll `/v1/ads/tree` on your own cadence.  Other platforms return 501 Not Implemented.

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

Copies an ad set, optionally with its ads and into another campaign, created paused so you can review it before launch.  The copy is created paused so callers can review before launching. `campaignId` retargets the copy into another campaign; omitted = the source's own campaign.  Meta: ads and creatives are included by default (`deepCopy: true`) via Meta's native `POST /{adset-id}/copies`; the new hierarchy materializes asynchronously and sync discovery is triggered automatically (`syncAfter: false` to skip).  TikTok: the ad group is read and recreated under the campaign with its targeting, bidding, budget and schedule (start reset to now); `deepCopy: true` recreates its ads too (default false). `startTime`, `endTime` and `renameStrategy` are ignored and `statusOption` must be PAUSED or absent. The copy appears on the next discovery sync.

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

## `editGoogleAssetGroupAssets()`

```php
editGoogleAssetGroupAssets($campaign_id, $asset_group_id, $edit_google_asset_group_assets_request): \Zernio\Model\EditGoogleAssetGroupAssets200Response
```

Link or unlink asset group assets

Links new or existing assets to a Performance Max asset group and unlinks others in one change, keeping unlinked assets in the account library.  Link existing assets or new content to the asset group, and unlink assets, in one atomic request. Links are applied before unlinks, so swapping the last asset of a role does not trip Google's per-role minimum. Unlinking removes the link only; the asset stays in the account library. validateOnly: true validates without writing.

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
$campaign_id = 'campaign_id_example'; // string | Google Ads campaign id.
$asset_group_id = 'asset_group_id_example'; // string | Google asset group id.
$edit_google_asset_group_assets_request = {"link":[{"fieldType":"HEADLINE","text":"Free shipping today"}],"unlink":[{"fieldType":"HEADLINE","asset":"customers/9122445560/assets/419573236135"}]}; // \Zernio\Model\EditGoogleAssetGroupAssetsRequest

try {
    $result = $apiInstance->editGoogleAssetGroupAssets($campaign_id, $asset_group_id, $edit_google_asset_group_assets_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->editGoogleAssetGroupAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Google Ads campaign id. | |
| **asset_group_id** | **string**| Google asset group id. | |
| **edit_google_asset_group_assets_request** | [**\Zernio\Model\EditGoogleAssetGroupAssetsRequest**](../Model/EditGoogleAssetGroupAssetsRequest.md)|  | |

### Return type

[**\Zernio\Model\EditGoogleAssetGroupAssets200Response**](../Model/EditGoogleAssetGroupAssets200Response.md)

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
getAd($ad_id, $live): \Zernio\Model\GetAd200Response
```

Get ad details

Shows one ad with its creative, targeting, status and performance metrics.  Google Search ads include current creative.headlines, creative.descriptions and creative.finalUrls, preserving pinnedField. Top-level cachedAt and stale report cache freshness. Google mutations invalidate this read. RSA enrichment requires a stored advertisingChannelType of SEARCH. Ads with an unknown or other channel return their stored details without a Google read. If RSA enrichment fails, the stored ad is returned with HTTP 200 and without cache metadata.  The `{adId}` path segment accepts any identifier dialect Zernio indexes for the ad: - the Zernio internal `_id` (24-char hex) - Meta's numeric `platformAdId` (the value shipped in `comment.received` webhooks as `comment.ad.id`) - the creative's `effective_object_story_id` (`{pageId}_{postId}` shape, Facebook side) - the creative's `effective_instagram_media_id` (Instagram side)  - an Instagram media id an ad comment arrived on (`comment.platformPostId` of a `comment.received`   carrying `comment.ad.id`), including the extra media Meta creates for placement variants  Any of these resolve to the same ad. Caller doesn't need a translation step. `creative.creativeFeatures` holds the stored requested settings, which do not confirm platform application.  **Facebook ad dark posts.** Meta gives an ad with per-placement assets one extra unpublished post per placement, and comments land on it. Meta exposes no link from that post to its ad. When exactly one ad on the Page, created before the dark post, carries the same copy as the post, the dark post id resolves to that ad. Otherwise, when the id is a dark post Zernio has seen comments on and its Page is connected, the response is `ad: null` plus `darkPost`, which carries the Meta Ads account and the ad accounts running ads for that Page. Read its comments with GET /v1/ads/{adId}/comments using the same id.  **Status freshness.** `status`, `configuredStatus`, `platformStatus`, `platformAdSetStatus` and `platformCampaignStatus` are the values Zernio last stored. Background sync refreshes them, typically within 15 to 60 minutes (Google up to about 3 hours), and ended or long-paused objects may be refreshed less often. Zernio's own status writes re-read the switches they change. A change made in the platform's own ads manager therefore shows up here only after the next sync. Controllers that act on a switch should pass `live=true`, which reads the switches from the platform now, stores them, and returns `statusReadAt` (null when the read failed and the stored values were returned). With `live=true` the ad's own switch (`configuredStatus`), its delivery status (`status`, `platformStatus`) and its ad set and campaign switches (`platformAdSetStatus`, `platformCampaignStatus`) are read live.

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
$live = false; // bool | Read the on/off switches live from the platform instead of returning the synced values. The fresh values are stored (so later reads return them too) and the response carries `statusReadAt`, the time of the read. At most 20 platform objects are read per request. Where a read fails (credentials, platform error, no reader on that platform), the stored values come back with `statusReadAt: null`. See \"Status freshness\" in the operation description. On X the budget is read live in the same read: on GET /v1/ads/{adId} `budget`, `adSetBudget`, `campaignBudget` and `budgetLevel` are the line item and campaign budgets X holds now (stored like the switches); on the ad set and campaign listings `budget` is the one that line item or campaign holds now (returned, not stored); a row whose budget the other level holds keeps its synced `budget`.

try {
    $result = $apiInstance->getAd($ad_id, $live);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->getAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**| Zernio &#x60;_id&#x60; (hex), Meta &#x60;platformAdId&#x60; (numeric), or one of the creative&#39;s effective story/media IDs. See description for details. | |
| **live** | **bool**| Read the on/off switches live from the platform instead of returning the synced values. The fresh values are stored (so later reads return them too) and the response carries &#x60;statusReadAt&#x60;, the time of the read. At most 20 platform objects are read per request. Where a read fails (credentials, platform error, no reader on that platform), the stored values come back with &#x60;statusReadAt: null&#x60;. See \&quot;Status freshness\&quot; in the operation description. On X the budget is read live in the same read: on GET /v1/ads/{adId} &#x60;budget&#x60;, &#x60;adSetBudget&#x60;, &#x60;campaignBudget&#x60; and &#x60;budgetLevel&#x60; are the line item and campaign budgets X holds now (stored like the switches); on the ad set and campaign listings &#x60;budget&#x60; is the one that line item or campaign holds now (returned, not stored); a row whose budget the other level holds keeps its synced &#x60;budget&#x60;. | [optional] [default to false] |

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

## `getAdCampaignDetails()`

```php
getAdCampaignDetails($campaign_id, $account_id, $fields): \Zernio\Model\GetAdCampaignDetails200Response
```

Get live campaign details

Shows a Meta campaign's current settings straight from Meta, such as its objective, budget, bid strategy, schedule and delivery issues.  Reads one campaign live from Meta, returned verbatim, so a caller that knows a campaign id no longer has to page `GET /v1/ads/campaigns` to find it. The default projection covers name, status, objective, buying type, bid strategy, budgets, spend cap, schedule and `issues_info`. `fields` is a raw-passthrough override; unknown fields return Meta's 400 verbatim. A campaign the resolved connection cannot see comes back as Meta's own 400, not a 404.

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
$campaign_id = 'campaign_id_example'; // string | Meta campaign id (platformCampaignId).
$account_id = 'account_id_example'; // string | Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token.
$fields = id,name,status,daily_budget; // string | Comma-separated Graph field override. Supports nested {} projections and Graph field modifiers.

try {
    $result = $apiInstance->getAdCampaignDetails($campaign_id, $account_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->getAdCampaignDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Meta campaign id (platformCampaignId). | |
| **account_id** | **string**| Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token. | |
| **fields** | **string**| Comma-separated Graph field override. Supports nested {} projections and Graph field modifiers. | [optional] |

### Return type

[**\Zernio\Model\GetAdCampaignDetails200Response**](../Model/GetAdCampaignDetails200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdReview()`

```php
getAdReview($ad_id): \Zernio\Model\GetAdReview200Response
```

Read the platform's review verdict for an ad

Shows whether the platform approved an ad, where it may not deliver, and every rejection reason, without re-enabling a paused ad.  Reads the ad's review verdict from the platform now: whether it was approved, where it may not deliver, and every rejection reason with TikTok's suggestion and the piece of content it refers to. Read-only, so it works on a paused ad without re-enabling it.  **Google**: reads `ad_group_ad.policy_summary` live. `approvalStatus` and `reviewStatus` are Google's verbatim (`approvalStatus`: APPROVED, APPROVED_LIMITED, AREA_OF_INTEREST_ONLY, DISAPPROVED, UNKNOWN; `reviewStatus`: REVIEW_IN_PROGRESS, REVIEWED, UNDER_APPEAL, ELIGIBLE_MAY_SERVE); `approved` is true for the three approved statuses, false for DISAPPROVED, null otherwise. `policyTopics` carries every policy topic entry with its `type` (PROHIBITED, LIMITED, ...) and Google's `evidences` and `constraints` verbatim; each PROHIBITED topic is also listed in `rejections` (reason = the topic). The `forbidden*` arrays are TikTok-only and always empty on Google.  **Meta** (Facebook and Instagram ads): reads the Ad's `ad_review_feedback`, `effective_status` and `issues_info` live. `reviewStatus` is Meta's `effective_status` verbatim (ACTIVE, PAUSED, PENDING_REVIEW, DISAPPROVED, PREAPPROVED, WITH_ISSUES, IN_PROCESS, ...); `approved` is true for ACTIVE and PREAPPROVED, false for DISAPPROVED, null otherwise. `reviewFeedback` carries Meta's feedback verbatim: `global` (reason -> explanation) and `placementSpecific` (placement -> reason -> explanation). Each global reason is listed in `rejections`, and so is each placement-specific reason, with that placement in its `forbiddenPlacements`; the review's `forbiddenPlacements` lists every placement with feedback. When Meta returns no feedback (usually an ad in review or approved everywhere), the status comes back with empty `rejections` and empty `reviewFeedback` maps; an ACTIVE ad rejected on one placement still carries that placement's feedback. The `effective_status` read is also stored on the ad, so `GET /v1/ads/{adId}` returns it next. A deleted ad answers 404. `issues` is Meta's `issues_info` verbatim. `forbiddenAges`, `forbiddenLocations` and `forbiddenOperatingSystems` are always empty on Meta.  TikTok uses `/ad/review_info/`. Platforms other than TikTok, Google and Meta return 501. On TikTok, use it alongside the ad's `platformStatus`: TikTok reports `AD_STATUS_AUDIT` while the ad is in review and `AD_STATUS_AD_PRE_ONLINE` once it passed and is about to deliver (both map to `status: pending_review`); `AD_STATUS_AUDIT_DENY` maps to `rejected`.

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
$ad_id = 'ad_id_example'; // string | Zernio ad id (24-char hex) or the platform ad id.

try {
    $result = $apiInstance->getAdReview($ad_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->getAdReview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**| Zernio ad id (24-char hex) or the platform ad id. | |

### Return type

[**\Zernio\Model\GetAdReview200Response**](../Model/GetAdReview200Response.md)

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

Get live ad-set details

Shows a Meta ad set's current settings straight from Meta, including its learning phase, budget, schedule and targeting.  Reads the ad set live from Meta, returned verbatim. The default projection includes `learning_stage_info` (learning-phase status: LEARNING / SUCCESS / FAIL / WAIVING; Meta omits its `status` key on paused ad sets), delivery settings, budgets, schedule, dayparting (`adset_schedule`, `pacing_type`) and targeting. `fields` is a raw-passthrough override; unknown fields return Meta's 400 verbatim.

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
$fields = id,status,ads.limit(100){id,name,status,issues_info}; // string | Comma-separated Graph field override. Supports nested {} projections and Graph field modifiers, so a nested edge can be paged explicitly: without a .limit() modifier the expansion runs at the Meta default page size and the tail is dropped silently.

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
| **fields** | **string**| Comma-separated Graph field override. Supports nested {} projections and Graph field modifiers, so a nested edge can be paged explicitly: without a .limit() modifier the expansion runs at the Meta default page size and the tail is dropped silently. | [optional] |

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

## `getAdSetTargeting()`

```php
getAdSetTargeting($ad_set_id, $platform): \Zernio\Model\GetAdSetTargeting200Response
```

Read a Reddit ad group's targeting and schedule

Shows a Reddit ad group's live targeting and schedule in the same shape PUT /v1/ads/ad-sets/{adSetId} takes, so you can prefill an editor.  Read live from Reddit on every call. Location and interest names are resolved with Reddit's targeting taxonomy; when Reddit cannot resolve them the ids stand in as names and a location that is not a two-letter country is listed under `regions`. Excluded DMAs are listed under `excludedLocations.regions`, since excluded locations have no metro list. Languages come back as lowercase ISO 639-1 codes. Targeting Zernio cannot edit (devices, platforms, carriers, automated expansion) is left out and kept on every edit. Reddit only; every other platform returns 501.

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
$ad_set_id = 'ad_set_id_example'; // string | Reddit ad group ID
$platform = 'platform_example'; // string | Disambiguates when the same adSetId string exists on more than one connected platform.

try {
    $result = $apiInstance->getAdSetTargeting($ad_set_id, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->getAdSetTargeting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_set_id** | **string**| Reddit ad group ID | |
| **platform** | **string**| Disambiguates when the same adSetId string exists on more than one connected platform. | [optional] |

### Return type

[**\Zernio\Model\GetAdSetTargeting200Response**](../Model/GetAdSetTargeting200Response.md)

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
getAdTree($page, $limit, $source, $platform, $status, $ad_account_id, $page_id, $account_id, $profile_id, $campaign_id, $updated_since, $search, $from_date, $to_date, $has_delivery, $min_spend, $sort, $time_increment, $daily_level, $compare): \Zernio\Model\AdTreeResponse
```

Get campaign tree

Shows your campaigns with their ad sets and ads nested inside, with spend and results rolled up at every level.  Uses a two-stage aggregation: ads are grouped into ad sets, then ad sets into campaigns. Metrics are computed over an optional date range, then rolled up from ad level to ad set and campaign levels. Pagination is at the campaign level. Ads without a campaign or ad set ID are grouped into synthetic \"Ungrouped\" buckets. If no date range is provided, defaults to the last 90 days. Date range is capped at 730 days max.  History: when an ad account connects, Zernio imports its last 90 days of metrics, so the metrics hold no data for days before that. When `accountId` or `adAccountId` resolves to a Meta ad account, a range reaching further back answers `202` with `backfillPending: true` and the covered part while the older days (up to 730 days back) are imported in the background; repeat the request until it returns 200. A request scoped to no Meta account never returns `202`.  Pass `timeIncrement=1` to also get a daily breakdown: each node gains a `daily[]` array of per-day metrics (same fields as the aggregated `metrics`) in the same call. Use `dailyLevel` (`campaign` default, or `adset` / `ad`) to choose which levels carry the series. This replaces calling the tree once per day for per-campaign daily trends.  **Deleted objects stay in the tree.** Deleting an ad or a campaign is a soft delete: the Ad documents move to `status: cancelled` and are kept indefinitely, so their historical spend still counts toward the metrics of any date range they fall in. There is no pruning job and no retention window. Filter on `status` if your view should hide them, but do that after reading the totals, not before.

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
$campaign_id = 'campaign_id_example'; // string | Restrict the tree to one or more campaigns by platform campaign id (the id the platform assigns, e.g. Meta's numeric campaign id). Comma-separate up to 100 ids (`?campaignId=123,456`). Filters the campaign set itself, so it works regardless of account size and pagination. Pass this when you already hold campaign ids (for example from an `ad.status_changed` webhook) instead of paging the whole tree.
$updated_since = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Return only campaigns with a change stored since this time (ISO 8601 with offset, e.g. `2026-09-30T10:00:00Z`): a new ad, or a change to any ad's status, review status, name, budget or creative. Each matching campaign comes back whole (every ad set and ad). Metrics are not a change: to refresh numbers, filter with `hasDelivery=true` and a date range instead. Combines with every other filter (with `hasDelivery`/`minSpend` a campaign must match both).
$search = 'search_example'; // string | Case-insensitive substring match on campaign, ad set and ad names (`_`, `%` and spaces match literally), or an exact platform campaign, ad set or ad id. A campaign whose name matches returns with all its ad sets and ads; a match on an ad set or ad name returns only the matching branch. Filters the campaign set itself, so `pagination.total` counts only matching campaigns.
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start of the METRICS date range (YYYY-MM-DD). On its own it affects only the spend/impression numbers overlaid on each node, not which campaigns are returned. Pass `hasDelivery` or `minSpend` to also filter the campaign set to this window. Defaults to 90 days ago.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End of metrics date range (YYYY-MM-DD). Defaults to today. Max 730-day range.
$has_delivery = True; // bool | Return only campaigns that delivered between `fromDate` and `toDate`: spend above zero, or impressions served at zero spend. Unlike `status`, which reads a campaign's CURRENT state, this filters on what happened inside the window, so a campaign that spent then and is paused today is still returned. Filters the campaign set itself, so `pagination.total` counts only matching campaigns.
$min_spend = 3.4; // float | Return only campaigns whose spend between `fromDate` and `toDate` reaches this amount. Expressed in each campaign's OWN currency (the `currency` field on the campaign node): spend is stored per ad account in its native currency and one response can span several. Implies `hasDelivery`; `minSpend=0` applies no filter.
$sort = 'newest'; // string | Campaign-level sort order. `newest` (default) / `oldest` order by the campaign's newest-ad createdAt. `spend_desc` / `spend_asc` order by aggregated spend in the requested date range; campaigns with no spend land at the end.
$time_increment = 56; // int | Set to `1` to also return a daily breakdown. Mirrors Meta Insights' `time_increment=1`: each node gains a `daily[]` array of per-day metrics (same fields as the aggregated `metrics`) alongside the range total, so you get per-entity daily trends in ONE call instead of calling the tree once per day. Only `1` (daily) is supported. The daily series covers the same date range and uses the same source data as `metrics`, except `reach` on Meta and TikTok: the range total is the platform's de-duplicated value, so daily reach does not sum to it. See `dailyLevel` to control which levels carry it.
$daily_level = 'campaign'; // string | Which tree levels get the `daily[]` series when `timeIncrement=1`. `campaign` (default) attaches it on campaign nodes only: the common per-campaign-trend case, and the smallest payload. `adset` adds it on ad sets too; `ad` adds it on every ad in `ads[]` as well (heaviest: a long range × up to 100 ads per ad set). Scope with `campaignId` to keep `ad`-level responses small. Ignored when `timeIncrement` is unset.
$compare = 'compare_example'; // string | Set to `previous` to also read the period of the same length that ends the day before `fromDate`. Every campaign, ad set and ad gains `previousMetrics` (same fields as `metrics`) and the response gains `previousRange`, so a table can show the change against the previous period in one call.

try {
    $result = $apiInstance->getAdTree($page, $limit, $source, $platform, $status, $ad_account_id, $page_id, $account_id, $profile_id, $campaign_id, $updated_since, $search, $from_date, $to_date, $has_delivery, $min_spend, $sort, $time_increment, $daily_level, $compare);
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
| **campaign_id** | **string**| Restrict the tree to one or more campaigns by platform campaign id (the id the platform assigns, e.g. Meta&#39;s numeric campaign id). Comma-separate up to 100 ids (&#x60;?campaignId&#x3D;123,456&#x60;). Filters the campaign set itself, so it works regardless of account size and pagination. Pass this when you already hold campaign ids (for example from an &#x60;ad.status_changed&#x60; webhook) instead of paging the whole tree. | [optional] |
| **updated_since** | **\DateTime**| Return only campaigns with a change stored since this time (ISO 8601 with offset, e.g. &#x60;2026-09-30T10:00:00Z&#x60;): a new ad, or a change to any ad&#39;s status, review status, name, budget or creative. Each matching campaign comes back whole (every ad set and ad). Metrics are not a change: to refresh numbers, filter with &#x60;hasDelivery&#x3D;true&#x60; and a date range instead. Combines with every other filter (with &#x60;hasDelivery&#x60;/&#x60;minSpend&#x60; a campaign must match both). | [optional] |
| **search** | **string**| Case-insensitive substring match on campaign, ad set and ad names (&#x60;_&#x60;, &#x60;%&#x60; and spaces match literally), or an exact platform campaign, ad set or ad id. A campaign whose name matches returns with all its ad sets and ads; a match on an ad set or ad name returns only the matching branch. Filters the campaign set itself, so &#x60;pagination.total&#x60; counts only matching campaigns. | [optional] |
| **from_date** | **\DateTime**| Start of the METRICS date range (YYYY-MM-DD). On its own it affects only the spend/impression numbers overlaid on each node, not which campaigns are returned. Pass &#x60;hasDelivery&#x60; or &#x60;minSpend&#x60; to also filter the campaign set to this window. Defaults to 90 days ago. | [optional] |
| **to_date** | **\DateTime**| End of metrics date range (YYYY-MM-DD). Defaults to today. Max 730-day range. | [optional] |
| **has_delivery** | **bool**| Return only campaigns that delivered between &#x60;fromDate&#x60; and &#x60;toDate&#x60;: spend above zero, or impressions served at zero spend. Unlike &#x60;status&#x60;, which reads a campaign&#39;s CURRENT state, this filters on what happened inside the window, so a campaign that spent then and is paused today is still returned. Filters the campaign set itself, so &#x60;pagination.total&#x60; counts only matching campaigns. | [optional] |
| **min_spend** | **float**| Return only campaigns whose spend between &#x60;fromDate&#x60; and &#x60;toDate&#x60; reaches this amount. Expressed in each campaign&#39;s OWN currency (the &#x60;currency&#x60; field on the campaign node): spend is stored per ad account in its native currency and one response can span several. Implies &#x60;hasDelivery&#x60;; &#x60;minSpend&#x3D;0&#x60; applies no filter. | [optional] |
| **sort** | **string**| Campaign-level sort order. &#x60;newest&#x60; (default) / &#x60;oldest&#x60; order by the campaign&#39;s newest-ad createdAt. &#x60;spend_desc&#x60; / &#x60;spend_asc&#x60; order by aggregated spend in the requested date range; campaigns with no spend land at the end. | [optional] [default to &#39;newest&#39;] |
| **time_increment** | **int**| Set to &#x60;1&#x60; to also return a daily breakdown. Mirrors Meta Insights&#39; &#x60;time_increment&#x3D;1&#x60;: each node gains a &#x60;daily[]&#x60; array of per-day metrics (same fields as the aggregated &#x60;metrics&#x60;) alongside the range total, so you get per-entity daily trends in ONE call instead of calling the tree once per day. Only &#x60;1&#x60; (daily) is supported. The daily series covers the same date range and uses the same source data as &#x60;metrics&#x60;, except &#x60;reach&#x60; on Meta and TikTok: the range total is the platform&#39;s de-duplicated value, so daily reach does not sum to it. See &#x60;dailyLevel&#x60; to control which levels carry it. | [optional] |
| **daily_level** | **string**| Which tree levels get the &#x60;daily[]&#x60; series when &#x60;timeIncrement&#x3D;1&#x60;. &#x60;campaign&#x60; (default) attaches it on campaign nodes only: the common per-campaign-trend case, and the smallest payload. &#x60;adset&#x60; adds it on ad sets too; &#x60;ad&#x60; adds it on every ad in &#x60;ads[]&#x60; as well (heaviest: a long range × up to 100 ads per ad set). Scope with &#x60;campaignId&#x60; to keep &#x60;ad&#x60;-level responses small. Ignored when &#x60;timeIncrement&#x60; is unset. | [optional] [default to &#39;campaign&#39;] |
| **compare** | **string**| Set to &#x60;previous&#x60; to also read the period of the same length that ends the day before &#x60;fromDate&#x60;. Every campaign, ad set and ad gains &#x60;previousMetrics&#x60; (same fields as &#x60;metrics&#x60;) and the response gains &#x60;previousRange&#x60;, so a table can show the change against the previous period in one call. | [optional] |

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
getAdsTimeline($account_id, $ad_account_id, $from_date, $to_date, $platform, $compare): \Zernio\Model\AdsTimelineResponse
```

Get daily account metrics

Returns an ads account's spend, results and other metrics day by day, ready for a daily performance chart.  Returns daily aggregate metrics across all ads in a SocialAccount as a single time series, one row per calendar day and currency in the requested range (one row per day unless the account's ad accounts bill in different currencies). Use this for dashboards that draw a daily-spend or daily-conversions chart, instead of calling `/v1/ads/tree` once per day.  `accountId` is required. The lookup is sibling-expanded so passing the `metaads` ID also includes ads under the linked `facebook` / `instagram` posting account (and vice-versa), the same convention as `/v1/ads/tree` and `/v1/ads`.  Date range defaults to the last 90 days. Capped at 730 days.  History: when an ad account connects, Zernio imports its last 90 days of metrics, so `rows` hold no data for days before that. When `accountId` or `adAccountId` resolves to a Meta ad account, a range reaching further back answers `202` with `backfillPending: true` and the covered part while the older days (up to 730 days back) are imported in the background; repeat the request until it returns 200. Other platforms never return `202`.  With adAccountId set to a Google customer id this is the customer-level performance report (clicks, cost, impressions, conversions, all conversions per day).

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
$account_id = 'account_id_example'; // string | Account ID. Sibling-expanded to its linked posting↔ads pair. An id that does not exist or sits on a profile the API key cannot reach answers 404 (code: account_not_found).
$ad_account_id = 'ad_account_id_example'; // string | Optional platform-native ad account ID (e.g. Meta `act_…`, TikTok advertiser ID). Use when the connection wraps multiple platform ad accounts and the chart should show one only. Note: rows ingested before 2026-05-13 don't carry this column; the recurring 7-day re-sync repopulates them naturally.
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Inclusive start of metrics range (YYYY-MM-DD). Defaults to 90 days ago.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Inclusive end of metrics range (YYYY-MM-DD). Defaults to today. Max 730-day range.
$platform = 'platform_example'; // string | Restrict to one platform.
$compare = 'compare_example'; // string | Set to `previous` to also return `previousRows` for the period of the same length that ends the day before `fromDate`, with that period as `previousRange`. Needs a `fromDate` (sent or defaulted); `toDate` alone answers 400.

try {
    $result = $apiInstance->getAdsTimeline($account_id, $ad_account_id, $from_date, $to_date, $platform, $compare);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->getAdsTimeline: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account ID. Sibling-expanded to its linked posting↔ads pair. An id that does not exist or sits on a profile the API key cannot reach answers 404 (code: account_not_found). | |
| **ad_account_id** | **string**| Optional platform-native ad account ID (e.g. Meta &#x60;act_…&#x60;, TikTok advertiser ID). Use when the connection wraps multiple platform ad accounts and the chart should show one only. Note: rows ingested before 2026-05-13 don&#39;t carry this column; the recurring 7-day re-sync repopulates them naturally. | [optional] |
| **from_date** | **\DateTime**| Inclusive start of metrics range (YYYY-MM-DD). Defaults to 90 days ago. | [optional] |
| **to_date** | **\DateTime**| Inclusive end of metrics range (YYYY-MM-DD). Defaults to today. Max 730-day range. | [optional] |
| **platform** | **string**| Restrict to one platform. | [optional] |
| **compare** | **string**| Set to &#x60;previous&#x60; to also return &#x60;previousRows&#x60; for the period of the same length that ends the day before &#x60;fromDate&#x60;, with that period as &#x60;previousRange&#x60;. Needs a &#x60;fromDate&#x60; (sent or defaulted); &#x60;toDate&#x60; alone answers 400. | [optional] |

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

## `getCampaignAdSchedule()`

```php
getCampaignAdSchedule($campaign_id, $platform, $include_performance, $window_days, $from_date, $to_date): \Zernio\Model\GetCampaignAdSchedule200Response
```

Read a campaign's ad schedule (dayparting)

Shows the days and hours a Google campaign runs and its bid adjustments, optionally with performance by day and hour.  The windows a Google campaign serves in, with the bid modifier on each, plus the criterion ids Google minted for them.  An EMPTY `schedule` is meaningful and is not a failed lookup: Google has no \"all day\" criterion, so a campaign with no ad schedule serves around the clock. `servesAroundTheClock` states that explicitly.  Set `includePerformance=true` to also get delivery split by day of week and by hour, which is the evidence for deciding what the schedule should be. It is one extra Google call segmented by both dimensions at once, so the two views always agree.  Google Ads only. The response carries `cachedAt` and `stale`, set when a quota-exhausted call falls back to the last-good copy instead of a live read.

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
$platform = 'platform_example'; // string | Disambiguates the campaign id when the connection spans platforms.
$include_performance = True; // bool | Also return delivery by day of week and by hour. Costs one extra Google call.
$window_days = 30; // int | Trailing window for the performance split. Ignored when fromDate and toDate are both given.
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start of an explicit performance range (YYYY-MM-DD). Use together with toDate.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End of an explicit performance range (YYYY-MM-DD). Must be on or after fromDate.

try {
    $result = $apiInstance->getCampaignAdSchedule($campaign_id, $platform, $include_performance, $window_days, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->getCampaignAdSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Numeric Google platform campaign id. | |
| **platform** | **string**| Disambiguates the campaign id when the connection spans platforms. | [optional] |
| **include_performance** | **bool**| Also return delivery by day of week and by hour. Costs one extra Google call. | [optional] |
| **window_days** | **int**| Trailing window for the performance split. Ignored when fromDate and toDate are both given. | [optional] [default to 30] |
| **from_date** | **\DateTime**| Start of an explicit performance range (YYYY-MM-DD). Use together with toDate. | [optional] |
| **to_date** | **\DateTime**| End of an explicit performance range (YYYY-MM-DD). Must be on or after fromDate. | [optional] |

### Return type

[**\Zernio\Model\GetCampaignAdSchedule200Response**](../Model/GetCampaignAdSchedule200Response.md)

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
getCampaignBidding($campaign_id, $account_id, $platform, $ad_account_id, $customer_id): \Zernio\Model\GetCampaignBidding200Response
```

Read a campaign's current bidding

Shows a Google campaign's current bidding strategy and targets, ready to prefill an edit.  Read of the campaign's bidding strategy on Google, cached for the quota window, for pre-filling the bid strategy block before a PUT to /v1/ads/campaigns/{campaignId}. Google Ads only; `platform` is required and rejected when it is anything else, since a `campaignId` is not globally unique. The response carries `cachedAt` and `stale`, set when a quota-exhausted call falls back to the last-good copy instead of a live read.  Maps Google's bidding strategy onto the same triplet PUT accepts: `LOWEST_COST_WITHOUT_CAP` (Maximize Conversions, no target), `COST_CAP` + `bidAmount` (Target CPA), `LOWEST_COST_WITH_MIN_ROAS` + `roasAverageFloor` (Target ROAS), `LOWEST_COST_WITH_BID_CAP` + `bidAmount` (Maximize Clicks with a CPC ceiling). A campaign on a portfolio strategy returns `portfolio` (id + name) and `bidSpec.portfolioBidStrategyId` instead of the triplet. Anything else (Manual CPC, Target Impression Share, ...) returns `bidSpec: null`; show `biddingStrategyType` as-is.

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
$ad_account_id = 'ad_account_id_example'; // string | Platform ad account ID (Google customer ID, digits only). Required when the connection has multiple Google Ads accounts; optional (and inferred) when it has only one.
$customer_id = 'customer_id_example'; // string | Alias of adAccountId, kept for existing callers

try {
    $result = $apiInstance->getCampaignBidding($campaign_id, $account_id, $platform, $ad_account_id, $customer_id);
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
| **ad_account_id** | **string**| Platform ad account ID (Google customer ID, digits only). Required when the connection has multiple Google Ads accounts; optional (and inferred) when it has only one. | [optional] |
| **customer_id** | **string**| Alias of adAccountId, kept for existing callers | [optional] |

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

## `getCampaignConversionGoals()`

```php
getCampaignConversionGoals($campaign_id): \Zernio\Model\GetCampaignConversionGoals200Response
```

Get campaign conversion goals

Shows which conversion goals a Google campaign bids on, and whether it follows the account defaults or uses its own or a custom goal.  A Google campaign's conversion goals (CampaignConversionGoal, `biddable` per category and origin) and its goal config (ConversionGoalCampaignConfig): `goalConfigLevel` CUSTOMER means the campaign follows the account-default goals, CAMPAIGN means it uses its own goals or `customConversionGoalId`.

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
$campaign_id = 'campaign_id_example'; // string | Google campaign id

try {
    $result = $apiInstance->getCampaignConversionGoals($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->getCampaignConversionGoals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Google campaign id | |

### Return type

[**\Zernio\Model\GetCampaignConversionGoals200Response**](../Model/GetCampaignConversionGoals200Response.md)

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

Read a Google campaign's device, location, excluded location, and language targeting

Shows a Google campaign's device, location, excluded location and language targeting so you can build an editor for it.  Google Ads compliance requires geo, language, budget, and bidding targeting set at creation to stay editable afterwards; this reads the campaign state so an integrator can build an editor around it. Cached for the quota window (10 minutes fresh, up to 7 days last-good), not always a live read. Google only; every other platform returns 501.  `devices` lists the device criteria the campaign carries, which depends on its channel: Search campaigns have MOBILE, DESKTOP and TABLET, Display campaigns also have CONNECTED_TV. `bidModifier` is Google's bid adjustment for that device, `null` when it has none, and `0` when the device is switched off; `included` is false for exactly that case.  `excludedLocations` lists the campaign's negative location criteria (the places it never serves in). `locations` still lists every location criterion, each flagged with `negative`, so a client reading the targeted set filters `negative: false`.

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

## `getGoogleAssetGroup()`

```php
getGoogleAssetGroup($campaign_id, $asset_group_id): \Zernio\Model\GetGoogleAssetGroup200Response
```

Get a Performance Max asset group

Shows one Performance Max asset group with its linked assets, ad strength, status and product targeting tree.  One asset group with its linked assets, ad strength, primary status and listing-group tree. Uses a 10-minute cache, served stale when Google quota is exhausted; any write below clears it.

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
$campaign_id = 'campaign_id_example'; // string | Google Ads campaign id.
$asset_group_id = 'asset_group_id_example'; // string | Google asset group id.

try {
    $result = $apiInstance->getGoogleAssetGroup($campaign_id, $asset_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->getGoogleAssetGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Google Ads campaign id. | |
| **asset_group_id** | **string**| Google asset group id. | |

### Return type

[**\Zernio\Model\GetGoogleAssetGroup200Response**](../Model/GetGoogleAssetGroup200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTikTokSmartPlusAdReview()`

```php
getTikTokSmartPlusAdReview($ad_id): \Zernio\Model\GetTikTokSmartPlusAdReview200Response
```

Review status of each creative in a TikTok Smart+ ad

Shows which Spark post, video or carousel of an Upgraded Smart+ ad TikTok approved or rejected, with every rejection reason, keyed by the TikTok post id for a Spark post.  Reads TikTok's `/smart_plus/ad/review_info/` live (read-only, works on a paused ad) for the Smart+ ad that holds `adId`, and returns the ad-level verdict plus one entry per creative. `adId` may be the Smart+ ad itself or any creative of it synced as its own ad: Zernio finds the Smart+ ad in the ad's ad group through `/smart_plus/ad/get/`, and uses the ad group's only Smart+ ad when no creative list names the ad.  `materialType`, `tiktokItemId`, `videoId`, `name` and `operationStatus` come from the Smart+ ad's `creative_list`. TikTok leaves out of that list the creatives it added on its own (creator content, authorized TikTok posts, Creative Library content) and lists each image of a carousel under its own material id, so those entries come back with the review verdict and null descriptive fields. TikTok returns no review timestamp; `readAt` is when Zernio read it.  TikTok's review endpoint has a strict quota of its own (TikTok documents neither the quota nor its scope). One TikTok call reads the review of the live Smart+ ads of the ad group up to 50 creatives in total (TikTok refuses more), and each review is stored per connection, advertiser and Smart+ ad. This read serves a review read in the last 10 minutes from the store, so sibling ads are answered without a TikTok call and `readAt` can be up to 10 minutes old; an older one is read again. Read reviews when you need them instead of sweeping every ad on a loop. When TikTok answers over quota, Zernio returns 429 and answers 429 for that advertiser and connection without calling TikTok for about 60 seconds, then 120 and up to 240 while TikTok keeps refusing, and about 60 again after a successful call. Each pause has up to 10% of random jitter, with the time left as `Retry-After`; reviews read in the last 10 minutes are still served.

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
$ad_id = 'ad_id_example'; // string | Zernio ad id (24-char hex) or the TikTok ad id: the Smart+ ad id or the ad id of one of its creatives.

try {
    $result = $apiInstance->getTikTokSmartPlusAdReview($ad_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->getTikTokSmartPlusAdReview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**| Zernio ad id (24-char hex) or the TikTok ad id: the Smart+ ad id or the ad id of one of its creatives. | |

### Return type

[**\Zernio\Model\GetTikTokSmartPlusAdReview200Response**](../Model/GetTikTokSmartPlusAdReview200Response.md)

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
listAdCampaigns($include_empty, $page, $limit, $source, $platform, $status, $ad_account_id, $campaign_id, $page_id, $account_id, $profile_id, $from_date, $to_date, $has_delivery, $min_spend, $live): \Zernio\Model\ListAdCampaigns200Response
```

List campaigns

Lists your campaigns with spend, impressions and clicks summed across their ads, plus each campaign's status and budget.  Returns campaigns as virtual aggregations over ad documents grouped by platform campaign ID. Metrics (spend, impressions, clicks, etc.) are summed across all ads in each campaign. Campaign status is derived from child ad statuses (active > pending_review > paused > error > completed > cancelled > rejected). Google campaign budgets include amountMicros, explicitlyShared, resourceName and deliveryMethod after the next successful sync. This endpoint does not fetch Google live.  **Status freshness.** `status`, `configuredStatus`, `platformStatus`, `platformAdSetStatus` and `platformCampaignStatus` are the values Zernio last stored. Background sync refreshes them, typically within 15 to 60 minutes (Google up to about 3 hours), and ended or long-paused objects may be refreshed less often. Zernio's own status writes re-read the switches they change. A change made in the platform's own ads manager therefore shows up here only after the next sync. Controllers that act on a switch should pass `live=true`, which reads the switches from the platform now, stores them, and returns `statusReadAt` (null when the read failed and the stored values were returned). With `live=true` (which needs `limit` of 20 or less) each returned campaign's own switch (`platformCampaignStatus`) is read live. Live reads cover TikTok, Meta, Google, OpenAI and Reddit. The rolled-up `status` is not re-derived by a live read.  **Budgets here are SYNCED**, never read live, including with `live=true`. To read the current budgets (and status) of every campaign and ad set of a Meta ad account live in one call, for example as a pre-write spend gate, use GET /v1/ads/accounts/live.

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
$campaign_id = 'campaign_id_example'; // string | Platform campaign ID (the `platformCampaignId` on each returned campaign). Returns only that campaign, or an empty list when it is not visible to the caller. Mirrors the same filter on /v1/ads and /v1/ads/tree.
$page_id = 'page_id_example'; // string | Meta only: Facebook Page ID. Campaigns have no Page of their own, so this keeps campaigns having at least one ad backed by this Page, with adCount and metrics computed over those ads only. Mirrors the same filter on /v1/ads and /v1/ads/tree.
$account_id = 'account_id_example'; // string | Account ID
$profile_id = 'profile_id_example'; // string | Profile ID
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start of metrics date range (YYYY-MM-DD, inclusive). Defaults to 90 days ago when both date params are omitted.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End of metrics date range (YYYY-MM-DD, inclusive). Defaults to today. Max 730-day range.
$has_delivery = True; // bool | Return only campaigns that delivered between `fromDate` and `toDate`: spend above zero, or impressions served at zero spend. Unlike `status`, which reads a campaign's CURRENT state, this filters on what happened inside the window. Filters the campaign set itself, so `pagination.total` counts only matching campaigns. Mirrors the same filter on /v1/ads/tree.
$min_spend = 3.4; // float | Return only campaigns whose spend between `fromDate` and `toDate` reaches this amount, in each campaign's OWN currency (the `currency` field on the campaign). Implies `hasDelivery`; `minSpend=0` applies no filter. Mirrors the same filter on /v1/ads/tree.
$live = false; // bool | Read the on/off switches live from the platform instead of returning the synced values. The fresh values are stored (so later reads return them too) and the response carries `statusReadAt`, the time of the read. At most 20 platform objects are read per request. Where a read fails (credentials, platform error, no reader on that platform), the stored values come back with `statusReadAt: null`. See \"Status freshness\" in the operation description. On X the budget is read live in the same read: on GET /v1/ads/{adId} `budget`, `adSetBudget`, `campaignBudget` and `budgetLevel` are the line item and campaign budgets X holds now (stored like the switches); on the ad set and campaign listings `budget` is the one that line item or campaign holds now (returned, not stored); a row whose budget the other level holds keeps its synced `budget`.

try {
    $result = $apiInstance->listAdCampaigns($include_empty, $page, $limit, $source, $platform, $status, $ad_account_id, $campaign_id, $page_id, $account_id, $profile_id, $from_date, $to_date, $has_delivery, $min_spend, $live);
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
| **campaign_id** | **string**| Platform campaign ID (the &#x60;platformCampaignId&#x60; on each returned campaign). Returns only that campaign, or an empty list when it is not visible to the caller. Mirrors the same filter on /v1/ads and /v1/ads/tree. | [optional] |
| **page_id** | **string**| Meta only: Facebook Page ID. Campaigns have no Page of their own, so this keeps campaigns having at least one ad backed by this Page, with adCount and metrics computed over those ads only. Mirrors the same filter on /v1/ads and /v1/ads/tree. | [optional] |
| **account_id** | **string**| Account ID | [optional] |
| **profile_id** | **string**| Profile ID | [optional] |
| **from_date** | **\DateTime**| Start of metrics date range (YYYY-MM-DD, inclusive). Defaults to 90 days ago when both date params are omitted. | [optional] |
| **to_date** | **\DateTime**| End of metrics date range (YYYY-MM-DD, inclusive). Defaults to today. Max 730-day range. | [optional] |
| **has_delivery** | **bool**| Return only campaigns that delivered between &#x60;fromDate&#x60; and &#x60;toDate&#x60;: spend above zero, or impressions served at zero spend. Unlike &#x60;status&#x60;, which reads a campaign&#39;s CURRENT state, this filters on what happened inside the window. Filters the campaign set itself, so &#x60;pagination.total&#x60; counts only matching campaigns. Mirrors the same filter on /v1/ads/tree. | [optional] |
| **min_spend** | **float**| Return only campaigns whose spend between &#x60;fromDate&#x60; and &#x60;toDate&#x60; reaches this amount, in each campaign&#39;s OWN currency (the &#x60;currency&#x60; field on the campaign). Implies &#x60;hasDelivery&#x60;; &#x60;minSpend&#x3D;0&#x60; applies no filter. Mirrors the same filter on /v1/ads/tree. | [optional] |
| **live** | **bool**| Read the on/off switches live from the platform instead of returning the synced values. The fresh values are stored (so later reads return them too) and the response carries &#x60;statusReadAt&#x60;, the time of the read. At most 20 platform objects are read per request. Where a read fails (credentials, platform error, no reader on that platform), the stored values come back with &#x60;statusReadAt: null&#x60;. See \&quot;Status freshness\&quot; in the operation description. On X the budget is read live in the same read: on GET /v1/ads/{adId} &#x60;budget&#x60;, &#x60;adSetBudget&#x60;, &#x60;campaignBudget&#x60; and &#x60;budgetLevel&#x60; are the line item and campaign budgets X holds now (stored like the switches); on the ad set and campaign listings &#x60;budget&#x60; is the one that line item or campaign holds now (returned, not stored); a row whose budget the other level holds keeps its synced &#x60;budget&#x60;. | [optional] [default to false] |

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

## `listAdGroupAssets()`

```php
listAdGroupAssets($ad_set_id, $account_id, $ad_account_id, $customer_id): \Zernio\Model\ListAdGroupAssets200Response
```

List ad-group assets

Lists the sitelinks, callouts, snippets and images attached directly to a Google ad group, not those inherited from the campaign or account.  Fresh reads are cached for 10 minutes; exhausted quota may return the last successful read with stale=true. Inherited assets are not included.

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
$ad_set_id = 'ad_set_id_example'; // string | Numeric Google platform id.
$account_id = 'account_id_example'; // string
$ad_account_id = 'ad_account_id_example'; // string
$customer_id = 'customer_id_example'; // string

try {
    $result = $apiInstance->listAdGroupAssets($ad_set_id, $account_id, $ad_account_id, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->listAdGroupAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_set_id** | **string**| Numeric Google platform id. | |
| **account_id** | **string**|  | |
| **ad_account_id** | **string**|  | [optional] |
| **customer_id** | **string**|  | [optional] |

### Return type

[**\Zernio\Model\ListAdGroupAssets200Response**](../Model/ListAdGroupAssets200Response.md)

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

Lists the keywords and negative keywords in your Google Search ad groups.  Returns the Google Search keyword criteria (positive and negative) synced from connected Google Ads accounts, one row per ad-group keyword. Refreshed about once a day per Google Ads customer (the keyword sweep rides the ads discovery pass on a slower slot), so keywords added on Google can take up to a day to appear. A customer synced for the first time is populated on the next discovery pass rather than waiting for its daily slot, and connecting an account or triggering a manual sync refreshes it immediately. Campaign-level negative keywords are not included; only ad-group-level criteria are.

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
$match_type = 'match_type_example'; // string | Accepted in any case.
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
| **match_type** | **string**| Accepted in any case. | [optional] |
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
listAdSets($account_id, $ad_account_id, $campaign_id, $ad_set_id, $platform, $status, $page, $limit, $live): \Zernio\Model\ListAdSets200Response
```

List ad sets

Lists ad sets (ad groups on Google) with their targeting, bidding and optimization settings, optionally for one campaign.  Ad sets (Google ad groups) synced for the connection, optionally filtered by platform and campaignId. Reads the `ad_sets` table directly, independent of the `ads` rollup GET /v1/ads/tree uses, so a newly created standalone ad group with no ad yet (POST /v1/ads/ad-sets, Google only) is visible here even though it is invisible in the tree until an ad joins it via `adSetId` on POST /v1/ads/create. Rows come newest first (by platform creation time, then id, so pages never overlap), 500 per page unless `limit` says otherwise; `pagination.total` counts every matching ad set and `page` reaches the rest.  **This list is SYNCED, not live** (refreshed by background sync, see below). Each row also carries the ad set's config (`targeting`, `bidStrategy`, `bidAmount`, `optimizationGoal`, `billingEvent`, `promotedObject`), so `?accountId=...&adAccountId=act_...` returns the config of every ad set of an ad account in one call, without a `campaignId`. To read budgets, status, targeting, promoted object and bid strategy of every campaign and ad set of a Meta ad account LIVE in one call (for example as a pre-write spend gate), use GET /v1/ads/accounts/live instead.  **Status freshness.** `status`, `configuredStatus`, `platformStatus`, `platformAdSetStatus` and `platformCampaignStatus` are the values Zernio last stored. Background sync refreshes them, typically within 15 to 60 minutes (Google up to about 3 hours), and ended or long-paused objects may be refreshed less often. Zernio's own status writes re-read the switches they change. A change made in the platform's own ads manager therefore shows up here only after the next sync. Controllers that act on a switch should pass `live=true`, which reads the switches from the platform now, stores them, and returns `statusReadAt` (null when the read failed and the stored values were returned). With `live=true` (which needs a `campaignId` or `adSetId` filter) each listed ad set's own switch (`platformAdSetStatus`) is read live, for the first 20 rows of the page; later rows keep their synced value with `statusReadAt: null`. To read more ad sets live, page with `limit=20`. Live reads cover TikTok, Meta, Google, OpenAI and Reddit. The rolled-up `status` is not re-derived by a live read. On TikTok the same live read also returns the ad group's applied `optimizationGoal` and `billingEvent`, as TikTok's adgroup/get reports them, so you can verify the goal TikTok applied rather than the one you requested. It also returns `nativeSettings`: a fixed subset of TikTok's own adgroup/get record for the ad group, with TikTok's own values, read in that same call (budget, budget_mode, schedule, placements, locations, ages, gender, languages, interests, actions, audiences and exclusions), plus the advertiser's currency and timezone. TikTok's `schedule_start_time` / `schedule_end_time` are UTC wall clocks (\"YYYY-MM-DD HH:MM:SS\", no offset); Ads Manager displays them in `advertiser_timezone`. `configReadAt` says when it was read; it is null on every row whose native settings were not read now, so never treat a null as a match. These are read, not retained create payloads, and are not stored.

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
$ad_account_id = 'ad_account_id_example'; // string | Platform ad account id (Meta act_<n>). Lists every synced ad set of that ad account; no campaignId needed.
$campaign_id = 'campaign_id_example'; // string | Platform campaign ID
$ad_set_id = 'ad_set_id_example'; // string | Platform ad set ID
$platform = 'platform_example'; // string
$status = new \Zernio\Model\\Zernio\Model\AdStatus(); // \Zernio\Model\AdStatus | Filter by the ad set's stored `status`, the value each row returns. A live read does not change it. Rows whose `status` is null match no filter.
$page = 1; // int
$limit = 500; // int
$live = false; // bool | Read the on/off switches live from the platform instead of returning the synced values. The fresh values are stored (so later reads return them too) and the response carries `statusReadAt`, the time of the read. At most 20 platform objects are read per request. Where a read fails (credentials, platform error, no reader on that platform), the stored values come back with `statusReadAt: null`. See \"Status freshness\" in the operation description. On X the budget is read live in the same read: on GET /v1/ads/{adId} `budget`, `adSetBudget`, `campaignBudget` and `budgetLevel` are the line item and campaign budgets X holds now (stored like the switches); on the ad set and campaign listings `budget` is the one that line item or campaign holds now (returned, not stored); a row whose budget the other level holds keeps its synced `budget`.

try {
    $result = $apiInstance->listAdSets($account_id, $ad_account_id, $campaign_id, $ad_set_id, $platform, $status, $page, $limit, $live);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->listAdSets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account ID | [optional] |
| **ad_account_id** | **string**| Platform ad account id (Meta act_&lt;n&gt;). Lists every synced ad set of that ad account; no campaignId needed. | [optional] |
| **campaign_id** | **string**| Platform campaign ID | [optional] |
| **ad_set_id** | **string**| Platform ad set ID | [optional] |
| **platform** | **string**|  | [optional] |
| **status** | [**\Zernio\Model\AdStatus**](../Model/.md)| Filter by the ad set&#39;s stored &#x60;status&#x60;, the value each row returns. A live read does not change it. Rows whose &#x60;status&#x60; is null match no filter. | [optional] |
| **page** | **int**|  | [optional] [default to 1] |
| **limit** | **int**|  | [optional] [default to 500] |
| **live** | **bool**| Read the on/off switches live from the platform instead of returning the synced values. The fresh values are stored (so later reads return them too) and the response carries &#x60;statusReadAt&#x60;, the time of the read. At most 20 platform objects are read per request. Where a read fails (credentials, platform error, no reader on that platform), the stored values come back with &#x60;statusReadAt: null&#x60;. See \&quot;Status freshness\&quot; in the operation description. On X the budget is read live in the same read: on GET /v1/ads/{adId} &#x60;budget&#x60;, &#x60;adSetBudget&#x60;, &#x60;campaignBudget&#x60; and &#x60;budgetLevel&#x60; are the line item and campaign budgets X holds now (stored like the switches); on the ad set and campaign listings &#x60;budget&#x60; is the one that line item or campaign holds now (returned, not stored); a row whose budget the other level holds keeps its synced &#x60;budget&#x60;. | [optional] [default to false] |

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

Lists your ads with their performance over a date range, including ads created directly in each platform's ads manager.  Returns a paginated list of ads with metrics computed over an optional date range. Use source=all to include externally-synced ads from platform ad managers. If no date range is provided, defaults to the last 90 days. Date range is capped at 730 days max.  History: when an ad account connects, Zernio imports its last 90 days of metrics, so the metrics hold no data for days before that. When `accountId` or `adAccountId` resolves to a Meta ad account, a range reaching further back answers `202` with `backfillPending: true` and the covered part while the older days (up to 730 days back) are imported in the background; repeat the request until it returns 200. A request scoped to no Meta account never returns `202`.  To find the Zernio ad behind a comment you see in Meta Business Manager, filter by platformAdId (the Meta ad ID), effectiveObjectStoryId (Facebook), or effectiveInstagramMediaId (Instagram). Those are the post/media the ad's engagement lives on, and are also returned on each ad's `creative` object. Then call GET /v1/ads/{adId}/comments with the returned ad id.

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

## `listAdsAlerts()`

```php
listAdsAlerts($account_id, $include_dismissed): \Zernio\Model\ListAdsAlerts200Response
```

List ads that need attention

Lists what needs attention across your ads, most severe first: ads created in the last 90 days that were rejected, campaigns the platform reports delivery issues on, Meta ad accounts with a failed or overdue payment or disabled while holding live ads, campaigns that spent on 3 or more of the last 7 days without a result (conversion, lead, purchase or conversation goals), and budgets spent to their daily cap yesterday.  Built from stored data and the last 7 days of synced metrics, so it costs no platform call. Each alert has a stable `id`; dismiss one with `POST /v1/ads/alerts/{alertId}/dismiss` to hide it for 30 days.

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
$account_id = 'account_id_example'; // string | Only alerts of this ads connection (sibling-expanded like /v1/ads/tree). Omit for every ad account the API key can reach.
$include_dismissed = false; // bool | Also return dismissed alerts, with `dismissed: true`.

try {
    $result = $apiInstance->listAdsAlerts($account_id, $include_dismissed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->listAdsAlerts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Only alerts of this ads connection (sibling-expanded like /v1/ads/tree). Omit for every ad account the API key can reach. | [optional] |
| **include_dismissed** | **bool**| Also return dismissed alerts, with &#x60;dismissed: true&#x60;. | [optional] [default to false] |

### Return type

[**\Zernio\Model\ListAdsAlerts200Response**](../Model/ListAdsAlerts200Response.md)

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
listBidStrategies($account_id, $ad_account_id, $customer_id, $from_date, $to_date): \Zernio\Model\ListBidStrategies200Response
```

List portfolio bid strategies

Lists a Google Ads account's shared bid strategies with how many campaigns use each and how they performed.  Bidding strategy report: type, status, campaign count, clicks, cost, cost per conversion, impressions, average CPC and conversions over the date range (default last 30 days). Reads Google's `bidding_strategy` resource, cached for the quota window. Draws on the shared Google Ads operations budget. The response carries `cachedAt` and `stale`, set when a quota-exhausted call falls back to the last-good copy instead of a live read.

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
$ad_account_id = 'ad_account_id_example'; // string | Platform ad account ID (Google customer ID, digits only). Defaults to the account's connected customer.
$customer_id = 'customer_id_example'; // string | Alias of adAccountId, kept for existing callers
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Defaults to 30 days ago.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Defaults to today.

try {
    $result = $apiInstance->listBidStrategies($account_id, $ad_account_id, $customer_id, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->listBidStrategies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Google ads SocialAccount id. | |
| **ad_account_id** | **string**| Platform ad account ID (Google customer ID, digits only). Defaults to the account&#39;s connected customer. | [optional] |
| **customer_id** | **string**| Alias of adAccountId, kept for existing callers | [optional] |
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

## `listCampaignAssets()`

```php
listCampaignAssets($campaign_id, $account_id, $ad_account_id, $customer_id): \Zernio\Model\ListCampaignAssets200Response
```

List campaign assets

Lists the sitelinks, callouts and other assets attached directly to a Google campaign.  Fresh reads are cached for 10 minutes; exhausted quota may return the last successful read with stale=true. Inherited assets are not included.

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
$campaign_id = 'campaign_id_example'; // string | Numeric Google platform id.
$account_id = 'account_id_example'; // string
$ad_account_id = 'ad_account_id_example'; // string
$customer_id = 'customer_id_example'; // string

try {
    $result = $apiInstance->listCampaignAssets($campaign_id, $account_id, $ad_account_id, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->listCampaignAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Numeric Google platform id. | |
| **account_id** | **string**|  | |
| **ad_account_id** | **string**|  | [optional] |
| **customer_id** | **string**|  | [optional] |

### Return type

[**\Zernio\Model\ListCampaignAssets200Response**](../Model/ListCampaignAssets200Response.md)

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

Lists the shared negative keyword lists attached to a Google campaign, separate from its own campaign-level negatives.  Google Ads shared negative keyword lists (shared_set type NEGATIVE_KEYWORDS). Reads are cached for 10 minutes; quota exhaustion may return the last successful result for up to 7 days with stale=true. Customer selection is limited to this connection and its account scope.

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

Lists the negative keywords set on a whole Google campaign, separate from ad group negatives.  Returns the campaign-level negative keywords (`campaign_criterion.negative`), distinct from the ad-group-level negatives under `GET /v1/ads/keywords`. Cached for the quota window (not synced to Postgres), and gated by the shared Google Ads operations budget like every other on-demand Google surface. The response carries `cachedAt` and `stale`, set when a quota-exhausted call falls back to the last-good copy instead of a live read.  The platform is always discovered from the campaign itself; a non-Google campaign returns 501 rather than 404, whether or not `platform` was passed.

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

## `listGoogleAssetGroups()`

```php
listGoogleAssetGroups($campaign_id): \Zernio\Model\ListGoogleAssetGroups200Response
```

List Performance Max asset groups

Lists a Performance Max campaign's asset groups with their linked text, image and YouTube assets.  campaignId is the platform campaign id returned by creation or the campaign list. The campaign must be visible to the caller. Uses a 10-minute cache, with the last successful response served as stale when Google quota is exhausted. Removed groups and asset links are excluded. Campaign-level brand assets on campaigns with brand guidelines enabled are not included.

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
$campaign_id = 'campaign_id_example'; // string | Google Ads campaign id.

try {
    $result = $apiInstance->listGoogleAssetGroups($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->listGoogleAssetGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Google Ads campaign id. | |

### Return type

[**\Zernio\Model\ListGoogleAssetGroups200Response**](../Model/ListGoogleAssetGroups200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGoogleRecommendations()`

```php
listGoogleRecommendations($account_id, $ad_account_id, $customer_id, $campaign_id, $types): \Zernio\Model\ListGoogleRecommendations200Response
```

List Google Ads recommendations

Lists Google's optimization suggestions for an ad account, with the estimated impact of each.  Google's optimization recommendations for one ad account: type, estimated impact (base vs potential metrics, cost in account currency units), the campaign, ad group or budget they target, and the type-specific payload Google returns (`details`, in Google's own shape with micros). Filter by campaignId and types. Cached for 10 minutes and cleared by apply or dismiss; served stale when Google quota is exhausted.

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
$ad_account_id = 'ad_account_id_example'; // string | Google customer id, digits only. Defaults to the connection's only customer.
$customer_id = 'customer_id_example'; // string | Alias of adAccountId, kept for consistency with other Google endpoints.
$campaign_id = 'campaign_id_example'; // string | Only recommendations targeting this campaign.
$types = 'types_example'; // string | Comma-separated Google RecommendationType values, for example CAMPAIGN_BUDGET,KEYWORD,SET_TARGET_CPA.

try {
    $result = $apiInstance->listGoogleRecommendations($account_id, $ad_account_id, $customer_id, $campaign_id, $types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->listGoogleRecommendations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Google ads SocialAccount id. | |
| **ad_account_id** | **string**| Google customer id, digits only. Defaults to the connection&#39;s only customer. | [optional] |
| **customer_id** | **string**| Alias of adAccountId, kept for consistency with other Google endpoints. | [optional] |
| **campaign_id** | **string**| Only recommendations targeting this campaign. | [optional] |
| **types** | **string**| Comma-separated Google RecommendationType values, for example CAMPAIGN_BUDGET,KEYWORD,SET_TARGET_CPA. | [optional] |

### Return type

[**\Zernio\Model\ListGoogleRecommendations200Response**](../Model/ListGoogleRecommendations200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSharedBudgets()`

```php
listSharedBudgets($account_id, $ad_account_id): \Zernio\Model\ListSharedBudgets200Response
```

List shared budgets

Lists a Google Ads account's shared budgets and how many campaigns draw from each.  Lists the Google Ads customer's shared campaign budgets (`campaign_budget.explicitly_shared` = true, not removed), with how many campaigns use each. Move a campaign onto one with `sharedBudgetId` on PUT /v1/ads/campaigns/{campaignId}. Google only; other platforms return 501.

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
$ad_account_id = 'ad_account_id_example'; // string | Platform ad account ID (Google customer ID, digits only). Defaults to the account's connected customer.

try {
    $result = $apiInstance->listSharedBudgets($account_id, $ad_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->listSharedBudgets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Google ads SocialAccount id. | |
| **ad_account_id** | **string**| Platform ad account ID (Google customer ID, digits only). Defaults to the account&#39;s connected customer. | [optional] |

### Return type

[**\Zernio\Model\ListSharedBudgets200Response**](../Model/ListSharedBudgets200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTikTokSmartPlusReviews()`

```php
listTikTokSmartPlusReviews($account_id, $ad_account_id, $include_deleted, $max_age_seconds, $page, $page_size): \Zernio\Model\ListTikTokSmartPlusReviews200Response
```

Review status of every TikTok Smart+ ad of an advertiser

Returns the review verdict of every Upgraded Smart+ ad of one TikTok advertiser, with each creative's verdict, in one paginated read. Use it to refresh reviews periodically: one call (plus its pages) per advertiser per refresh, instead of `GET /v1/ads/{adId}/tiktok-smart-plus-review` per ad.  Zernio lists the advertiser's Smart+ ads with `/smart_plus/ad/get/` (deleted ones only with `includeDeleted=true`) and reads `/smart_plus/ad/review_info/` for Smart+ ads holding up to 50 creatives in total per call (TikTok refuses more; a Smart+ ad with more than 50 creatives is read alone), across ad groups, one call after another while TikTok accepts them, for up to 20 seconds per request (the ads not reached are read by the next request, which can come right away). One request per advertiser and connection refreshes at a time: a parallel request sends no review call and answers what is stored with `refreshState: paused` and `retryAfterSeconds: 20`. A full refresh of N Smart+ ads with C creatives in total costs about `ceil(N / 100)` listing calls and `ceil(C / 50)` review calls on TikTok. When TikTok still refuses a call for its creative count, Zernio lowers the creative cap for that advertiser and reads the same ads again in smaller calls, never resending the refused size.  Stale while refreshing: every review is stored for 24 hours per connection, advertiser and Smart+ ad (shared with the single-ad read), and `readAt` is always the time TikTok answered, never rewritten when served from the store. `maxAgeSeconds` (default 3600) is the freshness window: a review read within it is fresh and costs no TikTok call; an older one is still returned in `items` but is read again, and so is a Smart+ ad never read. Each request alternates one batch of Smart+ ads never read (live, then deleted with `includeDeleted=true`) with one batch of stale ones, oldest `readAt` first, so a quota pause starves neither, progress carries over between requests and an ad already read never goes back to pending. A stored review is replaced only by a successful read. `counts` splits the Smart+ ads on this page into `fresh`, `stale`, `pending` and `failed`, and `oldestReadAt` is the oldest `readAt` of `items`. `incomplete` is true only while some Smart+ ad of the page has never been read (`pending > 0`). Staleness is reported apart: `allFresh` is true when every item and refusal of the page is within `maxAgeSeconds` and nothing is pending. A page with stale items and nothing pending is complete (`incomplete: false`): move on, and a later read refreshes it oldest first. When Zernio could not refresh some due ads of the page because review reads are held or TikTok refused them over quota, `refreshState` is `paused` or `refused` and `retryAfterSeconds` (also in the `Retry-After` header) says when that later read can reach TikTok, even with nothing pending. On 2026-10-25 TikTok's quota allowed about 130 to 230 Smart+ ads per advertiser per hour (about 11.5 ads and 4 creatives per successful call), so a larger advertiser cannot be fully refreshed within one hour and its pages stay complete but not `allFresh`.  The listing is stored with the time it was read (`listing.readAt`) and listed again when it is older than `maxAgeSeconds`, so it can be up to `maxAgeSeconds` old: a Smart+ ad created on TikTok appears after at most that long (one hour by default). If that relisting fails, Zernio serves the stored listing with `listing.source: fallback` and the relist error in `listing.error`, instead of failing the request; `listing.source: fresh` means the listing was read within `maxAgeSeconds`. Only when no listing was ever stored does the listing error fail the request.  TikTok's review endpoint has a strict quota of its own (TikTok documents neither the quota nor its scope). One request keeps reading batches (up to 50 creatives each) while TikTok accepts them. When TikTok is over quota (or Zernio is holding review reads after an overage: about 60 seconds, then 120 and up to 240 while TikTok keeps refusing, and about 60 again after a successful call, each with up to 10% of random jitter), Zernio stops calling TikTok and answers 200 with the reviews it has: stale reviews in `items`, the Smart+ ads never read in `pendingSmartPlusAdIds`, `incomplete: true` when any are pending, and `refreshState` (`paused` or `refused`) with `retryAfterSeconds` (also in the `Retry-After` header) whenever due ads were left unread. Every Smart+ ad of the page is in `items`, `failedSmartPlusAds` or `pendingSmartPlusAdIds`. Wait `retryAfterSeconds` and read the same page again: only the stale and pending ads reach TikTok.  A Smart+ ad whose review TikTok refuses on its own (for example one deleted on TikTok since the listing was read) is returned in `failedSmartPlusAds` with TikTok's error and `refusedAt`, and the rest of the page is still read. Zernio finds it by splitting the refused batch in halves, at most 16 extra TikTok calls per page; ads still unresolved after that keep their stored review, or stay in `pendingSmartPlusAdIds` when they have none, and are read again by the next request, in turn with the other due ads. A refusal of a single ad is stored for 24 hours and read again once it is older than `maxAgeSeconds`; when an ad has both a stored review and a stored refusal, the more recent one is returned. When both halves of a refused batch are refused with the same TikTok error (for example a permission error), Zernio stops calling TikTok for that page: when every Smart+ ad of the page has a stored review or refusal, it serves them and returns the refusal in `reviewError`; when some ad was never read, the whole request fails with that error.  Items are sorted by `adGroupId`, then `smartPlusAdId`, so pages are stable. Keep one page in flight per advertiser and read its pages one after another: parallel pages of one advertiser spend its review quota at the same time and come back incomplete. Production logs suggest the quota is counted per advertiser (not confirmed by TikTok), so different advertisers have been read in parallel without throttling each other.

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
$account_id = 'account_id_example'; // string | A tiktok or tiktokads account ID
$ad_account_id = 'ad_account_id_example'; // string | TikTok advertiser ID
$include_deleted = false; // bool | Also return Smart+ ads deleted on TikTok (listed with `primary_status: STATUS_ALL`).
$max_age_seconds = 3600; // int | Freshness window in seconds. Reviews, refusals and the listing read within it are served without calling TikTok; older ones are still returned but read again, oldest first.
$page = 1; // int
$page_size = 500; // int

try {
    $result = $apiInstance->listTikTokSmartPlusReviews($account_id, $ad_account_id, $include_deleted, $max_age_seconds, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->listTikTokSmartPlusReviews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| A tiktok or tiktokads account ID | |
| **ad_account_id** | **string**| TikTok advertiser ID | |
| **include_deleted** | **bool**| Also return Smart+ ads deleted on TikTok (listed with &#x60;primary_status: STATUS_ALL&#x60;). | [optional] [default to false] |
| **max_age_seconds** | **int**| Freshness window in seconds. Reviews, refusals and the listing read within it are served without calling TikTok; older ones are still returned but read again, oldest first. | [optional] [default to 3600] |
| **page** | **int**|  | [optional] [default to 1] |
| **page_size** | **int**|  | [optional] [default to 500] |

### Return type

[**\Zernio\Model\ListTikTokSmartPlusReviews200Response**](../Model/ListTikTokSmartPlusReviews200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeAdGroupAssets()`

```php
removeAdGroupAssets($ad_set_id, $account_id, $asset_resource_names, $ad_group_asset_resource_names, $ad_account_id, $customer_id): \Zernio\Model\RemoveCampaignAssets200Response
```

Remove ad-group assets

Detaches assets from a Google ad group without deleting them, so they stay in the account and on anything else they are attached to.  Google assets cannot be deleted. Other attachments remain. assetResourceNames is retained for compatibility. Fields go in the query string. A JSON body with the same fields is also accepted and, when sent, the query string is ignored.

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
$ad_set_id = 'ad_set_id_example'; // string | Numeric Google platform id.
$account_id = 'account_id_example'; // string | Zernio Google Ads connection id.
$asset_resource_names = array('asset_resource_names_example'); // string[] | Asset resource names, retained for compatibility. Repeat the parameter or pass a comma-separated list.
$ad_group_asset_resource_names = array('ad_group_asset_resource_names_example'); // string[] | ad_group_asset resource names to remove, e.g. customers/1234567890/adGroupAssets/456~123~CALLOUT. Repeat the parameter or pass a comma-separated list.
$ad_account_id = 'ad_account_id_example'; // string | Platform ad account ID (Google customer ID, digits only). Required when the connection has multiple customers.
$customer_id = 'customer_id_example'; // string | Alias of adAccountId, kept for existing callers

try {
    $result = $apiInstance->removeAdGroupAssets($ad_set_id, $account_id, $asset_resource_names, $ad_group_asset_resource_names, $ad_account_id, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->removeAdGroupAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_set_id** | **string**| Numeric Google platform id. | |
| **account_id** | **string**| Zernio Google Ads connection id. | |
| **asset_resource_names** | [**string[]**](../Model/string.md)| Asset resource names, retained for compatibility. Repeat the parameter or pass a comma-separated list. | |
| **ad_group_asset_resource_names** | [**string[]**](../Model/string.md)| ad_group_asset resource names to remove, e.g. customers/1234567890/adGroupAssets/456~123~CALLOUT. Repeat the parameter or pass a comma-separated list. | |
| **ad_account_id** | **string**| Platform ad account ID (Google customer ID, digits only). Required when the connection has multiple customers. | [optional] |
| **customer_id** | **string**| Alias of adAccountId, kept for existing callers | [optional] |

### Return type

[**\Zernio\Model\RemoveCampaignAssets200Response**](../Model/RemoveCampaignAssets200Response.md)

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

Removes a single keyword or negative keyword from a Google Search ad group.  Removes one keyword criterion (positive or negative) from its ad group (M.140).

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
$keyword_id = 'keyword_id_example'; // string | Zernio keyword ID (`id`), or Google's native `{adSetId}~{platformCriterionId}` (the tail of `resourceName`, e.g. 1234567890~987654321). A bare criterion id is rejected because it is only unique within its ad group.

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
| **keyword_id** | **string**| Zernio keyword ID (&#x60;id&#x60;), or Google&#39;s native &#x60;{adSetId}~{platformCriterionId}&#x60; (the tail of &#x60;resourceName&#x60;, e.g. 1234567890~987654321). A bare criterion id is rejected because it is only unique within its ad group. | |

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

## `removeCampaignAssets()`

```php
removeCampaignAssets($campaign_id, $account_id, $asset_resource_names, $campaign_asset_resource_names, $ad_account_id, $customer_id): \Zernio\Model\RemoveCampaignAssets200Response
```

Remove campaign assets

Detaches assets from a Google campaign without deleting them, so they stay in the account and on anything else they are attached to.  Google assets cannot be deleted. Other attachments remain. assetResourceNames is retained for compatibility. Fields go in the query string. A JSON body with the same fields is also accepted and, when sent, the query string is ignored.

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
$campaign_id = 'campaign_id_example'; // string | Numeric Google platform id.
$account_id = 'account_id_example'; // string | Zernio Google Ads connection id.
$asset_resource_names = array('asset_resource_names_example'); // string[] | Asset resource names, retained for compatibility. Repeat the parameter or pass a comma-separated list.
$campaign_asset_resource_names = array('campaign_asset_resource_names_example'); // string[] | campaign_asset resource names to remove, e.g. customers/1234567890/campaignAssets/456~123~CALLOUT. Repeat the parameter or pass a comma-separated list.
$ad_account_id = 'ad_account_id_example'; // string | Platform ad account ID (Google customer ID, digits only). Required when the connection has multiple customers.
$customer_id = 'customer_id_example'; // string | Alias of adAccountId, kept for existing callers

try {
    $result = $apiInstance->removeCampaignAssets($campaign_id, $account_id, $asset_resource_names, $campaign_asset_resource_names, $ad_account_id, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->removeCampaignAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Numeric Google platform id. | |
| **account_id** | **string**| Zernio Google Ads connection id. | |
| **asset_resource_names** | [**string[]**](../Model/string.md)| Asset resource names, retained for compatibility. Repeat the parameter or pass a comma-separated list. | |
| **campaign_asset_resource_names** | [**string[]**](../Model/string.md)| campaign_asset resource names to remove, e.g. customers/1234567890/campaignAssets/456~123~CALLOUT. Repeat the parameter or pass a comma-separated list. | |
| **ad_account_id** | **string**| Platform ad account ID (Google customer ID, digits only). Required when the connection has multiple customers. | [optional] |
| **customer_id** | **string**| Alias of adAccountId, kept for existing callers | [optional] |

### Return type

[**\Zernio\Model\RemoveCampaignAssets200Response**](../Model/RemoveCampaignAssets200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeGoogleAssetGroup()`

```php
removeGoogleAssetGroup($campaign_id, $asset_group_id, $validate_only): \Zernio\Model\RemoveGoogleAssetGroup200Response
```

Remove a Performance Max asset group

Permanently removes an asset group from a Performance Max campaign (this cannot be undone).  Removes the asset group on Google (status REMOVED, not reversible). Pass validateOnly=true to validate without removing.

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
$asset_group_id = 'asset_group_id_example'; // string
$validate_only = false; // bool

try {
    $result = $apiInstance->removeGoogleAssetGroup($campaign_id, $asset_group_id, $validate_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->removeGoogleAssetGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**|  | |
| **asset_group_id** | **string**|  | |
| **validate_only** | **bool**|  | [optional] [default to false] |

### Return type

[**\Zernio\Model\RemoveGoogleAssetGroup200Response**](../Model/RemoveGoogleAssetGroup200Response.md)

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

Sets exactly which shared negative keyword lists apply to a Google campaign, or detaches them all, without changing the lists themselves.  Send listIds=[] to detach all negative keyword lists. Only campaign_shared_set links are changed; the lists and their keywords are preserved. Every list must belong to the campaign customer and have type NEGATIVE_KEYWORDS.

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

Replaces a Google campaign's full list of campaign-level negative keywords, or clears it.  Replaces the FULL set of campaign-level negative keywords (C.270): the desired list is diffed against what Google already has, and the difference is applied as one `create`/`remove` mutate. Send an empty array to clear every campaign negative.  The platform is always discovered from the campaign itself; a non-Google campaign returns 501 rather than 404, whether or not `platform` was sent.

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

## `replaceGoogleListingGroupFilters()`

```php
replaceGoogleListingGroupFilters($campaign_id, $asset_group_id, $replace_google_listing_group_filters_request): \Zernio\Model\ReplaceGoogleListingGroupFilters200Response
```

Replace an asset group's listing-group tree

Replaces the product targeting tree of a Performance Max retail asset group; only works on campaigns linked to Merchant Center.  Replace the product (listing-group) tree of a Performance Max retail asset group. The current tree is removed and the new one created in one atomic request. Read the current tree with GET on the asset group. Requires a campaign linked to Merchant Center; other campaigns return 400 LISTING_SOURCE_NOT_ALLOWED from Google. validateOnly: true validates without writing.

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
$campaign_id = 'campaign_id_example'; // string | Google Ads campaign id.
$asset_group_id = 'asset_group_id_example'; // string | Google asset group id.
$replace_google_listing_group_filters_request = new \Zernio\Model\ReplaceGoogleListingGroupFiltersRequest(); // \Zernio\Model\ReplaceGoogleListingGroupFiltersRequest

try {
    $result = $apiInstance->replaceGoogleListingGroupFilters($campaign_id, $asset_group_id, $replace_google_listing_group_filters_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->replaceGoogleListingGroupFilters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Google Ads campaign id. | |
| **asset_group_id** | **string**| Google asset group id. | |
| **replace_google_listing_group_filters_request** | [**\Zernio\Model\ReplaceGoogleListingGroupFiltersRequest**](../Model/ReplaceGoogleListingGroupFiltersRequest.md)|  | |

### Return type

[**\Zernio\Model\ReplaceGoogleListingGroupFilters200Response**](../Model/ReplaceGoogleListingGroupFilters200Response.md)

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

Changes an ad's status, budget, targeting or creative and applies the change on the platform.  Patch one or more fields on an ad. Status, budget, targeting, and creative changes are propagated to the platform.  Per-platform support: - **Meta** (Facebook + Instagram): all fields supported. - **TikTok**: status, budget, `name` (renames the ad), targeting (via `/v2/adgroup/update/`), and creative   (via `/v2/ad/update/` patch-style: `headline` is ignored, `body` becomes `ad_text`). - **Google**: status, budget, KEYWORD edits via `targeting.keywords` /   `targeting.negativeKeywords`, DEVICE bid adjustments via `targeting.devices`,   LOCATION edits via `targeting.locations` (or the equivalent top-level   `targeting.countries` / `regions` / `cities` / `zips` / `metros`), and LANGUAGE   edits via `targeting.languages`.   Each list you send becomes the FULL new set of its kind (criteria not in the   list are removed, except devices, which Google cannot remove and which are   switched off with a bid modifier of 0 instead); a kind left out is untouched.   Any other `targeting` field   returns 400: Google cannot mutate it post-create without recreating   the campaign. Creative edits are dispatched on the ad's `advertisingChannelType`,   and every supported field replaces a whole set; a field you omit is preserved.   - **Search**: top-level `headlines`, `descriptions` and `finalUrls`. Use 3-15 headlines     (1-30 characters) and 2-4 descriptions (1-90 characters). Omit an asset to remove it;     omit pinnedField on an included asset to unpin it. Updates do not pad or truncate text.     The legacy creative fields remain unsupported.   - **Display**: top-level `headlines` (1-5, no pinnedField, display ads have no pinned     positions), `descriptions` (1-5) and `finalUrls`, plus `creative.longHeadline`,     `creative.businessName`, `creative.imageUrl` (the landscape marketing image) and     `creative.squareImageUrl`. Each image URL is uploaded as a new Google asset and the ad     is pointed at it; Google assets are immutable, so the previous asset stays in the     account's asset library. A new landscape image also updates `creative.assetResourceName`     to the new asset, and each replaced image updates its own role in `creative.assets`.   - **Performance Max**: top-level `assetGroup`, which swaps asset roles on the ad's asset     group. The other creative fields return 422 for this channel, and `assetGroup` returns     422 on any other channel.   - **Demand Gen**: top-level `demandGen` (see GoogleDemandGenUpdate): creative, channel     and audience changes in one atomic Google request. The other creative fields return     422 for this channel. `targeting` takes locations, languages, `locationTargetingType`     and `devices`; locations and languages are written to the ad's ad group, which     Demand Gen requires (campaigns migrated from Discovery that still target on the     campaign keep being written there), so they apply to every ad in that ad group. - **LinkedIn**: status, budget, targeting (countries or regions, excludedLocations (countries),   the B2B facets, and audience segments; applied to the LinkedIn Campaign via   PARTIAL_UPDATE, and REPLACES the campaign's entire targetingCriteria, not a merge),   and creative (uploads new media, creates a replacement inline creative on the same   campaign, pauses the old one). - **Pinterest / X / OpenAI Ads**: status + budget only. Sending   `targeting` or `creative` returns 501 with code `feature_not_available`.   OpenAI Ads budget is the campaign's spend cap, daily or lifetime (see `budget.type` below). - **Reddit Ads**: status, budget, `name` (renames the ad) and targeting. `budget` goes to   the ad's ad group, or to its campaign when the ad group spends a campaign budget, and   keeps its daily or lifetime type (422 to switch). `targeting` REPLACES the ad group's   whole targeting (geo, communities, conversation keywords, interests, audiences,   languages, gender), so it applies to every ad in the ad group. `creative` returns 501:   a Reddit ad runs a post, so create a new ad with the new creative instead.  **Google location and language replacement:** locations, languages and devices are campaign-level criteria on Google, so these edits apply to every ad group and ad in the ad's campaign. Send the complete list you want to keep. Zernio diffs it against the campaign's live criteria and sends the removes and the creates in ONE `googleAds:mutate`, so the campaign is never left with a half-applied set; criteria already in the list keep their criterion ID and history. Excluded (negative) locations are left untouched. An empty location list returns 400 (a Google campaign with no location criteria targets every country, which is never what \"remove my locations\" means, so omit the field instead). Send either `targeting.locations` or the top-level geo fields, not both: mixing them returns 400.  **Google radius targeting:** `customLocations` is editable and is replaced the same way, but as its OWN set. Google models a place (LOCATION) and a point plus radius (PROXIMITY) as different criterion types, so the two are independent: sending `customLocations` replaces every radius and leaves the cities and countries alone, and sending places replaces those and leaves the radius alone. Send `customLocations: []` to drop radius targeting entirely. A circle you re-send unchanged keeps its criterion ID rather than being removed and recreated.  **Google keyword replacement:** These edits affect the ad's entire ad group, including sibling ads. Positive (`targeting.keywords`) and negative (`targeting.negativeKeywords`) sets are independent: omit a field to leave that set unchanged, or send `[]` to remove every keyword of that kind.  Zernio compares each supplied set with Google's live criteria by case-insensitive keyword text and match type. A matching criterion is left untouched, retaining its criterion ID, enabled/paused status, keyword-level bid overrides, labels, and criterion-associated history/statistics. Zernio does not reset its quality score; Google continues to calculate scores and statistics normally. Text comparison does not trim whitespace.  A bare string or an object without `matchType` means `broad`, not the existing criterion's match type. For example, resending an existing `{ \"text\": \"plumber\", \"matchType\": \"exact\" }` preserves it; sending `\"plumber\"` instead removes that EXACT criterion and requests a BROAD one. Changing text or match type removes criteria no longer requested and creates any missing criteria. New criteria get new IDs and do not inherit removed criteria's bid overrides, labels, or history. Historical reporting for a removed criterion is not transferred to its replacement.  To add keywords without replacing a set, use [POST /v1/ads/keywords](https://docs.zernio.com/ad-campaigns/add-ad-keywords). Use `PATCH /v1/ads/keywords/{keywordId}` to pause/enable one keyword, or `DELETE /v1/ads/keywords/{keywordId}` to remove it.

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
$update_ad_request = {"headlines":[{"text":"Social Media API","pinnedField":"HEADLINE_1"},{"text":"Schedule Your Posts"},{"text":"Build With Zernio"}],"descriptions":[{"text":"Connect social accounts and schedule posts with the Zernio API.","pinnedField":"DESCRIPTION_1"},{"text":"Build social publishing into your application."}],"finalUrls":["https://zernio.com"]}; // \Zernio\Model\UpdateAdRequest

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

Changes a campaign's settings, such as its name, budget, bidding or tracking URLs.  Send at least one of `budget`, `bidStrategy`, `portfolioBidStrategyId`, `targetImpressionShare`, `manualCpc`, `networkSettings`, `trackingUrlTemplate`, `finalUrlSuffix`, `sharedBudgetId`, `name` or `platformSpecificData`. An unsupported field is always an error, never a silent drop.  | Body field | Meta | Google | Others | |---|---|---|---| | `bidStrategy` | Yes | Yes | 501 | | `bidAmount`, `roasAverageFloor` | 400 (ad-set level) | Yes | 400 | | `portfolioBidStrategyId` | 400 | Yes | 400 | | `targetImpressionShare` | 400 | Search only | 400 | | `manualCpc` | 400 | Search and Display | 400 | | `networkSettings` | 400 | Search only | 400 | | `trackingUrlTemplate`, `finalUrlSuffix` | 400 | Yes | 400 | | `sharedBudgetId` | 400 | Yes | 400 | | `budget` (CBO; ABO returns 409) | Yes | Daily only | OpenAI and Reddit: daily or lifetime; others 501 | | `name` | Yes | 501 | Reddit: Yes; others 501 | | `platformSpecificData.spendCap` | Yes | 400 | 400 | | `accountId` (empty campaigns) | Yes | - | - |  Meta budget edits check the live campaign budget, so an older local ABO stamp cannot block a CBO campaign. A successful edit repairs local ad budget fields. A live ABO campaign still returns 409 with the ad-set budget endpoint.  On Google: `LOWEST_COST_WITHOUT_CAP` = Maximize Conversions, `COST_CAP` + `bidAmount` = Target CPA, `LOWEST_COST_WITH_MIN_ROAS` + `roasAverageFloor` = Target ROAS, `LOWEST_COST_WITH_BID_CAP` + `bidAmount` = Maximize Clicks with a CPC ceiling; `portfolioBidStrategyId` attaches a portfolio strategy instead (exclusive with `bidStrategy`). `targetImpressionShare` switches the campaign to Target impression share and `manualCpc: { maxCpc }` to Manual CPC (every ad group of the campaign gets `maxCpc` as its bid, in the same mutate); each is exclusive with every other strategy field. `networkSettings`, `trackingUrlTemplate` and `finalUrlSuffix` go out in one campaign update, each field sent written on its own leaf, so an omitted one keeps its current value; an empty string clears a URL field. Setting the standard triplet on a campaign that is currently on a PORTFOLIO strategy is rejected: detach it in Google Ads first, since it is shared across campaigns.  Google budget updates read the current budget before mutation. Shared budgets return 409 unless allowSharedBudgetUpdate=true is explicitly supplied, because the change affects every campaign using that budget. A budget counts as shared when Google flags it as shared or when more than one campaign uses it (older budgets can serve several campaigns without the flag). Unknown sharing state also returns 409.  `sharedBudgetId` (Google) moves the campaign onto a shared budget from GET /v1/ads/shared-budgets, which also needs `allowSharedBudgetUpdate: true` (409 otherwise) because the campaign then splits that budget with every campaign on it; `budget` cannot ride along. `sharedBudgetId: null` moves it back onto a new budget of its own, sized by `budget` (required, daily); the new budget and the switch go out in one atomic Google mutate. A campaign that already has its own budget returns 409 for null. The budget a campaign leaves is not removed. The response carries the budget the campaign now uses.  OpenAI Ads campaigns carry exactly one spend cap: `budget.type` daily or lifetime replaces whichever cap the campaign had, with a minimum of 1 in the ad account's currency (422 below it). Lifetime can switch to daily, but OpenAI never switches a daily cap back to lifetime (422).  Reddit Ads: `budget` changes the amount of a campaign budget (Reddit campaign budget optimization); a campaign whose ad groups carry the budget returns 409 or 422, use PUT /v1/ads/ad-sets/{adSetId} there. Reddit cannot switch a published budget between daily and lifetime, so `budget.type` must match the current one (422 otherwise). `bidStrategy` is set per ad group on Reddit (PUT /v1/ads/ad-sets/{adSetId}).  `accountId` forwards the update straight to Meta for a campaign with zero ads, which would otherwise 404; the response then carries `updated: 0`.

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
$update_ad_campaign_request = {"platform":"facebook","budget":{"amount":8,"type":"daily"}}; // \Zernio\Model\UpdateAdCampaignRequest

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

Pauses or resumes a campaign, leaving the on/off switches of its ad sets and ads as they are.  Writes the campaign's own on/off switch and nothing else, on every platform (Meta, TikTok, Google, LinkedIn campaign group, Pinterest, X, ChatGPT (OpenAI)). Its ad sets and ads keep their own switches: pausing stops their delivery through the campaign, and resuming lets each of them deliver again only if its own switch is on. An ad set or ad you paused individually stays paused; resume it with PUT /v1/ads/ad-sets/{adSetId}/status or PUT /v1/ads/{adId}/status. See the Status model in the Ad Campaigns tag.  **Live read, then write.** The campaign's switch is read from the platform first. When that live read shows it already in the requested state nothing is written (`updated: 0`, `skipped: 1`, with the reason), and when the campaign delivers in that state but some of its ads are stored in the other state (for example ads switched on in the platform's own UI and still stored `paused`), those ads (up to 20, at most once every 10 minutes per campaign) are re-read and stored. Otherwise the switch is written (`updated: 1`), read back and stored, and the delivery status of the ads under it (up to 20) is re-read and stored, so an immediate GET returns what the platform now reports. A stored switch never skips a write, and when the platform cannot be read the write always goes out. On Meta the check reads the campaign's own `status`, so a delivery status such as `IN_PROCESS` or `WITH_ISSUES` does not force a write.

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

## `updateAdGroupAssets()`

```php
updateAdGroupAssets($ad_set_id, $update_campaign_assets_request): \Zernio\Model\UpdateCampaignAssets200Response
```

Update ad-group assets

Edits a Google ad group's existing assets in place; the change applies everywhere that asset is used.  Send updates with assetResourceName and the fields to change. An asset is shared: changes affect every attachment using it. Omitted fields stay unchanged. The operation consumes the Google operations budget and invalidates affected cached lists.

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
$ad_set_id = 'ad_set_id_example'; // string | Numeric Google platform id.
$update_campaign_assets_request = {"accountId":"64b1f0c8a1b2c3d4e5f60718","customerId":"1234567890","updates":[{"assetResourceName":"customers/1234567890/assets/123","calloutAsset":{"calloutText":"Simple integration"}}]}; // \Zernio\Model\UpdateCampaignAssetsRequest

try {
    $result = $apiInstance->updateAdGroupAssets($ad_set_id, $update_campaign_assets_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->updateAdGroupAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_set_id** | **string**| Numeric Google platform id. | |
| **update_campaign_assets_request** | [**\Zernio\Model\UpdateCampaignAssetsRequest**](../Model/UpdateCampaignAssetsRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateCampaignAssets200Response**](../Model/UpdateCampaignAssets200Response.md)

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

Pauses or re-enables a single Google Search keyword.  Changes `ad_group_criterion.status` for one keyword criterion (M.140). Negative keywords have no status on Google and cannot be paused or enabled.

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
$keyword_id = 'keyword_id_example'; // string | Zernio keyword ID (`id`), or Google's native `{adSetId}~{platformCriterionId}` (the tail of `resourceName`, e.g. 1234567890~987654321). A bare criterion id is rejected because it is only unique within its ad group.
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
| **keyword_id** | **string**| Zernio keyword ID (&#x60;id&#x60;), or Google&#39;s native &#x60;{adSetId}~{platformCriterionId}&#x60; (the tail of &#x60;resourceName&#x60;, e.g. 1234567890~987654321). A bare criterion id is rejected because it is only unique within its ad group. | |
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

Changes an ad set's settings, such as its budget, bid strategy, status or delivery options.  Use this for ABO budget updates, ad-set-scoped pause/resume, bid-strategy edits, Meta value-rule-set attach/detach, Meta beneficiary and payer (`dsaBeneficiary` / `dsaPayor` for the EU, `regionalRegulatedCategories` / `regionalRegulationIdentities` for the regional regimes), and Meta-only post-launch delivery settings via `platformSpecificData`. At least one updatable field is required.  Value rule sets (Meta only, see `/v1/ads/value-rule-sets`): - ATTACH or REPLACE: send `valueRuleSetId`. Attachment is driven by the id's   presence, so `valueRulesApplied: true` is optional. Sending a different id   replaces the previous association; there is no separate replace call. - DETACH: send `valueRulesApplied: false` and OMIT `valueRuleSetId`. - Sending `valueRulesApplied: false` TOGETHER with `valueRuleSetId` returns 400   `mutually_exclusive_fields`. This is deliberate: Meta attaches the rule set   whenever `value_rule_set_id` is present, even with `value_rules_applied` false,   so echoing stored state while asking to detach would silently keep the bid   adjustments live. - Eligibility: only ad sets on `LOWEST_COST_WITHOUT_CAP` or `COST_CAP`. Meta   rejects the rest server-side. - Read back with `GET /v1/ads/ad-sets/{adSetId}?fields=value_rule_set_id`. Meta   does not document `value_rules_applied` as a readable ad-set field, so the   boolean cannot be read back.  Bid strategy compatibility (per Meta's spec): - `LOWEST_COST_WITHOUT_CAP`: no `bidAmount`, no `roasAverageFloor`. - `LOWEST_COST_WITH_BID_CAP` / `COST_CAP`: `bidAmount` REQUIRED (whole currency units). - `LOWEST_COST_WITH_MIN_ROAS`: `roasAverageFloor` REQUIRED (decimal multiplier, e.g. 2.0 = 2.0x ROAS). - Meta only: send `bidAmount` WITHOUT `bidStrategy` to change the cap amount on an ad set   whose strategy (its own, or the campaign's under CBO) is COST_CAP / LOWEST_COST_WITH_BID_CAP,   leaving the strategy untouched. Send `roasAverageFloor` WITHOUT `bidStrategy` the same way   to change the floor of a LOWEST_COST_WITH_MIN_ROAS ad set. Either field against an   incompatible current strategy is a 400. - Meta CBO (the campaign holds the budget): the campaign also holds the bid strategy, so only   `bidAmount` or `roasAverageFloor` is written on the ad set. A `bidStrategy` equal to the   campaign's is accepted; a different one is a 409 (change it with   PUT /v1/ads/campaigns/{campaignId}).  Delivery settings are validated by Meta against the campaign objective; incompatible combinations (e.g. a billingEvent the optimization goal doesn't allow) surface as 400s from Meta.  When updating `budget` on an ad set whose campaign holds the budget (CBO), the response is 409 with code `invalid_field_value`. Send it to PUT /v1/ads/campaigns/{campaignId} instead.  Reddit Ads: `budget` changes the ad group's amount; an ad group that spends its campaign budget returns 422 (update the campaign instead), and Reddit cannot switch a published budget between daily and lifetime, so `budget.type` must match the current one (422 otherwise). `name` renames the ad group. `bidStrategy` maps to the ad group's `bid_strategy`: LOWEST_COST_WITHOUT_CAP = automatic bidding (BIDLESS), LOWEST_COST_WITH_BID_CAP = MANUAL_BIDDING with `bidAmount` as the bid, COST_CAP = MAXIMIZE_VOLUME with `bidAmount` as the cap; LOWEST_COST_WITH_MIN_ROAS returns 422.  `status` behaves exactly as PUT /v1/ads/ad-sets/{adSetId}/status describes: only the ad set's own switch is written, its ads keep theirs, and `statusUpdated` / `statusSkipped` report whether that switch was written or a live read showed it already in place.  Placements and targeting (Meta only): `placements` and `targeting` take the same shapes as POST /v1/ads/create. Meta replaces an ad set's targeting wholesale, so Zernio reads the live targeting first, changes only what the request names and writes the merged spec back: custom audiences, geo, age, interest groups and `targeting_automation` you do not send are kept. `placements` replaces the whole placement set, `placements: null` returns the ad set to automatic placements, and omitting it leaves placements as they are. Other platforms return 400 for either field before anything in the request is written (use PUT /v1/ads/{adId} with `targeting` where that platform supports it). The live read and the `incomeTier` lookup run before any other field is written, so a 502 or 422 from them leaves the ad set unchanged.  Reddit ad group targeting and schedule: `targeting` (same shape as on create, `placements` is a 400) and `startDate` / `endDate` change the ad group with one PATCH to Reddit. Zernio reads the live ad group first and replaces only the targeting groups the request names: the included locations (`countries`, `regions`, `metros`, `cities`, `zips`) are one list on Reddit, so sending any of them replaces all included locations, and devices, platforms, carriers and automated expansion set in Reddit Ads Manager are kept. Read the current values with GET /v1/ads/ad-sets/{adSetId}/targeting. The schedule is checked against the campaign before anything in the request is written: an ad group cannot start before a campaign that starts in the future, cannot end after the campaign's end, and under campaign budget optimization it must end by the campaign end (and has no end date when the campaign has none); each returns 400 naming `startDate` or `endDate`. Zernio never resends the PATCH on its own, so after a 5xx read the ad group back before retrying.

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

Pauses or resumes one ad set without touching its campaign, its sibling ad sets or the switches of its ads.  Thin wrapper over PUT /v1/ads/ad-sets/{adSetId} for callers that only want the status toggle and prefer a symmetric URL to /v1/ads/campaigns/{campaignId}/status.  Writes the ad set's own on/off switch and nothing else, on every platform (Meta `configured_status`, TikTok ad group `operation_status`, Google ad group status, LinkedIn campaign, Pinterest ad group, X line item, ChatGPT (OpenAI) ad group, Reddit ad group `configured_status`). Its ads keep their own switches: an ad you paused individually stays paused when the ad set resumes. The campaign above is not touched either, so an ad set resumed under a paused campaign reads `status: paused` until the campaign is resumed too. See the Status model in the Ad Campaigns tag.  **Live read, then write.** The ad set's switch is read from the platform first. When that live read shows it already in the requested state nothing is written (`updated: 0`, `skipped: 1`, with the reason), and when the ad set delivers in that state but some of its ads are stored in the other state, those ads (up to 20, at most once every 10 minutes per ad set) are re-read and stored. Otherwise the switch is written (`updated: 1`), read back and stored, and the delivery status of its ads (up to 20) is re-read and stored, so an immediate GET returns what the platform now reports. A stored switch never skips a write, and when the platform cannot be read the write always goes out. On Meta and Reddit the check reads the ad set's own switch (`status` / `configured_status`), so a repeated request skips even while `platformAdSetStatus` reads `CAMPAIGN_PAUSED`, `WITH_ISSUES` or `IN_PROCESS`.

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

Pauses or resumes a single ad without touching its ad set, campaign or sibling ads.  Ad-scoped pause/resume: flips ONLY this ad's own switch (Meta `configured_status`, TikTok `operation_status`, Google ad group ad status, LinkedIn creative, Pinterest ad, Reddit ad `configured_status`), never its parent ad set or campaign, so sibling ads keep running. X is the exception: its smallest switch is the line item. Thin wrapper over the `status` field of PUT /v1/ads/{adId}, for callers that want a URL symmetric to /v1/ads/campaigns/{campaignId}/status and /v1/ads/ad-sets/{adSetId}/status.  The ad's own switch is independent of its delivery status. An ad paused only because its campaign or ad set is off (`status: paused`, `configuredStatus: ACTIVE`) can still be switched off here, and switching an ad on under a paused campaign leaves it `paused` until the campaign is resumed. After the write the switch is read back from the platform and returned as `configuredStatus`, together with the resulting delivery `status`.  `{adId}` accepts the same identifier dialects as GET/PUT /v1/ads/{adId} (Zernio hex `_id`, Meta numeric `platformAdId`, or the creative's effective story/media IDs). `platform` is inferred from the ad, so it's not required in the body. Ads in terminal statuses (rejected, completed, cancelled) are skipped, and so is a request whose target already matches the ad's own switch as read LIVE from the platform (a stored value is never trusted alone, since the switch may have been changed in the platform's own UI). A skip also returns that live read. The rolled-up `status` never decides a skip.

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

Update portfolio bid strategy

Renames a shared Google Ads bid strategy or changes its target CPA or ROAS.  The strategy's status is output only on Google's side, so it cannot be changed here; remove a strategy in Google Ads. `type` is only needed alongside `targetCpa`/`targetRoas` to disambiguate the field Google writes to (TARGET_CPA and MAXIMIZE_CONVERSIONS both take a target CPA; TARGET_ROAS and MAXIMIZE_CONVERSION_VALUE both take a target ROAS); the strategy's family is otherwise immutable once created.

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

## `updateCampaignAdSchedule()`

```php
updateCampaignAdSchedule($campaign_id, $update_campaign_ad_schedule_request): \Zernio\Model\UpdateCampaignAdSchedule200Response
```

Replace a campaign's ad schedule (dayparting)

Replaces the days and hours a Google campaign runs, or clears them so it serves around the clock.  This is a REPLACE, not a merge: windows you leave out stop serving.  Send `schedule: []` to clear dayparting, which returns the campaign to serving around the clock.  Google rules enforced here, so you get a named field instead of a criterion error: at most 6 windows per day, a window must end after it starts, windows on the same day may not overlap, `endHour` 24 is midnight and cannot carry minutes, and minutes are quarter-hours only (0, 15, 30, 45). `bidModifier` is 0.1-10.0; Google's 0 means \"off\" for devices only, so a window is switched off by leaving it out.  Windows are half-open (Google is exclusive of the end minute), so 09:00-12:00 and 12:00-17:00 on the same day are adjacent and both valid.  Google cannot edit an ad schedule in place (every AdScheduleInfo field is prohibited on update), so this removes the live criteria and creates the new ones in a single atomic mutate. The response is read back from Google and carries the new criterion ids.

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
$update_campaign_ad_schedule_request = {"schedule":[{"dayOfWeek":"MONDAY","startHour":9,"endHour":17},{"dayOfWeek":"TUESDAY","startHour":9,"endHour":17},{"dayOfWeek":"WEDNESDAY","startHour":9,"endHour":12,"bidModifier":1.5},{"dayOfWeek":"WEDNESDAY","startHour":12,"endHour":17}]}; // \Zernio\Model\UpdateCampaignAdScheduleRequest

try {
    $result = $apiInstance->updateCampaignAdSchedule($campaign_id, $update_campaign_ad_schedule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->updateCampaignAdSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Numeric Google platform campaign id. | |
| **update_campaign_ad_schedule_request** | [**\Zernio\Model\UpdateCampaignAdScheduleRequest**](../Model/UpdateCampaignAdScheduleRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateCampaignAdSchedule200Response**](../Model/UpdateCampaignAdSchedule200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCampaignAssets()`

```php
updateCampaignAssets($campaign_id, $update_campaign_assets_request): \Zernio\Model\UpdateCampaignAssets200Response
```

Update campaign assets

Edits a Google campaign's existing assets, such as sitelinks or callouts, in place; the change applies everywhere that asset is used.  Send updates with assetResourceName and the fields to change. An asset is shared: changes affect every attachment using it. Omitted fields stay unchanged. The operation consumes the Google operations budget and invalidates affected cached lists.

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
$campaign_id = 'campaign_id_example'; // string | Numeric Google platform id.
$update_campaign_assets_request = {"accountId":"64b1f0c8a1b2c3d4e5f60718","adAccountId":"1234567890","updates":[{"assetResourceName":"customers/1234567890/assets/123","calloutAsset":{"calloutText":"Simple integration"}}]}; // \Zernio\Model\UpdateCampaignAssetsRequest

try {
    $result = $apiInstance->updateCampaignAssets($campaign_id, $update_campaign_assets_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->updateCampaignAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Numeric Google platform id. | |
| **update_campaign_assets_request** | [**\Zernio\Model\UpdateCampaignAssetsRequest**](../Model/UpdateCampaignAssetsRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateCampaignAssets200Response**](../Model/UpdateCampaignAssets200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCampaignConversionGoals()`

```php
updateCampaignConversionGoals($campaign_id, $update_campaign_conversion_goals_request): \Zernio\Model\UpdateCampaignConversionGoals200Response
```

Update campaign conversion goals

Changes which conversions a Google campaign bids on, switching between account-default goals, its own goals or a custom goal.  Sets `biddable` on campaign goals, switches `goalConfigLevel`, and/or points the campaign at a custom conversion goal, in one mutate. `customConversionGoalId: null` clears it; Google refuses that (400) while the campaign stays at CAMPAIGN level with no biddable goals, so send `goalConfigLevel: CUSTOMER` with it to fall back to the account goals. Returns the re-read campaign goals.

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
$campaign_id = 'campaign_id_example'; // string | Google campaign id
$update_campaign_conversion_goals_request = new \Zernio\Model\UpdateCampaignConversionGoalsRequest(); // \Zernio\Model\UpdateCampaignConversionGoalsRequest

try {
    $result = $apiInstance->updateCampaignConversionGoals($campaign_id, $update_campaign_conversion_goals_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->updateCampaignConversionGoals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Google campaign id | |
| **update_campaign_conversion_goals_request** | [**\Zernio\Model\UpdateCampaignConversionGoalsRequest**](../Model/UpdateCampaignConversionGoalsRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateCampaignConversionGoals200Response**](../Model/UpdateCampaignConversionGoals200Response.md)

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

Edit a Google campaign's device, location, excluded location, or language targeting

Changes a Google campaign's device, location, excluded location or language targeting after it was created.  Google Ads compliance row M.10: geo and language targeting set at creation must stay editable afterwards. Send at least one of `devices`, `locations`, `excludedLocations`, `languages`, `locationTargetingType`; each provided field REPLACES that field's existing criteria on the campaign (a full set, not a delta). Fields left out of the body are untouched. Google only; every other platform returns 501.  `devices` is the full set of device bid modifiers: a supported device you leave out is switched off with a bid modifier of 0, since Google cannot remove a device criterion. A device the campaign's channel does not carry, and a set that switches every device off, both return 422.  `locations` accepts the same shapes as campaign creation: a bare array of ISO country codes, or an object with `countries`/`regions`/`cities`/`zips`/`metros` key lists (`key` from GET /v1/ads/targeting/search?dimension=geo). Excluded locations are left untouched by `locations`. An empty location list returns 400 instead of removing every criterion: a Google campaign with no location criteria targets every country, so omit `locations` to leave targeting alone.  `excludedLocations` takes the same two shapes and replaces the campaign's negative location criteria (the places it never serves in), leaving the targeted `locations` untouched. An empty list (or `{}`) removes every exclusion. Radius exclusions are not supported. A place cannot be both targeted and excluded: a request whose result would leave one on both sides returns 400 before anything is written, and moving a place from one side to the other in the same request is applied atomically. Example: `{ \"platform\": \"google\", \"targeting\": { \"excludedLocations\": { \"countries\": [\"CA\"], \"regions\": [\"21137\"] } } }`.  The removes and the creates go out in ONE Google `googleAds:mutate`, so a failed edit leaves the campaign's previous set intact rather than a half-applied one.  `languages` is an array of Google's language codes (ISO 639-1, plus variants such as `zh_CN`); an unknown code returns 400.  `locationTargetingType` switches who the location targeting reaches: `presence` (people in or regularly in the locations) or `presence_or_interest` (also people searching for or interested in them). Example: `{ \"platform\": \"google\", \"targeting\": { \"locationTargetingType\": \"presence\" } }`.  The response includes the refreshed `devices`/`locations`/`excludedLocations`/`languages` state read back from Google after the edit, and invalidates the cached copy `GET` on this campaign would otherwise keep serving.  **Demand Gen:** Google keeps a Demand Gen campaign's locations and languages on its ad groups and refuses them on the campaign. When the campaign has one ad group they are written there and the response carries its `adGroupId` (the campaign-level `locations`/`languages` read back then stay empty). With several ad groups the call returns 400 naming them: edit each one with PUT /v1/ads/{adId} `targeting` on an ad of that ad group. Campaigns migrated from Discovery that still target on the campaign keep being written there. `devices` and `locationTargetingType` stay campaign-level. `excludedLocations` is not available on Demand Gen yet and returns 400.

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

## `updateGoogleAssetGroup()`

```php
updateGoogleAssetGroup($campaign_id, $asset_group_id, $update_google_asset_group_request): \Zernio\Model\UpdateGoogleAssetGroup200Response
```

Update a Performance Max asset group

Changes a Performance Max asset group's name, status, final URLs or display paths.  Change the name, status (ENABLED or PAUSED), final URLs or display paths. Only the fields sent are written; null on path1 or path2 clears it. Change assets with the /assets endpoint and product targeting with /listing-group-filters. validateOnly: true validates without writing.

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
$campaign_id = 'campaign_id_example'; // string | Google Ads campaign id.
$asset_group_id = 'asset_group_id_example'; // string | Google asset group id.
$update_google_asset_group_request = {"status":"PAUSED","finalUrls":["https://example.com/sale"]}; // \Zernio\Model\UpdateGoogleAssetGroupRequest

try {
    $result = $apiInstance->updateGoogleAssetGroup($campaign_id, $asset_group_id, $update_google_asset_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->updateGoogleAssetGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Google Ads campaign id. | |
| **asset_group_id** | **string**| Google asset group id. | |
| **update_google_asset_group_request** | [**\Zernio\Model\UpdateGoogleAssetGroupRequest**](../Model/UpdateGoogleAssetGroupRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateGoogleAssetGroup200Response**](../Model/UpdateGoogleAssetGroup200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
