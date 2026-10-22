# # InstagramMentionedMedia

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Instagram media ID of the post whose caption mentions the account. |
**caption** | **string** |  |
**media_type** | **string** | IMAGE, VIDEO or CAROUSEL_ALBUM. |
**media_url** | **string** | Temporary CDN URL. Meta omits it for videos with copyrighted or licensed audio and reels whose owner disabled downloads. |
**timestamp** | **string** | Publication time as Meta returns it (ISO 8601). |
**username** | **string** | Instagram handle of the account that posted the media and mentioned yours. |
**like_count** | **int** | Null when the owner hides like counts. |
**comments_count** | **int** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
