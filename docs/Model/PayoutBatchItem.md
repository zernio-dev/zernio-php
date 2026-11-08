# # PayoutBatchItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**participant_id** | **string** |  |
**creator** | [**\Zernio\Model\PayoutBatchItemCreator**](PayoutBatchItemCreator.md) |  |
**amount_cents** | **int** | What the creator receives, in full. |
**fee_cents** | **int** | Zernio fee on top: 4%, 50 cents minimum per payout. |
**total_cents** | **int** | amountCents plus feeCents. |
**status** | **string** | &#x60;skipped&#x60;: payout setup not finished, or the card payment never completed. &#x60;failed&#x60;: Stripe refused the transfer. &#x60;refunded&#x60;: failed or skipped after the card hold; its payout, fee and VAT on the fee went back to the card through a credit note. The amount is payable again in every case. |
**failure_reason** | **string** | Why the item was not paid, in plain words. |
**transfer_id** | **string** | The treasury transfer that paid this item. |
**refunded_cents** | **int** | What went back to the card for a &#x60;refunded&#x60; item: payout, fee and VAT on the fee. Null otherwise. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
