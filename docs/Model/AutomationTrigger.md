# # AutomationTrigger

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**every** | **string** |  |
**times** | [**\Zernio\Model\AutomationScheduleTriggerTimesInner[]**](AutomationScheduleTriggerTimesInner.md) | Set weekly times. Send this or &#x60;every&#x60;, not both. | [optional]
**starts_at** | **\DateTime** | Runs from this time on. | [optional]
**ends_at** | **\DateTime** | Stops running after this time. | [optional]
**quiet_hours** | [**\Zernio\Model\AutomationScheduleTriggerQuietHours**](AutomationScheduleTriggerQuietHours.md) |  | [optional]
**profile_id** | **string** | The profile whose events start it, from &#x60;GET /v1/profiles&#x60;. |
**account_ids** | **string[]** | Only events of these accounts. Leave out for every account of the profile. | [optional]
**filter** | [**\Zernio\Model\AutomationFactCondition**](AutomationFactCondition.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
