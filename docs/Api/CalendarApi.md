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

Creates a calendar event. Conferencing and recurrence behave differently on Microsoft and Google accounts.  ### Microsoft accounts  - `conferencing: teams` adds a Teams meeting. The created event comes back with `conferencing: null` when the tenant has no Teams (the EEA Business Basic SKUs ship without it). - `google_meet` is rejected with 400 (`param: conferencing`).  ### Google accounts  - `conferencing: google_meet` adds a Meet link. - `teams` is rejected with 400. - `recurrence` accepts any RRULE Google Calendar supports.  ### Recurrence  `recurrence` takes one RRULE line with FREQ, INTERVAL, COUNT, UNTIL, BYDAY and BYSETPOS. Other parts are rejected with 400 (`param: recurrence`).

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
$create_calendar_event_request = new \Zernio\Model\CreateCalendarEventRequest(); // \Zernio\Model\CreateCalendarEventRequest

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
deleteCalendarEvent($event_id, $account_id, $calendar_id): \Zernio\Model\DeleteCalendarEvent200Response
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
$account_id = 'account_id_example'; // string | The connected Google or Microsoft account.
$calendar_id = 'calendar_id_example'; // string | The calendar holding the event (an id from GET /v1/calendar/calendars). Defaults to the primary calendar.

try {
    $result = $apiInstance->deleteCalendarEvent($event_id, $account_id, $calendar_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->deleteCalendarEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_id** | **string**|  | |
| **account_id** | **string**| The connected Google or Microsoft account. | |
| **calendar_id** | **string**| The calendar holding the event (an id from GET /v1/calendar/calendars). Defaults to the primary calendar. | [optional] |

### Return type

[**\Zernio\Model\DeleteCalendarEvent200Response**](../Model/DeleteCalendarEvent200Response.md)

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
$account_id = 'account_id_example'; // string | The connected Google or Microsoft account.
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
| **account_id** | **string**| The connected Google or Microsoft account. | |
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

## `listCalendarEvents()`

```php
listCalendarEvents($account_id, $from, $to, $calendar_id, $title, $location, $show_cancelled, $expand_recurring, $ical_uid, $sort_order, $cursor, $limit, $timezone): \Zernio\Model\ListCalendarEvents200Response
```

List events in a window

Recurring series are expanded into their occurrences inside the window by default (`expandRecurring=false` lists the masters instead). `title` and `location` are substring matches applied to the fetched page.

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
$account_id = 'account_id_example'; // string | The connected Google or Microsoft account.
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$calendar_id = 'calendar_id_example'; // string | Defaults to the primary calendar.
$title = 'title_example'; // string
$location = 'location_example'; // string
$show_cancelled = false; // bool
$expand_recurring = true; // bool
$ical_uid = 'ical_uid_example'; // string
$sort_order = 'asc'; // string
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
| **account_id** | **string**| The connected Google or Microsoft account. | |
| **from** | **\DateTime**|  | |
| **to** | **\DateTime**|  | |
| **calendar_id** | **string**| Defaults to the primary calendar. | [optional] |
| **title** | **string**|  | [optional] |
| **location** | **string**|  | [optional] |
| **show_cancelled** | **bool**|  | [optional] [default to false] |
| **expand_recurring** | **bool**|  | [optional] [default to true] |
| **ical_uid** | **string**|  | [optional] |
| **sort_order** | **string**|  | [optional] [default to &#39;asc&#39;] |
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
$account_id = 'account_id_example'; // string | The connected Google or Microsoft account.

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
| **account_id** | **string**| The connected Google or Microsoft account. | |

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

Accepts, declines or tentatively accepts on behalf of the mailbox and notifies the organizer.

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
