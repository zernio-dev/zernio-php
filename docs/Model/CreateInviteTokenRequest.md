# # CreateInviteTokenRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**scope** | **string** | &#39;all&#39; grants access to all profiles, &#39;profiles&#39; restricts to specific profiles |
**profile_ids** | **string[]** | Required if scope is &#39;profiles&#39;. Array of profile IDs to grant access to. | [optional]
**role** | **string** | Org role granted to the invitee. Defaults to &#39;member&#39;. | [optional] [default to 'member']
**read_only** | **bool** | When true, the invitee can view everything in their profile scope but cannot perform any content mutation (publish, edit, delete, connect accounts). | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
