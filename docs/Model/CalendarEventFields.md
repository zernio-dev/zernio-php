# # CalendarEventFields

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** |  | [optional]
**description** | **string** | HTML. | [optional]
**location** | **string** |  | [optional]
**start** | **string** | ISO date-time, or a date (&#x60;YYYY-MM-DD&#x60;) for all-day events. | [optional]
**end** | **string** | Exclusive for all-day events. | [optional]
**all_day** | **bool** |  | [optional]
**timezone** | **string** | IANA zone the event is scheduled in. Default UTC. | [optional]
**participants** | [**\Zernio\Model\EmailAddress[]**](EmailAddress.md) |  | [optional]
**recurrence** | **string[]** | RRULE lines, e.g. &#x60;RRULE:FREQ&#x3D;WEEKLY;BYDAY&#x3D;MO,WE;COUNT&#x3D;10&#x60;. | [optional]
**reminders** | [**\Zernio\Model\CalendarEventFieldsReminders**](CalendarEventFieldsReminders.md) |  | [optional]
**conferencing** | **string** |  | [optional]
**busy** | **bool** |  | [optional]
**visibility** | **string** |  | [optional]
**metadata** | **array<string,string>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
