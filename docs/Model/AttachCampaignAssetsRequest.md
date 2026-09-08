# # AttachCampaignAssetsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Zernio Google Ads SocialAccount id. Resolves the customer id + refresh token. |
**customer_id** | **string** | Numeric Google Ads customer id. Required when the connection has multiple Google Ads accounts; optional (and inferred) when it has only one. | [optional]
**sitelinks** | [**\Zernio\Model\AttachCampaignAssetsRequestSitelinksInner[]**](AttachCampaignAssetsRequestSitelinksInner.md) | See POST /v1/ads/create sitelinks, same shape. | [optional]
**callouts** | **string[]** |  | [optional]
**structured_snippets** | [**\Zernio\Model\AttachCampaignAssetsRequestStructuredSnippetsInner[]**](AttachCampaignAssetsRequestStructuredSnippetsInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
