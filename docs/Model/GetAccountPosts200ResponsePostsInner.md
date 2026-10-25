# # GetAccountPosts200ResponsePostsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The platform&#39;s own post id (the video ID on YouTube) | [optional]
**platform** | **string** |  | [optional]
**message** | **string** | Caption or title, empty string when the post has no text | [optional]
**created_time** | **\DateTime** |  | [optional]
**permalink** | **string** | Public URL of the post on the platform | [optional]
**picture** | **string** | Thumbnail or media URL | [optional]
**media_type** | **string** |  | [optional]
**comment_count** | **int** |  | [optional]
**like_count** | **int** |  | [optional]
**reaction_count** | **int** | Facebook and LinkedIn only | [optional]
**share_count** | **int** |  | [optional]
**cid** | **string** | Bluesky content id, required to reply to the post | [optional]
**subreddit** | **string** | Reddit only | [optional]
**title** | **string** | Pinterest only: native Pin title | [optional]
**description** | **string** | Pinterest only: full native Pin description (Pinterest caps it at 800 characters) | [optional]
**link** | **string** | Pinterest only: destination URL of the Pin, not the Pin page (see permalink) | [optional]
**board_id** | **string** | Pinterest only: id of the board holding the Pin | [optional]
**board_owner_username** | **string** | Pinterest only: username of the board owner | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
