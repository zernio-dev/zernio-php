# # AdRuleActionOneOf3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Copy the campaign or ad set with its ads, on Meta and TikTok campaigns and ad sets and LinkedIn campaigns. Not on ad-level rules. |
**status** | **string** | How the copy starts. Defaults to &#x60;paused&#x60;. | [optional]
**rename_suffix** | **string** | Text added to the copy&#39;s name. | [optional]
**max_changes_per_day** | **int** | At most this many objects changed in any 24 hours, across runs. Matches over the limit are skipped with &#x60;daily_limit_reached&#x60; and tried again later. | [optional]
**max_changes_per_object** | **int** | At most this many changes to one object by this rule, counted over the last 400 days. An object at the limit is left alone like one in cooldown. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
