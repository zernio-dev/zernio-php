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
**bid_strategy** | [**\Zernio\Model\BidStrategy**](BidStrategy.md) |  | [optional]
**bid_amount** | **float** | Bid cap in whole currency units. Populated when bidStrategy is LOWEST_COST_WITH_BID_CAP or COST_CAP. | [optional]
**roas_average_floor** | **float** | Minimum ROAS as a decimal multiplier (2.0 &#x3D; 2.0x). Populated when bidStrategy is LOWEST_COST_WITH_MIN_ROAS. | [optional]
**promoted_object** | [**\Zernio\Model\AdTreeAdSetPromotedObject**](AdTreeAdSetPromotedObject.md) |  | [optional]
**ads** | [**\Zernio\Model\Ad[]**](Ad.md) | Individual ads within this ad set (capped at 100). Returns a subset of Ad fields from the aggregation (core fields like _id, name, platform, status, budget, metrics, creative, goal are included; targeting and schedule may be absent). When &#x60;timeIncrement&#x3D;1&amp;dailyLevel&#x3D;ad&#x60;, each entry also carries a &#x60;daily[]&#x60; array of &#x60;AdDailyMetrics&#x60;. | [optional]
**daily** | [**\Zernio\Model\AdDailyMetrics[]**](AdDailyMetrics.md) | Per-day metric series for this ad set. Present only when &#x60;GET /v1/ads/tree&#x60; is called with &#x60;timeIncrement&#x3D;1&#x60; and &#x60;dailyLevel&#x60; is &#x60;adset&#x60; or &#x60;ad&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
