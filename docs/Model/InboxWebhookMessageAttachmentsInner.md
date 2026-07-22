# # InboxWebhookMessageAttachmentsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Attachment type (image, video, file, sticker, audio) |
**url** | **string** | Where to fetch the attachment. The contract depends on direction and platform: inbound WhatsApp media points at the authenticated &#x60;GET /v1/whatsapp/media/{mediaId}&#x60; and requires &#x60;Authorization: Bearer &lt;your API key&gt;&#x60;, while outgoing media carries the URL originally supplied and Instagram / Facebook / Telegram carry direct platform CDN links that need no authentication. |
**payload** | **object** | Additional attachment metadata | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
