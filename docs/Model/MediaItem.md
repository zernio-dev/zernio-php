# # MediaItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  | [optional]
**url** | **string** |  | [optional]
**title** | **string** | Optional title for the media item. Used as the document title for LinkedIn PDF/carousel posts. If omitted, falls back to the post title, then the filename. | [optional]
**alt_text** | **string** | Accessibility alternative text for an image, applied on every platform that supports it: Instagram (feed images only, not Reels/Stories), Facebook, Threads, X/Twitter (max 1000 chars), LinkedIn, Bluesky, and Pinterest (max 500 chars). Ignored on platforms without alt-text support (TikTok, YouTube, Snapchat, Telegram, Reddit, Google Business, WhatsApp) and on video items where the platform does not accept it. Set once per image; the same value is sent to each selected platform. | [optional]
**filename** | **string** |  | [optional]
**size** | **int** | Optional file size in bytes | [optional]
**mime_type** | **string** | Optional MIME type (e.g. image/jpeg, video/mp4) | [optional]
**thumbnail** | **string** | Optional custom thumbnail/cover image URL for videos. Supported for Facebook video posts, Facebook Reels, and regular video uploads. Max 10MB, JPG/PNG recommended. | [optional]
**instagram_thumbnail** | **string** | Custom cover image URL for Instagram Reels. Can also be set via platformSpecificData.instagramThumbnail or platformSpecificData.reelCover. Resolution order: this field &gt; platformSpecificData.instagramThumbnail &gt; platformSpecificData.reelCover &gt; platformSpecificData.thumbnailUrl (legacy). | [optional]
**tiktok_processed** | **bool** | Internal flag indicating the image was resized for TikTok | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
