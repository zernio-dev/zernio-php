# # GetWhatsAppCalling200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phone_number** | **string** |  | [optional]
**calling_enabled** | **bool** |  | [optional]
**call_deep_link** | **string** | Public calling deep link (https://wa.me/call/&lt;number&gt;). Null while calling is disabled. | [optional]
**forward_to** | **string** | tel:+E164 / sip:... / wss://... destination | [optional]
**recording_enabled** | **bool** |  | [optional]
**sip_auth_username** | **string** |  | [optional]
**sip_auth_password_configured** | **bool** | True when a SIP digest password is stored. The plaintext is never returned. | [optional]
**call_icon_countries** | **string[]** |  | [optional]
**outbound_disabled** | **bool** | True when the number&#39;s country blocks business-initiated (outbound) WhatsApp calling; inbound still works. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
