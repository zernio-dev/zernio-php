# # GetPendingOAuthData200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** | The platform (e.g., \&quot;linkedin\&quot;) | [optional]
**profile_id** | **string** | The Zernio profile ID | [optional]
**temp_token** | **string** | Temporary access token for the platform | [optional]
**refresh_token** | **string** | Refresh token (if available) | [optional]
**expires_in** | **float** | Token expiry in seconds | [optional]
**user_profile** | **object** | User profile data (id, username, displayName, profilePicture) | [optional]
**selection_type** | **string** | Type of selection data | [optional]
**organizations** | [**\Zernio\Model\GetPendingOAuthData200ResponseOrganizationsInner[]**](GetPendingOAuthData200ResponseOrganizationsInner.md) | LinkedIn organizations (when selectionType is \&quot;organizations\&quot;) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
