# # InitiateTelegramConnectRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chat_id** | **string** | The Telegram chat ID. Numeric ID (e.g. \&quot;-1001234567890\&quot;) or username with @ prefix (e.g. \&quot;@mychannel\&quot;). |
**profile_id** | **string** | The profile ID to connect the account to |
**purpose** | **string** | Connect the account for notifications only. Slack and Telegram only: &#x60;GET /v1/connect/{platform}&#x60; returns 400 for any other platform, and other platforms&#39; own connect endpoints ignore it.  The account is free, receives Zernio notifications, and cannot publish. To publish with it, connect it again without &#x60;purpose&#x60;. Refused with 400 when the channel or chat is already connected for publishing: connect a separate one for notifications. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
