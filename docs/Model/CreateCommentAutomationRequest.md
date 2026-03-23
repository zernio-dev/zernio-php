# # CreateCommentAutomationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** |  |
**account_id** | **string** | Instagram or Facebook account ID |
**platform_post_id** | **string** | Platform media/post ID |
**post_id** | **string** | Zernio post ID (optional) | [optional]
**post_title** | **string** | Post content snippet for display | [optional]
**name** | **string** | Automation label |
**keywords** | **string[]** | Trigger keywords (empty &#x3D; any comment triggers) | [optional]
**match_mode** | **string** |  | [optional] [default to 'contains']
**dm_message** | **string** | DM text to send to commenter |
**comment_reply** | **string** | Optional public reply to the comment | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
