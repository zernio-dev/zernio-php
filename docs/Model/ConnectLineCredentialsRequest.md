# # ConnectLineCredentialsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel_id** | **string** | The Messaging API channel&#39;s Channel ID (digits only). |
**channel_secret** | **string** | The Messaging API channel&#39;s Channel secret (32 hex characters). |
**state** | **string** | Required state formatted as {userId}-{profileId}. Get userId from GET /v1/users and profileId from GET /v1/profiles. |
**redirect_url** | **string** | Optional URL to redirect to after a successful connection. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
