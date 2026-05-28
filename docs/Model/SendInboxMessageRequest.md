# # SendInboxMessageRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Social account ID |
**message** | **string** | Message text | [optional]
**attachment_url** | **string** | URL of the attachment to send (image, video, audio, or file). The URL must be publicly accessible. For binary file uploads, use multipart/form-data instead. | [optional]
**attachment_type** | **string** | Type of attachment. Defaults to file if not specified. | [optional]
**voice_note** | **bool** | WhatsApp only. When &#x60;true&#x60; on an audio attachment, the message is sent as a voice message (PTT) — the recipient sees the waveform + voice-note UI instead of a basic audio attachment. The audio file MUST be &#x60;.ogg&#x60; encoded with the OPUS codec (mono) per Meta&#39;s voice-message contract; other formats are rejected by WhatsApp. Ignored for non-audio attachments. | [optional]
**quick_replies** | [**\Zernio\Model\SendInboxMessageRequestQuickRepliesInner[]**](SendInboxMessageRequestQuickRepliesInner.md) | Quick reply buttons. Mutually exclusive with buttons. Max 13 items. | [optional]
**buttons** | [**\Zernio\Model\SendInboxMessageRequestButtonsInner[]**](SendInboxMessageRequestButtonsInner.md) | Action buttons. Mutually exclusive with quickReplies. Max 3 items. | [optional]
**template** | [**\Zernio\Model\SendInboxMessageRequestTemplate**](SendInboxMessageRequestTemplate.md) |  | [optional]
**interactive** | [**\Zernio\Model\SendInboxMessageRequestInteractive**](SendInboxMessageRequestInteractive.md) |  | [optional]
**reply_markup** | [**\Zernio\Model\SendInboxMessageRequestReplyMarkup**](SendInboxMessageRequestReplyMarkup.md) |  | [optional]
**messaging_type** | **string** | Facebook messaging type. Required when using messageTag. | [optional]
**message_tag** | **string** | Facebook message tag for messaging outside 24h window. Requires messagingType MESSAGE_TAG. Instagram only supports HUMAN_AGENT. | [optional]
**reply_to** | **string** | Platform message ID to quote-reply to. For WhatsApp, pass the wamid (available in message.platformMessageId from webhooks). For Telegram, pass the Telegram message ID. | [optional]
**location** | [**\Zernio\Model\SendInboxMessageRequestLocation**](SendInboxMessageRequestLocation.md) |  | [optional]
**contacts** | [**\Zernio\Model\SendInboxMessageRequestContactsInner[]**](SendInboxMessageRequestContactsInner.md) | WhatsApp-only. Send one or more contact cards. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
