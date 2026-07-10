# # GetUsage200Response

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
**supported** | **bool** | False for legacy Stripe accounts (no Metronome invoice to split); &#x60;days&#x60; and &#x60;totals&#x60; are then empty/zero. | [optional]
**granularity** | **string** |  | [optional]
**days** | [**\Zernio\Model\UsageMeteringDaysInner[]**](UsageMeteringDaysInner.md) | One row per bucket. Empty when &#x60;granularity&#x3D;total&#x60;. &#x60;date&#x60; is a UTC date (month buckets use the 1st). | [optional]
**totals** | [**\Zernio\Model\UsageMeteringTotals**](UsageMeteringTotals.md) |  | [optional]
**line_items** | [**\Zernio\Model\UsageMeteringLineItemsInner[]**](UsageMeteringLineItemsInner.md) | Per-invoice-line-item rows (largest spend first) for a detailed breakdown. | [optional]
**peaks** | [**\Zernio\Model\UsageMeteringPeaks**](UsageMeteringPeaks.md) |  | [optional]
**call_usage** | [**\Zernio\Model\UsageMeteringCallUsage**](UsageMeteringCallUsage.md) |  | [optional]
**period** | [**\Zernio\Model\UsageMeteringPeriod**](UsageMeteringPeriod.md) |  | [optional]
**tax** | [**\Zernio\Model\UsageMeteringTax**](UsageMeteringTax.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
