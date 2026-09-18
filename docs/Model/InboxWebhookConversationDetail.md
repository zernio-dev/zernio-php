# # InboxWebhookConversationDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The platform&#39;s conversation id, equal to &#x60;conversation.platformConversationId&#x60; on inbox webhooks (whose &#x60;conversation.id&#x60; is Zernio&#39;s internal id). Both are accepted by the conversation endpoints. |
**platform** | **string** |  |
**platform_conversation_id** | **string** | Same value as &#x60;id&#x60;. |
**participant_id** | **string** | Contact&#39;s platform identifier (IGSID, PSID, wa_id, etc.) | [optional]
**participant_name** | **string** |  |
**participant_username** | **string** | Contact&#39;s handle when the platform exposes one | [optional]
**participant_picture** | **string** |  | [optional]
**status** | **string** |  |
**contact_id** | **string** | Zernio CRM Contact ID for the participant, when one exists. Resolved by joining &#x60;participantId&#x60; to the ContactChannel collection (same join used by message.*, reaction.received, and call.* webhooks). Best-effort: omitted when no channel matches or &#x60;participantId&#x60; is absent. Lets integrators seed the CRM straight from &#x60;conversation.started&#x60; without waiting for the first &#x60;message.*&#x60; event. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
