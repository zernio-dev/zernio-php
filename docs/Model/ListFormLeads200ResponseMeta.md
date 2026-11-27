# # ListFormLeads200ResponseMeta

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**form_id** | **string** |  | [optional]
**source** | **string** | persisted: leads stored from the webhook and the recovery pass. live: read from Meta because none are stored for this form yet, or because content is not retained. | [optional]
**last_checked_at** | **\DateTime** | For persisted leads, when the recovery pass last ran for the Page, failed or parked passes included (null before the first one). It does not prove every lead is stored. For live reads, when Meta was read. | [optional]
**last_updated** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
