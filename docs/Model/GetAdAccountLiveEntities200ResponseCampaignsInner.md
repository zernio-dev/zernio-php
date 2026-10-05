# # GetAdAccountLiveEntities200ResponseCampaignsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform_campaign_id** | **string** |  | [optional]
**campaign_name** | **string** |  | [optional]
**platform_campaign_status** | **string** | Meta &#x60;effective_status&#x60;, for example ACTIVE, PAUSED, WITH_ISSUES. | [optional]
**configured_status** | **string** | Meta &#x60;status&#x60;: the campaign&#39;s own switch (ACTIVE, PAUSED, DELETED, ARCHIVED). | [optional]
**status** | **string** | Zernio&#39;s normalized status (active, paused, ...), derived from &#x60;platformCampaignStatus&#x60;. | [optional]
**budget** | [**\Zernio\Model\GetAdAccountLiveEntities200ResponseCampaignsInnerBudget**](GetAdAccountLiveEntities200ResponseCampaignsInnerBudget.md) |  | [optional]
**daily_budget** | **float** | Meta &#x60;daily_budget&#x60; in whole units of &#x60;currency&#x60;. | [optional]
**lifetime_budget** | **float** | Meta &#x60;lifetime_budget&#x60; in whole units of &#x60;currency&#x60;. | [optional]
**budget_remaining** | **float** | Meta &#x60;budget_remaining&#x60; in whole units of &#x60;currency&#x60;. Null when the campaign has no budget of its own. | [optional]
**spend_cap** | **float** | Campaign spending limit (Meta &#x60;spend_cap&#x60;) in whole units of &#x60;currency&#x60;. Null when none is set. | [optional]
**bid_strategy** | **string** | Meta &#x60;bid_strategy&#x60;, set on campaigns with a campaign budget. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
