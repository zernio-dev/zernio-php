# # ThreadsPlatformData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**topic_tag** | **string** | Topic tag for post categorization and discoverability on Threads. Must be 1-50 characters, cannot contain periods (.) or ampersands (&amp;). Overrides auto-extraction from content hashtags when provided. | [optional]
**first_comment** | **string** | Optional first comment, posted right after publishing as a reply to the published post. With threadItems, it replies to the root post.  Up to 500 characters (the Threads post limit). The reply is itself a Threads post, so it uses one of the 250 posts a profile may publish per 24 hours. | [optional]
**thread_items** | [**\Zernio\Model\TwitterPlatformDataThreadItemsInner[]**](TwitterPlatformDataThreadItemsInner.md) | Complete sequence of posts in a Threads thread. The first item becomes the root post, subsequent items are chained as replies. When threadItems is provided, the top-level content field is used only for display and search purposes, it is NOT published. You must include your first post as threadItems[0]. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
