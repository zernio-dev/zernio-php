# # CreateCreatorCampaignRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** | Profile the campaign lives in. Creator accounts connect into the same workspace. |
**name** | **string** |  |
**brand_name** | **string** |  |
**economics** | [**\Zernio\Model\CreatorCampaignEconomics**](CreatorCampaignEconomics.md) |  |
**caps** | [**\Zernio\Model\CreatorCampaignCaps**](CreatorCampaignCaps.md) |  | [optional]
**platforms** | **string[]** | Platforms creators may post on. At least one is needed to activate. | [optional]
**content_rules** | **string** |  | [optional]
**starts_at** | **\DateTime** |  | [optional]
**ends_at** | **\DateTime** |  | [optional]
**tracking_days** | **int** |  | [optional] [default to 30]
**hold_days** | **int** |  | [optional] [default to 10]
**max_post_age_minutes** | **int** |  | [optional] [default to 60]
**settlement** | **string** |  | [optional] [default to 'none']
**branding** | [**\Zernio\Model\CreatorCampaignBranding**](CreatorCampaignBranding.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
