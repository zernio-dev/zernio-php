# # ExternalPostWebhookPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Platform-native post ID (NOT a Zernio post ID). |
**platform** | **string** | Platform the post lives on (e.g. \&quot;googlebusiness\&quot;). |
**account_id** | **string** | Zernio account ID the post belongs to. |
**url** | **string** | Direct URL to the post on the platform, when available. |
**content** | **string** | Post text. May be empty. |
**media_type** | **string** | One of image, video, gif, document, text, carousel. |
**media_items** | [**\Zernio\Model\ExternalPostMediaItem[]**](ExternalPostMediaItem.md) |  |
**thumbnail_url** | **string** |  |
**published_at** | **\DateTime** |  |
**media_product_type** | **string** | Instagram only: the platform media product type (e.g. FEED, REELS, STORY, AD). Absent when the platform did not report it. | [optional]
**is_ai_generated** | **bool** | Instagram only: whether Instagram labeled the media as AI-generated. Absent when the platform did not report it. | [optional]
**is_shared_to_feed** | **bool** | Instagram reels only: whether the reel is also shared to the main feed. Absent when the platform did not report it. | [optional]
**media_audio_type** | **string** | Instagram only: audio type of the media (MUSIC or ORIGINAL_SOUND). Absent when the platform did not report it. | [optional]
**source** | **string** | Always \&quot;external\&quot;. Distinguishes these from Zernio-originated post.* events. |
**deleted_at** | **\DateTime** | Detection time of deletion. Present on post.external.deleted; null/absent otherwise. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
