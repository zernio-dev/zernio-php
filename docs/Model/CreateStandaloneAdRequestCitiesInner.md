# # CreateStandaloneAdRequestCitiesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | City id from /v1/ads/targeting/search results (Meta city key, Google geo target constant id, TikTok location id). |
**radius** | **float** | Optional radius around the city. Must be set together with distance_unit. Meta enforces a minimum city radius (~17 km / 10 mi); smaller values resolve to a 0-size audience and the ad fails at launch. For a tighter catchment use customLocations (lat/lng). | [optional]
**distance_unit** | **string** | Unit for radius. Required if radius is set. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
