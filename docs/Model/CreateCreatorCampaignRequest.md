# # CreateCreatorCampaignRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** | Profile the campaign lives in. Creator accounts connect into the same workspace. |
**name** | **string** |  |
**brand_name** | **string** |  |
**economics** | [**\Zernio\Model\CreatorCampaignEconomics**](CreatorCampaignEconomics.md) |  |
**caps** | [**\Zernio\Model\CreatorCampaignCaps**](CreatorCampaignCaps.md) | Omitted, the campaign starts with authenticityThreshold 40 and no other caps. | [optional]
**platforms** | **string[]** | Platforms creators may post on. At least one is needed to activate. &#x60;twitter&#x60; (X) needs usage-based billing: X reads are billed at cost, up to &#x60;caps.maxXReadSpendCents&#x60;, and X views are the post&#39;s impressions. &#x60;facebook&#x60; takes Page reels and videos only. | [optional]
**content_rules** | **string** |  | [optional]
**starts_at** | **\DateTime** |  | [optional]
**ends_at** | **\DateTime** |  | [optional]
**tracking_days** | **int** |  | [optional] [default to 30]
**hold_days** | **int** |  | [optional] [default to 10]
**max_post_age_minutes** | **int** | Optional maximum age in minutes of a post when it is submitted. Null or omitted (the default) accepts any age. Posts published before the campaign started are always refused. | [optional]
**settlement** | **string** |  | [optional] [default to 'none']
**branding** | [**\Zernio\Model\CreatorCampaignBranding**](CreatorCampaignBranding.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
