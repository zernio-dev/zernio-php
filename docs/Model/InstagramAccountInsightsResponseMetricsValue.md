# # InstagramAccountInsightsResponseMetricsValue

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total** | **float** | Sum or aggregate value for the metric | [optional]
**values** | [**\Zernio\Model\InstagramAccountInsightsResponseMetricsValueValuesInner[]**](InstagramAccountInsightsResponseMetricsValueValuesInner.md) | Daily values (for time_series, and always on monetary metrics) | [optional]
**breakdowns** | [**\Zernio\Model\InstagramAccountInsightsResponseMetricsValueBreakdownsInner[]**](InstagramAccountInsightsResponseMetricsValueBreakdownsInner.md) | Breakdown values (only for total_value with breakdown) | [optional]
**unit** | **string** | Present on monetary metrics only. The scale of \&quot;total\&quot; and of every \&quot;values[].value\&quot;, exactly as the platform returned them.  - \&quot;micro_amount\&quot;: the platform returned an object carrying a micro amount; values are that integer, summed, unconverted. Zernio publishes no divisor because Meta documents none: divide by the scale you verified against the Page&#39;s own Meta Business Suite export. On Facebook Page insights this is always content_monetization_earnings. - \&quot;unspecified\&quot;: the platform returned a bare number with no unit metadata, passed through as-is; the platform does not state whether it is major or minor currency units. On Facebook Page insights this is always monetization_approximate_earnings. | [optional]
**currency** | **string** | ISO 4217 currency of a monetary metric, or null when the platform omitted it. Always null on monetization_approximate_earnings, which Meta returns as a bare number with no currency; always present on content_monetization_earnings. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
