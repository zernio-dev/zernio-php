# Zernio\AdInsightsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAdInsightsReport()**](AdInsightsApi.md#createAdInsightsReport) | **POST** /v1/ads/insights/reports | Submit an async insights report run |
| [**generateKeywordHistoricalMetrics()**](AdInsightsApi.md#generateKeywordHistoricalMetrics) | **POST** /v1/ads/keywords/historical-metrics | Historical keyword metrics (Google Keyword Planner) |
| [**generateKeywordIdeas()**](AdInsightsApi.md#generateKeywordIdeas) | **POST** /v1/ads/keywords/ideas | Generate keyword ideas (Google Keyword Planner) |
| [**getAdAnalytics()**](AdInsightsApi.md#getAdAnalytics) | **GET** /v1/ads/{adId}/analytics | Get ad analytics |
| [**getAdInsightsReport()**](AdInsightsApi.md#getAdInsightsReport) | **GET** /v1/ads/insights/reports/{reportRunId} | Poll an async insights report run |
| [**getAdsSearchTerms()**](AdInsightsApi.md#getAdsSearchTerms) | **GET** /v1/ads/search-terms | Google Ads search terms report |
| [**getCampaignAnalytics()**](AdInsightsApi.md#getCampaignAnalytics) | **GET** /v1/ads/campaigns/{campaignId}/analytics | Get campaign analytics |
| [**listLocalServicesLeadConversations()**](AdInsightsApi.md#listLocalServicesLeadConversations) | **GET** /v1/ads/local-services/leads/{leadId}/conversations | Conversations of a Local Services lead |
| [**listLocalServicesLeads()**](AdInsightsApi.md#listLocalServicesLeads) | **GET** /v1/ads/local-services/leads | Google Local Services Ads leads |
| [**queryAdInsights()**](AdInsightsApi.md#queryAdInsights) | **GET** /v1/ads/insights | Flexible live insights query |


## `createAdInsightsReport()`

```php
createAdInsightsReport($create_ad_insights_report_request): \Zernio\Model\CreateAdInsightsReport202Response
```

Submit an async insights report run

Submits an asynchronous Meta insights report. Same query surface as GET /v1/ads/insights, but in the JSON body; Meta processes the report server-side, which is the right choice for long ranges or large accounts where the sync query is slow or rate-limited. Returns a `reportRunId` to poll via GET /v1/ads/insights/reports/{reportRunId}.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdInsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_ad_insights_report_request = new \Zernio\Model\CreateAdInsightsReportRequest(); // \Zernio\Model\CreateAdInsightsReportRequest

try {
    $result = $apiInstance->createAdInsightsReport($create_ad_insights_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdInsightsApi->createAdInsightsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_ad_insights_report_request** | [**\Zernio\Model\CreateAdInsightsReportRequest**](../Model/CreateAdInsightsReportRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateAdInsightsReport202Response**](../Model/CreateAdInsightsReport202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateKeywordHistoricalMetrics()`

```php
generateKeywordHistoricalMetrics($generate_keyword_historical_metrics_request): \Zernio\Model\GenerateKeywordHistoricalMetrics200Response
```

Historical keyword metrics (Google Keyword Planner)

Google Ads only. Runs Keyword Planner's generateKeywordHistoricalMetrics for up to 1,000 exact keywords: historical search volume, competition and top-of-page bid ranges, plus averageCpcMicros when includeAverageCpc is set. Rows come back verbatim; counters are int64s encoded as strings, bid/CPC values are micros of the account currency.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdInsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_keyword_historical_metrics_request = new \Zernio\Model\GenerateKeywordHistoricalMetricsRequest(); // \Zernio\Model\GenerateKeywordHistoricalMetricsRequest

try {
    $result = $apiInstance->generateKeywordHistoricalMetrics($generate_keyword_historical_metrics_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdInsightsApi->generateKeywordHistoricalMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_keyword_historical_metrics_request** | [**\Zernio\Model\GenerateKeywordHistoricalMetricsRequest**](../Model/GenerateKeywordHistoricalMetricsRequest.md)|  | |

### Return type

[**\Zernio\Model\GenerateKeywordHistoricalMetrics200Response**](../Model/GenerateKeywordHistoricalMetrics200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateKeywordIdeas()`

```php
generateKeywordIdeas($generate_keyword_ideas_request): \Zernio\Model\GenerateKeywordIdeas200Response
```

Generate keyword ideas (Google Keyword Planner)

Google Ads only. Runs Keyword Planner's generateKeywordIdeas from seed keywords, a seed URL, or both, returning idea rows verbatim (avgMonthlySearches, competition, competitionIndex, top-of-page bid micros, monthlySearchVolumes). Counters are int64s encoded as strings; bid values are micros of the account currency. Omitting `countries` targets worldwide.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdInsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_keyword_ideas_request = new \Zernio\Model\GenerateKeywordIdeasRequest(); // \Zernio\Model\GenerateKeywordIdeasRequest

try {
    $result = $apiInstance->generateKeywordIdeas($generate_keyword_ideas_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdInsightsApi->generateKeywordIdeas: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_keyword_ideas_request** | [**\Zernio\Model\GenerateKeywordIdeasRequest**](../Model/GenerateKeywordIdeasRequest.md)|  | |

### Return type

[**\Zernio\Model\GenerateKeywordIdeas200Response**](../Model/GenerateKeywordIdeas200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdAnalytics()`

```php
getAdAnalytics($ad_id, $from_date, $to_date, $breakdowns): \Zernio\Model\AdAnalyticsResponse
```

Get ad analytics

Returns detailed performance analytics for an ad. Includes summary metrics, a daily timeline over the requested date range, and optional demographic breakdowns (Meta and TikTok only). If no date range is provided, defaults to the last 90 days. Date range is capped at 730 days max.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdInsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_id = 'ad_id_example'; // string
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start of date range (YYYY-MM-DD). Defaults to 90 days ago.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End of date range (YYYY-MM-DD). Defaults to today. Max 730-day range.
$breakdowns = 'breakdowns_example'; // string | Comma-separated breakdown dimensions.  **Meta**: age, gender, country, publisher_platform, device_platform, region.  **TikTok**: gender, age, country_code, platform, ac, language.  **LinkedIn** (firmographics): job_title, job_function, seniority, industry, company, company_size, country, region. Rows carry the raw pivot `value` plus a resolved `name`. LinkedIn serves these aggregated over the whole range, delays the data 12-24h, and omits segments with fewer than 3 events.

try {
    $result = $apiInstance->getAdAnalytics($ad_id, $from_date, $to_date, $breakdowns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdInsightsApi->getAdAnalytics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_id** | **string**|  | |
| **from_date** | **\DateTime**| Start of date range (YYYY-MM-DD). Defaults to 90 days ago. | [optional] |
| **to_date** | **\DateTime**| End of date range (YYYY-MM-DD). Defaults to today. Max 730-day range. | [optional] |
| **breakdowns** | **string**| Comma-separated breakdown dimensions.  **Meta**: age, gender, country, publisher_platform, device_platform, region.  **TikTok**: gender, age, country_code, platform, ac, language.  **LinkedIn** (firmographics): job_title, job_function, seniority, industry, company, company_size, country, region. Rows carry the raw pivot &#x60;value&#x60; plus a resolved &#x60;name&#x60;. LinkedIn serves these aggregated over the whole range, delays the data 12-24h, and omits segments with fewer than 3 events. | [optional] |

### Return type

[**\Zernio\Model\AdAnalyticsResponse**](../Model/AdAnalyticsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdInsightsReport()`

```php
getAdInsightsReport($report_run_id, $account_id, $limit, $after): \Zernio\Model\GetAdInsightsReport200Response
```

Poll an async insights report run

Status and results for a report run created via POST /v1/ads/insights/reports. While the job runs, returns `status` and `percentCompletion`. Once `status` is \"Job Completed\" the response also carries a `data` page, cursor-paginated via `limit` / `after`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdInsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_run_id = 'report_run_id_example'; // string
$account_id = 'account_id_example'; // string | Zernio SocialAccount id used to resolve the Meta token (must be the same connection that created the run).
$limit = 25; // int
$after = 'after_example'; // string

try {
    $result = $apiInstance->getAdInsightsReport($report_run_id, $account_id, $limit, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdInsightsApi->getAdInsightsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_run_id** | **string**|  | |
| **account_id** | **string**| Zernio SocialAccount id used to resolve the Meta token (must be the same connection that created the run). | |
| **limit** | **int**|  | [optional] [default to 25] |
| **after** | **string**|  | [optional] |

### Return type

[**\Zernio\Model\GetAdInsightsReport200Response**](../Model/GetAdInsightsReport200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdsSearchTerms()`

```php
getAdsSearchTerms($account_id, $customer_id, $from_date, $to_date, $campaign_id, $ad_group_id, $page_token): \Zernio\Model\GetAdsSearchTerms200Response
```

Google Ads search terms report

The actual search queries that triggered your ads, with matched-keyword status and spend metrics, the raw material for wasted-spend analysis and negative-keyword lists. Reads Google's `search_term_view`, cached for the quota window; defaults to the last 30 days. Rows are ordered by cost, descending. Draws on the shared Google Ads operations budget. The response carries `cachedAt` and `stale`, set when a quota-exhausted call falls back to the last-good copy instead of a live read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdInsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Google ads SocialAccount id.
$customer_id = 'customer_id_example'; // string | Numeric Google Ads customer id (no dashes). Defaults to the account's connected customer.
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Defaults to 30 days ago.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Defaults to today.
$campaign_id = 'campaign_id_example'; // string | Numeric Google campaign id filter.
$ad_group_id = 'ad_group_id_example'; // string | Numeric Google ad group id filter.
$page_token = 'page_token_example'; // string | Cursor from paging.nextPageToken of the previous page.

try {
    $result = $apiInstance->getAdsSearchTerms($account_id, $customer_id, $from_date, $to_date, $campaign_id, $ad_group_id, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdInsightsApi->getAdsSearchTerms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Google ads SocialAccount id. | |
| **customer_id** | **string**| Numeric Google Ads customer id (no dashes). Defaults to the account&#39;s connected customer. | [optional] |
| **from_date** | **\DateTime**| Defaults to 30 days ago. | [optional] |
| **to_date** | **\DateTime**| Defaults to today. | [optional] |
| **campaign_id** | **string**| Numeric Google campaign id filter. | [optional] |
| **ad_group_id** | **string**| Numeric Google ad group id filter. | [optional] |
| **page_token** | **string**| Cursor from paging.nextPageToken of the previous page. | [optional] |

### Return type

[**\Zernio\Model\GetAdsSearchTerms200Response**](../Model/GetAdsSearchTerms200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignAnalytics()`

```php
getCampaignAnalytics($campaign_id, $platform, $from_date, $to_date, $breakdowns): \Zernio\Model\CampaignAnalyticsResponse
```

Get campaign analytics

Returns performance analytics for a whole campaign in one call: summary metrics, a daily timeline over the requested date range (summed across the campaign's ads), and optional demographic breakdowns. Breakdowns are fetched live from Meta at the campaign level (one call per dimension, no per-ad fan-out), so an agency dashboard gets campaign-level age/gender/etc. without summing thousands of per-ad reads. `campaignId` is the platform campaign id; pass `platform` when a campaign id could be ambiguous across platforms. If no date range is provided, defaults to the last 90 days. Date range is capped at 730 days max. Google adds searchImpressionShare, searchBudgetLostImpressionShare, searchRankLostImpressionShare, searchTopImpressionShare and searchAbsoluteTopImpressionShare under analytics.summary for the requested inclusive range. These ratios are queried together without daily segmentation and cached for 10 minutes. Unavailable values are null. analytics.impressionShareCache reports cachedAt and stale independently of synced metrics.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdInsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Platform campaign id (platformCampaignId).
$platform = 'platform_example'; // string | Disambiguate when the campaign id exists across platforms (e.g. facebook, instagram).
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start of date range (YYYY-MM-DD). Defaults to 90 days ago.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End of date range (YYYY-MM-DD). Defaults to today. Max 730-day range.
$breakdowns = 'breakdowns_example'; // string | Comma-separated breakdown dimensions.  **Meta**: age, gender, country, publisher_platform, device_platform, region, platform_position, impression_device, video_asset, image_asset, body_asset, title_asset.  **LinkedIn** (firmographics): job_title, job_function, seniority, industry, company, company_size, country, region. Rows carry the raw pivot `value` plus a resolved `name`. LinkedIn serves these aggregated over the whole range, delays the data 12-24h, and omits segments with fewer than 3 events.

try {
    $result = $apiInstance->getCampaignAnalytics($campaign_id, $platform, $from_date, $to_date, $breakdowns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdInsightsApi->getCampaignAnalytics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Platform campaign id (platformCampaignId). | |
| **platform** | **string**| Disambiguate when the campaign id exists across platforms (e.g. facebook, instagram). | [optional] |
| **from_date** | **\DateTime**| Start of date range (YYYY-MM-DD). Defaults to 90 days ago. | [optional] |
| **to_date** | **\DateTime**| End of date range (YYYY-MM-DD). Defaults to today. Max 730-day range. | [optional] |
| **breakdowns** | **string**| Comma-separated breakdown dimensions.  **Meta**: age, gender, country, publisher_platform, device_platform, region, platform_position, impression_device, video_asset, image_asset, body_asset, title_asset.  **LinkedIn** (firmographics): job_title, job_function, seniority, industry, company, company_size, country, region. Rows carry the raw pivot &#x60;value&#x60; plus a resolved &#x60;name&#x60;. LinkedIn serves these aggregated over the whole range, delays the data 12-24h, and omits segments with fewer than 3 events. | [optional] |

### Return type

[**\Zernio\Model\CampaignAnalyticsResponse**](../Model/CampaignAnalyticsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLocalServicesLeadConversations()`

```php
listLocalServicesLeadConversations($lead_id, $account_id, $customer_id, $page_token): \Zernio\Model\ListLocalServicesLeadConversations200Response
```

Conversations of a Local Services lead

Conversation entries of one Local Services lead: phone calls (duration, recording URL) and messages (text, attachment URLs), oldest first. Read live from `local_services_lead_conversation`, always scoped to a single lead. Call-recording URLs require read access on the Google Ads account. Draws on the shared Google Ads operations budget.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdInsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = 'lead_id_example'; // string | Numeric lead id from /v1/ads/local-services/leads.
$account_id = 'account_id_example'; // string | Google ads SocialAccount id.
$customer_id = 'customer_id_example'; // string | Numeric Google Ads customer id (no dashes). Defaults to the account's connected customer.
$page_token = 'page_token_example'; // string | Cursor from paging.nextPageToken of the previous page.

try {
    $result = $apiInstance->listLocalServicesLeadConversations($lead_id, $account_id, $customer_id, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdInsightsApi->listLocalServicesLeadConversations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lead_id** | **string**| Numeric lead id from /v1/ads/local-services/leads. | |
| **account_id** | **string**| Google ads SocialAccount id. | |
| **customer_id** | **string**| Numeric Google Ads customer id (no dashes). Defaults to the account&#39;s connected customer. | [optional] |
| **page_token** | **string**| Cursor from paging.nextPageToken of the previous page. | [optional] |

### Return type

[**\Zernio\Model\ListLocalServicesLeadConversations200Response**](../Model/ListLocalServicesLeadConversations200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLocalServicesLeads()`

```php
listLocalServicesLeads($account_id, $customer_id, $from_date, $to_date, $lead_type, $lead_status, $charged_only, $page_token): \Zernio\Model\ListLocalServicesLeads200Response
```

Google Local Services Ads leads

Leads generated by Local Services Ads (phone calls, messages, bookings), read live from Google's `local_services_lead` resource, newest first. No persistence: Google is the source of truth and lead/credit statuses keep changing server-side. Google never returns healthcare-category leads, and `WIPED_OUT` leads arrive with contact erased (`contact` is null). Draws on the shared Google Ads operations budget.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdInsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Google ads SocialAccount id.
$customer_id = 'customer_id_example'; // string | Numeric Google Ads customer id (no dashes). Defaults to the account's connected customer.
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Leads created at/after this day.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Leads created at/before this day.
$lead_type = 'lead_type_example'; // string
$lead_status = 'lead_status_example'; // string | Google LocalServicesLeadStatus enum value (e.g. NEW, BOOKED, WIPED_OUT).
$charged_only = True; // bool | true = only leads Google charged for.
$page_token = 'page_token_example'; // string | Cursor from paging.nextPageToken of the previous page.

try {
    $result = $apiInstance->listLocalServicesLeads($account_id, $customer_id, $from_date, $to_date, $lead_type, $lead_status, $charged_only, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdInsightsApi->listLocalServicesLeads: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Google ads SocialAccount id. | |
| **customer_id** | **string**| Numeric Google Ads customer id (no dashes). Defaults to the account&#39;s connected customer. | [optional] |
| **from_date** | **\DateTime**| Leads created at/after this day. | [optional] |
| **to_date** | **\DateTime**| Leads created at/before this day. | [optional] |
| **lead_type** | **string**|  | [optional] |
| **lead_status** | **string**| Google LocalServicesLeadStatus enum value (e.g. NEW, BOOKED, WIPED_OUT). | [optional] |
| **charged_only** | **bool**| true &#x3D; only leads Google charged for. | [optional] |
| **page_token** | **string**| Cursor from paging.nextPageToken of the previous page. | [optional] |

### Return type

[**\Zernio\Model\ListLocalServicesLeads200Response**](../Model/ListLocalServicesLeads200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryAdInsights()`

```php
queryAdInsights($account_id, $object_id, $query, $customer_id, $page_token, $level, $fields, $breakdowns, $action_breakdowns, $action_attribution_windows, $action_report_time, $use_unified_attribution_setting, $filtering, $date_preset, $from_date, $to_date, $time_increment, $limit, $after): \Zernio\Model\QueryAdInsights200Response
```

Flexible live insights query

Live, flexible insights query. The account's platform picks the contract:  **Meta (facebook/instagram)**: forwards caller-chosen `fields`, `breakdowns` and `filtering` to any Meta insights node and returns Meta's rows verbatim. `objectId` (required) selects the node; `level` sets row granularity. Semantic validation is Meta's: an unknown field or invalid breakdown combination returns a 400 carrying Meta's message. For long ranges or agency-scale accounts prefer the async variant (POST /v1/ads/insights/reports).  **Google Ads (googleads)**: raw GAQL passthrough. Send any read-only GAQL SELECT via `query` (campaign/keyword/search-term/geo/demographic/asset/shopping resources, `change_event`, any `segments.*`) and rows come back verbatim (camelCase, counters as strings). Results are paged at a fixed 10,000 rows; follow `paging.nextPageToken` with `pageToken`. `customerId` is only needed when the connection has several Google Ads accounts. Semantic validation is Google's: an invalid query returns a 400 carrying Google's message (note: selecting `segments.date` requires a finite date filter).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AdInsightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Zernio SocialAccount id (posting or ads variant); its platform selects the Meta or Google contract.
$object_id = 'object_id_example'; // string | Meta only (required there): insights node (act_<n>, campaign id, ad set id or ad id).
$query = 'query_example'; // string | Google only (required there): the GAQL SELECT statement to run.
$customer_id = 'customer_id_example'; // string | Google only: numeric customer id (no dashes) when the connection has several Google Ads accounts.
$page_token = 'page_token_example'; // string | Google only: cursor from paging.nextPageToken of the previous page.
$level = 'level_example'; // string | Row granularity
$fields = 'fields_example'; // string | Comma-separated Graph insights fields (e.g. spend,impressions,frequency,website_purchase_roas). Omitted = Meta's default set.
$breakdowns = 'breakdowns_example'; // string | Comma-separated Graph breakdowns (e.g. age,gender or publisher_platform).
$action_breakdowns = 'action_breakdowns_example'; // string | Comma-separated Graph action breakdowns. Segments the actions[] arrays in each row.
$action_attribution_windows = 'action_attribution_windows_example'; // string | Comma-separated Meta attribution windows. Action values are returned keyed per window.
$action_report_time = 'action_report_time_example'; // string | When actions are counted: impression, conversion or mixed.
$use_unified_attribution_setting = True; // bool | Use the ad sets' own attribution settings for action counting.
$filtering = 'filtering_example'; // string | JSON array of Meta filter objects: [{\"field\", \"operator\", \"value\"}]. Applied server-side by Meta.
$date_preset = 'date_preset_example'; // string | Meta date_preset (e.g. last_7d, last_30d, this_month). Mutually exclusive with fromDate/toDate.
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start of range (YYYY-MM-DD); requires toDate.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End of range (YYYY-MM-DD); requires fromDate.
$time_increment = 'time_increment_example'; // string | Days per row (1-90), monthly, or all_days.
$limit = 25; // int | Rows per page
$after = 'after_example'; // string | Cursor from paging.after of the previous page.

try {
    $result = $apiInstance->queryAdInsights($account_id, $object_id, $query, $customer_id, $page_token, $level, $fields, $breakdowns, $action_breakdowns, $action_attribution_windows, $action_report_time, $use_unified_attribution_setting, $filtering, $date_preset, $from_date, $to_date, $time_increment, $limit, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdInsightsApi->queryAdInsights: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Zernio SocialAccount id (posting or ads variant); its platform selects the Meta or Google contract. | |
| **object_id** | **string**| Meta only (required there): insights node (act_&lt;n&gt;, campaign id, ad set id or ad id). | [optional] |
| **query** | **string**| Google only (required there): the GAQL SELECT statement to run. | [optional] |
| **customer_id** | **string**| Google only: numeric customer id (no dashes) when the connection has several Google Ads accounts. | [optional] |
| **page_token** | **string**| Google only: cursor from paging.nextPageToken of the previous page. | [optional] |
| **level** | **string**| Row granularity | [optional] |
| **fields** | **string**| Comma-separated Graph insights fields (e.g. spend,impressions,frequency,website_purchase_roas). Omitted &#x3D; Meta&#39;s default set. | [optional] |
| **breakdowns** | **string**| Comma-separated Graph breakdowns (e.g. age,gender or publisher_platform). | [optional] |
| **action_breakdowns** | **string**| Comma-separated Graph action breakdowns. Segments the actions[] arrays in each row. | [optional] |
| **action_attribution_windows** | **string**| Comma-separated Meta attribution windows. Action values are returned keyed per window. | [optional] |
| **action_report_time** | **string**| When actions are counted: impression, conversion or mixed. | [optional] |
| **use_unified_attribution_setting** | **bool**| Use the ad sets&#39; own attribution settings for action counting. | [optional] |
| **filtering** | **string**| JSON array of Meta filter objects: [{\&quot;field\&quot;, \&quot;operator\&quot;, \&quot;value\&quot;}]. Applied server-side by Meta. | [optional] |
| **date_preset** | **string**| Meta date_preset (e.g. last_7d, last_30d, this_month). Mutually exclusive with fromDate/toDate. | [optional] |
| **from_date** | **\DateTime**| Start of range (YYYY-MM-DD); requires toDate. | [optional] |
| **to_date** | **\DateTime**| End of range (YYYY-MM-DD); requires fromDate. | [optional] |
| **time_increment** | **string**| Days per row (1-90), monthly, or all_days. | [optional] |
| **limit** | **int**| Rows per page | [optional] [default to 25] |
| **after** | **string**| Cursor from paging.after of the previous page. | [optional] |

### Return type

[**\Zernio\Model\QueryAdInsights200Response**](../Model/QueryAdInsights200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
