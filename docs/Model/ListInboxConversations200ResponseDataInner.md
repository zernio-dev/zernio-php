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
**participant_verified_type** | **string** | X verified badge type. Only present for X conversations. | [optional]
**last_message** | **string** |  | [optional]
**updated_time** | **\DateTime** |  | [optional]
**status** | **string** |  | [optional]
**unread_count** | **int** | Number of unread messages | [optional]
**thread_control** | **string** | WhatsApp only, present once Meta Business Agent has touched the thread. ai_agent: the agent answers and new inbound arrive flagged metadata.standby; app: you hold control; other: another partner app does. Change it with POST /v1/inbox/conversations/{conversationId}/thread-control. | [optional]
**url** | **string** | Direct link to open the conversation on the platform (if available) | [optional]
**instagram_profile** | [**\Zernio\Model\ListInboxConversations200ResponseDataInnerInstagramProfile**](ListInboxConversations200ResponseDataInnerInstagramProfile.md) |  | [optional]
**metadata** | [**\Zernio\Model\ListInboxConversations200ResponseDataInnerMetadata**](ListInboxConversations200ResponseDataInnerMetadata.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
