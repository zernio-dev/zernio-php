# # CreateAdCampaignRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Zernio SocialAccount id (posting or ads variant) used to resolve the Meta token. |
**ad_account_id** | **string** | Meta ad account id (act_&lt;n&gt;). |
**name** | **string** |  |
**goal** | **string** | Mapped to the ODAX objective (same mapping as POST /v1/ads/create). |
**special_ad_categories** | **string[]** |  | [optional]
**budget_amount** | **float** | Campaign-level (CBO) budget in whole currency units. Requires budgetType. | [optional]
**budget_type** | **string** |  | [optional]
**status** | **string** |  | [optional] [default to 'PAUSED']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
