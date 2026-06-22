# Zernio\AdsApi

Paid advertising management across Meta (Facebook/Instagram), Google, TikTok, LinkedIn, Pinterest, and X/Twitter. Create, boost, pause/resume ads and campaigns, view metrics, and manage audiences. Requires the Ads add-on.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addConversionAssociations()**](AdsApi.md#addConversionAssociations) | **POST** /v1/accounts/{accountId}/conversion-destinations/{destinationId}/associations | Associate campaigns with a conversion destination |
| [**adjustConversions()**](AdsApi.md#adjustConversions) | **POST** /v1/ads/conversions/adjustments | Adjust already-uploaded conversions (Google only) |
| [**archiveLeadForm()**](AdsApi.md#archiveLeadForm) | **DELETE** /v1/ads/lead-forms/{formId} | Archive a Lead Gen form |
| [**boostPost()**](AdsApi.md#boostPost) | **POST** /v1/ads/boost | Boost post as ad |
| [**createConversionDestination()**](AdsApi.md#createConversionDestination) | **POST** /v1/accounts/{accountId}/conversion-destinations | Create a conversion destination (LinkedIn, Google Ads) |
| [**createCtwaAd()**](AdsApi.md#createCtwaAd) | **POST** /v1/ads/ctwa | Create Click-to-WhatsApp ad(s) |
| [**createLeadForm()**](AdsApi.md#createLeadForm) | **POST** /v1/ads/lead-forms | Create a Lead Gen (Instant) form |
| [**createStandaloneAd()**](AdsApi.md#createStandaloneAd) | **POST** /v1/ads/create | Create standalone ad |
| [**createTestLead()**](AdsApi.md#createTestLead) | **POST** /v1/ads/lead-forms/{formId}/test-leads | Create a synthetic test lead |
| [**deleteAd()**](AdsApi.md#deleteAd) | **DELETE** /v1/ads/{adId} | Cancel an ad |
| [**deleteConversionDestination()**](AdsApi.md#deleteConversionDestination) | **DELETE** /v1/accounts/{accountId}/conversion-destinations/{destinationId} | Soft-delete a conversion destination |
| [**estimateAdReach()**](AdsApi.md#estimateAdReach) | **POST** /v1/ads/targeting/reach-estimate | Estimate audience reach |
| [**getAd()**](AdsApi.md#getAd) | **GET** /v1/ads/{adId} | Get ad details |
| [**getAdAnalytics()**](AdsApi.md#getAdAnalytics) | **GET** /v1/ads/{adId}/analytics | Get ad analytics |
| [**getAdComments()**](AdsApi.md#getAdComments) | **GET** /v1/ads/{adId}/comments | List comments on an ad |
| [**getAdTrackingTags()**](AdsApi.md#getAdTrackingTags) | **GET** /v1/ads/{adId}/tracking-tags | Read an ad&#39;s click-URL tracking tags |
| [**getConversionDestination()**](AdsApi.md#getConversionDestination) | **GET** /v1/accounts/{accountId}/conversion-destinations/{destinationId} | Fetch a single conversion destination |
| [**getConversionMetrics()**](AdsApi.md#getConversionMetrics) | **GET** /v1/accounts/{accountId}/conversion-destinations/{destinationId}/metrics | Fetch attribution metrics for a conversion destination |
| [**getConversionsQuality()**](AdsApi.md#getConversionsQuality) | **GET** /v1/ads/conversions/quality | Read Event Match Quality + coverage for a Meta pixel |
| [**getLeadForm()**](AdsApi.md#getLeadForm) | **GET** /v1/ads/lead-forms/{formId} | Get a single Lead Gen form |
| [**listAdAccounts()**](AdsApi.md#listAdAccounts) | **GET** /v1/ads/accounts | List ad accounts |
| [**listAdCatalogProductSets()**](AdsApi.md#listAdCatalogProductSets) | **GET** /v1/ads/catalogs/{catalogId}/product-sets | List a catalog&#39;s product sets |
| [**listAdCatalogs()**](AdsApi.md#listAdCatalogs) | **GET** /v1/ads/catalogs | List Meta product catalogs |
| [**listAds()**](AdsApi.md#listAds) | **GET** /v1/ads | List ads |
| [**listAdsBusinessCenters()**](AdsApi.md#listAdsBusinessCenters) | **GET** /v1/ads/business-centers | List TikTok Business Centers |
| [**listConversionAssociations()**](AdsApi.md#listConversionAssociations) | **GET** /v1/accounts/{accountId}/conversion-destinations/{destinationId}/associations | List campaigns associated with a conversion destination |
| [**listConversionDestinations()**](AdsApi.md#listConversionDestinations) | **GET** /v1/accounts/{accountId}/conversion-destinations | List destinations for the Conversions API |
| [**listFormLeads()**](AdsApi.md#listFormLeads) | **GET** /v1/ads/lead-forms/{formId}/leads | List leads for a single form |
| [**listLeadForms()**](AdsApi.md#listLeadForms) | **GET** /v1/ads/lead-forms | List Lead Gen (Instant) forms |
| [**listLeads()**](AdsApi.md#listLeads) | **GET** /v1/ads/leads | List submitted leads (cross-form CRM view) |
| [**listWhatsAppConversions()**](AdsApi.md#listWhatsAppConversions) | **GET** /v1/whatsapp/conversions | List recent WhatsApp conversion events |
| [**removeConversionAssociations()**](AdsApi.md#removeConversionAssociations) | **DELETE** /v1/accounts/{accountId}/conversion-destinations/{destinationId}/associations | Remove campaign↔conversion associations |
| [**searchAdInterests()**](AdsApi.md#searchAdInterests) | **GET** /v1/ads/interests | Search targeting interests (deprecated) |
| [**searchAdTargeting()**](AdsApi.md#searchAdTargeting) | **GET** /v1/ads/targeting/search | Search targeting options |
| [**sendConversions()**](AdsApi.md#sendConversions) | **POST** /v1/ads/conversions | Send conversion events to an ad platform |
| [**sendWhatsAppConversion()**](AdsApi.md#sendWhatsAppConversion) | **POST** /v1/whatsapp/conversions | Send WhatsApp conversion event |
| [**updateAd()**](AdsApi.md#updateAd) | **PUT** /v1/ads/{adId} | Update ad |
| [**updateAdTrackingTags()**](AdsApi.md#updateAdTrackingTags) | **PATCH** /v1/ads/{adId}/tracking-tags | Set/update an ad&#39;s click-URL tracking tags |
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

## `adjustConversions()`

```php
adjustConversions($adjust_conversions_request): \Zernio\Model\AdjustConversions200Response
```

Adjust already-uploaded conversions (Google only)

Adjust conversions that were previously uploaded via `POST /v1/ads/conversions` — retract them, restate their value, or enhance them with first-party data. Requires the Ads add-on.  **Google Ads only.** Google handles adjustments through the classic Google Ads API (`ConversionAdjustmentUploadService`); the Data Manager `ingestEvents` path used for sending conversions is ingest-only. Meta and LinkedIn have no equivalent, so this endpoint returns `405` for those platforms.  Adjustment types:  - `RETRACTION` — remove the conversion entirely (refund, chargeback, cancelled order, churn). - `RESTATEMENT` — change the conversion's value (upgrade / downgrade / partial refund). Send the corrected **total** value in `restatementValue` (not a delta). - `ENHANCEMENT` — attach first-party identifiers (hashed email / phone) to an existing conversion (enhanced conversions applied after the fact).  Identifying the original conversion (per adjustment):  - `orderId` — the transaction ID you sent as `eventId` on the original conversion. Recommended, and **required** for `ENHANCEMENT`. - or `gclid` + `conversionTime` — the click ID and the original conversion's time (unix seconds). Not available for `ENHANCEMENT`.  `destinationId` is the conversion action resource name, e.g. `customers/1234567890/conversionActions/987654321` (same value you send to `POST /v1/ads/conversions`). PII in `user` is hashed with SHA-256 server-side (Gmail-specific normalization included). Send plaintext.  Times are unix seconds; we convert to Google's required `yyyy-MM-dd HH:mm:ss+00:00` format. Up to 2000 adjustments per request; partial failure is supported (inspect `adjustmentsFailed` / `failures[]`).

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
$adjust_conversions_request = new \Zernio\Model\AdjustConversionsRequest(); // \Zernio\Model\AdjustConversionsRequest

try {
    $result = $apiInstance->adjustConversions($adjust_conversions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->adjustConversions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **adjust_conversions_request** | [**\Zernio\Model\AdjustConversionsRequest**](../Model/AdjustConversionsRequest.md)|  | |

### Return type

[**\Zernio\Model\AdjustConversions200Response**](../Model/AdjustConversions200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `archiveLeadForm()`

```php
archiveLeadForm($form_id, $account_id): \Zernio\Model\ArchiveLeadForm200Response
```

Archive a Lead Gen form

Meta has no hard delete for forms; this archives the form (status=ARCHIVED).

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
$form_id = 'form_id_example'; // string
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->archiveLeadForm($form_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->archiveLeadForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **string**|  | |
| **account_id** | **string**|  | |

### Return type

[**\Zernio\Model\ArchiveLeadForm200Response**](../Model/ArchiveLeadForm200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
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

Create a conversion destination (LinkedIn, Google Ads)

Create a new conversion destination on the platform. Supported for LinkedIn (conversion rule) and Google Ads (conversion action). Meta manages destinations in its own UI and returns 405.  **LinkedIn:** creation is NOT idempotent. A retry creates a second destination. Deduplicate before retrying.  **Google Ads:** calling with a name that already exists reuses the existing conversion action transparently (the response is identical to a fresh create). Calling with the same name but a different category returns a typed `IDEMPOTENCY_CONFLICT` (409) rather than silently returning the mismatched action.  **LinkedIn:** the rule is created with `conversionMethod=CONVERSIONS_API` and (by default) auto-associated with all of the ad account's campaigns via `autoAssociationType=ALL_CAMPAIGNS`. Pass `autoAssociationType: NONE` to opt out and manage associations explicitly via the associations endpoints below.  365-day attribution windows are only valid for `SUBMIT_APPLICATION`, `PURCHASE`, `ADD_TO_CART`, `QUALIFIED_LEAD`, and `LEAD` rule types; the API rejects other combinations locally.  **Google Ads:** the conversion action is created with `type=UPLOAD_CLICKS` (required for API-uploaded offline conversions, immutable after creation). The `type` field carries the Google `ConversionActionCategory` enum value, e.g. `PURCHASE`, `SUBSCRIBE_PAID`, `SIGNUP`, `IMPORTED_LEAD`, `BOOK_APPOINTMENT`. Unified standard event names (e.g. `Purchase`, `Subscribe`, `CompleteRegistration`, `Lead`, `Schedule`) are resolved to their Google category equivalents automatically. The action defaults to secondary (non-primary) to avoid immediately steering Smart Bidding; pass `primaryForGoal: true` to opt in.

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
$account_id = 'account_id_example'; // string | SocialAccount ID (linkedinads or googleads).
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
| **account_id** | **string**| SocialAccount ID (linkedinads or googleads). | |
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

Create Click-to-WhatsApp ad(s)

Creates one or more Click-to-WhatsApp (CTWA) ads on Meta under a single campaign and ad set. When tapped, each ad opens a WhatsApp conversation with the business attached to the supplied Facebook Page. The full hierarchy (campaign, ad set, creative(s), ad(s)) is created and activated in one call. The CTA is locked to WHATSAPP_MESSAGE and the destination is hard-coded to api.whatsapp.com/send; Meta resolves the actual WhatsApp number from the Page-to-WA pairing configured in Page settings or Business Manager.  Supports two mutually-exclusive shapes:  - **Single-creative**: supply top-level `headline`, `body`, and one of   `imageUrl` / `video`. Creates 1 campaign + 1 ad set + 1 ad.  - **Multi-creative**: supply a `creatives[]` array with N entries   (each carrying its own headline, body, and image/video). Creates   1 campaign + 1 ad set + N ads sharing budget and targeting so Meta   A/Bs the creatives inside a single auction instead of fragmenting   budget across N parallel campaigns. Recommended when launching   multiple creative variants for the same campaign.   Prerequisites enforced by Meta (surfaced as platform_error on failure): the Facebook Page must be paired with a verified WhatsApp Business number, the WhatsApp Business Account must be business-verified, and the Meta access token must carry ads_management.

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

## `createLeadForm()`

```php
createLeadForm($create_lead_form_request): \Zernio\Model\CreateLeadForm200Response
```

Create a Lead Gen (Instant) form

Creates a Lead Gen form on the connected Facebook Page (POST /{page-id}/leadgen_forms). NOT idempotent — a retry creates a second form. Prefilled question types (EMAIL, PHONE, FULL_NAME, …) must omit label/key; CUSTOM questions require both. Requires the Ads add-on.

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
$create_lead_form_request = new \Zernio\Model\CreateLeadFormRequest(); // \Zernio\Model\CreateLeadFormRequest

try {
    $result = $apiInstance->createLeadForm($create_lead_form_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->createLeadForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_lead_form_request** | [**\Zernio\Model\CreateLeadFormRequest**](../Model/CreateLeadFormRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateLeadForm200Response**](../Model/CreateLeadForm200Response.md)

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
createStandaloneAd($create_standalone_ad_request, $idempotency_key): \Zernio\Model\CreateStandaloneAd201Response
```

Create standalone ad

Creates a paid ad with custom creative across Meta, Google Ads, Pinterest, TikTok, X/Twitter, and LinkedIn. Supports three mutually-exclusive request shapes selected by the body, a legacy single-creative shape (all platforms, default), a Meta-only multi-creative shape via the creatives array (one ad set with N ads sharing budget and targeting), and a Meta-only attach shape via adSetId (adds one new ad to an existing ad set). Per-platform required fields, budget minimums, and video-ad rules are documented on each property below. LinkedIn creates a Single Image or Single Video Ad backed by a Direct Sponsored Content \"dark post\" authored by a Company Page (see `organizationId`); supported goals are engagement, traffic, awareness, and video_views (video ads use the `video` field; video_views requires a video), and traffic ads require `linkUrl`.  **Idempotency:** this endpoint is not idempotent at the platform level (a blind retry creates a second campaign/ad set/ad). Send an `Idempotency-Key` header to make retries safe: the first request with a given key creates the ad and we store the response; a retry with the same key replays that exact response (with `Idempotent-Replayed: true`) instead of creating duplicates. Reusing a key with a different body returns 422; a key whose first request is still in flight returns 409 (retry after a short backoff). Keys are scoped to your credential and expire after 24h.

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
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes create retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409.

try {
    $result = $apiInstance->createStandaloneAd($create_standalone_ad_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->createStandaloneAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_standalone_ad_request** | [**\Zernio\Model\CreateStandaloneAdRequest**](../Model/CreateStandaloneAdRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes create retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. | [optional] |

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

## `createTestLead()`

```php
createTestLead($form_id, $create_test_lead_request): \Zernio\Model\CreateTestLead200Response
```

Create a synthetic test lead

Submits a test lead against the form (POST /{form-id}/test_leads) to exercise retrieval without waiting for real ad impressions. Meta allows one test lead per form at a time.

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
$form_id = 'form_id_example'; // string
$create_test_lead_request = new \Zernio\Model\CreateTestLeadRequest(); // \Zernio\Model\CreateTestLeadRequest

try {
    $result = $apiInstance->createTestLead($form_id, $create_test_lead_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->createTestLead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **string**|  | |
| **create_test_lead_request** | [**\Zernio\Model\CreateTestLeadRequest**](../Model/CreateTestLeadRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateTestLead200Response**](../Model/CreateTestLead200Response.md)

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

## `estimateAdReach()`

```php
estimateAdReach($estimate_ad_reach_request): \Zernio\Model\EstimateAdReach200Response
```

Estimate audience reach

Returns a normalized pre-flight audience-size estimate for a targeting spec, before any campaign is created. Backed by each platform's native reach API (Meta `delivery_estimate`, LinkedIn `audienceCounts`, X `audience_summary`, Pinterest `audience_sizing`).  Platforms without a usable pre-flight reach API (Google Search/Display, TikTok) return `available: false` with no bounds, so clients can hide or grey out the estimate rather than treat the absence as an error.

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
$estimate_ad_reach_request = new \Zernio\Model\EstimateAdReachRequest(); // \Zernio\Model\EstimateAdReachRequest

try {
    $result = $apiInstance->estimateAdReach($estimate_ad_reach_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->estimateAdReach: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **estimate_ad_reach_request** | [**\Zernio\Model\EstimateAdReachRequest**](../Model/EstimateAdReachRequest.md)|  | |

### Return type

[**\Zernio\Model\EstimateAdReach200Response**](../Model/EstimateAdReach200Response.md)

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


$apiInstance = new Zernio\Api\AdsApi(
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
    echo 'Exception when calling AdsApi->getAd: ', $e->getMessage(), PHP_EOL;
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

Returns comments on an ad's underlying creative post. Useful for moderating or analyzing engagement on dark posts (ad creatives that never went live organically), which the regular GET /v1/inbox/comments/{postId} endpoint cannot serve because dark posts are not in Zernio's post database.  An ad that runs on both Facebook feed and Instagram feed has two separate underlying posts with separate comment threads (the creative's effective_object_story_id and effective_instagram_media_id). Use the `placement` query param to pick one; with no param the Instagram side is returned when it exists, otherwise Facebook. The identifiers are read from the ad record (persisted during sync) with a Marketing-API fallback for ads that predate the field.  For Instagram-placed comments, the Instagram account that runs the ad must be connected to Zernio — those comments are read through that account's token. If no connected Instagram account on the profile can read the ad's media, the call returns ads_connection_required (the Facebook side, if any, is still readable via ?placement=facebook).  Meta-only. Other ad platforms (TikTok, LinkedIn, Pinterest, Google, X) do not expose a public per-ad comments API and return feature_not_available.  Requires the Ads add-on. Response shape matches GET /v1/inbox/comments/{postId}.  The `{adId}` path segment accepts any identifier dialect Zernio indexes for the ad: Zernio internal `_id` (24-char hex), Meta's numeric `platformAdId` (the value shipped in `comment.received` webhooks as `comment.ad.id`), or the creative's `effective_object_story_id` / `effective_instagram_media_id`. Caller doesn't need a translation step.

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

## `getAdTrackingTags()`

```php
getAdTrackingTags($ad_id): \Zernio\Model\GetAdTrackingTags200Response
```

Read an ad's click-URL tracking tags

Unified read of the platform's native click-URL tracking params. - Meta (facebook/instagram): the creative's `url_tags` (and template_url_spec). - Google (googleads): the campaign's `trackingUrlTemplate` + `finalUrlSuffix`.   Subject to the Google Ads API access-tier daily quota; bulk audits need Standard access. - LinkedIn (linkedinads): the campaign's Dynamic UTM `dynamicValueParameters` + `customValueParameters`. Returns 405 for platforms without a click-URL tracking surface (TikTok, X, Pinterest).

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
$ad_id = 'ad_id_example'; // string | Ad id (hex _id, platformAdId, or effective story/media id).

try {
    $result = $apiInstance->getAdTrackingTags($ad_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->getAdTrackingTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**| Ad id (hex _id, platformAdId, or effective story/media id). | |

### Return type

[**\Zernio\Model\GetAdTrackingTags200Response**](../Model/GetAdTrackingTags200Response.md)

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
getConversionDestination($account_id, $destination_id, $ad_account_id): \Zernio\Model\GetConversionDestination200Response
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

[**\Zernio\Model\GetConversionDestination200Response**](../Model/GetConversionDestination200Response.md)

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

## `getConversionsQuality()`

```php
getConversionsQuality($account_id, $destination_id): \Zernio\Model\GetConversionsQuality200Response
```

Read Event Match Quality + coverage for a Meta pixel

Reads Meta Event Match Quality (EMQ) and pixel↔CAPI event coverage for a pixel/dataset, live from Meta's Dataset Quality API. Web events only (a Meta limitation). Meta-only; other platforms return 405. Requires the Ads add-on.

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
$account_id = 'account_id_example'; // string | SocialAccount _id (must be a metaads account).
$destination_id = 'destination_id_example'; // string | Meta pixel/dataset ID.

try {
    $result = $apiInstance->getConversionsQuality($account_id, $destination_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->getConversionsQuality: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| SocialAccount _id (must be a metaads account). | |
| **destination_id** | **string**| Meta pixel/dataset ID. | |

### Return type

[**\Zernio\Model\GetConversionsQuality200Response**](../Model/GetConversionsQuality200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLeadForm()`

```php
getLeadForm($form_id, $account_id): \Zernio\Model\GetLeadForm200Response
```

Get a single Lead Gen form

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
$form_id = 'form_id_example'; // string
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->getLeadForm($form_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->getLeadForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **string**|  | |
| **account_id** | **string**|  | |

### Return type

[**\Zernio\Model\GetLeadForm200Response**](../Model/GetLeadForm200Response.md)

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

## `listAdCatalogProductSets()`

```php
listAdCatalogProductSets($catalog_id, $account_id): \Zernio\Model\ListAdCatalogProductSets200Response
```

List a catalog's product sets

Lists a Meta product catalog's product sets — the unit a catalog ad promotes. Pass the chosen set as `promotedObject.productSetId` on POST /v1/ads/create with `goal: catalog_sales`.

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
$catalog_id = 'catalog_id_example'; // string | Meta product catalog ID (from GET /v1/ads/catalogs)
$account_id = 'account_id_example'; // string | A facebook, instagram, or metaads social account ID

try {
    $result = $apiInstance->listAdCatalogProductSets($catalog_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->listAdCatalogProductSets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| Meta product catalog ID (from GET /v1/ads/catalogs) | |
| **account_id** | **string**| A facebook, instagram, or metaads social account ID | |

### Return type

[**\Zernio\Model\ListAdCatalogProductSets200Response**](../Model/ListAdCatalogProductSets200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAdCatalogs()`

```php
listAdCatalogs($account_id, $ad_account_id): \Zernio\Model\ListAdCatalogs200Response
```

List Meta product catalogs

Lists the Meta product catalogs reachable from an ad account (owned + agency-shared catalogs of the ad account's business), for Advantage+ catalog ads (`goal: catalog_sales` on POST /v1/ads/create — e.g. vehicle inventory catalogs). Read-only; uses scopes customers already granted (no reconnect needed). Catalog contents (items, feeds) are managed in Meta Commerce Manager, not through this API.

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
$account_id = 'account_id_example'; // string | A facebook, instagram, or metaads social account ID
$ad_account_id = 'ad_account_id_example'; // string | Meta ad account ID (act_...)

try {
    $result = $apiInstance->listAdCatalogs($account_id, $ad_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->listAdCatalogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| A facebook, instagram, or metaads social account ID | |
| **ad_account_id** | **string**| Meta ad account ID (act_...) | |

### Return type

[**\Zernio\Model\ListAdCatalogs200Response**](../Model/ListAdCatalogs200Response.md)

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
$account_id = 'account_id_example'; // string | SocialAccount ID (metaads, googleads, linkedinads, or tiktokads).

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
| **account_id** | **string**| SocialAccount ID (metaads, googleads, linkedinads, or tiktokads). | |

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

## `listFormLeads()`

```php
listFormLeads($form_id, $account_id, $limit, $cursor, $since): \Zernio\Model\ListFormLeads200Response
```

List leads for a single form

Returns leads for one form. Serves persisted leads (ingested via the leadgen webhook) when available, falling back to a live Graph read.

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
$form_id = 'form_id_example'; // string
$account_id = 'account_id_example'; // string
$limit = 25; // int
$cursor = 'cursor_example'; // string
$since = 56; // int | Unix seconds.

try {
    $result = $apiInstance->listFormLeads($form_id, $account_id, $limit, $cursor, $since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->listFormLeads: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **string**|  | |
| **account_id** | **string**|  | |
| **limit** | **int**|  | [optional] [default to 25] |
| **cursor** | **string**|  | [optional] |
| **since** | **int**| Unix seconds. | [optional] |

### Return type

[**\Zernio\Model\ListFormLeads200Response**](../Model/ListFormLeads200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLeadForms()`

```php
listLeadForms($account_id, $limit, $cursor): \Zernio\Model\ListLeadForms200Response
```

List Lead Gen (Instant) forms

Lists the Lead Gen forms owned by the connected Facebook Page. Requires the Ads add-on.

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
$account_id = 'account_id_example'; // string | Connected facebook account id.
$limit = 25; // int
$cursor = 'cursor_example'; // string

try {
    $result = $apiInstance->listLeadForms($account_id, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->listLeadForms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Connected facebook account id. | |
| **limit** | **int**|  | [optional] [default to 25] |
| **cursor** | **string**|  | [optional] |

### Return type

[**\Zernio\Model\ListLeadForms200Response**](../Model/ListLeadForms200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLeads()`

```php
listLeads($form_id, $account_id, $limit, $since, $cursor): \Zernio\Model\ListLeads200Response
```

List submitted leads (cross-form CRM view)

Returns persisted Meta Lead Gen leads for your team, newest-first, with keyset pagination on `cursor`. Leads are ingested in real time from the `leadgen` webhook. Requires the Ads add-on.

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
$form_id = 'form_id_example'; // string | Filter to a single lead form.
$account_id = 'account_id_example'; // string | Filter to a single connected account.
$limit = 25; // int
$since = 56; // int | Unix seconds; only leads created at/after this Meta timestamp.
$cursor = 'cursor_example'; // string | Keyset cursor from a previous response's pagination.cursor.

try {
    $result = $apiInstance->listLeads($form_id, $account_id, $limit, $since, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->listLeads: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **string**| Filter to a single lead form. | [optional] |
| **account_id** | **string**| Filter to a single connected account. | [optional] |
| **limit** | **int**|  | [optional] [default to 25] |
| **since** | **int**| Unix seconds; only leads created at/after this Meta timestamp. | [optional] |
| **cursor** | **string**| Keyset cursor from a previous response&#39;s pagination.cursor. | [optional] |

### Return type

[**\Zernio\Model\ListLeads200Response**](../Model/ListLeads200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWhatsAppConversions()`

```php
listWhatsAppConversions($account_id, $limit): \Zernio\Model\ListWhatsAppConversions200Response
```

List recent WhatsApp conversion events

Returns the most recent conversion events sent through `POST /v1/whatsapp/conversions` for the given WhatsApp account. Sourced from delivery logs (Axiom `late` dataset), so the visible window is bounded by log retention (about 30 days). Useful for rendering a \"recent activity\" panel on the conversions setup tab without standing up a parallel persistence layer.  Per-event payload mirrors the structured log we write on every successful send: `eventName`, `conversationId`, `eventsReceived`, `eventsFailed`, `traceId`, `durationMs`, and the wall-clock `timestamp`.

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
$account_id = 'account_id_example'; // string | WhatsApp social account ID
$limit = 50; // int | Max events to return (1-200, default 50).

try {
    $result = $apiInstance->listWhatsAppConversions($account_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->listWhatsAppConversions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| WhatsApp social account ID | |
| **limit** | **int**| Max events to return (1-200, default 50). | [optional] [default to 50] |

### Return type

[**\Zernio\Model\ListWhatsAppConversions200Response**](../Model/ListWhatsAppConversions200Response.md)

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

Search targeting interests (deprecated)

Deprecated alias for `GET /v1/ads/targeting/search?dimension=interest`. Kept for backward compatibility, it returns the legacy `{ interests: [...] }` shape rather than the normalized `{ results: [...] }`. New integrations should use `GET /v1/ads/targeting/search` with `dimension=interest`.

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

## `searchAdTargeting()`

```php
searchAdTargeting($account_id, $q, $dimension, $geo_type, $country_code, $limit): \Zernio\Model\SearchAdTargeting200Response
```

Search targeting options

Resolve a human-readable query into the platform's opaque targeting ids used in the `TargetingSpec` (`countries`/`regions`/`cities`/`zips`/`metros` geo keys, and `interests`/`behaviors` entity ids) on `POST /v1/ads/create`, `POST /v1/ads/targeting/reach-estimate`, and `saved_targeting` audiences.  The `dimension` param selects what is searched, `geo` (locations, further scoped by `geoType`), `interest`, `behavior`, or `income`. Availability of each dimension varies by platform (e.g. behaviours are Meta/TikTok only). Results are normalized across platforms into a single shape, so the same client code consumes Meta, TikTok, LinkedIn, X, Pinterest, and Google results.  For geo queries, `q` should contain only the locality name (e.g. `\"Amsterdam\"`, not `\"Amsterdam, NL\"`). Use `countryCode` to disambiguate.

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
$account_id = 'account_id_example'; // string | Social account ID (a connected account on the target ad platform).
$q = 'q_example'; // string | Search query. For geo, the locality name only (no region/country suffix).
$dimension = 'interest'; // string | What to search. `geo` resolves locations (scope further with `geoType`), `interest`/`behavior` resolve audience entities, `income` resolves income-tier options. Defaults to `interest` for backward compatibility with the deprecated /v1/ads/interests alias.
$geo_type = 'city'; // string | Only used when `dimension=geo`. The kind of location to resolve. `place` resolves named points of interest (businesses, landmarks). `neighborhood` resolves named neighbourhood areas. Use `all` to search every geo type in a single relevance-ranked call — mirrors Meta's own unified search box. Defaults to `city`.
$country_code = 'country_code_example'; // string | ISO 3166-1 alpha-2 country code (e.g. NL) to scope a geo search.
$limit = 25; // int | Maximum results to return.

try {
    $result = $apiInstance->searchAdTargeting($account_id, $q, $dimension, $geo_type, $country_code, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->searchAdTargeting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Social account ID (a connected account on the target ad platform). | |
| **q** | **string**| Search query. For geo, the locality name only (no region/country suffix). | |
| **dimension** | **string**| What to search. &#x60;geo&#x60; resolves locations (scope further with &#x60;geoType&#x60;), &#x60;interest&#x60;/&#x60;behavior&#x60; resolve audience entities, &#x60;income&#x60; resolves income-tier options. Defaults to &#x60;interest&#x60; for backward compatibility with the deprecated /v1/ads/interests alias. | [optional] [default to &#39;interest&#39;] |
| **geo_type** | **string**| Only used when &#x60;dimension&#x3D;geo&#x60;. The kind of location to resolve. &#x60;place&#x60; resolves named points of interest (businesses, landmarks). &#x60;neighborhood&#x60; resolves named neighbourhood areas. Use &#x60;all&#x60; to search every geo type in a single relevance-ranked call — mirrors Meta&#39;s own unified search box. Defaults to &#x60;city&#x60;. | [optional] [default to &#39;city&#39;] |
| **country_code** | **string**| ISO 3166-1 alpha-2 country code (e.g. NL) to scope a geo search. | [optional] |
| **limit** | **int**| Maximum results to return. | [optional] [default to 25] |

### Return type

[**\Zernio\Model\SearchAdTargeting200Response**](../Model/SearchAdTargeting200Response.md)

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

Relay one or more conversion events to the target ad platform's native Conversions API. Platform is inferred from the provided `accountId`. Requires the Ads add-on.  Supported platforms:  - Meta (`metaads`) via Graph API - Google Ads (`googleads`) via Data Manager API `ingestEvents` - LinkedIn (`linkedinads`) via `/rest/conversionEvents` - TikTok (`tiktokads`) via the Offline Events API `/offline/batch/` — OFFLINE conversions only  `destinationId` semantics differ per platform:  - Meta: pixel (dataset) ID, e.g. `123456789012345` - Google: conversion action resource name, e.g. `customers/1234567890/conversionActions/987654321` - LinkedIn: conversion rule ID or URN, e.g. `104012` or `urn:lla:llaPartnerConversion:104012` - TikTok: Offline Event Set ID, e.g. `7057103914977558530`  TikTok notes: this path sends OFFLINE conversions (in-store / CRM / call-center), not web-pixel events. Each event must carry an email or phone (TikTok requires at least one). The connected TikTok ads account must have granted the Offline Events permission; older grants must reconnect.  Callers can list valid destinations via `GET /v1/accounts/{accountId}/conversion-destinations`.  All PII (email, phone, names, external IDs) is hashed with SHA-256 server-side per each platform's normalization spec, including Google's Gmail-specific dot/plus-suffix stripping. Send plaintext. LinkedIn `externalIds` are passed through as plaintext per LinkedIn's spec; only emails and phones are hashed.  For LinkedIn, the connected account must have been authorized after the Conversions API rollout (i.e. the OAuth grant must include `rw_conversions`). Older accounts must reconnect.  Batching is handled automatically. Meta caps at 1000 events per request and rejects the entire batch if any event is malformed. Google caps at 2000. LinkedIn caps at 5000 and is also all-or-nothing per chunk.  Dedup: pass a stable `eventId` on every event. Meta and LinkedIn use it to dedupe against browser-side pixel/Insight Tag events; Google maps it to `transactionId`.  Per-platform `eventName` semantics:  - Meta: free-form. Standard names (Purchase, Lead, ...) match Meta's built-in events; custom strings are accepted. - Google: ignored. The conversion action's category determines the event type. Send the standard name closest to your action for documentation, but the platform will not branch on it. - LinkedIn: ignored. The conversion rule's `type` (LEAD, PURCHASE, etc.) is locked to the destination at rule-creation time. Send the standard name for documentation; LinkedIn does not branch on it.

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

Forward a WhatsApp Business Messaging conversion event (`LeadSubmitted`, `Purchase`, `AddToCart`, `InitiateCheckout`, `ViewContent`) to Meta's Conversions API with `action_source = business_messaging` and `messaging_channel = whatsapp`. The endpoint looks up the originating CTWA click ID (`ctwa_clid`) captured on the first inbound message of the conversation and replays it on every event so Meta can attribute the conversion back to the Click-to-WhatsApp ad that drove the chat.  Configuration prerequisite on the WhatsApp account metadata:   - `metaCapiDatasetId`: the Meta dataset ID linked to the WABA.     Provision one with `POST /v1/whatsapp/dataset`.  The WABA ID (already set automatically at connect time) is forwarded as `user_data.whatsapp_business_account_id`, which is the per-channel attribution identifier Meta requires for WhatsApp events. No Facebook Page ID is needed (that field is the Messenger-branch identifier).  Identify the conversation by either `conversationId` (preferred) or `phoneE164` (digits only, no `+`). At least one is required. If the conversation has no captured `ctwa_clid`, the request returns 422 because there is nothing to attribute.  Token and dataset coupling: the WhatsApp account's accessToken must have access to the configured `metaCapiDatasetId`. By default a WABA's system-user token is scoped to the WABA's own Business Manager and cannot post to a pixel owned by a different Business; Meta returns code 100 in that case. Either share the dataset with the WhatsApp app's Business in BM, or use a dataset already in the same Business as the WABA.

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

## `updateAdTrackingTags()`

```php
updateAdTrackingTags($ad_id, $update_ad_tracking_tags_request)
```

Set/update an ad's click-URL tracking tags

Unified update. Send only the fields for the ad's platform: - Meta: `urlTags` (array of {key,value}). Meta creatives are immutable, so this rebuilds the   creative and repoints the ad. By DEFAULT we PRESERVE the existing creative verbatim   (re-post its object_story_spec + the new url_tags, reusing the image), so you send `urlTags`   ALONE — no need to read back headline/body/CTA. `creative` (headline, body, callToAction,   linkUrl, imageUrl) is OPTIONAL and only needed to rebuild explicitly, or for SHARE / page-post   / dark / asset_feed creatives whose object_story_spec Meta strips (those return 422 asking for   `creative`). - Google: `trackingUrlTemplate` and/or `finalUrlSuffix` (full template strings; account quota applies). - LinkedIn: `dynamicValueParameters` and/or `customValueParameters` (campaign-level Dynamic UTM).

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
$update_ad_tracking_tags_request = new \Zernio\Model\UpdateAdTrackingTagsRequest(); // \Zernio\Model\UpdateAdTrackingTagsRequest

try {
    $apiInstance->updateAdTrackingTags($ad_id, $update_ad_tracking_tags_request);
} catch (Exception $e) {
    echo 'Exception when calling AdsApi->updateAdTrackingTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**|  | |
| **update_ad_tracking_tags_request** | [**\Zernio\Model\UpdateAdTrackingTagsRequest**](../Model/UpdateAdTrackingTagsRequest.md)|  | |

### Return type

void (empty response body)

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
updateConversionDestination($account_id, $destination_id, $update_conversion_destination_request): \Zernio\Model\GetConversionDestination200Response
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

[**\Zernio\Model\GetConversionDestination200Response**](../Model/GetConversionDestination200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
