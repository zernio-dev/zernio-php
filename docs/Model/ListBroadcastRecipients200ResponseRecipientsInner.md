# # ListBroadcastRecipients200ResponseRecipientsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**contact_id** | **string** |  | [optional]
**channel_id** | **string** |  | [optional]
**platform_identifier** | **string** |  | [optional]
**contact_name** | **string** |  | [optional]
**status** | **string** |  | [optional]
**message_id** | **string** |  | [optional]
**error** | **string** |  | [optional]
**error_code** | **int** | Meta WhatsApp error code (e.g. 131049 for a per-user marketing limit, 131021 for a recipient that is the sending number, 131026 for an undeliverable message). Only populated for status&#x3D;failed. | [optional]
**error_explanation** | **string** | Plain-language translation of errorCode (e.g. for 131026, that the recipient has likely opted out of marketing messages). Null for unmapped codes; fall back to error. | [optional]
**error_trace_id** | **string** | Meta trace id (fbtrace_id) for the failed send. Quote this when escalating to Meta Direct Support. Only populated for status&#x3D;failed on Meta platforms. | [optional]
**sent_at** | **\DateTime** |  | [optional]
**delivered_at** | **\DateTime** |  | [optional]
**read_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
