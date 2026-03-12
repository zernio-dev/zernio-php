# # MediaItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  | [optional]
**url** | **string** |  | [optional]
**title** | **string** | Optional title for the media item. Used as the document title for LinkedIn PDF/carousel posts. If omitted, falls back to the post title, then the filename. | [optional]
**filename** | **string** |  | [optional]
**size** | **int** | Optional file size in bytes | [optional]
**mime_type** | **string** | Optional MIME type (e.g. image/jpeg, video/mp4) | [optional]
**thumbnail** | **string** | Optional custom thumbnail/cover image URL for videos. Supported for Facebook video posts, Facebook Reels, and regular video uploads. Max 10MB, JPG/PNG recommended. | [optional]
**instagram_thumbnail** | **string** | Optional custom cover image URL for Instagram Reels | [optional]
**tiktok_processed** | **bool** | Internal flag indicating the image was resized for TikTok | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
