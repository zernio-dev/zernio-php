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
**owner_user_id** | **string** | User id of the profile owner, not necessarily the team member who connected the account. | [optional]
**disconnect_reason** | **string** | Why the connection is broken or its token refresh is failing, from the most recent current cause. Null when the connection is healthy, including when the account is unhealthy for another reason (analytics, messaging restriction, missing analytics scopes), or when no cause is stored. | [optional]
**disconnection_type** | **string** | intentional: deliberately disconnected by the user or by Zernio (for example a plan downgrade), not a token failure. unintentional: token expired or revoked, or an auth failure. Null when disconnectReason is null. | [optional]
**unhealthy_since** | **\DateTime** | When the earliest current stored cause was recorded (the start of the outage); for an intentional disconnect, when it was disconnected. Null when the connection is healthy, including when the account is unhealthy for another reason (analytics, messaging restriction, missing analytics scopes), or when the time is unknown. | [optional]
**analytics_sync** | [**\Zernio\Model\GetAllAccountsHealth200ResponseAccountsInnerAnalyticsSync**](GetAllAccountsHealth200ResponseAccountsInnerAnalyticsSync.md) |  | [optional]
**messaging_restriction** | [**\Zernio\Model\GetAllAccountsHealth200ResponseAccountsInnerMessagingRestriction**](GetAllAccountsHealth200ResponseAccountsInnerMessagingRestriction.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
