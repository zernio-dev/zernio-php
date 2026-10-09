# # WebhookPayloadCommerceProduct

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**test** | **bool** | Always true when present: only a sample sent by POST /v1/webhooks/test with an event carries it. Real deliveries never do. | [optional]
**id** | **string** |  | [optional]
**event** | **string** |  | [optional]
**timestamp** | **\DateTime** | UTC time at which Zernio generated this event (set once when the event payload is built, before delivery is queued). Retries and redeliveries keep the original value, so it reflects the event, not the delivery attempt. | [optional]
**store** | [**\Zernio\Model\WebhookPayloadCommerceProductStore**](WebhookPayloadCommerceProductStore.md) |  | [optional]
**resource** | [**\Zernio\Model\WebhookPayloadCommerceProductResource**](WebhookPayloadCommerceProductResource.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
