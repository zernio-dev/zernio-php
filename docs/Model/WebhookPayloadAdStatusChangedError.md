# # WebhookPayloadAdStatusChangedError

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Platform-native error code, forwarded verbatim. For Meta this is &#x60;error_code&#x60; as a string. Use as the stable discriminator — &#x60;summary&#x60; and &#x60;message&#x60; are localized. |
**summary** | **string** | Short human-readable summary (Meta &#x60;error_summary&#x60;). Localized to the ad-account owner&#39;s Meta locale — display only, do not match on it. | [optional]
**message** | **string** | Full human-readable error message (Meta &#x60;error_message&#x60;). Localized — display only. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
