# # CreatorPortalEconomics

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**metric** | **string** | What the rate pays on. Missing means views. | [optional]
**engagement_types** | **string[]** | The engagements that count. Missing means all four. | [optional]
**organic_views_only** | **bool** | Only organic views count; views from ads do not. | [optional]
**rate_per1k_cents** | **int** |  |
**min_views_to_earn** | **int** |  |
**max_payout_per_clip_cents** | **int** |  | [optional]
**per_approved_post_cents** | **int** |  |
**max_posts_per_participant** | **int** |  | [optional]
**pool_cents** | **int** |  |
**min_views_to_qualify** | **int** |  |
**mode** | **string** |  |
**amount_cents** | **int** |  |
**period** | **string** |  |
**required_approved_posts** | **int** |  |
**commission** | [**\Zernio\Model\CreatorCampaignCommissionTerms**](CreatorCampaignCommissionTerms.md) |  |
**percent_of_sales_bps** | **int** | Share of the sales in basis points: 1500 is 15%. | [optional]
**per_order_cents** | **int** | A flat amount per credited order. | [optional]
**attribution** | **string** | How an order is credited: the creator&#39;s discount code, the last click on their tracking link, or both with the code winning. | [optional] [default to 'code_or_link']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
