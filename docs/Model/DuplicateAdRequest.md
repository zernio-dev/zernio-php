# # DuplicateAdRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_set_id** | **string** | Destination platform ad set id (defaults to the source&#39;s ad set) | [optional]
**status_option** | **string** |  | [optional] [default to 'PAUSED']
**rename_strategy** | **string** |  | [optional]
**rename_prefix** | **string** |  | [optional]
**rename_suffix** | **string** |  | [optional]
**sync_after** | **bool** |  | [optional] [default to true]
**reuse_source_creative** | **bool** | Point the copy at the source ad&#39;s creative object instead of copying it, so the copy keeps the same Facebook post, the same Instagram media, their existing likes, comments and shares, and the full creative setup (text variations included). This is what Ads Manager&#39;s \&quot;show existing reactions, comments and shares\&quot; does. Meta&#39;s native copy always publishes new posts. A creative belongs to one ad account, so &#x60;adSetId&#x60; must be in the source ad&#39;s account. 400 when the source ad has no creative yet. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
