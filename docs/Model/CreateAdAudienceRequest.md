# # CreateAdAudienceRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  |
**ad_account_id** | **string** | Must start with act_ |
**name** | **string** |  |
**description** | **string** |  | [optional]
**type** | **string** |  |
**pixel_id** | **string** | Required for website audiences | [optional]
**retention_days** | **int** | Required for website audiences | [optional]
**source_audience_id** | **string** | Required for lookalike audiences | [optional]
**country** | **string** | 2-letter code, required for lookalike audiences | [optional]
**ratio** | **float** | Required for lookalike audiences | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
