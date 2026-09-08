# Zernio\CommentsApi

Unified inbox API for managing comments on posts across all connected accounts. Supports commenting on third-party posts for platforms that allow it (YouTube, X, Reddit, Bluesky, Threads). All endpoints aggregate data from multiple accounts in a single API call. Requires Inbox addon.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteInboxComment()**](CommentsApi.md#deleteInboxComment) | **DELETE** /v1/inbox/comments/{postId} | Delete comment |
| [**editInboxComment()**](CommentsApi.md#editInboxComment) | **PATCH** /v1/inbox/comments/{postId}/{commentId} | Edit comment |
| [**getInboxPostComments()**](CommentsApi.md#getInboxPostComments) | **GET** /v1/inbox/comments/{postId} | Get post comments |
| [**hideInboxComment()**](CommentsApi.md#hideInboxComment) | **POST** /v1/inbox/comments/{postId}/{commentId}/hide | Hide comment |
| [**likeInboxComment()**](CommentsApi.md#likeInboxComment) | **POST** /v1/inbox/comments/{postId}/{commentId}/like | Like comment |
| [**likePost()**](CommentsApi.md#likePost) | **POST** /v1/inbox/posts/{postId}/like | Like post |
| [**listInboxComments()**](CommentsApi.md#listInboxComments) | **GET** /v1/inbox/comments | List commented posts |
| [**replyToInboxPost()**](CommentsApi.md#replyToInboxPost) | **POST** /v1/inbox/comments/{postId} | Reply to comment |
| [**sendPrivateReplyToComment()**](CommentsApi.md#sendPrivateReplyToComment) | **POST** /v1/inbox/comments/{postId}/{commentId}/private-reply | Send private reply |
| [**setCommentModeration()**](CommentsApi.md#setCommentModeration) | **POST** /v1/inbox/comments/{postId}/{commentId}/moderation | Set comment moderation status |
| [**unhideInboxComment()**](CommentsApi.md#unhideInboxComment) | **DELETE** /v1/inbox/comments/{postId}/{commentId}/hide | Unhide comment |
| [**unlikeInboxComment()**](CommentsApi.md#unlikeInboxComment) | **DELETE** /v1/inbox/comments/{postId}/{commentId}/like | Unlike comment |
| [**unlikePost()**](CommentsApi.md#unlikePost) | **DELETE** /v1/inbox/posts/{postId}/like | Unlike post |


## `deleteInboxComment()`

```php
deleteInboxComment($post_id, $account_id, $comment_id): \Zernio\Model\DeleteInboxComment200Response
```

Delete comment

Delete a comment on a post. Supported by Facebook, Instagram, Bluesky, Reddit, YouTube, and LinkedIn. Requires accountId and commentId query parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string | Zernio post ID or platform-specific post ID. LinkedIn third-party posts accept full activity URN or numeric ID.
$account_id = 'account_id_example'; // string
$comment_id = 'comment_id_example'; // string | For LinkedIn, accepts either the numeric comment ID or the composite comment URN returned by the comments listing (e.g. urn:li:comment:(threadUrn,id))

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
| **post_id** | **string**| Zernio post ID or platform-specific post ID. LinkedIn third-party posts accept full activity URN or numeric ID. | |
| **account_id** | **string**|  | |
| **comment_id** | **string**| For LinkedIn, accepts either the numeric comment ID or the composite comment URN returned by the comments listing (e.g. urn:li:comment:(threadUrn,id)) | |

### Return type

[**\Zernio\Model\DeleteInboxComment200Response**](../Model/DeleteInboxComment200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editInboxComment()`

```php
editInboxComment($post_id, $comment_id, $edit_inbox_comment_request): \Zernio\Model\EditInboxComment200Response
```

Edit comment

Edit the body of a comment the connected account posted. Supported on Reddit only.  Reddit keeps the same comment id after an edit. Reddit exposes no API to edit a post title, and a link post has no editable body. To edit a published post's body, use `POST /v1/posts/{postId}/edit`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string
$comment_id = 'comment_id_example'; // string
$edit_inbox_comment_request = {"accountId":"60f7a1b2c3d4e5f6a7b8c9d0","platform":"reddit","content":"Edited: corrected the version number."}; // \Zernio\Model\EditInboxCommentRequest

try {
    $result = $apiInstance->editInboxComment($post_id, $comment_id, $edit_inbox_comment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->editInboxComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **edit_inbox_comment_request** | [**\Zernio\Model\EditInboxCommentRequest**](../Model/EditInboxCommentRequest.md)|  | |

### Return type

[**\Zernio\Model\EditInboxComment200Response**](../Model/EditInboxComment200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboxPostComments()`

```php
getInboxPostComments($post_id, $account_id, $subreddit, $limit, $cursor, $comment_id): \Zernio\Model\GetInboxPostComments200Response
```

Get post comments

Fetch comments for a specific post. Requires accountId query parameter.  On Facebook and Instagram, passing a COMMENT id as `postId` is also supported and returns that comment's replies instead of the post's top-level comments. This is not available on YouTube, where `postId` must be a video id.  Responses are cached for up to 10 minutes, so a page may lag new comments by that window. Do not poll this endpoint for real-time updates: subscribe to the `comment.received` webhook, which delivers new comments as they arrive. Your own writes (creating, replying to, or deleting a comment) refresh the cache immediately.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string | Zernio post ID or platform-specific post ID. Zernio IDs are auto-resolved. LinkedIn third-party posts accept full activity URN or numeric ID. On Facebook and Instagram, a comment ID is also accepted here and returns that comment's replies.
$account_id = 'account_id_example'; // string
$subreddit = 'subreddit_example'; // string | (Reddit only) Subreddit name
$limit = 25; // int | Maximum number of comments to return
$cursor = 'cursor_example'; // string | Pagination cursor, returned by a previous call as `pagination.cursor`. This is the platform's own opaque paging value passed through verbatim: never construct, decode or validate it client-side.
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
| **post_id** | **string**| Zernio post ID or platform-specific post ID. Zernio IDs are auto-resolved. LinkedIn third-party posts accept full activity URN or numeric ID. On Facebook and Instagram, a comment ID is also accepted here and returns that comment&#39;s replies. | |
| **account_id** | **string**|  | |
| **subreddit** | **string**| (Reddit only) Subreddit name | [optional] |
| **limit** | **int**| Maximum number of comments to return | [optional] [default to 25] |
| **cursor** | **string**| Pagination cursor, returned by a previous call as &#x60;pagination.cursor&#x60;. This is the platform&#39;s own opaque paging value passed through verbatim: never construct, decode or validate it client-side. | [optional] |
| **comment_id** | **string**| (Reddit only) Get replies to a specific comment | [optional] |

### Return type

[**\Zernio\Model\GetInboxPostComments200Response**](../Model/GetInboxPostComments200Response.md)

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
hideInboxComment($post_id, $comment_id, $hide_inbox_comment_request): \Zernio\Model\HideInboxComment200Response
```

Hide comment

Hide a comment on a post. Supported by Facebook, Instagram, Threads, and X. Hidden comments are only visible to the commenter and page admin. For X, the reply must belong to a conversation started by the authenticated user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string
$comment_id = 'comment_id_example'; // string
$hide_inbox_comment_request = new \Zernio\Model\HideInboxCommentRequest(); // \Zernio\Model\HideInboxCommentRequest

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
| **hide_inbox_comment_request** | [**\Zernio\Model\HideInboxCommentRequest**](../Model/HideInboxCommentRequest.md)|  | |

### Return type

[**\Zernio\Model\HideInboxComment200Response**](../Model/HideInboxComment200Response.md)

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
likeInboxComment($post_id, $comment_id, $like_inbox_comment_request): \Zernio\Model\LikeInboxComment200Response
```

Like comment

Like or upvote a comment on a post. Supported platforms: Facebook, X, Bluesky, Reddit, LinkedIn, and Instagram in limited release (see below). For Bluesky, the cid (content identifier) is required in the request body. For LinkedIn, pass the composite comment URN returned by the comments endpoints as commentId; an optional reactionType picks the reaction (defaults to LIKE), and accounts connected before the social-feed scopes were requested get a 403 with code `linkedin_reconnect_required`.  Instagram is in LIMITED RELEASE and not generally available: the call needs `instagram_manage_engagement`, which Meta has so far granted this app only under Standard Access, so it works for app admins, developers and testers of our Meta app and returns a 403 with code `PLATFORM_BETA_RESTRICTED` for every other account. That restriction lifts when Meta App Review grants Advanced Access; the constraints below apply once it does.  Instagram covers comments and replies on feed posts, reels and carousels. Only an account connected through Facebook Login can be granted `instagram_manage_engagement`: an Instagram Login connection returns a 400 with code `instagram_likes_require_facebook_login`, and an account whose token predates the permission returns a 403 with code `reconnect_required`. Content from private accounts cannot be liked. Instagram also enforces a burst limit of 50 like or unlike calls per 5 seconds per Instagram account, and exceeding it locks that account out of the like API for an hour, so pace bulk loops.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string
$comment_id = 'comment_id_example'; // string
$like_inbox_comment_request = new \Zernio\Model\LikeInboxCommentRequest(); // \Zernio\Model\LikeInboxCommentRequest

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
| **like_inbox_comment_request** | [**\Zernio\Model\LikeInboxCommentRequest**](../Model/LikeInboxCommentRequest.md)|  | |

### Return type

[**\Zernio\Model\LikeInboxComment200Response**](../Model/LikeInboxComment200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `likePost()`

```php
likePost($post_id, $like_post_request): \Zernio\Model\LikePost200Response
```

Like post

Like (or react to) a post as a connected account. Supported platforms: LinkedIn, X, Facebook, YouTube, Bluesky, and Instagram in limited release (see below). Threads, TikTok and Pinterest expose no like endpoint in their APIs and return 400. Reddit returns 400 too, pointing at `POST /v1/accounts/{accountId}/reddit-vote`, which covers upvote, downvote and clear on both posts and comments.  The account does not have to be the one that published the post, which is what makes executive engagement possible: pass an exec's `accountId` and the brand post's ID. `postId` accepts either a Zernio post ID or the platform's native post ID. A Zernio post ID resolves to the entry for `accountId`, falling back to the post's single entry on the same platform (two entries on that platform is a 400, so pass the native ID).  LinkedIn requires the `w_member_social_feed` / `w_organization_social_feed` scopes, which are not retroactive: accounts connected before those were requested get a 403 with code `linkedin_reconnect_required` until the user reconnects the account. YouTube spends 50 quota units per call.  Instagram is in LIMITED RELEASE and not generally available: the call needs `instagram_manage_engagement`, which Meta has so far granted this app only under Standard Access, so it works for app admins, developers and testers of our Meta app and returns a 403 with code `PLATFORM_BETA_RESTRICTED` for every other account. That restriction lifts when Meta App Review grants Advanced Access; the constraints below apply once it does.  Instagram covers feed images, reels and carousels (stories and private-account media are not likeable). Only an account connected through Facebook Login can be granted `instagram_manage_engagement`: an Instagram Login connection returns a 400 with code `instagram_likes_require_facebook_login`, and an account whose token predates the permission returns a 403 with code `reconnect_required`. Instagram also enforces a burst limit of 50 like or unlike calls per 5 seconds per Instagram account, and exceeding it locks that account out of the like API for an hour, so pace bulk loops.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string | Zernio post ID or the platform's native post ID
$like_post_request = new \Zernio\Model\LikePostRequest(); // \Zernio\Model\LikePostRequest

try {
    $result = $apiInstance->likePost($post_id, $like_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->likePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **string**| Zernio post ID or the platform&#39;s native post ID | |
| **like_post_request** | [**\Zernio\Model\LikePostRequest**](../Model/LikePostRequest.md)|  | |

### Return type

[**\Zernio\Model\LikePost200Response**](../Model/LikePost200Response.md)

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
listInboxComments($profile_id, $platform, $min_comments, $since, $sort_by, $sort_order, $limit, $cursor, $account_id): \Zernio\Model\ListInboxComments200Response
```

List commented posts

Returns posts with comment counts from all connected accounts. Aggregates data across multiple accounts.  Responses are cached for up to 10 minutes, so the feed may lag new comments by that window. Do not poll this endpoint for real-time updates: subscribe to the `comment.received` webhook, which fires for every new comment across your posts and carries the post reference needed to keep this list current.  For users with the Ads add-on (accounts on usage-based billing always qualify), the user's Meta ads (boosted/dark posts) are included too. There's one row per (ad, placement-with-comments): an ad that runs on both Facebook feed and Instagram feed produces up to two rows (the Page dark post and the IG media have separate comment threads), each flagged `isAd: true` with `adId` and `placement` (`id` is `{adId}:{placement}`). Use `?platform=metaads` to return *only* ad rows; passing `facebook`/`instagram` returns *organic* posts only (no ads); omitting `platform` returns both. Fetch a row's thread from GET /v1/ads/{adId}/comments?placement={placement}. Ad comment counts are read with the Marketing API token (Facebook side) or the connected Instagram account's token (Instagram side); a row whose count can't be read is omitted.  Pagination walks each account's platform listing. Following `nextCursor` reaches past the first page on Facebook, Instagram, Threads, LinkedIn and YouTube, since they are the platforms that support a server-side date window; on the others the listing stops at its first page. Cursor pagination is only coherent for the default sort (`sortBy=date`, `sortOrder=desc`): with `sortOrder=asc`, or with `sortBy=comments`, the cursor filter does not match the sort order and the second page is unreliable.  `nextCursor` is opaque: pass it back verbatim, never construct or parse it, its composition may change without notice. Because each page re-queries a live window, results can still shift between requests, so dedupe by `id` on the client.  `commentCount` semantics differ by platform: YouTube's includes replies, Facebook's counts top-level comments only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Filter by profile ID
$platform = 'platform_example'; // string | Filter by platform. `metaads` is a synthetic value meaning the user's ads (boosted/dark posts) only; `facebook`/`instagram` return organic posts only.
$min_comments = 56; // int | Minimum comment count
$since = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Posts created after this date
$sort_by = 'date'; // string | Sort field
$sort_order = 'desc'; // string | Sort order
$limit = 50; // int
$cursor = 'cursor_example'; // string
$account_id = 'account_id_example'; // string | Filter by specific account ID

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
| **platform** | **string**| Filter by platform. &#x60;metaads&#x60; is a synthetic value meaning the user&#39;s ads (boosted/dark posts) only; &#x60;facebook&#x60;/&#x60;instagram&#x60; return organic posts only. | [optional] |
| **min_comments** | **int**| Minimum comment count | [optional] |
| **since** | **\DateTime**| Posts created after this date | [optional] |
| **sort_by** | **string**| Sort field | [optional] [default to &#39;date&#39;] |
| **sort_order** | **string**| Sort order | [optional] [default to &#39;desc&#39;] |
| **limit** | **int**|  | [optional] [default to 50] |
| **cursor** | **string**|  | [optional] |
| **account_id** | **string**| Filter by specific account ID | [optional] |

### Return type

[**\Zernio\Model\ListInboxComments200Response**](../Model/ListInboxComments200Response.md)

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
replyToInboxPost($post_id, $reply_to_inbox_post_request, $idempotency_key): \Zernio\Model\ReplyToInboxPost200Response
```

Reply to comment

Post a reply to a post or specific comment. Requires accountId in request body.  **Idempotency:** send an `Idempotency-Key` header to make retries safe (e.g. after a client-side timeout where delivery is unknown): same key + same body replays the original response (with `Idempotent-Replayed: true`) instead of posting the comment a second time; same key + different body returns 422; a key still in flight returns 409. Keys are retained for 24 hours and are scoped to the credential and to this exact path, so reusing a key against a different postId returns 422 rather than replaying the other post's response.  Only successful (2xx) responses are stored for replay. If the request throws or returns a non-2xx status the key is released, so the header protects the \"request succeeded but the response was lost\" case. After an ambiguous failure (a 5xx or a network timeout) list the post's comments before retrying with the same key, and treat an empty result as inconclusive rather than as proof nothing was posted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string | Zernio post ID or platform-specific post ID. LinkedIn third-party posts accept full activity URN or numeric ID.
$reply_to_inbox_post_request = new \Zernio\Model\ReplyToInboxPostRequest(); // \Zernio\Model\ReplyToInboxPostRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409.

try {
    $result = $apiInstance->replyToInboxPost($post_id, $reply_to_inbox_post_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->replyToInboxPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **string**| Zernio post ID or platform-specific post ID. LinkedIn third-party posts accept full activity URN or numeric ID. | |
| **reply_to_inbox_post_request** | [**\Zernio\Model\ReplyToInboxPostRequest**](../Model/ReplyToInboxPostRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe. Same key + same body replays the original response; same key + different body → 422; key still processing → 409. | [optional] |

### Return type

[**\Zernio\Model\ReplyToInboxPost200Response**](../Model/ReplyToInboxPost200Response.md)

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
sendPrivateReplyToComment($post_id, $comment_id, $send_private_reply_to_comment_request): \Zernio\Model\SendPrivateReplyToComment200Response
```

Send private reply

Send a direct message to the author of a comment. Supported on Instagram and Facebook only. One reply per comment, must be sent within 7 days. Optionally attach interactive elements: `quickReplies` (chips above the keyboard, max 13) or `buttons` (1-3 inline postback/url buttons rendered in the same bubble via Meta's button_template). Chips do not render in the Instagram Message Requests folder. Since late August 2026 Instagram refuses buttons, cards and attachments to commenters who do not follow the account (Meta code 2, subcode 1545133, returned here as a non-retryable 400 that says so), and the failed call still consumes the comment's single private reply. To reach non-followers send plain text and add buttons once they reply. `quickReplies` and `buttons` are mutually exclusive. When the comment's single private reply is spent (by this call or an earlier one) the 400 carries `details.privateReplyConsumed: true`; never retry it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string | The media/post ID (Instagram media ID or Facebook post ID)
$comment_id = 'comment_id_example'; // string | The comment ID to send a private reply to
$send_private_reply_to_comment_request = {"accountId":"507f1f77bcf86cd799439011","message":"Hi! Thanks for your comment. I wanted to reach out privately to help with your question."}; // \Zernio\Model\SendPrivateReplyToCommentRequest

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
| **send_private_reply_to_comment_request** | [**\Zernio\Model\SendPrivateReplyToCommentRequest**](../Model/SendPrivateReplyToCommentRequest.md)|  | |

### Return type

[**\Zernio\Model\SendPrivateReplyToComment200Response**](../Model/SendPrivateReplyToComment200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setCommentModeration()`

```php
setCommentModeration($post_id, $comment_id, $set_comment_moderation_request): \Zernio\Model\UpdateYoutubeDefaultPlaylist200Response
```

Set comment moderation status

Set a comment's moderation status. Supported on YouTube only.  Use this to work a moderation queue: approve a held comment (`published`), reject it (`rejected`), or send it back for review (`heldForReview`).  The request must be authorized by the owner of the channel or video the comment belongs to. You cannot moderate comments on videos you do not own.  This is distinct from `POST /v1/inbox/comments/{postId}/{commentId}/hide`, which covers Facebook, Instagram, Threads, and X and does not apply to YouTube.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string
$comment_id = 'comment_id_example'; // string
$set_comment_moderation_request = {"accountId":"60f7a1b2c3d4e5f6a7b8c9d0","platform":"youtube","moderationStatus":"rejected","banAuthor":true}; // \Zernio\Model\SetCommentModerationRequest

try {
    $result = $apiInstance->setCommentModeration($post_id, $comment_id, $set_comment_moderation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->setCommentModeration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **set_comment_moderation_request** | [**\Zernio\Model\SetCommentModerationRequest**](../Model/SetCommentModerationRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateYoutubeDefaultPlaylist200Response**](../Model/UpdateYoutubeDefaultPlaylist200Response.md)

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
unhideInboxComment($post_id, $comment_id, $account_id): \Zernio\Model\HideInboxComment200Response
```

Unhide comment

Unhide a previously hidden comment. Supported by Facebook, Instagram, Threads, and X.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommentsApi(
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

[**\Zernio\Model\HideInboxComment200Response**](../Model/HideInboxComment200Response.md)

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
unlikeInboxComment($post_id, $comment_id, $account_id, $like_uri): \Zernio\Model\UnlikeInboxComment200Response
```

Unlike comment

Remove a like from a comment. Supported platforms: Facebook, X, Bluesky, Reddit, LinkedIn, and Instagram in limited release. For Bluesky, the likeUri query parameter is required. Instagram has the same limited release, Facebook Login, `instagram_manage_engagement` and burst-limit constraints as liking.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommentsApi(
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

[**\Zernio\Model\UnlikeInboxComment200Response**](../Model/UnlikeInboxComment200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unlikePost()`

```php
unlikePost($post_id, $account_id, $like_uri): \Zernio\Model\UnlikePost200Response
```

Unlike post

Remove this account's like from a post. Supported platforms: LinkedIn, X, Facebook, YouTube, Bluesky, and Instagram in limited release. On YouTube this clears the rating. Instagram has the same limited release, Facebook Login, `instagram_manage_engagement` and burst-limit constraints as liking. For Bluesky, `likeUri` (returned when the post was liked) is required. Reddit uses `POST /v1/accounts/{accountId}/reddit-vote` with `direction: 0`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_id = 'post_id_example'; // string | Zernio post ID or the platform's native post ID
$account_id = 'account_id_example'; // string
$like_uri = 'like_uri_example'; // string | (Bluesky only) The like URI returned when liking

try {
    $result = $apiInstance->unlikePost($post_id, $account_id, $like_uri);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->unlikePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **string**| Zernio post ID or the platform&#39;s native post ID | |
| **account_id** | **string**|  | |
| **like_uri** | **string**| (Bluesky only) The like URI returned when liking | [optional] |

### Return type

[**\Zernio\Model\UnlikePost200Response**](../Model/UnlikePost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
