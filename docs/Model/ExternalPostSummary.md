# # ExternalPostSummary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** | Platform the post belongs to (e.g. instagram, youtube, tiktok) | [optional]
**platform_post_id** | **string** | The platform&#39;s own post/media/video id | [optional]
**platform_post_url** | **string** | Canonical URL (permalink) of the post on the platform | [optional]
**content** | **string** | Post caption / text | [optional]
**published_at** | **\DateTime** | When the post was published on the platform | [optional]
**media_type** | **string** | Media type (e.g. image, video, carousel) | [optional]
**thumbnail_url** | **string** | Thumbnail URL | [optional]
**media_items** | **object[]** | Per-item media (for carousels / multi-media posts) | [optional]
**media_product_type** | **string** | Instagram only: the platform media product type (e.g. FEED, REELS, STORY, AD). Absent when the platform did not report it. | [optional]
**is_ai_generated** | **bool** | Instagram only: whether Instagram labeled the media as AI-generated. Absent when the platform did not report it. | [optional]
**is_shared_to_feed** | **bool** | Instagram reels only: whether the reel is also shared to the main feed. Absent when the platform did not report it. | [optional]
**media_audio_type** | **string** | Instagram only: audio type of the media (MUSIC or ORIGINAL_SOUND). Absent when the platform did not report it. | [optional]
**is_owner** | **bool** | Pinterest: true when the account created the Pin, false when it saved it from another user; keep true to import only its own Pins. Facebook: false for a collab post by another Page. Null when unknown and for other platforms. | [optional]
**analytics** | [**\Zernio\Model\ExternalPostSummaryAnalytics**](ExternalPostSummaryAnalytics.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
