# # GetInboxConversationMessages200ResponseMessagesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The platform&#39;s own message id: the &#x60;wamid&#x60; on WhatsApp, the &#x60;mid&#x60; on Instagram and Facebook Messenger. This is what &#x60;metadata.quotedMessageId&#x60; points at, the value to pass as &#x60;replyTo&#x60; on the platforms that support quote-replies, and the &#x60;{messageId}&#x60; segment of the attachment-resolve URL. Webhooks deliver the same value as &#x60;message.platformMessageId&#x60;; this response has no field by that name. | [optional]
**conversation_id** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**message** | **string** |  | [optional]
**sender_id** | **string** |  | [optional]
**sender_name** | **string** |  | [optional]
**sender_verified_type** | **string** | X verified badge type. Only present for X messages. | [optional]
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
**metadata** | **array<string,mixed>** | Platform-specific extras. Free-form, but commonly includes: &#x60;quotedMessageId&#x60; (the &#x60;id&#x60; of the message this one replies to, delivered as &#x60;message.platformMessageId&#x60; on webhooks), &#x60;waInteractive&#x60; (a compact descriptor of WhatsApp interactive content sent: buttons / list / cta_url / flow / location_request), and for inbound interactive taps &#x60;interactiveType&#x60; / &#x60;interactiveId&#x60;. It can also carry &#x60;source&#x60; (&#x60;whatsapp_business_app&#x60; / &#x60;coexistence_history&#x60; on a WhatsApp Coexistence number, &#x60;bulk-api&#x60; on a POST /v1/whatsapp/bulk send), which is where the message reached us from rather than who produced it: read &#x60;sentVia&#x60; for that. | [optional]
**sent_via** | **string** | Which Zernio surface produced this outgoing message: &#x60;human&#x60; (an operator in the Zernio inbox), &#x60;api&#x60; (a call to this API), &#x60;broadcast&#x60;, &#x60;sequence&#x60;, &#x60;workflow&#x60;, &#x60;comment_automation&#x60;, or &#x60;bulk-api&#x60; (POST /v1/whatsapp/bulk). Same vocabulary as the &#x60;source&#x60; filter on the inbox analytics endpoints.  Always present, and &#x60;null&#x60; whenever the lineage is unknown: every incoming message, any outgoing message sent from the platform&#39;s own app, and every message stored before this field shipped (2026-08). Existing messages are NOT backfilled, so treat &#x60;null&#x60; as \&quot;unknown\&quot;, never as \&quot;sent by a human\&quot;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
