# # WebhookPayloadEmailSent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**profiles** | [**\Zernio\Model\WebhookProfilesInner[]**](WebhookProfilesInner.md) | The profiles this event belongs to, each with the externalId you set on it (null when none is set). Use it to route the event to your tenant without storing Zernio profile ids.  Present on every event tied to a profile, absent on events that belong to none. Events spanning several profiles (a post published to accounts of different profiles) list each once. | [optional]
**test** | **bool** | Always true when present: only a sample sent by POST /v1/webhooks/test with an event carries it. Real deliveries never do. | [optional]
**event** | **string** |  |
**account** | [**\Zernio\Model\WebhookPayloadCalendarEventAccount**](WebhookPayloadCalendarEventAccount.md) |  |
**source** | **string** |  |
**email** | [**\Zernio\Model\WebhookPayloadEmailSentEmail**](WebhookPayloadEmailSentEmail.md) |  |
**draft_id** | **string** | The draft it was sent from (&#x60;source: draft&#x60;, or a scheduled draft). | [optional]
**schedule_id** | **string** | The scheduled send (&#x60;source: scheduled&#x60;). | [optional]
**reply_to_message_id** | **string** |  | [optional]
**forwarded_from** | **string** |  | [optional]
**timestamp** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
