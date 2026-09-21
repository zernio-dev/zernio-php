# # UsageStatsSpend

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**current_period_cents** | **int** | Total current-period spend in cents (all products combined). | [optional]
**credits_remaining_cents** | **int** | Free-tier credit remaining in cents. Applied before any charge. | [optional]
**x_spend_cents** | **int** | Current-period X API spend in cents, summed from &#x60;xApiCallsByOperation&#x60; × per-operation prices. Tier-agnostic (covers every price including the $0.200 URL tier). Rounded up for conservative enforcement against &#x60;xSpendLimitCents&#x60;. | [optional]
**x_spend_limit_cents** | **int** | Monthly X spend cap set by the account owner, or null if no cap. When current X spend hits this cap, all billable X API activity is paused until the billing period resets or the cap is raised, including publishing, analytics and inbox sync, and likes, reposts and follows. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
