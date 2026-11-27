# # InstagramHashtagMedia

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Instagram media ID of a public post carrying the hashtag. |
**caption** | **string** |  |
**media_type** | **string** | IMAGE, VIDEO or CAROUSEL_ALBUM. |
**media_product_type** | **string** | Always null. Meta does not serve it on hashtag media. |
**media_url** | **string** | Temporary CDN URL. Meta omits it for videos with copyrighted audio and for carousel albums. |
**thumbnail_url** | **string** | Always null. Meta does not serve it on hashtag media. |
**permalink** | **string** | Public Instagram URL of the post. |
**timestamp** | **string** | Publication time as Meta returns it (ISO 8601). |
**like_count** | **int** | Null when the owner hides like counts. |
**comments_count** | **int** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
