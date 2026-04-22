# # GetInboxPostComments200ResponseCommentsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**message** | **string** |  | [optional]
**created_time** | **\DateTime** |  | [optional]
**from** | [**\Zernio\Model\GetInboxPostComments200ResponseCommentsInnerFrom**](GetInboxPostComments200ResponseCommentsInnerFrom.md) |  | [optional]
**like_count** | **int** |  | [optional]
**reply_count** | **int** |  | [optional]
**platform** | **string** | The platform this comment is from | [optional]
**url** | **string** | Direct link to the comment on the platform (if available) | [optional]
**replies** | **object[]** |  | [optional]
**can_reply** | **bool** |  | [optional]
**can_delete** | **bool** |  | [optional]
**can_hide** | **bool** | Whether this comment can be hidden (Facebook | [optional]
**can_like** | **bool** | Whether this comment can be liked (Facebook | [optional]
**is_hidden** | **bool** | Whether the comment is currently hidden | [optional]
**is_liked** | **bool** | Whether the current user has liked this comment | [optional]
**like_uri** | **string** | Bluesky like URI for unliking | [optional]
**cid** | **string** | Bluesky content identifier | [optional]
**parent_id** | **string** | Parent comment ID for nested replies | [optional]
**root_uri** | **string** | Bluesky root post URI | [optional]
**root_cid** | **string** | Bluesky root post CID | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
