# # GetInboxConversationMessages200ResponseMessagesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**conversation_id** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**message** | **string** |  | [optional]
**sender_id** | **string** |  | [optional]
**sender_name** | **string** |  | [optional]
**sender_verified_type** | **string** | X/Twitter verified badge type. Only present for Twitter/X messages. | [optional]
**direction** | **string** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**attachments** | [**\Zernio\Model\GetInboxConversationMessages200ResponseMessagesInnerAttachmentsInner[]**](GetInboxConversationMessages200ResponseMessagesInnerAttachmentsInner.md) |  | [optional]
**subject** | **string** | Reddit message subject | [optional]
**story_reply** | **bool** | Instagram story reply | [optional]
**is_story_mention** | **bool** | Instagram story mention | [optional]
**is_edited** | **bool** | True if the sender has edited this message at least once. | [optional]
**edited_at** | **\DateTime** | When the most recent edit happened. | [optional]
**edit_count** | **int** | Total number of edits applied. | [optional]
**edit_history** | [**\Zernio\Model\InboxMessageEditHistoryEntry[]**](InboxMessageEditHistoryEntry.md) | Every prior version of the message, oldest first. | [optional]
**is_deleted** | **bool** | True if the sender has deleted (unsent) this message. The original message and attachments fields remain populated. | [optional]
**deleted_at** | **\DateTime** |  | [optional]
**delivery_status** | **string** | Lifecycle status for outgoing messages. Not all platforms emit every state (see webhook support matrix). | [optional]
**delivered_at** | **\DateTime** |  | [optional]
**read_at** | **\DateTime** |  | [optional]
**sent_at** | **\DateTime** | Original send time for outgoing messages (used for Messenger watermark queries). | [optional]
**delivery_error** | [**\Zernio\Model\GetInboxConversationMessages200ResponseMessagesInnerDeliveryError**](GetInboxConversationMessages200ResponseMessagesInnerDeliveryError.md) |  | [optional]
**reactions** | [**\Zernio\Model\GetInboxConversationMessages200ResponseMessagesInnerReactionsInner[]**](GetInboxConversationMessages200ResponseMessagesInnerReactionsInner.md) | Emoji reactions on this message (WhatsApp / Telegram). At most one per party in a 1:1 thread. | [optional]
**metadata** | **array<string,mixed>** | Platform-specific extras. Free-form, but commonly includes: &#x60;quotedMessageId&#x60; (platformMessageId this message replies to), &#x60;waInteractive&#x60; (a compact descriptor of WhatsApp interactive content sent: buttons / list / cta_url / flow / location_request), and for inbound interactive taps &#x60;interactiveType&#x60; / &#x60;interactiveId&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
