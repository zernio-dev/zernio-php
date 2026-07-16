# # SendInboxMessageRequestButtonsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Button type. phone is Facebook only. Ignored on WhatsApp (buttons always render as reply buttons). |
**title** | **string** | Button label (max 20 chars) |
**url** | **string** | URL for url-type buttons (Facebook/Instagram only) | [optional]
**payload** | **string** | Payload for postback-type buttons. On WhatsApp, this is the reply ID returned on the message.received webhook when the button is tapped. | [optional]
**phone** | **string** | Phone number for phone-type buttons (Facebook only) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
