# # CalendarEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**provider** | **string** |  | [optional]
**calendar_id** | **string** |  | [optional]
**title** | **string** |  | [optional]
**description** | **string** |  | [optional]
**location** | **string** |  | [optional]
**start** | **string** | ISO date-time with the rendered offset, or a date for all-day events. | [optional]
**end** | **string** |  | [optional]
**all_day** | **bool** |  | [optional]
**timezone** | **string** |  | [optional]
**participants** | [**\Zernio\Model\CalendarEventParticipantsInner[]**](CalendarEventParticipantsInner.md) |  | [optional]
**organizer** | [**\Zernio\Model\EmailAddress**](EmailAddress.md) |  | [optional]
**recurrence** | **string[]** |  | [optional]
**reminders** | [**\Zernio\Model\CalendarEventReminders**](CalendarEventReminders.md) |  | [optional]
**conferencing** | [**\Zernio\Model\CalendarEventConferencing**](CalendarEventConferencing.md) |  | [optional]
**busy** | **bool** |  | [optional]
**visibility** | **string** |  | [optional]
**status** | **string** |  | [optional]
**ical_uid** | **string** |  | [optional]
**master_event_id** | **string** |  | [optional]
**html_link** | **string** |  | [optional]
**read_only** | **bool** |  | [optional]
**metadata** | **array<string,string>** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
