# # WebhookPayloadMessageDeliveryStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Stable webhook event ID: the dedupe key, also sent as the X-Zernio-Event-Id header and identical on every retry and redelivery. It identifies the event only, never an account or other resource. |
**event** | **string** |  |
**message** | [**\Zernio\Model\InboxWebhookMessage**](InboxWebhookMessage.md) |  |
**status_at** | **\DateTime** | When the platform reported this status. |
**error** | [**\Zernio\Model\WebhookPayloadMessageDeliveryStatusError**](WebhookPayloadMessageDeliveryStatusError.md) |  | [optional]
**conversation** | [**\Zernio\Model\InboxWebhookConversation**](InboxWebhookConversation.md) |  |
**account** | [**\Zernio\Model\InboxWebhookAccount**](InboxWebhookAccount.md) |  |
**timestamp** | **\DateTime** | UTC time at which Zernio generated this event (set once when the event payload is built, before delivery is queued). Retries and redeliveries keep the original value, so it reflects the event, not the delivery attempt. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
