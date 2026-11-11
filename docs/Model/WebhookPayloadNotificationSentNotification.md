# # WebhookPayloadNotificationSentNotification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | **string** | The email notification preference this notification belongs to. |
**type** | **string** |  |
**subject** | **string** | The email subject. |
**text** | **string** | The email body as plain text, without the greeting. |
**url** | **string** | Dashboard link for the notification. |
**refs** | [**\Zernio\Model\WebhookPayloadNotificationSentNotificationRefs**](WebhookPayloadNotificationSentNotificationRefs.md) |  |
**reason** | **string** | Why the account was disconnected. Only on account_disconnected. | [optional]
**actions** | [**\Zernio\Model\WebhookPayloadNotificationSentNotificationActionsInner[]**](WebhookPayloadNotificationSentNotificationActionsInner.md) | API calls that act on the notification, with the ids already in the path. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
