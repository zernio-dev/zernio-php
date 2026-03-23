# Late\BroadcastsApi

Platform-agnostic broadcast campaigns. Send bulk messages to contacts via any inbox platform. WhatsApp broadcasts use templates; other platforms use generic messages.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addBroadcastRecipients()**](BroadcastsApi.md#addBroadcastRecipients) | **POST** /v1/broadcasts/{broadcastId}/recipients | Add recipients to a broadcast |
| [**cancelBroadcast()**](BroadcastsApi.md#cancelBroadcast) | **POST** /v1/broadcasts/{broadcastId}/cancel | Cancel a broadcast |
| [**createBroadcast()**](BroadcastsApi.md#createBroadcast) | **POST** /v1/broadcasts | Create a broadcast draft |
| [**deleteBroadcast()**](BroadcastsApi.md#deleteBroadcast) | **DELETE** /v1/broadcasts/{broadcastId} | Delete a broadcast (draft only) |
| [**getBroadcast()**](BroadcastsApi.md#getBroadcast) | **GET** /v1/broadcasts/{broadcastId} | Get broadcast details |
| [**listBroadcastRecipients()**](BroadcastsApi.md#listBroadcastRecipients) | **GET** /v1/broadcasts/{broadcastId}/recipients | List broadcast recipients |
| [**listBroadcasts()**](BroadcastsApi.md#listBroadcasts) | **GET** /v1/broadcasts | List broadcasts |
| [**scheduleBroadcast()**](BroadcastsApi.md#scheduleBroadcast) | **POST** /v1/broadcasts/{broadcastId}/schedule | Schedule broadcast for later |
| [**sendBroadcast()**](BroadcastsApi.md#sendBroadcast) | **POST** /v1/broadcasts/{broadcastId}/send | Trigger immediate send |
| [**updateBroadcast()**](BroadcastsApi.md#updateBroadcast) | **PATCH** /v1/broadcasts/{broadcastId} | Update a broadcast |


## `addBroadcastRecipients()`

```php
addBroadcastRecipients($broadcast_id, $add_broadcast_recipients_request)
```

Add recipients to a broadcast

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\BroadcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$broadcast_id = 'broadcast_id_example'; // string
$add_broadcast_recipients_request = new \Late\Model\AddBroadcastRecipientsRequest(); // \Late\Model\AddBroadcastRecipientsRequest

try {
    $apiInstance->addBroadcastRecipients($broadcast_id, $add_broadcast_recipients_request);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastsApi->addBroadcastRecipients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **broadcast_id** | **string**|  | |
| **add_broadcast_recipients_request** | [**\Late\Model\AddBroadcastRecipientsRequest**](../Model/AddBroadcastRecipientsRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelBroadcast()`

```php
cancelBroadcast($broadcast_id)
```

Cancel a broadcast

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\BroadcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$broadcast_id = 'broadcast_id_example'; // string

try {
    $apiInstance->cancelBroadcast($broadcast_id);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastsApi->cancelBroadcast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **broadcast_id** | **string**|  | |

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

## `createBroadcast()`

```php
createBroadcast($create_broadcast_request)
```

Create a broadcast draft

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\BroadcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_broadcast_request = new \Late\Model\CreateBroadcastRequest(); // \Late\Model\CreateBroadcastRequest

try {
    $apiInstance->createBroadcast($create_broadcast_request);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastsApi->createBroadcast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_broadcast_request** | [**\Late\Model\CreateBroadcastRequest**](../Model/CreateBroadcastRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBroadcast()`

```php
deleteBroadcast($broadcast_id)
```

Delete a broadcast (draft only)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\BroadcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$broadcast_id = 'broadcast_id_example'; // string

try {
    $apiInstance->deleteBroadcast($broadcast_id);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastsApi->deleteBroadcast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **broadcast_id** | **string**|  | |

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

## `getBroadcast()`

```php
getBroadcast($broadcast_id)
```

Get broadcast details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\BroadcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$broadcast_id = 'broadcast_id_example'; // string

try {
    $apiInstance->getBroadcast($broadcast_id);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastsApi->getBroadcast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **broadcast_id** | **string**|  | |

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

## `listBroadcastRecipients()`

```php
listBroadcastRecipients($broadcast_id, $status, $limit, $skip)
```

List broadcast recipients

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\BroadcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$broadcast_id = 'broadcast_id_example'; // string
$status = 'status_example'; // string
$limit = 50; // int
$skip = 0; // int

try {
    $apiInstance->listBroadcastRecipients($broadcast_id, $status, $limit, $skip);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastsApi->listBroadcastRecipients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **broadcast_id** | **string**|  | |
| **status** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |
| **skip** | **int**|  | [optional] [default to 0] |

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

## `listBroadcasts()`

```php
listBroadcasts($profile_id, $status, $platform, $limit, $skip)
```

List broadcasts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\BroadcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$status = 'status_example'; // string
$platform = 'platform_example'; // string
$limit = 50; // int
$skip = 0; // int

try {
    $apiInstance->listBroadcasts($profile_id, $status, $platform, $limit, $skip);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastsApi->listBroadcasts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | |
| **status** | **string**|  | [optional] |
| **platform** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |
| **skip** | **int**|  | [optional] [default to 0] |

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

## `scheduleBroadcast()`

```php
scheduleBroadcast($broadcast_id, $schedule_broadcast_request)
```

Schedule broadcast for later

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\BroadcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$broadcast_id = 'broadcast_id_example'; // string
$schedule_broadcast_request = new \Late\Model\ScheduleBroadcastRequest(); // \Late\Model\ScheduleBroadcastRequest

try {
    $apiInstance->scheduleBroadcast($broadcast_id, $schedule_broadcast_request);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastsApi->scheduleBroadcast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **broadcast_id** | **string**|  | |
| **schedule_broadcast_request** | [**\Late\Model\ScheduleBroadcastRequest**](../Model/ScheduleBroadcastRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendBroadcast()`

```php
sendBroadcast($broadcast_id)
```

Trigger immediate send

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\BroadcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$broadcast_id = 'broadcast_id_example'; // string

try {
    $apiInstance->sendBroadcast($broadcast_id);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastsApi->sendBroadcast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **broadcast_id** | **string**|  | |

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

## `updateBroadcast()`

```php
updateBroadcast($broadcast_id)
```

Update a broadcast

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\BroadcastsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$broadcast_id = 'broadcast_id_example'; // string

try {
    $apiInstance->updateBroadcast($broadcast_id);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastsApi->updateBroadcast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **broadcast_id** | **string**|  | |

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
