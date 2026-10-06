# # CommentAutomationLog

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**comment_id** | **string** |  | [optional]
**commenter_id** | **string** |  | [optional]
**commenter_name** | **string** |  | [optional]
**commenter_username** | **string** |  | [optional]
**comment_text** | **string** |  | [optional]
**source** | **string** | Which door triggered this send. Null on rows written before this field existed (all of those are comment-triggered). | [optional]
**status** | **string** | DM outcome. &#39;pending&#39; &#x3D; the automation has a dmDelaySeconds and the response is queued but not sent yet. &#39;gated&#39; &#x3D; the follow-gate confirmation DM went out and we are waiting for the tap; it flips to &#39;sent&#39; or &#39;skipped&#39; when they tap. &#39;skipped&#39; also covers repeatPolicy, cooldown and dedupeSameTextHours suppressions, with the reason in error. | [optional]
**audience_outcome** | **string** | How the audience rule resolved. Null on automations without one. | [optional]
**gate_button_status** | **string** | Whether the follow-gate button reached the commenter: &#39;rejected&#39; &#x3D; Meta refused the gate DM, &#39;omitted&#39; &#x3D; the prompt went out as plain text because it was over 640 characters. Null when no gate DM was sent. | [optional]
**commenter_is_follower** | **bool** | Follow relationship at decision time. Null when Instagram would not tell us (the commenter never messaged the account). | [optional]
**commenter_follower_count** | **int** |  | [optional]
**gate_resolved_at** | **\DateTime** | When the follow-gate tap was claimed. | [optional]
**error** | **string** | DM error message when status is failed, or the reason when it is skipped. | [optional]
**platform_error** | [**\Zernio\Model\CommentAutomationLogPlatformError**](CommentAutomationLogPlatformError.md) |  | [optional]
**private_reply_consumed** | **bool** | True when the failed send spent the comment&#39;s single private reply (Instagram subcode 1545133 or 2534023, or Meta code 10900 on Instagram and Facebook), the same rule as &#x60;details.privateReplyConsumed&#x60; on the private-reply endpoint. Null on direct DMs and on rows written before this field existed. | [optional]
**comment_reply_status** | **string** | Outcome of the optional public reply on the triggering comment. With publicReplyPolicy after_dm, &#39;skipped&#39; if no commentReply was configured or if the DM failed (the public reply is not attempted in that case). | [optional]
**comment_reply_error** | **string** | Public-reply error message if commentReplyStatus is failed | [optional]
**public_reply_posted_at** | **\DateTime** | When the public reply was posted. Null when it was not. | [optional]
**like_skipped** | **string** | Why actions.likeComment did not like the comment. Null when it did or was not configured. | [optional]
**hide_skipped** | **string** | Why actions.hideComment did not hide the comment. Null when it did or was not configured. | [optional]
**media_error** | **string** | Why the dmMedia follow-up was not delivered. The DM itself still counts as sent. | [optional]
**next_due_at** | **\DateTime** | When the next queued send fires. Present only while something is still pending. | [optional]
**clicked_at** | **\DateTime** | This recipient&#39;s first click on a tracked link (what uniqueClicks counts). | [optional]
**click_count** | **int** | This recipient&#39;s total clicks on tracked links. | [optional]
**created_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
