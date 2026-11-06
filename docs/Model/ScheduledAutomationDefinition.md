# # ScheduledAutomationDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**status** | **string** | A new scheduled automation is on unless &#x60;paused&#x60;. | [optional] [default to 'active']
**trigger** | [**\Zernio\Model\AutomationPostSchedule**](AutomationPostSchedule.md) |  |
**subjects** | [**\Zernio\Model\AutomationPostSubjects**](AutomationPostSubjects.md) |  |
**filter** | [**\Zernio\Model\AutomationFactCondition**](AutomationFactCondition.md) |  | [optional]
**steps** | [**\Zernio\Model\ScheduledAutomationDefinitionStepsInner[]**](ScheduledAutomationDefinitionStepsInner.md) |  |
**limits** | [**\Zernio\Model\AutomationEventLimits**](AutomationEventLimits.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
