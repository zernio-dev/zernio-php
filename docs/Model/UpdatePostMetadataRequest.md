# # UpdatePostMetadataRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** | The platform to update metadata on |
**video_id** | **string** | YouTube video ID (required for direct mode, ignored for post-based mode) | [optional]
**account_id** | **string** | Zernio social account ID (required for direct mode, ignored for post-based mode) | [optional]
**title** | **string** | New video title (max 100 characters for YouTube) | [optional]
**description** | **string** | New video description | [optional]
**tags** | **string[]** | Array of keyword tags (max 500 characters combined for YouTube) | [optional]
**category_id** | **string** | YouTube video category ID | [optional]
**privacy_status** | **string** | Video privacy setting | [optional]
**thumbnail_url** | **string** | Public URL of a custom thumbnail image (JPEG, PNG, or GIF, max 2 MB, recommended 1280x720). Works on any video you own, including existing videos not published through Zernio. The channel must be verified (phone verification) to set custom thumbnails. | [optional]
**made_for_kids** | **bool** | COPPA compliance flag. Set true for child-directed content (restricts comments, notifications, ad targeting). | [optional]
**contains_synthetic_media** | **bool** | AI-generated content disclosure. Set true if the video contains synthetic content that could be mistaken for real. YouTube may add a label. | [optional]
**playlist_id** | **string** | YouTube playlist ID to add the video to (e.g. &#39;PLxxxxxxxxxxxxx&#39;). Use GET /v1/accounts/{id}/youtube-playlists to list available playlists. Only playlists owned by the channel are supported. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
