# # InstagramAccountInsightsResponseUnavailableMetricsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**metric** | **string** | The requested metric name. | [optional]
**reason** | **string** | Why the metric is unavailable:  - \&quot;not_enrolled\&quot;: the account is not enrolled in the program behind this metric. - \&quot;permission_missing\&quot;: the connected user lacks access to this metric. - \&quot;unsupported_metric\&quot;: the platform does not accept this metric name on the API version Zernio uses. - \&quot;no_data\&quot;: the platform returned no bucket for this metric over the requested range. - \&quot;unreadable_value\&quot;: the platform returned a value shape Zernio cannot read, so no total is reported. - \&quot;mixed_currency\&quot;: readable values disagree on currency or unit within the range. - \&quot;upstream_error\&quot;: any other platform failure.  \&quot;no_data\&quot; is the common case in practice. The others are defensive: \&quot;not_enrolled\&quot; and \&quot;unsupported_metric\&quot; in particular have not been observed on live Facebook traffic, since a non-enrolled Page returns zeros rather than an error and metric names are validated before any platform call. | [optional]
**message** | **string** | Platform-provided explanation when available (access tokens redacted), otherwise Zernio copy. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
