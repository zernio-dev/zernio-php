# # RfPrediction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**prediction_id** | **string** |  | [optional]
**status** | **string** | ready | pending | failed:&lt;meta code&gt; | [optional]
**budget** | **float** | Quoted (or provided) lifetime budget for the window. | [optional]
**reach** | **int** | Predicted (or requested) unique reach. | [optional]
**impressions** | **int** |  | [optional]
**min_budget** | **float** | Meta&#39;s allowed lower bound for this spec. | [optional]
**max_budget** | **float** |  | [optional]
**min_reach** | **int** |  | [optional]
**max_reach** | **int** |  | [optional]
**frequency_cap** | **int** |  | [optional]
**start_time** | **int** | Unix seconds; the reserved window the R&amp;F ad set will run on. | [optional]
**stop_time** | **int** |  | [optional]
**expires_at** | **string** | When the reservation&#39;s locked price expires (set after reserving). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
