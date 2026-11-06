# # AutomationScheduleTrigger

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**every** | **string** | Run every interval. Send this or &#x60;times&#x60;, not both. | [optional]
**times** | [**\Zernio\Model\AutomationScheduleTriggerTimesInner[]**](AutomationScheduleTriggerTimesInner.md) | Set weekly times. Send this or &#x60;every&#x60;, not both. | [optional]
**starts_at** | **\DateTime** | Runs from this time on. | [optional]
**ends_at** | **\DateTime** | Stops running after this time. Must be after &#x60;startsAt&#x60;. | [optional]
**quiet_hours** | [**\Zernio\Model\AutomationScheduleTriggerQuietHours**](AutomationScheduleTriggerQuietHours.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
