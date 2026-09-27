# # WebhookPayloadPostPlatformPlatform

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Platform name (e.g. &#x60;twitter&#x60;, &#x60;tiktok&#x60;, &#x60;instagram&#x60;). |
**status** | **string** | Terminal status this event fires on. Matches the event suffix. |
**platform_post_id** | **string** | Platform-native post id. Present on &#x60;published&#x60; and &#x60;deleted&#x60;, absent on &#x60;failed&#x60;. | [optional]
**published_url** | **string** | Public URL to the platform-side post. Present on &#x60;published&#x60; (when the platform exposes one and it is not a draft) and on &#x60;deleted&#x60; (when one was recorded at publish time). | [optional]
**error** | **string** | Error message from the platform. Present on &#x60;failed&#x60; only. | [optional]
**error_category** | **string** | Error category for programmatic handling. Present on &#x60;failed&#x60; only. Same taxonomy as &#x60;platforms[].errorCategory&#x60; on GET /v1/posts. | [optional]
**error_source** | **string** | Who must act on the failure: user (fix content or reconnect), platform (outage or policy), system (Zernio). Present on &#x60;failed&#x60; only. | [optional]
**deleted_at** | **\DateTime** | When the platform-side deletion was detected by Zernio sync (ISO 8601). Present only on &#x60;post.platform.deleted&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
