# # AdTreeAdSet

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform_ad_set_id** | **string** |  | [optional]
**ad_set_name** | **string** |  | [optional]
**status** | [**\Zernio\Model\AdStatus**](AdStatus.md) | Derived from child ad statuses | [optional]
**ad_count** | **int** |  | [optional]
**budget** | [**\Zernio\Model\AdTreeAdSetBudget**](AdTreeAdSetBudget.md) |  | [optional]
**ad_set_budget** | [**\Zernio\Model\AdTreeAdSetAdSetBudget**](AdTreeAdSetAdSetBudget.md) |  | [optional]
**metrics** | [**\Zernio\Model\AdMetrics**](AdMetrics.md) |  | [optional]
**optimization_goal** | **string** | Meta ad set optimization goal (e.g. OFFSITE_CONVERSIONS, VALUE, LEAD_GENERATION) | [optional]
**bid_strategy** | [**\Zernio\Model\BidStrategy**](BidStrategy.md) | Bid strategy for this ad set (overrides campaign level when set) | [optional]
**bid_amount** | **float** | Bid cap in whole currency units. Populated when bidStrategy is LOWEST_COST_WITH_BID_CAP or COST_CAP. | [optional]
**roas_average_floor** | **float** | Minimum ROAS as a decimal multiplier (2.0 &#x3D; 2.0x). Populated when bidStrategy is LOWEST_COST_WITH_MIN_ROAS. | [optional]
**promoted_object** | [**\Zernio\Model\AdTreeAdSetPromotedObject**](AdTreeAdSetPromotedObject.md) |  | [optional]
**ads** | [**\Zernio\Model\Ad[]**](Ad.md) | Individual ads within this ad set (capped at 100). Returns a subset of Ad fields from the aggregation (core fields like _id, name, platform, status, budget, metrics, creative, goal are included; targeting and schedule may be absent). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
