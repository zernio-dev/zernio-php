# # GetWhatsAppCallingConfig200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phone_number_doc_id** | **string** | WhatsAppPhoneNumber Mongo ID (use on /v1/whatsapp/phone-numbers/{id}/calling) | [optional]
**phone_number** | **string** |  | [optional]
**calling_enabled** | **bool** |  | [optional]
**forward_to** | **string** | tel:+E164 / sip:... / wss://... destination | [optional]
**recording_enabled** | **bool** |  | [optional]
**sip_auth_username** | **string** |  | [optional]
**sip_auth_password_configured** | **bool** | True when a SIP digest password is stored. The plaintext is never returned. | [optional]
**call_icon_countries** | **string[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
