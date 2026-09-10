# Zernio\AnalyticsApi

Post and account analytics across platforms (insights, demographics, follower history, best time to post, content decay, and aggregated metrics).

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAnalytics()**](AnalyticsApi.md#getAnalytics) | **GET** /v1/analytics | Get post analytics |
| [**getAnalyticsDelta()**](AnalyticsApi.md#getAnalyticsDelta) | **GET** /v1/analytics/delta | Analytics changed since a cursor |
| [**getBestTimeToPost()**](AnalyticsApi.md#getBestTimeToPost) | **GET** /v1/analytics/best-time | Get best times to post |
| [**getContentDecay()**](AnalyticsApi.md#getContentDecay) | **GET** /v1/analytics/content-decay | Get content performance decay |
| [**getDailyMetrics()**](AnalyticsApi.md#getDailyMetrics) | **GET** /v1/analytics/daily-metrics | Get daily aggregated metrics |
| [**getFacebookPageInsights()**](AnalyticsApi.md#getFacebookPageInsights) | **GET** /v1/analytics/facebook/page-insights | Get Facebook Page insights |
| [**getFacebookPostEarnings()**](AnalyticsApi.md#getFacebookPostEarnings) | **GET** /v1/analytics/facebook/post-earnings | Get Facebook post monetization earnings |
| [**getFacebookPostReactions()**](AnalyticsApi.md#getFacebookPostReactions) | **GET** /v1/accounts/{accountId}/facebook-post-reactions | Get Facebook post reactions |
| [**getFollowerStats()**](AnalyticsApi.md#getFollowerStats) | **GET** /v1/accounts/follower-stats | Get follower stats |
| [**getGoogleBusinessPerformance()**](AnalyticsApi.md#getGoogleBusinessPerformance) | **GET** /v1/analytics/googlebusiness/performance | Get Google Business Profile performance metrics |
| [**getGoogleBusinessSearchKeywords()**](AnalyticsApi.md#getGoogleBusinessSearchKeywords) | **GET** /v1/analytics/googlebusiness/search-keywords | Get Google Business Profile search keywords |
| [**getInstagramAccountInsights()**](AnalyticsApi.md#getInstagramAccountInsights) | **GET** /v1/analytics/instagram/account-insights | Get Instagram insights |
| [**getInstagramDemographics()**](AnalyticsApi.md#getInstagramDemographics) | **GET** /v1/analytics/instagram/demographics | Get Instagram demographics |
| [**getInstagramFollowerHistory()**](AnalyticsApi.md#getInstagramFollowerHistory) | **GET** /v1/analytics/instagram/follower-history | Get Instagram follower history |
| [**getLinkedInAggregateAnalytics()**](AnalyticsApi.md#getLinkedInAggregateAnalytics) | **GET** /v1/accounts/{accountId}/linkedin-aggregate-analytics | Get LinkedIn aggregate stats |
| [**getLinkedInOrgAggregateAnalytics()**](AnalyticsApi.md#getLinkedInOrgAggregateAnalytics) | **GET** /v1/analytics/linkedin/org-aggregate-analytics | Get LinkedIn org analytics |
| [**getLinkedInPostAnalytics()**](AnalyticsApi.md#getLinkedInPostAnalytics) | **GET** /v1/accounts/{accountId}/linkedin-post-analytics | Get LinkedIn post stats |
| [**getLinkedInPostReactions()**](AnalyticsApi.md#getLinkedInPostReactions) | **GET** /v1/accounts/{accountId}/linkedin-post-reactions | Get LinkedIn post reactions |
| [**getPostTimeline()**](AnalyticsApi.md#getPostTimeline) | **GET** /v1/analytics/post-timeline | Get post analytics timeline |
| [**getPostingFrequency()**](AnalyticsApi.md#getPostingFrequency) | **GET** /v1/analytics/posting-frequency | Get frequency vs engagement |
| [**getTikTokAccountInsights()**](AnalyticsApi.md#getTikTokAccountInsights) | **GET** /v1/analytics/tiktok/account-insights | Get TikTok account-level insights |
| [**getYouTubeChannelInsights()**](AnalyticsApi.md#getYouTubeChannelInsights) | **GET** /v1/analytics/youtube/channel-insights | Get YouTube channel insights |
| [**getYouTubeDailyViews()**](AnalyticsApi.md#getYouTubeDailyViews) | **GET** /v1/analytics/youtube/daily-views | Get YouTube daily views |
| [**getYouTubeDemographics()**](AnalyticsApi.md#getYouTubeDemographics) | **GET** /v1/analytics/youtube/demographics | Get YouTube demographics |
| [**getYouTubeVideoRetention()**](AnalyticsApi.md#getYouTubeVideoRetention) | **GET** /v1/analytics/youtube/video-retention | Get YouTube video retention curve |
| [**syncExternalPosts()**](AnalyticsApi.md#syncExternalPosts) | **POST** /v1/posts/sync-external | Sync an external post |


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
$account_id = 'account_id_example'; // string | Filter by account ID
$source = 'all'; // string | Filter by post source: late (posted via Zernio API), external (synced from platform), all (default)
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Inclusive lower bound (YYYY-MM-DD). Defaults to 90 days ago if omitted. Max range is 366 days.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Inclusive upper bound (YYYY-MM-DD). Defaults to today if omitted.
$limit = 50; // int | Page size (default 50)
$page = 1; // int | Page number (default 1)
$sort_by = 'date'; // string | Sort by date, engagement, or a specific metric. Platform-specific metrics (follows, reposts, reels_skip_rate, ig_reels_*, completion_rate, profile_views) sort a null value as 0.
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
| **account_id** | **string**| Filter by account ID | [optional] |
| **source** | **string**| Filter by post source: late (posted via Zernio API), external (synced from platform), all (default) | [optional] [default to &#39;all&#39;] |
| **from_date** | **\DateTime**| Inclusive lower bound (YYYY-MM-DD). Defaults to 90 days ago if omitted. Max range is 366 days. | [optional] |
| **to_date** | **\DateTime**| Inclusive upper bound (YYYY-MM-DD). Defaults to today if omitted. | [optional] |
| **limit** | **int**| Page size (default 50) | [optional] [default to 50] |
| **page** | **int**| Page number (default 1) | [optional] [default to 1] |
| **sort_by** | **string**| Sort by date, engagement, or a specific metric. Platform-specific metrics (follows, reposts, reels_skip_rate, ig_reels_*, completion_rate, profile_views) sort a null value as 0. | [optional] [default to &#39;date&#39;] |
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

## `getAnalyticsDelta()`

```php
getAnalyticsDelta($cursor, $limit, $platform, $profile_id): \Zernio\Model\AnalyticsDeltaResponse
```

Analytics changed since a cursor

Cursor feed of the analytics snapshots that CHANGED, across every account you can read, in one paginated stream. Built for integrations that would otherwise call `GET /v1/analytics` once per connected account. Each page carries changes from many accounts at once, so your call count scales with how much actually changed rather than with how many accounts you have. Measured against a fleet of roughly 1,600 connected accounts: about 1,599 per-account analytics calls an hour became about 205 delta calls an hour, a 7.8x reduction.  **Bootstrap once, then stay in sync.** Take the cursor FIRST: call this endpoint with NO `cursor` and it answers with an empty `data` array plus the feed's current position in `nextCursor`. Then load your baseline from `GET /v1/analytics`, the historical endpoint, because this one is a rolling 7-day change log and cannot replay history. Then resume from the cursor you took before the baseline. Taking the cursor afterwards instead drops every change that lands while the baseline is loading: it is in neither the row you already read nor the feed you resume behind it. The overlap this order creates is safe, because metrics are absolute values rather than increments, so draining it leaves every post on its newest value. `nextCursor` is present on every response, empty pages included, so you always have something to advance with.  **Ordering.** Entries come back oldest first, in the order the feed received them. That order is NOT `syncedAt`: `syncedAt` is stamped when an account's sync cycle started, and a slow cycle writes its rows after a faster cycle that started later, so `syncedAt` can go backwards between consecutive entries. Do not sort, filter or resume on it. The cursor is the only stable position, and it is opaque: pass it back verbatim, and do not parse, construct or compare cursors.  **`hasMore: false` does not mean the feed ended.** This stream has no end and `nextCursor` is never null. `hasMore: true` means more changes are already waiting, so call again straight away. `hasMore: false` means you are caught up: keep the cursor and poll again on your normal interval.  **The newest changes settle before they are served.** The feed deliberately holds back its last few seconds of writes, so that a row can never become visible behind a cursor you have already advanced past. A read issued the instant an `analytics.synced` webhook lands will therefore often return an empty page for that account. Do not read an empty page as \"nothing changed\": poll again with the SAME cursor you last used rather than advancing.  **Repeats inside one instant.** A sync cycle occasionally records the same post twice at the same feed position. When that happens the feed delivers one of those rows, not both. Measured over a day of production traffic, about 1.3% of rows fall in such a group and 99.4% of those groups are identical rows, so this is far more often deduplication than loss. Metrics are absolute values rather than increments, so a later entry for the same post supersedes an earlier one.  **Retention is 7 days.** Changes older than that leave the feed. A cursor older than 6 days is rejected with a `400` (a day of margin, because expiry is lazy). Recover the same way you bootstrapped: take a fresh cursor from a call to this endpoint with no `cursor`, then re-load from `GET /v1/analytics`, then resume from that cursor. A consumer that polls at least daily never reaches this.  Pairs with the `analytics.synced` webhook, so changes can be read on notification instead of on a timer. That event carries no cursor of its own: keep using the `nextCursor` this endpoint gave you.  Requires the same analytics access as `GET /v1/analytics`, and shares the stricter per-second rate-limit window applied to analytics endpoints.

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
$cursor = v1.WyIyMDI2LTA5LTAxIDE3OjEyOjA0IiwiNjVmMWMwYTllMmI1YWYwMDEyYWIzNGNkIl0; // string | Opaque cursor from a previous response's `nextCursor`. Omit it to start from now: the response is then an empty page carrying the feed's current position. Rejected with a `400` when malformed, or when older than the retention window.
$limit = 50; // int | Page size. Out-of-range values are a 400, never a silent clamp.
$platform = 'platform_example'; // string | Filter to a single platform (for example \"youtube\"). Omit for every platform.
$profile_id = 'all'; // string | Filter by profile ID (default \"all\"). Must be a valid profile ID or \"all\".

try {
    $result = $apiInstance->getAnalyticsDelta($cursor, $limit, $platform, $profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticsDelta: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cursor** | **string**| Opaque cursor from a previous response&#39;s &#x60;nextCursor&#x60;. Omit it to start from now: the response is then an empty page carrying the feed&#39;s current position. Rejected with a &#x60;400&#x60; when malformed, or when older than the retention window. | [optional] |
| **limit** | **int**| Page size. Out-of-range values are a 400, never a silent clamp. | [optional] [default to 50] |
| **platform** | **string**| Filter to a single platform (for example \&quot;youtube\&quot;). Omit for every platform. | [optional] |
| **profile_id** | **string**| Filter by profile ID (default \&quot;all\&quot;). Must be a valid profile ID or \&quot;all\&quot;. | [optional] [default to &#39;all&#39;] |

### Return type

[**\Zernio\Model\AnalyticsDeltaResponse**](../Model/AnalyticsDeltaResponse.md)

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
getBestTimeToPost($platform, $profile_id, $account_id, $source): \Zernio\Model\GetBestTimeToPost200Response
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
$account_id = 'account_id_example'; // string | Filter by account ID. Omit for all accounts.
$source = 'all'; // string | Filter by post origin. \"late\" for posts published via Zernio, \"external\" for posts imported from platforms.

try {
    $result = $apiInstance->getBestTimeToPost($platform, $profile_id, $account_id, $source);
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
| **account_id** | **string**| Filter by account ID. Omit for all accounts. | [optional] |
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
getContentDecay($platform, $profile_id, $account_id, $source): \Zernio\Model\GetContentDecay200Response
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
$account_id = 'account_id_example'; // string | Filter by account ID. Omit for all accounts.
$source = 'all'; // string | Filter by post origin. \"late\" for posts published via Zernio, \"external\" for posts imported from platforms.

try {
    $result = $apiInstance->getContentDecay($platform, $profile_id, $account_id, $source);
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
| **account_id** | **string**| Filter by account ID. Omit for all accounts. | [optional] |
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
getDailyMetrics($platform, $profile_id, $account_id, $from_date, $to_date, $source, $attribution): \Zernio\Model\GetDailyMetrics200Response
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
$account_id = 'account_id_example'; // string | Filter by account ID
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Inclusive start date (ISO 8601). Defaults to 180 days ago.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Inclusive end date (ISO 8601). Defaults to now.
$source = 'all'; // string | Filter by post origin. \"late\" for posts published via Zernio, \"external\" for posts imported from platforms.
$attribution = 'publish'; // string | How each post's engagement is attributed to a day. \"publish\" (default) sums each post's lifetime total on its publish date. \"received\" buckets the per-day increase in engagement by the day it actually arrived (engagement-over-time), so engagement on older posts appears on the day it was gained rather than the post's publish date.

try {
    $result = $apiInstance->getDailyMetrics($platform, $profile_id, $account_id, $from_date, $to_date, $source, $attribution);
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
| **account_id** | **string**| Filter by account ID | [optional] |
| **from_date** | **\DateTime**| Inclusive start date (ISO 8601). Defaults to 180 days ago. | [optional] |
| **to_date** | **\DateTime**| Inclusive end date (ISO 8601). Defaults to now. | [optional] |
| **source** | **string**| Filter by post origin. \&quot;late\&quot; for posts published via Zernio, \&quot;external\&quot; for posts imported from platforms. | [optional] [default to &#39;all&#39;] |
| **attribution** | **string**| How each post&#39;s engagement is attributed to a day. \&quot;publish\&quot; (default) sums each post&#39;s lifetime total on its publish date. \&quot;received\&quot; buckets the per-day increase in engagement by the day it actually arrived (engagement-over-time), so engagement on older posts appears on the day it was gained rather than the post&#39;s publish date. | [optional] [default to &#39;publish&#39;] |

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
$metrics = 'metrics_example'; // string | Comma-separated list of metrics. Defaults to \"page_media_view,page_post_engagements,page_follows,followers_gained,followers_lost\".  Live Meta metrics (current names, post-Nov-2025):   - page_media_view       (replaces deprecated page_impressions)   - page_views_total   - page_post_engagements   - page_video_views   - page_video_view_time   - page_follows          (replaces deprecated page_fans)  Zernio-synthesized from daily follower snapshots (filling the Nov-2025 gap left by the page_fan_adds / page_fan_removes deprecation):   - followers_gained   - followers_lost  Monetization (opt-in, not in the defaults):   - content_monetization_earnings   - monetization_approximate_earnings  Each monetization metric is fetched with its own separate Graph call, so requesting both adds two calls. Values are approximate and Meta restates them after the fact.  content_monetization_earnings returns an object per day and always carries unit \"micro_amount\" plus an ISO 4217 \"currency\". monetization_approximate_earnings returns a bare number per day, so its unit is always \"unspecified\" and its \"currency\" is always null. The two are on different scales and are not comparable to each other. Both keep their daily \"values\" on every metricType and are never rescaled by Zernio.  Earnings here are Page-level daily buckets and \"total\" is their sum. Meta does not document whether a bucket carries that day's earnings or a running total, and every Page measured so far earned exactly 0, so reconcile \"total\" against the Page's own Meta export before relying on it; the daily \"values\" are always returned for that purpose. Per-post lifetime earnings are served by GET /v1/analytics/facebook/post-earnings.  A Page that is not enrolled in monetization, or that earned nothing, returns normal daily buckets of 0 in \"metrics\": Meta does not distinguish the two, so a 0 total here does NOT mean the Page is enrolled. \"unavailableMetrics\" covers the narrower case where Meta returned no bucket for the metric at all (\"no_data\") or rejected the request outright, and the metric is then omitted from \"metrics\" rather than reported as 0.
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
| **metrics** | **string**| Comma-separated list of metrics. Defaults to \&quot;page_media_view,page_post_engagements,page_follows,followers_gained,followers_lost\&quot;.  Live Meta metrics (current names, post-Nov-2025):   - page_media_view       (replaces deprecated page_impressions)   - page_views_total   - page_post_engagements   - page_video_views   - page_video_view_time   - page_follows          (replaces deprecated page_fans)  Zernio-synthesized from daily follower snapshots (filling the Nov-2025 gap left by the page_fan_adds / page_fan_removes deprecation):   - followers_gained   - followers_lost  Monetization (opt-in, not in the defaults):   - content_monetization_earnings   - monetization_approximate_earnings  Each monetization metric is fetched with its own separate Graph call, so requesting both adds two calls. Values are approximate and Meta restates them after the fact.  content_monetization_earnings returns an object per day and always carries unit \&quot;micro_amount\&quot; plus an ISO 4217 \&quot;currency\&quot;. monetization_approximate_earnings returns a bare number per day, so its unit is always \&quot;unspecified\&quot; and its \&quot;currency\&quot; is always null. The two are on different scales and are not comparable to each other. Both keep their daily \&quot;values\&quot; on every metricType and are never rescaled by Zernio.  Earnings here are Page-level daily buckets and \&quot;total\&quot; is their sum. Meta does not document whether a bucket carries that day&#39;s earnings or a running total, and every Page measured so far earned exactly 0, so reconcile \&quot;total\&quot; against the Page&#39;s own Meta export before relying on it; the daily \&quot;values\&quot; are always returned for that purpose. Per-post lifetime earnings are served by GET /v1/analytics/facebook/post-earnings.  A Page that is not enrolled in monetization, or that earned nothing, returns normal daily buckets of 0 in \&quot;metrics\&quot;: Meta does not distinguish the two, so a 0 total here does NOT mean the Page is enrolled. \&quot;unavailableMetrics\&quot; covers the narrower case where Meta returned no bucket for the metric at all (\&quot;no_data\&quot;) or rejected the request outright, and the metric is then omitted from \&quot;metrics\&quot; rather than reported as 0. | [optional] |
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

## `getFacebookPostEarnings()`

```php
getFacebookPostEarnings($account_id, $post_id, $metrics): \Zernio\Model\FacebookPostEarningsResponse
```

Get Facebook post monetization earnings

Returns lifetime monetization earnings for ONE Facebook post, read live from Meta on every request. Requires the Analytics add-on.  Earnings are CUMULATIVE since the post was published, not earnings within a date range, so this endpoint takes no since/until and the totals must not be summed across dates or across posts. Page-level daily earnings live on /v1/analytics/facebook/page-insights.  A post on a Page that is not enrolled in monetization, or that earned nothing, returns \"total\": 0 rather than an error: Meta does not distinguish the two. A metric Meta returned no bucket for at all is reported in \"unavailableMetrics\" and omitted from \"metrics\", never as a 0.  Amounts are the platform's raw numbers in the stated \"unit\" and are never rescaled by Zernio. Breakdown dimensions are not exposed and a \"breakdown\" param is rejected with 400. So are \"since\", \"until\", \"period\", and \"metricType\": scoping this endpoint to a window is not possible, and silently returning the lifetime total for one would let a caller sum a year of weekly requests into a figure ~52x the post's real earnings.

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
$post_id = 'post_id_example'; // string | The platform post ID, exactly as returned in platformAnalytics[].platformPostId by /v1/analytics: \"{pageId}_{postId}\", or the bare video ID for Reels.
$metrics = 'metrics_example'; // string | Comma-separated list of monetization metrics. Defaults to both:   - content_monetization_earnings   - monetization_approximate_earnings  content_monetization_earnings always carries unit \"micro_amount\" plus an ISO 4217 \"currency\". monetization_approximate_earnings is always a bare number, so its unit is \"unspecified\" and its \"currency\" is null. The two are on different scales and are not comparable to each other. Any other metric name is rejected with 400.

try {
    $result = $apiInstance->getFacebookPostEarnings($account_id, $post_id, $metrics);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getFacebookPostEarnings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Zernio SocialAccount ID for the connected Facebook Page. | |
| **post_id** | **string**| The platform post ID, exactly as returned in platformAnalytics[].platformPostId by /v1/analytics: \&quot;{pageId}_{postId}\&quot;, or the bare video ID for Reels. | |
| **metrics** | **string**| Comma-separated list of monetization metrics. Defaults to both:   - content_monetization_earnings   - monetization_approximate_earnings  content_monetization_earnings always carries unit \&quot;micro_amount\&quot; plus an ISO 4217 \&quot;currency\&quot;. monetization_approximate_earnings is always a bare number, so its unit is \&quot;unspecified\&quot; and its \&quot;currency\&quot; is null. The two are on different scales and are not comparable to each other. Any other metric name is rejected with 400. | [optional] |

### Return type

[**\Zernio\Model\FacebookPostEarningsResponse**](../Model/FacebookPostEarningsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFacebookPostReactions()`

```php
getFacebookPostReactions($account_id, $post_id): \Zernio\Model\GetFacebookPostReactions200Response
```

Get Facebook post reactions

Returns the reaction breakdown for a Facebook Page post: a count per reaction type plus the overall total.  The whole breakdown is fetched in a single Graph call. The post analytics endpoint reports only an aggregate reaction count (surfaced there as `likes`), so use this endpoint when you need per-type counts.

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
$account_id = 'account_id_example'; // string | The ID of the Facebook Page account
$post_id = 1234567890_9876543210; // string | The Facebook post ID

try {
    $result = $apiInstance->getFacebookPostReactions($account_id, $post_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getFacebookPostReactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The ID of the Facebook Page account | |
| **post_id** | **string**| The Facebook post ID | |

### Return type

[**\Zernio\Model\GetFacebookPostReactions200Response**](../Model/GetFacebookPostReactions200Response.md)

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
getFollowerStats($account_ids, $profile_id, $from_date, $to_date, $granularity): \Zernio\Model\FollowerStatsResponse
```

Get follower stats

Returns follower count history and growth metrics for connected accounts. Requires analytics add-on subscription. Follower counts are refreshed once per day.

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

[**\Zernio\Model\FollowerStatsResponse**](../Model/FollowerStatsResponse.md)

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

Get Google Business Profile performance metrics

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

Get Google Business Profile search keywords

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

Get LinkedIn org analytics

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
$cursor = 0; // int | Offset-based pagination start index

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
| **cursor** | **int**| Offset-based pagination start index | [optional] [default to 0] |

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
getPostingFrequency($platform, $profile_id, $account_id, $source): \Zernio\Model\GetPostingFrequency200Response
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
$account_id = 'account_id_example'; // string | Filter by account ID. Omit for all accounts.
$source = 'all'; // string | Filter by post origin. \"late\" for posts published via Zernio, \"external\" for posts imported from platforms.

try {
    $result = $apiInstance->getPostingFrequency($platform, $profile_id, $account_id, $source);
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
| **account_id** | **string**| Filter by account ID. Omit for all accounts. | [optional] |
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

Get YouTube channel insights

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

Returns daily view counts for a YouTube video including views, watch time, and subscriber changes. Requires yt-analytics.readonly scope (re-authorization may be needed). YouTube finalizes analytics with a ~3-day delay; by default only finalized days are returned, and an explicit endDate can reach into the delay window (see the endDate parameter). Max 90 days, defaults to last 30 days.

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
$end_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End date (YYYY-MM-DD). Defaults to 3 days ago, the newest fully finalized day (YouTube finalizes analytics with a ~3-day delay). An explicit endDate is honored up to today: days inside the delay window are provisional and may still be revised by YouTube (see provisionalSince in the response), and days YouTube has not processed yet are omitted from dailyViews.

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
| **end_date** | **\DateTime**| End date (YYYY-MM-DD). Defaults to 3 days ago, the newest fully finalized day (YouTube finalizes analytics with a ~3-day delay). An explicit endDate is honored up to today: days inside the delay window are provisional and may still be revised by YouTube (see provisionalSince in the response), and days YouTube has not processed yet are omitted from dailyViews. | [optional] |

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
getYouTubeDemographics($account_id, $video_id, $breakdown, $start_date, $end_date): \Zernio\Model\YouTubeDemographicsResponse
```

Get YouTube demographics

Returns audience demographic insights for a YouTube channel, broken down by age, gender, and/or country. Pass videoId to get the audience profile of a single video instead of the whole channel. Age and gender values are viewer percentages (0-100). Country values are view counts. Data is based on signed-in viewers only, with a 2-3 day delay. YouTube suppresses demographics for videos with too few signed-in views, so low-traffic videos can return empty breakdowns. Requires the Analytics add-on.

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
$video_id = 'video_id_example'; // string | YouTube video ID. When provided, demographics are scoped to this single video (must belong to the connected channel; otherwise 404 video_not_found).
$breakdown = 'breakdown_example'; // string | Comma-separated list of demographic dimensions: age, gender, country. Defaults to all three if omitted.
$start_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start date in YYYY-MM-DD format. Defaults to 90 days ago, or to the video's publish date (lifetime) when videoId is provided.
$end_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End date (YYYY-MM-DD). Defaults to 3 days ago, the newest fully finalized day (YouTube finalizes analytics with a ~3-day delay). An explicit endDate is honored up to today: days inside the delay window are provisional and may still be revised by YouTube (see provisionalSince in the response).

try {
    $result = $apiInstance->getYouTubeDemographics($account_id, $video_id, $breakdown, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getYouTubeDemographics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Zernio SocialAccount ID for the YouTube account | |
| **video_id** | **string**| YouTube video ID. When provided, demographics are scoped to this single video (must belong to the connected channel; otherwise 404 video_not_found). | [optional] |
| **breakdown** | **string**| Comma-separated list of demographic dimensions: age, gender, country. Defaults to all three if omitted. | [optional] |
| **start_date** | **\DateTime**| Start date in YYYY-MM-DD format. Defaults to 90 days ago, or to the video&#39;s publish date (lifetime) when videoId is provided. | [optional] |
| **end_date** | **\DateTime**| End date (YYYY-MM-DD). Defaults to 3 days ago, the newest fully finalized day (YouTube finalizes analytics with a ~3-day delay). An explicit endDate is honored up to today: days inside the delay window are provisional and may still be revised by YouTube (see provisionalSince in the response). | [optional] |

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

## `getYouTubeVideoRetention()`

```php
getYouTubeVideoRetention($video_id, $account_id, $start_date, $end_date): \Zernio\Model\YouTubeVideoRetentionResponse
```

Get YouTube video retention curve

Returns the audience retention curve for a single YouTube video, plus the video's duration for rendering the curve on a time axis. The curve has up to 100 points (elapsedVideoTimeRatio 0.01-1.0) aggregated over the whole date range; YouTube does not support per-day retention breakdowns.  audienceWatchRatio is the absolute share of viewers watching at that point in the video and can exceed 1 (rewinds and looping, common on Shorts). relativeRetentionPerformance compares against videos of similar length (0 = worst, 0.5 = median, 1 = best). YouTube returns an empty curve for videos with very few views or before analytics processing completes (2-3 day delay).  Requires yt-analytics.readonly scope (re-authorization may be needed).

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
$start_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start date (YYYY-MM-DD). Defaults to the video's publish date (lifetime curve).
$end_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End date (YYYY-MM-DD). Defaults to 3 days ago, the newest fully finalized day (YouTube finalizes analytics with a ~3-day delay). An explicit endDate is honored up to today: days inside the delay window are provisional and may still be revised by YouTube (see provisionalSince in the response).

try {
    $result = $apiInstance->getYouTubeVideoRetention($video_id, $account_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getYouTubeVideoRetention: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **video_id** | **string**| The YouTube video ID (e.g., \&quot;dQw4w9WgXcQ\&quot;) | |
| **account_id** | **string**| The Zernio account ID for the YouTube account | |
| **start_date** | **\DateTime**| Start date (YYYY-MM-DD). Defaults to the video&#39;s publish date (lifetime curve). | [optional] |
| **end_date** | **\DateTime**| End date (YYYY-MM-DD). Defaults to 3 days ago, the newest fully finalized day (YouTube finalizes analytics with a ~3-day delay). An explicit endDate is honored up to today: days inside the delay window are provisional and may still be revised by YouTube (see provisionalSince in the response). | [optional] |

### Return type

[**\Zernio\Model\YouTubeVideoRetentionResponse**](../Model/YouTubeVideoRetentionResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `syncExternalPosts()`

```php
syncExternalPosts($sync_external_posts_request): \Zernio\Model\SyncExternalPosts200Response
```

Sync an external post

Fetch an account's latest external posts (published directly on the platform, not through Zernio) on demand, so a newly published post is retrievable within seconds instead of waiting for the background sync (which refreshes each account at most every ~90 minutes).  Primary use case: verifying a submitted post. When a user publishes on the platform and immediately pastes the post URL into your app, call this with `accountId` plus `url` (or `postId`) to confirm the post exists and return its metadata.  Behavior: - Account access and connection state are checked before any platform call, including requests inside the debounce window. - Inactive accounts or accounts marked `needsReconnection` return `409` with code `ads_connection_required`. Stop scheduled retries for that account until it is reconnected, then read `GET /v1/accounts` for its current account ID. - For connected accounts, we fetch the latest posts live from the platform, then match and return the submitted post. - Requests are debounced per account (~15s): if the account was synced inside that window, the live fetch is skipped.  `accountId` is required, because a post URL or id alone cannot be resolved to an account, and the account must be connected to Zernio (we use its token to read the platform). Supported for every platform with a listing API (Instagram, Facebook, TikTok, YouTube, X, Threads, Pinterest, Reddit, Bluesky, Google Business Profile, and LinkedIn organization accounts).  LinkedIn personal profiles: LinkedIn has no listing API for personal profiles, so a `url` is REQUIRED and imports that single post. Pass any LinkedIn post URL (`linkedin.com/posts/…`, `linkedin.com/feed/update/urn:li:activity:…`) or a `urn:li:share:…` / `urn:li:ugcPost:…` URN. Works for posts published outside Zernio and before the account was connected, any age; the post must be authored by the connected member. Imported posts return full analytics (impressions, reach, reactions, comments, reshares, saves) and keep refreshing on the background analytics cycle, but carry no content/media (LinkedIn does not expose them for personal profiles).  `url` accepts any format the platform uses (e.g. `instagram.com/p/…`, `instagram.com/reel/…`, `youtu.be/…`, `youtube.com/shorts/…`, `tiktok.com/@user/video/…`, `vm.tiktok.com` short links, `pinterest.com/pin/…` on any regional domain, and `pin.it` short links). Pass `postId` (the platform media/video/pin id) as an alternative locator.  Note: post-level analytics (reach, impressions) still carry the platform's own delay (e.g. ~24h on Instagram). This endpoint confirms the post exists and returns its metadata plus basic engagement (likes, comments), not delayed insights.

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
$sync_external_posts_request = new \Zernio\Model\SyncExternalPostsRequest(); // \Zernio\Model\SyncExternalPostsRequest

try {
    $result = $apiInstance->syncExternalPosts($sync_external_posts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->syncExternalPosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sync_external_posts_request** | [**\Zernio\Model\SyncExternalPostsRequest**](../Model/SyncExternalPostsRequest.md)|  | |

### Return type

[**\Zernio\Model\SyncExternalPosts200Response**](../Model/SyncExternalPosts200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
