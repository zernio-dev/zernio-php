# Late\CommentsApi

Unified inbox API for managing comments on posts across all connected accounts. Supports commenting on third-party posts for platforms that allow it (YouTube, Twitter, Reddit, Bluesky, Threads). All endpoints aggregate data from multiple social accounts in a single API call. Requires Inbox addon.

All URIs are relative to https://getlate.dev/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteInboxComment()**](CommentsApi.md#deleteInboxComment) | **DELETE** /v1/inbox/comments/{postId} | Delete a comment |
| [**getInboxPostComments()**](CommentsApi.md#getInboxPostComments) | **GET** /v1/inbox/comments/{postId} | Get comments for a post |
| [**hideInboxComment()**](CommentsApi.md#hideInboxComment) | **POST** /v1/inbox/comments/{postId}/{commentId}/hide | Hide a comment |
| [**likeInboxComment()**](CommentsApi.md#likeInboxComment) | **POST** /v1/inbox/comments/{postId}/{commentId}/like | Like a comment |
| [**listInboxComments()**](CommentsApi.md#listInboxComments) | **GET** /v1/inbox/comments | List posts with comments across all accounts |
| [**replyToInboxPost()**](CommentsApi.md#replyToInboxPost) | **POST** /v1/inbox/comments/{postId} | Reply to a post or comment |
| [**sendPrivateReplyToComment()**](CommentsApi.md#sendPrivateReplyToComment) | **POST** /v1/inbox/comments/{postId}/{commentId}/private-reply | Send private reply to comment author |
| [**unhideInboxComment()**](CommentsApi.md#unhideInboxComment) | **DELETE** /v1/inbox/comments/{postId}/{commentId}/hide | Unhide a comment |
| [**unlikeInboxComment()**](CommentsApi.md#unlikeInboxComment) | **DELETE** /v1/inbox/comments/{postId}/{commentId}/like | Unlike a comment |


## `deleteInboxComment()`

```php
deleteInboxComment($post_id, $account_id, $comment_id): \Late\Model\DeleteInboxComment200Response
```

Delete a comment

Delete a comment on a post. Supported by Facebook, Instagram, Bluesky, Reddit, YouTube, LinkedIn, and TikTok. Requires accountId and commentId query parameters.

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
$post_id = 'post_id_example'; // string | The post identifier. Accepts a Late post ID or a platform-specific post ID.  **LinkedIn:** For third-party posts, pass the full activity URN (e.g., `urn:li:activity:7422459067685855232`) or the raw numeric activity ID from the URL.
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
| **post_id** | **string**| The post identifier. Accepts a Late post ID or a platform-specific post ID.  **LinkedIn:** For third-party posts, pass the full activity URN (e.g., &#x60;urn:li:activity:7422459067685855232&#x60;) or the raw numeric activity ID from the URL. | |
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

Get comments for a post

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
$post_id = 'post_id_example'; // string | The post identifier. Accepts a Late post ID (MongoDB ObjectId) which is automatically resolved to the platform-specific post ID, or a platform-specific post ID directly (e.g. tweet ID, Facebook Graph ID, YouTube video ID).  **LinkedIn:** For your own posts, the full URN stored in Late (e.g., `urn:li:share:7429218977714745345`) is used automatically. For third-party posts, pass either the full activity URN (e.g., `urn:li:activity:7422459067685855232`) or the raw numeric activity ID from the LinkedIn URL (automatically wrapped as `urn:li:activity:`). Note: LinkedIn post URLs use activity IDs (`linkedin.com/feed/update/urn:li:activity:XXXX`).
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
| **post_id** | **string**| The post identifier. Accepts a Late post ID (MongoDB ObjectId) which is automatically resolved to the platform-specific post ID, or a platform-specific post ID directly (e.g. tweet ID, Facebook Graph ID, YouTube video ID).  **LinkedIn:** For your own posts, the full URN stored in Late (e.g., &#x60;urn:li:share:7429218977714745345&#x60;) is used automatically. For third-party posts, pass either the full activity URN (e.g., &#x60;urn:li:activity:7422459067685855232&#x60;) or the raw numeric activity ID from the LinkedIn URL (automatically wrapped as &#x60;urn:li:activity:&#x60;). Note: LinkedIn post URLs use activity IDs (&#x60;linkedin.com/feed/update/urn:li:activity:XXXX&#x60;). | |
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

Hide a comment

Hide a comment on a post. Supported by Facebook, Instagram, and Threads. Hidden comments are only visible to the commenter and page admin.

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

Like a comment

Like or upvote a comment on a post.  **Supported platforms:** Facebook, Twitter/X, Bluesky, Reddit  For Bluesky, the `cid` (content identifier) is required in the request body.

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

List posts with comments across all accounts

Fetch posts with their comment counts from all connected accounts. Aggregates data from multiple accounts in a single API call.  **Supported platforms:** Facebook, Instagram, Twitter/X, Bluesky, Threads, YouTube, LinkedIn, Reddit, TikTok (write-only)

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

Reply to a post or comment

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
$post_id = 'post_id_example'; // string | The post identifier. Accepts a Late post ID or a platform-specific post ID.  **LinkedIn:** For third-party posts, pass the full activity URN (e.g., `urn:li:activity:7422459067685855232`) or the raw numeric activity ID from the URL.
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
| **post_id** | **string**| The post identifier. Accepts a Late post ID or a platform-specific post ID.  **LinkedIn:** For third-party posts, pass the full activity URN (e.g., &#x60;urn:li:activity:7422459067685855232&#x60;) or the raw numeric activity ID from the URL. | |
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

Send private reply to comment author

Send a private direct message to the author of a comment on your post. This is useful for handling customer inquiries or sensitive matters privately.  **Supported platforms:** Instagram, Facebook  **Limitations:** - Only ONE private reply per comment (platform API restriction) - Must be sent within 7 days of the comment being posted - Only works for comments on posts owned by the connected account - Text only (no media attachments) - Instagram: message goes to the user's Inbox (if they follow you) or Message Requests (if they don't). Requires `instagram_business_manage_messages` permission. - Facebook: message opens a Messenger conversation with the commenter. Requires `pages_messaging` permission.  **Note:** Both permissions are already included in Late's OAuth flow. This does not create a conversation thread until the user replies back.

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

Unhide a comment

Unhide a previously hidden comment. Supported by Facebook, Instagram, and Threads.

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

Unlike a comment

Remove a like from a comment.  **Supported platforms:** Facebook, Twitter/X, Bluesky, Reddit  For Bluesky, the `likeUri` query parameter is required.

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
