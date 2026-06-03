# # EstimateAdReachRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Zernio social account ID on the target ad platform (the estimate runs against its platform). |
**ad_account_id** | **string** | Required. The platform ad-account ID the reach call runs against (Meta act_..., LinkedIn numeric sponsoredAccount ID, Pinterest ad-account ID, X account ID) - every backing reach API is scoped to one ad account. Get it from GET /v1/ads/accounts. |
**spec** | [**\Zernio\Model\TargetingSpec**](TargetingSpec.md) | The targeting spec to estimate. Same shape used by POST /v1/ads/create. |
**optimization_goal** | **string** | Optional. The optimization goal the estimate should assume (platform&#39;s own vocabulary, e.g. Meta &#x60;REACH&#x60;, &#x60;LINK_CLICKS&#x60;, &#x60;OFFSITE_CONVERSIONS&#x60;). Some platforms vary the estimate by goal; omit to use the platform default. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
