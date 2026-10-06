# # SetConversationThreadControlRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Social account ID |
**action** | **string** | &#x60;request&#x60; is Facebook and Instagram only. |
**target** | **string** | WhatsApp only. With action pass: send control to Meta Business Agent instead of the escalation partner. | [optional]
**target_app_id** | **string** | Facebook and Instagram only, required with action pass: the Meta app id receiving the thread. | [optional]
**metadata** | **string** | Free-form note forwarded verbatim to the app receiving control (its messaging_handovers webhook). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
