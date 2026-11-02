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
**provisional_since** | **\DateTime** | Present only when the range reaches into YouTube&#39;s ~3-day processing window: the first date whose numbers are provisional and may still be revised by YouTube. | [optional]
**segment_metrics_available** | **bool** | Whether YouTube returned startedWatching and stoppedWatching for this curve. When false, both are 0 placeholders in every point, not measured values. | [optional]
**retention_curve** | [**\Zernio\Model\YouTubeVideoRetentionResponseRetentionCurveInner[]**](YouTubeVideoRetentionResponseRetentionCurveInner.md) | Up to 100 points covering the video timeline, aggregated over the date range. Contains only the buckets YouTube reports for that range and is never zero-filled, so it can end before 1.0, skip positions, or be empty. | [optional]
**note** | **string** | Present only when the curve is empty, explaining why | [optional]
**scope_status** | [**\Zernio\Model\YouTubeDailyViewsResponseScopeStatus**](YouTubeDailyViewsResponseScopeStatus.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
