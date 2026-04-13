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
**attachments** | [**\Late\Model\InboxWebhookMessageAttachmentsInner[]**](InboxWebhookMessageAttachmentsInner.md) |  |
**sender** | [**\Late\Model\InboxWebhookMessageSender**](InboxWebhookMessageSender.md) |  |
**sent_at** | **\DateTime** |  |
**is_read** | **bool** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
