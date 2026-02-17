# Late\GMBReviewsApi



All URIs are relative to https://getlate.dev/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getGoogleBusinessReviews()**](GMBReviewsApi.md#getGoogleBusinessReviews) | **GET** /v1/accounts/{accountId}/gmb-reviews | Get reviews |


## `getGoogleBusinessReviews()`

```php
getGoogleBusinessReviews($account_id, $page_size, $page_token): \Late\Model\GetGoogleBusinessReviews200Response
```

Get reviews

Fetches reviews for a connected Google Business Profile account.  Returns all reviews for the business location, including: - Reviewer information (name, profile photo) - Star rating (1-5) - Review comment/text - Business owner's reply (if any) - Review timestamps  Use pagination via `nextPageToken` to fetch all reviews for locations with many reviews.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\GMBReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The Late account ID (from /v1/accounts)
$page_size = 50; // int | Number of reviews to fetch per page (max 50)
$page_token = 'page_token_example'; // string | Pagination token from previous response

try {
    $result = $apiInstance->getGoogleBusinessReviews($account_id, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GMBReviewsApi->getGoogleBusinessReviews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Late account ID (from /v1/accounts) | |
| **page_size** | **int**| Number of reviews to fetch per page (max 50) | [optional] [default to 50] |
| **page_token** | **string**| Pagination token from previous response | [optional] |

### Return type

[**\Late\Model\GetGoogleBusinessReviews200Response**](../Model/GetGoogleBusinessReviews200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
