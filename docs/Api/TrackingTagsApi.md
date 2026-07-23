# Zernio\TrackingTagsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addTrackingTagSharedAccount()**](TrackingTagsApi.md#addTrackingTagSharedAccount) | **POST** /v1/accounts/{accountId}/tracking-tags/{tagId}/shared-accounts | Share with an ad account |
| [**createTrackingTag()**](TrackingTagsApi.md#createTrackingTag) | **POST** /v1/accounts/{accountId}/tracking-tags | Create a tracking tag |
| [**getAdTrackingTags()**](TrackingTagsApi.md#getAdTrackingTags) | **GET** /v1/ads/{adId}/tracking-tags | Get ad tracking tags |
| [**getTrackingTag()**](TrackingTagsApi.md#getTrackingTag) | **GET** /v1/accounts/{accountId}/tracking-tags/{tagId} | Get a tracking tag |
| [**getTrackingTagStats()**](TrackingTagsApi.md#getTrackingTagStats) | **GET** /v1/accounts/{accountId}/tracking-tags/{tagId}/stats | Get aggregated event stats |
| [**listTrackingTagSharedAccounts()**](TrackingTagsApi.md#listTrackingTagSharedAccounts) | **GET** /v1/accounts/{accountId}/tracking-tags/{tagId}/shared-accounts | List accounts it is shared with |
| [**listTrackingTags()**](TrackingTagsApi.md#listTrackingTags) | **GET** /v1/accounts/{accountId}/tracking-tags | List tracking tags |
| [**removeTrackingTagSharedAccount()**](TrackingTagsApi.md#removeTrackingTagSharedAccount) | **DELETE** /v1/accounts/{accountId}/tracking-tags/{tagId}/shared-accounts | Stop sharing with an account |
| [**updateAdTrackingTags()**](TrackingTagsApi.md#updateAdTrackingTags) | **PATCH** /v1/ads/{adId}/tracking-tags | Set ad tracking tags |
| [**updateTrackingTag()**](TrackingTagsApi.md#updateTrackingTag) | **PATCH** /v1/accounts/{accountId}/tracking-tags/{tagId} | Update a tracking tag |


## `addTrackingTagSharedAccount()`

```php
addTrackingTagSharedAccount($account_id, $tag_id, $add_tracking_tag_shared_account_request): \Zernio\Model\AddTrackingTagSharedAccount201Response
```

Share with an ad account

Shares the pixel with another ad account so campaigns/audiences in that account can use it. Requires that you administer both the pixel's owning Business Manager and the target ad account; a pixel on a personal (non-BM) ad account can't be shared (Meta will reject the call). Meta only (platform `metaads`); other platforms return 405.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$tag_id = 'tag_id_example'; // string | Pixel id.
$add_tracking_tag_shared_account_request = new \Zernio\Model\AddTrackingTagSharedAccountRequest(); // \Zernio\Model\AddTrackingTagSharedAccountRequest

try {
    $result = $apiInstance->addTrackingTagSharedAccount($account_id, $tag_id, $add_tracking_tag_shared_account_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->addTrackingTagSharedAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tag_id** | **string**| Pixel id. | |
| **add_tracking_tag_shared_account_request** | [**\Zernio\Model\AddTrackingTagSharedAccountRequest**](../Model/AddTrackingTagSharedAccountRequest.md)|  | |

### Return type

[**\Zernio\Model\AddTrackingTagSharedAccount201Response**](../Model/AddTrackingTagSharedAccount201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTrackingTag()`

```php
createTrackingTag($account_id, $create_tracking_tag_request): \Zernio\Model\CreateTrackingTag201Response
```

Create a tracking tag

Creates a Meta Pixel on the given ad account (`POST /act_{id}/adspixels` — `name` is the only input). Returns the created tag including its install `code`. The pixel is owned by the Business Manager that owns the ad account; a pixel created on a personal (non-BM) ad account ends up with `ownerBusinessId: null` and can't be shared with other ad accounts.  Creating a pixel does NOT install it — install the returned `code` snippet on the site, or send events server-side via `POST /v1/ads/conversions`. The check `installed` is derived from `lastFiredTime`.  NOT idempotent: each call creates a new pixel. Do not retry blindly on timeout. Meta only (platform `metaads`); other platforms return 405.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Meta ads SocialAccount id (platform `metaads`).
$create_tracking_tag_request = new \Zernio\Model\CreateTrackingTagRequest(); // \Zernio\Model\CreateTrackingTagRequest

try {
    $result = $apiInstance->createTrackingTag($account_id, $create_tracking_tag_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->createTrackingTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Meta ads SocialAccount id (platform &#x60;metaads&#x60;). | |
| **create_tracking_tag_request** | [**\Zernio\Model\CreateTrackingTagRequest**](../Model/CreateTrackingTagRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateTrackingTag201Response**](../Model/CreateTrackingTag201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdTrackingTags()`

```php
getAdTrackingTags($ad_id): \Zernio\Model\GetAdTrackingTags200Response
```

Get ad tracking tags

Unified read of the platform's native click-URL tracking params. - Meta (facebook/instagram): the creative's `url_tags` (and template_url_spec). - Google (googleads): the campaign's `trackingUrlTemplate` + `finalUrlSuffix`.   Subject to the Google Ads API access-tier daily quota; bulk audits need Standard access. - LinkedIn (linkedinads): the campaign's Dynamic UTM `dynamicValueParameters` + `customValueParameters`. Returns 405 for platforms without a click-URL tracking surface (TikTok, X, Pinterest).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_id = 'ad_id_example'; // string | Ad id (hex _id, platformAdId, or effective story/media id).

try {
    $result = $apiInstance->getAdTrackingTags($ad_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->getAdTrackingTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**| Ad id (hex _id, platformAdId, or effective story/media id). | |

### Return type

[**\Zernio\Model\GetAdTrackingTags200Response**](../Model/GetAdTrackingTags200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTrackingTag()`

```php
getTrackingTag($account_id, $tag_id): \Zernio\Model\CreateTrackingTag201Response
```

Get a tracking tag

Returns the full tag record including the base-code `code` snippet, `lastFiredTime`, `ownerBusinessId`, `isUnavailable`, etc. Meta only (platform `metaads`); other platforms return 405.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$tag_id = 'tag_id_example'; // string | Pixel id.

try {
    $result = $apiInstance->getTrackingTag($account_id, $tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->getTrackingTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tag_id** | **string**| Pixel id. | |

### Return type

[**\Zernio\Model\CreateTrackingTag201Response**](../Model/CreateTrackingTag201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTrackingTagStats()`

```php
getTrackingTagStats($account_id, $tag_id, $aggregation, $start_time, $end_time): \Zernio\Model\GetTrackingTagStats200Response
```

Get aggregated event stats

Returns aggregated event counts for the pixel (`GET /{pixel_id}/stats`). Rows are passed through from Meta as-is — their shape depends on the `aggregation` requested. Meta only (platform `metaads`); other platforms return 405.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$tag_id = 'tag_id_example'; // string | Pixel id.
$aggregation = 'event'; // string | Aggregation dimension. Defaults to `event`.
$start_time = 56; // int | Unix seconds lower bound.
$end_time = 56; // int | Unix seconds upper bound.

try {
    $result = $apiInstance->getTrackingTagStats($account_id, $tag_id, $aggregation, $start_time, $end_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->getTrackingTagStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tag_id** | **string**| Pixel id. | |
| **aggregation** | **string**| Aggregation dimension. Defaults to &#x60;event&#x60;. | [optional] [default to &#39;event&#39;] |
| **start_time** | **int**| Unix seconds lower bound. | [optional] |
| **end_time** | **int**| Unix seconds upper bound. | [optional] |

### Return type

[**\Zernio\Model\GetTrackingTagStats200Response**](../Model/GetTrackingTagStats200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTrackingTagSharedAccounts()`

```php
listTrackingTagSharedAccounts($account_id, $tag_id): \Zernio\Model\ListTrackingTagSharedAccounts200Response
```

List accounts it is shared with

Meta only (platform `metaads`); other platforms return 405.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$tag_id = 'tag_id_example'; // string | Pixel id.

try {
    $result = $apiInstance->listTrackingTagSharedAccounts($account_id, $tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->listTrackingTagSharedAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tag_id** | **string**| Pixel id. | |

### Return type

[**\Zernio\Model\ListTrackingTagSharedAccounts200Response**](../Model/ListTrackingTagSharedAccounts200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTrackingTags()`

```php
listTrackingTags($account_id, $ad_account_id): \Zernio\Model\ListTrackingTags200Response
```

List tracking tags

Returns the tracking tags (Meta Pixels) the connected ads account can see. Pass `?adAccountId=act_...` to scope the list to a single ad account; omit it to list every pixel reachable by the token (the name is then suffixed with the ad account it was discovered on, for disambiguation). The list view omits `code` — call `getTrackingTag` for the install snippet and full detail.  Meta only today (platform `metaads`); other platforms return 405. The `accountId` must be the Meta *ads* SocialAccount created by the Ads add-on connect flow, not a Facebook/Instagram posting account. Get your `act_...` ids from `GET /v1/ads/accounts`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Meta ads SocialAccount id (platform `metaads`).
$ad_account_id = 'ad_account_id_example'; // string | Optional. Scope to one ad account, e.g. `act_123456789`.

try {
    $result = $apiInstance->listTrackingTags($account_id, $ad_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->listTrackingTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Meta ads SocialAccount id (platform &#x60;metaads&#x60;). | |
| **ad_account_id** | **string**| Optional. Scope to one ad account, e.g. &#x60;act_123456789&#x60;. | [optional] |

### Return type

[**\Zernio\Model\ListTrackingTags200Response**](../Model/ListTrackingTags200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeTrackingTagSharedAccount()`

```php
removeTrackingTagSharedAccount($account_id, $tag_id, $ad_account_id)
```

Stop sharing with an account

`adAccountId` may be passed as a query parameter (recommended) or as a JSON body field for clients that can send DELETE bodies. Meta only (platform `metaads`); other platforms return 405.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$tag_id = 'tag_id_example'; // string | Pixel id.
$ad_account_id = 'ad_account_id_example'; // string | Ad account to unshare, e.g. `act_123456789`. May also be sent in the JSON body.

try {
    $apiInstance->removeTrackingTagSharedAccount($account_id, $tag_id, $ad_account_id);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->removeTrackingTagSharedAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tag_id** | **string**| Pixel id. | |
| **ad_account_id** | **string**| Ad account to unshare, e.g. &#x60;act_123456789&#x60;. May also be sent in the JSON body. | [optional] |

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

## `updateAdTrackingTags()`

```php
updateAdTrackingTags($ad_id, $update_ad_tracking_tags_request)
```

Set ad tracking tags

Unified update. Send only the fields for the ad's platform: - Meta: `urlTags` (array of {key,value}). Meta creatives are immutable, so this rebuilds the   creative and repoints the ad. By DEFAULT we PRESERVE the existing creative verbatim   (re-post its object_story_spec + the new url_tags, reusing the image), so you send `urlTags`   ALONE — no need to read back headline/body/CTA. `creative` (headline, body, callToAction,   linkUrl, imageUrl) is OPTIONAL and only needed to rebuild explicitly, or for SHARE / page-post   / dark / asset_feed creatives whose object_story_spec Meta strips (those return 422 asking for   `creative`). - Google: `trackingUrlTemplate` and/or `finalUrlSuffix` (full template strings; account quota applies). - LinkedIn: `dynamicValueParameters` and/or `customValueParameters` (campaign-level Dynamic UTM).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_id = 'ad_id_example'; // string
$update_ad_tracking_tags_request = new \Zernio\Model\UpdateAdTrackingTagsRequest(); // \Zernio\Model\UpdateAdTrackingTagsRequest

try {
    $apiInstance->updateAdTrackingTags($ad_id, $update_ad_tracking_tags_request);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->updateAdTrackingTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**|  | |
| **update_ad_tracking_tags_request** | [**\Zernio\Model\UpdateAdTrackingTagsRequest**](../Model/UpdateAdTrackingTagsRequest.md)|  | |

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

## `updateTrackingTag()`

```php
updateTrackingTag($account_id, $tag_id, $update_tracking_tag_request): \Zernio\Model\CreateTrackingTag201Response
```

Update a tracking tag

Partial-update a pixel. Whitelisted fields: `name` (rename), `enableAutomaticMatching`, `automaticMatchingFields`, `firstPartyCookieStatus`, `dataUseSetting`. At least one is required. Returns the re-fetched canonical tag. Meta only (platform `metaads`); other platforms return 405.  There is no DELETE — Meta has no API to delete a pixel. To stop using one, unshare it from your ad accounts (`DELETE .../tracking-tags/{tagId}/shared-accounts`) or disable it in Events Manager.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$tag_id = 'tag_id_example'; // string | Pixel id.
$update_tracking_tag_request = new \Zernio\Model\UpdateTrackingTagRequest(); // \Zernio\Model\UpdateTrackingTagRequest

try {
    $result = $apiInstance->updateTrackingTag($account_id, $tag_id, $update_tracking_tag_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->updateTrackingTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tag_id** | **string**| Pixel id. | |
| **update_tracking_tag_request** | [**\Zernio\Model\UpdateTrackingTagRequest**](../Model/UpdateTrackingTagRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateTrackingTag201Response**](../Model/CreateTrackingTag201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
