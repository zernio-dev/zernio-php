# # SendInboxMessageRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Social account ID |
**message** | **string** | Message text | [optional]
**attachment_url** | **string** | URL of the attachment to send (image, video, audio, or file). The URL must be publicly accessible. For binary file uploads, use multipart/form-data instead. | [optional]
**attachment_type** | **string** | Type of attachment. Defaults to file if not specified. | [optional]
**quick_replies** | [**\Late\Model\SendInboxMessageRequestQuickRepliesInner[]**](SendInboxMessageRequestQuickRepliesInner.md) | Quick reply buttons. Mutually exclusive with buttons. Max 13 items. | [optional]
**buttons** | [**\Late\Model\SendInboxMessageRequestButtonsInner[]**](SendInboxMessageRequestButtonsInner.md) | Action buttons. Mutually exclusive with quickReplies. Max 3 items. | [optional]
**template** | [**\Late\Model\SendInboxMessageRequestTemplate**](SendInboxMessageRequestTemplate.md) |  | [optional]
**interactive** | [**\Late\Model\SendInboxMessageRequestInteractive**](SendInboxMessageRequestInteractive.md) |  | [optional]
**reply_markup** | [**\Late\Model\SendInboxMessageRequestReplyMarkup**](SendInboxMessageRequestReplyMarkup.md) |  | [optional]
**messaging_type** | **string** | Facebook messaging type. Required when using messageTag. | [optional]
**message_tag** | **string** | Facebook message tag for messaging outside 24h window. Requires messagingType MESSAGE_TAG. Instagram only supports HUMAN_AGENT. | [optional]
**reply_to** | **string** | Platform message ID to quote-reply to. For WhatsApp, pass the wamid (available in message.platformMessageId from webhooks). For Telegram, pass the Telegram message ID. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
