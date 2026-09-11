# # AnalyticsListResponsePostsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** |  | [optional]
**late_post_id** | **string** | Original Zernio post ID if scheduled via Zernio | [optional]
**content** | **string** |  | [optional]
**scheduled_for** | **\DateTime** |  | [optional]
**published_at** | **\DateTime** |  | [optional]
**status** | **string** |  | [optional]
**analytics** | [**\Zernio\Model\PostAnalytics**](PostAnalytics.md) |  | [optional]
**platforms** | [**\Zernio\Model\PlatformAnalytics[]**](PlatformAnalytics.md) |  | [optional]
**platform** | **string** |  | [optional]
**platform_post_url** | **string** |  | [optional]
**is_external** | **bool** |  | [optional]
**is_ad** | **bool** | True when this post&#39;s metrics include paid delivery, so organic reporting should exclude it. Set for LinkedIn dark posts and for TikTok posts that one of your TikTok ads promotes (Spark / boosted). TikTok exposes no ad flag of its own, so a video created by an uploaded-asset (non-Spark) TikTok ad is posted to the profile with a fresh organic id and cannot be detected: those still report as false. | [optional]
**profile_id** | **string** |  | [optional]
**thumbnail_url** | **string** |  | [optional]
**media_type** | **string** |  | [optional]
**media_items** | [**\Zernio\Model\AnalyticsListResponsePostsInnerMediaItemsInner[]**](AnalyticsListResponsePostsInnerMediaItemsInner.md) | All media items for this post. Carousel posts contain one entry per slide. | [optional]
**media_product_type** | **string** | Instagram only: the platform media product type (e.g. FEED, REELS, STORY, AD). Absent when the platform did not report it. | [optional]
**is_ai_generated** | **bool** | Instagram only: whether Instagram labeled the media as AI-generated. Absent when the platform did not report it. | [optional]
**is_shared_to_feed** | **bool** | Instagram reels only: whether the reel is also shared to the main feed. Absent when the platform did not report it. | [optional]
**media_audio_type** | **string** | Instagram only: audio type of the media (MUSIC or ORIGINAL_SOUND). Absent when the platform did not report it. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
