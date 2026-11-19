# # PostMetricsResponseDataInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | **string** | The day, with granularity&#x3D;day. | [optional]
**post_id** | **string** |  |
**external_post_id** | **string** |  |
**account_id** | **string** |  |
**profile_id** | **string** |  |
**platform** | **string** |  |
**platform_post_id** | **string** |  |
**platform_post_url** | **string** |  |
**published_at** | **string** |  |
**last_synced_at** | **string** |  |
**sync_status** | **string** |  |
**sync_error** | [**\Zernio\Model\PostMetricRowSyncError**](PostMetricRowSyncError.md) |  |
**is_owner** | **bool** |  |
**is_ad** | **bool** |  |
**metrics** | **array<string,float>** | Each metric asked, as the platform reported it in this change; null when the post&#39;s platform does not report it. |
**breakdowns** | [**array<string,\Zernio\Model\PostMetricRowBreakdownsValue>**](PostMetricRowBreakdownsValue.md) |  | [optional]
**post** | [**\Zernio\Model\PostMetricContent**](PostMetricContent.md) |  | [optional]
**authenticity** | [**\Zernio\Model\PostMetricAuthenticity**](PostMetricAuthenticity.md) |  | [optional]
**samples** | [**\Zernio\Model\PostMetricSample[]**](PostMetricSample.md) | With include&#x3D;samples: the readings of the publication, oldest first. | [optional]
**platforms** | **string[]** |  |
**account_ids** | **string[]** |  |
**publications** | **int** |  |
**day_of_week** | **int** | UTC weekday the posts were published, 1 (Monday) to 7. |
**hour** | **int** | UTC hour the posts were published, 0 to 23. |
**post_count** | **int** | Posts of the format published in the range. |
**post_age** | **string** | Time since publishing: 0-6h, 6-12h, 12-24h, 1-2d, 2-7d, 7-30d or 30d+. |
**format** | **string** | gif counts as image, document as text. |
**synced_at** | **string** | When the account&#39;s sync cycle that read these numbers started. Not an order: resume with the cursor only. |
**deleted** | **bool** | True when the post was removed from the platform. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
