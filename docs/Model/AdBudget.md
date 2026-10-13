# # AdBudget

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** |  | [optional]
**type** | **string** |  | [optional]
**daily** | **float** | LinkedIn and X only. The daily budget (LinkedIn: the parent campaign&#39;s &#x60;dailyBudget&#x60;; X: the line item&#39;s, or the campaign&#39;s when the line item has none). Both allow a daily AND a lifetime budget together, which &#x60;amount&#x60;/&#x60;type&#x60; cannot express (daily wins there); read &#x60;daily&#x60; and &#x60;lifetime&#x60; to see both. | [optional]
**lifetime** | **float** | LinkedIn and X only. The lifetime total (LinkedIn: the parent campaign&#39;s &#x60;totalBudget&#x60;; X: &#x60;total_budget_amount_local_micro&#x60;, for example the &#x60;lifetimeBudgetCap&#x60; of a boost), readable even when a daily budget is also set. | [optional]
**pacing** | **string** | LinkedIn only. The campaign&#39;s &#x60;pacingStrategy&#x60;: how fast LinkedIn may spend the budget. Typically LINEAR or ACCELERATED; the list is open. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
