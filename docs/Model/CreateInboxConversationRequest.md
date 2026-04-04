# # CreateInboxConversationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | The social account ID to send from |
**participant_id** | **string** | Twitter numeric user ID of the recipient. Provide either this or &#x60;participantUsername&#x60;. | [optional]
**participant_username** | **string** | Twitter username (with or without @) of the recipient. Resolved to a user ID via lookup. Provide either this or &#x60;participantId&#x60;. | [optional]
**message** | **string** | Text content of the message. At least one of &#x60;message&#x60; or attachment is required. | [optional]
**skip_dm_check** | **bool** | Skip the &#x60;receives_your_dm&#x60; eligibility check before sending. Use if you have already verified the recipient accepts DMs. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
