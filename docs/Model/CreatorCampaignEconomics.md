# # CreatorCampaignEconomics

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**metric** | **string** | What the rate pays on. &#x60;engagements&#x60; counts the &#x60;engagementTypes&#x60; as each platform reports them, and &#x60;minViewsToEarn&#x60; then applies to engagements. Fixed once the campaign leaves draft. | [optional] [default to 'views']
**engagement_types** | **string[]** | With &#x60;metric: engagements&#x60;, the engagements that count. Missing means all four, and sending it on a views campaign answers 400. YouTube reports likes and comments only, Facebook and Threads have no saves, and Pinterest reports saves only. | [optional]
**organic_views_only** | **bool** | Count only organic views: views from ads the creator ran do not earn. Every campaign platform must be YouTube or X, which report ad views per post, or the request answers 400. A post earns nothing until its ad views were first read. | [optional] [default to false]
**rate_per1k_cents** | **int** |  |
**min_views_to_earn** | **int** | The count a post must reach before it earns, in the campaign metric (views or engagements). |
**max_payout_per_clip_cents** | **int** |  | [optional]
**budget_cents** | **int** |  |
**per_approved_post_cents** | **int** |  |
**max_posts_per_participant** | **int** |  | [optional]
**min_views_to_qualify** | **int** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
