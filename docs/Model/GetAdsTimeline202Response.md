# # GetAdsTimeline202Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**backfill_pending** | **bool** | Always true on this response. Part of the requested range is still being backfilled; retry until the request returns 200. |
**previous_rows** | **array<string,mixed>[]** | Only with &#x60;compare&#x3D;previous&#x60;. The daily rows of &#x60;previousRange&#x60;, in the same shape as &#x60;rows&#x60;. | [optional]
**previous_range** | [**\Zernio\Model\AdsTimelineResponsePreviousRange**](AdsTimelineResponsePreviousRange.md) |  | [optional]
**rows** | [**\Zernio\Model\AdsTimelineResponseRowsInner[]**](AdsTimelineResponseRowsInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
