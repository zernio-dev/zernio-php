# # ListCalendarEvents200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data** | [**\Zernio\Model\CalendarEvent[]**](CalendarEvent.md) |  | [optional]
**pagination** | [**\Zernio\Model\CursorPagination**](CursorPagination.md) |  | [optional]
**stale** | **bool** | Always true when present. Present only when the provider did not answer and this is the last list Zernio read for the same account and query within the past hour. | [optional]
**as_of** | **\DateTime** | When a stale list was read from the provider. Present only with &#x60;stale&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
