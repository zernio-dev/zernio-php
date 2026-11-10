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
**timezone** | **string** | IANA zone the event is scheduled in. Defaults to the calendar&#39;s zone on Google and the mailbox&#39;s working-hours zone on Microsoft (UTC when Outlook has none, as on personal accounts). A PATCH that moves an event without a zone keeps the zone the event already has. | [optional]
**participants** | [**\Zernio\Model\CalendarEventFieldsParticipantsInner[]**](CalendarEventFieldsParticipantsInner.md) |  | [optional]
**recurrence** | **string[]** | RRULE lines, e.g. &#x60;RRULE:FREQ&#x3D;WEEKLY;BYDAY&#x3D;MO,WE;COUNT&#x3D;10&#x60;. Microsoft takes one RRULE plus EXDATE lines; Zernio removes the EXDATE occurrences after saving the series. | [optional]
**reminders** | [**\Zernio\Model\CalendarEventFieldsReminders**](CalendarEventFieldsReminders.md) |  | [optional]
**conferencing** | **string** |  | [optional]
**busy** | **bool** |  | [optional]
**visibility** | **string** |  | [optional]
**metadata** | **array<string,string>** | String pairs stored on the event and returned on reads, on Google and Microsoft. | [optional]
**notify_participants** | **string** | Who gets an invitation or update email for this write: everyone, only guests outside the organizer&#39;s domain, or nobody. Google only; Outlook always notifies, so &#x60;external&#x60; and &#x60;none&#x60; answer 400 &#x60;unsupported_for_provider&#x60; on a Microsoft account. | [optional] [default to 'all']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
