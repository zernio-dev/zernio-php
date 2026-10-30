# # UpdateOAuthAppRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**label** | **string** |  | [optional]
**client_secret** | **string** |  | [optional]
**meta_app_id** | **string** | Instagram only: the numeric ID of the Meta app your Instagram app lives in. Zernio uses it with &#x60;metaAppSecret&#x60; to register the webhook. Send both or neither. | [optional]
**meta_app_secret** | **string** | Instagram only: the secret of that Meta app. Never returned. | [optional]
**slack_signing_secret** | **string** | Slack only: saves or replaces the signing secret from the app&#39;s Basic Information page; any other platform is a 400. | [optional]
**scope_areas** | **string[]** | Replaces the areas new connects request. Accounts already connected keep what they were granted until they reconnect. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
