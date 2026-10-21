# # GetAdAccountBilling200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_id** | **string** |  | [optional]
**payments_accounts** | [**\Zernio\Model\GetAdAccountBilling200ResponsePaymentsAccountsInner[]**](GetAdAccountBilling200ResponsePaymentsAccountsInner.md) |  | [optional]
**billing_setups** | [**\Zernio\Model\GetAdAccountBilling200ResponseBillingSetupsInner[]**](GetAdAccountBilling200ResponseBillingSetupsInner.md) |  | [optional]
**account_budgets** | [**\Zernio\Model\GetAdAccountBilling200ResponseAccountBudgetsInner[]**](GetAdAccountBilling200ResponseAccountBudgetsInner.md) |  | [optional]
**pending_budget_proposals** | [**\Zernio\Model\GetAdAccountBilling200ResponsePendingBudgetProposalsInner[]**](GetAdAccountBilling200ResponsePendingBudgetProposalsInner.md) | New account budgets proposed but not yet approved by Google. A setup with one is not reused by the POST. | [optional]
**cached_at** | **\DateTime** | When this data was fetched from Google. Null when the cache is unavailable. | [optional]
**stale** | **bool** | True when Google&#39;s quota was exhausted and this is the last successful fetch. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
