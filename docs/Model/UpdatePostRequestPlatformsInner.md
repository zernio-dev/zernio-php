# # UpdatePostRequestPlatformsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** |  |
**account_id** | **string** |  |
**custom_content** | **string** | Platform-specific text override. | [optional]
**custom_media** | [**\Zernio\Model\MediaItem[]**](MediaItem.md) |  | [optional]
**scheduled_for** | **\DateTime** | Optional per-platform scheduled time override. It is kept when a top-level scheduledFor is also sent, except a date sent back unchanged that matched the post scheduled time or is already past, which follows the new top-level scheduledFor. | [optional]
**platform_specific_data** | **array<string,mixed>** | A &lt;platform&gt;Settings namespace (e.g. facebookSettings, tiktokSettings) omitted from the request is preserved from the stored post. Sending the key replaces the whole namespace; it is not deep-merged. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
