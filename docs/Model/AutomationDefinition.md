# # AutomationDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**status** | **string** | A new scheduled automation is on unless &#x60;paused&#x60;. | [optional] [default to 'active']
**trigger** | [**\Zernio\Model\AutomationPostSchedule**](AutomationPostSchedule.md) |  |
**subjects** | [**\Zernio\Model\AutomationPostSubjects**](AutomationPostSubjects.md) |  |
**conditions** | [**\Zernio\Model\AdRuleConditions**](AdRuleConditions.md) |  |
**alert** | [**\Zernio\Model\AutomationAlert**](AutomationAlert.md) |  | [optional]
**steps** | [**\Zernio\Model\ScheduledAutomationDefinitionStepsInner[]**](ScheduledAutomationDefinitionStepsInner.md) |  |
**limits** | [**\Zernio\Model\AutomationEventLimits**](AutomationEventLimits.md) |  | [optional]
**filter** | [**\Zernio\Model\AutomationFactCondition**](AutomationFactCondition.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
