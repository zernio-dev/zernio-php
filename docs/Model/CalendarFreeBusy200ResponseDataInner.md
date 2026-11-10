# # CalendarFreeBusy200ResponseDataInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  | [optional]
**from** | **\DateTime** |  | [optional]
**to** | **\DateTime** |  | [optional]
**busy** | [**\Zernio\Model\BusyBlock[]**](BusyBlock.md) | The account&#39;s own busy time across the calendars read, merged. Null when the account could not be read. | [optional]
**calendars** | [**\Zernio\Model\CalendarFreeBusy200ResponseDataInnerCalendarsInner[]**](CalendarFreeBusy200ResponseDataInnerCalendarsInner.md) |  | [optional]
**people** | [**\Zernio\Model\CalendarFreeBusy200ResponseDataInnerPeopleInner[]**](CalendarFreeBusy200ResponseDataInnerPeopleInner.md) |  | [optional]
**error** | [**\Zernio\Model\FreeBusyError**](FreeBusyError.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
