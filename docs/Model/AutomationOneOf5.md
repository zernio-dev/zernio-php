# # AutomationOneOf5

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**description** | **string** |  | [optional]
**status** | **string** | Only a sequence or a flow can be a draft. |
**trigger** | [**\Zernio\Model\FlowAutomationDefinitionTrigger**](FlowAutomationDefinitionTrigger.md) |  |
**graph** | [**\Zernio\Model\FlowAutomationDefinitionGraph**](FlowAutomationDefinitionGraph.md) |  |
**id** | **string** |  |
**kind** | **string** |  |
**version** | **string** | Send it back as &#x60;If-Match&#x60; when editing, so an edit made after someone else saved is refused. |
**last_check_at** | **\DateTime** | Null until an ad rule first checks. Always null for every other kind; the checks of event and scheduled automations list when they ran. |
**next_check_at** | **\DateTime** | Null while paused. Always null for every kind but ad rules. |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |
**template** | [**\Zernio\Model\AutomationRecordTemplate**](AutomationRecordTemplate.md) |  | [optional]
**platform** | **string** | The account&#39;s platform. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
