# # WebhookPayloadMessageMessageAttachmentsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Attachment type (image, video, file, sticker, audio) |
**url** | **string** | Where to fetch the attachment. **The contract differs by platform.**  - **WhatsApp**: points at &#x60;GET /v1/whatsapp/media/{mediaId}&#x60;, an   authenticated Zernio endpoint. You MUST send   &#x60;Authorization: Bearer &lt;your API key&gt;&#x60;; fetching it without that   header returns &#x60;401&#x60;. Download and store the bytes when this   webhook arrives: Meta drops inbound media after a limited   retention window, after which the endpoint answers &#x60;400&#x60;   permanently and the media is unrecoverable. - **Instagram / Facebook / Telegram**: a direct platform CDN link   that needs no authentication and expires on the platform&#39;s own   schedule. |
**payload** | **object** | Additional attachment metadata | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
