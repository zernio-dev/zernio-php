# # AdRuleActionOneOf7

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Tag the object by its name. Meta, TikTok and Reddit campaigns, ad sets and ads, and Google, LinkedIn and Pinterest campaigns and ad sets. An object whose name already has the tag (or lacks it, for &#x60;remove&#x60;) is skipped with &#x60;name_unchanged&#x60;. |
**add** | **string** | Text to add, like &#x60;[WINNER]&#x60;. Compared without case. | [optional]
**at** | **string** | Where &#x60;add&#x60; goes. Defaults to &#x60;start&#x60;. | [optional]
**remove** | **string** | Text to take out of the name, every copy of it. | [optional]
**max_changes_per_day** | **int** | At most this many objects changed in any 24 hours, across runs. Matches over the limit are skipped with &#x60;daily_limit_reached&#x60; and tried again later. | [optional]
**max_changes_per_object** | **int** | At most this many changes to one object by this rule, counted over the last 400 days. An object at the limit is left alone like one in cooldown. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
