# # MetaAdsPlatformData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bid_strategy** | [**\Zernio\Model\BidStrategy**](BidStrategy.md) |  | [optional]
**bid_amount** | **float** | Whole currency units (USD: 5 &#x3D; $5.00). Required when bidStrategy is LOWEST_COST_WITH_BID_CAP or COST_CAP. May also be sent alone, WITHOUT bidStrategy, to set the cap on an ad set joining a COST_CAP / LOWEST_COST_WITH_BID_CAP campaign (the strategy is inherited from the campaign). On POST /v1/ads/create that shape requires existingCampaignId and is a 400 otherwise; on POST /v1/ads/boost it is promoted to LOWEST_COST_WITH_BID_CAP. | [optional]
**roas_average_floor** | **float** | Decimal ROAS multiplier (2.0 &#x3D; 2.0x). Required when bidStrategy is LOWEST_COST_WITH_MIN_ROAS; sending it without bidStrategy is a 400. | [optional]
**daily_min_spend_target** | **float** | Meta daily_min_spend_target on the ad set being created: the least it should spend per day, in whole currency units. It reserves a share of a CAMPAIGN budget, so it requires budgetLevel campaign or an existingCampaignId whose campaign has the budget (Advantage campaign budget / CBO); with an ad-set budget it is a 400, because Meta rejects a spend limit on an ad set that owns its budget. A target, not a guarantee. Mutually exclusive with lifetimeMinSpendTarget: the flavour must match the campaign budget type. Rejected with 400 on POST /v1/ads/boost and in adSetId attach mode: use PUT /v1/ads/ad-sets/{adSetId} for an ad set that already exists. | [optional]
**lifetime_min_spend_target** | **float** | Meta lifetime_min_spend_target: the lifetime-budget flavour of dailyMinSpendTarget, in whole currency units. Same rules and same rejections. | [optional]
**customer_lifecycle** | [**\Zernio\Model\MetaCustomerLifecycle**](MetaCustomerLifecycle.md) |  | [optional]
**ad_schedule** | [**\Zernio\Model\MetaAdScheduleInner[]**](MetaAdScheduleInner.md) | Dayparting on the ad set being created (Meta &#x60;adset_schedule&#x60; with &#x60;pacing_type: [\&quot;day_parting\&quot;]&#x60;). Meta runs a schedule only on a LIFETIME budget, so a daily budget (on the ad set, or on the campaign joined with &#x60;existingCampaignId&#x60;) is a 400 with &#x60;param: platformSpecificData.adSchedule&#x60;. Also a 400 when empty, in adSetId attach mode and with &#x60;buyingType: RESERVED&#x60;. Change it later with &#x60;PUT /v1/ads/ad-sets/{adSetId}&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
