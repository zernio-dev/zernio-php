# # PayoutBatch

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**campaign_id** | **string** |  |
**status** | **string** | &#x60;awaiting_payment&#x60; until the card charge succeeds (3D Secure included); &#x60;paying&#x60; during the 7-day card hold and while transfers go out; then &#x60;paid&#x60;, &#x60;partially_failed&#x60; (some items failed or were skipped), &#x60;failed&#x60; (the card was declined, or none paid) or &#x60;expired&#x60; (the payment was cancelled unpaid, every amount is payable again). |
**method** | **string** |  |
**amount_cents** | **int** | Total the creators receive. |
**fee_cents** | **int** | Total Zernio fee. |
**total_cents** | **int** | amountCents plus feeCents. The card is charged this plus the VAT on the fee where it applies (see the batch invoice). |
**items** | [**\Zernio\Model\PayoutBatchItem[]**](PayoutBatchItem.md) |  |
**paid_at** | **\DateTime** |  |
**releases_at** | **\DateTime** | When the 7-day card hold ends and the creators are paid. Null until the charge succeeds. |
**finished_at** | **\DateTime** |  |
**created_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
