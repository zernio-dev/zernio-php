# # CommerceCatalogSync

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**account_id** | **string** | The store SocialAccount id. | [optional]
**catalog_platform** | **string** |  | [optional]
**catalog_account_id** | **string** | The Meta login account whose token writes to the catalog. | [optional]
**catalog_id** | **string** |  | [optional]
**run_status** | **string** |  | [optional]
**last_run_started_at** | **\DateTime** |  | [optional]
**last_run_finished_at** | **\DateTime** |  | [optional]
**last_error** | **string** | Why the last run failed, or how many items Meta rejected in a run that otherwise succeeded. Null after a clean run. | [optional]
**items_sent** | **int** | Catalog items (one per variant) Meta accepted in the last full run. | [optional]
**items_skipped** | **int** | Products the last full run could not list: not published to the online store or without an image. | [optional]
**items_deleted** | **int** | Items the last full run removed because the store no longer has them. | [optional]
**created_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
