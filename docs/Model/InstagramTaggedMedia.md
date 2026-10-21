# # InstagramTaggedMedia

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Instagram media ID of the post the account is tagged in. |
**caption** | **string** |  |
**media_type** | **string** | IMAGE, VIDEO or CAROUSEL_ALBUM. |
**media_product_type** | **string** | FEED or REELS. |
**media_url** | **string** | Temporary CDN URL. Meta omits it for videos with copyrighted audio, flagged videos and reels whose owner disabled downloads. |
**thumbnail_url** | **string** | Cover image of a video or reel. |
**permalink** | **string** | Public Instagram URL of the post. |
**timestamp** | **string** | Publication time as Meta returns it (ISO 8601). |
**username** | **string** | Instagram handle of the account that posted the media and tagged yours. |
**like_count** | **int** | Null when the owner hides like counts. |
**comments_count** | **int** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
