# # WebhookPayloadAdVideoProcessed

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Stable webhook event ID: the dedupe key, also sent as the X-Zernio-Event-Id header and identical on every retry and redelivery. |
**event** | **string** |  |
**account** | [**\Zernio\Model\WebhookPayloadAdVideoProcessedAccount**](WebhookPayloadAdVideoProcessedAccount.md) |  |
**video** | [**\Zernio\Model\WebhookPayloadAdVideoProcessedVideo**](WebhookPayloadAdVideoProcessedVideo.md) |  |
**timestamp** | **\DateTime** | UTC time at which Zernio generated this event. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
