# # GetPageWebhookSubscription200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**page_id** | **string** |  | [optional]
**app_subscribed** | **bool** | False when the Page carries no subscription for our app at all. | [optional]
**leadgen** | **bool** | Whether lead ads submitted on this Page reach Zernio in real time. | [optional]
**subscribed_fields** | **string[]** |  | [optional]
**warning** | **string** | Present only when leadgen is missing. | [optional]
**instagram_user_id** | **string** | Instagram accounts only. | [optional]
**subscription_id** | **string** | Instagram accounts only. Id of the subscription record on Meta; null when there is none. | [optional]
**missing_fields** | **string[]** | Instagram accounts only. Webhook fields Zernio expects that Meta did not subscribe. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
