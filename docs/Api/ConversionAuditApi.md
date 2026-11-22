# Zernio\ConversionAuditApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**auditConversionTracking()**](ConversionAuditApi.md#auditConversionTracking) | **GET** /v1/conversion-audit | Audit a site&#39;s ad conversion tracking |
| [**getLatestConversionAudit()**](ConversionAuditApi.md#getLatestConversionAudit) | **GET** /v1/conversion-audit/latest | Get a host&#39;s latest stored conversion audit |
| [**getMetaConversionAudit()**](ConversionAuditApi.md#getMetaConversionAudit) | **GET** /v1/conversion-audit/meta-audit | Audit a connected Meta pixel from inside Events Manager |


## `auditConversionTracking()`

```php
auditConversionTracking($url): \Zernio\Model\ConversionAuditAnswer
```

Audit a site's ad conversion tracking

Scan any public URL for ad-platform conversion tracking, score how much conversion signal it leaks before the ad platforms see it, and get a fix prompt to hand to a coding agent.  The API key is optional. Without one, a caller's IP address gets 20 scans a minute. The Zernio MCP server always needs a key, because its sign-in covers the whole connection.  The scan fetches the page (SSRF-guarded) and its Google Tag Manager containers, and can render it in a headless browser. It finds every ad platform's browser pixel, checks for visible server-side (Conversions API) tracking, and estimates the signal lost to iOS/ATT, ad-blockers and short cookie windows.  The scan reads the page only and changes nothing on the site. Like the free page, it publishes the result as the host's public report.  Reading the result:  - `report.visibility: \"limited\"` means some pixels load through a tag manager or a store platform, so only part of the setup is visible from outside. It does not mean the tracking failed or is missing. - `status: \"warn\"` (browser-only) is the leak: the platform is tracked in the browser but not server-side. - `status: \"good\"` (server-side) means conversions reach the platform server-side, which recovers most of that signal. - `fixPrompt` is the same fix prompt the Conversion Leak Report page shows: this scan's findings, then the steps to send conversions server-side with `POST /v1/events` and to verify them. - To fix the leak with Zernio, follow https://docs.zernio.com/products/server-side-tracking/fix-with-agent: a tracking site, its tag, a forwarding rule per network to the pixel the page runs, then a rescan. A network turns `good` once the site's events reached that pixel in the last 7 days. - `publicReport` links the host's public page on is-bleeding.com. A homepage scan that could read the site's pixels becomes that page's snapshot, the same as a scan on is-bleeding.com. Any other scan links the stored snapshot, taken at `scannedAt`, or returns null when the host has none.  Without a key, each IP address also shares one hourly ceiling with every other keyless caller. With a key, a user gets 60 scans a minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionAuditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$url = example.com; // string | The website address to audit. A bare domain is accepted and normalized to https.

try {
    $result = $apiInstance->auditConversionTracking($url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionAuditApi->auditConversionTracking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **url** | **string**| The website address to audit. A bare domain is accepted and normalized to https. | |

### Return type

[**\Zernio\Model\ConversionAuditAnswer**](../Model/ConversionAuditAnswer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLatestConversionAudit()`

```php
getLatestConversionAudit($host): \Zernio\Model\GetLatestConversionAudit200Response
```

Get a host's latest stored conversion audit

Read the latest stored Conversion Leak Report for a host without running a new scan. Each homepage scan on is-bleeding.com that could read the site's pixels replaces that host's stored report. Scans made with `auditConversionTracking` are stored the same way.  The API key is optional. Without one, a caller's IP address gets 60 requests a minute. The Zernio MCP server always needs a key.  Returns `404` when the host has no stored report. Run `auditConversionTracking` to scan it now.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionAuditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$host = example.com; // string | The host to look up. A full URL is reduced to its host; `www.` and letter case are ignored.

try {
    $result = $apiInstance->getLatestConversionAudit($host);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionAuditApi->getLatestConversionAudit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **host** | **string**| The host to look up. A full URL is reduced to its host; &#x60;www.&#x60; and letter case are ignored. | |

### Return type

[**\Zernio\Model\GetLatestConversionAudit200Response**](../Model/GetLatestConversionAudit200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMetaConversionAudit()`

```php
getMetaConversionAudit($account_id, $ad_account_id, $pixel_id): \Zernio\Model\MetaDatasetAudit
```

Audit a connected Meta pixel from inside Events Manager

The connected follow-up to the Conversion Leak Report. A page scan only sees the browser; this reads what Meta itself recorded for the ad account's pixel (dataset) with the connection's own token, over the last 7 days.  ### What it reads  - each event's volume per day, its last 24 hours and the last hour Meta counted it in - the share of each event that arrived through the Conversions API (server) rather than the browser pixel - Event Match Quality per event, with the coverage of every customer-information key Meta matched on (email, phone, external id, IP address, user agent, `fbp`, `fbc`, name and address fields) - the event_id, external_id and fbp deduplication coverage of browser and server copies, where an event has both - Meta's diagnostics for the dataset and its failed dataset checks - whether automatic advanced matching and first-party cookies are on  Each `findings` entry is a problem one of those numbers shows, with its fix and who makes it (`fix.by`):  - `zernio`: turning on Zernio server-side events or the Zernio site tag fixes it - `you`: a change in your site or API call - `meta`: a setting only Events Manager has  Meta does not return a business's verified domains or an Aggregated Event Measurement setup to this API, so both are listed under `unavailable`, with any read Meta refused.  `accountId` is a Meta ads connection (or the Facebook account it belongs to). Without `adAccountId`, the first selected ad account that has a pixel is audited; without `pixelId`, its most recently active pixel. The result is cached for 10 minutes per pixel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ConversionAuditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6a10b66d520992756da032cb; // string | The Meta ads connection to read with.
$ad_account_id = act_757082720485182; // string | The ad account whose pixel is audited. Must be selected on the connection.
$pixel_id = 1729525464415281; // string | One of the ad account's pixels (`datasets[].id`).

try {
    $result = $apiInstance->getMetaConversionAudit($account_id, $ad_account_id, $pixel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionAuditApi->getMetaConversionAudit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Meta ads connection to read with. | |
| **ad_account_id** | **string**| The ad account whose pixel is audited. Must be selected on the connection. | [optional] |
| **pixel_id** | **string**| One of the ad account&#39;s pixels (&#x60;datasets[].id&#x60;). | [optional] |

### Return type

[**\Zernio\Model\MetaDatasetAudit**](../Model/MetaDatasetAudit.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
