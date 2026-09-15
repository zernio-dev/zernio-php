# # ErrorResponseDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**quota_exhausted** | **bool** | Google Ads 429 only. True when the upstream Google Ads quota is spent rather than a Zernio limit. | [optional]
**quota_scope** | **string** | Google Ads 429 only, when Google names the scope. DEVELOPER is the shared developer-token budget; ACCOUNT is your ad account. | [optional]
**budget_scope** | **string** | Zernio Google Ads operations-budget 429 only (never set alongside &#x60;quotaExhausted&#x60;). &#x60;user&#x60; is your own burst/daily allowance; &#x60;platform&#x60; is the fleet-wide daily budget shared across customers. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
