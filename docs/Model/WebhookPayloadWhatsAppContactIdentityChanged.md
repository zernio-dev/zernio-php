# # WebhookPayloadWhatsAppContactIdentityChanged

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Stable webhook event ID: the dedupe key, also sent as the X-Zernio-Event-Id header and identical on every retry and redelivery. It identifies the event only, never an account or other resource. |
**test** | **bool** | Always true when present: only a sample sent by POST /v1/webhooks/test with an event carries it. Real deliveries never do. | [optional]
**event** | **string** |  |
**account** | [**\Zernio\Model\WebhookPayloadWhatsAppAccountQualityUpdatedAccount**](WebhookPayloadWhatsAppAccountQualityUpdatedAccount.md) |  |
**reason** | **string** | Which Meta signal reported the change. &#x60;user_changed_number&#x60;: new phone number. &#x60;user_changed_user_id&#x60; and &#x60;user_id_update&#x60;: new BSUID. |
**previous** | [**\Zernio\Model\WhatsAppContactIdentity**](WhatsAppContactIdentity.md) |  |
**current** | [**\Zernio\Model\WhatsAppContactIdentity**](WhatsAppContactIdentity.md) |  |
**contact_id** | **string** | Zernio contact id matched on the new identity, null when none exists yet. |
**conversation_id** | **string** | Zernio inbox conversation that was re-keyed, null when there was none. |
**changed_at** | **\DateTime** | When Meta reported the change. |
**timestamp** | **\DateTime** | UTC time at which Zernio generated this event (set once when the event payload is built, before delivery is queued). Retries and redeliveries keep the original value, so it reflects the event, not the delivery attempt. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
