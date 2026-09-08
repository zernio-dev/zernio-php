# # ConnectWhatsAppEmbeddedSignupRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Authorization code from the FB.login response (authResponse.code) |
**profile_id** | **string** |  |
**waba_id** | **string** | waba_id from the WA_EMBEDDED_SIGNUP message event | [optional]
**phone_number_id** | **string** | phone_number_id from the WA_EMBEDDED_SIGNUP message event. With wabaId it skips the number picker. | [optional]
**is_coexistence** | **bool** | Set when the popup ended with the FINISH_WHATSAPP_BUSINESS_APP_ONBOARDING event, so the number stays live in the WhatsApp Business app | [optional]
**expected_phone_number** | **string** | Rejects the connect when Meta returns a different number | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
