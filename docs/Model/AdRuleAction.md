# # AdRuleAction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Send the &#x60;ad_rule.triggered&#x60; webhook. |
**max_changes_per_day** | **int** | At most this many objects changed in any 24 hours, across runs. Matches over the limit are skipped with &#x60;daily_limit_reached&#x60; and tried again later. | [optional]
**direction** | **string** |  |
**percent** | **int** | Change in percent: up to 100 for an increase, up to 90 for a decrease. |
**limit** | **float** | The budget never goes above this on an increase, or below it on a decrease, in the ad account currency. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
