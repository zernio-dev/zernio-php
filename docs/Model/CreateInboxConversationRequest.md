# # CreateInboxConversationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | The social account ID to send from |
**participant_id** | **string** | Twitter numeric user ID of the recipient. Provide either this or participantUsername. | [optional]
**participant_username** | **string** | Twitter username (with or without @) of the recipient. Resolved to a user ID via lookup. Provide either this or participantId. | [optional]
**message** | **string** | Text content of the message. At least one of message or attachment is required. | [optional]
**skip_dm_check** | **bool** | Skip the receives_your_dm eligibility check before sending. Use if you have already verified the recipient accepts DMs. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
