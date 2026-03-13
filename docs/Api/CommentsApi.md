# Late\CommentsApi

Unified inbox API for managing comments on posts across all connected accounts. Supports commenting on third-party posts for platforms that allow it (YouTube, Twitter, Reddit, Bluesky, Threads). All endpoints aggregate data from multiple social accounts in a single API call. Requires Inbox addon.

All URIs are relative to https://getlate.dev/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteInboxComment()**](CommentsApi.md#deleteInboxComment) | **DELETE** /v1/inbox/comments/{postId} | Delete comment |
| [**getInboxPostComments()**](CommentsApi.md#getInboxPostComments) | **GET** /v1/inbox/comments/{postId} | Get post comments |
| [**hideInboxComment()**](CommentsApi.md#hideInboxComment) | **POST** /v1/inbox/comments/{postId}/{commentId}/hide | Hide comment |
| [**likeInboxComment()**](CommentsApi.md#likeInboxComment) | **POST** /v1/inbox/comments/{postId}/{commentId}/like | Like comment |
| [**listInboxComments()**](CommentsApi.md#listInboxComments) | **GET** /v1/inbox/comments | List commented posts |
| [**replyToInboxPost()**](CommentsApi.md#replyToInboxPost) | **POST** /v1/inbox/comments/{postId} | Reply to comment |
| [**sendPrivateReplyToComment()**](CommentsApi.md#sendPrivateReplyToComment) | **POST** /v1/inbox/comments/{postId}/{commentId}/private-reply | Send private reply |
| [**unhideInboxComment()**](CommentsApi.md#unhideInboxComment) | **DELETE** /v1/inbox/comments/{postId}/{commentId}/hide | Unhide comment |
| [**unlikeInboxComment()**](CommentsApi.md#unlikeInboxComment) | **DELETE** /v1/inbox/comments/{postId}/{commentId}/like | Unlike comment |


## `deleteInboxComment()`

```php
deleteInboxComment($post_id, $account_id, $comment_id): \Late\Model\DeleteInboxComment200Response
```

Delete comment

Delete a comment on a post. Supported by Facebook, Instagram, Bluesky, Reddit, YouTube, and LinkedIn. Requires accountId and commentId query parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string | Late post ID or platform-specific post ID. LinkedIn third-party posts accept full activity URN or numeric ID.
$account_id = 'account_id_example'; // string
$comment_id = 'comment_id_example'; // string

try {
    $result = $apiInstance->deleteInboxComment($post_id, $account_id, $comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->deleteInboxComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **string**| Late post ID or platform-specific post ID. LinkedIn third-party posts accept full activity URN or numeric ID. | |
| **account_id** | **string**|  | |
| **comment_id** | **string**|  | |

### Return type

[**\Late\Model\DeleteInboxComment200Response**](../Model/DeleteInboxComment200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboxPostComments()`

```php
getInboxPostComments($post_id, $account_id, $subreddit, $limit, $cursor, $comment_id): \Late\Model\GetInboxPostComments200Response
```

Get post comments

Fetch comments for a specific post. Requires accountId query parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string | Late post ID or platform-specific post ID. Late IDs are auto-resolved. LinkedIn third-party posts accept full activity URN or numeric ID.
$account_id = 'account_id_example'; // string
$subreddit = 'subreddit_example'; // string | (Reddit only) Subreddit name
$limit = 25; // int | Maximum number of comments to return
$cursor = 'cursor_example'; // string | Pagination cursor
$comment_id = 'comment_id_example'; // string | (Reddit only) Get replies to a specific comment

try {
    $result = $apiInstance->getInboxPostComments($post_id, $account_id, $subreddit, $limit, $cursor, $comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->getInboxPostComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **string**| Late post ID or platform-specific post ID. Late IDs are auto-resolved. LinkedIn third-party posts accept full activity URN or numeric ID. | |
| **account_id** | **string**|  | |
| **subreddit** | **string**| (Reddit only) Subreddit name | [optional] |
| **limit** | **int**| Maximum number of comments to return | [optional] [default to 25] |
| **cursor** | **string**| Pagination cursor | [optional] |
| **comment_id** | **string**| (Reddit only) Get replies to a specific comment | [optional] |

### Return type

[**\Late\Model\GetInboxPostComments200Response**](../Model/GetInboxPostComments200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hideInboxComment()`

```php
hideInboxComment($post_id, $comment_id, $hide_inbox_comment_request): \Late\Model\HideInboxComment200Response
```

Hide comment

Hide a comment on a post. Supported by Facebook, Instagram, Threads, and X/Twitter. Hidden comments are only visible to the commenter and page admin. For X/Twitter, the reply must belong to a conversation started by the authenticated user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string
$comment_id = 'comment_id_example'; // string
$hide_inbox_comment_request = new \Late\Model\HideInboxCommentRequest(); // \Late\Model\HideInboxCommentRequest

try {
    $result = $apiInstance->hideInboxComment($post_id, $comment_id, $hide_inbox_comment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->hideInboxComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **hide_inbox_comment_request** | [**\Late\Model\HideInboxCommentRequest**](../Model/HideInboxCommentRequest.md)|  | |

### Return type

[**\Late\Model\HideInboxComment200Response**](../Model/HideInboxComment200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `likeInboxComment()`

```php
likeInboxComment($post_id, $comment_id, $like_inbox_comment_request): \Late\Model\LikeInboxComment200Response
```

Like comment

Like or upvote a comment on a post. Supported platforms: Facebook, Twitter/X, Bluesky, Reddit. For Bluesky, the cid (content identifier) is required in the request body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string
$comment_id = 'comment_id_example'; // string
$like_inbox_comment_request = new \Late\Model\LikeInboxCommentRequest(); // \Late\Model\LikeInboxCommentRequest

try {
    $result = $apiInstance->likeInboxComment($post_id, $comment_id, $like_inbox_comment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->likeInboxComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **like_inbox_comment_request** | [**\Late\Model\LikeInboxCommentRequest**](../Model/LikeInboxCommentRequest.md)|  | |

### Return type

[**\Late\Model\LikeInboxComment200Response**](../Model/LikeInboxComment200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInboxComments()`

```php
listInboxComments($profile_id, $platform, $min_comments, $since, $sort_by, $sort_order, $limit, $cursor, $account_id): \Late\Model\ListInboxComments200Response
```

List commented posts

Returns posts with comment counts from all connected accounts. Aggregates data across multiple accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Filter by profile ID
$platform = 'platform_example'; // string | Filter by platform
$min_comments = 56; // int | Minimum comment count
$since = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Posts created after this date
$sort_by = 'date'; // string | Sort field
$sort_order = 'desc'; // string | Sort order
$limit = 50; // int
$cursor = 'cursor_example'; // string
$account_id = 'account_id_example'; // string | Filter by specific social account ID

try {
    $result = $apiInstance->listInboxComments($profile_id, $platform, $min_comments, $since, $sort_by, $sort_order, $limit, $cursor, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->listInboxComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Filter by profile ID | [optional] |
| **platform** | **string**| Filter by platform | [optional] |
| **min_comments** | **int**| Minimum comment count | [optional] |
| **since** | **\DateTime**| Posts created after this date | [optional] |
| **sort_by** | **string**| Sort field | [optional] [default to &#39;date&#39;] |
| **sort_order** | **string**| Sort order | [optional] [default to &#39;desc&#39;] |
| **limit** | **int**|  | [optional] [default to 50] |
| **cursor** | **string**|  | [optional] |
| **account_id** | **string**| Filter by specific social account ID | [optional] |

### Return type

[**\Late\Model\ListInboxComments200Response**](../Model/ListInboxComments200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replyToInboxPost()`

```php
replyToInboxPost($post_id, $reply_to_inbox_post_request): \Late\Model\ReplyToInboxPost200Response
```

Reply to comment

Post a reply to a post or specific comment. Requires accountId in request body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string | Late post ID or platform-specific post ID. LinkedIn third-party posts accept full activity URN or numeric ID.
$reply_to_inbox_post_request = new \Late\Model\ReplyToInboxPostRequest(); // \Late\Model\ReplyToInboxPostRequest

try {
    $result = $apiInstance->replyToInboxPost($post_id, $reply_to_inbox_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->replyToInboxPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **string**| Late post ID or platform-specific post ID. LinkedIn third-party posts accept full activity URN or numeric ID. | |
| **reply_to_inbox_post_request** | [**\Late\Model\ReplyToInboxPostRequest**](../Model/ReplyToInboxPostRequest.md)|  | |

### Return type

[**\Late\Model\ReplyToInboxPost200Response**](../Model/ReplyToInboxPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendPrivateReplyToComment()`

```php
sendPrivateReplyToComment($post_id, $comment_id, $send_private_reply_to_comment_request): \Late\Model\SendPrivateReplyToComment200Response
```

Send private reply

Send a private message to the author of a comment. Supported on Instagram and Facebook only. One reply per comment, must be sent within 7 days, text only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string | The media/post ID (Instagram media ID or Facebook post ID)
$comment_id = 'comment_id_example'; // string | The comment ID to send a private reply to
$send_private_reply_to_comment_request = {"accountId":"507f1f77bcf86cd799439011","message":"Hi! Thanks for your comment. I wanted to reach out privately to help with your question."}; // \Late\Model\SendPrivateReplyToCommentRequest

try {
    $result = $apiInstance->sendPrivateReplyToComment($post_id, $comment_id, $send_private_reply_to_comment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->sendPrivateReplyToComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **string**| The media/post ID (Instagram media ID or Facebook post ID) | |
| **comment_id** | **string**| The comment ID to send a private reply to | |
| **send_private_reply_to_comment_request** | [**\Late\Model\SendPrivateReplyToCommentRequest**](../Model/SendPrivateReplyToCommentRequest.md)|  | |

### Return type

[**\Late\Model\SendPrivateReplyToComment200Response**](../Model/SendPrivateReplyToComment200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unhideInboxComment()`

```php
unhideInboxComment($post_id, $comment_id, $account_id): \Late\Model\HideInboxComment200Response
```

Unhide comment

Unhide a previously hidden comment. Supported by Facebook, Instagram, Threads, and X/Twitter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string
$comment_id = 'comment_id_example'; // string
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->unhideInboxComment($post_id, $comment_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->unhideInboxComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **account_id** | **string**|  | |

### Return type

[**\Late\Model\HideInboxComment200Response**](../Model/HideInboxComment200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unlikeInboxComment()`

```php
unlikeInboxComment($post_id, $comment_id, $account_id, $like_uri): \Late\Model\UnlikeInboxComment200Response
```

Unlike comment

Remove a like from a comment. Supported platforms: Facebook, Twitter/X, Bluesky, Reddit. For Bluesky, the likeUri query parameter is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string
$comment_id = 'comment_id_example'; // string
$account_id = 'account_id_example'; // string
$like_uri = 'like_uri_example'; // string | (Bluesky only) The like URI returned when liking

try {
    $result = $apiInstance->unlikeInboxComment($post_id, $comment_id, $account_id, $like_uri);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->unlikeInboxComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **account_id** | **string**|  | |
| **like_uri** | **string**| (Bluesky only) The like URI returned when liking | [optional] |

### Return type

[**\Late\Model\UnlikeInboxComment200Response**](../Model/UnlikeInboxComment200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
