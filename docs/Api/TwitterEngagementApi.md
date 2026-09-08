# Zernio\TwitterEngagementApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bookmarkPost()**](TwitterEngagementApi.md#bookmarkPost) | **POST** /v1/twitter/bookmark | Bookmark a tweet |
| [**followUser()**](TwitterEngagementApi.md#followUser) | **POST** /v1/twitter/follow | Follow a user |
| [**getTweet()**](TwitterEngagementApi.md#getTweet) | **GET** /v1/twitter/tweet | Look up a tweet |
| [**removeBookmark()**](TwitterEngagementApi.md#removeBookmark) | **DELETE** /v1/twitter/bookmark | Remove bookmark |
| [**retweetPost()**](TwitterEngagementApi.md#retweetPost) | **POST** /v1/twitter/retweet | Retweet a post |
| [**searchTweets()**](TwitterEngagementApi.md#searchTweets) | **GET** /v1/twitter/search | Search recent tweets |
| [**undoRetweet()**](TwitterEngagementApi.md#undoRetweet) | **DELETE** /v1/twitter/retweet | Undo retweet |
| [**unfollowUser()**](TwitterEngagementApi.md#unfollowUser) | **DELETE** /v1/twitter/follow | Unfollow a user |


## `bookmarkPost()`

```php
bookmarkPost($bookmark_post_request): \Zernio\Model\BookmarkPost200Response
```

Bookmark a tweet

Bookmark a tweet by ID. Requires the bookmark.write OAuth scope. Rate limit: 50 requests per 15-min window.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TwitterEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bookmark_post_request = new \Zernio\Model\BookmarkPostRequest(); // \Zernio\Model\BookmarkPostRequest

try {
    $result = $apiInstance->bookmarkPost($bookmark_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TwitterEngagementApi->bookmarkPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bookmark_post_request** | [**\Zernio\Model\BookmarkPostRequest**](../Model/BookmarkPostRequest.md)|  | |

### Return type

[**\Zernio\Model\BookmarkPost200Response**](../Model/BookmarkPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `followUser()`

```php
followUser($follow_user_request): \Zernio\Model\FollowUser200Response
```

Follow a user

Follow a user on X. Requires the follows.write OAuth scope. For protected accounts, a follow request is sent instead (pending_follow will be true).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TwitterEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$follow_user_request = new \Zernio\Model\FollowUserRequest(); // \Zernio\Model\FollowUserRequest

try {
    $result = $apiInstance->followUser($follow_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TwitterEngagementApi->followUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **follow_user_request** | [**\Zernio\Model\FollowUserRequest**](../Model/FollowUserRequest.md)|  | |

### Return type

[**\Zernio\Model\FollowUser200Response**](../Model/FollowUser200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTweet()`

```php
getTweet($account_id, $id): \Zernio\Model\GetTweet200Response
```

Look up a tweet

Resolve a single tweet by ID or URL into its text, author and public metrics.  Use this to render a post you are referencing, e.g. the tweet quoted by a quote-style post. Unlike `/v1/twitter/search` this is not limited to the last 7 days and works for any tweet visible to the connected account.  Billed as an X posts read ($0.005). Repeat lookups of the same tweet within the same UTC day are charged once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TwitterEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account ID whose X token is used for the lookup
$id = 'id_example'; // string | Numeric tweet ID or a tweet URL (e.g. https://x.com/user/status/123...)

try {
    $result = $apiInstance->getTweet($account_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TwitterEngagementApi->getTweet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account ID whose X token is used for the lookup | |
| **id** | **string**| Numeric tweet ID or a tweet URL (e.g. https://x.com/user/status/123...) | |

### Return type

[**\Zernio\Model\GetTweet200Response**](../Model/GetTweet200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeBookmark()`

```php
removeBookmark($account_id, $tweet_id): \Zernio\Model\RemoveBookmark200Response
```

Remove bookmark

Remove a bookmark from a tweet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TwitterEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$tweet_id = 'tweet_id_example'; // string | The ID of the tweet to unbookmark

try {
    $result = $apiInstance->removeBookmark($account_id, $tweet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TwitterEngagementApi->removeBookmark: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tweet_id** | **string**| The ID of the tweet to unbookmark | |

### Return type

[**\Zernio\Model\RemoveBookmark200Response**](../Model/RemoveBookmark200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retweetPost()`

```php
retweetPost($retweet_post_request): \Zernio\Model\RetweetPost200Response
```

Retweet a post

Retweet (repost) a tweet by ID. Rate limit: 50 requests per 15-min window. Shares the 300/3hr creation limit with tweet creation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TwitterEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retweet_post_request = new \Zernio\Model\RetweetPostRequest(); // \Zernio\Model\RetweetPostRequest

try {
    $result = $apiInstance->retweetPost($retweet_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TwitterEngagementApi->retweetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **retweet_post_request** | [**\Zernio\Model\RetweetPostRequest**](../Model/RetweetPostRequest.md)|  | |

### Return type

[**\Zernio\Model\RetweetPost200Response**](../Model/RetweetPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchTweets()`

```php
searchTweets($account_id, $query, $limit, $since_id, $until_id, $start_time, $end_time, $cursor, $sort_order): \Zernio\Model\SearchTweets200Response
```

Search recent tweets

Search public tweets from the last 7 days matching an X search query, e.g. to discover tweets to reply to. The query string is passed through to X unchanged and supports X's search operators (`from:user`, `-is:retweet`, `is:reply`, `lang:en`, `\"exact phrase\"`, `conversation_id:123`, boolean `OR`, ...). Standalone operators like `is:` / `has:` / `lang:` must be combined with a keyword or `from:` clause.  To reply to a found tweet, pass its `id` as the twitter platform entry's `platformSpecificData.replyToTweetId` when creating a post.  Rate limit: 300 requests per 15-min window per connected account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TwitterEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account ID
$query = 'query_example'; // string | X search query, max 512 characters. Operators are passed through unchanged; X rejects malformed queries with a 400.
$limit = 10; // int | Results per page. X requires a minimum of 10; values below 10 are rejected.
$since_id = 'since_id_example'; // string | Only return tweets with an ID greater than (more recent than) this numeric tweet ID. Non-numeric values are rejected with 400.
$until_id = 'until_id_example'; // string | Only return tweets with an ID less than (older than) this numeric tweet ID. Non-numeric values are rejected with 400.
$start_time = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Oldest UTC timestamp (ISO 8601, inclusive), within the last 7 days
$end_time = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Newest UTC timestamp (ISO 8601, exclusive), within the last 7 days
$cursor = 'cursor_example'; // string | Pagination cursor from a previous response
$sort_order = 'recency'; // string

try {
    $result = $apiInstance->searchTweets($account_id, $query, $limit, $since_id, $until_id, $start_time, $end_time, $cursor, $sort_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TwitterEngagementApi->searchTweets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account ID | |
| **query** | **string**| X search query, max 512 characters. Operators are passed through unchanged; X rejects malformed queries with a 400. | |
| **limit** | **int**| Results per page. X requires a minimum of 10; values below 10 are rejected. | [optional] [default to 10] |
| **since_id** | **string**| Only return tweets with an ID greater than (more recent than) this numeric tweet ID. Non-numeric values are rejected with 400. | [optional] |
| **until_id** | **string**| Only return tweets with an ID less than (older than) this numeric tweet ID. Non-numeric values are rejected with 400. | [optional] |
| **start_time** | **\DateTime**| Oldest UTC timestamp (ISO 8601, inclusive), within the last 7 days | [optional] |
| **end_time** | **\DateTime**| Newest UTC timestamp (ISO 8601, exclusive), within the last 7 days | [optional] |
| **cursor** | **string**| Pagination cursor from a previous response | [optional] |
| **sort_order** | **string**|  | [optional] [default to &#39;recency&#39;] |

### Return type

[**\Zernio\Model\SearchTweets200Response**](../Model/SearchTweets200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `undoRetweet()`

```php
undoRetweet($account_id, $tweet_id): \Zernio\Model\UndoRetweet200Response
```

Undo retweet

Undo a retweet (un-repost a tweet).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TwitterEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$tweet_id = 'tweet_id_example'; // string | The ID of the original tweet to un-retweet

try {
    $result = $apiInstance->undoRetweet($account_id, $tweet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TwitterEngagementApi->undoRetweet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **tweet_id** | **string**| The ID of the original tweet to un-retweet | |

### Return type

[**\Zernio\Model\UndoRetweet200Response**](../Model/UndoRetweet200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unfollowUser()`

```php
unfollowUser($account_id, $target_user_id): \Zernio\Model\UnfollowUser200Response
```

Unfollow a user

Unfollow a user on X.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\TwitterEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$target_user_id = 'target_user_id_example'; // string | The X ID of the user to unfollow

try {
    $result = $apiInstance->unfollowUser($account_id, $target_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TwitterEngagementApi->unfollowUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **target_user_id** | **string**| The X ID of the user to unfollow | |

### Return type

[**\Zernio\Model\UnfollowUser200Response**](../Model/UnfollowUser200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
