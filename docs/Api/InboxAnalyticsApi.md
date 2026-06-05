# Zernio\InboxAnalyticsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getInboxConversationAnalytics()**](InboxAnalyticsApi.md#getInboxConversationAnalytics) | **GET** /v1/analytics/inbox/conversations/{conversationId} | Get analytics for a single conversation |
| [**getInboxHeatmap()**](InboxAnalyticsApi.md#getInboxHeatmap) | **GET** /v1/analytics/inbox/heatmap | Get inbox day-of-week × hour-of-day heatmap |
| [**getInboxResponseTime()**](InboxAnalyticsApi.md#getInboxResponseTime) | **GET** /v1/analytics/inbox/response-time | Get inbox response-time stats |
| [**getInboxSourceBreakdown()**](InboxAnalyticsApi.md#getInboxSourceBreakdown) | **GET** /v1/analytics/inbox/source-breakdown | Get inbox source breakdown |
| [**getInboxTopAccounts()**](InboxAnalyticsApi.md#getInboxTopAccounts) | **GET** /v1/analytics/inbox/top-accounts | Get top accounts by inbox volume |
| [**getInboxVolume()**](InboxAnalyticsApi.md#getInboxVolume) | **GET** /v1/analytics/inbox/volume | Get inbox messaging volume |
| [**listInboxConversationAnalytics()**](InboxAnalyticsApi.md#listInboxConversationAnalytics) | **GET** /v1/analytics/inbox/conversations | List conversations with inbox analytics |


## `getInboxConversationAnalytics()`

```php
getInboxConversationAnalytics($conversation_id, $from_date, $to_date): \Zernio\Model\GetInboxConversationAnalytics200Response
```

Get analytics for a single conversation

Per-conversation inbox analytics. The inbox analog of /v1/analytics/post-timeline — one conversation, daily totals, source mix.  The {conversationId} path param accepts EITHER the Mongo `_id` of the Conversation document OR its `platformConversationId` (the same identity used by metadata.conversationId at ingest time). Ownership is verified in MongoDB against the caller's team before the Tinybird query fires.  Max date range is 365 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\InboxAnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | Mongo _id or platformConversationId.
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime

try {
    $result = $apiInstance->getInboxConversationAnalytics($conversation_id, $from_date, $to_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxAnalyticsApi->getInboxConversationAnalytics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| Mongo _id or platformConversationId. | |
| **from_date** | **\DateTime**|  | |
| **to_date** | **\DateTime**|  | [optional] |

### Return type

[**\Zernio\Model\GetInboxConversationAnalytics200Response**](../Model/GetInboxConversationAnalytics200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboxHeatmap()`

```php
getInboxHeatmap($from_date, $to_date, $profile_id, $platform, $account_id, $source, $action): \Zernio\Model\GetInboxHeatmap200Response
```

Get inbox day-of-week × hour-of-day heatmap

Day-of-week × hour-of-day breakdown of inbox messages. Buckets are sparse — only cells with at least one event are returned; clients zero-fill the rest to render the full 7×24 grid. The `dow` field follows ClickHouse's `toDayOfWeek` convention (1 = Monday … 7 = Sunday). Max date range is 365 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\InboxAnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$profile_id = 'profile_id_example'; // string
$platform = 'platform_example'; // string
$account_id = 'account_id_example'; // string
$source = 'source_example'; // string
$action = 'action_example'; // string | Narrow to a single event type. \"all\" or omitted means no filter.

try {
    $result = $apiInstance->getInboxHeatmap($from_date, $to_date, $profile_id, $platform, $account_id, $source, $action);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxAnalyticsApi->getInboxHeatmap: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from_date** | **\DateTime**|  | |
| **to_date** | **\DateTime**|  | [optional] |
| **profile_id** | **string**|  | [optional] |
| **platform** | **string**|  | [optional] |
| **account_id** | **string**|  | [optional] |
| **source** | **string**|  | [optional] |
| **action** | **string**| Narrow to a single event type. \&quot;all\&quot; or omitted means no filter. | [optional] |

### Return type

[**\Zernio\Model\GetInboxHeatmap200Response**](../Model/GetInboxHeatmap200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboxResponseTime()`

```php
getInboxResponseTime($from_date, $to_date, $profile_id, $platform, $account_id): \Zernio\Model\GetInboxResponseTime200Response
```

Get inbox response-time stats

Time-to-first-response stats. Pairs each received message with the next sent message in the same conversation and reports the delta as both summary statistics and a fixed-bucket histogram suited for the analytics page's TTR chart.  `sampleSize` reflects only conversations that received AND got a reply in the window — received-but-never-answered conversations are excluded. Compare against /v1/analytics/inbox/volume's `summary.received` to compute reply rate.  Max date range is 365 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\InboxAnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$profile_id = 'profile_id_example'; // string
$platform = 'platform_example'; // string
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->getInboxResponseTime($from_date, $to_date, $profile_id, $platform, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxAnalyticsApi->getInboxResponseTime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from_date** | **\DateTime**|  | |
| **to_date** | **\DateTime**|  | [optional] |
| **profile_id** | **string**|  | [optional] |
| **platform** | **string**|  | [optional] |
| **account_id** | **string**|  | [optional] |

### Return type

[**\Zernio\Model\GetInboxResponseTime200Response**](../Model/GetInboxResponseTime200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboxSourceBreakdown()`

```php
getInboxSourceBreakdown($from_date, $to_date, $profile_id, $platform, $account_id): \Zernio\Model\GetInboxSourceBreakdown200Response
```

Get inbox source breakdown

Breakdown of inbox messages by their lineage source (the `metadata.source` field set at ingest time: human / workflow / sequence / broadcast / comment_automation / api / contact / platform). Each source row also carries a per-platform sub-split. Max date range is 365 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\InboxAnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$profile_id = 'profile_id_example'; // string
$platform = 'platform_example'; // string
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->getInboxSourceBreakdown($from_date, $to_date, $profile_id, $platform, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxAnalyticsApi->getInboxSourceBreakdown: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from_date** | **\DateTime**|  | |
| **to_date** | **\DateTime**|  | [optional] |
| **profile_id** | **string**|  | [optional] |
| **platform** | **string**|  | [optional] |
| **account_id** | **string**|  | [optional] |

### Return type

[**\Zernio\Model\GetInboxSourceBreakdown200Response**](../Model/GetInboxSourceBreakdown200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboxTopAccounts()`

```php
getInboxTopAccounts($from_date, $to_date, $profile_id, $platform, $source, $limit): \Zernio\Model\GetInboxTopAccounts200Response
```

Get top accounts by inbox volume

Leaderboard of social accounts by inbox message volume. Decorates each row with display labels from the live SocialAccount record (so the UI shows username + displayName, not just an ID). Accounts that no longer map to a SocialAccount surface as \"(disconnected)\" so the row stays visible. Max date range is 365 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\InboxAnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$profile_id = 'profile_id_example'; // string
$platform = 'platform_example'; // string
$source = 'source_example'; // string
$limit = 10; // int | Cap on returned rows. Lower than the posting listing's 100 because each row triggers a SocialAccount Mongo lookup.

try {
    $result = $apiInstance->getInboxTopAccounts($from_date, $to_date, $profile_id, $platform, $source, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxAnalyticsApi->getInboxTopAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from_date** | **\DateTime**|  | |
| **to_date** | **\DateTime**|  | [optional] |
| **profile_id** | **string**|  | [optional] |
| **platform** | **string**|  | [optional] |
| **source** | **string**|  | [optional] |
| **limit** | **int**| Cap on returned rows. Lower than the posting listing&#39;s 100 because each row triggers a SocialAccount Mongo lookup. | [optional] [default to 10] |

### Return type

[**\Zernio\Model\GetInboxTopAccounts200Response**](../Model/GetInboxTopAccounts200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboxVolume()`

```php
getInboxVolume($from_date, $to_date, $profile_id, $platform, $account_id, $source): \Zernio\Model\GetInboxVolume200Response
```

Get inbox messaging volume

Daily inbox messaging volume + breakdowns. Folds the raw messaging events into three projections so the client can render the volume chart, KPI strip, and per-platform stacked bar from a single call. Max date range is 365 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\InboxAnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Inclusive lower bound (YYYY-MM-DD). Required.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Inclusive upper bound (YYYY-MM-DD). Defaults to today.
$profile_id = 'profile_id_example'; // string
$platform = 'platform_example'; // string | Filter by single platform (facebook, instagram, twitter, etc.).
$account_id = 'account_id_example'; // string
$source = 'source_example'; // string | Filter by metadata.source lineage (human, workflow, sequence, broadcast, comment_automation, api, contact, platform).

try {
    $result = $apiInstance->getInboxVolume($from_date, $to_date, $profile_id, $platform, $account_id, $source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxAnalyticsApi->getInboxVolume: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from_date** | **\DateTime**| Inclusive lower bound (YYYY-MM-DD). Required. | |
| **to_date** | **\DateTime**| Inclusive upper bound (YYYY-MM-DD). Defaults to today. | [optional] |
| **profile_id** | **string**|  | [optional] |
| **platform** | **string**| Filter by single platform (facebook, instagram, twitter, etc.). | [optional] |
| **account_id** | **string**|  | [optional] |
| **source** | **string**| Filter by metadata.source lineage (human, workflow, sequence, broadcast, comment_automation, api, contact, platform). | [optional] |

### Return type

[**\Zernio\Model\GetInboxVolume200Response**](../Model/GetInboxVolume200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInboxConversationAnalytics()`

```php
listInboxConversationAnalytics($from_date, $to_date, $profile_id, $platform, $account_id, $source, $limit, $page, $sort_by, $order): \Zernio\Model\ListInboxConversationAnalytics200Response
```

List conversations with inbox analytics

Per-conversation listing with per-row totals + first/last message timestamps. The inbox analog of GET /v1/analytics (posts listing) — same filter shape, same pagination, same sort/order semantics. Use as the entry point for the per-conversation analytics drawer at /v1/analytics/inbox/conversations/{conversationId}.  Rows are enriched with the conversation's participant info (`participantName`, `participantUsername`, `participantPicture`) and last-message preview by joining the Conversation document scoped to the caller's team. Max date range is 365 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\InboxAnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$profile_id = 'profile_id_example'; // string
$platform = 'platform_example'; // string
$account_id = 'account_id_example'; // string
$source = 'source_example'; // string
$limit = 50; // int
$page = 1; // int
$sort_by = 'lastMessageAt'; // string
$order = 'desc'; // string

try {
    $result = $apiInstance->listInboxConversationAnalytics($from_date, $to_date, $profile_id, $platform, $account_id, $source, $limit, $page, $sort_by, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxAnalyticsApi->listInboxConversationAnalytics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from_date** | **\DateTime**|  | |
| **to_date** | **\DateTime**|  | [optional] |
| **profile_id** | **string**|  | [optional] |
| **platform** | **string**|  | [optional] |
| **account_id** | **string**|  | [optional] |
| **source** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |
| **page** | **int**|  | [optional] [default to 1] |
| **sort_by** | **string**|  | [optional] [default to &#39;lastMessageAt&#39;] |
| **order** | **string**|  | [optional] [default to &#39;desc&#39;] |

### Return type

[**\Zernio\Model\ListInboxConversationAnalytics200Response**](../Model/ListInboxConversationAnalytics200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
