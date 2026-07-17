# # CreateAdInsightsReportRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Zernio SocialAccount id (posting or ads variant). |
**object_id** | **string** | Meta insights node: act_&lt;n&gt;, campaign id, ad set id or ad id. |
**level** | **string** |  | [optional]
**fields** | **string** | Comma-separated Graph insights fields. | [optional]
**breakdowns** | **string** | Comma-separated Graph breakdowns. | [optional]
**filtering** | [**\Zernio\Model\CreateAdInsightsReportRequestFilteringInner[]**](CreateAdInsightsReportRequestFilteringInner.md) | Meta filter objects, applied server-side. | [optional]
**date_preset** | **string** | Mutually exclusive with fromDate/toDate. | [optional]
**from_date** | **\DateTime** |  | [optional]
**to_date** | **\DateTime** |  | [optional]
**time_increment** | [**\Zernio\Model\CreateAdInsightsReportRequestTimeIncrement**](CreateAdInsightsReportRequestTimeIncrement.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
