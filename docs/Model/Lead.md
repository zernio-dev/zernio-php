# # Lead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Meta &#x60;leadgen_id&#x60;. | [optional]
**created_time** | **\DateTime** |  | [optional]
**ad_id** | **string** | Meta ad ID that surfaced the form. Organic leads omit this. | [optional]
**form_id** | **string** |  | [optional]
**fields** | **array<string,string>** | Flattened key→value map of answers (multi-value fields joined with \&quot;, \&quot;). | [optional]
**field_data** | [**\Zernio\Model\LeadFieldDataInner[]**](LeadFieldDataInner.md) | Raw &#x60;field_data&#x60; from Meta (one entry per question). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
