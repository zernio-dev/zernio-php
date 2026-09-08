# # AdCreative

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**thumbnail_url** | **string** | Primary thumbnail/image URL | [optional]
**image_url** | **string** | Alternative image URL | [optional]
**video_id** | **string** | Meta video ID for VIDEO-type ads. Null for non-video ads. Callers that need an embeddable MP4 can call GET /{videoId}?fields&#x3D;source with the page access token. | [optional]
**video_url** | **string** | Public Facebook watch URL for VIDEO-type ads (https://www.facebook.com/watch/?v&#x3D;{videoId}). Null for non-video ads. | [optional]
**creative_id** | **string** | Meta ad creative id backing this ad. Reusable via existingCreativeId on POST /v1/ads/create. | [optional]
**object_type** | **string** | Meta creative object_type (e.g. SHARE, VIDEO, PRIVACY_CHECK_FAIL, POST_DELETED). Use this to render state-aware previews: when Meta moderation strips image/video fields, only thumbnailUrl at 64x64 is available. | [optional]
**object_story_id** | **string** | Meta creative &#x60;object_story_id&#x60; (the SHARE reference). Frequently absent, because Meta omits it for SHARE creatives. Use effectiveObjectStoryId instead. | [optional]
**effective_object_story_id** | **string** | Meta &#x60;effective_object_story_id&#x60;, the &#x60;{pageId}_{postId}&#x60; of the Facebook post the ad&#39;s engagement (comments) lives on. Pass to GET /v1/ads?effectiveObjectStoryId&#x3D; to map a Business-Manager-visible post back to this ad; GET /v1/ads/{adId}/comments resolves comments against it. | [optional]
**page_id** | **string** | Facebook Page backing the creative (Meta only). What the &#x60;pageId&#x60; filter on /v1/ads, /v1/ads/campaigns and /v1/ads/tree matches against. Absent for non-Meta ads and rare Meta creatives with no page signal. | [optional]
**effective_instagram_media_id** | **string** | Meta &#x60;effective_instagram_media_id&#x60;, the Instagram media ID of the boosted post the ad&#39;s engagement lives on. Pass to GET /v1/ads?effectiveInstagramMediaId&#x3D; to map a Business-Manager-visible IG post back to this ad. | [optional]
**instagram_user_id** | **string** | Meta &#x60;instagram_user_id&#x60;, the Instagram-scoped business ID that owns the boosted media. | [optional]
**instagram_permalink_url** | **string** | Meta &#x60;instagram_permalink_url&#x60;, the public Instagram post URL of the boosted media. | [optional]
**media_urls** | **string[]** | All media URLs for this ad (carousel images, multiple assets). Populated for Meta (carousel child_attachments), Google Ads (responsive display marketing_images), and LinkedIn (multi-image posts). | [optional]
**is_serving** | **bool** | LinkedIn only. Whether LinkedIn is currently serving this specific creative. Complements the ad-level &#x60;servingStatuses&#x60;, which describes the parent campaign. | [optional]
**serving_hold_reasons** | **string[]** | LinkedIn only. Why this specific creative is not being served. Empty when it is serving. A superset of the ad-level &#x60;servingStatuses&#x60;: it repeats the inherited campaign, campaign group and account holds AND adds creative-only causes such as UNDER_REVIEW, REJECTED, PROCESSING, PROCESSING_FAILED, FORM_HOLD (lead-gen-form creatives), REFERRED_CONTENT_QUALITY_HOLD, JOB_POSTING_ON_HOLD and JOB_POSTING_INVALID (job ads). Some values are format-specific and will never appear on other ad formats. The list is open, so treat unrecognized values as holds rather than errors. | [optional]
**body** | **string** | Ad copy/text | [optional]
**google_headline** | **string** | Google Ads headline | [optional]
**google_description** | **string** | Google Ads description | [optional]
**link_url** | **string** | Destination URL | [optional]
**pinterest_image_url** | **string** |  | [optional]
**pinterest_title** | **string** |  | [optional]
**pinterest_description** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
