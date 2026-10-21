# # SendWhatsAppConversion200ResponseFailuresInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_index** | **int** | Index into the submitted events array. | [optional]
**event_id** | **string** | Echoes back the eventId of the failed event. | [optional]
**message** | **string** |  | [optional]
**code** | [**\Zernio\Model\SendConversions200ResponseFailuresInnerCode**](SendConversions200ResponseFailuresInnerCode.md) |  | [optional]
**platform_error** | **array<string,mixed>** | Meta&#39;s own error for the rejected event, with credentials redacted: &#x60;message&#x60;, &#x60;type&#x60;, &#x60;code&#x60;, &#x60;error_subcode&#x60;, &#x60;error_user_title&#x60;, &#x60;error_user_msg&#x60; and &#x60;fbtrace_id&#x60; when Meta sends them. &#x60;message&#x60; above already ends with &#x60;error_user_msg&#x60;. Absent when Meta returned no error body. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
