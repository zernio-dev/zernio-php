# # EditCampaignNegativeKeywordsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** | Optional and NOT authoritative: the resolved campaign&#39;s own platform decides 200 vs 501, never this hint. | [optional]
**add** | [**\Zernio\Model\KeywordEntry[]**](KeywordEntry.md) | Negative keywords to add. Send at least one entry in add or remove. | [optional]
**remove** | [**\Zernio\Model\KeywordEntry[]**](KeywordEntry.md) | Negative keywords to remove. Bare strings mean broad match. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
