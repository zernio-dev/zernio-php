# # UploadCampaignResultsRequestRowsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | **\DateTime** | The day, at most 400 days ago. |
**campaign_id** | **string** | The platform campaign id. | [optional]
**utm_campaign** | **string** | The &#x60;utm_campaign&#x60; value on the campaign&#39;s ads. | [optional]
**campaign_name** | **string** | The campaign&#39;s name, matched case-insensitively. | [optional]
**ad_account_id** | **string** | Platform ad account id. Narrows matching to one ad account. | [optional]
**values** | **array<string,float>** | Metric key (snake_case, up to 40 characters) to a non-negative number. 1 to 20 per row. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
