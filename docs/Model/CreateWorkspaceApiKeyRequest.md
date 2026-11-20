# # CreateWorkspaceApiKeyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**permission** | **string** | &#39;read&#39; restricts the key to GET requests. | [optional] [default to 'read-write']
**expires_in** | **int** | Days until expiry. Omit for a key that never expires. | [optional]
**disabled_resource_groups** | **string[]** | Resource groups the key cannot use, as on &#x60;POST /v1/api-keys&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
