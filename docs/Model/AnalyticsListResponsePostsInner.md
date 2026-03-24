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
**analytics** | [**\Late\Model\PostAnalytics**](PostAnalytics.md) |  | [optional]
**platforms** | [**\Late\Model\PlatformAnalytics[]**](PlatformAnalytics.md) |  | [optional]
**platform** | **string** |  | [optional]
**platform_post_url** | **string** |  | [optional]
**is_external** | **bool** |  | [optional]
**profile_id** | **string** |  | [optional]
**thumbnail_url** | **string** |  | [optional]
**media_type** | **string** |  | [optional]
**media_items** | [**\Late\Model\AnalyticsSinglePostResponseMediaItemsInner[]**](AnalyticsSinglePostResponseMediaItemsInner.md) | All media items for this post. Carousel posts contain one entry per slide. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
