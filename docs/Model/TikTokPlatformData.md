# # TikTokPlatformData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**draft** | **bool** | When true, sends the post to the TikTok Creator Inbox as a draft instead of publishing immediately. The creator receives an inbox notification to complete posting via TikTok&#39;s editing flow. Maps to TikTok API post_mode: \&quot;MEDIA_UPLOAD\&quot; (photos) or the dedicated inbox endpoint (videos). When false or omitted, publishes directly via post_mode: \&quot;DIRECT_POST\&quot;. Note: publish_type is not a supported field. Use this field instead. | [optional]
**privacy_level** | **string** | One of the values returned by the TikTok creator info API for the account | [optional]
**allow_comment** | **bool** | Allow comments on the post | [optional]
**allow_duet** | **bool** | Allow duets (required for video posts) | [optional]
**allow_stitch** | **bool** | Allow stitches (required for video posts) | [optional]
**commercial_content_type** | **string** | Type of commercial content disclosure | [optional]
**brand_partner_promote** | **bool** | Whether the post promotes a brand partner | [optional]
**is_brand_organic_post** | **bool** | Whether the post is a brand organic post | [optional]
**content_preview_confirmed** | **bool** | User has confirmed they previewed the content | [optional]
**express_consent_given** | **bool** | User has given express consent for posting | [optional]
**media_type** | **string** | Optional override. Defaults based on provided media items. | [optional]
**video_cover_timestamp_ms** | **int** | Optional for video posts. Timestamp in milliseconds to select which frame to use as thumbnail (defaults to 1000ms/1 second). Ignored when videoCoverImageUrl is provided. | [optional]
**video_cover_image_url** | **string** | Optional for video posts. URL of a custom thumbnail image (JPG, PNG, or WebP, max 20MB). The image is stitched as a single frame at the start of the video and used as the cover. Overrides videoCoverTimestampMs when provided. | [optional]
**photo_cover_index** | **int** | Optional for photo carousels. Index of image to use as cover, 0-based (defaults to 0/first image). | [optional]
**auto_add_music** | **bool** | When true, TikTok may add recommended music (photos only) | [optional]
**video_made_with_ai** | **bool** | Set true to disclose AI-generated content | [optional]
**description** | **string** | Optional long-form description for photo posts (max 4000 chars). Recommended when content exceeds 90 chars, as photo titles are auto-truncated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
