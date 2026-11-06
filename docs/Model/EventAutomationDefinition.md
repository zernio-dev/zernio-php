# # EventAutomationDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**status** | **string** | A new event automation is on unless &#x60;paused&#x60;. | [optional] [default to 'active']
**trigger** | [**\Zernio\Model\AutomationEventTrigger**](AutomationEventTrigger.md) |  |
**steps** | [**\Zernio\Model\AutomationNotifyStep[]**](AutomationNotifyStep.md) |  |
**limits** | [**\Zernio\Model\AutomationEventLimits**](AutomationEventLimits.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
