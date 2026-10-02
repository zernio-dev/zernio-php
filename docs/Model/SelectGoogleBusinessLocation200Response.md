# # SelectGoogleBusinessLocation200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** |  | [optional]
**redirect_url** | **string** | Redirect URL if custom redirect_url was provided | [optional]
**account** | [**\Zernio\Model\SelectGoogleBusinessLocation200ResponseAccount**](SelectGoogleBusinessLocation200ResponseAccount.md) |  | [optional]
**accounts** | **object[]** | locations with two or more distinct entries only. The connected accounts, same shape as &#x60;account&#x60;. The redirect_url then carries &#x60;accountIds&#x60; (comma-separated) and &#x60;accountId&#x60; of the first. | [optional]
**failed** | [**\Zernio\Model\SelectGoogleBusinessLocation200ResponseFailedInner[]**](SelectGoogleBusinessLocation200ResponseFailedInner.md) | locations only. The locations that could not be connected while the others were. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
