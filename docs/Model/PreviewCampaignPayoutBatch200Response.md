# # PreviewCampaignPayoutBatch200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payout_count** | **int** | Creators who would be paid. |
**amount_cents** | **int** | Total the creators receive. |
**fee_cents** | **int** | Zernio fee: 4% per creator, 50 cent minimum. |
**tax_cents** | **int** | VAT on the fee, 0 when none applies. |
**total_cents** | **int** | What the card would be charged: amountCents + feeCents + taxCents. |
**tax_label** | **string** | For example \&quot;VAT 21%\&quot;. Null when there is no tax. |
**reverse_charge** | **bool** | The fee is reverse charged: you account for the VAT. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
