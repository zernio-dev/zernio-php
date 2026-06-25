# # TargetingSpec

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**countries** | **string[]** | ISO 3166-1 alpha-2 country codes (e.g. [&#39;US&#39;]). | [optional]
**regions** | [**\Zernio\Model\CreateStandaloneAdRequestZipsInner[]**](CreateStandaloneAdRequestZipsInner.md) | Region/state targeting. &#x60;key&#x60; is the platform location ID from /v1/ads/targeting/search?dimension&#x3D;geo&amp;geoType&#x3D;region. | [optional]
**cities** | [**\Zernio\Model\TargetingSpecCitiesInner[]**](TargetingSpecCitiesInner.md) | City targeting. Optional &#x60;radius&#x60; + &#x60;distance_unit&#x60; extend beyond the city limits; both must be set together or both omitted. &#x60;radius&#x60; is only honoured on platforms whose capability map allows city radius (Meta). | [optional]
**zips** | [**\Zernio\Model\CreateStandaloneAdRequestZipsInner[]**](CreateStandaloneAdRequestZipsInner.md) | Postal/ZIP targeting. &#x60;key&#x60; is the platform&#39;s postal location ID (e.g. Meta &#x60;US:94304&#x60;). Supported on Meta, Google, TikTok, Pinterest, X. | [optional]
**metros** | [**\Zernio\Model\CreateStandaloneAdRequestZipsInner[]**](CreateStandaloneAdRequestZipsInner.md) | DMA / metro-area targeting. &#x60;key&#x60; is the platform&#39;s metro ID (e.g. Meta &#x60;DMA:807&#x60;). | [optional]
**custom_locations** | [**\Zernio\Model\TargetingSpecCustomLocationsInner[]**](TargetingSpecCustomLocationsInner.md) | Point-radius (lat/lng) targeting (Meta custom_locations / Google proximity). Honoured only where the capability map allows radius (Meta). | [optional]
**excluded_locations** | [**\Zernio\Model\TargetingSpecExcludedLocations**](TargetingSpecExcludedLocations.md) |  | [optional]
**age_min** | **int** |  | [optional]
**age_max** | **int** |  | [optional]
**gender** | **string** | Restrict by gender. &#39;all&#39; (default) targets everyone. | [optional]
**income_tier** | **string** | Normalized household-income tier (ZIP/percentile based). Meta and TikTok express all four. Google maps only &#x60;top_10&#x60; (its INCOME_RANGE_90_UP); other tiers on Google, and any income tier on LinkedIn / X / Pinterest, are rejected. On Meta, income/zip targeting requires the relevant &#x60;specialAdCategories&#x60; to be unset (housing/employment/credit ads cannot use it). | [optional]
**languages** | **string[]** | Language codes (e.g. [&#39;en&#39;]). | [optional]
**interests** | [**\Zernio\Model\CreateStandaloneAdRequestBehaviorsInner[]**](CreateStandaloneAdRequestBehaviorsInner.md) | Interest entities from /v1/ads/targeting/search?dimension&#x3D;interest. Each carries the platform&#39;s opaque id. | [optional]
**behaviors** | [**\Zernio\Model\CreateStandaloneAdRequestBehaviorsInner[]**](CreateStandaloneAdRequestBehaviorsInner.md) | Behaviour entities from /v1/ads/targeting/search?dimension&#x3D;behavior. Supported on Meta and TikTok. | [optional]
**industries** | **string[]** | LinkedIn B2B only. Industry URN id fragments. | [optional]
**company_sizes** | **string[]** | LinkedIn B2B only. | [optional]
**seniorities** | **string[]** | LinkedIn B2B only. | [optional]
**job_functions** | **string[]** | LinkedIn B2B only. | [optional]
**audience_include** | **string[]** | Platform audience IDs to include. | [optional]
**audience_exclude** | **string[]** | Platform audience IDs to exclude. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
