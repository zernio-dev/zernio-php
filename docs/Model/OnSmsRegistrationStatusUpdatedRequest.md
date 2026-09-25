# # OnSmsRegistrationStatusUpdatedRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**event** | **string** |  | [optional]
**timestamp** | **\DateTime** | UTC time at which Zernio generated this event (set once when the event payload is built, before delivery is queued). Retries and redeliveries keep the original value, so it reflects the event, not the delivery attempt. | [optional]
**registration** | [**\Zernio\Model\OnSmsRegistrationStatusUpdatedRequestRegistration**](OnSmsRegistrationStatusUpdatedRequestRegistration.md) |  | [optional]
**status** | **string** |  | [optional]
**reason** | **string** | The carriers&#39; decline reason, on rejected. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
