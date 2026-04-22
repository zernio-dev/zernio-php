# # GetAccountHealth200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**username** | **string** |  | [optional]
**display_name** | **string** |  | [optional]
**status** | **string** | Overall health status | [optional]
**token_status** | [**\Zernio\Model\GetAccountHealth200ResponseTokenStatus**](GetAccountHealth200ResponseTokenStatus.md) |  | [optional]
**permissions** | [**\Zernio\Model\GetAccountHealth200ResponsePermissions**](GetAccountHealth200ResponsePermissions.md) |  | [optional]
**issues** | **string[]** | List of issues found | [optional]
**recommendations** | **string[]** | Actionable recommendations to fix issues | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
