# # YouTubeVideoRetentionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**success** | **bool** |  | [optional]
**account_id** | **string** | The Zernio account ID for the YouTube account | [optional]
**video_id** | **string** | The YouTube video ID | [optional]
**title** | **string** | Video title | [optional]
**published_at** | **\DateTime** | When the video was published on YouTube | [optional]
**duration_seconds** | **int** | Video length in seconds (from YouTube contentDetails.duration) | [optional]
**date_range** | [**\Zernio\Model\YouTubeDailyViewsResponseDateRange**](YouTubeDailyViewsResponseDateRange.md) |  | [optional]
**retention_curve** | [**\Zernio\Model\YouTubeVideoRetentionResponseRetentionCurveInner[]**](YouTubeVideoRetentionResponseRetentionCurveInner.md) | Up to 100 points covering the video timeline, aggregated over the date range. Empty for videos with very few views. | [optional]
**note** | **string** | Present only when the curve is empty, explaining why | [optional]
**scope_status** | [**\Zernio\Model\YouTubeDailyViewsResponseScopeStatus**](YouTubeDailyViewsResponseScopeStatus.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
