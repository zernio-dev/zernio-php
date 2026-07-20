# # ReplyToInboxPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  |
**message** | **string** |  |
**attachment_url** | **string** | (Facebook only) URL of an image to attach, publishing a photo comment alongside the text. The URL must be publicly accessible so Meta can fetch it. Returns 400 for other platforms. | [optional]
**comment_id** | **string** | Reply to specific comment (optional) | [optional]
**parent_cid** | **string** | (Bluesky only) Parent content identifier | [optional]
**root_uri** | **string** | (Bluesky only) Root post URI | [optional]
**root_cid** | **string** | (Bluesky only) Root post CID | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
