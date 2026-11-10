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
**started_at** | **\DateTime** | Posts published before this moment do not count: &#x60;startsAt&#x60;, else when the campaign went live. |
**currency** | **string** |  |
**economics** | [**\Zernio\Model\CreatorPortalEconomics**](CreatorPortalEconomics.md) |  |
**max_post_age_minutes** | **int** | A post must be submitted within this many minutes of publishing. Null means any age. Either way, only posts published after the campaign started are accepted. |
**hold_days** | **int** | Days approved earnings stay owed before they become payable. |
**tracking_days** | **int** | Days each submitted post is tracked for views. |
**max_accounts_per_participant** | **int** | How many connected accounts can submit posts. Null means no limit. |
**join_approval** | **string** | manual: a creator who joins through the open link waits &#x60;pending&#x60; until the campaign team accepts them. |
**require_draft_approval** | **bool** | The creator uploads a draft for review first, and submits the live post for an approved draft. |
**sample_products** | [**\Zernio\Model\CreatorCampaignSampleProduct[]**](CreatorCampaignSampleProduct.md) | Products the creator can ask a free sample of; empty when the campaign offers none. |
**sample_content_due_days** | **int** | Days after a sample is approved by which a post is expected. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
