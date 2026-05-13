# # Webhook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** | Unique webhook identifier | [optional]
**name** | **string** | Webhook name (for identification) | [optional]
**url** | **string** | Webhook endpoint URL | [optional]
**secret** | **string** | Secret key for HMAC-SHA256 signature verification. | [optional]
**events** | **string[]** | Events subscribed to | [optional]
**is_active** | **bool** | Whether webhook delivery is enabled | [optional]
**last_fired_at** | **\DateTime** | Timestamp of last successful webhook delivery | [optional]
**failure_count** | **int** | Consecutive delivery failures (resets on success, webhook disabled at 10) | [optional]
**custom_headers** | **array<string,string>** | Custom headers included in webhook requests | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
