# # Ad

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**status** | [**\Late\Model\AdStatus**](AdStatus.md) |  | [optional]
**ad_type** | **string** |  | [optional]
**goal** | **string** |  | [optional]
**is_external** | **bool** | True for ads synced from platform ad managers | [optional]
**budget** | [**\Late\Model\AdBudget**](AdBudget.md) |  | [optional]
**metrics** | [**\Late\Model\AdMetrics**](AdMetrics.md) |  | [optional]
**platform_ad_id** | **string** |  | [optional]
**platform_ad_account_id** | **string** |  | [optional]
**platform_campaign_id** | **string** |  | [optional]
**platform_ad_set_id** | **string** |  | [optional]
**campaign_name** | **string** |  | [optional]
**ad_set_name** | **string** |  | [optional]
**platform_objective** | **string** | Raw Meta campaign objective (e.g. OUTCOME_SALES, OUTCOME_LEADS, OUTCOME_TRAFFIC). Only present for Meta ads. | [optional]
**optimization_goal** | **string** | Meta ad set optimization goal (e.g. OFFSITE_CONVERSIONS, VALUE, LEAD_GENERATION, LINK_CLICKS). Only present for Meta ads. | [optional]
**bid_strategy** | **string** | Bid strategy (e.g. LOWEST_COST_WITHOUT_CAP, COST_CAP, LOWEST_COST_WITH_MIN_ROAS). Ad set level overrides campaign level. Only present for Meta ads. | [optional]
**promoted_object** | [**\Late\Model\AdPromotedObject**](AdPromotedObject.md) |  | [optional]
**creative** | [**\Late\Model\AdCreative**](AdCreative.md) |  | [optional]
**targeting** | **object** |  | [optional]
**schedule** | [**\Late\Model\AdSchedule**](AdSchedule.md) |  | [optional]
**rejection_reason** | **string** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
