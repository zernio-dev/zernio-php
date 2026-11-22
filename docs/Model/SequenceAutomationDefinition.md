# # SequenceAutomationDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**description** | **string** |  | [optional]
**status** | **string** | A new sequence is on unless &#x60;draft&#x60;. A draft can be activated; a sequence that ran can only be paused and activated again. | [optional] [default to 'active']
**trigger** | [**\Zernio\Model\SequenceAutomationDefinitionTrigger**](SequenceAutomationDefinitionTrigger.md) |  |
**steps** | [**\Zernio\Model\AutomationSequenceStep[]**](AutomationSequenceStep.md) | At least one step for an active sequence. Steps change only while it is a draft or paused. |
**limits** | [**\Zernio\Model\SequenceAutomationDefinitionLimits**](SequenceAutomationDefinitionLimits.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
