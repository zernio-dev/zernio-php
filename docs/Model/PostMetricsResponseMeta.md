# # PostMetricsResponseMeta

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stale** | **bool** | True when the analytics backend was over capacity and part of this answer came from a stored copy instead of a live read. |
**stale_since** | **string** | With stale&#x3D;true: when the oldest stored copy used stopped being fresh. |
**entity** | **string** |  |
**granularity** | **string** |  |
**from_date** | **string** |  |
**to_date** | **string** |  |
**missing_ids** | **string[]** | Ids asked that match no published post the caller can read. |
**total** | **int** |  |
**sync_requested_account_ids** | **string[]** | On a list of posts: the accounts this read queued for a fresh sync, because they were never synced or their stored numbers are over 90 minutes old. The answer holds the stored numbers; the synced ones arrive within minutes. | [optional]
**analytics_off** | [**\Zernio\Model\AnalyticsOffAccount[]**](AnalyticsOffAccount.md) | The X accounts read whose analytics sync does not run: their stored numbers are not refreshed, and their posts without any stay pending. On a list, on the first page. Absent when there are none, and on the groupBy and changedSince reads other than groupBy&#x3D;post. | [optional]
**metrics_sample** | [**\Zernio\Model\PostMetricsResponseMetaAllOfMetricsSample**](PostMetricsResponseMetaAllOfMetricsSample.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
