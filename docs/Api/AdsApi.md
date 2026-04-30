# Zernio\AdsApi

Paid advertising management across Meta (Facebook/Instagram), Google, TikTok, LinkedIn, Pinterest, and X/Twitter. Create, boost, pause/resume ads and campaigns, view metrics, and manage audiences. Requires the Ads add-on.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**boostPost()**](AdsApi.md#boostPost) | **POST** /v1/ads/boost | Boost post as ad |
| [**createCtwaAd()**](AdsApi.md#createCtwaAd) | **POST** /v1/ads/ctwa | Create Click-to-WhatsApp ad |
| [**createStandaloneAd()**](AdsApi.md#createStandaloneAd) | **POST** /v1/ads/create | Create standalone ad |
| [**deleteAd()**](AdsApi.md#deleteAd) | **DELETE** /v1/ads/{adId} | Cancel an ad |
| [**getAd()**](AdsApi.md#getAd) | **GET** /v1/ads/{adId} | Get ad details |
| [**getAdAnalytics()**](AdsApi.md#getAdAnalytics) | **GET** /v1/ads/{adId}/analytics | Get ad analytics |
| [**getAdComments()**](AdsApi.md#getAdComments) | **GET** /v1/ads/{adId}/comments | List comments on an ad |
| [**listAdAccounts()**](AdsApi.md#listAdAccounts) | **GET** /v1/ads/accounts | List ad accounts |
| [**listAds()**](AdsApi.md#listAds) | **GET** /v1/ads | List ads |
| [**listAdsBusinessCenters()**](AdsApi.md#listAdsBusinessCenters) | **GET** /v1/ads/business-centers | List TikTok Business Centers |
| [**listConversionDestinations()**](AdsApi.md#listConversionDestinations) | **GET** /v1/accounts/{accountId}/conversion-destinations | List destinations for the Conversions API |
| [**searchAdInterests()**](AdsApi.md#searchAdInterests) | **GET** /v1/ads/interests | Search targeting interests |
| [**searchAdTargetingLocations()**](AdsApi.md#searchAdTargetingLocations) | **GET** /v1/ads/targeting/search | Search geo targeting locations (Meta) |
| [**sendConversions()**](AdsApi.md#sendConversions) | **POST** /v1/ads/conversions | Send conversion events to an ad platform |
| [**sendWhatsAppConversion()**](AdsApi.md#sendWhatsAppConversion) | **POST** /v1/whatsapp/conversions | Send WhatsApp conversion event |
| [**updateAd()**](AdsApi.md#updateAd) | **PUT** /v1/ads/{adId} | Update ad |


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


$apiInstance = new Zernio\Api\AdsApi(
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
    echo 'Exception when calling AdsApi->boostPost: ', $e->getMessage(), PHP_EOL;
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

## `createCtwaAd()`

```php
createCtwaAd($create_ctwa_ad_request): \Zernio\Model\CreateCtwaAd201Response
```

Create Click-to-WhatsApp ad

Creates a Click-to-WhatsApp (CTWA) ad on Meta. When tapped, the ad opens a WhatsApp conversation with the business attached to the supplied Facebook Page, and the full hierarchy (campaign, ad set, creative, ad) is created and activated in one call. The CTA is locked to WHATSAPP_MESSAGE and the destination is hard-coded to api.whatsapp.com/send; Meta resolves the actual WhatsApp number from the Page-to-WA pairing configured in Page settings or Business Manager. Prerequisites enforced by Meta (surfaced as platform_error on failure), the Facebook Page must be paired with a verified WhatsApp Business number, the WhatsApp Business Account must be business-verified, and the Meta access token must carry ads_management.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_ctwa_ad_request = new \Zernio\Model\CreateCtwaAdRequest(); // \Zernio\Model\CreateCtwaAdRequest

try {
    $result = $apiInstance->createCtwaAd($create_ctwa_ad_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->createCtwaAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_ctwa_ad_request** | [**\Zernio\Model\CreateCtwaAdRequest**](../Model/CreateCtwaAdRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateCtwaAd201Response**](../Model/CreateCtwaAd201Response.md)

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
createStandaloneAd($create_standalone_ad_request): \Zernio\Model\CreateStandaloneAd201Response
```

Create standalone ad

Creates a paid ad with custom creative across Meta, Google Ads, Pinterest, TikTok, and X/Twitter. Supports three mutually-exclusive request shapes selected by the body, a legacy single-creative shape (all platforms, default), a Meta-only multi-creative shape via the creatives array (one ad set with N ads sharing budget and targeting), and a Meta-only attach shape via adSetId (adds one new ad to an existing ad set). Per-platform required fields, budget minimums, and video-ad rules (Meta only) are documented on each property below.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_standalone_ad_request = new \Zernio\Model\CreateStandaloneAdRequest(); // \Zernio\Model\CreateStandaloneAdRequest

try {
    $result = $apiInstance->createStandaloneAd($create_standalone_ad_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->createStandaloneAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_standalone_ad_request** | [**\Zernio\Model\CreateStandaloneAdRequest**](../Model/CreateStandaloneAdRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateStandaloneAd201Response**](../Model/CreateStandaloneAd201Response.md)

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


$apiInstance = new Zernio\Api\AdsApi(
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
    echo 'Exception when calling AdsApi->deleteAd: ', $e->getMessage(), PHP_EOL;
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

## `getAd()`

```php
getAd($ad_id): \Zernio\Model\GetAd200Response
```

Get ad details

Returns an ad with its creative, targeting, status, and performance metrics.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_id = 'ad_id_example'; // string

try {
    $result = $apiInstance->getAd($ad_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->getAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**|  | |

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

## `getAdAnalytics()`

```php
getAdAnalytics($ad_id, $from_date, $to_date, $breakdowns): \Zernio\Model\GetAdAnalytics200Response
```

Get ad analytics

Returns detailed performance analytics for an ad. Includes summary metrics, a daily timeline over the requested date range, and optional demographic breakdowns (Meta and TikTok only). If no date range is provided, defaults to the last 90 days. Date range is capped at 90 days max.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_id = 'ad_id_example'; // string
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start of date range (YYYY-MM-DD). Defaults to 90 days ago.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End of date range (YYYY-MM-DD). Defaults to today. Max 90-day range.
$breakdowns = 'breakdowns_example'; // string | Comma-separated breakdown dimensions. Meta: age, gender, country, publisher_platform, device_platform, region. TikTok: gender, age, country_code, platform, ac, language.

try {
    $result = $apiInstance->getAdAnalytics($ad_id, $from_date, $to_date, $breakdowns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->getAdAnalytics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**|  | |
| **from_date** | **\DateTime**| Start of date range (YYYY-MM-DD). Defaults to 90 days ago. | [optional] |
| **to_date** | **\DateTime**| End of date range (YYYY-MM-DD). Defaults to today. Max 90-day range. | [optional] |
| **breakdowns** | **string**| Comma-separated breakdown dimensions. Meta: age, gender, country, publisher_platform, device_platform, region. TikTok: gender, age, country_code, platform, ac, language. | [optional] |

### Return type

[**\Zernio\Model\GetAdAnalytics200Response**](../Model/GetAdAnalytics200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdComments()`

```php
getAdComments($ad_id, $limit, $cursor): \Zernio\Model\GetAdComments200Response
```

List comments on an ad

Returns comments on an ad's underlying creative post. Useful for moderating or analyzing engagement on dark posts (ad creatives that never went live organically), which the regular GET /v1/inbox/comments/{postId} endpoint cannot serve because dark posts are not in Zernio's post database.  Resolves the ad's creative effective_object_story_id (Facebook) or effective_instagram_media_id (Instagram) via the Marketing API on each call (cached in-process by the platform client), then fetches comments from the Graph API.  Meta-only. Other ad platforms (TikTok, LinkedIn, Pinterest, Google, X) do not expose a public per-ad comments API and return feature_not_available.  Requires the Ads add-on. Response shape matches GET /v1/inbox/comments/{postId}.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_id = 'ad_id_example'; // string | Internal Zernio ad ID (ObjectId).
$limit = 25; // int
$cursor = 'cursor_example'; // string | Pagination cursor from a previous response.

try {
    $result = $apiInstance->getAdComments($ad_id, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->getAdComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**| Internal Zernio ad ID (ObjectId). | |
| **limit** | **int**|  | [optional] [default to 25] |
| **cursor** | **string**| Pagination cursor from a previous response. | [optional] |

### Return type

[**\Zernio\Model\GetAdComments200Response**](../Model/GetAdComments200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAdAccounts()`

```php
listAdAccounts($account_id, $ad_account_id, $limit): \Zernio\Model\ListAdAccounts200Response
```

List ad accounts

Returns the platform ad accounts available for the given social account (e.g. Meta ad accounts, TikTok advertiser IDs, Google Ads customer IDs).  For TikTok agencies: enumerates every advertiser under every Business Center the token can read (paginated server-side), then chunks the lookup against TikTok's `/advertiser/info/` endpoint (which has a per-call cap of ≤100 IDs). Solo advertisers without a BC fall back to the OAuth-time `advertiser_ids` list. Cached for 1h on the SocialAccount; lazy-refreshed on first call after expiry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Social account ID
$ad_account_id = 'ad_account_id_example'; // string | Filter response to a single platform ad account ID (e.g. `act_123` for Meta, advertiser_id for TikTok). Returns at most one item.
$limit = 56; // int | Clamp the returned `accounts[]` length. Useful for typeahead pickers on agency tokens with hundreds of advertisers.

try {
    $result = $apiInstance->listAdAccounts($account_id, $ad_account_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->listAdAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Social account ID | |
| **ad_account_id** | **string**| Filter response to a single platform ad account ID (e.g. &#x60;act_123&#x60; for Meta, advertiser_id for TikTok). Returns at most one item. | [optional] |
| **limit** | **int**| Clamp the returned &#x60;accounts[]&#x60; length. Useful for typeahead pickers on agency tokens with hundreds of advertisers. | [optional] |

### Return type

[**\Zernio\Model\ListAdAccounts200Response**](../Model/ListAdAccounts200Response.md)

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
listAds($page, $limit, $source, $status, $platform, $account_id, $ad_account_id, $profile_id, $campaign_id, $from_date, $to_date): \Zernio\Model\ListAds200Response
```

List ads

Returns a paginated list of ads with metrics computed over an optional date range. Use source=all to include externally-synced ads from platform ad managers. If no date range is provided, defaults to the last 90 days. Date range is capped at 90 days max.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdsApi(
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
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start of metrics date range (YYYY-MM-DD). Defaults to 90 days ago.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End of metrics date range (YYYY-MM-DD). Defaults to today. Max 90-day range.

try {
    $result = $apiInstance->listAds($page, $limit, $source, $status, $platform, $account_id, $ad_account_id, $profile_id, $campaign_id, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->listAds: ', $e->getMessage(), PHP_EOL;
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
| **from_date** | **\DateTime**| Start of metrics date range (YYYY-MM-DD). Defaults to 90 days ago. | [optional] |
| **to_date** | **\DateTime**| End of metrics date range (YYYY-MM-DD). Defaults to today. Max 90-day range. | [optional] |

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

## `listAdsBusinessCenters()`

```php
listAdsBusinessCenters($account_id): \Zernio\Model\ListAdsBusinessCenters200Response
```

List TikTok Business Centers

Returns the TikTok Business Centers (BCs) the connected `tiktokads` account can read. Each BC reports its advertiser count so callers can build agency-style pickers without re-walking `/v1/ads/accounts` per BC.  TikTok-only. Solo advertisers (non-agency tokens) return an empty array.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the `tiktokads` (or parent `tiktok` posting) SocialAccount

try {
    $result = $apiInstance->listAdsBusinessCenters($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->listAdsBusinessCenters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| ID of the &#x60;tiktokads&#x60; (or parent &#x60;tiktok&#x60; posting) SocialAccount | |

### Return type

[**\Zernio\Model\ListAdsBusinessCenters200Response**](../Model/ListAdsBusinessCenters200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConversionDestinations()`

```php
listConversionDestinations($account_id): \Zernio\Model\ListConversionDestinations200Response
```

List destinations for the Conversions API

Returns the list of pixels (Meta) or conversion actions (Google) accessible to the connected ads account. Use the returned `id` as `destinationId` when posting to `POST /v1/ads/conversions`.  For Google, each destination's `type` reflects the conversion action's category (PURCHASE, LEAD, SIGN_UP, etc.) — the event type is locked to the destination. For Meta, `type` is absent: pixels accept any event name per request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | SocialAccount ID (metaads or googleads).

try {
    $result = $apiInstance->listConversionDestinations($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->listConversionDestinations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| SocialAccount ID (metaads or googleads). | |

### Return type

[**\Zernio\Model\ListConversionDestinations200Response**](../Model/ListConversionDestinations200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchAdInterests()`

```php
searchAdInterests($q, $account_id): \Zernio\Model\SearchAdInterests200Response
```

Search targeting interests

Search for interest-based targeting options available on the platform.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | Search query
$account_id = 'account_id_example'; // string | Social account ID

try {
    $result = $apiInstance->searchAdInterests($q, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->searchAdInterests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**| Search query | |
| **account_id** | **string**| Social account ID | |

### Return type

[**\Zernio\Model\SearchAdInterests200Response**](../Model/SearchAdInterests200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchAdTargetingLocations()`

```php
searchAdTargetingLocations($account_id, $q, $type, $country_code, $limit): \Zernio\Model\SearchAdTargetingLocations200Response
```

Search geo targeting locations (Meta)

Resolve a human-readable location name into Meta's opaque `key` used in `targeting.cities[]` / `targeting.regions[]` on `POST /v1/ads/create` (and the same fields under `targeting.geo_locations` on `POST /v1/ads/boost`). Wraps Meta's `/search?type=adgeolocation` endpoint.  Meta-only for now. Other platforms have their own location id systems and are not exposed here.  Per Meta's docs, `q` must contain only the locality name (e.g. `\"Amsterdam\"`, not `\"Amsterdam, NL\"`). Use `countryCode` to disambiguate when the same name exists in multiple countries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Social account ID (must be a connected Facebook or Instagram account).
$q = 'q_example'; // string | Location name. Locality only — no region/country suffix.
$type = 'city'; // string | Type of location to search. Defaults to city.
$country_code = 'country_code_example'; // string | ISO 3166-1 alpha-2 country code (e.g. NL) to scope the search.
$limit = 25; // int | Maximum results to return.

try {
    $result = $apiInstance->searchAdTargetingLocations($account_id, $q, $type, $country_code, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->searchAdTargetingLocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Social account ID (must be a connected Facebook or Instagram account). | |
| **q** | **string**| Location name. Locality only — no region/country suffix. | |
| **type** | **string**| Type of location to search. Defaults to city. | [optional] [default to &#39;city&#39;] |
| **country_code** | **string**| ISO 3166-1 alpha-2 country code (e.g. NL) to scope the search. | [optional] |
| **limit** | **int**| Maximum results to return. | [optional] [default to 25] |

### Return type

[**\Zernio\Model\SearchAdTargetingLocations200Response**](../Model/SearchAdTargetingLocations200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendConversions()`

```php
sendConversions($send_conversions_request): \Zernio\Model\SendConversions200Response
```

Send conversion events to an ad platform

Relay one or more conversion events to the target ad platform's native Conversions API. Supported platforms: Meta (metaads) via Graph API, Google Ads (googleads) via Data Manager API `ingestEvents`.  Platform is inferred from the provided `accountId`. `destinationId` semantics differ per platform: - Meta: pixel (dataset) ID, e.g. \"123456789012345\" - Google: conversion action resource name, e.g.   \"customers/1234567890/conversionActions/987654321\"  Callers can list valid destinations via `GET /v1/accounts/{accountId}/conversion-destinations`.  All PII (email, phone, names, external IDs) is hashed with SHA-256 server-side per each platform's normalization spec (including Google's Gmail-specific dot/plus-suffix stripping). Send plaintext.  Requires the Ads add-on.  Batching: Meta caps at 1000 events per request and rejects the entire batch if any event is malformed. Google caps at 2000. Both are handled automatically by chunking.  Dedup: pass a stable `eventId` on every event. Meta uses it to dedupe against pixel events; Google maps it to transactionId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_conversions_request = new \Zernio\Model\SendConversionsRequest(); // \Zernio\Model\SendConversionsRequest

try {
    $result = $apiInstance->sendConversions($send_conversions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->sendConversions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_conversions_request** | [**\Zernio\Model\SendConversionsRequest**](../Model/SendConversionsRequest.md)|  | |

### Return type

[**\Zernio\Model\SendConversions200Response**](../Model/SendConversions200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendWhatsAppConversion()`

```php
sendWhatsAppConversion($send_whats_app_conversion_request): \Zernio\Model\SendWhatsAppConversion200Response
```

Send WhatsApp conversion event

Forward a WhatsApp Business Messaging conversion event (`LeadSubmitted`, `Purchase`, `AddToCart`, `InitiateCheckout`, `ViewContent`) to Meta's Conversions API with `action_source = business_messaging` and `messaging_channel = whatsapp`. The endpoint looks up the originating CTWA click ID (`ctwa_clid`) captured on the first inbound message of the conversation and replays it on every event so Meta can attribute the conversion back to the Click-to-WhatsApp ad that drove the chat.  Configuration prerequisites on the WhatsApp account metadata:   - `metaCapiDatasetId`: the Meta Pixel/Dataset ID linked to the WABA.   - `connectedFacebookPageId`: the Facebook Page paired with the     WhatsApp Business number.  Identify the conversation by either `conversationId` (preferred) or `phoneE164` (digits only, no `+`). At least one is required. If the conversation has no captured `ctwa_clid`, the request returns 422 because there is nothing to attribute.  Token and dataset coupling: the WhatsApp account's accessToken must have access to the configured `metaCapiDatasetId`. By default a WABA's system-user token is scoped to the WABA's own Business Manager and cannot post to a pixel owned by a different Business; Meta returns code 100 in that case. Either share the dataset with the WhatsApp app's Business in BM, or use a dataset already in the same Business as the WABA.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_whats_app_conversion_request = new \Zernio\Model\SendWhatsAppConversionRequest(); // \Zernio\Model\SendWhatsAppConversionRequest

try {
    $result = $apiInstance->sendWhatsAppConversion($send_whats_app_conversion_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->sendWhatsAppConversion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_whats_app_conversion_request** | [**\Zernio\Model\SendWhatsAppConversionRequest**](../Model/SendWhatsAppConversionRequest.md)|  | |

### Return type

[**\Zernio\Model\SendWhatsAppConversion200Response**](../Model/SendWhatsAppConversion200Response.md)

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

Patch one or more fields on an ad. Status, budget, targeting, and creative changes are propagated to the platform.  Per-platform support: - **Meta** (Facebook + Instagram): all fields supported. - **TikTok**: status, budget, targeting (via `/v2/adgroup/update/`), and creative   (via `/v2/ad/update/` patch-style — `headline` is ignored, `body` becomes `ad_text`). - **Pinterest / X / LinkedIn / Google**: status + budget only. Sending `targeting`   or `creative` returns 501 with code `unsupported_platform_operation`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdsApi(
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
    echo 'Exception when calling AdsApi->updateAd: ', $e->getMessage(), PHP_EOL;
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
