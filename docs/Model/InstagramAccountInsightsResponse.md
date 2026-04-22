# # InstagramAccountInsightsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**success** | **bool** |  | [optional]
**account_id** | **string** | The Zernio SocialAccount ID | [optional]
**platform** | **string** |  | [optional]
**date_range** | [**\Zernio\Model\InstagramAccountInsightsResponseDateRange**](InstagramAccountInsightsResponseDateRange.md) |  | [optional]
**metric_type** | **string** |  | [optional]
**breakdown** | **string** | Breakdown dimension used (only present when breakdown was requested) | [optional]
**metrics** | [**array<string,\Zernio\Model\InstagramAccountInsightsResponseMetricsValue>**](InstagramAccountInsightsResponseMetricsValue.md) | Object keyed by metric name. For time_series: each metric has \&quot;total\&quot; (number) and \&quot;values\&quot; (array of {date, value}). For total_value: each metric has \&quot;total\&quot; (number) and optionally \&quot;breakdowns\&quot; (array of {dimension, value}). | [optional]
**data_delay** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
