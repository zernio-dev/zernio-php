# # CreateStandaloneAdRequestPlatformSpecificData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cost_type** | **string** | Campaign cost model (billing event). Defaults to &#x60;CPM&#x60;. Required when &#x60;unitCost&#x60; is set so the manual bid applies to an explicit cost model. | [optional]
**unit_cost** | **float** | Manual bid in WHOLE account-currency units (e.g. 2.5 &#x3D; $2.50). Requires &#x60;costType&#x60;. Omit for LinkedIn&#39;s automated (max delivery) bidding. LinkedIn enforces its own per-audience min/max bid bounds. | [optional]
**optimization_target_type** | **string** | Campaign &#x60;optimizationTargetType&#x60; (e.g. &#x60;MAX_CLICK&#x60;, &#x60;TARGET_COST_PER_CLICK&#x60;, &#x60;MAX_IMPRESSION&#x60;). Forwarded verbatim, LinkedIn validates compatibility with the objective and &#x60;costType&#x60;. Omit for the objective-derived default: &#x60;awareness&#x60; gets &#x60;MAX_IMPRESSION&#x60;, &#x60;video_views&#x60; gets &#x60;MAX_VIDEO_VIEW&#x60;, and every other goal gets &#x60;MAX_CLICK&#x60;. &#x60;lead_generation&#x60; and &#x60;conversions&#x60; also get &#x60;MAX_CLICK&#x60;, because &#x60;MAX_LEAD&#x60; and &#x60;MAX_CONVERSION&#x60; need a lead gen form or a conversion rule that neither creation flow attaches. The default applies only to &#x60;SPONSORED_UPDATES&#x60; campaigns (every boost, and the image, video and carousel standalone ads), never to the &#x60;TEXT_AD&#x60;, &#x60;DYNAMIC&#x60; and &#x60;SPONSORED_INMAILS&#x60; campaigns the other creative formats produce. It is also skipped when &#x60;unitCost&#x60; or a non-&#x60;CPM&#x60; &#x60;costType&#x60; is set, since those select manual bidding and the bid is then yours to choose. | [optional]
**creative_selection** | **string** | How LinkedIn rotates creatives within the campaign. Defaults to &#x60;OPTIMIZED&#x60;. | [optional]
**audience_expansion_enabled** | **bool** | Enable LinkedIn audience expansion. Defaults to false. | [optional]
**offsite_delivery_enabled** | **bool** | Deliver on the LinkedIn Audience Network. Defaults to false. | [optional]
**connected_television_only** | **bool** | Restrict delivery to Connected TV inventory. | [optional]
**carousel** | [**\Zernio\Model\LinkedInAdsPlatformDataCarousel**](LinkedInAdsPlatformDataCarousel.md) |  | [optional]
**document** | [**\Zernio\Model\LinkedInAdsPlatformDataDocument**](LinkedInAdsPlatformDataDocument.md) |  | [optional]
**spotlight** | [**\Zernio\Model\LinkedInAdsPlatformDataSpotlight**](LinkedInAdsPlatformDataSpotlight.md) |  | [optional]
**follower** | [**\Zernio\Model\LinkedInAdsPlatformDataFollower**](LinkedInAdsPlatformDataFollower.md) |  | [optional]
**jobs** | [**\Zernio\Model\LinkedInAdsPlatformDataJobs**](LinkedInAdsPlatformDataJobs.md) |  | [optional]
**text_ad** | [**\Zernio\Model\LinkedInAdsPlatformDataTextAd**](LinkedInAdsPlatformDataTextAd.md) |  | [optional]
**conversation** | [**\Zernio\Model\LinkedInAdsPlatformDataConversation**](LinkedInAdsPlatformDataConversation.md) |  | [optional]
**event** | [**\Zernio\Model\LinkedInAdsPlatformDataEvent**](LinkedInAdsPlatformDataEvent.md) |  | [optional]
**thought_leader** | [**\Zernio\Model\LinkedInAdsPlatformDataThoughtLeader**](LinkedInAdsPlatformDataThoughtLeader.md) |  | [optional]
**bid_strategy** | [**\Zernio\Model\BidStrategy**](BidStrategy.md) |  | [optional]
**bid_amount** | **float** | Whole currency units (USD: 5 &#x3D; $5.00). Required when bidStrategy is LOWEST_COST_WITH_BID_CAP or COST_CAP. May also be sent alone, WITHOUT bidStrategy, to set the cap on an ad set joining a COST_CAP / LOWEST_COST_WITH_BID_CAP campaign (the strategy is inherited from the campaign). On POST /v1/ads/create that shape requires existingCampaignId and is a 400 otherwise; on POST /v1/ads/boost it is promoted to LOWEST_COST_WITH_BID_CAP. | [optional]
**roas_average_floor** | **float** | Decimal ROAS multiplier (2.0 &#x3D; 2.0x). Required when bidStrategy is LOWEST_COST_WITH_MIN_ROAS; sending it without bidStrategy is a 400. | [optional]
**daily_min_spend_target** | **float** | Meta daily_min_spend_target on the ad set being created: the least it should spend per day, in whole currency units. It reserves a share of a CAMPAIGN budget, so it requires budgetLevel campaign or an existingCampaignId whose campaign has the budget (Advantage campaign budget / CBO); with an ad-set budget it is a 400, because Meta rejects a spend limit on an ad set that owns its budget. A target, not a guarantee. Mutually exclusive with lifetimeMinSpendTarget: the flavour must match the campaign budget type. Rejected with 400 on POST /v1/ads/boost and in adSetId attach mode: use PUT /v1/ads/ad-sets/{adSetId} for an ad set that already exists. | [optional]
**lifetime_min_spend_target** | **float** | Meta lifetime_min_spend_target: the lifetime-budget flavour of dailyMinSpendTarget, in whole currency units. Same rules and same rejections. | [optional]
**customer_lifecycle** | [**\Zernio\Model\MetaCustomerLifecycle**](MetaCustomerLifecycle.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
