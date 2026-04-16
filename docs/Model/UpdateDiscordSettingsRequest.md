# # UpdateDiscordSettingsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Discord account ID |
**webhook_username** | **string** | Custom display name for the webhook (1-80 chars). Empty string resets to default (\&quot;Zernio\&quot;). Cannot contain \&quot;clyde\&quot; or \&quot;discord\&quot;. | [optional]
**webhook_avatar_url** | **string** | Custom avatar URL. Empty string resets to default bot avatar. | [optional]
**channel_id** | **string** | Switch to a different channel in the same guild. Must be a text (0), announcement (5), or forum (15) channel. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
