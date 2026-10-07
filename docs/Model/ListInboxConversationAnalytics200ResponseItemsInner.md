# # ListInboxConversationAnalytics200ResponseItemsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**conversation_id** | **string** | The platformConversationId. A thread whose events were logged under both its ids comes back as one row. | [optional]
**mongo_id** | **string** | The Zernio conversation id, when a matching conversation exists | [optional]
**account_id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**participant_name** | **string** |  | [optional]
**participant_username** | **string** |  | [optional]
**participant_picture** | **string** |  | [optional]
**last_message** | **string** | Cached preview from the Conversation doc | [optional]
**total_messages** | **int** |  | [optional]
**received** | **int** |  | [optional]
**sent** | **int** |  | [optional]
**read** | **int** |  | [optional]
**failed** | **int** |  | [optional]
**first_message_at** | **\DateTime** |  | [optional]
**last_message_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
