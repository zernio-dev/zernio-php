# # WebhookLog

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** |  | [optional]
**webhook_id** | **string** | ID of the webhook that was triggered | [optional]
**webhook_name** | **string** | Name of the webhook that was triggered | [optional]
**event** | **string** |  | [optional]
**url** | **string** |  | [optional]
**status** | **string** |  | [optional]
**status_code** | **int** | HTTP status code from webhook endpoint | [optional]
**request_payload** | **object** | Payload sent to webhook endpoint | [optional]
**response_body** | **string** | Response body from webhook endpoint (truncated to 10KB) | [optional]
**error_message** | **string** | Error message if delivery failed | [optional]
**attempt_number** | **int** | Delivery attempt number (max 7 attempts) | [optional]
**response_time** | **int** | Response time in milliseconds | [optional]
**created_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
