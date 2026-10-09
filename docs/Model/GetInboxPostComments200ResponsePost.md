# # GetInboxPostComments200ResponsePost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Facebook post id ({pageId}_{postId}) or Instagram media id |
**fullname** | **string** | Fullname with type prefix (e.g. \&quot;t3_1tjtj26\&quot;) | [optional]
**title** | **string** |  | [optional]
**selftext** | **string** | Body text for self-posts (empty for link posts) | [optional]
**author** | **string** | Reddit username, without the u/ prefix | [optional]
**subreddit** | **string** | Subreddit name, without the r/ prefix | [optional]
**permalink** | **string** |  |
**url** | **string** | For link posts, the external URL; for self-posts, the Reddit permalink | [optional]
**score** | **int** | Net upvotes (upvotes minus downvotes) | [optional]
**num_comments** | **int** |  | [optional]
**created_utc** | **int** | Unix timestamp in seconds | [optional]
**over18** | **bool** |  | [optional]
**stickied** | **bool** |  | [optional]
**flair_text** | **string** | Link flair text if any | [optional]
**is_gallery** | **bool** | True if the post is a Reddit gallery (multiple images) | [optional]
**text** | **string** | Facebook post message or Instagram caption |
**thumbnail_url** | **string** | Facebook &#x60;full_picture&#x60; (or the first attachment image); Instagram &#x60;thumbnail_url&#x60; for videos, &#x60;media_url&#x60; for images. Expiring Meta CDN URL. |
**media_url** | **string** | Instagram &#x60;media_url&#x60; (the video file for videos). Always null on Facebook. Expiring Meta CDN URL. |
**media_type** | **string** | Instagram &#x60;media_type&#x60; (IMAGE, VIDEO, CAROUSEL_ALBUM) or the Facebook attachment type (photo, video_inline, link, ...) |
**product_type** | **string** | Instagram &#x60;media_product_type&#x60;: AD, FEED, REELS or STORY. Always null on Facebook. |
**created_at** | **string** | Creation time as Meta returns it (e.g. 2026-05-27T17:15:51+0000) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
