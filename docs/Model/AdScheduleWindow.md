# # AdScheduleWindow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**criterion_id** | **string** | Google campaign criterion id. Changes whenever the window is rewritten, because Google cannot edit a schedule in place. | [optional]
**resource_name** | **string** |  | [optional]
**day_of_week** | **string** |  | [optional]
**start_hour** | **int** |  | [optional]
**start_minute** | **int** |  | [optional]
**end_hour** | **int** | 24 means midnight at the end of the day. | [optional]
**end_minute** | **int** |  | [optional]
**bid_modifier** | **float** | Bid adjustment for this window, 0.1-10.0. Null when the window runs at the campaign bid. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
