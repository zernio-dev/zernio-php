# Late\CommentAutomationsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCommentAutomation()**](CommentAutomationsApi.md#createCommentAutomation) | **POST** /v1/comment-automations | Create comment-to-DM automation |
| [**deleteCommentAutomation()**](CommentAutomationsApi.md#deleteCommentAutomation) | **DELETE** /v1/comment-automations/{automationId} | Delete automation |
| [**getCommentAutomation()**](CommentAutomationsApi.md#getCommentAutomation) | **GET** /v1/comment-automations/{automationId} | Get automation details |
| [**listCommentAutomationLogs()**](CommentAutomationsApi.md#listCommentAutomationLogs) | **GET** /v1/comment-automations/{automationId}/logs | List automation logs |
| [**listCommentAutomations()**](CommentAutomationsApi.md#listCommentAutomations) | **GET** /v1/comment-automations | List comment-to-DM automations |
| [**updateCommentAutomation()**](CommentAutomationsApi.md#updateCommentAutomation) | **PATCH** /v1/comment-automations/{automationId} | Update automation settings |


## `createCommentAutomation()`

```php
createCommentAutomation($create_comment_automation_request): \Late\Model\CreateCommentAutomation200Response
```

Create comment-to-DM automation

Create a keyword-triggered DM automation on an Instagram or Facebook post. When someone comments a matching keyword, they automatically receive a DM. Only one active automation per post is allowed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\CommentAutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_comment_automation_request = new \Late\Model\CreateCommentAutomationRequest(); // \Late\Model\CreateCommentAutomationRequest

try {
    $result = $apiInstance->createCommentAutomation($create_comment_automation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentAutomationsApi->createCommentAutomation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_comment_automation_request** | [**\Late\Model\CreateCommentAutomationRequest**](../Model/CreateCommentAutomationRequest.md)|  | |

### Return type

[**\Late\Model\CreateCommentAutomation200Response**](../Model/CreateCommentAutomation200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCommentAutomation()`

```php
deleteCommentAutomation($automation_id)
```

Delete automation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\CommentAutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation_id = 'automation_id_example'; // string

try {
    $apiInstance->deleteCommentAutomation($automation_id);
} catch (Exception $e) {
    echo 'Exception when calling CommentAutomationsApi->deleteCommentAutomation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automation_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommentAutomation()`

```php
getCommentAutomation($automation_id): \Late\Model\GetCommentAutomation200Response
```

Get automation details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\CommentAutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation_id = 'automation_id_example'; // string

try {
    $result = $apiInstance->getCommentAutomation($automation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentAutomationsApi->getCommentAutomation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automation_id** | **string**|  | |

### Return type

[**\Late\Model\GetCommentAutomation200Response**](../Model/GetCommentAutomation200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCommentAutomationLogs()`

```php
listCommentAutomationLogs($automation_id, $status, $limit, $skip): \Late\Model\ListCommentAutomationLogs200Response
```

List automation logs

Paginated list of every comment that triggered this automation, with send status and commenter info.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\CommentAutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation_id = 'automation_id_example'; // string
$status = 'status_example'; // string | Filter by result status
$limit = 50; // int
$skip = 0; // int

try {
    $result = $apiInstance->listCommentAutomationLogs($automation_id, $status, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentAutomationsApi->listCommentAutomationLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automation_id** | **string**|  | |
| **status** | **string**| Filter by result status | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |
| **skip** | **int**|  | [optional] [default to 0] |

### Return type

[**\Late\Model\ListCommentAutomationLogs200Response**](../Model/ListCommentAutomationLogs200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCommentAutomations()`

```php
listCommentAutomations($profile_id): \Late\Model\ListCommentAutomations200Response
```

List comment-to-DM automations

List all comment-to-DM automations for a profile. Returns automations with their stats.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\CommentAutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Filter by profile. Omit to list across all profiles

try {
    $result = $apiInstance->listCommentAutomations($profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentAutomationsApi->listCommentAutomations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Filter by profile. Omit to list across all profiles | [optional] |

### Return type

[**\Late\Model\ListCommentAutomations200Response**](../Model/ListCommentAutomations200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCommentAutomation()`

```php
updateCommentAutomation($automation_id, $update_comment_automation_request): \Late\Model\UpdateCommentAutomation200Response
```

Update automation settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\CommentAutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$automation_id = 'automation_id_example'; // string
$update_comment_automation_request = new \Late\Model\UpdateCommentAutomationRequest(); // \Late\Model\UpdateCommentAutomationRequest

try {
    $result = $apiInstance->updateCommentAutomation($automation_id, $update_comment_automation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentAutomationsApi->updateCommentAutomation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **automation_id** | **string**|  | |
| **update_comment_automation_request** | [**\Late\Model\UpdateCommentAutomationRequest**](../Model/UpdateCommentAutomationRequest.md)|  | [optional] |

### Return type

[**\Late\Model\UpdateCommentAutomation200Response**](../Model/UpdateCommentAutomation200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
