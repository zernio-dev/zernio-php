# # TargetingSpec

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**countries** | **string[]** | ISO 3166-1 alpha-2 country codes (e.g. [&#39;US&#39;]). | [optional]
**regions** | [**\Zernio\Model\UpdateCampaignTargetingRequestTargetingLocationsOneOfRegionsInner[]**](UpdateCampaignTargetingRequestTargetingLocationsOneOfRegionsInner.md) | Region/state targeting. &#x60;key&#x60; is the platform location ID from /v1/ads/targeting/search?dimension&#x3D;geo&amp;geoType&#x3D;region. | [optional]
**cities** | [**\Zernio\Model\TargetingSpecCitiesInner[]**](TargetingSpecCitiesInner.md) | City targeting. Optional &#x60;radius&#x60; + &#x60;distanceUnit&#x60; extend beyond the city limits; both must be set together or both omitted. &#x60;radius&#x60; is only honoured on platforms whose capability map allows city radius (Meta). | [optional]
**zips** | [**\Zernio\Model\UpdateCampaignTargetingRequestTargetingLocationsOneOfRegionsInner[]**](UpdateCampaignTargetingRequestTargetingLocationsOneOfRegionsInner.md) | Postal/ZIP targeting. &#x60;key&#x60; is the platform&#39;s postal location ID (e.g. Meta &#x60;US:94304&#x60;). Supported on Meta, Google, TikTok, Pinterest, X. | [optional]
**metros** | [**\Zernio\Model\UpdateCampaignTargetingRequestTargetingLocationsOneOfRegionsInner[]**](UpdateCampaignTargetingRequestTargetingLocationsOneOfRegionsInner.md) | DMA / metro-area targeting. &#x60;key&#x60; is the platform&#39;s metro ID (e.g. Meta &#x60;DMA:807&#x60;). | [optional]
**custom_locations** | [**\Zernio\Model\TargetingSpecCustomLocationsInner[]**](TargetingSpecCustomLocationsInner.md) | Point-radius (lat/lng) targeting (Meta custom_locations / Google proximity). Honoured on Meta and Google; ignored on platforms without radius support. | [optional]
**excluded_locations** | [**\Zernio\Model\TargetingSpecExcludedLocations**](TargetingSpecExcludedLocations.md) |  | [optional]
**age_min** | **int** | Minimum age. Applied on Meta, TikTok and Pinterest; ignored on Google, LinkedIn and X. Each platform clamps to its own range: Meta and Pinterest effectively cap at 65 (65 &#x3D; 65+), TikTok maps up to 100. Pinterest has no under-18 bucket, so an ageMin below 18 starts at 18 there. | [optional]
**age_max** | **int** | Maximum age. Same per-platform application and clamping as ageMin. | [optional]
**gender** | **string** | Restrict by gender. &#39;all&#39; (default) targets everyone. Applied on Meta, TikTok and Pinterest. Ignored on Google, LinkedIn and X. | [optional]
**income_tier** | **string** | Normalized household-income tier (ZIP/percentile based). Meta and TikTok express all four. Google maps only &#x60;top_10&#x60; (its INCOME_RANGE_90_UP); other tiers on Google, and any income tier on LinkedIn / X / Pinterest, are rejected. On Meta, income/zip targeting requires the relevant &#x60;specialAdCategories&#x60; to be unset (housing/employment/credit ads cannot use it). | [optional]
**languages** | **string[]** | Language codes restricting the audience by language. On Meta, ISO 639-1 codes (e.g. [&#39;en&#39;]); a bare code targets all regional variants (\&quot;en\&quot; &#x3D; all English), or use a region-qualified code (\&quot;en_GB\&quot;, \&quot;pt_BR\&quot;) for a specific one. Unknown codes are rejected. | [optional]
**interests** | [**\Zernio\Model\CreateStandaloneAdRequestBehaviorsInner[]**](CreateStandaloneAdRequestBehaviorsInner.md) | Interest entities from /v1/ads/targeting/search?dimension&#x3D;interest. Each carries the platform&#39;s opaque id. | [optional]
**behaviors** | [**\Zernio\Model\CreateStandaloneAdRequestBehaviorsInner[]**](CreateStandaloneAdRequestBehaviorsInner.md) | Behaviour entities from /v1/ads/targeting/search?dimension&#x3D;behavior. Supported on Meta and TikTok. | [optional]
**work_positions** | [**\Zernio\Model\CreateStandaloneAdRequestBehaviorsInner[]**](CreateStandaloneAdRequestBehaviorsInner.md) | Meta only. Job title entities from /v1/ads/targeting/search?dimension&#x3D;workPosition. Not interchangeable with the LinkedIn &#x60;jobTitles&#x60; URN fragments. | [optional]
**work_employers** | [**\Zernio\Model\CreateStandaloneAdRequestBehaviorsInner[]**](CreateStandaloneAdRequestBehaviorsInner.md) | Meta only. Employer entities from /v1/ads/targeting/search?dimension&#x3D;workEmployer. | [optional]
**work_industries** | [**\Zernio\Model\CreateStandaloneAdRequestBehaviorsInner[]**](CreateStandaloneAdRequestBehaviorsInner.md) | Meta only. Work-industry entities from /v1/ads/targeting/search?dimension&#x3D;workIndustry. Not interchangeable with the LinkedIn &#x60;industries&#x60; URN fragments. | [optional]
**industries** | **string[]** | LinkedIn B2B only. Industry URN id fragments. | [optional]
**company_sizes** | **string[]** | LinkedIn B2B only. | [optional]
**seniorities** | **string[]** | LinkedIn B2B only. | [optional]
**job_functions** | **string[]** | LinkedIn B2B only. | [optional]
**audience_include** | **string[]** | Platform audience IDs to include, as returned by GET /v1/ads/audiences (Meta custom audience ids, TikTok audience ids, Pinterest customer list ids, LinkedIn segment ids (the platformAudienceId from GET /v1/ads/audiences; Zernio resolves it to the targetable LinkedIn ad segment, an unknown id returns 400), Google user list ids, X custom audience ids). Not supported on OpenAI (400). | [optional]
**audience_exclude** | **string[]** | Platform audience IDs to exclude; same ID formats as audienceInclude. Not supported on OpenAI (400). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
