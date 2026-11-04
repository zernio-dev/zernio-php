# # WebhookPayloadAutomationAlert

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Stable webhook event ID: the dedupe key, also sent as the X-Zernio-Event-Id header and identical on every retry and redelivery. |
**profiles** | [**\Zernio\Model\WebhookProfilesInner[]**](WebhookProfilesInner.md) | The profiles this event belongs to, each with the externalId you set on it (null when none is set). Use it to route the event to your tenant without storing Zernio profile ids.  Present on every event tied to a profile, absent on events that belong to none. Events spanning several profiles (a post published to accounts of different profiles) list each once. | [optional]
**test** | **bool** | Always true when present: only a sample sent by POST /v1/webhooks/test with an event carries it. Real deliveries never do. | [optional]
**event** | **string** |  |
**automation** | [**\Zernio\Model\WebhookAutomationRef**](WebhookAutomationRef.md) |  |
**account_id** | **string** | The connected account the automation acts on. |
**check_id** | **string** | The check that moved the alert. |
**alert** | [**\Zernio\Model\WebhookPayloadAutomationAlertAlert**](WebhookPayloadAutomationAlertAlert.md) |  |
**timestamp** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
