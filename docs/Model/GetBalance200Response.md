# # GetBalance200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**available_cents** | **int** | Your balance. It goes negative after a dispute or refund of a spent top-up, or when pay-per-use already in flight lands past zero. The next top-up covers it. New payout batches are refused while it is negative. | [optional]
**promo_cents** | **int** | Balance billing only (absent otherwise). Promotional and support credit Zernio added to your balance. Pay-per-use spends it before availableCents. It is never paid out to payees and is not part of availableCents. | [optional]
**payout_locked_cents** | **int** | Always 0. The balance no longer pays creators, so none of it is locked from them. | [optional]
**payout_locks** | [**\Zernio\Model\GetBalance200ResponsePayoutLocksInner[]**](GetBalance200ResponsePayoutLocksInner.md) | Always empty. The balance no longer pays creators. | [optional]
**pending_cents** | **int** | Card top-ups paid before 2026-10-29 that were held and are moving to availableCents (within the hour). Always 0 after that. | [optional]
**pending_releases** | [**\Zernio\Model\GetBalance200ResponsePendingReleasesInner[]**](GetBalance200ResponsePendingReleasesInner.md) | The held card top-ups behind pendingCents. | [optional]
**pending_topup_cents** | **int** | Top-ups started but not paid yet. | [optional]
**currency** | **string** |  | [optional]
**recent_topups** | [**\Zernio\Model\TreasuryTopup[]**](TreasuryTopup.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
