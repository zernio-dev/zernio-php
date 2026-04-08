# # ListLogs200ResponseLogsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Log category (publishing, connections, webhooks, messaging) | [optional]
**action** | **string** | Specific action (post.published, message.sent, account.connected, etc.) | [optional]
**user_id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**status** | **string** |  | [optional]
**status_code** | **int** |  | [optional]
**error_message** | **string** |  | [optional]
**error_code** | **string** |  | [optional]
**duration_ms** | **int** |  | [optional]
**endpoint** | **string** | The API endpoint that triggered this log | [optional]
**request_body** | **string** | Request JSON (truncated to 5KB) | [optional]
**response_body** | **string** | Response JSON (truncated to 10KB) | [optional]
**created_at** | **\DateTime** |  | [optional]
**metadata** | **string** | Additional context as JSON string | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
