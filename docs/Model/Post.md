# # Post

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** |  | [optional]
**user_id** | [**\Zernio\Model\PostUserId**](PostUserId.md) |  | [optional]
**title** | **string** | Stored on the post for reference/display only. This field is NOT used as the video title when publishing. To set a YouTube video title, use platformSpecificData.title on the youtube platform target (falls back to the first line of content when omitted). | [optional]
**content** | **string** |  | [optional]
**media_items** | [**\Zernio\Model\MediaItem[]**](MediaItem.md) |  | [optional]
**platforms** | [**\Zernio\Model\PlatformTarget[]**](PlatformTarget.md) |  | [optional]
**scheduled_for** | **\DateTime** |  | [optional]
**timezone** | **string** |  | [optional]
**status** | **string** | &#x60;cancelled&#x60; is set by DELETE /v1/posts/{postId}/unpublish once every platform entry has been removed from its platform (a post with published entries left becomes &#x60;partial&#x60;); cancelled posts can be edited and rescheduled like drafts. | [optional]
**tags** | **string[]** | YouTube constraints: each tag max 100 chars, combined max 500 chars, duplicates removed. | [optional]
**hashtags** | **string[]** | Stored for reference only. Hashtags are NOT automatically appended to the caption when publishing. Include hashtags directly in the content field (platforms like Instagram only support hashtags as caption text). For YouTube keywords, use the tags field instead. | [optional]
**mentions** | **string[]** | Stored for reference only. This field does NOT automatically create @mentions when publishing. For LinkedIn @mentions, use the /v1/accounts/{accountId}/linkedin-mentions endpoint to resolve profile URLs to URNs, then embed the returned mentionFormat directly in the post content field. | [optional]
**visibility** | **string** |  | [optional]
**metadata** | **array<string,mixed>** |  | [optional]
**recycling** | [**\Zernio\Model\RecyclingState**](RecyclingState.md) |  | [optional]
**recycled_from_post_id** | **string** | ID of the original post if this post was created via recycling | [optional]
**queued_from_profile** | **string** | Profile ID if the post was scheduled via the queue | [optional]
**queue_id** | **string** | Queue ID if the post was scheduled via a specific queue | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
