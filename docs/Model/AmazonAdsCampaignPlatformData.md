# # AmazonAdsCampaignPlatformData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_product** | **string** |  |
**targeting_type** | **string** | Required for a new campaign. MANUAL targets keywords and productTargets; AUTO lets Amazon match searches and products (tune them with autoTargeting). Immutable. | [optional]
**bidding_strategy** | **string** | Dynamic bidding: LEGACY_FOR_SALES lowers bids when a sale is unlikely, AUTO_FOR_SALES raises and lowers them (up to +100%), MANUAL keeps them fixed. | [optional] [default to 'LEGACY_FOR_SALES']
**placement_bidding** | [**\Zernio\Model\AmazonSponsoredProductsCampaignDataPlacementBiddingInner[]**](AmazonSponsoredProductsCampaignDataPlacementBiddingInner.md) | Bid increase per placement, added on top of the bid (50 on a 1.00 bid gives 1.50 at the top of search). | [optional]
**portfolio_id** | **string** |  | [optional]
**brand_entity_id** | **string** | The brand (Brand Registry entity) the campaign advertises. Sellers need one. | [optional]
**bid_optimization** | **bool** | Amazon adjusts placement bids itself. Send false to set placementAdjustments. | [optional] [default to true]
**placement_adjustments** | [**\Zernio\Model\AmazonSponsoredBrandsCampaignDataPlacementAdjustmentsInner[]**](AmazonSponsoredBrandsCampaignDataPlacementAdjustmentsInner.md) | Only with bidOptimization false (400 otherwise). | [optional]
**tactic** | **string** | Required for a new campaign. T00020 targets products and categories; T00030 also targets audiences (views, purchases, audience). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
