# # ListLogs200ResponseLogsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Log category (publishing, connections, webhooks, messaging) | [optional]
**action** | **string** | Specific action (post.published, message.sent, account.connected, etc.) | [optional]
**user_id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**profile_id** | **string** | The profile the entry belongs to; on API request logs, the profileId the call named in its query or body | [optional]
**operation_id** | **string** | API request logs only: the operationId of the public operation the request hit (e.g. createPost), absent for routes outside this spec | [optional]
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
**request_id** | **string** | Correlation ID linking every log from one API request (api_request logs) | [optional]
**api_key_id** | **string** | The API key that made the request (api_request logs) | [optional]
**method** | **string** | HTTP method (api_request logs) | [optional]
**path** | **string** | Request path (api_request logs) | [optional]
**ip_address** | **string** | Client IP address (api_request logs) | [optional]
**user_agent** | **string** | Client user-agent (api_request logs) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
