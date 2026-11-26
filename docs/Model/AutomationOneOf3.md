# # AutomationOneOf3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**description** | **string** |  | [optional]
**status** | **string** | Only a sequence or a flow can be a draft. |
**trigger** | [**\Zernio\Model\SequenceAutomationDefinitionTrigger**](SequenceAutomationDefinitionTrigger.md) |  |
**steps** | [**\Zernio\Model\AutomationSequenceStep[]**](AutomationSequenceStep.md) | At least one step for an active sequence. Steps change only while it is a draft or paused. |
**limits** | [**\Zernio\Model\SequenceAutomationDefinitionLimits**](SequenceAutomationDefinitionLimits.md) |  | [optional]
**id** | **string** |  |
**kind** | **string** |  |
**version** | **string** | Send it back as &#x60;If-Match&#x60; when editing, so an edit made after someone else saved is refused. |
**last_check_at** | **\DateTime** | Null until an ad rule first checks. Always null for every other kind; the checks of event and scheduled automations list when they ran. |
**next_check_at** | **\DateTime** | Null while paused. Always null for every kind but ad rules. |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |
**template** | [**\Zernio\Model\AutomationRecordTemplate**](AutomationRecordTemplate.md) |  | [optional]
**graph** | [**\Zernio\Model\AutomationGraph**](AutomationGraph.md) |  | [optional]
**platform** | **string** | The account&#39;s platform. On &#x60;whatsapp&#x60; every step sends a template. |
**enrollments** | [**\Zernio\Model\AutomationOneOf3AllOfEnrollments**](AutomationOneOf3AllOfEnrollments.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
