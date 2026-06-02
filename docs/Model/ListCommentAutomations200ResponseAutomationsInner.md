# # ListCommentAutomations200ResponseAutomationsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**platform_post_id** | **string** |  | [optional]
**post_title** | **string** |  | [optional]
**keywords** | **string[]** |  | [optional]
**match_mode** | **string** |  | [optional]
**dm_message** | **string** |  | [optional]
**buttons** | [**\Zernio\Model\DmButton[]**](DmButton.md) | Inline DM buttons (up to 3). Omitted when none are set. | [optional]
**comment_reply** | **string** |  | [optional]
**link_tracking** | **bool** | Whether link buttons in the DM are wrapped in a tracked redirect to count clicks. | [optional]
**click_tag** | **string** | Tag applied to a contact when they click a tracked link. | [optional]
**is_active** | **bool** |  | [optional]
**stats** | [**\Zernio\Model\ListCommentAutomations200ResponseAutomationsInnerStats**](ListCommentAutomations200ResponseAutomationsInnerStats.md) |  | [optional]
**created_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
