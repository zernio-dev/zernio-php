# # GetBalance200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**available_cents** | **int** | Your balance. It goes negative after a dispute or refund of funds already spent, or when pay-per-use already in flight lands past zero. The next funds you add cover it. New payout batches are refused while it is negative. | [optional]
**balance_billing** | **bool** | True when the account pays pay-per-use from this prepaid balance (new signups). Absent otherwise: that pay-per-use is on the monthly invoice. | [optional]
**spendable_cents** | **int** | Balance billing only (absent otherwise). What pay-per-use can still spend: availableCents plus promoCents, minus usage not yet posted. At 0 or below, new pay-per-use answers 402 &#x60;insufficient_balance&#x60;. | [optional]
**promo_cents** | **int** | Balance billing only (absent otherwise). Promotional and support credit Zernio added to your balance. Pay-per-use spends it before availableCents. It is never paid out to payees and is not part of availableCents. | [optional]
**held** | [**\Zernio\Model\GetBalance200ResponseHeld**](GetBalance200ResponseHeld.md) |  | [optional]
**payout_locked_cents** | **int** | Always 0. The balance no longer pays creators, so none of it is locked from them. | [optional]
**payout_locks** | [**\Zernio\Model\GetBalance200ResponsePayoutLocksInner[]**](GetBalance200ResponsePayoutLocksInner.md) | Always empty. The balance no longer pays creators. | [optional]
**pending_cents** | **int** | Card top-ups paid before 2026-10-29 that were held and are moving to availableCents (within the hour). Always 0 after that. | [optional]
**pending_releases** | [**\Zernio\Model\GetBalance200ResponsePendingReleasesInner[]**](GetBalance200ResponsePendingReleasesInner.md) | The held card top-ups behind pendingCents. | [optional]
**pending_topup_cents** | **int** | Top-ups started but not paid yet. | [optional]
**currency** | **string** |  | [optional]
**recent_topups** | [**\Zernio\Model\TreasuryTopup[]**](TreasuryTopup.md) |  | [optional]
**recent_credit_recharges** | [**\Zernio\Model\GetBalance200ResponseRecentCreditRechargesInner[]**](GetBalance200ResponseRecentCreditRechargesInner.md) | Balance billing only (absent otherwise). The 10 newest auto top-ups paid from the account credit you held when you moved to the balance, newest first. Nothing was charged to your card and there is no invoice. The amount was added to promoCents with the credit&#39;s own expiry. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
