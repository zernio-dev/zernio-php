# Zernio\InstagramApi

Instagram-specific read endpoints: list a connected account&#39;s Stories and fetch per-Story insights. All endpoints require an accountId parameter identifying the Instagram-connected account.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getInstagramAudio()**](InstagramApi.md#getInstagramAudio) | **GET** /v1/accounts/{accountId}/instagram/audio/{audioId} | Get Instagram audio metadata |
| [**getInstagramBusinessDiscovery()**](InstagramApi.md#getInstagramBusinessDiscovery) | **GET** /v1/accounts/{accountId}/instagram/business-discovery | Look up a public Instagram Business account |
| [**getInstagramMentionedComment()**](InstagramApi.md#getInstagramMentionedComment) | **GET** /v1/accounts/{accountId}/instagram/mentions/comments/{commentId} | Get a comment that mentions an Instagram account |
| [**getInstagramMentionedMedia()**](InstagramApi.md#getInstagramMentionedMedia) | **GET** /v1/accounts/{accountId}/instagram/mentions/media/{mediaId} | Get a post that mentions an Instagram account in its caption |
| [**getInstagramPublishingLimit()**](InstagramApi.md#getInstagramPublishingLimit) | **GET** /v1/accounts/{accountId}/instagram/publishing-limit | Get Instagram publishing limit |
| [**getInstagramStoryInsights()**](InstagramApi.md#getInstagramStoryInsights) | **GET** /v1/accounts/{accountId}/instagram/stories/{storyId}/insights | Get Instagram story insights |
| [**listInstagramLiveMedia()**](InstagramApi.md#listInstagramLiveMedia) | **GET** /v1/accounts/{accountId}/instagram/live-media | List the live broadcasts of an Instagram account |
| [**listInstagramMediaCollaborators()**](InstagramApi.md#listInstagramMediaCollaborators) | **GET** /v1/accounts/{accountId}/instagram/media/{mediaId}/collaborators | List the collaborators of an Instagram post |
| [**listInstagramStories()**](InstagramApi.md#listInstagramStories) | **GET** /v1/accounts/{accountId}/instagram/stories | List active Instagram stories |
| [**listInstagramTaggedMedia()**](InstagramApi.md#listInstagramTaggedMedia) | **GET** /v1/accounts/{accountId}/instagram/tags | List the posts an Instagram account is tagged in |
| [**searchInstagramAudio()**](InstagramApi.md#searchInstagramAudio) | **GET** /v1/accounts/{accountId}/instagram/audio | Search Instagram audio |


## `getInstagramAudio()`

```php
getInstagramAudio($account_id, $audio_id): \Zernio\Model\GetInstagramAudio200Response
```

Get Instagram audio metadata

Fetch one audio asset's metadata by ID. Use it to re-validate a stored `audioId` before a scheduled Reel publishes, or to refresh the preview `downloadUrl` (Meta expires preview URLs after roughly 1.5 days).  Same connection requirement as the search endpoint: Facebook-Login Instagram accounts only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\InstagramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The ID of the Instagram account
$audio_id = 'audio_id_example'; // string | Instagram audio asset ID

try {
    $result = $apiInstance->getInstagramAudio($account_id, $audio_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstagramApi->getInstagramAudio: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The ID of the Instagram account | |
| **audio_id** | **string**| Instagram audio asset ID | |

### Return type

[**\Zernio\Model\GetInstagramAudio200Response**](../Model/GetInstagramAudio200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInstagramBusinessDiscovery()`

```php
getInstagramBusinessDiscovery($account_id, $username, $limit): \Zernio\Model\InstagramBusinessDiscovery
```

Look up a public Instagram Business account

Returns the public profile and most recent media of any Instagram Business or Creator account, looked up by username through one of your connected Instagram accounts. Useful for competitor and market research. Personal accounts and private accounts cannot be looked up.  Requires an Instagram account connected via **Facebook Login**. Meta serves business discovery on graph.facebook.com only, so accounts connected with classic Instagram Login receive a 400 (`instagram_business_discovery_requires_facebook_login`) and must be reconnected choosing the Facebook option. Any one such account can look up any public Business or Creator handle.  `likeCount` is null when the owner hides like counts.  Media URLs are temporary, and fields Meta does not return come back as null, never omitted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\InstagramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The ID of a connected Instagram account (Facebook Login).
$username = nike; // string | Instagram handle to look up, with or without the leading @. Case-insensitive.
$limit = 12; // int | How many of the most recent media to return.

try {
    $result = $apiInstance->getInstagramBusinessDiscovery($account_id, $username, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstagramApi->getInstagramBusinessDiscovery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The ID of a connected Instagram account (Facebook Login). | |
| **username** | **string**| Instagram handle to look up, with or without the leading @. Case-insensitive. | |
| **limit** | **int**| How many of the most recent media to return. | [optional] [default to 12] |

### Return type

[**\Zernio\Model\InstagramBusinessDiscovery**](../Model/InstagramBusinessDiscovery.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInstagramMentionedComment()`

```php
getInstagramMentionedComment($account_id, $comment_id): \Zernio\Model\InstagramMentionedComment
```

Get a comment that mentions an Instagram account

Returns a comment in which another Instagram user @mentioned the connected account, with the post it was left on. Meta sends the comment ID in its mention notification and offers no list of mentions, so this reads one mention by ID. Meta answers an error when comments are disabled on that post.  Requires an Instagram account connected via **Facebook Login**. Meta serves mentions on graph.facebook.com only, so accounts connected with classic Instagram Login receive a 400 (`instagram_mentions_require_facebook_login`) and must be reconnected choosing the Facebook option.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\InstagramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The ID of a connected Instagram account (Facebook Login).
$comment_id = 17894227972186120; // string | Instagram comment ID of the comment that mentions the account (digits only).

try {
    $result = $apiInstance->getInstagramMentionedComment($account_id, $comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstagramApi->getInstagramMentionedComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The ID of a connected Instagram account (Facebook Login). | |
| **comment_id** | **string**| Instagram comment ID of the comment that mentions the account (digits only). | |

### Return type

[**\Zernio\Model\InstagramMentionedComment**](../Model/InstagramMentionedComment.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInstagramMentionedMedia()`

```php
getInstagramMentionedMedia($account_id, $media_id): \Zernio\Model\InstagramMentionedMedia
```

Get a post that mentions an Instagram account in its caption

Returns a post in which another Instagram user @mentioned the connected account in the caption. Meta sends the media ID in its mention notification and offers no list of mentions, so this reads one mention by ID. Mentions in Stories are not supported by Meta.  Requires an Instagram account connected via **Facebook Login**. Meta serves mentions on graph.facebook.com only, so accounts connected with classic Instagram Login receive a 400 (`instagram_mentions_require_facebook_login`) and must be reconnected choosing the Facebook option.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\InstagramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The ID of a connected Instagram account (Facebook Login).
$media_id = 18027939643230671; // string | Instagram media ID of the post that mentions the account (digits only).

try {
    $result = $apiInstance->getInstagramMentionedMedia($account_id, $media_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstagramApi->getInstagramMentionedMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The ID of a connected Instagram account (Facebook Login). | |
| **media_id** | **string**| Instagram media ID of the post that mentions the account (digits only). | |

### Return type

[**\Zernio\Model\InstagramMentionedMedia**](../Model/InstagramMentionedMedia.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInstagramPublishingLimit()`

```php
getInstagramPublishingLimit($account_id): \Zernio\Model\GetInstagramPublishingLimit200Response
```

Get Instagram publishing limit

Returns the account's remaining content-publishing quota for Instagram's rolling 24-hour window, so you can pace publishing and warn before the cap is reached.  `quotaUsage` counts containers published since the start of the window. Always compare against the returned `quotaTotal` rather than hardcoding a number: Meta's prose documentation and the live API disagree on the value, and the live value is authoritative.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\InstagramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The ID of the Instagram account

try {
    $result = $apiInstance->getInstagramPublishingLimit($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstagramApi->getInstagramPublishingLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The ID of the Instagram account | |

### Return type

[**\Zernio\Model\GetInstagramPublishingLimit200Response**](../Model/GetInstagramPublishingLimit200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInstagramStoryInsights()`

```php
getInstagramStoryInsights($account_id, $story_id): \Zernio\Model\GetInstagramStoryInsights200Response
```

Get Instagram story insights

Returns metrics for a single story. The `source` field discriminates between three states:  - `live`: fetched from Meta in real time (story is still active) - `cached`: fetched from a persisted `story_insights` webhook payload   (story has expired but we received its final-state metrics from Meta) - `unavailable`: story has expired and Meta sent no `story_insights` webhook for it.   Meta sends it most reliably for accounts connected with Facebook Login or with their   linked Facebook Page connected, so read insights while the story is live if you need   final numbers.  Meta can report an expired story as an empty successful result rather than an error, so an expired story resolves to `cached` or `unavailable` even though the upstream request itself succeeded.  Field semantics follow Meta's API. Counts below 5 may be returned as 0 due to Meta's privacy floor on small audiences. The `navigation` field is the sum of `tapsForward + tapsBack + exits + swipesForward`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\InstagramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The Instagram account ID
$story_id = 'story_id_example'; // string | The Instagram media ID of the story.

try {
    $result = $apiInstance->getInstagramStoryInsights($account_id, $story_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstagramApi->getInstagramStoryInsights: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Instagram account ID | |
| **story_id** | **string**| The Instagram media ID of the story. | |

### Return type

[**\Zernio\Model\GetInstagramStoryInsights200Response**](../Model/GetInstagramStoryInsights200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInstagramLiveMedia()`

```php
listInstagramLiveMedia($account_id): \Zernio\Model\ListInstagramLiveMedia200Response
```

List the live broadcasts of an Instagram account

Returns the live videos the connected Instagram account is broadcasting right now. Meta only returns broadcasts in progress at the time of the request, so the list is empty when nothing is live (a 200, not an error). Pair the returned `id` with comments flagged as live (the live_comments webhook field) or with a `live_comment` comment automation.  Requires an Instagram account connected via **Facebook Login**. Meta documents the live_media edge on graph.facebook.com only, so accounts connected with classic Instagram Login receive a 400 (`instagram_live_media_requires_facebook_login`) and must be reconnected choosing the Facebook option.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\InstagramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The ID of a connected Instagram account (Facebook Login).

try {
    $result = $apiInstance->listInstagramLiveMedia($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstagramApi->listInstagramLiveMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The ID of a connected Instagram account (Facebook Login). | |

### Return type

[**\Zernio\Model\ListInstagramLiveMedia200Response**](../Model/ListInstagramLiveMedia200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInstagramMediaCollaborators()`

```php
listInstagramMediaCollaborators($account_id, $media_id): \Zernio\Model\ListInstagramMediaCollaborators200Response
```

List the collaborators of an Instagram post

Returns the accounts invited as collaborators on one of the connected account's own posts (feed image, Reel or carousel), with whether each invitation was accepted or is still pending. Use it to check who accepted a collab post after publishing it.  Requires an Instagram account connected via **Facebook Login**. Meta serves this edge on graph.facebook.com only, so accounts connected with classic Instagram Login receive a 400 (`instagram_collaborators_require_facebook_login`) and must be reconnected choosing the Facebook option.  Meta returns at most 5 collaborators and only those who allow collaborator tagging. A post without collaborators returns an empty list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\InstagramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The ID of a connected Instagram account (Facebook Login).
$media_id = 18063237463112345; // string | Instagram media ID of a post published by this account (digits only, e.g. the platformPostId of a published post).

try {
    $result = $apiInstance->listInstagramMediaCollaborators($account_id, $media_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstagramApi->listInstagramMediaCollaborators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The ID of a connected Instagram account (Facebook Login). | |
| **media_id** | **string**| Instagram media ID of a post published by this account (digits only, e.g. the platformPostId of a published post). | |

### Return type

[**\Zernio\Model\ListInstagramMediaCollaborators200Response**](../Model/ListInstagramMediaCollaborators200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInstagramStories()`

```php
listInstagramStories($account_id): \Zernio\Model\ListInstagramStories200Response
```

List active Instagram stories

Returns the IG Business/Creator account's currently-active stories. Meta keeps stories live for 24h; expired stories are not returned.  Limitations propagated from Meta (these are NOT bugs): - 24h window only - Live videos excluded - Reshared stories not returned - `mediaUrl` may be null if Meta flagged the story for copyright - `caption`, `likeCount`, `commentsCount` do not apply to story media

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\InstagramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The Instagram account ID

try {
    $result = $apiInstance->listInstagramStories($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstagramApi->listInstagramStories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Instagram account ID | |

### Return type

[**\Zernio\Model\ListInstagramStories200Response**](../Model/ListInstagramStories200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInstagramTaggedMedia()`

```php
listInstagramTaggedMedia($account_id, $limit, $cursor): \Zernio\Model\ListInstagramTaggedMedia200Response
```

List the posts an Instagram account is tagged in

Returns the media where other Instagram users photo-tagged the connected account, newest first. Private media is never returned.  Cursor-paginated: pass `nextCursor` from the previous response as `cursor` to read the next page. `nextCursor` is null when there are no more pages. Meta does not say whether a page is the last one, so the final page can come back empty with `nextCursor` null.  Requires an Instagram account connected via **Facebook Login**. Meta does not give Instagram Login access to tagging, so accounts connected with classic Instagram Login receive a 400 (`instagram_tagged_media_requires_facebook_login`) and must be reconnected choosing the Facebook option.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\InstagramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The ID of a connected Instagram account (Facebook Login).
$limit = 25; // int | Page size.
$cursor = 'cursor_example'; // string | The `nextCursor` of the previous page.

try {
    $result = $apiInstance->listInstagramTaggedMedia($account_id, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstagramApi->listInstagramTaggedMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The ID of a connected Instagram account (Facebook Login). | |
| **limit** | **int**| Page size. | [optional] [default to 25] |
| **cursor** | **string**| The &#x60;nextCursor&#x60; of the previous page. | [optional] |

### Return type

[**\Zernio\Model\ListInstagramTaggedMedia200Response**](../Model/ListInstagramTaggedMedia200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchInstagramAudio()`

```php
searchInstagramAudio($account_id, $audio_type, $q): \Zernio\Model\SearchInstagramAudio200Response
```

Search Instagram audio

Search Instagram's audio catalog (licensed music or original sounds), or list what is currently trending by omitting `q`. Returns up to ~30 assets; Meta exposes no pagination on this edge.  Pass the returned `audioId` as `platformSpecificData.audioConfiguration.audioId` when creating a Reel to publish it with that track.  Requires an Instagram account connected via **Facebook Login**. Meta hosts this catalog on graph.facebook.com only, so accounts connected with classic Instagram Login receive a 400 (`instagram_audio_requires_facebook_login`) and must be reconnected choosing the Facebook option.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\InstagramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The ID of the Instagram account
$audio_type = 'audio_type_example'; // string | Catalog to search: licensed music or original sounds from Reels.
$q = 'q_example'; // string | Search keywords. Omit to get the current trending list.

try {
    $result = $apiInstance->searchInstagramAudio($account_id, $audio_type, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstagramApi->searchInstagramAudio: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The ID of the Instagram account | |
| **audio_type** | **string**| Catalog to search: licensed music or original sounds from Reels. | |
| **q** | **string**| Search keywords. Omit to get the current trending list. | [optional] |

### Return type

[**\Zernio\Model\SearchInstagramAudio200Response**](../Model/SearchInstagramAudio200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
