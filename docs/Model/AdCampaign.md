# # AdCampaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform_campaign_id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**campaign_name** | **string** |  | [optional]
**status** | [**\Zernio\Model\AdStatus**](AdStatus.md) | Delivery status derived from child ad statuses. Distinct from &#x60;reviewStatus&#x60;. | [optional]
**review_status** | [**\Zernio\Model\AdReviewStatus**](AdReviewStatus.md) |  | [optional]
**platform_campaign_status** | **string** | Raw platform-level campaign status (Meta &#x60;effective_status&#x60;; ChatGPT (OpenAI): the campaign&#39;s own switch, active / paused / archived; TikTok: the campaign&#39;s own switch &#x60;operation_status&#x60;, ENABLE / DISABLE; Reddit: the campaign&#39;s &#x60;configured_status&#x60;, ACTIVE / PAUSED / ARCHIVED). | [optional]
**status_read_at** | **\DateTime** | Only on GET /v1/ads/campaigns with &#x60;live&#x3D;true&#x60;. When &#x60;platformCampaignStatus&#x60; was read from the platform; null when this campaign could not be read live. | [optional]
**native_settings** | **array<string,mixed>** | TikTok only, only on GET /v1/ads/campaigns with &#x60;live&#x3D;true&#x60; and only on campaigns read live. A fixed subset of TikTok&#39;s campaign/get record, not the whole record, each field with TikTok&#39;s own value and present only when TikTok returns it:  - campaign_id, operation_status, objective_type - budget_mode (BUDGET_MODE_INFINITE means no campaign budget, so budget lives on the ad groups) - budget and budget_optimize_on  Plus advertiser_currency and advertiser_timezone from TikTok&#39;s advertiser/info. Whether the campaign is Upgraded Smart+ is &#x60;isSmartPlus&#x60;. | [optional]
**config_read_at** | **\DateTime** | Only on GET /v1/ads/campaigns with &#x60;live&#x3D;true&#x60;. When &#x60;nativeSettings&#x60; was read from the platform. Null whenever native settings were not read now. | [optional]
**campaign_issues_info** | **object[]** | Platform-reported campaign issues (Meta &#x60;issues_info[]&#x60;). | [optional]
**ad_count** | **int** |  | [optional]
**budget** | [**\Zernio\Model\AdCampaignBudget**](AdCampaignBudget.md) |  | [optional]
**campaign_budget** | [**\Zernio\Model\AdCampaignBudget**](AdCampaignBudget.md) |  | [optional]
**budget_level** | **string** | Canonical CBO/ABO indicator. See AdTreeCampaign.budgetLevel. | [optional]
**is_budget_schedule_enabled** | **bool** | Meta-only. Mirrors Campaign.is_budget_schedule_enabled. | [optional] [default to false]
**currency** | **string** | ISO 4217 currency code for all budget amounts. Budgets are NOT normalized to USD. | [optional]
**metrics** | [**\Zernio\Model\AdMetrics**](AdMetrics.md) |  | [optional]
**platform_ad_account_id** | **string** |  | [optional]
**platform_ad_account_name** | **string** | Human-readable advertiser/account name from the platform. Refreshed on every sync. | [optional]
**account_id** | **string** |  | [optional]
**profile_id** | **string** | Profile the row belongs to: the profile of its owning connection (&#x60;accountId&#x60;); when that connection no longer exists, the requested profile (&#x60;profileId&#x60; filter) that reaches the row ad account, else the profile of the oldest connection of the row owner that reaches it. | [optional]
**is_smart_plus** | **bool** | TikTok only. true when the campaign is an Upgraded Smart+ campaign. See AdTreeCampaign.isSmartPlus. | [optional]
**advertising_channel_type** | **string** | Google-only. Raw campaign.advertising_channel_type. See AdTreeCampaign.advertisingChannelType. | [optional]
**platform_objective** | **string** | Raw Meta campaign objective (e.g. OUTCOME_SALES, OUTCOME_LEADS, OUTCOME_TRAFFIC) | [optional]
**optimization_goal** | [**\Zernio\Model\AdCampaignOptimizationGoal**](AdCampaignOptimizationGoal.md) |  | [optional]
**bid_strategy** | [**\Zernio\Model\BidStrategy**](BidStrategy.md) |  | [optional]
**bid_amount** | **float** | Representative bid from the top-spending ad set (whole currency units). Meta: populated when bidStrategy is LOWEST_COST_WITH_BID_CAP or COST_CAP. LinkedIn: the campaign unitCost, ungated, where 0 is a real delivery-stopping value. | [optional]
**roas_average_floor** | **float** | Representative ROAS floor from the top-spending ad set. Decimal multiplier (2.0 &#x3D; 2.0x). | [optional]
**promoted_object** | [**\Zernio\Model\AdTreeCampaignPromotedObject**](AdTreeCampaignPromotedObject.md) |  | [optional]
**earliest_ad** | **\DateTime** |  | [optional]
**latest_ad** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
