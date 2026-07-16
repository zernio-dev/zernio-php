# # TargetingSpecExcludedLocations

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**countries** | **string[]** |  | [optional]
**regions** | [**\Zernio\Model\BoostPostRequestTargetingRegionsInner[]**](BoostPostRequestTargetingRegionsInner.md) |  | [optional]
**cities** | [**\Zernio\Model\TargetingSpecExcludedLocationsCitiesInner[]**](TargetingSpecExcludedLocationsCitiesInner.md) | Cities to exclude. Optional &#x60;radius&#x60; + &#x60;distance_unit&#x60; exclude a catchment around the city (both must be set together or both omitted); Meta honours the radius on excluded cities. | [optional]
**zips** | [**\Zernio\Model\BoostPostRequestTargetingRegionsInner[]**](BoostPostRequestTargetingRegionsInner.md) |  | [optional]
**places** | [**\Zernio\Model\TargetingSpecExcludedLocationsPlacesInner[]**](TargetingSpecExcludedLocationsPlacesInner.md) | Named points of interest to exclude. &#x60;key&#x60; from /v1/ads/targeting/search. | [optional]
**neighborhoods** | [**\Zernio\Model\TargetingSpecExcludedLocationsPlacesInner[]**](TargetingSpecExcludedLocationsPlacesInner.md) | Named neighbourhood areas to exclude. &#x60;key&#x60; from /v1/ads/targeting/search. | [optional]
**custom_locations** | [**\Zernio\Model\TargetingSpecCustomLocationsInner[]**](TargetingSpecCustomLocationsInner.md) | Point-radius (lat/lng) pins to exclude (Meta excluded_geo_locations.custom_locations). Mirrors the inclusion customLocations shape. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
