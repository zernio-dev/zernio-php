# # UsageStatsSpend

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**current_period_cents** | **int** | Total current-period spend in cents (all products combined). | [optional]
**credits_remaining_cents** | **int** | Free-tier credit remaining in cents. Applied before any charge. | [optional]
**x_spend_cents** | **int** | Current-period X/Twitter API spend in cents, derived from the per-tier call counts. Rounded up for conservative enforcement against &#x60;xSpendLimitCents&#x60;. | [optional]
**x_spend_limit_cents** | **int** | Monthly X spend cap set by the account owner, or null if no cap. When current X spend hits this cap, analytics and inbox sync are auto-paused for X accounts. Publishing is never blocked by this cap. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
