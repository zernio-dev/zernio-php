# # ListTikTokSmartPlusReviews200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_account_id** | **string** |  | [optional]
**include_deleted** | **bool** |  | [optional]
**max_age_seconds** | **int** | The freshness window this page was read with. | [optional]
**page** | **int** |  | [optional]
**page_size** | **int** |  | [optional]
**total_pages** | **int** |  | [optional]
**total_smart_plus_ads** | **int** | Smart+ ads of the advertiser across all pages. | [optional]
**listing** | [**\Zernio\Model\ListTikTokSmartPlusReviews200ResponseListing**](ListTikTokSmartPlusReviews200ResponseListing.md) |  | [optional]
**review_error** | [**\Zernio\Model\ListTikTokSmartPlusReviews200ResponseReviewError**](ListTikTokSmartPlusReviews200ResponseReviewError.md) |  | [optional]
**counts** | [**\Zernio\Model\ListTikTokSmartPlusReviews200ResponseCounts**](ListTikTokSmartPlusReviews200ResponseCounts.md) |  | [optional]
**oldest_read_at** | **\DateTime** | The oldest &#x60;readAt&#x60; in &#x60;items&#x60;. Null when &#x60;items&#x60; is empty. | [optional]
**items** | [**\Zernio\Model\ListTikTokSmartPlusReviews200ResponseItemsInner[]**](ListTikTokSmartPlusReviews200ResponseItemsInner.md) |  | [optional]
**failed_smart_plus_ads** | [**\Zernio\Model\ListTikTokSmartPlusReviews200ResponseFailedSmartPlusAdsInner[]**](ListTikTokSmartPlusReviews200ResponseFailedSmartPlusAdsInner.md) | Smart+ ads of this page whose review TikTok refused on its own (for example an ad deleted on TikTok since the listing was read). Zernio splits a refused batch in halves (at most 16 extra calls per page), so the other ads of the batch are still read; ads left unresolved by that cap stay in &#x60;items&#x60; with their stored review or in &#x60;pendingSmartPlusAdIds&#x60;. Empty when none. | [optional]
**incomplete** | **bool** | True while some Smart+ ads of this page were never read (&#x60;counts.pending &gt; 0&#x60;). Stale items alone keep it false. | [optional]
**all_fresh** | **bool** | True when every item and refusal of this page was read within &#x60;maxAgeSeconds&#x60; and nothing is pending. False with &#x60;incomplete: false&#x60; means the page is complete but some reviews are older than the window; a later read refreshes them oldest first. | [optional]
**pending_smart_plus_ad_ids** | **string[]** | Smart+ ads of this page never read. Empty when every ad has a stored review or refusal. | [optional]
**retry_after_seconds** | **int** | Seconds until Zernio calls TikTok&#39;s review endpoint for this advertiser and connection again (the stored pause with its jitter), set exactly when &#x60;refreshState&#x60; is &#x60;paused&#x60; or &#x60;refused&#x60;, stale items with nothing pending included. Always the same value as the &#x60;Retry-After&#x60; header, which is sent exactly when this is not null. Client rule: present, wait that long before reading the page again; null with stale or pending ads, a retry is not blocked (read again now or on your &#x60;maxAgeSeconds&#x60; schedule; with &#x60;refreshState: error&#x60; check &#x60;reviewError&#x60; first). | [optional]
**refresh_state** | **string** | Whether this request could refresh the due (stale or pending) Smart+ ads of the page. &#x60;refused&#x60;: TikTok refused a review call of this request over quota (40002 &#x60;OVER_QPS_LIMIT&#x60; or 40100) and Zernio paused. &#x60;paused&#x60;: no call was sent for the due ads because a pause from an earlier refusal is still running, or another request is refreshing the same advertiser (then &#x60;retryAfterSeconds&#x60; is 20). Both carry &#x60;retryAfterSeconds&#x60;. &#x60;error&#x60;: TikTok refused the batch for another reason (both halves the same way), the page is served from stored reviews and &#x60;reviewError&#x60; holds TikTok&#39;s error; &#x60;retryAfterSeconds&#x60; is null because retrying soon repeats the refusal. &#x60;ok&#x60;: nothing blocks a retry (every due ad was read, none was due, or the split cap or the 20-second request budget left some for the next read, which can come right away). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
