# # GetAdAccountHierarchy200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  | [optional]
**roots** | [**\Zernio\Model\GetAdAccountHierarchy200ResponseRootsInner[]**](GetAdAccountHierarchy200ResponseRootsInner.md) |  | [optional]
**direct_customers** | [**\Zernio\Model\GetAdAccountHierarchy200ResponseDirectCustomersInner[]**](GetAdAccountHierarchy200ResponseDirectCustomersInner.md) |  | [optional]
**unavailable** | [**\Zernio\Model\GetAdAccountHierarchy200ResponseUnavailableInner[]**](GetAdAccountHierarchy200ResponseUnavailableInner.md) |  | [optional]
**truncated** | **bool** |  | [optional]
**cached_at** | **\DateTime** | When this data was fetched from Google. Null on a live read. | [optional]
**stale** | **bool** | True when Google&#39;s quota was exhausted and this is the last successful fetch. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
