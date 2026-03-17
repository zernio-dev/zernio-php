# Late\AccountSettingsApi



All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteInstagramIceBreakers()**](AccountSettingsApi.md#deleteInstagramIceBreakers) | **DELETE** /v1/accounts/{accountId}/instagram-ice-breakers | Delete IG ice breakers |
| [**deleteMessengerMenu()**](AccountSettingsApi.md#deleteMessengerMenu) | **DELETE** /v1/accounts/{accountId}/messenger-menu | Delete FB persistent menu |
| [**deleteTelegramCommands()**](AccountSettingsApi.md#deleteTelegramCommands) | **DELETE** /v1/accounts/{accountId}/telegram-commands | Delete TG bot commands |
| [**getInstagramIceBreakers()**](AccountSettingsApi.md#getInstagramIceBreakers) | **GET** /v1/accounts/{accountId}/instagram-ice-breakers | Get IG ice breakers |
| [**getMessengerMenu()**](AccountSettingsApi.md#getMessengerMenu) | **GET** /v1/accounts/{accountId}/messenger-menu | Get FB persistent menu |
| [**getTelegramCommands()**](AccountSettingsApi.md#getTelegramCommands) | **GET** /v1/accounts/{accountId}/telegram-commands | Get TG bot commands |
| [**setInstagramIceBreakers()**](AccountSettingsApi.md#setInstagramIceBreakers) | **PUT** /v1/accounts/{accountId}/instagram-ice-breakers | Set IG ice breakers |
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
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\AccountSettingsApi(
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
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\AccountSettingsApi(
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
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\AccountSettingsApi(
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
getInstagramIceBreakers($account_id): \Late\Model\GetMessengerMenu200Response
```

Get IG ice breakers

Get the ice breaker configuration for an Instagram account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\AccountSettingsApi(
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

[**\Late\Model\GetMessengerMenu200Response**](../Model/GetMessengerMenu200Response.md)

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
getMessengerMenu($account_id): \Late\Model\GetMessengerMenu200Response
```

Get FB persistent menu

Get the persistent menu configuration for a Facebook Messenger account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\AccountSettingsApi(
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

[**\Late\Model\GetMessengerMenu200Response**](../Model/GetMessengerMenu200Response.md)

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
getTelegramCommands($account_id): \Late\Model\GetTelegramCommands200Response
```

Get TG bot commands

Get the bot commands configuration for a Telegram account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\AccountSettingsApi(
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

[**\Late\Model\GetTelegramCommands200Response**](../Model/GetTelegramCommands200Response.md)

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
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$set_instagram_ice_breakers_request = new \Late\Model\SetInstagramIceBreakersRequest(); // \Late\Model\SetInstagramIceBreakersRequest

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
| **set_instagram_ice_breakers_request** | [**\Late\Model\SetInstagramIceBreakersRequest**](../Model/SetInstagramIceBreakersRequest.md)|  | |

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

## `setMessengerMenu()`

```php
setMessengerMenu($account_id, $set_messenger_menu_request)
```

Set FB persistent menu

Set the persistent menu for a Facebook Messenger account. Max 3 top-level items, max 5 nested items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$set_messenger_menu_request = new \Late\Model\SetMessengerMenuRequest(); // \Late\Model\SetMessengerMenuRequest

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
| **set_messenger_menu_request** | [**\Late\Model\SetMessengerMenuRequest**](../Model/SetMessengerMenuRequest.md)|  | |

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
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$set_telegram_commands_request = new \Late\Model\SetTelegramCommandsRequest(); // \Late\Model\SetTelegramCommandsRequest

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
| **set_telegram_commands_request** | [**\Late\Model\SetTelegramCommandsRequest**](../Model/SetTelegramCommandsRequest.md)|  | |

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
