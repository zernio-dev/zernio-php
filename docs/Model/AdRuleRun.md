# # AdRuleRun

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**ran_at** | **\DateTime** |  |
**outcome** | **string** | Result of the rule run:  - &#x60;triggered&#x60;: the rule acted on at least one object (&#x60;error&#x60; is set if the webhook could not be sent afterwards). - &#x60;cooldown&#x60;: objects matched but all were in cooldown. - &#x60;no_match&#x60;: nothing matched. - &#x60;failed&#x60;: the metrics could not be read, every action failed, or the webhook of a notify-only rule could not be sent (see &#x60;error&#x60;). |
**objects_evaluated** | **int** |  |
**acted_object_ids** | **string[]** |  |
**evaluation** | [**\Zernio\Model\AdRuleRunEvaluation**](AdRuleRunEvaluation.md) |  |
**error** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
