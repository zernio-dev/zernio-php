# Zernio\AccountSettingsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteInstagramIceBreakers()**](AccountSettingsApi.md#deleteInstagramIceBreakers) | **DELETE** /v1/accounts/{accountId}/instagram-ice-breakers | Delete IG ice breakers |
| [**deleteMessengerGetStarted()**](AccountSettingsApi.md#deleteMessengerGetStarted) | **DELETE** /v1/accounts/{accountId}/messenger-get-started | Delete FB Get Started button |
| [**deleteMessengerMenu()**](AccountSettingsApi.md#deleteMessengerMenu) | **DELETE** /v1/accounts/{accountId}/messenger-menu | Delete FB persistent menu |
| [**deleteTelegramCommands()**](AccountSettingsApi.md#deleteTelegramCommands) | **DELETE** /v1/accounts/{accountId}/telegram-commands | Delete TG bot commands |
| [**getInstagramIceBreakers()**](AccountSettingsApi.md#getInstagramIceBreakers) | **GET** /v1/accounts/{accountId}/instagram-ice-breakers | Get IG ice breakers |
| [**getMessengerGetStarted()**](AccountSettingsApi.md#getMessengerGetStarted) | **GET** /v1/accounts/{accountId}/messenger-get-started | Get FB Get Started button |
| [**getMessengerMenu()**](AccountSettingsApi.md#getMessengerMenu) | **GET** /v1/accounts/{accountId}/messenger-menu | Get FB persistent menu |
| [**getTelegramCommands()**](AccountSettingsApi.md#getTelegramCommands) | **GET** /v1/accounts/{accountId}/telegram-commands | Get TG bot commands |
| [**setInstagramIceBreakers()**](AccountSettingsApi.md#setInstagramIceBreakers) | **PUT** /v1/accounts/{accountId}/instagram-ice-breakers | Set IG ice breakers |
| [**setMessengerGetStarted()**](AccountSettingsApi.md#setMessengerGetStarted) | **PUT** /v1/accounts/{accountId}/messenger-get-started | Set FB Get Started button |
| [**setMessengerMenu()**](AccountSettingsApi.md#setMessengerMenu) | **PUT** /v1/accounts/{accountId}/messenger-menu | Set FB persistent menu |
| [**setTelegramCommands()**](AccountSettingsApi.md#setTelegramCommands) | **PUT** /v1/accounts/{accountId}/telegram-commands | Set TG bot commands |


## `deleteInstagramIceBreakers()`

```php
deleteInstagramIceBreakers($account_id)
```

Delete IG ice breakers

Removes the ice breaker questions from an Instagram account's Messenger experience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string

try {
    $apiInstance->deleteInstagramIceBreakers($account_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountSettingsApi->deleteInstagramIceBreakers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMessengerGetStarted()`

```php
deleteMessengerGetStarted($account_id): \Zernio\Model\UpdateYoutubeDefaultPlaylist200Response
```

Delete FB Get Started button

Remove the Get Started button. Meta refuses while a persistent menu is set, so delete the menu first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->deleteMessengerGetStarted($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountSettingsApi->deleteMessengerGetStarted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |

### Return type

[**\Zernio\Model\UpdateYoutubeDefaultPlaylist200Response**](../Model/UpdateYoutubeDefaultPlaylist200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMessengerMenu()`

```php
deleteMessengerMenu($account_id)
```

Delete FB persistent menu

Removes the persistent menu from Facebook Messenger conversations for this account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string

try {
    $apiInstance->deleteMessengerMenu($account_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountSettingsApi->deleteMessengerMenu: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTelegramCommands()`

```php
deleteTelegramCommands($account_id)
```

Delete TG bot commands

Clears all bot commands configured for a Telegram bot account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string

try {
    $apiInstance->deleteTelegramCommands($account_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountSettingsApi->deleteTelegramCommands: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInstagramIceBreakers()`

```php
getInstagramIceBreakers($account_id): \Zernio\Model\GetMessengerMenu200Response
```

Get IG ice breakers

Get the ice breaker configuration for an Instagram account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->getInstagramIceBreakers($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountSettingsApi->getInstagramIceBreakers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |

### Return type

[**\Zernio\Model\GetMessengerMenu200Response**](../Model/GetMessengerMenu200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMessengerGetStarted()`

```php
getMessengerGetStarted($account_id): \Zernio\Model\GetMessengerGetStarted200Response
```

Get FB Get Started button

Get the Get Started button payload for a Facebook Messenger account. `data` is null when the page has none.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->getMessengerGetStarted($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountSettingsApi->getMessengerGetStarted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |

### Return type

[**\Zernio\Model\GetMessengerGetStarted200Response**](../Model/GetMessengerGetStarted200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMessengerMenu()`

```php
getMessengerMenu($account_id): \Zernio\Model\GetMessengerMenu200Response
```

Get FB persistent menu

Get the persistent menu configuration for a Facebook Messenger account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->getMessengerMenu($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountSettingsApi->getMessengerMenu: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |

### Return type

[**\Zernio\Model\GetMessengerMenu200Response**](../Model/GetMessengerMenu200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTelegramCommands()`

```php
getTelegramCommands($account_id): \Zernio\Model\GetTelegramCommands200Response
```

Get TG bot commands

Get the bot commands configuration for a Telegram account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->getTelegramCommands($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountSettingsApi->getTelegramCommands: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |

### Return type

[**\Zernio\Model\GetTelegramCommands200Response**](../Model/GetTelegramCommands200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setInstagramIceBreakers()`

```php
setInstagramIceBreakers($account_id, $set_instagram_ice_breakers_request)
```

Set IG ice breakers

Set ice breakers for an Instagram account. Max 4 ice breakers, question max 80 chars.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$set_instagram_ice_breakers_request = new \Zernio\Model\SetInstagramIceBreakersRequest(); // \Zernio\Model\SetInstagramIceBreakersRequest

try {
    $apiInstance->setInstagramIceBreakers($account_id, $set_instagram_ice_breakers_request);
} catch (Exception $e) {
    echo 'Exception when calling AccountSettingsApi->setInstagramIceBreakers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **set_instagram_ice_breakers_request** | [**\Zernio\Model\SetInstagramIceBreakersRequest**](../Model/SetInstagramIceBreakersRequest.md)|  | |

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

## `setMessengerGetStarted()`

```php
setMessengerGetStarted($account_id, $set_messenger_get_started_request): \Zernio\Model\UpdateYoutubeDefaultPlaylist200Response
```

Set FB Get Started button

Set the Get Started button shown on a Facebook page's Messenger welcome screen. Meta requires it before a persistent menu can be set. Tapping it sends a postback with `payload`, which arrives as a `message.received` webhook carrying it in `metadata.postbackPayload`. Use `zernio:workflow:<workflowId>` to start a workflow on the tap; the workflow must be active on this account and profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$set_messenger_get_started_request = {"payload":"zernio:workflow:5190ac0343606395fce014b0"}; // \Zernio\Model\SetMessengerGetStartedRequest

try {
    $result = $apiInstance->setMessengerGetStarted($account_id, $set_messenger_get_started_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountSettingsApi->setMessengerGetStarted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **set_messenger_get_started_request** | [**\Zernio\Model\SetMessengerGetStartedRequest**](../Model/SetMessengerGetStartedRequest.md)|  | |

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

## `setMessengerMenu()`

```php
setMessengerMenu($account_id, $set_messenger_menu_request)
```

Set FB persistent menu

Set the persistent menu for a Facebook Messenger account. Max 3 top-level items, max 5 nested items. Meta only shows a persistent menu on a page that has a Get Started button, so set one first with PUT /v1/accounts/{accountId}/messenger-get-started. A postback button whose payload is `zernio:workflow:<workflowId>` starts that workflow when tapped; the workflow must be active on this account and profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$set_messenger_menu_request = new \Zernio\Model\SetMessengerMenuRequest(); // \Zernio\Model\SetMessengerMenuRequest

try {
    $apiInstance->setMessengerMenu($account_id, $set_messenger_menu_request);
} catch (Exception $e) {
    echo 'Exception when calling AccountSettingsApi->setMessengerMenu: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **set_messenger_menu_request** | [**\Zernio\Model\SetMessengerMenuRequest**](../Model/SetMessengerMenuRequest.md)|  | |

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

## `setTelegramCommands()`

```php
setTelegramCommands($account_id, $set_telegram_commands_request)
```

Set TG bot commands

Set bot commands for a Telegram account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$set_telegram_commands_request = new \Zernio\Model\SetTelegramCommandsRequest(); // \Zernio\Model\SetTelegramCommandsRequest

try {
    $apiInstance->setTelegramCommands($account_id, $set_telegram_commands_request);
} catch (Exception $e) {
    echo 'Exception when calling AccountSettingsApi->setTelegramCommands: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **set_telegram_commands_request** | [**\Zernio\Model\SetTelegramCommandsRequest**](../Model/SetTelegramCommandsRequest.md)|  | |

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
