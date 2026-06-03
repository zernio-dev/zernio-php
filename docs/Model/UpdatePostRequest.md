# # UpdatePostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** |  | [optional]
**content** | **string** |  | [optional]
**media_items** | [**\Zernio\Model\MediaItem[]**](MediaItem.md) |  | [optional]
**platforms** | [**\Zernio\Model\UpdatePostRequestPlatformsInner[]**](UpdatePostRequestPlatformsInner.md) | Target platforms and accounts for this post. Each item must include platform and accountId. | [optional]
**scheduled_for** | **\DateTime** |  | [optional]
**publish_now** | **bool** |  | [optional] [default to false]
**is_draft** | **bool** |  | [optional]
**timezone** | **string** |  | [optional]
**visibility** | **string** |  | [optional]
**tags** | **string[]** |  | [optional]
**hashtags** | **string[]** |  | [optional]
**mentions** | **string[]** |  | [optional]
**crossposting_enabled** | **bool** |  | [optional]
**metadata** | **array<string,mixed>** |  | [optional]
**queued_from_profile** | **string** | Profile ID to schedule via queue. | [optional]
**queue_id** | **string** | Specific queue ID to use when scheduling via queue. | [optional]
**tiktok_settings** | [**\Zernio\Model\TikTokPlatformData**](TikTokPlatformData.md) | Root-level TikTok settings applied to all TikTok platforms. Merged into each platform&#39;s platformSpecificData, with platform-specific settings taking precedence. | [optional]
**facebook_settings** | [**\Zernio\Model\FacebookPlatformData**](FacebookPlatformData.md) | Root-level Facebook settings applied to all Facebook platforms. Merged into each platform&#39;s platformSpecificData, with platform-specific settings taking precedence. | [optional]
**recycling** | [**\Zernio\Model\RecyclingConfig**](RecyclingConfig.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
