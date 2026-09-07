# # UpdateAdRequestTargeting

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**keywords** | [**\Zernio\Model\UpdateAdRequestTargetingKeywordsInner[]**](UpdateAdRequestTargetingKeywordsInner.md) | Google only. The FULL new set of positive keywords for the ad group; live keywords not listed are removed. Entries are strings (BROAD) or { text, matchType } with matchType exact | phrase | broad. Mirrored to GET /v1/ads/keywords immediately. | [optional]
**negative_keywords** | [**\Zernio\Model\UpdateAdRequestTargetingKeywordsInner[]**](UpdateAdRequestTargetingKeywordsInner.md) | Google only. Same declarative contract as keywords, for the ad group&#39;s negative keywords. | [optional]
**devices** | [**\Zernio\Model\UpdateAdRequestTargetingDevicesInner[]**](UpdateAdRequestTargetingDevicesInner.md) | Google only. The FULL new set of device criteria for the campaign; devices not listed are excluded. Entries are a device name alone (included, no bid adjustment) or { device, bidModifier }. | [optional]
**age_min** | **int** |  | [optional]
**age_max** | **int** |  | [optional]
**countries** | **string[]** |  | [optional]
**interests** | [**\Zernio\Model\UpdateAdRequestTargetingInterestsInner[]**](UpdateAdRequestTargetingInterestsInner.md) | Interest objects from /v1/ads/interests. Each must include id and name. | [optional]
**advantage_audience** | **int** | Meta only. Omit to preserve the existing setting on update. 0 &#x3D; disabled, 1 &#x3D; enabled. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
