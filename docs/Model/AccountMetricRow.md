# # AccountMetricRow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | **string** | Start of the period: the day, the Monday of the week or the first of the month, never before fromDate. With granularity&#x3D;total, fromDate. |
**account_id** | **string** | With groupBy&#x3D;account. |
**platform** | **string** | With groupBy&#x3D;account or groupBy&#x3D;platform. |
**profile_id** | **string** | With groupBy&#x3D;account. |
**username** | **string** | With groupBy&#x3D;account. |
**metrics** | **array<string,float>** | Each metric asked; null when no account in the row reports it or no follower snapshot exists in the period. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
