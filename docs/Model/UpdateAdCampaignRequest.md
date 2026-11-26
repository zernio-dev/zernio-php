# # UpdateAdCampaignRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stage** | **bool** | Send true to stage this change instead of applying it. Nothing is written to the ad network; the response is &#x60;202&#x60; with the staged change and its diff. Apply it with POST /v1/ads/changes/{changeId}/confirm. Meta, Google, TikTok, X, Snapchat and Reddit; cannot be combined with &#x60;validateOnly&#x60; or &#x60;dryRun&#x60;. | [optional]
**platform** | **string** | Required: platform campaign IDs are not globally unique. |
**account_id** | **string** | **Meta only.** Zernio SocialAccount id owning the ad account. Needed only for an EMPTY campaign (zero ads); ignored otherwise. | [optional]
**bid_strategy** | [**\Zernio\Model\BidStrategy**](BidStrategy.md) | **Meta, Google and AppLovin.**  - Meta: the campaign default that ad sets inherit unless they override it. - Google: the campaign&#39;s own bidding strategy. LOWEST_COST_WITHOUT_CAP &#x3D; Maximize Conversions, COST_CAP + bidAmount &#x3D; Target CPA, LOWEST_COST_WITH_MIN_ROAS + roasAverageFloor &#x3D; Target ROAS, LOWEST_COST_WITH_BID_CAP + bidAmount &#x3D; Maximize Clicks with a CPC ceiling. - Google: portfolioBidStrategyId attaches a portfolio strategy instead. - AppLovin: sets the campaign goal value; the goal type itself cannot change. COST_CAP + bidAmount for a CPI, CPE or CPP goal, LOWEST_COST_WITH_MIN_ROAS + roasAverageFloor for a ROAS goal. - AppLovin app limits, checked before AppLovin is called: CPI below 200, CPE and CPP below 500, AD_ROAS at least 0.1, CHK_ROAS at least 0.01, BLD_ROAS at least 0.05. - AppLovin: a goal set per country, or the other goal family, is a 422. | [optional]
**bid_amount** | **float** | **Google and AppLovin.** Whole currency units (USD: 12 &#x3D; $12.00). Google: max CPC for LOWEST_COST_WITH_BID_CAP, CPA target for COST_CAP; required for both. AppLovin: the CPI, CPE or CPP goal value, with COST_CAP. | [optional]
**roas_average_floor** | **float** | **Google and AppLovin.** Decimal ROAS multiplier (2.0 &#x3D; 2.0x), required for LOWEST_COST_WITH_MIN_ROAS. AppLovin: the ROAS goal value. | [optional]
**portfolio_bid_strategy_id** | **string** | **Google only.** Attach an existing portfolio bid strategy (numeric id from GET /v1/ads/bid-strategies) instead of setting bidStrategy. Exclusive with bidStrategy. | [optional]
**allow_shared_budget_update** | **bool** | Google only. Explicitly allow changing a shared campaign budget (flagged as shared by Google, or used by more than one campaign), affecting every campaign that uses it. Does not bypass an unknown sharing state. Also required to move a campaign onto a shared budget with sharedBudgetId. | [optional] [default to false]
**target_impression_share** | [**\Zernio\Model\GoogleTargetImpressionShare**](GoogleTargetImpressionShare.md) | Google Search only. Target impression share bidding. Exclusive with bidStrategy, portfolioBidStrategyId and manualCpc; bidAmount is refused alongside it (the ceiling is maxCpc). | [optional]
**manual_cpc** | [**\Zernio\Model\GoogleManualCpc**](GoogleManualCpc.md) |  | [optional]
**network_settings** | [**\Zernio\Model\GoogleNetworkSettings**](GoogleNetworkSettings.md) |  | [optional]
**tracking_url_template** | **string** | **Google only.** campaign.tracking_url_template; an empty string clears it. | [optional]
**final_url_suffix** | **string** | **Google only.** campaign.final_url_suffix; an empty string clears it. | [optional]
**shared_budget_id** | **string** | **Google only.** Move the campaign onto this shared budget (id from GET /v1/ads/shared-budgets), or null to move it back onto a budget of its own sized by &#x60;budget&#x60;. | [optional]
**budget** | [**\Zernio\Model\UpdateAdCampaignRequestBudget**](UpdateAdCampaignRequestBudget.md) |  | [optional]
**name** | **string** | **Meta, Reddit and AppLovin.** Rename the campaign. | [optional]
**platform_specific_data** | [**\Zernio\Model\UpdateAdCampaignRequestPlatformSpecificData**](UpdateAdCampaignRequestPlatformSpecificData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
