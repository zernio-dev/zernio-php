# # GetAdReview200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_id** | **string** | Zernio ad id; null for an unsynced Meta ad read with &#x60;accountId&#x60;. | [optional]
**platform** | **string** |  | [optional]
**platform_ad_id** | **string** |  | [optional]
**synced** | **bool** | False when the ad was read live from Meta because it is not in Zernio&#39;s store. | [optional]
**review** | [**\Zernio\Model\GetAdReview200ResponseReview**](GetAdReview200ResponseReview.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
