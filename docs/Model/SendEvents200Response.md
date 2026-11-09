# # SendEvents200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**events_received** | **int** | Events in the request. | [optional]
**stored** | **bool** | Whether the events were stored for reporting (always false with testCode). | [optional]
**test_code** | **string** | The test code forwarded to every destination, or &#x60;null&#x60; when the request carried none. | [optional]
**destinations** | [**\Zernio\Model\SendEvents200ResponseDestinationsInner[]**](SendEvents200ResponseDestinationsInner.md) |  | [optional]
**queued_destinations** | **int** | Destinations whose sends were queued (all of them with &#x60;mode: async&#x60;, retries with &#x60;sync&#x60;). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
