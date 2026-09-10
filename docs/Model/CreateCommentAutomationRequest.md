# # CreateCommentAutomationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** |  |
**account_id** | **string** | Instagram or Facebook account ID |
**trigger** | **string** | What fires the automation. &#39;comment&#39; (keyword comment on a post) or &#39;story_reply&#39; (keyword reply to an Instagram story). For &#39;story_reply&#39;, platformPostId is the story media id (omit for any story). | [optional] [default to 'comment']
**platform_post_id** | **string** | Platform media/post ID (or story media id when trigger&#x3D;story_reply). Omit for an account-wide (any-post / any-story) automation. | [optional]
**post_id** | **string** | Zernio post ID (24 hexadecimal characters); platform IDs return 400. Optional and never required. Use it INSTEAD of platformPostId to bind a per-post automation to a not-yet-published Zernio post: the automation stays pending and arms itself when that post publishes. For a post already live on the platform, pass platformPostId alone and omit this. | [optional]
**post_title** | **string** | Post content snippet for display | [optional]
**name** | **string** | Automation label |
**keywords** | **string[]** | Trigger keywords (empty &#x3D; any comment triggers) | [optional]
**match_mode** | **string** | How a keyword is compared with the comment. &#39;contains&#39; (default) matches anywhere, even inside another word (keyword &#39;app&#39; fires on &#39;happy&#39;). &#39;word&#39; matches the keyword only as a standalone word. &#39;exact&#39; requires the whole comment to be exactly the keyword. | [optional] [default to 'contains']
**exclude_keywords** | **string[]** | Comments containing one of these never trigger the automation, even when a trigger keyword also matches. Compared using the same matchMode. | [optional]
**typo_tolerance** | **bool** | Only with matchMode&#x3D;word: also fire on close misspellings of a keyword (one edit for 4-7 character keywords, two from 8 up). Keywords shorter than 4 characters are never fuzzy-matched. | [optional]
**dm_message** | **string** | DM text to send to commenter. Max 640 chars when buttons are set, otherwise ~1000. |
**buttons** | [**\Zernio\Model\DmButton[]**](DmButton.md) | Optional inline DM buttons (1-3). Phone buttons are Facebook-only. Omit or pass [] for a plain-text DM. | [optional]
**template** | [**\ZernioModelCommentAutomationTemplate**](\ZernioModelCommentAutomationTemplate.md) | Optional product card sent INSTEAD of the plain dmMessage bubble. Mutually exclusive with buttons. dmMessage stays required: it is what gets sent the moment the card is cleared. | [optional]
**comment_reply** | **string** | Optional public reply to the comment | [optional]
**dm_message_variations** | **string[]** | Optional alternate DM texts for random rotation. When set, each triggered comment sends one picked at random from [dmMessage, ...dmMessageVariations], so repeat commenters get slightly different DMs (helps avoid identical-message patterns). Up to 5. Buttons are attached to whichever text is picked, not varied. | [optional]
**comment_reply_variations** | **string[]** | Optional alternate public replies, rotated at random alongside commentReply (picked independently of the DM). Up to 5. | [optional]
**link_tracking** | **bool** | Wrap link buttons in the DM in a tracked redirect so clicks are counted (Link Clicks / CTR). Pass false to send links exactly as written. Defaults to on. | [optional] [default to true]
**click_tag** | **string** | Optional tag applied to a contact when they click a tracked link (requires linkTracking). Lets you segment clickers for broadcasts/sequences. | [optional]
**dm_delay_seconds** | **int** | Seconds to wait after the trigger before sending the DM. Omit or send 0 to reply immediately (the default). Max 86400 (24h). The trigger is still matched and deduplicated the moment the comment arrives, so a delay only moves when the response is sent. | [optional]
**comment_reply_delay_seconds** | **int** | Seconds to wait before posting the public comment reply. Omit or send 0 to post it right after the DM (the default). The reply never goes out before the DM, so a value below dmDelaySeconds is raised to it. Ignored when trigger&#x3D;story_reply, which has no public reply. | [optional]
**also_match_in_dms** | **bool** | Also fire these keywords on a plain inbound DM, so the automation answers people who message the keyword instead of commenting it. Requires at least one keyword (an empty keyword list means &#39;match anything&#39;, which would answer every inbound message) and is rejected on story_reply automations, which already trigger on DMs. Dedup is per door: a contact who already received the DM from their comment can still receive it from a DM. | [optional] [default to false]
**audience** | [**\Zernio\Model\CommentAutomationAudience**](CommentAutomationAudience.md) |  | [optional]
**follow_gate** | [**\Zernio\Model\CommentAutomationFollowGate**](CommentAutomationFollowGate.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
