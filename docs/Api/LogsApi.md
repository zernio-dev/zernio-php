# Late\LogsApi

Publishing logs for transparency and debugging. Each log includes the platform API endpoint, HTTP status code, request/response bodies, duration, and retry attempts. Logs are automatically deleted after 7 days.

All URIs are relative to https://getlate.dev/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPostLogs()**](LogsApi.md#getPostLogs) | **GET** /v1/posts/{postId}/logs | Get post logs |
| [**listConnectionLogs()**](LogsApi.md#listConnectionLogs) | **GET** /v1/connections/logs | List connection logs |
| [**listPostsLogs()**](LogsApi.md#listPostsLogs) | **GET** /v1/posts/logs | List publishing logs |


## `getPostLogs()`

```php
getPostLogs($post_id, $limit): \Late\Model\GetPostLogs200Response
```

Get post logs

Retrieve all publishing logs for a specific post. Shows the complete history of publishing attempts for that post across all platforms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string | The post ID
$limit = 50; // int | Maximum number of logs to return (max 100)

try {
    $result = $apiInstance->getPostLogs($post_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->getPostLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **string**| The post ID | |
| **limit** | **int**| Maximum number of logs to return (max 100) | [optional] [default to 50] |

### Return type

[**\Late\Model\GetPostLogs200Response**](../Model/GetPostLogs200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConnectionLogs()`

```php
listConnectionLogs($platform, $event_type, $status, $days, $limit, $skip): \Late\Model\ListConnectionLogs200Response
```

List connection logs

Retrieve connection event logs showing account connection and disconnection history. Event types: connect_success, connect_failed, disconnect, reconnect_success, reconnect_failed. Logs are automatically deleted after 7 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string | Filter by platform
$event_type = 'event_type_example'; // string | Filter by event type
$status = 'status_example'; // string | Filter by status (shorthand for event types)
$days = 7; // int | Number of days to look back (max 7)
$limit = 50; // int | Maximum number of logs to return (max 100)
$skip = 0; // int | Number of logs to skip (for pagination)

try {
    $result = $apiInstance->listConnectionLogs($platform, $event_type, $status, $days, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->listConnectionLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **platform** | **string**| Filter by platform | [optional] |
| **event_type** | **string**| Filter by event type | [optional] |
| **status** | **string**| Filter by status (shorthand for event types) | [optional] |
| **days** | **int**| Number of days to look back (max 7) | [optional] [default to 7] |
| **limit** | **int**| Maximum number of logs to return (max 100) | [optional] [default to 50] |
| **skip** | **int**| Number of logs to skip (for pagination) | [optional] [default to 0] |

### Return type

[**\Late\Model\ListConnectionLogs200Response**](../Model/ListConnectionLogs200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPostsLogs()`

```php
listPostsLogs($status, $platform, $action, $days, $limit, $skip): \Late\Model\ListPostsLogs200Response
```

List publishing logs

Retrieve publishing logs for all posts with detailed information about each publishing attempt. Filter by status, platform, or action. Logs are automatically deleted after 7 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 'status_example'; // string | Filter by log status
$platform = 'platform_example'; // string | Filter by platform
$action = 'action_example'; // string | Filter by action type
$days = 7; // int | Number of days to look back (max 7)
$limit = 50; // int | Maximum number of logs to return (max 100)
$skip = 0; // int | Number of logs to skip (for pagination)

try {
    $result = $apiInstance->listPostsLogs($status, $platform, $action, $days, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->listPostsLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | **string**| Filter by log status | [optional] |
| **platform** | **string**| Filter by platform | [optional] |
| **action** | **string**| Filter by action type | [optional] |
| **days** | **int**| Number of days to look back (max 7) | [optional] [default to 7] |
| **limit** | **int**| Maximum number of logs to return (max 100) | [optional] [default to 50] |
| **skip** | **int**| Number of logs to skip (for pagination) | [optional] [default to 0] |

### Return type

[**\Late\Model\ListPostsLogs200Response**](../Model/ListPostsLogs200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
