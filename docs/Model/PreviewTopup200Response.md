# # PreviewTopup200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount_cents** | **int** | Credited to your balance. |
**tax_cents** | **int** | Tax added on top (VAT where it applies). |
**total_cents** | **int** | What the card would be charged: amountCents + taxCents. |
**tax_label** | **string** | The tax and its rate, for example \&quot;VAT 21%\&quot;. Null when no tax is charged. |
**reverse_charge** | **bool** | True for an EU business with a valid VAT id: no VAT, reverse charge. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
