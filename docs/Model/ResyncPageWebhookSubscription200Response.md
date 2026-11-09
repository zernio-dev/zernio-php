# # ResyncPageWebhookSubscription200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**resubscribed** | **bool** |  | [optional]
**page_id** | **string** |  | [optional]
**app_subscribed** | **bool** |  | [optional]
**leadgen** | **bool** |  | [optional]
**subscribed_fields** | **string[]** |  | [optional]
**warning** | **string** |  | [optional]
**instagram_user_id** | **string** | Instagram accounts only. | [optional]
**subscription_id** | **string** | Instagram accounts only. Id of the subscription record after the repair. | [optional]
**previous_subscription_id** | **string** | Instagram accounts only. Id of the record before the repair; null when there was none. | [optional]
**recreated** | **bool** | Instagram accounts only. True when the subscription record id changed. | [optional]
**missing_fields** | **string[]** | Instagram accounts only. Webhook fields Zernio expects that Meta did not subscribe. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
