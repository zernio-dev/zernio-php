# # WebhookPayloadAdRuleTriggeredObjectsInnerActionsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**status** | **string** | Action result.  - &#x60;skipped&#x60;: the action could not or need not apply (already paused or active, budget at its limit, a budget that is unknown, not daily or set at another level, no live ads, or a permanent refusal from the platform). - &#x60;failed&#x60;: it errored and will be retried on the next run. |
**reason** | **string** | Why the action was skipped or failed: &#x60;already_paused&#x60;, &#x60;already_active&#x60;, &#x60;at_limit&#x60;, &#x60;budget_unknown&#x60;, &#x60;budget_not_daily&#x60;, &#x60;budget_level_mismatch&#x60;, &#x60;no_live_ads&#x60;, &#x60;daily_limit_reached&#x60; (held back by the action&#39;s &#x60;maxChangesPerDay&#x60;), &#x60;ads_allowance_exceeded&#x60; (a reactivation or budget increase for a team past its free live-ads allowance), or the platform&#39;s message. Null when done. |
**previous_daily_budget** | **float** | On &#x60;adjust_budget&#x60;, the daily budget before the change, in the ad account currency. Null otherwise. |
**new_daily_budget** | **float** | On &#x60;adjust_budget&#x60;, the daily budget after the change. Null when nothing changed. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
