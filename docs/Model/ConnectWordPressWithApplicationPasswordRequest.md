# # ConnectWordPressWithApplicationPasswordRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_id** | **string** | Your Zernio profile ID (get from /v1/profiles). |
**site_url** | **string** | HTTPS base URL of the WordPress installation, including a subdirectory path when applicable. |
**username** | **string** | WordPress login name. A colon is not allowed. |
**application_password** | **string** | Application password created for the WordPress user. Spaces in WordPress display formatting are accepted. |
**reconnect_account_id** | **string** | The WordPress site connection being reconnected. In a workspace with no billing set up, the connect is allowed only when it returns to that same site. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
