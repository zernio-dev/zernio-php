# Zernio\CallsApi

Unified call history across every number you own: WhatsApp Business Calling and regular phone (PSTN) calls in one list, newest first, without fanning out one request per number. Each row carries &#x60;channel&#x60; and &#x60;accountId&#x60; so you can fetch details and recordings from the matching channel-specific endpoint. Private beta: returns 403 unless your account is enrolled.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCall()**](CallsApi.md#getCall) | **GET** /v1/calls/{id} | Get a call (any channel) |
| [**getCallRecording()**](CallsApi.md#getCallRecording) | **GET** /v1/calls/{id}/recording | Get a call recording (any channel) |
| [**listCalls()**](CallsApi.md#listCalls) | **GET** /v1/calls | List all calls (unified history) |


## `getCall()`

```php
getCall($id): \Zernio\Model\GetCall200Response
```

Get a call (any channel)

Channel-agnostic call detail: works for both WhatsApp and regular phone (PSTN) calls, so any row from `GET /v1/calls` can be opened without branching on `channel`. Returns the full call including transcript segments, with `contactId`/`contactName` set when the counterparty matches a CRM contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getCall($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->getCall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Zernio\Model\GetCall200Response**](../Model/GetCall200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCallRecording()`

```php
getCallRecording($id, $as): \Zernio\Model\GetWhatsAppCallRecording200Response
```

Get a call recording (any channel)

Channel-agnostic recording fetch: resolves a fresh, playable MP3 URL for any call regardless of channel (provider-signed URLs expire ~10 minutes after signing, so this re-signs on demand). Default responds `302 Found` redirecting to the fresh URL; pass `as=json` to receive `{ url }` instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$as = 'as_example'; // string | `json` returns `{ url }` instead of a 302 redirect.

try {
    $result = $apiInstance->getCallRecording($id, $as);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->getCallRecording: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **as** | **string**| &#x60;json&#x60; returns &#x60;{ url }&#x60; instead of a 302 redirect. | [optional] |

### Return type

[**\Zernio\Model\GetWhatsAppCallRecording200Response**](../Model/GetWhatsAppCallRecording200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCalls()`

```php
listCalls($channel, $status, $direction, $number, $search, $before, $limit): \Zernio\Model\ListCalls200Response
```

List all calls (unified history)

Unified call history across ALL of your numbers: both channels (WhatsApp Business Calling + regular phone/PSTN), inbound and outbound, newest first. Unlike `GET /v1/voice/calls` (PSTN-only) and `GET /v1/whatsapp/calls` (one account at a time), this endpoint needs no `accountId` and never requires fanning out one request per number.  Any row can be opened channel-agnostically via `GET /v1/calls/{id}` and `GET /v1/calls/{id}/recording`; no branching on `channel` needed. When the counterparty number matches a CRM contact, `contactId` and `contactName` are set.  Cursor pagination: pass the returned `nextCursor` as `before` to fetch the next page. `nextCursor` is null on the last page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel = 'channel_example'; // string
$status = 'status_example'; // string
$direction = 'direction_example'; // string
$number = 'number_example'; // string | Exact filter: calls involving this number (typically one of YOUR numbers, to scope history to a single line). E.164, leading + optional.
$search = 'search_example'; // string | Free-text match on the from/to numbers. Non-digits are stripped, so partial queries like `302` or `+1 302` work.
$before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Return calls with startedAt strictly before this instant (use the previous page's nextCursor).
$limit = 50; // int

try {
    $result = $apiInstance->listCalls($channel, $status, $direction, $number, $search, $before, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsApi->listCalls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel** | **string**|  | [optional] |
| **status** | **string**|  | [optional] |
| **direction** | **string**|  | [optional] |
| **number** | **string**| Exact filter: calls involving this number (typically one of YOUR numbers, to scope history to a single line). E.164, leading + optional. | [optional] |
| **search** | **string**| Free-text match on the from/to numbers. Non-digits are stripped, so partial queries like &#x60;302&#x60; or &#x60;+1 302&#x60; work. | [optional] |
| **before** | **\DateTime**| Return calls with startedAt strictly before this instant (use the previous page&#39;s nextCursor). | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |

### Return type

[**\Zernio\Model\ListCalls200Response**](../Model/ListCalls200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
