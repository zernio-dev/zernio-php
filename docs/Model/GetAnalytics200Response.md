# # GetAnalytics200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**post_id** | **string** |  | [optional]
**late_post_id** | **string** | Original Zernio post ID if scheduled via Zernio | [optional]
**status** | **string** | Overall post status. \&quot;partial\&quot; when some platforms published and others failed. | [optional]
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
**thumbnail_url** | **string** |  | [optional]
**media_type** | **string** |  | [optional]
**media_items** | [**\Zernio\Model\AnalyticsSinglePostResponseMediaItemsInner[]**](AnalyticsSinglePostResponseMediaItemsInner.md) | All media items for this post. Carousel posts contain one entry per slide. | [optional]
**media_product_type** | **string** | Instagram only: the platform media product type (e.g. FEED, REELS, STORY, AD). Absent when the platform did not report it. | [optional]
**is_ai_generated** | **bool** | Instagram only: whether Instagram labeled the media as AI-generated. Absent when the platform did not report it. | [optional]
**is_shared_to_feed** | **bool** | Instagram reels only: whether the reel is also shared to the main feed. Absent when the platform did not report it. | [optional]
**media_audio_type** | **string** | Instagram only: audio type of the media (MUSIC or ORIGINAL_SOUND). Absent when the platform did not report it. | [optional]
**overview** | [**\Zernio\Model\AnalyticsOverview**](AnalyticsOverview.md) |  | [optional]
**posts** | [**\Zernio\Model\AnalyticsListResponsePostsInner[]**](AnalyticsListResponsePostsInner.md) |  | [optional]
**pagination** | [**\Zernio\Model\Pagination**](Pagination.md) |  | [optional]
**accounts** | [**\Zernio\Model\SocialAccount[]**](SocialAccount.md) | Connected accounts (followerCount and followersLastUpdated only included if user has analytics add-on) | [optional]
**has_analytics_access** | **bool** | Whether user has analytics add-on access | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
