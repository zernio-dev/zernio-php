# # UpdateCommerceDiscountRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  |
**title** | **string** |  | [optional]
**code** | **string** | Required for method code. | [optional]
**percentage** | **float** | For type percentage, e.g. 15 for 15%. | [optional]
**amount** | **string** | For type fixed_amount, a decimal in the store currency. | [optional]
**applies_on_each_item** | **bool** | fixed_amount only: take the amount off each item instead of once per order. | [optional]
**minimum_subtotal** | **string** | Minimum order subtotal, a decimal in the store currency. | [optional]
**minimum_quantity** | **int** |  | [optional]
**usage_limit** | **int** | Code discounts only: total uses allowed. | [optional]
**once_per_customer** | **bool** | Code discounts only. | [optional]
**starts_at** | **\DateTime** | Defaults to now. | [optional]
**ends_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
