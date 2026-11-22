# # AutomationDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**status** | **string** | A new sequence is on unless &#x60;draft&#x60;. A draft can be activated; a sequence that ran can only be paused and activated again. | [optional] [default to 'active']
**trigger** | [**\Zernio\Model\SequenceAutomationDefinitionTrigger**](SequenceAutomationDefinitionTrigger.md) |  |
**subjects** | [**\Zernio\Model\AutomationPostSubjects**](AutomationPostSubjects.md) |  |
**conditions** | [**\Zernio\Model\AdRuleConditions**](AdRuleConditions.md) |  |
**alert** | [**\Zernio\Model\AutomationAlert**](AutomationAlert.md) |  | [optional]
**steps** | [**\Zernio\Model\AutomationSequenceStep[]**](AutomationSequenceStep.md) | At least one step for an active sequence. Steps change only while it is a draft or paused. |
**limits** | [**\Zernio\Model\SequenceAutomationDefinitionLimits**](SequenceAutomationDefinitionLimits.md) |  | [optional]
**filter** | [**\Zernio\Model\AutomationFactCondition**](AutomationFactCondition.md) |  | [optional]
**description** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
