# Zernio\SupportAssistantApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**askSupportQuestion()**](SupportAssistantApi.md#askSupportQuestion) | **POST** /v1/support/runs | Ask a support question (private beta) |
| [**getSupportAnswer()**](SupportAssistantApi.md#getSupportAnswer) | **GET** /v1/support/runs/{runId} | Get a support answer (private beta) |


## `askSupportQuestion()`

```php
askSupportQuestion($ask_support_question_request, $idempotency_key): \Zernio\Model\AskSupportQuestion202Response
```

Ask a support question (private beta)

Private beta: returns 403 `feature_not_available` unless enabled for your account. Asks Ana, the Zernio support agent, a question about your workspace. Each question starts a run that answers asynchronously: this returns 202 with a `runId`, and the answer arrives through the `support.run.completed` and `support.run.failed` webhooks. `GET /v1/support/runs/{runId}` is the fallback. Pass `threadId` to continue an earlier conversation, and `context` to point Ana at a post, account or profile. Billed when the run finishes at the model cost plus 20%, never above `maxCostUsd`; failed runs are free. When Ana finds a problem on Zernio's side she opens a support ticket with the team (see `supportTicket` on the run) and the run ends as `needs_human`. Requires an unrestricted API key, usage-based billing and a card on file. Limits per account: 3 active runs and $100 of runs per UTC month. Send an Idempotency-Key header to make retries safe.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SupportAssistantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ask_support_question_request = {"message":"Why did my Instagram post fail to publish?","context":{"postId":"64f0a1b2c3d4e5f6a7b8c9d0"}}; // \Zernio\Model\AskSupportQuestionRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409.

try {
    $result = $apiInstance->askSupportQuestion($ask_support_question_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportAssistantApi->askSupportQuestion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ask_support_question_request** | [**\Zernio\Model\AskSupportQuestionRequest**](../Model/AskSupportQuestionRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. | [optional] |

### Return type

[**\Zernio\Model\AskSupportQuestion202Response**](../Model/AskSupportQuestion202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupportAnswer()`

```php
getSupportAnswer($run_id): \Zernio\Model\SupportRun
```

Get a support answer (private beta)

Private beta: returns 403 `feature_not_available` unless enabled for your account. Returns a run started by your team, with Ana's answer once it is ready. Prefer the `support.run.completed` and `support.run.failed` webhooks; use this as the fallback, waiting `pollAfterSeconds` between polls. `costUsd` is the amount billed: the model cost plus 20%, never above `maxCostUsd`, and 0 for a failed run.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\SupportAssistantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_id = 'run_id_example'; // string

try {
    $result = $apiInstance->getSupportAnswer($run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportAssistantApi->getSupportAnswer: ', $e->getMessage(), PHP_EOL;
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
