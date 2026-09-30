# # SearchInboxConversations200ResponseDataInnerConversation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Conversation ID, usable with the conversation messages endpoints | [optional]
**platform** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**participant_name** | **string** |  | [optional]
**participant_username** | **string** |  | [optional]
**participant_picture** | **string** |  | [optional]
**business_scoped_user_id** | **string** | WhatsApp only. Meta business-scoped user ID (BSUID), the stable identity anchor; present when Meta has sent it for this participant. | [optional]
**whatsapp_username** | **string** | WhatsApp only. The participant&#39;s WhatsApp username (e.g. &#x60;jane.shop&#x60;, no leading @). Not a stable identifier, because users can change it: useful for display, not recommended as an identity anchor. Captured from inbound messages, so older threads fill in on their next inbound. | [optional]
**status** | **string** |  | [optional]
**last_message** | **string** | The conversation&#39;s most recent message preview | [optional]
**last_message_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
