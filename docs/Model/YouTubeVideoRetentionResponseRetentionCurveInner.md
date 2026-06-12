# # YouTubeVideoRetentionResponseRetentionCurveInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**elapsed_video_time_ratio** | **float** | Position in the video as a ratio (0.01-1.0, exclusive end of each interval) | [optional]
**audience_watch_ratio** | **float** | Absolute share of viewers watching at this point. Can exceed 1 (rewinds/looping, common on Shorts). | [optional]
**relative_retention_performance** | **float** | Retention vs videos of similar length (0 &#x3D; worst, 0.5 &#x3D; median, 1 &#x3D; best) | [optional]
**started_watching** | **int** | Viewers who started watching in this segment | [optional]
**stopped_watching** | **int** | Viewers who stopped watching in this segment | [optional]
**total_segment_impressions** | **int** | Total views of this segment, including rewatches | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
