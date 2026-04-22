# # BlueskyPlatformData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**thread_items** | [**\Zernio\Model\TwitterPlatformDataThreadItemsInner[]**](TwitterPlatformDataThreadItemsInner.md) | Complete sequence of posts in a Bluesky thread. The first item becomes the root post, subsequent items are chained as replies. When threadItems is provided, the top-level content field is used only for display and search purposes, it is NOT published. You must include your first post as threadItems[0]. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
