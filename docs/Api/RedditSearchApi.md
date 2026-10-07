# Zernio\RedditSearchApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getRedditFeed()**](RedditSearchApi.md#getRedditFeed) | **GET** /v1/reddit/feed | Get subreddit feed |
| [**getRedditPostComments()**](RedditSearchApi.md#getRedditPostComments) | **GET** /v1/reddit/comments/{postId} | Get the comments of a Reddit post |
| [**searchReddit()**](RedditSearchApi.md#searchReddit) | **GET** /v1/reddit/search | Search posts |


## `getRedditFeed()`

```php
getRedditFeed($account_id, $subreddit, $sort, $limit, $after, $t): \Zernio\Model\SearchReddit200Response
```

Get subreddit feed

Fetch posts from a subreddit feed. Supports sorting, time filtering, and cursor-based pagination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\RedditSearchApi(
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

[**\Zernio\Model\SearchReddit200Response**](../Model/SearchReddit200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRedditPostComments()`

```php
getRedditPostComments($post_id, $account_id, $sort, $limit, $comment_id): \Zernio\Model\GetRedditPostComments200Response
```

Get the comments of a Reddit post

Reads the comments of any Reddit post the connected account can see, for example one found through `/v1/reddit/feed` or `/v1/reddit/search`, straight from Reddit on every call. The tree comes flattened in thread order (a reply follows its parent); rebuild it from `parentId`, which is `t3_…` for a reply to the post and `t1_…` for a reply to a comment. Deleted and removed comments are passed through as Reddit sends them (`[deleted]` / `[removed]`). Where Reddit truncates a thread, the ids it left out are listed in `more`; `commentId` fetches one such comment with its replies. A post Reddit no longer serves answers 404 and a private subreddit 403, both with `platform_api_error`. For comments on posts published through Zernio, `/v1/inbox/comments/{postId}` adds caching, moderation and replies.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\RedditSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string | Reddit post id, with or without the `t3_` prefix (as `id` or `fullname` on RedditPost).
$account_id = 'account_id_example'; // string | An active Reddit account the request is made as.
$sort = 'new'; // string
$limit = 25; // int | Maximum number of top-level comments.
$comment_id = 'comment_id_example'; // string | Return only this comment and its replies, with or without the `t1_` prefix; pass an id from `more` to expand it.

try {
    $result = $apiInstance->getRedditPostComments($post_id, $account_id, $sort, $limit, $comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RedditSearchApi->getRedditPostComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **string**| Reddit post id, with or without the &#x60;t3_&#x60; prefix (as &#x60;id&#x60; or &#x60;fullname&#x60; on RedditPost). | |
| **account_id** | **string**| An active Reddit account the request is made as. | |
| **sort** | **string**|  | [optional] [default to &#39;new&#39;] |
| **limit** | **int**| Maximum number of top-level comments. | [optional] [default to 25] |
| **comment_id** | **string**| Return only this comment and its replies, with or without the &#x60;t1_&#x60; prefix; pass an id from &#x60;more&#x60; to expand it. | [optional] |

### Return type

[**\Zernio\Model\GetRedditPostComments200Response**](../Model/GetRedditPostComments200Response.md)

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
searchReddit($account_id, $q, $subreddit, $restrict_sr, $sort, $limit, $after): \Zernio\Model\SearchReddit200Response
```

Search posts

Search Reddit posts using a connected account. Optionally scope to a specific subreddit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\RedditSearchApi(
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

[**\Zernio\Model\SearchReddit200Response**](../Model/SearchReddit200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
