# # CreateInboxConversation201ResponseData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message_id** | **string** | Platform message ID (dm_event_id) | [optional]
**conversation_id** | **string** | Platform conversation ID (dm_conversation_id). For WhatsApp, this is Zernio&#39;s internal conversation id (24-character hex) which matches the id returned by the list-conversations endpoint and the conversationId in the message.received and conversation.started webhooks; use it to correlate the created thread with inbound events. | [optional]
**participant_id** | **string** | Twitter numeric user ID of the recipient | [optional]
**participant_name** | **string** | Display name of the recipient | [optional]
**participant_username** | **string** | Twitter username of the recipient | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
