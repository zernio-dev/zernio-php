# # UpdateCreatorCampaignRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**brand_name** | **string** |  | [optional]
**platforms** | **string[]** |  | [optional]
**content_rules** | **string** |  | [optional]
**starts_at** | **\DateTime** |  | [optional]
**ends_at** | **\DateTime** |  | [optional]
**tracking_days** | **int** |  | [optional]
**hold_days** | **int** |  | [optional]
**max_post_age_minutes** | **int** | Null removes the limit. | [optional]
**settlement** | **string** |  | [optional]
**economics** | [**\Zernio\Model\CreatorCampaignEconomics**](CreatorCampaignEconomics.md) |  | [optional]
**caps** | [**\Zernio\Model\CreatorCampaignCaps**](CreatorCampaignCaps.md) |  | [optional]
**branding** | [**\Zernio\Model\CreatorCampaignBranding**](CreatorCampaignBranding.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
