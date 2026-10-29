# # UpdateOAuthAppRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**label** | **string** |  | [optional]
**client_secret** | **string** |  | [optional]
**slack_signing_secret** | **string** | Slack only: saves or replaces the signing secret from the app&#39;s Basic Information page; any other platform is a 400. | [optional]
**scope_areas** | **string[]** | Replaces the areas new connects request. Accounts already connected keep what they were granted until they reconnect. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
