# # AttachCampaignAssetsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Zernio Google Ads connection id. |
**ad_account_id** | **string** | Platform ad account ID (Google customer ID, digits only). Required when the connection has multiple customers. | [optional]
**customer_id** | **string** | Alias of adAccountId, kept for existing callers | [optional]
**sitelinks** | [**\Zernio\Model\GoogleSitelink[]**](GoogleSitelink.md) |  | [optional]
**callouts** | **string[]** |  | [optional]
**structured_snippets** | [**\Zernio\Model\GoogleStructuredSnippet[]**](GoogleStructuredSnippet.md) |  | [optional]
**images** | **string[]** | Public image URLs, uploaded to Google as image assets. Landscape 1.91:1 (min 600x314) or square 1:1 (min 300x300), up to 5 MB each. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
