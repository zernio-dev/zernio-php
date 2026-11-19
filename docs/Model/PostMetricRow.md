# # PostMetricRow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | **string** | The day, with granularity&#x3D;day. | [optional]
**post_id** | **string** | The Zernio post, null for a post published outside Zernio. |
**external_post_id** | **string** | The synced post, null while a published post waits for its first sync. |
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
**metrics** | **array<string,float>** | Each metric asked; null when the platform does not report it or no snapshot exists yet. |
**breakdowns** | [**array<string,\Zernio\Model\PostMetricRowBreakdownsValue>**](PostMetricRowBreakdownsValue.md) |  | [optional]
**post** | [**\Zernio\Model\PostMetricContent**](PostMetricContent.md) |  | [optional]
**authenticity** | [**\Zernio\Model\PostMetricAuthenticity**](PostMetricAuthenticity.md) |  | [optional]
**samples** | [**\Zernio\Model\PostMetricSample[]**](PostMetricSample.md) | With include&#x3D;samples: the readings of the publication, oldest first. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
