# # AdCampaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform_campaign_id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**campaign_name** | **string** |  | [optional]
**status** | [**\Zernio\Model\AdStatus**](AdStatus.md) | Delivery status derived from child ad statuses. Distinct from &#x60;reviewStatus&#x60;. | [optional]
**review_status** | **string** | Platform-side review state of the campaign. See AdTreeCampaign.reviewStatus for the full description. | [optional]
**platform_campaign_status** | **string** | Raw platform-level campaign status (Meta &#x60;effective_status&#x60;). | [optional]
**campaign_issues_info** | **object[]** | Platform-reported campaign issues (Meta &#x60;issues_info[]&#x60;). | [optional]
**ad_count** | **int** |  | [optional]
**budget** | [**\Zernio\Model\AdCampaignBudget**](AdCampaignBudget.md) |  | [optional]
**campaign_budget** | [**\Zernio\Model\AdCampaignCampaignBudget**](AdCampaignCampaignBudget.md) |  | [optional]
**budget_level** | **string** | Canonical CBO/ABO indicator. See AdTreeCampaign.budgetLevel. | [optional]
**is_budget_schedule_enabled** | **bool** | Meta-only. Mirrors Campaign.is_budget_schedule_enabled. | [optional] [default to false]
**currency** | **string** | ISO 4217 currency code for all budget amounts. Budgets are NOT normalized to USD. | [optional]
**metrics** | [**\Zernio\Model\AdMetrics**](AdMetrics.md) |  | [optional]
**platform_ad_account_id** | **string** |  | [optional]
**platform_ad_account_name** | **string** | Human-readable advertiser/account name from the platform. Refreshed on every sync. | [optional]
**account_id** | **string** |  | [optional]
**profile_id** | **string** |  | [optional]
**platform_objective** | **string** | Raw Meta campaign objective (e.g. OUTCOME_SALES, OUTCOME_LEADS, OUTCOME_TRAFFIC) | [optional]
**optimization_goal** | **string** | Meta optimization goal shared across ad sets, or comma-separated values when ad sets differ (e.g. OFFSITE_CONVERSIONS, VALUE, LEAD_GENERATION) | [optional]
**bid_strategy** | [**\Zernio\Model\BidStrategy**](BidStrategy.md) | Campaign-level bid strategy. Ad sets inherit this unless they override. | [optional]
**bid_amount** | **float** | Representative bid cap from the top-spending ad set (whole currency units). Populated when bidStrategy is LOWEST_COST_WITH_BID_CAP or COST_CAP. | [optional]
**roas_average_floor** | **float** | Representative ROAS floor from the top-spending ad set. Decimal multiplier (2.0 &#x3D; 2.0x). | [optional]
**promoted_object** | [**\Zernio\Model\AdTreeCampaignPromotedObject**](AdTreeCampaignPromotedObject.md) |  | [optional]
**earliest_ad** | **\DateTime** |  | [optional]
**latest_ad** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
