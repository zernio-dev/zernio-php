# # CreatePostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** |  | [optional]
**content** | **string** | Post caption/text. Optional when media is attached or all platforms have customContent. Required for text-only posts. | [optional]
**media_items** | [**\Zernio\Model\CreatePostRequestMediaItemsInner[]**](CreatePostRequestMediaItemsInner.md) |  | [optional]
**platforms** | [**\Zernio\Model\CreatePostRequestPlatformsInner[]**](CreatePostRequestPlatformsInner.md) | Target platforms and accounts for this post. Required for non-draft posts (returns 400 if empty). Drafts can omit platforms. | [optional]
**scheduled_for** | **\DateTime** |  | [optional]
**publish_now** | **bool** |  | [optional] [default to false]
**is_draft** | **bool** | When true, saves the post as a draft. When none of scheduledFor, publishNow, or queuedFromProfile are provided, the post defaults to draft automatically. | [optional] [default to false]
**timezone** | **string** |  | [optional] [default to 'UTC']
**tags** | **string[]** | Tags/keywords. YouTube constraints: each tag max 100 chars, combined max 500 chars, duplicates auto-removed. | [optional]
**hashtags** | **string[]** |  | [optional]
**mentions** | **string[]** | Stored for reference only. This field does NOT automatically create @mentions when publishing. For LinkedIn @mentions, use the /v1/accounts/{accountId}/linkedin-mentions endpoint to resolve profile URLs to URNs, then embed the returned mentionFormat directly in the post content field. | [optional]
**crossposting_enabled** | **bool** |  | [optional] [default to true]
**metadata** | **array<string,mixed>** |  | [optional]
**tiktok_settings** | [**\Zernio\Model\TikTokPlatformData**](TikTokPlatformData.md) | Root-level TikTok settings applied to all TikTok platforms. Merged into each platform&#39;s platformSpecificData, with platform-specific settings taking precedence. | [optional]
**facebook_settings** | [**\Zernio\Model\FacebookPlatformData**](FacebookPlatformData.md) | Root-level Facebook settings applied to all Facebook platforms. Merged into each platform&#39;s platformSpecificData, with platform-specific settings taking precedence. | [optional]
**recycling** | [**\Zernio\Model\RecyclingConfig**](RecyclingConfig.md) |  | [optional]
**queued_from_profile** | **string** | Profile ID to schedule via queue. When provided without scheduledFor, the post is auto-assigned to the next available slot. Do not call /v1/queue/next-slot and use that time in scheduledFor, as that bypasses queue locking. | [optional]
**queue_id** | **string** | Specific queue ID to use when scheduling via queue. Only used when queuedFromProfile is also provided. If omitted, uses the profile&#39;s default queue. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
