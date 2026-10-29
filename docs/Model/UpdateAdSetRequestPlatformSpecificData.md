# # UpdateAdSetRequestPlatformSpecificData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**optimization_goal** | **string** | Meta ad-set optimization_goal (e.g. OFFSITE_CONVERSIONS, LANDING_PAGE_VIEWS). | [optional]
**billing_event** | **string** | Meta ad-set billing_event (e.g. IMPRESSIONS, LINK_CLICKS, THRUPLAY). | [optional]
**start_date** | **string** | Ad set start_time (ISO 8601). A value without an offset (&#x60;YYYY-MM-DD&#x60;, &#x60;YYYY-MM-DD HH:MM:SS&#x60; or &#x60;YYYY-MM-DDTHH:MM:SS&#x60;) is read in the ad account timezone. | [optional]
**end_date** | **string** | Ad set end_time (ISO 8601). A value without an offset (&#x60;YYYY-MM-DD&#x60;, &#x60;YYYY-MM-DD HH:MM:SS&#x60; or &#x60;YYYY-MM-DDTHH:MM:SS&#x60;) is read in the ad account timezone. | [optional]
**daily_min_spend_target** | **float** | Meta &#x60;daily_min_spend_target&#x60;: the least this ad set should spend per day, in whole currency units of the ad account.  It reserves a share of a CAMPAIGN budget for one ad set, so the campaign must use Advantage campaign budget (CBO). On an ad set that owns its budget (ABO) it returns 409; move the budget to the campaign with &#x60;PUT /v1/ads/campaigns/{campaignId}&#x60; first.  Meta treats it as a target, not a guarantee, and rejects a combined minimum of a campaign&#39;s ad sets above the campaign budget.  Mutually exclusive with &#x60;lifetimeMinSpendTarget&#x60; (400): the flavour must match the campaign budget type, so a daily budget takes a daily target.  Read it back with &#x60;GET /v1/ads/ad-sets/{adSetId}?fields&#x3D;daily_min_spend_target&#x60;. | [optional]
**lifetime_min_spend_target** | **float** | Meta &#x60;lifetime_min_spend_target&#x60;: the lifetime-budget flavour of &#x60;dailyMinSpendTarget&#x60;, in whole currency units. Send this one when the campaign budget is a lifetime budget. Same rules and same rejections. | [optional]
**customer_lifecycle** | [**\Zernio\Model\MetaCustomerLifecycle**](MetaCustomerLifecycle.md) |  | [optional]
**ad_schedule** | [**\Zernio\Model\MetaAdScheduleInner[]**](MetaAdScheduleInner.md) | Replaces the ad set&#39;s dayparting (Meta &#x60;adset_schedule&#x60;, &#x60;pacing_type: [\&quot;day_parting\&quot;]&#x60;). An empty array removes the schedule (&#x60;pacing_type: [\&quot;standard\&quot;]&#x60;).  Meta runs a schedule only on a lifetime budget. Before writing anything, Zernio takes &#x60;budget.type&#x60; from the same request or reads the ad set&#39;s budget (or its campaign&#39;s under Advantage campaign budget). A daily one is a 400 with &#x60;param: platformSpecificData.adSchedule&#x60;.  Read it back with &#x60;GET /v1/ads/ad-sets/{adSetId}&#x60; (&#x60;adset_schedule&#x60;, &#x60;pacing_type&#x60;) or as &#x60;adSchedule&#x60; on &#x60;GET /v1/ads/accounts/live&#x60;. | [optional]
**promoted_object** | [**\Zernio\Model\UpdateAdSetRequestPlatformSpecificDataPromotedObject**](UpdateAdSetRequestPlatformSpecificDataPromotedObject.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
