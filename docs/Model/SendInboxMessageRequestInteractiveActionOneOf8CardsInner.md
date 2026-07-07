# # SendInboxMessageRequestInteractiveActionOneOf8CardsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_index** | **int** | Card position. Auto-filled sequentially when omitted. | [optional]
**type** | **string** | &#x60;product&#x60; for a product card; media cards use &#x60;cta_url&#x60; or a quick-reply type. | [optional]
**header** | **object** | Media cards only | [optional]
**body** | **object** | Optional card body text. | [optional]
**action** | **object** | Product cards: &#x60;{ catalog_id, product_retailer_id }&#x60; (required). Media cards: the card&#39;s button action (e.g. &#x60;cta_url&#x60; with &#x60;parameters.display_text&#x60; and &#x60;parameters.url&#x60;). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
