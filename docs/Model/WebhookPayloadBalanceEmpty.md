# # WebhookPayloadBalanceEmpty

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Stable webhook event ID: the dedupe key, also sent as the X-Zernio-Event-Id header and identical on every retry and redelivery. It identifies the event only, never an account or other resource. |
**test** | **bool** | Always true when present: only a sample sent by POST /v1/webhooks/test with an event carries it. Real deliveries never do. | [optional]
**event** | **string** |  |
**balance** | [**\Zernio\Model\WebhookPayloadBalanceEmptyBalance**](WebhookPayloadBalanceEmptyBalance.md) |  |
**code** | **string** | The 402 code pay-per-use calls get until the balance is funded. &#x60;usage_limit_reached&#x60; when the auto top-up monthly limit is what keeps it at $0. |
**funding_url** | **string** | Dashboard link that opens the top-up drawer in Billing. |
**timestamp** | **\DateTime** | UTC time at which Zernio generated this event. Retries and redeliveries keep the original value. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
