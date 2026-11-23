# # AmazonSponsoredBrandsCampaignData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_product** | **string** |  |
**brand_entity_id** | **string** | The brand (Brand Registry entity) the campaign advertises. Sellers need one. | [optional]
**bid_optimization** | **bool** | Amazon adjusts placement bids itself. Send false to set placementAdjustments. | [optional] [default to true]
**placement_adjustments** | [**\Zernio\Model\AmazonSponsoredBrandsCampaignDataPlacementAdjustmentsInner[]**](AmazonSponsoredBrandsCampaignDataPlacementAdjustmentsInner.md) | Only with bidOptimization false (400 otherwise). | [optional]
**portfolio_id** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
