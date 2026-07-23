# Zernio\MessagingAdsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCallAd()**](MessagingAdsApi.md#createCallAd) | **POST** /v1/ads/call | Create Click-to-Call ad |
| [**createCtwaAd()**](MessagingAdsApi.md#createCtwaAd) | **POST** /v1/ads/ctwa | Create Click-to-WhatsApp ad (deprecated) |
| [**createMessagingAd()**](MessagingAdsApi.md#createMessagingAd) | **POST** /v1/ads/messaging | Create click-to-message ad (WhatsApp / Messenger / Instagram Direct) |


## `createCallAd()`

```php
createCallAd($create_call_ad_request)
```

Create Click-to-Call ad

Same shape and flow as POST /v1/ads/ctwa, but the CTA is CALL_NOW dialing `phoneNumber` via a tel: link. The ad set is destination_type PHONE_CALL optimizing QUALITY_CALL and the campaign objective defaults to OUTCOME_LEADS. Supports the same single-creative and multi-creative shapes as CTWA.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagingAdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_call_ad_request = new \Zernio\Model\CreateCallAdRequest(); // \Zernio\Model\CreateCallAdRequest

try {
    $apiInstance->createCallAd($create_call_ad_request);
} catch (Exception $e) {
    echo 'Exception when calling MessagingAdsApi->createCallAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_call_ad_request** | [**\Zernio\Model\CreateCallAdRequest**](../Model/CreateCallAdRequest.md)|  | |

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

## `createCtwaAd()`

```php
createCtwaAd($ctwa_ad_request_body): \Zernio\Model\CreateCtwaAd201Response
```

Create Click-to-WhatsApp ad (deprecated)

Deprecated: use POST /v1/ads/messaging with `destination: whatsapp`. This endpoint stays available for back-compat; no removal planned.  Creates one or more Click-to-WhatsApp (CTWA) ads on Meta under a single campaign and ad set. When tapped, each ad opens a WhatsApp conversation with the business attached to the supplied Facebook Page. The full hierarchy (campaign, ad set, creative(s), ad(s)) is created and activated in one call. The CTA is locked to WHATSAPP_MESSAGE and the destination is hard-coded to api.whatsapp.com/send; Meta resolves the actual WhatsApp number from the Page-to-WA pairing configured in Page settings or Business Manager.  Supports two mutually-exclusive shapes:  - **Single-creative**: supply top-level `headline`, `body`, and one of `imageUrl` / `video`. Creates 1 campaign + 1 ad set + 1 ad.  - **Multi-creative**: supply a `creatives[]` array with N entries (each carrying its own headline, body, and image/video). Creates 1 campaign + 1 ad set + N ads sharing budget and targeting so Meta A/Bs the creatives inside a single auction instead of fragmenting budget across N parallel campaigns. Recommended when launching multiple creative variants for the same campaign.  Prerequisites enforced by Meta (surfaced as platform_error on failure): the Facebook Page must be paired with a verified WhatsApp Business number, the WhatsApp Business Account must be business-verified, and the Meta access token must carry ads_management.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagingAdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ctwa_ad_request_body = new \Zernio\Model\CtwaAdRequestBody(); // \Zernio\Model\CtwaAdRequestBody

try {
    $result = $apiInstance->createCtwaAd($ctwa_ad_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingAdsApi->createCtwaAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ctwa_ad_request_body** | [**\Zernio\Model\CtwaAdRequestBody**](../Model/CtwaAdRequestBody.md)|  | |

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

## `createMessagingAd()`

```php
createMessagingAd($create_messaging_ad_request)
```

Create click-to-message ad (WhatsApp / Messenger / Instagram Direct)

Creates a click-to-message ad; `destination` selects where the tapped ad opens a conversation: WhatsApp, the Page's Messenger inbox or the linked Instagram account's Direct inbox. The ad set is created with the matching destination_type and CONVERSATIONS optimization; the campaign objective defaults to OUTCOME_ENGAGEMENT. Supports single-creative and multi-creative shapes. Supersedes POST /v1/ads/ctwa (deprecated, equivalent to `destination: whatsapp`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagingAdsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_messaging_ad_request = new \Zernio\Model\CreateMessagingAdRequest(); // \Zernio\Model\CreateMessagingAdRequest

try {
    $apiInstance->createMessagingAd($create_messaging_ad_request);
} catch (Exception $e) {
    echo 'Exception when calling MessagingAdsApi->createMessagingAd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_messaging_ad_request** | [**\Zernio\Model\CreateMessagingAdRequest**](../Model/CreateMessagingAdRequest.md)|  | |

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
