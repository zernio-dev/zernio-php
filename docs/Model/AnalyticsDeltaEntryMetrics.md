# # AnalyticsDeltaEntryMetrics

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**impressions** | **int** |  |
**reach** | **int** |  |
**likes** | **int** |  |
**comments** | **int** |  |
**shares** | **int** |  |
**saves** | **int** |  |
**sends** | **int** |  |
**clicks** | **int** |  |
**views** | **int** |  |
**follows** | **int** | Follows attributed to this post (Instagram) |
**ig_reels_avg_watch_time** | **int** | Average watch time per play, in milliseconds (Instagram Reels, Facebook Reels, TikTok business videos) |
**ig_reels_video_view_total_time** | **int** | Total watch time including replays, in milliseconds (Instagram Reels, Facebook Reels, TikTok business videos) |
**reposts** | **int** |  |
**reels_skip_rate** | **float** | Instagram Reels skip rate, 0 to 1 |
**completion_rate** | **float** | TikTok business lane: share of viewers who watched to the end, 0 to 1 |
**profile_views** | **int** | TikTok business lane: profile views attributed to the post |
**website_clicks** | **int** | TikTok business lane: website-link clicks attributed to the post (also inside clicks) |
**impression_sources** | **array<string,float>** | TikTok business lane: share of views by surface (forYou, follow, search, personalProfile, sound, directMessage, other), fractions 0 to 1. Empty object elsewhere. |
**audience_types** | **array<string,float>** | TikTok business lane: follower / nonFollower and newViewer / returnViewer shares, fractions 0 to 1. Empty object elsewhere. |
**audience_countries** | **array<string,float>** | TikTok business lane: viewer-country shares keyed by ISO-3166 alpha-2, fractions 0 to 1, top 20 with the tail in &#x60;other&#x60;. Empty object elsewhere. |
**replays** | **int** | Facebook Reels only: plays that were replays. 0 elsewhere. | [optional]
**retention_curve** | **array<string,float>** | Facebook Reels only: share of plays still watching at each second of playback, fractions 0 to 1 (Meta post_video_retention_graph). Keys are whole seconds from the start of a play (\&quot;3\&quot; is the share still watching at 3 s). Loops count as continued playback, so a short Reels curve runs past its length (an 8 s Reel has keys \&quot;0\&quot; to \&quot;12\&quot;); Meta returns at most 41 points, so a long Reel covers only its first 40 s. Empty object elsewhere. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
