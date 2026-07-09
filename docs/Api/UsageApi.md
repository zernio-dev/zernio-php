# Zernio\UsageApi

Usage and metering. &#x60;GET /v1/usage&#x60; is dual-mode: bare calls return the plan / quota snapshot (back-compat, same as &#x60;/v1/usage-stats&#x60;); calls with &#x60;range&#x60; / &#x60;granularity&#x60; params return usage METERING — billed spend (USD) by product family (accounts, numbers, calls, sms, dlc, xApi, credits) over any window, from Metronome&#39;s invoice breakdown (also served at &#x60;GET /v1/usage/daily&#x60;). The &#x60;/v1/usage/&lt;domain&gt;&#x60; spokes (calls, sms) meter per-domain consumption volumes over a window. &#x60;GET /v1/billing&#x60; is the billing statement (balance, credits, caps, payment status).

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBilling()**](UsageApi.md#getBilling) | **GET** /v1/billing | Account billing snapshot (plan, cycle, balance, caps, status) |
| [**getCallsUsage()**](UsageApi.md#getCallsUsage) | **GET** /v1/usage/calls | Calling usage and cost |
| [**getSmsUsage()**](UsageApi.md#getSmsUsage) | **GET** /v1/usage/sms | SMS usage (volumes) |
| [**getUsage()**](UsageApi.md#getUsage) | **GET** /v1/usage | Usage snapshot (default) or billed-spend metering (with params) |
| [**getUsageStats()**](UsageApi.md#getUsageStats) | **GET** /v1/usage-stats | Get plan and usage snapshot (plan, limits, payment status) |
| [**getXApiPricing()**](UsageApi.md#getXApiPricing) | **GET** /v1/billing/x-pricing | Get X/Twitter API pricing table |


## `getBilling()`

```php
getBilling(): \Zernio\Model\BillingSnapshot
```

Account billing snapshot (plan, cycle, balance, caps, status)

The billing \"wallet/statement\" view: current plan, billing cycle, accrued balance + remaining credits this period, spend caps, and payment / access status. This is the billing half of the legacy `/v1/usage-stats` snapshot — the per-product consumption half is metering and lives on `GET /v1/usage`.  Usage-based (Metronome) accounts get a populated `balance`; legacy Stripe accounts get `balance: null` plus a deprecated `legacy.limits` block and, when payment-blocked, `status.openInvoiceUrl` / `status.declineReason`.

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
    $result = $apiInstance->getBilling();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageApi->getBilling: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zernio\Model\BillingSnapshot**](../Model/BillingSnapshot.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCallsUsage()`

```php
getCallsUsage($since, $until, $channel, $number, $group_by): \Zernio\Model\GetCallsUsage200Response
```

Calling usage and cost

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
getUsage($reconcile, $range, $from, $to, $granularity): \Zernio\Model\GetUsage200Response
```

Usage snapshot (default) or billed-spend metering (with params)

Dual-mode endpoint, selected by query params — fully backward compatible:  **Without metering params (the default):** the plan / quota / usage snapshot — plan name, billing period, limits, usage counts, access state. Identical to `GET /v1/usage-stats`. Existing integrations keep working unchanged.  **With `range`, `granularity`, `from`, or `to`:** usage METERING — billed spend (USD) by product family (`accounts`, `numbers`, `calls`, `sms`, `dlc`, `xApi`, `credits`, `other`) over the window, at `day` / `month` / `total` granularity, from Metronome's invoice breakdown (the CHARGE view — always reconciles with what gets billed). Also served at `GET /v1/usage/daily`. Usage-based accounts only — legacy Stripe accounts get `{ \"supported\": false, \"days\": [] }`.  For per-domain consumption *volumes* use `GET /v1/usage/calls` and `GET /v1/usage/sms`. For the billing statement (balance, credits, caps, payment status) use `GET /v1/billing`.

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
$reconcile = True; // bool | Snapshot mode only. For Stripe subscription users, `true` forces a subscription reconciliation pass even when cached plan data looks complete.
$range = 'cycle'; // string | Window to report. `cycle` / `prev-cycle` resolve to the customer's real billing-period bounds (falling back to a trailing 30 days when no invoice exists yet); `7d`…`12mo` are trailing windows; `custom` uses `from` / `to`.
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Inclusive start (UTC date). Required when `range=custom`.
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Inclusive end (UTC date). Required when `range=custom`. Max span 366 days.
$granularity = 'day'; // string | Bucketing of the `days` series: `day` (one row per UTC day), `month` (one row per calendar month, dated to the 1st), or `total` (no series — read `totals`). Does not affect `totals`.

try {
    $result = $apiInstance->getUsage($reconcile, $range, $from, $to, $granularity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageApi->getUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reconcile** | **bool**| Snapshot mode only. For Stripe subscription users, &#x60;true&#x60; forces a subscription reconciliation pass even when cached plan data looks complete. | [optional] |
| **range** | **string**| Window to report. &#x60;cycle&#x60; / &#x60;prev-cycle&#x60; resolve to the customer&#39;s real billing-period bounds (falling back to a trailing 30 days when no invoice exists yet); &#x60;7d&#x60;…&#x60;12mo&#x60; are trailing windows; &#x60;custom&#x60; uses &#x60;from&#x60; / &#x60;to&#x60;. | [optional] [default to &#39;cycle&#39;] |
| **from** | **\DateTime**| Inclusive start (UTC date). Required when &#x60;range&#x3D;custom&#x60;. | [optional] |
| **to** | **\DateTime**| Inclusive end (UTC date). Required when &#x60;range&#x3D;custom&#x60;. Max span 366 days. | [optional] |
| **granularity** | **string**| Bucketing of the &#x60;days&#x60; series: &#x60;day&#x60; (one row per UTC day), &#x60;month&#x60; (one row per calendar month, dated to the 1st), or &#x60;total&#x60; (no series — read &#x60;totals&#x60;). Does not affect &#x60;totals&#x60;. | [optional] [default to &#39;day&#39;] |

### Return type

[**\Zernio\Model\GetUsage200Response**](../Model/GetUsage200Response.md)

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

Get plan and usage snapshot (plan, limits, payment status)

The plan / quota / payment-status snapshot: current plan name, billing period, plan limits, usage counts, and access state. Identical to a bare `GET /v1/usage` call (this path is its deprecated alias). For billed spend by product, call `GET /v1/usage` with `range` / `granularity` params. The statement view (balance, credits, caps, payment status) lives at `GET /v1/billing`.  The response shape depends on the account's `billingSystem`:   * Stripe users: per-period `usage.uploads` / `usage.profiles` counters.   * Metronome (usage-based) users: `usage.connectedAccounts`,     `usage.xApiCallsByOperation` (per-operation X API call counts —     resolve keys via `GET /v1/billing/x-pricing`), plus a `spend`     block with `currentPeriodCents`, `xSpendCents`, and     `xSpendLimitCents`. The legacy `usage.xApiCalls` 3-tier     aggregate is still emitted for back-compat but excludes the     $0.200 URL tier and any future tiers — new clients should     consume `xApiCallsByOperation` only.

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
