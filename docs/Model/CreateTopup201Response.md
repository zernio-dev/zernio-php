# # CreateTopup201Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**topup_id** | **string** |  |
**amount_cents** | **int** | Credited to your balance once paid: exactly this when feeIsExact, else at least this. |
**fee_cents** | **int** | Card fee, charged on top of amountCents. |
**charged_cents** | **int** | What the card is charged: amountCents plus feeCents. |
**fee_is_exact** | **bool** | True when feeCents is exactly Stripe&#39;s fee for this card. False when it is the region&#39;s highest rate, so Stripe may take less and the difference is added to your balance. |
**status** | **string** |  |
**client_secret** | **string** | PaymentIntent client secret for Stripe.js handleNextAction; set only when status is requires_action |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
