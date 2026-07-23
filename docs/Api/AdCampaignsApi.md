# Zernio\AdCampaignsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**boostPost()**](AdCampaignsApi.md#boostPost) | **POST** /v1/ads/boost | Boost post as ad |
| [**bulkUpdateAdCampaignStatus()**](AdCampaignsApi.md#bulkUpdateAdCampaignStatus) | **POST** /v1/ads/campaigns/bulk-status | Pause or resume many campaigns |
| [**createAdCampaign()**](AdCampaignsApi.md#createAdCampaign) | **POST** /v1/ads/campaigns | Create a standalone campaign |
| [**createStandaloneAd()**](AdCampaignsApi.md#createStandaloneAd) | **POST** /v1/ads/create | Create standalone ad |
| [**deleteAd()**](AdCampaignsApi.md#deleteAd) | **DELETE** /v1/ads/{adId} | Cancel an ad |
| [**deleteAdCampaign()**](AdCampaignsApi.md#deleteAdCampaign) | **DELETE** /v1/ads/campaigns/{campaignId} | Delete a campaign |
| [**duplicateAd()**](AdCampaignsApi.md#duplicateAd) | **POST** /v1/ads/{adId}/duplicate | Duplicate an ad |
| [**duplicateAdCampaign()**](AdCampaignsApi.md#duplicateAdCampaign) | **POST** /v1/ads/campaigns/{campaignId}/duplicate | Duplicate a campaign |
| [**duplicateAdSet()**](AdCampaignsApi.md#duplicateAdSet) | **POST** /v1/ads/ad-sets/{adSetId}/duplicate | Duplicate an ad set |
| [**getAd()**](AdCampaignsApi.md#getAd) | **GET** /v1/ads/{adId} | Get ad details |
| [**getAdSetDetails()**](AdCampaignsApi.md#getAdSetDetails) | **GET** /v1/ads/ad-sets/{adSetId} | Live ad-set details incl. learning phase |
| [**getAdTree()**](AdCampaignsApi.md#getAdTree) | **GET** /v1/ads/tree | Get campaign tree |
| [**getAdsTimeline()**](AdCampaignsApi.md#getAdsTimeline) | **GET** /v1/ads/timeline | Get daily account metrics |
| [**listAdCampaigns()**](AdCampaignsApi.md#listAdCampaigns) | **GET** /v1/ads/campaigns | List campaigns |
| [**listAds()**](AdCampaignsApi.md#listAds) | **GET** /v1/ads | List ads |
| [**updateAd()**](AdCampaignsApi.md#updateAd) | **PUT** /v1/ads/{adId} | Update ad |
| [**updateAdCampaign()**](AdCampaignsApi.md#updateAdCampaign) | **PUT** /v1/ads/campaigns/{campaignId} | Update a campaign |
| [**updateAdCampaignStatus()**](AdCampaignsApi.md#updateAdCampaignStatus) | **PUT** /v1/ads/campaigns/{campaignId}/status | Pause or resume a campaign |
| [**updateAdSet()**](AdCampaignsApi.md#updateAdSet) | **PUT** /v1/ads/ad-sets/{adSetId} | Update an ad set |
| [**updateAdSetStatus()**](AdCampaignsApi.md#updateAdSetStatus) | **PUT** /v1/ads/ad-sets/{adSetId}/status | Pause or resume a single ad set |
| [**updateAdStatus()**](AdCampaignsApi.md#updateAdStatus) | **PUT** /v1/ads/{adId}/status | Pause or resume a single ad |


## `boostPost()`

```php
boostPost($boost_post_request): \Zernio\Model\UpdateAd200Response
```

Boost post as ad

Creates a paid ad campaign from an existing published post. Creates the full platform campaign hierarchy (campaign, ad set, ad).

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
$boost_post_request = new \Zernio\Model\BoostPostRequest(); // \Zernio\Model\BoostPostRequest

try {
    $result = $apiInstance->boostPost($boost_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->boostPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **boost_post_request** | [**\Zernio\Model\BoostPostRequest**](../Model/BoostPostRequest.md)|  | |

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
createAdCampaign($create_ad_campaign_request): \Zernio\Model\CreateAdCampaign201Response
```

Create a standalone campaign

Creates a campaign WITHOUT its first ad set / ad (the ODAX shell only). Ad sets join it later via `existingCampaignId` on the create endpoints. A budget here is campaign-level (CBO) by definition; omit it for ABO (each ad set carries its own budget). Created `PAUSED` unless `status: ACTIVE`. The campaign materializes in `/v1/ads/tree` via the next sync discovery pass.

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
$create_ad_campaign_request = new \Zernio\Model\CreateAdCampaignRequest(); // \Zernio\Model\CreateAdCampaignRequest

try {
    $result = $apiInstance->createAdCampaign($create_ad_campaign_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->createAdCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_ad_campaign_request** | [**\Zernio\Model\CreateAdCampaignRequest**](../Model/CreateAdCampaignRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateAdCampaign201Response**](../Model/CreateAdCampaign201Response.md)

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

Creates a paid ad with custom creative across Meta, Google Ads, Pinterest, TikTok, X/Twitter, and LinkedIn. Supports three mutually-exclusive request shapes selected by the body, a legacy single-creative shape (all platforms, default), a Meta-only multi-creative shape via the creatives array (one ad set with N ads sharing budget and targeting), and a Meta-only attach shape via adSetId (adds one new ad to an existing ad set). Per-platform required fields, budget minimums, and video-ad rules are documented on each property below. LinkedIn creates a Single Image or Single Video Ad backed by a Direct Sponsored Content \"dark post\" authored by a Company Page (see `organizationId`); supported goals are engagement, traffic, awareness, and video_views (video ads use the `video` field; video_views requires a video), and traffic ads require `linkUrl`.  **Idempotency:** this endpoint is not idempotent at the platform level (a blind retry creates a second campaign/ad set/ad). Send an `Idempotency-Key` header to make retries safe: the first request with a given key creates the ad and we store the response; a retry with the same key replays that exact response (with `Idempotent-Replayed: true`) instead of creating duplicates. Reusing a key with a different body returns 422; a key whose first request is still in flight returns 409 (retry after a short backoff). Keys are scoped to your credential and expire after 24h.

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
$create_standalone_ad_request = new \Zernio\Model\CreateStandaloneAdRequest(); // \Zernio\Model\CreateStandaloneAdRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes create retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409.

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
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes create retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. | [optional] |

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

Cancels the ad on the platform and marks it as cancelled in the database. The ad is preserved for history.

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

Deletes the whole campaign on the platform, cascading to its ad sets and ads. Locally, all Ad documents for this campaign are marked `status: cancelled`.  Meta-only for now. Other platforms return 501 Not Implemented — fall back to DELETE /v1/ads/{adId} per ad in the meantime.

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

## `duplicateAd()`

```php
duplicateAd($ad_id, $duplicate_ad_request): \Zernio\Model\DuplicateAd200Response
```

Duplicate an ad

Duplicates a single ad via Meta's native `POST /{ad-id}/copies`. The copy is created paused. `adSetId` retargets the copy into another ad set; omitted = the source's own ad set. Accepts the Zernio ad id or the platform ad id. Sync discovery is triggered automatically (`syncAfter: false` to skip).

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
$duplicate_ad_request = new \Zernio\Model\DuplicateAdRequest(); // \Zernio\Model\DuplicateAdRequest

try {
    $result = $apiInstance->duplicateAd($ad_id, $duplicate_ad_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->duplicateAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**| Zernio ad ID or platform ad ID | |
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
duplicateAdCampaign($campaign_id, $duplicate_ad_campaign_request): \Zernio\Model\DuplicateAdCampaign200Response
```

Duplicate a campaign

Duplicates a campaign, including its ad sets, ads, creatives, and targeting by default (`deepCopy: true`). The copy is created paused so callers can review before launching.  Per-platform implementation: - **Meta** uses the native `POST /{campaign-id}/copies` endpoint. - **TikTok** has no native copy primitive; Zernio walks the source   graph (`/v2/campaign/get/`, `/v2/adgroup/get/`, `/v2/ad/get/`) and   recreates each entity via the corresponding `/create/` endpoints,   carrying over budget / targeting / bid_type / bid_price /   deep_bid_type / creative fields. Spark Ad linkage (`tiktok_item_id`)   is preserved. - **LinkedIn** has no native copy primitive; Zernio walks the source   CampaignGroup → Campaigns → Creatives and recreates each entity,   carrying over `type` / `costType` / `unitCost` /   `optimizationTargetType` / `creativeSelection` / `objectiveType` /   `format` / `dailyBudget` / `totalBudget` / `targetingCriteria` /   `runSchedule` and every Creative's `content` object verbatim.   `statusOption: INHERITED_FROM_SOURCE` is evaluated **per entity**:   any Group / Campaign / Creative whose source is `ACTIVE` gets its   clone activated too. Duplicating an ACTIVE campaign with   `INHERITED_FROM_SOURCE` starts a second front of spend the moment   the clone activates — the safe default is `PAUSED`.  The new hierarchy is asynchronous to materialize in our DB — we trigger sync discovery automatically. Set `syncAfter: false` to skip and poll `/v1/ads/tree` on your own cadence.  Other platforms return 501 Not Implemented.

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

try {
    $result = $apiInstance->duplicateAdCampaign($campaign_id, $duplicate_ad_campaign_request);
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
duplicateAdSet($ad_set_id, $duplicate_ad_set_request): \Zernio\Model\DuplicateAdSet200Response
```

Duplicate an ad set

Duplicates an ad set, including its ads and creatives by default (`deepCopy: true`), via Meta's native `POST /{adset-id}/copies`. The copy is created paused so callers can review before launching. `campaignId` retargets the copy into another campaign; omitted = the source's own campaign. The new hierarchy materializes asynchronously — sync discovery is triggered automatically (`syncAfter: false` to skip).

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

try {
    $result = $apiInstance->duplicateAdSet($ad_set_id, $duplicate_ad_set_request);
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
getAd($ad_id): \Zernio\Model\GetAd200Response
```

Get ad details

Returns an ad with its creative, targeting, status, and performance metrics.  The `{adId}` path segment accepts any identifier dialect Zernio indexes for the ad: - the Zernio internal `_id` (24-char hex) - Meta's numeric `platformAdId` (the value shipped in `comment.received` webhooks as `comment.ad.id`) - the creative's `effective_object_story_id` (`{pageId}_{postId}` shape, Facebook side) - the creative's `effective_instagram_media_id` (Instagram side)  Any of the four resolve to the same ad. Caller doesn't need a translation step.

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

try {
    $result = $apiInstance->getAd($ad_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->getAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**| Zernio &#x60;_id&#x60; (hex), Meta &#x60;platformAdId&#x60; (numeric), or one of the creative&#39;s effective story/media IDs. See description for details. | |

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

Reads the ad set live from Meta, returned verbatim. The default projection includes `learning_stage_info` (learning-phase status: LEARNING / SUCCESS / FAIL / WAIVING — Meta omits its `status` key on paused ad sets), delivery settings, budgets, schedule and targeting. `fields` is a raw-passthrough override; unknown fields return Meta's 400 verbatim.

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
getAdTree($page, $limit, $source, $platform, $status, $ad_account_id, $account_id, $profile_id, $campaign_id, $from_date, $to_date, $sort, $time_increment, $daily_level): \Zernio\Model\GetAdTree200Response
```

Get campaign tree

Returns a nested Campaign > Ad Set > Ad hierarchy with rolled-up metrics at each level. Uses a two-stage aggregation: ads are grouped into ad sets, then ad sets into campaigns. Metrics are computed over an optional date range, then rolled up from ad level to ad set and campaign levels. Pagination is at the campaign level. Ads without a campaign or ad set ID are grouped into synthetic \"Ungrouped\" buckets. If no date range is provided, defaults to the last 90 days. Date range is capped at 730 days max.  Pass `timeIncrement=1` to also get a daily breakdown: each node gains a `daily[]` array of per-day metrics (same fields as the aggregated `metrics`) in the same call. Use `dailyLevel` (`campaign` default, or `adset` / `ad`) to choose which levels carry the series. This replaces calling the tree once per day for per-campaign daily trends.

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
$source = 'all'; // string | `all` (default) returns both Zernio-created ads and those discovered from the platform's ad manager — matches the web UI's default view. Pass `zernio` to restrict to isExternal=false only. Status is NOT filtered by default — use the `status` param for that.
$platform = 'platform_example'; // string
$status = new \Zernio\Model\\Zernio\Model\AdStatus(); // \Zernio\Model\AdStatus | Filter by derived campaign status (post-aggregation)
$ad_account_id = 'ad_account_id_example'; // string | Platform ad account ID
$account_id = 'account_id_example'; // string | Social account ID
$profile_id = 'profile_id_example'; // string | Profile ID
$campaign_id = 'campaign_id_example'; // string | Restrict the tree to a single campaign by its platform campaign id (the id the platform assigns, e.g. Meta's numeric campaign id). Filters the campaign set itself, so it works regardless of account size and pagination — pass this when you already hold a campaign id instead of paging the tree to find it. Mirrors the `campaignId` filter on GET /v1/ads.
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start of the METRICS date range (YYYY-MM-DD). Affects only the spend/impression numbers overlaid on each node, NOT which campaigns are returned. Defaults to 90 days ago.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End of metrics date range (YYYY-MM-DD). Defaults to today. Max 730-day range.
$sort = 'newest'; // string | Campaign-level sort order. `newest` (default) / `oldest` order by the campaign's newest-ad createdAt. `spend_desc` / `spend_asc` order by aggregated spend in the requested date range; campaigns with no spend land at the end.
$time_increment = 56; // int | Set to `1` to also return a daily breakdown. Mirrors Meta Insights' `time_increment=1`: each node gains a `daily[]` array of per-day metrics (same fields as the aggregated `metrics`) alongside the range total, so you get per-entity daily trends in ONE call instead of calling the tree once per day. Only `1` (daily) is supported. The daily series covers the same date range and uses the same source data as `metrics`. See `dailyLevel` to control which levels carry it.
$daily_level = 'campaign'; // string | Which tree levels get the `daily[]` series when `timeIncrement=1`. `campaign` (default) attaches it on campaign nodes only — the common per-campaign-trend case, and the smallest payload. `adset` adds it on ad sets too; `ad` adds it on every ad in `ads[]` as well (heaviest — a long range × up to 100 ads per ad set). Scope with `campaignId` to keep `ad`-level responses small. Ignored when `timeIncrement` is unset.

try {
    $result = $apiInstance->getAdTree($page, $limit, $source, $platform, $status, $ad_account_id, $account_id, $profile_id, $campaign_id, $from_date, $to_date, $sort, $time_increment, $daily_level);
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
| **source** | **string**| &#x60;all&#x60; (default) returns both Zernio-created ads and those discovered from the platform&#39;s ad manager — matches the web UI&#39;s default view. Pass &#x60;zernio&#x60; to restrict to isExternal&#x3D;false only. Status is NOT filtered by default — use the &#x60;status&#x60; param for that. | [optional] [default to &#39;all&#39;] |
| **platform** | **string**|  | [optional] |
| **status** | [**\Zernio\Model\AdStatus**](../Model/.md)| Filter by derived campaign status (post-aggregation) | [optional] |
| **ad_account_id** | **string**| Platform ad account ID | [optional] |
| **account_id** | **string**| Social account ID | [optional] |
| **profile_id** | **string**| Profile ID | [optional] |
| **campaign_id** | **string**| Restrict the tree to a single campaign by its platform campaign id (the id the platform assigns, e.g. Meta&#39;s numeric campaign id). Filters the campaign set itself, so it works regardless of account size and pagination — pass this when you already hold a campaign id instead of paging the tree to find it. Mirrors the &#x60;campaignId&#x60; filter on GET /v1/ads. | [optional] |
| **from_date** | **\DateTime**| Start of the METRICS date range (YYYY-MM-DD). Affects only the spend/impression numbers overlaid on each node, NOT which campaigns are returned. Defaults to 90 days ago. | [optional] |
| **to_date** | **\DateTime**| End of metrics date range (YYYY-MM-DD). Defaults to today. Max 730-day range. | [optional] |
| **sort** | **string**| Campaign-level sort order. &#x60;newest&#x60; (default) / &#x60;oldest&#x60; order by the campaign&#39;s newest-ad createdAt. &#x60;spend_desc&#x60; / &#x60;spend_asc&#x60; order by aggregated spend in the requested date range; campaigns with no spend land at the end. | [optional] [default to &#39;newest&#39;] |
| **time_increment** | **int**| Set to &#x60;1&#x60; to also return a daily breakdown. Mirrors Meta Insights&#39; &#x60;time_increment&#x3D;1&#x60;: each node gains a &#x60;daily[]&#x60; array of per-day metrics (same fields as the aggregated &#x60;metrics&#x60;) alongside the range total, so you get per-entity daily trends in ONE call instead of calling the tree once per day. Only &#x60;1&#x60; (daily) is supported. The daily series covers the same date range and uses the same source data as &#x60;metrics&#x60;. See &#x60;dailyLevel&#x60; to control which levels carry it. | [optional] |
| **daily_level** | **string**| Which tree levels get the &#x60;daily[]&#x60; series when &#x60;timeIncrement&#x3D;1&#x60;. &#x60;campaign&#x60; (default) attaches it on campaign nodes only — the common per-campaign-trend case, and the smallest payload. &#x60;adset&#x60; adds it on ad sets too; &#x60;ad&#x60; adds it on every ad in &#x60;ads[]&#x60; as well (heaviest — a long range × up to 100 ads per ad set). Scope with &#x60;campaignId&#x60; to keep &#x60;ad&#x60;-level responses small. Ignored when &#x60;timeIncrement&#x60; is unset. | [optional] [default to &#39;campaign&#39;] |

### Return type

[**\Zernio\Model\GetAdTree200Response**](../Model/GetAdTree200Response.md)

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
getAdsTimeline($account_id, $ad_account_id, $from_date, $to_date, $platform): \Zernio\Model\GetAdsTimeline200Response
```

Get daily account metrics

Returns daily aggregate metrics across all ads in a SocialAccount as a single time series — one row per calendar day in the requested range. Use this for dashboards that draw a daily-spend or daily-conversions chart, instead of calling `/v1/ads/tree` once per day.  `accountId` is required. The lookup is sibling-expanded so passing the `metaads` ID also includes ads under the linked `facebook` / `instagram` posting account (and vice-versa) — same convention as `/v1/ads/tree` and `/v1/ads`.  Date range defaults to the last 90 days. Capped at 730 days. Ranges older than the ingested history return a `202` immediately with the covered part and `backfillPending: true` while the rest is backfilled in the background; repeat the request shortly until it returns 200 with full data.

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
$account_id = 'account_id_example'; // string | Social account ID. Sibling-expanded to its linked posting↔ads pair.
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
| **account_id** | **string**| Social account ID. Sibling-expanded to its linked posting↔ads pair. | |
| **ad_account_id** | **string**| Optional platform-native ad account ID (e.g. Meta &#x60;act_…&#x60;, TikTok advertiser ID). Use when the connection wraps multiple platform ad accounts and the chart should show one only. Note: rows ingested before 2026-05-13 don&#39;t carry this column; the recurring 7-day re-sync repopulates them naturally. | [optional] |
| **from_date** | **\DateTime**| Inclusive start of metrics range (YYYY-MM-DD). Defaults to 90 days ago. | [optional] |
| **to_date** | **\DateTime**| Inclusive end of metrics range (YYYY-MM-DD). Defaults to today. Max 730-day range. | [optional] |
| **platform** | **string**| Restrict to one platform. | [optional] |

### Return type

[**\Zernio\Model\GetAdsTimeline200Response**](../Model/GetAdsTimeline200Response.md)

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
listAdCampaigns($page, $limit, $source, $platform, $status, $ad_account_id, $account_id, $profile_id, $from_date, $to_date): \Zernio\Model\ListAdCampaigns200Response
```

List campaigns

Returns campaigns as virtual aggregations over ad documents grouped by platform campaign ID. Metrics (spend, impressions, clicks, etc.) are summed across all ads in each campaign. Campaign status is derived from child ad statuses (active > pending_review > paused > error > completed > cancelled > rejected).

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
$limit = 20; // int
$source = 'all'; // string | `all` (default) returns both Zernio-created ads and those discovered from the platform's ad manager — matches the web UI's default view. Pass `zernio` to restrict to isExternal=false only. Status is NOT filtered by default — use the `status` param for that.
$platform = 'platform_example'; // string
$status = new \Zernio\Model\\Zernio\Model\AdStatus(); // \Zernio\Model\AdStatus | Filter by derived campaign status (post-aggregation)
$ad_account_id = 'ad_account_id_example'; // string | Platform ad account ID (e.g. act_123 for Meta)
$account_id = 'account_id_example'; // string | Social account ID
$profile_id = 'profile_id_example'; // string | Profile ID
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start of metrics date range (YYYY-MM-DD, inclusive). Defaults to 90 days ago when both date params are omitted.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End of metrics date range (YYYY-MM-DD, inclusive). Defaults to today. Max 730-day range.

try {
    $result = $apiInstance->listAdCampaigns($page, $limit, $source, $platform, $status, $ad_account_id, $account_id, $profile_id, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->listAdCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number (1-based) | [optional] [default to 1] |
| **limit** | **int**|  | [optional] [default to 20] |
| **source** | **string**| &#x60;all&#x60; (default) returns both Zernio-created ads and those discovered from the platform&#39;s ad manager — matches the web UI&#39;s default view. Pass &#x60;zernio&#x60; to restrict to isExternal&#x3D;false only. Status is NOT filtered by default — use the &#x60;status&#x60; param for that. | [optional] [default to &#39;all&#39;] |
| **platform** | **string**|  | [optional] |
| **status** | [**\Zernio\Model\AdStatus**](../Model/.md)| Filter by derived campaign status (post-aggregation) | [optional] |
| **ad_account_id** | **string**| Platform ad account ID (e.g. act_123 for Meta) | [optional] |
| **account_id** | **string**| Social account ID | [optional] |
| **profile_id** | **string**| Profile ID | [optional] |
| **from_date** | **\DateTime**| Start of metrics date range (YYYY-MM-DD, inclusive). Defaults to 90 days ago when both date params are omitted. | [optional] |
| **to_date** | **\DateTime**| End of metrics date range (YYYY-MM-DD, inclusive). Defaults to today. Max 730-day range. | [optional] |

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

## `listAds()`

```php
listAds($page, $limit, $source, $status, $platform, $account_id, $ad_account_id, $profile_id, $campaign_id, $platform_ad_id, $effective_object_story_id, $effective_instagram_media_id, $from_date, $to_date): \Zernio\Model\ListAds200Response
```

List ads

Returns a paginated list of ads with metrics computed over an optional date range. Use source=all to include externally-synced ads from platform ad managers. If no date range is provided, defaults to the last 90 days. Date range is capped at 730 days max.  To find the Zernio ad behind a comment you see in Meta Business Manager, filter by platformAdId (the Meta ad ID), effectiveObjectStoryId (Facebook), or effectiveInstagramMediaId (Instagram) — those are the post/media the ad's engagement lives on, and are also returned on each ad's `creative` object. Then call GET /v1/ads/{adId}/comments with the returned ad id.

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
$account_id = 'account_id_example'; // string | Social account ID
$ad_account_id = 'ad_account_id_example'; // string | Platform ad account ID (e.g. act_123 for Meta). Mirrors the same filter on /v1/ads/campaigns and /v1/ads/tree.
$profile_id = 'profile_id_example'; // string | Profile ID
$campaign_id = 'campaign_id_example'; // string | Platform campaign ID (filter ads within a campaign)
$platform_ad_id = 'platform_ad_id_example'; // string | Meta ad ID. Returns the ad with this platform-side ad ID.
$effective_object_story_id = 'effective_object_story_id_example'; // string | Facebook `{pageId}_{postId}` of the post the ad's engagement lives on (Meta `effective_object_story_id`). Use to map a Business-Manager-visible post back to the Zernio ad.
$effective_instagram_media_id = 'effective_instagram_media_id_example'; // string | Instagram media ID of the boosted post (Meta `effective_instagram_media_id`). Use to map a Business-Manager-visible IG post back to the Zernio ad.
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start of metrics date range (YYYY-MM-DD). Defaults to 90 days ago.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End of metrics date range (YYYY-MM-DD). Defaults to today. Max 730-day range.

try {
    $result = $apiInstance->listAds($page, $limit, $source, $status, $platform, $account_id, $ad_account_id, $profile_id, $campaign_id, $platform_ad_id, $effective_object_story_id, $effective_instagram_media_id, $from_date, $to_date);
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
| **account_id** | **string**| Social account ID | [optional] |
| **ad_account_id** | **string**| Platform ad account ID (e.g. act_123 for Meta). Mirrors the same filter on /v1/ads/campaigns and /v1/ads/tree. | [optional] |
| **profile_id** | **string**| Profile ID | [optional] |
| **campaign_id** | **string**| Platform campaign ID (filter ads within a campaign) | [optional] |
| **platform_ad_id** | **string**| Meta ad ID. Returns the ad with this platform-side ad ID. | [optional] |
| **effective_object_story_id** | **string**| Facebook &#x60;{pageId}_{postId}&#x60; of the post the ad&#39;s engagement lives on (Meta &#x60;effective_object_story_id&#x60;). Use to map a Business-Manager-visible post back to the Zernio ad. | [optional] |
| **effective_instagram_media_id** | **string**| Instagram media ID of the boosted post (Meta &#x60;effective_instagram_media_id&#x60;). Use to map a Business-Manager-visible IG post back to the Zernio ad. | [optional] |
| **from_date** | **\DateTime**| Start of metrics date range (YYYY-MM-DD). Defaults to 90 days ago. | [optional] |
| **to_date** | **\DateTime**| End of metrics date range (YYYY-MM-DD). Defaults to today. Max 730-day range. | [optional] |

### Return type

[**\Zernio\Model\ListAds200Response**](../Model/ListAds200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAd()`

```php
updateAd($ad_id, $update_ad_request): \Zernio\Model\UpdateAd200Response
```

Update ad

Patch one or more fields on an ad. Status, budget, targeting, and creative changes are propagated to the platform.  Per-platform support: - **Meta** (Facebook + Instagram): all fields supported. - **TikTok**: status, budget, targeting (via `/v2/adgroup/update/`), and creative   (via `/v2/ad/update/` patch-style — `headline` is ignored, `body` becomes `ad_text`). - **Pinterest / X / LinkedIn / Google**: status + budget only. Sending `targeting`   or `creative` returns 501 with code `unsupported_platform_operation`.

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
$update_ad_request = new \Zernio\Model\UpdateAdRequest(); // \Zernio\Model\UpdateAdRequest

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

Campaign-level edits. At least one of `budget`, `bidStrategy`, `name` or `platformSpecificData` is required.  - `budget` updates the CBO (Campaign Budget Optimization) budget. For ABO campaigns   (where the budget lives on the ad set), use PUT /v1/ads/ad-sets/{adSetId} instead — this endpoint   will return 409 with code BUDGET_LEVEL_MISMATCH. - `bidStrategy` sets the campaign-level default bid strategy. Per Meta's spec, `bid_amount` and   `bid_constraints` do NOT exist at the campaign level — pass them via PUT /v1/ads/ad-sets/{adSetId}. - `platformSpecificData.spendCap` (Meta only) sets the campaign's lifetime spend cap, in the ad   account's currency.  Meta-only for now. Other platforms return 501 Not Implemented.

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
$update_ad_campaign_request = new \Zernio\Model\UpdateAdCampaignRequest(); // \Zernio\Model\UpdateAdCampaignRequest

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

Updates the status of all ads in a campaign. Makes one platform API call (not per-ad) since status cascades through the campaign hierarchy. Ads in terminal statuses (rejected, completed, cancelled) are automatically skipped.

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

## `updateAdSet()`

```php
updateAdSet($ad_set_id, $update_ad_set_request): \Zernio\Model\UpdateAdSet200Response
```

Update an ad set

Ad-set-level writes. Use this for ABO budget updates, ad-set-scoped pause/resume, bid-strategy edits, and Meta-only post-launch delivery settings via `platformSpecificData`. At least one updatable field is required.  Bid strategy compatibility (per Meta's spec): - `LOWEST_COST_WITHOUT_CAP`: no `bidAmount`, no `roasAverageFloor`. - `LOWEST_COST_WITH_BID_CAP` / `COST_CAP`: `bidAmount` REQUIRED (whole currency units). - `LOWEST_COST_WITH_MIN_ROAS`: `roasAverageFloor` REQUIRED (decimal multiplier, e.g. 2.0 = 2.0x ROAS).  Delivery settings are validated by Meta against the campaign objective; incompatible combinations (e.g. a billingEvent the optimization goal doesn't allow) surface as 400s from Meta.  When updating `budget` on an ABO campaign: if the parent campaign is CBO, the response is 409 with code BUDGET_LEVEL_MISMATCH — route to PUT /v1/ads/campaigns/{campaignId} instead.

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

Ad-set-scoped pause/resume (doesn't touch sibling ad sets). Thin wrapper over PUT /v1/ads/ad-sets/{adSetId} for callers that only want the status toggle and prefer a symmetric URL to /v1/ads/campaigns/{campaignId}/status.

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
updateAdStatus($ad_id, $update_ad_status_request): \Zernio\Model\UpdateAdStatus200Response
```

Pause or resume a single ad

Ad-scoped pause/resume — touches ONLY this ad, never its parent ad set or campaign (so sibling ads keep running). Thin wrapper over the `status` field of PUT /v1/ads/{adId}, for callers that want a URL symmetric to /v1/ads/campaigns/{campaignId}/status and /v1/ads/ad-sets/{adSetId}/status.  `{adId}` accepts the same identifier dialects as GET/PUT /v1/ads/{adId} (Zernio hex `_id`, Meta numeric `platformAdId`, or the creative's effective story/media IDs). `platform` is inferred from the ad, so it's not required in the body. Ads in terminal statuses (rejected, completed, cancelled) and no-op flips (already in the target state) are skipped.

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
$update_ad_status_request = new \Zernio\Model\UpdateAdStatusRequest(); // \Zernio\Model\UpdateAdStatusRequest

try {
    $result = $apiInstance->updateAdStatus($ad_id, $update_ad_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCampaignsApi->updateAdStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**| Zernio &#x60;_id&#x60; (hex), Meta &#x60;platformAdId&#x60; (numeric), or one of the creative&#39;s effective story/media IDs. | |
| **update_ad_status_request** | [**\Zernio\Model\UpdateAdStatusRequest**](../Model/UpdateAdStatusRequest.md)|  | |

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
