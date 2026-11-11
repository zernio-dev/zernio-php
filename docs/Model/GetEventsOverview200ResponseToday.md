# # GetEventsOverview200ResponseToday

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**conversions** | **int** | Stored events that occurred today, retracted ones excluded. | [optional]
**value** | **float** | Value of those events in &#x60;currency&#x60;. Events in other currencies are left out. | [optional]
**currency** | **string** | The currency most of today&#39;s valued events use; &#x60;null&#x60; when none carried a value. | [optional]
**sent** | **int** | Event sends to a destination today, one per event and destination. | [optional]
**accepted** | **int** | Those whose latest send the platform accepted. | [optional]
**matched** | **int** | Today&#39;s events matched to an ad campaign. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
