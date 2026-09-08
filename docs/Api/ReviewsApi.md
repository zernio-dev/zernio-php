# Zernio\ReviewsApi

Unified inbox API for managing reviews on Facebook Pages and Google Business Profile accounts. All endpoints aggregate data from multiple accounts in a single API call. Requires Inbox addon.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteInboxReviewReply()**](ReviewsApi.md#deleteInboxReviewReply) | **DELETE** /v1/inbox/reviews/{reviewId}/reply | Delete review reply |
| [**listInboxReviews()**](ReviewsApi.md#listInboxReviews) | **GET** /v1/inbox/reviews | List reviews |
| [**replyToInboxReview()**](ReviewsApi.md#replyToInboxReview) | **POST** /v1/inbox/reviews/{reviewId}/reply | Reply to review |


## `deleteInboxReviewReply()`

```php
deleteInboxReviewReply($review_id, $delete_inbox_review_reply_request): \Zernio\Model\DeleteInboxReviewReply200Response
```

Delete review reply

Delete a reply to a review (Google Business Profile only). Requires accountId in request body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$review_id = 'review_id_example'; // string
$delete_inbox_review_reply_request = new \Zernio\Model\DeleteInboxReviewReplyRequest(); // \Zernio\Model\DeleteInboxReviewReplyRequest

try {
    $result = $apiInstance->deleteInboxReviewReply($review_id, $delete_inbox_review_reply_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsApi->deleteInboxReviewReply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **review_id** | **string**|  | |
| **delete_inbox_review_reply_request** | [**\Zernio\Model\DeleteInboxReviewReplyRequest**](../Model/DeleteInboxReviewReplyRequest.md)|  | |

### Return type

[**\Zernio\Model\DeleteInboxReviewReply200Response**](../Model/DeleteInboxReviewReply200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInboxReviews()`

```php
listInboxReviews($profile_id, $platform, $min_rating, $max_rating, $has_reply, $sort_by, $sort_order, $limit, $cursor, $account_id): \Zernio\Model\ListInboxReviews200Response
```

List reviews

Fetch reviews from all connected Facebook Pages and Google Business Profile accounts. Aggregates data with filtering and sorting options. Supported platforms: Facebook, Google Business Profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$platform = 'platform_example'; // string
$min_rating = 56; // int
$max_rating = 56; // int
$has_reply = True; // bool | Filter by reply status
$sort_by = 'date'; // string
$sort_order = 'desc'; // string
$limit = 25; // int
$cursor = 'cursor_example'; // string
$account_id = 'account_id_example'; // string | Filter by specific account ID

try {
    $result = $apiInstance->listInboxReviews($profile_id, $platform, $min_rating, $max_rating, $has_reply, $sort_by, $sort_order, $limit, $cursor, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsApi->listInboxReviews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | [optional] |
| **platform** | **string**|  | [optional] |
| **min_rating** | **int**|  | [optional] |
| **max_rating** | **int**|  | [optional] |
| **has_reply** | **bool**| Filter by reply status | [optional] |
| **sort_by** | **string**|  | [optional] [default to &#39;date&#39;] |
| **sort_order** | **string**|  | [optional] [default to &#39;desc&#39;] |
| **limit** | **int**|  | [optional] [default to 25] |
| **cursor** | **string**|  | [optional] |
| **account_id** | **string**| Filter by specific account ID | [optional] |

### Return type

[**\Zernio\Model\ListInboxReviews200Response**](../Model/ListInboxReviews200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replyToInboxReview()`

```php
replyToInboxReview($review_id, $reply_to_inbox_review_request, $idempotency_key): \Zernio\Model\ReplyToInboxReview200Response
```

Reply to review

Post a reply to a review. Requires accountId in request body.  **Idempotency:** send an `Idempotency-Key` header to make retries safe (e.g. after a client-side timeout where delivery is unknown): same key + same body replays the original response (with `Idempotent-Replayed: true`) instead of sending the reply to the platform again; same key + different body returns 422; a key still in flight returns 409. Keys are retained for 24 hours and are scoped to the credential and to this exact path, so reusing a key against a different reviewId returns 422 rather than replaying the other review's response.  Only successful (2xx) responses are stored for replay. If the request throws or returns a non-2xx status the key is released, so the header protects the \"request succeeded but the response was lost\" case. After an ambiguous failure (a 5xx or a network timeout) fetch the review before retrying with the same key, and treat a missing reply as inconclusive rather than as proof nothing was sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\ReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$review_id = 'review_id_example'; // string | Review ID (URL-encoded for Google Business Profile)
$reply_to_inbox_review_request = new \Zernio\Model\ReplyToInboxReviewRequest(); // \Zernio\Model\ReplyToInboxReviewRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409.

try {
    $result = $apiInstance->replyToInboxReview($review_id, $reply_to_inbox_review_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsApi->replyToInboxReview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **review_id** | **string**| Review ID (URL-encoded for Google Business Profile) | |
| **reply_to_inbox_review_request** | [**\Zernio\Model\ReplyToInboxReviewRequest**](../Model/ReplyToInboxReviewRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. | [optional] |

### Return type

[**\Zernio\Model\ReplyToInboxReview200Response**](../Model/ReplyToInboxReview200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
