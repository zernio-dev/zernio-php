# # ListAccountCallouts200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_id** | **string** |  | [optional]
**callouts** | [**\Zernio\Model\ListAccountCallouts200ResponseCalloutsInner[]**](ListAccountCallouts200ResponseCalloutsInner.md) |  | [optional]
**cached_at** | **\DateTime** | When this list was fetched from Google. Null when it was never served from cache. | [optional]
**stale** | **bool** | True when Google&#39;s daily API quota was exhausted and this is the last successful fetch, not a live read. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
