# # WebhookPayloadContactFieldChanged

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**test** | **bool** | Always true when present: only a sample sent by POST /v1/webhooks/test with an event carries it. Real deliveries never do. | [optional]
**id** | **string** | Event id, the dedupe key. |
**profiles** | [**\Zernio\Model\WebhookProfilesInner[]**](WebhookProfilesInner.md) | The profiles this event belongs to, each with the externalId you set on it (null when none is set). Use it to route the event to your tenant without storing Zernio profile ids.  Present on every event tied to a profile, absent on events that belong to none. Events spanning several profiles (a post published to accounts of different profiles) list each once. | [optional]
**event** | **string** |  |
**timestamp** | **\DateTime** |  |
**contact** | [**\Zernio\Model\WebhookPayloadContactTagContact**](WebhookPayloadContactTagContact.md) |  |
**field** | **string** | Custom field slug. |
**previous_value** | **mixed** |  |
**value** | **mixed** |  |
**source** | **string** | Who wrote the field: the API or dashboard, a workflow set_field node, or an automation. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
