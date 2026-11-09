# # SendEventsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** | Profile the events belong to. Its saved destinations receive the events. |
**events** | [**\Zernio\Model\ConversionEvent[]**](ConversionEvent.md) |  |
**destinations** | [**\Zernio\Model\SendEventsRequestDestinationsInner[]**](SendEventsRequestDestinationsInner.md) | Send to these destinations instead of the saved ones (every event goes to each). | [optional]
**consent** | [**\Zernio\Model\SendEventsRequestConsent**](SendEventsRequestConsent.md) |  | [optional]
**test_code** | **string** | Forwarded as each platform test code (see POST /v1/ads/conversions). A root-level &#x60;test_event_code&#x60; is accepted as an alias. Test events are not stored. | [optional]
**mode** | **string** | &#x60;sync&#x60; sends to every destination before answering (200, per-destination results). &#x60;async&#x60; stores and queues the sends, then answers 202 at once; each send is retried while the platform fails for now, and its outcome shows on GET /v1/events/{eventId}. Requests with &#x60;testCode&#x60; always send now. | [optional] [default to 'sync']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
