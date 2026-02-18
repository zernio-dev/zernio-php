# # CreateApiKeyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**expires_in** | **int** | Days until expiry | [optional]
**scope** | **string** | &#39;full&#39; grants access to all profiles (default), &#39;profiles&#39; restricts to specific profiles | [optional] [default to 'full']
**profile_ids** | **string[]** | Profile IDs this key can access. Required when scope is &#39;profiles&#39;. | [optional]
**permission** | **string** | &#39;read-write&#39; allows all operations (default), &#39;read&#39; restricts to GET requests only | [optional] [default to 'read-write']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
