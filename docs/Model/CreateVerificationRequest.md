# # CreateVerificationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel** | **string** |  |
**to** | **string** | E.164 phone number. WhatsApp only delivers to a phone number, never to a username. |
**from** | **string** | The number on your account to send from: an SMS-enabled number for &#x60;sms&#x60;, a connected WhatsApp number for &#x60;whatsapp&#x60;. Defaults to your only number on that channel. | [optional]
**brand_name** | **string** | Your app or business name, rendered in the SMS message. Defaults to your account name. Not shown on WhatsApp, where Meta fixes the message and shows your WhatsApp display name. Letters, numbers, and basic punctuation only. | [optional]
**code_length** | **int** |  | [optional] [default to 6]
**ttl_minutes** | **int** |  | [optional] [default to 10]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
