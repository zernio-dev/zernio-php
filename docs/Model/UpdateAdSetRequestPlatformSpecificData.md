# # UpdateAdSetRequestPlatformSpecificData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**optimization_goal** | **string** | Meta ad-set optimization_goal (e.g. OFFSITE_CONVERSIONS, LANDING_PAGE_VIEWS). | [optional]
**billing_event** | **string** | Meta ad-set billing_event (e.g. IMPRESSIONS, LINK_CLICKS, THRUPLAY). | [optional]
**start_date** | **string** | Ad set start_time (ISO 8601). | [optional]
**end_date** | **string** | Ad set end_time (ISO 8601). | [optional]
**daily_min_spend_target** | **float** | Meta &#x60;daily_min_spend_target&#x60;: the least this ad set should spend per day, in whole currency units of the ad account. It reserves a share of a CAMPAIGN budget for one ad set, so it requires a campaign using Advantage campaign budget (CBO). On an ad set that owns its budget (ABO) this returns 409. Move the budget to the campaign with &#x60;PUT /v1/ads/campaigns/{campaignId}&#x60; first. Meta treats it as a target, not a guarantee, and rejects the combined minimum of a campaign&#39;s ad sets going over the campaign budget. Mutually exclusive with &#x60;lifetimeMinSpendTarget&#x60; (400): the flavour must match the campaign budget type, a daily budget takes a daily target. Read it back with &#x60;GET /v1/ads/ad-sets/{adSetId}?fields&#x3D;daily_min_spend_target&#x60;. | [optional]
**lifetime_min_spend_target** | **float** | Meta &#x60;lifetime_min_spend_target&#x60;: the lifetime-budget flavour of &#x60;dailyMinSpendTarget&#x60;, in whole currency units. Send this one when the campaign budget is a lifetime budget. Same rules and same rejections. | [optional]
**promoted_object** | [**\Zernio\Model\UpdateAdSetRequestPlatformSpecificDataPromotedObject**](UpdateAdSetRequestPlatformSpecificDataPromotedObject.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
