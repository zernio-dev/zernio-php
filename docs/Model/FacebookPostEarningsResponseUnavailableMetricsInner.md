# # FacebookPostEarningsResponseUnavailableMetricsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**metric** | **string** | The requested metric name. | [optional]
**reason** | **string** | Why the metric is unavailable:  - \&quot;not_enrolled\&quot;: the account is not enrolled in the program behind this metric. - \&quot;permission_missing\&quot;: the connected user lacks access to this metric. - \&quot;unsupported_metric\&quot;: Meta does not accept this metric name on the API version Zernio uses. - \&quot;no_data\&quot;: Meta returned no bucket for this metric. - \&quot;unreadable_value\&quot;: Meta returned a value shape Zernio cannot read, so no total is reported. - \&quot;mixed_currency\&quot;: readable values disagree on currency or unit. - \&quot;upstream_error\&quot;: any other platform failure.  \&quot;no_data\&quot; is the common case in practice; the others are defensive. | [optional]
**message** | **string** | Platform-provided explanation when available (access tokens redacted), otherwise Zernio copy. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
