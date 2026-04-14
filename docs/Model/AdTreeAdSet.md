# # AdTreeAdSet

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform_ad_set_id** | **string** |  | [optional]
**ad_set_name** | **string** |  | [optional]
**status** | [**\Late\Model\AdStatus**](AdStatus.md) | Derived from child ad statuses | [optional]
**ad_count** | **int** |  | [optional]
**budget** | [**\Late\Model\AdBudget**](AdBudget.md) |  | [optional]
**metrics** | [**\Late\Model\AdMetrics**](AdMetrics.md) |  | [optional]
**optimization_goal** | **string** | Meta ad set optimization goal (e.g. OFFSITE_CONVERSIONS, VALUE, LEAD_GENERATION) | [optional]
**bid_strategy** | **string** | Bid strategy for this ad set (overrides campaign level when set) | [optional]
**promoted_object** | [**\Late\Model\AdTreeAdSetPromotedObject**](AdTreeAdSetPromotedObject.md) |  | [optional]
**ads** | [**\Late\Model\Ad[]**](Ad.md) | Individual ads within this ad set (capped at 100). Returns a subset of Ad fields from the aggregation (core fields like _id, name, platform, status, budget, metrics, creative, goal are included; targeting and schedule may be absent). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
