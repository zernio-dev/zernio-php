# # UpdateWebhookSettingsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** | Webhook ID to update (required) |
**name** | **string** | Webhook name (1-50 characters). Must be non-empty if provided. | [optional]
**url** | **string** | Webhook endpoint URL (must be a valid URL, whitespace trimmed). Must be a valid URL if provided. | [optional]
**secret** | **string** | Secret key for HMAC-SHA256 signature verification | [optional]
**events** | **string[]** | Events to subscribe to. Must contain at least one event if provided. | [optional]
**is_active** | **bool** | Enable or disable webhook delivery | [optional]
**custom_headers** | **array<string,string>** | Custom headers to include in webhook requests | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
