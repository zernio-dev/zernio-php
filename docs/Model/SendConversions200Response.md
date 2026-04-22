# # SendConversions200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** |  | [optional]
**events_received** | **int** | Events accepted by the platform. | [optional]
**events_failed** | **int** | Events rejected (see failures). | [optional]
**failures** | [**\Zernio\Model\SendConversions200ResponseFailuresInner[]**](SendConversions200ResponseFailuresInner.md) |  | [optional]
**trace_id** | **string** | Platform trace ID (fbtrace_id for Meta, requestId for Google) for debugging. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
