# # WebhookPayloadMessageEdited

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**event** | **string** |  |
**message** | [**\Zernio\Model\InboxWebhookMessage**](InboxWebhookMessage.md) |  |
**edit_history** | [**\Zernio\Model\WebhookPayloadMessageEditedEditHistoryInner[]**](WebhookPayloadMessageEditedEditHistoryInner.md) | Prior versions of the message, oldest first. |
**edit_count** | **int** | Total number of edits applied to this message. |
**edited_at** | **\DateTime** | When the most recent edit happened. |
**conversation** | [**\Zernio\Model\InboxWebhookConversation**](InboxWebhookConversation.md) |  |
**account** | [**\Zernio\Model\InboxWebhookAccount**](InboxWebhookAccount.md) |  |
**timestamp** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
