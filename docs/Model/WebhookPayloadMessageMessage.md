# # WebhookPayloadMessageMessage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Internal message ID |
**conversation_id** | **string** | Internal conversation ID |
**platform** | **string** |  |
**platform_message_id** | **string** | Platform&#39;s message ID |
**direction** | **string** |  |
**text** | **string** | Message text content |
**attachments** | [**\Zernio\Model\WebhookPayloadMessageMessageAttachmentsInner[]**](WebhookPayloadMessageMessageAttachmentsInner.md) |  |
**sender** | [**\Zernio\Model\WebhookPayloadMessageMessageSender**](WebhookPayloadMessageMessageSender.md) |  |
**sent_at** | **\DateTime** | When the message was sent, as reported by the platform and passed through unmodified. Full ISO 8601 date-time: Instagram and Facebook carry millisecond precision, while some platforms (for example WhatsApp and Telegram) report whole seconds. Use this field as the chronological ordering key. If two messages share the same value, fetch the conversation messages with sortOrder&#x3D;desc for the deterministic order. |
**is_read** | **bool** |  |
**sent_via** | **string** | Which Zernio surface produced the message. Always present and always &#x60;null&#x60; on this event, since nobody on our side produced an inbound message; it is only informative on &#x60;message.sent&#x60;, which documents the vocabulary. | [optional]
**automation_id** | **string** | Always null on this event; see message.sent. | [optional]
**workflow_id** | **string** | Always null on this event; see message.sent. | [optional]
**execution_id** | **string** | Always null on this event; see message.sent. | [optional]
**broadcast_id** | **string** | Always null on this event; see message.sent. | [optional]
**sequence_id** | **string** | Always null on this event; see message.sent. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
