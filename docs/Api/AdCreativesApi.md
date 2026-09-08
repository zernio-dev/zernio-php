# Zernio\AdCreativesApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAdCreative()**](AdCreativesApi.md#createAdCreative) | **POST** /v1/ads/creatives | Create a standalone creative |
| [**deleteAdCreative()**](AdCreativesApi.md#deleteAdCreative) | **DELETE** /v1/ads/creatives/{creativeId} | Delete a creative |
| [**deleteAdVideo()**](AdCreativesApi.md#deleteAdVideo) | **DELETE** /v1/ads/videos/{videoId} | Delete an ad video |
| [**generateAdPreviews()**](AdCreativesApi.md#generateAdPreviews) | **POST** /v1/ads/preview | Render pre-create ad previews |
| [**getAdCreative()**](AdCreativesApi.md#getAdCreative) | **GET** /v1/ads/creatives/{creativeId} | Creative details |
| [**getAdMedia()**](AdCreativesApi.md#getAdMedia) | **GET** /v1/ads/{adId}/media | Direct video and image URLs for an ad |
| [**getAdPreviews()**](AdCreativesApi.md#getAdPreviews) | **GET** /v1/ads/{adId}/preview | Render previews of an existing ad |
| [**listAdCatalogProductSets()**](AdCreativesApi.md#listAdCatalogProductSets) | **GET** /v1/ads/catalogs/{catalogId}/product-sets | List a catalog&#39;s product sets |
| [**listAdCatalogs()**](AdCreativesApi.md#listAdCatalogs) | **GET** /v1/ads/catalogs | List Meta product catalogs |
| [**listAdCreatives()**](AdCreativesApi.md#listAdCreatives) | **GET** /v1/ads/creatives | Creative library |
| [**listAdImages()**](AdCreativesApi.md#listAdImages) | **GET** /v1/ads/images | Ad image library |
| [**listAdVideos()**](AdCreativesApi.md#listAdVideos) | **GET** /v1/ads/videos | Ad video library |
| [**updateAdCreative()**](AdCreativesApi.md#updateAdCreative) | **PUT** /v1/ads/creatives/{creativeId} | Rename a creative |
| [**uploadAdImage()**](AdCreativesApi.md#uploadAdImage) | **POST** /v1/ads/images | Upload an ad image from base64 |
| [**uploadAdVideo()**](AdCreativesApi.md#uploadAdVideo) | **POST** /v1/ads/videos | Upload an ad video |


## `createAdCreative()`

```php
createAdCreative($create_ad_creative_request): \Zernio\Model\CreateAdCreative201Response
```

Create a standalone creative

Creates a creative in the library WITHOUT an ad, reusable on the create endpoints via `existingCreativeId`. Provide exactly one of `imageUrl` (uploaded server-side), `imageHash` (from POST /v1/ads/images or the library list), or `carouselCards` (2-10 hand-built cards). The Page (and linked Instagram account, when present) is resolved from `accountId` as the story actor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCreativesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_ad_creative_request = new \Zernio\Model\CreateAdCreativeRequest(); // \Zernio\Model\CreateAdCreativeRequest

try {
    $result = $apiInstance->createAdCreative($create_ad_creative_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCreativesApi->createAdCreative: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_ad_creative_request** | [**\Zernio\Model\CreateAdCreativeRequest**](../Model/CreateAdCreativeRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateAdCreative201Response**](../Model/CreateAdCreative201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAdCreative()`

```php
deleteAdCreative($creative_id, $account_id): \Zernio\Model\DeleteAdCreative200Response
```

Delete a creative

Deletes a creative from the library. Meta only allows deleting creatives not referenced by any ad; otherwise its 400 surfaces verbatim.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCreativesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$creative_id = 'creative_id_example'; // string | Platform creative id
$account_id = 'account_id_example'; // string | Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token.

try {
    $result = $apiInstance->deleteAdCreative($creative_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCreativesApi->deleteAdCreative: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **creative_id** | **string**| Platform creative id | |
| **account_id** | **string**| Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token. | |

### Return type

[**\Zernio\Model\DeleteAdCreative200Response**](../Model/DeleteAdCreative200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAdVideo()`

```php
deleteAdVideo($video_id, $account_id, $ad_account_id): \Zernio\Model\DeleteAdVideo200Response
```

Delete an ad video

Removes a video from the ad account's video library. Meta's canonical `DELETE /{video_id}` fails with code 10 / subcode 1363055 for videos uploaded via `/act_X/advideos` even with `ads_management`; this endpoint uses the working account-scoped shape `DELETE /act_X/advideos?video_id=<id>` and returns Meta's `{success: true}` verbatim. Deleting a video that lives in a different ad account, or that Meta has already removed, returns Meta's error verbatim as a 4xx.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCreativesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_id = 'video_id_example'; // string | Meta ad video id (numeric).
$account_id = 'account_id_example'; // string | Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token.
$ad_account_id = 'ad_account_id_example'; // string | Meta ad account id (act_<n>) that owns the video.

try {
    $result = $apiInstance->deleteAdVideo($video_id, $account_id, $ad_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCreativesApi->deleteAdVideo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **video_id** | **string**| Meta ad video id (numeric). | |
| **account_id** | **string**| Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token. | |
| **ad_account_id** | **string**| Meta ad account id (act_&lt;n&gt;) that owns the video. | |

### Return type

[**\Zernio\Model\DeleteAdVideo200Response**](../Model/DeleteAdVideo200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateAdPreviews()`

```php
generateAdPreviews($generate_ad_previews_request): \Zernio\Model\GenerateAdPreviews200Response
```

Render pre-create ad previews

Renders how a creative would look per placement BEFORE any ad exists, via Meta's `/generatepreviews`. Provide exactly one creative source: `existingCreativeId` or `creativeSpec`. Each preview is an HTML `<iframe>` snippet embeddable directly. Unknown `formats` values return Meta's 400 verbatim.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCreativesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_ad_previews_request = new \Zernio\Model\GenerateAdPreviewsRequest(); // \Zernio\Model\GenerateAdPreviewsRequest

try {
    $result = $apiInstance->generateAdPreviews($generate_ad_previews_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCreativesApi->generateAdPreviews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_ad_previews_request** | [**\Zernio\Model\GenerateAdPreviewsRequest**](../Model/GenerateAdPreviewsRequest.md)|  | |

### Return type

[**\Zernio\Model\GenerateAdPreviews200Response**](../Model/GenerateAdPreviews200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdCreative()`

```php
getAdCreative($creative_id, $account_id, $fields): \Zernio\Model\GetAdCreative200Response
```

Creative details

One creative's details, verbatim from Meta. `fields` is a raw-passthrough override of the default projection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCreativesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$creative_id = 'creative_id_example'; // string | Platform creative id
$account_id = 'account_id_example'; // string | Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token.
$fields = 'fields_example'; // string | Comma-separated Graph field override (supports nested {} projections).

try {
    $result = $apiInstance->getAdCreative($creative_id, $account_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCreativesApi->getAdCreative: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **creative_id** | **string**| Platform creative id | |
| **account_id** | **string**| Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token. | |
| **fields** | **string**| Comma-separated Graph field override (supports nested {} projections). | [optional] |

### Return type

[**\Zernio\Model\GetAdCreative200Response**](../Model/GetAdCreative200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdMedia()`

```php
getAdMedia($ad_id): \Zernio\Model\GetAdMedia200Response
```

Direct video and image URLs for an ad

Returns the direct signed URLs for every video and image asset used by an ad's live creative, normalised across shapes: single image/video, carousel, Reels/Story (`object_story_spec.video_data`) and dynamic creative (`asset_feed_spec`). Video items include Meta's poster thumbnail and the video's Meta id when available.  Reads Meta live rather than the stored creative blob because Meta's signed fbcdn URLs carry an `oe=<hex>` expiration (image_url ~24 h, video source ~12 d). Treat URLs as short-lived: re-fetch this endpoint before serving or downloading assets instead of caching URLs beyond that window.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCreativesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_id = 'ad_id_example'; // string | Zernio ad id (24-char hex) or platform ad id.

try {
    $result = $apiInstance->getAdMedia($ad_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCreativesApi->getAdMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**| Zernio ad id (24-char hex) or platform ad id. | |

### Return type

[**\Zernio\Model\GetAdMedia200Response**](../Model/GetAdMedia200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdPreviews()`

```php
getAdPreviews($ad_id, $formats): \Zernio\Model\GetAdPreviews200Response
```

Render previews of an existing ad

Renders an EXISTING ad per placement via Meta's `/{ad_id}/previews`. Each preview is an HTML `<iframe>` snippet embeddable directly. Unknown `formats` values return Meta's 400 verbatim.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCreativesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_id = 'ad_id_example'; // string | Zernio ad id (24-char hex).
$formats = 'formats_example'; // string | Comma-separated Meta ad_format values (max 10), one preview per format. Defaults to DESKTOP_FEED_STANDARD.

try {
    $result = $apiInstance->getAdPreviews($ad_id, $formats);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCreativesApi->getAdPreviews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**| Zernio ad id (24-char hex). | |
| **formats** | **string**| Comma-separated Meta ad_format values (max 10), one preview per format. Defaults to DESKTOP_FEED_STANDARD. | [optional] |

### Return type

[**\Zernio\Model\GetAdPreviews200Response**](../Model/GetAdPreviews200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAdCatalogProductSets()`

```php
listAdCatalogProductSets($catalog_id, $account_id): \Zernio\Model\ListAdCatalogProductSets200Response
```

List a catalog's product sets

Lists a Meta product catalog's product sets, the unit a catalog ad promotes. Pass the chosen set as `promotedObject.productSetId` on POST /v1/ads/create with `goal: catalog_sales`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCreativesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$catalog_id = 'catalog_id_example'; // string | Meta product catalog ID (from GET /v1/ads/catalogs)
$account_id = 'account_id_example'; // string | A facebook, instagram, or metaads account ID

try {
    $result = $apiInstance->listAdCatalogProductSets($catalog_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCreativesApi->listAdCatalogProductSets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **catalog_id** | **string**| Meta product catalog ID (from GET /v1/ads/catalogs) | |
| **account_id** | **string**| A facebook, instagram, or metaads account ID | |

### Return type

[**\Zernio\Model\ListAdCatalogProductSets200Response**](../Model/ListAdCatalogProductSets200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAdCatalogs()`

```php
listAdCatalogs($account_id, $ad_account_id): \Zernio\Model\ListAdCatalogs200Response
```

List Meta product catalogs

Lists the Meta product catalogs reachable from an ad account (owned + agency-shared catalogs of the ad account's business), for Advantage+ catalog ads (`goal: catalog_sales` on POST /v1/ads/create, e.g. vehicle inventory catalogs). Read-only; uses scopes customers already granted (no reconnect needed). Catalog contents (items, feeds) are managed in Meta Commerce Manager, not through this API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCreativesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | A facebook, instagram, or metaads account ID
$ad_account_id = 'ad_account_id_example'; // string | Meta ad account ID (act_...)

try {
    $result = $apiInstance->listAdCatalogs($account_id, $ad_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCreativesApi->listAdCatalogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| A facebook, instagram, or metaads account ID | |
| **ad_account_id** | **string**| Meta ad account ID (act_...) | |

### Return type

[**\Zernio\Model\ListAdCatalogs200Response**](../Model/ListAdCatalogs200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAdCreatives()`

```php
listAdCreatives($account_id, $ad_account_id, $fields, $limit, $after): \Zernio\Model\ListAdCreatives200Response
```

Creative library

Lists the ad account's creative library (Meta's `/act_X/adcreatives`), rows returned verbatim. The default projection covers id, name, status, object type, thumbnail, object_story_spec / asset_feed_spec and url_tags; `fields` is a raw-passthrough override. Any creative id here is reusable on the create endpoints via `existingCreativeId`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCreativesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token.
$ad_account_id = 'ad_account_id_example'; // string | Meta ad account id (act_<n>).
$fields = 'fields_example'; // string | Comma-separated Graph field override (supports nested {} projections).
$limit = 25; // int | Rows per page
$after = 'after_example'; // string | Cursor from paging.after of the previous page.

try {
    $result = $apiInstance->listAdCreatives($account_id, $ad_account_id, $fields, $limit, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCreativesApi->listAdCreatives: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token. | |
| **ad_account_id** | **string**| Meta ad account id (act_&lt;n&gt;). | |
| **fields** | **string**| Comma-separated Graph field override (supports nested {} projections). | [optional] |
| **limit** | **int**| Rows per page | [optional] [default to 25] |
| **after** | **string**| Cursor from paging.after of the previous page. | [optional] |

### Return type

[**\Zernio\Model\ListAdCreatives200Response**](../Model/ListAdCreatives200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAdImages()`

```php
listAdImages($account_id, $ad_account_id, $fields, $limit, $after): \Zernio\Model\ListAdImages200Response
```

Ad image library

Lists the ad account's image library (Meta's `/act_X/adimages`), rows returned verbatim. The default projection covers hash, url, name, dimensions and status; `fields` is a raw-passthrough override. Any `hash` here is reusable wherever Meta accepts `image_hash` (e.g. `imageHash` on POST /v1/ads/creatives).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCreativesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token.
$ad_account_id = 'ad_account_id_example'; // string | Meta ad account id (act_<n>).
$fields = 'fields_example'; // string | Comma-separated Graph field override (supports nested {} projections).
$limit = 25; // int | Rows per page
$after = 'after_example'; // string | Cursor from paging.after of the previous page.

try {
    $result = $apiInstance->listAdImages($account_id, $ad_account_id, $fields, $limit, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCreativesApi->listAdImages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token. | |
| **ad_account_id** | **string**| Meta ad account id (act_&lt;n&gt;). | |
| **fields** | **string**| Comma-separated Graph field override (supports nested {} projections). | [optional] |
| **limit** | **int**| Rows per page | [optional] [default to 25] |
| **after** | **string**| Cursor from paging.after of the previous page. | [optional] |

### Return type

[**\Zernio\Model\ListAdImages200Response**](../Model/ListAdImages200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAdVideos()`

```php
listAdVideos($account_id, $ad_account_id, $fields, $limit, $after): \Zernio\Model\ListAdVideos200Response
```

Ad video library

Lists the ad account's video library (Meta's `/act_X/advideos`), rows returned verbatim. The default projection covers id, title, status, poster frames, length and `source` (the playable MP4); `fields` is a raw-passthrough override. Any `id` here is reusable as `video.id` on the create endpoints, so N ads that differ only in copy share one upload.  `source` lets you PLAY a video before picking it, which a poster frame alone can't settle when several videos share a first frame. It is a signed CDN URL that EXPIRES, so treat it as good for preview at selection time only. Never persist it; re-list to get a fresh one.  This is the only way to reach a video uploaded OUTSIDE Zernio (Ads Manager, another tool); videos we uploaded also come back as `creative.videoId` on GET /v1/ads.  Meta transcodes asynchronously, so a row is only usable once `status.video_status` reads `ready`. Upload a new video via POST /v1/ads/videos, or inline via `video.url` on POST /v1/ads/create.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCreativesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token.
$ad_account_id = 'ad_account_id_example'; // string | Meta ad account id (act_<n>).
$fields = 'fields_example'; // string | Comma-separated Graph field override (supports nested {} projections).
$limit = 25; // int | Rows per page
$after = 'after_example'; // string | Cursor from paging.after of the previous page.

try {
    $result = $apiInstance->listAdVideos($account_id, $ad_account_id, $fields, $limit, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCreativesApi->listAdVideos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token. | |
| **ad_account_id** | **string**| Meta ad account id (act_&lt;n&gt;). | |
| **fields** | **string**| Comma-separated Graph field override (supports nested {} projections). | [optional] |
| **limit** | **int**| Rows per page | [optional] [default to 25] |
| **after** | **string**| Cursor from paging.after of the previous page. | [optional] |

### Return type

[**\Zernio\Model\ListAdVideos200Response**](../Model/ListAdVideos200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAdCreative()`

```php
updateAdCreative($creative_id, $update_ad_creative_request): \Zernio\Model\UpdateAdCreative200Response
```

Rename a creative

Renames a creative. Creatives are immutable on Meta beyond `name`. For content changes create a new creative (POST /v1/ads/creatives) and swap it onto the ad (PUT /v1/ads/{adId} with `creative`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCreativesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$creative_id = 'creative_id_example'; // string | Platform creative id
$update_ad_creative_request = new \Zernio\Model\UpdateAdCreativeRequest(); // \Zernio\Model\UpdateAdCreativeRequest

try {
    $result = $apiInstance->updateAdCreative($creative_id, $update_ad_creative_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCreativesApi->updateAdCreative: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **creative_id** | **string**| Platform creative id | |
| **update_ad_creative_request** | [**\Zernio\Model\UpdateAdCreativeRequest**](../Model/UpdateAdCreativeRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateAdCreative200Response**](../Model/UpdateAdCreative200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadAdImage()`

```php
uploadAdImage($upload_ad_image_request): \Zernio\Model\UploadAdImage201Response
```

Upload an ad image from base64

Uploads raw image bytes to the Meta ad account's image library, for callers whose creatives aren't hosted at a public URL. Returns the image `hash` (Meta's identifier for the asset) and the Meta-hosted `url`, which can be used directly as `imageUrl` on the create endpoints. Max 30 MB decoded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCreativesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upload_ad_image_request = new \Zernio\Model\UploadAdImageRequest(); // \Zernio\Model\UploadAdImageRequest

try {
    $result = $apiInstance->uploadAdImage($upload_ad_image_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCreativesApi->uploadAdImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upload_ad_image_request** | [**\Zernio\Model\UploadAdImageRequest**](../Model/UploadAdImageRequest.md)|  | |

### Return type

[**\Zernio\Model\UploadAdImage201Response**](../Model/UploadAdImage201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadAdVideo()`

```php
uploadAdVideo($upload_ad_video_request): \Zernio\Model\UploadAdVideo201Response
```

Upload an ad video

Standalone ad-video upload (parallel to POST /v1/ads/images), so a video creative can be rendered via POST /v1/ads/preview or attached via `video.id` on POST /v1/ads/create before an ad exists.  Accepts either an https `videoUrl` we download server-side (SSRF-guarded) or raw `videoBase64` bytes; exactly one is required. `videoBase64` is capped by Vercel's body limit, around 4.5 MB payload in practice, so larger videos must come via `videoUrl`.  Returns the Meta `video.id` (reusable wherever `video.id` is accepted) plus Meta's auto-generated poster URL when available. The endpoint waits until Meta reports the video ready (chunked upload + transcode can take minutes; the handler runs up to 800 s).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdCreativesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upload_ad_video_request = new \Zernio\Model\UploadAdVideoRequest(); // \Zernio\Model\UploadAdVideoRequest

try {
    $result = $apiInstance->uploadAdVideo($upload_ad_video_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdCreativesApi->uploadAdVideo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upload_ad_video_request** | [**\Zernio\Model\UploadAdVideoRequest**](../Model/UploadAdVideoRequest.md)|  | |

### Return type

[**\Zernio\Model\UploadAdVideo201Response**](../Model/UploadAdVideo201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
