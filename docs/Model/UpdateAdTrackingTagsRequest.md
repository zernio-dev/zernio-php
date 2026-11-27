# # UpdateAdTrackingTagsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stage** | **bool** | Send true to store this write as a staged change instead of applying it. The response is &#x60;202&#x60; with the change, and POST /v1/ads/changes/{changeId}/confirm applies it later. Cannot be combined with &#x60;validateOnly&#x60;. | [optional]
**url_tags** | [**\Zernio\Model\UpdateAdTrackingTagsRequestUrlTagsInner[]**](UpdateAdTrackingTagsRequestUrlTagsInner.md) | Meta only. Click-URL params appended to a freshly-rebuilt creative. Meta dynamic macros ({{ad.id}}, {{campaign.id}}, {{placement}}, ...) are sent through unescaped so Meta expands them; every other character is percent-encoded. | [optional]
**creative** | [**\Zernio\Model\UpdateAdTrackingTagsRequestCreative**](UpdateAdTrackingTagsRequestCreative.md) |  | [optional]
**tracking_url_template** | **string** | Google only. Full tracking template (must contain {lpurl}). | [optional]
**final_url_suffix** | **string** | Google only. Parse-only key&#x3D;value params. | [optional]
**dynamic_value_parameters** | **array<string,string>** | LinkedIn only. key -&gt; dynamic value enum (CAMPAIGN_ID, CAMPAIGN_NAME, CREATIVE_ID, ...). | [optional]
**custom_value_parameters** | **array<string,string>** | LinkedIn only. key -&gt; static value. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
