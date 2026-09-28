# Zernio\TrackingTagsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addTrackingTagSharedAccount()**](TrackingTagsApi.md#addTrackingTagSharedAccount) | **POST** /v1/accounts/{accountId}/tracking-tags/{tagId}/shared-accounts | Share with an ad account |
| [**createTrackingTag()**](TrackingTagsApi.md#createTrackingTag) | **POST** /v1/accounts/{accountId}/tracking-tags | Create a tracking tag |
| [**getAdTrackingTags()**](TrackingTagsApi.md#getAdTrackingTags) | **GET** /v1/ads/{adId}/tracking-tags | Get ad tracking tags |
| [**getTrackingTag()**](TrackingTagsApi.md#getTrackingTag) | **GET** /v1/accounts/{accountId}/tracking-tags/{tagId} | Get a tracking tag |
| [**getTrackingTagStats()**](TrackingTagsApi.md#getTrackingTagStats) | **GET** /v1/accounts/{accountId}/tracking-tags/{tagId}/stats | Get aggregated event stats |
| [**getTrackingTagStoreInstall()**](TrackingTagsApi.md#getTrackingTagStoreInstall) | **GET** /v1/accounts/{accountId}/tracking-tags/{tagId}/install | Get store install status |
| [**installTrackingTagOnStore()**](TrackingTagsApi.md#installTrackingTagOnStore) | **POST** /v1/accounts/{accountId}/tracking-tags/{tagId}/install | Install on a Shopify store or WordPress site |
| [**listTrackingTagSharedAccounts()**](TrackingTagsApi.md#listTrackingTagSharedAccounts) | **GET** /v1/accounts/{accountId}/tracking-tags/{tagId}/shared-accounts | List accounts it is shared with |
| [**listTrackingTags()**](TrackingTagsApi.md#listTrackingTags) | **GET** /v1/accounts/{accountId}/tracking-tags | List tracking tags |
| [**removeTrackingTagFromStore()**](TrackingTagsApi.md#removeTrackingTagFromStore) | **DELETE** /v1/accounts/{accountId}/tracking-tags/{tagId}/install | Remove from a Shopify store or WordPress site |
| [**removeTrackingTagSharedAccount()**](TrackingTagsApi.md#removeTrackingTagSharedAccount) | **DELETE** /v1/accounts/{accountId}/tracking-tags/{tagId}/shared-accounts | Stop sharing with an account |
| [**updateAdTrackingTags()**](TrackingTagsApi.md#updateAdTrackingTags) | **PATCH** /v1/ads/{adId}/tracking-tags | Set ad tracking tags |
| [**updateTrackingTag()**](TrackingTagsApi.md#updateTrackingTag) | **PATCH** /v1/accounts/{accountId}/tracking-tags/{tagId} | Update a tracking tag |


## `addTrackingTagSharedAccount()`

```php
addTrackingTagSharedAccount($account_id, $tag_id, $add_tracking_tag_shared_account_request): \Zernio\Model\AddTrackingTagSharedAccount201Response
```

Share with an ad account

Shares the pixel with another ad account so campaigns/audiences in that account can use it. Requires that you administer both the pixel's owning Business Manager and the target ad account; a pixel on a personal (non-BM) ad account can't be shared (Meta will reject the call). Meta only (platform `metaads`); other platforms return 501.

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

Meta: creates a Meta Pixel on the given ad account (`POST /act_{id}/adspixels`, where `name` is the only input). Returns the created tag including its install `code`. The pixel is owned by the Business Manager that owns the ad account; a pixel created on a personal (non-BM) ad account ends up with `ownerBusinessId: null` and can't be shared with other ad accounts.  Creating a Meta pixel does NOT install it. Install the returned `code` snippet on the site, or send events server-side via `POST /v1/ads/conversions`. The check `installed` is derived from `lastFiredTime`.  OpenAI Ads: creates an OpenAI pixel AND provisions a Conversions API key for it in the same call (`adAccountId` is required by this endpoint but ignored: one API key maps to exactly one ad account, so there's nothing to select). Returns 422 (`FEATURE_NOT_AVAILABLE`) if the ad account isn't enabled for pixel management; contact your OpenAI partner representative to enable it. There is no delete API for OpenAI pixels. If the pixel is created but the Conversions API key provisioning then fails, the pixel is left live on OpenAI (it cannot be cleaned up) and the error message names the surviving pixel id and warns against retrying, since a retry would create a second, orphaned pixel.  NOT idempotent on either platform: each call creates a new pixel (and, for OpenAI, a new Conversions API key plus, with `defaultEventType`, a new conversion event setting). Do not retry blindly on timeout. Meta (platform `metaads`) and OpenAI Ads (platform `openaiads`); other platforms return 501.

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
$account_id = 'account_id_example'; // string | Ads SocialAccount id (platform `metaads` or `openaiads`).
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
| **account_id** | **string**| Ads SocialAccount id (platform &#x60;metaads&#x60; or &#x60;openaiads&#x60;). | |
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

Unified read of the platform's native click-URL tracking params. - Meta (facebook/instagram): the creative's `url_tags` (and template_url_spec). - Google (googleads): the campaign's `trackingUrlTemplate` + `finalUrlSuffix`. - LinkedIn (linkedinads): the campaign's Dynamic UTM `dynamicValueParameters` + `customValueParameters`. Returns 405 for platforms without a click-URL tracking surface (TikTok, X, Pinterest).  **Not pixels.** Despite the shared path segment, this endpoint has nothing to do with measurement tags. For an ad account's pixels use `GET /v1/accounts/{accountId}/tracking-tags?adAccountId=act_...` (Meta Pixels, with `kind` and `ownerAdAccountId`) or `GET /v1/accounts/{accountId}/conversion-destinations`.

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
getTrackingTag($account_id, $tag_id, $ad_account_id): \Zernio\Model\GetTrackingTag200Response
```

Get a tracking tag

Returns the full tag record including the base-code `code` snippet, `lastFiredTime`, `ownerBusinessId`, `isUnavailable`, etc. Meta only (platform `metaads`); other platforms return 501. OpenAI Ads has no get-by-id endpoint, so it answers 501 here too. Use `GET /v1/accounts/{accountId}/tracking-tags` (list) instead.

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
$tag_id = 'tag_id_example'; // string | Tag id (`TrackingTag.id`).
$ad_account_id = 'ad_account_id_example'; // string | Scopes the lookup on platforms whose tag ids live inside an ad account. Ignored elsewhere.

try {
    $result = $apiInstance->getTrackingTag($account_id, $tag_id, $ad_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->getTrackingTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tag_id** | **string**| Tag id (&#x60;TrackingTag.id&#x60;). | |
| **ad_account_id** | **string**| Scopes the lookup on platforms whose tag ids live inside an ad account. Ignored elsewhere. | [optional] |

### Return type

[**\Zernio\Model\GetTrackingTag200Response**](../Model/GetTrackingTag200Response.md)

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
getTrackingTagStats($account_id, $tag_id, $ad_account_id, $aggregation, $start_time, $end_time): \Zernio\Model\GetTrackingTagStats200Response
```

Get aggregated event stats

Returns event counts / health for the tag, where the platform exposes them. Meta: aggregated counts (`GET /{pixel_id}/stats`), rows passed through as-is; their shape depends on the `aggregation` requested. Platforms without a stats API answer 501.

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
$tag_id = 'tag_id_example'; // string | Tag id (`TrackingTag.id`).
$ad_account_id = 'ad_account_id_example'; // string | Scopes the lookup on platforms whose tag ids live inside an ad account. Ignored elsewhere.
$aggregation = 'event'; // string | Meta only (400 on other platforms): aggregation dimension. Defaults to `event`.
$start_time = 56; // int | Unix seconds lower bound.
$end_time = 56; // int | Unix seconds upper bound.

try {
    $result = $apiInstance->getTrackingTagStats($account_id, $tag_id, $ad_account_id, $aggregation, $start_time, $end_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->getTrackingTagStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tag_id** | **string**| Tag id (&#x60;TrackingTag.id&#x60;). | |
| **ad_account_id** | **string**| Scopes the lookup on platforms whose tag ids live inside an ad account. Ignored elsewhere. | [optional] |
| **aggregation** | **string**| Meta only (400 on other platforms): aggregation dimension. Defaults to &#x60;event&#x60;. | [optional] [default to &#39;event&#39;] |
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

## `getTrackingTagStoreInstall()`

```php
getTrackingTagStoreInstall($account_id, $tag_id, $store_account_id, $ad_account_id): \Zernio\Model\GetTrackingTagStoreInstall200Response
```

Get store install status

Whether this tag is the one the Shopify store fires for its platform. `installedTagId` names the tag of that platform the store currently fires, which can be a different tag, and `tags` lists every Zernio tag on the store (all platforms).  WordPress: whether the Zernio widget for this pixel is live (in an active widget area, script intact), plus a read-only `preflight` with the theme's widget areas and, when an install would be blocked, the `reason` POST would return. The preflight reads capabilities only, so `ready: true` is not a guarantee: `DISALLOW_UNFILTERED_HTML` or a multisite admin who is not a Super Admin still strips the script, which POST detects. `tags` lists every Zernio widget on the site (all platforms, with `active`).

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
$tag_id = 'tag_id_example'; // string | Tag id (`TrackingTag.id`).
$store_account_id = 'store_account_id_example'; // string | The connected Shopify or WordPress account id.
$ad_account_id = 'ad_account_id_example'; // string | Scopes the tag lookup on platforms whose tag ids live inside an ad account.

try {
    $result = $apiInstance->getTrackingTagStoreInstall($account_id, $tag_id, $store_account_id, $ad_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->getTrackingTagStoreInstall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tag_id** | **string**| Tag id (&#x60;TrackingTag.id&#x60;). | |
| **store_account_id** | **string**| The connected Shopify or WordPress account id. | |
| **ad_account_id** | **string**| Scopes the tag lookup on platforms whose tag ids live inside an ad account. | [optional] |

### Return type

[**\Zernio\Model\GetTrackingTagStoreInstall200Response**](../Model/GetTrackingTagStoreInstall200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `installTrackingTagOnStore()`

```php
installTrackingTagOnStore($account_id, $tag_id, $install_tracking_tag_on_store_request): \Zernio\Model\InstallTrackingTagOnStore200Response
```

Install on a Shopify store or WordPress site

Puts the Meta pixel on a connected Shopify store's storefront and checkout through Zernio's Shopify web pixel (a Shopify app pixel, no theme edits). The store then sends PageView, ViewContent, AddToCart, Search, InitiateCheckout, AddPaymentInfo and Purchase (with value, currency, content_ids and contents) to the pixel, each with an event id. Purchase uses `shopify_order_{orderId}` as its event id, so a Conversions API Purchase you send for the same order with that `eventId` is deduplicated by Meta.  Idempotent: a store runs one Zernio web pixel holding one tag per platform, so calling it again updates the install, installing a different tag of the same platform replaces the previous one (reported in `replacedTagId`), and other platforms' tags are kept. Events respect the store's customer privacy settings (marketing consent).  `accountId` is the Meta ads account that owns the pixel (`tagId`); `storeAccountId` is the Shopify account. Stores connected before pixel support must re-approve the Zernio app: the call then answers 409 `reconnect_required` with `details.authUrl` to send the merchant to (the Shopify account id stays the same). Meta only (platform `metaads`); other platforms return 501.  **WordPress** (`storeAccountId` is a connected WordPress.com or self-hosted site): Zernio adds a Custom HTML widget with the Meta pixel base code (fbevents.js, `init`, `PageView`) to a widget area of the active theme (a footer area when there is one, else the first active area; pass `sidebarId` to choose), then reads the widget back to confirm WordPress kept the `<script>` tag. The widget carries a Zernio marker, so the call is idempotent per pixel: repeating it updates or moves the same widget, and pixel code the site owner pasted by hand is never touched. Several pixels can run side by side (one widget each). When the site cannot run the pixel, nothing is left behind and the call answers 422 `tracking_tag_install_blocked` with `details.reason`: - `insufficient_permissions`: the connected user lacks `edit_theme_options` (needs Administrator). - `scripts_stripped`: WordPress removed the script (the user lacks `unfiltered_html`, e.g. a multisite admin who is not a Super Admin, or `DISALLOW_UNFILTERED_HTML` is set). - `wordpress_com_plan`: a WordPress.com plan that strips scripts (plans without plugins). - `no_widget_areas`: the theme has no widget areas (block themes such as Twenty Twenty-Five). - `widgets_api_unavailable`: no widgets REST API (WordPress older than 5.8, or disabled). The `error` message names the manual alternative (Meta's official WordPress plugin). With `verifyHomepage` (default true) the homepage is fetched afterwards and `homepageCheck` says whether the pixel is visible; `not_found` can be a stale page cache, the widget read-back is authoritative.

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
$tag_id = 'tag_id_example'; // string | Tag id (`TrackingTag.id`).
$install_tracking_tag_on_store_request = new \Zernio\Model\InstallTrackingTagOnStoreRequest(); // \Zernio\Model\InstallTrackingTagOnStoreRequest

try {
    $result = $apiInstance->installTrackingTagOnStore($account_id, $tag_id, $install_tracking_tag_on_store_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->installTrackingTagOnStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tag_id** | **string**| Tag id (&#x60;TrackingTag.id&#x60;). | |
| **install_tracking_tag_on_store_request** | [**\Zernio\Model\InstallTrackingTagOnStoreRequest**](../Model/InstallTrackingTagOnStoreRequest.md)|  | |

### Return type

[**\Zernio\Model\InstallTrackingTagOnStore200Response**](../Model/InstallTrackingTagOnStore200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTrackingTagSharedAccounts()`

```php
listTrackingTagSharedAccounts($account_id, $tag_id): \Zernio\Model\ListTrackingTagSharedAccounts200Response
```

List accounts it is shared with

Meta only (platform `metaads`); other platforms return 501.

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

Returns the tracking tags (Meta Pixels, or OpenAI Ads pixels) the connected ads account can see. Pass `?adAccountId=act_...` (Meta only) to scope the list to a single ad account; omit it to list every pixel reachable by the token (the name is then suffixed with the ad account it was discovered on, for disambiguation). The list view omits `code`. Call `getTrackingTag` for the install snippet and full detail (Meta only; OpenAI Ads has no get-by-id endpoint).  Meta (platform `metaads`) and OpenAI Ads (platform `openaiads`); other platforms return 501. The `accountId` must be the ads SocialAccount created by the Ads add-on connect flow (Meta) or the OpenAI Ads connect flow, not a Facebook/Instagram posting account. Get your Meta `act_...` ids from `GET /v1/ads/accounts`; `adAccountId` is ignored for OpenAI Ads (one API key maps to exactly one ad account).

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
$account_id = 'account_id_example'; // string | Ads SocialAccount id (platform `metaads` or `openaiads`).
$ad_account_id = 'ad_account_id_example'; // string | Optional, Meta only. Scope to one ad account, e.g. `act_123456789`. Ignored for OpenAI Ads.

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
| **account_id** | **string**| Ads SocialAccount id (platform &#x60;metaads&#x60; or &#x60;openaiads&#x60;). | |
| **ad_account_id** | **string**| Optional, Meta only. Scope to one ad account, e.g. &#x60;act_123456789&#x60;. Ignored for OpenAI Ads. | [optional] |

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

## `removeTrackingTagFromStore()`

```php
removeTrackingTagFromStore($account_id, $tag_id, $store_account_id, $ad_account_id): \Zernio\Model\RemoveTrackingTagFromStore200Response
```

Remove from a Shopify store or WordPress site

Removes the tag from the store. Idempotent: nothing installed returns 200 with `installed: false`. If the store fires a different tag of the same platform, nothing is removed and the call answers 409 `invalid_resource_state`. Shopify: other platforms' tags stay; the web pixel itself is deleted once no tag remains.  WordPress: deletes every widget Zernio created for this pixel and reports how many in `removed` (0 when nothing was installed). Pixel code added by hand is left alone.

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
$tag_id = 'tag_id_example'; // string | Tag id (`TrackingTag.id`).
$store_account_id = 'store_account_id_example'; // string | The connected Shopify or WordPress account id.
$ad_account_id = 'ad_account_id_example'; // string | Scopes the tag lookup on platforms whose tag ids live inside an ad account.

try {
    $result = $apiInstance->removeTrackingTagFromStore($account_id, $tag_id, $store_account_id, $ad_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingTagsApi->removeTrackingTagFromStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tag_id** | **string**| Tag id (&#x60;TrackingTag.id&#x60;). | |
| **store_account_id** | **string**| The connected Shopify or WordPress account id. | |
| **ad_account_id** | **string**| Scopes the tag lookup on platforms whose tag ids live inside an ad account. | [optional] |

### Return type

[**\Zernio\Model\RemoveTrackingTagFromStore200Response**](../Model/RemoveTrackingTagFromStore200Response.md)

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

`adAccountId` may be passed as a query parameter (recommended) or as a JSON body field for clients that can send DELETE bodies. Meta only (platform `metaads`); other platforms return 501.

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
updateAdTrackingTags($ad_id, $update_ad_tracking_tags_request): \Zernio\Model\UpdateAdTrackingTags200Response
```

Set ad tracking tags

Unified update. Send only the fields for the ad's platform: - Meta: `urlTags` (array of {key,value}). Meta creatives are immutable, so this rebuilds the   creative and repoints the ad. By DEFAULT we PRESERVE the existing creative verbatim   (re-post its object_story_spec + the new url_tags, reusing the image), so you send `urlTags`   ALONE, with no need to read back headline/body/CTA. `creative` (headline, body, callToAction,   linkUrl, imageUrl) is OPTIONAL and only needed to rebuild explicitly, or for SHARE / page-post   / dark / asset_feed creatives whose object_story_spec Meta strips (those return 422 asking for   `creative`). - Google: `trackingUrlTemplate` and/or `finalUrlSuffix` (full template strings; account quota applies). - LinkedIn: `dynamicValueParameters` and/or `customValueParameters` (campaign-level Dynamic UTM).

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
    $result = $apiInstance->updateAdTrackingTags($ad_id, $update_ad_tracking_tags_request);
    print_r($result);
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

[**\Zernio\Model\UpdateAdTrackingTags200Response**](../Model/UpdateAdTrackingTags200Response.md)

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
updateTrackingTag($account_id, $tag_id, $update_tracking_tag_request): \Zernio\Model\GetTrackingTag200Response
```

Update a tracking tag

Partial-update a pixel. Whitelisted fields: `name` (rename), `enableAutomaticMatching`, `automaticMatchingFields`, `firstPartyCookieStatus`, `dataUseSetting`. At least one is required. Returns the re-fetched canonical tag. Meta only (platform `metaads`); other platforms return 501.  There is no DELETE: Meta has no API to delete a pixel. To stop using one, unshare it from your ad accounts (`DELETE .../tracking-tags/{tagId}/shared-accounts`) or disable it in Events Manager.

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

[**\Zernio\Model\GetTrackingTag200Response**](../Model/GetTrackingTag200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
