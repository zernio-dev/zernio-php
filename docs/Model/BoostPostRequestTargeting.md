# # BoostPostRequestTargeting

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**age_min** | **int** |  | [optional]
**age_max** | **int** |  | [optional]
**gender** | **string** | Meta only. | [optional]
**languages** | **string[]** | Meta locale ids (numeric), passed through as given. | [optional]
**countries** | **string[]** | ISO country codes. Required for TikTok boosts (TikTok&#39;s ad group requires location_ids); optional on other platforms. | [optional]
**regions** | [**\Zernio\Model\BoostPostRequestTargetingRegionsInner[]**](BoostPostRequestTargetingRegionsInner.md) | Region/state targeting. &#x60;key&#x60; from /v1/ads/targeting/search?dimension&#x3D;geo&amp;geoType&#x3D;region. | [optional]
**cities** | [**\Zernio\Model\BoostPostRequestTargetingCitiesInner[]**](BoostPostRequestTargetingCitiesInner.md) | City targeting. Optional &#x60;radius&#x60; + &#x60;distance_unit&#x60; extend beyond the city limits (both set together, Meta only). | [optional]
**zips** | [**\Zernio\Model\BoostPostRequestTargetingRegionsInner[]**](BoostPostRequestTargetingRegionsInner.md) | Postal/ZIP targeting. &#x60;key&#x60; is the platform&#39;s postal location ID (e.g. Meta &#x60;US:94304&#x60;). | [optional]
**metros** | [**\Zernio\Model\BoostPostRequestTargetingRegionsInner[]**](BoostPostRequestTargetingRegionsInner.md) | DMA / metro-area targeting. &#x60;key&#x60; is the platform&#39;s metro ID (e.g. Meta &#x60;DMA:807&#x60;). | [optional]
**custom_locations** | [**\Zernio\Model\BoostPostRequestTargetingCustomLocationsInner[]**](BoostPostRequestTargetingCustomLocationsInner.md) | Point-radius (lat/lng) targeting (Meta custom_locations). No geo &#x60;key&#x60; lookup needed. | [optional]
**interests** | [**\Zernio\Model\UpdateAdRequestTargetingInterestsInner[]**](UpdateAdRequestTargetingInterestsInner.md) | Interest objects from /v1/ads/interests. Each must include id and name. | [optional]
**advantage_audience** | **int** | Meta only. 0 &#x3D; disabled (default), 1 &#x3D; enabled. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
