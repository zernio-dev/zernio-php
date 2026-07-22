# Zernio\DiscordApi

Discord-specific endpoints for managing webhook identity (display name and avatar), switching channels, and listing guild channels.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addDiscordMemberRole()**](DiscordApi.md#addDiscordMemberRole) | **PUT** /v1/discord/guilds/{guildId}/members/{userId}/roles/{roleId} | Assign a role to a guild member |
| [**createDiscordGuildRole()**](DiscordApi.md#createDiscordGuildRole) | **POST** /v1/discord/guilds/{guildId}/roles | Create a Discord guild role |
| [**createDiscordScheduledEvent()**](DiscordApi.md#createDiscordScheduledEvent) | **POST** /v1/discord/guilds/{guildId}/events | Create a Discord scheduled event |
| [**createDiscordThread()**](DiscordApi.md#createDiscordThread) | **POST** /v1/discord/channels/{channelId}/threads | Create a Discord public thread |
| [**crosspostDiscordMessage()**](DiscordApi.md#crosspostDiscordMessage) | **POST** /v1/discord/channels/{channelId}/messages/{messageId}/crosspost | Crosspost Discord message |
| [**deleteDiscordGuildRole()**](DiscordApi.md#deleteDiscordGuildRole) | **DELETE** /v1/discord/guilds/{guildId}/roles/{roleId} | Delete a Discord guild role |
| [**deleteDiscordMessage()**](DiscordApi.md#deleteDiscordMessage) | **DELETE** /v1/discord/channels/{channelId}/messages/{messageId} | Delete a Discord channel message |
| [**deleteDiscordScheduledEvent()**](DiscordApi.md#deleteDiscordScheduledEvent) | **DELETE** /v1/discord/guilds/{guildId}/events/{eventId} | Delete a Discord scheduled event |
| [**editDiscordGuildRole()**](DiscordApi.md#editDiscordGuildRole) | **PATCH** /v1/discord/guilds/{guildId}/roles/{roleId} | Edit a Discord guild role |
| [**getDiscordChannels()**](DiscordApi.md#getDiscordChannels) | **GET** /v1/accounts/{accountId}/discord-channels | List Discord guild channels |
| [**getDiscordGuildMember()**](DiscordApi.md#getDiscordGuildMember) | **GET** /v1/discord/guilds/{guildId}/members/{userId} | Get a Discord guild member |
| [**getDiscordScheduledEvent()**](DiscordApi.md#getDiscordScheduledEvent) | **GET** /v1/discord/guilds/{guildId}/events/{eventId} | Get a Discord scheduled event |
| [**getDiscordSettings()**](DiscordApi.md#getDiscordSettings) | **GET** /v1/accounts/{accountId}/discord-settings | Get Discord account settings |
| [**listDiscordGuildMembers()**](DiscordApi.md#listDiscordGuildMembers) | **GET** /v1/discord/guilds/{guildId}/members | List Discord guild members |
| [**listDiscordGuildRoles()**](DiscordApi.md#listDiscordGuildRoles) | **GET** /v1/discord/guilds/{guildId}/roles | List Discord guild roles |
| [**listDiscordPinnedMessages()**](DiscordApi.md#listDiscordPinnedMessages) | **GET** /v1/discord/channels/{channelId}/pins | List pinned messages |
| [**listDiscordScheduledEvents()**](DiscordApi.md#listDiscordScheduledEvents) | **GET** /v1/discord/guilds/{guildId}/events | List Discord scheduled events |
| [**pinDiscordMessage()**](DiscordApi.md#pinDiscordMessage) | **PUT** /v1/discord/channels/{channelId}/pins/{messageId} | Pin a Discord message |
| [**removeDiscordMemberRole()**](DiscordApi.md#removeDiscordMemberRole) | **DELETE** /v1/discord/guilds/{guildId}/members/{userId}/roles/{roleId} | Remove a role from a guild member |
| [**searchDiscordGuildMembers()**](DiscordApi.md#searchDiscordGuildMembers) | **GET** /v1/discord/guilds/{guildId}/members/search | Search Discord guild members |
| [**sendDiscordDirectMessage()**](DiscordApi.md#sendDiscordDirectMessage) | **POST** /v1/discord/dms | Send a Discord Direct Message |
| [**unpinDiscordMessage()**](DiscordApi.md#unpinDiscordMessage) | **DELETE** /v1/discord/channels/{channelId}/pins/{messageId} | Unpin a Discord message |
| [**updateDiscordScheduledEvent()**](DiscordApi.md#updateDiscordScheduledEvent) | **PATCH** /v1/discord/guilds/{guildId}/events/{eventId} | Update a Discord scheduled event |
| [**updateDiscordSettings()**](DiscordApi.md#updateDiscordSettings) | **PATCH** /v1/accounts/{accountId}/discord-settings | Update Discord settings |


## `addDiscordMemberRole()`

```php
addDiscordMemberRole($guild_id, $user_id, $role_id, $account_id): \Zernio\Model\AddDiscordMemberRole200Response
```

Assign a role to a guild member

Assign one role to one member. Idempotent on Discord's side — re-running on a member who already has the role is a 204 no-op.  Path shape mirrors Discord's own API (`PUT /guilds/{guild}/members/{user}/roles/{role}`) for zero-translation mental mapping.  Bot needs MANAGE_ROLES permission in the guild AND its highest role must be above the target role (Discord hierarchy rule). The `@everyone` role (where roleId == guildId) cannot be assigned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\DiscordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$user_id = 'user_id_example'; // string | Discord user snowflake to assign the role to.
$role_id = 'role_id_example'; // string
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->addDiscordMemberRole($guild_id, $user_id, $role_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscordApi->addDiscordMemberRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **user_id** | **string**| Discord user snowflake to assign the role to. | |
| **role_id** | **string**|  | |
| **account_id** | **string**|  | |

### Return type

[**\Zernio\Model\AddDiscordMemberRole200Response**](../Model/AddDiscordMemberRole200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDiscordGuildRole()`

```php
createDiscordGuildRole($guild_id, $account_id, $create_discord_guild_role_request): \Zernio\Model\CreateDiscordGuildRole201Response
```

Create a Discord guild role

Creates a new role in the guild.  Requires the bot to hold the Manage Roles permission. Guilds that added the Zernio bot before role management shipped must re-invite it, because Discord applies the permission set at invite time.  Discord's role hierarchy applies: the bot cannot create a role positioned at or above its own highest role, and cannot grant permissions it does not itself hold. Either attempt returns a 403 carrying Discord's own error.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\DiscordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string | Discord guild snowflake ID
$account_id = 'account_id_example'; // string | SocialAccount _id of the Discord account bound to this guild
$create_discord_guild_role_request = {"name":"Moderators","color":16711680,"hoist":true,"mentionable":false}; // \Zernio\Model\CreateDiscordGuildRoleRequest

try {
    $result = $apiInstance->createDiscordGuildRole($guild_id, $account_id, $create_discord_guild_role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscordApi->createDiscordGuildRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**| Discord guild snowflake ID | |
| **account_id** | **string**| SocialAccount _id of the Discord account bound to this guild | |
| **create_discord_guild_role_request** | [**\Zernio\Model\CreateDiscordGuildRoleRequest**](../Model/CreateDiscordGuildRoleRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateDiscordGuildRole201Response**](../Model/CreateDiscordGuildRole201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDiscordScheduledEvent()`

```php
createDiscordScheduledEvent($guild_id, $create_discord_scheduled_event_request): \Zernio\Model\CreateDiscordScheduledEvent200Response
```

Create a Discord scheduled event

Create a guild scheduled event. Three event types, selected via the discriminator on `entity.type`:    - `external` — off-platform (Zoom, in-person, livestream). Requires     both `location` and `endsAt`. Most common type for scheduler     integrations.   - `voice` — hosted in a Discord voice channel. Requires `channelId`.   - `stage` — hosted in a Discord stage channel. Requires `channelId`.  Bot needs MANAGE_EVENTS in the guild. Existing installs (pre-events PR) need a re-invite OR a server admin manually granting the permission — see route header for details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\DiscordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$create_discord_scheduled_event_request = {"accountId":"65a1b2c3d4e5f60718293a4b","name":"Weekly AMA","description":"Bring your questions about the roadmap.","startsAt":"2026-06-15T18:00:00Z","entity":{"type":"external","location":"https://zoom.us/j/123","endsAt":"2026-06-15T19:00:00Z"}}; // \Zernio\Model\CreateDiscordScheduledEventRequest

try {
    $result = $apiInstance->createDiscordScheduledEvent($guild_id, $create_discord_scheduled_event_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscordApi->createDiscordScheduledEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **create_discord_scheduled_event_request** | [**\Zernio\Model\CreateDiscordScheduledEventRequest**](../Model/CreateDiscordScheduledEventRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateDiscordScheduledEvent200Response**](../Model/CreateDiscordScheduledEvent200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDiscordThread()`

```php
createDiscordThread($channel_id, $account_id, $create_discord_thread_request): \Zernio\Model\CreateDiscordThread200Response
```

Create a Discord public thread

Creates a public thread in a channel. Pass `messageId` to start the thread from an existing message, or omit it to create a standalone thread.  Threads created here are always public. Requires the bot to hold Create Public Threads, which the Zernio bot requests at install time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\DiscordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string | Discord channel snowflake ID
$account_id = 'account_id_example'; // string | SocialAccount _id of the Discord account bound to this channel's guild
$create_discord_thread_request = {"name":"Release 2.4 discussion","autoArchiveDuration":1440}; // \Zernio\Model\CreateDiscordThreadRequest

try {
    $result = $apiInstance->createDiscordThread($channel_id, $account_id, $create_discord_thread_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscordApi->createDiscordThread: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**| Discord channel snowflake ID | |
| **account_id** | **string**| SocialAccount _id of the Discord account bound to this channel&#39;s guild | |
| **create_discord_thread_request** | [**\Zernio\Model\CreateDiscordThreadRequest**](../Model/CreateDiscordThreadRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateDiscordThread200Response**](../Model/CreateDiscordThread200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `crosspostDiscordMessage()`

```php
crosspostDiscordMessage($channel_id, $message_id, $account_id): \Zernio\Model\CrosspostDiscordMessage200Response
```

Crosspost Discord message

Publishes a message from an announcement channel so it propagates to every server following that channel.  The source channel must be an announcement channel. Calling this on a regular text channel returns a 400 before Discord is contacted, because Discord's own error for this case is opaque.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\DiscordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string | Discord announcement channel snowflake ID
$message_id = 'message_id_example'; // string | Discord message snowflake ID
$account_id = 'account_id_example'; // string | SocialAccount _id of the Discord account bound to this channel's guild

try {
    $result = $apiInstance->crosspostDiscordMessage($channel_id, $message_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscordApi->crosspostDiscordMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**| Discord announcement channel snowflake ID | |
| **message_id** | **string**| Discord message snowflake ID | |
| **account_id** | **string**| SocialAccount _id of the Discord account bound to this channel&#39;s guild | |

### Return type

[**\Zernio\Model\CrosspostDiscordMessage200Response**](../Model/CrosspostDiscordMessage200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDiscordGuildRole()`

```php
deleteDiscordGuildRole($guild_id, $role_id, $account_id): \Zernio\Model\UpdateYoutubeDefaultPlaylist200Response
```

Delete a Discord guild role

Permanently deletes a role from the guild and removes it from every member. This cannot be undone.  Requires the bot to hold Manage Roles, and the target role must sit below the bot's highest role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\DiscordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string | Discord guild snowflake ID
$role_id = 'role_id_example'; // string | Discord role snowflake ID
$account_id = 'account_id_example'; // string | SocialAccount _id of the Discord account bound to this guild

try {
    $result = $apiInstance->deleteDiscordGuildRole($guild_id, $role_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscordApi->deleteDiscordGuildRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**| Discord guild snowflake ID | |
| **role_id** | **string**| Discord role snowflake ID | |
| **account_id** | **string**| SocialAccount _id of the Discord account bound to this guild | |

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

## `deleteDiscordMessage()`

```php
deleteDiscordMessage($channel_id, $message_id, $account_id): \Zernio\Model\UpdateYoutubeDefaultPlaylist200Response
```

Delete a Discord channel message

Deletes a message from a channel, for moderation and cleanup. This cannot be undone.  Deleting a message the bot did not send requires the bot to hold the Manage Messages permission, which the Zernio bot requests at install time. Deleting the bot's own message needs no extra permission.  Ownership is verified by resolving the channel's guild and confirming the caller owns a Discord account bound to it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\DiscordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string | Discord channel snowflake ID
$message_id = 'message_id_example'; // string | Discord message snowflake ID
$account_id = 'account_id_example'; // string | SocialAccount _id of the Discord account bound to this channel's guild

try {
    $result = $apiInstance->deleteDiscordMessage($channel_id, $message_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscordApi->deleteDiscordMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**| Discord channel snowflake ID | |
| **message_id** | **string**| Discord message snowflake ID | |
| **account_id** | **string**| SocialAccount _id of the Discord account bound to this channel&#39;s guild | |

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

## `deleteDiscordScheduledEvent()`

```php
deleteDiscordScheduledEvent($guild_id, $event_id, $account_id): \Zernio\Model\DeleteDiscordScheduledEvent200Response
```

Delete a Discord scheduled event

Hard-delete an event. Use PATCH with `status: 'cancelled'` instead if you want the event preserved in the guild's history.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\DiscordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$event_id = 'event_id_example'; // string
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->deleteDiscordScheduledEvent($guild_id, $event_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscordApi->deleteDiscordScheduledEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **event_id** | **string**|  | |
| **account_id** | **string**|  | |

### Return type

[**\Zernio\Model\DeleteDiscordScheduledEvent200Response**](../Model/DeleteDiscordScheduledEvent200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editDiscordGuildRole()`

```php
editDiscordGuildRole($guild_id, $role_id, $account_id, $edit_discord_guild_role_request): \Zernio\Model\CreateDiscordGuildRole201Response
```

Edit a Discord guild role

Updates a role's name, color, hoist, mentionable flag, or permission bitfield. At least one field must be supplied. Omitted fields are left unchanged.  Requires the bot to hold Manage Roles, and the target role must sit below the bot's highest role. See the create-role operation for the re-invite requirement.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\DiscordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string | Discord guild snowflake ID
$role_id = 'role_id_example'; // string | Discord role snowflake ID
$account_id = 'account_id_example'; // string | SocialAccount _id of the Discord account bound to this guild
$edit_discord_guild_role_request = {"name":"Senior Moderators","mentionable":true}; // \Zernio\Model\EditDiscordGuildRoleRequest

try {
    $result = $apiInstance->editDiscordGuildRole($guild_id, $role_id, $account_id, $edit_discord_guild_role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscordApi->editDiscordGuildRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**| Discord guild snowflake ID | |
| **role_id** | **string**| Discord role snowflake ID | |
| **account_id** | **string**| SocialAccount _id of the Discord account bound to this guild | |
| **edit_discord_guild_role_request** | [**\Zernio\Model\EditDiscordGuildRoleRequest**](../Model/EditDiscordGuildRoleRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateDiscordGuildRole201Response**](../Model/CreateDiscordGuildRole201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDiscordChannels()`

```php
getDiscordChannels($account_id): \Zernio\Model\GetDiscordChannels200Response
```

List Discord guild channels

Returns the text, announcement, and forum channels in the connected Discord guild. Use this to discover available channels when switching the connected channel via PATCH /v1/accounts/{accountId}/discord-settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\DiscordApi(
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

[**\Zernio\Model\GetDiscordChannels200Response**](../Model/GetDiscordChannels200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDiscordGuildMember()`

```php
getDiscordGuildMember($guild_id, $user_id, $account_id): \Zernio\Model\GetDiscordGuildMember200Response
```

Get a Discord guild member

Fetch a single guild member by Discord user id.  Does not require the privileged Server Members Intent, so this works even where the full member listing returns 403.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\DiscordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$user_id = 'user_id_example'; // string | Discord user snowflake.
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->getDiscordGuildMember($guild_id, $user_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscordApi->getDiscordGuildMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **user_id** | **string**| Discord user snowflake. | |
| **account_id** | **string**|  | |

### Return type

[**\Zernio\Model\GetDiscordGuildMember200Response**](../Model/GetDiscordGuildMember200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDiscordScheduledEvent()`

```php
getDiscordScheduledEvent($guild_id, $event_id, $account_id): \Zernio\Model\CreateDiscordScheduledEvent200Response
```

Get a Discord scheduled event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\DiscordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$event_id = 'event_id_example'; // string
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->getDiscordScheduledEvent($guild_id, $event_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscordApi->getDiscordScheduledEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **event_id** | **string**|  | |
| **account_id** | **string**|  | |

### Return type

[**\Zernio\Model\CreateDiscordScheduledEvent200Response**](../Model/CreateDiscordScheduledEvent200Response.md)

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
getDiscordSettings($account_id): \Zernio\Model\GetDiscordSettings200Response
```

Get Discord account settings

Returns the current Discord account settings including webhook identity (display name and avatar), connected channel, and guild information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\DiscordApi(
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

[**\Zernio\Model\GetDiscordSettings200Response**](../Model/GetDiscordSettings200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDiscordGuildMembers()`

```php
listDiscordGuildMembers($guild_id, $account_id, $limit, $after): \Zernio\Model\ListDiscordGuildMembers200Response
```

List Discord guild members

Cursor-paginated list of guild members. Returns Discord's raw member objects so callers can build community-ops automation (e.g. \"add role to all members joined in the last 7 days\") on the actual platform shape.  **Important:** this endpoint requires the privileged \"Server Members Intent\" on the Discord application. If the intent is not enabled, Discord rejects the call and this endpoint returns **403**. Single member lookup and prefix search (see the sibling endpoints) do not need the intent.  Pagination: pass `after` = the last `user.id` from the previous page. Omit on the first call. Response includes a `nextCursor` and `hasMore` flag so callers don't need to know Discord's pagination shape.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\DiscordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$account_id = 'account_id_example'; // string
$limit = 100; // int | Page size (1-1000).
$after = 'after_example'; // string | Snowflake of the last member from the previous page.

try {
    $result = $apiInstance->listDiscordGuildMembers($guild_id, $account_id, $limit, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscordApi->listDiscordGuildMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **account_id** | **string**|  | |
| **limit** | **int**| Page size (1-1000). | [optional] [default to 100] |
| **after** | **string**| Snowflake of the last member from the previous page. | [optional] |

### Return type

[**\Zernio\Model\ListDiscordGuildMembers200Response**](../Model/ListDiscordGuildMembers200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDiscordGuildRoles()`

```php
listDiscordGuildRoles($guild_id, $account_id): \Zernio\Model\ListDiscordGuildRoles200Response
```

List Discord guild roles

Returns all roles in a Discord guild. Useful for building role-mention pickers, role-permission UIs, or finding the role ID before calling the role-assign endpoint.  Roles are returned unordered — sort client-side by `position` if you need Discord's UI ordering.  Caller must pass `accountId` of a Discord SocialAccount bound to this guild (route verifies team access + guild match).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\DiscordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string | Discord guild snowflake ID
$account_id = 'account_id_example'; // string | SocialAccount _id of the Discord account bound to this guild

try {
    $result = $apiInstance->listDiscordGuildRoles($guild_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscordApi->listDiscordGuildRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**| Discord guild snowflake ID | |
| **account_id** | **string**| SocialAccount _id of the Discord account bound to this guild | |

### Return type

[**\Zernio\Model\ListDiscordGuildRoles200Response**](../Model/ListDiscordGuildRoles200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDiscordPinnedMessages()`

```php
listDiscordPinnedMessages($channel_id, $account_id): \Zernio\Model\ListDiscordPinnedMessages200Response
```

List pinned messages

Returns the channel's pinned messages, sorted most-recently-pinned first. Discord caps a channel at 50 pinned messages and returns the full list unpaginated.  Bot needs READ_MESSAGE_HISTORY in the channel (granted by default BOT_PERMISSIONS).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\DiscordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string | Discord channel snowflake.
$account_id = 'account_id_example'; // string | SocialAccount _id of any Discord account in the same guild.

try {
    $result = $apiInstance->listDiscordPinnedMessages($channel_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscordApi->listDiscordPinnedMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**| Discord channel snowflake. | |
| **account_id** | **string**| SocialAccount _id of any Discord account in the same guild. | |

### Return type

[**\Zernio\Model\ListDiscordPinnedMessages200Response**](../Model/ListDiscordPinnedMessages200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDiscordScheduledEvents()`

```php
listDiscordScheduledEvents($guild_id, $account_id, $with_user_count): \Zernio\Model\ListDiscordScheduledEvents200Response
```

List Discord scheduled events

Return all scheduled events in the guild. Events are distinct from messages — they appear in the server's Events panel and Discord auto-notifies interested members ahead of start time.  Pass `withUserCount=true` to include `user_count` (number of members who RSVP'd) on each event. Useful for surfacing engagement.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\DiscordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$account_id = 'account_id_example'; // string
$with_user_count = True; // bool | Include user_count on each event.

try {
    $result = $apiInstance->listDiscordScheduledEvents($guild_id, $account_id, $with_user_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscordApi->listDiscordScheduledEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **account_id** | **string**|  | |
| **with_user_count** | **bool**| Include user_count on each event. | [optional] |

### Return type

[**\Zernio\Model\ListDiscordScheduledEvents200Response**](../Model/ListDiscordScheduledEvents200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pinDiscordMessage()`

```php
pinDiscordMessage($channel_id, $message_id, $account_id): \Zernio\Model\PinDiscordMessage200Response
```

Pin a Discord message

Pin a specific message in a channel. Path shape mirrors Discord's own API (`PUT /channels/{cid}/pins/{mid}`).  Idempotent — re-pinning an already-pinned message is a 204 no-op.  Constraints:   - Bot needs MANAGE_MESSAGES in the channel.   - 50-pin cap per channel — hitting it returns 400 (Discord-side).     Caller should unpin one first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\DiscordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$message_id = 'message_id_example'; // string
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->pinDiscordMessage($channel_id, $message_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscordApi->pinDiscordMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **message_id** | **string**|  | |
| **account_id** | **string**|  | |

### Return type

[**\Zernio\Model\PinDiscordMessage200Response**](../Model/PinDiscordMessage200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeDiscordMemberRole()`

```php
removeDiscordMemberRole($guild_id, $user_id, $role_id, $account_id): \Zernio\Model\RemoveDiscordMemberRole200Response
```

Remove a role from a guild member

Remove one role from one member. Idempotent — removing a role the member doesn't have returns 204 no-op.  Same permission + hierarchy constraints as the PUT counterpart.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\DiscordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$user_id = 'user_id_example'; // string
$role_id = 'role_id_example'; // string
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->removeDiscordMemberRole($guild_id, $user_id, $role_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscordApi->removeDiscordMemberRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **user_id** | **string**|  | |
| **role_id** | **string**|  | |
| **account_id** | **string**|  | |

### Return type

[**\Zernio\Model\RemoveDiscordMemberRole200Response**](../Model/RemoveDiscordMemberRole200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchDiscordGuildMembers()`

```php
searchDiscordGuildMembers($guild_id, $account_id, $query, $limit): \Zernio\Model\SearchDiscordGuildMembers200Response
```

Search Discord guild members

Search guild members whose username or nickname **starts with** the query (Discord matches prefixes only, not substrings).  Does not require the privileged Server Members Intent, so this works even where the full member listing returns 403.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\DiscordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$account_id = 'account_id_example'; // string
$query = 'query_example'; // string | Username or nickname prefix to match.
$limit = 25; // int

try {
    $result = $apiInstance->searchDiscordGuildMembers($guild_id, $account_id, $query, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscordApi->searchDiscordGuildMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **account_id** | **string**|  | |
| **query** | **string**| Username or nickname prefix to match. | |
| **limit** | **int**|  | [optional] [default to 25] |

### Return type

[**\Zernio\Model\SearchDiscordGuildMembers200Response**](../Model/SearchDiscordGuildMembers200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendDiscordDirectMessage()`

```php
sendDiscordDirectMessage($send_discord_direct_message_request): \Zernio\Model\SendDiscordDirectMessage200Response
```

Send a Discord Direct Message

Send a 1:1 Direct Message from the bot to a Discord user (by snowflake ID). Supports the same payload shape as channel posts — content, embeds, media attachments, and TTS.  Constraints (Discord platform limits):   - The bot can only DM users it shares at least one guild with.   - If the recipient has DMs disabled for non-friends, Discord returns 403     (surfaces as a 502 platform error).   - `content` capped at 2,000 chars.   - At least one of `content`, `embeds`, or `attachments` is required.   - The recipient must be identified by Discord snowflake ID (not username).  This is a dedicated endpoint rather than a `POST /v1/posts` variant because DMs are 1:1 operational messages (onboarding, billing reminders, support pings) with a different lifecycle than scheduled channel posts. DMs are not persisted to `Post` / `ExternalPost` and are always sent immediately.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\DiscordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_discord_direct_message_request = {"accountId":"65a1b2c3d4e5f60718293a4b","userId":"1234567890123456789","content":"Welcome to Acme! Reply STOP to opt out."}; // \Zernio\Model\SendDiscordDirectMessageRequest

try {
    $result = $apiInstance->sendDiscordDirectMessage($send_discord_direct_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscordApi->sendDiscordDirectMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_discord_direct_message_request** | [**\Zernio\Model\SendDiscordDirectMessageRequest**](../Model/SendDiscordDirectMessageRequest.md)|  | |

### Return type

[**\Zernio\Model\SendDiscordDirectMessage200Response**](../Model/SendDiscordDirectMessage200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unpinDiscordMessage()`

```php
unpinDiscordMessage($channel_id, $message_id, $account_id): \Zernio\Model\UnpinDiscordMessage200Response
```

Unpin a Discord message

Unpin a message. Same MANAGE_MESSAGES permission requirement as pin. Idempotent — unpinning a non-pinned message is a 204 no-op.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\DiscordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string
$message_id = 'message_id_example'; // string
$account_id = 'account_id_example'; // string

try {
    $result = $apiInstance->unpinDiscordMessage($channel_id, $message_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscordApi->unpinDiscordMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**|  | |
| **message_id** | **string**|  | |
| **account_id** | **string**|  | |

### Return type

[**\Zernio\Model\UnpinDiscordMessage200Response**](../Model/UnpinDiscordMessage200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDiscordScheduledEvent()`

```php
updateDiscordScheduledEvent($guild_id, $event_id, $update_discord_scheduled_event_request): \Zernio\Model\CreateDiscordScheduledEvent200Response
```

Update a Discord scheduled event

Patch any subset of fields. Passing `status: 'cancelled'` is how you cancel an event — Discord doesn't have a dedicated cancel endpoint, it's a status transition.  Most status transitions Discord enforces (you can't go SCHEDULED → COMPLETED directly). The common consumer case is SCHEDULED → CANCELED.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\DiscordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guild_id = 'guild_id_example'; // string
$event_id = 'event_id_example'; // string
$update_discord_scheduled_event_request = {"accountId":"65a1b2c3d4e5f60718293a4b","status":"cancelled"}; // \Zernio\Model\UpdateDiscordScheduledEventRequest

try {
    $result = $apiInstance->updateDiscordScheduledEvent($guild_id, $event_id, $update_discord_scheduled_event_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscordApi->updateDiscordScheduledEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guild_id** | **string**|  | |
| **event_id** | **string**|  | |
| **update_discord_scheduled_event_request** | [**\Zernio\Model\UpdateDiscordScheduledEventRequest**](../Model/UpdateDiscordScheduledEventRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateDiscordScheduledEvent200Response**](../Model/CreateDiscordScheduledEvent200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDiscordSettings()`

```php
updateDiscordSettings($account_id, $update_discord_settings_request): \Zernio\Model\UpdateDiscordSettings200Response
```

Update Discord settings

Update Discord account settings. Supports two operations (can be combined):  1. **Webhook identity** - Set the default display name and avatar that appear as the message author on every post. These are account-level defaults; individual posts can override them via platformSpecificData.webhookUsername / webhookAvatarUrl.  2. **Switch channel** - Move the connection to a different channel in the same guild. A new webhook is automatically created in the target channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\DiscordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string
$update_discord_settings_request = {"webhookUsername":"My Brand","webhookAvatarUrl":"https://example.com/logo.png"}; // \Zernio\Model\UpdateDiscordSettingsRequest

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
| **update_discord_settings_request** | [**\Zernio\Model\UpdateDiscordSettingsRequest**](../Model/UpdateDiscordSettingsRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateDiscordSettings200Response**](../Model/UpdateDiscordSettings200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
