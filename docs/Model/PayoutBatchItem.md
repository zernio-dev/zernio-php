# # PayoutBatchItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**participant_id** | **string** |  |
**creator** | [**\Zernio\Model\PayoutBatchItemCreator**](PayoutBatchItemCreator.md) |  |
**amount_cents** | **int** | What the creator receives, in full. |
**fee_cents** | **int** | Zernio fee on top: 4% with a 50 cent minimum. |
**total_cents** | **int** | amountCents plus feeCents. |
**status** | **string** | &#x60;skipped&#x60;: not paid because payout setup was not finished, or the card payment never completed; the amount is payable again. &#x60;failed&#x60;: Stripe refused the transfer; the amount is payable again. |
**failure_reason** | **string** | Why the item was not paid, in plain words. |
**transfer_id** | **string** | The treasury transfer that paid this item. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
