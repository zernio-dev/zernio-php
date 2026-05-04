# # UsageStats

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_system** | **string** | Which billing system the account is on. Shape of &#x60;usage&#x60;/&#x60;spend&#x60; differs. | [optional]
**plan_name** | **string** |  | [optional]
**billing_period** | **string** |  | [optional]
**signup_date** | **\DateTime** |  | [optional]
**billing_anchor_day** | **int** | Day of month (1-31) when the billing cycle resets | [optional]
**has_access** | **bool** | True if the account is in good standing. False for past-due/unpaid/paused subscriptions. | [optional]
**customer_id** | **string** | Stripe customer ID, when present. | [optional]
**is_invited_user** | **bool** | True if this is a team member; limits/usage reflect the account owner. | [optional]
**auto_upgrade_enabled** | **bool** | Stripe-only. Always false for Metronome users. | [optional]
**limits** | [**\Zernio\Model\UsageStatsLimits**](UsageStatsLimits.md) |  | [optional]
**usage** | [**\Zernio\Model\UsageStatsUsage**](UsageStatsUsage.md) |  | [optional]
**spend** | [**\Zernio\Model\UsageStatsSpend**](UsageStatsSpend.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
