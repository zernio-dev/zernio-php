# # ApiKey

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**key_preview** | **string** |  | [optional]
**expires_at** | **\DateTime** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**key** | **string** | Returned only once, on creation | [optional]
**scope** | **string** | &#39;full&#39; grants access to all profiles, &#39;profiles&#39; restricts to specific profiles | [optional] [default to 'full']
**profile_ids** | [**\Zernio\Model\ApiKeyProfileIdsInner[]**](ApiKeyProfileIdsInner.md) | Profiles this key can access (populated with name and color). Only present when scope is &#39;profiles&#39;. | [optional]
**permission** | **string** | &#39;read-write&#39; allows all operations, &#39;read&#39; restricts to GET requests only | [optional] [default to 'read-write']
**disabled_resource_groups** | **string[]** | Resource groups this key can NOT access (opt-out denylist). Absent or empty means legacy full access. A key with any group disabled is a restricted key (zrk_ prefix) and can never manage API keys, invites, or member identity. Each operation&#39;s group is published as x-resource-group. With &#39;messages&#39; disabled, the key cannot read or send direct messages through any API surface, and it cannot create or edit a webhook subscription broader than itself: it cannot subscribe to, test-fire, redeliver, or read delivery logs for message events. Subscriptions created earlier, from the dashboard, or with a full-access key keep delivering whatever their own &#x60;disabledResourceGroups&#x60; allows, so restricting an existing integration end to end means restricting the subscription too. OAuth connector tokens (AI assistants and MCP clients) resolve against the same registry, but their groups are not settable yet: treat an authorized connector as full access. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
