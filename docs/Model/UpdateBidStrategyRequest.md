# # UpdateBidStrategyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Google ads SocialAccount id. |
**ad_account_id** | **string** | Platform ad account ID (Google customer ID, digits only). Defaults to the account&#39;s connected customer. | [optional]
**customer_id** | **string** | Alias of adAccountId, kept for existing callers | [optional]
**name** | **string** |  | [optional]
**type** | **string** |  | [optional]
**target_cpa** | **float** |  | [optional]
**target_roas** | **float** |  | [optional]
**target_impression_share** | [**\Zernio\Model\GoogleTargetImpressionShare**](GoogleTargetImpressionShare.md) | Retargets a TARGET_IMPRESSION_SHARE strategy; location, percent and maxCpc are all written. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
