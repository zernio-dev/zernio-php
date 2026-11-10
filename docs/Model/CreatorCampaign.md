# # CreatorCampaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**user_id** | **string** | The workspace billing owner the campaign belongs to. |
**profile_id** | **string** | The profile that scopes the campaign: API keys, teammates and webhooks scoped to it reach the campaign. |
**kind** | **string** |  |
**name** | **string** |  |
**brand_name** | **string** |  |
**status** | **string** | draft until activated; active accepts submissions and accrues; paused stops new submissions; closed is final. |
**type** | **string** | Same as economics.type. |
**currency** | **string** |  |
**platforms** | **string[]** |  |
**content_rules** | **string** | Free-text rules shown to creators on the join page. |
**starts_at** | **\DateTime** |  |
**ends_at** | **\DateTime** | No new submissions after this time; the campaign closes once every tracking window had its final read. |
**tracking_days** | **int** | How long each submitted post is tracked. |
**hold_days** | **int** | Days approved earnings are held before they become payable. |
**max_post_age_minutes** | **int** | A post older than this many minutes when submitted is refused. Null (the default) accepts any age. Either way, a post published before the campaign started (&#x60;startsAt&#x60;, or &#x60;activatedAt&#x60; without one) is refused. |
**activated_at** | **\DateTime** | When the campaign was first activated. Without &#x60;startsAt&#x60;, posts must be published after this moment. |
**settlement** | **string** | none: settle records a payout made elsewhere. external: you pay from your own rails on campaign_payout.payable and settle with your reference. treasury: you pay by card with a payout batch and Zernio pays each creator in your name 7 days after the charge. |
**economics** | [**\Zernio\Model\CreatorCampaignEconomics**](CreatorCampaignEconomics.md) |  |
**caps** | [**\Zernio\Model\CreatorCampaignCaps**](CreatorCampaignCaps.md) |  |
**branding** | [**\Zernio\Model\CreatorCampaignBranding**](CreatorCampaignBranding.md) |  |
**budget_exhausted_at** | **\DateTime** |  |
**closed_at** | **\DateTime** |  |
**payable_scanned_at** | **\DateTime** | Internal watermark of the payable scan. |
**join_approval** | **string** | auto: creators who join through the open link are active at once. manual: they land &#x60;pending&#x60; until you approve or deny them. Personal invites are never held. |
**require_draft_approval** | **bool** | Creators upload a draft for review first, and submit the live post for an approved draft (&#x60;draftId&#x60;). |
**store_account_id** | **string** | The connected store (Shopify or WooCommerce) whose orders pay commission and whose products creators can ask as samples. Null when the campaign has neither. |
**sample_products** | [**\Zernio\Model\CreatorCampaignSampleProduct[]**](CreatorCampaignSampleProduct.md) | Products creators can ask a free sample of. |
**sample_content_due_days** | **int** | Days after a sample is approved before a creator with no post since shows as owing content (&#x60;contentOwed&#x60;). |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |
**has_open_invite** | **bool** | True once an open invite link was created. The link itself is returned only when it is created. |
**consumed_cents** | **int** | Budget used so far: earnings accrued, approved or adjusted against the campaign. |
**participant_count** | **int** |  |
**submission_counts** | [**\Zernio\Model\CampaignSubmissionCounts**](CampaignSubmissionCounts.md) |  |
**payable_cents** | **int** | What the campaign&#39;s creators can be paid now, summed over every participant&#39;s payable balance. |
**landing_url** | **string** | The page creator tracking links open. | [optional]
**code_discount_percent** | **int** | What each creator discount code takes off. | [optional]
**auto_payout** | [**\Zernio\Model\CreatorCampaignAutoPayout**](CreatorCampaignAutoPayout.md) |  | [optional]
**pending_participant_count** | **int** | Creators who asked to join through the open link and wait for a decision. Not counted in &#x60;participantCount&#x60;. |
**draft_counts** | [**\Zernio\Model\CampaignDraftCounts**](CampaignDraftCounts.md) |  |
**sample_counts** | [**\Zernio\Model\CampaignSampleCounts**](CampaignSampleCounts.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
