# # AdRuleRun

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**ran_at** | **\DateTime** |  |
**outcome** | **string** | Result of the rule run:  - &#x60;triggered&#x60;: the rule acted on at least one object (&#x60;error&#x60; is set if the webhook could not be sent afterwards). - &#x60;cooldown&#x60;: objects matched but all were in cooldown. - &#x60;daily_limit&#x60;: objects matched but the rule had used its &#x60;maxChangesPerDay&#x60;. - &#x60;paused&#x60;: the run did not happen: the team used its free automation runs with no payment method on file (see &#x60;error&#x60;). - &#x60;no_match&#x60;: nothing matched. - &#x60;failed&#x60;: the metrics could not be read, every action failed, or the webhook of a notify-only rule could not be sent (see &#x60;error&#x60;). |
**objects_evaluated** | **int** | Objects the rule judged. 0 means its campaigns and filters matched nothing that is running. |
**acted_object_ids** | **string[]** |  |
**evaluation** | [**\Zernio\Model\AdRuleRunEvaluation**](AdRuleRunEvaluation.md) |  |
**error** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
