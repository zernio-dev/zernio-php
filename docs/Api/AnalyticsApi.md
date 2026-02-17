# Late\AnalyticsApi



All URIs are relative to https://getlate.dev/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAnalytics()**](AnalyticsApi.md#getAnalytics) | **GET** /v1/analytics | Get post analytics |
| [**getFollowerStats()**](AnalyticsApi.md#getFollowerStats) | **GET** /v1/accounts/follower-stats | Get follower stats |
| [**getLinkedInAggregateAnalytics()**](AnalyticsApi.md#getLinkedInAggregateAnalytics) | **GET** /v1/accounts/{accountId}/linkedin-aggregate-analytics | Get LinkedIn aggregate stats |
| [**getLinkedInPostAnalytics()**](AnalyticsApi.md#getLinkedInPostAnalytics) | **GET** /v1/accounts/{accountId}/linkedin-post-analytics | Get LinkedIn post stats |
| [**getYouTubeDailyViews()**](AnalyticsApi.md#getYouTubeDailyViews) | **GET** /v1/analytics/youtube/daily-views | Get YouTube daily views |


## `getAnalytics()`

```php
getAnalytics($post_id, $platform, $profile_id, $source, $from_date, $to_date, $limit, $page, $sort_by, $order): \Late\Model\GetAnalytics200Response
```

Get post analytics

Returns analytics for posts. With postId, returns a single post. Without it, returns a paginated list with overview stats. Accepts both Late Post IDs and External Post IDs (auto-resolved). Data is cached and refreshed at most once per hour. For follower stats, use /v1/accounts/follower-stats.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string | Returns analytics for a single post. Accepts both Late Post IDs and External Post IDs. Late IDs are auto-resolved to External Post analytics.
$platform = 'platform_example'; // string | Filter by platform (default \"all\")
$profile_id = 'profile_id_example'; // string | Filter by profile ID (default \"all\")
$source = 'all'; // string | Filter by post source: late (posted via Late API), external (synced from platform), all (default)
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Inclusive lower bound
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Inclusive upper bound
$limit = 50; // int | Page size (default 50)
$page = 1; // int | Page number (default 1)
$sort_by = 'date'; // string | Sort by date or engagement
$order = 'desc'; // string | Sort order

try {
    $result = $apiInstance->getAnalytics($post_id, $platform, $profile_id, $source, $from_date, $to_date, $limit, $page, $sort_by, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalytics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **string**| Returns analytics for a single post. Accepts both Late Post IDs and External Post IDs. Late IDs are auto-resolved to External Post analytics. | [optional] |
| **platform** | **string**| Filter by platform (default \&quot;all\&quot;) | [optional] |
| **profile_id** | **string**| Filter by profile ID (default \&quot;all\&quot;) | [optional] |
| **source** | **string**| Filter by post source: late (posted via Late API), external (synced from platform), all (default) | [optional] [default to &#39;all&#39;] |
| **from_date** | **\DateTime**| Inclusive lower bound | [optional] |
| **to_date** | **\DateTime**| Inclusive upper bound | [optional] |
| **limit** | **int**| Page size (default 50) | [optional] [default to 50] |
| **page** | **int**| Page number (default 1) | [optional] [default to 1] |
| **sort_by** | **string**| Sort by date or engagement | [optional] [default to &#39;date&#39;] |
| **order** | **string**| Sort order | [optional] [default to &#39;desc&#39;] |

### Return type

[**\Late\Model\GetAnalytics200Response**](../Model/GetAnalytics200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFollowerStats()`

```php
getFollowerStats($account_ids, $profile_id, $from_date, $to_date, $granularity): \Late\Model\GetFollowerStats200Response
```

Get follower stats

Returns follower count history and growth metrics for connected social accounts. Requires analytics add-on subscription. Follower counts are refreshed once per day.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_ids = 'account_ids_example'; // string | Comma-separated list of account IDs (optional, defaults to all user's accounts)
$profile_id = 'profile_id_example'; // string | Filter by profile ID
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start date in YYYY-MM-DD format (defaults to 30 days ago)
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End date in YYYY-MM-DD format (defaults to today)
$granularity = 'daily'; // string | Data aggregation level

try {
    $result = $apiInstance->getFollowerStats($account_ids, $profile_id, $from_date, $to_date, $granularity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getFollowerStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_ids** | **string**| Comma-separated list of account IDs (optional, defaults to all user&#39;s accounts) | [optional] |
| **profile_id** | **string**| Filter by profile ID | [optional] |
| **from_date** | **\DateTime**| Start date in YYYY-MM-DD format (defaults to 30 days ago) | [optional] |
| **to_date** | **\DateTime**| End date in YYYY-MM-DD format (defaults to today) | [optional] |
| **granularity** | **string**| Data aggregation level | [optional] [default to &#39;daily&#39;] |

### Return type

[**\Late\Model\GetFollowerStats200Response**](../Model/GetFollowerStats200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLinkedInAggregateAnalytics()`

```php
getLinkedInAggregateAnalytics($account_id, $aggregation, $start_date, $end_date, $metrics): \Late\Model\GetLinkedInAggregateAnalytics200Response
```

Get LinkedIn aggregate stats

Returns aggregate analytics across all posts for a LinkedIn personal account. Org accounts should use /v1/analytics instead. Requires r_member_postAnalytics scope.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The ID of the LinkedIn personal account
$aggregation = 'TOTAL'; // string | TOTAL (default, lifetime totals) or DAILY (time series). MEMBERS_REACHED not available with DAILY.
$start_date = 2024-01-01; // \DateTime | Start date (YYYY-MM-DD). If omitted, returns lifetime analytics.
$end_date = 2024-01-31; // \DateTime | End date (YYYY-MM-DD, exclusive). Defaults to today if omitted.
$metrics = IMPRESSION,REACTION,COMMENT; // string | Comma-separated metrics: IMPRESSION, MEMBERS_REACHED, REACTION, COMMENT, RESHARE. Omit for all.

try {
    $result = $apiInstance->getLinkedInAggregateAnalytics($account_id, $aggregation, $start_date, $end_date, $metrics);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getLinkedInAggregateAnalytics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The ID of the LinkedIn personal account | |
| **aggregation** | **string**| TOTAL (default, lifetime totals) or DAILY (time series). MEMBERS_REACHED not available with DAILY. | [optional] [default to &#39;TOTAL&#39;] |
| **start_date** | **\DateTime**| Start date (YYYY-MM-DD). If omitted, returns lifetime analytics. | [optional] |
| **end_date** | **\DateTime**| End date (YYYY-MM-DD, exclusive). Defaults to today if omitted. | [optional] |
| **metrics** | **string**| Comma-separated metrics: IMPRESSION, MEMBERS_REACHED, REACTION, COMMENT, RESHARE. Omit for all. | [optional] |

### Return type

[**\Late\Model\GetLinkedInAggregateAnalytics200Response**](../Model/GetLinkedInAggregateAnalytics200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLinkedInPostAnalytics()`

```php
getLinkedInPostAnalytics($account_id, $urn): \Late\Model\GetLinkedInPostAnalytics200Response
```

Get LinkedIn post stats

Returns analytics for a specific LinkedIn post by URN. Works for both personal and organization accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The ID of the LinkedIn account
$urn = urn:li:share:7123456789012345678; // string | The LinkedIn post URN

try {
    $result = $apiInstance->getLinkedInPostAnalytics($account_id, $urn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getLinkedInPostAnalytics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The ID of the LinkedIn account | |
| **urn** | **string**| The LinkedIn post URN | |

### Return type

[**\Late\Model\GetLinkedInPostAnalytics200Response**](../Model/GetLinkedInPostAnalytics200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getYouTubeDailyViews()`

```php
getYouTubeDailyViews($video_id, $account_id, $start_date, $end_date): \Late\Model\YouTubeDailyViewsResponse
```

Get YouTube daily views

Returns daily view counts for a YouTube video including views, watch time, and subscriber changes. Requires yt-analytics.readonly scope (re-authorization may be needed). Data has a 2-3 day delay. Max 90 days, defaults to last 30 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_id = 'video_id_example'; // string | The YouTube video ID (e.g., \"dQw4w9WgXcQ\")
$account_id = 'account_id_example'; // string | The Late account ID for the YouTube account
$start_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start date (YYYY-MM-DD). Defaults to 30 days ago.
$end_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End date (YYYY-MM-DD). Defaults to 3 days ago (YouTube data latency).

try {
    $result = $apiInstance->getYouTubeDailyViews($video_id, $account_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getYouTubeDailyViews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **video_id** | **string**| The YouTube video ID (e.g., \&quot;dQw4w9WgXcQ\&quot;) | |
| **account_id** | **string**| The Late account ID for the YouTube account | |
| **start_date** | **\DateTime**| Start date (YYYY-MM-DD). Defaults to 30 days ago. | [optional] |
| **end_date** | **\DateTime**| End date (YYYY-MM-DD). Defaults to 3 days ago (YouTube data latency). | [optional] |

### Return type

[**\Late\Model\YouTubeDailyViewsResponse**](../Model/YouTubeDailyViewsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
