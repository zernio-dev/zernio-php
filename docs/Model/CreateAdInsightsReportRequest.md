# # CreateAdInsightsReportRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Zernio SocialAccount id (posting or ads variant). |
**object_id** | **string** | Meta insights node: act_&lt;n&gt;, campaign id, ad set id or ad id. |
**level** | **string** |  | [optional]
**fields** | **string** | Comma-separated Graph insights fields. | [optional]
**breakdowns** | **string** | Comma-separated Graph breakdowns. | [optional]
**action_breakdowns** | **string** | Comma-separated Graph action breakdowns (e.g. action_type,action_destination). | [optional]
**action_attribution_windows** | **string[]** | Meta attribution windows (e.g. [\&quot;7d_click\&quot;, \&quot;1d_view\&quot;]). Action values are returned keyed per window. | [optional]
**action_report_time** | **string** | When actions are counted: impression, conversion or mixed. | [optional]
**use_unified_attribution_setting** | **bool** | Use the ad sets&#39; own attribution settings for action counting. | [optional]
**filtering** | [**\Zernio\Model\CreateAdInsightsReportRequestFilteringInner[]**](CreateAdInsightsReportRequestFilteringInner.md) | Meta filter objects, applied server-side. | [optional]
**date_preset** | **string** | Mutually exclusive with fromDate/toDate. | [optional]
**from_date** | **\DateTime** |  | [optional]
**to_date** | **\DateTime** |  | [optional]
**time_increment** | [**\Zernio\Model\CreateAdInsightsReportRequestTimeIncrement**](CreateAdInsightsReportRequestTimeIncrement.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
