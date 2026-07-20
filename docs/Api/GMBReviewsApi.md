# Zernio\GMBReviewsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**batchGetGoogleBusinessReviews()**](GMBReviewsApi.md#batchGetGoogleBusinessReviews) | **POST** /v1/accounts/{accountId}/gmb-reviews/batch | Batch get reviews |
| [**deleteGoogleBusinessReviewReply()**](GMBReviewsApi.md#deleteGoogleBusinessReviewReply) | **DELETE** /v1/accounts/{accountId}/gmb-reviews/{reviewId}/reply | Delete a review reply |
| [**getGoogleBusinessReviews()**](GMBReviewsApi.md#getGoogleBusinessReviews) | **GET** /v1/accounts/{accountId}/gmb-reviews | Get reviews |
| [**replyToGoogleBusinessReview()**](GMBReviewsApi.md#replyToGoogleBusinessReview) | **POST** /v1/accounts/{accountId}/gmb-reviews/{reviewId}/reply | Reply to a review |


## `batchGetGoogleBusinessReviews()`

```php
batchGetGoogleBusinessReviews($account_id, $batch_get_google_business_reviews_request): \Zernio\Model\BatchGetGoogleBusinessReviews200Response
```

Batch get reviews

Fetches reviews across multiple locations in a single request. More efficient than calling GET /gmb-reviews per location for multi-location businesses. Returns a flat locationReviews array (not grouped by location): each item carries the location resource name it belongs to (`name`) plus the review object (`review`), whose identity is `review.reviewId`. Reviews are requested from Google ordered by `orderBy` (default `updateTime desc`, newest first), so callers polling for recent reviews can stop paginating once they cross their date window. Note: this endpoint does not return aggregate metrics (averageRating / totalReviewCount). For those, use the single-location GET /gmb-reviews endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\GMBReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$batch_get_google_business_reviews_request = {"locationNames":["accounts/123/locations/456","accounts/123/locations/789"],"pageSize":50}; // \Zernio\Model\BatchGetGoogleBusinessReviewsRequest

try {
    $result = $apiInstance->batchGetGoogleBusinessReviews($account_id, $batch_get_google_business_reviews_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GMBReviewsApi->batchGetGoogleBusinessReviews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **batch_get_google_business_reviews_request** | [**\Zernio\Model\BatchGetGoogleBusinessReviewsRequest**](../Model/BatchGetGoogleBusinessReviewsRequest.md)|  | |

### Return type

[**\Zernio\Model\BatchGetGoogleBusinessReviews200Response**](../Model/BatchGetGoogleBusinessReviews200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGoogleBusinessReviewReply()`

```php
deleteGoogleBusinessReviewReply($account_id, $review_id): \Zernio\Model\DeleteGoogleBusinessReviewReply200Response
```

Delete a review reply

Removes the business owner reply from a Google Business review. The review itself remains.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\GMBReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The Zernio account ID (from /v1/accounts)
$review_id = 'review_id_example'; // string | The review ID portion (e.g. \"AIe9_BGx1234567890\"), not the full resource name

try {
    $result = $apiInstance->deleteGoogleBusinessReviewReply($account_id, $review_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GMBReviewsApi->deleteGoogleBusinessReviewReply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Zernio account ID (from /v1/accounts) | |
| **review_id** | **string**| The review ID portion (e.g. \&quot;AIe9_BGx1234567890\&quot;), not the full resource name | |

### Return type

[**\Zernio\Model\DeleteGoogleBusinessReviewReply200Response**](../Model/DeleteGoogleBusinessReviewReply200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGoogleBusinessReviews()`

```php
getGoogleBusinessReviews($account_id, $location_id, $page_size, $page_token): \Zernio\Model\GetGoogleBusinessReviews200Response
```

Get reviews

Returns reviews for a GBP account including ratings, comments, and owner replies. Use nextPageToken for pagination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\GMBReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The Zernio account ID (from /v1/accounts)
$location_id = 'location_id_example'; // string | Override which location to query. If omitted, uses the account's selected location. Use GET /gmb-locations to list valid IDs.
$page_size = 50; // int | Number of reviews to fetch per page (max 50)
$page_token = 'page_token_example'; // string | Pagination token from previous response

try {
    $result = $apiInstance->getGoogleBusinessReviews($account_id, $location_id, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GMBReviewsApi->getGoogleBusinessReviews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Zernio account ID (from /v1/accounts) | |
| **location_id** | **string**| Override which location to query. If omitted, uses the account&#39;s selected location. Use GET /gmb-locations to list valid IDs. | [optional] |
| **page_size** | **int**| Number of reviews to fetch per page (max 50) | [optional] [default to 50] |
| **page_token** | **string**| Pagination token from previous response | [optional] |

### Return type

[**\Zernio\Model\GetGoogleBusinessReviews200Response**](../Model/GetGoogleBusinessReviews200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replyToGoogleBusinessReview()`

```php
replyToGoogleBusinessReview($account_id, $review_id, $reply_to_google_business_review_request): \Zernio\Model\ReplyToGoogleBusinessReview200Response
```

Reply to a review

Posts (or updates) the business owner reply to a Google Business review. The reply is associated with the account's currently selected location (set via /v1/accounts/{accountId}/gmb-locations). Calling this endpoint a second time on the same review overwrites the previous reply (PUT semantics on Google's side).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\GMBReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The Zernio account ID (from /v1/accounts)
$review_id = 'review_id_example'; // string | The review ID portion (e.g. \"AIe9_BGx1234567890\"), not the full resource name
$reply_to_google_business_review_request = {"comment":"Thank you for your kind words, we really appreciate it!"}; // \Zernio\Model\ReplyToGoogleBusinessReviewRequest

try {
    $result = $apiInstance->replyToGoogleBusinessReview($account_id, $review_id, $reply_to_google_business_review_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GMBReviewsApi->replyToGoogleBusinessReview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Zernio account ID (from /v1/accounts) | |
| **review_id** | **string**| The review ID portion (e.g. \&quot;AIe9_BGx1234567890\&quot;), not the full resource name | |
| **reply_to_google_business_review_request** | [**\Zernio\Model\ReplyToGoogleBusinessReviewRequest**](../Model/ReplyToGoogleBusinessReviewRequest.md)|  | |

### Return type

[**\Zernio\Model\ReplyToGoogleBusinessReview200Response**](../Model/ReplyToGoogleBusinessReview200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
