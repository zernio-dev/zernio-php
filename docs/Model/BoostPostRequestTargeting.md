# # BoostPostRequestTargeting

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**age_min** | **int** |  | [optional]
**age_max** | **int** |  | [optional]
**countries** | **string[]** | ISO country codes. Required for TikTok boosts (TikTok&#39;s ad group requires location_ids); optional on other platforms. | [optional]
**interests** | [**\Zernio\Model\UpdateAdRequestTargetingInterestsInner[]**](UpdateAdRequestTargetingInterestsInner.md) | Interest objects from /v1/ads/interests. Each must include id and name. | [optional]
**advantage_audience** | **int** | Meta only. 0 &#x3D; disabled (default), 1 &#x3D; enabled. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
