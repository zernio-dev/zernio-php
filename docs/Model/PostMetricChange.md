# # PostMetricChange

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  |
**profile_id** | **string** |  |
**platform** | **string** |  |
**platform_post_id** | **string** |  |
**published_at** | **string** |  |
**synced_at** | **string** | When the account&#39;s sync cycle that read these numbers started. Not an order: resume with the cursor only. |
**deleted** | **bool** | True when the post was removed from the platform. |
**metrics** | **array<string,float>** | Each metric asked, as the platform reported it in this change; null when the post&#39;s platform does not report it. |
**breakdowns** | [**array<string,\Zernio\Model\PostMetricRowBreakdownsValue>**](PostMetricRowBreakdownsValue.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
