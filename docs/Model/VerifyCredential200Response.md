# # VerifyCredential200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**valid** | **bool** |  | [optional]
**user_id** | **string** |  | [optional]
**name** | **string** | Display name of the credential&#39;s owner. | [optional]
**email** | **string** | Email of the credential&#39;s owner. | [optional]
**auth_type** | **string** |  | [optional]
**scope** | **string** | Granted OAuth scopes, space-separated. Null for API keys. | [optional]
**audience** | **string** | Resource the OAuth token was issued for (RFC 8707), for example https://mcp.zernio.com/mcp. Null for API keys and for tokens issued without one. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
