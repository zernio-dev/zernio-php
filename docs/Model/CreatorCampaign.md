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
**settlement** | **string** | none: settle records a payout made elsewhere. external: you pay from your own rails on campaign_payout.payable and settle with your reference. treasury: settle moves the money from your Zernio balance to the creator&#39;s Stripe account, and the creator sets up payouts from their campaign page. |
**economics** | [**\Zernio\Model\CreatorCampaignEconomics**](CreatorCampaignEconomics.md) |  |
**caps** | [**\Zernio\Model\CreatorCampaignCaps**](CreatorCampaignCaps.md) |  |
**branding** | [**\Zernio\Model\CreatorCampaignBranding**](CreatorCampaignBranding.md) |  |
**budget_exhausted_at** | **\DateTime** |  |
**closed_at** | **\DateTime** |  |
**payable_scanned_at** | **\DateTime** | Internal watermark of the payable scan. |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |
**has_open_invite** | **bool** | True once an open invite link was created. The link itself is returned only when it is created. |
**consumed_cents** | **int** | Budget used so far: earnings accrued, approved or adjusted against the campaign. |
**participant_count** | **int** |  |
**submission_counts** | [**\Zernio\Model\CampaignSubmissionCounts**](CampaignSubmissionCounts.md) |  |
**payable_cents** | **int** | What the campaign&#39;s creators can be paid now, summed over every participant&#39;s payable balance. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
