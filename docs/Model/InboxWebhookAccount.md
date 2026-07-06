# # InboxWebhookAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Social account ID |
**account_id** | **string** | Social account ID (same value as id). Canonical field so consumers can filter every webhook event on one field (e.g. route staging vs production by account). id is kept for backward compatibility. | [optional]
**profile_id** | **string** | Zernio profile (workspace) ID this account belongs to. Use it to route or filter inbox webhooks by workspace. This is the profile ID only, not its name (resolve the name via the API with this ID). Optional; omitted on the shared WhatsApp sandbox account and when the account has no resolvable profile. | [optional]
**platform** | **string** |  |
**username** | **string** |  |
**display_name** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
