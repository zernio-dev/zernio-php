# # SettleCampaignParticipantRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount_cents** | **int** | Defaults to the whole payable balance. | [optional]
**external_reference** | **string** | Your payout id. Required when the campaign settles externally. | [optional]
**record_only** | **bool** | Treasury campaigns only: record a payout you already made outside Zernio, without moving money. Ignored on other settlement modes, which always record. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
