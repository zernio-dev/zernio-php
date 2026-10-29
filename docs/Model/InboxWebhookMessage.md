# # InboxWebhookMessage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Internal message ID |
**conversation_id** | **string** | Internal conversation ID |
**platform** | **string** |  |
**platform_message_id** | **string** | Platform&#39;s message ID |
**direction** | **string** |  |
**text** | **string** | Message text content (retained on deleted messages for API consumers; Zernio dashboard UI hides this) |
**attachments** | [**\Zernio\Model\InboxWebhookMessageAttachmentsInner[]**](InboxWebhookMessageAttachmentsInner.md) |  |
**sender** | [**\Zernio\Model\InboxWebhookMessageSender**](InboxWebhookMessageSender.md) |  |
**sent_at** | **\DateTime** | When the message was sent, as reported by the platform and passed through unmodified. Use it as the chronological ordering key.  Full ISO 8601 date-time: Instagram and Facebook carry millisecond precision, while some platforms (for example WhatsApp and Telegram) report whole seconds. If two messages share the same value, fetch the conversation messages with sortOrder&#x3D;desc for the deterministic order. |
**is_read** | **bool** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
