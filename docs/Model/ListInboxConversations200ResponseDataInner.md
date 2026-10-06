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
**business_scoped_user_id** | **string** | WhatsApp only. Meta business-scoped user ID (BSUID), the stable identity anchor; present when Meta has sent it for this participant. | [optional]
**whatsapp_username** | **string** | WhatsApp only. The participant&#39;s WhatsApp username (e.g. &#x60;jane.shop&#x60;, no leading @). Not a stable identifier, because users can change it: useful for display, not recommended as an identity anchor. Captured from inbound messages, so older threads fill in on their next inbound. | [optional]
**last_message** | **string** |  | [optional]
**updated_time** | **\DateTime** |  | [optional]
**status** | **string** |  | [optional]
**unread_count** | **int** | Number of unread messages | [optional]
**thread_control** | **string** | Present once a handover has touched the thread (WhatsApp, Facebook, Instagram). ai_agent: Meta Business Agent answers (WhatsApp) and new inbound arrive flagged metadata.standby; app: you hold control; other: another app does (a WhatsApp partner, or a Messenger / Instagram receiver such as Page Inbox). Change it with POST /v1/inbox/conversations/{conversationId}/thread-control. | [optional]
**folder** | **string** | Present only on items listed with folder&#x3D;requests: a Message Request the account has not accepted yet. | [optional]
**is_group** | **bool** | iMessage only, true for a group thread. Manage it through the /v1/imessage/groups/{conversationId} endpoints. | [optional]
**url** | **string** | Direct link to open the conversation on the platform (if available) | [optional]
**instagram_profile** | [**\Zernio\Model\ListInboxConversations200ResponseDataInnerInstagramProfile**](ListInboxConversations200ResponseDataInnerInstagramProfile.md) |  | [optional]
**metadata** | [**\Zernio\Model\ListInboxConversations200ResponseDataInnerMetadata**](ListInboxConversations200ResponseDataInnerMetadata.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
