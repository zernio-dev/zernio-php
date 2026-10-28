# # CampaignLedgerEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**kind** | **string** |  |
**amount_cents** | **int** | Always positive; direction is given by debit and credit. |
**debit** | [**\Zernio\Model\LedgerAccountSide**](LedgerAccountSide.md) |  |
**credit** | [**\Zernio\Model\LedgerAccountSide**](LedgerAccountSide.md) |  |
**hold_until** | **\DateTime** |  |
**released_by_entry_id** | **string** |  |
**reverses_entry_id** | **string** |  |
**reference_type** | **string** |  |
**reference_id** | **string** |  |
**cause** | **string** |  |
**external_reference** | **string** | The payout reference recorded with a settlement (your transfer or invoice id). |
**actor** | **string** |  |
**created_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
