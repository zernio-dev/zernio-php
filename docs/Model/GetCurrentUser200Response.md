# # GetCurrentUser200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**email** | **string** | Only returned to a dashboard session. Omitted for API keys. | [optional]
**image** | **string** |  | [optional]
**role** | **string** | One of owner, admin, billing_admin, member or viewer. Always owner when isRoot is true. | [optional]
**is_root** | **bool** | True when the user owns the account, false when they were invited to it. | [optional]
**invited_by** | **string** | Id of the user who invited this user. Null when isRoot is true. | [optional]
**invited_to_profile** | **string** | Only present when isRoot is false. | [optional]
**invited_to_profiles** | **string[]** | Ids of the profiles an invited user is limited to. Empty means every profile. Only present when isRoot is false. | [optional]
**disabled_resource_groups** | **string[]** | Resource groups turned off for an invited user. Null or empty means none. Only present when isRoot is false. | [optional]
**created_at** | **\DateTime** |  | [optional]
**last_login_at** | **\DateTime** | Last sign-in, stamped at most once an hour. Null when no sign-in has been recorded. | [optional]
**workspace_id** | **string** | Id of the workspace the credential acts in. Null when the user has no workspace yet. | [optional]
**workspace_name** | **string** | Name of that workspace. Null when workspaceId is null. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
