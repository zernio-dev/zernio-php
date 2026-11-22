# # Automation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**status** | **string** | Only a sequence or a flow can be a draft. |
**trigger** | [**\Zernio\Model\FlowAutomationDefinitionTrigger**](FlowAutomationDefinitionTrigger.md) |  |
**subjects** | [**\Zernio\Model\AutomationPostSubjects**](AutomationPostSubjects.md) |  |
**conditions** | [**\Zernio\Model\AdRuleConditions**](AdRuleConditions.md) |  |
**alert** | [**\Zernio\Model\AutomationAlert**](AutomationAlert.md) |  | [optional]
**steps** | [**\Zernio\Model\AutomationSequenceStep[]**](AutomationSequenceStep.md) | At least one step for an active sequence. Steps change only while it is a draft or paused. |
**limits** | [**\Zernio\Model\CommentAutomationDefinitionLimits**](CommentAutomationDefinitionLimits.md) |  |
**id** | **string** |  |
**kind** | **string** |  |
**version** | **string** | Send it back as &#x60;If-Match&#x60; when editing, so an edit made after someone else saved is refused. |
**last_check_at** | **\DateTime** | Null until an ad rule first checks. Always null for every other kind; the checks of event and scheduled automations list when they ran. |
**next_check_at** | **\DateTime** | Null while paused. Always null for every kind but ad rules. |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |
**template** | [**\Zernio\Model\AutomationRecordTemplate**](AutomationRecordTemplate.md) |  | [optional]
**filter** | [**\Zernio\Model\AutomationFactCondition**](AutomationFactCondition.md) |  | [optional]
**description** | **string** |  | [optional]
**platform** | **string** | The account&#39;s platform. |
**enrollments** | [**\Zernio\Model\AutomationOneOf3AllOfEnrollments**](AutomationOneOf3AllOfEnrollments.md) |  |
**or_triggers** | [**\Zernio\Model\CommentAutomationDefinitionOrTriggersInner[]**](CommentAutomationDefinitionOrTriggersInner.md) | A DM with the same keywords also starts it (&#x60;dm.keyword&#x60;), at the decision and with no comment to act on. Comment triggers with keywords only. | [optional]
**graph** | [**\Zernio\Model\FlowAutomationDefinitionGraph**](FlowAutomationDefinitionGraph.md) |  |
**read_only** | **bool** | Always true when present. Present when the graph only comes near what the automation does. It is read here and edited through &#x60;/v1/comment-automations&#x60;; an edit here is refused. | [optional]
**stats** | [**\Zernio\Model\AutomationOneOf4AllOfStats**](AutomationOneOf4AllOfStats.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
