# # SendConversions200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** |  | [optional]
**events_received** | **int** | Events accepted by the platform. | [optional]
**events_failed** | **int** | Events rejected (see failures). | [optional]
**failures** | [**\Zernio\Model\SendConversions200ResponseFailuresInner[]**](SendConversions200ResponseFailuresInner.md) |  | [optional]
**trace_id** | **string** | Platform trace ID for debugging. fbtrace_id for Meta, requestId for Google, request_id for TikTok. Absent for LinkedIn (LinkedIn&#39;s conversionEvents endpoint does not surface a trace ID), OpenAI Ads and Reddit (no trace ID surfaced). | [optional]
**platform_messages** | **string[]** | Meta only. Meta&#39;s &#x60;messages&#x60; (warnings about the events it accepted), each distinct one once, at most 20. Absent when Meta sent none. | [optional]
**test_code** | **string** | The test code sent to the platform, as received (from &#x60;testCode&#x60; or &#x60;test_event_code&#x60;). &#x60;null&#x60; when the request carried none, so the events were sent as production events. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
