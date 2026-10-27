# # SendWhatsAppConversion200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** |  | [optional]
**events_received** | **int** | Events accepted by Meta. | [optional]
**events_failed** | **int** | Events rejected by Meta (see failures). | [optional]
**failures** | [**\Zernio\Model\SendWhatsAppConversion200ResponseFailuresInner[]**](SendWhatsAppConversion200ResponseFailuresInner.md) | Per-event failure detail. Empty when all events were accepted. | [optional]
**trace_id** | **string** | Meta &#x60;fbtrace_id&#x60; for debugging. Surface in support tickets. | [optional]
**test_code** | **string** | The test code sent to Meta, or &#x60;null&#x60; when the request carried none. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
