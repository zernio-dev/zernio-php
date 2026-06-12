# # InitiateWhatsAppCallRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  |
**to** | **string** | Consumer wa_id (E.164 |
**action** | **string** | Omit to place a call. Set to send the consent prompt instead. | [optional]
**body_text** | **string** | Body text shown with the consent prompt (send_call_permission_request only). | [optional]
**forward_to** | **string** | Per-call destination override. Same accepted shape as the number&#39;s stored forwardTo (tel:+E164, sip:..., wss://...). | [optional]
**record_override** | **bool** |  | [optional]
**biz_opaque_callback_data** | **string** | Accepted for forward compatibility. Not currently echoed back in webhook payloads (SIP-first flow does not pass through Meta&#39;s Graph API where Meta would echo this). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
