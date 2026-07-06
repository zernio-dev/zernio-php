# Zernio\UsageApi

Usage and metering, hub + spokes. &#x60;GET /v1/usage&#x60; is the hub: plan, billing period, and quota usage in one snapshot (&#x60;/v1/usage-stats&#x60; is its deprecated alias). The &#x60;/v1/usage/&lt;domain&gt;&#x60; spokes (calls, sms) meter consumption over any window with a uniform contract: since/until/number/groupBy in, totals + groups out.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCallsUsage()**](UsageApi.md#getCallsUsage) | **GET** /v1/usage/calls | Calling usage (volumes + billable cost) |
| [**getSmsUsage()**](UsageApi.md#getSmsUsage) | **GET** /v1/usage/sms | SMS usage (volumes) |
| [**getUsage()**](UsageApi.md#getUsage) | **GET** /v1/usage | Get plan and usage snapshot |
| [**getUsageStats()**](UsageApi.md#getUsageStats) | **GET** /v1/usage-stats | Get plan and usage stats |
| [**getXApiPricing()**](UsageApi.md#getXApiPricing) | **GET** /v1/billing/x-pricing | Get X/Twitter API pricing table |


## `getCallsUsage()`

```php
getCallsUsage($since, $until, $channel, $number, $group_by): \Zernio\Model\GetCallsUsage200Response
```

Calling usage (volumes + billable cost)

Aggregated calling usage across your numbers, both channels (WhatsApp Business Calling + regular phone/PSTN): call counts, answered counts, minutes, and cost. Use it for cost visibility or to rebill your own customers per number.  Costs come from each call's billing snapshot, so this endpoint always agrees with the invoice: `billableUSD` is what Zernio bills; `metaUSD` is the WhatsApp per-minute charge Meta bills directly to your WABA (display only, never billed by Zernio).  Optional `groupBy` returns a breakdown by UTC day, by your number, or by channel. Defaults to the last 30 days.

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
$since = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start of the window (inclusive). Default 30 days before `until`.
$until = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End of the window (exclusive). Default now.
$channel = 'channel_example'; // string
$number = 'number_example'; // string | Scope to calls involving this number (typically one of YOUR numbers). E.164, leading + optional.
$group_by = 'group_by_example'; // string

try {
    $result = $apiInstance->getCallsUsage($since, $until, $channel, $number, $group_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageApi->getCallsUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **since** | **\DateTime**| Start of the window (inclusive). Default 30 days before &#x60;until&#x60;. | [optional] |
| **until** | **\DateTime**| End of the window (exclusive). Default now. | [optional] |
| **channel** | **string**|  | [optional] |
| **number** | **string**| Scope to calls involving this number (typically one of YOUR numbers). E.164, leading + optional. | [optional] |
| **group_by** | **string**|  | [optional] |

### Return type

[**\Zernio\Model\GetCallsUsage200Response**](../Model/GetCallsUsage200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSmsUsage()`

```php
getSmsUsage($since, $until, $number, $group_by): \Zernio\Model\GetSmsUsage200Response
```

SMS usage (volumes)

Aggregated SMS/MMS volumes across your numbers: sent, received, and total message counts, with an optional breakdown by UTC day or by number. Defaults to the last 30 days.  Volumes only, deliberately: SMS cost is carrier-rated asynchronously and billed to your invoice, so per-message cost is not available here. Calling usage (GET /v1/usage/calls) does include billable cost.

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
$since = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start of the window (inclusive). Default 30 days before `until`.
$until = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End of the window (exclusive). Default now.
$number = 'number_example'; // string | Scope to one of YOUR SMS-enabled numbers (E.164, leading + optional).
$group_by = 'group_by_example'; // string

try {
    $result = $apiInstance->getSmsUsage($since, $until, $number, $group_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageApi->getSmsUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **since** | **\DateTime**| Start of the window (inclusive). Default 30 days before &#x60;until&#x60;. | [optional] |
| **until** | **\DateTime**| End of the window (exclusive). Default now. | [optional] |
| **number** | **string**| Scope to one of YOUR SMS-enabled numbers (E.164, leading + optional). | [optional] |
| **group_by** | **string**|  | [optional] |

### Return type

[**\Zernio\Model\GetSmsUsage200Response**](../Model/GetSmsUsage200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsage()`

```php
getUsage($reconcile): \Zernio\Model\UsageStats
```

Get plan and usage snapshot

The usage hub: current plan name, billing period, plan limits, and usage counts, in one snapshot. For metered consumption over an arbitrary window with breakdowns (by day, by number), use the domain spokes: `GET /v1/usage/calls` and `GET /v1/usage/sms`.  The response shape depends on the account's `billingSystem`:   * Stripe users: per-period `usage.uploads` / `usage.profiles` counters.   * Metronome (usage-based) users: `usage.connectedAccounts`,     `usage.xApiCallsByOperation` (per-operation X API call counts —     resolve keys via `GET /v1/billing/x-pricing`), plus a `spend`     block with `currentPeriodCents`, `xSpendCents`, and     `xSpendLimitCents`. The legacy `usage.xApiCalls` 3-tier     aggregate is still emitted for back-compat but excludes the     $0.200 URL tier and any future tiers — new clients should     consume `xApiCallsByOperation` only.

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
$reconcile = True; // bool | For Stripe subscription users, `true` forces a subscription reconciliation pass even when cached plan data looks complete. Omit the parameter, or pass `false`, to use the default first-time-only reconciliation behavior. Invalid boolean values are rejected.

try {
    $result = $apiInstance->getUsage($reconcile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageApi->getUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reconcile** | **bool**| For Stripe subscription users, &#x60;true&#x60; forces a subscription reconciliation pass even when cached plan data looks complete. Omit the parameter, or pass &#x60;false&#x60;, to use the default first-time-only reconciliation behavior. Invalid boolean values are rejected. | [optional] |

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

## `getUsageStats()`

```php
getUsageStats($reconcile): \Zernio\Model\UsageStats
```

Get plan and usage stats

Deprecated alias of `GET /v1/usage`; same contract. New integrations should use that path (the usage hub), with `GET /v1/usage/calls` and `GET /v1/usage/sms` for metered breakdowns.  Returns the current plan name, billing period, plan limits, and usage counts.  The response shape depends on the account's `billingSystem`:   * Stripe users: per-period `usage.uploads` / `usage.profiles` counters.   * Metronome (usage-based) users: `usage.connectedAccounts`,     `usage.xApiCallsByOperation` (per-operation X API call counts —     resolve keys via `GET /v1/billing/x-pricing`), plus a `spend`     block with `currentPeriodCents`, `xSpendCents`, and     `xSpendLimitCents`. The legacy `usage.xApiCalls` 3-tier     aggregate is still emitted for back-compat but excludes the     $0.200 URL tier and any future tiers — new clients should     consume `xApiCallsByOperation` only.

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
$reconcile = True; // bool | For Stripe subscription users, `true` forces a subscription reconciliation pass even when cached plan data looks complete. Omit the parameter, or pass `false`, to use the default first-time-only reconciliation behavior. Invalid boolean values are rejected.

try {
    $result = $apiInstance->getUsageStats($reconcile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageApi->getUsageStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reconcile** | **bool**| For Stripe subscription users, &#x60;true&#x60; forces a subscription reconciliation pass even when cached plan data looks complete. Omit the parameter, or pass &#x60;false&#x60;, to use the default first-time-only reconciliation behavior. Invalid boolean values are rejected. | [optional] |

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
