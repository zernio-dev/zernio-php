# # SelectInstagramAccount200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** |  | [optional]
**redirect_url** | **string** | Redirect URL if a custom redirect_url was provided. On an ads connect it also carries &#x60;adsAccountId&#x60;. | [optional]
**ads_account_id** | **string** | Ads connect only (the redirect_url carries adsConnect&#x3D;true, as it does after GET /v1/connect/{platform}/ads). The metaads SocialAccount ID to use with the /v1/ads endpoints. &#x60;account.accountId&#x60; is the Instagram posting account. Absent when the ads account could not be created. | [optional]
**account** | [**\Zernio\Model\SelectInstagramAccount200ResponseAccount**](SelectInstagramAccount200ResponseAccount.md) |  | [optional]
**accounts** | **object[]** | pageIds only. The connected accounts, same shape as &#x60;account&#x60;. The redirect_url then carries &#x60;accountIds&#x60; (comma-separated) and &#x60;accountId&#x60; of the first. | [optional]
**failed** | [**\Zernio\Model\SelectFacebookPage200ResponseFailedInner[]**](SelectFacebookPage200ResponseFailedInner.md) | pageIds only. The Pages whose Instagram account could not be connected while the others were. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
