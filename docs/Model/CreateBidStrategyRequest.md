# # CreateBidStrategyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Google ads SocialAccount id. |
**ad_account_id** | **string** | Platform ad account ID (Google customer ID, digits only). Defaults to the account&#39;s connected customer. | [optional]
**customer_id** | **string** | Alias of adAccountId, kept for existing callers | [optional]
**name** | **string** |  |
**type** | **string** |  |
**target_cpa** | **float** | Required when type is TARGET_CPA, in the account&#39;s currency units. | [optional]
**target_roas** | **float** | Required when type is TARGET_ROAS; a multiplier (2.0 &#x3D; 2.0x). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
