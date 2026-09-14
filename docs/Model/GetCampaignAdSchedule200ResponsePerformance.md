# # GetCampaignAdSchedule200ResponsePerformance

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**window_days** | **int** | The trailing window used, or null when an explicit fromDate/toDate range was given. | [optional]
**by_day_of_week** | [**\Zernio\Model\GetCampaignAdSchedule200ResponsePerformanceByDayOfWeekInner[]**](GetCampaignAdSchedule200ResponsePerformanceByDayOfWeekInner.md) | One entry per day that delivered, Monday first. | [optional]
**by_hour** | [**\Zernio\Model\GetCampaignAdSchedule200ResponsePerformanceByHourInner[]**](GetCampaignAdSchedule200ResponsePerformanceByHourInner.md) | One entry per hour that delivered, 0-23 in the account time zone. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
