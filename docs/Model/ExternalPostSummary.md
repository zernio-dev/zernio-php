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
**media_url** | **string** | Primary media URL | [optional]
**thumbnail_url** | **string** | Thumbnail URL | [optional]
**media_items** | **object[]** | Per-item media (for carousels / multi-media posts) | [optional]
**analytics** | [**\Zernio\Model\ExternalPostSummaryAnalytics**](ExternalPostSummaryAnalytics.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
