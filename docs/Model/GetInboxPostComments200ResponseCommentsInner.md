# # GetInboxPostComments200ResponseCommentsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**message** | **string** |  | [optional]
**created_time** | **\DateTime** |  | [optional]
**from** | [**\Zernio\Model\GetInboxPostComments200ResponseCommentsInnerFrom**](GetInboxPostComments200ResponseCommentsInnerFrom.md) |  | [optional]
**like_count** | **int** |  | [optional]
**reply_count** | **int** | The platform&#39;s own reply count, which includes hidden and deleted replies. Can exceed replies[].length even when repliesHasMore is false or absent. | [optional]
**platform** | **string** | The platform this comment is from | [optional]
**url** | **string** | Direct link to the comment on the platform (if available) | [optional]
**replies** | **object[]** |  | [optional]
**replies_has_more** | **bool** | Facebook only. True when replies[] (capped at 10) does not hold the comment&#39;s full reply thread; fetch the rest by passing the comment id as postId to GET /v1/inbox/comments/{postId}. Absent (not false) on every other platform, including Instagram, which has no equivalent signal. | [optional]
**can_reply** | **bool** |  | [optional]
**can_delete** | **bool** |  | [optional]
**can_hide** | **bool** | Whether this comment can be hidden (Facebook, Instagram, Threads) | [optional]
**can_like** | **bool** | Whether this comment can be liked (Facebook, X, Bluesky, Reddit) | [optional]
**is_hidden** | **bool** | Whether the comment is currently hidden | [optional]
**is_liked** | **bool** | Whether the current user has liked this comment | [optional]
**like_uri** | **string** | Bluesky like URI for unliking | [optional]
**cid** | **string** | Bluesky content identifier | [optional]
**parent_id** | **string** | ID of the parent comment. Present on entries inside replies[] for Facebook, Instagram and X. On X it is also present on top-level entries, where it holds the ID of the post replied to. Omitted entirely (key absent, not null) on top-level Facebook and Instagram entries and on every other platform, which express the parent relationship only through replies[] nesting. | [optional]
**root_uri** | **string** | Bluesky root post URI | [optional]
**root_cid** | **string** | Bluesky root post CID | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
