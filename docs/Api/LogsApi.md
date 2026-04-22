# Zernio\LogsApi

Publishing logs for transparency and debugging. Each log includes the platform API endpoint, HTTP status code, request/response bodies, duration, and retry attempts. Logs are automatically deleted after 7 days.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listLogs()**](LogsApi.md#listLogs) | **GET** /v1/logs | List activity logs |


## `listLogs()`

```php
listLogs($type, $status, $platform, $action, $search, $days, $limit, $skip): \Zernio\Model\ListLogs200Response
```

List activity logs

Unified logs endpoint. Returns logs for publishing, connections, webhooks, and messaging. Filter by type, platform, status, and time range. Logs are retained for 90 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\LogsApi(
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

[**\Zernio\Model\ListLogs200Response**](../Model/ListLogs200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
