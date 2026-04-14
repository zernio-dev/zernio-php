# Late\LogsApi

Publishing logs for transparency and debugging. Each log includes the platform API endpoint, HTTP status code, request/response bodies, duration, and retry attempts. Logs are automatically deleted after 7 days.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPostLogs()**](LogsApi.md#getPostLogs) | **GET** /v1/posts/{postId}/logs | Get post logs |
| [**listLogs()**](LogsApi.md#listLogs) | **GET** /v1/logs | List activity logs |


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

## `listLogs()`

```php
listLogs($type, $status, $platform, $action, $search, $days, $limit, $skip): \Late\Model\ListLogs200Response
```

List activity logs

Unified logs endpoint. Returns logs for publishing, connections, webhooks, and messaging. Filter by type, platform, status, and time range. Logs are retained for 90 days.

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
$type = 'publishing'; // string | Log category to query
$status = 'status_example'; // string | Filter by status
$platform = 'platform_example'; // string | Filter by platform
$action = 'action_example'; // string | Filter by action (e.g., post.published, message.sent, account.connected, webhook.delivered)
$search = 'search_example'; // string | Free-text search across log fields
$days = 90; // int | Number of days to look back (max 90)
$limit = 50; // int | Maximum number of logs to return (max 100)
$skip = 0; // int | Number of logs to skip (for pagination)

try {
    $result = $apiInstance->listLogs($type, $status, $platform, $action, $search, $days, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->listLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| Log category to query | [optional] [default to &#39;publishing&#39;] |
| **status** | **string**| Filter by status | [optional] |
| **platform** | **string**| Filter by platform | [optional] |
| **action** | **string**| Filter by action (e.g., post.published, message.sent, account.connected, webhook.delivered) | [optional] |
| **search** | **string**| Free-text search across log fields | [optional] |
| **days** | **int**| Number of days to look back (max 90) | [optional] [default to 90] |
| **limit** | **int**| Maximum number of logs to return (max 100) | [optional] [default to 50] |
| **skip** | **int**| Number of logs to skip (for pagination) | [optional] [default to 0] |

### Return type

[**\Late\Model\ListLogs200Response**](../Model/ListLogs200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
