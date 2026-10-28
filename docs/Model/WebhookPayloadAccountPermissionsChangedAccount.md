# # WebhookPayloadAccountPermissionsChangedAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  |
**profile_id** | **string** |  |
**platform** | **string** |  |
**username** | **string** |  |
**display_name** | **string** |  | [optional]
**oauth_app_id** | **string** | The OAuth app the account connected through. |
**missing_scope_areas** | **string[]** | Every area now missing. Enable the permission on your app (or have the user grant it), then reconnect the account. |
**reason** | **string** | The platform error that revealed it. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
