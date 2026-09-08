# Zernio\InstagramApi

Instagram-specific read endpoints: list a connected account&#39;s Stories and fetch per-Story insights. All endpoints require an accountId parameter identifying the Instagram-connected account.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getInstagramAudio()**](InstagramApi.md#getInstagramAudio) | **GET** /v1/accounts/{accountId}/instagram/audio/{audioId} | Get Instagram audio metadata |
| [**getInstagramPublishingLimit()**](InstagramApi.md#getInstagramPublishingLimit) | **GET** /v1/accounts/{accountId}/instagram/publishing-limit | Get Instagram publishing limit |
| [**getInstagramStoryInsights()**](InstagramApi.md#getInstagramStoryInsights) | **GET** /v1/accounts/{accountId}/instagram/stories/{storyId}/insights | Get Instagram story insights |
| [**listInstagramStories()**](InstagramApi.md#listInstagramStories) | **GET** /v1/accounts/{accountId}/instagram/stories | List active Instagram stories |
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

Returns metrics for a single story. The `source` field discriminates between three states:  - `live`: fetched from Meta in real time (story is still active) - `cached`: fetched from a persisted `story_insights` webhook payload   (story has expired but we received its final-state metrics from Meta) - `unavailable`: story has expired and we never received its webhook   payload (for example, the account connected after the story expired)  Meta can report an expired story as an empty successful result rather than an error, so an expired story resolves to `cached` or `unavailable` even though the upstream request itself succeeded.  Field semantics follow Meta's API. Counts below 5 may be returned as 0 due to Meta's privacy floor on small audiences. The `navigation` field is the sum of `tapsForward + tapsBack + exits + swipesForward`.

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
