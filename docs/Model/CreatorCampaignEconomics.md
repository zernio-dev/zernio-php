# # CreatorCampaignEconomics

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**metric** | **string** |  |
**engagement_types** | **string[]** | With &#x60;metric: engagements&#x60;, the engagements that count. Missing means all four, and sending it on a views campaign answers 400. YouTube reports likes and comments only, Facebook and Threads have no saves, and Pinterest reports saves only. | [optional]
**organic_views_only** | **bool** | Count only organic views: views from ads the creator ran do not earn. Every campaign platform must be YouTube or X, which report ad views per post, or the request answers 400. A post earns nothing until its ad views were first read. | [optional] [default to false]
**rate_per1k_cents** | **int** |  |
**min_views_to_earn** | **int** | The count a post must reach before it earns, in the campaign metric (views or engagements). |
**max_payout_per_clip_cents** | **int** |  | [optional]
**budget_cents** | **int** |  |
**per_approved_post_cents** | **int** |  |
**max_posts_per_participant** | **int** |  | [optional]
**min_views_to_qualify** | **int** |  |
**rate_bps** | **int** | Basis points of the spend or purchase value: 1000 is 10%. | [optional]
**cents_per_unit** | **int** | Cents per purchase or click, or per 1,000 impressions. | [optional]
**max_payout_per_post_cents** | **int** |  | [optional]
**mode** | **string** | &#x60;standard&#x60; pays &#x60;amountCents&#x60; per period. &#x60;smart&#x60; guarantees it: the commission the creator earned in the period is topped up to &#x60;amountCents&#x60;. Smart needs &#x60;commission&#x60; and a linked store. | [optional] [default to 'standard']
**amount_cents** | **int** |  |
**period** | **string** | Weeks start Monday 00:00 UTC, months on the 1st. A period is paid within a day after it ends. A standard &#x60;once&#x60; retainer pays as soon as the posts are approved; a smart one when the campaign ends. |
**required_approved_posts** | **int** | Posts approved within the period that it needs. 0 pays without posts. |
**commission** | [**\Zernio\Model\CreatorCampaignCommissionTerms**](CreatorCampaignCommissionTerms.md) |  | [optional]
**percent_of_sales_bps** | **int** | Share of the sales in basis points: 1500 is 15%. | [optional]
**per_order_cents** | **int** | A flat amount per credited order. | [optional]
**attribution** | **string** | How an order is credited: the creator&#39;s discount code, the last click on their tracking link, or both with the code winning. | [optional] [default to 'code_or_link']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
