# # AdRuleActionOneOf5

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Move a Google campaign&#39;s target CPA or target ROAS inside the strategy it is on (Target CPA or Maximize conversions for &#x60;cpa&#x60;, Target ROAS or Maximize conversion value for &#x60;roas&#x60;), never switching strategies. Campaign rules on Google only. Skipped with &#x60;portfolio_bid_strategy&#x60; on a portfolio strategy, &#x60;unsupported_bid_strategy&#x60; on one with no target (Manual CPC, Maximize clicks), and &#x60;no_target_cpa&#x60; or &#x60;no_target_roas&#x60; when the strategy holds no such target. A target CPA in a zero-decimal currency is rounded to whole units. |
**target** | **string** | Which target moves: &#x60;cpa&#x60; in the ad account currency, &#x60;roas&#x60; as a ratio (3 is 300%). |
**amount** | **float** | The target to set. | [optional]
**direction** | **string** |  | [optional]
**percent** | **int** | Step size. A decrease is at most 90. | [optional]
**limit** | **float** | The target never goes above this on an increase, or below it on a decrease. | [optional]
**max_changes_per_day** | **int** | At most this many objects changed in any 24 hours, across runs. Matches over the limit are skipped with &#x60;daily_limit_reached&#x60; and tried again later. | [optional]
**max_changes_per_object** | **int** | At most this many changes to one object by this rule, counted over the last 400 days. An object at the limit is left alone like one in cooldown. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
