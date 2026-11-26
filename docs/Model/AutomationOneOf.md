# # AutomationOneOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**status** | **string** | Only a sequence or a flow can be a draft. |
**trigger** | [**\Zernio\Model\AutomationScheduleTrigger**](AutomationScheduleTrigger.md) |  |
**subjects** | [**\Zernio\Model\AutomationSubjects**](AutomationSubjects.md) |  |
**conditions** | [**\Zernio\Model\AdRuleConditions**](AdRuleConditions.md) |  |
**alert** | [**\Zernio\Model\AutomationAlert**](AutomationAlert.md) |  | [optional]
**steps** | [**\Zernio\Model\AutomationStep[]**](AutomationStep.md) |  |
**limits** | [**\Zernio\Model\AutomationLimits**](AutomationLimits.md) |  | [optional]
**id** | **string** |  |
**kind** | **string** |  |
**version** | **string** | Send it back as &#x60;If-Match&#x60; when editing, so an edit made after someone else saved is refused. |
**last_check_at** | **\DateTime** | Null until an ad rule first checks. Always null for every other kind; the checks of event and scheduled automations list when they ran. |
**next_check_at** | **\DateTime** | Null while paused. Always null for every kind but ad rules. |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |
**template** | [**\Zernio\Model\AutomationRecordTemplate**](AutomationRecordTemplate.md) |  | [optional]
**graph** | [**\Zernio\Model\AutomationGraph**](AutomationGraph.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
