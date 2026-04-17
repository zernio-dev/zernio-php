# # CreateWebhookSettingsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Webhook name (1-50 characters) |
**url** | **string** | Webhook endpoint URL (must be a valid URL, whitespace trimmed) |
**secret** | **string** | Secret key for HMAC-SHA256 signature verification | [optional]
**events** | **string[]** | Events to subscribe to (at least one required) |
**is_active** | **bool** | Enable or disable webhook delivery. Defaults to &#x60;true&#x60; when omitted. | [optional] [default to true]
**custom_headers** | **array<string,string>** | Custom headers to include in webhook requests | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
