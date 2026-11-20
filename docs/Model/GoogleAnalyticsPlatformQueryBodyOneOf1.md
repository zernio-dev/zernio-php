# # GoogleAnalyticsPlatformQueryBodyOneOf1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**report_type** | **string** | A GA4 realtime report on the last 30 minutes, one page. |
**account_id** | **string** | The Zernio id of the connected Google Analytics property. |
**dimensions** | **string[]** | GA4 dimension names, up to 9. | [optional]
**metrics** | **string[]** | GA4 metric names, 1 to 10. |
**dimension_filter** | **array<string,mixed>** | A GA4 FilterExpression on dimensions, sent to Google unchanged. | [optional]
**metric_filter** | **array<string,mixed>** | A GA4 FilterExpression on metrics, sent to Google unchanged. | [optional]
**order_bys** | **array<string,mixed>[]** | GA4 OrderBy objects, up to 10. | [optional]
**limit** | **int** | Rows, up to 10,000. | [optional]
**minute_ranges** | [**\Zernio\Model\GoogleAnalyticsPlatformQueryBodyOneOf1MinuteRangesInner[]**](GoogleAnalyticsPlatformQueryBodyOneOf1MinuteRangesInner.md) | Up to 2 GA4 minute ranges. Defaults to the last 30 minutes. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
