# # ListInboxConversations200ResponseDataInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Opaque conversation identifier. Pass it back verbatim to any /v1/inbox/conversations/{conversationId} route; do not assume a fixed format. | [optional]
**platform** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**account_username** | **string** |  | [optional]
**participant_id** | **string** |  | [optional]
**participant_name** | **string** |  | [optional]
**participant_picture** | **string** |  | [optional]
**participant_verified_type** | **string** | X/Twitter verified badge type. Only present for Twitter/X conversations. | [optional]
**last_message** | **string** |  | [optional]
**updated_time** | **\DateTime** |  | [optional]
**status** | **string** |  | [optional]
**unread_count** | **int** | Number of unread messages | [optional]
**url** | **string** | Direct link to open the conversation on the platform (if available) | [optional]
**instagram_profile** | [**\Zernio\Model\ListInboxConversations200ResponseDataInnerInstagramProfile**](ListInboxConversations200ResponseDataInnerInstagramProfile.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
