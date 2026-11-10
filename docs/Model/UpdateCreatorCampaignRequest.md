# # UpdateCreatorCampaignRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**brand_name** | **string** |  | [optional]
**platforms** | **string[]** |  | [optional]
**content_rules** | **string** |  | [optional]
**starts_at** | **\DateTime** |  | [optional]
**ends_at** | **\DateTime** |  | [optional]
**tracking_days** | **int** |  | [optional]
**hold_days** | **int** |  | [optional]
**max_post_age_minutes** | **int** | Null removes the limit. | [optional]
**settlement** | **string** |  | [optional]
**economics** | [**\Zernio\Model\CreatorCampaignEconomics**](CreatorCampaignEconomics.md) |  | [optional]
**caps** | [**\Zernio\Model\CreatorCampaignCaps**](CreatorCampaignCaps.md) |  | [optional]
**branding** | [**\Zernio\Model\CreatorCampaignBranding**](CreatorCampaignBranding.md) |  | [optional]
**landing_url** | **string** | The page creator tracking links open. Required unless &#x60;attribution&#x60; is &#x60;code&#x60;. | [optional]
**code_discount_percent** | **int** | What each creator&#39;s discount code takes off an order. Required unless &#x60;attribution&#x60; is &#x60;link&#x60;. | [optional]
**auto_payout** | [**\Zernio\Model\CreatorCampaignAutoPayout**](CreatorCampaignAutoPayout.md) |  | [optional]
**join_approval** | **string** | manual holds creators who join through the open link as &#x60;pending&#x60; until you approve them. Personal invites are never held. | [optional]
**require_draft_approval** | **bool** | Creators upload a draft for review before publishing, and each submitted post must name an approved draft. | [optional]
**store_account_id** | **string** | A connected Shopify or WooCommerce store account. On &#x60;commission&#x60; and smart &#x60;retainer&#x60; economics its orders pay commission: required there, and fixed once such a campaign leaves draft.  On any campaign creators can ask for free samples of its products (&#x60;sampleProductIds&#x60;). Changing it without &#x60;sampleProductIds&#x60; clears the sample products; null removes the store and the products. | [optional]
**sample_product_ids** | **string[]** | Product ids in the store that creators can ask a free sample of. Each is read from the store and saved as &#x60;sampleProducts&#x60;; an unknown product answers 404 &#x60;product_not_found&#x60;. Needs a store, otherwise 400 &#x60;missing_required_field&#x60; (&#x60;param: storeAccountId&#x60;). | [optional]
**sample_content_due_days** | **int** | Days after a sample is approved before a creator with no post since shows as owing content. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
