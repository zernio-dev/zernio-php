# # ConnectWechatCredentialsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_id** | **string** | The Official Account&#39;s AppID (starts with wx). |
**app_secret** | **string** | The Official Account&#39;s AppSecret (32 characters). |
**state** | **string** | Required state formatted as {userId}-{profileId}. Get userId from GET /v1/users and profileId from GET /v1/profiles. |
**display_name** | **string** | Name to show for the account. Defaults to \&quot;WeChat Official Account\&quot;. | [optional]
**redirect_url** | **string** | Optional URL to redirect to after a successful connection. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
