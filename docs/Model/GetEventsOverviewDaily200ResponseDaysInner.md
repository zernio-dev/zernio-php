# # GetEventsOverviewDaily200ResponseDaysInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**day** | **\DateTime** |  | [optional]
**conversions** | **int** | Stored events that occurred that day. | [optional]
**sent** | **int** | Events first sent to a destination that day. | [optional]
**accepted** | **int** | Those the platform accepted. | [optional]
**value** | **float** | The day&#39;s value, in the period&#39;s &#x60;totals.currency&#x60;. | [optional]
**value_sent** | **float** | Of that value, the conversions a platform accepted. | [optional]
**from_ads** | **int** | Counted events that came from an ad, as in &#x60;totals.fromAds&#x60;. | [optional]
**matched** | **int** | Events matched to an ad campaign. | [optional]
**by_event** | **array<string,int>** | The day&#39;s stored events per event name. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
