# # WebhookLog

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **string** | ID of the account owner the webhook belongs to | [optional]
**webhook_id** | **string** | ID of the webhook configuration that produced this delivery | [optional]
**webhook_name** | **string** | Name of the webhook configuration at delivery time | [optional]
**event_id** | **string** | Stable webhook event ID (correlates to the delivered payload) | [optional]
**event** | **string** | Event type that triggered the delivery (e.g. post.published) | [optional]
**url** | **string** | Destination URL the webhook was delivered to | [optional]
**status** | **string** | Delivery outcome | [optional]
**status_code** | **int** | HTTP status code returned by the destination endpoint | [optional]
**request_payload** | **array<string,mixed>** | The JSON payload sent to the destination endpoint | [optional]
**response_body** | **string** | Response body returned by the destination endpoint | [optional]
**error_message** | **string** | Error message when delivery failed | [optional]
**attempt_number** | **int** | Delivery attempt number (increments on retries) | [optional]
**response_time** | **int** | Time taken by the destination endpoint to respond, in milliseconds | [optional]
**created_at** | **\DateTime** | Timestamp the delivery was attempted | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
