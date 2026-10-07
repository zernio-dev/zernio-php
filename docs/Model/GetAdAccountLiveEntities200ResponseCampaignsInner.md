# # GetAdAccountLiveEntities200ResponseCampaignsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform_campaign_id** | **string** |  | [optional]
**campaign_name** | **string** |  | [optional]
**platform_campaign_status** | **string** | Meta &#x60;effective_status&#x60; (ACTIVE, PAUSED, WITH_ISSUES...) or TikTok &#x60;secondary_status&#x60; (CAMPAIGN_STATUS_ENABLE...). | [optional]
**configured_status** | **string** | The campaign&#39;s own switch: Meta &#x60;status&#x60; (ACTIVE, PAUSED, DELETED, ARCHIVED), or TikTok &#x60;operation_status&#x60; as ACTIVE (ENABLE) / PAUSED (DISABLE). | [optional]
**status** | **string** | Zernio&#39;s normalized status (active, paused, ...), derived from &#x60;platformCampaignStatus&#x60;. | [optional]
**budget** | [**\Zernio\Model\GetAdAccountLiveEntities200ResponseCampaignsInnerBudget**](GetAdAccountLiveEntities200ResponseCampaignsInnerBudget.md) |  | [optional]
**daily_budget** | **float** | Daily budget in whole units of &#x60;currency&#x60; (Meta &#x60;daily_budget&#x60;; TikTok &#x60;budget&#x60; under a daily budget mode). | [optional]
**lifetime_budget** | **float** | Lifetime budget in whole units of &#x60;currency&#x60; (Meta &#x60;lifetime_budget&#x60;; TikTok &#x60;budget&#x60; under BUDGET_MODE_TOTAL). | [optional]
**budget_mode** | **string** | TikTok only: &#x60;budget_mode&#x60; as TikTok reports it (BUDGET_MODE_DAY, BUDGET_MODE_DYNAMIC_DAILY_BUDGET, BUDGET_MODE_TOTAL, BUDGET_MODE_INFINITE). | [optional]
**budget_remaining** | **float** | Meta &#x60;budget_remaining&#x60; in whole units of &#x60;currency&#x60;. Null when the campaign has no budget of its own, and always on TikTok. | [optional]
**spend_cap** | **float** | Campaign spending limit (Meta &#x60;spend_cap&#x60;) in whole units of &#x60;currency&#x60;. Null when none is set, and always on TikTok. | [optional]
**bid_strategy** | **string** | Meta &#x60;bid_strategy&#x60;, set on campaigns with a campaign budget. Null on TikTok. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
