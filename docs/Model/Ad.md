# # Ad

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**status** | [**\Zernio\Model\AdStatus**](AdStatus.md) | Delivery status. Derived from the platform &#x60;effective_status&#x60;, so it inherits ancestor pauses (an ACTIVE ad under a PAUSED campaign reads &#x60;paused&#x60;). For the ad&#39;s own on/off toggle use &#x60;configuredStatus&#x60;; for the review state use &#x60;reviewStatus&#x60;. | [optional]
**configured_status** | **string** | The ad&#39;s own on/off toggle as configured on the platform (Meta &#x60;configured_status&#x60;: ACTIVE / PAUSED), unaffected by ancestor (ad set / campaign) pauses. Distinct from &#x60;status&#x60;, which is the ancestor-cascaded delivery status. Only present for Meta ads synced after this field was added. | [optional]
**review_status** | [**\Zernio\Model\AdReviewStatus**](AdReviewStatus.md) | Platform review state of this ad, independent of delivery &#x60;status&#x60; / &#x60;configuredStatus&#x60;. Absent when the platform reports no review signal. | [optional]
**ad_type** | **string** |  | [optional]
**goal** | **string** | Available goals vary by platform. Meta (Facebook/Instagram) supports all 9 (incl. &#x60;lead_conversion&#x60; &#x3D; website pixel lead optimization and &#x60;catalog_sales&#x60; &#x3D; Advantage+ catalog ads). TikTok supports the 7 non-&#x60;lead_conversion&#x60; goals. LinkedIn supports all except app_promotion / lead_conversion. Twitter/X supports engagement, traffic, awareness, video_views, app_promotion. Pinterest and Google Ads support only engagement, traffic, awareness, video_views. | [optional]
**is_external** | **bool** | True for ads synced from platform ad managers | [optional]
**budget** | [**\Zernio\Model\AdBudget**](AdBudget.md) |  | [optional]
**metrics** | [**\Zernio\Model\AdMetrics**](AdMetrics.md) |  | [optional]
**platform_ad_id** | **string** |  | [optional]
**platform_ad_account_id** | **string** |  | [optional]
**platform_campaign_id** | **string** |  | [optional]
**platform_ad_set_id** | **string** |  | [optional]
**campaign_name** | **string** |  | [optional]
**ad_set_name** | **string** |  | [optional]
**platform_objective** | **string** | Raw Meta campaign objective (e.g. OUTCOME_SALES, OUTCOME_LEADS, OUTCOME_TRAFFIC). Only present for Meta ads. | [optional]
**optimization_goal** | **string** | Meta ad set optimization goal (e.g. OFFSITE_CONVERSIONS, VALUE, LEAD_GENERATION, LINK_CLICKS). Only present for Meta ads. | [optional]
**platform_ad_account_name** | **string** | Human-readable advertiser/account name (Meta &#x60;AdAccount.name&#x60;, TikTok &#x60;advertiser_name&#x60;, LinkedIn / X / Pinterest equivalents). Refreshed every sync so platform-side renames propagate within one cycle. &#x60;null&#x60; when the platform doesn&#39;t return a name or the sync hasn&#39;t run yet. | [optional]
**platform_created_at** | **\DateTime** | Platform-reported creation timestamp (Meta &#x60;created_time&#x60;, TikTok &#x60;create_time&#x60;). Distinct from &#x60;createdAt&#x60; which reflects when Zernio first synced the doc — for sort/filter by \&quot;when the ad was actually created on the platform\&quot;, read this field. &#x60;null&#x60; for legacy ads synced before this field was added; aggregations fall back to &#x60;createdAt&#x60; in that case. | [optional]
**bid_strategy** | [**\Zernio\Model\BidStrategy**](BidStrategy.md) |  | [optional]
**bid_amount** | **float** | Bid cap in WHOLE currency units of the ad account (USD: 5 &#x3D; $5.00; JPY: 100 &#x3D; ¥100). Populated when bidStrategy is &#x60;LOWEST_COST_WITH_BID_CAP&#x60; or &#x60;COST_CAP&#x60;. &#x60;null&#x60; for auto-bid (&#x60;LOWEST_COST_WITHOUT_CAP&#x60;).  - Meta source: &#x60;bid_amount&#x60; on the ad set (smallest-denomination int, decoded here). - TikTok source: priority order &#x60;bid_price&#x60; -&gt; &#x60;conversion_bid_price&#x60; -&gt; &#x60;deep_cpa_bid&#x60;   (whichever is set on the ad group). TikTok stores all three in whole currency units.  Source: facebook-business-sdk-codegen api_specs/specs/AdSet.json (&#x60;bid_amount&#x60;). | [optional]
**roas_average_floor** | **float** | Minimum ROAS as a decimal multiplier (2.0 &#x3D; 2.0x ROAS). Populated when bidStrategy is &#x60;LOWEST_COST_WITH_MIN_ROAS&#x60;.  - Meta source: decoded from &#x60;bid_constraints.roas_average_floor&#x60; (Meta stores as   fixed-point int × 10000; we return the decimal). - TikTok source: &#x60;roas_bid&#x60; on the ad group (already a decimal).  Source: facebook-business-sdk-codegen api_specs/specs/AdCampaignBidConstraint.json. | [optional]
**promoted_object** | [**\Zernio\Model\AdPromotedObject**](AdPromotedObject.md) |  | [optional]
**creative** | [**\Zernio\Model\AdCreative**](AdCreative.md) |  | [optional]
**targeting** | **object** | The ad set&#39;s targeting (age, gender, geo, interests, placements, audience inclusions/exclusions). For ads created through Zernio this is the spec you supplied. For external ads (synced from Meta Ads Manager, &#x60;isExternal: true&#x60;) targeting lives at the ad set and isn&#39;t stored at ingest, so on the first &#x60;GET /v1/ads/{adId}&#x60; Zernio resolves it live from Meta and caches it on the ad; the value is then Meta&#39;s raw &#x60;targeting&#x60; shape (snake_case, e.g. &#x60;geo_locations&#x60;, &#x60;age_min&#x60;), the same object Ads Manager shows. May be absent if the ad set exposes no targeting or the lookup fails. | [optional]
**schedule** | [**\Zernio\Model\AdSchedule**](AdSchedule.md) |  | [optional]
**rejection_reason** | **string** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
