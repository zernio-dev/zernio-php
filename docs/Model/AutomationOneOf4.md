# # AutomationOneOf4

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**status** | **string** | Only a sequence can be a draft. |
**trigger** | [**\Zernio\Model\CommentAutomationDefinitionTrigger**](CommentAutomationDefinitionTrigger.md) |  |
**or_triggers** | [**\Zernio\Model\CommentAutomationDefinitionOrTriggersInner[]**](CommentAutomationDefinitionOrTriggersInner.md) | A DM with the same keywords also starts it (&#x60;dm.keyword&#x60;), at the decision and with no comment to act on. Comment triggers with keywords only. | [optional]
**graph** | [**\Zernio\Model\CommentAutomationDefinitionGraph**](CommentAutomationDefinitionGraph.md) |  |
**limits** | [**\Zernio\Model\CommentAutomationDefinitionLimits**](CommentAutomationDefinitionLimits.md) |  |
**id** | **string** |  |
**kind** | **string** |  |
**version** | **string** | Send it back as &#x60;If-Match&#x60; when editing, so an edit made after someone else saved is refused. |
**last_check_at** | **\DateTime** | Null until an ad rule first checks. Always null for event and scheduled automations; their checks list when they ran. |
**next_check_at** | **\DateTime** | Null while paused. Always null for event, scheduled and sequence automations. |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |
**template** | [**\Zernio\Model\AutomationRecordTemplate**](AutomationRecordTemplate.md) |  | [optional]
**platform** | **string** | The account&#39;s platform. On TikTok, Threads, LinkedIn and YouTube it only posts the public reply. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
