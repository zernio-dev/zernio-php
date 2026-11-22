# # CommentAutomationDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**status** | **string** |  | [optional] [default to 'active']
**trigger** | [**\Zernio\Model\CommentAutomationDefinitionTrigger**](CommentAutomationDefinitionTrigger.md) |  |
**or_triggers** | [**\Zernio\Model\CommentAutomationDefinitionOrTriggersInner[]**](CommentAutomationDefinitionOrTriggersInner.md) | A DM with the same keywords also starts it (&#x60;dm.keyword&#x60;), at the decision and with no comment to act on. Comment triggers with keywords only. | [optional]
**graph** | [**\Zernio\Model\CommentAutomationDefinitionGraph**](CommentAutomationDefinitionGraph.md) |  |
**limits** | [**\Zernio\Model\CommentAutomationDefinitionLimits**](CommentAutomationDefinitionLimits.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
