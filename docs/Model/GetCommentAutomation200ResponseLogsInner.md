# # GetCommentAutomation200ResponseLogsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**comment_id** | **string** |  | [optional]
**commenter_id** | **string** |  | [optional]
**commenter_name** | **string** |  | [optional]
**comment_text** | **string** |  | [optional]
**source** | **string** | Which door triggered this send. Absent on rows written before this field existed (all of those are comment-triggered). | [optional]
**status** | **string** | DM outcome. &#39;pending&#39; &#x3D; the automation has a dmDelaySeconds and the response is queued but not sent yet. &#39;gated&#39; &#x3D; the follow-gate confirmation DM went out and we are waiting for the tap; it flips to &#39;sent&#39; or &#39;skipped&#39; when they tap. | [optional]
**audience_outcome** | **string** | How the audience rule resolved. Absent on automations without one. | [optional]
**commenter_is_follower** | **bool** | Follow relationship at decision time. Absent when Instagram would not tell us (the commenter never messaged the account). | [optional]
**commenter_follower_count** | **int** |  | [optional]
**error** | **string** | DM error message if status is failed | [optional]
**platform_error** | [**\Zernio\Model\GetCommentAutomation200ResponseLogsInnerPlatformError**](GetCommentAutomation200ResponseLogsInnerPlatformError.md) |  | [optional]
**private_reply_consumed** | **bool** | True when the failed send spent the comment&#39;s single private reply (Instagram subcode 1545133 or 2534023, or Meta code 10900 on Instagram and Facebook), the same rule as &#x60;details.privateReplyConsumed&#x60; on the private-reply endpoint. Absent on direct DMs and on rows written before this field existed. | [optional]
**comment_reply_status** | **string** | Outcome of the optional public reply on the triggering comment. &#39;skipped&#39; if no commentReply was configured or if the DM failed (the public reply is not attempted in that case). | [optional]
**comment_reply_error** | **string** | Public-reply error message if commentReplyStatus is failed | [optional]
**next_due_at** | **\DateTime** | When the next queued send fires. Present only while something is still pending. | [optional]
**created_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
