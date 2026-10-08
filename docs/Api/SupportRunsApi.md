# Zernio\SupportRunsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSupportRun()**](SupportRunsApi.md#createSupportRun) | **POST** /v1/support/runs | Start a support run (private beta) |
| [**getSupportRun()**](SupportRunsApi.md#getSupportRun) | **GET** /v1/support/runs/{runId} | Get a support run (private beta) |


## `createSupportRun()`

```php
createSupportRun($create_support_run_request, $idempotency_key): \Zernio\Model\CreateSupportRun202Response
```

Start a support run (private beta)

Private beta: returns 403 `feature_not_available` unless enabled for your account. Asks Ana, the Zernio support agent, a question about your workspace. The run is asynchronous: this returns 202 with a `runId`, and the answer arrives through the `support.run.completed` and `support.run.failed` webhooks. `GET /v1/support/runs/{runId}` is the fallback. Pass `threadId` to continue an earlier conversation, and `context` to point Ana at a post, account or profile. Billed when the run finishes at the model cost plus 20%, never above `maxCostUsd`; failed runs are free. Requires an unrestricted API key, usage-based billing and a card on file. Limits per account: 3 active runs and $100 of runs per UTC month. Send an Idempotency-Key header to make retries safe.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SupportRunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_support_run_request = {"message":"Why did my Instagram post fail to publish?","context":{"postId":"64f0a1b2c3d4e5f6a7b8c9d0"}}; // \Zernio\Model\CreateSupportRunRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409.

try {
    $result = $apiInstance->createSupportRun($create_support_run_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportRunsApi->createSupportRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_support_run_request** | [**\Zernio\Model\CreateSupportRunRequest**](../Model/CreateSupportRunRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. | [optional] |

### Return type

[**\Zernio\Model\CreateSupportRun202Response**](../Model/CreateSupportRun202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupportRun()`

```php
getSupportRun($run_id): \Zernio\Model\SupportRun
```

Get a support run (private beta)

Private beta: returns 403 `feature_not_available` unless enabled for your account. Returns a run started by your team. Prefer the `support.run.completed` and `support.run.failed` webhooks; use this as the fallback, waiting `pollAfterSeconds` between polls. `costUsd` is the amount billed: the model cost plus 20%, never above `maxCostUsd`, and 0 for a failed run.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SupportRunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 'run_id_example'; // string

try {
    $result = $apiInstance->getSupportRun($run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportRunsApi->getSupportRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_id** | **string**|  | |

### Return type

[**\Zernio\Model\SupportRun**](../Model/SupportRun.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
