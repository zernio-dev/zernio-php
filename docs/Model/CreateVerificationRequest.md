# # CreateVerificationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel** | **string** | SMS-only for now. |
**to** | **string** | E.164 phone number. |
**from** | **string** | The SMS-enabled number on your account to send from. Defaults to your only SMS number. | [optional]
**brand_name** | **string** | Your app or business name, rendered in the message. Defaults to your account name. Letters, numbers, and basic punctuation only. | [optional]
**code_length** | **int** |  | [optional] [default to 6]
**ttl_minutes** | **int** |  | [optional] [default to 10]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
