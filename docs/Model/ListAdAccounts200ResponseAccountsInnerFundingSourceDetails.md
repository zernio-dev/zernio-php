# # ListAdAccounts200ResponseAccountsInnerFundingSourceDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Meta&#39;s ID for the funding instrument. Matches &#x60;fundingSource&#x60;. | [optional]
**display_string** | **string** | Meta&#39;s own human-readable label for the funding instrument, e.g. &#39;Available Balance (EUR)&#39; or a masked card. Meta composes this string; do not parse it. | [optional]
**type** | **int** | Meta&#39;s raw numeric funding-source type, forwarded unchanged. Meta publishes no mapping from these numbers to payment-method kinds, so none is documented here and none should be inferred. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
