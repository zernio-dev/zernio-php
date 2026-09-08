# Zernio\AccountsApi

Manage connected accounts: list, fetch, update, disconnect, and read account health.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteAccount()**](AccountsApi.md#deleteAccount) | **DELETE** /v1/accounts/{accountId} | Disconnect account |
| [**getAccountHealth()**](AccountsApi.md#getAccountHealth) | **GET** /v1/accounts/{accountId}/health | Check account health |
| [**getAccountPosts()**](AccountsApi.md#getAccountPosts) | **GET** /v1/accounts/{accountId}/posts | List posts published on the platform |
| [**getAllAccountsHealth()**](AccountsApi.md#getAllAccountsHealth) | **GET** /v1/accounts/health | Check accounts health |
| [**getBlueskySettings()**](AccountsApi.md#getBlueskySettings) | **GET** /v1/accounts/{accountId}/bluesky-settings | Get Bluesky account settings |
| [**getFollowerStats()**](AccountsApi.md#getFollowerStats) | **GET** /v1/accounts/follower-stats | Get follower stats |
| [**getInstagramFollowStatus()**](AccountsApi.md#getInstagramFollowStatus) | **GET** /v1/accounts/{accountId}/follow-status/{userId} | Check whether an Instagram user follows the account |
| [**getSlackSettings()**](AccountsApi.md#getSlackSettings) | **GET** /v1/accounts/{accountId}/slack-settings | Get Slack account settings |
| [**getTikTokCreatorInfo()**](AccountsApi.md#getTikTokCreatorInfo) | **GET** /v1/accounts/{accountId}/tiktok/creator-info | Get TikTok creator info |
| [**listAccounts()**](AccountsApi.md#listAccounts) | **GET** /v1/accounts | List accounts |
| [**moveAccountToProfile()**](AccountsApi.md#moveAccountToProfile) | **PATCH** /v1/accounts/{accountId} | Move account to another profile |
| [**updateAccount()**](AccountsApi.md#updateAccount) | **PUT** /v1/accounts/{accountId} | Update account |
| [**updateBlueskySettings()**](AccountsApi.md#updateBlueskySettings) | **PATCH** /v1/accounts/{accountId}/bluesky-settings | Update Bluesky account settings |
| [**updateSlackSettings()**](AccountsApi.md#updateSlackSettings) | **PATCH** /v1/accounts/{accountId}/slack-settings | Update Slack account settings |


## `deleteAccount()`

```php
deleteAccount($account_id): \Zernio\Model\DeleteAccountGroup200Response
```

Disconnect account

Disconnects and removes a connected account. Repeating the call for an account already disconnected returns 404, the account stays in its 1h grace window and the disconnect is not re-run.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->deleteAccount($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->deleteAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |

### Return type

[**\Zernio\Model\DeleteAccountGroup200Response**](../Model/DeleteAccountGroup200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountHealth()`

```php
getAccountHealth($account_id): \Zernio\Model\GetAccountHealth200Response
```

Check account health

Returns detailed health info for a specific account including token status, permissions, and recommendations.  For WhatsApp accounts the response also includes `platformConnection`, a live probe of the Meta link behind the channel (the same read as `GET /v1/whatsapp/number-info`). The OAuth token can be perfectly valid while Meta refuses to serve the phone-number object (for example after a phone-side coexistence disconnect), so `tokenStatus` alone is not a liveness signal for WhatsApp. When the Meta link is dead, `platformConnection.status` is `disconnected` and the overall `status` is `error`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account ID to check

try {
    $result = $apiInstance->getAccountHealth($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountHealth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The account ID to check | |

### Return type

[**\Zernio\Model\GetAccountHealth200Response**](../Model/GetAccountHealth200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountPosts()`

```php
getAccountPosts($account_id): \Zernio\Model\GetAccountPosts200Response
```

List posts published on the platform

Returns the 25 most recent posts that exist on the platform for a connected account, read live from the platform API. This covers everything on the account, including posts that were never created through Zernio.  Use it to obtain the platform's own post id, which the analytics endpoints take as input. On YouTube the returned `id` is the video ID that `GET /v1/analytics/youtube/daily-views`, `/video-retention` and `/demographics` expect as `videoId`, so this endpoint is what backs a video picker in your own UI.  Not every field applies to every platform: `reactionCount` is Facebook and LinkedIn, `shareCount` is platform dependent, `cid` is the Bluesky content id needed to reply, and `subreddit` is Reddit only. Absent fields are omitted from the response.  The account's token is refreshed before the call when it has expired. When the refresh cannot recover it, the response is a 401 with code `TOKEN_EXPIRED` and the account has to be reconnected.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->getAccountPosts($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountPosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |

### Return type

[**\Zernio\Model\GetAccountPosts200Response**](../Model/GetAccountPosts200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllAccountsHealth()`

```php
getAllAccountsHealth($profile_id, $platform, $status): \Zernio\Model\GetAllAccountsHealth200Response
```

Check accounts health

Returns health status of all connected accounts including token validity, permissions, and issues needing attention.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Filter by profile ID
$platform = 'platform_example'; // string | Filter by platform
$status = 'status_example'; // string | Filter by health status

try {
    $result = $apiInstance->getAllAccountsHealth($profile_id, $platform, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAllAccountsHealth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Filter by profile ID | [optional] |
| **platform** | **string**| Filter by platform | [optional] |
| **status** | **string**| Filter by health status | [optional] |

### Return type

[**\Zernio\Model\GetAllAccountsHealth200Response**](../Model/GetAllAccountsHealth200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBlueskySettings()`

```php
getBlueskySettings($account_id): \Zernio\Model\GetBlueskySettings200Response
```

Get Bluesky account settings

Returns the account's default post languages (defaultLangs), applied at publish time whenever a post's platformSpecificData.langs is absent. Null when no default is set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->getBlueskySettings($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getBlueskySettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |

### Return type

[**\Zernio\Model\GetBlueskySettings200Response**](../Model/GetBlueskySettings200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFollowerStats()`

```php
getFollowerStats($account_ids, $profile_id, $from_date, $to_date, $granularity): \Zernio\Model\FollowerStatsResponse
```

Get follower stats

Returns follower count history and growth metrics for connected accounts. Requires analytics add-on subscription. Follower counts are refreshed once per day.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_ids = 'account_ids_example'; // string | Comma-separated list of account IDs (optional, defaults to all user's accounts)
$profile_id = 'profile_id_example'; // string | Filter by profile ID
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start date in YYYY-MM-DD format (defaults to 30 days ago)
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End date in YYYY-MM-DD format (defaults to today)
$granularity = 'daily'; // string | Data aggregation level

try {
    $result = $apiInstance->getFollowerStats($account_ids, $profile_id, $from_date, $to_date, $granularity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getFollowerStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_ids** | **string**| Comma-separated list of account IDs (optional, defaults to all user&#39;s accounts) | [optional] |
| **profile_id** | **string**| Filter by profile ID | [optional] |
| **from_date** | **\DateTime**| Start date in YYYY-MM-DD format (defaults to 30 days ago) | [optional] |
| **to_date** | **\DateTime**| End date in YYYY-MM-DD format (defaults to today) | [optional] |
| **granularity** | **string**| Data aggregation level | [optional] [default to &#39;daily&#39;] |

### Return type

[**\Zernio\Model\FollowerStatsResponse**](../Model/FollowerStatsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInstagramFollowStatus()`

```php
getInstagramFollowStatus($account_id, $user_id, $refresh): \Zernio\Model\GetInstagramFollowStatus200Response
```

Check whether an Instagram user follows the account

Resolves the follow relationship between an Instagram user and the connected account, plus their public profile counters.  `userId` is the Instagram-scoped id (IGSID) Meta gives you on a webhook: `sender.id` on `message.received`, `comment.author.id` on `comment.received`.  **Meta only answers for people who have MESSAGED the account.** Commenting grants no consent, so a commenter who has never DMed you is unresolvable - that is a platform rule, not a limitation of this endpoint. When it cannot be resolved the response is still `200` with `isFollower: null` and an `unavailableReason`, because \"unknown\" is a normal state to branch on:    * `consent_required` - the user has never messaged this account.   * `dm_access_disabled` - the account owner turned off Instagram Direct API access.   * `not_messageable` - the id is not a messaging-scoped id.   * `error` - a transient Graph API failure.  To gate a comment automation on this, use the automation's `audience` rules instead of calling this per comment - they run the same lookup only on comments that actually match a keyword, and can ask the commenter to confirm with one tap.  Answers are cached briefly per (account, user). Pass `refresh=true` right after asking someone to follow, so a follow from a moment ago is visible.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Instagram account ID
$user_id = 'user_id_example'; // string | Instagram-scoped user id (IGSID) from a webhook payload
$refresh = True; // bool | Bypass the cache and re-query Meta

try {
    $result = $apiInstance->getInstagramFollowStatus($account_id, $user_id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getInstagramFollowStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Instagram account ID | |
| **user_id** | **string**| Instagram-scoped user id (IGSID) from a webhook payload | |
| **refresh** | **bool**| Bypass the cache and re-query Meta | [optional] |

### Return type

[**\Zernio\Model\GetInstagramFollowStatus200Response**](../Model/GetInstagramFollowStatus200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSlackSettings()`

```php
getSlackSettings($account_id): \Zernio\Model\GetSlackSettings200Response
```

Get Slack account settings

Returns the connected Slack channel details and the default message identity (name and avatar shown as the author on every post, with Slack's APP badge). The identity applies to messages only; the app's own Slack profile is global and cannot be changed per workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->getSlackSettings($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getSlackSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |

### Return type

[**\Zernio\Model\GetSlackSettings200Response**](../Model/GetSlackSettings200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTikTokCreatorInfo()`

```php
getTikTokCreatorInfo($account_id, $media_type): \Zernio\Model\GetTikTokCreatorInfo200Response
```

Get TikTok creator info

Returns TikTok creator details, available privacy levels, posting limits, and commercial content options for a specific TikTok account. Only works with TikTok accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The TikTok account ID
$media_type = 'video'; // string | The media type to get creator info for (affects available interaction settings)

try {
    $result = $apiInstance->getTikTokCreatorInfo($account_id, $media_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getTikTokCreatorInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The TikTok account ID | |
| **media_type** | **string**| The media type to get creator info for (affects available interaction settings) | [optional] [default to &#39;video&#39;] |

### Return type

[**\Zernio\Model\GetTikTokCreatorInfo200Response**](../Model/GetTikTokCreatorInfo200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAccounts()`

```php
listAccounts($profile_id, $platform, $status, $include_over_limit, $page, $limit): \Zernio\Model\AccountsListResponse
```

List accounts

Returns connected accounts. Only includes accounts within the plan limit by default. Follower data requires analytics add-on. Supports optional server-side pagination via page/limit params. When omitted, returns all accounts (backward-compatible). page and limit must be supplied together; out-of-range page/limit values are rejected with 400 rather than silently clamped.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Filter accounts by profile ID. Must be a valid ObjectId.
$platform = 'platform_example'; // string | Filter accounts by platform (e.g. \"instagram\", \"twitter\").
$status = 'status_example'; // string | Filter accounts by connection status. `connected` returns healthy accounts; `disconnected` returns accounts that need reconnection (per the same reconnection check surfaced in the dashboard). Omit to return accounts in any status. When combined with page/limit, pagination totals reflect the filtered result set.
$include_over_limit = false; // bool | When true, includes accounts from over-limit profiles.
$page = 56; // int | Page number (1-based). Must be provided together with limit to enable server-side pagination; sending only one of the two returns 400. Omit both for all accounts.
$limit = 56; // int | Page size. Must be provided together with page; sending only one of the two returns 400.

try {
    $result = $apiInstance->listAccounts($profile_id, $platform, $status, $include_over_limit, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->listAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Filter accounts by profile ID. Must be a valid ObjectId. | [optional] |
| **platform** | **string**| Filter accounts by platform (e.g. \&quot;instagram\&quot;, \&quot;twitter\&quot;). | [optional] |
| **status** | **string**| Filter accounts by connection status. &#x60;connected&#x60; returns healthy accounts; &#x60;disconnected&#x60; returns accounts that need reconnection (per the same reconnection check surfaced in the dashboard). Omit to return accounts in any status. When combined with page/limit, pagination totals reflect the filtered result set. | [optional] |
| **include_over_limit** | **bool**| When true, includes accounts from over-limit profiles. | [optional] [default to false] |
| **page** | **int**| Page number (1-based). Must be provided together with limit to enable server-side pagination; sending only one of the two returns 400. Omit both for all accounts. | [optional] |
| **limit** | **int**| Page size. Must be provided together with page; sending only one of the two returns 400. | [optional] |

### Return type

[**\Zernio\Model\AccountsListResponse**](../Model/AccountsListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `moveAccountToProfile()`

```php
moveAccountToProfile($account_id, $move_account_to_profile_request): \Zernio\Model\MoveAccountToProfile200Response
```

Move account to another profile

Moves a connected account to a different profile owned by the same user. The target profile must belong to the same user as the account.  For API keys restricted to specific profiles, BOTH the source account's current profile AND the target profile must be in the key's allowed set. Calls with a target profile outside the key's scope return 403.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$move_account_to_profile_request = {"profileId":"65f1a2b3c4d5e6f7a8b9c0d1"}; // \Zernio\Model\MoveAccountToProfileRequest

try {
    $result = $apiInstance->moveAccountToProfile($account_id, $move_account_to_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->moveAccountToProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **move_account_to_profile_request** | [**\Zernio\Model\MoveAccountToProfileRequest**](../Model/MoveAccountToProfileRequest.md)|  | |

### Return type

[**\Zernio\Model\MoveAccountToProfile200Response**](../Model/MoveAccountToProfile200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccount()`

```php
updateAccount($account_id, $update_account_request): \Zernio\Model\UpdateAccount200Response
```

Update account

Updates a connected account's display name or username override.  For X accounts on usage-based billing, also accepts an `xCapabilities` object to toggle background API operations that incur X API pass-through costs. Both fields are opt-in (default `false`). When off, no analytics syncs or DM polling are performed for that account, and no API call is metered for those operations. Publishing and deleting posts are always available regardless of these toggles. Setting `xCapabilities` on a non-X account returns 400.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$update_account_request = {"displayName":"Acme Corporation Official","xCapabilities":{"analytics":true,"inbox":false}}; // \Zernio\Model\UpdateAccountRequest

try {
    $result = $apiInstance->updateAccount($account_id, $update_account_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->updateAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **update_account_request** | [**\Zernio\Model\UpdateAccountRequest**](../Model/UpdateAccountRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateAccount200Response**](../Model/UpdateAccount200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBlueskySettings()`

```php
updateBlueskySettings($account_id, $update_bluesky_settings_request)
```

Update Bluesky account settings

Set or clear the account's default post languages. 1-3 BCP-47 codes (e.g. \"pt\", \"en-US\"), the same validation as per-post langs; explicit null clears the default. Per-post platformSpecificData.langs always overrides this default. Applies to posts published after the change; already-published posts cannot be retagged (Bluesky has no post edit).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$update_bluesky_settings_request = new \Zernio\Model\UpdateBlueskySettingsRequest(); // \Zernio\Model\UpdateBlueskySettingsRequest

try {
    $apiInstance->updateBlueskySettings($account_id, $update_bluesky_settings_request);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->updateBlueskySettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **update_bluesky_settings_request** | [**\Zernio\Model\UpdateBlueskySettingsRequest**](../Model/UpdateBlueskySettingsRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSlackSettings()`

```php
updateSlackSettings($account_id, $update_slack_settings_request)
```

Update Slack account settings

Set or clear the default message identity for this channel. Empty string clears a field; per-post platformSpecificData.username/iconUrl still override these defaults.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$update_slack_settings_request = new \Zernio\Model\UpdateSlackSettingsRequest(); // \Zernio\Model\UpdateSlackSettingsRequest

try {
    $apiInstance->updateSlackSettings($account_id, $update_slack_settings_request);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->updateSlackSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **update_slack_settings_request** | [**\Zernio\Model\UpdateSlackSettingsRequest**](../Model/UpdateSlackSettingsRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
