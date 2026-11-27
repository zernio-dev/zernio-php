# # AddAdKeywordsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stage** | **bool** | Send true to store this write as a staged change instead of applying it. The response is &#x60;202&#x60; with the change, and POST /v1/ads/changes/{changeId}/confirm applies it later. Cannot be combined with &#x60;validateOnly&#x60;. | [optional]
**account_id** | **string** | Account ID (Google Ads) |
**ad_set_id** | **string** | Google ad group ID to add the keywords to |
**keywords** | [**\Zernio\Model\AddAdKeywordsRequestKeywordsInner[]**](AddAdKeywordsRequestKeywordsInner.md) |  |
**negative** | **bool** | Add as ad-group-level negatives instead of positive keywords | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
