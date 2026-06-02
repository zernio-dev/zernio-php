# # DiscordScheduledEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Event snowflake ID | [optional]
**guild_id** | **string** |  | [optional]
**channel_id** | **string** | Voice/stage channel ID; null for external events. | [optional]
**creator_id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**description** | **string** |  | [optional]
**scheduled_start_time** | **\DateTime** |  | [optional]
**scheduled_end_time** | **\DateTime** | Required for external events; optional for voice/stage. | [optional]
**privacy_level** | **int** | Always 2 (GUILD_ONLY) — Discord deprecated PUBLIC events. | [optional]
**status** | **int** | 1&#x3D;SCHEDULED, 2&#x3D;ACTIVE, 3&#x3D;COMPLETED, 4&#x3D;CANCELED | [optional]
**entity_type** | **int** | 1&#x3D;STAGE_INSTANCE, 2&#x3D;VOICE, 3&#x3D;EXTERNAL | [optional]
**entity_id** | **string** |  | [optional]
**entity_metadata** | [**\Zernio\Model\DiscordScheduledEventEntityMetadata**](DiscordScheduledEventEntityMetadata.md) |  | [optional]
**user_count** | **int** | Number of members who RSVP&#39;d. Only present when withUserCount&#x3D;true on list. | [optional]
**image** | **string** | Cover image hash; build URL via cdn.discordapp.com. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
