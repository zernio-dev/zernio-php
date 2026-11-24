# # UsageMetering

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**supported** | **bool** | False for legacy Stripe accounts (no usage-based invoice to split); &#x60;days&#x60; and &#x60;totals&#x60; are then empty/zero. | [optional]
**granularity** | **string** |  | [optional]
**days** | [**\Zernio\Model\UsageMeteringDaysInner[]**](UsageMeteringDaysInner.md) | One row per bucket. Empty when &#x60;granularity&#x3D;total&#x60;. &#x60;date&#x60; is a UTC date (month buckets use the 1st). | [optional]
**totals** | [**\Zernio\Model\UsageMeteringTotals**](UsageMeteringTotals.md) |  | [optional]
**line_items** | [**\Zernio\Model\UsageMeteringLineItemsInner[]**](UsageMeteringLineItemsInner.md) | Per-invoice-line-item rows (largest spend first) for a detailed breakdown. | [optional]
**peaks** | [**\Zernio\Model\UsageMeteringPeaks**](UsageMeteringPeaks.md) |  | [optional]
**call_usage** | [**\Zernio\Model\UsageMeteringCallUsage**](UsageMeteringCallUsage.md) |  | [optional]
**period** | [**\Zernio\Model\UsageMeteringPeriod**](UsageMeteringPeriod.md) |  | [optional]
**tax** | [**\Zernio\Model\UsageMeteringTax**](UsageMeteringTax.md) |  | [optional]
**attribution** | [**\Zernio\Model\UsageMeteringAttribution**](UsageMeteringAttribution.md) |  | [optional]
**incomplete** | **bool** | Check it before rebilling. Present and true when a read behind the split failed: a group&#39;s spend can then be lower than the real one (it is &#x60;unattributed&#x60; in a full breakdown, missing from a view of some profiles or accounts). Retry in a minute. | [optional]
**scope** | [**\Zernio\Model\UsageMeteringScope**](UsageMeteringScope.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
