# # WebhookPayloadPostPlatformPlatform

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Platform name (e.g. &#x60;twitter&#x60;, &#x60;tiktok&#x60;, &#x60;instagram&#x60;). |
**status** | **string** | Terminal status this event fires on. Matches the event suffix. |
**platform_post_id** | **string** | Platform-native post id. Present on &#x60;published&#x60;, absent on &#x60;failed&#x60;. | [optional]
**published_url** | **string** | Public URL to the platform-side post. Present on &#x60;published&#x60; (when the platform exposes one and it is not a draft). | [optional]
**error** | **string** | Error message from the platform. Present on &#x60;failed&#x60;, absent on &#x60;published&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
