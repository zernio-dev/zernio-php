# # EventAutomationDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**status** | **string** | A new event automation is on unless &#x60;paused&#x60;. | [optional] [default to 'active']
**trigger** | [**\Zernio\Model\AutomationEventTrigger**](AutomationEventTrigger.md) |  |
**steps** | [**\Zernio\Model\AutomationNotifyStep[]**](AutomationNotifyStep.md) | May be empty: an automation with no steps only records each event it matches as a check with outcome &#x60;triggered&#x60; and no action. &#x60;limits.cooldown&#x60; and &#x60;limits.maxChangesPerDay&#x60; count actions, so they do nothing for it. |
**limits** | [**\Zernio\Model\AutomationEventLimits**](AutomationEventLimits.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
