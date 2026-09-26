# # AnalyticsSinglePostResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**post_id** | **string** |  | [optional]
**late_post_id** | **string** | Original Zernio post ID if scheduled via Zernio | [optional]
**status** | **string** | Overall post status. \&quot;partial\&quot; when some platforms published and others failed. While any platform is still pending or processing, the post&#39;s own status is returned instead (usually scheduled or publishing), even if another platform already published. | [optional]
**content** | **string** |  | [optional]
**scheduled_for** | **\DateTime** |  | [optional]
**published_at** | **\DateTime** |  | [optional]
**analytics** | [**\Zernio\Model\PostAnalytics**](PostAnalytics.md) |  | [optional]
**platform_analytics** | [**\Zernio\Model\PlatformAnalytics[]**](PlatformAnalytics.md) |  | [optional]
**platform** | **string** |  | [optional]
**platform_post_url** | **string** |  | [optional]
**is_external** | **bool** |  | [optional]
**sync_status** | **string** | Overall sync state across all platforms | [optional]
**message** | **string** | Human-readable status message for pending, partial, or failed states | [optional]
**thumbnail_url** | **string** | Cover image URL. Facebook and Instagram covers whose Meta CDN link expired are re-read from Meta and served from Zernio storage, so that URL does not expire and can be cached. | [optional]
**media_type** | **string** |  | [optional]
**media_items** | [**\Zernio\Model\AnalyticsSinglePostResponseMediaItemsInner[]**](AnalyticsSinglePostResponseMediaItemsInner.md) | All media items for this post. Carousel posts contain one entry per slide. Facebook and Instagram images and video covers whose Meta CDN links expired are re-read and served from Zernio storage (non-expiring). Facebook and Instagram video file URLs, and LinkedIn media URLs, stay the platform&#39;s signed links and are refreshed on read once they lapse. | [optional]
**media_product_type** | **string** | Instagram only: the platform media product type (e.g. FEED, REELS, STORY, AD). Absent when the platform did not report it. | [optional]
**is_ai_generated** | **bool** | Instagram only: whether Instagram labeled the media as AI-generated. Absent when the platform did not report it. | [optional]
**is_shared_to_feed** | **bool** | Instagram reels only: whether the reel is also shared to the main feed. Absent when the platform did not report it. | [optional]
**media_audio_type** | **string** | Instagram only: audio type of the media (MUSIC or ORIGINAL_SOUND). Absent when the platform did not report it. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
