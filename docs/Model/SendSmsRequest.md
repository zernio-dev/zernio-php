# # SendSmsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **string** | One of your SMS-enabled numbers (E.164; formatting is normalized). |
**to** | **string** | Recipient number (E.164). |
**text** | **string** | Message body. Required unless &#x60;mediaUrls&#x60; is set. Max 10 SMS segments (1530 GSM-7 or 670 unicode characters). | [optional]
**media_urls** | **string[]** | Public media URLs to attach (sends as MMS). Max 10. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
