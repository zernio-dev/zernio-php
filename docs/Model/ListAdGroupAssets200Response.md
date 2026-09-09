# # ListAdGroupAssets200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_group_id** | **string** |  | [optional]
**sitelinks** | [**\Zernio\Model\ListAdGroupAssets200ResponseSitelinksInner[]**](ListAdGroupAssets200ResponseSitelinksInner.md) |  | [optional]
**callouts** | [**\Zernio\Model\ListAdGroupAssets200ResponseCalloutsInner[]**](ListAdGroupAssets200ResponseCalloutsInner.md) |  | [optional]
**structured_snippets** | [**\Zernio\Model\ListAdGroupAssets200ResponseStructuredSnippetsInner[]**](ListAdGroupAssets200ResponseStructuredSnippetsInner.md) |  | [optional]
**cached_at** | **\DateTime** | Time of the cached Google read. Null when no cache was used. | [optional]
**stale** | **bool** | True when exhausted quota required returning the last successful read. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
