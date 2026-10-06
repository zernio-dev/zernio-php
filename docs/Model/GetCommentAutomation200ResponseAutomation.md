# # GetCommentAutomation200ResponseAutomation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**trigger** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**platform_post_id** | **string** |  | [optional]
**post_id** | **string** |  | [optional]
**post_title** | **string** |  | [optional]
**keywords** | **string[]** |  | [optional]
**match_mode** | **string** | How a keyword is compared with the comment. &#39;contains&#39; (default) matches anywhere, even inside another word (keyword &#39;app&#39; fires on &#39;happy&#39;). &#39;word&#39; matches the keyword only as a standalone word. &#39;exact&#39; requires the whole comment to be exactly the keyword. | [optional]
**exclude_keywords** | **string[]** | Comments containing one of these never trigger the automation, even when a trigger keyword also matches. Compared using the same matchMode. | [optional]
**typo_tolerance** | **bool** | Only with matchMode&#x3D;word: also fire on close misspellings of a keyword (one edit for 4-7 character keywords, two from 8 up). Keywords shorter than 4 characters are never fuzzy-matched. | [optional]
**dm_message** | **string** | Omitted on reply-only platforms (tiktok, threads, linkedin, youtube), together with every other DM-leg field. | [optional]
**buttons** | [**\Zernio\Model\DmButton[]**](DmButton.md) | Inline DM buttons (up to 3). Omitted when none are set. | [optional]
**template** | [**\Zernio\Model\CommentAutomationTemplate**](CommentAutomationTemplate.md) |  | [optional]
**comment_reply** | **string** |  | [optional]
**dm_message_variations** | **string[]** | Alternate DM texts rotated at random with dmMessage. Omitted when none. | [optional]
**comment_reply_variations** | **string[]** | Alternate public replies rotated at random with commentReply. Omitted when none. | [optional]
**link_tracking** | **bool** |  | [optional]
**click_tag** | **string** |  | [optional]
**dm_delay_seconds** | **int** | Seconds waited after the trigger before the DM is sent. Absent when the DM goes out immediately. | [optional]
**comment_reply_delay_seconds** | **int** | Seconds waited before the public reply is posted. Absent when it follows the DM immediately. | [optional]
**audience** | [**\Zernio\Model\CommentAutomationAudience**](CommentAutomationAudience.md) |  | [optional]
**follow_gate** | [**\Zernio\Model\CommentAutomationFollowGate**](CommentAutomationFollowGate.md) |  | [optional]
**also_match_in_dms** | **bool** | Whether these keywords also fire on a plain inbound DM. | [optional]
**repeat_policy** | [**\Zernio\Model\CommentAutomationRepeatPolicy**](CommentAutomationRepeatPolicy.md) |  | [optional]
**dedupe_same_text_hours** | **int** | Same-text dedupe window in hours. Omitted when off. | [optional]
**public_reply_policy** | **string** |  | [optional]
**actions** | [**\Zernio\Model\CommentAutomationActions**](CommentAutomationActions.md) |  | [optional]
**quick_replies** | [**\Zernio\Model\CommentAutomationQuickReply[]**](CommentAutomationQuickReply.md) |  | [optional]
**dm_media** | [**\Zernio\Model\CommentAutomationDmMedia**](CommentAutomationDmMedia.md) |  | [optional]
**is_active** | **bool** |  | [optional]
**stats** | [**\Zernio\Model\CommentAutomationStats**](CommentAutomationStats.md) |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
