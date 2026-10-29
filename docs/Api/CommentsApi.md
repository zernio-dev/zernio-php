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
| [**pinInboxComment()**](CommentsApi.md#pinInboxComment) | **POST** /v1/inbox/comments/{postId}/{commentId}/pin | Pin comment |
| [**replyToInboxPost()**](CommentsApi.md#replyToInboxPost) | **POST** /v1/inbox/comments/{postId} | Reply to comment |
| [**sendPrivateReplyToComment()**](CommentsApi.md#sendPrivateReplyToComment) | **POST** /v1/inbox/comments/{postId}/{commentId}/private-reply | Send private reply |
| [**setCommentModeration()**](CommentsApi.md#setCommentModeration) | **POST** /v1/inbox/comments/{postId}/{commentId}/moderation | Set comment moderation status |
| [**unhideInboxComment()**](CommentsApi.md#unhideInboxComment) | **DELETE** /v1/inbox/comments/{postId}/{commentId}/hide | Unhide comment |
| [**unlikeInboxComment()**](CommentsApi.md#unlikeInboxComment) | **DELETE** /v1/inbox/comments/{postId}/{commentId}/like | Unlike comment |
| [**unlikePost()**](CommentsApi.md#unlikePost) | **DELETE** /v1/inbox/posts/{postId}/like | Unlike post |
| [**unpinInboxComment()**](CommentsApi.md#unpinInboxComment) | **DELETE** /v1/inbox/comments/{postId}/{commentId}/pin | Unpin comment |


## `deleteInboxComment()`

```php
deleteInboxComment($post_id, $account_id, $comment_id): \Zernio\Model\DeleteInboxComment200Response
```

Delete comment

Delete a comment on a post. Supported by Facebook, Instagram, Threads, LinkedIn, Reddit, Bluesky, X (Twitter), YouTube, and TikTok (accounts connected through the TikTok for Business app). Not supported on Google Business (reviews only). Requires accountId and commentId query parameters.

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
$post_id = 'post_id_example'; // string | Zernio post ID or platform-specific post ID. On LinkedIn, pass the post id exactly as the feed returns it (urn:li:share:<id> or urn:li:ugcPost:<id>); a bare number is read as an activity id (urn:li:activity:<n>).
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
| **post_id** | **string**| Zernio post ID or platform-specific post ID. On LinkedIn, pass the post id exactly as the feed returns it (urn:li:share:&lt;id&gt; or urn:li:ugcPost:&lt;id&gt;); a bare number is read as an activity id (urn:li:activity:&lt;n&gt;). | |
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

Fetch comments for a specific post. Requires accountId query parameter.  ### Replies to a comment  Pass `commentId` (Facebook, Instagram, Reddit, TikTok) to fetch replies to a specific comment instead of the post's top-level comments.  - Facebook, Instagram and TikTok return the comment's replies, paged by `limit`/`cursor`. - Reddit returns the focused comment thread instead. - On Facebook and Instagram the requested comment itself comes back in the top-level `comment` field.  On Facebook, passing a COMMENT id as `postId` (instead of using `commentId`) is also supported for backwards compatibility. It returns that comment's replies the same way.  Prefer `commentId` for new integrations; it also works on Instagram, which rejects a comment id passed as `postId`. YouTube does not support either form: `postId` must be a video id.  ### Caching  Responses are cached for up to 10 minutes, so a page may lag new comments by that window.  Do not poll this endpoint for real-time updates: subscribe to the `comment.received` webhook, which delivers new comments as they arrive. Your own writes (creating, replying to, or deleting a comment) refresh the cache immediately.  ### TikTok  TikTok is served for accounts connected through the TikTok for Business app:  - `postId` is the TikTok video id. - Each top-level comment carries up to three inline replies. - `commentId` pages the full reply list of one comment.  Developer-app TikTok accounts return 400 with code `PLATFORM_LIMITATION`.  ### X (Twitter)  When `postId` is itself a reply rather than the thread's root post, only replies to that specific post are returned, not the whole conversation thread.  ### Hidden comments  - Facebook Pages and Instagram accounts connected through Instagram Login return them with `isHidden: true`. - Instagram accounts connected through Facebook Login do not return them at all (Meta omits them, together with their replies). So a hidden comment and a deleted one look the same on this read.

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
$post_id = 'post_id_example'; // string | Zernio post ID or platform-specific post ID. Zernio IDs are auto-resolved.  - **LinkedIn:** pass the post id exactly as the feed returns it (urn:li:share:<id> or urn:li:ugcPost:<id>). A bare number is read as an activity id (urn:li:activity:<n>, the number in a linkedin.com/feed/update URL), so a share or ugcPost number passed bare returns an empty list. - **Facebook:** a comment ID is also accepted and returns that comment's replies (kept for backwards compatibility). Prefer the `commentId` query parameter, which also works on Instagram.
$account_id = 'account_id_example'; // string
$subreddit = 'subreddit_example'; // string | (Reddit only) Subreddit name
$limit = 25; // int | Maximum number of comments to return
$cursor = 'cursor_example'; // string | Pagination cursor, returned by a previous call as `pagination.cursor`. This is the platform's own opaque paging value passed through verbatim: never construct, decode or validate it client-side.
$comment_id = 'comment_id_example'; // string | (Facebook, Instagram, Reddit and TikTok) Get replies to a specific comment. On Facebook and Instagram, the requested comment is returned in the top-level `comment` field and comments[] holds its replies.

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
| **post_id** | **string**| Zernio post ID or platform-specific post ID. Zernio IDs are auto-resolved.  - **LinkedIn:** pass the post id exactly as the feed returns it (urn:li:share:&lt;id&gt; or urn:li:ugcPost:&lt;id&gt;). A bare number is read as an activity id (urn:li:activity:&lt;n&gt;, the number in a linkedin.com/feed/update URL), so a share or ugcPost number passed bare returns an empty list. - **Facebook:** a comment ID is also accepted and returns that comment&#39;s replies (kept for backwards compatibility). Prefer the &#x60;commentId&#x60; query parameter, which also works on Instagram. | |
| **account_id** | **string**|  | |
| **subreddit** | **string**| (Reddit only) Subreddit name | [optional] |
| **limit** | **int**| Maximum number of comments to return | [optional] [default to 25] |
| **cursor** | **string**| Pagination cursor, returned by a previous call as &#x60;pagination.cursor&#x60;. This is the platform&#39;s own opaque paging value passed through verbatim: never construct, decode or validate it client-side. | [optional] |
| **comment_id** | **string**| (Facebook, Instagram, Reddit and TikTok) Get replies to a specific comment. On Facebook and Instagram, the requested comment is returned in the top-level &#x60;comment&#x60; field and comments[] holds its replies. | [optional] |

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

Hide a comment on a post. Supported by Facebook, Instagram, Threads, X, and TikTok (accounts connected through the TikTok for Business app). Hidden comments are only visible to the commenter and page admin. For X, the reply must belong to a conversation started by the authenticated user.

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

Like or upvote a comment on a post. Supported platforms: Facebook, X, Bluesky, Reddit, LinkedIn, and Instagram in limited release (see below).  ### Platform notes  - Bluesky: the cid (content identifier) is required in the request body. - LinkedIn: pass the composite comment URN returned by the comments endpoints as commentId. An optional reactionType picks the reaction (defaults to LIKE). - LinkedIn: accounts connected before the social-feed scopes were requested get a 403 with code `linkedin_reconnect_required`.  ### Instagram (limited release)  Instagram is in LIMITED RELEASE and not generally available. The call needs `instagram_manage_engagement`, which Meta has so far granted this app only under Standard Access.  It works for app admins, developers and testers of our Meta app, and returns a 403 with code `PLATFORM_BETA_RESTRICTED` for every other account. That restriction lifts when Meta App Review grants Advanced Access; the constraints below apply once it does.  Instagram covers comments and replies on feed posts, reels and carousels. Only an account connected through Facebook Login can be granted `instagram_manage_engagement`.  - 400 `instagram_likes_require_facebook_login`: the account is an Instagram Login connection. - 403 `reconnect_required`: the account's token predates the permission. - Content from private accounts cannot be liked.  Instagram enforces a burst limit of 50 like or unlike calls per 5 seconds per Instagram account. Exceeding it locks that account out of the like API for an hour, so pace bulk loops.

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

Like (or react to) a post as a connected account.  ### Platform support  - Supported: LinkedIn, X, Facebook, YouTube, Bluesky, and Instagram in limited release (see below). - Threads, TikTok and Pinterest expose no like endpoint in their APIs and return 400. - Reddit returns 400 too, pointing at `POST /v1/accounts/{accountId}/reddit-vote`, which covers upvote, downvote and clear on both posts and comments.  ### Liking as another account  The account does not have to be the one that published the post, which is what makes executive engagement possible: pass an exec's `accountId` and the brand post's ID.  `postId` accepts either a Zernio post ID or the platform's native post ID. A Zernio post ID resolves to the entry for `accountId`, falling back to the post's single entry on the same platform. Two entries on that platform is a 400, so pass the native ID.  ### LinkedIn and YouTube  LinkedIn requires the `w_member_social_feed` / `w_organization_social_feed` scopes, which are not retroactive. Accounts connected before those were requested get a 403 with code `linkedin_reconnect_required` until the user reconnects the account.  YouTube spends 50 quota units per call.  ### Instagram (limited release)  Instagram is in LIMITED RELEASE and not generally available. The call needs `instagram_manage_engagement`, which Meta has so far granted this app only under Standard Access.  So it works for app admins, developers and testers of our Meta app, and returns a 403 with code `PLATFORM_BETA_RESTRICTED` for every other account. That restriction lifts when Meta App Review grants Advanced Access; the constraints below apply once it does.  - Instagram covers feed images, reels and carousels (stories and private-account media are not likeable). - Only an account connected through Facebook Login can be granted `instagram_manage_engagement`. An Instagram Login connection returns a 400 with code `instagram_likes_require_facebook_login`. - An account whose token predates the permission returns a 403 with code `reconnect_required`. - Instagram enforces a burst limit of 50 like or unlike calls per 5 seconds per Instagram account. Exceeding it locks that account out of the like API for an hour, so pace bulk loops.

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

Returns posts with comment counts from all connected accounts. Aggregates data across multiple accounts.  ### Caching  Responses are cached for up to 10 minutes, so the feed may lag new comments by that window.  Do not poll this endpoint for real-time updates. Subscribe to the `comment.received` webhook, which fires for every new comment across your posts and carries the post reference needed to keep this list current.  ### Meta ads  For users with the Ads add-on (accounts on usage-based billing always qualify), the user's Meta ads (boosted/dark posts) are included too.  There's one row per (ad, placement-with-comments). An ad that runs on both Facebook feed and Instagram feed produces up to two rows, since the Page dark post and the IG media have separate comment threads.  Each ad row is flagged `isAd: true` with `adId` and `placement` (`id` is `{adId}:{placement}`). Filter with `platform`:  - `?platform=metaads`: *only* ad rows. - `facebook`/`instagram`: *organic* posts only (no ads). - Omitted: both.  Fetch a row's thread from GET /v1/ads/{adId}/comments?placement={placement}.  Ad comment counts are read with the Marketing API token (Facebook side) or the connected Instagram account's token (Instagram side). A row whose count can't be read is omitted.  ### Pagination  Pagination walks each account's platform listing. Following `nextCursor` reaches past the first page on Facebook, Instagram, Threads, LinkedIn and YouTube, the platforms that support a server-side date window. On the others the listing stops at its first page.  Cursor pagination is only coherent for the default sort (`sortBy=date`, `sortOrder=desc`). With `sortOrder=asc`, or with `sortBy=comments`, the cursor filter does not match the sort order and the second page is unreliable.  `minComments` is applied to each page after pagination. A page can hold fewer than `limit` posts, even none, while `hasMore` is true; keep following `nextCursor`.  `nextCursor` is opaque: pass it back verbatim, never construct or parse it, its composition may change without notice. Because each page re-queries a live window, results can still shift between requests, so dedupe by `id` on the client.  ### Comment counts  `commentCount` semantics differ by platform:  - YouTube's includes replies. - Facebook's counts top-level comments only.

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
$platform = 'platform_example'; // string | Filter by platform. `metaads` is a synthetic value meaning the user's ads (boosted/dark posts) only; `facebook`/`instagram` return organic posts only. `tiktok` covers accounts connected through the TikTok Business app only; developer-app TikTok accounts are returned under `meta.accountsSkipped`.
$min_comments = 56; // int | Minimum comment count, applied to each page after pagination
$since = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Posts created after this date
$sort_by = 'date'; // string | Sort field
$sort_order = 'desc'; // string | Sort order
$limit = 50; // int
$cursor = 'cursor_example'; // string
$account_id = 'account_id_example'; // string | Filter by specific account ID.  With `platform=metaads` it takes the Meta Ads account ID, or the Facebook or Instagram account ID the Meta Ads connection belongs to, which returns that connection's ad rows.  A Facebook or Instagram account with no Meta Ads connection returns no rows. An account on any other platform returns 400.

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
| **platform** | **string**| Filter by platform. &#x60;metaads&#x60; is a synthetic value meaning the user&#39;s ads (boosted/dark posts) only; &#x60;facebook&#x60;/&#x60;instagram&#x60; return organic posts only. &#x60;tiktok&#x60; covers accounts connected through the TikTok Business app only; developer-app TikTok accounts are returned under &#x60;meta.accountsSkipped&#x60;. | [optional] |
| **min_comments** | **int**| Minimum comment count, applied to each page after pagination | [optional] |
| **since** | **\DateTime**| Posts created after this date | [optional] |
| **sort_by** | **string**| Sort field | [optional] [default to &#39;date&#39;] |
| **sort_order** | **string**| Sort order | [optional] [default to &#39;desc&#39;] |
| **limit** | **int**|  | [optional] [default to 50] |
| **cursor** | **string**|  | [optional] |
| **account_id** | **string**| Filter by specific account ID.  With &#x60;platform&#x3D;metaads&#x60; it takes the Meta Ads account ID, or the Facebook or Instagram account ID the Meta Ads connection belongs to, which returns that connection&#39;s ad rows.  A Facebook or Instagram account with no Meta Ads connection returns no rows. An account on any other platform returns 400. | [optional] |

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

## `pinInboxComment()`

```php
pinInboxComment($post_id, $comment_id, $pin_inbox_comment_request): \Zernio\Model\PinInboxComment200Response
```

Pin comment

Pin a top-level comment to the top of a post's comment section. TikTok accounts connected through the TikTok for Business app only; every other platform returns 400.

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
$pin_inbox_comment_request = new \Zernio\Model\PinInboxCommentRequest(); // \Zernio\Model\PinInboxCommentRequest

try {
    $result = $apiInstance->pinInboxComment($post_id, $comment_id, $pin_inbox_comment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->pinInboxComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **pin_inbox_comment_request** | [**\Zernio\Model\PinInboxCommentRequest**](../Model/PinInboxCommentRequest.md)|  | |

### Return type

[**\Zernio\Model\PinInboxComment200Response**](../Model/PinInboxComment200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replyToInboxPost()`

```php
replyToInboxPost($post_id, $reply_to_inbox_post_request, $idempotency_key): \Zernio\Model\ReplyToInboxPost200Response
```

Reply to comment

Post a reply to a post or specific comment. Requires accountId in request body.  ### Idempotency  Send an `Idempotency-Key` header to make retries safe (e.g. after a client-side timeout where delivery is unknown).  - Same key + same body replays the original response (with `Idempotent-Replayed: true`) instead of posting the comment a second time. - Same key + different body returns 422. - A key still in flight returns 409.  Keys are retained for 24 hours and are scoped to the credential and to this exact path. Reusing a key against a different postId returns 422 rather than replaying the other post's response.  Only successful (2xx) responses are stored for replay. If the request throws or returns a non-2xx status the key is released, so the header protects the \"request succeeded but the response was lost\" case.  After an ambiguous failure (a 5xx or a network timeout), list the post's comments before retrying with the same key. Treat an empty result as inconclusive rather than as proof nothing was posted.

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
$post_id = 'post_id_example'; // string | Zernio post ID or platform-specific post ID. On LinkedIn, pass the post id exactly as the feed returns it (urn:li:share:<id> or urn:li:ugcPost:<id>); a bare number is read as an activity id (urn:li:activity:<n>).
$reply_to_inbox_post_request = new \Zernio\Model\ReplyToInboxPostRequest(); // \Zernio\Model\ReplyToInboxPostRequest
$idempotency_key = 'idempotency_key_example'; // string | Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours.

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
| **post_id** | **string**| Zernio post ID or platform-specific post ID. On LinkedIn, pass the post id exactly as the feed returns it (urn:li:share:&lt;id&gt; or urn:li:ugcPost:&lt;id&gt;); a bare number is read as an activity id (urn:li:activity:&lt;n&gt;). | |
| **reply_to_inbox_post_request** | [**\Zernio\Model\ReplyToInboxPostRequest**](../Model/ReplyToInboxPostRequest.md)|  | |
| **idempotency_key** | **string**| Optional client-generated unique key (e.g. a UUID) that makes retries safe.  - Same key + same body: replays the original response. - Same key + different body: 422. - Key still processing: 409.  A request cut off mid-handler (e.g. by a function timeout) can leave its key in progress, answering 409 until the key expires after 24 hours. | [optional] |

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

Send a direct message to the author of a comment. Supported on Instagram and Facebook only.  One reply per comment, must be sent within 7 days.  ### Interactive elements  Optionally attach one of these (`quickReplies` and `buttons` are mutually exclusive):  - `quickReplies`: chips above the keyboard, max 13. Chips do not render in the Instagram Message Requests folder. - `buttons`: 1-3 inline postback/url buttons rendered in the same bubble via Meta's button_template.  ### Non-followers on Instagram  Instagram can refuse buttons, cards and attachments to commenters who do not follow the account. This is Meta code 2, subcode 1545133, returned here as a non-retryable 400 that says so.  The refusal is uneven: most accounts do not get it, and an affected account gets it on many of its non-followers. Only that account's own past refusals show whether it is affected.  The failed call still consumes the comment's single private reply. On an affected account, send plain text to reach non-followers and add buttons once they reply.  ### Errors  - 400 with `details.privateReplyConsumed: true`: the comment's single private reply is spent (by this call or an earlier one). Never retry it. - 502: Meta answered a server error after receiving the reply. It carries `details.privateReplyOutcome: \"unknown\"`. The reply is usually delivered and the comment's private reply spent, so check the conversation before retrying.  ### Recording  The reply is recorded in the inbox conversation with the commenter (`sentVia` `api` for key auth, `human` for a session) and fires `message.sent` once.

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

Unhide a previously hidden comment. Supported by Facebook, Instagram, Threads, X, and TikTok (accounts connected through the TikTok for Business app).

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

Remove this account's like from a post.  Supported platforms: LinkedIn, X, Facebook, YouTube, Bluesky, and Instagram in limited release.  - YouTube: this clears the rating. - Instagram: has the same limited release, Facebook Login, `instagram_manage_engagement` and burst-limit constraints as liking. - Bluesky: `likeUri` (returned when the post was liked) is required. - Reddit: uses `POST /v1/accounts/{accountId}/reddit-vote` with `direction: 0`.

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

## `unpinInboxComment()`

```php
unpinInboxComment($post_id, $comment_id, $account_id): \Zernio\Model\PinInboxComment200Response
```

Unpin comment

Unpin a previously pinned comment. TikTok accounts connected through the TikTok for Business app only.

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
    $result = $apiInstance->unpinInboxComment($post_id, $comment_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->unpinInboxComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **account_id** | **string**|  | |

### Return type

[**\Zernio\Model\PinInboxComment200Response**](../Model/PinInboxComment200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
