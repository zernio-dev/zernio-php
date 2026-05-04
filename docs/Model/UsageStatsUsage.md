# # UsageStatsUsage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uploads** | **int** | Stripe users only. Uploads consumed in the current period. | [optional]
**profiles** | **int** | Stripe users only. Profiles currently owned. | [optional]
**last_reset** | **\DateTime** | Stripe users only. | [optional]
**connected_accounts** | **int** | Metronome users only. Accounts currently connected across the team. | [optional]
**x_api_calls** | [**\Zernio\Model\UsageStatsUsageXApiCalls**](UsageStatsUsageXApiCalls.md) |  | [optional]
**x_api_calls_by_operation** | **array<string,int>** | Metronome users only. Per-operation X API call counts keyed by operation (e.g. &#x60;posts_read&#x60;, &#x60;content_create&#x60;). Resolve each key to price and metadata via &#x60;GET /v1/billing/x-pricing&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
