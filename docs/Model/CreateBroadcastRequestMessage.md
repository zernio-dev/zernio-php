# # CreateBroadcastRequestMessage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**text** | **string** | Required on every platform except WhatsApp (which sends &#x60;template&#x60;) and an SMS broadcast that carries attachments. | [optional]
**attachments** | [**\Zernio\Model\CreateBroadcastRequestMessageAttachmentsInner[]**](CreateBroadcastRequestMessageAttachmentsInner.md) | SMS only: sent as MMS media, one media_url per attachment. Each url must be public http(s); JPEG, PNG, GIF, WEBP, MP4 or 3GPP under 1 MB (checked at create when the host answers a HEAD request; Telnyx enforces the 1 MB total per message at send). | [optional]
**message_tag** | **string** | Instagram and Facebook only. Meta message tag sent with every recipient message (messaging_type MESSAGE_TAG) so the broadcast can reach people outside the 24h window. Instagram accepts HUMAN_AGENT only. Rejected with a 400 on any other platform. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
