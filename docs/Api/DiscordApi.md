# Late\DiscordApi

Discord-specific endpoints for managing webhook identity (display name and avatar), switching channels, and listing guild channels.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDiscordChannels()**](DiscordApi.md#getDiscordChannels) | **GET** /v1/accounts/{accountId}/discord-channels | List Discord guild channels |
| [**getDiscordSettings()**](DiscordApi.md#getDiscordSettings) | **GET** /v1/accounts/{accountId}/discord-settings | Get Discord account settings |
| [**updateDiscordSettings()**](DiscordApi.md#updateDiscordSettings) | **PATCH** /v1/accounts/{accountId}/discord-settings | Update Discord settings |


## `getDiscordChannels()`

```php
getDiscordChannels($account_id): \Late\Model\GetDiscordChannels200Response
```

List Discord guild channels

Returns the text, announcement, and forum channels in the connected Discord guild. Use this to discover available channels when switching the connected channel via PATCH /v1/accounts/{accountId}/discord-settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\DiscordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->getDiscordChannels($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscordApi->getDiscordChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |

### Return type

[**\Late\Model\GetDiscordChannels200Response**](../Model/GetDiscordChannels200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDiscordSettings()`

```php
getDiscordSettings($account_id): \Late\Model\GetDiscordSettings200Response
```

Get Discord account settings

Returns the current Discord account settings including webhook identity (display name and avatar), connected channel, and guild information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\DiscordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->getDiscordSettings($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscordApi->getDiscordSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |

### Return type

[**\Late\Model\GetDiscordSettings200Response**](../Model/GetDiscordSettings200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDiscordSettings()`

```php
updateDiscordSettings($account_id, $update_discord_settings_request): \Late\Model\UpdateDiscordSettings200Response
```

Update Discord settings

Update Discord account settings. Supports two operations (can be combined):  1. **Webhook identity** - Set the default display name and avatar that appear as the message author on every post. These are account-level defaults; individual posts can override them via platformSpecificData.webhookUsername / webhookAvatarUrl.  2. **Switch channel** - Move the connection to a different channel in the same guild. A new webhook is automatically created in the target channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\DiscordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$update_discord_settings_request = {"accountId":"abc123","webhookUsername":"My Brand","webhookAvatarUrl":"https://example.com/logo.png"}; // \Late\Model\UpdateDiscordSettingsRequest

try {
    $result = $apiInstance->updateDiscordSettings($account_id, $update_discord_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscordApi->updateDiscordSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**|  | |
| **update_discord_settings_request** | [**\Late\Model\UpdateDiscordSettingsRequest**](../Model/UpdateDiscordSettingsRequest.md)|  | |

### Return type

[**\Late\Model\UpdateDiscordSettings200Response**](../Model/UpdateDiscordSettings200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
