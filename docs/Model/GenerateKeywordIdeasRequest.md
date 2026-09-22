# # GenerateKeywordIdeasRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Zernio googleads SocialAccount id. |
**ad_account_id** | **string** | Platform ad account ID (Google customer ID, digits only). | [optional]
**customer_id** | **string** | Alias of adAccountId, kept for existing callers | [optional]
**seed_keywords** | **string[]** | Seed terms. Provide these, seedUrl, or both. | [optional]
**seed_url** | **string** | Landing page to mine for ideas. Provide this, seedKeywords, or both. | [optional]
**countries** | **string[]** | ISO 3166-1 alpha-2 country codes. Omitted &#x3D; worldwide. | [optional]
**language_constant_id** | **string** | Google languageConstant id (1000 &#x3D; English). | [optional] [default to '1000']
**network** | **string** |  | [optional] [default to 'GOOGLE_SEARCH']
**include_adult_keywords** | **bool** |  | [optional]
**page_size** | **int** |  | [optional]
**page_token** | **string** | Cursor from paging.nextPageToken of the previous page. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
