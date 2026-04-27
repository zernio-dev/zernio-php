# # SendWhatsAppConversion200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** |  | [optional]
**events_received** | **int** | Events accepted by Meta. | [optional]
**events_failed** | **int** | Events rejected by Meta (see failures). | [optional]
**failures** | [**\Zernio\Model\SendConversions200ResponseFailuresInner[]**](SendConversions200ResponseFailuresInner.md) | Per-event failure detail. Empty when all events were accepted. | [optional]
**trace_id** | **string** | Meta &#x60;fbtrace_id&#x60; for debugging. Surface in support tickets. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
