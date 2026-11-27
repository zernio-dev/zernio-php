# # UpdateAdRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**validate_only** | **bool** | Meta only. Sends every write of this update to Meta with &#x60;execution_options: [\&quot;validate_only\&quot;]&#x60;. Meta checks it and changes nothing; Zernio stores nothing and fires no webhook.  - Answers &#x60;200&#x60; with &#x60;{ validateOnly: true, results, message }&#x60;, the shape of a validateOnly POST /v1/ads/create.  - The checks Zernio runs before the write (body, bid strategy, live ads allowance) run as for a real update.  - &#x60;true&#x60; on any other platform is a 400 naming &#x60;validateOnly&#x60;; &#x60;false&#x60; is ignored.  - Cannot be combined with &#x60;stage&#x60; (400 &#x60;mutually_exclusive_fields&#x60;). Counts toward the Meta ad account write guard.  - Idempotency-Key storage is bypassed, so the real update can reuse the key.  - A &#x60;creative&#x60; other than &#x60;existingCreativeId&#x60; is a 400: a dry run returns no creative id to link to the ad. Check a new creative with POST /v1/ads/creatives and &#x60;validateOnly&#x60;, create it, then send its id as &#x60;creative.existingCreativeId&#x60;. | [optional]
**stage** | **bool** | Send true to stage this change instead of applying it. Nothing is written to the ad network; the response is &#x60;202&#x60; with the staged change and its diff. Apply it with POST /v1/ads/changes/{changeId}/confirm. Meta, Google, TikTok, X, Snapchat and Reddit; cannot be combined with &#x60;validateOnly&#x60; or &#x60;dryRun&#x60;. | [optional]
**headlines** | [**\Zernio\Model\GoogleRsaHeadline[]**](GoogleRsaHeadline.md) | Google Search and Display only. Replaces the complete headline list. Search takes 3-15, Display 1-5 and rejects pinnedField; the count is checked once the ad&#39;s channel is known. No padding or truncation on update. | [optional]
**descriptions** | [**\Zernio\Model\GoogleRsaDescription[]**](GoogleRsaDescription.md) | Google Search and Display only. Replaces the complete description list. Search takes 2-4, Display 1-5 and rejects pinnedField. No padding or truncation on update. | [optional]
**final_urls** | **string[]** | Google Search and Display only. Replaces final URLs. Omitted lists stay unchanged. For Performance Max use assetGroup.finalUrl. | [optional]
**path1** | **string** | Google Search only. First display path shown after the domain in the ad URL. Send an empty string to clear it. | [optional]
**path2** | **string** | Google Search only. Second display path, shown after path1. Google requires path1 when path2 is set. Send an empty string to clear it. | [optional]
**asset_group** | [**\Zernio\Model\GooglePmaxAssetGroupUpdate**](GooglePmaxAssetGroupUpdate.md) | Google Performance Max only. Replaces whole asset roles on the ad&#39;s asset group. Returns 422 on any other platform or channel. | [optional]
**demand_gen** | [**\Zernio\Model\GoogleDemandGenUpdate**](GoogleDemandGenUpdate.md) | Google Demand Gen only. Returns 422 on any other platform or channel. | [optional]
**status** | **string** |  | [optional]
**budget** | [**\Zernio\Model\UpdateAdRequestBudget**](UpdateAdRequestBudget.md) |  | [optional]
**targeting** | [**\Zernio\Model\UpdateAdRequestTargeting**](UpdateAdRequestTargeting.md) |  | [optional]
**creative** | [**\Zernio\Model\UpdateAdRequestCreative**](UpdateAdRequestCreative.md) |  | [optional]
**name** | **string** | Rename the ad. Now propagated to Meta (POST /{ad-id}); non-Meta platforms return 501. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
