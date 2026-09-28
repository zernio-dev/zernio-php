# # WebhookPayloadAccountAdsSyncFailed

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Stable webhook event ID: the dedupe key, also sent as the X-Zernio-Event-Id header and identical on every retry and redelivery. |
**event** | **string** |  |
**account** | [**\Zernio\Model\WebhookAdsSyncAccount**](WebhookAdsSyncAccount.md) |  |
**ad_account** | [**\Zernio\Model\WebhookAdsSyncAdAccount**](WebhookAdsSyncAdAccount.md) |  |
**sync** | [**\Zernio\Model\WebhookPayloadAccountAdsSyncFailedSync**](WebhookPayloadAccountAdsSyncFailedSync.md) |  |
**timestamp** | **\DateTime** | UTC time at which Zernio generated this event. Retries and redeliveries keep the original value. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
