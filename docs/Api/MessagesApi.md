# Zernio\MessagesApi

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
| [**markConversationRead()**](MessagesApi.md#markConversationRead) | **POST** /v1/inbox/conversations/{conversationId}/read | Mark a conversation as read |
| [**removeMessageReaction()**](MessagesApi.md#removeMessageReaction) | **DELETE** /v1/inbox/conversations/{conversationId}/messages/{messageId}/reactions | Remove reaction |
| [**searchInboxConversations()**](MessagesApi.md#searchInboxConversations) | **GET** /v1/inbox/conversations/search | Search conversations |
| [**sendInboxMessage()**](MessagesApi.md#sendInboxMessage) | **POST** /v1/inbox/conversations/{conversationId}/messages | Send message |
| [**sendTypingIndicator()**](MessagesApi.md#sendTypingIndicator) | **POST** /v1/inbox/conversations/{conversationId}/typing | Send typing indicator |
| [**updateInboxConversation()**](MessagesApi.md#updateInboxConversation) | **PUT** /v1/inbox/conversations/{conversationId} | Update conversation status |
| [**uploadMediaDirect()**](MessagesApi.md#uploadMediaDirect) | **POST** /v1/media/upload-direct | Upload media file |


## `addMessageReaction()`

```php
addMessageReaction($conversation_id, $message_id, $add_message_reaction_request): \Zernio\Model\UpdateYoutubeDefaultPlaylist200Response
```

Add reaction

Add an emoji reaction to a message. Platform support: - Telegram: Supports a subset of Unicode emoji reactions - WhatsApp: Supports any standard emoji (one reaction per message per sender) - All others: Returns 400 (not supported)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | The conversation ID
$message_id = 'message_id_example'; // string | The platform message ID to react to
$add_message_reaction_request = new \Zernio\Model\AddMessageReactionRequest(); // \Zernio\Model\AddMessageReactionRequest

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
| **add_message_reaction_request** | [**\Zernio\Model\AddMessageReactionRequest**](../Model/AddMessageReactionRequest.md)|  | |

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

## `createInboxConversation()`

```php
createInboxConversation($create_inbox_conversation_request): \Zernio\Model\CreateInboxConversation201Response
```

Create conversation

Initiate a new direct message conversation with a specified user. If a conversation already exists with the recipient, the message is added to the existing thread.  Supported platforms: X/Twitter, Bluesky, Reddit, and WhatsApp. Other platforms return PLATFORM_NOT_SUPPORTED.  WhatsApp: this is the endpoint for sending an approved template message to a phone number. Provide templateName, templateLanguage, and templateParams (body variable values), with the recipient phone in participantId. A template is required because WhatsApp does not permit freeform messages to open a conversation; a missing template returns TEMPLATE_REQUIRED. Templates with media headers (image, video, document) are handled automatically: Zernio reads the approved template definition and fills the header at send time. Calling this for a number you already have a thread with simply sends the template into that thread, which also makes it the way to re-engage a contact after the 24-hour customer-service window has closed. Once the recipient replies (opening the 24h window), send freeform messages with the send-message endpoint (POST /v1/inbox/conversations/{conversationId}/messages). Template fields are accepted on the JSON body only, not on multipart requests.  DM eligibility (X/Twitter): Before sending, the endpoint checks if the recipient accepts DMs from your account (via the receives_your_dm field). If not, a 422 error with code DM_NOT_ALLOWED is returned. You can skip this check with skipDmCheck: true if you have already verified eligibility.  X API tier requirement: DM write endpoints require X API Pro tier ($5,000/month) or Enterprise access. This applies to BYOK (Bring Your Own Key) users who provide their own X API credentials.  Rate limits (X/Twitter only): X's DM API enforces 200 requests per 15 minutes, 1,000 per 24 hours per connected X account, and 15,000 per 24 hours per X developer app (shared across all DM endpoints). These limits do NOT apply to other platforms. WhatsApp sends are governed by Meta's per-number messaging tiers (unique business-initiated conversations per 24 hours) and per-number throughput instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_inbox_conversation_request = new \Zernio\Model\CreateInboxConversationRequest(); // \Zernio\Model\CreateInboxConversationRequest

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
| **create_inbox_conversation_request** | [**\Zernio\Model\CreateInboxConversationRequest**](../Model/CreateInboxConversationRequest.md)|  | |

### Return type

[**\Zernio\Model\CreateInboxConversation201Response**](../Model/CreateInboxConversation201Response.md)

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
deleteInboxMessage($conversation_id, $message_id, $account_id): \Zernio\Model\UpdateYoutubeDefaultPlaylist200Response
```

Delete message

Delete a message from a conversation. Platform support varies: - Telegram: Full delete (bot's own messages anytime, others if admin) - X/Twitter: Full delete (own DM events only) - Bluesky: Delete for self only (recipient still sees it) - Reddit: Delete from sender's view only - Facebook, Instagram, WhatsApp: Not supported (returns 400)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagesApi(
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

[**\Zernio\Model\UpdateYoutubeDefaultPlaylist200Response**](../Model/UpdateYoutubeDefaultPlaylist200Response.md)

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
editInboxMessage($conversation_id, $message_id, $edit_inbox_message_request): \Zernio\Model\EditInboxMessage200Response
```

Edit message

Edit the text and/or reply markup of a previously sent Telegram message. Only supported for Telegram. Returns 400 for other platforms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | The conversation ID
$message_id = 'message_id_example'; // string | The Telegram message ID to edit
$edit_inbox_message_request = new \Zernio\Model\EditInboxMessageRequest(); // \Zernio\Model\EditInboxMessageRequest

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
| **edit_inbox_message_request** | [**\Zernio\Model\EditInboxMessageRequest**](../Model/EditInboxMessageRequest.md)|  | |

### Return type

[**\Zernio\Model\EditInboxMessage200Response**](../Model/EditInboxMessage200Response.md)

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
getInboxConversation($conversation_id, $account_id): \Zernio\Model\GetInboxConversation200Response
```

Get conversation

Retrieve details and metadata for a specific conversation. Requires accountId query parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagesApi(
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

[**\Zernio\Model\GetInboxConversation200Response**](../Model/GetInboxConversation200Response.md)

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
getInboxConversationMessages($conversation_id, $account_id, $limit, $cursor, $sort_order): \Zernio\Model\GetInboxConversationMessages200Response
```

List messages

Fetch messages for a specific conversation, with cursor-based pagination and ordering control.  Pagination: pass `pagination.nextCursor` from a prior response back as the `cursor` query param to fetch the next page. The cursor is opaque; do not parse or construct it client-side.  Sort order: defaults to `asc` (oldest first, chat style). For the \"show me the latest messages\" pattern, pass `?sortOrder=desc&limit=N`. Twitter, Instagram, Telegram, WhatsApp and Reddit honor the requested order from the local message store. For Facebook and Bluesky, the upstream APIs only return newest-first and have no order parameter — sort order is best-effort and only reverses items within a single page (pages still walk newest→oldest). The response field `sortOrderApplied` tells you what was actually applied.  Reddit threads are paginated client-side because Reddit's API has no per-thread cursor. Very long threads may be upstream-truncated by Reddit's inbox/sent windows (~100 most-recent items each); this is a Reddit platform limitation.  Twitter/X limitation: X's encrypted \"X Chat\" messages are not accessible via the API. Conversations where the other participant uses encrypted X Chat may only show your outgoing messages. See the list conversations endpoint for more details.  This endpoint is read-only and does NOT mark messages as read or send read receipts. To mark a conversation read (and send WhatsApp blue ticks on eligible accounts), call `POST /v1/inbox/conversations/{conversationId}/read`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | The conversation ID (id field from list conversations endpoint). This is the platform-specific conversation identifier, not an internal database ID.
$account_id = 'account_id_example'; // string | Social account ID
$limit = 100; // int | Number of messages to return per page. Default 100, max 100.
$cursor = 'cursor_example'; // string | Opaque pagination cursor. Pass `pagination.nextCursor` from a prior response.
$sort_order = 'asc'; // string | Order of returned messages. Default `asc` (oldest first, chat style). Twitter, Instagram, Telegram, WhatsApp and Reddit honor this order across cursor pages. For Facebook and Bluesky, only intra-page ordering is affected — pages always walk newest→oldest. See `sortOrderApplied` in the response.

try {
    $result = $apiInstance->getInboxConversationMessages($conversation_id, $account_id, $limit, $cursor, $sort_order);
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
| **limit** | **int**| Number of messages to return per page. Default 100, max 100. | [optional] [default to 100] |
| **cursor** | **string**| Opaque pagination cursor. Pass &#x60;pagination.nextCursor&#x60; from a prior response. | [optional] |
| **sort_order** | **string**| Order of returned messages. Default &#x60;asc&#x60; (oldest first, chat style). Twitter, Instagram, Telegram, WhatsApp and Reddit honor this order across cursor pages. For Facebook and Bluesky, only intra-page ordering is affected — pages always walk newest→oldest. See &#x60;sortOrderApplied&#x60; in the response. | [optional] [default to &#39;asc&#39;] |

### Return type

[**\Zernio\Model\GetInboxConversationMessages200Response**](../Model/GetInboxConversationMessages200Response.md)

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
listInboxConversations($profile_id, $platform, $status, $sort_order, $limit, $cursor, $account_id): \Zernio\Model\ListInboxConversations200Response
```

List conversations

Fetch conversations (DMs) from all connected messaging accounts in a single API call. Supports filtering by profile and platform. Results are aggregated and deduplicated. Supported platforms: Facebook, Instagram, Twitter/X, Bluesky, Reddit, Telegram.  Twitter/X limitation: X has replaced traditional DMs with encrypted \"X Chat\" for many accounts. Messages sent or received through encrypted X Chat are not accessible via X's API (the /2/dm_events endpoint only returns legacy unencrypted DMs). This means some Twitter/X conversations may show only outgoing messages or appear empty. This is an X platform limitation that affects all third-party applications. See X's docs on encrypted messaging for more details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagesApi(
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

[**\Zernio\Model\ListInboxConversations200Response**](../Model/ListInboxConversations200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `markConversationRead()`

```php
markConversationRead($conversation_id, $send_typing_indicator_request): \Zernio\Model\MarkConversationRead200Response
```

Mark a conversation as read

Marks all unread incoming messages in the conversation as read.  For WhatsApp, this also sends read receipts (blue ticks) to the contact, EXCEPT on coexistence accounts (where the WhatsApp Business app on the customer's phone owns read state and we never override it).  This is the explicit, human-driven counterpart to `GET .../messages`, which is side-effect-free and does NOT mark anything read. Call this when a user actually views the conversation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | The conversation ID
$send_typing_indicator_request = new \Zernio\Model\SendTypingIndicatorRequest(); // \Zernio\Model\SendTypingIndicatorRequest

try {
    $result = $apiInstance->markConversationRead($conversation_id, $send_typing_indicator_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->markConversationRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **string**| The conversation ID | |
| **send_typing_indicator_request** | [**\Zernio\Model\SendTypingIndicatorRequest**](../Model/SendTypingIndicatorRequest.md)|  | |

### Return type

[**\Zernio\Model\MarkConversationRead200Response**](../Model/MarkConversationRead200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeMessageReaction()`

```php
removeMessageReaction($conversation_id, $message_id, $account_id): \Zernio\Model\UpdateYoutubeDefaultPlaylist200Response
```

Remove reaction

Remove a reaction from a message. Platform support: - Telegram: Send empty reaction array to clear - WhatsApp: Send empty emoji to remove - All others: Returns 400 (not supported)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagesApi(
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

[**\Zernio\Model\UpdateYoutubeDefaultPlaylist200Response**](../Model/UpdateYoutubeDefaultPlaylist200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchInboxConversations()`

```php
searchInboxConversations($query, $direction, $profile_id, $platform, $account_id, $limit, $cursor): \Zernio\Model\SearchInboxConversations200Response
```

Search conversations

Search message text across your conversations and get back the conversations that contain the query, each with up to 3 most-recent matching messages. Useful for finding threads about a topic, or (with direction=outgoing) collecting examples of how you write to customers, for example to teach an AI agent your tone of voice.  Only platforms whose messages are stored by Zernio are searchable: WhatsApp, SMS, Telegram, Facebook and Instagram. Twitter/X, Bluesky and Reddit conversations are fetched live from the platforms and cannot be searched; those accounts are listed in meta.accountsSkipped.  Matching is word-based: case-insensitive and accent-insensitive, exact tokens only (no substrings, no stemming). Quote a phrase to match it exactly.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string | Text to search for in message content
$direction = 'direction_example'; // string | Only match messages sent to you (incoming) or by you (outgoing)
$profile_id = 'profile_id_example'; // string | Filter by profile ID
$platform = 'platform_example'; // string | Filter by platform (searchable platforms only)
$account_id = 'account_id_example'; // string | Filter by specific social account ID
$limit = 20; // int | Maximum number of conversations to return
$cursor = 'cursor_example'; // string | Pagination cursor for next page

try {
    $result = $apiInstance->searchInboxConversations($query, $direction, $profile_id, $platform, $account_id, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->searchInboxConversations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| Text to search for in message content | |
| **direction** | **string**| Only match messages sent to you (incoming) or by you (outgoing) | [optional] |
| **profile_id** | **string**| Filter by profile ID | [optional] |
| **platform** | **string**| Filter by platform (searchable platforms only) | [optional] |
| **account_id** | **string**| Filter by specific social account ID | [optional] |
| **limit** | **int**| Maximum number of conversations to return | [optional] [default to 20] |
| **cursor** | **string**| Pagination cursor for next page | [optional] |

### Return type

[**\Zernio\Model\SearchInboxConversations200Response**](../Model/SearchInboxConversations200Response.md)

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
sendInboxMessage($conversation_id, $send_inbox_message_request): \Zernio\Model\SendInboxMessage200Response
```

Send message

Send a message in a conversation. Supports text, attachments, quick replies, buttons, templates, and message tags. Attachment and interactive message support varies by platform.  WhatsApp template messages: to send an approved template into this conversation (required when the 24-hour customer-service window is closed), use the `template` field with a single element carrying the template reference: `{ \"elements\": [{ \"name\": ..., \"language\": ..., \"components\": [...] }] }`. See the `template` field below for the exact shape. To send a template to a phone number you have no conversation with yet, use the create-conversation endpoint (POST /v1/inbox/conversations) instead.  WhatsApp rich interactive messages (list, CTA URL, Flow, location request) are available via the `interactive` field. Tap events are delivered through the `message.received` webhook with WhatsApp-specific `metadata` fields (`interactiveType`, `interactiveId`, `flowResponseJson`, `flowResponseData`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | The conversation ID (id field from list conversations endpoint). This is the platform-specific conversation identifier, not an internal database ID.
$send_inbox_message_request = new \Zernio\Model\SendInboxMessageRequest(); // \Zernio\Model\SendInboxMessageRequest

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
| **send_inbox_message_request** | [**\Zernio\Model\SendInboxMessageRequest**](../Model/SendInboxMessageRequest.md)|  | |

### Return type

[**\Zernio\Model\SendInboxMessage200Response**](../Model/SendInboxMessage200Response.md)

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
sendTypingIndicator($conversation_id, $send_typing_indicator_request): \Zernio\Model\UpdateYoutubeDefaultPlaylist200Response
```

Send typing indicator

Show a typing indicator in a conversation. Platform support: - Facebook Messenger: Shows \"Page is typing...\" for 20 seconds - Telegram: Shows \"Bot is typing...\" for 5 seconds - WhatsApp: Shows \"typing...\" for up to 25 seconds. Requires a recent inbound message in the conversation (Meta references the inbound message id) and also marks that message as read as a side-effect. - All others: Returns 200 but no-op (platform doesn't support it)  Typing indicators are best-effort. The endpoint always returns 200 even if the platform call fails.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | The conversation ID
$send_typing_indicator_request = new \Zernio\Model\SendTypingIndicatorRequest(); // \Zernio\Model\SendTypingIndicatorRequest

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
| **send_typing_indicator_request** | [**\Zernio\Model\SendTypingIndicatorRequest**](../Model/SendTypingIndicatorRequest.md)|  | |

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

## `updateInboxConversation()`

```php
updateInboxConversation($conversation_id, $update_inbox_conversation_request): \Zernio\Model\UpdateInboxConversation200Response
```

Update conversation status

Archive or activate a conversation. Requires accountId in request body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 'conversation_id_example'; // string | The conversation ID (id field from list conversations endpoint). This is the platform-specific conversation identifier, not an internal database ID.
$update_inbox_conversation_request = new \Zernio\Model\UpdateInboxConversationRequest(); // \Zernio\Model\UpdateInboxConversationRequest

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
| **update_inbox_conversation_request** | [**\Zernio\Model\UpdateInboxConversationRequest**](../Model/UpdateInboxConversationRequest.md)|  | |

### Return type

[**\Zernio\Model\UpdateInboxConversation200Response**](../Model/UpdateInboxConversation200Response.md)

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
uploadMediaDirect($file, $content_type): \Zernio\Model\UploadMediaDirect200Response
```

Upload media file

Upload a media file using API key authentication and get back a publicly accessible URL. The URL can be used as attachmentUrl when sending inbox messages.  Files are stored in temporary storage and auto-delete after 7 days. Maximum file size is 25MB.  Unlike /v1/media/upload (which uses upload tokens for end-user flows), this endpoint uses standard Bearer token authentication for programmatic use.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Zernio\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zernio\Api\MessagesApi(
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

[**\Zernio\Model\UploadMediaDirect200Response**](../Model/UploadMediaDirect200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
