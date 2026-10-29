# # TreasuryTopup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**method** | **string** |  | [optional]
**purpose** | **string** | &#x60;balance&#x60; funds your balance; &#x60;payout_batch&#x60; is the card payment of one payout batch, which pays its creators directly. | [optional]
**payout_batch** | [**\Zernio\Model\TreasuryTopupPayoutBatch**](TreasuryTopupPayoutBatch.md) |  | [optional]
**fee_covered_by_zernio** | **bool** | True for a &#x60;payout_batch&#x60; payment: Zernio pays the Stripe processing fee out of its transfer fee, so you are credited the whole charge. | [optional]
**amount_cents** | **int** | Gross amount charged | [optional]
**stripe_fee_cents** | **int** | Stripe processing fee you paid; null until Stripe reports it, 0 when Zernio covers it | [optional]
**net_cents** | **int** | Amount credited to your balance: gross minus the Stripe fee, or the whole charge when Zernio covers the fee; null until Stripe reports it | [optional]
**status** | **string** | &#x60;pending&#x60; until the card is charged (or 3D Secure is finished) and credited. &#x60;expired&#x60; means it ended unpaid: cancelled, or 3D Secure left unfinished for 30 minutes. Only &#x60;pending&#x60; counts toward pendingTopupCents. | [optional]
**created_at** | **\DateTime** |  | [optional]
**succeeded_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
