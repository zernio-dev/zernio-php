# # AmazonAdsPlatformData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_product** | **string** |  |
**targeting_type** | **string** | Required for a new campaign. MANUAL targets keywords and productTargets; AUTO lets Amazon match searches and products (tune them with autoTargeting). Immutable. | [optional]
**bidding_strategy** | **string** | Dynamic bidding: LEGACY_FOR_SALES lowers bids when a sale is unlikely, AUTO_FOR_SALES raises and lowers them (up to +100%), MANUAL keeps them fixed. | [optional] [default to 'LEGACY_FOR_SALES']
**placement_bidding** | [**\Zernio\Model\AmazonSponsoredProductsCampaignDataPlacementBiddingInner[]**](AmazonSponsoredProductsCampaignDataPlacementBiddingInner.md) | Bid increase per placement, added on top of the bid (50 on a 1.00 bid gives 1.50 at the top of search). | [optional]
**portfolio_id** | **string** |  | [optional]
**asins** | **string[]** | Vendor profiles: the ASINs to advertise, one product ad each. | [optional]
**skus** | **string[]** | Seller profiles: the SKUs to advertise, one product ad each. Sending the identifier the profile does not use returns a 400. | [optional]
**default_bid** | **float** | US: 0.02 to 1000 per click, 1 to 1000 per thousand viewable impressions (goal awareness). | [optional]
**product_targets** | [**\Zernio\Model\AmazonSponsoredBrandsAdDataAllOfProductTargets[]**](AmazonSponsoredBrandsAdDataAllOfProductTargets.md) |  | [optional]
**negative_product_targets** | [**\Zernio\Model\AmazonSponsoredBrandsAdDataAllOfNegativeProductTargets[]**](AmazonSponsoredBrandsAdDataAllOfNegativeProductTargets.md) |  | [optional]
**auto_targeting** | [**\Zernio\Model\AmazonSponsoredProductsAdDataAllOfAutoTargeting**](AmazonSponsoredProductsAdDataAllOfAutoTargeting.md) |  | [optional]
**brand_entity_id** | **string** | The brand (Brand Registry entity) the campaign advertises. Sellers need one. | [optional]
**bid_optimization** | **bool** | Amazon adjusts placement bids itself. Send false to set placementAdjustments. | [optional] [default to true]
**placement_adjustments** | [**\Zernio\Model\AmazonSponsoredBrandsCampaignDataPlacementAdjustmentsInner[]**](AmazonSponsoredBrandsCampaignDataPlacementAdjustmentsInner.md) | Only with bidOptimization false (400 otherwise). | [optional]
**ad** | [**\Zernio\Model\AmazonSponsoredBrandsAdDataAllOfAd**](AmazonSponsoredBrandsAdDataAllOfAd.md) |  | [optional]
**tactic** | **string** | Required for a new campaign. T00020 targets products and categories; T00030 also targets audiences (views, purchases, audience). | [optional]
**targets** | [**\Zernio\Model\AmazonSponsoredDisplayAdDataAllOfTargets[]**](AmazonSponsoredDisplayAdDataAllOfTargets.md) | Required for a new ad group. Each entry is one Amazon targeting clause, in Amazon&#39;s own shape:  - Contextual: &#x60;{ type: similarProduct }&#x60;, &#x60;{ type: asinSameAs, value: B0... }&#x60;, &#x60;{ type: asinCategorySameAs, value: \&quot;12345\&quot; }&#x60; with optional brand, price or rating refinements in the same expression, &#x60;{ type: contentCategorySameAs, value: \&quot;amzn1.iab-content.325\&quot; }&#x60;. - Audiences (tactic T00030 only): &#x60;{ type: views | purchases, value: [{ type: exactProduct | similarProduct | relatedProduct | asinCategorySameAs ... }, { type: lookback, value: \&quot;30\&quot; }] }&#x60;, or &#x60;{ type: audience, value: [{ type: audienceSameAs, value: \&quot;&lt;audience id&gt;\&quot; }] }&#x60; for in-market and lifestyle audiences. | [optional]
**negative_targets** | [**\Zernio\Model\AmazonSponsoredBrandsAdDataAllOfNegativeProductTargets[]**](AmazonSponsoredBrandsAdDataAllOfNegativeProductTargets.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
