# # SyncExternalPosts200ResponseSynced

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**posts_found** | **int** | Posts returned by the platform listing during the on-demand sync | [optional]
**posts_synced** | **int** | Stored records this call wrote: new posts and posts whose metadata changed. On LinkedIn personal profiles and the X fallback sync, posts whose metrics were refreshed are counted too. | [optional]
**skipped** | **bool** | True when the account was synced within the debounce window and no live fetch ran. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
