# # CreateOAuthAppRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform** | **string** | One of the platforms listed in &#x60;platforms&#x60; of GET /v1/connect/oauth-apps. |
**label** | **string** |  |
**client_id** | **string** |  |
**client_secret** | **string** |  |
**slack_signing_secret** | **string** | Slack only: the signing secret from the app&#39;s Basic Information page. Needed to receive events from your Slack app; any other platform is a 400. | [optional]
**scope_areas** | **string[]** | Areas this app requests. Defaults to every area the platform supports; an area the platform cannot request separately is a 400. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
