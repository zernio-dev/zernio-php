# # AdRuleActionOneOf2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Reactivate a campaign, ad set or ad a rule paused, once &#x60;cooldownMinutes&#x60; has passed since the pause. Objects you paused yourself are left alone unless &#x60;includeManuallyPaused&#x60; is true. |
**include_manually_paused** | **bool** | Also reactivate paused objects that no rule paused, as soon as they match. | [optional]
**max_changes_per_day** | **int** | At most this many objects changed in any 24 hours, across runs. Matches over the limit are skipped with &#x60;daily_limit_reached&#x60; and tried again later. | [optional]
**max_changes_per_object** | **int** | At most this many changes to one object by this rule, counted over the last 400 days. An object at the limit is left alone like one in cooldown. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
