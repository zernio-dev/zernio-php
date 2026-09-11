# Zernio\AdTargetingApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**estimateAdReach()**](AdTargetingApi.md#estimateAdReach) | **POST** /v1/ads/targeting/reach-estimate | Estimate audience reach |
| [**getLinkedInBidPricing()**](AdTargetingApi.md#getLinkedInBidPricing) | **POST** /v1/ads/targeting/bid-pricing | Suggested bid and budget bounds |
| [**getLinkedInSupplyForecast()**](AdTargetingApi.md#getLinkedInSupplyForecast) | **POST** /v1/ads/targeting/supply-forecast | Forecast ad delivery |
| [**searchAdInterests()**](AdTargetingApi.md#searchAdInterests) | **GET** /v1/ads/interests | Search targeting interests |
| [**searchAdTargeting()**](AdTargetingApi.md#searchAdTargeting) | **GET** /v1/ads/targeting/search | Search targeting options |


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


$apiInstance = new Zernio\Api\AdTargetingApi(
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
    echo 'Exception when calling AdTargetingApi->estimateAdReach: ', $e->getMessage(), PHP_EOL;
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

## `getLinkedInBidPricing()`

```php
getLinkedInBidPricing($get_linked_in_bid_pricing_request): \Zernio\Model\GetLinkedInBidPricing200Response
```

Suggested bid and budget bounds

LinkedIn-only. Returns the suggested bid and bid limits for a targeting spec, plus the daily-budget bounds LinkedIn will accept. Use it before creating a campaign to pick a bid inside the allowed range and warn the user if their daily budget is below the minimum. Wraps LinkedIn's `adBudgetPricing` finder.  Non-LinkedIn accounts return `available: false` so clients can hide the pricing UI without treating it as a failure.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdTargetingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_linked_in_bid_pricing_request = new \Zernio\Model\GetLinkedInBidPricingRequest(); // \Zernio\Model\GetLinkedInBidPricingRequest

try {
    $result = $apiInstance->getLinkedInBidPricing($get_linked_in_bid_pricing_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdTargetingApi->getLinkedInBidPricing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_linked_in_bid_pricing_request** | [**\Zernio\Model\GetLinkedInBidPricingRequest**](../Model/GetLinkedInBidPricingRequest.md)|  | |

### Return type

[**\Zernio\Model\GetLinkedInBidPricing200Response**](../Model/GetLinkedInBidPricing200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLinkedInSupplyForecast()`

```php
getLinkedInSupplyForecast($get_linked_in_supply_forecast_request): \Zernio\Model\GetLinkedInSupplyForecast200Response
```

Forecast ad delivery

LinkedIn-only. Forecasted impressions, clicks, spend and ~20 other metrics for a targeting spec over a time range. Wraps LinkedIn's `adSupplyForecasts` finder.  Each returned series carries a `metricType` (IMPRESSION, CLICK, SPENDING, MAX_POTENTIAL_BUDGET, COST_PER_MILLION_IMPRESSIONS, ...) and a `granularity` (DAILY, SEVEN_DAY, THIRTY_DAY, CUSTOM). LinkedIn caps the daily spending forecast at 1.2x the daily budget and returns 0 once the total budget is exhausted.  Non-LinkedIn accounts return `available: false`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdTargetingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_linked_in_supply_forecast_request = new \Zernio\Model\GetLinkedInSupplyForecastRequest(); // \Zernio\Model\GetLinkedInSupplyForecastRequest

try {
    $result = $apiInstance->getLinkedInSupplyForecast($get_linked_in_supply_forecast_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdTargetingApi->getLinkedInSupplyForecast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_linked_in_supply_forecast_request** | [**\Zernio\Model\GetLinkedInSupplyForecastRequest**](../Model/GetLinkedInSupplyForecastRequest.md)|  | |

### Return type

[**\Zernio\Model\GetLinkedInSupplyForecast200Response**](../Model/GetLinkedInSupplyForecast200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchAdInterests()`

```php
searchAdInterests($q, $account_id): \Zernio\Model\SearchAdInterests200Response
```

Search targeting interests

Deprecated alias for `GET /v1/ads/targeting/search?dimension=interest`. Kept for backward compatibility, it returns the legacy `{ interests: [...] }` shape rather than the normalized `{ results: [...] }`. New integrations should use `GET /v1/ads/targeting/search` with `dimension=interest`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdTargetingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | Search query
$account_id = 'account_id_example'; // string | Account ID

try {
    $result = $apiInstance->searchAdInterests($q, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdTargetingApi->searchAdInterests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**| Search query | |
| **account_id** | **string**| Account ID | |

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

Resolve a human-readable query into the platform's opaque targeting ids used in the `TargetingSpec` (`countries`/`regions`/`cities`/`zips`/`metros` geo keys, and `interests`/`behaviors` entity ids) on `POST /v1/ads/create`, `POST /v1/ads/targeting/reach-estimate`, and `saved_targeting` audiences.  The `dimension` param selects what is searched:  - `geo`: locations, further scoped by `geoType` - `interest` - `behavior` - `income` - `language`: Google-only - `workPosition`, `workEmployer`, `workIndustry`: the Meta-only work demographics, whose   ids feed `TargetingSpec.workPositions`/`workEmployers`/`workIndustries` - `industry`, `jobFunction`, `seniority`, `companySize`: the LinkedIn-only B2B facets, whose   URNs feed `TargetingSpec.industries`/`jobFunctions`/`seniorities`/`companySizes`  Availability of each dimension varies by platform (e.g. behaviours are Meta/TikTok only). Work industries are a fixed ~30-entry Meta catalog with no server-side query, so `workIndustry` matching, ranking and `limit` happen in Zernio. `language` is likewise a fixed, checked-in table of Google's targetable `language_constant` rows (id, ISO code, name) matched by name or code, capped at 20, with no network call; its ids feed `TargetingSpec.languages`.  Results are normalized across platforms into a single shape, so the same client code consumes Meta, TikTok, LinkedIn, X, Pinterest, and Google results.  TikTok geo searches return every matching level in one list (`type` is `country`, `region`, `city`, `district`, or `metro` for DMA areas), and `geoType` is not applied. Results are scoped to the advertiser's targetable markets, and every id is usable in `regions`/`cities`/`metros` keys on `POST /v1/ads/create`.  LinkedIn geo searches also return every matching level in one list, and neither `geoType` nor `countryCode` is applied: LinkedIn's typeahead only returns a name and a URN per result, with no level or country field to filter on. Every result has `type` set to `location`, and its id is a `urn:li:geo:*` URN usable as a `regions[].key` on `POST /v1/ads/create`, `POST /v1/ads/boost` and `POST /v1/ads/targeting/reach-estimate`.  LinkedIn B2B searches (`industry`, `jobFunction`, `seniority`, `companySize`) return the full URN to pass straight back, so no URN id fragment has to be assembled by hand: `urn:li:industry:4`, `urn:li:function:8`, `urn:li:seniority:6`, `urn:li:staffCountRange:(51,200)`. Only `industry` is a server-side name search (LinkedIn's typeahead finder). LinkedIn exposes no typeahead for job functions, seniorities and company sizes, so Zernio fetches each whole table (26, 10 and 9 entries), caches it, and does the matching, ranking and `limit` cutoff itself. Those three never carry `audienceSize`, and `countryCode` and `geoType` are not applied to any of the four.  Google geo searches resolve against Google's geoTargetConstants and return every matching level in one list; `geoType` is not applied (Google's `target_type` is an open taxonomy that does not map one-to-one onto the `geoType` enum), so filter client-side on the returned `type` (`country`, `region`, `city`, `zip`, `metro`, or the lowercased Google target type for rarer levels). `countryCode` scopes the search to one country. Each id is Google's numeric criterion id, usable as a `regions`/`cities`/`zips`/`metros` `key` on `POST /v1/ads/create`. Google city radius is not supported (pass a `customLocations` lat/lng pin for a radius); country targeting also accepts plain ISO codes via `countries` with no search call.  Pinterest resolves against three whole-catalog endpoints (interests, locations, regions) with no server-side query or pagination, so matching, ranking and the `limit` cutoff all happen in Zernio; the catalog is independent of any ad account and results never carry `audienceSize`. Names come back localized to the connected Pinterest account's language (there is no way to force a locale), so match against whatever language that account returns.  `geoType` routes to a different Pinterest catalog:  - `country` and `metro_area` read the locations catalog (`type` is `country` or `metro`) - `region` reads the regions catalog (`type` is `region`, its id a `regions[].key` on   `POST /v1/ads/create`) - `all` and the default `city` merge both catalogs with honest per-entry `type`s, since   Pinterest has no city-level catalog and `city` is an alias for `all`, not a literal   city search - `zip`, `subcity`, `neighborhood`, `place` and `geo_market` return a 400: Pinterest   exposes no postal-code catalog, pass postal codes directly as   `targeting.zips: [{ key }]` on `POST /v1/ads/create`  For geo queries, `q` should contain only the locality name (e.g. `\"Amsterdam\"`, not `\"Amsterdam, NL\"`). Use `countryCode` to disambiguate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdTargetingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID (a connected account on the target ad platform).
$q = 'q_example'; // string | Search query. For geo, the locality name only (no region/country suffix).
$dimension = 'interest'; // string | What to search. `geo` resolves locations (scope further with `geoType`), `interest`/`behavior` resolve audience entities, `income` resolves income-tier options, `language` resolves Google's targetable language_constant table (Google only), `workPosition`/`workEmployer`/`workIndustry` resolve Meta work demographics, `industry`/`jobFunction`/`seniority`/`companySize` resolve LinkedIn B2B facets (LinkedIn only). Defaults to `interest` for backward compatibility with the deprecated /v1/ads/interests alias.
$geo_type = 'city'; // string | Only used when `dimension=geo`. The kind of location to resolve. `all` searches every type in one relevance-ranked call. Defaults to `city`.
$country_code = 'country_code_example'; // string | ISO 3166-1 alpha-2 country code (e.g. NL) to scope a geo search.
$limit = 25; // int | Maximum results to return.

try {
    $result = $apiInstance->searchAdTargeting($account_id, $q, $dimension, $geo_type, $country_code, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdTargetingApi->searchAdTargeting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account ID (a connected account on the target ad platform). | |
| **q** | **string**| Search query. For geo, the locality name only (no region/country suffix). | |
| **dimension** | **string**| What to search. &#x60;geo&#x60; resolves locations (scope further with &#x60;geoType&#x60;), &#x60;interest&#x60;/&#x60;behavior&#x60; resolve audience entities, &#x60;income&#x60; resolves income-tier options, &#x60;language&#x60; resolves Google&#39;s targetable language_constant table (Google only), &#x60;workPosition&#x60;/&#x60;workEmployer&#x60;/&#x60;workIndustry&#x60; resolve Meta work demographics, &#x60;industry&#x60;/&#x60;jobFunction&#x60;/&#x60;seniority&#x60;/&#x60;companySize&#x60; resolve LinkedIn B2B facets (LinkedIn only). Defaults to &#x60;interest&#x60; for backward compatibility with the deprecated /v1/ads/interests alias. | [optional] [default to &#39;interest&#39;] |
| **geo_type** | **string**| Only used when &#x60;dimension&#x3D;geo&#x60;. The kind of location to resolve. &#x60;all&#x60; searches every type in one relevance-ranked call. Defaults to &#x60;city&#x60;. | [optional] [default to &#39;city&#39;] |
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
