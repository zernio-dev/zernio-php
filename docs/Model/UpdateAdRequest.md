# # UpdateAdRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**headlines** | [**\Zernio\Model\GoogleRsaHeadline[]**](GoogleRsaHeadline.md) | Google Search and Display only. Replaces the complete headline list. Search takes 3-15, Display 1-5 and rejects pinnedField; the count is checked once the ad&#39;s channel is known. No padding or truncation on update. | [optional]
**descriptions** | [**\Zernio\Model\GoogleRsaDescription[]**](GoogleRsaDescription.md) | Google Search and Display only. Replaces the complete description list. Search takes 2-4, Display 1-5 and rejects pinnedField. No padding or truncation on update. | [optional]
**final_urls** | **string[]** | Google Search and Display only. Replaces final URLs. Omitted lists stay unchanged. For Performance Max use assetGroup.finalUrl. | [optional]
**asset_group** | [**\Zernio\Model\GooglePmaxAssetGroupUpdate**](GooglePmaxAssetGroupUpdate.md) | Google Performance Max only. Replaces whole asset roles on the ad&#39;s asset group. Returns 422 on any other platform or channel. | [optional]
**status** | **string** |  | [optional]
**budget** | [**\Zernio\Model\UpdateAdRequestBudget**](UpdateAdRequestBudget.md) |  | [optional]
**targeting** | [**\Zernio\Model\UpdateAdRequestTargeting**](UpdateAdRequestTargeting.md) |  | [optional]
**creative** | [**\Zernio\Model\UpdateAdRequestCreative**](UpdateAdRequestCreative.md) |  | [optional]
**name** | **string** | Rename the ad. Now propagated to Meta (POST /{ad-id}); non-Meta platforms return 501. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
