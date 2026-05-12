# Zernio\AdsApi

Paid advertising management across Meta (Facebook/Instagram), Google, TikTok, LinkedIn, Pinterest, and X/Twitter. Create, boost, pause/resume ads and campaigns, view metrics, and manage audiences. Requires the Ads add-on.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addConversionAssociations()**](AdsApi.md#addConversionAssociations) | **POST** /v1/accounts/{accountId}/conversion-destinations/{destinationId}/associations | Associate campaigns with a conversion destination |
| [**boostPost()**](AdsApi.md#boostPost) | **POST** /v1/ads/boost | Boost post as ad |
| [**createConversionDestination()**](AdsApi.md#createConversionDestination) | **POST** /v1/accounts/{accountId}/conversion-destinations | Create a conversion destination (LinkedIn) |
| [**createCtwaAd()**](AdsApi.md#createCtwaAd) | **POST** /v1/ads/ctwa | Create Click-to-WhatsApp ad |
| [**createStandaloneAd()**](AdsApi.md#createStandaloneAd) | **POST** /v1/ads/create | Create standalone ad |
| [**deleteAd()**](AdsApi.md#deleteAd) | **DELETE** /v1/ads/{adId} | Cancel an ad |
| [**deleteConversionDestination()**](AdsApi.md#deleteConversionDestination) | **DELETE** /v1/accounts/{accountId}/conversion-destinations/{destinationId} | Soft-delete a conversion destination |
| [**getAd()**](AdsApi.md#getAd) | **GET** /v1/ads/{adId} | Get ad details |
| [**getAdAnalytics()**](AdsApi.md#getAdAnalytics) | **GET** /v1/ads/{adId}/analytics | Get ad analytics |
| [**getAdComments()**](AdsApi.md#getAdComments) | **GET** /v1/ads/{adId}/comments | List comments on an ad |
| [**getConversionDestination()**](AdsApi.md#getConversionDestination) | **GET** /v1/accounts/{accountId}/conversion-destinations/{destinationId} | Fetch a single conversion destination |
| [**getConversionMetrics()**](AdsApi.md#getConversionMetrics) | **GET** /v1/accounts/{accountId}/conversion-destinations/{destinationId}/metrics | Fetch attribution metrics for a conversion destination |
| [**listAdAccounts()**](AdsApi.md#listAdAccounts) | **GET** /v1/ads/accounts | List ad accounts |
| [**listAds()**](AdsApi.md#listAds) | **GET** /v1/ads | List ads |
| [**listAdsBusinessCenters()**](AdsApi.md#listAdsBusinessCenters) | **GET** /v1/ads/business-centers | List TikTok Business Centers |
| [**listConversionAssociations()**](AdsApi.md#listConversionAssociations) | **GET** /v1/accounts/{accountId}/conversion-destinations/{destinationId}/associations | List campaigns associated with a conversion destination |
| [**listConversionDestinations()**](AdsApi.md#listConversionDestinations) | **GET** /v1/accounts/{accountId}/conversion-destinations | List destinations for the Conversions API |
| [**removeConversionAssociations()**](AdsApi.md#removeConversionAssociations) | **DELETE** /v1/accounts/{accountId}/conversion-destinations/{destinationId}/associations | Remove campaign↔conversion associations |
| [**searchAdInterests()**](AdsApi.md#searchAdInterests) | **GET** /v1/ads/interests | Search targeting interests |
| [**searchAdTargetingLocations()**](AdsApi.md#searchAdTargetingLocations) | **GET** /v1/ads/targeting/search | Search geo targeting locations (Meta) |
| [**sendConversions()**](AdsApi.md#sendConversions) | **POST** /v1/ads/conversions | Send conversion events to an ad platform |
| [**sendWhatsAppConversion()**](AdsApi.md#sendWhatsAppConversion) | **POST** /v1/whatsapp/conversions | Send WhatsApp conversion event |
| [**updateAd()**](AdsApi.md#updateAd) | **PUT** /v1/ads/{adId} | Update ad |
| [**updateConversionDestination()**](AdsApi.md#updateConversionDestination) | **PATCH** /v1/accounts/{accountId}/conversion-destinations/{destinationId} | Update a conversion destination |


## `addConversionAssociations()`

```php
addConversionAssociations($account_id, $destination_id, $add_conversion_associations_request): \Zernio\Model\AddConversionAssociations200Response
```

Associate campaigns with a conversion destination

Associate one or more campaigns with this conversion rule. Returns a per-campaign success/failure result so callers can retry only the rows that failed (e.g. wrong campaign type for the rule's objective).

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
$account_id = 'account_id_example'; // string
$destination_id = 'destination_id_example'; // string
$add_conversion_associations_request = new \Zernio\Model\AddConversionAssociationsRequest(); // \Zernio\Model\AddConversionAssociationsRequest

try {
    $result = $apiInstance->addConversionAssociations($account_id, $destination_id, $add_conversion_associations_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->addConversionAssociations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **destination_id** | **string**|  | |
| **add_conversion_associations_request** | [**\Zernio\Model\AddConversionAssociationsRequest**](../Model/AddConversionAssociationsRequest.md)|  | |

### Return type

[**\Zernio\Model\AddConversionAssociations200Response**](../Model/AddConversionAssociations200Response.md)

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

## `createConversionDestination()`

```php
createConversionDestination($account_id, $create_conversion_destination_request): \Zernio\Model\CreateConversionDestination201Response
```

Create a conversion destination (LinkedIn)

Create a new conversion rule on the platform. LinkedIn-only today; other platforms manage destinations in their own UIs and return 405.  For LinkedIn, the rule is created with `conversionMethod=CONVERSIONS_API` and (by default) auto-associated with all of the ad account's campaigns via `autoAssociationType=ALL_CAMPAIGNS`. Pass `autoAssociationType: NONE` to opt out and manage associations explicitly via the associations endpoints below.  365-day attribution windows are only valid for `SUBMIT_APPLICATION`, `PURCHASE`, `ADD_TO_CART`, `QUALIFIED_LEAD`, and `LEAD` rule types; the API rejects other combinations locally.

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
$account_id = 'account_id_example'; // string | SocialAccount ID (linkedinads).
$create_conversion_destination_request = new \Zernio\Model\CreateConversionDestinationRequest(); // \Zernio\Model\CreateConversionDestinationRequest

try {
    $result = $apiInstance->createConversionDestination($account_id, $create_conversion_destination_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->createConversionDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| SocialAccount ID (linkedinads). | |
| **create_conversion_destination_request** | [**\Zernio\Model\CreateConversionDestinationRequest**](../Model/CreateConversionDestinationRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateConversionDestination201Response**](../Model/CreateConversionDestination201Response.md)

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

Creates a paid ad with custom creative across Meta, Google Ads, Pinterest, TikTok, X/Twitter, and LinkedIn. Supports three mutually-exclusive request shapes selected by the body, a legacy single-creative shape (all platforms, default), a Meta-only multi-creative shape via the creatives array (one ad set with N ads sharing budget and targeting), and a Meta-only attach shape via adSetId (adds one new ad to an existing ad set). Per-platform required fields, budget minimums, and video-ad rules are documented on each property below. LinkedIn creates a Single Image or Single Video Ad backed by a Direct Sponsored Content \"dark post\" authored by a Company Page (see `organizationId`); supported goals are engagement, traffic, awareness, and video_views (video ads use the `video` field; video_views requires a video), and traffic ads require `linkUrl`.

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

## `deleteConversionDestination()`

```php
deleteConversionDestination($account_id, $destination_id, $ad_account_id)
```

Soft-delete a conversion destination

LinkedIn-only today. LinkedIn does not expose hard-delete on conversion rules — what their UI calls \"delete\" is the same `enabled: false` flip we apply here. The rule remains fetchable via GET with `status: 'inactive'`; the unified discovery endpoint hides it by default.  `adAccountId` may be passed as a query parameter (recommended) or as a JSON body field for clients that can send DELETE bodies.

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
$account_id = 'account_id_example'; // string
$destination_id = 'destination_id_example'; // string
$ad_account_id = 'ad_account_id_example'; // string | Required as query OR in JSON body.

try {
    $apiInstance->deleteConversionDestination($account_id, $destination_id, $ad_account_id);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->deleteConversionDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **destination_id** | **string**|  | |
| **ad_account_id** | **string**| Required as query OR in JSON body. | [optional] |

### Return type

void (empty response body)

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

Returns detailed performance analytics for an ad. Includes summary metrics, a daily timeline over the requested date range, and optional demographic breakdowns (Meta and TikTok only). If no date range is provided, defaults to the last 90 days. Date range is capped at 730 days max.

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
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End of date range (YYYY-MM-DD). Defaults to today. Max 730-day range.
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
| **to_date** | **\DateTime**| End of date range (YYYY-MM-DD). Defaults to today. Max 730-day range. | [optional] |
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
getAdComments($ad_id, $placement, $limit, $cursor): \Zernio\Model\GetAdComments200Response
```

List comments on an ad

Returns comments on an ad's underlying creative post. Useful for moderating or analyzing engagement on dark posts (ad creatives that never went live organically), which the regular GET /v1/inbox/comments/{postId} endpoint cannot serve because dark posts are not in Zernio's post database.  An ad that runs on both Facebook feed and Instagram feed has two separate underlying posts with separate comment threads (the creative's effective_object_story_id and effective_instagram_media_id). Use the `placement` query param to pick one; with no param the Instagram side is returned when it exists, otherwise Facebook. The identifiers are read from the ad record (persisted during sync) with a Marketing-API fallback for ads that predate the field.  For Instagram-placed comments, the Instagram account that runs the ad must be connected to Zernio — those comments are read through that account's token. If no connected Instagram account on the profile can read the ad's media, the call returns ads_connection_required (the Facebook side, if any, is still readable via ?placement=facebook).  Meta-only. Other ad platforms (TikTok, LinkedIn, Pinterest, Google, X) do not expose a public per-ad comments API and return feature_not_available.  Requires the Ads add-on. Response shape matches GET /v1/inbox/comments/{postId}.

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
$placement = 'placement_example'; // string | Which side of the ad to return comments for. Omit to default to the Instagram side when present, else Facebook. Returns ad_not_commentable if the ad has no such placement.
$limit = 25; // int
$cursor = 'cursor_example'; // string | Pagination cursor from a previous response.

try {
    $result = $apiInstance->getAdComments($ad_id, $placement, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->getAdComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**| Internal Zernio ad ID (ObjectId). | |
| **placement** | **string**| Which side of the ad to return comments for. Omit to default to the Instagram side when present, else Facebook. Returns ad_not_commentable if the ad has no such placement. | [optional] |
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

## `getConversionDestination()`

```php
getConversionDestination($account_id, $destination_id, $ad_account_id): \Zernio\Model\CreateConversionDestination201Response
```

Fetch a single conversion destination

LinkedIn-only today. Returns the full destination record for one conversion rule. The `adAccountId` query parameter is required because LinkedIn rules are scoped to a sponsored ad account.

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
$account_id = 'account_id_example'; // string
$destination_id = 'destination_id_example'; // string
$ad_account_id = 'ad_account_id_example'; // string | Numeric ID or full `urn:li:sponsoredAccount:{id}` URN.

try {
    $result = $apiInstance->getConversionDestination($account_id, $destination_id, $ad_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->getConversionDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **destination_id** | **string**|  | |
| **ad_account_id** | **string**| Numeric ID or full &#x60;urn:li:sponsoredAccount:{id}&#x60; URN. | |

### Return type

[**\Zernio\Model\CreateConversionDestination201Response**](../Model/CreateConversionDestination201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConversionMetrics()`

```php
getConversionMetrics($account_id, $destination_id, $ad_account_id, $start_date, $end_date, $granularity): \Zernio\Model\GetConversionMetrics200Response
```

Fetch attribution metrics for a conversion destination

LinkedIn-only today. Returns conversion-attribution metrics (`externalWebsiteConversions`, `externalWebsitePostClickConversions`, `externalWebsitePostViewConversions`, `conversionValueInLocalCurrency`, `qualifiedLeads`, `costInLocalCurrency`) bucketed by date.  Date-range constraints (passed through from LinkedIn): - `granularity=DAILY` is retained for ~6 months only - `granularity=ALL` with a range > 6 months auto-rounds to month boundaries - `granularity=MONTHLY`/`YEARLY` retains 24 months  Throttle: LinkedIn caps adAnalytics at 45M metric values per 5-minute window across the calling token. Single-rule queries are well within that limit; surfaces as 429 if hit.

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
$account_id = 'account_id_example'; // string
$destination_id = 'destination_id_example'; // string
$ad_account_id = 'ad_account_id_example'; // string
$start_date = 'start_date_example'; // string
$end_date = 'end_date_example'; // string
$granularity = 'DAILY'; // string

try {
    $result = $apiInstance->getConversionMetrics($account_id, $destination_id, $ad_account_id, $start_date, $end_date, $granularity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->getConversionMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **destination_id** | **string**|  | |
| **ad_account_id** | **string**|  | |
| **start_date** | **string**|  | |
| **end_date** | **string**|  | [optional] |
| **granularity** | **string**|  | [optional] [default to &#39;DAILY&#39;] |

### Return type

[**\Zernio\Model\GetConversionMetrics200Response**](../Model/GetConversionMetrics200Response.md)

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
$platform_ad_id = 'platform_ad_id_example'; // string | Meta ad ID. Returns the ad with this platform-side ad ID.
$effective_object_story_id = 'effective_object_story_id_example'; // string | Facebook `{pageId}_{postId}` of the post the ad's engagement lives on (Meta `effective_object_story_id`). Use to map a Business-Manager-visible post back to the Zernio ad.
$effective_instagram_media_id = 'effective_instagram_media_id_example'; // string | Instagram media ID of the boosted post (Meta `effective_instagram_media_id`). Use to map a Business-Manager-visible IG post back to the Zernio ad.
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start of metrics date range (YYYY-MM-DD). Defaults to 90 days ago.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End of metrics date range (YYYY-MM-DD). Defaults to today. Max 730-day range.

try {
    $result = $apiInstance->listAds($page, $limit, $source, $status, $platform, $account_id, $ad_account_id, $profile_id, $campaign_id, $platform_ad_id, $effective_object_story_id, $effective_instagram_media_id, $from_date, $to_date);
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

## `listConversionAssociations()`

```php
listConversionAssociations($account_id, $destination_id, $ad_account_id): \Zernio\Model\ListConversionAssociations200Response
```

List campaigns associated with a conversion destination

LinkedIn-only today. Returns the campaigns currently associated with this conversion rule. Note that auto-association on rule creation runs once at create time; campaigns created after the rule still need explicit association.

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
$account_id = 'account_id_example'; // string
$destination_id = 'destination_id_example'; // string
$ad_account_id = 'ad_account_id_example'; // string

try {
    $result = $apiInstance->listConversionAssociations($account_id, $destination_id, $ad_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->listConversionAssociations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **destination_id** | **string**|  | |
| **ad_account_id** | **string**|  | |

### Return type

[**\Zernio\Model\ListConversionAssociations200Response**](../Model/ListConversionAssociations200Response.md)

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

Returns the list of pixels (Meta), conversion actions (Google), or conversion rules (LinkedIn) accessible to the connected ads account. Use the returned `id` as `destinationId` when posting to `POST /v1/ads/conversions`.  For Google and LinkedIn, each destination's `type` reflects the conversion type (PURCHASE, LEAD, SIGN_UP, etc.) — the event type is locked to the destination. For Meta, `type` is absent: pixels accept any event name per request.  For LinkedIn, destinations are returned across every sponsored ad account the connected token can access; the `adAccountId` field on each destination identifies the parent ad account and is required for subsequent CRUD calls (update, delete, associations, metrics).

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
$account_id = 'account_id_example'; // string | SocialAccount ID (metaads, googleads, or linkedinads).

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
| **account_id** | **string**| SocialAccount ID (metaads, googleads, or linkedinads). | |

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

## `removeConversionAssociations()`

```php
removeConversionAssociations($account_id, $destination_id, $ad_account_id, $campaign_ids): \Zernio\Model\RemoveConversionAssociations200Response
```

Remove campaign↔conversion associations

Remove one or more campaign associations from this conversion rule. Pass `adAccountId` and `campaignIds` as query parameters (`campaignIds` is comma-separated). The route also accepts a JSON body with the same fields for clients that prefer DELETE-with-body, but the documented surface is query-only because some SDK code generators (e.g. Python) collapse query + body parameters with the same name into a single kwarg.

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
$account_id = 'account_id_example'; // string
$destination_id = 'destination_id_example'; // string
$ad_account_id = 'ad_account_id_example'; // string
$campaign_ids = 'campaign_ids_example'; // string | Comma-separated list of campaign IDs.

try {
    $result = $apiInstance->removeConversionAssociations($account_id, $destination_id, $ad_account_id, $campaign_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->removeConversionAssociations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **destination_id** | **string**|  | |
| **ad_account_id** | **string**|  | |
| **campaign_ids** | **string**| Comma-separated list of campaign IDs. | |

### Return type

[**\Zernio\Model\RemoveConversionAssociations200Response**](../Model/RemoveConversionAssociations200Response.md)

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

Relay one or more conversion events to the target ad platform's native Conversions API. Supported platforms: Meta (metaads) via Graph API, Google Ads (googleads) via Data Manager API `ingestEvents`, LinkedIn (linkedinads) via `/rest/conversionEvents`.  Platform is inferred from the provided `accountId`. `destinationId` semantics differ per platform: - Meta: pixel (dataset) ID, e.g. \"123456789012345\" - Google: conversion action resource name, e.g.   \"customers/1234567890/conversionActions/987654321\" - LinkedIn: conversion rule ID or URN, e.g. \"104012\" or   \"urn:lla:llaPartnerConversion:104012\"  Callers can list valid destinations via `GET /v1/accounts/{accountId}/conversion-destinations`.  All PII (email, phone, names, external IDs) is hashed with SHA-256 server-side per each platform's normalization spec (including Google's Gmail-specific dot/plus-suffix stripping). Send plaintext. Note: LinkedIn `externalIds` are passed through as plaintext per LinkedIn's spec — only emails and phones are hashed.  Requires the Ads add-on. For LinkedIn, the connected account must have been authorized after the Conversions API rollout (i.e. the OAuth grant must include `rw_conversions`); older accounts must reconnect.  Batching: Meta caps at 1000 events per request and rejects the entire batch if any event is malformed. Google caps at 2000. LinkedIn caps at 5000 and is also all-or-nothing per chunk. All three are handled automatically.  Dedup: pass a stable `eventId` on every event. Meta and LinkedIn use it to dedupe against browser-side pixel/Insight Tag events; Google maps it to transactionId.  Per-platform `eventName` semantics: - Meta: free-form. Standard names (Purchase, Lead, ...) match Meta's   built-in events; custom strings are accepted. - Google: ignored — the conversion action's category determines the   event type. Send the standard name closest to your action for   documentation, but the platform will not branch on it. - LinkedIn: ignored — the conversion rule's `type` (LEAD, PURCHASE,   etc.) is locked to the destination at rule-creation time. Send the   standard name for documentation; LinkedIn does not branch on it.

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

## `updateConversionDestination()`

```php
updateConversionDestination($account_id, $destination_id, $update_conversion_destination_request): \Zernio\Model\CreateConversionDestination201Response
```

Update a conversion destination

Partial-update a conversion rule. LinkedIn-only today. Whitelisted fields: `name`, `enabled`, attribution windows, `valueType`, `value`, `attributionType`. The rule's `type` and parent ad account are intentionally not exposed for update — recreate the rule if those need to change.

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
$account_id = 'account_id_example'; // string
$destination_id = 'destination_id_example'; // string
$update_conversion_destination_request = new \Zernio\Model\UpdateConversionDestinationRequest(); // \Zernio\Model\UpdateConversionDestinationRequest

try {
    $result = $apiInstance->updateConversionDestination($account_id, $destination_id, $update_conversion_destination_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->updateConversionDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **destination_id** | **string**|  | |
| **update_conversion_destination_request** | [**\Zernio\Model\UpdateConversionDestinationRequest**](../Model/UpdateConversionDestinationRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateConversionDestination201Response**](../Model/CreateConversionDestination201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
