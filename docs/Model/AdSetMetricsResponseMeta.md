# # AdSetMetricsResponseMeta

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stale** | **bool** | True when the analytics backend was over capacity and part of this answer came from a stored copy instead of a live read. |
**stale_since** | **string** | With stale&#x3D;true: when the oldest stored copy used stopped being fresh. |
**from_date** | **string** |  |
**to_date** | **string** |  |
**missing_ids** | **string[]** | With adSetId, asked ids that are not ad sets the caller can see. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
