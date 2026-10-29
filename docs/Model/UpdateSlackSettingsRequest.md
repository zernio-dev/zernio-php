# # UpdateSlackSettingsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default_username** | **string** | Author name shown on posts. Empty string clears it. | [optional]
**default_icon_url** | **string** | Author avatar image URL. Empty string clears it. | [optional]
**apply_to_workspace** | **bool** | Applies the name and icon to every connected channel of this Slack workspace owned by the same owner, on the same Slack app, in profiles the caller can access. Channels connected later inherit the identity from a channel of that workspace. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
