# # InstagramAccountInsightsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**success** | **bool** |  | [optional]
**account_id** | **string** | The Zernio SocialAccount ID | [optional]
**platform** | **string** | Platform that served this response. | [optional]
**date_range** | [**\Zernio\Model\InstagramAccountInsightsResponseDateRange**](InstagramAccountInsightsResponseDateRange.md) |  | [optional]
**metric_type** | **string** |  | [optional]
**breakdown** | **string** | Breakdown dimension used (only present when breakdown was requested) | [optional]
**metrics** | [**array<string,\Zernio\Model\InstagramAccountInsightsResponseMetricsValue>**](InstagramAccountInsightsResponseMetricsValue.md) | Object keyed by metric name.  - For time_series: each metric has \&quot;total\&quot; (number) and \&quot;values\&quot; (array of {date, value}). - For total_value: each metric has \&quot;total\&quot; (number) and optionally \&quot;breakdowns\&quot; (array of {dimension, value}).  **Monetary metrics** also carry \&quot;unit\&quot; and \&quot;currency\&quot;. Zernio never rescales money: \&quot;total\&quot; and every \&quot;values[].value\&quot; are the platform&#39;s raw numbers in the stated unit.  Monetary metrics keep \&quot;values\&quot; even on metricType&#x3D;total_value, because their \&quot;total\&quot; is the sum of the daily buckets the platform returned over the range. Keep the series to reconcile that sum against the platform&#39;s own reporting before invoicing on it.  A metric that could not be served is absent from this object and listed in \&quot;unavailableMetrics\&quot; instead, so an unavailable metric is never reported as a zero. | [optional]
**unavailable_metrics** | [**\Zernio\Model\InstagramAccountInsightsResponseUnavailableMetricsInner[]**](InstagramAccountInsightsResponseUnavailableMetricsInner.md) | Requested metrics that could not be served. Present only when at least one metric is unavailable, absent otherwise.  Each listed metric is OMITTED from \&quot;metrics\&quot; rather than reported as 0, which is how an unavailable metric is distinguished from a genuine zero. The request itself still succeeds with HTTP 200. | [optional]
**data_delay** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
