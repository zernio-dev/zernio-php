# # GetAdAccountFinance200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_account_id** | **string** |  | [optional]
**currency** | **string** | ISO 4217 code all money values are expressed in. | [optional]
**balance** | **float** | Outstanding/prepaid balance in whole currency units. | [optional]
**amount_spent** | **float** | Lifetime amount spent in whole currency units. | [optional]
**spend_cap** | **float** | Account spend cap; null when none is set. | [optional]
**funding_source** | [**\Zernio\Model\GetAdAccountFinance200ResponseFundingSource**](GetAdAccountFinance200ResponseFundingSource.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
