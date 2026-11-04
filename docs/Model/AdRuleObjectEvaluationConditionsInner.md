# # AdRuleObjectEvaluationConditionsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**metric** | **string** |  |
**window** | **string** |  |
**op** | **string** | &#x60;top&#x60; and &#x60;bottom&#x60; rank the rule&#39;s objects by the metric over the window, highest first for &#x60;top&#x60;, and match the first &#x60;value&#x60; (a whole number from 1 to 100). Objects with no value are not ranked; the run history shows each one&#39;s position. |
**value** | **float** |  |
**compare_to** | **string** | Makes the condition relative: &#x60;value&#x60; becomes a ratio of the metric over &#x60;window&#x60; to the same metric over this window, such as &#x60;30_to_2_days_ago&#x60;.  &#x60;previous_period&#x60; is the same number of days just before &#x60;window&#x60;. For &#x60;this_month&#x60; it is the same days of last month, and for &#x60;last_month&#x60; the month before.  Spend, impressions, clicks, conversions and reach are compared per day, so windows of different lengths compare fairly; rates such as &#x60;cpc&#x60; compare as they are. A comparison window with no value never matches. | [optional]
**actual** | **float** | The object&#39;s value over the window. Null when it cannot be computed. |
**met** | **bool** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
