# # ListFormLeads200ResponseMeta

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**form_id** | **string** |  | [optional]
**source** | **string** | persisted: leads stored from the webhook and the reconcile pass. live: read from Meta because none are stored for this form yet. | [optional]
**last_checked_at** | **\DateTime** | When Zernio last read this form&#39;s leads from Meta. For persisted leads, the last reconcile pass for the Page (null before the first one). For live reads, when the cached Graph read was made. | [optional]
**last_updated** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
