# # GoogleAnalyticsReport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Zernio account ID of the Google Analytics connection. | [optional]
**property_id** | **string** | Numeric GA4 property ID. | [optional]
**dimension_headers** | [**\Zernio\Model\GoogleAnalyticsReportDimensionHeadersInner[]**](GoogleAnalyticsReportDimensionHeadersInner.md) |  | [optional]
**metric_headers** | [**\Zernio\Model\GoogleAnalyticsReportMetricHeadersInner[]**](GoogleAnalyticsReportMetricHeadersInner.md) |  | [optional]
**rows** | [**\Zernio\Model\GoogleAnalyticsReportRowsInner[]**](GoogleAnalyticsReportRowsInner.md) |  | [optional]
**row_count** | **int** | Total rows matching the request, across all pages. | [optional]
**metadata** | **array<string,mixed>** | Google report metadata (currency, time zone, sampling and thresholding flags). | [optional]
**property_quota** | **array<string,mixed>** | Google quota left on this property after the request (tokens per day and per hour, concurrent requests). Cached responses carry the quota from when they were fetched. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
