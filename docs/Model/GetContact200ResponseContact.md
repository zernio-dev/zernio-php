# # GetContact200ResponseContact

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**email** | **string** |  | [optional]
**company** | **string** |  | [optional]
**avatar_url** | **string** |  | [optional]
**tags** | **string[]** |  | [optional]
**is_subscribed** | **bool** |  | [optional]
**is_blocked** | **bool** |  | [optional]
**messages_sent_count** | **int** | Messages sent to the contact, derived live from message history across all linked conversations. | [optional]
**messages_received_count** | **int** | Messages received from the contact, derived live from message history across all linked conversations. | [optional]
**last_message_sent_at** | **\DateTime** | Timestamp of the most recent outgoing message, or null if none. | [optional]
**last_message_received_at** | **\DateTime** | Timestamp of the most recent incoming message, or null if none. | [optional]
**custom_fields** | **object** |  | [optional]
**notes** | **string** |  | [optional]
**conversation_ids** | **string[]** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
