# # AdRuleAction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Send the &#x60;ad_rule.triggered&#x60; webhook, and the alert to every &#x60;send&#x60; destination. |
**send** | [**\Zernio\Model\AdRuleActionOneOfSendInner[]**](AdRuleActionOneOfSendInner.md) | Also send a short alert through accounts you connected: what matched, the values and what the rule did. Up to 5 destinations, checked when the rule is saved.  A destination that fails is reported in the run&#39;s &#x60;notification&#x60;; it never undoes a change. | [optional]
**max_changes_per_day** | **int** | At most this many objects changed in any 24 hours, across runs. Matches over the limit are skipped with &#x60;daily_limit_reached&#x60; and tried again later. | [optional]
**max_changes_per_object** | **int** | At most this many changes to one object by this rule, counted over the last 400 days. An object at the limit is left alone like one in cooldown. | [optional]
**include_manually_paused** | **bool** | Also reactivate paused objects that no rule paused, as soon as they match. | [optional]
**status** | **string** | How the copy starts. Defaults to &#x60;paused&#x60;. | [optional]
**rename_suffix** | **string** | Text added to the copy&#39;s name. | [optional]
**amount** | **float** | The daily budget to set, in the ad account currency. An object already at it is skipped with &#x60;already_at_amount&#x60;. |
**direction** | **string** |  |
**percent** | **int** | Change in percent: up to 100 for an increase, up to 90 for a decrease. |
**limit** | **float** | The budget never goes above this on an increase, or below it on a decrease, in the ad account currency. |
**add** | **string** | Text to add, like &#x60;[WINNER]&#x60;. Compared without case. | [optional]
**at** | **string** | Where &#x60;add&#x60; goes. Defaults to &#x60;start&#x60;. | [optional]
**remove** | **string** | Text to take out of the name, every copy of it. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
