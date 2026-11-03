# # BoostPostRequestTargeting

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**age_min** | **int** |  | [optional]
**age_max** | **int** |  | [optional]
**gender** | **string** | Applied on Meta, TikTok, Pinterest and Reddit. Ignored on Google, LinkedIn and X. | [optional]
**languages** | **string[]** | Language codes, the same format as &#x60;languages&#x60; on POST /v1/ads/create.  - Meta: ISO 639-1 codes. A bare code targets all regional variants (\&quot;en\&quot; &#x3D; all English); use a region-qualified code for a specific one (\&quot;en_GB\&quot;, \&quot;pt_BR\&quot;). Meta numeric locale ids (e.g. \&quot;24\&quot; for English UK) are also accepted. Unknown values are rejected. - Reddit: ISO 639-1 codes (e.g. &#x60;en&#x60;). | [optional]
**countries** | **string[]** | ISO country codes. Required for TikTok boosts (TikTok&#39;s ad group requires location_ids); optional on other platforms. | [optional]
**regions** | [**\Zernio\Model\UpdateCampaignTargetingRequestTargetingLocationsOneOfRegionsInnerOneOf[]**](UpdateCampaignTargetingRequestTargetingLocationsOneOfRegionsInnerOneOf.md) | Region/state targeting. &#x60;key&#x60; from /v1/ads/targeting/search?dimension&#x3D;geo&amp;geoType&#x3D;region. | [optional]
**cities** | [**\Zernio\Model\BoostPostRequestTargetingCitiesInner[]**](BoostPostRequestTargetingCitiesInner.md) | City targeting. Optional &#x60;radius&#x60; + &#x60;distanceUnit&#x60; extend beyond the city limits (both set together, Meta only). | [optional]
**zips** | [**\Zernio\Model\UpdateCampaignTargetingRequestTargetingLocationsOneOfRegionsInnerOneOf[]**](UpdateCampaignTargetingRequestTargetingLocationsOneOfRegionsInnerOneOf.md) | Postal/ZIP targeting. &#x60;key&#x60; is the platform&#39;s postal location ID (e.g. Meta &#x60;US:94304&#x60;). | [optional]
**metros** | [**\Zernio\Model\UpdateCampaignTargetingRequestTargetingLocationsOneOfRegionsInnerOneOf[]**](UpdateCampaignTargetingRequestTargetingLocationsOneOfRegionsInnerOneOf.md) | DMA / metro-area targeting. &#x60;key&#x60; is the platform&#39;s metro ID (e.g. Meta &#x60;DMA:807&#x60;). | [optional]
**custom_locations** | [**\Zernio\Model\BoostPostRequestTargetingCustomLocationsInner[]**](BoostPostRequestTargetingCustomLocationsInner.md) | Point-radius (lat/lng) targeting (Meta custom_locations). No geo &#x60;key&#x60; lookup needed. | [optional]
**interests** | [**\Zernio\Model\UpdateAdRequestTargetingInterestsInner[]**](UpdateAdRequestTargetingInterestsInner.md) | Interest objects from /v1/ads/interests. Each must include id and name. | [optional]
**advantage_audience** | **int** | Meta only. 0 &#x3D; disabled (default), 1 &#x3D; enabled. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
