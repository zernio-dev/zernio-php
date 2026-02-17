# # InstagramPlatformData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**content_type** | **string** | Set to &#39;story&#39; to publish as a Story. Default posts become Reels or feed depending on media. | [optional]
**share_to_feed** | **bool** | For Reels only. When true (default), the Reel appears on both the Reels tab and your main profile feed. Set to false to post to the Reels tab only. | [optional] [default to true]
**collaborators** | **string[]** | Up to 3 Instagram usernames to invite as collaborators (feed/Reels only) | [optional]
**first_comment** | **string** | Optional first comment to add after the post is created (not applied to Stories) | [optional]
**trial_params** | [**\Late\Model\InstagramPlatformDataTrialParams**](InstagramPlatformDataTrialParams.md) |  | [optional]
**user_tags** | [**\Late\Model\InstagramPlatformDataUserTagsInner[]**](InstagramPlatformDataUserTagsInner.md) | Tag Instagram users in photos by username and position. Not supported for stories or videos. For carousels, use mediaIndex to target specific slides (defaults to 0). Tags on video items are silently skipped. | [optional]
**audio_name** | **string** | Custom name for original audio in Reels. Replaces the default \&quot;Original Audio\&quot; label. Can only be set once. | [optional]
**thumb_offset** | **int** | Millisecond offset from video start for the Reel thumbnail. Ignored if a custom thumbnail URL is provided. Defaults to 0. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
