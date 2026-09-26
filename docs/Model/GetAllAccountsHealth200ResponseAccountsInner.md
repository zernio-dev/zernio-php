# # GetAllAccountsHealth200ResponseAccountsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**username** | **string** |  | [optional]
**display_name** | **string** |  | [optional]
**profile_id** | **string** |  | [optional]
**status** | **string** |  | [optional]
**can_post** | **bool** |  | [optional]
**can_fetch_analytics** | **bool** |  | [optional]
**token_valid** | **bool** |  | [optional]
**token_expires_at** | **\DateTime** |  | [optional]
**needs_reconnect** | **bool** | True when the token is expired or revoked, permissions are missing, the account is inactive, or the platform rejected its stored credentials (the same flag the account listing reports as needsReconnection). | [optional]
**issues** | **string[]** |  | [optional]
**messaging_restriction** | [**\Zernio\Model\GetAllAccountsHealth200ResponseAccountsInnerMessagingRestriction**](GetAllAccountsHealth200ResponseAccountsInnerMessagingRestriction.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
