# # RunGoogleAnalyticsReportRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Zernio account ID of the Google Analytics connection (platform &#x60;googleanalytics&#x60;). |
**dimensions** | **string[]** | GA4 dimension API names, e.g. &#x60;date&#x60;, &#x60;sessionSource&#x60;, &#x60;pagePath&#x60;. List them with GET /v1/analytics/googleanalytics/metadata. | [optional]
**metrics** | **string[]** | GA4 metric API names, e.g. &#x60;sessions&#x60;, &#x60;activeUsers&#x60;, &#x60;keyEvents&#x60;, &#x60;totalRevenue&#x60;. |
**dimension_filter** | **array<string,mixed>** | A Google FilterExpression on dimensions, in Google&#39;s own shape. | [optional]
**metric_filter** | **array<string,mixed>** | A Google FilterExpression on metrics, in Google&#39;s own shape. | [optional]
**order_bys** | **array<string,mixed>[]** | Google OrderBy objects, e.g. &#x60;{ \&quot;metric\&quot;: { \&quot;metricName\&quot;: \&quot;sessions\&quot; }, \&quot;desc\&quot;: true }&#x60;. | [optional]
**limit** | **int** | Rows to return. Defaults to Google&#39;s default (10000). | [optional]
**date_ranges** | [**\Zernio\Model\RunGoogleAnalyticsReportRequestAllOfDateRangesInner[]**](RunGoogleAnalyticsReportRequestAllOfDateRangesInner.md) | Defaults to the last 28 days (&#x60;28daysAgo&#x60; to &#x60;yesterday&#x60;). | [optional]
**offset** | **int** | Row offset for paging through a report larger than &#x60;limit&#x60;. | [optional]
**keep_empty_rows** | **bool** |  | [optional]
**currency_code** | **string** | ISO 4217 code for currency metrics. Defaults to the property currency. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
