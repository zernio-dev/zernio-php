# # TreasuryTransfer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**payee_id** | **string** | 24-character payee id | [optional]
**payee_name** | **string** | The payee&#39;s name when Zernio knows it, for example a creator&#39;s display name in one of your creator campaigns; null otherwise | [optional]
**destination_type** | **string** |  | [optional]
**amount_cents** | **int** | Amount the payee receives, in full | [optional]
**fee_cents** | **int** | Zernio fee added on top: 4%, 50 cents minimum per payout. | [optional]
**total_cents** | **int** | amountCents plus feeCents, both paid by the payout batch card charge | [optional]
**currency** | **string** |  | [optional]
**reference** | [**\Zernio\Model\TreasuryTransferReference**](TreasuryTransferReference.md) |  | [optional]
**status** | **string** |  | [optional]
**failure_reason** | **string** |  | [optional]
**created_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
