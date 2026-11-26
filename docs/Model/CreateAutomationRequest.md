# # CreateAutomationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**status** | **string** |  | [optional]
**trigger** | [**\Zernio\Model\FlowAutomationDefinitionTrigger**](FlowAutomationDefinitionTrigger.md) |  |
**subjects** | [**\Zernio\Model\AutomationPostSubjects**](AutomationPostSubjects.md) |  |
**conditions** | [**\Zernio\Model\AdRuleConditions**](AdRuleConditions.md) |  |
**alert** | [**\Zernio\Model\AutomationAlert**](AutomationAlert.md) |  | [optional]
**steps** | [**\Zernio\Model\AutomationSequenceStep[]**](AutomationSequenceStep.md) | At least one step for an active sequence. Steps change only while it is a draft or paused. |
**limits** | [**\Zernio\Model\CommentAutomationDefinitionLimits**](CommentAutomationDefinitionLimits.md) |  |
**filter** | [**\Zernio\Model\AutomationFactCondition**](AutomationFactCondition.md) |  | [optional]
**description** | **string** | Sequences. | [optional]
**or_triggers** | [**\Zernio\Model\CommentAutomationDefinitionOrTriggersInner[]**](CommentAutomationDefinitionOrTriggersInner.md) | A DM with the same keywords also starts it (&#x60;dm.keyword&#x60;), at the decision and with no comment to act on. Comment triggers with keywords only. | [optional]
**graph** | [**\Zernio\Model\AutomationGraph**](AutomationGraph.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
