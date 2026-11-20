# # MetaAdsPlatformQueryBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | The Zernio id of the connected Meta ads account. |
**ad_account_id** | **string** | The Meta ad account, act_&lt;n&gt;. Read its campaigns, ad sets or ads with level and filtering. |
**level** | **string** | The level of each row. Defaults to the ad account. | [optional]
**fields** | **string[]** | Meta insights fields, such as spend or impressions, up to 100. | [optional]
**breakdowns** | **string[]** | Meta breakdowns, up to 5. | [optional]
**action_breakdowns** | **string[]** | An empty array asks Meta for no action breakdown at all. | [optional]
**action_attribution_windows** | **string[]** | Meta attribution windows, such as 7d_click or 1d_view. | [optional]
**action_report_time** | **string** | impression, conversion or mixed. | [optional]
**use_unified_attribution_setting** | **bool** | Use each ad set&#39;s own attribution setting. | [optional]
**filtering** | [**\Zernio\Model\MetaAdsPlatformQueryBodyFilteringInner[]**](MetaAdsPlatformQueryBodyFilteringInner.md) | Meta filters of field, operator and value, up to 25. | [optional]
**date_preset** | **string** | A Meta date preset, such as last_30d. Not with fromDate and toDate. | [optional]
**from_date** | **\DateTime** | First day, YYYY-MM-DD, sent with toDate. | [optional]
**to_date** | **\DateTime** | Last day, YYYY-MM-DD, sent with fromDate. | [optional]
**time_increment** | [**\Zernio\Model\MetaAdsPlatformQueryBodyTimeIncrement**](MetaAdsPlatformQueryBodyTimeIncrement.md) |  | [optional]
**limit** | **int** | Rows per page, up to 500. Defaults to 500. | [optional] [default to 500]
**cursor** | **string** | The pagination.nextCursor of the previous page, unchanged. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
