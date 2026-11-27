# # EditAdNegativeKeywordListKeywordsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stage** | **bool** | Send true to store this write as a staged change instead of applying it. The response is &#x60;202&#x60; with the change, and POST /v1/ads/changes/{changeId}/confirm applies it later. Cannot be combined with &#x60;validateOnly&#x60;. | [optional]
**account_id** | **string** | Zernio SocialAccount id. |
**ad_account_id** | **string** | Platform ad account ID (Google customer ID, digits only). Required when the connection has multiple customers. | [optional]
**customer_id** | **string** | Alias of adAccountId, kept for existing callers | [optional]
**platform** | **string** | Optional courtesy field. The resolved account or campaign determines support; other platforms return 501. | [optional]
**add** | [**\Zernio\Model\KeywordEntry[]**](KeywordEntry.md) | Keywords to add. Send at least one entry in add or remove. | [optional]
**remove** | [**\Zernio\Model\KeywordEntry[]**](KeywordEntry.md) | Keywords to remove. Bare strings mean broad match. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
