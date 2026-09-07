# # GetAdsSearchTerms200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_id** | **string** |  | [optional]
**data** | [**\Zernio\Model\GetAdsSearchTerms200ResponseDataInner[]**](GetAdsSearchTerms200ResponseDataInner.md) |  | [optional]
**paging** | [**\Zernio\Model\GetAdsSearchTerms200ResponsePaging**](GetAdsSearchTerms200ResponsePaging.md) |  | [optional]
**cached_at** | **\DateTime** | When this data was fetched from Google. Null when it was never served from cache. | [optional]
**stale** | **bool** | True when Google&#39;s daily API quota was exhausted and this is the last successful fetch, not a live read. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
