# # ListAdSets200ResponseAdSetsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform_ad_set_id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**ad_set_name** | **string** |  | [optional]
**status** | **string** |  | [optional]
**platform_ad_set_status** | **string** | Raw platform ad set status. On TikTok the ad group&#39;s own switch &#x60;operation_status&#x60; (ENABLE / DISABLE), independent of its campaign. | [optional]
**platform_campaign_id** | **string** |  | [optional]
**platform_ad_account_id** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**profile_id** | **string** |  | [optional]
**currency** | **string** |  | [optional]
**budget** | [**\Zernio\Model\ListAdSets200ResponseAdSetsInnerBudget**](ListAdSets200ResponseAdSetsInnerBudget.md) |  | [optional]
**schedule** | [**\Zernio\Model\ListAdSets200ResponseAdSetsInnerSchedule**](ListAdSets200ResponseAdSetsInnerSchedule.md) |  | [optional]
**targeting** | [**\Zernio\Model\ListAdSets200ResponseAdSetsInnerTargeting**](ListAdSets200ResponseAdSetsInnerTargeting.md) |  | [optional]
**is_external** | **bool** |  | [optional]
**platform_created_at** | **\DateTime** |  | [optional]
**status_read_at** | **\DateTime** | Only with &#x60;live&#x3D;true&#x60;. When &#x60;platformAdSetStatus&#x60; was read from the platform; null when this row was not read live. | [optional]
**optimization_goal** | **string** | The ad set&#39;s optimization goal as last synced, in the platform&#39;s own enum (Meta &#x60;optimization_goal&#x60;, for example OFFSITE_CONVERSIONS or LINK_CLICKS; TikTok &#x60;optimization_goal&#x60;; Pinterest the conversion event of &#x60;optimization_goal_metadata&#x60;, for example CHECKOUT; X the line item &#x60;goal&#x60;; OpenAI the campaign &#x60;bidding_type&#x60;). Always null on Google, which has no per-ad-group optimization goal. On TikTok with &#x60;live&#x3D;true&#x60;, rows read live carry the ad group&#39;s &#x60;optimization_goal&#x60; exactly as TikTok&#39;s adgroup/get returns it now (for example ENGAGED_VIEW, ENGAGED_VIEW_FIFTEEN, CLICK, CONVERT). | [optional]
**billing_event** | **string** | The ad set&#39;s billing event as last synced, in the platform&#39;s own enum (Meta &#x60;billing_event&#x60;, TikTok &#x60;billing_event&#x60;, Pinterest &#x60;billable_event&#x60;, X &#x60;pay_by&#x60;, OpenAI &#x60;bidding_config.billing_event_type&#x60;). Always null on Google, which reports none per ad group. On TikTok with &#x60;live&#x3D;true&#x60;, rows read live carry the ad group&#39;s &#x60;billing_event&#x60; exactly as TikTok&#39;s adgroup/get returns it now (for example CPV, CPC, OCPM). | [optional]
**bid_strategy** | **string** | The bid strategy as last synced, in Meta&#39;s vocabulary (LOWEST_COST_WITHOUT_CAP, LOWEST_COST_WITH_BID_CAP, COST_CAP, LOWEST_COST_WITH_MIN_ROAS) on every platform that has an equivalent. On Meta under a campaign budget this is the campaign&#39;s strategy. TikTok maps bid_type / deep_bid_type, Pinterest AUTOMATIC_BID / MAX_BID / TARGET_AVG, X AUTO / MAX / TARGET, OpenAI Maximize Results / a max bid. Google bids at the campaign, so an ad group carries its campaign&#39;s strategy; one without a Meta equivalent (MANUAL_CPC, TARGET_IMPRESSION_SHARE, or a portfolio strategy&#39;s type such as TARGET_CPA) keeps Google&#39;s own name. Null on LinkedIn. | [optional]
**bid_amount** | **float** | Bid cap or cost target in whole units of &#x60;currency&#x60;, as last synced. Null when the strategy has none (automatic bidding, ROAS targets, a Google portfolio strategy). On Google a campaign target CPA, a Maximize clicks ceiling, the ad group&#39;s own target CPA override, or its CPC bid under MANUAL_CPC. | [optional]
**promoted_object** | **array<string,mixed>** | Meta only. The ad set&#39;s &#x60;promoted_object&#x60; verbatim (snake_case, for example pixel_id + custom_event_type, page_id, application_id), as last synced from its most recent ad. Null on other platforms and on an ad set with no ad yet; GET /v1/ads/accounts/live reads it live for every ad set. | [optional]
**native_settings** | **array<string,mixed>** | TikTok only, only with &#x60;live&#x3D;true&#x60; and only on rows read live. TikTok&#39;s adgroup/get record verbatim (snake_case, TikTok&#39;s own names and enums): operation_status, optimization_goal, optimization_event, billing_event, bid_type, bid_price, budget, budget_mode, pacing, schedule_type, schedule_start_time, schedule_end_time, dayparting, placement_type, placements, location_ids, age_groups, gender, languages, interest_category_ids, interest_keyword_ids, actions, audience_ids, excluded_audience_ids, operating_systems, frequency, frequency_schedule, smart_audience_enabled, smart_interest_behavior_enabled. schedule_start_time and schedule_end_time are UTC wall clocks (YYYY-MM-DD HH:MM:SS). location_ids holds TikTok&#39;s native location ids (GeoNames ids for countries); GET /v1/ads/targeting/search?dimension&#x3D;geo returns them as &#x60;platformId&#x60; on country results. Plus advertiser_currency and advertiser_timezone from TikTok&#39;s advertiser/info. A field TikTok does not return is absent. | [optional]
**config_read_at** | **\DateTime** | Only with &#x60;live&#x3D;true&#x60;. When &#x60;nativeSettings&#x60; was read from the platform. Null on every row whose native settings were not read now (row past the cap, failed read, or a platform without a native read). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
