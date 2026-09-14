# # WebhookPayloadMessageDeliveryStatusError

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **int** |  | [optional]
**title** | **string** |  | [optional]
**message** | **string** |  | [optional]
**details** | **string** | Platform&#39;s extended detail for &#x60;code&#x60; (WhatsApp: Meta&#39;s &#x60;error_data.details&#x60;), when the platform sent one. Absent on SMS. | [optional]
**href** | **string** | Link to the platform&#39;s documentation for &#x60;code&#x60;, when the platform sent one. | [optional]
**explanation** | **string** | Plain-language translation of &#x60;code&#x60; (e.g. for 131026, that the recipient has likely opted out of marketing messages while utility templates are unaffected, or for 131031, that Meta restricted the WhatsApp Business Account). Null for unmapped codes; fall back to title/message. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
