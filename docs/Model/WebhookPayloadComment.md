# # WebhookPayloadComment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Stable webhook event ID: the dedupe key, also sent as the X-Zernio-Event-Id header and identical on every retry and redelivery. It identifies the event only, never an account or other resource. |
**test** | **bool** | Always true when present: only a sample sent by POST /v1/webhooks/test with an event carries it. Real deliveries never do. | [optional]
**event** | **string** |  |
**comment** | [**\Zernio\Model\WebhookPayloadCommentComment**](WebhookPayloadCommentComment.md) |  |
**post** | [**\Zernio\Model\WebhookPayloadCommentPost**](WebhookPayloadCommentPost.md) |  |
**account** | [**\Zernio\Model\WebhookPayloadCommentAccount**](WebhookPayloadCommentAccount.md) |  |
**timestamp** | **\DateTime** | UTC time at which Zernio generated this event (set once when the event payload is built, before delivery is queued). Retries and redeliveries keep the original value, so it reflects the event, not the delivery attempt. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
