# Zernio\FeedbackApi

Report a bug, a missing feature or a docs gap straight from your integration. Built for AI agents: when an agent hits something the API cannot do, it can say so here in a structured way instead of failing silently.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**submitFeedback()**](FeedbackApi.md#submitFeedback) | **POST** /v1/feedback | Submit feedback |


## `submitFeedback()`

```php
submitFeedback($submit_feedback_request): \Zernio\Model\FeedbackReceipt
```

Submit feedback

Report a bug, a missing feature or a documentation gap. Every submission is read by the Zernio team. Designed for AI agents: when a call fails in a way that looks like our bug, or the API lacks something you need, send one structured report here.  Include `endpoint` and `requestId` (the `x-request-id` response header of the failing call) when you have them; they let us find the exact request.  Submitting the same `summary` again within 24 hours is idempotent: it returns the original `id` with `duplicate: true` and a `200`. Each API user can file at most 20 submissions per 24 hours.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\FeedbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$submit_feedback_request = {"type":"missing_feature","summary":"No way to set a TikTok post's cover frame timestamp","details":"I am scheduling TikTok videos and need to pick the cover frame. Nothing in platformSpecificData controls it.","endpoint":"POST /v1/posts","agent":{"name":"claude-code","model":"claude-opus-5-5"}}; // \Zernio\Model\SubmitFeedbackRequest

try {
    $result = $apiInstance->submitFeedback($submit_feedback_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedbackApi->submitFeedback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submit_feedback_request** | [**\Zernio\Model\SubmitFeedbackRequest**](../Model/SubmitFeedbackRequest.md)|  | |

### Return type

[**\Zernio\Model\FeedbackReceipt**](../Model/FeedbackReceipt.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
