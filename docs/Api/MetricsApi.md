# Zernio\MetricsApi

One endpoint per entity (posts, accounts, insights, inbox, ads, campaigns and ad accounts) to read metrics with the same parameters: a scope, a date window, metrics, granularity and groupBy. &#x60;GET /v1/metrics/catalog&#x60; lists what each entity accepts.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAccountMetrics()**](MetricsApi.md#getAccountMetrics) | **GET** /v1/metrics/accounts | Read follower and post totals per account, platform or scope over time |
| [**getAdAccountMetrics()**](MetricsApi.md#getAdAccountMetrics) | **GET** /v1/metrics/ad-accounts | Read the uploaded results summed across ad accounts |
| [**getAdMetrics()**](MetricsApi.md#getAdMetrics) | **GET** /v1/metrics/ads | Read ad metrics by id, or one ad day by day with breakdowns |
| [**getAdSetMetrics()**](MetricsApi.md#getAdSetMetrics) | **GET** /v1/metrics/ad-sets | Read the delivery metrics of ad sets over a window |
| [**getCampaignMetrics()**](MetricsApi.md#getCampaignMetrics) | **GET** /v1/metrics/campaigns | Read the delivery metrics or the uploaded results of each campaign over a window |
| [**getInboxMetrics()**](MetricsApi.md#getInboxMetrics) | **GET** /v1/metrics/inbox | Read message volume and response times |
| [**getInsightMetrics()**](MetricsApi.md#getInsightMetrics) | **GET** /v1/metrics/insights | Read live account or post insights from the platform |
| [**getMetricsCatalog()**](MetricsApi.md#getMetricsCatalog) | **GET** /v1/metrics/catalog | List the metrics, groupings and limits of each metrics endpoint |
| [**getPostMetrics()**](MetricsApi.md#getPostMetrics) | **GET** /v1/metrics/posts | Read post metrics by id, day by day, as a list, or grouped |
| [**queryGoogleAds()**](MetricsApi.md#queryGoogleAds) | **POST** /v1/metrics/platform-queries/google-ads | Run a Google Ads Query Language search on one customer |
| [**queryGoogleAnalytics()**](MetricsApi.md#queryGoogleAnalytics) | **POST** /v1/metrics/platform-queries/google-analytics | Run a GA4 standard or realtime report on one property |
| [**queryMetaAds()**](MetricsApi.md#queryMetaAds) | **POST** /v1/metrics/platform-queries/meta-ads | Run a Meta Marketing API insights query on one ad account |
| [**queryTikTokAds()**](MetricsApi.md#queryTikTokAds) | **POST** /v1/metrics/platform-queries/tiktok-ads | Run a TikTok Marketing API report on one advertiser |


## `getAccountMetrics()`

```php
getAccountMetrics($account_id, $profile_id, $metrics, $group_by, $from_date, $to_date, $platform, $granularity, $attribution, $limit, $cursor): \Zernio\Model\AccountMetricsResponse
```

Read follower and post totals per account, platform or scope over time

Reads followers, the account counters the platform reports (media count, video count...) and the totals of the posts each account published, per account, per platform or for the whole scope, for the whole window or by day, week or month.  - Scope: exactly one of `accountId` (up to 25) or `profileId` (one, with an optional `platform`). - `groupBy`: `account` (the default, one row per account and period), `platform` or `none`. - `granularity`: `total` (the default), `day`, `week` (rows start on Monday) or `month`. A row's `date` is the start of its period, never before `fromDate`. - `attribution`: `publish` (the default) counts each post on the day it was published; `received` counts each interaction on the day it arrived, for windows up to 92 days. - `granularity=week&groupBy=platform&metrics=postCount,engagementRate`: how many posts each platform got per week and their pooled engagement rate. The newer way to read `GET /v1/analytics/posting-frequency`.  Without `fromDate` and `toDate` it reads the last 90 days; the window is at most 366 days. Followers are one value per day, taken at 02:00 UTC. `GET /v1/metrics/catalog?entity=accounts` lists every metric with the platforms that report it.  Each team has an analytics compute budget of 24 seconds per 30-second window across these reads: a request that would pass it is refused with 429 `details.scope: team_budget` before it runs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Comma-separated account ids, up to 25.
$profile_id = 'profile_id_example'; // string | One profile id.
$metrics = 'metrics_example'; // string | Comma-separated metric names from the catalog. Defaults to every metric.
$group_by = 'group_by_example'; // string | Comma-separated groupings from the catalog, at most 2.
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | First day, inclusive (YYYY-MM-DD, UTC).
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Last day, inclusive (YYYY-MM-DD, UTC).
$platform = 'platform_example'; // string | Only with profileId.
$granularity = 'total'; // string
$attribution = 'publish'; // string
$limit = 50; // int | Rows per page, 50 by default, 100 at most.
$cursor = 'cursor_example'; // string | pagination.nextCursor of the previous page, sent with the same query.

try {
    $result = $apiInstance->getAccountMetrics($account_id, $profile_id, $metrics, $group_by, $from_date, $to_date, $platform, $granularity, $attribution, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->getAccountMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Comma-separated account ids, up to 25. | [optional] |
| **profile_id** | **string**| One profile id. | [optional] |
| **metrics** | **string**| Comma-separated metric names from the catalog. Defaults to every metric. | [optional] |
| **group_by** | **string**| Comma-separated groupings from the catalog, at most 2. | [optional] |
| **from_date** | **\DateTime**| First day, inclusive (YYYY-MM-DD, UTC). | [optional] |
| **to_date** | **\DateTime**| Last day, inclusive (YYYY-MM-DD, UTC). | [optional] |
| **platform** | **string**| Only with profileId. | [optional] |
| **granularity** | **string**|  | [optional] [default to &#39;total&#39;] |
| **attribution** | **string**|  | [optional] [default to &#39;publish&#39;] |
| **limit** | **int**| Rows per page, 50 by default, 100 at most. | [optional] [default to 50] |
| **cursor** | **string**| pagination.nextCursor of the previous page, sent with the same query. | [optional] |

### Return type

[**\Zernio\Model\AccountMetricsResponse**](../Model/AccountMetricsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdAccountMetrics()`

```php
getAdAccountMetrics($from_date, $to_date, $ad_account_id): \Zernio\Model\AdAccountMetricsResponse
```

Read the uploaded results summed across ad accounts

Sums each result metric you uploaded across ad accounts (every ad account the key can read, or the platform ids in `adAccountId`) over `fromDate` to `toDate` (both required, at most 400 days), with the same metrics as `GET /v1/metrics/campaigns`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | First day, inclusive.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Last day, inclusive. The range is at most 400 days.
$ad_account_id = 'ad_account_id_example'; // string | Comma-separated platform ad account ids. Defaults to every ad account the key sees.

try {
    $result = $apiInstance->getAdAccountMetrics($from_date, $to_date, $ad_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->getAdAccountMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from_date** | **\DateTime**| First day, inclusive. | |
| **to_date** | **\DateTime**| Last day, inclusive. The range is at most 400 days. | |
| **ad_account_id** | **string**| Comma-separated platform ad account ids. Defaults to every ad account the key sees. | [optional] |

### Return type

[**\Zernio\Model\AdAccountMetricsResponse**](../Model/AdAccountMetricsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdMetrics()`

```php
getAdMetrics($ad_id, $granularity, $from_date, $to_date, $breakdowns, $attribution_windows): \Zernio\Model\AdMetricsResponse
```

Read ad metrics by id, or one ad day by day with breakdowns

Reads the delivery and conversion metrics Zernio synced from the ad networks for up to 100 Zernio ad ids (`adId`, as `GET /v1/ads` returns them). Ids you cannot read come back in `meta.missingIds`.  - `granularity=day` with one ad: one point per day. - `breakdowns` with one ad: read live from the network (age, gender, country, placement...), with `attributionWindows` for Meta.  Without `fromDate` and `toDate` it reads the last 90 days; the window is at most 730 days. `meta.backfillPending` is true while older days are still being fetched. Money is in the ad account currency (`currency`). `GET /v1/metrics/catalog?entity=ads` lists every metric with the networks that report it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_id = 'ad_id_example'; // string | Comma-separated Zernio ad ids, up to 100.
$granularity = 'total'; // string | day reads one ad, one point per day.
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Without fromDate and toDate, the last 90 days.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Last day, inclusive (YYYY-MM-DD, UTC).
$breakdowns = 'breakdowns_example'; // string | Comma-separated breakdowns, read live from the platform. One ad only.
$attribution_windows = 'attribution_windows_example'; // string | Meta attribution windows for the breakdowns, comma-separated.

try {
    $result = $apiInstance->getAdMetrics($ad_id, $granularity, $from_date, $to_date, $breakdowns, $attribution_windows);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->getAdMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**| Comma-separated Zernio ad ids, up to 100. | |
| **granularity** | **string**| day reads one ad, one point per day. | [optional] [default to &#39;total&#39;] |
| **from_date** | **\DateTime**| Without fromDate and toDate, the last 90 days. | [optional] |
| **to_date** | **\DateTime**| Last day, inclusive (YYYY-MM-DD, UTC). | [optional] |
| **breakdowns** | **string**| Comma-separated breakdowns, read live from the platform. One ad only. | [optional] |
| **attribution_windows** | **string**| Meta attribution windows for the breakdowns, comma-separated. | [optional] |

### Return type

[**\Zernio\Model\AdMetricsResponse**](../Model/AdMetricsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdSetMetrics()`

```php
getAdSetMetrics($from_date, $to_date, $metrics, $limit, $cursor, $ad_set_id, $campaign_id, $granularity): \Zernio\Model\AdSetMetricsResponse
```

Read the delivery metrics of ad sets over a window

Sums the delivery metrics of every ad of each ad set from the stored daily rows, over `fromDate` to `toDate` (both required, at most 400 days). Send the ad sets by id with `adSetId` (up to 100), or one `campaignId` for its ad sets, paged with `cursor`.  Each ad set comes with its `campaignId` and the `currency` of its ad account, and `granularity=day` adds one point per day. A query reads at most 9,200 ad set days (100 ad sets for 92 days, 23 for 400) and answers 422 `query_too_large` beyond that.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | First day, inclusive.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Last day, inclusive. The range is at most 400 days.
$metrics = 'metrics_example'; // string | Comma-separated delivery metrics, as GET /v1/metrics/catalog?entity=ad-sets lists them (spend, impressions, reach, clicks, ctr, cpc, cpm, conversions, roas...).
$limit = 50; // int | With campaignId, ad sets per page, 50 by default, 100 at most.
$cursor = 'cursor_example'; // string | With campaignId, pagination.nextCursor of the previous page, sent with the same query.
$ad_set_id = 'ad_set_id_example'; // string | Comma-separated platform ad set ids, up to 100. Send adSetId or campaignId.
$campaign_id = 'campaign_id_example'; // string | One platform campaign id, for its ad sets. Send adSetId or campaignId.
$granularity = 'total'; // string | day adds one point per day to each ad set.

try {
    $result = $apiInstance->getAdSetMetrics($from_date, $to_date, $metrics, $limit, $cursor, $ad_set_id, $campaign_id, $granularity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->getAdSetMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from_date** | **\DateTime**| First day, inclusive. | |
| **to_date** | **\DateTime**| Last day, inclusive. The range is at most 400 days. | |
| **metrics** | **string**| Comma-separated delivery metrics, as GET /v1/metrics/catalog?entity&#x3D;ad-sets lists them (spend, impressions, reach, clicks, ctr, cpc, cpm, conversions, roas...). | |
| **limit** | **int**| With campaignId, ad sets per page, 50 by default, 100 at most. | [optional] [default to 50] |
| **cursor** | **string**| With campaignId, pagination.nextCursor of the previous page, sent with the same query. | [optional] |
| **ad_set_id** | **string**| Comma-separated platform ad set ids, up to 100. Send adSetId or campaignId. | [optional] |
| **campaign_id** | **string**| One platform campaign id, for its ad sets. Send adSetId or campaignId. | [optional] |
| **granularity** | **string**| day adds one point per day to each ad set. | [optional] [default to &#39;total&#39;] |

### Return type

[**\Zernio\Model\AdSetMetricsResponse**](../Model/AdSetMetricsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignMetrics()`

```php
getCampaignMetrics($from_date, $to_date, $limit, $cursor, $campaign_id, $metrics, $granularity): \Zernio\Model\CampaignMetricsResponse
```

Read the delivery metrics or the uploaded results of each campaign over a window

Without `metrics`, sums per campaign each result metric you uploaded (one key per metric, as `GET /v1/ads/campaign-results/metrics` lists them), with `cac_percent`, `cost_per_sale`, `cost_per_qualified_lead`, `lead_to_sale` and `qualified_rate` next to them, over `fromDate` to `toDate` (both required, at most 400 days). Filter with `campaignId` (platform campaign ids); pages with `cursor`.  With `metrics` (for example `metrics=spend,impressions,clicks,ctr`), sums the delivery metrics of every ad of each campaign in `campaignId` (required, up to 100) from the stored daily rows. Every campaign comes on one page with its `currency`, and `granularity=day` adds one point per day.  A query reads at most 9,200 campaign days (100 campaigns for 92 days, 23 for 400) and answers 422 `query_too_large` beyond that. Breakdowns stay live in the platform queries, such as `POST /v1/metrics/platform-queries/meta-ads`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | First day, inclusive.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Last day, inclusive. The range is at most 400 days.
$limit = 50; // int | Rows per page, 50 by default, 100 at most.
$cursor = 'cursor_example'; // string | pagination.nextCursor of the previous page, sent with the same query.
$campaign_id = 'campaign_id_example'; // string | Comma-separated platform campaign ids. Required with metrics, up to 100.
$metrics = 'metrics_example'; // string | Comma-separated delivery metrics, as GET /v1/metrics/catalog?entity=campaigns lists them (spend, impressions, reach, clicks, ctr, cpc, cpm, conversions, roas, actions, funnel, video counts...).
$granularity = 'total'; // string | day adds one point per day to each campaign. Needs metrics.

try {
    $result = $apiInstance->getCampaignMetrics($from_date, $to_date, $limit, $cursor, $campaign_id, $metrics, $granularity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->getCampaignMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from_date** | **\DateTime**| First day, inclusive. | |
| **to_date** | **\DateTime**| Last day, inclusive. The range is at most 400 days. | |
| **limit** | **int**| Rows per page, 50 by default, 100 at most. | [optional] [default to 50] |
| **cursor** | **string**| pagination.nextCursor of the previous page, sent with the same query. | [optional] |
| **campaign_id** | **string**| Comma-separated platform campaign ids. Required with metrics, up to 100. | [optional] |
| **metrics** | **string**| Comma-separated delivery metrics, as GET /v1/metrics/catalog?entity&#x3D;campaigns lists them (spend, impressions, reach, clicks, ctr, cpc, cpm, conversions, roas, actions, funnel, video counts...). | [optional] |
| **granularity** | **string**| day adds one point per day to each campaign. Needs metrics. | [optional] [default to &#39;total&#39;] |

### Return type

[**\Zernio\Model\CampaignMetricsResponse**](../Model/CampaignMetricsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboxMetrics()`

```php
getInboxMetrics($conversation_id, $account_id, $profile_id, $metrics, $group_by, $from_date, $to_date, $platform, $source, $granularity, $sort, $include, $limit, $cursor): \Zernio\Model\InboxMetricsResponse
```

Read message volume and response times

Counts messages received, sent, read and failed, conversations and replies, and response times (median, p90, p99, mean, min, max) across the inbox, from the messages Zernio logged.  - Scope: `conversationId` (up to 25, one row per conversation), `accountId` (up to 25) or one `profileId`. Without a scope, every account the key can read. - `groupBy` (at most 2): `account`, `platform`, `source`, `hourOfWeek` (one row per UTC weekday and hour), `responseTimeBucket` (with `metrics=replied`) or `conversation` (paged with `cursor`, `include=total` counts up to 100,000). - `granularity`: `total` (the default), `day` or `week`. - `include=account` adds usernames to account rows; `include=conversation` adds the participant and last message to conversation rows.  Response time metrics are returned only when named in `metrics`. Without `fromDate` and `toDate` it reads the last 30 days; the window is at most 90 days. `GET /v1/metrics/catalog?entity=inbox` lists every metric, sort and groupBy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | Comma-separated conversation ids (Zernio or platform), up to 25: one row per conversation.
$account_id = 'account_id_example'; // string | Comma-separated account ids, up to 25.
$profile_id = 'profile_id_example'; // string | One profile id.
$metrics = 'metrics_example'; // string | Comma-separated metric names from the catalog. Defaults to the counts; response times only when named.
$group_by = 'group_by_example'; // string | Comma-separated groupings from the catalog, at most 2: account, conversation, platform, source, hourOfWeek, responseTimeBucket.
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | First day, inclusive (YYYY-MM-DD, UTC). Defaults to 30 days before toDate. The window is at most 90 days.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Last day, inclusive (YYYY-MM-DD, UTC). Defaults to today.
$platform = 'platform_example'; // string | A messaging platform, such as instagram or whatsapp.
$source = 'source_example'; // string | Only messages sent from this source, such as api or broadcast. Not with response time metrics.
$granularity = 'total'; // string
$sort = 'sort_example'; // string | A sort from the catalog, such as messages-desc. With granularity=total.
$include = 'include_example'; // string | Comma-separated includes from the catalog: account, conversation, total.
$limit = 56; // int | Rows returned with groupBy=account (10 by default, 100 at most) or groupBy=conversation (50 by default, 1,000 at most).
$cursor = 'cursor_example'; // string | With groupBy=conversation: pagination.nextCursor of the previous page.

try {
    $result = $apiInstance->getInboxMetrics($conversation_id, $account_id, $profile_id, $metrics, $group_by, $from_date, $to_date, $platform, $source, $granularity, $sort, $include, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->getInboxMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| Comma-separated conversation ids (Zernio or platform), up to 25: one row per conversation. | [optional] |
| **account_id** | **string**| Comma-separated account ids, up to 25. | [optional] |
| **profile_id** | **string**| One profile id. | [optional] |
| **metrics** | **string**| Comma-separated metric names from the catalog. Defaults to the counts; response times only when named. | [optional] |
| **group_by** | **string**| Comma-separated groupings from the catalog, at most 2: account, conversation, platform, source, hourOfWeek, responseTimeBucket. | [optional] |
| **from_date** | **\DateTime**| First day, inclusive (YYYY-MM-DD, UTC). Defaults to 30 days before toDate. The window is at most 90 days. | [optional] |
| **to_date** | **\DateTime**| Last day, inclusive (YYYY-MM-DD, UTC). Defaults to today. | [optional] |
| **platform** | **string**| A messaging platform, such as instagram or whatsapp. | [optional] |
| **source** | **string**| Only messages sent from this source, such as api or broadcast. Not with response time metrics. | [optional] |
| **granularity** | **string**|  | [optional] [default to &#39;total&#39;] |
| **sort** | **string**| A sort from the catalog, such as messages-desc. With granularity&#x3D;total. | [optional] |
| **include** | **string**| Comma-separated includes from the catalog: account, conversation, total. | [optional] |
| **limit** | **int**| Rows returned with groupBy&#x3D;account (10 by default, 100 at most) or groupBy&#x3D;conversation (50 by default, 1,000 at most). | [optional] |
| **cursor** | **string**| With groupBy&#x3D;conversation: pagination.nextCursor of the previous page. | [optional] |

### Return type

[**\Zernio\Model\InboxMetricsResponse**](../Model/InboxMetricsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInsightMetrics()`

```php
getInsightMetrics($account_id, $metrics, $platform_post_id, $granularity, $group_by, $breakdown, $timeframe, $cursor, $limit, $include, $from_date, $to_date): \Zernio\Model\InsightMetricsResponse
```

Read live account or post insights from the platform

Reads insights the platform computes and Zernio does not store (page views, profile visits, watch time, audience demographics...), live from the platform, for one account or one of its posts (`platformPostId`).  Platforms: Facebook, Instagram, LinkedIn, TikTok, YouTube, Pinterest, Google Business and Google Search Console. Another platform answers 400 on `accountId`, a disconnected account 401 `account_disconnected`, and a platform error the platform's own code under `platformError`.  - `granularity`: `total` (the default) or `day`. - `groupBy=demographic` with one metric and `breakdown` (age, gender, country, city...): one row per audience segment. LinkedIn: organizations only. - `groupBy=hour`: Instagram followers online per day and hour of the last 30 days. - `groupBy=keyword`: Google Business search keywords, one row per keyword, paged with `cursor`.  Google Search Console answers clicks, impressions, ctr (0 to 1) and position (1 is the top), final days only:  - Without groupBy: the site totals. `granularity=day` adds the date. - `groupBy` combines any of `query`, `page`, `country` and `device` (`groupBy=query,country`): one row per combination, most clicks first, with each value in `dimensions`. - Pages with `limit` (up to 25,000, 1,000 by default) and `cursor`. - `include=retentionCurve` with a YouTube `platformPostId`: the audience retention curve.  Without `fromDate` and `toDate` it reads the last 30 days; the window is at most 541 days. `GET /v1/metrics/catalog?entity=insights&platform=...` lists each platform's metrics. Metrics the platform cannot answer for this account are listed in `meta.unavailableMetrics` instead of failing the request.  Each request calls the platform: read each account every few minutes at most. These reads share the `account-insights` cap and the 120 reads per hour of one account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | One account id.
$metrics = 'metrics_example'; // string | Comma-separated metric names (up to 25). Defaults to the platform's default metrics. `GET /v1/metrics/catalog?entity=insights&platform=...` lists them.
$platform_post_id = 'platform_post_id_example'; // string | One post of the account, by its platform id: answers the post's live insights instead of the account's.
$granularity = 'granularity_example'; // string | Defaults to total; groupBy=hour answers per day.
$group_by = 'group_by_example'; // string | demographic: audience segments (age, gender, country...). hour: Instagram followers online per day and hour, last 30 days. keyword: Google Business search keywords per month. query, page, country, device: Google Search Console, combined with commas (groupBy=query,country).
$breakdown = 'breakdown_example'; // string | With groupBy=demographic: comma-separated segments. Defaults to the platform's default segments.
$timeframe = 'timeframe_example'; // string | Instagram demographics only. Defaults to this_month.
$cursor = 'cursor_example'; // string | With groupBy=keyword or a Search Console account: pagination.nextCursor of the previous page, sent with the same query.
$limit = 56; // int | Search Console accounts only: rows per page. Defaults to 1,000.
$include = 'include_example'; // string | With platformPostId on YouTube: retentionCurve adds the audience retention curve.
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | First day, inclusive (YYYY-MM-DD, UTC). Defaults to 30 days before toDate. The window is at most 541 days.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Last day, inclusive (YYYY-MM-DD, UTC). Defaults to today.

try {
    $result = $apiInstance->getInsightMetrics($account_id, $metrics, $platform_post_id, $granularity, $group_by, $breakdown, $timeframe, $cursor, $limit, $include, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->getInsightMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| One account id. | |
| **metrics** | **string**| Comma-separated metric names (up to 25). Defaults to the platform&#39;s default metrics. &#x60;GET /v1/metrics/catalog?entity&#x3D;insights&amp;platform&#x3D;...&#x60; lists them. | [optional] |
| **platform_post_id** | **string**| One post of the account, by its platform id: answers the post&#39;s live insights instead of the account&#39;s. | [optional] |
| **granularity** | **string**| Defaults to total; groupBy&#x3D;hour answers per day. | [optional] |
| **group_by** | **string**| demographic: audience segments (age, gender, country...). hour: Instagram followers online per day and hour, last 30 days. keyword: Google Business search keywords per month. query, page, country, device: Google Search Console, combined with commas (groupBy&#x3D;query,country). | [optional] |
| **breakdown** | **string**| With groupBy&#x3D;demographic: comma-separated segments. Defaults to the platform&#39;s default segments. | [optional] |
| **timeframe** | **string**| Instagram demographics only. Defaults to this_month. | [optional] |
| **cursor** | **string**| With groupBy&#x3D;keyword or a Search Console account: pagination.nextCursor of the previous page, sent with the same query. | [optional] |
| **limit** | **int**| Search Console accounts only: rows per page. Defaults to 1,000. | [optional] |
| **include** | **string**| With platformPostId on YouTube: retentionCurve adds the audience retention curve. | [optional] |
| **from_date** | **\DateTime**| First day, inclusive (YYYY-MM-DD, UTC). Defaults to 30 days before toDate. The window is at most 541 days. | [optional] |
| **to_date** | **\DateTime**| Last day, inclusive (YYYY-MM-DD, UTC). Defaults to today. | [optional] |

### Return type

[**\Zernio\Model\InsightMetricsResponse**](../Model/InsightMetricsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMetricsCatalog()`

```php
getMetricsCatalog($entity, $platform): \Zernio\Model\MetricsCatalogResponse
```

List the metrics, groupings and limits of each metrics endpoint

Describes each metrics endpoint (`GET /v1/metrics/posts`, `/accounts`, `/insights`, `/inbox`, `/ads`, `/campaigns` and `/ad-accounts`): the scope it needs, the most ids per scope, the longest and default date window, the granularities, sorts, includes, groupBy values, attributions and every metric with its unit, platforms and freshness.  Read it once and cache it: it changes only when Zernio adds a metric or a grouping. Filter with `entity` and `platform` to get only what one screen needs. No analytics add-on is needed to read it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity = 'entity_example'; // string | Only this entity.
$platform = 'platform_example'; // string | Only the metrics, sorts, includes and groupBy values this platform has. Every entity is still listed.

try {
    $result = $apiInstance->getMetricsCatalog($entity, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->getMetricsCatalog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity** | **string**| Only this entity. | [optional] |
| **platform** | **string**| Only the metrics, sorts, includes and groupBy values this platform has. Every entity is still listed. | [optional] |

### Return type

[**\Zernio\Model\MetricsCatalogResponse**](../Model/MetricsCatalogResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPostMetrics()`

```php
getPostMetrics($post_id, $platform_post_id, $account_id, $profile_id, $metrics, $group_by, $from_date, $to_date, $platform, $granularity, $origin, $sort, $include, $changed_since, $limit, $cursor): \Zernio\Model\PostMetricsResponse
```

Read post metrics by id, day by day, as a list, or grouped

Reads the metrics Zernio synced for published posts, Zernio posts and posts published outside Zernio alike. Send exactly one scope: `postId`, `platformPostId`, `accountId` or `profileId`, or read the change feed with `changedSince`.  - **By id** (`postId` or `platformPostId`, up to 100): one row per publication. Ids that match no post you can read come back in `meta.missingIds`. - **One post day by day**: one id with `granularity=day`. - **A list** (`accountId` up to 25, or one `profileId` with an optional `platform`): posts published in the window, newest first, paged with `cursor`. `sort` orders it by a metric (`likes-desc`, `engagement-desc`...), up to the 1,000 best posts. `include=total` counts the list on the first page (windows up to 92 days).  Grouped with `groupBy`:  - `post`: sums the platforms each post id was published to into one row (by id, `granularity=total`). - `dayOfWeek,hour`: one row per UTC weekday and hour the posts were published, summing each post's latest metrics. The newer way to read `GET /v1/analytics/best-time`. - `postAge`: the share of its final engagement a post had reached at each age (0-6h to 30d+), `engagementShareOfFinal`. The newer way to read `GET /v1/analytics/content-decay`. Defaults to the last 60 days. - `format`: one row per format (image, video, carousel, text). The newer way to read `GET /v1/analytics/format-breakdown`.  `dayOfWeek,hour`, `postAge` and `format` take a list scope (`accountId` or `profileId`), `granularity=total`, windows up to 92 days, and answer in one page.  Includes on rows read by id or in a list (`include`, comma-separated):  - `post`: content, media and publishing details. - `samples`: one reading per analytics sync, oldest first, the newest 500 per post, narrowed by `fromDate` and `toDate` on the sync time. Posts read by `postId` or `platformPostId` only, up to 10, with `granularity=total` and no `groupBy`. The newer way to read `GET /v1/analytics/samples`. - `authenticity`: the stored authenticity score with its confidence, reasons, model version, sample count and when it was computed; null until the post has been scored. The `authenticityScore` metric carries the score alone (0 to 100). - `impressionSources`, `audienceTypes`, `audienceCountries`, `retentionCurve`: breakdowns on the platforms that report them.  Change feed with `changedSince`:  - `changedSince=now` answers no rows and a starting cursor; send each `pagination.nextCursor` back as `changedSince` to get one `PostMetricChange` row per post whose metrics changed since then, oldest change first. - It reads every account the key can read, narrowed with one `profileId` and `platform`. It takes `metrics` from the feed's list and the breakdown includes, nothing else. - Changes are kept 7 days and a cursor older than 6 days is refused. The feed and its cursors are the same as `GET /v1/analytics/delta`, of which it is the newer way to read.  Without `fromDate` and `toDate` a list reads the last 90 days; the window is at most 366 days. `GET /v1/metrics/catalog?entity=posts` lists every metric, sort, include and groupBy, with the platforms that report each. A metric is `null` when the platform does not report it or the post has no snapshot yet.  Each team has an analytics compute budget of 24 seconds per 30-second window across these reads, on top of the per-group cap: a request that would pass it is refused with 429 `details.scope: team_budget` before it runs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string | Comma-separated post ids (Zernio or external), up to 100.
$platform_post_id = 'platform_post_id_example'; // string | Comma-separated ids the platform gave the posts (a TikTok video id, a tweet id), up to 100.
$account_id = 'account_id_example'; // string | Comma-separated account ids, up to 25.
$profile_id = 'profile_id_example'; // string | One profile id.
$metrics = 'metrics_example'; // string | Comma-separated metric names from the catalog. Defaults to every metric.
$group_by = 'group_by_example'; // string | Comma-separated groupings from the catalog, at most 2.
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | First day, inclusive (YYYY-MM-DD, UTC).
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Last day, inclusive (YYYY-MM-DD, UTC).
$platform = 'platform_example'; // string | Only with profileId.
$granularity = 'total'; // string | day reads one post.
$origin = 'origin_example'; // string | Lists only. Defaults to all.
$sort = 'sort_example'; // string | A sort from the catalog, such as published-desc or likes-desc.
$include = 'include_example'; // string | Comma-separated includes from the catalog.
$changed_since = 'changed_since_example'; // string | now (no rows, the starting cursor) or the previous pagination.nextCursor: one row per post whose metrics changed since, oldest first, across every account the key reads. Narrow with profileId and platform. Changes are kept 7 days; cursors older than 6 days are refused.
$limit = 50; // int | Rows per page, 50 by default, 100 at most.
$cursor = 'cursor_example'; // string | pagination.nextCursor of the previous page, sent with the same query.

try {
    $result = $apiInstance->getPostMetrics($post_id, $platform_post_id, $account_id, $profile_id, $metrics, $group_by, $from_date, $to_date, $platform, $granularity, $origin, $sort, $include, $changed_since, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->getPostMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **string**| Comma-separated post ids (Zernio or external), up to 100. | [optional] |
| **platform_post_id** | **string**| Comma-separated ids the platform gave the posts (a TikTok video id, a tweet id), up to 100. | [optional] |
| **account_id** | **string**| Comma-separated account ids, up to 25. | [optional] |
| **profile_id** | **string**| One profile id. | [optional] |
| **metrics** | **string**| Comma-separated metric names from the catalog. Defaults to every metric. | [optional] |
| **group_by** | **string**| Comma-separated groupings from the catalog, at most 2. | [optional] |
| **from_date** | **\DateTime**| First day, inclusive (YYYY-MM-DD, UTC). | [optional] |
| **to_date** | **\DateTime**| Last day, inclusive (YYYY-MM-DD, UTC). | [optional] |
| **platform** | **string**| Only with profileId. | [optional] |
| **granularity** | **string**| day reads one post. | [optional] [default to &#39;total&#39;] |
| **origin** | **string**| Lists only. Defaults to all. | [optional] |
| **sort** | **string**| A sort from the catalog, such as published-desc or likes-desc. | [optional] |
| **include** | **string**| Comma-separated includes from the catalog. | [optional] |
| **changed_since** | **string**| now (no rows, the starting cursor) or the previous pagination.nextCursor: one row per post whose metrics changed since, oldest first, across every account the key reads. Narrow with profileId and platform. Changes are kept 7 days; cursors older than 6 days are refused. | [optional] |
| **limit** | **int**| Rows per page, 50 by default, 100 at most. | [optional] [default to 50] |
| **cursor** | **string**| pagination.nextCursor of the previous page, sent with the same query. | [optional] |

### Return type

[**\Zernio\Model\PostMetricsResponse**](../Model/PostMetricsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryGoogleAds()`

```php
queryGoogleAds($google_ads_platform_query_body): \Zernio\Model\PlatformQueryPage
```

Run a Google Ads Query Language search on one customer

Runs a GAQL `SELECT` on one Google Ads customer, read only. Without `adAccountId` it reads the connection's own customer.  Runs a native query on the platform with the account's own token and answers the platform's rows unchanged, with its own field names, plus its headers, counts and quota in `meta`. Use it for what `/v1/metrics/_*` does not store; the stored metrics stay cheaper and faster.  - Up to 120 reads per hour per platform target (the Zernio account plus the ad account or property); past it, 429 with `details.scope` `platform_query_target`.  - Up to 10 queries in flight per team.  - A query must answer within 25 seconds.  - An account of another source answers 400 on `accountId` with the route it belongs to.  - The next page goes in `cursor`, from `pagination.nextCursor`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$google_ads_platform_query_body = {"accountId":"69ce75d483e990e1c01ccfe4","adAccountId":"9122445560","query":"SELECT campaign.id, metrics.clicks FROM campaign WHERE segments.date DURING LAST_30_DAYS"}; // \Zernio\Model\GoogleAdsPlatformQueryBody

try {
    $result = $apiInstance->queryGoogleAds($google_ads_platform_query_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->queryGoogleAds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **google_ads_platform_query_body** | [**\Zernio\Model\GoogleAdsPlatformQueryBody**](../Model/GoogleAdsPlatformQueryBody.md)|  | |

### Return type

[**\Zernio\Model\PlatformQueryPage**](../Model/PlatformQueryPage.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryGoogleAnalytics()`

```php
queryGoogleAnalytics($google_analytics_platform_query_body): \Zernio\Model\PlatformQueryPage
```

Run a GA4 standard or realtime report on one property

Runs a GA4 `standard` report over up to 4 date ranges, paged, or a `realtime` report on the last 30 minutes. Needs the Analytics add-on.  Runs a native query on the platform with the account's own token and answers the platform's rows unchanged, with its own field names, plus its headers, counts and quota in `meta`. Use it for what `/v1/metrics/_*` does not store; the stored metrics stay cheaper and faster.  - Up to 120 reads per hour per platform target (the Zernio account plus the ad account or property); past it, 429 with `details.scope` `platform_query_target`.  - Up to 10 queries in flight per team.  - A query must answer within 25 seconds.  - An account of another source answers 400 on `accountId` with the route it belongs to.  - The next page goes in `cursor`, from `pagination.nextCursor`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$google_analytics_platform_query_body = {"reportType":"standard","accountId":"6ae38efd7a6050c11aa50bc9","metrics":["sessions"],"dimensions":["date"],"dateRanges":[{"startDate":"2026-11-10","endDate":"2026-11-16"}]}; // \Zernio\Model\GoogleAnalyticsPlatformQueryBody

try {
    $result = $apiInstance->queryGoogleAnalytics($google_analytics_platform_query_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->queryGoogleAnalytics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **google_analytics_platform_query_body** | [**\Zernio\Model\GoogleAnalyticsPlatformQueryBody**](../Model/GoogleAnalyticsPlatformQueryBody.md)|  | |

### Return type

[**\Zernio\Model\PlatformQueryPage**](../Model/PlatformQueryPage.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryMetaAds()`

```php
queryMetaAds($meta_ads_platform_query_body): \Zernio\Model\PlatformQueryPage
```

Run a Meta Marketing API insights query on one ad account

Reads Meta's insights for one ad account (`act_<n>`). Read its campaigns, ad sets or ads with `level` and `filtering` on the same ad account.  Runs a native query on the platform with the account's own token and answers the platform's rows unchanged, with its own field names, plus its headers, counts and quota in `meta`. Use it for what `/v1/metrics/_*` does not store; the stored metrics stay cheaper and faster.  - Up to 120 reads per hour per platform target (the Zernio account plus the ad account or property); past it, 429 with `details.scope` `platform_query_target`.  - Up to 10 queries in flight per team.  - A query must answer within 25 seconds.  - An account of another source answers 400 on `accountId` with the route it belongs to.  - The next page goes in `cursor`, from `pagination.nextCursor`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meta_ads_platform_query_body = {"accountId":"69fc524892b3d8e85f893e73","adAccountId":"act_757082720485182","level":"campaign","fields":["spend","impressions","clicks"],"fromDate":"2026-11-01","toDate":"2026-11-18"}; // \Zernio\Model\MetaAdsPlatformQueryBody

try {
    $result = $apiInstance->queryMetaAds($meta_ads_platform_query_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->queryMetaAds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **meta_ads_platform_query_body** | [**\Zernio\Model\MetaAdsPlatformQueryBody**](../Model/MetaAdsPlatformQueryBody.md)|  | |

### Return type

[**\Zernio\Model\PlatformQueryPage**](../Model/PlatformQueryPage.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryTikTokAds()`

```php
queryTikTokAds($tik_tok_ads_platform_query_body): \Zernio\Model\PlatformQueryPage
```

Run a TikTok Marketing API report on one advertiser

Runs a synchronous TikTok report (`BASIC` or `AUDIENCE`) for one advertiser at the data level asked.  Runs a native query on the platform with the account's own token and answers the platform's rows unchanged, with its own field names, plus its headers, counts and quota in `meta`. Use it for what `/v1/metrics/_*` does not store; the stored metrics stay cheaper and faster.  - Up to 120 reads per hour per platform target (the Zernio account plus the ad account or property); past it, 429 with `details.scope` `platform_query_target`.  - Up to 10 queries in flight per team.  - A query must answer within 25 seconds.  - An account of another source answers 400 on `accountId` with the route it belongs to.  - The next page goes in `cursor`, from `pagination.nextCursor`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tik_tok_ads_platform_query_body = {"accountId":"6abb67f34dc9098d7c2f1955","adAccountId":"7330955083452284929","dataLevel":"AUCTION_CAMPAIGN","dimensions":["campaign_id"],"metrics":["spend","impressions"],"fromDate":"2026-11-01","toDate":"2026-11-18"}; // \Zernio\Model\TikTokAdsPlatformQueryBody

try {
    $result = $apiInstance->queryTikTokAds($tik_tok_ads_platform_query_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->queryTikTokAds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tik_tok_ads_platform_query_body** | [**\Zernio\Model\TikTokAdsPlatformQueryBody**](../Model/TikTokAdsPlatformQueryBody.md)|  | |

### Return type

[**\Zernio\Model\PlatformQueryPage**](../Model/PlatformQueryPage.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
