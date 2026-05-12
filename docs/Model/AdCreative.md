# # AdCreative

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**thumbnail_url** | **string** | Primary thumbnail/image URL | [optional]
**image_url** | **string** | Alternative image URL | [optional]
**video_id** | **string** | Meta video ID for VIDEO-type ads. Null for non-video ads. Callers that need an embeddable MP4 can call GET /{videoId}?fields&#x3D;source with the page access token. | [optional]
**video_url** | **string** | Public Facebook watch URL for VIDEO-type ads (https://www.facebook.com/watch/?v&#x3D;{videoId}). Null for non-video ads. | [optional]
**object_type** | **string** | Meta creative object_type (e.g. SHARE, VIDEO, PRIVACY_CHECK_FAIL, POST_DELETED). Use this to render state-aware previews — when Meta moderation strips image/video fields, only thumbnailUrl at 64x64 is available. | [optional]
**object_story_id** | **string** | Meta creative &#x60;object_story_id&#x60; (the SHARE reference). Frequently absent — Meta omits it for SHARE creatives. Use effectiveObjectStoryId instead. | [optional]
**effective_object_story_id** | **string** | Meta &#x60;effective_object_story_id&#x60; — &#x60;{pageId}_{postId}&#x60; of the Facebook post the ad&#39;s engagement (comments) lives on. Pass to GET /v1/ads?effectiveObjectStoryId&#x3D; to map a Business-Manager-visible post back to this ad; GET /v1/ads/{adId}/comments resolves comments against it. | [optional]
**effective_instagram_media_id** | **string** | Meta &#x60;effective_instagram_media_id&#x60; — the Instagram media ID of the boosted post the ad&#39;s engagement lives on. Pass to GET /v1/ads?effectiveInstagramMediaId&#x3D; to map a Business-Manager-visible IG post back to this ad. | [optional]
**instagram_user_id** | **string** | Meta &#x60;instagram_user_id&#x60; — the Instagram-scoped business ID that owns the boosted media. | [optional]
**instagram_permalink_url** | **string** | Meta &#x60;instagram_permalink_url&#x60; — public Instagram post URL of the boosted media. | [optional]
**media_urls** | **string[]** | All media URLs for this ad (carousel images, multiple assets). Populated for Meta (carousel child_attachments), Google Ads (responsive display marketing_images), and LinkedIn (multi-image posts). | [optional]
**body** | **string** | Ad copy/text | [optional]
**google_headline** | **string** | Google Ads headline | [optional]
**google_description** | **string** | Google Ads description | [optional]
**link_url** | **string** | Destination URL | [optional]
**pinterest_image_url** | **string** |  | [optional]
**pinterest_title** | **string** |  | [optional]
**pinterest_description** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
