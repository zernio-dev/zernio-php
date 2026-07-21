# # SendSmsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **string** | One of your SMS-enabled numbers (E.164; formatting is normalized), or an approved alphanumeric sender ID (3-11 letters/digits/spaces, created via &#x60;/v1/sms/sender-ids&#x60;). |
**to** | **string** | Recipient number (E.164). |
**text** | **string** | Message body. Required unless &#x60;mediaUrls&#x60; is set. Max 10 SMS segments (1530 GSM-7 or 670 unicode characters). | [optional]
**media_urls** | **string[]** | Public media URLs to attach (sends as MMS). Max 10. | [optional]
**send_at** | **\DateTime** | Optional. Schedule the send for a future time (ISO 8601 with offset, e.g. &#x60;2026-08-01T12:00:00Z&#x60;). Must be in the future. The message is queued and the &#x60;message.delivered&#x60; webhook fires when it actually sends. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
