# Zernio\ConversionAuditApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**auditConversionTracking()**](ConversionAuditApi.md#auditConversionTracking) | **GET** /v1/conversion-audit | Audit a site&#39;s ad conversion tracking |
| [**getLatestConversionAudit()**](ConversionAuditApi.md#getLatestConversionAudit) | **GET** /v1/conversion-audit/latest | Get a host&#39;s latest stored conversion audit |


## `auditConversionTracking()`

```php
auditConversionTracking($url): \Zernio\Model\ConversionAuditAnswer
```

Audit a site's ad conversion tracking

Scan any public URL for ad-platform conversion tracking, score how much conversion signal it leaks before the ad platforms see it, and get a fix prompt to hand to a coding agent.  The API key is optional. Without one, a caller's IP address gets 20 scans a minute. The Zernio MCP server always needs a key, because its sign-in covers the whole connection.  The scan fetches the page (SSRF-guarded) and its Google Tag Manager containers, and can render it in a headless browser. It finds every ad platform's browser pixel, checks for visible server-side (Conversions API) tracking, and estimates the signal lost to iOS/ATT, ad-blockers and short cookie windows.  The scan reads the page only and changes nothing on the site. Like the free page, it publishes the result as the host's public report.  Reading the result:  - `report.visibility: \"limited\"` means some pixels load through a tag manager or a store platform, so only part of the setup is visible from outside. It does not mean the tracking failed or is missing. - `status: \"warn\"` (browser-only) is the leak: the platform is tracked in the browser but not server-side. - `status: \"good\"` (server-side) means conversions reach the platform server-side, which recovers most of that signal. - `fixPrompt` is the same fix prompt the Conversion Leak Report page shows: this scan's findings, then the steps to send conversions server-side with `POST /v1/events` and to verify them. - `publicReport` links the host's public page on is-bleeding.com. A homepage scan that could read the site's pixels becomes that page's snapshot, the same as a scan on is-bleeding.com. Any other scan links the stored snapshot, taken at `scannedAt`, or returns null when the host has none.  Without a key, each IP address also shares one hourly ceiling with every other keyless caller. With a key, a user gets 60 scans a minute.

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
