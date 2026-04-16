# # DiscordPlatformData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel_id** | **string** | Target channel snowflake ID. Determines which channel in the connected server receives the message. |
**embeds** | [**\Late\Model\DiscordPlatformDataEmbedsInner[]**](DiscordPlatformDataEmbedsInner.md) | Up to 10 Discord embed objects (combined max 6,000 characters across all embeds). Sent alongside or instead of plain-text content. | [optional]
**poll** | [**\Late\Model\DiscordPlatformDataPoll**](DiscordPlatformDataPoll.md) |  | [optional]
**crosspost** | **bool** | Auto-crosspost to every server following this announcement channel (type 5). No-op for regular text channels. | [optional]
**forum_thread_name** | **string** | Thread title for forum channel posts (type 15). Required when posting to a forum channel. | [optional]
**forum_applied_tags** | **string[]** | Tag snowflake IDs to apply to forum posts. Max 5 tags. | [optional]
**thread_from_message** | [**\Late\Model\DiscordPlatformDataThreadFromMessage**](DiscordPlatformDataThreadFromMessage.md) |  | [optional]
**tts** | **bool** | Send as text-to-speech message. Discord reads the message aloud in the channel. | [optional]
**webhook_username** | **string** | Override the webhook display name for this post only (1-80 chars). Falls back to the account-level default set via PATCH /v1/connect/discord. | [optional]
**webhook_avatar_url** | **string** | Override the webhook avatar URL for this post only. Falls back to the account-level default. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
