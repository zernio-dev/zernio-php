# # UpdateAdCampaignRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** | Required: platform campaign IDs are not globally unique. |
**account_id** | **string** | **Meta only.** Zernio SocialAccount id owning the ad account. Needed only for an EMPTY campaign (zero ads); ignored otherwise. | [optional]
**bid_strategy** | [**\Zernio\Model\BidStrategy**](BidStrategy.md) | **Meta + Google.** On Meta, the campaign default that ad sets inherit unless they override it. On Google, the campaign&#39;s own bidding strategy. On Google: LOWEST_COST_WITHOUT_CAP &#x3D; Maximize Conversions, COST_CAP + bidAmount &#x3D; Target CPA, LOWEST_COST_WITH_MIN_ROAS + roasAverageFloor &#x3D; Target ROAS, LOWEST_COST_WITH_BID_CAP + bidAmount &#x3D; Maximize Clicks with a CPC ceiling; portfolioBidStrategyId attaches a portfolio strategy instead. | [optional]
**bid_amount** | **float** | **Google only.** Whole currency units (USD: 12 &#x3D; $12.00). Max CPC for LOWEST_COST_WITH_BID_CAP, CPA target for COST_CAP; required for both. | [optional]
**roas_average_floor** | **float** | **Google only.** Decimal ROAS multiplier (2.0 &#x3D; 2.0x), required for LOWEST_COST_WITH_MIN_ROAS. | [optional]
**portfolio_bid_strategy_id** | **string** | **Google only.** Attach an existing portfolio bid strategy (numeric id from GET /v1/ads/bid-strategies) instead of setting bidStrategy. Exclusive with bidStrategy. | [optional]
**budget** | [**\Zernio\Model\UpdateAdCampaignRequestBudget**](UpdateAdCampaignRequestBudget.md) |  | [optional]
**name** | **string** | **Meta only.** Rename the campaign. | [optional]
**platform_specific_data** | [**\Zernio\Model\UpdateAdCampaignRequestPlatformSpecificData**](UpdateAdCampaignRequestPlatformSpecificData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
