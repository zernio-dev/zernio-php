# # OnWhatsAppAutomaticEventRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**test** | **bool** | Always true when present: only a sample sent by POST /v1/webhooks/test with an event carries it. Real deliveries never do. | [optional]
**id** | **string** | Stable webhook event ID: the dedupe key, also sent as the X-Zernio-Event-Id header and identical on every retry and redelivery. It identifies the event only, never an account or other resource. | [optional]
**event** | **string** |  | [optional]
**timestamp** | **\DateTime** | UTC time at which Zernio generated this event (set once when the event payload is built, before delivery is queued). Retries and redeliveries keep the original value, so it reflects the event, not the delivery attempt. | [optional]
**account_id** | **string** | SocialAccount id of the WhatsApp number whose conversation was flagged. | [optional]
**conversation_id** | **string** | Zernio conversation id, when the thread could be resolved. | [optional]
**platform_message_id** | **string** | The wamid of the message Meta&#39;s analysis flagged. | [optional]
**event_name** | **string** | Meta-detected event: &#x60;LeadSubmitted&#x60; | &#x60;Purchase&#x60;. | [optional]
**ctwa_clid** | **string** | Meta&#39;s CTWA click id, the Conversions API match key. | [optional]
**custom_data** | [**\Zernio\Model\OnWhatsAppAutomaticEventRequestCustomData**](OnWhatsAppAutomaticEventRequestCustomData.md) |  | [optional]
**detected_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
