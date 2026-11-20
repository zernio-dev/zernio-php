# # WebhookPayloadCallReceivedCall

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Internal Zernio Call doc id | [optional]
**meta_call_id** | **string** | Meta wacid.* call id when known | [optional]
**account_id** | **string** |  | [optional]
**phone_number_id** | **string** | Meta phone_number_id | [optional]
**direction** | **string** |  | [optional]
**from** | **string** | Consumer wa_id / E.164 | [optional]
**to** | **string** | Business number (E.164) | [optional]
**forward_to** | **string** | Destination snapshot at routing time | [optional]
**telnyx_call_control_id** | **string** | Carrier call_control_id of this call leg. Equals start.call_control_id of the media stream a wss:// forwardTo receives. | [optional]
**telnyx_call_session_id** | **string** | Carrier call_session_id of this call. Equals start.call_session_id of the media stream a wss:// forwardTo receives. | [optional]
**contact_id** | **string** |  | [optional]
**conversation_id** | **string** |  | [optional]
**started_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
