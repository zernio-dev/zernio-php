# # AdDailyMetrics

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**spend** | **float** |  | [optional]
**impressions** | **int** |  | [optional]
**reach** | **int** | Unique people reached in the requested date range. Meta (facebook/instagram) and TikTok: the platform&#39;s own de-duplicated reach for the exact range, fetched live and cached up to ~1 hour (may lag recent delivery; on a transient platform error the value temporarily falls back to a sum of per-day reach, which overcounts people reached on multiple days or by multiple child ads). Because it is de-duplicated, reach is NOT additive on these platforms: neither daily values nor child nodes sum to the range total. Google, LinkedIn, X, Pinterest and OpenAI report 0 (reach not synced). Frequency (impressions / reach) is only meaningful for Meta and TikTok. | [optional]
**clicks** | **int** |  | [optional]
**ctr** | **float** | Click-through rate (%) | [optional]
**cpc** | **float** | Cost per click | [optional]
**cpm** | **float** | Cost per 1000 impressions | [optional]
**engagement** | **int** |  | [optional]
**conversions** | **float** | Count of conversion events over the requested date range. FRACTIONAL: attribution splits one conversion across touchpoints and Google additionally reports modeled conversions, so values like 0.347 are normal. Meta: events matching the campaign&#39;s promoted_object.custom_event_type (PURCHASE, LEAD, etc.). Google: the account&#39;s tracked conversions. X and LinkedIn: their reported website/lead conversions (added 2026-07). 0 for non-conversion campaigns or when no events have fired. | [optional]
**all_conversions** | **float** | All conversions, including actions excluded from the Conversions column (Google metrics.all_conversions). 0 on platforms without the concept. | [optional]
**cost_per_conversion** | **float** | Derived spend / conversions in the same currency as spend. 0 when conversions is 0. | [optional]
**actions** | **array<string,int>** | Per-action-type counts summed over the date range, keyed by the platform&#39;s action-type names. Meta: raw Insights action_type keys (link_click, offsite_conversion.fb_pixel_purchase, onsite_conversion.lead_grouped, ...) — both engagement and conversion events. TikTok: pixel conversions (purchase, add_to_cart, initiate_checkout, view_content, complete_payment, lead) plus the paid-engagement family (follow, post_reaction for paid likes, comment, share) — follow is how FOLLOWERS-goal campaigns report their result. X: conversion types (purchase, sign_up, site_visit, download, custom). LinkedIn: conversion types (post_click, post_view, lead_gen). Google returns {} (its per-action names aren&#39;t synced per ad). Empty object when no actions are reported. NOTE: keys differ by platform, so branch on the ad&#39;s platform when interpreting them. | [optional]
**action_values** | **array<string,float>** | Monetary mirror of &#x60;actions&#x60;, from Meta&#39;s Insights &#x60;action_values[]&#x60; array. Same keying — values are the revenue attributed to each action_type, in ad-account native currency (same unit as &#x60;spend&#x60;; see the campaign node&#39;s &#x60;currency&#x60; field). Use this to compute revenue-per-event (e.g. avg purchase value). Meta-only; other platforms return {}. | [optional]
**purchase_value** | **float** | Convenience sum of purchase-type action values — picked from &#x60;actionValues&#x60; via the same priority list as &#x60;conversions&#x60; so both fields describe the same events. In ad-account native currency. 0 when the campaign has no purchase event configured. Meta-only. | [optional]
**roas** | **float** | Return on ad spend — derived as &#x60;purchaseValue / spend&#x60;. 0 when &#x60;spend&#x60; is 0. Equivalent to Meta&#39;s &#x60;purchase_roas&#x60; under default attribution. At ad-set and campaign levels this is recomputed from summed purchaseValue + spend (NOT averaged across children) so it&#39;s mathematically correct at every rollup level. | [optional]
**cost_per_action** | **array<string,float>** | Derived &#x60;spend / actions[type]&#x60; for every action type with a non-zero count, in ad-account native currency. Same keys as &#x60;actions&#x60;. Rounded to 4 decimals because cheap actions cost well under a cent. Recomputed from summed spend + counts at every rollup level. Empty object when spend is 0 or no actions are reported. | [optional]
**outbound_clicks** | **int** | Clicks leading off Meta&#39;s surfaces to the advertiser&#39;s destination. Meta-only; other platforms report 0. | [optional]
**outbound_clicks_ctr** | **float** | Derived &#x60;outboundClicks / impressions * 100&#x60;, recomputed from sums at every rollup level. | [optional]
**inline_link_clicks** | **int** | In-session link clicks. Differs from the attributed &#x60;link_click&#x60; count in &#x60;actions&#x60;/&#x60;engagementBreakdown.linkClicks&#x60;, which uses the attribution window. Meta-only. | [optional]
**inline_link_click_ctr** | **float** | Derived &#x60;inlineLinkClicks / impressions * 100&#x60;, recomputed from sums at every rollup level. | [optional]
**unique_clicks** | **int** | People who clicked at least once. NOT additive: summed across days/children it overcounts people who clicked on multiple days or ads, so treat rollups as an upper bound (same caveat as &#x60;reach&#x60;). Meta-only. | [optional]
**unique_ctr** | **float** | Derived &#x60;uniqueClicks / impressions * 100&#x60; (NOT Meta&#39;s reach-based unique_ctr). Inherits the non-additivity caveat of &#x60;uniqueClicks&#x60;. | [optional]
**video_play_actions** | **int** | Number of times the video started playing, summed over the date range and across children at ad-set/campaign level. 0 for non-video ads. Sources: Meta &#x60;video_play_actions&#x60;, TikTok &#x60;video_play_actions&#x60;. | [optional]
**video30_sec_watched_actions** | **int** | Views of at least 30 seconds (or to the end, for shorter videos). Sources: Meta &#x60;video_30_sec_watched_actions&#x60; (Meta only). | [optional]
**video_thruplay_watched_actions** | **int** | ThruPlays (watched to completion, or at least 15 seconds). Sources: Meta &#x60;video_thruplay_watched_actions&#x60; (Meta only). | [optional]
**video_p25_watched_actions** | **int** | Views reaching 25% of the video&#39;s length. With the other percentile fields, powers hook/hold/drop-off analysis (e.g. hook rate &#x3D; videoP25WatchedActions / videoPlayActions). Sources: Meta &#x60;video_p25_watched_actions&#x60;, TikTok &#x60;video_views_p25&#x60;. | [optional]
**video_p50_watched_actions** | **int** | Views reaching 50% of the video&#39;s length. Sources: Meta &#x60;video_p50_watched_actions&#x60;, TikTok &#x60;video_views_p50&#x60;. | [optional]
**video_p75_watched_actions** | **int** | Views reaching 75% of the video&#39;s length. Sources: Meta &#x60;video_p75_watched_actions&#x60;, TikTok &#x60;video_views_p75&#x60;. | [optional]
**video_p95_watched_actions** | **int** | Views reaching 95% of the video&#39;s length. Sources: Meta &#x60;video_p95_watched_actions&#x60; (Meta only). | [optional]
**video_p100_watched_actions** | **int** | Views reaching 100% of the video&#39;s length. Sources: Meta &#x60;video_p100_watched_actions&#x60;, TikTok &#x60;video_views_p100&#x60;. | [optional]
**video_avg_time_watched_actions** | **float** | Average seconds watched per play. Aggregated over date ranges and across children as a play-weighted average (total watch time / total plays), never a plain average of averages. Sources: Meta &#x60;video_avg_time_watched_actions&#x60;, TikTok &#x60;average_video_play&#x60;. | [optional]
**cost_per_thruplay** | **float** | Derived &#x60;spend / videoThruplayWatchedActions&#x60;, in ad-account native currency. Rounded to 4 decimals rather than the usual 2 because a ThruPlay routinely costs well under a cent. 0 when the ad has no ThruPlays (ThruPlay is Meta-only). | [optional]
**funnel** | [**\Zernio\Model\AdFunnelCounts**](AdFunnelCounts.md) |  | [optional]
**engagement_breakdown** | [**\Zernio\Model\AdEngagementCounts**](AdEngagementCounts.md) |  | [optional]
**last_synced_at** | **\DateTime** | Present on individual ads only, not on campaign aggregations | [optional]
**date** | **\DateTime** | Calendar day (YYYY-MM-DD) these metrics apply to. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
