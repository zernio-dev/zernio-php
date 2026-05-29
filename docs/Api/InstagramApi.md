# Zernio\InstagramApi

Instagram-specific read endpoints: list a connected account&#39;s Stories and fetch per-Story insights. All endpoints require an accountId parameter identifying the Instagram-connected social account.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getInstagramStoryInsights()**](InstagramApi.md#getInstagramStoryInsights) | **GET** /v1/accounts/{accountId}/instagram/stories/{storyId}/insights | Get Instagram story insights |
| [**listInstagramStories()**](InstagramApi.md#listInstagramStories) | **GET** /v1/accounts/{accountId}/instagram/stories | List active Instagram stories |


## `getInstagramStoryInsights()`

```php
getInstagramStoryInsights($account_id, $story_id): \Zernio\Model\GetInstagramStoryInsights200Response
```

Get Instagram story insights

Returns metrics for a single story. The `source` field discriminates between three states:  - `live` — fetched from Meta in real time (story is still active) - `cached` — fetched from a persisted `story_insights` webhook payload   (story has expired but we received its final-state metrics from Meta) - `unavailable` — story has expired and we never received its webhook   payload (for example, the account connected after the story expired)  Field semantics follow Meta's API. Counts below 5 may be returned as 0 due to Meta's privacy floor on small audiences. The `navigation` field is the sum of `tapsForward + tapsBack + exits + swipesForward`.

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
