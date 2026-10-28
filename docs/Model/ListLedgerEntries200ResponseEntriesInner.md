# # ListLedgerEntries200ResponseEntriesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**kind** | **string** |  | [optional]
**amount_cents** | **int** | Always positive; direction is given by debit and credit | [optional]
**debit** | [**\Zernio\Model\LedgerAccountSide**](LedgerAccountSide.md) |  | [optional]
**credit** | [**\Zernio\Model\LedgerAccountSide**](LedgerAccountSide.md) |  | [optional]
**hold_until** | **\DateTime** |  | [optional]
**released_by_entry_id** | **string** |  | [optional]
**reference_type** | **string** |  | [optional]
**reference_id** | **string** |  | [optional]
**reverses_entry_id** | **string** |  | [optional]
**cause** | **string** |  | [optional]
**actor** | **string** |  | [optional]
**created_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
