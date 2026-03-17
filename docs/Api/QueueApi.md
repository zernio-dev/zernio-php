# Late\QueueApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createQueueSlot()**](QueueApi.md#createQueueSlot) | **POST** /v1/queue/slots | Create schedule |
| [**deleteQueueSlot()**](QueueApi.md#deleteQueueSlot) | **DELETE** /v1/queue/slots | Delete schedule |
| [**getNextQueueSlot()**](QueueApi.md#getNextQueueSlot) | **GET** /v1/queue/next-slot | Get next available slot |
| [**listQueueSlots()**](QueueApi.md#listQueueSlots) | **GET** /v1/queue/slots | List schedules |
| [**previewQueue()**](QueueApi.md#previewQueue) | **GET** /v1/queue/preview | Preview upcoming slots |
| [**updateQueueSlot()**](QueueApi.md#updateQueueSlot) | **PUT** /v1/queue/slots | Update schedule |


## `createQueueSlot()`

```php
createQueueSlot($create_queue_slot_request): \Late\Model\CreateQueueSlot201Response
```

Create schedule

Create an additional queue for a profile. The first queue created becomes the default. Subsequent queues are non-default unless explicitly set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_queue_slot_request = {"profileId":"64f0a1b2c3d4e5f6a7b8c9d0","name":"Evening Posts","timezone":"America/New_York","slots":[{"dayOfWeek":1,"time":"18:00"},{"dayOfWeek":3,"time":"18:00"},{"dayOfWeek":5,"time":"18:00"}],"active":true}; // \Late\Model\CreateQueueSlotRequest

try {
    $result = $apiInstance->createQueueSlot($create_queue_slot_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->createQueueSlot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_queue_slot_request** | [**\Late\Model\CreateQueueSlotRequest**](../Model/CreateQueueSlotRequest.md)|  | |

### Return type

[**\Late\Model\CreateQueueSlot201Response**](../Model/CreateQueueSlot201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteQueueSlot()`

```php
deleteQueueSlot($profile_id, $queue_id): \Late\Model\DeleteQueueSlot200Response
```

Delete schedule

Delete a queue from a profile. Requires queueId to specify which queue to delete. If deleting the default queue, another queue will be promoted to default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$queue_id = 'queue_id_example'; // string | Queue ID to delete

try {
    $result = $apiInstance->deleteQueueSlot($profile_id, $queue_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->deleteQueueSlot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | |
| **queue_id** | **string**| Queue ID to delete | |

### Return type

[**\Late\Model\DeleteQueueSlot200Response**](../Model/DeleteQueueSlot200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNextQueueSlot()`

```php
getNextQueueSlot($profile_id, $queue_id): \Late\Model\GetNextQueueSlot200Response
```

Get next available slot

Returns the next available queue slot for preview purposes. To create a queue post, use POST /v1/posts with queuedFromProfile instead of scheduledFor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$queue_id = 'queue_id_example'; // string | Specific queue ID (optional, defaults to profile's default queue)

try {
    $result = $apiInstance->getNextQueueSlot($profile_id, $queue_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->getNextQueueSlot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | |
| **queue_id** | **string**| Specific queue ID (optional, defaults to profile&#39;s default queue) | [optional] |

### Return type

[**\Late\Model\GetNextQueueSlot200Response**](../Model/GetNextQueueSlot200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listQueueSlots()`

```php
listQueueSlots($profile_id, $queue_id, $all): \Late\Model\ListQueueSlots200Response
```

List schedules

Returns queue schedules for a profile. Use all=true for all queues, or queueId for a specific one. Defaults to the default queue.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID to get queues for
$queue_id = 'queue_id_example'; // string | Specific queue ID to retrieve (optional)
$all = 'all_example'; // string | Set to 'true' to list all queues for the profile

try {
    $result = $apiInstance->listQueueSlots($profile_id, $queue_id, $all);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->listQueueSlots: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID to get queues for | |
| **queue_id** | **string**| Specific queue ID to retrieve (optional) | [optional] |
| **all** | **string**| Set to &#39;true&#39; to list all queues for the profile | [optional] |

### Return type

[**\Late\Model\ListQueueSlots200Response**](../Model/ListQueueSlots200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `previewQueue()`

```php
previewQueue($profile_id, $queue_id, $count): \Late\Model\PreviewQueue200Response
```

Preview upcoming slots

Returns the next N upcoming queue slot times for a profile as ISO datetime strings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$queue_id = 'queue_id_example'; // string | Filter by specific queue ID. Omit to use the default queue.
$count = 20; // int

try {
    $result = $apiInstance->previewQueue($profile_id, $queue_id, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->previewQueue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | |
| **queue_id** | **string**| Filter by specific queue ID. Omit to use the default queue. | [optional] |
| **count** | **int**|  | [optional] [default to 20] |

### Return type

[**\Late\Model\PreviewQueue200Response**](../Model/PreviewQueue200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateQueueSlot()`

```php
updateQueueSlot($update_queue_slot_request): \Late\Model\UpdateQueueSlot200Response
```

Update schedule

Create a new queue or update an existing one. Without queueId, creates/updates the default queue. With queueId, updates a specific queue. With setAsDefault=true, makes this queue the default for the profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_queue_slot_request = {"profileId":"64f0a1b2c3d4e5f6a7b8c9d0","queueId":"64f0a1b2c3d4e5f6a7b8c9d1","name":"Morning Posts","timezone":"America/New_York","slots":[{"dayOfWeek":1,"time":"09:00"},{"dayOfWeek":3,"time":"09:00"},{"dayOfWeek":5,"time":"10:00"}],"active":true,"setAsDefault":false}; // \Late\Model\UpdateQueueSlotRequest

try {
    $result = $apiInstance->updateQueueSlot($update_queue_slot_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->updateQueueSlot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_queue_slot_request** | [**\Late\Model\UpdateQueueSlotRequest**](../Model/UpdateQueueSlotRequest.md)|  | |

### Return type

[**\Late\Model\UpdateQueueSlot200Response**](../Model/UpdateQueueSlot200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
