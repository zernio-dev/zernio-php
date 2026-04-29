# # AdTreeCampaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform_campaign_id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**campaign_name** | **string** |  | [optional]
**status** | [**\Zernio\Model\AdStatus**](AdStatus.md) | Delivery status derived from child ad statuses. Distinct from &#x60;reviewStatus&#x60;, which reflects the platform-side review state. | [optional]
**review_status** | **string** | Platform-side review state of the campaign. Independent of the children-derived delivery &#x60;status&#x60;: a campaign can have ads already active (status&#x3D;active) while the campaign itself is still being reviewed by the platform (reviewStatus&#x3D;in_review). For Meta, derived from &#x60;effective_status&#x60; + &#x60;issues_info&#x60; on the Campaign, plus ad-level PENDING_REVIEW rollup. | [optional]
**platform_campaign_status** | **string** | Raw platform-level campaign status (Meta &#x60;effective_status&#x60;: ACTIVE, PAUSED, DELETED, ARCHIVED, IN_PROCESS, WITH_ISSUES). Distinct from per-ad &#x60;platformStatus&#x60;. | [optional]
**campaign_issues_info** | **object[]** | Platform-reported campaign issues (Meta &#x60;issues_info[]&#x60;). Populated only when the platform has delivery issues to report; contains the specific error codes and messages. | [optional]
**ad_count** | **int** | Total ads across all ad sets | [optional]
**ad_set_count** | **int** |  | [optional]
**budget** | [**\Zernio\Model\AdTreeCampaignBudget**](AdTreeCampaignBudget.md) |  | [optional]
**campaign_budget** | [**\Zernio\Model\AdTreeCampaignCampaignBudget**](AdTreeCampaignCampaignBudget.md) |  | [optional]
**budget_level** | **string** | Canonical CBO/ABO indicator. &#x60;campaign&#x60; &#x3D; CBO (Advantage Campaign Budget, budget lives on the campaign). &#x60;adset&#x60; &#x3D; ABO (budget lives on each ad set). Route budget updates to the matching Meta entity. | [optional]
**is_budget_schedule_enabled** | **bool** | Meta-only. Mirrors Campaign.is_budget_schedule_enabled — true when the campaign uses budget scheduling (time-based budget changes). Independent of CBO/ABO. | [optional] [default to false]
**currency** | **string** | ISO 4217 currency code (e.g. USD, EUR, CLP, JPY) for all budget amounts in this campaign node. Budgets are NOT normalized to USD. | [optional]
**metrics** | [**\Zernio\Model\AdMetrics**](AdMetrics.md) |  | [optional]
**platform_ad_account_id** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**profile_id** | **string** |  | [optional]
**platform_objective** | **string** | Raw Meta campaign objective (e.g. OUTCOME_SALES, OUTCOME_LEADS, OUTCOME_TRAFFIC) | [optional]
**optimization_goal** | **string** | Meta optimization goal shared across ad sets, or comma-separated values when ad sets differ (e.g. OFFSITE_CONVERSIONS, VALUE, LEAD_GENERATION) | [optional]
**bid_strategy** | [**\Zernio\Model\BidStrategy**](BidStrategy.md) | Campaign-level bid strategy. Ad sets inherit this unless they override. | [optional]
**bid_amount** | **float** | Representative bid cap for the campaign — bubbled up from the top-spending ad set&#39;s &#x60;bid_amount&#x60; (whole currency units). Populated when the ad-set bidStrategy is LOWEST_COST_WITH_BID_CAP or COST_CAP. | [optional]
**roas_average_floor** | **float** | Representative ROAS floor for the campaign — bubbled up from the top-spending ad set. Decimal multiplier (2.0 &#x3D; 2.0x). | [optional]
**promoted_object** | [**\Zernio\Model\AdTreeCampaignPromotedObject**](AdTreeCampaignPromotedObject.md) |  | [optional]
**ad_sets** | [**\Zernio\Model\AdTreeAdSet[]**](AdTreeAdSet.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
