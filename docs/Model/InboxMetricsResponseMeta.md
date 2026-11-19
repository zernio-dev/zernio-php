# # InboxMetricsResponseMeta

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stale** | **bool** | True when the analytics backend was over capacity and part of this answer came from a stored copy instead of a live read. |
**stale_since** | **string** | With stale&#x3D;true: when the oldest stored copy used stopped being fresh. |
**entity** | **string** |  |
**granularity** | **string** |  |
**group_by** | **string[]** |  |
**from_date** | **string** |  |
**to_date** | **string** |  |
**total** | **int** | With groupBy&#x3D;conversation and include&#x3D;total: the conversations the list holds, up to 100,000. |
**total_is_capped** | **bool** | true when the conversation list holds more than 100,000 conversations. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
