# # AdRuleActionOneOf6

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Set the daily budget to an exact amount, such as a reset every midnight. Same level rules as the percent change. |
**amount** | **float** | The daily budget to set, in the ad account currency. An object already at it is skipped with &#x60;already_at_amount&#x60;. |
**max_changes_per_day** | **int** | At most this many objects changed in any 24 hours, across runs. Matches over the limit are skipped with &#x60;daily_limit_reached&#x60; and tried again later. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
