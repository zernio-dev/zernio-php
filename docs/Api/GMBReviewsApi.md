# Late\GMBReviewsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getGoogleBusinessReviews()**](GMBReviewsApi.md#getGoogleBusinessReviews) | **GET** /v1/accounts/{accountId}/gmb-reviews | Get reviews |


## `getGoogleBusinessReviews()`

```php
getGoogleBusinessReviews($account_id, $location_id, $page_size, $page_token): \Late\Model\GetGoogleBusinessReviews200Response
```

Get reviews

Returns reviews for a GBP account including ratings, comments, and owner replies. Use nextPageToken for pagination.

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

[**\Late\Model\GetGoogleBusinessReviews200Response**](../Model/GetGoogleBusinessReviews200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
