# # GetCommentAutomation200ResponseLogsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**comment_id** | **string** |  | [optional]
**commenter_id** | **string** |  | [optional]
**commenter_name** | **string** |  | [optional]
**comment_text** | **string** |  | [optional]
**status** | **string** | DM outcome | [optional]
**error** | **string** | DM error message if status is failed | [optional]
**comment_reply_status** | **string** | Outcome of the optional public reply on the triggering comment. &#39;skipped&#39; if no commentReply was configured or if the DM failed (the public reply is not attempted in that case). | [optional]
**comment_reply_error** | **string** | Public-reply error message if commentReplyStatus is failed | [optional]
**created_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
