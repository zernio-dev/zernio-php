# # GetEventsOverviewDaily200ResponseTotals

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**conversions** | **int** | Stored events that occurred in the period, retracted ones excluded. | [optional]
**value** | **float** | Value of those events in &#x60;currency&#x60;. Events in other currencies are left out. | [optional]
**value_sent** | **float** | Value in &#x60;currency&#x60; of those events at least one platform accepted. | [optional]
**currency** | **string** | The currency most of the period&#39;s events use; &#x60;null&#x60; when none carried a value. | [optional]
**sent** | **int** | Events first sent to a destination in the period, one per event and destination. | [optional]
**accepted** | **int** | Those whose latest send the platform accepted. | [optional]
**matched** | **int** | The period&#39;s events matched to an ad campaign. | [optional]
**counted** | **int** | The period&#39;s events that count as campaign results, the ones looked up for a campaign. | [optional]
**from_ads** | **int** | Of the counted events, those that came from an ad: they named a campaign or carried a UTM campaign, a Google click id or a Zernio ad id (&#x60;zrn&#x60;), their own or the website visit&#39;s behind them. &#x60;matched&#x60; over &#x60;fromAds&#x60; is the share tied to a campaign. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
