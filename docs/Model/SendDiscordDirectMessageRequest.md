# # SendDiscordDirectMessageRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | SocialAccount _id of the connected Discord account the bot speaks as. Caller must own the account (directly or via team membership). |
**user_id** | **string** | Discord snowflake ID of the recipient (15-21 digits). |
**content** | **string** | Message text, up to 2,000 characters. | [optional]
**embeds** | **object[]** | Up to 10 Discord embeds. Same shape as channel-post embeds (title, description, color, fields, etc.). See DiscordPlatformData.embeds for the embed object schema. | [optional]
**attachments** | [**\Zernio\Model\SendDiscordDirectMessageRequestAttachmentsInner[]**](SendDiscordDirectMessageRequestAttachmentsInner.md) | Up to 10 media attachments. Each is &#x60;{ type: image|video|gif|document, url, filename?, mimeType?, size? }&#x60;. | [optional]
**tts** | **bool** | Send as text-to-speech message. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
