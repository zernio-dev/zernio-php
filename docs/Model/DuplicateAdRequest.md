# # DuplicateAdRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_set_id** | **string** | Destination platform ad set id (defaults to the source&#39;s ad set) | [optional]
**status_option** | **string** |  | [optional] [default to 'PAUSED']
**rename_strategy** | **string** | Meta&#39;s native &#x60;rename_strategy&#x60; values. An ad has no copied children, so &#x60;DEEP_RENAME&#x60; and &#x60;ONLY_TOP_LEVEL_RENAME&#x60; both rename the copy with &#x60;renamePrefix&#x60; / &#x60;renameSuffix&#x60;, and &#x60;NO_RENAME&#x60; keeps the source name. With no rename option at all, Meta appends its own &#x60; - Copy&#x60; suffix. | [optional]
**rename_prefix** | **string** | Text prepended to the copy&#39;s name. | [optional]
**rename_suffix** | **string** | Text appended to the copy&#39;s name. | [optional]
**sync_after** | **bool** |  | [optional] [default to true]
**reuse_source_creative** | **bool** | Point the copy at the source ad&#39;s creative object instead of copying it, so the copy keeps the same Facebook post, the same Instagram media, their existing likes, comments and shares, and the full creative setup (text variations included). This is what Ads Manager&#39;s \&quot;show existing reactions, comments and shares\&quot; does. Meta&#39;s native copy always publishes new posts. A creative belongs to one ad account, so &#x60;adSetId&#x60; must be in the source ad&#39;s account. 400 when the source ad has no creative yet. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
