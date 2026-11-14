# # SendEvents200ResponseDestinationsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  | [optional]
**destination_id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**events_sent** | **int** | Events the platform accepted. | [optional]
**events_failed** | **int** |  | [optional]
**failures** | [**\Zernio\Model\SendEvents200ResponseDestinationsInnerFailuresInner[]**](SendEvents200ResponseDestinationsInnerFailuresInner.md) |  | [optional]
**error** | **string** | Set when the destination could not be reached at all (account disconnected, unsupported platform, platform error). | [optional]
**retrying** | **bool** | The destination failed for now (platform error, timeout, rate limit) and the send is queued for retries; its outcome shows on GET /v1/events/{eventId}. | [optional]
**trace_id** | **string** | The platform trace ID of the send (Meta &#x60;fbtrace_id&#x60;, Google &#x60;requestId&#x60;, TikTok &#x60;request_id&#x60;), to quote to the platform support. Absent when the platform returns none. | [optional]
**platform_messages** | **string[]** | Meta&#39;s &#x60;messages&#x60; (warnings about the events it accepted), each distinct one once, at most 20. Absent when the platform sent none. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
