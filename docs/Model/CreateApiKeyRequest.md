# # CreateApiKeyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**expires_in** | **int** | Days until expiry | [optional]
**scope** | **string** | &#39;full&#39; grants access to all profiles (default), &#39;profiles&#39; restricts to specific profiles | [optional] [default to 'full']
**profile_ids** | **string[]** | Profile IDs this key can access. Required when scope is &#39;profiles&#39;. | [optional]
**permission** | **string** | &#39;read-write&#39; allows all operations (default), &#39;read&#39; restricts to GET requests only | [optional] [default to 'read-write']
**disabled_resource_groups** | **string[]** | Resource groups to DISABLE on this key (opt-out denylist). Omit for a legacy full-access key. A key with any group disabled mints with the zrk_ prefix, gets 403 with code&#x3D;insufficient_permissions and required_group on operations in disabled groups (each operation&#39;s group is published as x-resource-group), and can never manage API keys, invites, or member identity. With &#39;messages&#39; disabled, the key cannot read or send direct messages through any API surface and cannot create or edit a webhook subscription broader than itself. Subscriptions that already exist are governed by their own &#x60;disabledResourceGroups&#x60;, not by this key&#39;s. OAuth connector tokens resolve against the same registry, but their groups are not settable yet. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
