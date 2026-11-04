# # CreatePlatformInviteRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** | The profile the account is connected to. |
**platform** | **string** |  |
**account_id** | **string** | Reconnect this existing account instead of adding a new one. It must belong to the profile and platform. | [optional]
**login_method** | **string** | Instagram only. instagram_login (the default) uses Instagram Login, facebook_login uses Facebook Login. A reconnect link keeps the method the account was connected with. | [optional]
**expires_in_days** | **int** | Days until the link expires. | [optional] [default to 7]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
