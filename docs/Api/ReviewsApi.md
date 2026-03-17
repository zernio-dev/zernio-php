# Late\ReviewsApi

Unified inbox API for managing reviews on Facebook Pages and Google Business accounts. All endpoints aggregate data from multiple social accounts in a single API call. Requires Inbox addon.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteInboxReviewReply()**](ReviewsApi.md#deleteInboxReviewReply) | **DELETE** /v1/inbox/reviews/{reviewId}/reply | Delete review reply |
| [**listInboxReviews()**](ReviewsApi.md#listInboxReviews) | **GET** /v1/inbox/reviews | List reviews |
| [**replyToInboxReview()**](ReviewsApi.md#replyToInboxReview) | **POST** /v1/inbox/reviews/{reviewId}/reply | Reply to review |


## `deleteInboxReviewReply()`

```php
deleteInboxReviewReply($review_id, $delete_inbox_review_reply_request): \Late\Model\DeleteInboxReviewReply200Response
```

Delete review reply

Delete a reply to a review (Google Business only). Requires accountId in request body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$review_id = 'review_id_example'; // string
$delete_inbox_review_reply_request = new \Late\Model\DeleteInboxReviewReplyRequest(); // \Late\Model\DeleteInboxReviewReplyRequest

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
| **delete_inbox_review_reply_request** | [**\Late\Model\DeleteInboxReviewReplyRequest**](../Model/DeleteInboxReviewReplyRequest.md)|  | |

### Return type

[**\Late\Model\DeleteInboxReviewReply200Response**](../Model/DeleteInboxReviewReply200Response.md)

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
listInboxReviews($profile_id, $platform, $min_rating, $max_rating, $has_reply, $sort_by, $sort_order, $limit, $cursor, $account_id): \Late\Model\ListInboxReviews200Response
```

List reviews

Fetch reviews from all connected Facebook Pages and Google Business accounts. Aggregates data with filtering and sorting options. Supported platforms: Facebook, Google Business.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ReviewsApi(
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
$account_id = 'account_id_example'; // string | Filter by specific social account ID

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
| **account_id** | **string**| Filter by specific social account ID | [optional] |

### Return type

[**\Late\Model\ListInboxReviews200Response**](../Model/ListInboxReviews200Response.md)

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
replyToInboxReview($review_id, $reply_to_inbox_review_request): \Late\Model\ReplyToInboxReview200Response
```

Reply to review

Post a reply to a review. Requires accountId in request body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$review_id = 'review_id_example'; // string | Review ID (URL-encoded for Google Business)
$reply_to_inbox_review_request = new \Late\Model\ReplyToInboxReviewRequest(); // \Late\Model\ReplyToInboxReviewRequest

try {
    $result = $apiInstance->replyToInboxReview($review_id, $reply_to_inbox_review_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsApi->replyToInboxReview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **review_id** | **string**| Review ID (URL-encoded for Google Business) | |
| **reply_to_inbox_review_request** | [**\Late\Model\ReplyToInboxReviewRequest**](../Model/ReplyToInboxReviewRequest.md)|  | |

### Return type

[**\Late\Model\ReplyToInboxReview200Response**](../Model/ReplyToInboxReview200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
