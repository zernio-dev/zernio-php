# # ValueRuleCriterion

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Platform criterion id. Echo it on &#x60;PUT&#x60; to KEEP this criterion, omit it to CREATE a new one. A criterion left out of the array entirely is DELETED. | [optional]
**criteria_type** | **string** | The dimension being matched. &#x60;OMNI_CHANNEL&#x60; (conversion location: APP, INSTANT_FORM, PHONE_CALL, WEBSITE) is accepted even though Meta&#39;s own enum table omits it. |
**operator** | **string** | Required on every criterion. &#x60;CONTAINS&#x60; is currently the only value Meta supports. |
**criteria_values** | **string[]** | The values to match.  - &#x60;AGE&#x60;: ranges such as &#x60;18-24&#x60;, &#x60;18+&#x60; or a custom &#x60;18-26&#x60;. A range whose upper bound is 65 is NOT allowed (use &#x60;18+&#x60; instead of &#x60;18-65&#x60;). - &#x60;LOCATION&#x60;: Targeting-Search keys. A two-letter country code for &#x60;LOCATION_COUNTRY&#x60;, a numeric key for region / city / comScore market. - &#x60;AUDIENCE_LABEL&#x60;: labels such as &#x60;HIGH_VALUE&#x60;, which are applied to a Custom Audience in Ads Manager. There is no API to provision them, so they are passed through unvalidated. |
**criteria_value_types** | **string[]** | One entry per &#x60;criteriaValues&#x60; entry, in the same order. The literal &#x60;\&quot;NONE\&quot;&#x60; for every criteriaType except &#x60;LOCATION&#x60;, which uses &#x60;LOCATION_COUNTRY&#x60;, &#x60;LOCATION_REGION&#x60;, &#x60;LOCATION_CITY&#x60; or &#x60;LOCATION_COMSCORE_MARKET&#x60; and MAY mix them within one criterion. &#x60;LOCATION_DMA&#x60; was replaced by &#x60;LOCATION_COMSCORE_MARKET&#x60; on 2026-06-22 and is rejected by this API. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
