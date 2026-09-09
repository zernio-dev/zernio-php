# # UpdateAdRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**headlines** | [**\Zernio\Model\GoogleRsaHeadline[]**](GoogleRsaHeadline.md) | Google RSA only. Replaces the complete headline list. No padding or truncation on update. | [optional]
**descriptions** | [**\Zernio\Model\GoogleRsaDescription[]**](GoogleRsaDescription.md) | Google RSA only. Replaces the complete description list. No padding or truncation on update. | [optional]
**final_urls** | **string[]** | Google RSA only. Replaces final URLs. Omitted lists stay unchanged. | [optional]
**status** | **string** |  | [optional]
**budget** | [**\Zernio\Model\UpdateAdRequestBudget**](UpdateAdRequestBudget.md) |  | [optional]
**targeting** | [**\Zernio\Model\UpdateAdRequestTargeting**](UpdateAdRequestTargeting.md) |  | [optional]
**creative** | [**\Zernio\Model\UpdateAdRequestCreative**](UpdateAdRequestCreative.md) |  | [optional]
**name** | **string** | Rename the ad. Now propagated to Meta (POST /{ad-id}); non-Meta platforms return 501. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
