# # AmazonSponsoredProductsAdData

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
**default_bid** | **float** | Required for a new ad group. Whole currency units; keywords and targets without their own bid use it. US: 0.02 to 1000. | [optional]
**product_targets** | [**\Zernio\Model\AmazonSponsoredProductsAdDataAllOfProductTargets[]**](AmazonSponsoredProductsAdDataAllOfProductTargets.md) | MANUAL campaigns. Each entry is one Amazon targeting clause: a product (ASIN_SAME_AS), a category (ASIN_CATEGORY_SAME_AS) optionally refined by brand, price, rating or Prime in the same expression. | [optional]
**negative_product_targets** | [**\Zernio\Model\AmazonSponsoredProductsAdDataAllOfNegativeProductTargets[]**](AmazonSponsoredProductsAdDataAllOfNegativeProductTargets.md) |  | [optional]
**auto_targeting** | [**\Zernio\Model\AmazonSponsoredProductsAdDataAllOfAutoTargeting**](AmazonSponsoredProductsAdDataAllOfAutoTargeting.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
