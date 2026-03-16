# # GetAnalytics200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**post_id** | **string** |  | [optional]
**late_post_id** | **string** | Original Late post ID if scheduled via Late | [optional]
**status** | **string** | Overall post status. \&quot;partial\&quot; when some platforms published and others failed. | [optional]
**content** | **string** |  | [optional]
**scheduled_for** | **\DateTime** |  | [optional]
**published_at** | **\DateTime** |  | [optional]
**analytics** | [**\Late\Model\PostAnalytics**](PostAnalytics.md) |  | [optional]
**platform_analytics** | [**\Late\Model\PlatformAnalytics[]**](PlatformAnalytics.md) |  | [optional]
**platform** | **string** |  | [optional]
**platform_post_url** | **string** |  | [optional]
**is_external** | **bool** |  | [optional]
**sync_status** | **string** | Overall sync state across all platforms | [optional]
**message** | **string** | Human-readable status message for pending, partial, or failed states | [optional]
**thumbnail_url** | **string** |  | [optional]
**media_type** | **string** |  | [optional]
**media_items** | [**\Late\Model\AnalyticsSinglePostResponseMediaItemsInner[]**](AnalyticsSinglePostResponseMediaItemsInner.md) | All media items for this post. Carousel posts contain one entry per slide. | [optional]
**overview** | [**\Late\Model\AnalyticsOverview**](AnalyticsOverview.md) |  | [optional]
**posts** | [**\Late\Model\AnalyticsListResponsePostsInner[]**](AnalyticsListResponsePostsInner.md) |  | [optional]
**pagination** | [**\Late\Model\Pagination**](Pagination.md) |  | [optional]
**accounts** | [**\Late\Model\SocialAccount[]**](SocialAccount.md) | Connected social accounts (followerCount and followersLastUpdated only included if user has analytics add-on) | [optional]
**has_analytics_access** | **bool** | Whether user has analytics add-on access | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
