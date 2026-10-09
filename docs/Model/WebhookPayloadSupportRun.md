# # WebhookPayloadSupportRun

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**test** | **bool** | Always true when present: only a sample sent by POST /v1/webhooks/test with an event carries it. Real deliveries never do. | [optional]
**id** | **string** | Event id, the dedupe key. |
**event** | **string** |  |
**timestamp** | **\DateTime** |  |
**run** | [**\Zernio\Model\SupportRun**](SupportRun.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
