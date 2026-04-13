# # WebhookPayloadMessageEdited

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**event** | **string** |  |
**message** | [**\Late\Model\WebhookPayloadMessageMessage**](WebhookPayloadMessageMessage.md) |  |
**edit_history** | [**\Late\Model\WebhookPayloadMessageEditedEditHistoryInner[]**](WebhookPayloadMessageEditedEditHistoryInner.md) | Prior versions of the message, oldest first. |
**edit_count** | **int** | Total number of edits applied to this message. |
**edited_at** | **\DateTime** | When the most recent edit happened. |
**conversation** | [**\Late\Model\WebhookPayloadMessageConversation**](WebhookPayloadMessageConversation.md) |  |
**account** | [**\Late\Model\WebhookPayloadMessageAccount**](WebhookPayloadMessageAccount.md) |  |
**timestamp** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
