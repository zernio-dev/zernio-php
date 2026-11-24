# # GetAnalytics200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**post_id** | **string** |  | [optional]
**late_post_id** | **string** | Original Zernio post ID if scheduled via Zernio | [optional]
**status** | **string** | Overall post status. \&quot;partial\&quot; when some platforms published and others failed.  While any platform is still pending or processing, the post&#39;s own status is returned instead (usually scheduled or publishing), even if another platform already published.  A post with no published or failed platform (for example every platform cancelled) returns its own status with syncStatus unavailable and no platformAnalytics. | [optional]
**content** | **string** |  | [optional]
**content_not_retained** | **bool** | True when this team does not retain content, so the content fields of this row are null. Identifiers and metadata stay. | [optional]
**scheduled_for** | **\DateTime** |  | [optional]
**published_at** | **\DateTime** |  | [optional]
**analytics** | [**\Zernio\Model\PostAnalytics**](PostAnalytics.md) |  | [optional]
**platform_analytics** | [**\Zernio\Model\PlatformAnalytics[]**](PlatformAnalytics.md) |  | [optional]
**platform** | **string** |  | [optional]
**platform_post_url** | **string** |  | [optional]
**is_external** | **bool** |  | [optional]
**sync_status** | **string** | Overall sync state across all platforms | [optional]
**message** | **string** | Human-readable status message for pending, partial, or failed states | [optional]
**analytics_off** | [**\Zernio\Model\AnalyticsOffAccount[]**](AnalyticsOffAccount.md) | The X accounts this list covers (after its platform, profile and account filters) whose analytics sync does not run: their numbers stay as of the last read. Also sent with &#x60;view&#x3D;summary&#x60;. Absent when there are none. | [optional]
**thumbnail_url** | **string** | Cover image URL. A Facebook, Instagram or TikTok cover whose signed CDN link is still valid is served as that link, which expires (Meta &#x60;oe&#x3D;&#x60;, TikTok &#x60;x-expires&#x3D;&#x60;): download the image rather than storing the link.  Once the link expires, Zernio re-reads the cover from the platform and serves it from Zernio storage, a URL that does not expire.  Null while that re-read is pending (read again shortly) or when the platform no longer returns the post, never an expired link. | [optional]
**media_type** | **string** |  | [optional]
**media_items** | [**\Zernio\Model\AnalyticsSinglePostResponseMediaItemsInner[]**](AnalyticsSinglePostResponseMediaItemsInner.md) | All media items for this post. Carousel posts have one entry per slide.  - Facebook and Instagram images and video covers whose Meta CDN links expired are re-read and served from Zernio storage (non-expiring). - Facebook and Instagram video file URLs, and LinkedIn media URLs, stay the platform&#39;s signed links and are refreshed on read once they lapse. - A &#x60;url&#x60; or &#x60;thumbnail&#x60; whose platform link expired and could not be re-read yet is null, never the expired link. | [optional]
**media_product_type** | **string** | Instagram only: the platform media product type (e.g. FEED, REELS, STORY, AD). Absent when the platform did not report it. | [optional]
**is_ai_generated** | **bool** | Instagram only: whether Instagram labeled the media as AI-generated. Absent when the platform did not report it. | [optional]
**is_shared_to_feed** | **bool** | Instagram reels only: whether the reel is also shared to the main feed. Absent when the platform did not report it. | [optional]
**media_audio_type** | **string** | Instagram only: audio type of the media (MUSIC or ORIGINAL_SOUND). Absent when the platform did not report it. | [optional]
**upcoming_start_at** | **\DateTime** | YouTube only. Start time of an upcoming Premiere or scheduled live stream. Absent once it airs. While it is present, publishedAt is the upload time; after it airs, publishedAt is the time it actually started. | [optional]
**overview** | [**\Zernio\Model\AnalyticsOverview**](AnalyticsOverview.md) |  | [optional]
**posts** | [**\Zernio\Model\AnalyticsListResponsePostsInner[]**](AnalyticsListResponsePostsInner.md) |  | [optional]
**pagination** | [**\Zernio\Model\Pagination**](Pagination.md) |  | [optional]
**accounts** | [**\Zernio\Model\SocialAccount[]**](SocialAccount.md) | Connected accounts (followerCount and followersLastUpdated only included if user has analytics add-on) | [optional]
**has_analytics_access** | **bool** | Whether user has analytics add-on access | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
