# Zernio\MentionsApi

Unified inbox API for managing mentions across connected accounts. Currently supports LinkedIn organization mentions. Requires Inbox addon.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listInboxMentions()**](MentionsApi.md#listInboxMentions) | **GET** /v1/inbox/mentions | List mentions |
| [**replyToMention()**](MentionsApi.md#replyToMention) | **POST** /v1/inbox/mentions/reply | Reply to a mention |


## `listInboxMentions()`

```php
listInboxMentions($account_id, $profile_id, $sort_order, $limit, $cursor): \Zernio\Model\ListInboxMentions200Response
```

List mentions

Returns mentions of your connected accounts from the last 7 days. Requires Inbox addon.  ### LinkedIn  Organization mentions, delivered by webhooks and a background pull.  ### Instagram  Comment mentions (someone tags the account in a comment on their own media) and caption mentions (someone tags it in their media caption), delivered by the Meta `mentions` webhook.  - Only accounts connected through Facebook Login receive them. - Comments on the account's own posts are never listed, even when they contain its @handle. - Their text is read from Instagram in the background after the first request, so `content` can be empty on the first read. - Pass `mediaId` and `commentId` to `POST /v1/inbox/mentions/reply` to answer one.  ### Facebook  Post mentions (someone tags the Page in a post) and comment mentions (someone tags it in a comment), delivered by the Page `mention` webhook with their text.  - Comments on the Page's own posts and anything the Page wrote itself are never listed. - Facebook mentions cannot be replied to through `POST /v1/inbox/mentions/reply`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MentionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Filter by account ID
$profile_id = 'profile_id_example'; // string | Filter by profile ID
$sort_order = 'desc'; // string | Sort order by publishedAt
$limit = 25; // int
$cursor = 'cursor_example'; // string | Cursor for pagination (ID of the last item from the previous page)

try {
    $result = $apiInstance->listInboxMentions($account_id, $profile_id, $sort_order, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MentionsApi->listInboxMentions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Filter by account ID | [optional] |
| **profile_id** | **string**| Filter by profile ID | [optional] |
| **sort_order** | **string**| Sort order by publishedAt | [optional] [default to &#39;desc&#39;] |
| **limit** | **int**|  | [optional] [default to 25] |
| **cursor** | **string**| Cursor for pagination (ID of the last item from the previous page) | [optional] |

### Return type

[**\Zernio\Model\ListInboxMentions200Response**](../Model/ListInboxMentions200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replyToMention()`

```php
replyToMention($reply_to_mention_request): \Zernio\Model\ReplyToMention200Response
```

Reply to a mention

Reply to a mention of the connected account. Supported on Instagram only.  Two shapes, selected by whether `commentId` is present:  - **Comment mention** (someone @mentioned the account inside a comment): pass both   `mediaId` and `commentId`. Instagram posts a reply under that comment. - **Caption mention** (someone @mentioned the account in their media caption, so no   comment exists): pass `mediaId` only. Instagram posts a comment on their media.  Story mentions are not supported by Instagram's API.  `GET /v1/inbox/mentions` returns Instagram mentions with the `mediaId` and `commentId` to pass here.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MentionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reply_to_mention_request = {"accountId":"60f7a1b2c3d4e5f6a7b8c9d0","mediaId":"17895695668004550","commentId":"17870913561140000","message":"Thanks for the shout-out!"}; // \Zernio\Model\ReplyToMentionRequest

try {
    $result = $apiInstance->replyToMention($reply_to_mention_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MentionsApi->replyToMention: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reply_to_mention_request** | [**\Zernio\Model\ReplyToMentionRequest**](../Model/ReplyToMentionRequest.md)|  | |

### Return type

[**\Zernio\Model\ReplyToMention200Response**](../Model/ReplyToMention200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
