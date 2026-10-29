# # WebhookPayloadMessageSentMessageAttachmentsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Attachment type (image, video, file, sticker, audio, share) |
**original_type** | **string** | Instagram and Facebook only, and present only when it differs from &#x60;type&#x60;. Meta&#39;s own attachment type before Zernio normalized it. See the same field on message.received for the full mapping. | [optional]
**url** | **string** | Where to fetch the attachment. For outgoing messages this is the media URL as sent. On WhatsApp it is the URL you supplied when publishing (WhatsApp sends media by link), not a Zernio endpoint, and it needs no Zernio credentials.  Contrast the inbound direction: &#x60;message.received&#x60; attachment URLs on WhatsApp point at the authenticated &#x60;GET /v1/whatsapp/media/{mediaId}&#x60;.  As on &#x60;message.received&#x60;, webhook attachments carry no &#x60;refreshUrl&#x60;: that field is stamped only on the REST read. Resolve Instagram and Facebook media through &#x60;GET /v1/inbox/conversations/{conversationId}/messages/{messageId}/attachments/{index}?accountId&#x3D;{accountId}&#x60;. |
**payload** | **object** | Additional attachment metadata | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
