# # UpdateCampaignAdScheduleRequestScheduleInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**day_of_week** | **string** |  |
**start_hour** | **int** |  |
**start_minute** | **int** | Quarter-hours only. | [optional] [default to self::START_MINUTE_NUMBER_0]
**end_hour** | **int** | 24 means midnight at the end of the day. |
**end_minute** | **int** | Quarter-hours only. Must be 0 when endHour is 24. | [optional] [default to self::END_MINUTE_NUMBER_0]
**bid_modifier** | **float** | Bid adjustment for this window. Null runs it at the campaign bid. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
