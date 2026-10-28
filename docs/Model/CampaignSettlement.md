# # CampaignSettlement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entry_id** | **string** | The ledger settlement entry. |
**participant_id** | **string** |  |
**amount_cents** | **int** |  |
**external_reference** | **string** |  |
**payable_cents** | **int** | Payable balance left after this settlement. |
**settled_at** | **\DateTime** |  |
**transfer_id** | **string** | Treasury settlement only: the Zernio transfer that moved the money. The creator receives amountCents in full. | [optional]
**fee_cents** | **int** | Treasury settlement only: the transfer fee, added on top of amountCents. | [optional]
**total_cents** | **int** | Treasury settlement only: debited from your balance, amountCents plus feeCents. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
