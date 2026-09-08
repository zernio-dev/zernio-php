# # GetCampaignTargeting200ResponseLocationsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**geo_target_id** | **string** | Numeric id from Google&#39;s geoTargetConstants/{id}. | [optional]
**negative** | **bool** | true &#x3D; excluded location. | [optional]
**name** | **string** | Google&#39;s geo_target_constant.name, e.g. \&quot;United States\&quot;; null when the id could not be resolved. | [optional]
**canonical_name** | **string** | Google&#39;s geo_target_constant.canonical_name, e.g. \&quot;California, United States\&quot;; null when the id could not be resolved. | [optional]
**type** | **string** | Google&#39;s geo_target_constant.target_type, e.g. \&quot;Country\&quot;, \&quot;Region\&quot;, \&quot;City\&quot;; null when the id could not be resolved. | [optional]
**country_code** | **string** | Google&#39;s geo_target_constant.country_code, an ISO 3166-1 alpha-2 code; null when the id could not be resolved. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
