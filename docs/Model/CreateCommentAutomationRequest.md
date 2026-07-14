# # CreateCommentAutomationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** |  |
**account_id** | **string** | Instagram or Facebook account ID |
**trigger** | **string** | What fires the automation. &#39;comment&#39; (keyword comment on a post) or &#39;story_reply&#39; (keyword reply to an Instagram story). For &#39;story_reply&#39;, platformPostId is the story media id (omit for any story). | [optional] [default to 'comment']
**platform_post_id** | **string** | Platform media/post ID (or story media id when trigger&#x3D;story_reply). Omit for an account-wide (any-post / any-story) automation. | [optional]
**post_id** | **string** | Zernio post ID. Required only when also targeting a specific post via platformPostId. | [optional]
**post_title** | **string** | Post content snippet for display | [optional]
**name** | **string** | Automation label |
**keywords** | **string[]** | Trigger keywords (empty &#x3D; any comment triggers) | [optional]
**match_mode** | **string** |  | [optional] [default to 'contains']
**dm_message** | **string** | DM text to send to commenter. Max 640 chars when buttons are set, otherwise ~1000. |
**buttons** | [**\Zernio\Model\DmButton[]**](DmButton.md) | Optional inline DM buttons (1-3). Phone buttons are Facebook-only. Omit or pass [] for a plain-text DM. | [optional]
**comment_reply** | **string** | Optional public reply to the comment | [optional]
**dm_message_variations** | **string[]** | Optional alternate DM texts for random rotation. When set, each triggered comment sends one picked at random from [dmMessage, ...dmMessageVariations], so repeat commenters get slightly different DMs (helps avoid identical-message patterns). Up to 5. Buttons are attached to whichever text is picked, not varied. | [optional]
**comment_reply_variations** | **string[]** | Optional alternate public replies, rotated at random alongside commentReply (picked independently of the DM). Up to 5. | [optional]
**link_tracking** | **bool** | Wrap link buttons in the DM in a tracked redirect so clicks are counted (Link Clicks / CTR). Pass false to send links exactly as written. Defaults to on. | [optional] [default to true]
**click_tag** | **string** | Optional tag applied to a contact when they click a tracked link (requires linkTracking). Lets you segment clickers for broadcasts/sequences. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
