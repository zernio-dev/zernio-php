# # CalendarAvailabilityRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**participants** | [**\Zernio\Model\CalendarAvailabilityRequestParticipantsInner[]**](CalendarAvailabilityRequestParticipantsInner.md) |  |
**from** | **\DateTime** |  |
**to** | **\DateTime** |  |
**duration_minutes** | **int** |  |
**interval_minutes** | **int** |  | [optional] [default to 30]
**round_to** | **int** | Rounds the first candidate slot up to this many minutes. | [optional]
**buffer** | [**\Zernio\Model\CalendarAvailabilityRequestBuffer**](CalendarAvailabilityRequestBuffer.md) |  | [optional]
**default_open_hours** | [**\Zernio\Model\OpenHoursInner[]**](OpenHoursInner.md) |  | [optional]
**method** | **string** |  | [optional] [default to 'collective']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
