# # ReplaceAdNegativeKeywordListKeywordsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Zernio SocialAccount id. |
**customer_id** | **string** | Connected Google Ads customer id, without dashes. Required when the connection has multiple customers. | [optional]
**platform** | **string** | Optional courtesy field. The resolved account or campaign determines support; other platforms return 501. | [optional]
**keywords** | [**\Zernio\Model\KeywordEntry[]**](KeywordEntry.md) | Full desired keyword set. Bare strings use broad match. Send [] to clear the list. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
