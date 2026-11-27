# # InstagramHashtagResearch

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hashtag** | [**\Zernio\Model\InstagramHashtagResearchHashtag**](InstagramHashtagResearchHashtag.md) |  |
**top_media** | [**\Zernio\Model\InstagramHashtagMedia[]**](InstagramHashtagMedia.md) | The most popular public media carrying the hashtag (Meta&#39;s top_media edge). |
**recent_media** | [**\Zernio\Model\InstagramHashtagMedia[]**](InstagramHashtagMedia.md) | Public media carrying the hashtag published in the last 24 hours, newest first (Meta&#39;s recent_media edge). |
**recently_searched_count** | **int** | Unique hashtags this account searched in the rolling 7-day window, this one included. Null when Meta does not report it. |
**weekly_search_limit** | **int** | Unique hashtags one Instagram account may search in a rolling 7 days. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
