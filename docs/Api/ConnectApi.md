# Late\ConnectApi



All URIs are relative to https://getlate.dev/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**completeTelegramConnect()**](ConnectApi.md#completeTelegramConnect) | **PATCH** /v1/connect/telegram | Check Telegram status |
| [**connectBlueskyCredentials()**](ConnectApi.md#connectBlueskyCredentials) | **POST** /v1/connect/bluesky/credentials | Connect Bluesky account |
| [**getConnectUrl()**](ConnectApi.md#getConnectUrl) | **GET** /v1/connect/{platform} | Get OAuth connect URL |
| [**getFacebookPages()**](ConnectApi.md#getFacebookPages) | **GET** /v1/accounts/{accountId}/facebook-page | List Facebook pages |
| [**getGmbLocations()**](ConnectApi.md#getGmbLocations) | **GET** /v1/accounts/{accountId}/gmb-locations | List GBP locations |
| [**getLinkedInOrganizations()**](ConnectApi.md#getLinkedInOrganizations) | **GET** /v1/accounts/{accountId}/linkedin-organizations | List LinkedIn orgs |
| [**getPendingOAuthData()**](ConnectApi.md#getPendingOAuthData) | **GET** /v1/connect/pending-data | Get pending OAuth data |
| [**getPinterestBoards()**](ConnectApi.md#getPinterestBoards) | **GET** /v1/accounts/{accountId}/pinterest-boards | List Pinterest boards |
| [**getRedditFlairs()**](ConnectApi.md#getRedditFlairs) | **GET** /v1/accounts/{accountId}/reddit-flairs | List subreddit flairs |
| [**getRedditSubreddits()**](ConnectApi.md#getRedditSubreddits) | **GET** /v1/accounts/{accountId}/reddit-subreddits | List Reddit subreddits |
| [**getTelegramConnectStatus()**](ConnectApi.md#getTelegramConnectStatus) | **GET** /v1/connect/telegram | Generate Telegram code |
| [**handleOAuthCallback()**](ConnectApi.md#handleOAuthCallback) | **POST** /v1/connect/{platform} | Complete OAuth callback |
| [**initiateTelegramConnect()**](ConnectApi.md#initiateTelegramConnect) | **POST** /v1/connect/telegram | Connect Telegram directly |
| [**listFacebookPages()**](ConnectApi.md#listFacebookPages) | **GET** /v1/connect/facebook/select-page | List Facebook pages |
| [**listGoogleBusinessLocations()**](ConnectApi.md#listGoogleBusinessLocations) | **GET** /v1/connect/googlebusiness/locations | List GBP locations |
| [**listLinkedInOrganizations()**](ConnectApi.md#listLinkedInOrganizations) | **GET** /v1/connect/linkedin/organizations | List LinkedIn orgs |
| [**listPinterestBoardsForSelection()**](ConnectApi.md#listPinterestBoardsForSelection) | **GET** /v1/connect/pinterest/select-board | List Pinterest boards |
| [**listSnapchatProfiles()**](ConnectApi.md#listSnapchatProfiles) | **GET** /v1/connect/snapchat/select-profile | List Snapchat profiles |
| [**selectFacebookPage()**](ConnectApi.md#selectFacebookPage) | **POST** /v1/connect/facebook/select-page | Select Facebook page |
| [**selectGoogleBusinessLocation()**](ConnectApi.md#selectGoogleBusinessLocation) | **POST** /v1/connect/googlebusiness/select-location | Select GBP location |
| [**selectLinkedInOrganization()**](ConnectApi.md#selectLinkedInOrganization) | **POST** /v1/connect/linkedin/select-organization | Select LinkedIn org |
| [**selectPinterestBoard()**](ConnectApi.md#selectPinterestBoard) | **POST** /v1/connect/pinterest/select-board | Select Pinterest board |
| [**selectSnapchatProfile()**](ConnectApi.md#selectSnapchatProfile) | **POST** /v1/connect/snapchat/select-profile | Select Snapchat profile |
| [**updateFacebookPage()**](ConnectApi.md#updateFacebookPage) | **PUT** /v1/accounts/{accountId}/facebook-page | Update Facebook page |
| [**updateGmbLocation()**](ConnectApi.md#updateGmbLocation) | **PUT** /v1/accounts/{accountId}/gmb-locations | Update GBP location |
| [**updateLinkedInOrganization()**](ConnectApi.md#updateLinkedInOrganization) | **PUT** /v1/accounts/{accountId}/linkedin-organization | Switch LinkedIn account type |
| [**updatePinterestBoards()**](ConnectApi.md#updatePinterestBoards) | **PUT** /v1/accounts/{accountId}/pinterest-boards | Set default Pinterest board |
| [**updateRedditSubreddits()**](ConnectApi.md#updateRedditSubreddits) | **PUT** /v1/accounts/{accountId}/reddit-subreddits | Set default subreddit |


## `completeTelegramConnect()`

```php
completeTelegramConnect($code): \Late\Model\CompleteTelegramConnect200Response
```

Check Telegram status

Poll this endpoint to check if a Telegram access code has been used to connect a channel/group. Recommended polling interval: 3 seconds. Status values: pending (waiting for user), connected (channel/group linked), expired (generate a new code).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = LATE-ABC123; // string | The access code to check status for

try {
    $result = $apiInstance->completeTelegramConnect($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->completeTelegramConnect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The access code to check status for | |

### Return type

[**\Late\Model\CompleteTelegramConnect200Response**](../Model/CompleteTelegramConnect200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `connectBlueskyCredentials()`

```php
connectBlueskyCredentials($connect_bluesky_credentials_request): \Late\Model\ConnectBlueskyCredentials200Response
```

Connect Bluesky account

Connect a Bluesky account using identifier (handle or email) and an app password. To get your userId for the state parameter, call GET /v1/users which includes a currentUserId field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$connect_bluesky_credentials_request = {"identifier":"yourhandle.bsky.social","appPassword":"xxxx-xxxx-xxxx-xxxx","state":"6507a1b2c3d4e5f6a7b8c9d0-6507a1b2c3d4e5f6a7b8c9d1","redirectUri":"https://yourapp.com/connected"}; // \Late\Model\ConnectBlueskyCredentialsRequest

try {
    $result = $apiInstance->connectBlueskyCredentials($connect_bluesky_credentials_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->connectBlueskyCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **connect_bluesky_credentials_request** | [**\Late\Model\ConnectBlueskyCredentialsRequest**](../Model/ConnectBlueskyCredentialsRequest.md)|  | |

### Return type

[**\Late\Model\ConnectBlueskyCredentials200Response**](../Model/ConnectBlueskyCredentials200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConnectUrl()`

```php
getConnectUrl($platform, $profile_id, $redirect_url): \Late\Model\GetConnectUrl200Response
```

Get OAuth connect URL

Initiate an OAuth connection flow. Returns an authUrl to redirect the user to. Standard flow: Late hosts the selection UI, then redirects to your redirect_url. Headless mode (headless=true): user is redirected to your redirect_url with OAuth data for custom UI. Use the platform-specific selection endpoints to complete.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string | Social media platform to connect
$profile_id = 'profile_id_example'; // string | Your Late profile ID (get from /v1/profiles)
$redirect_url = 'redirect_url_example'; // string | Your custom redirect URL after connection completes. Standard mode appends ?connected={platform}&profileId=X&username=Y. Headless mode appends OAuth data params.

try {
    $result = $apiInstance->getConnectUrl($platform, $profile_id, $redirect_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->getConnectUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **platform** | **string**| Social media platform to connect | |
| **profile_id** | **string**| Your Late profile ID (get from /v1/profiles) | |
| **redirect_url** | **string**| Your custom redirect URL after connection completes. Standard mode appends ?connected&#x3D;{platform}&amp;profileId&#x3D;X&amp;username&#x3D;Y. Headless mode appends OAuth data params. | [optional] |

### Return type

[**\Late\Model\GetConnectUrl200Response**](../Model/GetConnectUrl200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFacebookPages()`

```php
getFacebookPages($account_id): \Late\Model\GetFacebookPages200Response
```

List Facebook pages

Returns all Facebook pages the connected account has access to, including the currently selected page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->getFacebookPages($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->getFacebookPages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |

### Return type

[**\Late\Model\GetFacebookPages200Response**](../Model/GetFacebookPages200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGmbLocations()`

```php
getGmbLocations($account_id): \Late\Model\GetGmbLocations200Response
```

List GBP locations

Returns all Google Business Profile locations the connected account has access to, including the currently selected location.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->getGmbLocations($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->getGmbLocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |

### Return type

[**\Late\Model\GetGmbLocations200Response**](../Model/GetGmbLocations200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLinkedInOrganizations()`

```php
getLinkedInOrganizations($account_id): \Late\Model\GetLinkedInOrganizations200Response
```

List LinkedIn orgs

Returns LinkedIn organizations (company pages) the connected account has admin access to.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->getLinkedInOrganizations($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->getLinkedInOrganizations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |

### Return type

[**\Late\Model\GetLinkedInOrganizations200Response**](../Model/GetLinkedInOrganizations200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPendingOAuthData()`

```php
getPendingOAuthData($token): \Late\Model\GetPendingOAuthData200Response
```

Get pending OAuth data

Fetch pending OAuth data for headless mode using the pendingDataToken from the redirect URL. One-time use, expires after 10 minutes. No authentication required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | The pending data token from the OAuth redirect URL (pendingDataToken parameter)

try {
    $result = $apiInstance->getPendingOAuthData($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->getPendingOAuthData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| The pending data token from the OAuth redirect URL (pendingDataToken parameter) | |

### Return type

[**\Late\Model\GetPendingOAuthData200Response**](../Model/GetPendingOAuthData200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPinterestBoards()`

```php
getPinterestBoards($account_id): \Late\Model\GetPinterestBoards200Response
```

List Pinterest boards

Returns the boards available for a connected Pinterest account. Use this to get a board ID when creating a Pinterest post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->getPinterestBoards($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->getPinterestBoards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |

### Return type

[**\Late\Model\GetPinterestBoards200Response**](../Model/GetPinterestBoards200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRedditFlairs()`

```php
getRedditFlairs($account_id, $subreddit): \Late\Model\GetRedditFlairs200Response
```

List subreddit flairs

Returns available post flairs for a subreddit. Some subreddits require a flair when posting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$subreddit = 'subreddit_example'; // string | Subreddit name (without \"r/\" prefix) to fetch flairs for

try {
    $result = $apiInstance->getRedditFlairs($account_id, $subreddit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->getRedditFlairs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **subreddit** | **string**| Subreddit name (without \&quot;r/\&quot; prefix) to fetch flairs for | |

### Return type

[**\Late\Model\GetRedditFlairs200Response**](../Model/GetRedditFlairs200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRedditSubreddits()`

```php
getRedditSubreddits($account_id): \Late\Model\GetRedditSubreddits200Response
```

List Reddit subreddits

Returns the subreddits the connected Reddit account can post to. Use this to get a subreddit name when creating a Reddit post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->getRedditSubreddits($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->getRedditSubreddits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |

### Return type

[**\Late\Model\GetRedditSubreddits200Response**](../Model/GetRedditSubreddits200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTelegramConnectStatus()`

```php
getTelegramConnectStatus($profile_id): \Late\Model\GetTelegramConnectStatus200Response
```

Generate Telegram code

Generate an access code (valid 15 minutes) for connecting a Telegram channel or group. Add the bot as admin, then send the code + @yourchannel to the bot. Poll PATCH /v1/connect/telegram to check status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | The profile ID to connect the Telegram account to

try {
    $result = $apiInstance->getTelegramConnectStatus($profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->getTelegramConnectStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| The profile ID to connect the Telegram account to | |

### Return type

[**\Late\Model\GetTelegramConnectStatus200Response**](../Model/GetTelegramConnectStatus200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `handleOAuthCallback()`

```php
handleOAuthCallback($platform, $handle_o_auth_callback_request)
```

Complete OAuth callback

Exchange the OAuth authorization code for tokens and connect the account to the specified profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform = 'platform_example'; // string
$handle_o_auth_callback_request = new \Late\Model\HandleOAuthCallbackRequest(); // \Late\Model\HandleOAuthCallbackRequest

try {
    $apiInstance->handleOAuthCallback($platform, $handle_o_auth_callback_request);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->handleOAuthCallback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **platform** | **string**|  | |
| **handle_o_auth_callback_request** | [**\Late\Model\HandleOAuthCallbackRequest**](../Model/HandleOAuthCallbackRequest.md)|  | |

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

## `initiateTelegramConnect()`

```php
initiateTelegramConnect($initiate_telegram_connect_request): \Late\Model\InitiateTelegramConnect200Response
```

Connect Telegram directly

Connect a Telegram channel/group directly using the chat ID. Alternative to the access code flow. The bot must already be an admin in the channel/group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$initiate_telegram_connect_request = {"chatId":"-1001234567890","profileId":"6507a1b2c3d4e5f6a7b8c9d0"}; // \Late\Model\InitiateTelegramConnectRequest

try {
    $result = $apiInstance->initiateTelegramConnect($initiate_telegram_connect_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->initiateTelegramConnect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **initiate_telegram_connect_request** | [**\Late\Model\InitiateTelegramConnectRequest**](../Model/InitiateTelegramConnectRequest.md)|  | |

### Return type

[**\Late\Model\InitiateTelegramConnect200Response**](../Model/InitiateTelegramConnect200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listFacebookPages()`

```php
listFacebookPages($profile_id, $temp_token): \Late\Model\ListFacebookPages200Response
```

List Facebook pages

Returns the list of Facebook Pages the user can manage after OAuth. Extract tempToken and userProfile from the OAuth redirect params and pass them here. Use the X-Connect-Token header if connecting via API key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: connectToken
$config = Late\Configuration::getDefaultConfiguration()->setApiKey('X-Connect-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Late\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Connect-Token', 'Bearer');

// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID from your connection flow
$temp_token = 'temp_token_example'; // string | Temporary Facebook access token from the OAuth callback redirect

try {
    $result = $apiInstance->listFacebookPages($profile_id, $temp_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->listFacebookPages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID from your connection flow | |
| **temp_token** | **string**| Temporary Facebook access token from the OAuth callback redirect | |

### Return type

[**\Late\Model\ListFacebookPages200Response**](../Model/ListFacebookPages200Response.md)

### Authorization

[connectToken](../../README.md#connectToken), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGoogleBusinessLocations()`

```php
listGoogleBusinessLocations($profile_id, $temp_token): \Late\Model\ListGoogleBusinessLocations200Response
```

List GBP locations

For headless flows. Returns the list of GBP locations the user can manage. Use X-Connect-Token if connecting via API key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: connectToken
$config = Late\Configuration::getDefaultConfiguration()->setApiKey('X-Connect-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Late\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Connect-Token', 'Bearer');

// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID from your connection flow
$temp_token = 'temp_token_example'; // string | Temporary Google access token from the OAuth callback redirect

try {
    $result = $apiInstance->listGoogleBusinessLocations($profile_id, $temp_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->listGoogleBusinessLocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID from your connection flow | |
| **temp_token** | **string**| Temporary Google access token from the OAuth callback redirect | |

### Return type

[**\Late\Model\ListGoogleBusinessLocations200Response**](../Model/ListGoogleBusinessLocations200Response.md)

### Authorization

[connectToken](../../README.md#connectToken), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLinkedInOrganizations()`

```php
listLinkedInOrganizations($temp_token, $org_ids): \Late\Model\ListLinkedInOrganizations200Response
```

List LinkedIn orgs

Fetch full LinkedIn organization details (logos, vanity names, websites) for custom UI. No authentication required, just the tempToken from OAuth.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$temp_token = 'temp_token_example'; // string | The temporary LinkedIn access token from the OAuth redirect
$org_ids = 12345678,87654321,11111111; // string | Comma-separated list of organization IDs to fetch details for (max 100)

try {
    $result = $apiInstance->listLinkedInOrganizations($temp_token, $org_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->listLinkedInOrganizations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **temp_token** | **string**| The temporary LinkedIn access token from the OAuth redirect | |
| **org_ids** | **string**| Comma-separated list of organization IDs to fetch details for (max 100) | |

### Return type

[**\Late\Model\ListLinkedInOrganizations200Response**](../Model/ListLinkedInOrganizations200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPinterestBoardsForSelection()`

```php
listPinterestBoardsForSelection($x_connect_token, $profile_id, $temp_token): \Late\Model\ListPinterestBoardsForSelection200Response
```

List Pinterest boards

For headless flows. Returns Pinterest boards the user can post to. Use X-Connect-Token from the redirect URL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_connect_token = 'x_connect_token_example'; // string | Short-lived connect token from the OAuth redirect
$profile_id = 'profile_id_example'; // string | Your Late profile ID
$temp_token = 'temp_token_example'; // string | Temporary Pinterest access token from the OAuth callback redirect

try {
    $result = $apiInstance->listPinterestBoardsForSelection($x_connect_token, $profile_id, $temp_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->listPinterestBoardsForSelection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_connect_token** | **string**| Short-lived connect token from the OAuth redirect | |
| **profile_id** | **string**| Your Late profile ID | |
| **temp_token** | **string**| Temporary Pinterest access token from the OAuth callback redirect | |

### Return type

[**\Late\Model\ListPinterestBoardsForSelection200Response**](../Model/ListPinterestBoardsForSelection200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSnapchatProfiles()`

```php
listSnapchatProfiles($x_connect_token, $profile_id, $temp_token): \Late\Model\ListSnapchatProfiles200Response
```

List Snapchat profiles

For headless flows. Returns Snapchat Public Profiles the user can post to. Use X-Connect-Token from the redirect URL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_connect_token = 'x_connect_token_example'; // string | Short-lived connect token from the OAuth redirect
$profile_id = 'profile_id_example'; // string | Your Late profile ID
$temp_token = 'temp_token_example'; // string | Temporary Snapchat access token from the OAuth callback redirect

try {
    $result = $apiInstance->listSnapchatProfiles($x_connect_token, $profile_id, $temp_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->listSnapchatProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_connect_token** | **string**| Short-lived connect token from the OAuth redirect | |
| **profile_id** | **string**| Your Late profile ID | |
| **temp_token** | **string**| Temporary Snapchat access token from the OAuth callback redirect | |

### Return type

[**\Late\Model\ListSnapchatProfiles200Response**](../Model/ListSnapchatProfiles200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `selectFacebookPage()`

```php
selectFacebookPage($select_facebook_page_request): \Late\Model\SelectFacebookPage200Response
```

Select Facebook page

Complete the headless flow by saving the user's selected Facebook page. Pass the userProfile from the OAuth redirect and use X-Connect-Token if connecting via API key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: connectToken
$config = Late\Configuration::getDefaultConfiguration()->setApiKey('X-Connect-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Late\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Connect-Token', 'Bearer');

// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$select_facebook_page_request = {"profileId":"507f1f77bcf86cd799439011","pageId":"123456789","tempToken":"EAAxxxxx...","userProfile":{"id":"987654321","name":"John Doe","profilePicture":"https://..."},"redirect_url":"https://yourdomain.com/integrations/callback"}; // \Late\Model\SelectFacebookPageRequest

try {
    $result = $apiInstance->selectFacebookPage($select_facebook_page_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->selectFacebookPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **select_facebook_page_request** | [**\Late\Model\SelectFacebookPageRequest**](../Model/SelectFacebookPageRequest.md)|  | |

### Return type

[**\Late\Model\SelectFacebookPage200Response**](../Model/SelectFacebookPage200Response.md)

### Authorization

[connectToken](../../README.md#connectToken), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `selectGoogleBusinessLocation()`

```php
selectGoogleBusinessLocation($select_google_business_location_request): \Late\Model\SelectGoogleBusinessLocation200Response
```

Select GBP location

Complete the headless flow by saving the user's selected GBP location. Include userProfile from the OAuth redirect (contains refresh token). Use X-Connect-Token if connecting via API key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: connectToken
$config = Late\Configuration::getDefaultConfiguration()->setApiKey('X-Connect-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Late\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Connect-Token', 'Bearer');

// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$select_google_business_location_request = {"profileId":"507f1f77bcf86cd799439011","locationId":"9281089117903930794","tempToken":"ya29.xxxxx...","userProfile":{"id":"113303573364907650416","name":"John Doe","refreshToken":"1//0gxxxxx...","tokenExpiresIn":3599,"scope":"https://www.googleapis.com/auth/business.manage"},"redirect_url":"https://yourdomain.com/integrations/callback"}; // \Late\Model\SelectGoogleBusinessLocationRequest

try {
    $result = $apiInstance->selectGoogleBusinessLocation($select_google_business_location_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->selectGoogleBusinessLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **select_google_business_location_request** | [**\Late\Model\SelectGoogleBusinessLocationRequest**](../Model/SelectGoogleBusinessLocationRequest.md)|  | |

### Return type

[**\Late\Model\SelectGoogleBusinessLocation200Response**](../Model/SelectGoogleBusinessLocation200Response.md)

### Authorization

[connectToken](../../README.md#connectToken), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `selectLinkedInOrganization()`

```php
selectLinkedInOrganization($select_linked_in_organization_request): \Late\Model\SelectLinkedInOrganization200Response
```

Select LinkedIn org

Complete the LinkedIn connection flow. Set accountType to \"personal\" or \"organization\" to connect as a company page. Use X-Connect-Token if connecting via API key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$select_linked_in_organization_request = {"profileId":"64f0a1b2c3d4e5f6a7b8c9d0","tempToken":"AQX...","userProfile":{"id":"abc123","username":"johndoe","displayName":"John Doe","profilePicture":"https://media.licdn.com/dms/image/v2/..."},"accountType":"personal"}; // \Late\Model\SelectLinkedInOrganizationRequest

try {
    $result = $apiInstance->selectLinkedInOrganization($select_linked_in_organization_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->selectLinkedInOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **select_linked_in_organization_request** | [**\Late\Model\SelectLinkedInOrganizationRequest**](../Model/SelectLinkedInOrganizationRequest.md)|  | |

### Return type

[**\Late\Model\SelectLinkedInOrganization200Response**](../Model/SelectLinkedInOrganization200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `selectPinterestBoard()`

```php
selectPinterestBoard($select_pinterest_board_request): \Late\Model\SelectPinterestBoard200Response
```

Select Pinterest board

Complete the Pinterest connection flow. After OAuth, use this endpoint to save the selected board and complete the account connection. Use the X-Connect-Token header if you initiated the connection via API key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$select_pinterest_board_request = {"profileId":"64f0a1b2c3d4e5f6a7b8c9d0","boardId":"123456789012345678","boardName":"Marketing Ideas","tempToken":"pina_...","userProfile":{"id":"user123","username":"mybrand","displayName":"My Brand","profilePicture":"https://i.pinimg.com/..."},"redirect_url":"https://yourapp.com/callback"}; // \Late\Model\SelectPinterestBoardRequest

try {
    $result = $apiInstance->selectPinterestBoard($select_pinterest_board_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->selectPinterestBoard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **select_pinterest_board_request** | [**\Late\Model\SelectPinterestBoardRequest**](../Model/SelectPinterestBoardRequest.md)|  | |

### Return type

[**\Late\Model\SelectPinterestBoard200Response**](../Model/SelectPinterestBoard200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `selectSnapchatProfile()`

```php
selectSnapchatProfile($select_snapchat_profile_request, $x_connect_token): \Late\Model\SelectSnapchatProfile200Response
```

Select Snapchat profile

Complete the Snapchat connection flow by saving the selected Public Profile. Snapchat requires a Public Profile to publish content. Use X-Connect-Token if connecting via API key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$select_snapchat_profile_request = {"profileId":"64f0a1b2c3d4e5f6a7b8c9d0","selectedPublicProfile":{"id":"abc123-def456","display_name":"My Brand","username":"mybrand","profile_image_url":"https://cf-st.sc-cdn.net/...","subscriber_count":15000},"tempToken":"eyJ...","userProfile":{"id":"user123","username":"mybrand","displayName":"My Brand","profilePicture":"https://cf-st.sc-cdn.net/..."},"redirect_url":"https://yourapp.com/callback"}; // \Late\Model\SelectSnapchatProfileRequest
$x_connect_token = 'x_connect_token_example'; // string | Short-lived connect token from the OAuth redirect (for API users)

try {
    $result = $apiInstance->selectSnapchatProfile($select_snapchat_profile_request, $x_connect_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->selectSnapchatProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **select_snapchat_profile_request** | [**\Late\Model\SelectSnapchatProfileRequest**](../Model/SelectSnapchatProfileRequest.md)|  | |
| **x_connect_token** | **string**| Short-lived connect token from the OAuth redirect (for API users) | [optional] |

### Return type

[**\Late\Model\SelectSnapchatProfile200Response**](../Model/SelectSnapchatProfile200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFacebookPage()`

```php
updateFacebookPage($account_id, $update_facebook_page_request): \Late\Model\UpdateFacebookPage200Response
```

Update Facebook page

Switch which Facebook Page is active for a connected account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$update_facebook_page_request = {"selectedPageId":"123456789012345"}; // \Late\Model\UpdateFacebookPageRequest

try {
    $result = $apiInstance->updateFacebookPage($account_id, $update_facebook_page_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->updateFacebookPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **update_facebook_page_request** | [**\Late\Model\UpdateFacebookPageRequest**](../Model/UpdateFacebookPageRequest.md)|  | |

### Return type

[**\Late\Model\UpdateFacebookPage200Response**](../Model/UpdateFacebookPage200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGmbLocation()`

```php
updateGmbLocation($account_id, $update_gmb_location_request): \Late\Model\UpdateGmbLocation200Response
```

Update GBP location

Switch which GBP location is active for a connected account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$update_gmb_location_request = {"selectedLocationId":"12345678901234567890"}; // \Late\Model\UpdateGmbLocationRequest

try {
    $result = $apiInstance->updateGmbLocation($account_id, $update_gmb_location_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->updateGmbLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **update_gmb_location_request** | [**\Late\Model\UpdateGmbLocationRequest**](../Model/UpdateGmbLocationRequest.md)|  | |

### Return type

[**\Late\Model\UpdateGmbLocation200Response**](../Model/UpdateGmbLocation200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLinkedInOrganization()`

```php
updateLinkedInOrganization($account_id, $update_linked_in_organization_request): \Late\Model\ConnectBlueskyCredentials200Response
```

Switch LinkedIn account type

Switch a LinkedIn account between personal profile and organization (company page) posting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$update_linked_in_organization_request = {"accountType":"organization","selectedOrganization":{"id":"12345678","name":"Acme Corporation","vanityName":"acme-corp"}}; // \Late\Model\UpdateLinkedInOrganizationRequest

try {
    $result = $apiInstance->updateLinkedInOrganization($account_id, $update_linked_in_organization_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->updateLinkedInOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **update_linked_in_organization_request** | [**\Late\Model\UpdateLinkedInOrganizationRequest**](../Model/UpdateLinkedInOrganizationRequest.md)|  | |

### Return type

[**\Late\Model\ConnectBlueskyCredentials200Response**](../Model/ConnectBlueskyCredentials200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePinterestBoards()`

```php
updatePinterestBoards($account_id, $update_pinterest_boards_request): \Late\Model\ConnectBlueskyCredentials200Response
```

Set default Pinterest board

Sets the default board used when publishing pins for this account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$update_pinterest_boards_request = {"defaultBoardId":"123456789012345678","defaultBoardName":"Marketing Ideas"}; // \Late\Model\UpdatePinterestBoardsRequest

try {
    $result = $apiInstance->updatePinterestBoards($account_id, $update_pinterest_boards_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->updatePinterestBoards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **update_pinterest_boards_request** | [**\Late\Model\UpdatePinterestBoardsRequest**](../Model/UpdatePinterestBoardsRequest.md)|  | |

### Return type

[**\Late\Model\ConnectBlueskyCredentials200Response**](../Model/ConnectBlueskyCredentials200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRedditSubreddits()`

```php
updateRedditSubreddits($account_id, $update_reddit_subreddits_request): \Late\Model\UpdateRedditSubreddits200Response
```

Set default subreddit

Sets the default subreddit used when publishing posts for this Reddit account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$update_reddit_subreddits_request = {"defaultSubreddit":"marketing"}; // \Late\Model\UpdateRedditSubredditsRequest

try {
    $result = $apiInstance->updateRedditSubreddits($account_id, $update_reddit_subreddits_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->updateRedditSubreddits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **update_reddit_subreddits_request** | [**\Late\Model\UpdateRedditSubredditsRequest**](../Model/UpdateRedditSubredditsRequest.md)|  | |

### Return type

[**\Late\Model\UpdateRedditSubreddits200Response**](../Model/UpdateRedditSubreddits200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
