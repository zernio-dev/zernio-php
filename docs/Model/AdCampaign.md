# # AdCampaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform_campaign_id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**campaign_name** | **string** |  | [optional]
**status** | [**\Late\Model\AdStatus**](AdStatus.md) | Derived from child ad statuses | [optional]
**ad_count** | **int** |  | [optional]
**budget** | [**\Late\Model\AdBudget**](AdBudget.md) |  | [optional]
**metrics** | [**\Late\Model\AdMetrics**](AdMetrics.md) |  | [optional]
**platform_ad_account_id** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**profile_id** | **string** |  | [optional]
**platform_objective** | **string** | Raw Meta campaign objective (e.g. OUTCOME_SALES, OUTCOME_LEADS, OUTCOME_TRAFFIC) | [optional]
**optimization_goal** | **string** | Meta optimization goal shared across ad sets, or comma-separated values when ad sets differ (e.g. OFFSITE_CONVERSIONS, VALUE, LEAD_GENERATION) | [optional]
**bid_strategy** | **string** | Campaign-level bid strategy (e.g. LOWEST_COST_WITHOUT_CAP, COST_CAP, LOWEST_COST_WITH_MIN_ROAS) | [optional]
**promoted_object** | [**\Late\Model\AdTreeCampaignPromotedObject**](AdTreeCampaignPromotedObject.md) |  | [optional]
**earliest_ad** | **\DateTime** |  | [optional]
**latest_ad** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
