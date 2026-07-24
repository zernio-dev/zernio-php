# # WebhookPayloadMessageSentMessage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Internal message ID |
**conversation_id** | **string** | Internal conversation ID |
**platform** | **string** |  |
**platform_message_id** | **string** | Platform&#39;s message ID |
**direction** | **string** |  |
**text** | **string** | Message text content |
**attachments** | [**\Zernio\Model\WebhookPayloadMessageSentMessageAttachmentsInner[]**](WebhookPayloadMessageSentMessageAttachmentsInner.md) |  |
**sender** | [**\Zernio\Model\WebhookPayloadMessageSentMessageSender**](WebhookPayloadMessageSentMessageSender.md) |  |
**sent_at** | **\DateTime** |  |
**is_read** | **bool** |  |
**source** | **string** | WhatsApp send origin. whatsapp_business_app when sent from the WhatsApp Business phone app on a Coexistence number; cloud_api when sent through Zernio (dashboard, API, or broadcasts). Absent on non-WhatsApp platforms. This is not the inbox metadata.source lineage field. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
