# # CreateBroadcastRequestMessage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**text** | **string** | Required on every platform except WhatsApp (which sends &#x60;template&#x60;) and an SMS broadcast that carries attachments. | [optional]
**attachments** | [**\Zernio\Model\CreateBroadcastRequestMessageAttachmentsInner[]**](CreateBroadcastRequestMessageAttachmentsInner.md) | SMS only: sent as MMS media, one media_url per attachment. Each url must be public http(s); JPEG, PNG, GIF, WEBP, MP4 or 3GPP under 1 MB (checked at create when the host answers a HEAD request; Telnyx enforces the 1 MB total per message at send). | [optional]
**message_tag** | **string** | Not usable: a broadcast only reaches people within the 24h window. HUMAN_AGENT is rejected with a 400 because it is only for replies typed by a person, and Meta retired the other tags. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
