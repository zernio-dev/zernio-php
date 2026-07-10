# # SearchInboxConversations200ResponseDataInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**conversation** | [**\Zernio\Model\SearchInboxConversations200ResponseDataInnerConversation**](SearchInboxConversations200ResponseDataInnerConversation.md) |  | [optional]
**match_count** | **int** | Number of matching messages in this conversation. 0 when the conversation matched only on contact identity (name, username, or phone number), not on message text. | [optional]
**matches** | [**\Zernio\Model\SearchInboxConversations200ResponseDataInnerMatchesInner[]**](SearchInboxConversations200ResponseDataInnerMatchesInner.md) | Up to 3 most-recent matching messages (empty for an identity-only match) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
