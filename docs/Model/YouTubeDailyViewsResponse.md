# # YouTubeDailyViewsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**success** | **bool** |  | [optional]
**video_id** | **string** | The YouTube video ID | [optional]
**duration_seconds** | **int** | Video length in seconds (from YouTube contentDetails.duration) | [optional]
**date_range** | [**\Zernio\Model\YouTubeDailyViewsResponseDateRange**](YouTubeDailyViewsResponseDateRange.md) |  | [optional]
**provisional_since** | **\DateTime** | Present only when the range reaches into YouTube&#39;s ~3-day processing window: the first date whose numbers are provisional and may still be revised by YouTube. | [optional]
**total_views** | **int** | Sum of views across all days in the range | [optional]
**daily_views** | [**\Zernio\Model\YouTubeDailyViewsResponseDailyViewsInner[]**](YouTubeDailyViewsResponseDailyViewsInner.md) |  | [optional]
**last_synced_at** | **\DateTime** | When the data was last synced from YouTube | [optional]
**scope_status** | [**\Zernio\Model\YouTubeDailyViewsResponseScopeStatus**](YouTubeDailyViewsResponseScopeStatus.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
