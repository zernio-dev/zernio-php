# # ListWhatsAppConversions200ResponseEventsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timestamp** | **\DateTime** | When the event was sent to Meta. | [optional]
**event_name** | **string** | One of LeadSubmitted, Purchase, AddToCart, InitiateCheckout, ViewContent. | [optional]
**conversation_id** | **string** |  | [optional]
**events_received** | **int** | Number of events Meta accepted on this send (usually 1). | [optional]
**events_failed** | **int** | Number of events Meta rejected (usually 0). | [optional]
**trace_id** | **string** | Meta fbtrace_id for cross-referencing in Events Manager. | [optional]
**duration_ms** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
