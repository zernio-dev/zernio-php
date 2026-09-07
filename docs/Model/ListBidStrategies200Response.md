# # ListBidStrategies200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_id** | **string** |  | [optional]
**currency** | **string** | Account currency code; money fields are in this currency&#39;s units. | [optional]
**strategies** | [**\Zernio\Model\PortfolioBidStrategy[]**](PortfolioBidStrategy.md) |  | [optional]
**cached_at** | **\DateTime** | When this data was fetched from Google. Null when it was never served from cache. | [optional]
**stale** | **bool** | True when Google&#39;s daily API quota was exhausted and this is the last successful fetch, not a live read. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
