# # FlowAutomationDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**description** | **string** |  | [optional]
**status** | **string** | A new flow is &#x60;draft&#x60; (the default) or &#x60;active&#x60;, which needs a complete graph. An active or paused flow never goes back to draft, and only an active flow can be paused. | [optional]
**trigger** | [**\Zernio\Model\FlowAutomationDefinitionTrigger**](FlowAutomationDefinitionTrigger.md) |  |
**graph** | [**\Zernio\Model\FlowAutomationDefinitionGraph**](FlowAutomationDefinitionGraph.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
