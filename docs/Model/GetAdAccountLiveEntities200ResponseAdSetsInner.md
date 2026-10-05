# # GetAdAccountLiveEntities200ResponseAdSetsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform_ad_set_id** | **string** |  | [optional]
**ad_set_name** | **string** |  | [optional]
**platform_campaign_id** | **string** |  | [optional]
**platform_ad_set_status** | **string** | Meta &#x60;effective_status&#x60;, for example ACTIVE, PAUSED, CAMPAIGN_PAUSED. | [optional]
**configured_status** | **string** | Meta &#x60;status&#x60;: the ad set&#39;s own switch. | [optional]
**status** | **string** | Zernio&#39;s normalized status, derived from &#x60;platformAdSetStatus&#x60;. | [optional]
**budget** | [**\Zernio\Model\GetAdAccountLiveEntities200ResponseAdSetsInnerBudget**](GetAdAccountLiveEntities200ResponseAdSetsInnerBudget.md) |  | [optional]
**daily_budget** | **float** | Meta &#x60;daily_budget&#x60; in whole units of &#x60;currency&#x60;. | [optional]
**lifetime_budget** | **float** | Meta &#x60;lifetime_budget&#x60; in whole units of &#x60;currency&#x60;. | [optional]
**budget_remaining** | **float** | Meta &#x60;budget_remaining&#x60; in whole units of &#x60;currency&#x60;. Null when the ad set has no budget of its own. | [optional]
**bid_strategy** | **string** | Meta &#x60;bid_strategy&#x60;. | [optional]
**bid_amount** | **float** | Meta &#x60;bid_amount&#x60; (bid cap or cost target) in whole units of &#x60;currency&#x60;. Null when the strategy has none. | [optional]
**optimization_goal** | **string** | Meta &#x60;optimization_goal&#x60;. | [optional]
**billing_event** | **string** | Meta &#x60;billing_event&#x60;. | [optional]
**promoted_object** | **array<string,mixed>** | Meta &#x60;promoted_object&#x60; verbatim (snake_case). | [optional]
**targeting** | **array<string,mixed>** | Meta &#x60;targeting&#x60; verbatim (snake_case), as Meta returns it now. | [optional]
**schedule** | [**\Zernio\Model\GetAdAccountLiveEntities200ResponseAdSetsInnerSchedule**](GetAdAccountLiveEntities200ResponseAdSetsInnerSchedule.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
