# # UpdateCommentAutomationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**keywords** | **string[]** |  | [optional]
**match_mode** | **string** |  | [optional]
**dm_message** | **string** |  | [optional]
**buttons** | [**\Zernio\Model\DmButton[]**](DmButton.md) | Inline DM buttons (1-3). Pass [] to clear all buttons. | [optional]
**comment_reply** | **string** |  | [optional]
**link_tracking** | **bool** | Wrap link buttons in a tracked redirect to count clicks. Pass false to send links untouched. | [optional]
**click_tag** | **string** | Tag applied to a contact when they click a tracked link (requires linkTracking). Empty string clears it. | [optional]
**is_active** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
