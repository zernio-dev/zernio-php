# # UpdateAdSetRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** |  |
**budget** | [**\Zernio\Model\UpdateAdSetRequestBudget**](UpdateAdSetRequestBudget.md) |  | [optional]
**status** | **string** | Omit if not toggling delivery state | [optional]
**bid_strategy** | [**\Zernio\Model\BidStrategy**](BidStrategy.md) | Ad-set-level bid strategy. Overrides the campaign-level default. Supported on Meta (facebook, instagram) and TikTok. On TikTok the Meta-style enum is mapped to bid_type / bid_price / deep_bid_type automatically. Other platforms (linkedin, pinterest, google, twitter) return 501 Not Implemented when bidStrategy is set. | [optional]
**bid_amount** | **float** | Bid cap in WHOLE currency units (USD: 5 &#x3D; $5.00; JPY: 100 &#x3D; ¥100). Required when bidStrategy is LOWEST_COST_WITH_BID_CAP or COST_CAP. Internally converted to Meta&#39;s smallest-denomination integer. | [optional]
**roas_average_floor** | **float** | Minimum ROAS as a decimal multiplier (2.0 &#x3D; 2.0x). Required when bidStrategy is LOWEST_COST_WITH_MIN_ROAS. Sent to Meta as &#x60;bid_constraints.roas_average_floor&#x60; × 10000. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
