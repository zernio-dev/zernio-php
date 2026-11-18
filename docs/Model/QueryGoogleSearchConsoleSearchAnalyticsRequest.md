# # QueryGoogleSearchConsoleSearchAnalyticsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Zernio account ID of the Google Search Console connection. |
**from_date** | **\DateTime** |  | [optional]
**to_date** | **\DateTime** |  | [optional]
**dimensions** | **string[]** |  | [optional]
**type** | **string** | Which Google surface to read. Defaults to &#x60;web&#x60;. | [optional]
**dimension_filter_groups** | [**\Zernio\Model\QueryGoogleSearchConsoleSearchAnalyticsRequestDimensionFilterGroupsInner[]**](QueryGoogleSearchConsoleSearchAnalyticsRequestDimensionFilterGroupsInner.md) |  | [optional]
**aggregation_type** | **string** |  | [optional]
**row_limit** | **int** | Defaults to 1000. | [optional]
**start_row** | **int** | Row offset for paging past &#x60;rowLimit&#x60;. | [optional]
**data_state** | **string** | &#x60;final&#x60; (default) leaves out the last two or three days; &#x60;all&#x60; includes them while Google is still filling them in; &#x60;hourly_all&#x60; is required with the &#x60;hour&#x60; dimension. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
