# # AutomationOneOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**status** | **string** |  |
**trigger** | [**\Zernio\Model\AutomationScheduleTrigger**](AutomationScheduleTrigger.md) |  |
**subjects** | [**\Zernio\Model\AutomationSubjects**](AutomationSubjects.md) |  |
**conditions** | [**\Zernio\Model\AdRuleConditions**](AdRuleConditions.md) |  |
**alert** | [**\Zernio\Model\AutomationAlert**](AutomationAlert.md) |  | [optional]
**steps** | [**\Zernio\Model\AutomationStep[]**](AutomationStep.md) |  |
**limits** | [**\Zernio\Model\AutomationLimits**](AutomationLimits.md) |  | [optional]
**id** | **string** |  |
**kind** | **string** |  |
**version** | **string** | Send it back as &#x60;If-Match&#x60; when editing, so an edit made after someone else saved is refused. |
**last_check_at** | **\DateTime** | Null until an ad rule first checks. Always null for event and scheduled automations; their checks list when they ran. |
**next_check_at** | **\DateTime** | Null while paused. Always null for event and scheduled automations. |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |
**template** | [**\Zernio\Model\AutomationRecordTemplate**](AutomationRecordTemplate.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
