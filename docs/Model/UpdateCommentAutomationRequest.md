# # UpdateCommentAutomationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**trigger** | **string** | What fires the automation. Changing it detaches the automation from its bound post or story (a post id and a story id are different objects), unless this same request sets a new binding. Every trigger but &#39;comment&#39; is Instagram only; &#39;story_mention&#39; also requires no keywords and no binding. | [optional]
**keywords** | **string[]** |  | [optional]
**match_mode** | **string** | How a keyword is compared with the comment. &#39;contains&#39; (default) matches anywhere, even inside another word (keyword &#39;app&#39; fires on &#39;happy&#39;). &#39;word&#39; matches the keyword only as a standalone word. &#39;exact&#39; requires the whole comment to be exactly the keyword. | [optional]
**exclude_keywords** | **string[]** | Comments containing one of these never trigger the automation, even when a trigger keyword also matches. Compared using the same matchMode. | [optional]
**typo_tolerance** | **bool** | Only with matchMode&#x3D;word: also fire on close misspellings of a keyword (one edit for 4-7 character keywords, two from 8 up). Keywords shorter than 4 characters are never fuzzy-matched. | [optional]
**dm_message** | **string** |  | [optional]
**buttons** | [**\Zernio\Model\DmButton[]**](DmButton.md) | Inline DM buttons (1-3). Pass [] to clear all buttons. | [optional]
**template** | [**\Zernio\Model\CommentAutomationTemplate**](CommentAutomationTemplate.md) |  | [optional]
**comment_reply** | **string** |  | [optional]
**dm_message_variations** | **string[]** | Alternate DM texts for random rotation (see create). Pass [] to clear. | [optional]
**comment_reply_variations** | **string[]** | Alternate public replies for random rotation. Pass [] to clear. | [optional]
**link_tracking** | **bool** | Wrap link buttons in a tracked redirect to count clicks. Pass false to send links untouched. | [optional]
**click_tag** | **string** | Tag applied to a contact when they click a tracked link (requires linkTracking). Empty string clears it. | [optional]
**also_match_in_dms** | **bool** | Also fire these keywords on a plain inbound DM. Enabling it requires the automation to end up with at least one keyword (this request&#39;s keywords if you send them, otherwise the stored ones) and is rejected on story_reply automations. | [optional]
**dm_delay_seconds** | **int** | Seconds to wait after the trigger before sending the DM. Send 0 to clear the delay and reply immediately. | [optional]
**comment_reply_delay_seconds** | **int** | Seconds to wait before posting the public comment reply. Send 0 to clear it. The reply never goes out before the DM. | [optional]
**audience** | [**\Zernio\Model\CommentAutomationAudience**](CommentAutomationAudience.md) |  | [optional]
**follow_gate** | [**\Zernio\Model\CommentAutomationFollowGate**](CommentAutomationFollowGate.md) |  | [optional]
**is_active** | **bool** |  | [optional]
**repeat_policy** | [**\Zernio\Model\CommentAutomationRepeatPolicy**](CommentAutomationRepeatPolicy.md) |  | [optional]
**dedupe_same_text_hours** | **int** | Skip the DM when this recipient already received identical DM text (after personalisation) from this account, from any automation, within this many hours. The skip is logged with status skipped. Send null to clear. | [optional]
**public_reply_policy** | **string** | &#39;after_dm&#39; posts commentReply only after a successful DM. &#39;always&#39; posts it whatever the audience rule, dedupe or DM outcome: the moment a comment matches, or after commentReplyDelaySeconds when set (raised to dmDelaySeconds, so it never precedes the DM attempt). | [optional]
**actions** | [**\Zernio\Model\CommentAutomationActions**](CommentAutomationActions.md) |  | [optional]
**quick_replies** | [**\Zernio\Model\CommentAutomationQuickReply[]**](CommentAutomationQuickReply.md) | Opt-in quick-reply chips on the DM (up to 13). Chips do not render in Message Requests, where a first DM to a cold commenter lands, so prefer buttons for first contact. Mutually exclusive with buttons and template (400). Send null to clear. | [optional]
**dm_media** | [**\Zernio\Model\CommentAutomationDmMedia**](CommentAutomationDmMedia.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
