# # CreateInviteTokenRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**scope** | **string** | &#39;all&#39; grants access to all profiles, &#39;profiles&#39; restricts to specific profiles |
**profile_ids** | **string[]** | Required if scope is &#39;profiles&#39;. Array of profile IDs to grant access to. | [optional]
**role** | **string** | Org role granted to the invitee. Defaults to &#39;member&#39;. &#39;admin&#39; can manage the team (invite/remove members, change roles and access) and billing, but not ownership transfer or account deletion. &#39;billing_admin&#39; (displayed as Billing Manager) manages billing only. &#39;viewer&#39; creates a read-only member who can view everything in their profile scope but cannot perform any content mutation (publish, edit, delete, connect accounts). | [optional] [default to 'member']
**disabled_resource_groups** | **string[]** | Resource groups the invitee may not use once they join (the same groups as restricted API keys). Their dashboard hides those sections and every API request into a disabled group, with any credential they hold, is refused with 403. Omitted or empty means full access. Groups the caller lacks themselves are always added. | [optional]
**read_only** | **bool** | Deprecated. Use role &#39;viewer&#39; instead. When true, the invite is created with role &#39;viewer&#39;. Cannot be combined with role &#39;billing_admin&#39; or &#39;admin&#39;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
