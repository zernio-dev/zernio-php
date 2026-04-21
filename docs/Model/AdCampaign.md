# # AdCampaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform_campaign_id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**campaign_name** | **string** |  | [optional]
**status** | [**\Late\Model\AdStatus**](AdStatus.md) | Delivery status derived from child ad statuses. Distinct from &#x60;reviewStatus&#x60;. | [optional]
**review_status** | **string** | Platform-side review state of the campaign. See AdTreeCampaign.reviewStatus for the full description. | [optional]
**platform_campaign_status** | **string** | Raw platform-level campaign status (Meta &#x60;effective_status&#x60;). | [optional]
**campaign_issues_info** | **object[]** | Platform-reported campaign issues (Meta &#x60;issues_info[]&#x60;). | [optional]
**ad_count** | **int** |  | [optional]
**budget** | [**\Late\Model\AdCampaignBudget**](AdCampaignBudget.md) |  | [optional]
**campaign_budget** | [**\Late\Model\AdCampaignCampaignBudget**](AdCampaignCampaignBudget.md) |  | [optional]
**budget_level** | **string** | Canonical CBO/ABO indicator. See AdTreeCampaign.budgetLevel. | [optional]
**is_budget_schedule_enabled** | **bool** | Meta-only. Mirrors Campaign.is_budget_schedule_enabled. | [optional] [default to false]
**currency** | **string** | ISO 4217 currency code for all budget amounts. Budgets are NOT normalized to USD. | [optional]
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
