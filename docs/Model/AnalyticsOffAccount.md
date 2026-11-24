# # AnalyticsOffAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | - X_ANALYTICS_NOT_ENABLED: &#x60;xCapabilities.analytics&#x60; is off on the account. It is opt-in on usage-based billing. Turn it on with &#x60;PUT /v1/accounts/{accountId}&#x60;, or in the account&#39;s X settings in the dashboard. - X_ANALYTICS_PAUSED: it was on, and the monthly X spend cap turned it off. - PAYMENT_REQUIRED: X access is paused because billing on this account failed.  New values may be added. |
**message** | **string** | The reason in words. X_ANALYTICS_NOT_ENABLED also says how to turn it on. |
**account_id** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
