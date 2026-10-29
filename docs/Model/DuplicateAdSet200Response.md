# # DuplicateAdSet200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**copied_ad_set_id** | **string** | Platform ID of the new ad set | [optional]
**copied_ad_ids** | **string[]** | Platform IDs of the copied ads | [optional]
**ad_id_map** | **array<string,string>** | Meta only: source ad ID to copied ad ID. Empty when &#x60;deepCopy&#x60; is false. | [optional]
**discovery** | **string** |  | [optional]
**raw** | **object** | Platform-native response from the copy (TikTok). Absent on Meta, which returns &#x60;adIdMap&#x60; instead. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
