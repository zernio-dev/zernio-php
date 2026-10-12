# Zernio\SupportAssistantApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**askSupportQuestion()**](SupportAssistantApi.md#askSupportQuestion) | **POST** /v1/support/runs | Ask a support question |
| [**getSupportAnswer()**](SupportAssistantApi.md#getSupportAnswer) | **GET** /v1/support/runs/{runId} | Get a support answer |
| [**listSupportAnswers()**](SupportAssistantApi.md#listSupportAnswers) | **GET** /v1/support/runs | List a thread&#39;s support answers |


## `askSupportQuestion()`

```php
askSupportQuestion($ask_support_question_request, $idempotency_key): \Zernio\Model\AskSupportQuestion202Response
```

Ask a support question

Asks the Zernio Support Assistant a question about your workspace. Each question starts a run that answers asynchronously: this returns 202 with a `runId`, and the answer arrives through the `support.run.completed` and `support.run.failed` webhooks. `GET /v1/support/runs/{runId}` is the fallback. Pass `threadId` to continue an earlier conversation, and `context` to point the assistant at a post, account or profile. When the assistant finds a problem on Zernio's side it opens a support ticket with the team (see `supportTicket` on the run) and the run ends as `needs_human`.  **Pricing.** You pay per question, once it finishes. The exact amount charged is the run's `costUsd`.  | Question | You pay | | --- | --- | | Typical question | $0.10 to $0.50 | | Most one question can cost | Its `maxCostUsd`: $0.50 to $3, $3 by default | | Handed to the Zernio team (`needs_human`) | Charged like an answered question | | Failed or expired | $0 | | All questions in a UTC month | At most $100 per account |  Near its `maxCostUsd` a run stops investigating and answers with what it found so far, so it never charges more than the cap; with nothing to answer yet it fails and costs nothing. Charges appear as \"Support API\" on your invoice.  Requires an unrestricted API key, usage-based billing and a card on file. Limits per account: 3 active runs and $100 of runs per UTC month. Send an Idempotency-Key header to make retries safe.

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

Get a support answer

Returns a run started by your team, with the answer once it is ready. Prefer the `support.run.completed` and `support.run.failed` webhooks; use this as the fallback, waiting `pollAfterSeconds` between polls. `costUsd` is the amount billed for the question, never above `maxCostUsd`, and 0 for a failed run (pricing on Ask a support question).

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

## `listSupportAnswers()`

```php
listSupportAnswers($thread_id, $limit, $cursor): \Zernio\Model\ListSupportAnswers200Response
```

List a thread's support answers

Lists the runs of one thread that your team started, with their answers, oldest first. Replies from the Zernio team after a support ticket arrive by email and are not included. Runs are kept for 90 days. Page through a long thread with `limit` and `cursor`: pass `nextCursor` as `cursor` until it is null.

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
$thread_id = 'thread_id_example'; // string | The thread to list, as returned by `POST /v1/support/runs`.
$limit = 20; // int | Runs per page.
$cursor = 'cursor_example'; // string | Pass `nextCursor` from the previous page.

try {
    $result = $apiInstance->listSupportAnswers($thread_id, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportAssistantApi->listSupportAnswers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **thread_id** | **string**| The thread to list, as returned by &#x60;POST /v1/support/runs&#x60;. | |
| **limit** | **int**| Runs per page. | [optional] [default to 20] |
| **cursor** | **string**| Pass &#x60;nextCursor&#x60; from the previous page. | [optional] |

### Return type

[**\Zernio\Model\ListSupportAnswers200Response**](../Model/ListSupportAnswers200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
