# # SelectPinterestBoardRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** | Your Zernio profile ID |
**board_id** | **string** | The Pinterest Board ID selected by the user |
**board_name** | **string** | The board name (for display purposes) | [optional]
**temp_token** | **string** | Temporary Pinterest access token from OAuth |
**user_profile** | **object** | User profile data from OAuth redirect | [optional]
**refresh_token** | **string** | Pinterest refresh token (if available) | [optional]
**expires_in** | **int** | Token expiration time in seconds | [optional]
**redirect_url** | **string** | Custom redirect URL after connection completes | [optional]
**oauth_app_id** | **string** | The &#x60;oauthAppId&#x60; from the selection redirect, when the connect ran on one of your own OAuth apps. Pass it back so a retried selection stays on that app; a different app than the connect used returns 400. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
