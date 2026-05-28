# # WebhookPayloadConversationStartedConversation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Internal conversation ID |
**platform** | **string** |  |
**platform_conversation_id** | **string** |  |
**participant_id** | **string** | Contact&#39;s platform identifier (IGSID | [optional]
**participant_name** | **string** |  |
**participant_username** | **string** | Contact&#39;s handle when the platform exposes one | [optional]
**participant_picture** | **string** |  | [optional]
**status** | **string** |  |
**contact_id** | **string** | Zernio CRM Contact ID for the participant, when one exists. Resolved by joining &#x60;participantId&#x60; to the ContactChannel collection (same join used by message.*, reaction.received, and call.* webhooks). Best-effort: omitted when no channel matches or &#x60;participantId&#x60; is absent. Lets integrators seed the CRM straight from &#x60;conversation.started&#x60; without waiting for the first &#x60;message.*&#x60; event. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
