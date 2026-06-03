# # UpdateAdTrackingTagsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url_tags** | [**\Zernio\Model\UpdateAdTrackingTagsRequestUrlTagsInner[]**](UpdateAdTrackingTagsRequestUrlTagsInner.md) | Meta only. Click-URL params appended to a freshly-rebuilt creative. | [optional]
**creative** | [**\Zernio\Model\UpdateAdTrackingTagsRequestCreative**](UpdateAdTrackingTagsRequestCreative.md) |  | [optional]
**tracking_url_template** | **string** | Google only. Full tracking template (must contain {lpurl}). | [optional]
**final_url_suffix** | **string** | Google only. Parse-only key&#x3D;value params. | [optional]
**dynamic_value_parameters** | **array<string,string>** | LinkedIn only. key -&gt; dynamic value enum (CAMPAIGN_ID, CAMPAIGN_NAME, CREATIVE_ID, ...). | [optional]
**custom_value_parameters** | **array<string,string>** | LinkedIn only. key -&gt; static value. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
