# # CreateTopup201Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**topup_id** | **string** |  |
**amount_cents** | **int** | Credited to your balance once paid. |
**tax_cents** | **int** | Tax added on top of amountCents (VAT where it applies). 0 when reverse charged or outside the EU. |
**total_cents** | **int** | What the card is charged: amountCents + taxCents. |
**tax_label** | **string** | The tax and its rate, for example \&quot;VAT 21%\&quot;. Null when no tax is charged. |
**reverse_charge** | **bool** | True for an EU business whose VAT id VIES confirms: no VAT is charged and the invoice says reverse charge (inversión del sujeto pasivo). |
**fee_cents** | **int** | Always 0: there is no card fee. Kept for older clients. |
**charged_cents** | **int** | Same as totalCents. Kept for older clients. |
**fee_is_exact** | **bool** | Always true. Kept for older clients. |
**status** | **string** |  |
**client_secret** | **string** | PaymentIntent client secret for Stripe.js handleNextAction; set only when status is requires_action |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
