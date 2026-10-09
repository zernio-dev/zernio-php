# # FacebookOrInstagramPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Facebook post id ({pageId}_{postId}) or Instagram media id |
**permalink** | **string** |  |
**text** | **string** | Facebook post message or Instagram caption |
**thumbnail_url** | **string** | Facebook &#x60;full_picture&#x60; (or the first attachment image); Instagram &#x60;thumbnail_url&#x60; for videos, &#x60;media_url&#x60; for images. Expiring Meta CDN URL. |
**media_url** | **string** | Instagram &#x60;media_url&#x60; (the video file for videos). Always null on Facebook. Expiring Meta CDN URL. |
**media_type** | **string** | Instagram &#x60;media_type&#x60; (IMAGE, VIDEO, CAROUSEL_ALBUM) or the Facebook attachment type (photo, video_inline, link, ...) |
**product_type** | **string** | Instagram &#x60;media_product_type&#x60;: AD, FEED, REELS or STORY. Always null on Facebook. |
**created_at** | **string** | Creation time as Meta returns it (e.g. 2026-05-27T17:15:51+0000) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
