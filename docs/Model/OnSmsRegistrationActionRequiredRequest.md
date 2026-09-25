# # OnSmsRegistrationActionRequiredRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**event** | **string** |  | [optional]
**timestamp** | **\DateTime** | UTC time at which Zernio generated this event (set once when the event payload is built, before delivery is queued). Retries and redeliveries keep the original value, so it reflects the event, not the delivery attempt. | [optional]
**registration** | [**\Zernio\Model\OnSmsRegistrationActionRequiredRequestRegistration**](OnSmsRegistrationActionRequiredRequestRegistration.md) |  | [optional]
**reason** | **string** |  | [optional]
**message** | **string** | What to do, in words: the reviewer&#39;s note or the carrier&#39;s decline reason. Absent for otp_required. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
