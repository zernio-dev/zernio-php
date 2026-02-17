# Late\RedditSearchApi



All URIs are relative to https://getlate.dev/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getRedditFeed()**](RedditSearchApi.md#getRedditFeed) | **GET** /v1/reddit/feed | Get subreddit feed |
| [**searchReddit()**](RedditSearchApi.md#searchReddit) | **GET** /v1/reddit/search | Search posts |


## `getRedditFeed()`

```php
getRedditFeed($account_id, $subreddit, $sort, $limit, $after, $t): \Late\Model\GetRedditFeed200Response
```

Get subreddit feed

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\RedditSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$subreddit = 'subreddit_example'; // string
$sort = 'hot'; // string
$limit = 25; // int
$after = 'after_example'; // string
$t = 't_example'; // string

try {
    $result = $apiInstance->getRedditFeed($account_id, $subreddit, $sort, $limit, $after, $t);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RedditSearchApi->getRedditFeed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **subreddit** | **string**|  | [optional] |
| **sort** | **string**|  | [optional] [default to &#39;hot&#39;] |
| **limit** | **int**|  | [optional] [default to 25] |
| **after** | **string**|  | [optional] |
| **t** | **string**|  | [optional] |

### Return type

[**\Late\Model\GetRedditFeed200Response**](../Model/GetRedditFeed200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchReddit()`

```php
searchReddit($account_id, $q, $subreddit, $restrict_sr, $sort, $limit, $after): \Late\Model\SearchReddit200Response
```

Search posts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\RedditSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$q = 'q_example'; // string
$subreddit = 'subreddit_example'; // string
$restrict_sr = 'restrict_sr_example'; // string
$sort = 'new'; // string
$limit = 25; // int
$after = 'after_example'; // string

try {
    $result = $apiInstance->searchReddit($account_id, $q, $subreddit, $restrict_sr, $sort, $limit, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RedditSearchApi->searchReddit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **q** | **string**|  | |
| **subreddit** | **string**|  | [optional] |
| **restrict_sr** | **string**|  | [optional] |
| **sort** | **string**|  | [optional] [default to &#39;new&#39;] |
| **limit** | **int**|  | [optional] [default to 25] |
| **after** | **string**|  | [optional] |

### Return type

[**\Late\Model\SearchReddit200Response**](../Model/SearchReddit200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
