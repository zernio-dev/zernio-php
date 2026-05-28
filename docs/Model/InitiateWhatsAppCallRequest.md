# # InitiateWhatsAppCallRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  |
**to** | **string** | Consumer wa_id (E.164 |
**forward_to** | **string** | Per-call destination override. Same accepted shape as the number&#39;s stored forwardTo (tel:+E164, sip:..., wss://...). | [optional]
**record_override** | **bool** |  | [optional]
**biz_opaque_callback_data** | **string** | Accepted for forward compatibility. Not currently echoed back in webhook payloads (SIP-first flow does not pass through Meta&#39;s Graph API where Meta would echo this). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
