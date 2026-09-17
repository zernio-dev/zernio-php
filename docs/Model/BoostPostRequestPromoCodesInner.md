# # BoostPostRequestPromoCodesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**discount_type** | **string** |  |
**discount_value** | **float** | PERCENTAGE: integer 1-100. CASH: amount greater than 0 in discountCurrency. |
**discount_currency** | **string** | ISO 4217; required for CASH. | [optional]
**promo_code** | **string** | Code entered at checkout; omit for an automatic offer. | [optional]
**minimum_purchase_type** | **string** |  | [optional]
**minimum_purchase_value** | **float** | Required with minimumPurchaseType; QUANTITY is an integer &gt;&#x3D; 0, SUBTOTAL an amount &gt; 0. | [optional]
**minimum_purchase_currency** | **string** | ISO 4217; required for SUBTOTAL. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
