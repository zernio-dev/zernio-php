# Zernio\UsageApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUsageStats()**](UsageApi.md#getUsageStats) | **GET** /v1/usage-stats | Get plan and usage stats |
| [**getXApiPricing()**](UsageApi.md#getXApiPricing) | **GET** /v1/billing/x-pricing | Get X/Twitter API pricing table |


## `getUsageStats()`

```php
getUsageStats(): \Zernio\Model\UsageStats
```

Get plan and usage stats

Returns the current plan name, billing period, plan limits, and usage counts.  The response shape depends on the account's `billingSystem`:   * Stripe users: per-period `usage.uploads` / `usage.profiles` counters.   * Metronome (usage-based) users: `usage.connectedAccounts`,     `usage.xApiCalls` (aggregated by tier), `usage.xApiCallsByOperation`     (per-operation map — resolve keys via `GET /v1/billing/x-pricing`),     plus a `spend` block with `currentPeriodCents`, `xSpendCents`, and     `xSpendLimitCents`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\UsageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUsageStats();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageApi->getUsageStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zernio\Model\UsageStats**](../Model/UsageStats.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getXApiPricing()`

```php
getXApiPricing(): \Zernio\Model\XApiPricing
```

Get X/Twitter API pricing table

Returns Zernio's canonical X/Twitter API pricing table. Each X action has its own Metronome product and its own rate, and Zernio passes X API costs through at exact rates with zero markup.  The response is identical for every authenticated user (pricing is universal), so it is safe to cache on the client for the duration of a billing period.  To compute your own per-operation spend, pair this endpoint with `GET /v1/usage-stats` — that endpoint returns `usage.xApiCallsByOperation` keyed by the same `operation` field you get here.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\UsageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getXApiPricing();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageApi->getXApiPricing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zernio\Model\XApiPricing**](../Model/XApiPricing.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
