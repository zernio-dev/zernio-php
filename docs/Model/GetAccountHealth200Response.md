# # GetAccountHealth200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**integration_lane** | **string** | TikTok only. The TikTok integration the account is connected through: business (TikTok for Business, Accounts API) or developer (the original integration). Absent on other platforms. | [optional]
**username** | **string** |  | [optional]
**display_name** | **string** |  | [optional]
**status** | **string** | Overall health status | [optional]
**token_status** | [**\Zernio\Model\GetAccountHealth200ResponseTokenStatus**](GetAccountHealth200ResponseTokenStatus.md) |  | [optional]
**permissions** | [**\Zernio\Model\GetAccountHealth200ResponsePermissions**](GetAccountHealth200ResponsePermissions.md) |  | [optional]
**issues** | **string[]** | List of issues found | [optional]
**recommendations** | **string[]** | Actionable recommendations to fix issues | [optional]
**messaging_restriction** | [**\Zernio\Model\GetAllAccountsHealth200ResponseAccountsInnerMessagingRestriction**](GetAllAccountsHealth200ResponseAccountsInnerMessagingRestriction.md) |  | [optional]
**platform_connection** | [**\Zernio\Model\GetAccountHealth200ResponsePlatformConnection**](GetAccountHealth200ResponsePlatformConnection.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
