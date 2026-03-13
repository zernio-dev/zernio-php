# Late\TwitterEngagementApi



All URIs are relative to https://getlate.dev/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bookmarkPost()**](TwitterEngagementApi.md#bookmarkPost) | **POST** /v1/twitter/bookmark | Bookmark a tweet |
| [**followUser()**](TwitterEngagementApi.md#followUser) | **POST** /v1/twitter/follow | Follow a user |
| [**removeBookmark()**](TwitterEngagementApi.md#removeBookmark) | **DELETE** /v1/twitter/bookmark | Remove bookmark |
| [**retweetPost()**](TwitterEngagementApi.md#retweetPost) | **POST** /v1/twitter/retweet | Retweet a post |
| [**undoRetweet()**](TwitterEngagementApi.md#undoRetweet) | **DELETE** /v1/twitter/retweet | Undo retweet |
| [**unfollowUser()**](TwitterEngagementApi.md#unfollowUser) | **DELETE** /v1/twitter/follow | Unfollow a user |


## `bookmarkPost()`

```php
bookmarkPost($bookmark_post_request): \Late\Model\BookmarkPost200Response
```

Bookmark a tweet

Bookmark a tweet by ID. Requires the bookmark.write OAuth scope. Rate limit: 50 requests per 15-min window.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\TwitterEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bookmark_post_request = new \Late\Model\BookmarkPostRequest(); // \Late\Model\BookmarkPostRequest

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
| **bookmark_post_request** | [**\Late\Model\BookmarkPostRequest**](../Model/BookmarkPostRequest.md)|  | |

### Return type

[**\Late\Model\BookmarkPost200Response**](../Model/BookmarkPost200Response.md)

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
followUser($follow_user_request): \Late\Model\FollowUser200Response
```

Follow a user

Follow a user on X/Twitter. Requires the follows.write OAuth scope. For protected accounts, a follow request is sent instead (pending_follow will be true).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\TwitterEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$follow_user_request = new \Late\Model\FollowUserRequest(); // \Late\Model\FollowUserRequest

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
| **follow_user_request** | [**\Late\Model\FollowUserRequest**](../Model/FollowUserRequest.md)|  | |

### Return type

[**\Late\Model\FollowUser200Response**](../Model/FollowUser200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeBookmark()`

```php
removeBookmark($account_id, $tweet_id): \Late\Model\RemoveBookmark200Response
```

Remove bookmark

Remove a bookmark from a tweet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\TwitterEngagementApi(
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

[**\Late\Model\RemoveBookmark200Response**](../Model/RemoveBookmark200Response.md)

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
retweetPost($retweet_post_request): \Late\Model\RetweetPost200Response
```

Retweet a post

Retweet (repost) a tweet by ID. Rate limit: 50 requests per 15-min window. Shares the 300/3hr creation limit with tweet creation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\TwitterEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retweet_post_request = new \Late\Model\RetweetPostRequest(); // \Late\Model\RetweetPostRequest

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
| **retweet_post_request** | [**\Late\Model\RetweetPostRequest**](../Model/RetweetPostRequest.md)|  | |

### Return type

[**\Late\Model\RetweetPost200Response**](../Model/RetweetPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `undoRetweet()`

```php
undoRetweet($account_id, $tweet_id): \Late\Model\UndoRetweet200Response
```

Undo retweet

Undo a retweet (un-repost a tweet).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\TwitterEngagementApi(
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

[**\Late\Model\UndoRetweet200Response**](../Model/UndoRetweet200Response.md)

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
unfollowUser($account_id, $target_user_id): \Late\Model\UnfollowUser200Response
```

Unfollow a user

Unfollow a user on X/Twitter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\TwitterEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$target_user_id = 'target_user_id_example'; // string | The Twitter ID of the user to unfollow

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
| **target_user_id** | **string**| The Twitter ID of the user to unfollow | |

### Return type

[**\Late\Model\UnfollowUser200Response**](../Model/UnfollowUser200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
