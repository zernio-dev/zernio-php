# # ListTikTokSmartPlusReviews200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_account_id** | **string** |  | [optional]
**include_deleted** | **bool** |  | [optional]
**page** | **int** |  | [optional]
**page_size** | **int** |  | [optional]
**total_pages** | **int** |  | [optional]
**total_smart_plus_ads** | **int** | Smart+ ads of the advertiser across all pages. | [optional]
**items** | [**\Zernio\Model\ListTikTokSmartPlusReviews200ResponseItemsInner[]**](ListTikTokSmartPlusReviews200ResponseItemsInner.md) |  | [optional]
**failed_smart_plus_ads** | [**\Zernio\Model\ListTikTokSmartPlusReviews200ResponseFailedSmartPlusAdsInner[]**](ListTikTokSmartPlusReviews200ResponseFailedSmartPlusAdsInner.md) | Smart+ ads of this page whose review TikTok refused on its own (for example an ad deleted on TikTok since the listing was cached). Zernio splits a refused batch in halves (at most 16 extra calls per page), so the other ads of the batch are still read; ads left unresolved by that cap carry the batch error. Empty when none. | [optional]
**incomplete** | **bool** | True when some Smart+ ads of this page could not be read because of TikTok&#39;s review quota. | [optional]
**pending_smart_plus_ad_ids** | **string[]** | Smart+ ads of this page still to read. Empty when complete. | [optional]
**retry_after_seconds** | **int** | Seconds to wait before reading this page again. Null when complete. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
