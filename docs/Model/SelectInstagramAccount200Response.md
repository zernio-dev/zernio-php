# # SelectInstagramAccount200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** |  | [optional]
**redirect_url** | **string** | Redirect URL if a custom redirect_url was provided. On an ads connect it also carries &#x60;adsAccountId&#x60;. | [optional]
**ads_account_id** | **string** | Ads connect only (the redirect_url carries adsConnect&#x3D;true, as it does after GET /v1/connect/{platform}/ads). The metaads SocialAccount ID to use with the /v1/ads endpoints. &#x60;account.accountId&#x60; is the Instagram posting account. Absent when the ads account could not be created. | [optional]
**account** | [**\Zernio\Model\SelectInstagramAccount200ResponseAccount**](SelectInstagramAccount200ResponseAccount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
