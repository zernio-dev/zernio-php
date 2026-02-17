# # ConnectBlueskyCredentialsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**identifier** | **string** | Your Bluesky handle (e.g. user.bsky.social) or email address |
**app_password** | **string** | App password generated from Bluesky Settings &gt; App Passwords |
**state** | **string** | Required state formatted as {userId}-{profileId}. Get userId from GET /v1/users and profileId from GET /v1/profiles. |
**redirect_uri** | **string** | Optional URL to redirect to after successful connection | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
