# # InboxWebhookConversation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**platform_conversation_id** | **string** |  |
**participant_id** | **string** |  | [optional]
**participant_name** | **string** |  | [optional]
**participant_username** | **string** |  | [optional]
**participant_picture** | **string** |  | [optional]
**status** | **string** |  |
**contact_id** | **string** | Zernio CRM Contact ID for the participant, when one exists. Resolved by joining &#x60;participantId&#x60; to the ContactChannel collection. Best-effort: omitted when no channel matches or &#x60;participantId&#x60; is absent. Lets integrators join any inbox webhook back to the CRM Contact without needing to look at the sender — which matters for outgoing and delivery-status events whose sender is the business. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
