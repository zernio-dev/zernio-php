# # DuplicateAdCampaign200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**copied_campaign_id** | **string** | Platform ID of the new campaign | [optional]
**ad_set_id_map** | **array<string,string>** | Meta only: source ad set ID to copied ad set ID. Empty when &#x60;deepCopy&#x60; is false. | [optional]
**ad_id_map** | **array<string,string>** | Meta only: source ad ID to copied ad ID, across every copied ad set. Empty when &#x60;deepCopy&#x60; is false. | [optional]
**discovery** | **string** |  | [optional]
**raw** | **object** | Platform-native response from the copy (TikTok and LinkedIn). Absent on Meta, which returns &#x60;adSetIdMap&#x60; and &#x60;adIdMap&#x60; instead. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
