# # TreasuryTopup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**method** | **string** |  | [optional]
**purpose** | **string** | &#x60;balance&#x60; funds your balance; &#x60;payout_batch&#x60; is the card payment of one payout batch, which pays its creators directly. | [optional]
**payout_batch** | [**\Zernio\Model\TreasuryTopupPayoutBatch**](TreasuryTopupPayoutBatch.md) |  | [optional]
**fee_covered_by_zernio** | **bool** | True for a balance top-up (there is no card fee) and a &#x60;payout_batch&#x60; payment: Zernio pays the Stripe processing fee, so you are credited the whole charge. False on a top-up made before 2026-11-05. | [optional]
**amount_cents** | **int** | The amount you asked for. A top-up charges exactly this and credits it whole. Top-ups from 2026-11-02 to 2026-11-05 charged a card fee on top and credited what Stripe delivered; older ones charged this amount and credited it minus the fee. | [optional]
**fee_cents** | **int** | Card fee you paid: 0 when Zernio covers it (feeCoveredByZernio). On an older top-up, the fee Stripe took once paid, the fee charged on top before, or null. | [optional]
**charged_cents** | **int** | What your card was charged: amountCents, or amountCents plus the card fee on a top-up from 2026-11-02 to 2026-11-05. | [optional]
**stripe_fee_cents** | **int** | feeCents once the top-up is paid; null before. Kept for older clients: read feeCents. | [optional]
**net_cents** | **int** | Amount credited to your balance; null until paid. amountCents when feeCoveredByZernio; on an older top-up, what Stripe delivered. | [optional]
**status** | **string** | &#x60;pending&#x60; until the card is charged (or 3D Secure is finished) and credited. &#x60;expired&#x60; means it ended unpaid: cancelled, or 3D Secure left unfinished for 30 minutes. Only &#x60;pending&#x60; counts toward pendingTopupCents. | [optional]
**created_at** | **\DateTime** |  | [optional]
**succeeded_at** | **\DateTime** |  | [optional]
**has_invoice** | **bool** | A Checkout invoice exists for this payment (Checkout payments before 2026-10-29). Every paid payment has a card receipt (getTopupReceipt); a paid top-up has a statement (getTopupStatement). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
