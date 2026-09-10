# # WebhookPayloadMessageSentMetadata

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**location** | [**\Zernio\Model\WebhookPayloadMessageSentMetadataLocation**](WebhookPayloadMessageSentMetadataLocation.md) |  | [optional]
**contacts** | **array<string,mixed>[]** | WhatsApp only. The contact cards this message carries. On API sends this is the &#x60;contacts&#x60; array exactly as given to the inbox send API (&#x60;name&#x60;, &#x60;phones[].phone&#x60; / &#x60;type&#x60;, &#x60;emails[]&#x60;); on Coexistence echoes of a card shared from the WhatsApp Business app it is Meta&#39;s shape (&#x60;phones[].wa_id&#x60;, &#x60;vcard&#x60;). The message &#x60;text&#x60; is only the emoji preview (&#x60;👤 &lt;name&gt;&#x60;); the cards live here. | [optional]
**quoted_message_id** | **string** | &#x60;platformMessageId&#x60; of the message this send is a quote-reply to.  Present when the reply was sent through Zernio with &#x60;replyTo&#x60; on the inbox send API (WhatsApp and Telegram). A WhatsApp API send fires its &#x60;message.sent&#x60; off the delivery status, and the quote reference is forwarded from the stored send there, so it arrives on the same &#x60;message.sent&#x60; as any other WhatsApp send.  Not delivered on Instagram echoes. Zernio forwards &#x60;reply_to.mid&#x60; whenever Meta puts it on an echo, but on Instagram Meta does not send it, so a reply the operator quoted in the Instagram app arrives with no &#x60;quotedMessageId&#x60;. Facebook Messenger rides a separate subscription (&#x60;message_echoes&#x60;) and has not been measured, so treat it as unverified rather than supported.  Absent on WhatsApp Coexistence echoes. Meta omits the quote context from &#x60;smb_message_echoes&#x60;, so a reply the operator sent from the WhatsApp Business app arrives with no &#x60;quotedMessageId&#x60; even though WhatsApp shows it as a quote-reply. Do not read the absence of this field as \&quot;not a reply\&quot;. | [optional]
**thread_ts** | **string** | Slack only. Parent thread ts of the sent message. Pass it back as &#x60;replyTo&#x60; on the inbox send API to keep replying inside the thread. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
