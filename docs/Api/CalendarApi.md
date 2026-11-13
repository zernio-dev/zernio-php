# Zernio\CalendarApi

Calendars, events, RSVPs, free/busy and cross-account availability for connected Google and Microsoft accounts. Connect with &#x60;scopes&#x3D;calendar&#x60;.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**calendarAvailability()**](CalendarApi.md#calendarAvailability) | **POST** /v1/calendar/availability | Find meeting slots across accounts |
| [**calendarFreeBusy()**](CalendarApi.md#calendarFreeBusy) | **POST** /v1/calendar/free-busy | Busy blocks for one or more accounts |
| [**createCalendarEvent()**](CalendarApi.md#createCalendarEvent) | **POST** /v1/calendar/events | Create an event |
| [**deleteCalendarEvent()**](CalendarApi.md#deleteCalendarEvent) | **DELETE** /v1/calendar/events/{eventId} | Delete an event |
| [**getCalendarEvent()**](CalendarApi.md#getCalendarEvent) | **GET** /v1/calendar/events/{eventId} | Get an event |
| [**listCalendarEventInstances()**](CalendarApi.md#listCalendarEventInstances) | **GET** /v1/calendar/events/{eventId}/instances | List the occurrences of a recurring event |
| [**listCalendarEvents()**](CalendarApi.md#listCalendarEvents) | **GET** /v1/calendar/events | List events in a window |
| [**listCalendars()**](CalendarApi.md#listCalendars) | **GET** /v1/calendar/calendars | List calendars |
| [**rsvpCalendarEvent()**](CalendarApi.md#rsvpCalendarEvent) | **POST** /v1/calendar/events/{eventId}/rsvp | Respond to an invitation |
| [**updateCalendarEvent()**](CalendarApi.md#updateCalendarEvent) | **PATCH** /v1/calendar/events/{eventId} | Update an event |


## `calendarAvailability()`

```php
calendarAvailability($calendar_availability_request): \Zernio\Model\CalendarAvailability200Response
```

Find meeting slots across accounts

Slots of `durationMinutes` every `intervalMinutes` between `from` and `to` that are free for every participant (`collective`) or for at least one (`max_availability`). Buffers pad the participants' existing meetings. Open hours are evaluated in each participant's own timezone; `defaultOpenHours` applies to participants without their own.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calendar_availability_request = new \Zernio\Model\CalendarAvailabilityRequest(); // \Zernio\Model\CalendarAvailabilityRequest

try {
    $result = $apiInstance->calendarAvailability($calendar_availability_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->calendarAvailability: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **calendar_availability_request** | [**\Zernio\Model\CalendarAvailabilityRequest**](../Model/CalendarAvailabilityRequest.md)|  | |

### Return type

[**\Zernio\Model\CalendarAvailability200Response**](../Model/CalendarAvailability200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `calendarFreeBusy()`

```php
calendarFreeBusy($calendar_free_busy_request): \Zernio\Model\CalendarFreeBusy200Response
```

Busy blocks for one or more accounts

Reads busy time for up to 10 connected accounts, Google and Microsoft mixed, in parallel.  By default a Google account reads every calendar shown in Google Calendar, and a Microsoft account reads the mailbox's schedule. Name calendars with `accounts[].calendarIds`.  Check coworkers who never connected with `accounts[].emails`, read through that account (Google: up to 50 calendars and addresses per account; Microsoft: up to 19 coworkers, work accounts only).  An account that cannot be read gets `busy: null` and an `error`, and the others still answer. When no account can be read, the first error is returned as the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calendar_free_busy_request = new \Zernio\Model\CalendarFreeBusyRequest(); // \Zernio\Model\CalendarFreeBusyRequest

try {
    $result = $apiInstance->calendarFreeBusy($calendar_free_busy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->calendarFreeBusy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **calendar_free_busy_request** | [**\Zernio\Model\CalendarFreeBusyRequest**](../Model/CalendarFreeBusyRequest.md)|  | |

### Return type

[**\Zernio\Model\CalendarFreeBusy200Response**](../Model/CalendarFreeBusy200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCalendarEvent()`

```php
createCalendarEvent($create_calendar_event_request): \Zernio\Model\CreateCalendarEvent201Response
```

Create an event

Creates a calendar event. Conferencing and recurrence behave differently on Microsoft and Google accounts.  ### Microsoft accounts  - `conferencing: teams` adds a Teams meeting. The created event comes back with `conferencing: null` when the tenant has no Teams (the EEA Business Basic SKUs ship without it). - `google_meet` is rejected with 400 (`param: conferencing`).  ### Google accounts  - `conferencing: google_meet` adds a Meet link. - `teams` is rejected with 400. - `recurrence` accepts any RRULE Google Calendar supports.  ### Recurrence  `recurrence` takes one RRULE line with FREQ, INTERVAL, COUNT, UNTIL, BYDAY and BYSETPOS. Other parts are rejected with 400 (`param: recurrence`).  ### Reminders  Each `reminders.overrides` entry is `{ method, minutes }`, with `method` `popup` (default) or `email`.  - Google takes up to 5 overrides of either method. - Outlook keeps one popup reminder, the first override. An `email` override answers 400 `reminder_method_unsupported`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_calendar_event_request = {"accountId":"66b2e19d8c3f5a7e9d0b1c2d","title":"Contract review","start":"2026-11-18T16:00:00+01:00","end":"2026-11-18T17:00:00+01:00","reminders":{"useDefault":false,"overrides":[{"method":"email","minutes":1440},{"method":"popup","minutes":10}]}}; // \Zernio\Model\CreateCalendarEventRequest

try {
    $result = $apiInstance->createCalendarEvent($create_calendar_event_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->createCalendarEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_calendar_event_request** | [**\Zernio\Model\CreateCalendarEventRequest**](../Model/CreateCalendarEventRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateCalendarEvent201Response**](../Model/CreateCalendarEvent201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCalendarEvent()`

```php
deleteCalendarEvent($event_id, $account_id, $calendar_id, $notify_participants): \Zernio\Model\DeleteEmailDraft200Response
```

Delete an event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$account_id = 'account_id_example'; // string | The connected Google, Microsoft or IMAP account.
$calendar_id = 'calendar_id_example'; // string | The calendar holding the event (an id from GET /v1/calendar/calendars). Defaults to the primary calendar.
$notify_participants = 'all'; // string | Who gets the cancellation email. Google only; `external` and `none` answer 400 on a Microsoft account.

try {
    $result = $apiInstance->deleteCalendarEvent($event_id, $account_id, $calendar_id, $notify_participants);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->deleteCalendarEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **account_id** | **string**| The connected Google, Microsoft or IMAP account. | |
| **calendar_id** | **string**| The calendar holding the event (an id from GET /v1/calendar/calendars). Defaults to the primary calendar. | [optional] |
| **notify_participants** | **string**| Who gets the cancellation email. Google only; &#x60;external&#x60; and &#x60;none&#x60; answer 400 on a Microsoft account. | [optional] [default to &#39;all&#39;] |

### Return type

[**\Zernio\Model\DeleteEmailDraft200Response**](../Model/DeleteEmailDraft200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCalendarEvent()`

```php
getCalendarEvent($event_id, $account_id, $calendar_id, $timezone): \Zernio\Model\CreateCalendarEvent201Response
```

Get an event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$account_id = 'account_id_example'; // string | The connected Google, Microsoft or IMAP account.
$calendar_id = 'calendar_id_example'; // string | The calendar holding the event (an id from GET /v1/calendar/calendars). Defaults to the primary calendar.
$timezone = 'timezone_example'; // string

try {
    $result = $apiInstance->getCalendarEvent($event_id, $account_id, $calendar_id, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->getCalendarEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **account_id** | **string**| The connected Google, Microsoft or IMAP account. | |
| **calendar_id** | **string**| The calendar holding the event (an id from GET /v1/calendar/calendars). Defaults to the primary calendar. | [optional] |
| **timezone** | **string**|  | [optional] |

### Return type

[**\Zernio\Model\CreateCalendarEvent201Response**](../Model/CreateCalendarEvent201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCalendarEventInstances()`

```php
listCalendarEventInstances($event_id, $account_id, $from, $to, $calendar_id, $timezone, $cursor, $limit): \Zernio\Model\ListCalendarEventInstances200Response
```

List the occurrences of a recurring event

Lists the occurrences and exceptions of a series between `from` and `to`. Each one has its own `id` to read, update or delete just that occurrence, and `originalStart` for its place in the pattern.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string | The series (master) event id.
$account_id = 'account_id_example'; // string
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$calendar_id = 'calendar_id_example'; // string | The calendar holding the event (an id from GET /v1/calendar/calendars). Defaults to the primary calendar.
$timezone = 'timezone_example'; // string | IANA zone the `start` and `end` offsets are rendered in.
$cursor = 'cursor_example'; // string
$limit = 50; // int

try {
    $result = $apiInstance->listCalendarEventInstances($event_id, $account_id, $from, $to, $calendar_id, $timezone, $cursor, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->listCalendarEventInstances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**| The series (master) event id. | |
| **account_id** | **string**|  | |
| **from** | **\DateTime**|  | |
| **to** | **\DateTime**|  | |
| **calendar_id** | **string**| The calendar holding the event (an id from GET /v1/calendar/calendars). Defaults to the primary calendar. | [optional] |
| **timezone** | **string**| IANA zone the &#x60;start&#x60; and &#x60;end&#x60; offsets are rendered in. | [optional] |
| **cursor** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |

### Return type

[**\Zernio\Model\ListCalendarEventInstances200Response**](../Model/ListCalendarEventInstances200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCalendarEvents()`

```php
listCalendarEvents($account_id, $from, $to, $calendar_id, $title, $location, $show_cancelled, $expand_recurring, $ical_uid, $sort_order, $cursor, $limit, $timezone): \Zernio\Model\ListCalendarEvents200Response
```

List events in a window

Recurring series are expanded into their occurrences inside the window by default. `expandRecurring=false` lists the masters instead, including series that started before `from` and still recur in the window.  Events that overlap the window edges are included. `title` and `location` are substring matches applied to the fetched page.  When the provider does not answer, the last list read for the same account and query within the past six hours is returned with `stale: true`, `asOf` and an `X-Zernio-Stale-As-Of` header instead of a 502.  When there is no such list and the window is wider than 31 days, Zernio reads once more with the window cut to one day back and two weeks ahead of now (inside `from` and `to`). It returns that with `partial: true`, `coveredFrom`, `coveredTo` and a `pagination.nextCursor` for the rest.  Send the same request with that `cursor` until `nextCursor` is null. Each call returns a slice of up to 90 days, future first, then the past.  Slices are not sorted against each other, and an event on a slice edge can appear twice, so merge by `id`. The extra fields are absent on a normal read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The connected Google, Microsoft or IMAP account.
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$calendar_id = 'calendar_id_example'; // string | Defaults to the primary calendar.
$title = 'title_example'; // string
$location = 'location_example'; // string
$show_cancelled = false; // bool
$expand_recurring = true; // bool
$ical_uid = 'ical_uid_example'; // string
$sort_order = 'asc'; // string | Order by start time across the whole window. On Google, `desc` reads the window in full, so a window over 2,500 events answers 400; narrow `from` and `to`.
$cursor = 'cursor_example'; // string
$limit = 50; // int
$timezone = 'timezone_example'; // string | IANA zone the `start` and `end` offsets are rendered in. Default UTC.

try {
    $result = $apiInstance->listCalendarEvents($account_id, $from, $to, $calendar_id, $title, $location, $show_cancelled, $expand_recurring, $ical_uid, $sort_order, $cursor, $limit, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->listCalendarEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The connected Google, Microsoft or IMAP account. | |
| **from** | **\DateTime**|  | |
| **to** | **\DateTime**|  | |
| **calendar_id** | **string**| Defaults to the primary calendar. | [optional] |
| **title** | **string**|  | [optional] |
| **location** | **string**|  | [optional] |
| **show_cancelled** | **bool**|  | [optional] [default to false] |
| **expand_recurring** | **bool**|  | [optional] [default to true] |
| **ical_uid** | **string**|  | [optional] |
| **sort_order** | **string**| Order by start time across the whole window. On Google, &#x60;desc&#x60; reads the window in full, so a window over 2,500 events answers 400; narrow &#x60;from&#x60; and &#x60;to&#x60;. | [optional] [default to &#39;asc&#39;] |
| **cursor** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |
| **timezone** | **string**| IANA zone the &#x60;start&#x60; and &#x60;end&#x60; offsets are rendered in. Default UTC. | [optional] |

### Return type

[**\Zernio\Model\ListCalendarEvents200Response**](../Model/ListCalendarEvents200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCalendars()`

```php
listCalendars($account_id): \Zernio\Model\ListCalendars200Response
```

List calendars

The account must have been connected with `scopes=calendar` (412 `account_scope_missing` otherwise).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The connected Google, Microsoft or IMAP account.

try {
    $result = $apiInstance->listCalendars($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->listCalendars: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The connected Google, Microsoft or IMAP account. | |

### Return type

[**\Zernio\Model\ListCalendars200Response**](../Model/ListCalendars200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rsvpCalendarEvent()`

```php
rsvpCalendarEvent($event_id, $rsvp_calendar_event_request): \Zernio\Model\CreateCalendarEvent201Response
```

Respond to an invitation

Accepts, declines or tentatively accepts on behalf of the mailbox and notifies the organizer, unless `sendResponse` is false.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$rsvp_calendar_event_request = new \Zernio\Model\RsvpCalendarEventRequest(); // \Zernio\Model\RsvpCalendarEventRequest

try {
    $result = $apiInstance->rsvpCalendarEvent($event_id, $rsvp_calendar_event_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->rsvpCalendarEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **rsvp_calendar_event_request** | [**\Zernio\Model\RsvpCalendarEventRequest**](../Model/RsvpCalendarEventRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateCalendarEvent201Response**](../Model/CreateCalendarEvent201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCalendarEvent()`

```php
updateCalendarEvent($event_id, $update_calendar_event_request): \Zernio\Model\CreateCalendarEvent201Response
```

Update an event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_id = 'event_id_example'; // string
$update_calendar_event_request = new \Zernio\Model\UpdateCalendarEventRequest(); // \Zernio\Model\UpdateCalendarEventRequest

try {
    $result = $apiInstance->updateCalendarEvent($event_id, $update_calendar_event_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->updateCalendarEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **update_calendar_event_request** | [**\Zernio\Model\UpdateCalendarEventRequest**](../Model/UpdateCalendarEventRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateCalendarEvent201Response**](../Model/CreateCalendarEvent201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
