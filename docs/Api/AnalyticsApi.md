# Zernio\AnalyticsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAnalytics()**](AnalyticsApi.md#getAnalytics) | **GET** /v1/analytics | Get post analytics |
| [**getBestTimeToPost()**](AnalyticsApi.md#getBestTimeToPost) | **GET** /v1/analytics/best-time | Get best times to post |
| [**getContentDecay()**](AnalyticsApi.md#getContentDecay) | **GET** /v1/analytics/content-decay | Get content performance decay |
| [**getDailyMetrics()**](AnalyticsApi.md#getDailyMetrics) | **GET** /v1/analytics/daily-metrics | Get daily aggregated metrics |
| [**getFacebookPageInsights()**](AnalyticsApi.md#getFacebookPageInsights) | **GET** /v1/analytics/facebook/page-insights | Get Facebook Page insights |
| [**getFollowerStats()**](AnalyticsApi.md#getFollowerStats) | **GET** /v1/accounts/follower-stats | Get follower stats |
| [**getGoogleBusinessPerformance()**](AnalyticsApi.md#getGoogleBusinessPerformance) | **GET** /v1/analytics/googlebusiness/performance | Get GBP performance metrics |
| [**getGoogleBusinessSearchKeywords()**](AnalyticsApi.md#getGoogleBusinessSearchKeywords) | **GET** /v1/analytics/googlebusiness/search-keywords | Get GBP search keywords |
| [**getInstagramAccountInsights()**](AnalyticsApi.md#getInstagramAccountInsights) | **GET** /v1/analytics/instagram/account-insights | Get Instagram insights |
| [**getInstagramDemographics()**](AnalyticsApi.md#getInstagramDemographics) | **GET** /v1/analytics/instagram/demographics | Get Instagram demographics |
| [**getInstagramFollowerHistory()**](AnalyticsApi.md#getInstagramFollowerHistory) | **GET** /v1/analytics/instagram/follower-history | Get Instagram follower history |
| [**getLinkedInAggregateAnalytics()**](AnalyticsApi.md#getLinkedInAggregateAnalytics) | **GET** /v1/accounts/{accountId}/linkedin-aggregate-analytics | Get LinkedIn aggregate stats |
| [**getLinkedInOrgAggregateAnalytics()**](AnalyticsApi.md#getLinkedInOrgAggregateAnalytics) | **GET** /v1/analytics/linkedin/org-aggregate-analytics | Get LinkedIn organization page aggregate analytics |
| [**getLinkedInPostAnalytics()**](AnalyticsApi.md#getLinkedInPostAnalytics) | **GET** /v1/accounts/{accountId}/linkedin-post-analytics | Get LinkedIn post stats |
| [**getLinkedInPostReactions()**](AnalyticsApi.md#getLinkedInPostReactions) | **GET** /v1/accounts/{accountId}/linkedin-post-reactions | Get LinkedIn post reactions |
| [**getPostTimeline()**](AnalyticsApi.md#getPostTimeline) | **GET** /v1/analytics/post-timeline | Get post analytics timeline |
| [**getPostingFrequency()**](AnalyticsApi.md#getPostingFrequency) | **GET** /v1/analytics/posting-frequency | Get frequency vs engagement |
| [**getTikTokAccountInsights()**](AnalyticsApi.md#getTikTokAccountInsights) | **GET** /v1/analytics/tiktok/account-insights | Get TikTok account-level insights |
| [**getYouTubeChannelInsights()**](AnalyticsApi.md#getYouTubeChannelInsights) | **GET** /v1/analytics/youtube/channel-insights | Get YouTube channel-level insights |
| [**getYouTubeDailyViews()**](AnalyticsApi.md#getYouTubeDailyViews) | **GET** /v1/analytics/youtube/daily-views | Get YouTube daily views |
| [**getYouTubeDemographics()**](AnalyticsApi.md#getYouTubeDemographics) | **GET** /v1/analytics/youtube/demographics | Get YouTube demographics |


## `getAnalytics()`

```php
getAnalytics($post_id, $platform, $profile_id, $account_id, $source, $from_date, $to_date, $limit, $page, $sort_by, $order): \Zernio\Model\GetAnalytics200Response
```

Get post analytics

Returns analytics for posts. With postId, returns a single post. Without it, returns a paginated list with overview stats. Accepts both Zernio Post IDs and External Post IDs (auto-resolved). fromDate defaults to 90 days ago if omitted, max range 366 days. Single post lookups may return 202 (sync pending) or 424 (all platforms failed). For follower stats, use /v1/accounts/follower-stats.  LinkedIn personal accounts: Analytics are only available for posts published through Zernio. LinkedIn's API only returns metrics for posts authored by the authenticated user. Organization/company page analytics work for all posts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string | Returns analytics for a single post. Accepts both Zernio Post IDs and External Post IDs. Zernio IDs are auto-resolved to External Post analytics.
$platform = 'platform_example'; // string | Filter by platform (default \"all\")
$profile_id = 'profile_id_example'; // string | Filter by profile ID (default \"all\")
$account_id = 'account_id_example'; // string | Filter by social account ID
$source = 'all'; // string | Filter by post source: late (posted via Zernio API), external (synced from platform), all (default)
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Inclusive lower bound (YYYY-MM-DD). Defaults to 90 days ago if omitted. Max range is 366 days.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Inclusive upper bound (YYYY-MM-DD). Defaults to today if omitted.
$limit = 50; // int | Page size (default 50)
$page = 1; // int | Page number (default 1)
$sort_by = 'date'; // string | Sort by date, engagement, or a specific metric
$order = 'desc'; // string | Sort order

try {
    $result = $apiInstance->getAnalytics($post_id, $platform, $profile_id, $account_id, $source, $from_date, $to_date, $limit, $page, $sort_by, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalytics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **string**| Returns analytics for a single post. Accepts both Zernio Post IDs and External Post IDs. Zernio IDs are auto-resolved to External Post analytics. | [optional] |
| **platform** | **string**| Filter by platform (default \&quot;all\&quot;) | [optional] |
| **profile_id** | **string**| Filter by profile ID (default \&quot;all\&quot;) | [optional] |
| **account_id** | **string**| Filter by social account ID | [optional] |
| **source** | **string**| Filter by post source: late (posted via Zernio API), external (synced from platform), all (default) | [optional] [default to &#39;all&#39;] |
| **from_date** | **\DateTime**| Inclusive lower bound (YYYY-MM-DD). Defaults to 90 days ago if omitted. Max range is 366 days. | [optional] |
| **to_date** | **\DateTime**| Inclusive upper bound (YYYY-MM-DD). Defaults to today if omitted. | [optional] |
| **limit** | **int**| Page size (default 50) | [optional] [default to 50] |
| **page** | **int**| Page number (default 1) | [optional] [default to 1] |
| **sort_by** | **string**| Sort by date, engagement, or a specific metric | [optional] [default to &#39;date&#39;] |
| **order** | **string**| Sort order | [optional] [default to &#39;desc&#39;] |

### Return type

[**\Zernio\Model\GetAnalytics200Response**](../Model/GetAnalytics200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBestTimeToPost()`

```php
getBestTimeToPost($platform, $profile_id, $source): \Zernio\Model\GetBestTimeToPost200Response
```

Get best times to post

Returns the best times to post based on historical engagement data. Groups all published posts by day of week and hour (UTC), calculating average engagement per slot. Use this to auto-schedule posts at optimal times. Requires the Analytics add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string | Filter by platform (e.g. \"instagram\", \"tiktok\"). Omit for all platforms.
$profile_id = 'profile_id_example'; // string | Filter by profile ID. Omit for all profiles.
$source = 'all'; // string | Filter by post origin. \"late\" for posts published via Zernio, \"external\" for posts imported from platforms.

try {
    $result = $apiInstance->getBestTimeToPost($platform, $profile_id, $source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getBestTimeToPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **platform** | **string**| Filter by platform (e.g. \&quot;instagram\&quot;, \&quot;tiktok\&quot;). Omit for all platforms. | [optional] |
| **profile_id** | **string**| Filter by profile ID. Omit for all profiles. | [optional] |
| **source** | **string**| Filter by post origin. \&quot;late\&quot; for posts published via Zernio, \&quot;external\&quot; for posts imported from platforms. | [optional] [default to &#39;all&#39;] |

### Return type

[**\Zernio\Model\GetBestTimeToPost200Response**](../Model/GetBestTimeToPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContentDecay()`

```php
getContentDecay($platform, $profile_id, $source): \Zernio\Model\GetContentDecay200Response
```

Get content performance decay

Returns how engagement accumulates over time after a post is published. Each bucket shows what percentage of the post's total engagement had been reached by that time window. Useful for understanding content lifespan (e.g. \"posts reach 78% of total engagement within 24 hours\"). Requires the Analytics add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string | Filter by platform (e.g. \"instagram\", \"tiktok\"). Omit for all platforms.
$profile_id = 'profile_id_example'; // string | Filter by profile ID. Omit for all profiles.
$source = 'all'; // string | Filter by post origin. \"late\" for posts published via Zernio, \"external\" for posts imported from platforms.

try {
    $result = $apiInstance->getContentDecay($platform, $profile_id, $source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getContentDecay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **platform** | **string**| Filter by platform (e.g. \&quot;instagram\&quot;, \&quot;tiktok\&quot;). Omit for all platforms. | [optional] |
| **profile_id** | **string**| Filter by profile ID. Omit for all profiles. | [optional] |
| **source** | **string**| Filter by post origin. \&quot;late\&quot; for posts published via Zernio, \&quot;external\&quot; for posts imported from platforms. | [optional] [default to &#39;all&#39;] |

### Return type

[**\Zernio\Model\GetContentDecay200Response**](../Model/GetContentDecay200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDailyMetrics()`

```php
getDailyMetrics($platform, $profile_id, $account_id, $from_date, $to_date, $source): \Zernio\Model\GetDailyMetrics200Response
```

Get daily aggregated metrics

Returns daily aggregated analytics metrics and a per-platform breakdown. Each day includes post count, platform distribution, and summed metrics (impressions, reach, likes, comments, shares, saves, clicks, views). Defaults to the last 180 days. Requires the Analytics add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string | Filter by platform (e.g. \"instagram\", \"tiktok\"). Omit for all platforms.
$profile_id = 'profile_id_example'; // string | Filter by profile ID. Omit for all profiles.
$account_id = 'account_id_example'; // string | Filter by social account ID
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Inclusive start date (ISO 8601). Defaults to 180 days ago.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Inclusive end date (ISO 8601). Defaults to now.
$source = 'all'; // string | Filter by post origin. \"late\" for posts published via Zernio, \"external\" for posts imported from platforms.

try {
    $result = $apiInstance->getDailyMetrics($platform, $profile_id, $account_id, $from_date, $to_date, $source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getDailyMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **platform** | **string**| Filter by platform (e.g. \&quot;instagram\&quot;, \&quot;tiktok\&quot;). Omit for all platforms. | [optional] |
| **profile_id** | **string**| Filter by profile ID. Omit for all profiles. | [optional] |
| **account_id** | **string**| Filter by social account ID | [optional] |
| **from_date** | **\DateTime**| Inclusive start date (ISO 8601). Defaults to 180 days ago. | [optional] |
| **to_date** | **\DateTime**| Inclusive end date (ISO 8601). Defaults to now. | [optional] |
| **source** | **string**| Filter by post origin. \&quot;late\&quot; for posts published via Zernio, \&quot;external\&quot; for posts imported from platforms. | [optional] [default to &#39;all&#39;] |

### Return type

[**\Zernio\Model\GetDailyMetrics200Response**](../Model/GetDailyMetrics200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFacebookPageInsights()`

```php
getFacebookPageInsights($account_id, $metrics, $since, $until, $metric_type): \Zernio\Model\InstagramAccountInsightsResponse
```

Get Facebook Page insights

Returns page-level Facebook insights (media views, views, post engagements, video metrics, follower counts). Response shape matches /v1/analytics/instagram/account-insights so the same client handling works across platforms.  Metric names track the current (post-November 2025) Meta Graph API. The legacy page_impressions / page_fans / page_fan_adds / page_fan_removes metrics were deprecated by Meta on November 15, 2025 and are NOT accepted by this endpoint. Use the replacements below. Because Meta did not provide direct adds/removes replacements, Zernio synthesizes followers_gained / followers_lost from the daily follower snapshotter.  Max 89 days, defaults to last 30 days. Requires the Analytics add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The Zernio SocialAccount ID for the connected Facebook Page.
$metrics = 'metrics_example'; // string | Comma-separated list of metrics. Defaults to \"page_media_view,page_post_engagements,page_follows,followers_gained,followers_lost\".  Live Meta metrics (current names, post-Nov-2025):   - page_media_view       (replaces deprecated page_impressions)   - page_views_total   - page_post_engagements   - page_video_views   - page_video_view_time   - page_follows          (replaces deprecated page_fans)  Zernio-synthesized from daily follower snapshots (filling the Nov-2025 gap left by the page_fan_adds / page_fan_removes deprecation):   - followers_gained   - followers_lost
$since = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start date (YYYY-MM-DD). Defaults to 30 days ago.
$until = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End date (YYYY-MM-DD). Defaults to today.
$metric_type = 'total_value'; // string | \"total_value\" (default) returns aggregated totals only. \"time_series\" returns daily values in the \"values\" array.

try {
    $result = $apiInstance->getFacebookPageInsights($account_id, $metrics, $since, $until, $metric_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getFacebookPageInsights: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Zernio SocialAccount ID for the connected Facebook Page. | |
| **metrics** | **string**| Comma-separated list of metrics. Defaults to \&quot;page_media_view,page_post_engagements,page_follows,followers_gained,followers_lost\&quot;.  Live Meta metrics (current names, post-Nov-2025):   - page_media_view       (replaces deprecated page_impressions)   - page_views_total   - page_post_engagements   - page_video_views   - page_video_view_time   - page_follows          (replaces deprecated page_fans)  Zernio-synthesized from daily follower snapshots (filling the Nov-2025 gap left by the page_fan_adds / page_fan_removes deprecation):   - followers_gained   - followers_lost | [optional] |
| **since** | **\DateTime**| Start date (YYYY-MM-DD). Defaults to 30 days ago. | [optional] |
| **until** | **\DateTime**| End date (YYYY-MM-DD). Defaults to today. | [optional] |
| **metric_type** | **string**| \&quot;total_value\&quot; (default) returns aggregated totals only. \&quot;time_series\&quot; returns daily values in the \&quot;values\&quot; array. | [optional] [default to &#39;total_value&#39;] |

### Return type

[**\Zernio\Model\InstagramAccountInsightsResponse**](../Model/InstagramAccountInsightsResponse.md)

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
getFollowerStats($account_ids, $profile_id, $from_date, $to_date, $granularity): \Zernio\Model\GetFollowerStats200Response
```

Get follower stats

Returns follower count history and growth metrics for connected social accounts. Requires analytics add-on subscription. Follower counts are refreshed once per day.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AnalyticsApi(
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

[**\Zernio\Model\GetFollowerStats200Response**](../Model/GetFollowerStats200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGoogleBusinessPerformance()`

```php
getGoogleBusinessPerformance($account_id, $metrics, $start_date, $end_date): \Zernio\Model\GetGoogleBusinessPerformance200Response
```

Get GBP performance metrics

Returns daily performance metrics for a Google Business Profile location. Metrics include impressions (Maps/Search, desktop/mobile), website clicks, call clicks, direction requests, conversations, bookings, and food orders. Data may be delayed 2-3 days. Max 18 months of historical data. Requires the Analytics add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The Zernio SocialAccount ID for the Google Business Profile account.
$metrics = 'metrics_example'; // string | Comma-separated metric names. Defaults to all available metrics. Valid values: BUSINESS_IMPRESSIONS_DESKTOP_MAPS, BUSINESS_IMPRESSIONS_DESKTOP_SEARCH, BUSINESS_IMPRESSIONS_MOBILE_MAPS, BUSINESS_IMPRESSIONS_MOBILE_SEARCH, BUSINESS_CONVERSATIONS, BUSINESS_DIRECTION_REQUESTS, CALL_CLICKS, WEBSITE_CLICKS, BUSINESS_BOOKINGS, BUSINESS_FOOD_ORDERS, BUSINESS_FOOD_MENU_CLICKS
$start_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start date (YYYY-MM-DD). Defaults to 30 days ago. Max 18 months back.
$end_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End date (YYYY-MM-DD). Defaults to today.

try {
    $result = $apiInstance->getGoogleBusinessPerformance($account_id, $metrics, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getGoogleBusinessPerformance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Zernio SocialAccount ID for the Google Business Profile account. | |
| **metrics** | **string**| Comma-separated metric names. Defaults to all available metrics. Valid values: BUSINESS_IMPRESSIONS_DESKTOP_MAPS, BUSINESS_IMPRESSIONS_DESKTOP_SEARCH, BUSINESS_IMPRESSIONS_MOBILE_MAPS, BUSINESS_IMPRESSIONS_MOBILE_SEARCH, BUSINESS_CONVERSATIONS, BUSINESS_DIRECTION_REQUESTS, CALL_CLICKS, WEBSITE_CLICKS, BUSINESS_BOOKINGS, BUSINESS_FOOD_ORDERS, BUSINESS_FOOD_MENU_CLICKS | [optional] |
| **start_date** | **\DateTime**| Start date (YYYY-MM-DD). Defaults to 30 days ago. Max 18 months back. | [optional] |
| **end_date** | **\DateTime**| End date (YYYY-MM-DD). Defaults to today. | [optional] |

### Return type

[**\Zernio\Model\GetGoogleBusinessPerformance200Response**](../Model/GetGoogleBusinessPerformance200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGoogleBusinessSearchKeywords()`

```php
getGoogleBusinessSearchKeywords($account_id, $start_month, $end_month): \Zernio\Model\GetGoogleBusinessSearchKeywords200Response
```

Get GBP search keywords

Returns search keywords that triggered impressions for a Google Business Profile location. Data is aggregated monthly. Keywords below a minimum impression threshold set by Google are excluded. Max 18 months of historical data. Requires the Analytics add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The Zernio SocialAccount ID for the Google Business Profile account.
$start_month = 'start_month_example'; // string | Start month (YYYY-MM). Defaults to 3 months ago.
$end_month = 'end_month_example'; // string | End month (YYYY-MM). Defaults to current month.

try {
    $result = $apiInstance->getGoogleBusinessSearchKeywords($account_id, $start_month, $end_month);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getGoogleBusinessSearchKeywords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Zernio SocialAccount ID for the Google Business Profile account. | |
| **start_month** | **string**| Start month (YYYY-MM). Defaults to 3 months ago. | [optional] |
| **end_month** | **string**| End month (YYYY-MM). Defaults to current month. | [optional] |

### Return type

[**\Zernio\Model\GetGoogleBusinessSearchKeywords200Response**](../Model/GetGoogleBusinessSearchKeywords200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInstagramAccountInsights()`

```php
getInstagramAccountInsights($account_id, $metrics, $since, $until, $metric_type, $breakdown): \Zernio\Model\InstagramAccountInsightsResponse
```

Get Instagram insights

Returns account-level Instagram insights such as reach, views, accounts engaged, and total interactions. These metrics reflect the entire account's performance across all content surfaces (feed, stories, explore, profile), and are fundamentally different from post-level metrics. Data may be delayed up to 48 hours. Max 90 days, defaults to last 30 days. Requires the Analytics add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The Zernio SocialAccount ID for the Instagram account
$metrics = 'metrics_example'; // string | Comma-separated list of metrics. Defaults to \"reach,views,accounts_engaged,total_interactions\". Valid metrics: reach, views, accounts_engaged, total_interactions, comments, likes, saves, shares, replies, reposts, follows_and_unfollows, profile_links_taps. Note: only \"reach\" supports metricType=time_series. All other metrics (including follows_and_unfollows) are total_value only. This is an Instagram Graph API limitation, not a Zernio limitation - the IG API does not return time-series data for these metrics. For a daily running follower count, use /v1/analytics/instagram/follower-history instead.
$since = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start date (YYYY-MM-DD). Defaults to 30 days ago.
$until = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End date (YYYY-MM-DD). Defaults to today.
$metric_type = 'total_value'; // string | \"total_value\" (default) returns aggregated totals and supports breakdowns. \"time_series\" returns daily values but only works with the \"reach\" metric.
$breakdown = 'breakdown_example'; // string | Breakdown dimension (only valid with metricType=total_value). Valid values depend on the metric: media_product_type, follow_type, follower_type, contact_button_type.

try {
    $result = $apiInstance->getInstagramAccountInsights($account_id, $metrics, $since, $until, $metric_type, $breakdown);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getInstagramAccountInsights: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Zernio SocialAccount ID for the Instagram account | |
| **metrics** | **string**| Comma-separated list of metrics. Defaults to \&quot;reach,views,accounts_engaged,total_interactions\&quot;. Valid metrics: reach, views, accounts_engaged, total_interactions, comments, likes, saves, shares, replies, reposts, follows_and_unfollows, profile_links_taps. Note: only \&quot;reach\&quot; supports metricType&#x3D;time_series. All other metrics (including follows_and_unfollows) are total_value only. This is an Instagram Graph API limitation, not a Zernio limitation - the IG API does not return time-series data for these metrics. For a daily running follower count, use /v1/analytics/instagram/follower-history instead. | [optional] |
| **since** | **\DateTime**| Start date (YYYY-MM-DD). Defaults to 30 days ago. | [optional] |
| **until** | **\DateTime**| End date (YYYY-MM-DD). Defaults to today. | [optional] |
| **metric_type** | **string**| \&quot;total_value\&quot; (default) returns aggregated totals and supports breakdowns. \&quot;time_series\&quot; returns daily values but only works with the \&quot;reach\&quot; metric. | [optional] [default to &#39;total_value&#39;] |
| **breakdown** | **string**| Breakdown dimension (only valid with metricType&#x3D;total_value). Valid values depend on the metric: media_product_type, follow_type, follower_type, contact_button_type. | [optional] |

### Return type

[**\Zernio\Model\InstagramAccountInsightsResponse**](../Model/InstagramAccountInsightsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInstagramDemographics()`

```php
getInstagramDemographics($account_id, $metric, $breakdown, $timeframe): \Zernio\Model\InstagramDemographicsResponse
```

Get Instagram demographics

Returns audience demographic insights for an Instagram account, broken down by age, city, country, and/or gender. Requires at least 100 followers. Returns top 45 entries per dimension. Data may be delayed up to 48 hours. Requires the Analytics add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The Zernio SocialAccount ID for the Instagram account
$metric = 'follower_demographics'; // string | \"follower_demographics\" for follower audience data, or \"engaged_audience_demographics\" for engaged viewers.
$breakdown = 'breakdown_example'; // string | Comma-separated list of demographic dimensions: age, city, country, gender. Defaults to all four if omitted.
$timeframe = 'this_month'; // string | Time period for demographic data. Defaults to \"this_month\".

try {
    $result = $apiInstance->getInstagramDemographics($account_id, $metric, $breakdown, $timeframe);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getInstagramDemographics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Zernio SocialAccount ID for the Instagram account | |
| **metric** | **string**| \&quot;follower_demographics\&quot; for follower audience data, or \&quot;engaged_audience_demographics\&quot; for engaged viewers. | [optional] [default to &#39;follower_demographics&#39;] |
| **breakdown** | **string**| Comma-separated list of demographic dimensions: age, city, country, gender. Defaults to all four if omitted. | [optional] |
| **timeframe** | **string**| Time period for demographic data. Defaults to \&quot;this_month\&quot;. | [optional] [default to &#39;this_month&#39;] |

### Return type

[**\Zernio\Model\InstagramDemographicsResponse**](../Model/InstagramDemographicsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInstagramFollowerHistory()`

```php
getInstagramFollowerHistory($account_id, $metrics, $since, $until, $metric_type): \Zernio\Model\InstagramAccountInsightsResponse
```

Get Instagram follower history

Returns a daily running Instagram follower count time series, served from Zernio's cross-platform daily snapshotter. Exists because Meta removed follower_count from the /insights endpoint in Graph API v22+ and never exposed a historical daily series via any public API.  Response envelope matches /v1/analytics/instagram/account-insights so the same client handling works. Max 89 days, defaults to last 30 days. Requires the Analytics add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The Zernio SocialAccount ID for the Instagram account.
$metrics = 'metrics_example'; // string | Comma-separated list. Defaults to \"follower_count,followers_gained,followers_lost\".   - follower_count   : per-day raw follower count   - followers_gained : sum of positive daily deltas   - followers_lost   : sum of absolute negative daily deltas
$since = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start date (YYYY-MM-DD). Defaults to 30 days ago.
$until = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End date (YYYY-MM-DD). Defaults to today.
$metric_type = 'total_value'; // string | \"total_value\" returns aggregated totals (latest for follower_count, sum for gained/lost). \"time_series\" returns per-day values in the \"values\" array.

try {
    $result = $apiInstance->getInstagramFollowerHistory($account_id, $metrics, $since, $until, $metric_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getInstagramFollowerHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Zernio SocialAccount ID for the Instagram account. | |
| **metrics** | **string**| Comma-separated list. Defaults to \&quot;follower_count,followers_gained,followers_lost\&quot;.   - follower_count   : per-day raw follower count   - followers_gained : sum of positive daily deltas   - followers_lost   : sum of absolute negative daily deltas | [optional] |
| **since** | **\DateTime**| Start date (YYYY-MM-DD). Defaults to 30 days ago. | [optional] |
| **until** | **\DateTime**| End date (YYYY-MM-DD). Defaults to today. | [optional] |
| **metric_type** | **string**| \&quot;total_value\&quot; returns aggregated totals (latest for follower_count, sum for gained/lost). \&quot;time_series\&quot; returns per-day values in the \&quot;values\&quot; array. | [optional] [default to &#39;total_value&#39;] |

### Return type

[**\Zernio\Model\InstagramAccountInsightsResponse**](../Model/InstagramAccountInsightsResponse.md)

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
getLinkedInAggregateAnalytics($account_id, $aggregation, $start_date, $end_date, $metrics): \Zernio\Model\GetLinkedInAggregateAnalytics200Response
```

Get LinkedIn aggregate stats

Returns aggregate analytics across all posts for a LinkedIn personal account. Only includes posts published through Zernio (LinkedIn API limitation). Org accounts should use /v1/analytics instead. Requires r_member_postAnalytics scope. Saves (POST_SAVE) and sends (POST_SEND) are available for personal accounts; organization pages always return 0 for these two metrics because LinkedIn does not expose them on the organization analytics endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The ID of the LinkedIn personal account
$aggregation = 'TOTAL'; // string | TOTAL (default, lifetime totals) or DAILY (time series). MEMBERS_REACHED not available with DAILY.
$start_date = 2024-01-01; // \DateTime | Start date (YYYY-MM-DD). If omitted, returns lifetime analytics.
$end_date = 2024-01-31; // \DateTime | End date (YYYY-MM-DD, exclusive). Defaults to today if omitted.
$metrics = IMPRESSION,REACTION,COMMENT,POST_SAVE,POST_SEND; // string | Comma-separated metrics: IMPRESSION, MEMBERS_REACHED, REACTION, COMMENT, RESHARE, POST_SAVE, POST_SEND. Omit for all.

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
| **metrics** | **string**| Comma-separated metrics: IMPRESSION, MEMBERS_REACHED, REACTION, COMMENT, RESHARE, POST_SAVE, POST_SEND. Omit for all. | [optional] |

### Return type

[**\Zernio\Model\GetLinkedInAggregateAnalytics200Response**](../Model/GetLinkedInAggregateAnalytics200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLinkedInOrgAggregateAnalytics()`

```php
getLinkedInOrgAggregateAnalytics($account_id, $metrics, $since, $until, $metric_type): \Zernio\Model\InstagramAccountInsightsResponse
```

Get LinkedIn organization page aggregate analytics

Returns aggregate analytics for a LinkedIn organization page. Parallel to /v1/accounts/{id}/linkedin-aggregate-analytics (which handles personal accounts only). Backed by LinkedIn's organizationalEntityShareStatistics, organizationalEntityFollowerStatistics, and organizationPageStatistics endpoints.  Response shape matches /v1/analytics/instagram/account-insights. Max 89 days, defaults to last 30 days. Requires the Analytics add-on.  Scope requirements: r_organization_social, r_organization_followers, and r_organization_admin must all be present on the account. Accounts connected before these scopes were included in the OAuth flow will return 412 with a reauth hint.  Enforced by this endpoint:   - Page-view metrics accept only metricType=total_value (LinkedIn omits per-day     segmentation even when the API is called with DAY granularity, so a time-series     response would be meaningless).   - Date range capped at 89 days.  LinkedIn-side platform limits (not re-enforced here, but worth knowing for larger ranges in a future release):   - Follower stats: rolling 12-month window, end must be no later than 2 days ago.   - Share stats: rolling 12-month window.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The Zernio SocialAccount ID for the LinkedIn organization account.
$metrics = 'metrics_example'; // string | Comma-separated list. Defaults to \"impressions,clicks,engagement_rate,organic_followers_gained,followers_gained,followers_lost\".  Share statistics (support both total_value and time_series):   - impressions   - unique_impressions   - clicks   - likes   - comments   - shares   - engagement_rate       (0..1, LinkedIn-computed)  Follower-gain statistics (support total_value and time_series):   - organic_followers_gained   (per-day organic gains for time_series; sum of organic gains over the range for total_value)   - paid_followers_gained      (per-day paid gains for time_series; sum of paid gains over the range for total_value)  Page-view statistics (total_value ONLY - LinkedIn platform limit):   - page_views_total   - page_views_overview   - page_views_careers   - page_views_jobs   - page_views_life  Zernio-synthesized from daily follower snapshots:   - followers_gained   - followers_lost
$since = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start date (YYYY-MM-DD). Defaults to 30 days ago.
$until = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End date (YYYY-MM-DD). Defaults to today.
$metric_type = 'total_value'; // string

try {
    $result = $apiInstance->getLinkedInOrgAggregateAnalytics($account_id, $metrics, $since, $until, $metric_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getLinkedInOrgAggregateAnalytics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Zernio SocialAccount ID for the LinkedIn organization account. | |
| **metrics** | **string**| Comma-separated list. Defaults to \&quot;impressions,clicks,engagement_rate,organic_followers_gained,followers_gained,followers_lost\&quot;.  Share statistics (support both total_value and time_series):   - impressions   - unique_impressions   - clicks   - likes   - comments   - shares   - engagement_rate       (0..1, LinkedIn-computed)  Follower-gain statistics (support total_value and time_series):   - organic_followers_gained   (per-day organic gains for time_series; sum of organic gains over the range for total_value)   - paid_followers_gained      (per-day paid gains for time_series; sum of paid gains over the range for total_value)  Page-view statistics (total_value ONLY - LinkedIn platform limit):   - page_views_total   - page_views_overview   - page_views_careers   - page_views_jobs   - page_views_life  Zernio-synthesized from daily follower snapshots:   - followers_gained   - followers_lost | [optional] |
| **since** | **\DateTime**| Start date (YYYY-MM-DD). Defaults to 30 days ago. | [optional] |
| **until** | **\DateTime**| End date (YYYY-MM-DD). Defaults to today. | [optional] |
| **metric_type** | **string**|  | [optional] [default to &#39;total_value&#39;] |

### Return type

[**\Zernio\Model\InstagramAccountInsightsResponse**](../Model/InstagramAccountInsightsResponse.md)

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
getLinkedInPostAnalytics($account_id, $urn): \Zernio\Model\GetLinkedInPostAnalytics200Response
```

Get LinkedIn post stats

Returns analytics for a specific LinkedIn post by URN. Works for both personal and organization accounts. Saves and sends are only populated for personal accounts (LinkedIn does not expose these metrics on the organization analytics endpoint).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AnalyticsApi(
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

[**\Zernio\Model\GetLinkedInPostAnalytics200Response**](../Model/GetLinkedInPostAnalytics200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLinkedInPostReactions()`

```php
getLinkedInPostReactions($account_id, $urn, $limit, $cursor): \Zernio\Model\GetLinkedInPostReactions200Response
```

Get LinkedIn post reactions

Returns individual reactions for a specific LinkedIn post, including reactor profiles (name, headline/job title, profile picture, profile URL, reaction type). Only works for organization/company page accounts. LinkedIn restricts reaction data for personal profiles (r_member_social_feed is a closed permission).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The ID of the LinkedIn organization account
$urn = urn:li:share:7123456789012345678; // string | The LinkedIn post URN
$limit = 25; // int | Maximum number of reactions to return per page
$cursor = 'cursor_example'; // string | Offset-based pagination start index

try {
    $result = $apiInstance->getLinkedInPostReactions($account_id, $urn, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getLinkedInPostReactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The ID of the LinkedIn organization account | |
| **urn** | **string**| The LinkedIn post URN | |
| **limit** | **int**| Maximum number of reactions to return per page | [optional] [default to 25] |
| **cursor** | **string**| Offset-based pagination start index | [optional] |

### Return type

[**\Zernio\Model\GetLinkedInPostReactions200Response**](../Model/GetLinkedInPostReactions200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPostTimeline()`

```php
getPostTimeline($post_id, $from_date, $to_date): \Zernio\Model\GetPostTimeline200Response
```

Get post analytics timeline

Returns a daily timeline of analytics metrics for a specific post, showing how impressions, likes, and other metrics evolved day-by-day since publishing. Each row represents one day of data per platform. For multi-platform Zernio posts, returns separate rows for each platform. Requires the Analytics add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string | The post to fetch timeline for. Accepts an ExternalPost ID, a platformPostId, or a Zernio Post ID.
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start of date range (ISO 8601). Defaults to 90 days ago.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End of date range (ISO 8601). Defaults to now.

try {
    $result = $apiInstance->getPostTimeline($post_id, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getPostTimeline: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **string**| The post to fetch timeline for. Accepts an ExternalPost ID, a platformPostId, or a Zernio Post ID. | |
| **from_date** | **\DateTime**| Start of date range (ISO 8601). Defaults to 90 days ago. | [optional] |
| **to_date** | **\DateTime**| End of date range (ISO 8601). Defaults to now. | [optional] |

### Return type

[**\Zernio\Model\GetPostTimeline200Response**](../Model/GetPostTimeline200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPostingFrequency()`

```php
getPostingFrequency($platform, $profile_id, $source): \Zernio\Model\GetPostingFrequency200Response
```

Get frequency vs engagement

Returns the correlation between posting frequency (posts per week) and engagement rate, broken down by platform. Helps find the optimal posting cadence for each platform. Each row represents a specific (platform, posts_per_week) combination with the average engagement rate observed across all weeks matching that frequency. Requires the Analytics add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string | Filter by platform (e.g. \"instagram\", \"tiktok\"). Omit for all platforms.
$profile_id = 'profile_id_example'; // string | Filter by profile ID. Omit for all profiles.
$source = 'all'; // string | Filter by post origin. \"late\" for posts published via Zernio, \"external\" for posts imported from platforms.

try {
    $result = $apiInstance->getPostingFrequency($platform, $profile_id, $source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getPostingFrequency: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **platform** | **string**| Filter by platform (e.g. \&quot;instagram\&quot;, \&quot;tiktok\&quot;). Omit for all platforms. | [optional] |
| **profile_id** | **string**| Filter by profile ID. Omit for all profiles. | [optional] |
| **source** | **string**| Filter by post origin. \&quot;late\&quot; for posts published via Zernio, \&quot;external\&quot; for posts imported from platforms. | [optional] [default to &#39;all&#39;] |

### Return type

[**\Zernio\Model\GetPostingFrequency200Response**](../Model/GetPostingFrequency200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTikTokAccountInsights()`

```php
getTikTokAccountInsights($account_id, $metrics, $since, $until, $metric_type): \Zernio\Model\InstagramAccountInsightsResponse
```

Get TikTok account-level insights

Returns account-level TikTok insights from /v2/user/info/ (live) plus historical time series joined from Zernio's daily snapshotter (AccountStats).  Response shape matches /v1/analytics/instagram/account-insights. Max 89 days, defaults to last 30 days. Requires the Analytics add-on and the user.info.stats scope on the account (412 if missing).  Scope intentionally narrow. TikTok's public API exposes only the four counter metrics below. The deep metrics that live in TikTok Studio are NOT available on any public TikTok API, even for Business accounts:   - profile_views   - account-level impressions / reach   - follower inflow / outflow breakdown   - video watch time, average watch time, full-watched rate   - impression_sources (FYP / Following / Hashtag / Search / Personal profile)  TikTok's Research API doesn't expose those fields either, and is restricted to non-commercial academic use per TikTok's eligibility policy. There is no public API workaround. Post-level metrics (views, likes, comments, shares per video) are available via /v1/analytics?postId=... from TikTok's /v2/video/query/.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The Zernio SocialAccount ID for the TikTok account.
$metrics = 'metrics_example'; // string | Comma-separated list. Defaults to \"follower_count,likes_count,video_count,followers_gained,followers_lost\".  Live from /v2/user/info/ (requires user.info.stats scope):   - follower_count  (cumulative; time series joined from AccountStats)   - following_count (cumulative; time series joined from AccountStats.metadata)   - likes_count     (cumulative; time series joined from AccountStats.metadata)   - video_count     (cumulative; time series joined from AccountStats.metadata)  Zernio-synthesized:   - followers_gained  (sum of positive daily follower deltas)   - followers_lost    (sum of absolute negative daily deltas)
$since = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start date (YYYY-MM-DD). Defaults to 30 days ago.
$until = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End date (YYYY-MM-DD). Defaults to today.
$metric_type = 'total_value'; // string | \"total_value\" returns the latest cumulative counter value. \"time_series\" returns daily values joined from AccountStats snapshots.

try {
    $result = $apiInstance->getTikTokAccountInsights($account_id, $metrics, $since, $until, $metric_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getTikTokAccountInsights: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Zernio SocialAccount ID for the TikTok account. | |
| **metrics** | **string**| Comma-separated list. Defaults to \&quot;follower_count,likes_count,video_count,followers_gained,followers_lost\&quot;.  Live from /v2/user/info/ (requires user.info.stats scope):   - follower_count  (cumulative; time series joined from AccountStats)   - following_count (cumulative; time series joined from AccountStats.metadata)   - likes_count     (cumulative; time series joined from AccountStats.metadata)   - video_count     (cumulative; time series joined from AccountStats.metadata)  Zernio-synthesized:   - followers_gained  (sum of positive daily follower deltas)   - followers_lost    (sum of absolute negative daily deltas) | [optional] |
| **since** | **\DateTime**| Start date (YYYY-MM-DD). Defaults to 30 days ago. | [optional] |
| **until** | **\DateTime**| End date (YYYY-MM-DD). Defaults to today. | [optional] |
| **metric_type** | **string**| \&quot;total_value\&quot; returns the latest cumulative counter value. \&quot;time_series\&quot; returns daily values joined from AccountStats snapshots. | [optional] [default to &#39;total_value&#39;] |

### Return type

[**\Zernio\Model\InstagramAccountInsightsResponse**](../Model/InstagramAccountInsightsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getYouTubeChannelInsights()`

```php
getYouTubeChannelInsights($account_id, $metrics, $since, $until, $metric_type): \Zernio\Model\InstagramAccountInsightsResponse
```

Get YouTube channel-level insights

Returns channel-scoped aggregate metrics from YouTube Analytics API v2. Saves you from looping /v1/analytics/youtube/daily-views over every video when you only need channel totals.  Response shape matches /v1/analytics/instagram/account-insights so the same client handling works. Requires yt-analytics.readonly scope (412 with reauthorizeUrl if missing). Data has a 2-3 day delay (endDate is clamped accordingly). Max 89 days, defaults to last 30 days. Requires the Analytics add-on.  NOT exposed: impressions (Studio thumbnail impressions) and impressionsClickThroughRate. YouTube Analytics API v2 does not expose these for any principal type, not channel owners, not Partner Program channels, not content owners with CMS access. The only way to get them is Studio CSV export. This is a Google-side limitation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The Zernio SocialAccount ID for the YouTube account.
$metrics = 'metrics_example'; // string | Comma-separated list. Defaults to \"views,estimatedMinutesWatched,subscribersGained,subscribersLost\".  Live YouTube Analytics v2 metrics:   - views   - estimatedMinutesWatched   - averageViewDuration          (ratio - weighted mean computed across days)   - subscribersGained   - subscribersLost  Zernio-synthesized from daily follower snapshots (cross-platform parity):   - followers_gained   - followers_lost
$since = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start date (YYYY-MM-DD). Defaults to 30 days ago.
$until = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End date (YYYY-MM-DD). Defaults to today. YouTube Analytics has a 2-3 day delay, so the fetch is internally clamped to 3 days ago; any requested range extending beyond that returns zero values for the tail days. The response's dateRange.until field reflects your requested value.
$metric_type = 'total_value'; // string | \"total_value\" (default) returns aggregated totals. \"time_series\" returns per-day values in the \"values\" array.

try {
    $result = $apiInstance->getYouTubeChannelInsights($account_id, $metrics, $since, $until, $metric_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getYouTubeChannelInsights: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Zernio SocialAccount ID for the YouTube account. | |
| **metrics** | **string**| Comma-separated list. Defaults to \&quot;views,estimatedMinutesWatched,subscribersGained,subscribersLost\&quot;.  Live YouTube Analytics v2 metrics:   - views   - estimatedMinutesWatched   - averageViewDuration          (ratio - weighted mean computed across days)   - subscribersGained   - subscribersLost  Zernio-synthesized from daily follower snapshots (cross-platform parity):   - followers_gained   - followers_lost | [optional] |
| **since** | **\DateTime**| Start date (YYYY-MM-DD). Defaults to 30 days ago. | [optional] |
| **until** | **\DateTime**| End date (YYYY-MM-DD). Defaults to today. YouTube Analytics has a 2-3 day delay, so the fetch is internally clamped to 3 days ago; any requested range extending beyond that returns zero values for the tail days. The response&#39;s dateRange.until field reflects your requested value. | [optional] |
| **metric_type** | **string**| \&quot;total_value\&quot; (default) returns aggregated totals. \&quot;time_series\&quot; returns per-day values in the \&quot;values\&quot; array. | [optional] [default to &#39;total_value&#39;] |

### Return type

[**\Zernio\Model\InstagramAccountInsightsResponse**](../Model/InstagramAccountInsightsResponse.md)

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
getYouTubeDailyViews($video_id, $account_id, $start_date, $end_date): \Zernio\Model\YouTubeDailyViewsResponse
```

Get YouTube daily views

Returns daily view counts for a YouTube video including views, watch time, and subscriber changes. Requires yt-analytics.readonly scope (re-authorization may be needed). Data has a 2-3 day delay. Max 90 days, defaults to last 30 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_id = 'video_id_example'; // string | The YouTube video ID (e.g., \"dQw4w9WgXcQ\")
$account_id = 'account_id_example'; // string | The Zernio account ID for the YouTube account
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
| **account_id** | **string**| The Zernio account ID for the YouTube account | |
| **start_date** | **\DateTime**| Start date (YYYY-MM-DD). Defaults to 30 days ago. | [optional] |
| **end_date** | **\DateTime**| End date (YYYY-MM-DD). Defaults to 3 days ago (YouTube data latency). | [optional] |

### Return type

[**\Zernio\Model\YouTubeDailyViewsResponse**](../Model/YouTubeDailyViewsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getYouTubeDemographics()`

```php
getYouTubeDemographics($account_id, $breakdown, $start_date, $end_date): \Zernio\Model\YouTubeDemographicsResponse
```

Get YouTube demographics

Returns audience demographic insights for a YouTube channel, broken down by age, gender, and/or country. Age and gender values are viewer percentages (0-100). Country values are view counts. Data is based on signed-in viewers only, with a 2-3 day delay. Requires the Analytics add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The Zernio SocialAccount ID for the YouTube account
$breakdown = 'breakdown_example'; // string | Comma-separated list of demographic dimensions: age, gender, country. Defaults to all three if omitted.
$start_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start date in YYYY-MM-DD format. Defaults to 90 days ago.
$end_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End date in YYYY-MM-DD format. Defaults to 3 days ago (YouTube data latency).

try {
    $result = $apiInstance->getYouTubeDemographics($account_id, $breakdown, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getYouTubeDemographics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Zernio SocialAccount ID for the YouTube account | |
| **breakdown** | **string**| Comma-separated list of demographic dimensions: age, gender, country. Defaults to all three if omitted. | [optional] |
| **start_date** | **\DateTime**| Start date in YYYY-MM-DD format. Defaults to 90 days ago. | [optional] |
| **end_date** | **\DateTime**| End date in YYYY-MM-DD format. Defaults to 3 days ago (YouTube data latency). | [optional] |

### Return type

[**\Zernio\Model\YouTubeDemographicsResponse**](../Model/YouTubeDemographicsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
