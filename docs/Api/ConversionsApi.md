# Zernio\ConversionsApi

Server-side Conversions API: send + adjust conversion events (with hashed matching and consent/LDU forwarding), read Event Match Quality, and manage conversion destinations (pixels/datasets) and their ad-account associations. Supported on Meta, Google, TikTok and LinkedIn (badges show per operation). Requires the Ads add-on.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addConversionAssociations()**](ConversionsApi.md#addConversionAssociations) | **POST** /v1/accounts/{accountId}/conversion-destinations/{destinationId}/associations | Associate campaigns |
| [**adjustConversions()**](ConversionsApi.md#adjustConversions) | **POST** /v1/ads/conversions/adjustments | Adjust uploaded conversions |
| [**createConversionDestination()**](ConversionsApi.md#createConversionDestination) | **POST** /v1/accounts/{accountId}/conversion-destinations | Create a conversion destination |
| [**deleteConversionDestination()**](ConversionsApi.md#deleteConversionDestination) | **DELETE** /v1/accounts/{accountId}/conversion-destinations/{destinationId} | Delete a conversion destination |
| [**getConversionDestination()**](ConversionsApi.md#getConversionDestination) | **GET** /v1/accounts/{accountId}/conversion-destinations/{destinationId} | Get a conversion destination |
| [**getConversionMetrics()**](ConversionsApi.md#getConversionMetrics) | **GET** /v1/accounts/{accountId}/conversion-destinations/{destinationId}/metrics | Get attribution metrics |
| [**getConversionsQuality()**](ConversionsApi.md#getConversionsQuality) | **GET** /v1/ads/conversions/quality | Get Event Match Quality |
| [**listConversionAssociations()**](ConversionsApi.md#listConversionAssociations) | **GET** /v1/accounts/{accountId}/conversion-destinations/{destinationId}/associations | List associated campaigns |
| [**listConversionDestinations()**](ConversionsApi.md#listConversionDestinations) | **GET** /v1/accounts/{accountId}/conversion-destinations | List conversion destinations |
| [**removeConversionAssociations()**](ConversionsApi.md#removeConversionAssociations) | **DELETE** /v1/accounts/{accountId}/conversion-destinations/{destinationId}/associations | Remove associated campaigns |
| [**sendConversions()**](ConversionsApi.md#sendConversions) | **POST** /v1/ads/conversions | Send conversion events |
| [**updateConversionDestination()**](ConversionsApi.md#updateConversionDestination) | **PATCH** /v1/accounts/{accountId}/conversion-destinations/{destinationId} | Update a conversion destination |


## `addConversionAssociations()`

```php
addConversionAssociations($account_id, $destination_id, $add_conversion_associations_request): \Zernio\Model\AddConversionAssociations200Response
```

Associate campaigns

Associate one or more campaigns with this conversion rule. Returns a per-campaign success/failure result so callers can retry only the rows that failed (e.g. wrong campaign type for the rule's objective).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
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
    echo 'Exception when calling ConversionsApi->addConversionAssociations: ', $e->getMessage(), PHP_EOL;
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

Adjust uploaded conversions

Adjust conversions that were previously uploaded via `POST /v1/ads/conversions` — retract them, restate their value, or enhance them with first-party data. Requires the Ads add-on.  **Google Ads only.** Google handles adjustments through the classic Google Ads API (`ConversionAdjustmentUploadService`); the Data Manager `ingestEvents` path used for sending conversions is ingest-only. Meta and LinkedIn have no equivalent, so this endpoint returns `405` for those platforms.  Adjustment types:  - `RETRACTION` — remove the conversion entirely (refund, chargeback, cancelled order, churn). - `RESTATEMENT` — change the conversion's value (upgrade / downgrade / partial refund). Send the corrected **total** value in `restatementValue` (not a delta). - `ENHANCEMENT` — attach first-party identifiers (hashed email / phone) to an existing conversion (enhanced conversions applied after the fact).  Identifying the original conversion (per adjustment):  - `orderId` — the transaction ID you sent as `eventId` on the original conversion. Recommended, and **required** for `ENHANCEMENT`. - or `gclid` + `conversionTime` — the click ID and the original conversion's time (unix seconds). Not available for `ENHANCEMENT`.  `destinationId` is the conversion action resource name, e.g. `customers/1234567890/conversionActions/987654321` (same value you send to `POST /v1/ads/conversions`). PII in `user` is hashed with SHA-256 server-side (Gmail-specific normalization included). Send plaintext.  Times are unix seconds; we convert to Google's required `yyyy-MM-dd HH:mm:ss+00:00` format. Up to 2000 adjustments per request; partial failure is supported (inspect `adjustmentsFailed` / `failures[]`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
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
    echo 'Exception when calling ConversionsApi->adjustConversions: ', $e->getMessage(), PHP_EOL;
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

## `createConversionDestination()`

```php
createConversionDestination($account_id, $create_conversion_destination_request): \Zernio\Model\CreateConversionDestination201Response
```

Create a conversion destination

Create a new conversion destination on the platform. Supported for LinkedIn (conversion rule) and Google Ads (conversion action). Meta manages destinations in its own UI and returns 405.  **LinkedIn:** creation is NOT idempotent. A retry creates a second destination. Deduplicate before retrying.  **Google Ads:** calling with a name that already exists reuses the existing conversion action transparently (the response is identical to a fresh create). Calling with the same name but a different category returns a typed `IDEMPOTENCY_CONFLICT` (409) rather than silently returning the mismatched action.  **LinkedIn:** the rule is created with `conversionMethod=CONVERSIONS_API` and (by default) auto-associated with all of the ad account's campaigns via `autoAssociationType=ALL_CAMPAIGNS`. Pass `autoAssociationType: NONE` to opt out and manage associations explicitly via the associations endpoints below.  365-day attribution windows are only valid for `SUBMIT_APPLICATION`, `PURCHASE`, `ADD_TO_CART`, `QUALIFIED_LEAD`, and `LEAD` rule types; the API rejects other combinations locally.  **Google Ads:** the conversion action is created with `type=UPLOAD_CLICKS` (required for API-uploaded offline conversions, immutable after creation). The `type` field carries the Google `ConversionActionCategory` enum value, e.g. `PURCHASE`, `SUBSCRIBE_PAID`, `SIGNUP`, `IMPORTED_LEAD`, `BOOK_APPOINTMENT`. Unified standard event names (e.g. `Purchase`, `Subscribe`, `CompleteRegistration`, `Lead`, `Schedule`) are resolved to their Google category equivalents automatically. The action defaults to secondary (non-primary) to avoid immediately steering Smart Bidding; pass `primaryForGoal: true` to opt in.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
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
    echo 'Exception when calling ConversionsApi->createConversionDestination: ', $e->getMessage(), PHP_EOL;
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

## `deleteConversionDestination()`

```php
deleteConversionDestination($account_id, $destination_id, $ad_account_id)
```

Delete a conversion destination

LinkedIn-only today. LinkedIn does not expose hard-delete on conversion rules — what their UI calls \"delete\" is the same `enabled: false` flip we apply here. The rule remains fetchable via GET with `status: 'inactive'`; the unified discovery endpoint hides it by default.  `adAccountId` may be passed as a query parameter (recommended) or as a JSON body field for clients that can send DELETE bodies.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
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
    echo 'Exception when calling ConversionsApi->deleteConversionDestination: ', $e->getMessage(), PHP_EOL;
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

## `getConversionDestination()`

```php
getConversionDestination($account_id, $destination_id, $ad_account_id): \Zernio\Model\GetConversionDestination200Response
```

Get a conversion destination

LinkedIn-only today. Returns the full destination record for one conversion rule. The `adAccountId` query parameter is required because LinkedIn rules are scoped to a sponsored ad account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
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
    echo 'Exception when calling ConversionsApi->getConversionDestination: ', $e->getMessage(), PHP_EOL;
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

Get attribution metrics

LinkedIn-only today. Returns conversion-attribution metrics (`externalWebsiteConversions`, `externalWebsitePostClickConversions`, `externalWebsitePostViewConversions`, `conversionValueInLocalCurrency`, `qualifiedLeads`, `costInLocalCurrency`) bucketed by date.  Date-range constraints (passed through from LinkedIn): - `granularity=DAILY` is retained for ~6 months only - `granularity=ALL` with a range > 6 months auto-rounds to month boundaries - `granularity=MONTHLY`/`YEARLY` retains 24 months  Throttle: LinkedIn caps adAnalytics at 45M metric values per 5-minute window across the calling token. Single-rule queries are well within that limit; surfaces as 429 if hit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
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
    echo 'Exception when calling ConversionsApi->getConversionMetrics: ', $e->getMessage(), PHP_EOL;
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

Get Event Match Quality

Reads Meta Event Match Quality (EMQ) and pixel↔CAPI event coverage for a pixel/dataset, live from Meta's Dataset Quality API. Web events only (a Meta limitation). Meta-only; other platforms return 405. Requires the Ads add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
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
    echo 'Exception when calling ConversionsApi->getConversionsQuality: ', $e->getMessage(), PHP_EOL;
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

## `listConversionAssociations()`

```php
listConversionAssociations($account_id, $destination_id, $ad_account_id): \Zernio\Model\ListConversionAssociations200Response
```

List associated campaigns

LinkedIn-only today. Returns the campaigns currently associated with this conversion rule. Note that auto-association on rule creation runs once at create time; campaigns created after the rule still need explicit association.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
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
    echo 'Exception when calling ConversionsApi->listConversionAssociations: ', $e->getMessage(), PHP_EOL;
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

List conversion destinations

Returns the list of pixels (Meta), conversion actions (Google), or conversion rules (LinkedIn) accessible to the connected ads account. Use the returned `id` as `destinationId` when posting to `POST /v1/ads/conversions`.  For Google and LinkedIn, each destination's `type` reflects the conversion type (PURCHASE, LEAD, SIGN_UP, etc.) — the event type is locked to the destination. For Meta, `type` is absent: pixels accept any event name per request.  For LinkedIn, destinations are returned across every sponsored ad account the connected token can access; the `adAccountId` field on each destination identifies the parent ad account and is required for subsequent CRUD calls (update, delete, associations, metrics).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
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
    echo 'Exception when calling ConversionsApi->listConversionDestinations: ', $e->getMessage(), PHP_EOL;
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

## `removeConversionAssociations()`

```php
removeConversionAssociations($account_id, $destination_id, $ad_account_id, $campaign_ids): \Zernio\Model\RemoveConversionAssociations200Response
```

Remove associated campaigns

Remove one or more campaign associations from this conversion rule. Pass `adAccountId` and `campaignIds` as query parameters (`campaignIds` is comma-separated). The route also accepts a JSON body with the same fields for clients that prefer DELETE-with-body, but the documented surface is query-only because some SDK code generators (e.g. Python) collapse query + body parameters with the same name into a single kwarg.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
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
    echo 'Exception when calling ConversionsApi->removeConversionAssociations: ', $e->getMessage(), PHP_EOL;
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

## `sendConversions()`

```php
sendConversions($send_conversions_request): \Zernio\Model\SendConversions200Response
```

Send conversion events

Relay one or more conversion events to the target ad platform's native Conversions API. Platform is inferred from the provided `accountId`. Requires the Ads add-on.  Supported platforms:  - Meta (`metaads`) via Graph API - Google Ads (`googleads`) via Data Manager API `ingestEvents` - LinkedIn (`linkedinads`) via `/rest/conversionEvents` - TikTok (`tiktokads`) via the Offline Events API `/offline/batch/` — OFFLINE conversions only  `destinationId` semantics differ per platform:  - Meta: pixel (dataset) ID, e.g. `123456789012345` - Google: conversion action resource name, e.g. `customers/1234567890/conversionActions/987654321` - LinkedIn: conversion rule ID or URN, e.g. `104012` or `urn:lla:llaPartnerConversion:104012` - TikTok: Offline Event Set ID, e.g. `7057103914977558530`  TikTok notes: this path sends OFFLINE conversions (in-store / CRM / call-center), not web-pixel events. Each event must carry an email or phone (TikTok requires at least one). The connected TikTok ads account must have granted the Offline Events permission; older grants must reconnect.  Callers can list valid destinations via `GET /v1/accounts/{accountId}/conversion-destinations`.  All PII (email, phone, names, external IDs) is hashed with SHA-256 server-side per each platform's normalization spec, including Google's Gmail-specific dot/plus-suffix stripping. Send plaintext. LinkedIn `externalIds` are passed through as plaintext per LinkedIn's spec; only emails and phones are hashed.  For LinkedIn, the connected account must have been authorized after the Conversions API rollout (i.e. the OAuth grant must include `rw_conversions`). Older accounts must reconnect.  Batching is handled automatically. Meta caps at 1000 events per request and rejects the entire batch if any event is malformed. Google caps at 2000. LinkedIn caps at 5000 and is also all-or-nothing per chunk.  Dedup: pass a stable `eventId` on every event. Meta and LinkedIn use it to dedupe against browser-side pixel/Insight Tag events; Google maps it to `transactionId`.  Per-platform `eventName` semantics:  - Meta: free-form. Standard names (Purchase, Lead, ...) match Meta's built-in events; custom strings are accepted. - Google: ignored. The conversion action's category determines the event type. Send the standard name closest to your action for documentation, but the platform will not branch on it. - LinkedIn: ignored. The conversion rule's `type` (LEAD, PURCHASE, etc.) is locked to the destination at rule-creation time. Send the standard name for documentation; LinkedIn does not branch on it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionsApi(
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
    echo 'Exception when calling ConversionsApi->sendConversions: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Zernio\Api\ConversionsApi(
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
    echo 'Exception when calling ConversionsApi->updateConversionDestination: ', $e->getMessage(), PHP_EOL;
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
