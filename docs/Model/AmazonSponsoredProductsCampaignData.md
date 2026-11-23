# # AmazonSponsoredProductsCampaignData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_product** | **string** |  |
**targeting_type** | **string** | Required for a new campaign. MANUAL targets keywords and productTargets; AUTO lets Amazon match searches and products (tune them with autoTargeting). Immutable. | [optional]
**bidding_strategy** | **string** | Dynamic bidding: LEGACY_FOR_SALES lowers bids when a sale is unlikely, AUTO_FOR_SALES raises and lowers them (up to +100%), MANUAL keeps them fixed. | [optional] [default to 'LEGACY_FOR_SALES']
**placement_bidding** | [**\Zernio\Model\AmazonSponsoredProductsCampaignDataPlacementBiddingInner[]**](AmazonSponsoredProductsCampaignDataPlacementBiddingInner.md) | Bid increase per placement, added on top of the bid (50 on a 1.00 bid gives 1.50 at the top of search). | [optional]
**portfolio_id** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
