# # GoogleAnalyticsPlatformQueryBodyOneOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**report_type** | **string** | A GA4 report over date ranges, paged with a cursor. |
**account_id** | **string** | The Zernio id of the connected Google Analytics property. |
**dimensions** | **string[]** | GA4 dimension names, up to 9. | [optional]
**metrics** | **string[]** | GA4 metric names, 1 to 10. |
**dimension_filter** | **array<string,mixed>** | A GA4 FilterExpression on dimensions, sent to Google unchanged. | [optional]
**metric_filter** | **array<string,mixed>** | A GA4 FilterExpression on metrics, sent to Google unchanged. | [optional]
**order_bys** | **array<string,mixed>[]** | GA4 OrderBy objects, up to 10. | [optional]
**limit** | **int** | Rows per page, up to 10,000. Defaults to 10,000. | [optional] [default to 10000]
**date_ranges** | [**\Zernio\Model\GoogleAnalyticsPlatformQueryBodyOneOfDateRangesInner[]**](GoogleAnalyticsPlatformQueryBodyOneOfDateRangesInner.md) | Up to 4 GA4 date ranges. Defaults to the 28 days ending yesterday. | [optional]
**keep_empty_rows** | **bool** | Keep rows whose metrics are all 0. | [optional]
**currency_code** | **string** | ISO 4217 code for money metrics. | [optional]
**cursor** | **string** | The pagination.nextCursor of the previous page, unchanged. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
