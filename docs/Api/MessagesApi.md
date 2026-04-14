# Late\MessagesApi

Unified inbox API for managing conversations and direct messages across all connected accounts. All endpoints aggregate data from multiple social accounts in a single API call. Requires Inbox addon.

All URIs are relative to https://zernio.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addMessageReaction()**](MessagesApi.md#addMessageReaction) | **POST** /v1/inbox/conversations/{conversationId}/messages/{messageId}/reactions | Add reaction |
| [**createInboxConversation()**](MessagesApi.md#createInboxConversation) | **POST** /v1/inbox/conversations | Create conversation |
| [**deleteInboxMessage()**](MessagesApi.md#deleteInboxMessage) | **DELETE** /v1/inbox/conversations/{conversationId}/messages/{messageId} | Delete message |
| [**editInboxMessage()**](MessagesApi.md#editInboxMessage) | **PATCH** /v1/inbox/conversations/{conversationId}/messages/{messageId} | Edit message |
| [**getInboxConversation()**](MessagesApi.md#getInboxConversation) | **GET** /v1/inbox/conversations/{conversationId} | Get conversation |
| [**getInboxConversationMessages()**](MessagesApi.md#getInboxConversationMessages) | **GET** /v1/inbox/conversations/{conversationId}/messages | List messages |
| [**listInboxConversations()**](MessagesApi.md#listInboxConversations) | **GET** /v1/inbox/conversations | List conversations |
| [**removeMessageReaction()**](MessagesApi.md#removeMessageReaction) | **DELETE** /v1/inbox/conversations/{conversationId}/messages/{messageId}/reactions | Remove reaction |
| [**sendInboxMessage()**](MessagesApi.md#sendInboxMessage) | **POST** /v1/inbox/conversations/{conversationId}/messages | Send message |
| [**sendTypingIndicator()**](MessagesApi.md#sendTypingIndicator) | **POST** /v1/inbox/conversations/{conversationId}/typing | Send typing indicator |
| [**updateInboxConversation()**](MessagesApi.md#updateInboxConversation) | **PUT** /v1/inbox/conversations/{conversationId} | Update conversation status |
| [**uploadMediaDirect()**](MessagesApi.md#uploadMediaDirect) | **POST** /v1/media/upload-direct | Upload media file |


## `addMessageReaction()`

```php
addMessageReaction($conversation_id, $message_id, $add_message_reaction_request): \Late\Model\UpdateYoutubeDefaultPlaylist200Response
```

Add reaction

Add an emoji reaction to a message. Platform support: - Telegram: Supports a subset of Unicode emoji reactions - WhatsApp: Supports any standard emoji (one reaction per message per sender) - All others: Returns 400 (not supported)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | The conversation ID
$message_id = 'message_id_example'; // string | The platform message ID to react to
$add_message_reaction_request = new \Late\Model\AddMessageReactionRequest(); // \Late\Model\AddMessageReactionRequest

try {
    $result = $apiInstance->addMessageReaction($conversation_id, $message_id, $add_message_reaction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->addMessageReaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| The conversation ID | |
| **message_id** | **string**| The platform message ID to react to | |
| **add_message_reaction_request** | [**\Late\Model\AddMessageReactionRequest**](../Model/AddMessageReactionRequest.md)|  | |

### Return type

[**\Late\Model\UpdateYoutubeDefaultPlaylist200Response**](../Model/UpdateYoutubeDefaultPlaylist200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createInboxConversation()`

```php
createInboxConversation($create_inbox_conversation_request): \Late\Model\CreateInboxConversation201Response
```

Create conversation

Initiate a new direct message conversation with a specified user. If a conversation already exists with the recipient, the message is added to the existing thread.  Currently supported platforms: Twitter/X only. Other platforms will return PLATFORM_NOT_SUPPORTED.  DM eligibility: Before sending, the endpoint checks if the recipient accepts DMs from your account (via the receives_your_dm field). If not, a 422 error with code DM_NOT_ALLOWED is returned. You can skip this check with skipDmCheck: true if you have already verified eligibility.  X API tier requirement: DM write endpoints require X API Pro tier ($5,000/month) or Enterprise access. This applies to BYOK (Bring Your Own Key) users who provide their own X API credentials.  Rate limits: 200 requests per 15 minutes, 1,000 per 24 hours per user, 15,000 per 24 hours per app (shared across all DM endpoints).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_inbox_conversation_request = new \Late\Model\CreateInboxConversationRequest(); // \Late\Model\CreateInboxConversationRequest

try {
    $result = $apiInstance->createInboxConversation($create_inbox_conversation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->createInboxConversation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_inbox_conversation_request** | [**\Late\Model\CreateInboxConversationRequest**](../Model/CreateInboxConversationRequest.md)|  | |

### Return type

[**\Late\Model\CreateInboxConversation201Response**](../Model/CreateInboxConversation201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteInboxMessage()`

```php
deleteInboxMessage($conversation_id, $message_id, $account_id): \Late\Model\UpdateYoutubeDefaultPlaylist200Response
```

Delete message

Delete a message from a conversation. Platform support varies: - Telegram: Full delete (bot's own messages anytime, others if admin) - X/Twitter: Full delete (own DM events only) - Bluesky: Delete for self only (recipient still sees it) - Reddit: Delete from sender's view only - Facebook, Instagram, WhatsApp: Not supported (returns 400)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | The conversation ID
$message_id = 'message_id_example'; // string | The platform message ID to delete
$account_id = 'account_id_example'; // string | Social account ID

try {
    $result = $apiInstance->deleteInboxMessage($conversation_id, $message_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->deleteInboxMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| The conversation ID | |
| **message_id** | **string**| The platform message ID to delete | |
| **account_id** | **string**| Social account ID | |

### Return type

[**\Late\Model\UpdateYoutubeDefaultPlaylist200Response**](../Model/UpdateYoutubeDefaultPlaylist200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editInboxMessage()`

```php
editInboxMessage($conversation_id, $message_id, $edit_inbox_message_request): \Late\Model\EditInboxMessage200Response
```

Edit message

Edit the text and/or reply markup of a previously sent Telegram message. Only supported for Telegram. Returns 400 for other platforms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | The conversation ID
$message_id = 'message_id_example'; // string | The Telegram message ID to edit
$edit_inbox_message_request = new \Late\Model\EditInboxMessageRequest(); // \Late\Model\EditInboxMessageRequest

try {
    $result = $apiInstance->editInboxMessage($conversation_id, $message_id, $edit_inbox_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->editInboxMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| The conversation ID | |
| **message_id** | **string**| The Telegram message ID to edit | |
| **edit_inbox_message_request** | [**\Late\Model\EditInboxMessageRequest**](../Model/EditInboxMessageRequest.md)|  | |

### Return type

[**\Late\Model\EditInboxMessage200Response**](../Model/EditInboxMessage200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboxConversation()`

```php
getInboxConversation($conversation_id, $account_id): \Late\Model\GetInboxConversation200Response
```

Get conversation

Retrieve details and metadata for a specific conversation. Requires accountId query parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | The conversation ID (id field from list conversations endpoint). This is the platform-specific conversation identifier, not an internal database ID.
$account_id = 'account_id_example'; // string | The social account ID

try {
    $result = $apiInstance->getInboxConversation($conversation_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->getInboxConversation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| The conversation ID (id field from list conversations endpoint). This is the platform-specific conversation identifier, not an internal database ID. | |
| **account_id** | **string**| The social account ID | |

### Return type

[**\Late\Model\GetInboxConversation200Response**](../Model/GetInboxConversation200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInboxConversationMessages()`

```php
getInboxConversationMessages($conversation_id, $account_id): \Late\Model\GetInboxConversationMessages200Response
```

List messages

Fetch messages for a specific conversation. Requires accountId query parameter.  Twitter/X limitation: X's encrypted \"X Chat\" messages are not accessible via the API. Conversations where the other participant uses encrypted X Chat may only show your outgoing messages. See the list conversations endpoint for more details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | The conversation ID (id field from list conversations endpoint). This is the platform-specific conversation identifier, not an internal database ID.
$account_id = 'account_id_example'; // string | Social account ID

try {
    $result = $apiInstance->getInboxConversationMessages($conversation_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->getInboxConversationMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| The conversation ID (id field from list conversations endpoint). This is the platform-specific conversation identifier, not an internal database ID. | |
| **account_id** | **string**| Social account ID | |

### Return type

[**\Late\Model\GetInboxConversationMessages200Response**](../Model/GetInboxConversationMessages200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInboxConversations()`

```php
listInboxConversations($profile_id, $platform, $status, $sort_order, $limit, $cursor, $account_id): \Late\Model\ListInboxConversations200Response
```

List conversations

Fetch conversations (DMs) from all connected messaging accounts in a single API call. Supports filtering by profile and platform. Results are aggregated and deduplicated. Supported platforms: Facebook, Instagram, Twitter/X, Bluesky, Reddit, Telegram.  Twitter/X limitation: X has replaced traditional DMs with encrypted \"X Chat\" for many accounts. Messages sent or received through encrypted X Chat are not accessible via X's API (the /2/dm_events endpoint only returns legacy unencrypted DMs). This means some Twitter/X conversations may show only outgoing messages or appear empty. This is an X platform limitation that affects all third-party applications. See X's docs on encrypted messaging for more details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Filter by profile ID
$platform = 'platform_example'; // string | Filter by platform
$status = 'status_example'; // string | Filter by conversation status
$sort_order = 'desc'; // string | Sort order by updated time
$limit = 50; // int | Maximum number of conversations to return
$cursor = 'cursor_example'; // string | Pagination cursor for next page
$account_id = 'account_id_example'; // string | Filter by specific social account ID

try {
    $result = $apiInstance->listInboxConversations($profile_id, $platform, $status, $sort_order, $limit, $cursor, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->listInboxConversations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Filter by profile ID | [optional] |
| **platform** | **string**| Filter by platform | [optional] |
| **status** | **string**| Filter by conversation status | [optional] |
| **sort_order** | **string**| Sort order by updated time | [optional] [default to &#39;desc&#39;] |
| **limit** | **int**| Maximum number of conversations to return | [optional] [default to 50] |
| **cursor** | **string**| Pagination cursor for next page | [optional] |
| **account_id** | **string**| Filter by specific social account ID | [optional] |

### Return type

[**\Late\Model\ListInboxConversations200Response**](../Model/ListInboxConversations200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeMessageReaction()`

```php
removeMessageReaction($conversation_id, $message_id, $account_id): \Late\Model\UpdateYoutubeDefaultPlaylist200Response
```

Remove reaction

Remove a reaction from a message. Platform support: - Telegram: Send empty reaction array to clear - WhatsApp: Send empty emoji to remove - All others: Returns 400 (not supported)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | The conversation ID
$message_id = 'message_id_example'; // string | The platform message ID
$account_id = 'account_id_example'; // string | Social account ID

try {
    $result = $apiInstance->removeMessageReaction($conversation_id, $message_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->removeMessageReaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| The conversation ID | |
| **message_id** | **string**| The platform message ID | |
| **account_id** | **string**| Social account ID | |

### Return type

[**\Late\Model\UpdateYoutubeDefaultPlaylist200Response**](../Model/UpdateYoutubeDefaultPlaylist200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendInboxMessage()`

```php
sendInboxMessage($conversation_id, $send_inbox_message_request): \Late\Model\SendInboxMessage200Response
```

Send message

Send a message in a conversation. Supports text, attachments, quick replies, buttons, and message tags. Attachment and interactive message support varies by platform.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | The conversation ID (id field from list conversations endpoint). This is the platform-specific conversation identifier, not an internal database ID.
$send_inbox_message_request = new \Late\Model\SendInboxMessageRequest(); // \Late\Model\SendInboxMessageRequest

try {
    $result = $apiInstance->sendInboxMessage($conversation_id, $send_inbox_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendInboxMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| The conversation ID (id field from list conversations endpoint). This is the platform-specific conversation identifier, not an internal database ID. | |
| **send_inbox_message_request** | [**\Late\Model\SendInboxMessageRequest**](../Model/SendInboxMessageRequest.md)|  | |

### Return type

[**\Late\Model\SendInboxMessage200Response**](../Model/SendInboxMessage200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendTypingIndicator()`

```php
sendTypingIndicator($conversation_id, $send_typing_indicator_request): \Late\Model\UpdateYoutubeDefaultPlaylist200Response
```

Send typing indicator

Show a typing indicator in a conversation. Platform support: - Facebook Messenger: Shows \"Page is typing...\" for 20 seconds - Telegram: Shows \"Bot is typing...\" for 5 seconds - All others: Returns 200 but no-op (platform doesn't support it)  Typing indicators are best-effort. The endpoint always returns 200 even if the platform call fails.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | The conversation ID
$send_typing_indicator_request = new \Late\Model\SendTypingIndicatorRequest(); // \Late\Model\SendTypingIndicatorRequest

try {
    $result = $apiInstance->sendTypingIndicator($conversation_id, $send_typing_indicator_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendTypingIndicator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| The conversation ID | |
| **send_typing_indicator_request** | [**\Late\Model\SendTypingIndicatorRequest**](../Model/SendTypingIndicatorRequest.md)|  | |

### Return type

[**\Late\Model\UpdateYoutubeDefaultPlaylist200Response**](../Model/UpdateYoutubeDefaultPlaylist200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInboxConversation()`

```php
updateInboxConversation($conversation_id, $update_inbox_conversation_request): \Late\Model\UpdateInboxConversation200Response
```

Update conversation status

Archive or activate a conversation. Requires accountId in request body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | The conversation ID (id field from list conversations endpoint). This is the platform-specific conversation identifier, not an internal database ID.
$update_inbox_conversation_request = new \Late\Model\UpdateInboxConversationRequest(); // \Late\Model\UpdateInboxConversationRequest

try {
    $result = $apiInstance->updateInboxConversation($conversation_id, $update_inbox_conversation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->updateInboxConversation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| The conversation ID (id field from list conversations endpoint). This is the platform-specific conversation identifier, not an internal database ID. | |
| **update_inbox_conversation_request** | [**\Late\Model\UpdateInboxConversationRequest**](../Model/UpdateInboxConversationRequest.md)|  | |

### Return type

[**\Late\Model\UpdateInboxConversation200Response**](../Model/UpdateInboxConversation200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadMediaDirect()`

```php
uploadMediaDirect($file, $content_type): \Late\Model\UploadMediaDirect200Response
```

Upload media file

Upload a media file using API key authentication and get back a publicly accessible URL. The URL can be used as attachmentUrl when sending inbox messages.  Files are stored in temporary storage and auto-delete after 7 days. Maximum file size is 25MB.  Unlike /v1/media/upload (which uses upload tokens for end-user flows), this endpoint uses standard Bearer token authentication for programmatic use.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Late\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Late\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = '/path/to/file.txt'; // \SplFileObject | The file to upload (max 25MB)
$content_type = 'content_type_example'; // string | Override MIME type (e.g. \\\"image/jpeg\\\"). Auto-detected from file if not provided.

try {
    $result = $apiInstance->uploadMediaDirect($file, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->uploadMediaDirect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| The file to upload (max 25MB) | |
| **content_type** | **string**| Override MIME type (e.g. \\\&quot;image/jpeg\\\&quot;). Auto-detected from file if not provided. | [optional] |

### Return type

[**\Late\Model\UploadMediaDirect200Response**](../Model/UploadMediaDirect200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
