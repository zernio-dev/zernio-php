# # InstagramPlatformData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**content_type** | **string** | Set to &#39;story&#39; to publish as a Story. Default posts become Reels or feed depending on media. | [optional]
**share_to_feed** | **bool** | For Reels only. When true (default), the Reel appears on both the Reels tab and your main profile feed. Set to false to post to the Reels tab only. | [optional] [default to true]
**collaborators** | **string[]** | Up to 3 Instagram usernames to invite as collaborators (feed/Reels only) | [optional]
**first_comment** | **string** | Optional first comment to add after the post is created (not applied to Stories) | [optional]
**trial_params** | [**\Late\Model\InstagramPlatformDataTrialParams**](InstagramPlatformDataTrialParams.md) |  | [optional]
**user_tags** | [**\Late\Model\InstagramPlatformDataUserTagsInner[]**](InstagramPlatformDataUserTagsInner.md) | Tag Instagram users in photos by username and position coordinates. Not supported for stories or videos. For carousel posts, use the optional &#x60;mediaIndex&#x60; field to specify which slide each tag applies to. Tags without &#x60;mediaIndex&#x60; default to the first image (index 0) for backwards compatibility. Tags targeting video items are silently skipped (Instagram only supports tagging on images). | [optional]
**audio_name** | **string** | Custom name for the original audio in Reels. Replaces the default \&quot;Original Audio\&quot; label. Only applies to Reels (video posts). Can only be set once - either during creation or later from the Instagram audio page in the app. | [optional]
**thumb_offset** | **int** | Millisecond offset from the start of the video to use as the Reel thumbnail. Only applies to Reels (video posts). If a custom thumbnail URL (instagramThumbnail in mediaItems) is provided, it takes priority and this offset is ignored. Defaults to 0 (first frame). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
