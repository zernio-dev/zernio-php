# # SendEventsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** | Profile the events belong to. Its saved destinations receive the events. |
**events** | [**\Zernio\Model\ConversionEvent[]**](ConversionEvent.md) |  |
**destinations** | [**\Zernio\Model\SendEventsRequestDestinationsInner[]**](SendEventsRequestDestinationsInner.md) | Send to these destinations instead of the saved ones (every event goes to each). | [optional]
**consent** | [**\Zernio\Model\SendEventsRequestConsent**](SendEventsRequestConsent.md) |  | [optional]
**test_code** | **string** | Forwarded as each platform test code (see POST /v1/ads/conversions). Test events are not stored. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
