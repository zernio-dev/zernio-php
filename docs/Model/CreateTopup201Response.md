# # CreateTopup201Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**topup_id** | **string** |  |
**amount_cents** | **int** | Charged and credited to your balance once paid. |
**fee_cents** | **int** | Always 0: there is no card fee. Kept for older clients. |
**charged_cents** | **int** | What the card is charged: amountCents. Kept for older clients. |
**fee_is_exact** | **bool** | Always true. Kept for older clients. |
**status** | **string** |  |
**client_secret** | **string** | PaymentIntent client secret for Stripe.js handleNextAction; set only when status is requires_action |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
