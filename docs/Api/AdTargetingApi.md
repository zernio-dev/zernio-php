# Zernio\AdTargetingApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**estimateAdReach()**](AdTargetingApi.md#estimateAdReach) | **POST** /v1/ads/targeting/reach-estimate | Estimate audience reach |
| [**getLinkedInBidPricing()**](AdTargetingApi.md#getLinkedInBidPricing) | **POST** /v1/ads/targeting/bid-pricing | Suggested bid and budget bounds |
| [**getLinkedInSupplyForecast()**](AdTargetingApi.md#getLinkedInSupplyForecast) | **POST** /v1/ads/targeting/supply-forecast | Impressions, clicks and spend forecast |
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

Impressions, clicks and spend forecast

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
$account_id = 'account_id_example'; // string | Social account ID

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

Resolve a human-readable query into the platform's opaque targeting ids used in the `TargetingSpec` (`countries`/`regions`/`cities`/`zips`/`metros` geo keys, and `interests`/`behaviors` entity ids) on `POST /v1/ads/create`, `POST /v1/ads/targeting/reach-estimate`, and `saved_targeting` audiences.  The `dimension` param selects what is searched, `geo` (locations, further scoped by `geoType`), `interest`, `behavior`, or `income`. Availability of each dimension varies by platform (e.g. behaviours are Meta/TikTok only). Results are normalized across platforms into a single shape, so the same client code consumes Meta, TikTok, LinkedIn, X, Pinterest, and Google results.  TikTok geo searches return every matching level in one list (`type` is `country`, `region`, `city`, `district`, or `metro` for DMA areas) — `geoType` is not applied. Results are scoped to the advertiser's targetable markets, and every id is usable in `regions`/`cities`/`metros` keys on `POST /v1/ads/create`.  For geo queries, `q` should contain only the locality name (e.g. `\"Amsterdam\"`, not `\"Amsterdam, NL\"`). Use `countryCode` to disambiguate.

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
$account_id = 'account_id_example'; // string | Social account ID (a connected account on the target ad platform).
$q = 'q_example'; // string | Search query. For geo, the locality name only (no region/country suffix).
$dimension = 'interest'; // string | What to search. `geo` resolves locations (scope further with `geoType`), `interest`/`behavior` resolve audience entities, `income` resolves income-tier options. Defaults to `interest` for backward compatibility with the deprecated /v1/ads/interests alias.
$geo_type = 'city'; // string | Only used when `dimension=geo`. The kind of location to resolve. Defaults to `city`.
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
| **account_id** | **string**| Social account ID (a connected account on the target ad platform). | |
| **q** | **string**| Search query. For geo, the locality name only (no region/country suffix). | |
| **dimension** | **string**| What to search. &#x60;geo&#x60; resolves locations (scope further with &#x60;geoType&#x60;), &#x60;interest&#x60;/&#x60;behavior&#x60; resolve audience entities, &#x60;income&#x60; resolves income-tier options. Defaults to &#x60;interest&#x60; for backward compatibility with the deprecated /v1/ads/interests alias. | [optional] [default to &#39;interest&#39;] |
| **geo_type** | **string**| Only used when &#x60;dimension&#x3D;geo&#x60;. The kind of location to resolve. Defaults to &#x60;city&#x60;. | [optional] [default to &#39;city&#39;] |
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
