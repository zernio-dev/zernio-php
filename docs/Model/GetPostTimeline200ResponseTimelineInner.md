# # GetPostTimeline200ResponseTimelineInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | **\DateTime** | Date in YYYY-MM-DD format | [optional]
**platform** | **string** | Platform name (e.g. instagram, tiktok) | [optional]
**platform_post_id** | **string** | Platform-specific post ID | [optional]
**impressions** | **int** | Total impressions on this date | [optional]
**reach** | **int** | Total reach on this date | [optional]
**likes** | **int** | Total likes on this date | [optional]
**comments** | **int** | Total comments on this date | [optional]
**shares** | **int** | Total shares on this date | [optional]
**saves** | **int** | Total saves on this date | [optional]
**clicks** | **int** | Total clicks on this date | [optional]
**views** | **int** | Total views on this date | [optional]
**follows** | **int** | Follows attributed to the post on this date (Instagram feed and stories, Facebook Reels, TikTok business lane). Null on Instagram Reels and video and on Facebook posts that are not Reels, where Meta has no follows metric; 0 on other platforms. | [optional]
**completion_rate** | **float** | TikTok business lane: share of viewers who watched to the end on this date, 0 to 1; 0 elsewhere | [optional]
**profile_views** | **int** | TikTok business lane: profile views attributed to the post on this date; 0 elsewhere | [optional]
**website_clicks** | **int** | TikTok business lane: website-link clicks attributed to the post on this date (also inside clicks); 0 elsewhere | [optional]
**impression_sources** | **array<string,float>** | TikTok business lane: share of views by surface on this date (forYou, follow, search, personalProfile, sound, directMessage, other), fractions 0 to 1; empty object elsewhere | [optional]
**audience_types** | **array<string,float>** | TikTok business lane: follower / nonFollower and newViewer / returnViewer shares on this date, fractions 0 to 1; empty object elsewhere | [optional]
**audience_countries** | **array<string,float>** | TikTok business lane: viewer-country shares on this date keyed by ISO-3166 alpha-2, fractions 0 to 1, top 20 with the tail in &#x60;other&#x60;; empty object elsewhere | [optional]
**replays** | **int** | Facebook Reels only: plays that were replays, as of this date; 0 elsewhere | [optional]
**retention_curve** | **array<string,float>** | Facebook Reels only: share of plays still watching at each second of playback, fractions 0 to 1 (Meta post_video_retention_graph). Keys are whole seconds from the start of a play (\&quot;3\&quot; is the share still watching at 3 s). Loops count as continued playback, so a short Reels curve runs past its length (an 8 s Reel has keys \&quot;0\&quot; to \&quot;12\&quot;); Meta returns at most 41 points, so a long Reel covers only its first 40 s. Values are as of this date; empty object elsewhere. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
