# Zernio\TrackingLinksApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTrackingLink()**](TrackingLinksApi.md#createTrackingLink) | **POST** /v1/tracking-links | Create a tracking link |
| [**deleteTrackingLink()**](TrackingLinksApi.md#deleteTrackingLink) | **DELETE** /v1/tracking-links/{linkId} | Delete a tracking link |
| [**getTrackingLink()**](TrackingLinksApi.md#getTrackingLink) | **GET** /v1/tracking-links/{linkId} | Get a tracking link |
| [**getTrackingLinkStats()**](TrackingLinksApi.md#getTrackingLinkStats) | **GET** /v1/tracking-links/{linkId}/stats | Get a tracking link&#39;s results |
| [**listTrackingLinks()**](TrackingLinksApi.md#listTrackingLinks) | **GET** /v1/tracking-links | List tracking links |
| [**rotateTrackingLinkPostbackToken()**](TrackingLinksApi.md#rotateTrackingLinkPostbackToken) | **POST** /v1/tracking-links/{linkId}/rotate-postback-token | Rotate a tracking link&#39;s postback URL |
| [**updateTrackingLink()**](TrackingLinksApi.md#updateTrackingLink) | **PATCH** /v1/tracking-links/{linkId} | Update a tracking link |


## `createTrackingLink()`

```php
createTrackingLink($idempotency_key, $create_tracking_link_request): \Zernio\Model\CreateTrackingLink201Response
```

Create a tracking link

Creates a short link on a tracking site. Each click goes to one of `destinations`, picked by weight, so the link also split-tests landing pages. Put `url` in your ads and give `postbackUrl` to the network that reports conversions server to server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idempotency_key = 'idempotency_key_example'; // string | A unique key per link you create, such as a UUID. A retry with the same key and body returns the same link.
$create_tracking_link_request = new \Zernio\Model\CreateTrackingLinkRequest(); // \Zernio\Model\CreateTrackingLinkRequest

try {
    $result = $apiInstance->createTrackingLink($idempotency_key, $create_tracking_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingLinksApi->createTrackingLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idempotency_key** | **string**| A unique key per link you create, such as a UUID. A retry with the same key and body returns the same link. | |
| **create_tracking_link_request** | [**\Zernio\Model\CreateTrackingLinkRequest**](../Model/CreateTrackingLinkRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateTrackingLink201Response**](../Model/CreateTrackingLink201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTrackingLink()`

```php
deleteTrackingLink($link_id)
```

Delete a tracking link

The link and its postback URL stop working at once. Conversions already stored are kept.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$link_id = 'link_id_example'; // string

try {
    $apiInstance->deleteTrackingLink($link_id);
} catch (Exception $e) {
    echo 'Exception when calling TrackingLinksApi->deleteTrackingLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **link_id** | **string**|  | |

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

## `getTrackingLink()`

```php
getTrackingLink($link_id): \Zernio\Model\CreateTrackingLink201Response
```

Get a tracking link

One link, with its URL and postback URL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$link_id = 'link_id_example'; // string

try {
    $result = $apiInstance->getTrackingLink($link_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingLinksApi->getTrackingLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **link_id** | **string**|  | |

### Return type

[**\Zernio\Model\CreateTrackingLink201Response**](../Model/CreateTrackingLink201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTrackingLinkStats()`

```php
getTrackingLinkStats($link_id, $from_date, $to_date): \Zernio\Model\TrackingLinkStats
```

Get a tracking link's results

Clicks, conversions and revenue of one link over a range of days (UTC), and its clicks per destination, the result of a split test. Clicks leave out bots.  Conversions are the link's postbacks plus website conversions carrying the click id of one of its clicks, less any retracted. The range is at most 90 days, the time clicks are kept.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$link_id = 'link_id_example'; // string
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | First day of the range, `YYYY-MM-DD`.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Last day of the range, `YYYY-MM-DD`.

try {
    $result = $apiInstance->getTrackingLinkStats($link_id, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingLinksApi->getTrackingLinkStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **link_id** | **string**|  | |
| **from_date** | **\DateTime**| First day of the range, &#x60;YYYY-MM-DD&#x60;. | |
| **to_date** | **\DateTime**| Last day of the range, &#x60;YYYY-MM-DD&#x60;. | |

### Return type

[**\Zernio\Model\TrackingLinkStats**](../Model/TrackingLinkStats.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTrackingLinks()`

```php
listTrackingLinks($profile_id, $site_id, $limit, $cursor): \Zernio\Model\ListTrackingLinks200Response
```

List tracking links

The tracking links of your workspace in creation order. Pass `profileId` or `siteId` to list one profile's or one site's links.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$site_id = 'site_id_example'; // string
$limit = 50; // int
$cursor = 'cursor_example'; // string | `pagination.nextCursor` from the previous page.

try {
    $result = $apiInstance->listTrackingLinks($profile_id, $site_id, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingLinksApi->listTrackingLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | [optional] |
| **site_id** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |
| **cursor** | **string**| &#x60;pagination.nextCursor&#x60; from the previous page. | [optional] |

### Return type

[**\Zernio\Model\ListTrackingLinks200Response**](../Model/ListTrackingLinks200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rotateTrackingLinkPostbackToken()`

```php
rotateTrackingLinkPostbackToken($link_id, $idempotency_key): \Zernio\Model\CreateTrackingLink201Response
```

Rotate a tracking link's postback URL

Issues a new `postbackUrl`. The old one stops working at once, so update it at the network right after.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$link_id = 'link_id_example'; // string
$idempotency_key = 'idempotency_key_example'; // string | A unique key per rotation, such as a UUID.

try {
    $result = $apiInstance->rotateTrackingLinkPostbackToken($link_id, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingLinksApi->rotateTrackingLinkPostbackToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **link_id** | **string**|  | |
| **idempotency_key** | **string**| A unique key per rotation, such as a UUID. | |

### Return type

[**\Zernio\Model\CreateTrackingLink201Response**](../Model/CreateTrackingLink201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTrackingLink()`

```php
updateTrackingLink($link_id, $update_tracking_link_request): \Zernio\Model\CreateTrackingLink201Response
```

Update a tracking link

Changes the link's name, destinations, campaign hints or status. Send at least one field. `status: paused` turns the link off until it is set back to `active`. `campaign: null` removes the hints. The code and URL never change.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TrackingLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$link_id = 'link_id_example'; // string
$update_tracking_link_request = new \Zernio\Model\UpdateTrackingLinkRequest(); // \Zernio\Model\UpdateTrackingLinkRequest

try {
    $result = $apiInstance->updateTrackingLink($link_id, $update_tracking_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingLinksApi->updateTrackingLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **link_id** | **string**|  | |
| **update_tracking_link_request** | [**\Zernio\Model\UpdateTrackingLinkRequest**](../Model/UpdateTrackingLinkRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateTrackingLink201Response**](../Model/CreateTrackingLink201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
