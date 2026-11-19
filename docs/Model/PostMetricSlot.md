# # PostMetricSlot

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**day_of_week** | **int** | UTC weekday the posts were published, 1 (Monday) to 7. |
**hour** | **int** | UTC hour the posts were published, 0 to 23. |
**post_count** | **int** | Posts published in the slot that have been synced at least once. |
**metrics** | **array<string,float>** | Each metric asked, summed over each post&#39;s latest snapshot; engagementRate pools them. null when no platform of the slot reports it. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
