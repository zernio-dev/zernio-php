# # SendEvents200ResponseDestinationsInnerFailuresInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_index** | **int** | Position of the event in the request&#39;s &#x60;events&#x60; array, counted from 0, also when repeats or events this destination does not take were left out. | [optional]
**event_id** | **string** |  | [optional]
**message** | **string** |  | [optional]
**code** | [**\Zernio\Model\SendConversions200ResponseFailuresInnerCode**](SendConversions200ResponseFailuresInnerCode.md) |  | [optional]
**field** | **string** | Google Ads and Campaign Manager 360 only: the event field Google refused (&#x60;event_timestamp&#x60;, &#x60;currency&#x60;...), without the &#x60;events.events[N].&#x60; prefix. Absent when Google named the event but no field. | [optional]
**scope** | **string** | Google Ads and Campaign Manager 360 only, when Google refused the request. Absent for other platforms.  - &#x60;event&#x60;: Google named this event, and &#x60;message&#x60; is its own violation. - &#x60;batch&#x60;: the refusal is about the whole request (destination, account, an outage) and is copied to every event of it. - &#x60;batch_rejected&#x60;: Google did not name this event, but its resend without the named events failed too. &#x60;message&#x60; is that resend&#39;s error. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
