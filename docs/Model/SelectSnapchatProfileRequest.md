# # SelectSnapchatProfileRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** | Your Zernio profile ID |
**selected_public_profile** | [**\Zernio\Model\SelectSnapchatProfileRequestSelectedPublicProfile**](SelectSnapchatProfileRequestSelectedPublicProfile.md) |  |
**temp_token** | **string** | Temporary Snapchat access token from OAuth |
**user_profile** | **object** | User profile data from OAuth redirect |
**refresh_token** | **string** | Snapchat refresh token (if available) | [optional]
**expires_in** | **int** | Token expiration time in seconds | [optional]
**redirect_url** | **string** | Custom redirect URL after connection completes | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
