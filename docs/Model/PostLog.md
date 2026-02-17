# # PostLog

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** |  | [optional]
**post_id** | [**\Late\Model\PostLogPostId**](PostLogPostId.md) |  | [optional]
**user_id** | **string** |  | [optional]
**profile_id** | **string** |  | [optional]
**platform** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**account_username** | **string** |  | [optional]
**action** | **string** | Type of action logged: publish (initial attempt), retry (after failure), media_upload, rate_limit_pause, token_refresh, cancelled | [optional]
**status** | **string** |  | [optional]
**status_code** | **int** | HTTP status code from platform API | [optional]
**endpoint** | **string** | Platform API endpoint called | [optional]
**request** | [**\Late\Model\PostLogRequest**](PostLogRequest.md) |  | [optional]
**response** | [**\Late\Model\PostLogResponse**](PostLogResponse.md) |  | [optional]
**duration_ms** | **int** | How long the operation took in milliseconds | [optional]
**attempt_number** | **int** | Attempt number (1 for first try, 2+ for retries) | [optional]
**created_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
