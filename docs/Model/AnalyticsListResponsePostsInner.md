# # AnalyticsListResponsePostsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** |  | [optional]
**late_post_id** | **string** | Original Zernio post ID if scheduled via Zernio | [optional]
**content** | **string** |  | [optional]
**content_not_retained** | **bool** | True when this team does not retain content, so the content fields of this row are null. Identifiers and metadata stay. | [optional]
**scheduled_for** | **\DateTime** |  | [optional]
**published_at** | **\DateTime** |  | [optional]
**status** | **string** |  | [optional]
**analytics** | [**\Zernio\Model\PostAnalytics**](PostAnalytics.md) |  | [optional]
**platforms** | [**\Zernio\Model\PlatformAnalytics[]**](PlatformAnalytics.md) |  | [optional]
**platform** | **string** |  | [optional]
**platform_post_url** | **string** |  | [optional]
**is_external** | **bool** |  | [optional]
**is_ad** | **bool** | True when this post&#39;s metrics include paid delivery, so organic reporting should exclude it.  Set for LinkedIn dark posts and for TikTok posts one of your TikTok ads promotes (Spark / boosted).  TikTok exposes no ad flag of its own. A video created by an uploaded-asset (non-Spark) TikTok ad is posted to the profile with a fresh organic id and cannot be detected, so those still report false. | [optional]
**profile_id** | **string** |  | [optional]
**thumbnail_url** | **string** | Cover image URL. A Facebook, Instagram or TikTok cover whose signed CDN link is still valid is served as that link, which expires (Meta &#x60;oe&#x3D;&#x60;, TikTok &#x60;x-expires&#x3D;&#x60;): download the image rather than storing the link.  Once the link expires, Zernio re-reads the cover from the platform and serves it from Zernio storage, a URL that does not expire.  Null while that re-read is pending (read again shortly) or when the platform no longer returns the post, never an expired link. | [optional]
**media_type** | **string** |  | [optional]
**media_items** | [**\Zernio\Model\AnalyticsListResponsePostsInnerMediaItemsInner[]**](AnalyticsListResponsePostsInnerMediaItemsInner.md) | All media items for this post. Carousel posts contain one entry per slide.  - Facebook and Instagram images and video covers whose Meta CDN links expired are re-read and served from Zernio storage (non-expiring). - Facebook and Instagram video file URLs, and LinkedIn media URLs, stay the platform&#39;s signed links and are refreshed on read once they lapse. - A &#x60;url&#x60; or &#x60;thumbnail&#x60; whose platform link expired and could not be re-read yet is null, never the expired link. | [optional]
**media_product_type** | **string** | Instagram only: the platform media product type (e.g. FEED, REELS, STORY, AD). Absent when the platform did not report it. | [optional]
**is_ai_generated** | **bool** | Instagram only: whether Instagram labeled the media as AI-generated. Absent when the platform did not report it. | [optional]
**is_shared_to_feed** | **bool** | Instagram reels only: whether the reel is also shared to the main feed. Absent when the platform did not report it. | [optional]
**media_audio_type** | **string** | Instagram only: audio type of the media (MUSIC or ORIGINAL_SOUND). Absent when the platform did not report it. | [optional]
**upcoming_start_at** | **\DateTime** | YouTube only. Start time of an upcoming Premiere or scheduled live stream. Absent once it airs. While it is present, publishedAt is the upload time; after it airs, publishedAt is the time it actually started. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
