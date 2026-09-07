# # CampaignBidding

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel** | **string** | campaign.advertising_channel_type. COST_CAP&#39;s underlying Google field differs by channel; see bidStrategy on PUT. | [optional]
**bidding_strategy_type** | **string** | Google&#39;s raw enum: MAXIMIZE_CONVERSIONS, TARGET_CPA, MAXIMIZE_CONVERSION_VALUE, TARGET_ROAS, TARGET_SPEND, MANUAL_CPC, TARGET_IMPRESSION_SHARE, or another Google adds later. | [optional]
**bid_spec** | [**\Zernio\Model\CampaignBiddingBidSpec**](CampaignBiddingBidSpec.md) |  | [optional]
**portfolio** | [**\Zernio\Model\CampaignBiddingPortfolio**](CampaignBiddingPortfolio.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
