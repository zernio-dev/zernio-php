# # UpdatePostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | Stored on the post for reference/display only. This field is NOT used as the video title when publishing. To set a YouTube video title, use platformSpecificData.title on the youtube platform target (falls back to the first line of content when omitted). | [optional]
**content** | **string** |  | [optional]
**media_items** | [**\Zernio\Model\MediaItem[]**](MediaItem.md) |  | [optional]
**platforms** | [**\Zernio\Model\UpdatePostRequestPlatformsInner[]**](UpdatePostRequestPlatformsInner.md) | Target platforms and accounts for this post. Each item must include platform and accountId. | [optional]
**scheduled_for** | **\DateTime** |  | [optional]
**publish_now** | **bool** |  | [optional] [default to false]
**is_draft** | **bool** | When omitted, the post keeps its current draft status. Send &#x60;false&#x60; to promote a draft to scheduled (combined with &#x60;scheduledFor&#x60;, &#x60;publishNow&#x60;, or a queue). | [optional]
**requires_approval** | **bool** | Send true on a draft to submit it for approval: it becomes pending_approval and publishes only after POST /v1/posts/{postId}/review approves it. Cannot be combined with isDraft, publishNow, queuedFromProfile or queueId. Returns 409 when the post is not a draft. | [optional]
**timezone** | **string** |  | [optional]
**visibility** | **string** |  | [optional]
**tags** | **string[]** |  | [optional]
**hashtags** | **string[]** | Stored for reference only. Hashtags are NOT automatically appended to the caption when publishing. Include hashtags directly in the content field (platforms like Instagram only support hashtags as caption text). For YouTube keywords, use the tags field instead. | [optional]
**mentions** | **string[]** |  | [optional]
**crossposting_enabled** | **bool** |  | [optional]
**metadata** | **array<string,mixed>** |  | [optional]
**queued_from_profile** | **string** | Profile ID to schedule via queue. | [optional]
**queue_id** | **string** | Specific queue ID to use when scheduling via queue. | [optional]
**tiktok_settings** | [**\Zernio\Model\TikTokPlatformData**](TikTokPlatformData.md) | Root-level TikTok settings applied to the TikTok platforms sent in the same request. Merged into each platform&#39;s platformSpecificData, with platform-specific settings taking precedence. Returns 400 if sent without a platforms array. | [optional]
**facebook_settings** | [**\Zernio\Model\FacebookSettings**](FacebookSettings.md) | Root-level Facebook settings applied to the Facebook platforms sent in the same request. Merged into each platform&#39;s platformSpecificData.facebookSettings, with platform-specific settings taking precedence. Returns 400 if sent without a platforms array. | [optional]
**recycling** | [**\Zernio\Model\RecyclingConfig**](RecyclingConfig.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
