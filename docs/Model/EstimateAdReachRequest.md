# # EstimateAdReachRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Zernio account ID on the target ad platform (the estimate runs against its platform). |
**ad_account_id** | **string** | Required. The platform ad-account ID the reach call runs against (Meta act_..., LinkedIn numeric sponsoredAccount ID, Pinterest ad-account ID, X account ID) - every backing reach API is scoped to one ad account. Get it from GET /v1/ads/accounts. |
**spec** | [**\ZernioModelTargetingSpec**](\ZernioModelTargetingSpec.md) | The targeting spec to estimate. Same shape used by POST /v1/ads/create. Required unless &#x60;rawTargeting&#x60; is sent; with &#x60;rawTargeting&#x60; it can be omitted or minimal. | [optional]
**raw_targeting** | **array<string,mixed>** | Meta only. A Meta-native targeting spec (snake_case: &#x60;geo_locations&#x60;, &#x60;age_min&#x60;, &#x60;flexible_spec&#x60;, &#x60;excluded_custom_audiences&#x60;, &#x60;user_os&#x60;, ...), the same field &#x60;POST /v1/ads/create&#x60; accepts, so the estimate covers the exact audience the ad set will use. Sending it for an account on another platform returns 400 naming &#x60;rawTargeting&#x60;.  For layered targeting, send &#x60;flexible_spec&#x60; here: entries AND together, ids inside one entry OR.  **Merge rules** (same as &#x60;POST /v1/ads/create&#x60;):  - rawTargeting is the BASE layer; &#x60;spec&#x60;, converted to Meta&#39;s wire shape, is merged on top key by key, with &#x60;spec&#x60; winning on collision. - The merge goes one level deep inside &#x60;geo_locations&#x60; and &#x60;excluded_geo_locations&#x60; (spec sub-keys win, raw-only sub-keys such as &#x60;location_types&#x60; survive). - Array values (&#x60;flexible_spec&#x60;, ...) are replaced as a whole key when &#x60;spec&#x60; builds them, never element-merged, so &#x60;spec.interests&#x60; or &#x60;spec.behaviors&#x60; replace a raw &#x60;flexible_spec&#x60;.  The result is sent to Meta &#x60;delivery_estimate&#x60; as &#x60;targeting_spec&#x60;. | [optional]
**optimization_goal** | **string** | Optional. The optimization goal the estimate should assume (platform&#39;s own vocabulary, e.g. Meta &#x60;REACH&#x60;, &#x60;LINK_CLICKS&#x60;, &#x60;OFFSITE_CONVERSIONS&#x60;). Some platforms vary the estimate by goal; omit to use the platform default. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
