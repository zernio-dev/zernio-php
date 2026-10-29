# # CreatorPortalCampaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The campaign id, as in a link-recovery URL. |
**name** | **string** |  |
**brand_name** | **string** |  |
**logo_url** | **string** |  |
**theme** | **object** | Same keys as the &#x60;welcomeTheme&#x60; parameter of &#x60;GET /v1/connect/{platform}&#x60;. |
**status** | **string** |  |
**platforms** | **string[]** |  |
**content_rules** | **string** |  |
**starts_at** | **\DateTime** |  |
**ends_at** | **\DateTime** |  |
**currency** | **string** |  |
**economics** | [**\Zernio\Model\CreatorPortalEconomics**](CreatorPortalEconomics.md) |  |
**max_post_age_minutes** | **int** | A post must be submitted within this many minutes of publishing. Null means any age. Either way, only posts published after the campaign started are accepted. |
**hold_days** | **int** | Days approved earnings stay owed before they become payable. |
**tracking_days** | **int** | Days each submitted post is tracked for views. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
