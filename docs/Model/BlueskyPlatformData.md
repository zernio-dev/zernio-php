# # BlueskyPlatformData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**langs** | **string[]** | Language(s) of the post text as 1-3 BCP-47 codes (e.g. \&quot;pt\&quot;, \&quot;en-US\&quot;), written to the post record&#39;s langs field. Bluesky feed generators filter on it, so posts without it never appear in language-scoped feeds.  - Can only be set at creation (Bluesky has no post editing). - With threadItems, every item in the thread carries the same langs. - When omitted, the account&#39;s default (set via PATCH /v1/accounts/{accountId}/bluesky-settings) applies. With no default either, the field is absent from the record. | [optional]
**thread_items** | [**\Zernio\Model\TwitterPlatformDataThreadItemsInner[]**](TwitterPlatformDataThreadItemsInner.md) | Complete sequence of posts in a Bluesky thread. The first item becomes the root post, subsequent items are chained as replies. When threadItems is provided, the top-level content field is used only for display and search purposes, it is NOT published. You must include your first post as threadItems[0]. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
