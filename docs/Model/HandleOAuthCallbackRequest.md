# # HandleOAuthCallbackRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** |  |
**state** | **string** | For twitter, the state X returned on the redirect (the same as the state query parameter of authUrl, ending in its -cv_ PKCE verifier suffix), signed and under 1 hour old. The state field of the GET JSON response does not carry the verifier. |
**profile_id** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
